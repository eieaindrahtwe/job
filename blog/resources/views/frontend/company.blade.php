@extends('master')
@section('content')


      <!-- HOME -->
      <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <h1 class="text-white font-weight-bold">Gallery</h1>
              <div class="custom-breadcrumbs">
                <a href="index.html">Home</a> <span class="mx-2 slash">/</span>
                <span class="text-white"><strong>Gallery</strong></span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="site-section" id="next-section">
        <div class="container">
            <div class="row">
              {{-- <div class="col-lg-8 col-md-10 mx-auto"> --}}
                @foreach($items as $item)
                <div class="col-md-3">
                  <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$item->name}}</h5>
                      <p class="card-text">{{$item->description}}</p>

                      <p class="card-text">{{$item->brand->name}}</p>
                      <p class="card-text">{{$item->subcategory->name}}</p>

                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
      </section>

@endsection
