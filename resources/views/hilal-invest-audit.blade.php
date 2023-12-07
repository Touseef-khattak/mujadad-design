@extends('template')
<link href="{{asset('assets/css/case-1.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/case-2.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/slick/slick.css')}}" rel="stylesheet"/>
@section('content')

    <section id="case_sec_1" class="my-5" data-cursor-white="true">
        <div class="container">
            <div class="row">
<<<<<<< Updated upstream
                <div class="col-12">
                    <div class="my-3">
                        <a href="{{url('case-1')}}">
                            <div class="back-design">
                                <img src="{{asset('assets/images/hilal-audit/arrow.svg')}}" alt="arrow">
                                <p class="mx-2 mb-0">Back to redesign</p>
                            </div>
                        </a>
                    </div>
                    <h1 class="main_heading  pe-3">
=======
                <div class="col-md-6">
                    <h1 class="main_heading pe-3">
>>>>>>> Stashed changes
                        Hilal Invest Audit
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div>
        <div class="container">
            <hr>
            <p class="py-3 m-0">Audit Report</p>
            <hr>
        </div>
    </div>


    <section class="sec3-case1 my-5">
        <div class="container">
            <div class="content-sec3">
                <h1 class="secondary-heading-case">Usability testing 💫</h1>
                <p>A good screener survey is integral to getting the right participants to your study and, in turn,
                    getting the best feedback you can.  To do that, we decided to roll out a survey to find the best
                    suited candidate for our usability testing. We aimed to find a user that has some or little
                    knowledge about investments or has interest in doing so in the future.</p>

                <p>After the survey, we picked out candidates that best suited our user persona and started our
                    process of usability testing. The goal was to get the feedback on how they understand and
                    use the app without any bias. Following are the tasks users had to perform</p>

                    <ul>
                        <li>Create your account.</li>
                        <li>Invest your money in the funds</li>
                        <li>Calculate your goal for future</li>
                    </ul>
                <p>Link to the survey:  <a>Click Here</a></p>

            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="img-meeting w-100 mb-3">
                        <img src="{{asset('assets/images/hilal-audit/meetingImg.png')}}" alt="User Flow">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="user-chat w-100 mb-3">
                        <img src="{{asset('assets/images/hilal-audit/dashboard.png')}}" alt="User Flow">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec3-case1 my-5">
        <div class="container">
            <div class="content-sec3">
                <h1 class="secondary-heading-case">Competitive Analysis</h1>
                <p>In order to understand user behaviors and conventions in the investment app market,
                    we conducted a thorough analysis of both local and international competitors.
                    We signed up for multiple apps and carefully observed the process in order to
                    identify best practices and areas for improvement. Additionally, we gathered
                    insights from customer reviews and ratings to further understand user needs
                    and preferences. With this comprehensive research, we were able to provide
                    valuable recommendations to our client for improving the user experience of their app.</p>

                <div class="competitive-img w-100 mb-3">
                    <img src="{{asset('assets/images/hilal-audit/competive.png')}}" alt="User Flow">
                </div>
            </div>
        </div>
    </section>
    <section class="sec3-case1 my-5">
        <div class="container">
            <div class="content-sec3">
                <h1 class="secondary-heading-case">Competitive Analysis</h1>
                <p>To identify and address usability issues in the app,
                    we conducted heuristics evaluation of each screen and process. This involved reviewing the app against established usability
                    and heuristic guidelines, and noting any areas that did not meet these standards. We documented all of our findings
                    and provided detailed recommendations for how to fix the identified issues. Our goal was to ensure that the app was easy to use,
                    intuitive, and provided a smooth and enjoyable experience for users.
                    By implementing these recommendations, we believe the app will be better able to meet the needs and expectations of its users. </p>

                <div class="competitive-img w-100 mb-3">
                    <img src="{{asset('assets/images/hilal-audit/heruistic-real.png')}}" alt="User Flow">
                </div>
            </div>
        </div>
    </section>




@endsection

@section('footer_scripts')
    <script src="{{asset('assets/slick/slick.js')}}"></script>
    <script>
        $(document).ready(function () {


        })
    </script>
@endsection
