@extends('layouts.main')

@section('title')
    вывод категории
@endsection

@section('content')
@foreach($categories as $category)
    {{$category->title}}
@endforeach
@endsection


