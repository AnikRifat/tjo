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
                            <li><a href="">About</a></li>
                            <li><a href="">Courses</a></li>
                            <li><a href="">How it works</a></li>
                            <li><a href="">Testimonial</a></li>
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
                            <p class="mb-0">IT Partner: Abaacorp.com.

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
