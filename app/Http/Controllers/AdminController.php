<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Food;

class AdminController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->email != 'admin@admin.com') {
            return redirect('/');
        }
        return view('admin');
    }

    public function addFood()
    {
        if (Auth::user()->email != 'admin@admin.com') {
            return redirect('/');
        }
        return view('admin-add-food');
    }

    public function createFood(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'image' => 'required',
            'category' => 'required'
        ]);
        if (Auth::user()->email != 'admin@admin.com') {
            return redirect('/');
        }
        $imageName = time().'.'.$request->image->extension();  
        Food::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imageName,
            'category' => $request->category
        ]);
        $request->image->move(public_path('images'), $imageName);

        return redirect('/admin/add-food')->with('success', 'Food has been added');
    }

}
