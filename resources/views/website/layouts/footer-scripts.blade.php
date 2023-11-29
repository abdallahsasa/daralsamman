<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('website/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('website/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
<script src="{{asset('website/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('website/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('website/vendor/slick-carousel/slick/slick.js')}}"></script>
<script src="{{asset('website/vendor/multilevel-sliding-mobile-menu/dist/jquery.zeynep.js')}}"></script>
<script src="{{asset('website/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
<script src="{{asset('website/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{asset('website/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('website/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('website/vendor/slick-carousel/slick/slick.min.js')}}"></script>

<!-- JS HS Components -->
<script src="{{asset('website/js/hs.core.js')}}"></script>
<script src="{{asset('website/js/components/hs.unfold.js')}}"></script>
<script src="{{asset('website/js/components/hs.malihu-scrollbar.js')}}"></script>
<script src="{{asset('website/js/components/hs.fancybox.js')}}"></script>
<script src="{{asset('website/js/components/hs.slick-carousel.js')}}"></script>
<script src="{{asset('website/js/components/hs.selectpicker.js')}}"></script>
<script src="{{asset('website/js/components/hs.show-animation.js')}}"></script>
<script src="{{asset('website/js/components/hs.onscroll-animation.js')}}"></script>
<script src="{{asset('website/js/components/hs.quantity-counter.js')}}"></script>
<script src="{{asset('website/js/components/hs.scroll-nav.js')}}"></script>

<script src="{{asset('website/js/components/hs.cubeportfolio.js')}}"></script>





<!-- JS Bookworm -->
<!-- <script src="../../assets/js/bookworm.js"></script> -->

<script>
    $(document).on('ready', function () {
        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

        // initialization of select picker
        $.HSCore.components.HSSelectPicker.init('.js-select');

        // initialization of slick carousel
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

        // initialization of malihu scrollbar
        $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

        // initialization of quantity counter
        $.HSCore.components.HSQantityCounter.init('.js-quantity');

        // initialization of popups
        $.HSCore.components.HSFancyBox.init('.js-fancybox');

        // initialization of show animations
        $.HSCore.components.HSShowAnimation.init('.js-animation-link');

        // initialization of cubeportfolio
        $.HSCore.components.HSCubeportfolio.init('.cbp');

        // initialization of HSScrollNav component
        $.HSCore.components.HSScrollNav.init($('.js-scroll-nav'), {
            duration: 700
        });




        // init zeynepjs
        var zeynep = $('.zeynep').zeynep({
            onClosed: function () {
                // enable main wrapper element clicks on any its children element
                $("body main").attr("style", "");

                console.log('the side menu is closed.');
            },
            onOpened: function () {
                // disable main wrapper element clicks on any its children element
                $("body main").attr("style", "pointer-events: none;");

                console.log('the side menu is opened.');
            }

        });

        // handle zeynep overlay click
        $(".zeynep-overlay").click(function () {
            zeynep.close();
        });

        // open side menu if the button is clicked
        $(".cat-menu").click(function () {
            if ($("html").hasClass("zeynep-opened")) {
                zeynep.close();
            } else {
                zeynep.open();
            }
        });
    });




</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/652aca746fcfe87d54b9c71a/1hcnidme9';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6MJZEC42GY"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-6MJZEC42GY');
</script>
<!-- End Google tag (gtag.js) -->

<script>
    function updateProductNameLimits() {
        const isMobile = window.innerWidth <= 480; // or your mobile breakpoint
        document.querySelectorAll('.product-name').forEach(element => {
            const fullName = element.getAttribute('data-full-name');
            const limit = isMobile ? element.getAttribute('data-limit-mobile') : element.getAttribute('data-limit-desktop');
            element.textContent = fullName.length > limit ? fullName.substring(0, limit) + '...' : fullName;
        });
    }

    // Run on load and on resize
    window.addEventListener('resize', updateProductNameLimits);
    document.addEventListener('DOMContentLoaded', updateProductNameLimits);
</script>


