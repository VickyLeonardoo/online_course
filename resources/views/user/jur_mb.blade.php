@extends('user.template.header')
@section('content')
<div class="page-body-wrapper">
    <div class="page-body-wrapper landing-main">
        <br><br>
        <!--admin option section start-->
        <section class="section-space bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="landing-header">
                            <h2><span class="digits">30+</span> Course</h2>
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    @foreach ($course as $data)
                    <div class="col-md-3">
                        <div class="live-box">
                            <img src="{{ asset('assets') }}/dashboard/images/landing/layouts_prebuild/1.jpg" class="img-fluid" alt=""/>
                              <a href="/detail-course-{{ $data->id_course }}" class="btn btn-sm btn-info">Detail</a>
                        </div>
                        <div class="m-t-15 m-b-20  text-center">
                            <h6 class="f-w-700">{{ $data->nama }}</h6>
                            @if ($data->level == 1)
                            <h6><i class="fa-solid fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            @elseif ($data->level == 2)
                            <h6><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            @elseif ($data->level == 3)
                            <h6><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            @elseif ($data->level == 4)
                            <h6><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            @elseif ($data->level == 5)
                            <h6><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </h6>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                </div>
            </div>
        </div>
        <!--footer start-->
        <!--footer ends-->

        <!-- Tap on Top -->
        <div class="tap-top">
            <div>
                <i class="fa fa-angle-double-up"></i>
            </div>
        </div>
        <!-- Tap on Ends -->
        <!--Page Body Ends-->
    </div>
</div>
@endsection