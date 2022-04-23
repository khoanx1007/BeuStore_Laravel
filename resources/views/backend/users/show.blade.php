@extends('backend.layouts.master')
@section('title')
User
@endsection
@section('content-header')
User {{$user -> id}}
@endsection
@section('content')
<h1>Tên: {{$user -> name}}</h1>
<h1>Email: {{$user -> email}}</h1>
@endsection
