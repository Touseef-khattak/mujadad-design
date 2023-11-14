@extends('template')
<link href="{{asset('assets/css/about.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/slick/slick.css')}}" rel="stylesheet"/>
@section('content')
    <section data-scroll-section  id="about-sec-1" class="h-100 mb-5" data-cursor-white="true">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="{{asset('assets/images/about/about-img.png')}}" alt="Mujadad Picture">
                    </div>
                </div>
                <div class="col-md-6">
                    <h1>Hey there,I'm Mujadad. 👋</h1>
                    <p>I am a passionate about minimalism and Apple design aesthetics.

                        UX Designer with proficiency in B2B, B2C product design, design systems, and a proven track record in web and mobile application design, based in UAE</p>
                    <p>Apart from design, I spend my free time playing dota 2 which is my favorite game and I am pretty good at it.</p>
                    <p>I am also Aries (Since 1998)</p>
                    <p>Let's get in touch!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="get-touch text-center my-5">
        <h5 class="tag-line">Get in touch</h5>
        <h2>shahzebkh@outlook.com</h2>
    </section>





@endsection
@section('footer_scripts')
    <script src="{{asset('assets/slick/slick.js')}}"></script>
    <script>

    </script>
@endsection
