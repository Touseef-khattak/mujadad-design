@extends('template')
<link href="{{asset('assets/css/case-1.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/case-2.css')}}" rel="stylesheet"/>
@section('content')

    <section id="case_sec_1" class="my-5" data-cursor-white="true">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="main_heading pe-3">
                        AMAL
                    </h1>
                </div>
                <div class="col-md-6">
                    <div class="align-items-end d-flex flex-lg-column flex-lg-wrap-reverse flex-row flex-wrap ">

                            <a class="project-link d-flex align-items-start justify-content-md-end my-1" href=""><p>Live Product</p>
                            <img src="{{asset('assets/images/link.svg')}}" class="mx-2" alt="link-arrow"></a>

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
        <img src="{{asset('assets/images/amal/mobile/sec-1.png')}}" class="w-100 object-contain h-100 d-block d-md-none" alt="">
        <div class="container">
            <div class="sec1-img">
                <img src="{{asset('assets/images/amal/sec-1.png')}}" class="w-100 d-none d-md-block" alt="">
            </div>
        </div>
    </section>

    <section class="sec3-case1 my-5">
        <div class="container">
            <div class="content-sec3">
                <h1 class="secondary-heading-case">Creating a web application for pathologists to annotate biopsy slides in order to identify cancer presence, facilitating the training of artificial intelligence</h1>
                <p>This web app helps pathologists find cancer in biopsy slides. Pathologists mark where they see cancer, and the app uses that to teach a computer. The computer then helps pathologists check biopsy samples faster and more accurately. This teamwork between pathologists and AI aims to improve cancer detection and help patients.</p>
                <p>This product is unique, with no competitors in its category.</p>
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
                                <p>I was responsible for research, User interviews, interface design and design system for this project during my time in tangent.</p>
                            </div>
                        </div>
                    </div>

                    <div class="project-goal pe-4">
                        <h2 class="secondary-heading-case">Project Goal</h2>
                        <p class="">Cancer remains one of the most pressing healthcare challenges worldwide, with high costs associated with diagnosis and treatment. The primary objective was to utilize AI algorithms to improve cancer diagnosis accuracy while making it more accessible and affordable for individuals across different socioeconomic backgrounds.
                        <br>
                        <br>
                            The development of the Amal reporting portal was a big goal. It involved a collaborative effort between oncologists, AI experts, and the UI design team. The Portal was needed to be designed to offer a user-friendly interface that simplifies the diagnostic process for both patients and healthcare professionals.
                    </div>

            </div>

        </div>
    </section>


    <section class="user-flows-wireFrames">
        <div class="container">
            <div class="row m-2 m-md-0">
                <div class="col-12 col-lg-7">
                    <h1 class="secondary-heading-case">Research</h1>
                    <p class="my-2 my-lg-4">To begin the project, we conducted a UX audit of the current system to identify any gaps or areas for improvement.
                        To gather further insight, we also conducted user interviews with doctors who were using the system. In addition,
                        we conducted a competitor analysis to examine the user behavior of various annotation software. Based on this information,
                        we can make informed decisions about how to improve the system.</p>
                </div>
            </div>

            <div class="img-user-flows w-100 mb-3">
                <img class="w-100" src="{{asset('assets/images/amal/sec-2.png')}}" alt="User Flow">
            </div>

            <div class="my-5 pt-lg-5">
                <div class="row m-2 m-md-0">
                    <div class="col-12 col-lg-8">
                        <h1 class="secondary-heading-case">Information Architecture & User Flows</h1>
                        <p class="my-2 my-lg-4">After completing our research, we created user flows and information architecture for the new system.
                            This was based on the requirements and insights gained from the competitor analysis and stakeholder feedback.
                            This helped us to address the needs of the users and create a more effective and efficient system.</p>
                    </div>
                </div>
                <div class="img-user-flows w-100 my-2">
                    <img class="w-100 d-none d-md-block" src="{{asset('assets/images/amal/sec-3.1.png')}}" alt="User Flow">
                    <img class="w-100 d-none d-md-block mt-4" src="{{asset('assets/images/amal/sec-3.2.png')}}" alt="User Flow">
                </div>
                <img class="w-100 d-block d-md-none" src="{{asset('assets/images/hilal/mobile/wireframes.png')}}" alt="User Flow">
            </div>
            <div class="my-5 pt-lg-5">
                <div class="row m-2 m-md-0">
                    <div class="col-12 col-lg-8">
                        <h1 class="secondary-heading-case">Wireframes</h1>
                        <p class="my-2 my-lg-4">Using the information gathered from the user flows and information architecture,
                            we were able to create wireframes for the new system. These wireframes allowed us to visualize how the system
                            would work and ensure that it would be useful for the users and meet their requirements.
                            By getting early feedback from stakeholders and users during the wireframing stage,
                            we were able to avoid potential gaps or issues in the final product.</p>
                    </div>
                </div>
                <div class="img-user-flows w-100 my-2">
                    <img class="w-100 d-none d-md-block" src="{{asset('assets/images/amal/wireframes.png')}}" alt="Wire-frames">
                </div>
                <img class="w-100 d-block d-md-none" src="{{asset('assets/images/amal/wireframes.png')}}" alt="User Flow">
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
                          <p>The finishing touch involved transferring models to insure consistency of work across all Amal product</p>
                    </div>
                </div>
                <div class="img-user-flows w-100 my-2">
                    <img class="w-100 d-none d-md-block" src="{{asset('assets/images/amal/Design-system.png')}}" alt="User Flow">
                </div>
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

        <section class="mobiles-both-sides sec-new-process">
            <div class="container">
                <div class="text-center head-All-new my-5 py-5">
                    <h1 class="primary-head-case"><span style="color: #0D132080">New</span>
                        <br>Approach</h1>
                    <p>We created designs for the various user groups including pathologists, lab admins, and attendants.
                        Each group had their own specific restrictions and permissions, making it easier for stakeholders
                        to pitch the product to potential clients before moving into the development stage.
                        By designing for these specific user groups, we were able to tailor the system to their needs and create a more effective product.
                    </p>
                </div>
                <div class="mt-5">
                    <div class="row h-100">
                        <div class="col-lg-6 h-100">
                            <div class="mobile-side">
                                <div class="mobile-img-1">
                                </div>
                                <p class="text-center p-5">The portal provides an extensive overview of cancer cases categorized according to the affected organs,
                                    offering a comprehensive record of the occurrences</p>
                            </div>
                        </div>

                        <div class="col-lg-6 h-100">
                            <div class="mobile-side">
                                <div class="mobile-img-2">
                                </div>
                                <p class="text-center p-5">The portal provides a comprehensive display of recorded cancer cases,
                                    presenting a detailed listing of each case</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="row h-100">
                        <div class="col-lg-6 h-100">
                            <div class="mobile-side">
                                <div class="mobile-img-3">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 h-100">
                            <div class="mobile-side">
                                <div class="mobile-img-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-5">
                    <img class="w-100 d-none d-md-block" src="{{asset('assets/images/amal/sec-5.png')}}" alt="Steps Image">
                    <p class="p-1 p-xl-5">Case tracking is much easier to understand now for lab admins a fresh and clean look.</p>
                </div>
            </div>
        </section>


        <section class='more-det-sec'>
            <div class="container">
                <div class="my-5 py-5">
                    <div class="row my-5">
                        <div class="col-md-6 bg-mobile-side text-center order-1 order-md-0">
                            <img class="" src="{{asset('assets/images/amal/sec-6.1.png')}}" alt="">
                        </div>
                        <div class="col-md-6 order-0 order-md-1">
                            <div class="text-side d-flex flex-column justify-content-center h-100 px-4">
                                <div class="streaming-para my-3 text-center text-md-start">
                                    <p>Doctors can use AI annotation on the portal, allowing them to enhance and optimize their marking processes.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row my-5">
                        <div class="col-md-6">
                            <div class="text-side d-flex flex-column justify-content-center h-100 px-4">
                                <div class="streaming-para my-3 text-center text-md-start">
                                    <p>Portal provides users with the convenient option to add comments directly on the images, allowing them to easily pinpoint and highlight any issues or concerns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center bg-mobile-side">
                            <img class="" src="{{asset('assets/images/amal/sec-6.2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="my-5">
            <div class="container">
                <div class="amal-2nd-last">

                </div>
                <p>Implemented a dashboard featuring tailored restrictions and permissions for individual users</p>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="bg-last-amal">

                </div>
            </div>
        </section>




        <section>

            <div class="container">

                <div class="row my-5">
                    <div class="col-12 col-lg-8">
                        <h2 class="secondary-heading-case">
                            Impact and future ✨
                        </h2>
                        <p>Our collaboration with Amal brought significant improvements to the UI/UX and report presentation aspects.
                            The enhanced user experience, streamlined report visualization, and effective social media engagement strategies have contributed to increased user satisfaction,
                            better communication of diagnostic findings, and expanded awareness of Amal's affordable cancer diagnosis services.
                        </p>
                        <br>
                        <p>In the future, they plan to extend this model to the international market, with many more developments yet to be revealed—you've only glimpsed a fraction of what's to come.
                        </p>

                    </div>
                </div>

            <div class="my-5">
                <a href="{{url('case-2')}}">
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
