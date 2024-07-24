@extends('backend.layouts.app')

@section('styles')
<style>
    .custom-file-input:lang(en) ~ .custom-file-label::after {
        content: "Browse";
    }

    .custom-file-input {
        cursor: pointer;
        opacity: 0;
        position: absolute;
        z-index: -1;
    }

    .custom-file-label {
        border: 1px solid #ced4da;
        border-radius: .25rem;
        padding: .375rem .75rem;
        cursor: pointer;
        position: relative;
        display: inline-block;
        width: 100%;
        height: 3.125rem;
    }

    .custom-file-label::after {
        content: "Choose file";
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        line-height: 2.5rem;
        text-align: center;
        background: #007bff;
        color: #fff;
        border-radius: .25rem;
        border: 1px solid #007bff;
        cursor: pointer;
    }
</style>
@endsection

@section('content')
<div class="container">

    @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>{{Auth::user()->name}} Profile</h1>
    <form action="{{ route('profile.update')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}" required>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}"  required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
