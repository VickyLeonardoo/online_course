@extends('template.header')
@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>default
                    <small>Universal Admin panel</small>
                </h3>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Default</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends -->

<!-- Container-fluid starts -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-dashboard">
                        <div class="media">
                            <img class="mr-3" src="{{ asset('assets') }}/dashboard/images/dashboard-icons/document.png" alt="Generic placeholder image">
                            <div class="media-body text-right">
                                <h4 class="mt-0 counter font-primary">{{ $course }}</h4>
                                <span>Course</span>
                            </div>
                        </div>
                        <div class="dashboard-chart-container">
                            <div id="line-chart-sparkline-dashboard1" class="flot-chart-placeholder line-chart-sparkline"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-dashboard">
                        <div class="media">
                            <img class="mr-3" src="{{ asset('assets') }}/dashboard/images/dashboard-icons/operator.png" alt="Generic placeholder image">
                            <div class="media-body text-right">
                                <h4 class="mt-0 counter font-secondary">346</h4>
                                <span>New Clients</span>
                            </div>
                        </div>
                        <div class="dashboard-chart-container">
                            <div id="line-chart-sparkline-dashboard2" class="flot-chart-placeholder line-chart-sparkline"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-dashboard">
                        <div class="media">
                            <img class="mr-3" src="{{ asset('assets') }}/dashboard/images/dashboard-icons/chat.png" alt="Generic placeholder image">
                            <div class="media-body text-right">
                                <h4 class="mt-0 counter font-success">026</h4>
                                <span>Message</span>
                            </div>
                        </div>
                        <div class="dashboard-chart-container">
                            <div id="line-chart-sparkline-dashboard3" class="flot-chart-placeholder line-chart-sparkline"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-dashboard">
                        <div class="media">
                            <img class="mr-3" src="{{ asset('assets') }}/dashboard/images/dashboard-icons/like.png" alt="Generic placeholder image">
                            <div class="media-body text-right">
                                <h4 class="mt-0 counter font-info">9563</h4>
                                <span>New Likes</span>
                            </div>
                        </div>
                        <div class="dashboard-chart-container">
                            <div id="line-chart-sparkline-dashboard4" class="flot-chart-placeholder line-chart-sparkline"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends -->
@endsection