@extends('template')
<link href="{{asset('assets/css/home.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/slick/slick.css')}}" rel="stylesheet"/>
@section('content')
    <section data-scroll-section  id="hp_sec_1" class="mb-5 mb-md-0" data-cursor-white="true">
        <div class="container">
            <div class="row">
            <div class="col-12">
                    <h1 class="primary-heading text-center" data-scroll data-scroll-speed="1">
                        User Experience<br/>
                        Designer
                    </h1>
                    <p class="sub-heading fw-100 text-center">Currently Based in UAE</p>
                </div>
            </div>
        </div>
        <div class=mujadad_hone_text>MUJADAD <span style="color: #FF7D59;">.</span></div>
        <div class="down-arrow">
            <img src="{{asset('assets/images/arrow-down.png')}}" alt="">
        </div>
    </section>

    <section class="work-1-hp py-3">
        <div class="container">
            <h1 class="primary-heading mt-lg-5 mb-3">Selected Work</h1>
            <div class="bg-work">
                <a class="route-to-work d-none d-md-block" href="{{url('hilal-invest')}}"></a>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="d-flex flex-column justify-content-around h-100 px-4 px-lg-5 py-3 py-lg-0 text-block-work">
                            <h5 class="hilal-tag">Hilal Investment</h5>
                            <h2 class="secondary-heading mb-4">Making Halal Investments easy . . .</h2>
                            <a href="{{url('case-1')}}" class="read-more-hilal d-block d-md-none">Read Case</a>
                        </div>

                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="img-block-work">
                            <img class="hilal-home-img d-none d-md-block" src="{{asset('assets/images/home/work-1-halal.png')}}" alt="work image">
                            <img class="hilal-home-img d-block d-md-none" src="{{asset('assets/images/home/hilal-mobile.png')}}" alt="work image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work-2-hp my-3 my-lg-5">
        <div class="container">
            <div class="bg-work">
            <a class="route-to-work d-none d-md-block" href="{{url('wow')}}"></a>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="d-flex text-light flex-column justify-content-around h-100  px-4 px-lg-5 py-3 py-lg-0  text-block-work">
                            <h5 class="hilal-tag text-light my-4 my-lg-0">WoW Health</h5>
                            <h2 class="secondary-heading">The Future of <br> Affordable and Accessible <span class="span">Health Services</span></h2>
                            <a href="{{url('case-2')}}" class="read-more-wow d-block d-md-none">Read Case</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="img-block-work">
                            <img class="wow-home-img d-none d-md-block" src="{{asset('assets/images/home/work-2-wow.png')}}" alt="work image">
                            <img class="d-block d-md-none h-100 w-100" src="{{asset('assets/images/home/wow-mobile.png')}}" alt="work image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work-3-hp my-5 text-center">
        <div class="container">
            <div class="bg-work">
                <a class="route-to-work d-none d-md-block" href="{{url('amal')}}"></a>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex text-light flex-column justify-content-around h-100 px-4 ps-lg-5 text-block-work">
                            <h5 class="hilal-tag text-light">AMAL</h5>
                            <h2 class="secondary-heading">Cost-effective cancer diagnosis utilizing artificial intelligence</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="img-block-work">
                            <img class="amal-home-img" src="{{asset('assets/images/home/work-3-amal.png')}}" alt="amal">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
@section('footer_scripts')
    <script src="{{asset('assets/slick/slick.js')}}"></script>
    <script>

document.onmousemove = function(e) {
    let x= e.clientX;
    let y= e.clientY;

    cursor.style.left= x+'px';
    cursor.style.top= y+'px';
};
    </script>
@endsection
