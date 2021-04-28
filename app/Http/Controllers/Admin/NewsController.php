<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use DB;
use phpDocumentor\Reflection\DocBlock\Description;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at', 'DESC')->get();
        return view('admin.news.index', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
            //DB::table('categories')->orderBy('created_at')->get();
        return view('admin.news.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News();
        $news->title=$request->title;
        $news->description=$request->description;
        $news->category_id=$request->category_id;
        $news->save();

        return redirect()->back()->withSuccess('Новость была успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $categories = Category::orderBy('created_at','DESC')->get();
        return view('admin.news.edit', [
           'categories' => $categories,
            'news' => $news
        ]);
    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Models\News  $post
//     * @return \Illuminate\Http\Response
//     */
    public function update(Request $request, News $news)
    {
        $news->title=$request->title;
        $news->description=$request->description;
        $news->category_id=$request->category_id;
        $news->save();

        return redirect()->back()->withSuccess('Новость была успешно изменена');
    }

//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Models\News  $post
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(News $post)
//    {
//        //
//    }
}
