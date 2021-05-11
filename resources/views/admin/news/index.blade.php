@extends('layouts.Admin.admin')

@section('title', 'Все новости')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все новости</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card">
                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                <tr>
                                    <th style="width: 5%">
                                        ID
                                    </th>
                                    <th style="width: 30%">
                                        Заголовок
                                    </th>
                                    <th style="width: 30%">
                                        Категория
                                    </th>
                                    <th style="width: 30%">
                                        Дата добавления
                                    </th>
                                    <th style="width: 30%">
                                        Описание
                                    </th>
                                    <th style="width: 20%">
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $news_item)
                                    <tr>
                                        <th>
                                            {{$news_item->id}}
                                        </th>

                                        <th>
                                            {{$news_item->title}}
                                        </th>
                                        <th>
                                            {{$news_item->category->name}}
                                        </th>
                                        <th>
                                            {{$news_item->created_at}}
                                        </th>
                                        <th>
                                            {{$news_item->description}}
                                        </th>


                                        <td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="{{route('news.edit',$news_item->id)}}">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Редактировать
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Удалить
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
