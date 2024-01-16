@extends('template')
<link href="{{asset('assets/css/case-1.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/case-2.css')}}" rel="stylesheet"/>
@section('content')

    <section id="case_sec_1" class="my-5" data-cursor-white="true">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="main_heading pe-3">
                        Hilal Invest
                    </h1>
                </div>
                <div class="col-md-6">
                    <div class="align-items-end d-flex flex-lg-column flex-lg-wrap-reverse flex-row flex-wrap ">

                            <a class="project-link d-flex align-items-start justify-content-md-end my-1" href="https://www.hilalinvest.com/"><p>Live Product</p>
                            <img src="{{asset('assets/images/link.svg')}}" class="mx-2" alt="link-arrow"></a>

                            <a class="project-link d-flex align-items-start justify-content-md-end my-1 mx-3 mx-sm-0" href="https://play.google.com/store/apps/details?id=com.hilalinvest"><p>Play Store</p>
                            <img src="{{asset('assets/images/link.svg')}}" class="mx-2" alt="link-arrow"></a>

                            <a class="project-link d-flex align-items-start justify-content-md-end my-1" href=""><p>App Store <span class="text-grey-link">(Launching Soon)</span></p>
                            <img src="{{asset('assets/images/link.svg')}}" class="mx-2" alt="link-arrow"></a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <hr>
            <p class="py-3 m-0">User Research, Usability Testing, Visual Design, Audit Report, Prototyping</p>
            <hr>
        </div>
    </section>

    <section class="sec2-case1 py-3">
        <img src="{{asset('assets/images/hilal/mobile/sec-1.png')}}" class="w-100 object-contain h-100 d-block d-md-none" alt="">
        <div class="container">
            <div class="sec1-img">
                <img src="{{asset('assets/images/hilal/Hilal-Main-sec.png')}}" class="w-100 d-none d-md-block" alt="">
            </div>
        </div>
    </section>

    <section class="sec3-case1 my-5">
        <div class="container">
            <div class="content-sec3">
                <h1 class="secondary-heading-case">Investment app to identify problems and suggest solutions and redesigning the experience</h1>
                <p>Hilal Invest is an investment app that helps users reach their financial goals with features like mutual funds and calculators. However, they have been experiencing issues with user retention and have identified potential problems with the app's user experience (UX). </p>
                <p>As a result, they have given us the opportunity to conduct a UX audit to identify these issues and provide recommendations for improvement. Our goal is to help Hilal Invest address any UX issues and enhance the overall user experience of their app.</p>
                    <div class="teams-role my-5">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h3 class="secondary-heading-case">My Team</h3>
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
                            <div class="col-12 col-md-6">
                                <h3 class="secondary-heading-case mt-3 mt-md-0">My Role</h3>
                                <p>This project was out sourced to our team in Tangent. Where I was responsible for conducting Research, User interviews and the interface design.</p>
                            </div>
                        </div>
                    </div>

                    <div class="project-goal pe-4">
                        <h2 class="secondary-heading-case">Designing for users mental models</h2>
                        <p class="">After collecting valuable insights from our customer support, analyzing our competitors' strategies, and engaging in a couple of brainstorming sessions, we recognized the importance of gaining the perspectives of Hilal Invest App users regarding the exciting opportunities identified in our research.
                        <br>
                        <br>
                            To address this, we brainstormed ideas and questions in collaboration with our team. We developed a comprehensive workshop that spanned a full day and included interviews and interactive activities.
                        <br>
                        <br>
                            The workshop began with a warm-up exercise designed to better understand users' interactions and experiences with the Hilal Invest App. This included exploring their payment behaviors, utilization of app features, motivations for logging in, common transaction types, and any issues they may have encountered during their usage.</p>
                    </div>


            </div>
            <div class="design-case2-process my-5">
                <div class="row">
                                <div class="col-12 col-md-4">

                                    <h2 class="secondary-heading-case">1.</h2>
                                    <img class="step-overlay" src="{{asset('assets/images/hilal/step-1.png')}}" alt="">

                                </div>
                                <div class="col-12 col-md-4 pe-md-4">
                                    <h2 class="secondary-heading-case">2.</h2>
                                    <img class="step-overlay" src="{{asset('assets/images/hilal/step-2.png')}}" alt="">
                                </div>
                                <div class="col-12 col-md-4 pe-md-4">
                                    <h2 class="secondary-heading-case">3.</h2>
                                    <img class="step-overlay" src="{{asset('assets/images/hilal/step-3.png')}}" alt="">
                                </div>
                            </div>
                        </div>
        </div>
    </section>


    <section class="user-flows-wireFrames">
        <div class="container">
            <div class="row m-2 m-md-0">
                <div class="col-12 col-lg-7">
                    <h1 class="secondary-heading-case">IA & User Flows</h1>
                    <p class="my-2 my-lg-4">After our research we analyze our data created new IA and user flows for the application.</p>
                </div>
            </div>

            <div class="img-user-flows w-100 mb-3">
                <img class="w-100" src="{{asset('assets/images/hilal/user-flow.png')}}" alt="User Flow">
            </div>

            <div class="my-5 pt-lg-5">
                <div class="row m-2 m-md-0">
                    <div class="col-12 col-lg-8">
                        <h1 class="secondary-heading-case">Wireframes</h1>
                        <p class="my-2 my-lg-4">A highly effective approach to transitioning to the next stage is to begin by sketching out the flows on paper. Rather than jumping straight into wireframing, starting with low-fidelity sketches can prove incredibly beneficial. Once completed, we transferred these sketches into Figma to further refine the flows and determine which options would be most user-friendly. Through this process, we identified the optimal flows that would facilitate ease-of-use for our users.</p>
                    </div>
                </div>
                <div class="img-user-flows w-100 my-2">
                    <img class="w-100 d-none d-md-block" src="{{asset('assets/images/hilal/wireframes.png')}}" alt="User Flow">
                </div>
                <img class="w-100 d-block d-md-none" src="{{asset('assets/images/hilal/mobile/wireframes.png')}}" alt="User Flow">
            </div>


        </div>
    </section>

    <section class="creat-sec">

            <div class="container">
                    <div class="my-5">
                <div class="row m-2 m-md-0">
                    <div class="col-12 col-lg-6">
                        <h1 class="primary-head-case"><span style="color: #0D132080">Creation of</span>
                          <br>  a design system</h1>
                          <p>The finishing touch involved transferring models to developers to ensure consistent design across both iOS and Android platforms.</p>
                    </div>
                </div>
                <div class="img-user-flows w-100 my-2">
                    <img class="w-100 d-none d-md-block" src="{{asset('assets/images/hilal/design-system.png')}}" alt="User Flow">
                    <img class="w-100 d-block d-md-none" src="{{asset('assets/images/hilal/mobile/color-typo.png')}}" alt="User Flow">
                </div>
            </div>
    </section>
    <section class="mt-5">
        <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center p-3 h-100">
                                    <p class="text-center text-md-start">We've completely redesigned it to focus on what's important, making it easy for first-time users to see main actions, popular funds, and how to verify their accounts. Making it more visually appealing.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="w-100 d-none d-md-block" src="{{asset('assets/images/hilal/Iphone-14-6.png')}}" alt="">
                                <img class="w-100 d-block d-md-none" style="margin-top: -185px;" src="{{asset('assets/images/hilal/mobile/Iphone14-6.png')}}" alt="">
                            </div>
                        </div>
                </div>
        </div>
    </section>


    <section class="">
            <div class="my-5 pt-5">
                    <div class="d-flex justify-content-center align-items-center align-items-md-baseline flex-column flex-md-row">
                            <div class="cards-relevent mx-4">
                                <img src="{{asset('assets/images/hilal/relevance.png')}}" alt="relevant">
                                <h3 class="secondary-heading-case mt-3">Relevant Actions</h3>
                                <p>Only the main action which the app is about is shown on the home screen for better navigation.</p>
                            </div>
                            <div class="cards-relevent mx-4">
                                <img src="{{asset('assets/images/hilal/real-time.png')}}" alt="real-time">
                                <h3 class="secondary-heading-case mt-3">Real time status</h3>
                                <p>Transactions are easier to understand. You can see in real-time if they're
                                    waiting for approval from the bank.
                                    Plus, if a transaction gets rejected, you'll receive a notification.</p>
                            </div>
                    </div>
            </div>
    </section>

        <section class="mobiles-both-sides">
            <div class="container">
                <div class="mt-5">

                            <div class="row h-100">
                                <div class="col-lg-6 h-100">
                                    <div class="mobile-side">
                                        <div class="mobile-img-1">
                                        </div>
                                        <p class="text-center p-5">The display design prioritizes a clear, organized layout that enhances user comprehension.</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 h-100">
                                    <div class="mobile-side">
                                        <div class="mobile-img-2">
                                        </div>
                                        <p class="text-center p-5">New onboarding screen are now much clear with customized illustrations</p>
                                    </div>
                                </div>
                            </div>

                </div>
            </div>
        </section>

        <section class="all-new-sec">
            <div class="container">
                <div class="my-5">
                    <div class="text-center head-All-new my-5 py-5">
                            <h1 class="primary-head-case"><span style="color: #0D132080">All new</span>
                            <br>Verification Process</h1>
                            <p>The finishing touch involved transferring models to developers to ensure consistent design across both iOS and Android platforms.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img class="" src="{{asset('assets/images/hilal/mobile-picture.png')}}" alt="">
                        </div>
                        <div class="col-md-6 mt-5 mt-md-0">
                            <div class="text-side d-flex flex-column justify-content-center h-100">
                                <div class="streaming-para my-3">
                                    <p>
                                        <strong>Streamlining</strong><br>
                                        In response, we decided to streamline the process, enabling users to input data at their convenience, reducing cognitive load.
                                    </p>
                                </div>
                                <div class="streaming-para my-3">
                                    <p>
                                        <strong>Minimal and Effective Design</strong><br>
                                        We crafted a minimal and highly effective design for the process.                                </p>
                                </div>
                                <div class="streaming-para my-3">
                                    <p>
                                        <strong>Increased Customer Retention</strong><br>
                                            The streamlined approach led to increased customer retention.
                                    </p>
                                </div>
                                <div class="streaming-para my-3">
                                    <p>
                                    <strong>Impressive Outcomes:</strong><br>
                                    As a result, we achieved an impressive milestone of 25,000 fulfilled applicants after implementing the update.                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class='more-det-sec'>
            <div class="container">

                <div class="my-5 py-5">
                <div class="text-center head-All-new py-5">
                            <h1 class="primary-head-case">More details for the user</h1>
                            <p>The design will help user to get more details about the funds and their investments.</p>
                </div>
                <div class="row">
                        <div class="col-md-6 text-center bg-mobile-side">
                            <img class="" src="{{asset('assets/images/hilal/overview.png')}}" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="text-side d-flex flex-column justify-content-center h-100 px-4">
                                <div class="streaming-para text-center text-md-start my-3">
                                    <h3 class="secondary-heading-case m-3 m-md-0">Overview</h3>
                                    <p>
                                        Our step-by-step method let us scale the new design across all sections from transactions to goal planners
                                    </p>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="row my-5">
                        <div class="col-md-6 order-1 order-md-0">
                            <div class="text-side d-flex flex-column justify-content-center h-100 px-4">
                                <div class="streaming-para my-3 text-center text-md-start">
                                    <h3 class="secondary-heading-case m-3 m-md-0">Real Time Transaction History</h3>
                                    <p>Our step-by-step method let us scale the new design across all sections from transactions to goal planners                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 bg-mobile-side text-center  order-0 order-md-1">
                            <img class="" src="{{asset('assets/images/hilal/real-time-transaction.png')}}" alt="">
                        </div>
                </div>

                <div class="row my-5">
                        <div class="col-md-6 text-center bg-mobile-side">
                            <img class="" src="{{asset('assets/images/hilal/risk-level-calculater.png')}}" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="text-side d-flex flex-column justify-content-center h-100 px-4">
                                <div class="streaming-para my-3 text-center text-md-start">
                                    <h3 class="secondary-heading-case m-3 m-md-0">Risk Level Calculator</h3>
                                    <p>Our step-by-step method let us scale the new design across all sections from transactions to goal planners</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

        </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="">
                                    <h1 class="primary-head-case"><span style="color: #0D132080">Clear and Open </span>
                                    <br>Financial System</h1>
                                    <p>Moreover, the redesign strategy also incorporated a transparent system of tracking financial metrics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="bg-financial">

            </div>




        <section>

            <div class="container">

                <div class="row my-5">
                    <div class="col-12 col-lg-8">
                        <h2 class="secondary-heading-case">
                            Impact and future ✨
                        </h2>
                        <p>Our audit commenced when the Hilal Investment app achieved 10,000 downloads, a noteworthy accomplishment.
                        However, we noticed that the app's growth had plateaued, and progress was at a standstill.
                        </p>
                        <br>
                        <p>The application was thoroughly redesigned, wherein the user interface (UI) was significantly restructured.
                        This was not merely an aesthetic upgrade but a strategic realignment aimed at making the
                        application more user-friendly, intuitive, and efficient.</p>
                        <br>
                        <p>In a clear testament to the redesign's success, the Hilal Investment app skyrocketed from its
                            initial 10,000 downloads to an impressive 100,000 downloads till date.</p>
                    </div>
                </div>

            <div class="row my-3">
                <div class="col-12 col-lg-8">
                    <h2 class="secondary-heading-case">
                        Bonus 💥
                    </h2>
                    <p>Click on this button below to view Hilal invest Audit</p>
                    <a href="{{url('hilal-audit')}}" class="view-audit mb-5">View Audit Report</a>
                </div>
            </div>
            <div class="my-5">
                <a href="{{url('wow')}}">
                    <div class="next-case">
                        <p class="mx-2 mb-0">Next Case</p>
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
