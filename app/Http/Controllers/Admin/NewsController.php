<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        echo "index";
        exit;
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
