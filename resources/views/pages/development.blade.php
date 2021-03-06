@extends('layouts.default')
@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col p-md-0">
                    <h4>Price Table</h4>
                </div>
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                        </li>
                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Elements</a>
                        </li> -->
                        <li class="breadcrumb-item active">Pricetable</li>
                    </ol>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-8 col-xxl-12">
                    <div class="pricing-wrapper">

                        <div class="pricing-heading-text">
                            <h2>Find the Perfect package for <span class="text-primary">Your Business</span></h2>
                        </div>

                        <div class="pricing-tables">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-pricing-table card">
                                        <div class="upper-border style-1"></div>
                                        <p class="plan-name">LOCAL BASIC</p>
                                        <div class="plan-icon">
                                            <img src="{{  asset('images/icons/9.png')  }}" alt="Icon">
                                        </div>
                                        <div class="plan-price style-1">
                                            <span class="currency-icon">&#36;</span><h2>149</h2><span class="currency-timeplan">/Month</span>
                                        </div>
                                        <div class="plan-specification">
                                            <ul>
                                                <li>5 Primary Keywords</li>
                                                <li>20 Secondary Keywords</li>
                                                <li><del>Analytics</del></li>
                                            </ul>
                                        </div>
                                        <a href="" class="btn btn-rounded style-1">Select Plan</a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-pricing-table card">
                                        <div class="upper-border style-2"></div>
                                        <p class="plan-name">LOCAL 1</p>
                                        <div class="plan-icon">
                                            <img src="{{  asset('images/icons/10.png')  }}" alt="Icon">
                                        </div>
                                        <div class="plan-price style-2">
                                            <span class="currency-icon">&#36;</span><h2>249</h2><span class="currency-timeplan">/Month</span>
                                        </div>
                                        <div class="plan-specification">
                                            <ul>
                                                <li>10 Primary Keywords</li>
                                                <li>40 Secondary Keywords</li>
                                                <li>Analytics</li>
                                            </ul>
                                        </div>
                                        <a href="" class="btn btn-rounded style-2">Select Plan</a>
                                        <div class="card-footer px-xl-5 border-0">
                                            <p>7 Day Money-back guarantee Cancel anytime</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-pricing-table card">
                                        <div class="ribbon ribbon-style-7">Current Plan</div>
                                        <div class="upper-border style-3"></div>
                                        <p class="plan-name">LOCAL 2</p>
                                        <div class="plan-icon">
                                            <img src="{{  asset('images/icons/11.png')  }}" alt="Icon">
                                        </div>
                                        <div class="plan-price style-3">
                                            <span class="currency-icon">&#36;</span><h2>349</h2><span class="currency-timeplan">/Month</span>
                                        </div>
                                        <div class="plan-specification">
                                            <ul>
                                                <li>15 Primary Keywords</li>
                                                <li>60 Secondary Keywords</li>
                                                <li>Analytics</li>
                                            </ul>
                                        </div>
                                        <a href="" class="btn btn-rounded style-3">Select Plan</a>
                                        <div class="card-footer px-xl-5 border-0">
                                            <p>7 Day Money-back guarantee Cancel anytime</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pricing-footer-text text-center">
                            <p>Have alarge Team? <a class="text-primary" href=""><b>Contact Us</b></a> for informationabout more Enterprise Options.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
Content body end
***********************************-->

@endsection
