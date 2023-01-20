@extends('layouts.frontend')

@section('title', "Course Reokho Trade International ")
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
                    <p class="">IELTS＆日本語コース</p>
                </div>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="index.php">家</a></li>
                        <li class="active"><span>コース</span></li>
                    </ul>
                </div>
                @else
                <div class="banner-text">
                    <p class="">IELTS & Japanese language course</p>
                </div>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><span>Course</span></li>
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
            <div class="row row-vm">
                <div class="col-md-6 col-sm-6 res-m-bttm pad-r">
                    <a href="#"><img src="{{asset('public/frontend')}}/image/japaniese_language_course.jpg" alt=""></a>
                </div>
                @if(session()->get('lang') == 'japan')
                <div class="col-md-6 col-sm-6 pad-l">
                    <h2 class="">IELTS＆日本語コースを行っています</h2>
                    
                    <p>IELTS では、リスニング、リーディング、ライティング、スピーキングの 4 つの言語スキルすべてがテストされます。スピーキング テストは、認定試験官との対面式の面接です。これはインタラクティブで、テストが可能な限り実際の状況に近いものです。調査によると、IELTS は、受験者が丸暗記するのではなく、真にバランスのとれた英語を開発するように動機付けていることが示されています。これは、英語の理解が向上し、英語圏の国での実際の生活に有効であることを意味します。</p>
                    <p>
                        <p class="fw-bold"><strong>コース料金</strong></p>
                    <ul class="list-style">
                        
                        <li><em class="fa fa-book" aria-hidden="true"></em> 日本語コース料金 <strong>取った15,000/- </strong>     3ヶ月 </li>
                        <li><em class="fa fa-book" aria-hidden="true"></em> 日本語コース料金 <strong>取った25,000/- </strong>     6 ヶ月 </li>
                        <li><em class="fa fa-book" aria-hidden="true"></em> IELTSコース料金 <strong>取った15,000/-</strong>      3 ヶ月 </li>
                        
                        
                    </ul>

                    <p>	
                        <strong>お電話ください</strong><br>
                        <em class="fa fa-mobile" style="font-size:25px" aria-hidden="true"></em>&nbsp
                        <span> +880 1886613121 </span>
                        <br>
                        <em class="fa fa-phone" style="font-size:20px" aria-hidden="true"></em>&nbsp
                        <span> +880-2-48317223</span>

                    </p>
                </div>
                @else
                <div class="col-md-6 col-sm-6 pad-l">
                    <h2 class="">We are doing IELTS & Japanese language course</h2>
                    
                    <p>IELTS tests all four language skills – listening, reading, writing and speaking. The Speaking test is a face-to-face interview with a certified Examiner. It is interactive and as close to a real-life situation as a test can get. Research shows that IELTS motivates test-takers to develop real and well-rounded English rather than learning by rote. This means your understanding of English is improved and valid for real life in an English-speaking country.</p>
                    <p>
                        <p class="fw-bold"><strong>COURSE FEES</strong></p>
                    <ul class="list-style">
                        
                        <li><em class="fa fa-book" aria-hidden="true"></em> Japanese language course fees <strong> 15,000/- </strong>     3 months </li>
                        <li><em class="fa fa-book" aria-hidden="true"></em> Japanese language course fees <strong>25,000/- </strong>     6 months </li>
                        <li><em class="fa fa-book" aria-hidden="true"></em> IELTS course fees <strong> 15,000/- </strong>     3 months </li>
                        
                        
                    </ul>

                    <p>	
                        <strong>Call Us</strong><br>
                        <em class="fa fa-mobile" style="font-size:25px" aria-hidden="true"></em>&nbsp
                        <span> +880 1886613121 </span>
                        <br>
                        <em class="fa fa-phone" style="font-size:20px" aria-hidden="true"></em>&nbsp
                        <span> +880-2-48317223</span>

                    </p>
                </div>
                @endif
                

            </div>

        </div>
            <!-- Feture Row  #end -->

        </div>
    </div>
</div>
@endsection


