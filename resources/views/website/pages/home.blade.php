@extends('website.layouts.index')
@section('title', 'Homepage')
@section('body')
    <div class="py-5">
        <div class="container"> 
          <div class="row">
              
            @foreach ($data as $item)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow"> 

                        {{-- Carousel --}}
                        @include('website.components.carousel', [
                            "id" => $item->id,
                            "image1" => $item->image1,
                            "image2" => $item->image2,
                            "image3" => $item->image3,
                        ]);
                       
                        <div class="card-body">
                            <p class="card-text">
                                {{ $item->name }}
                                <br>
                                <small class="text-muted"> 
                                    {{ $item->category }}
                                </small>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    ₱  {{ $item->price }}
                                </small> 
                                <div class="btn-group">
                                    <a href="{{ URL::route('cart.add', $item->id)}}" class="btn btn-sm btn-primary">
                                        <i class="bi bi-cart"></i> Add to cart
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            @endforeach
            
        </div>
    </div>
@endsection