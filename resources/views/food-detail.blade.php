<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    @include('layouts.header')

    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="card food-detail shadow-lg rounded-lg overflow-hidden" style="max-width: 1000px; width: 100%;">
            <div class="row g-0">
                <!-- Food Image -->
                <div class="col-md-6">
                    <img src="/images/{{$food['image']}}" alt="{{$food['name']}} image" class="img-fluid" style="object-fit: cover; height: 100%; width: 100%; max-height: 500px;">
                </div>
                <div class="col-md-6 p-4 d-flex flex-column justify-content-between bg-white">
                    <div>
                        <h2 class="mb-3 text-primary">{{$food['name']}}</h2>
                        <p class="mb-4 text-muted">
                            {{$food['description']}}
                        </p>
                        <h4 class="text-success">Price: RS {{ $food['price'] }}</h4>
                    </div>
                    <button class="btn btn-secondary btn-lg">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
