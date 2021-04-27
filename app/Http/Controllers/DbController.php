<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class DbController extends Controller
{
    public function index()
    {
//        $sql = "
//            CREATE TABLE test (
//                id int PRIMARY KEY AUTO_INCREMENT,
//                content varchar (50)
//            )
//        ";
//        dd(DB::unprepared($sql));

//        $sql = "INSERT INTO test (content) VALUES (:content)";
//        $result = DB::insert($sql,[':content'=>'test']);
//        dd($result);

        $sql = "SELECT * FROM categories";
        $result = DB::select($sql);
        dd($result);
    }

}
