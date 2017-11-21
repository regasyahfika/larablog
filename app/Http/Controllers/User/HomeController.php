<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\User\Kategori;
use App\Model\User\Posting;
use App\Model\User\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
    {
    	$posts = Posting::where('status',1)->orderBy('created_at','desc')->paginate(3);
    	// $posting = Posting::where('status', 1)->orderBy('created_at','desc')->paginate(3);
    	// $kategori = Kategori::all();
    	return view('user.blog', compact('posts'));
    }

    public function tag(Tag $tag)
    {
        $posts = $tag->posts();
        return view('user.blog',compact('posts'));
    }

    public function kategori(Kategori $kategori)
    {
        $posts = $kategori->posts();;
        return view('user.blog',compact('posts'));
    }
}
