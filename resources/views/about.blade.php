@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'О блоге')
@section('header', 'О блоге')
<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')

    <p>Эксперименты с Ларавелем на Хекслете</p>
    @foreach ($team as $tt)
        <p> {{ $tt['name'] }} - {{ $tt['position'] }}</p>
    @endforeach
@endsection


