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

        return view('newsOld.index', ['categories' => $this->categories]);
    }

    public function list(News $news,$categoryId)
    {

        $result = $news->getByCategoryId($categoryId);

        foreach ($result as $item){
            $item->category;
        }
        return view('newsOld.list', ['newsOld' => $news->getByCategoryId($categoryId)]);
    }



    public function card(News $news){
//        $newsOld = News::find($newsOld);
        dd($news->category);

        echo $news['title'];
        exit;

    }

    public function feedback(){

        return view('newsOld.feedback');
    }
}
