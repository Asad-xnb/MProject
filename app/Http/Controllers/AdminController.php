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

        $foods = Food::all();
        return view('admin', compact('foods'));
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

    public function deleteFood($id)
    {
        if (Auth::user()->email != 'admin@admin.com') {
            return redirect('/');
        }
        Food::destroy($id);
        return redirect('/admin')->with('success', 'Food has been deleted');
    }

    public function editFood($id)
    {
        if (Auth::user()->email != 'admin@admin.com') {
            return redirect('/');
        }
        $food = Food::find($id);
        return view('admin-update-food', compact('food'));
    }

    public function updateFood(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'category' => 'required'
        ]);
        if (Auth::user()->email != 'admin@admin.com') {
            return redirect('/');
        }
        $food = Food::find($request->id);
        $food->name = $request->name;
        $food->price = $request->price;
        $food->description = $request->description;
        $food->category = $request->category;
        if ($request->image) {
            $imageName = time().'.'.$request->image->extension();  
            $food->image = $imageName;
            $request->image->move(public_path('images'), $imageName);
        }
        $food->save();
        return redirect('/admin')->with('success', 'Food has been updated');
    }
}
