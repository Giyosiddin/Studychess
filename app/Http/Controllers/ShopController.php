<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\lesson;
use App\Order;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{

    public function cart()
    {
        $cart = session()->get('cart');
         // dd($cart);
        return view('pages.cart');
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
                if($order->products->contains($id))
                {
                   return redirect()->back()->with('exists','Bu darslik sizning korzinkangizda bor');
                }else{
                    $order->products()->attach($id);
                }

                session()->flash('success','Товар добавлен!');
                return redirect()->route('basket',$locale);
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
                dd($cart);
                // return redirect()->back()->with('success', 'Korzinkaga qoshildi!');
           }

           if(isset($cart[$id])){
                return redirect()->back()->with('exists','Bu darslik sizning korzinkangizda bor');
           }
        }
            dd($cart);
	}


}
