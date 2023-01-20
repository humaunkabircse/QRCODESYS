@extends('layouts.frontend')

@section('title', "Gallery Reokho Trade International ")
@section('meta_description', "")
@section('meta_meta_keyword', "")
@section('author', "HUMAUN KABIR")

@section('content')
<div class="banner banner-static has-bg bg-secondary">
    <div class="banner-cpn">
        <div class="container">
            <div class="content row">

                <div class="banner-text">
                </div>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><span>Gallery</span></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="banner-bg imagebg">
        <img src="image/banner-inner.jpg" alt="" />
    </div>
</div>
<!-- End Banner -->


<div class="container">
    <div class="gaps size-lg"></div>
    <div class="wide-md text-center">
        <h2 class="color-dark-navy ">Photo Gallery</h2>
        <!-- <p>Gallery include caption with 3 columns and fade effect in grid mode.</p> -->
    </div>
    <!-- Gallery -->
        <div class="gallery gallery-col3 gallery-grids gallery-with-caption hover-fade">

            <ul class="gallery-list">
                @foreach ($gallery as $item)


                <li class="filtr-item">
                    <div class="gallery-item">
                        <img src="{{ asset($item->gallery_image) }}" alt="Name of Photo">
                        <div class="gallery-item-link">
                            <span class="link-block">
                                {{-- <a class="link link-more" href="#"><em class="fa fa-link"></em></a> --}}
                                <a class="link link-popup image-lightbox" href="{{ asset($item->gallery_image) }}" title="Photo Title"><em class="fa fa-arrows-alt"></em></a>
                                {{-- <img src="{{ asset($services->service_image) }}" width="800" height="450" alt=""> --}}
                            </span>
                        </div>
                        <div class="gallery-item-caption dark">
                            <p class="item-cat">{{ $item->gallery_name }}</p>
                            {{-- <h4 class="item-title">{{ $item->gallery_name }}</h4> --}}
                        </div>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
    </div>        
        <!-- Gallery #end -->
@endsection


