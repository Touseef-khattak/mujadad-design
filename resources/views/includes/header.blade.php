<div class="navbar-container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light flex-column">
        <div class="container-fluid mb-md-4 p-md-0">

            <!-- <button class="navbar-toggler" type="button">
                <div id="nav-icon">
                    <span></span>
                    <span></span>
                </div>
            </button> -->

            <div class="navbar-collapse mt-3 pt-3 mt-md-0 pt-md-0" id="navbarLinks">
                <div class="navbar-nav mr-auto w-100 justify-content-around">
{{--                    Desktop Button--}}
                    <a class="nav-link d-none" id="show_dropdown" href="javascript:void(0)">Services...</a>
{{--                    Mobile Button--}}
                    <div class="accordion d-md-none" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="nav-link accordion-button collapsed" id="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Services
                                </button>
                            </h2>
                            <div id="collapseOne" class="mx-auto accordion-collapse collapse out" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body p-0">
                                    <ul class="p-0">
                                        <li class="align-content-center d-flex"><span class="secondary_para">01</span><a class="sub-heading animate_border" href="{{('ux-design')}}">Experience Design</a></li>
                                        <li class="align-content-center d-flex"><span class="secondary_para">02</span><a class="sub-heading animate_border" href="{{('development')}}">Development</a></li>
                                        <li class="align-content-center d-flex"><span class="secondary_para">03</span><a class="sub-heading animate_border" href="{{('marketing')}}">Digital Marketing</a></li>
                                        <li class="align-content-center d-flex"><span class="secondary_para">04</span><a class="sub-heading animate_border" href="{{('enterprise')}}">Enterprise Solution</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="nav-link" href="{{('home')}}">Mujadad</a>
                    <a class="nav-link" href="{{('about-me')}}">About me</a>
                    <a class="nav-link" href="{{('portfolio')}}">Resume</a>
                    <a class="nav-link" href="{{('about')}}">linkedin</a>
                    <!-- <a href="{{('contact')}}" class="btn red_btn">TALK TO US</a> -->
                </div>
            </div>
        </div>
        <div class="d-flex dropdown_menu d-none flex-row justify-content-between w-100 pt-md-2 pb-md-5">
            <div class="nav_item">
                <p class="py-md-4">01</p>
                <a class="heading_3 animate_border" href="{{('ux-design')}}">Experience Design</a>
            </div>
            <div class="nav_item">
                <p class="py-md-4">02</p>
                <a class="heading_3 animate_border" href="{{('development')}}">Development</a>
            </div>
            <div class="nav_item">
                <p class="py-md-4">03</p>
                <a class="heading_3 animate_border" href="{{('marketing')}}">Digital Marketing</a>
            </div>
            <div class="nav_item">
                <p class="py-md-4">04</p>
                <a class="heading_3 animate_border" href="{{('enterprise')}}">Enterprise Solution</a>
            </div>
        </div>
    </nav>
</div>
