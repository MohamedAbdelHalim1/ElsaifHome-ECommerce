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
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Category</li>
        </ol>
    </nav>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Add Category</h1>
    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" required>
        </div>
        <div class="form-group">
            <label for="photo">Category Photo</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="photo" name="photo" accept="image/*">
                <label class="custom-file-label" for="photo">Choose file</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save Category</button>
    </form>
</div>
@endsection
