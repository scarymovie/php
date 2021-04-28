
@extends('layouts.app')
@section('title')
    feedback
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{route('feedback')}}" method="post">
                @csrf
                <label class="form-label">Оставьте пожалуйста свой отзыв
                </label>
                <div class="form-group">
                    <input type="text" name="content" class="form-control">
                </div>
                <input type="submit">

            </form>
        </div>
    </div>
@endsection
