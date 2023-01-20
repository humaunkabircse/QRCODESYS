@extends('layouts.frontend')

@section('title', "Study Abroad Reokho Trade International ")
@section('meta_description', "")
@section('meta_meta_keyword', "")
@section('author', "HUMAUN KABIR")

@section('content')
<div class="banner banner-static has-bg bg-secondary has-bg-image">
    <div class="banner-cpn">
        <div class="container">
            <div class="content row">

                <div class="banner-text">
                    <p>{{$Studysubcategory->studysubcategory_name}}</p>
                </div>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active"><span>{{$Studysubcategory->studysubcategory_name}}</span></li>
                    </ul>
                </div>

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
            @if(session()->get('lang') == 'japan')
            <div class="contact-content row">
                <div class="contact-details col-md-10 col-md-offset-1">
                    <img src="{{ asset($Studysubcategory->studysubcategory_image) }}"> 
                    <h1 class="">{{$Studysubcategory->studysubcategory_name_jpn}}</h1>
                    <p>{!! substr($Studysubcategory->studysubcategory_description_jpn, 0) !!}</p>
                </div>
            </div>
            @else
            <div class="contact-content row">
                <div class="contact-details col-md-10 col-md-offset-1">
                    <img src="{{ asset($Studysubcategory->studysubcategory_image) }}"> 
                    <h1 class="">{{$Studysubcategory->studysubcategory_name}}</h1>
                    <p>{!! substr($Studysubcategory->studysubcategory_description, 0) !!}</p>
                </div>
            </div>
            @endif
            

        </div>
        
    </div>
</div>
<!-- End Content -->
@endsection




