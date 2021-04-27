<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CategoryDBcontroller extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
return view('admin.news.showNews', ['categories'=>$categories]);
    }
}
