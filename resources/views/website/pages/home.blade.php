@extends('website.layouts.index')
@section('title', 'Homepage')
@section('body')
    <div class="py-5">
        <div class="container"> 
          <div class="row"> 
            <div class="col-md-4">
                <div class="card mb-4 box-shadow"> 
                    <div id="carouselExampleControls" class="carousel slide"">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://3.imimg.com/data3/VE/QY/MY-7539096/white-egg-500x500.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="https://3.imimg.com/data3/VE/QY/MY-7539096/white-egg-500x500.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="https://3.imimg.com/data3/VE/QY/MY-7539096/white-egg-500x500.jpg" class="d-block w-100">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Medium Eggs - 1 Tray
                            <br>
                            <small class="text-muted"> 
                                Poultry
                            </small>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                ₱   330.12
                            </small> 
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-primary">
                                    <i class="bi bi-cart"></i> Add to cart
                                </button> 
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection