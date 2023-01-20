@extends('layouts.frontend')

@section('title', "Contact Us Reokho Trade International ")
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
                    <p class="">お問い合わせ</p>
                </div>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="index.php">家</a></li>
                        <li class="active"><span>お問い合わせ</span></li>
                    </ul>
                </div>
                @else
                <div class="banner-text">
                    <p class="">Contact us</p>
                </div>
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><span>Contact us</span></li>
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
            
            <div class="contact-content row">
                @if(session()->get('lang') == 'japan')
                <div class="drop-message col-md-7 res-m-bttm"> 
                    <form class="form-message" action="{{route('contact.send')}}" method="post">
                        @csrf
                        <div class="form-results"></div>
                        <div class="form-group row">
                            <div class="form-field col-md-6 form-m-bttm">
                                <input name="fname" type="text" placeholder="ファーストネーム *" class="form-control" required autofocus>
                            </div>
                            <div class="form-field col-md-6 form-m-bttm">
                                <input name="fname" type="text" placeholder="苗字 *" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-field col-md-6 form-m-bttm">
                                <input name="phone" type="text" placeholder="電話" class="form-control" required autofocus>
                            </div>
                            <div class="form-field col-md-6">
                                <input name="email" type="email" placeholder="Eメール *" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="form-field col-md-12">
                                <input name="subject" type="text" placeholder="主題*" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-field col-md-12">
                                <textarea name="message" placeholder="メッセージ *" class="txtarea form-control" required autofocus></textarea>
                            </div>
                        </div>
                        <input type="text" class="hidden" name="form-anti-honeypot" value="">
                        <button type="submit" class="btn solid-btn sb-h">送信</button>
                    </form>
                </div>
                @else
                <div class="drop-message col-md-7 res-m-bttm"> 
                    <form class="form-message" action="{{route('contact.send')}}" method="POST">
                        @csrf
                        <div class="form-results"></div>
                        <div class="form-group row">
                            <div class="form-field col-md-6 form-m-bttm">
                                <input name="fname" type="text" placeholder="First Name *" class="form-control" required autofocus>
                            </div>
                            <div class="form-field col-md-6 form-m-bttm">
                                <input name="lname" type="text" placeholder="Last Name *" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-field col-md-6 form-m-bttm">
                                <input name="phone" type="text" placeholder="Phone" class="form-control" required autofocus>
                            </div>
                            <div class="form-field col-md-6">
                                <input name="email" type="email" placeholder="Email *" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="form-field col-md-12">
                                <input name="subject" type="text" placeholder="Subject*" class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-field col-md-12">
                                <textarea name="message" placeholder="Messages *" class="txtarea form-control" required autofocus></textarea>
                            </div>
                        </div>
                        {{-- <input type="text" class="hidden" name="form-anti-honeypot" value=""> --}}
                        <button type="submit" class="btn solid-btn sb-h">Submit</button>
                    </form>
                    <br>
                    @if(Session::has('mesasge_sent'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('mesasge_sent')}}
                        </div>
                    @endif

                </div>
                
                    
                
                @endif
                

                <div class="contact-details col-md-4">
                    <h3 class=""><strong>Reokho Trade Internetional</strong></h3>
                    <ul class="contact-list">
                        <li><em class="fa fa-map" aria-hidden="true"></em>
                            @if(session()->get('lang') == 'japan')
                            <span>72,Advance Milinda, Room No-409, 3rd floor, Mouchak Moor (フォーチュン ショッピング モールの反対側), Malibagh Dhaka-1219 バングラデシュ.</span>
                            @else
                            <span>72,Advance Milinda, Room No-409, 3rd floor, Mouchak Moor (Opposite of fortune shopping mall), Malibagh Dhaka-1219 Bangladesh.</span>
                            @endif
                        </li>
                        <li><em class="fa fa-mobile" aria-hidden="true"></em>
                            Phone : +880 1886613121</span>
                        </li>
                        {{-- <li><em class="fa fa-envelope" aria-hidden="true"></em>
                            <span>Email : <a href="#">info@reokhotrade.com</a></span>
                        </li> --}}
                    </ul>

                    <ul class="contact-list">
                        {{-- <strong>Japan Office Address :</strong> --}}
                        <li><em class="fa fa-map" aria-hidden="true"></em>
                            @if(session()->get('lang') == 'japan')
                            <span>Japan Office Address : 〒332-0016 
                                2–3–6 Saiwaicho, Kawaguchi City, 
                                Saitama Prefecture Medical  Mansion.  505</span>
                            @else
                            <span>Japan Office Address : 〒332-0016 
                                2–3–6 Saiwaicho, Kawaguchi City, 
                                Saitama Prefecture Medical  Mansion.  505</span>
                            @endif
                        </li>
                        <li><em class="fa fa-mobile" aria-hidden="true"></em>
                            Phone : +81-070-4202-5274</span>
                        </li>
                        {{-- <li><em class="fa fa-envelope" aria-hidden="true"></em>
                            <span>Email : <a href="#">info@reokhotrade.com</a></span>
                        </li> --}}
                    </ul>
                </div>
            </div>

        </div>

            <!-- Feture Row  #end -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.037366433424!2d90.41051351498129!3d23.746046884591546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85e958bc0e7%3A0x3e47442cf9ca8995!2sReokho%20Trade%20Int.!5e0!3m2!1sen!2sbd!4v1671891286164!5m2!1sen!2sbd" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
</div>
@endsection


