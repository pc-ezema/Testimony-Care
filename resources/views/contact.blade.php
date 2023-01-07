@extends('layouts.frontend')

@section('page-content')
<!--Page Title-->
<section class="page-title">
    <div class="auto-container">
        <h1>contact us</h1>
        <div class="bread-crumb">
            <ul class="">
                <li><a href="/">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <!--Go Down Button-->
    <div class="go-down">
        <div class="curve scroll-to-target" data-target="#sidebar-section"><span class="icon fa fa-arrow-down"></span></div>
    </div>
</section>

<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <!--Contact Section-->
                <div class="contact-section" id="contact-section">

                    <div class="auto-container">
                        <div class="row clearfix">

                            <!--Content Side-->
                            <div class="col-md-8 col-sm-7 col-xs-12 column pull-right">
                                <div class="sec-title">
                                    <h3>Drop Us A Line</h3>
                                    <h2>We’d Love To Hear From You</h2>
                                    <div class="line"></div>
                                </div>
                                <div class="form-box">
                                    <div role="form" class="wpcf7" id="wpcf7-f757-p370-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        @includeIf('layouts.error_template')
                                        <form action="/contact-us" method="post" class="wpcf7-form init">
                                            @csrf
                                            <div id="contact-form" novalidate="novalidate">
                                                <div class="row clearfix">
                                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-label">Your Name *</div>
                                                        <p> <span class="wpcf7-form-control-wrap text-147"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" required style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;"></span>
                                                        </p>
                                                    </div>
                                                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                        <div class="field-label">Your Email *</div>
                                                        <p> <span class="wpcf7-form-control-wrap email-650"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" required></span>
                                                        </p>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-label">Your Phone Number *</div>
                                                        <p> <span class="wpcf7-form-control-wrap text-148"><input type="number" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-required="true" aria-invalid="false" required></span>
                                                        </p>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-label">Subject *</div>
                                                        <p> <span class="wpcf7-form-control-wrap text-148"><input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" required></span>
                                                        </p>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                        <div class="field-label">Message *</div>
                                                        <p> <span class="wpcf7-form-control-wrap textarea-337"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" required></textarea></span>
                                                        </p>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                                                        <input type="submit" value="Send Us" class="wpcf7-form-control wpcf7-submit normal-btn theme-btn"><span class="ajax-loader"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                                        </form>
                                    </div>
                                </div>

                            </div>

                            <!--Left Side-->
                            <div class="col-md-4 col-sm-5 col-xs-12 column pull-left">
                                <div class="sec-title">
                                    <h3>Contact Info.</h3>
                                    <h2>Connect With Us</h2>
                                    <div class="line"></div>
                                </div>

                                <div class="info-box">
                                    <h3>Information</h3>

                                    <ul>
                                        <li><span class="icon fa fa-phone"></span>
                                            <p>07737047287</p>
                                            <p>01215546950</p>
                                            <p>07966934643</p>
                                        </li>
                                        <li><span class="icon fa fa-envelope"></span>
                                            <p><a href="mailto:http://info@testimonycare.co.uk">info@testimonycare.co.uk</a></p>
                                        </li>
                                    </ul>
                                    <br>

                                    <!-- <h3>Connect With Us</h3>
                                    <div class="social-links">
                                        <a href="https://www.facebook.com/"><span class="fa fa-facebook-f"></span></a>
                                        <a href="https://www.twitter.com/"><span class="fa fa-twitter"></span></a>
                                        <a href=""><span class="fa fa-pinterest"></span></a>
                                        <a href=""><span class="fa fa-google-plus"></span></a>
                                        <a href=""><span class="fa fa-youtube-play"></span></a>
                                    </div> -->
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="wpb_gmaps_widget wpb_content_element">
                    <div class="wpb_wrapper">
                        <div class="wpb_map_wraper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2429.375008006505!2d-1.9052119999999997!3d52.490451!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bc94b0099ee1%3A0xef739c2d4a89e750!2sGreat%20Hampton%20Row%2C%20Birmingham%20B19%203JG!5e0!3m2!1sen!2suk!4v1672846162459!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection