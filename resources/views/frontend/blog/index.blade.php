@extends('layouts.frontend')

@section('title', "Blog Reokho Trade International ")
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
                    <p class="">ブログ</p>
                </div>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="index.html">家</a></li>
                        <li class="active"><span>ブログ</span></li>
                    </ul>
                </div>
                @else
                <div class="banner-text">
                    <p class="">Blog</p>
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
        <img src="image/banner-inner.jpg" alt="Reokho Trade" loading="lazy">
    </div>
</div>

<div class="section section-services section-pad">
    <div class="container">
        <div class="content row">

            <!-- Feature Row  -->
            <div class="feature-row feature-service-row row">
                @foreach ($blogs as $item)

                <div class="col-md-4 col-sm-6">
                    <!-- feature box -->
                    <div class="feature boxed feature-s6">
                        <a href="{{route('blogSingleView',$item->id)}}">
                            <div class="fbox-photo">
                                <img src="{{ asset($item->blog_image) }}" alt="{{ $item->blog_name }}" loading="lazy">
                            </div>
                        </a>
                        @if(session()->get('lang') == 'japan')
                        <div class="fbox-content">
                            <p>{{ $item->blog_name_jpn }} </p>
                            <p><a href="{{route('blogSingleView',$item->id)}}" class="btn btn-primary btn-sm">続きを読む</a></p>
                        </div>
                        @else
                        <div class="fbox-content">
                            <p>{{ $item->blog_name }} </p>
                            <p><a href="{{route('blogSingleView',$item->id)}}" class="btn btn-primary btn-sm">Read more</a></p>
                        </div>
                        
                        @endif
                        
                    </div>
                    <!-- End Feature box -->
                </div>
                @endforeach

        
    
            </div>
            <!-- Feture Row  #end -->

        </div>
    </div>
</div>
@endsection


