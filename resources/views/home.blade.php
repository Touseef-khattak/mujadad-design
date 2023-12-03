@extends('template')
<link href="{{asset('assets/css/home.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/slick/slick.css')}}" rel="stylesheet"/>
@section('content')
    <section data-scroll-section  id="hp_sec_1" class="mb-5" data-cursor-white="true">
        <div class="container">
            <div class="row">
            <div class="col-12">
                    <h1 class="primary-heading main_heading_animate pe-3 text-center" data-scroll data-scroll-speed="1">
                        User Experience<br/>
                        Designer
                    </h1>
                    <p class="sub-heading fw-100 text-center">Currently Based in UAE</p>
                </div>
            </div>
        </div>
        <div class=mujadad_hone_text>MUJADAD <span style="color: #FF7D59;">.</span></div>
    </section>

    <section class="work-1-hp py-3">
        <div class="container">
            <h1 class="primary-heading mt-lg-5 mb-5 mb-lg-0">Selected Work</h1>
            <div class="bg-work">
                <a class="route-to-work" href="{{url('case-2')}}"></a>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="d-flex flex-column justify-content-around h-100 px-4 px-lg-5 py-3 py-lg-0 text-block-work">
                            <p class="hilal-tag">Hilal Investment</h5>
                            <h2 class="secondary-heading mb-4">Making Halal Investments easy . . .</h2>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="img-block-work">
                            <img class="hilal-home-img" src="{{asset('assets/images/home/work-1-halal.png')}}" alt="work image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="work-2-hp my-5">
        <div class="container">
            <div class="bg-work">
            <a class="route-to-work" href="{{url('case-1')}}"></a>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="d-flex text-light flex-column justify-content-around h-100 px-4 ps-lg-5 text-block-work">
                            <h5 class="hilal-tag text-light my-4 my-lg-0">WoW Health</h5>
                            <h2 class="secondary-heading">The Future of <br> Affordable and Accessible  <br>Health Services</h2>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="img-block-work">
                            <img class="wow-home-img" src="{{asset('assets/images/home/work-2-wow.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work-3-hp my-5 text-center">
        <div class="container">
            <div class="bg-work">
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
        $(document).ready(function () {
            // let myCarousel = document.querySelector('#case_studies_carousal')
            // let case_studies_carousal = new bootstrap.Carousel(myCarousel,{
            //     pause: true,
            //     wrap: false
            // })
            $('#case_studies_carousal').slick({
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 1,
                infinite:false,
                arrows: false,
                mobileFirst:true,
                responsive: [
                    {
                        breakpoint: 560,
                        settings: {
                            centerMode:true,
                            centerPadding: '70px',
                            slidesToShow: 1,
                        }
                    },
                    {
                        breakpoint: 1440,
                        settings: {
                            centerMode:true,
                            centerPadding: '150px',
                            slidesToShow: 1,
                        }
                    },
                    {
                        breakpoint: 1640,
                        settings: {
                            centerMode:true,
                            centerPadding: '350px',
                            slidesToShow: 1,
                        }
                    }
                ]
            });
            $('.reviews_slider').slick({
                slidesToShow: 1,
                centerPadding: '40px',
                infinite:false,
                arrows: false,
                dots: true,
                mobileFirst:true,
                responsive: [
                    {
                        breakpoint: 560,
                        settings: {
                            slidesToShow: 1,
                            dots: true,
                        }
                    }
                ]
            });
            $('.marquee').slick({
                speed: 100000,
                autoplay: true,
                autoplaySpeed: 5,
                centerMode: true,
                cssEase: 'linear',
                slidesToShow: 1,
                slidesToScroll: -1,
                variableWidth: true,
                infinite: true,
                initialSlide: 1,
                arrows: false,
                buttons: false,
                responsive: [
                    {
                        breakpoint: 560,
                        settings: {
                            variableWidth: true
                        }
                    }
                ]
            });

            $('.slick-prev').click(function(e){
                //e.preventDefault();
                $('#case_studies_carousal').slick('slickPrev');
            } );

            $('.slick-next').click(function(e){
                //e.preventDefault();
                $('#case_studies_carousal').slick('slickNext');
            } );

            $('.reviews_slider_arrow_prev').click(function(e){
                //e.preventDefault();
                $('.reviews_slider').slick('slickPrev');
            } );

            $('.reviews_slider_arrow_next').click(function(e){
                //e.preventDefault();
                $('.reviews_slider').slick('slickNext');
            } );

        })
    </script>
@endsection
