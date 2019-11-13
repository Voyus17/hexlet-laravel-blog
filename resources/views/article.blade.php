@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'Статьи')
@section('header', 'Статьи')
<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
    <h2>{{ $article->name }}</h2>
    <p>{{ $article->body }}</p>
@endsection


