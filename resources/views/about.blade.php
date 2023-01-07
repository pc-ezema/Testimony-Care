@extends('layouts.frontend')

@section('page-content')
<!--Page Title-->
<section class="page-title" style="background-image:url('../index/wp-content/uploads/2019/01/page-title-1.jpg');">
    <div class="auto-container">
        <h1>About Us</h1>
        <div class="bread-crumb">
            <ul class="">
                <li><a href="/">Home</a></li>
                <li>About us</li>
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
                <!--Desc Box-->
                <div class="desc-box">
                    <div class="auto-container">
                        <div class="sec-title no-underline">
                            <h2>We Are A Covid Secure Environment!</h2>
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
                <!--About Section-->
                <section class="about-section" id="about-section">

                    <!--Lower Content-->
                    <div class="lower-content" style="background-image:url('../wp-content/uploads/2017/02/1.jpg');">
                        <div class="auto-container">
                            <div class="content-box">
                                <div class="row clearfix">

                                    <!--Column-->
                                    <div class="col-md-7  col-sm-7 col-xs-12 column" style="font-size: 2.2rem;">
                                        <h2 class="main-title"></h2>
                                        </p>
                                        <h3>Our Aim/Objectives</h3>
                                        <p>To Provide A Flexible Service That Improves And Sustains People's Quality Of Life.</p>
                                        <p>Assist With Various Needs.</p>
                                        <p>Maintain Social Care Standards By Keeping Dignity, Privacy, Independence, Giving Respect And Choices.</p>
                                        
                                        <h3>Our Services</h3>
                                        <p>{{config('app.name')}} Provides Companionship Services, Live In:</p>
                                        <ul class="styled-list" style="line-height: 4.5rem;">
                                            <li>We Provide Supported Living Services.</li>
                                            <li>We Supply Staff To Residential and Nursing Homes.</li>
                                            <li>{{config('app.name')}} Provides Home Care Services To People / Service Users.</li>
                                        </ul>
                                        <p>We Take Referrals From Organisations And Individuals To Support People With Different Challenges Including:</p>
                                        <ul class="styled-list">
                                            <li>Dementia</li>
                                            <li>Frailty and physically disability.</li>
                                            <li>Learning disability.</li>
                                            <li>Mental health needs.</li>
                                        </ul>
                                    </div>

                                    <!--Column-->
                                    <div class="col-md-5  col-sm-5 col-xs-12 column" style="font-size: 2.2rem; line-height: 4.5rem;">
                                        <article class="featured-box">
                                            <figure class="image"><a href="#"><img src="../wp-content/uploads/2016/10/gallery-image-1-1.jpg" alt=""></a></figure>
                                            <ul class="styled-list">
                                                <li>Our Services Are Based On A "Person-Centred Approach"</li>
                                                <li>The Needs Of The People We Care For Are Of Utmost Importance To Us.</li>
                                                <li>Our Entire Team Are Committed To Meeting People's Needs.</li>
                                                <li>We Are Committed To Delivering The Best Quality And Value Always.</li>
                                            </ul>
                                       </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection