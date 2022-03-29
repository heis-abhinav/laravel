<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use Illuminate\Support\Facades\Auth;


class ItemsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_item_page(){
        return view('items.add');
    }

    public function store(Request $request){

        if($request->avatar){

            $image_name = time().'.' . explode('/', explode(':', substr($request->avatar, 0, strpos($request->avatar, ';')))[1])[1];
            \Image::make($request->avatar)->save(public_path('img/').$image_name);
            $request->merge(['avatar' => $image_name]);
           
        }

        $item = new Items;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->image = $image_name;
        $item->tags = $request->tags;
        $item->quantity = $request->quantity;
        $item->tax = $request->tax;
        $item->added_by = auth()->id();
        $item->save();
        return response()->json(
            [
                'success' => true,
                'message' => 'Item registered successfully'
            ]
        );
    }
}
