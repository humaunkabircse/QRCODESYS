@extends('layouts.frontend')

@section('title', "Blog Post Reokho Trade International ")
@section('meta_description', "")
@section('meta_meta_keyword', "")
@section('author', "HUMAUN KABIR")

@section('content')
<div class="banner banner-static has-bg bg-secondary has-bg-image">
    <div class="banner-cpn">
        <div class="container">
            <div class="content row">

                @if(session()->get('lang') == 'japan')
                <div class="banner-text">
                    <p>ブログ</p>
                </div>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="index.html">家</a></li>
                        <li class="active"><span>ブログ</span></li>
                    </ul>
                </div>
                @else
                <div class="banner-text">
                    <p>Blog</p>
                </div>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><span>Blog</span></li>
                    </ul>
                </div>
                
                @endif

            </div>
        </div>
    </div>
    <div class="banner-bg imagebg bg-image-loaded" style="background-image: url(&quot;image/banner-inner.jpg&quot;);">
        <img src="image/banner-inner.jpg" alt="Reokho Trade">
    </div>
</div>

<div class="section section-contents section-contact section-pad">
    <div class="container">
        <div class="content row">

            <div class="contact-content row">
                <div class="contact-details col-md-10 col-md-offset-1">
                    <img src="{{ asset($blogs->blog_image) }}">
                    @if(session()->get('lang') == 'japan')
                    <h1 class="section-pad-f">{{$blogs->blog_name_jpn}}</h1>
                    <p>{!! substr($blogs->blog_description_jpn, 0) !!}</p>
                    @else
                    <h1 class="section-pad-f">{{$blogs->blog_name}}</h1>
                    <p>{!! substr($blogs->blog_description, 0) !!}</p>
                    
                    @endif  
                    
                </div>
            </div>

        </div>
    </div>
</div>

<!-- End Content -->
@endsection



