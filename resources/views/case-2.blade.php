@extends('template')
<link href="{{asset('assets/css/case-1.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/case-2.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/slick/slick.css')}}" rel="stylesheet"/>
@section('content')

    <section id="case_sec_1" class="my-5" data-cursor-white="true">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="primary-heading main_heading_animate pe-3">
                        Hilal Invest
                    </h1>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column align-items-end">
                        <div class="d-flex align-items-start my-1">
                            <p>Live Product</p>
                            <img src="{{asset('assets/images/link.svg')}}" class="mx-2" alt="">
                        </div>
                        <div class="d-flex align-items-start my-1">
                            <p>Play Store</p>
                            <img src="{{asset('assets/images/link.svg')}}" class="mx-2" alt="">
                        </div>
                        <div class="d-flex align-items-start my-1">
                            <p>App Store</p>
                            <img src="{{asset('assets/images/link.svg')}}" class="mx-2" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div>
        <div class="container">
            <hr>
            <p class="py-3 m-0">User Research, Usability Testing, Visual Design, Audit Report, Prototyping</p>
            <hr>
        </div>
    </div>

    <section class="sec2-case1 py-3">
        <div class="container">
            <div class="sec1-img">
                <img src="{{asset('assets/images/hilal/Hilal-Main-sec.png')}}" class="w-100" alt="">
            </div>
        </div>
    </section>

    <section class="sec3-case1 my-5">
        <div class="container">
            <div class="content-sec3">
                <h1>Investment app to identify problems and suggest solutions and redesigning the experience</h1>
                <p>Hilal Invest is an investment app that helps users reach their financial goals with features like mutual funds and calculators. However, they have been experiencing issues with user retention and have identified potential problems with the app's user experience (UX). </p>
                <p>As a result, they have given us the opportunity to conduct a UX audit to identify these issues and provide recommendations for improvement. Our goal is to help Hilal Invest address any UX issues and enhance the overall user experience of their app.</p>
                    <div class="teams-role my-5">
                        <div class="row">
                            <div class="col-6">
                                <h3>My Team</h3>
                                <div class="d-flex">
                                    <div class="img-team mem-1">
                                        <img src="{{asset('assets/images/case-1/memoj-1.png')}}" alt="">
                                    </div>
                                    <div class="img-team mem-2">
                                        <img src="{{asset('assets/images/case-1/memoji-2.png')}}" alt="">
                                    </div>
                                    <div class="img-team mem-3">
                                        <img src="{{asset('assets/images/case-1/memoji-3.png')}}" alt="">
                                    </div>
                                    <div class="img-team mem-4">
                                        <img src="{{asset('assets/images/case-1/memoji.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h3>My Role</h3>
                                <p>This project was out sourced to our team in Tangent. Where I was responsible for conducting Research, User interviews and the interface design.</p>
                            </div>
                        </div>
                    </div>

                    <div class="project-goal pe-4">
                        <h2>Designing for users mental models
                        </h2>
                        <p class="">After collecting valuable insights from our customer support, analyzing our competitors' strategies, and engaging in a couple of brainstorming sessions, we recognized the importance of gaining the perspectives of Hilal Invest App users regarding the exciting opportunities identified in our research.
                        <br>
                        <br>
                        To address this, we brainstormed ideas and questions in collaboration with our team. We developed a comprehensive workshop that spanned a full day and included interviews and interactive activities.
                        <br>
                        <br>
                        The workshop began with a warm-up exercise designed to better understand users' interactions and experiences with the Hilal Invest App. This included exploring their payment behaviors, utilization of app features, motivations for logging in, common transaction types, and any issues they may have encountered during their usage.</p>
                    </div>
                    
                           
            </div>
            <div class="my-5">
                <div class="row">
                                <div class="col-4">
                                    <div class="">
                                        <h2>1.</h2>
                                        <img class="step-overlay" src="{{asset('assets/images/hilal/step-1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-4 pe-4">
                                    <h2>2.</h2>
                                    <img class="step-overlay" src="{{asset('assets/images/hilal/step-2.png')}}" alt="">
                                </div>
                                <div class="col-4 pe-4">
                                    <h2>3.</h2>
                                    <img class="step-overlay" src="{{asset('assets/images/hilal/step-3.png')}}" alt="">    
                                </div>
                            </div>
                        </div>
        </div>
    </section>


    <section class="user-flows-wireFrames">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1>IA & User Flows</h1>
                    <p>After our research we analyze our data created new IA and user flows for the application.</p>
                </div>
            </div>
            <div class="img-user-flows w-100 mb-3">
                <img src="{{asset('assets/images/hilal/user-flow.png')}}" alt="User Flow">
            </div>

            <div class="my-5">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <h1>Wireframes</h1>
                        <p>A highly effective approach to transitioning to the next stage is to begin by sketching out the flows on paper. Rather than jumping straight into wireframing, starting with low-fidelity sketches can prove incredibly beneficial. Once completed, we transferred these sketches into Figma to further refine the flows and determine which options would be most user-friendly. Through this process, we identified the optimal flows that would facilitate ease-of-use for our users.</p>
                    </div>
                </div>
                <div class="img-user-flows w-100 my-2">
                    <img src="{{asset('assets/images/hilal/wireframes.png')}}" alt="User Flow">
                </div>
            </div>

            <div class="my-5">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h1><span style="color: #0D132080">Creation of</span>
                          <br>  a design system</h1>
                          <p>The finishing touch involved transferring models to developers to ensure consistent design across both iOS and Android platforms.</p>
                    </div>
                </div>
                <div class="img-user-flows w-100 my-2">
                    <img src="{{asset('assets/images/hilal/design-system.png')}}" alt="User Flow">
                </div>
            </div>

            <div class="my-5">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <h1>Color & Typography</h1>
                        <p>The Persian Rose color and a clean sans-serif typeface for establishes a professional, simple aesthetic for the
                            product and ensures a pleasant feeling to the user.</p>
                    </div>
                </div>
                <div class="blocks-color-typo w-100 my-2">
                    <div class="row h-100 py-5">
                        <div class="col-lg-6">
                            <div class="satoshi-img">

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row h-100">
                                <div class="col-6 bg-typo-boxes up-box"><div class="p-4 h-100" style="background-color: #FAFAFA; border: 1px solid rgba(0, 0, 0, 0.10);"><h5>#FAFAFA</h5></div></div>
                                <div class="col-6 bg-typo-boxes up-box"><div class="p-4 h-100" style="background-color: #FB8F3F"><h5 class="text-light">#FB8F3F</h5></div></div>
                                <div class="col-6 bg-typo-boxes low-box"><div class="p-4 h-100" style="background-color: #FFA868"><h5 class="text-light">#FFA868</h5></div></div>
                                <div class="col-6 bg-typo-boxes low-box"><div class="p-4 h-100" style="background-color: #191919"><h5 class="text-light">#191919</h5></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="my-5 py-4">
                <div class="blocks-color-typo w-100 my-2">
                    <div class="row h-100 py-5">
                        <div class="col-lg-6 h-100">
                            <div class="mobile-side">
                                <div class="mobile-img">
                                </div>
                                <p class="text-center p-5">A well developed menu section was necessary to help the user engagement.</p>
                            </div>
                        </div>
                    
                        <div class="col-lg-6 h-100">
                            <div class="web-img text-end">
                                <img src="{{asset('assets/images/case-1/Case list view 1.png')}}" alt=" web case">
                            </div>
                            <p class="text-center p-5">A comprehensive Dashboard layout for healthcare benefits and services.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-3rd-last my-5"></div>
            <div class="bg-2nd-last my-5"></div>
            


        </div>
    </section>

    <section class="">
        <div class="bg-last my-5"></div>
    </section>


@endsection

@section('footer_scripts')
    <script src="{{asset('assets/slick/slick.js')}}"></script>
    <script>
        $(document).ready(function () {


        })
    </script>
@endsection
