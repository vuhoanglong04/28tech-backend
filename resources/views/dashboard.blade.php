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
                        <h4 class="text-capitalize breadcrumb-title">Dashboard</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">

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
                                    <h1>{{ count($courses) }}</h1>
                                    <p>Total Courses</p>
                                </div>
                                <div class="ap-po-details__icon-area">
                                    <div class="svg-icon order-bg-opacity-primary color-primary">

                                        <i class="uil uil-arrow-growth"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="ap-po-details-time">
                                {{-- <span class="color-success"><i class="las la-arrow-up"></i>
                                    <strong>25.36%</strong></span>
                                <small>Since last month</small> --}}
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
                                    <h1>{{ count($orders) }}</h1>
                                    <p>Total Orders</p>
                                </div>
                                <div class="ap-po-details__icon-area">
                                    <div class="svg-icon order-bg-opacity-secondary color-secondary">

                                        <i class="uil uil-users-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="ap-po-details-time">
                                {{-- <span class="color-success"><i class="las la-arrow-up"></i>
                                    <strong>25.36%</strong></span>
                                <small>Since last month</small> --}}
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
                                    <h1>{{ \App\Helpers\NumberHelper::formatNumber($totalRevenue) }} VNĐ</h1>
                                    <p>Total Sales</p>
                                </div>
                                <div class="ap-po-details__icon-area">
                                    <div class="svg-icon order-bg-opacity-success color-success">

                                        <i class="uil uil-usd-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="ap-po-details-time">
                                {{-- <span class="color-danger"><i class="las la-arrow-down"></i>
                                    <strong>25.36%</strong></span>
                                <small>Since last month</small> --}}
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
                                    <h1>{{ count($users) }}</h1>
                                    <p>New Customers</p>
                                </div>
                                <div class="ap-po-details__icon-area">
                                    <div class="svg-icon order-bg-opacity-infos color-infos">

                                        <i class="uil uil-tachometer-fast"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="ap-po-details-time">
                                {{-- <span class="color-success"><i class="las la-arrow-up"></i>
                                    <strong>25.36%</strong></span>
                                <small>Since last month</small> --}}
                            </div>
                        </div>

                    </div>
                    <!-- Card 4 End  -->
                </div>

                <div class="col-xxl-6 mb-25">

                    <div class="card revenueChartTwo border-0">
                        <div class="card-header border-0">
                            <h6>Sales Revenue</h6>

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
                                                <canvas id="revenueChart" width="400" height="200"></canvas>

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


                <div class="col-xxl-4 mb-25">

                    <div class="card border-0 px-25">
                        <div class="card-header px-0 border-0">
                            <h6>New Course</h6>
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
                                                    @for ($i = 0; $i < count($courses); $i++)
                                                        <tr>
                                                            <td>
                                                                <div class="selling-product-img d-flex align-items-center">
                                                                    <img class="radius-xs img-fluid order-bg-opacity-primary"
                                                                        style="object-fit: cover"
                                                                        src="{{ $courses[$i]->image }}" alt="img">
                                                                    <span>{{ $courses[$i]->course_name }}</span>
                                                                </div>
                                                            </td>

                                                            <td>{{ \App\Helpers\NumberHelper::formatNumber($courses[$i]->discount) }}
                                                                VNĐ</td>
                                                        </tr>
                                                    @endfor

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
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        const orderData = [{
                month: 'January',
                revenue: {{ $monthlyRevenue[1] }}
            },
            {
                month: 'February',
                revenue: {{ $monthlyRevenue[2] }}
            },
            {
                month: 'March',
                revenue: {{ $monthlyRevenue[3] }}
            },
            {
                month: 'April',
                revenue: {{ $monthlyRevenue[4] }}
            },
            {
                month: 'May',
                revenue: {{ $monthlyRevenue[5] }}
            },
            {
                month: 'June',
                revenue: {{ $monthlyRevenue[6] }}
            },
            {
                month: 'July',
                revenue: {{ $monthlyRevenue[7] }}
            },
            {
                month: 'August',
                revenue: {{ $monthlyRevenue[8] }}
            },
            {
                month: 'September',
                revenue: {{ $monthlyRevenue[9] }}
            },
            {
                month: 'October',
                revenue: {{ $monthlyRevenue[10] }}
            },
            {
                month: 'November',
                revenue: {{ $monthlyRevenue[11] }}
            },
            {
                month: 'December',
                revenue: {{ $monthlyRevenue[12] }}
            }
        ];


        // Tách dữ liệu ra thành các mảng riêng biệt
        const labels = orderData.map(order => order.month);
        const data = orderData.map(order => order.revenue);

        // Tạo biểu đồ
        const ctx = document.getElementById('revenueChart').getContext('2d');
        const revenueChart = new Chart(ctx, {
            type: 'line', // Bạn có thể chọn loại biểu đồ khác như 'bar', 'pie', v.v.
            data: {
                labels: labels,
                datasets: [{
                    label: 'Sale Revenue',
                    data: data,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush
