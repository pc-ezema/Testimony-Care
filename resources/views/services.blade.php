@extends('layouts.frontend')

@section('page-content')
<!--Page Title-->
<section class="page-title">
    <div class="auto-container">
        <h1> Services</h1>
        <div class="bread-crumb">
            <ul class="">
                <li><a href="/">Home</a></li>
                <li>Our Services</li>
            </ul>
        </div>
    </div>
    <!--Go Down Button-->
    <div class="go-down">
        <div class="curve scroll-to-target" data-target="#sidebar-section"><span class="icon fa fa-arrow-down"></span></div>
    </div>
</section>

<!--Sidebar Page-->
<div class="sidebar-section no-bg" id="sidebar-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side  col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="font-size: 2.2rem; line-height: 4.5rem;">
                <!--Default Section-->
                <section class="blog-section">
                    <!--Blog Post-->
                    <!-- blog post item -->
                    <h2>Our Services</h2>
                    <p>{{config('app.name')}} Provides Companionship Services, Live In:</p>
                    <ul style="margin-bottom: 3rem;">
                        <li>We Provide Supported Living Services.</li>
                        <li>We Supply Staff To Residential and Nursing Homes.</li>
                        <li>{{config('app.name')}} Provides Home Care Services To People / Service Users.</li>
                        <li>We Take Referrals From Organisations And Individuals To Support People With Different Challenges Including:</li>
                        <ol>
                            <li>Dementia</li>
                            <li>Frailty and physically disability.</li>
                            <li>Learning disability.</li>
                            <li>Mental health needs.</li>
                        </ol>
                        
                    </ul>
                </section>
            </div>
            <!--Content Side-->
        </div>
    </div>
</div>
@endsection