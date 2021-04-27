<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->count();
        $posts = News::count();
        return view('admin.home.index', [
            'posts' =>$posts,
            'categories' => $categories
        ]);
    }

    public function create(Request $request)
    {
        return response('admin.news.create');
    }

    public function save()
    {
        return redirect()->route('admin::news::create');
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function show(){

    }
}
