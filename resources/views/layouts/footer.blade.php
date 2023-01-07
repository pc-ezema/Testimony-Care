<!--Main Footer-->
<footer class="main-footer">
    <!--Footer Upper-->
    <div class="footer-upper">
        <!--Go Up Button-->
        <div class="go-up">
            <div class="curve scroll-to-target" data-target="#main-header"><span class="icon fa fa-arrow-up"></span></div>
        </div>

        <div class="auto-container">
            <div class="row clearfix" style="display: flex; justify-content: center;">
                <div id="text-2" class="col-md-3 col-sm-6 col-xs-12 column widget_text">
                    <div class="footer-widget">
                        <h2>Quick link</h2>
                        <div class="textwidget">
                            <div class="textwidget">
                                <div class="links">
                                    <ul>
                                        <li><a href="/">Home </a></li>
                                        <li><a href="/about">About Us </a></li>
                                        <li><a href="/services">Our Services </a></li>
                                        <li><a href="/contact">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="custom_html-2" class="widget_text col-md-3 col-sm-6 col-xs-12 column widget_custom_html">
                    <div class="widget_text footer-widget">
                        <h2>Contact us</h2>
                        <div class="textwidget custom-html-widget">
                            <p>
                                {{ config('app.name') }}<br>
                                Moved To: St George's Community Hub, Great Hampton Road, Birmingham, B19 3JG. G21A, which is above G21.<br>
                                Company Number: 07006308
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-info">
                <ul>
                    <li>
                        <div class="info-title" style="color: #fff;"><span class="fa fa-phone"></span> Call Us Anytime</div>
                        <p class="info">07737047287, 01215546950, 07966934643</p>
                    </li>
                    <li>
                        <div class="info-title" style="color: #fff;"><span class="fa fa-clock-o"></span>Opening Hours </div>
                        <p class="info">Monday - Friday | 10:00 am - 5:00 pm</p>
                    </li>
                    <li>
                        <div class="info-title" style="color: #fff;"><span class="fa fa-at"></span> Email Us At</div>
                        <p class="info"><a href="mailto:http://info@testimonycare.co.uk">info@testimonycare.co.uk</a></p>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <!--Copyright-->
            <div class="copyright">2009 - {{ date('Y') }} © {{ config('app.name') }}. All Rights Reserved. Credits To CQC, Google, Everycare, Homestaycare</div>
        </div>
    </div>

</footer>
