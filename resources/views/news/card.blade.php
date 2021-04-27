
@extends('layouts.app')
@section('title')
    @parent
    Список новостей
@endsection

@section('content')
    @forelse($news as $id => $item)
        @php
            $url = route('news::card', ['news' => $id])
        @endphp

        <div>
            {{$item['content']}}
        </div>
    @empty
        Новостей нет
    @endforelse
@endsection

