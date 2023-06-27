<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Category::all();
        return view('category.index', ['category' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $post = new Category();
        $post->title = $request->input('title');


        $post->save();



       return redirect()
       ->route('category.index')
       ->with('success', 'Thankyou, Post is Submitted!.' );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Category::find($id);
        return view('category.view', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Category::find($id);
        return view('category.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Category::find($id);
        if (!$post){
          return redirect()
          ->route('category.index')
          ->with('error', 'There are some error' );
  
        }else{
          if( $post->update($request->all()) )
          {
            $post->save();
    
                return redirect()
                ->route('category.index')
                ->with('success', 'Data updated successfully.' );
            } else{
                return redirect()
                ->route('category.index')
                ->with('error', 'Data updation failed.' );
            }
    }
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Category::find($id);
        if(!$post){
            return redirect() ->route('category.index');

        }
        if($post->delete()){
            return redirect()
            ->route('category.index')
            ->with('success', 'Data deleted successfully.' );
         }else{
            return redirect()
            ->route('category.index')
            ->with('error', 'Data delete failed.' );
        }
    }
}
