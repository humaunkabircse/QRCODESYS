@extends('layouts.frontend')
@section('title', "Reokho Trade International ")
@section('meta_description', "")
@section('meta_meta_keyword', "")
@section('author', "HUMAUN KABIR")
@section('content')
<!-- Banner/Slider -->
<div id="slider" class="banner banner-slider carousel slide carousel-fade">
    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <!-- // -->
        <div class="item active">
            <div class="fill" style="background-image:url('{{ asset('public/image/slider-e.jpg') }}');">
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="banner-text al-left pos-left dark">
                                @if(session()->get('lang') == 'japan')
                                <div class="animated fadeInRight">
                                    <h2><strong class="color-dark-navy">留学する</strong></h2>
                                    <h5><strong class="color-dark-navy">あなたの好きな国で</strong></h5>
                                    <div class="banner-cta">
                                        <a class="btn color-dark-navy" href="{{url('/contact')}}">詳細を見る</a>
                                        <a class="btn btn-alt btn-outline" href="{{url('/apply')}}">今すぐ申し込む</a>
                                    </div>
                                </div>
                                @else
                                <div class="animated fadeInRight">
                                    <h2><strong class="color-dark-navy">Study Abroad</strong></h2>
                                    <h5><strong class="color-dark-navy"> in your Favourite Country</strong></h5>
                                    {{-- <div class="banner-cta">
                                        <a class="btn color-dark-navy" href="{{url('/contact')}}">Find Out More</a>
                                        <a class="btn btn-alt btn-outline" href="{{ url('/apply') }}">Apply Now</a>
                                    </div> --}}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- // -->
        {{-- @foreach ($sliders as $item)
        <div class="item ">
            <div class="fill" style="background-image:url('{{ asset($item->slider_image) }}');">
                {{-- <img src="{{ asset($slider->slider_image) }}" width="800" height="450" alt=""> --}}
                {{-- 
                <div class="banner-content">
                    <div class="container">
                        <div class="row">
                            <div class="banner-text al-left pos-left dark">
                                <div class="animated fadeInRight">
                                    <h2><strong class="color-dark-navy">{!! $item->slider_content !!}</strong></h2>
                                    <h5><strong class="color-dark-navy"> in your Favourite Country</strong></h5>
                                    <div class="banner-cta">
                                        <a class="btn color-dark-navy" href="#">Find Out More</a>
                                        <a class="btn btn-alt btn-outline" href="#">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        --}}
        {{-- @endforeach --}}
        <!-- // -->
        <!-- <div class="item">
            <div class="fill" style="background-image:url('image/slider-c.jpg');">
            	<div class="banner-content">
            		<div class="container">
            			<div class="row">
            				<div class="banner-text al-left pos-left dark">
            					<div class="animated fadeInRight">
            						<h2><strong class="color-heading">WELCOME TO</strong></h2>
            						<h5><strong class="color-heading">Reokho Trade International</strong></h5>
            						<p class="lead color-heading">BEST STUDY ABROAD AGENCY IN BANGLADESH</p>
            						<div class="banner-cta">
            							<a class="btn" href="#">Find Out More</a>
            							<a class="btn btn-alt btn-outline" href="#">Apply Now</a>
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
            </div> -->
        <!-- // -->
    </div>
    <!-- Arrow Controls -->
    {{-- <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#slider" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a> --}}
</div>


<div class="popup">
    <button id="close">X</button>
    <img src="{{asset('public/image/tour.jpg')}}" alt="Reokho Trade">
 </div>

 <!--Script-->
 <script type="text/javascript">
     window.addEventListener("load", function(){
         setTimeout(
             function open(event){
                 document.querySelector(".popup").style.display = "block";
             },
             1000
         )
     });

     document.querySelector("#close").addEventListener("click", function(){
         document.querySelector(".popup").style.display = "none";
     });
  </script>

<!-- #end Banner/Slider -->
<div class="section section-content section-pad">
    <div class="container">
        <div class="content row">
            <div class="row row-vm">
                <div class="col-sm-6 res-m-bttm pad-r">
                    @if(session()->get('lang') == 'japan')
                    <h1 class="color-dark-navy">Reokho Trade Internationalへようこそ</h1>
                    <p class="color-dark-navy">バングラデシュのダッカで、正直で透明性の高い留学コンサルタントをお探しですか? Global Study Consultancy を強くお勧めします。大学への海外入学に関するサポートが必要な場合は、学歴と選択肢として最適なサポートを提供できます。また、質の高いビザ申請やキャンパス近くの宿泊施設の検索もサポートします。勉強中にアルバイトを探す方法や、バングラデシュからの留学生として成功するために必要な新鮮なアイデアやヒントを得ることができます。
                    </p>
                    @else
                    <h1 class="color-dark-navy">WELCOME TO Reokho Trade International</h1>
                    <p class="color-dark-navy">Are you looking for honest and transparent study abroad consultants in Dhaka, Bangladesh? Global Study Consultancy is highly recommended. If you need help for your overseas admissions at the universities, we can provide you best support as your academic profile and choice.It can also supports for your quality application for visa and finding accommodation near by campus. You will get some fresh ideas and tips how to search part time job during studying, and many more as you need to become a successful international student from Bangladesh.
                    </p>
                    @endif
                </div>
                <div class="col-sm-6">
                    <img src="{{asset('public/image/home-about.jpg')}}" alt="Reokho Trade">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section section-contents section-pad" style="background: #0f4085;">
    <div class="container">
      
        <div class="content row">
            @if(session()->get('lang') == 'japan')
            <div class="wide-md center">
                <h3 class="color-white"><u><strong>REOKHO TRADE コンサルタントを選ぶ理由</strong></u></h3>
                <p class="color-white">バングラデシュのダッカで、正直で透明性の高い留学コンサルタントをお探しですか? Global Study Consultancy を強くお勧めします。大学への海外入学についてサポートが必要な場合は、あなたの学歴と選択肢として最適なサポートを提供できます。</p>
            </div>
            @else
            <div class="wide-md center">
                <h3 class="color-white"><u><strong>Why REOKHO TRADE Consultants?</strong></u></h3>
                <p class="color-white">Are you looking for honest and transparent study abroad consultants in Dhaka, Bangladesh? Global Study Consultancy is highly recommended. If you need help for your overseas admissions at the universities, we can provide you best support as your academic profile and choice.</p>
            </div>
            @endif
        </div>
        @if(session()->get('lang') == 'japan')
        <div class="row section-pad-f">
            <h3 class="color-white center mt-2"><strong>私たちのスマートなアプローチ</strong></h3>
            <div class="col-sm-3 res-s-bttm">
                <div class="box bg-white pd-x1 round">
                    <i class="fa fa-calendar-plus-o" style="font-size: xx-large; color: #0f4085;" aria-hidden="true"></i>
                    <span style="font-size: large; font-weight: bold;">創業15年</span>
                </div>
            </div>
            <div class="col-sm-3 res-s-bttm">
                <div class="box bg-white pd-x1 round">
                    <i class="fa fa-building" style="font-size: xx-large; color: #0f4085;" aria-hidden="true"></i>
                    <span style="font-size: large; font-weight: bold;">二 支店</span>
                </div>
            </div>
            <div class="col-sm-3 res-s-bttm">
                <div class="box bg-white pd-x1 round">
                    <i class="fa fa-users" style="font-size: xx-large; color: #0f4085;" aria-hidden="true"></i>
                    <span style="font-size: large; font-weight: bold;">198+ コンサルタント</span>
                </div>
            </div>
            <div class="col-sm-3 res-s-bttm">
                <div class="box bg-white pd-x1 round">
                    <i class="fa fa-user-plus" style="font-size: xx-large; color: #0f4085;" aria-hidden="true"></i>
                    <span style="font-size: large; font-weight: bold;">19名以上のスタッフ</span>
                </div>
            </div>
        </div>
        @else
        <div class="row section-pad-f">
            <h3 class="color-white center mt-2"><strong>Our Smart Approach</strong></h3>
            <div class="col-sm-3 res-s-bttm">
               <div class="box bg-white pd-x1 round">
                  <i class="fa fa-calendar-plus-o" style="font-size: xx-large; color: #0f4085;" aria-hidden="true"></i>
                  <span style="font-size: large; font-weight: bold;">27 Years Establishment</span>
               </div>
            </div>
            <div class="col-sm-3 res-s-bttm">
               <div class="box bg-white pd-x1 round">
                  <i class="fa fa-building" style="font-size: xx-large; color: #0f4085;" aria-hidden="true"></i>
                  <span style="font-size: large; font-weight: bold;">1 Branch</span>
               </div>
            </div>
            <div class="col-sm-3 res-s-bttm">
               <div class="box bg-white pd-x1 round">
                  <i class="fa fa-users" style="font-size: xx-large; color: #0f4085;" aria-hidden="true"></i>
                  <span style="font-size: large; font-weight: bold;">198+ Consulants</span>
               </div>
            </div>
            <div class="col-sm-3 res-s-bttm">
               <div class="box bg-white pd-x1 round">
                  <i class="fa fa-user-plus" style="font-size: xx-large; color: #0f4085;" aria-hidden="true"></i>
                  <span style="font-size: large; font-weight: bold;">19+ Staff</span>
               </div>
            </div>
         </div>
        @endif

    </div>
</div>
<div class="section section-services section-pad">
    <div class="container">
        <div class="content row">
            <div class="wide-md center">
                @if(session()->get('lang') == 'japan')
                <h3><u><strong>バングラデシュから留学するための最高かつ正直なコンサルティング会社</strong></u></h3>
                <p>バングラデシュのダッカで、正直で透明性の高い留学コンサルタントをお探しですか? Reokho Study Consultancy を強くお勧めします。大学への海外入学についてサポートが必要な場合は、あなたの学歴と選択肢として最適なサポートを提供できます。</p>
                @else
                <h3><u><strong>BEST AND HONEST CONSULTING FIRM TO STUDY ABROAD FROM BANGLADESH</strong></u></h3>
                <p>Are you looking for honest and transparent study abroad consultants in Dhaka, Bangladesh? Reokho Study Consultancy is highly recommended. If you need help for your overseas admissions at the universities, we can provide you best support as your academic profile and choice.</p>
                @endif
            </div>
            <!-- Feature Row  -->
            <div class="feature-row feature-service-row row">
                @foreach($StudyAbroadView as $item)
                <div class="col-md-4 col-sm-6 btn-outline">
                    <!-- feature box -->
                    <div class="feature boxed feature-s6 ">
                        @php
                        $subcate = App\Models\Studysubcategory::where('menu_status','1')->get();
                        @endphp
                        <a href="{{ url('study-abroad/'.$item->studysubcategory_slug) }}">
                            <div class="fbox-photo">
                                <img src="{{ asset($item->studysubcategory_image) }}" alt="Reokho Trade">
                            </div>
                        </a>
                        @if(session()->get('lang') == 'japan')
                        <div class="fbox-content">
                            <h3><a href="{{ url('study-abroad/'.$item->studysubcategory_slug) }}">{{$item->studysubcategory_name_jpn}}</a></h3>
                            <p><a href="{{ url('study-abroad/'.$item->studysubcategory_slug) }}" class="btn btn-primary btn-sm">詳細</a></p>
                        </div>
                        @else
                        <div class="fbox-content">
                            <h3><a href="{{ url('study-abroad/'.$item->studysubcategory_slug) }}">{{$item->studysubcategory_name}}</a></h3>
                            <p><a href="{{ url('study-abroad/'.$item->studysubcategory_slug) }}" class="btn btn-primary btn-sm">View details</a></p>
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