@extends('layouts.app')

@section('content')

@foreach($categories as $id => $name)

    @php
        $url = route('news::list', ['categoryId' => $id])
    @endphp

    <ul>
        <li><a href="{{$url}}">{{$name}}</a></li>
    </ul>



@endforeach
@endsection
