<footer data-scroll-section data-cursor-white="true" id="footer" >
    <div class="container" data-scroll data-scroll-speed="0">

        <div class="row border-b-footer px-0">
            <div class="col-md-12  pe-md-0 px-0">
                <h2 class="sub-heading"><a class="animate_border" href="{{('contact')}}">Let’s work together 🙌</a></h2>
                <h3 class="subpro-head">Get in touch.</h3>
            </div>
        </div>
        <div class="row justify-content-between align-items-center py-md-4">
            <div class="col-6 col-md-2">
                <a href="mailto:Info@mujadad.com" class="primary-para-grey animate_border my-lg-3 my-md-0 mx-auto d-inline-block float-none float-md-start">&#169; 2023 Mujadad Hussain</a>
                <a href="mailto:Info@mujadad.com" class="primary-para-black animate_border my-3 mx-auto float-none float-md-start">Currently based in UAE</a>
            </div>
            <div class="col-6 col-md-3">
                <div class="social_links_footer w-100 justify-content-end d-flex">
                    <a class="ft_social_link animate_border my-3 my-md-0" target="_blank" href="https://www.linkedin.com/company/">LinkedIn <img class="d-inline mx-2" width="18" src="{{asset('assets/images/arrow.svg')}}" alt="MUJJADDAD LINKEDIN"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="chat_icon_container" class="position-fixed">
    <img src="{{asset('assets/images/chat_bot.svg')}}" id="chat_icon" alt="Chat Icon">
</div>
<script>
 var lastScrollTop = 0;
    var delta = 5; // Adjust as needed
    var navbarHeight = $('.navbar-container').outerHeight();

    $(window).scroll(function () {
        var scrollPosition = $(this).scrollTop();
        var scrollDirection = (scrollPosition > lastScrollTop) ? 'down' : 'up';

        if (Math.abs(scrollPosition - lastScrollTop) <= delta) return;

        if (scrollDirection === 'down' && scrollPosition > navbarHeight) {
            $('.navbar-container').addClass('hide-navbar');
        } else {
            $('.navbar-container').removeClass('hide-navbar');
        }

        lastScrollTop = scrollPosition;
    });


</script>