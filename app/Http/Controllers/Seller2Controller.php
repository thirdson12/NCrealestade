<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Seller2Controller extends Controller
{



    public function create() {
        return view('Seller2');
      }

      public function store(Request $request) {
        // validate form input
        $this->validate($request, [
            'price' => 'required',
            'address' => 'required',
            'bedrooms' => 'required',
            'bathrooms' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'category' => 'required',
            //'subcategory' => 'required'
        ]);

        $image = $request->file('image')->store('public/files');

        Property::create([
          'price' => $request->price,
          'address' => $request->address,
          'bedrooms' => $request->bedrooms,
          'bathrooms' => $request->bathrooms,
          'image' => $image,
          'category_id' => $request->category,
          //'subcategory_id' => $request->subcategory
        ]);

        return redirect()->back()->with('message', 'Property created successfully');
      }
}
