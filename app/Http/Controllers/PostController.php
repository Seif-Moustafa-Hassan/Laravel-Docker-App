<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::select("select * from posts");

        return view("index" , compact("posts"));
    }

    public function create()
    {
        return view("create");
    }

    public function store(Request $request)
    {
        $data = $request->except("_token");

        DB::table('posts')->insert($data);

        return redirect()->route("index");
    }
}
