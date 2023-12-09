@extends('template')
<link href="{{asset('assets/css/about.css')}}" rel="stylesheet"/>
@section('content')
    <section id="about-sec-1" class="mb-5" data-cursor-white="true">
        <img class="d-block d-md-none w-100" src="{{asset('assets/images/about/mobile/abt.png')}}" alt="Mujadad Picture">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-none d-md-block">
                    <div class="img-box">
                        <img src="{{asset('assets/images/about/about-img.png')}}" alt="Mujadad Picture">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-box">
                        <h1>Hey there,I'm Mujadad. 👋</h1>
                        <p class="pt-5">I am a passionate about minimalism and Apple design aesthetics. <br>
                        <br>
                            UX Designer with proficiency in B2B, B2C product design, design systems, and a proven track record in web and mobile application design, based in UAE</p>
                        <br>
                            <p>Apart from design, I spend my free time playing dota 2 which is my favorite game and I am pretty good at it.</p>
                        <p class="abt_rise">I am also Aries (Since 1998)</p>
                        <p>Let's get in touch!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="get-touch text-center mt-5">
        <h5 class="tag-line">Get in touch</h5>
        <h2>shahzebkh@outlook.com</h2>

    </section>





@endsection
@section('footer_scripts')
    <script src="{{asset('assets/slick/slick.js')}}"></script>
    <script>

    </script>
@endsection
