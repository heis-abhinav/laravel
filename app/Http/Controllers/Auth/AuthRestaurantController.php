<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class AuthRestaurantController extends Controller
{
    public function index(){
        return view(auth.loginrestaurant);
    }

    public function restaurantLogin(Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=> 'required']);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('dashboard')->withSuccess('Signed In');
        }

        return redirect('login')->withSuccess('Login details not valid');
    }

    public function registerRestaurant(){
        return view(auth.registerRestaurant);
    }

    public function restaurantRegistration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'address'=> 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode'=> 'required',
            'type' => 'required']);
        $data = $request->all();
        $check = $this->create($data);
        return redirect('dashboard')->withSuccess('You have signed in');
    }

    public function create(array $data){
        return Restaurant::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=>Hash::make($data['password']),
            'address'=> $data['address'],
            'city' => $data['city'],
            'state'=> $data['state'],
            'pincode'=> $data['pincode'],
            'type'=>$data['type']
        ]);
    }

    public function dashboard(){
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect('login')->withSuccess('You are not allowed to access');
    }

    public function signOut(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
