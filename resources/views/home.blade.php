@extends('template')
<link href="{{asset('assets/css/home.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/slick/slick.css')}}" rel="stylesheet"/>
@section('content')
    <section data-scroll-section  id="hp_sec_1" class="h-100 mb-5" data-cursor-white="true">
        <div class="container">
            <div class="row">
            <div class="col-md-6">
                    <h1 class="primary-heading main_heading_animate pe-3" data-scroll data-scroll-speed="1">
                        UI/UX<br/>
                        Designer
                    </h1>
                    <p class="sub-heading">Currently Based in UAE</p>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
        <div class=mujadad_hone_text>MUJADAD <span style="color: #EB7700;">.</span></div>
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
