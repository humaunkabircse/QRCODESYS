@extends('layouts.frontend')

@section('title', "About Reokho Trade International ")
@section('meta_description', "$about->about_meta_description")
@section('meta_meta_keyword', "$about->about_meta_keyword")
@section('author', "HUMAUN KABIR")

@section('content')
		<!-- Banner -->
<div class="banner banner-static has-bg bg-secondary">
    <div class="banner-cpn">
        <div class="container">
            <div class="content row">
                @if(session()->get('lang') == 'japan')
                    <div class="banner-text">
                        <p class="">私たちに関しては</p>
                    </div>
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{{url('/')}}">家</a></li>
                            <li class="active"><a href="{{url('/about')}}"><span>私たちに関しては</span></a></li>
                        </ul>
                    </div>
                @else
                     <div class="banner-text">
                    <p class="">About us</p>
                </div>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active"><a href="{{url('/about')}}"><span>About us</span></a></li>
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>

</div>
<!-- End Banner -->

<div class="banner-bgimagebg">
        <img src="{{ asset('public/image/about/01.jpg') }}" alt="" />
</div>

<!-- Content -->
<div class="section section-content section-pad">
<div class="container">
    <div class="content row">

        <div class="row row-vm">
            {{-- <div class="col-sm-6">

                <img src="{{ asset($about->about_image) }}" width="800" height="450" alt="">
            </div> --}}
            <div class="contact-details col-md-12    col-md-offset-1">
                @if(session()->get('lang') == 'japan')
                <h3 class="text-center"><strong>{{$about->about_name_jpn}}</strong></h3>
                {!! $about->about_description_jpn !!}
                @else
                <h3 class="text-center"><strong>{{$about->about_name}}</strong></h3>
                {!! $about->about_description !!}
                @endif
              


                {{-- <ul class="contact-list">
                    <li><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <span>Student Admission Services</span>
                    </li>
                    <li><i class="fa fa-handshake-o" aria-hidden="true"></i>
                        <span>Services for UK University</span>
                    </li>

                </ul> --}}
            </div>

        </div>



    </div>
</div>
</div>
<!-- End Content -->
@endsection


