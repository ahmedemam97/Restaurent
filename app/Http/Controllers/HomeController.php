<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Food;
use App\Models\User; 
use App\Models\Foodchef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $data = Food::all();   //To display the food table on an admin page

        $data2 = Foodchef::all();
        return view('home', compact('data','data2'));
    }
    
    public function redirects(){
        $data = Food::all();
        $data2 = Foodchef::all();

        $usertype = Auth::user()->usertype;

        if($usertype == '1')
        {
            return view('admin.adminhome');
        }
        else
        {

            return view('home', compact([$data=>'data', $data2=>'data2']));
        }
    }

    public function addcart(Request $request,$id){
           
        if(Auth::id()){
            $user_id = Auth::id();
            
            $foodid = $id;

            $quantity = $request->quantity;

            $cart = new Cart;

            $cart->user_id = $user_id;
            $cart->food_id = $foodid;
            $cart->quantity = $quantity;
            $cart->save();

            return redirect()->back();
        }
        else
        {
            return redirect('/login');
        }
    }

    public function showcart(Request $request,$id)
    {
        return view('/showcart');
    }
}
