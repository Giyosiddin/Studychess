<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\OrderItem;
use App\lesson;
use App\Course;
use App\Order;

class ShopController extends Controller
{
    
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }


    public function checkout()
    {
        $order = '';
        $items = [];
        if(Auth::user()){
            $user = Auth::user()->id;
            // dd($user);
            $order = Order::where('user_id',$user)->whereNull('status')->first();
            // dd($order);
            if(is_null($order)){
                return redirect()->route('all-courses');
            }
            $items_a = $order->items()->select('item_id','item_type')->get();
            // $ids = $items_a->pluck('item_id');
            // $ids = $items_a->pluck('item_id');
            // dd($ids);
            foreach($items_a as $item){
                // dd($item['item_type']);
                if($item['item_type'] == 'lesson'){
                    $items[] = Lesson::find($item['item_id'])->toArray();
                }else{
                    $items[] = Course::find($item['item_id'])->toArray();
                }
            }
        }
            // dd($items);
        $cart = session()->get('cart');
         // dd($cart);
        return view('pages.checkout', compact('order','items'));
    }


	public function addToCart($type, $id)
	{
		if($type == 'course'){
			$product = Course::where('id', $id)->first();

			if(!$product) { 
                abort(404); 
            }
		}else{
			$product = Lesson::where('id', $id)->first();

			if(!$product) { 
                abort(404); 
            }
		}
		$orderId = session('orderId');
    	// $session = session();
    	// dd($session);
        if (Auth::user()) {
            $user_id = Auth::user()->id;
                if(is_null($orderId)){

                    $order = Order::create(['user_id' => $user_id]);
                    session(['orderId' => $order->id]);
                }else{
                    $order = Order::find($orderId);
                }
                $item = OrderItem::where([['order_id', $order->id],['item_type', $type],['item_id', $id]])->first();
                // dd($item);                
                if(isset($item))
                {
                   return redirect()->back()->with('exists','Bu darslik sizning korzinkangizda bor');
                }else{
                
                    $orderItem = OrderItem::create([
                    'order_id' => $order->id,
                    'item_type' => $type,
                    'item_id' => $id
                    ]);
                    // $order->products()->attach($id);
                // dd($orderItem);
                }
                session()->flash('success','Товар добавлен!');
                return redirect()->route('checkout');
        }else{
           $cart = session()->get('cart');

           if(!$cart){
                $cart = [

                    $id => [
                        "name" => $product->title,
                        "item_type" => $type,
                        "item_id" => $product->id,
                        "price" => $product->price

                    ]

                ];

                session()->put('cart', $cart);
                // dd($cart);
                return redirect()->route('checkout')->with('success', 'Korzinkaga qoshildi!');
           }

           if(isset($cart[$id])){
                return redirect()->back()->with('exists','Bu darslik sizning korzinkangizda bor');
           }
        }
          return redirect()->route('checkout')->with('success', 'Korzinkaga qoshildi!');
	}

    public function removeItem($order_id, $type, $item_id)
    {
        $order = Order::find($order_id);
        $OrderItem = OrderItem::where('item_type', $type)->where('item_id', $item_id)->delete();
        if(!isset($order->items[0])){
            // dd($order->items);
            $order->delete();
        }

        if(!$OrderItem){
            return redirect()->back()->with(['error' => 'Error']);
        }else{
            return redirect()->back()->with(['success' => 'Deleted']);
        }

    }
}
