@extends('backend.layouts.app')

@section('content')
    <div class="container">
        <h1>Welcome, <span style="color:red;">{{ Auth::user()->name }}! </span></h1>
        <p>Here you can manage your categories, products, orders, users, and stuff.</p>
    </div>
@endsection
