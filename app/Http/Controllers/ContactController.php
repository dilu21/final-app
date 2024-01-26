<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Contact;

use App\Models\Admin;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Contact::all();
        $cat = Category::all();
        $post = Admin::all();

        return view('frontpage.contact', compact('posts', 'cat', 'post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontpage.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $post = new Contact();
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->subject = $request->input('subject');
        $post->message = $request->input('message');

        // return $post;

        $post->save();



       return redirect()
       ->route('contact.store')
       ->with('success', 'Thankyou, Post is Submitted!.' );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
