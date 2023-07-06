@extends('layout.app')

@section('content')
<h1>You are on the Packages Page</h1>

@if(auth()->check())
<div>
    Para lang sa mga nakalogin
</div>
@endif
@endsection

@section('title')
    Packages Page
@endsection