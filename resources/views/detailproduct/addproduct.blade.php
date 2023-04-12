@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('/product') }}">
        <button class="btn btn-primary mt-4" type="button"><i class="fa fa-arrow-left " aria-hidden="true"></i></button>
    </a><hr>
    <div class="card mt-3">
        <div class="card-body">
    <form action="{{ url('/product') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name Product</label>
            <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="exampleInputEmail1"
                aria-describedby="emailHelp" name="product_name">
            @error('product_name')
                <div class="invalid-feedback">
                    Name Product cannot be empty
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <input type="text" class="form-control @error('product_description') is-invalid @enderror"
                id="exampleInputPassword1" name="product_description">
            @error('product_description')
                <div class="invalid-feedback">
                    Description cannot be empty
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="text" class="form-control @error('product_price') is-invalid @enderror"
                id="exampleInputPassword1" name="product_price">
            @error('product_price')
                <div class="invalid-feedback">
                    Price cannot be empty
                </div>
            @enderror
        </div>
        <select class="form-select @error('category_id') is-invalid @enderror" aria-label="Default select example"
            name="category_id">
            <option selected>Choose Category ID</option>
            @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->id }} - {{ $item->name }}</option>
            @endforeach
        </select>
        @error('category_id')
            <div class="invalid-feedback">
                Choose One Category ID
            </div>
        @enderror
        <button type="submit" class="btn btn-primary mt-3">Add</button>
    </form>
@endsection