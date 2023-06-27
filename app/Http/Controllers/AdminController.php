<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

use App\Models\Category;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Admin::all();

        return view('admin.index', ['admin' => $posts]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $posts = Category::all();
        return view('admin.create', ['category' => $posts]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'author' => 'required',
            'description' => 'required',
            'caption' => 'required',
            'category' => 'required',
        ]);

        $post = new Admin();
        $post->title = $request->input('title');
        $post->subtitle = $request->input('subtitle');
        $post->author = $request->input('author');
        $post->description = $request->input('description');
        $post->caption = $request->input('caption');
        $post->categories_id = $request->input('category');

        $photo_name="";

        if ($request->hasFile('image')) {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $image_photo = $request->image;
            // dd($image_photo);
            $photo_name = time() . '_' . $request->file('image')->getClientOriginalName();
            // $image_photo->storeAs('public/images', $photo_name);
            $request->image->move(public_path('images'), $photo_name);
        }
        $post->image = $photo_name;

        $post->save();



       return redirect()
       ->route('admin.index')
       ->with('success', 'Thankyou, Post is Submitted!.' );


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Admin::find($id);
        return view('admin.view', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoryall = Category::all();

        $post = Admin::with('category')->find($id);
        //return $post;
        return view('admin.edit', compact('post', 'categoryall'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Admin::find($id);
        if (!$post){
          return redirect()
          ->route('admin.index')
          ->with('error', 'There are some error' );
  
        }else{
          if( $post->update($request->all()) )
          {
              //$photo_name="";  
              if ($request->hasFile('image')) {
                  $this->validate($request, [
                      'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                  ]);
                  $image_photo = $request->image;
                  // dd($image_photo);
                  $photo_name = time() . '_' . $request->file('image')->getClientOriginalName();
                  // $image_photo->storeAs('public/images', $photo_name);
                  $request->image->move(public_path('images'), $photo_name);
                  $post->image = $photo_name;
                }



                $post->save();
    
                return redirect()
                ->route('admin.index')
                ->with('success', 'Data updated successfully.' );
            } else{
                return redirect()
                ->route('admin.index')
                ->with('error', 'Data updation failed.' );
            }
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Admin::find($id);
        if(!$post){
            return redirect() ->route('admin.index');

        }
        if($post->delete()){
            return redirect()
            ->route('admin.index')
            ->with('success', 'Data deleted successfully.' );
         }else{
            return redirect()
            ->route('admin.index')
            ->with('error', 'Data delete failed.' );
        }
    }
}
