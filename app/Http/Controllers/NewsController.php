<?php


namespace App\Http\Controllers;


use App\Models\News;
use App\Models\NewsOld;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NewsController extends Controller
{
    private $categories = [
        1 => 'Здоровье',
        2 => 'ИТ',
        3 => 'Спорт'
    ];

    public function index()
    {
        $data  = [
            ''
        ];

        $result = News::all();

        return view('news.index', ['categories' => $this->categories]);
    }

    public function list(News $news,$categoryId)
    {

        $result = $news->getByCategoryId($categoryId);

        foreach ($result as $item){
            $item->category;
        }
        return view('news.list', ['news' => $news->getByCategoryId($categoryId)]);
    }



    public function card(News $news){
//        $news = News::find($news);
        dd($news->category);

        echo $news['title'];
        exit;

    }

    public function feedback(){

        return view('news.feedback');
    }
}
