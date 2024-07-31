<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\categeroy;
use App\Models\events;
// use Image;
use Intervention\Image\Facades\Image;

class admincontroller extends Controller
{
    public function adminlogin()
    {
        return view('admin.login');
    }

    // public function login(Request $request)
    // {
    //     // echo 'hello';
    //     // exit ();
    //     // dd($request->all());
    //     $admins = admin::where('email', $request->email)->first();
    //     dd($admins);
    //     if ($admins && $admins->password === $request->password) 
    //     dd($admins);
    //     {
    //         // dd($admins);
    //         return view('admin.dashbord');
    //     }
    //     return redirect('adminlogin')->withErrors('error');
    // }

    public function dashboard()
    {
        return view('admin.dashbord');
    }

    public function category()
    {
        $categeroy = categeroy::all();
        return view('admin.category', ['categeroy' => $categeroy]);
        // return view('admin.category');
    }

    public function add_categeroy(){
        return view('admin.add_categeroy');
    }
    

    public function get_categeroy(Request $request)
    {
       
        // Initialize an empty array to store image filenames
        $filenames = [];
    
        // Process each uploaded image
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                // Store each image
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $filenames[] = $imageName; // Store the filename in the array
            }
        }
    
        // Create a new category instance
        $category = new categeroy();
        $category->name = $request->name;
        $category->image = implode(',', $filenames); // Store filenames as comma-separated string
        $category->save(); // Save the category
    
        // Retrieve all categories
        $categeroy = categeroy::all();
    
        // Return view with updated category list
        return view('admin.category', ['categeroy' => $categeroy]);
    }
    


    public function delete_categeroy($id)
    {
        $categeroy = categeroy::find($id);
        $categeroy->delete();
        $categeroy = categeroy::all();
        return view('admin.category', ['categeroy' => $categeroy]);
    }

    public function c_edit($id)
    {
        $categeroy = categeroy::find($id);
        return view('admin.update_categeroy', ['categeroy' => $categeroy]);
    }
    
   
    
    public function  edit_c(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate each image file
        // ]);
    
        // Initialize an empty array to store image filenames
        $filenames = [];
    
        // Process each uploaded image
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                // Store each image
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $filenames[] = $imageName; // Store the filename in the array
            }
        }

        $category = categeroy::find($id);
        $category->name = $request->name;
        $category->image = implode(',', $filenames); 
        $category->update();
        // Here, you can return a success message
        $categeroy = categeroy::all();
        return view('admin.category', ['categeroy' => $categeroy]);
    }

    public function event()
    {
        $event = events::with('category')->get();
        $categories = categeroy::all();

        // $events = Event::with('category')->get();
        // $categories = Category::all();

   

        return view('admin.event', ['event' => $event, 'categories' => $categories]);
    }

    public function add_event()
    {

        $categeroy = categeroy::all();
        return view('admin.add_event', ['categeroy' => $categeroy]);
    }

    public function get_event(Request $request)
    {
        // dd($request->all());
        $filenames = [];
    
        // Process each uploaded image
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                // Store each image
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $filenames[] = $imageName; // Store the filename in the array
            }
        }

        $event = new events();
        $event->name = $request->name;
        $event->image = implode(',', $filenames);
        $event->time_duration = $request->time_duration;
        $event->price = $request->price;
        $event->description = $request->description;
        $event->place = $request->place;
        $event->terms = $request->terms;
        $event->offer = $request->offer;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->category_id = $request->categeroy_id;
        $event->save();
        // dd($event->terms);
        $event = events::with('category')->get();
        $categories = categeroy::all();
        return view('admin.event', ['event' => $event, 'categories' => $categories]);

        // return view('admin.event');
    }

    public function delete_event($id)
    {
        $event = events::find($id);
        $event->delete();
        $event = events::all();
        return view('admin.event', ['event' => $event]);
    }

    public function e_edit($id)
    {
        $event = events::find($id);
        $categeroy = categeroy::all();
        return view('admin.update_event', ['event' => $event] , ['categeroy' => $categeroy]);
    }

    // public function  edit_e(Request $request, $id)
    // {
    //     dd($request->all());
    //     $filenames = [];
    
    //     // Process each uploaded image
    //     if ($request->hasFile('image')) {
    //         foreach ($request->file('image') as $image) {
    //             // Store each image
    //             $imageName = time() . '_' . $image->getClientOriginalName();
    //             $image->move(public_path('images'), $imageName);
    //             $filenames[] = $imageName; // Store the filename in the array
    //         }
    //     }
    //     // DD($request->all());
    //     $event = events::find($id);
    //     $event->name = $request->name;
    //     $event->category_id = $request->categeroy_id;
    //     $event->image = implode(',', $filenames);
    //     $event->date = $request->date;
    //     $event->time = $request->time;
    //     $event->time_duration = $request->time_duration;
    //     $event->price = $request->price;
    //     $event->description = $request->description;
    //     $event->place = $request->place;
    //     $event->terms = $request->terms;
    //     $event->offer = $request->offer;
    //     $event->update();
  
        // $event = events::all();
        // $categeroy = categeroy::all();
        // return view('admin.event', ['event' => $event] , ['categeroy' => $categeroy]);
        // // dd($request->all());
   
    // }

    public function edit_e(Request $request, $id)
    {
        $filenames = [];
    
        // Process each uploaded image
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                // Store each image
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $filenames[] = $imageName; // Store the filename in the array
            }
        }
    
        // Find the event by ID
        $event = events::find($id);
    
        // Update event details
        $event->name = $request->name;
        $event->category_id = $request->categeroy_id;
        
        // Update image only if new images are uploaded
        if (!empty($filenames)) {
            $event->image = implode(',', $filenames);
        }
    
        $event->date = $request->date;
        $event->time = $request->time;
        $event->time_duration = $request->time_duration;
        $event->price = $request->price;
        
        // Update description only if a new description is provided
        if ($request->filled('description')) {
            $event->description = $request->description;
        }
    
        // Update terms only if new terms are provided
        if ($request->filled('terms')) {
            $event->terms = $request->terms;
        }
    
        $event->offer = $request->offer;
        $event->update();
    
        $event = events::all();
        $categeroy = categeroy::all();
        return view('admin.event', ['event' => $event] , ['categeroy' => $categeroy]);
        // dd($request->all());
    }
    

}