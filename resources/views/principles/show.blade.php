<!-- Stored in resources/views/parameters/show.blade.php -->

@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <h2>{{ $principles->title }}</h2>
@endsection