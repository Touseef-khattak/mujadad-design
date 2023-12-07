@extends('template')
<link href="{{asset('assets/css/case-1.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/slick/slick.css')}}" rel="stylesheet"/>
@section('content')

    <section id="case_sec_1" class="my-5" data-cursor-white="true">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="main_heading pe-3">
                        WOW HEALTH
                    </h1>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column align-items-end">
                        
                            <a class="project-link d-flex align-items-start my-1" href=""><p>Live Product</p>
                            <img src="{{asset('assets/images/link.svg')}}" class="mx-2" alt="link-arrow"></a>
                        
                            <a class="project-link d-flex align-items-start my-1" href=""><p>Play Store</p>
                            <img src="{{asset('assets/images/link.svg')}}" class="mx-2" alt="link-arrow"></a>
                        
                            <a class="project-link d-flex align-items-start my-1" href=""><p>App Store</p>
                            <img src="{{asset('assets/images/link.svg')}}" class="mx-2" alt="link-arrow"></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div>
        <div class="container">
            <hr>
            <p class="py-3 m-0">Product Design</p>
            <hr>
        </div>
    </div>

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
                <h1 class="secondary-heading-case">Identify and eliminate design and architecture
                    issues and improve user experience to win new customers
                </h1>
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
                                <h2 class="secondary-heading-case">My Team</h2>
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
                                <h2 class="secondary-heading-case">My Role</h2>
                                <p>I was a mid-level designer on the Tangent team, where I worked closely with engineers,
                                     stakeholders and the QA team to ensure the product's quality.</p>
                            </div>
                        </div>
                    </div>

                    <div class="project-goal pe-4">
                        <h2 class="secondary-heading-case">Project Goal
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
                                        <h2 class="steps-head-count">1.</h2>
                                        <h3 class="secondary-heading-case">Enabling users to schedule <br> appointments immediately.</h3>
                                        <p>Surface relevant actions & information to empower self-service in solving questions, managing problems and reducing customer support request.</p>
                                    </div>
                                </div>
                                <div class="col-6 pe-4">
                                    <h2 class="steps-head-count">2.</h2>
                                    <h3 class="secondary-heading-case">Creating a smooth and seamless overall user experience.</h3>
                                    <p>Our primary goal was to enhance the user experience by enabling users to schedule appointments instantly, while also focusing on creating a smooth and seamless overall experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section class="sec4-case1">
        <div class="container"><h1 class="secondary-heading-case">Process</h1></div>
        <div class="row">
            <div class="col-4" style="background-color: #519C660D;">
                <div class="first_Proc py-4">
                    <h4 class="process-head">Phase 1</h4>
                    <div class="my-3 process-style"><p>Research</p></div>
                    <br>
                    <div class="my-3 process-style mx-4"><p>Analysis & Planning</p></div>
                    <div></div>
                </div>
            </div>
            <div class="col-4" style="background-color: #FB8F3F33;">
                <div class="p-4">
                    <h4 class="process-head">Phase 2</h4>
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
                    <h4 class="process-head">Phase 3</h4>
                    <div class="">
                        <div class="my-3 process-style"><p>Launch</p></div>
                        <br>
                        <div class="my-3 process-style px-5 mx-3"><p>Iteration</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec5-case1 my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                   <h1 class="secondary-heading-case">Feature Prioritization</h1>
                    <p>We thoroughly assessed which features to include and which ones to skip.
                       We employed the MoSCoW prioritization model to categorize features into "Must dos" and "Would-love-to dos.</p>
                </div>
            </div>
            <div class="row my-4 p-5" style="background-color: #FAFAFA;">
                <div class="col-lg-5">
                    <h2 class="feature-prior-h">Must dos</h2>
                    <div class="row">
                        <div class="col-4"><div class="box-of-dos" style="background-color: #FFD966">Navigation</div></div>
                        <div class="col-4"><div class="box-of-dos" style="background-color: #FFAFA3">Advocates/Brokers Page</div></div>
                        <div class="col-4"><div class="box-of-dos" style="background-color: #75D7F0">New Pages (VUC +Teletherapy+  Healthsharing+ Homepage)</div></div>
                        <div class="col-4 mt-4"><div class="box-of-dos" style="background-color: #85E0A3">Signup Flow
                                (Mandatory to buy  the membership)</div></div>
                        <div class="col-4 mt-4"><div class="box-of-dos" style="background-color: #75D7F0">WoW Plus Page (Merge Healthsharing with other packages)</div></div>
                        <div class="col-4 mt-4"><div class="box-of-dos" style="background-color: #AFBCCF">Current Flows</div></div>
                    </div>
                </div>
                <div class="col-lg-5 offset-1">
                    <h2 class="feature-prior-h">Would-love to dos</h2>
                    <div class="row">
                        <div class="col-4"><div class="box-of-dos" style="background-color: #FFD966">Typography Changes
                                (Font)</div></div>
                        <div class="col-4"><div class="box-of-dos" style="background-color: #FFAFA3">Layout Possibly (Homepage)</div></div>
                        <div class="col-4"><div class="box-of-dos" style="background-color: #75D7F0">Clean and simple design</div></div>
                        <div class="col-4 mt-4"><div class="box-of-dos" style="background-color: #85E0A3">Nice icons, with different colors</div></div>
                        <div class="col-4 mt-4"><div class="box-of-dos" style="background-color: #75D7F0">Less dense paragraph with minimum possible content</div></div>
                        <div class="col-4 mt-4"><div class="box-of-dos" style="background-color: #AFBCCF">Dashboard with all users data and services</div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="user-flows-wireFrames">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h1 class="secondary-heading-case">User Flows</h1>
                    <p>After the finalizing the Information Architecture, we moved on to carving out a
                       simplified the process of creating and managing agreements. Along with the
                       additional features of creating and managing individual entities.</p>
                </div>
            </div>
            <div class="img-user-flows w-100 mb-3">
                <img class="w-100" src="{{asset('assets/images/case-1/user-flow-img.png')}}" alt="User Flow">
            </div>

            <div class="my-5">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h1 class="secondary-heading-case">Wireframes</h1>
                        <p>The wireframes were created using combination of user research and feedback from the stakeholders</p>
                    </div>
                </div>
                <div class="img-user-flows w-100 my-2">
                    <img class="w-100" src="{{asset('assets/images/case-1/wireframes.png')}}" alt="User Flow">
                </div>
            </div>

            <div class="my-5">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h1 class="secondary-heading-case">Design system</h1>
                    </div>
                </div>
                <div class="img-user-flows w-100 my-2">
                    <img class="w-100" src="{{asset('assets/images/case-1/design-system.png')}}" alt="User Flow">
                </div>
            </div>

            <div class="my-5">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <h1 class="secondary-heading-case">Color & Typography</h1>
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
                                <img class="w-100" src="{{asset('assets/images/case-1/Case list view 1.png')}}" alt=" web case">
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
        <div class="container">
        <div class="my-5">
                <a href="{{url('case-1')}}">
                    <div class="next-case">
                        <p class="mx-2">Next Case</p>
                        <img src="{{asset('assets/images/next_icon.svg')}}" alt="arrow">
                    </div>
                </a>
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
