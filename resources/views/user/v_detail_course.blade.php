@extends('user.template.header')
@section('content')
<!--page-wrapper Start-->
<div class="page-wrapper">
    <!--Page Body Start-->
    <div class="page-body-wrapper landing-main">
        <section class="section-space exclusive-features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="landing-header">
                           
                            <h2></h2>
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div>
                                @foreach ($m_course as $item)
                                @endforeach

                                @if ($item->id_courses == $item->id_course and $item->id_user == Auth::guard('user')->user()->id_user)
                                <a href="/materi-{{ $item->id_course }}-chapter-1" class="btn btn-primary form-control">Lihat Materi</a>
                                @else
                                <button class="btn btn-primary form-control" data-toggle="modal" data-target="#exampleModal{{ $item->id_course }}">Enroll</button>
                               @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 ">
                        <div class="exclusive-image text-right">
                            <iframe width="100%" height="542" src="https://www.youtube.com/embed/024Fmd9ZIH0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>
                    </div>
                </div>
                    <div class="row product-page-main">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs border-tab mb-0" id="top-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="false">
                                        Deskripsi</a>
                                    <div class="material-border"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">Tools</a>
                                    <div class="material-border"></div>
                                </li>
                                
                            </ul>
                            @foreach ($course as $item)
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade  active show" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                                    <p class="mb-0 m-t-20">
                                        {{ $item->deskripsi }}
                                    </p>
                                    
                                </div>
                                <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                                    <p class="mb-0 m-t-20">
                                        {{ $item->tools }}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </section>
    </div>
</div>

@foreach ($m_course as $item)
<div class="modal fade" id="exampleModal{{ $item->id_course }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $item->nama }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <form action="/tambah-enroll" method="POST">
                    @csrf
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input type="hidden" name="id_course" value="{{ $item->id_course }}">
            <div class="modal-body">
                Kamu ingin Enroll Course {{ $item->nama }}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
                <input type="submit" class="btn btn-secondary" value="Ya"></i>
            </div>
        </form>
        </div>
    </div>
</div>
@endforeach


@endsection