@extends('user.template.materi')
@section('content')
<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <section class="content">
          <div class="container-fluid">  
            <div class="row justify-content-center">
              <div class="col-10">
                @foreach ($course as $item)
                <?php 
                $i = 1;
                ?>
                <div class="card" style="background-color: fff;">
                  <div class="card-header">
                    <h2 class="float-left" style="font-size:22px;">{{ $item->judul_materi }}</h2>
                      <div class="embed-responsive embed-responsive-16by9 rounded">
                        <iframe class="embed-responsive-item" src="{{ $item->link_materi }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        @endforeach
                      </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
@endsection