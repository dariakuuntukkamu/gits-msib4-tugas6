@extends('layouts.app')

@section('content')
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row ">
        <div class="offset-lg-2 col-lg-8">
            <div class="title-01 title-01--11 text-center">
                <h2 class="title__heading">
                    <span>Welcome To</span>
                    <strong class="hero-section__words">
                        <span class="title__effect is-visible">CAFE</span>
                        <span class="title__effect">CONTENT</span>
                    </strong>
                </h2>
                <div class="title__description">cafe that provides food and drinks with new variants. With the interior design of the room from the contemporary outdoor and indoor versions. Which makes your eyes open again and to relieve fatigue for a moment</div>
                <br>
                <a href="{{url('product')}}"><button type="button" class="btn btn-outline-dark" >Let's See Product</button>
                <a href="{{url('category')}}"><button type="button" class="btn btn-outline-dark" >Let's See Category</button>
            </div> 
        </div>
    </div>
</div>
@endsection
