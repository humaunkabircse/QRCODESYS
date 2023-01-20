@extends('layouts.frontend')

@section('title', "Our Service Reokho Trade International ")
@section('meta_description', "")
@section('meta_meta_keyword', "")
@section('author', "HUMAUN KABIR")

@section('content')
		<!-- Banner -->
<div class="banner banner-static has-bg bg-secondary">
    <div class="banner-cpn">
        <div class="container">
            <div class="content row">
                @if(session()->get('lang') == 'english')
                <div class="banner-text">
                    <p class="">Our Services</p>
                </div>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active"><a href="{{url('/service')}}"><span>Our Services</span></a></li>
                    </ul>
                </div>
                @else
                <div class="banner-text">
                    <p class="">私たちのサービス</p>
                </div>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">家</a></li>
                        <li class="active"><a href="{{url('/service')}}"><span>私たちのサービス</span></a></li>
                    </ul>
                </div>
                @endif
                

            </div>
        </div>
    </div>
    <div class="banner-bg imagebg">
        <img src="image/banner-inner.jpg" alt="" />
    </div>
</div>
<!-- End Banner -->



<!-- Content -->
<div class="section section-content section-pad">
<div class="container">
    <div class="content row">

        <div class="row row-vm">
            <div class="col-sm-6">
                <img src="{{ asset($services->service_image) }}" width="800" height="450" alt="{{$services->services_name}}">
            </div>
            @if(session()->get('lang') == 'japan')
            <div class="contact-details col-md-4 col-md-offset-1">
                {{$services->services_name}}
                <h3 class=""><strong>Reokho Trade Internetional</strong></h3>
                {{-- <p><strong>{{$services->service_name_jpn}}</strong></p> --}}
                {!! $services->service_description_jpn !!}
                {{-- <ul class="contact-list">
                    <li><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <span>Student Admission Services</span>
                    </li>
                    <li><i class="fa fa-handshake-o" aria-hidden="true"></i>
                        <span>Services for UK University</span>
                    </li>

                </ul> --}}
            </div>
            @else
            <div class="contact-details col-md-4 col-md-offset-1">
                {{$services->services_name}}
                <h3 class=""><strong>Reokho Trade Internetional</strong></h3>
                {{-- <p><strong>{{$services->service_name}}</strong></p> --}}
                {!! $services->service_description !!}
                {{-- <ul class="contact-list">
                    <li><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <span>Student Admission Services</span>
                    </li>
                    <li><i class="fa fa-handshake-o" aria-hidden="true"></i>
                        <span>Services for UK University</span>
                    </li>

                </ul> --}}
            </div>
            
            @endif
            


        </div>



    </div>
</div>
</div>
<!-- End Content -->
@endsection


