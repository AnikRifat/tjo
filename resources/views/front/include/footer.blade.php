<footer class="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">

                    <div class="footer-widget footer-about">
                        <div class="footer-logo">
                            <img src="{{ asset('/') }}assets/images/content/{{ $content->logo }}" alt="logo">
                        </div>
                        <div class="footer-about-content">
                            <p>{{ $content->sub_title }}
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">

                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">Links</h2>
                        <ul>
                            @if(Route::is('index') )
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#courses">Packages</a>
                            </li>
                            <li>
                                <a href="#hit">How it Works</a>
                            </li>
                            <li>
                                <a href="#testimonials">Testimonials</a>
                            </li>

                            @else
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}/#about">About</a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}/#courses}">Packages</a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}/#hit">How it Works</a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}/#testimonials">Testimonials</a>
                            </li>

                            @endif
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
                        <p class="mb-2">
                            <i class="fas fa-envelope"></i>
                            {{ $contact->email }}
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-phone"></i>
                            {{ $contact->phone }}
                        </p>
                        <p class="mb-2">
                            <i class="fas fa-phone"></i>
                            {{ $contact->phone2 }}
                        </p>
                        <p class="mb-2">
                            <i class="fa-brands fa-weixin"></i>

                            {{ $contact->wechat }}
                        </p>
                        <p class="mb-2">
                            <i class="fa-brands fa-qq"></i>
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
                        <div class="">
                            <p class="mb-0">IT Partner: <a href="https://abaacorp.com/">Abaacorp.com.</a>


                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copyright-text">
                            <p class="mb-0">© 2022 TeacherJackOnline. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>


</footer>
