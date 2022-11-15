<footer class="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">

                    <div class="footer-widget footer-about">
                        <div class="footer-logo">
                            <img src="{{ asset('/') }}assets/front/img/logo.png" alt="logo">
                        </div>
                        <div class="footer-about-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">

                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Links</h2>
                        <ul>
                            <li><a href="">About</a></li>
                            <li><a href="">Courses</a></li>
                            <li><a href="">How it works</a></li>
                            <li><a href="">Testimmonial</a></li>
                        </ul>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="footer-widget footer-contact">

                        <div class="footer-contact-info">
                            {{-- <div class="footer-address">
                                <img src="{{ asset('/') }}assets/front/img/icon/icon-20.svg" alt="" class="img-fluid">
                            <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
                        </div> --}}
                        <p>
                            <img src="{{ asset('/') }}assets/front/img/icon/icon-19.svg" alt="" class="img-fluid">
                            <a href="https://dreamslms.dreamguystech.com/cdn-cgi/l/email-protection"
                              class="__cf_email__" data-cfemail="teacherjackonline@gmail.com">{{ $contact->email }}</a>
                        </p>
                        <p class="mb-0">
                            <img src="{{ asset('/') }}assets/front/img/icon/icon-21.svg" alt="" class="img-fluid">
                            {{ $contact->phone }}
                        </p>
                        <p class="mb-0">
                            <img src="{{ asset('/') }}assets/front/img/icon/skype.svg" alt="" class="img-fluid">
                            {{ $contact->skype }}
                        </p>
                        <p class="mb-0">
                            <img src="{{ asset('/') }}assets/front/img/icon/wechat.svg" alt="" class="img-fluid">
                            {{ $contact->wechat }}
                        </p>
                        <p class="mb-0">
                            <img src="{{ asset('/') }}assets/front/img/icon/qq.svg" alt="" class="img-fluid">
                            {{ $contact->qq }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">

            <div class="copyright">
                <div class="row">
                    <div class="col-md-6">
                        <div class="privacy-policy">
                            <ul>
                                <li><a href="term-condition.html">Terms</a></li>
                                <li><a href="privacy-policy.html">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copyright-text">
                            <p class="mb-0">© 2022 Abaacorp LTD. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>


</footer>
