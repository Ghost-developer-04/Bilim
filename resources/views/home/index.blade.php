@extends('layouts.app')
@section('title') e-Education @endsection
@section('main')
    <img src="{{ asset('img/img-1-block.jpg') }}" class="img-fluid">
    @include('home.index.courses')
    @include('home.index.teachers')
    @endforeach
@endsection