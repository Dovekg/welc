@extends('themes.clean-blog.layouts.default')
@section("header")
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Welchina</h1>
                    <hr class="small">
                    <span class="subheading">Welcome to China and stay well.</span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
@section('content')
<div class="container">
    <div class="row">
        
        @include('themes.clean-blog.partials.posts-list', $posts)
    </div>
</div>
@endsection