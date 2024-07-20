@extends('layout.main')
@section('title')
    {{ $title }}
@endsection
@section('content')
        
<div class="demo7 mb-25 t-thead-bg">
   <div class="container-fluid">
       <div class="row ">
           <div class="col-lg-12">

               <div class="breadcrumb-main">
                   <h4 class="text-capitalize breadcrumb-title">Demo 7</h4>
                   <div class="breadcrumb-action justify-content-center flex-wrap">
                       <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                               <li class="breadcrumb-item"><a href="#"><i
                                           class="uil uil-estate"></i>Dashboard</a></li>
                               <li class="breadcrumb-item active" aria-current="page">Demo 7</li>
                           </ol>
                       </nav>
                   </div>
               </div>

           </div>
           <div class="col-xxl-3 col-sm-6  col-ssm-12 mb-25">
               <!-- Card 1  -->
               <div class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">





                   <div class="overview-content w-100">
                       <div class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                           <div class="ap-po-details__titlebar">
                               <h1>100+</h1>
                               <p>Total Products</p>
                           </div>
                           <div class="ap-po-details__icon-area">
                               <div class="svg-icon order-bg-opacity-primary color-primary">

                                   <i class="uil uil-arrow-growth"></i>
                               </div>
                           </div>
                       </div>
                       <div class="ap-po-details-time">
                           <span class="color-success"><i class="las la-arrow-up"></i>
                               <strong>25.36%</strong></span>
                           <small>Since last month</small>
                       </div>
                   </div>

               </div>
               <!-- Card 1 End  -->
           </div>

           <div class="col-xxl-3 col-sm-6  col-ssm-12 mb-25">
               <!-- Card 2 -->
               <div class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">





                   <div class="overview-content w-100">
                       <div class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                           <div class="ap-po-details__titlebar">
                               <h1>30,825</h1>
                               <p>Total Orders</p>
                           </div>
                           <div class="ap-po-details__icon-area">
                               <div class="svg-icon order-bg-opacity-secondary color-secondary">

                                   <i class="uil uil-users-alt"></i>
                               </div>
                           </div>
                       </div>
                       <div class="ap-po-details-time">
                           <span class="color-success"><i class="las la-arrow-up"></i>
                               <strong>25.36%</strong></span>
                           <small>Since last month</small>
                       </div>
                   </div>

               </div>
               <!-- Card 2 End  -->
           </div>

           <div class="col-xxl-3 col-sm-6  col-ssm-12 mb-25">
               <!-- Card 3 -->
               <div class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">





                   <div class="overview-content w-100">
                       <div class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                           <div class="ap-po-details__titlebar">
                               <h1>$30,825</h1>
                               <p>Total Sales</p>
                           </div>
                           <div class="ap-po-details__icon-area">
                               <div class="svg-icon order-bg-opacity-success color-success">

                                   <i class="uil uil-usd-circle"></i>
                               </div>
                           </div>
                       </div>
                       <div class="ap-po-details-time">
                           <span class="color-danger"><i class="las la-arrow-down"></i>
                               <strong>25.36%</strong></span>
                           <small>Since last month</small>
                       </div>
                   </div>

               </div>
               <!-- Card 3 End  -->
           </div>

           <div class="col-xxl-3 col-sm-6  col-ssm-12 mb-25">
               <!-- Card 4  -->
               <div class="ap-po-details ap-po-details--2 p-25 radius-xl d-flex justify-content-between">





                   <div class="overview-content w-100">
                       <div class=" ap-po-details-content d-flex flex-wrap justify-content-between">
                           <div class="ap-po-details__titlebar">
                               <h1>30,825</h1>
                               <p>New Customers</p>
                           </div>
                           <div class="ap-po-details__icon-area">
                               <div class="svg-icon order-bg-opacity-infos color-infos">

                                   <i class="uil uil-tachometer-fast"></i>
                               </div>
                           </div>
                       </div>
                       <div class="ap-po-details-time">
                           <span class="color-success"><i class="las la-arrow-up"></i>
                               <strong>25.36%</strong></span>
                           <small>Since last month</small>
                       </div>
                   </div>

               </div>
               <!-- Card 4 End  -->
           </div>

           <div class="col-xxl-6 mb-25">

               <div class="card revenueChartTwo border-0">
                   <div class="card-header border-0">
                       <h6>Sales Revenue</h6>
                       <div class="card-extra">
                           <ul class="card-tab-links nav-tabs nav" role="tablist">
                               <li>
                                   <a class="active" href="#tl_revenue-today" data-bs-toggle="tab"
                                       id="tl_revenue-today-tab" role="tab"
                                       aria-selected="false">Today</a>
                               </li>
                               <li>
                                   <a href="#tl_revenue-week" data-bs-toggle="tab" id="tl_revenue-week-tab"
                                       role="tab" aria-selected="false">Week</a>
                               </li>
                               <li>
                                   <a href="#tl_revenue-month" data-bs-toggle="tab"
                                       id="tl_revenue-month-tab" role="tab"
                                       aria-selected="false">Month</a>
                               </li>
                           </ul>
                       </div>
                   </div>
                   <!-- ends: .card-header -->
                   <div class="card-body pt-0 pb-40">
                       <div class="tab-content">
                           <div class="tab-pane fade active show" id="tl_revenue-today" role="tabpanel"
                               aria-labelledby="tl_revenue-today-tab">
                               <div class="cashflow-display cashflow-display2 d-flex">

                               </div>
                               <!-- ends: .performance-stats -->

                               <div class="wp-chart">
                                   <div class="parentContainer">


                                       <div>
                                           <canvas id="saleRevenueToday"></canvas>
                                       </div>


                                   </div>
                               </div>

                               <!-- ends: .performance-stats -->
                           </div>
                           <div class="tab-pane fade" id="tl_revenue-week" role="tabpanel"
                               aria-labelledby="tl_revenue-week-tab">
                               <div class="cashflow-display cashflow-display2 d-flex">

                               </div>
                               <!-- ends: .performance-stats -->

                               <div class="wp-chart">
                                   <div class="parentContainer">


                                       <div>
                                           <canvas id="saleRevenueWeek"></canvas>
                                       </div>


                                   </div>
                               </div>

                               <!-- ends: .performance-stats -->
                           </div>
                           <div class="tab-pane fade" id="tl_revenue-month" role="tabpanel"
                               aria-labelledby="tl_revenue-month-tab">
                               <div class="cashflow-display cashflow-display2 d-flex">

                               </div>
                               <!-- ends: .performance-stats -->

                               <div class="wp-chart">
                                   <div class="parentContainer">


                                       <div>
                                           <canvas id="saleRevenueMonth"></canvas>
                                       </div>


                                   </div>
                               </div>

                               <!-- ends: .performance-stats -->
                           </div>
                       </div>
                   </div>
                   <!-- ends: .card-body -->
               </div>

           </div>

           <div class="col-xxl-6 mb-25">

               <div class="card border-0 px-25 h-100">
                   <div class="card-header px-0 border-0">
                       <h6>Source Of Revenue Generated</h6>
                       <div class="card-extra">
                           <ul class="card-tab-links nav-tabs nav" role="tablist">
                               <li>
                                   <a class="active" href="#t_selling-today-Source22" data-bs-toggle="tab"
                                       id="t_selling-today-Source22-tab" role="tab"
                                       aria-selected="true">Today</a>
                               </li>
                               <li>
                                   <a href="#t_selling-week-Source22" data-bs-toggle="tab"
                                       id="t_selling-week-Source22-tab" role="tab"
                                       aria-selected="true">Week</a>
                               </li>
                               <li>
                                   <a href="#t_selling-month-Source33" data-bs-toggle="tab"
                                       id="t_selling-month-Source33-tab" role="tab"
                                       aria-selected="true">Month</a>
                               </li>
                           </ul>
                       </div>
                   </div>
                   <div class="card-body p-0">
                       <div class="tab-content">
                           <div class="tab-pane fade active show" id="t_selling-today-Source22"
                               role="tabpanel" aria-labelledby="t_selling-today-Source22-tab">
                               <div class="selling-table-wrap selling-table-wrap--source">
                                   <div class="table-responsive">
                                       <table class="table table--default table-borderless">
                                           <thead>
                                               <tr>
                                                   <th>Source</th>
                                                   <th>Visitors</th>
                                                   <th>Page View</th>
                                                   <th>Revenue</th>
                                                   <th class="text-start">Trend</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-primary">
                                                               <img class="img-fluid"
                                                                   src="{{ asset('assets/img') }}/browser/google.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Google</span>
                                                       </div>
                                                   </td>
                                                   <td>23,397</td>
                                                   <td>12,201</td>
                                                   <td>
                                                       $5,536
                                                   </td>
                                                   <td>
                                                       <div class="d-flex align-center">
                                                           <div class="ratio-percentage me-15">80%</div>
                                                           <div class="progress-wrap mb-0">
                                                               <div class="progress">
                                                                   <div class="progress-bar bg-primary"
                                                                       role="progressbar" style="width: 80%;"
                                                                       aria-valuenow="80" aria-valuemin="0"
                                                                       aria-valuemax="100"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-facebook">
                                                               <i class="uil uil-facebook-f"></i>
                                                           </div>
                                                           <span>facebook</span>
                                                       </div>
                                                   </td>
                                                   <td>23,397</td>
                                                   <td>12,201</td>
                                                   <td>
                                                       $5,536
                                                   </td>
                                                   <td>
                                                       <div class="d-flex align-center">
                                                           <div class="ratio-percentage me-15">18%</div>
                                                           <div class="progress-wrap mb-0">
                                                               <div class="progress">
                                                                   <div class="progress-bar bg-secondary"
                                                                       role="progressbar" style="width: 18%;"
                                                                       aria-valuenow="18" aria-valuemin="0"
                                                                       aria-valuemax="100"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-info">
                                                               <img class="img-fluid"
                                                                   src="{{ asset('assets/img') }}/browser/twitter.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>twitter</span>
                                                       </div>
                                                   </td>
                                                   <td>23,397</td>
                                                   <td>12,201</td>
                                                   <td>
                                                       $5,536
                                                   </td>
                                                   <td>
                                                       <div class="d-flex align-center">
                                                           <div class="ratio-percentage me-15">52%</div>
                                                           <div class="progress-wrap mb-0">
                                                               <div class="progress">
                                                                   <div class="progress-bar bg-info"
                                                                       role="progressbar" style="width: 52%;"
                                                                       aria-valuenow="52" aria-valuemin="0"
                                                                       aria-valuemax="100"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-linkedin">
                                                               <i class="uil uil-linkedin"></i>
                                                           </div>
                                                           <span>Linkedin</span>
                                                       </div>
                                                   </td>
                                                   <td>23,397</td>
                                                   <td>12,201</td>
                                                   <td>
                                                       $5,536
                                                   </td>
                                                   <td>
                                                       <div class="d-flex align-center">
                                                           <div class="ratio-percentage me-15">72%</div>
                                                           <div class="progress-wrap mb-0">
                                                               <div class="progress">
                                                                   <div class="progress-bar bg-danger"
                                                                       role="progressbar" style="width: 72%;"
                                                                       aria-valuenow="72" aria-valuemin="0"
                                                                       aria-valuemax="100"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-instagram">
                                                               <i class="uil uil-instagram"></i>
                                                           </div>
                                                           <span>Instagram</span>
                                                       </div>
                                                   </td>
                                                   <td>23,397</td>
                                                   <td>12,201</td>
                                                   <td>
                                                       $5,536
                                                   </td>
                                                   <td>
                                                       <div class="d-flex align-center">
                                                           <div class="ratio-percentage me-15">92%</div>
                                                           <div class="progress-wrap mb-0">
                                                               <div class="progress">
                                                                   <div class="progress-bar bg-warning"
                                                                       role="progressbar" style="width: 92%;"
                                                                       aria-valuenow="92" aria-valuemin="0"
                                                                       aria-valuemax="100"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                           <div class="tab-pane fade" id="t_selling-week-Source22" role="tabpanel"
                               aria-labelledby="t_selling-week-Source22-tab">
                               <div class="selling-table-wrap selling-table-wrap--source">
                                   <div class="table-responsive">
                                       <table class="table table--default table-borderless">
                                           <thead>
                                               <tr>
                                                   <th>Source</th>
                                                   <th>Visitors</th>
                                                   <th>Page View</th>
                                                   <th>Revenue</th>
                                                   <th>Trend</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-primary">
                                                               <img class="img-fluid"
                                                                   src="{{ asset('assets/img') }}/browser/google.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Google</span>
                                                       </div>
                                                   </td>
                                                   <td>23,397</td>
                                                   <td>12,201</td>
                                                   <td>
                                                       $5,536
                                                   </td>
                                                   <td>
                                                       <div class="d-flex align-center justify-content-end">
                                                           <div class="ratio-percentage me-15">80%</div>
                                                           <div class="progress-wrap mb-0">
                                                               <div class="progress">
                                                                   <div class="progress-bar bg-primary"
                                                                       role="progressbar" style="width: 80%;"
                                                                       aria-valuenow="80" aria-valuemin="0"
                                                                       aria-valuemax="100"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-facebook">
                                                               <i class="uil uil-facebook-f"></i>
                                                           </div>
                                                           <span>facebook</span>
                                                       </div>
                                                   </td>
                                                   <td>23,397</td>
                                                   <td>12,201</td>
                                                   <td>
                                                       $5,536
                                                   </td>
                                                   <td>
                                                       <div class="d-flex align-center justify-content-end">
                                                           <div class="ratio-percentage me-15">18%</div>
                                                           <div class="progress-wrap mb-0">
                                                               <div class="progress">
                                                                   <div class="progress-bar bg-secondary"
                                                                       role="progressbar" style="width: 18%;"
                                                                       aria-valuenow="18" aria-valuemin="0"
                                                                       aria-valuemax="100"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-info">
                                                               <img class="img-fluid"
                                                                   src="{{ asset('assets/img') }}/browser/twitter.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>twitter</span>
                                                       </div>
                                                   </td>
                                                   <td>23,397</td>
                                                   <td>12,201</td>
                                                   <td>
                                                       $5,536
                                                   </td>
                                                   <td>
                                                       <div class="d-flex align-center justify-content-end">
                                                           <div class="ratio-percentage me-15">52%</div>
                                                           <div class="progress-wrap mb-0">
                                                               <div class="progress">
                                                                   <div class="progress-bar bg-info"
                                                                       role="progressbar" style="width: 52%;"
                                                                       aria-valuenow="52" aria-valuemin="0"
                                                                       aria-valuemax="100"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-linkedin">
                                                               <i class="uil uil-linkedin"></i>
                                                           </div>
                                                           <span>Linkedin</span>
                                                       </div>
                                                   </td>
                                                   <td>23,397</td>
                                                   <td>12,201</td>
                                                   <td>
                                                       $5,536
                                                   </td>
                                                   <td>
                                                       <div class="d-flex align-center justify-content-end">
                                                           <div class="ratio-percentage me-15">72%</div>
                                                           <div class="progress-wrap mb-0">
                                                               <div class="progress">
                                                                   <div class="progress-bar bg-danger"
                                                                       role="progressbar" style="width: 72%;"
                                                                       aria-valuenow="72" aria-valuemin="0"
                                                                       aria-valuemax="100"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-instagram">
                                                               <i class="uil uil-instagram"></i>
                                                           </div>
                                                           <span>Instagram</span>
                                                       </div>
                                                   </td>
                                                   <td>23,397</td>
                                                   <td>12,201</td>
                                                   <td>
                                                       $5,536
                                                   </td>
                                                   <td>
                                                       <div class="d-flex align-center justify-content-end">
                                                           <div class="ratio-percentage me-15">92%</div>
                                                           <div class="progress-wrap mb-0">
                                                               <div class="progress">
                                                                   <div class="progress-bar bg-warning"
                                                                       role="progressbar" style="width: 92%;"
                                                                       aria-valuenow="92" aria-valuemin="0"
                                                                       aria-valuemax="100"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                           <div class="tab-pane fade" id="t_selling-month-Source33" role="tabpanel"
                               aria-labelledby="t_selling-month-Source33-tab">
                               <div class="selling-table-wrap selling-table-wrap--source">
                                   <div class="table-responsive">
                                       <table class="table table--default table-borderless">
                                           <thead>
                                               <tr>
                                                   <th>Source</th>
                                                   <th>Visitors</th>
                                                   <th>Page View</th>
                                                   <th>Revenue</th>
                                                   <th>Trend</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-primary">
                                                               <img class="img-fluid"
                                                                   src="{{ asset('assets/img') }}/browser/google.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Google</span>
                                                       </div>
                                                   </td>
                                                   <td>23,397</td>
                                                   <td>12,201</td>
                                                   <td>
                                                       $5,536
                                                   </td>
                                                   <td>
                                                       <div class="d-flex align-center justify-content-end">
                                                           <div class="ratio-percentage me-15">80%</div>
                                                           <div class="progress-wrap mb-0">
                                                               <div class="progress">
                                                                   <div class="progress-bar bg-primary"
                                                                       role="progressbar" style="width: 80%;"
                                                                       aria-valuenow="80" aria-valuemin="0"
                                                                       aria-valuemax="100"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-facebook">
                                                               <i class="uil uil-facebook-f"></i>
                                                           </div>
                                                           <span>facebook</span>
                                                       </div>
                                                   </td>
                                                   <td>23,397</td>
                                                   <td>12,201</td>
                                                   <td>
                                                       $5,536
                                                   </td>
                                                   <td>
                                                       <div class="d-flex align-center justify-content-end">
                                                           <div class="ratio-percentage me-15">18%</div>
                                                           <div class="progress-wrap mb-0">
                                                               <div class="progress">
                                                                   <div class="progress-bar bg-secondary"
                                                                       role="progressbar" style="width: 18%;"
                                                                       aria-valuenow="18" aria-valuemin="0"
                                                                       aria-valuemax="100"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-info">
                                                               <img class="img-fluid"
                                                                   src="{{ asset('assets/img') }}/browser/twitter.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>twitter</span>
                                                       </div>
                                                   </td>
                                                   <td>23,397</td>
                                                   <td>12,201</td>
                                                   <td>
                                                       $5,536
                                                   </td>
                                                   <td>
                                                       <div class="d-flex align-center justify-content-end">
                                                           <div class="ratio-percentage me-15">52%</div>
                                                           <div class="progress-wrap mb-0">
                                                               <div class="progress">
                                                                   <div class="progress-bar bg-info"
                                                                       role="progressbar" style="width: 52%;"
                                                                       aria-valuenow="52" aria-valuemin="0"
                                                                       aria-valuemax="100"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-linkedin">
                                                               <i class="uil uil-linkedin"></i>
                                                           </div>
                                                           <span>Linkedin</span>
                                                       </div>
                                                   </td>
                                                   <td>23,397</td>
                                                   <td>12,201</td>
                                                   <td>
                                                       $5,536
                                                   </td>
                                                   <td>
                                                       <div class="d-flex align-center justify-content-end">
                                                           <div class="ratio-percentage me-15">72%</div>
                                                           <div class="progress-wrap mb-0">
                                                               <div class="progress">
                                                                   <div class="progress-bar bg-danger"
                                                                       role="progressbar" style="width: 72%;"
                                                                       aria-valuenow="72" aria-valuemin="0"
                                                                       aria-valuemax="100"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-instagram">
                                                               <i class="uil uil-instagram"></i>
                                                           </div>
                                                           <span>Instagram</span>
                                                       </div>
                                                   </td>
                                                   <td>23,397</td>
                                                   <td>12,201</td>
                                                   <td>
                                                       $5,536
                                                   </td>
                                                   <td>
                                                       <div class="d-flex align-center justify-content-end">
                                                           <div class="ratio-percentage me-15">92%</div>
                                                           <div class="progress-wrap mb-0">
                                                               <div class="progress">
                                                                   <div class="progress-bar bg-warning"
                                                                       role="progressbar" style="width: 92%;"
                                                                       aria-valuenow="92" aria-valuemin="0"
                                                                       aria-valuemax="100"></div>

                                                               </div>
                                                           </div>
                                                       </div>
                                                   </td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

           <div class="col-xxl-4 mb-25">

               <div class="card border-0 px-25">
                   <div class="card-header px-0 border-0">
                       <h6>New Product</h6>
                       <div class="card-extra">
                           <ul class="card-tab-links nav-tabs nav" role="tablist">
                               <li>
                                   <a class="active" href="#t_selling-today" data-bs-toggle="tab"
                                       id="t_selling-today-tab" role="tab"
                                       aria-selected="true">Today</a>
                               </li>
                               <li>
                                   <a href="#t_selling-week" data-bs-toggle="tab" id="t_selling-week-tab"
                                       role="tab" aria-selected="true">Week</a>
                               </li>
                               <li>
                                   <a href="#t_selling-month" data-bs-toggle="tab" id="t_selling-month-tab"
                                       role="tab" aria-selected="true">Month</a>
                               </li>
                           </ul>
                       </div>
                   </div>
                   <div class="card-body p-0">
                       <div class="tab-content">
                           <div class="tab-pane fade active show" id="t_selling-today" role="tabpanel"
                               aria-labelledby="t_selling-today-tab">
                               <div class="selling-table-wrap">
                                   <div class="table-responsive">
                                       <table class="table table--default table-borderless ">
                                           <thead>
                                               <tr>
                                                   <th>PRDUCTS NAME</th>
                                                   <th>Price</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                               src="{{ asset('assets/img') }}/giorgio.png"
                                                               alt="img">
                                                           <span>UV Protected Sunglass</span>
                                                       </div>
                                                   </td>
                                                   <td>$38,536</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                               src="{{ asset('assets/img') }}/headphone.png"
                                                               alt="img">
                                                           <span>Black Headphone</span>
                                                       </div>
                                                   </td>
                                                   <td>$20,573</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                               src="{{ asset('assets/img') }}/shoes.png"
                                                               alt="img">
                                                           <span>Nike Shoes</span>
                                                       </div>
                                                   </td>
                                                   <td>$17,457</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                               src="{{ asset('assets/img') }}/mac-pro.png"
                                                               alt="img">
                                                           <span>15" Mackbook Pro</span>
                                                       </div>
                                                   </td>
                                                   <td>$15,354</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                               src="{{ asset('assets/img') }}/creativ-bag.png"
                                                               alt="img">
                                                           <span>Women Bag</span>
                                                       </div>
                                                   </td>
                                                   <td>$12,354</td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                           <div class="tab-pane fade" id="t_selling-week" role="tabpanel"
                               aria-labelledby="t_selling-week-tab">
                               <div class="selling-table-wrap">
                                   <div class="table-responsive">
                                       <table class="table table--default table-borderless">
                                           <thead>
                                               <tr>
                                                   <th>PRDUCTS NAME</th>
                                                   <th>Price</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                               src="{{ asset('assets/img') }}/287.png"
                                                               alt="img">
                                                           <span>Samsung Galaxy S8 256GB</span>
                                                       </div>
                                                   </td>
                                                   <td>$60,258</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <img class="me-15 wh-34 img-fluid"
                                                               src="{{ asset('assets/img') }}/165.png"
                                                               alt="img">
                                                           <span>Half Sleeve Shirt</span>
                                                       </div>
                                                   </td>
                                                   <td>$2,483</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                               src="{{ asset('assets/img') }}/166.png"
                                                               alt="img">
                                                           <span>Marco Shoes</span>
                                                       </div>
                                                   </td>
                                                   <td>$19,758</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                               src="{{ asset('assets/img') }}/315.png"
                                                               alt="img">
                                                           <span>15" Mackbook Pro</span>
                                                       </div>
                                                   </td>
                                                   <td>$197,458</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                               src="{{ asset('assets/img') }}/506.png"
                                                               alt="img">
                                                           <span>Apple iPhone X</span>
                                                       </div>
                                                   </td>
                                                   <td>115,254</td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                           <div class="tab-pane fade" id="t_selling-month" role="tabpanel"
                               aria-labelledby="t_selling-month-tab">
                               <div class="selling-table-wrap">
                                   <div class="table-responsive">
                                       <table class="table table--default table-borderless">
                                           <thead>
                                               <tr>
                                                   <th>PRDUCTS NAME</th>
                                                   <th>Price</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                               src="{{ asset('assets/img') }}/287.png"
                                                               alt="img">
                                                           <span>Samsung Galaxy S8 256GB</span>
                                                       </div>
                                                   </td>
                                                   <td>$60,258</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <img class="me-15 wh-34 img-fluid"
                                                               src="{{ asset('assets/img') }}/165.png"
                                                               alt="img">
                                                           <span>Half Sleeve Shirt</span>
                                                       </div>
                                                   </td>
                                                   <td>$2,483</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                               src="{{ asset('assets/img') }}/166.png"
                                                               alt="img">
                                                           <span>Marco Shoes</span>
                                                       </div>
                                                   </td>
                                                   <td>$19,758</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                               src="{{ asset('assets/img') }}/315.png"
                                                               alt="img">
                                                           <span>15" Mackbook Pro</span>
                                                       </div>
                                                   </td>
                                                   <td>$197,458</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <img class="me-15 wh-34 img-fluid order-bg-opacity-primary"
                                                               src="{{ asset('assets/img') }}/506.png"
                                                               alt="img">
                                                           <span>Apple iPhone X</span>
                                                       </div>
                                                   </td>
                                                   <td>115,254</td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

           <div class="col-xxl-8 mb-25">

               <div class="card border-0 px-25">
                   <div class="card-header px-0 border-0">
                       <h6>Best Seller</h6>
                       <div class="card-extra">
                           <ul class="card-tab-links nav-tabs nav" role="tablist">
                               <li>
                                   <a class="active" href="#t_selling-today222" data-bs-toggle="tab"
                                       id="t_selling-today222-tab" role="tab"
                                       aria-selected="true">Today</a>
                               </li>
                               <li>
                                   <a href="#t_selling-week222" data-bs-toggle="tab"
                                       id="t_selling-week222-tab" role="tab"
                                       aria-selected="true">Week</a>
                               </li>
                               <li>
                                   <a href="#t_selling-month333" data-bs-toggle="tab"
                                       id="t_selling-month333-tab" role="tab"
                                       aria-selected="true">Month</a>
                               </li>
                           </ul>
                       </div>
                   </div>
                   <div class="card-body p-0">
                       <div class="tab-content">
                           <div class="tab-pane fade active show" id="t_selling-today222" role="tabpanel"
                               aria-labelledby="t_selling-today222-tab">
                               <div class="selling-table-wrap selling-table-wrap--source">
                                   <div class="table-responsive">
                                       <table class="table table--default table-borderless">
                                           <thead>
                                               <tr>
                                                   <th>Seller name</th>
                                                   <th>Company</th>
                                                   <th>Product</th>
                                                   <th>Revenue</th>
                                                   <th>Status</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-primary align-items-end">
                                                               <img class=" img-fluid"
                                                                   src="{{ asset('assets/img') }}/author/robert-1.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Robert Clinton</span>
                                                       </div>
                                                   </td>
                                                   <td>Samsung</td>
                                                   <td>Smart Phone</td>
                                                   <td>
                                                       $38,536
                                                   </td>
                                                   <td>Done</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-primary align-items-end">
                                                               <img class=" img-fluid"
                                                                   src="{{ asset('assets/img') }}/author/robert-2.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Michael Johnson </span>
                                                       </div>
                                                   </td>
                                                   <td>Asus</td>
                                                   <td>Laptop</td>
                                                   <td>
                                                       $20,573
                                                   </td>
                                                   <td>Done</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-secondary align-items-end">
                                                               <img class=" img-fluid"
                                                                   src="{{ asset('assets/img') }}/author/robert-3.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Daniel White</span>
                                                       </div>
                                                   </td>
                                                   <td>Google</td>
                                                   <td>Watch</td>
                                                   <td>
                                                       $17,457
                                                   </td>
                                                   <td>Pending</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-success align-items-end">
                                                               <img class=" img-fluid"
                                                                   src="{{ asset('assets/img') }}/author/robert-4.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Chris Barin </span>
                                                       </div>
                                                   </td>
                                                   <td>Apple</td>
                                                   <td>Computer</td>
                                                   <td>
                                                       $15,354
                                                   </td>
                                                   <td>Done</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-info align-items-end">
                                                               <img class=" img-fluid"
                                                                   src="{{ asset('assets/img') }}/author/robert-5.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Daniel Pink</span>
                                                       </div>
                                                   </td>
                                                   <td>Panasonic</td>
                                                   <td>Sunglass</td>
                                                   <td>
                                                       $12,354
                                                   </td>
                                                   <td>Done</td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                           <div class="tab-pane fade" id="t_selling-week222" role="tabpanel"
                               aria-labelledby="t_selling-week222-tab">
                               <div class="selling-table-wrap selling-table-wrap--source">
                                   <div class="table-responsive">
                                       <table class="table table--default table-borderless">
                                           <thead>
                                               <tr>
                                                   <th>Seller name</th>
                                                   <th>Company</th>
                                                   <th>Product</th>
                                                   <th>Revenue</th>
                                                   <th>Status</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-primary align-items-end">
                                                               <img class=" img-fluid"
                                                                   src="{{ asset('assets/img') }}/author/robert-1.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Robert Clinton</span>
                                                       </div>
                                                   </td>
                                                   <td>Samsung</td>
                                                   <td>Smart Phone</td>
                                                   <td>
                                                       $38,536
                                                   </td>
                                                   <td>Done</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-primary align-items-end">
                                                               <img class=" img-fluid"
                                                                   src="{{ asset('assets/img') }}/author/robert-2.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Michael Johnson </span>
                                                       </div>
                                                   </td>
                                                   <td>Asus</td>
                                                   <td>Laptop</td>
                                                   <td>
                                                       $20,573
                                                   </td>
                                                   <td>Done</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-secondary align-items-end">
                                                               <img class=" img-fluid"
                                                                   src="{{ asset('assets/img') }}/author/robert-3.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Daniel White</span>
                                                       </div>
                                                   </td>
                                                   <td>Google</td>
                                                   <td>Watch</td>
                                                   <td>
                                                       $17,457
                                                   </td>
                                                   <td>Pending</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-success align-items-end">
                                                               <img class=" img-fluid"
                                                                   src="{{ asset('assets/img') }}/author/robert-4.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Chris Barin </span>
                                                       </div>
                                                   </td>
                                                   <td>Apple</td>
                                                   <td>Computer</td>
                                                   <td>
                                                       $15,354
                                                   </td>
                                                   <td>Done</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-info align-items-end">
                                                               <img class=" img-fluid"
                                                                   src="{{ asset('assets/img') }}/author/robert-5.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Daniel Pink</span>
                                                       </div>
                                                   </td>
                                                   <td>Panasonic</td>
                                                   <td>Sunglass</td>
                                                   <td>
                                                       $12,354
                                                   </td>
                                                   <td>Done</td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                           <div class="tab-pane fade" id="t_selling-month333" role="tabpanel"
                               aria-labelledby="t_selling-month333-tab">
                               <div class="selling-table-wrap selling-table-wrap--source">
                                   <div class="table-responsive">
                                       <table class="table table--default table-borderless">
                                           <thead>
                                               <tr>
                                                   <th>Seller name</th>
                                                   <th>Company</th>
                                                   <th>Product</th>
                                                   <th>Revenue</th>
                                                   <th>Status</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-primary align-items-end">
                                                               <img class=" img-fluid"
                                                                   src="{{ asset('assets/img') }}/author/robert-1.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Robert Clinton</span>
                                                       </div>
                                                   </td>
                                                   <td>Samsung</td>
                                                   <td>Smart Phone</td>
                                                   <td>
                                                       $38,536
                                                   </td>
                                                   <td>Done</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-primary align-items-end">
                                                               <img class=" img-fluid"
                                                                   src="{{ asset('assets/img') }}/author/robert-2.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Michael Johnson </span>
                                                       </div>
                                                   </td>
                                                   <td>Asus</td>
                                                   <td>Laptop</td>
                                                   <td>
                                                       $20,573
                                                   </td>
                                                   <td>Done</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-secondary align-items-end">
                                                               <img class=" img-fluid"
                                                                   src="{{ asset('assets/img') }}/author/robert-3.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Daniel White</span>
                                                       </div>
                                                   </td>
                                                   <td>Google</td>
                                                   <td>Watch</td>
                                                   <td>
                                                       $17,457
                                                   </td>
                                                   <td>Pending</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-success align-items-end">
                                                               <img class=" img-fluid"
                                                                   src="{{ asset('assets/img') }}/author/robert-4.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Chris Barin </span>
                                                       </div>
                                                   </td>
                                                   <td>Apple</td>
                                                   <td>Computer</td>
                                                   <td>
                                                       $15,354
                                                   </td>
                                                   <td>Done</td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                       <div
                                                           class="selling-product-img d-flex align-items-center">
                                                           <div
                                                               class="selling-product-img-wrapper order-bg-opacity-info align-items-end">
                                                               <img class=" img-fluid"
                                                                   src="{{ asset('assets/img') }}/author/robert-5.png"
                                                                   alt="img">
                                                           </div>
                                                           <span>Daniel Pink</span>
                                                       </div>
                                                   </td>
                                                   <td>Panasonic</td>
                                                   <td>Sunglass</td>
                                                   <td>
                                                       $12,354
                                                   </td>
                                                   <td>Done</td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

           </div>

       </div>
       <!-- ends: .row -->
   </div>
</div>

   
@endsection
