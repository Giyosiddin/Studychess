<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
	
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index()
    {
    	return view('profile.index');
    }

    public function edit()
    {
    	$user = Auth::user();
    	if(request()->isMethod('get')){
	    	return view('profile.edit',compact('user'));
	    }else{
	    	// dd(request());


	    	  request()->validate([
		        'password' => ['required'],
		        'password_confirmation' => ['same:password'],
		        ]);

            // User::find(auth()->user()->id)->update(['password' => Hash::make(request('new_password'))]);
            
	        $data = request()->all();
	        $user->update($data);
	        if(request('password')){
	        	$user->password = Hash::make(request('password'));  
	        }
	        $save = $user->save();
	        if ($save) {
		        return redirect()->back()->with('status', 'Успешно сохранено!');
	        } else {
		        return redirect()->back()->withInput(Input::all())->with('error', 'Has some error!');
	        }
	    }
    }
}
