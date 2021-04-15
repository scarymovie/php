<?php


namespace App\Http\Controllers;


use App\Models\News;
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
        return view('news.index', ['categories' => $this->categories]);
    }

    public function list($categoryId)
    {
        $news = (new News())->getByCategoryId($categoryId);
        return view('news.list', ['news' => $news]);
    }



    public function card($cardId){
        $card = (new News())->getByCardId($cardId);
        return view('news.card',['news'=>$card]);
    }

}
