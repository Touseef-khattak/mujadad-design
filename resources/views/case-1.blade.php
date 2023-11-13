@extends('template')
<link href="{{asset('assets/css/case-1.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/slick/slick.css')}}" rel="stylesheet"/>
@section('content')
    
    <section id="case_sec_1" class="my-5" data-cursor-white="true">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="primary-heading main_heading_animate pe-3">
                        WOW HEALTH
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

    <section>
        <div class="container">
            <hr>
            <p class="py-3 m-0">Product Design</p>
            <hr>
        </div>
    </section>

    <section class="sec2-case1 py-3">
        <div class="container">
            <div class="sec1-img">
                <img src="{{asset('assets/images/case-1/wow-1.jpg')}}" class="w-100" alt="">
            </div>
        </div>
    </section>

    <section class="sec3-case1 my-5">
        <div class="container">
            <div class="content-sec3">
                <h2>Identify and eliminate design and architecture
                    issues and improve user experience to win new customers
                </h2>
                <p>Wow Health is a healthcare product from the United States. 
                    They started developing it in 2018, but they didn't pay enough
                    attention to how easy it is for people to use and how it looks.
                    It's a tool that helps doctors, nurses, and assistants book medical appointments,
                    keep track of them on a calendar, make vouchers and coupons, and do other useful things</p>

                <p>Yet, there were some problems that made the product less enjoyable for users.
                    In this project, our main aim was to find these problems, update the way it looks,
                    add new features, and make sure users are happy.
                    This case study will show you how we tackled these issues and improved the software.</p>

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
                                <p>I was a mid-level designer on the Tangent team, where I worked closely with engineers,
                                     stakeholders and the QA team to ensure the product's quality.</p>
                            </div>
                        </div>
                    </div>

                    <div class="project-goal pe-4">
                        <h2>Project Goal
                        </h2>
                        <p class="">During the redesign, we talked a lot about
                             what needed to be done. We had many meetings to look at our
                             user data and see where we were falling behind compared to our competitors.
                             We quickly made changes to address these issues. It was a big challenge for our team because
                             we were shifting from a focus on consumers (B2C) to businesses (B2B) </p>
                        <div class="my-5">
                            <div class="row">
                                <div class="col-6">
                                    <div class="bg-mark">
                                        <h2>1.</h2>
                                        <h3>Enabling users to schedule <br> appointments immediately.</h3>
                                        <p>Surface relevant actions & information to empower self-service in solving questions, managing problems and reducing customer support request.</p>
                                    </div>
                                </div>
                                <div class="col-6 pe-4">
                                    <h2>2.</h2>
                                    <h3>Creating a smooth and seamless overall user experience.</h3>
                                    <p>Our primary goal was to enhance the user experience by enabling users to schedule appointments instantly, while also focusing on creating a smooth and seamless overall experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section class="sec4-case1">
        <div class="container"><h2>Process</h2></div>
        <div class="row">
            <div class="col-4" style="background-color: #519C660D;">
                <div class="first_Proc py-4">
                    <h4>Phase 1</h4>
                    <div class="my-3 process-style"><p>Research</p></div>
                    <br>
                    <div class="my-3 process-style mx-4"><p>Analysis & Planning</p></div>
                    <div></div>
                </div>
            </div>
            <div class="col-4" style="background-color: #FB8F3F33;">
                <div class="p-4">
                    <h4>Phase 2</h4>
                    <div class="d-flex justify-content-center flex-wrap">
                        <div class="my-3 process-style"><p>User Flows</p></div>
                        <div class="my-3 process-style mx-2"><p> Design</p></div> 
                        <div class="my-3 process-style"><p>Architecture</p></div>
                    
                        <div class="my-3 process-style"><p>Prototyping & Test</p></div>
                    </div>
                </div>
            </div>
            <div class="col-4" style="background-color: #6600660D;">
                <div class="p-4">
                    <h4>Phase 3</h4>
                    <div class="">
                        <div class="my-3 process-style"><p>Launch</p></div>
                        <br>
                        <div class="my-3 process-style px-5 mx-3"><p>Iteration</p></div>
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
        
            
        })
    </script>
@endsection
