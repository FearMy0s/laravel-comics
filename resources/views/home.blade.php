@extends('layouts.base')

@section('page-title')
    Home Page
@endsection
@section('page-content')
    <section>
    <div class="container">
        <ul class= "books-container">
            @foreach($comics as $comics)
                <li class="books">
                    <img src="{{$comics['thumb']}}" alt="">
                </li>
            @endforeach
        </ul>
    </div>
    </section>
@endsection