@extends('user.template.header')
@section('content')
<div class="page-body-wrapper">
    <div class="page-body-wrapper landing-main">
        <br><br>
        <!--admin option section start-->
        <section class="section-space exclusive-features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="landing-header">
                            <h2>EXCLUSIVE FEATURE FOR ADMIN</h2>
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-6 order-sm-2 order-md-0">
                        <div class="inner-block">
                            <div>
                                <h4 class="mb-3">Page Builder</h4>
                                <p class="mb-3">We've wonderfully added an exclusive builder in the template to make your life easier and your design experience elementary. The template has tons of builder options for handling your web.</p>
                                <a href="default/page-builder.html" target="_blank" class="btn btn-primary mr-2">View Demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="exclusive-image text-right">
                            <img src="{{ asset('assets') }}/dashboard/images/landing/exclusive/1-1.png" class="img-fluid" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        <section class="section-space updates-features advance-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="landing-header">
                            <h2 class="mb-0">Every Updates Upcoming Features</h2>
                            <p> Pre-Build Admin(Coming Soon..)</p>
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-lg-8 col-md-10">
                                    <div class="row">
                                        <div class="col-md-3 col-6 updates-xs-mb">
                                            <a href="/jurusan-informatika"> 
                                            <img src="{{ asset('assets') }}/dashboard/images/landing/cooming/pre-build-admin-1.png" class="img-fluid" alt=""/>
                                            </a>
                                            <h6 class="mb-0">Teknik Informatika</h6>
                                        </div>
                                        <div class="col-md-3 col-6 updates-xs-mb">
                                            <a href="/jurusan-elektro"> 
                                            <img src="{{ asset('assets') }}/dashboard/images/landing/cooming/pre-build-admin-1.png" class="img-fluid" alt=""/>
                                            </a>
                                            <h6 class="mb-0">Teknik Elektronika</h6>
                                        </div>
                                        <div class="col-md-3 col-6 updates-xs-mb">
                                            <a href="/jurusan-mesin"> 
                                            <img src="{{ asset('assets') }}/dashboard/images/landing/cooming/pre-build-admin-1.png" class="img-fluid" alt=""/>
                                            </a>
                                            <h6 class="mb-0">Teknik Mesin</h6>
                                        </div>
                                        <div class="col-md-3 col-6 updates-xs-mb">
                                            <a href="/jurusan-manajemen-bisnis"> 
                                            <img src="{{ asset('assets') }}/dashboard/images/landing/cooming/pre-build-admin-1.png" class="img-fluid" alt=""/>
                                            </a>
                                            <h6 class="mb-0">Manajemen Bisnis</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-space key-features-section bg-white" id="key-feature">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="landing-header">
                            <h2>Key Features</h2>
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-1.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>Seamless Coding</h5>
                                <p class="mb-0">We have crafted our templates very carefully and our code is W3C validated</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-2.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>Lots of Table Example</h5>
                                <p class="mb-0">We made sure that you get lots of table options to choose</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-3.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>Easy to Customize</h5>
                                <p class="mb-0">Our Template is easy to do any required changes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-4.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>Multiple File Uploads</h5>
                                <p class="mb-0">Option to upload more than one file at one time</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-5.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>Calendar Design</h5>
                                <p class="mb-0">We have included Calendar  application  with  Material art</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-6.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>Gallery Options</h5>
                                <p class="mb-0">Included gallery options for you to showcase products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-7.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>Editors</h5>
                                <p class="mb-0">Options to select the editors that you are comfortable with</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-8.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>owl carousel</h5>
                                <p class="mb-0">Touch enabled jQuery plugin that lets you create a beautiful responsive carousel</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-9.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>Bootstrap</h5>
                                <p class="mb-0">Cloudui is built with latest version of bootstrap</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-10.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>Fully responsive</h5>
                                <p class="mb-0">100% fully responsive layout, It display well in any size of devices</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-11.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>Rich components</h5>
                                <p class="mb-0">A lot of UI components, plugins and widgets</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-12.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>Data visualisation</h5>
                                <p class="mb-0">A lot of customised chart libraries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-13.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>3000s of icons</h5>
                                <p class="mb-0">Over 3000+ icons to choose</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-14.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>SCSS</h5>
                                <p class="mb-0">Built with scss to make development and customisation easier</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-15.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>Support</h5>
                                <p class="mb-0">we are always there as your backbone for any of your minor query</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main pb-0">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-16.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content pb-xs-feature">
                                <h5>Clean design</h5>
                                <p class="mb-0">Clean and attractive design</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main pb-0 xs-mt-feature">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-17.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content pb-xs-feature">
                                <h5>Color templates</h5>
                                <p class="mb-0">Dark and light templates available</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="feature-main pb-0 xs-mt-feature">
                            <div class="feature-icon">
                                <img src="{{ asset('assets') }}/dashboard/images/landing/icon/key-feature-18.png" class="img-fluid" alt=""/>
                            </div>
                            <div class="feature-content">
                                <h5>Documentation</h5>
                                <p class="mb-0">Well documented</p>
                            </div>
                        </div>
                    </div>
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