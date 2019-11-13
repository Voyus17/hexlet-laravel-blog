@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'Статьи')
@section('header', 'Статьи')
<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')

    ----------------------
    @foreach ($articles as $art)
        <h4> <a href="/articles/{{ $art->id }}">{{ $art->name }}</a>  </h4>
        <p>{{Str::limit($art->body, 10) }}</p>
        -------------------------
    @endforeach
    {{ $articles->links() }}

@endsection


