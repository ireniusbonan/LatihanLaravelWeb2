<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resouce
     * 
     * @return View
     */
    public function index(): View
    {
        //Kirim data post ke view
        return view('posts.index');
    }
}