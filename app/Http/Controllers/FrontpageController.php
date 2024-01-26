<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

use App\Models\Category;

use App\Models\Contact;


class FrontpageController extends Controller
{
    public function home()
    {
        $singlepost = Admin::with('categoryall')->take(1)->get();

        $posts = Admin::with('categoryall')->skip(5)->take(4)->get();

        $news = Admin::orderBy('created_at', 'desc')->get();

        $local = Admin::with('categoryall')->where('categories_id', '5')->get();

        $sports = Admin::with('categoryall')->where('categories_id', '1')->get();

        $entertainment = Admin::where('categories_id', '3')->get();
        
        $cat = Category::all();

        $post = Admin::with('category')->get();

        $mostViewedPosts = Admin::orderBy('count', 'desc')->take(3)->get();

        $lastpost = Admin::orderBy('count', 'desc')->take(9)->get();

        //return $local;



    //    return $single;

        //return $singlepost;

        return view('frontpage.index', compact('singlepost', 'posts', 'news', 'local', 'sports', 'entertainment', 'cat', 'post', 'mostViewedPosts', 'lastpost'));
        
    }

    public function show(string $id)
    {
        $news = Admin::skip(1)->take(4)->get();

        $post = Admin::with('category')->find($id);

        $cat = Category::all();

        $view = Admin::find($id);
        if($view){
            $view->increment('count');
        }

        $mostViewedPosts = Admin::orderBy('count', 'desc')->take(3)->get();

        $lastpost = Admin::orderBy('count', 'desc')->take(9)->get();


        return view('frontpage.viewdetail', compact('post', 'news', 'cat', 'view','mostViewedPosts', 'lastpost'));
    }

    public function blogcategory(string $id)
    {

        $post = Category::find($id);

        $allpost = Admin::where('categories_id', $id)->get();
        //return $allpost;

        $cat = Category::all();

        $mostViewedPosts = Admin::orderBy('count', 'desc')->take(3)->get();

        $lastpost = Admin::orderBy('count', 'desc')->take(9)->get();

        return view('frontpage.category', compact('post', 'allpost', 'cat', 'mostViewedPosts', 'lastpost'));
    }

    public function blog()  
    {

        $title = Admin::skip(7)->take(4)->get();

        $news = Admin::skip(5)->take(4)->get();

        $cat = Category::all();

        $mostViewedPosts = Admin::orderBy('count', 'desc')->take(3)->get();

        $lastpost = Admin::orderBy('count', 'desc')->take(9)->get();


        return view('frontpage.blog', compact('title', 'news', 'cat', 'mostViewedPosts', 'lastpost'));
    }  
    
    public function contact()
    {
        $mostViewedPosts = Admin::orderBy('count', 'desc')->take(3)->get();

        $cat = Category::all();

        $lastpost = Admin::orderBy('count', 'desc')->take(9)->get();
    
        return view('frontpage.contact', compact('mostViewedPosts', 'cat', 'lastpost'));
    }
}
