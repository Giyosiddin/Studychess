<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\lesson;
use App\Order;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{	
	public function addToCart($type, $id)
	{
		if($type == 'course'){
			$product = Course::where('id', $id)->first();	
			if(!$product) { abort(404); }
		}else{
			$product = Lesson::where('id', $id)->first();
			if(!$product) { abort(404); }
		}
		$orderId = session('orderId');
    	// $session = session();
    	// dd($session);
        if (Auth::user()) {
            $user_id = Auth::user()->id;
        }else{
            $user_id = 0;
        }
        // dd($user_id);
    	if(is_null($orderId)){

    		$order = Order::create(['user_id' => $user_id]);
    		session(['orderId' => $order->id]);
    	}else{
    		$order = Order::find($orderId);
    	}
    	if($order->products->contains($id))
    	{
    		$pivotRow = $order->products()->where('product_id',$id)->first()->pivot;
    		$pivotRow->qty++;
    		$pivotRow->update();
    		// dd($pivotRow);
    	}else{
    		$order->products()->attach($id);
    	}

    	session()->flash('success','Товар добавлен!');
    	return redirect()->route('basket',$locale);
			dd($product);
	}


}
