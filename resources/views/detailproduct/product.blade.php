@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{ url('/home') }}">
    <button class="btn btn-primary mt-4" type="button"><i class="fa fa-arrow-left " aria-hidden="true"></i></button>
</a>
<a href="{{ url('/detail/productadd') }}">
    <button class="btn btn-success mt-4" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
</a>
@foreach ($products as $item)
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title">
                <h6 class="card-subtitle mb-2 text-muted">{{ $item->category->name }}</h6><hr>
                {{ $item->name }} 
                ( Rp. {{ $item->price }}-, | {{ $item->description }})
            </div>
            <a href="/product/{{ $item->id }}/edit">
                <button class="btn btn-warning mt-2" type="button"><i class="fa fa-edit" aria-hidden="true"></i></button>
            </a>
            <a href="/product/{{ $item->id }}/delete">
                <button class="btn btn-danger mt-2" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </a>
        </div>
    </div>
@endforeach
@endsection