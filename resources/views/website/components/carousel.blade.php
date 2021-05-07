<div id="carouselExampleControls{{ $id }}" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ URL::asset('storage/'.$image1) }}" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="{{ URL::asset('storage/'.$image2) }}" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="{{ URL::asset('storage/'.$image3) }}" class="d-block w-100">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls{{ $id }}" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls{{ $id }}" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>