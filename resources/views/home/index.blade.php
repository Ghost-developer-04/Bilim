@extends('layouts.app')
@section('title') e-Education @endsection
@section('main')
    @include('home.index.splide')
    @include('home.index.courses')
    @include('home.index.teachers')
@endsection