<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    @include('layouts.header')

    <div class="container py-5">
        <h1 class="text-center mb-5 text-primary">Our Menu</h1>
        <div class="row g-4">
             @foreach ($foods as $food)
                <div class="col-md-3">
                    <div class="card shadow-sm">
                    <img src="/images/{{$food['image']}}" class="card-img-top" alt="{{$food['name']}} image" style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$food['name']}}</h5>
                            <p class="card-text text-success">RS {{$food['price']}}</p>
                            <a href="/food-detail/{{$food['id']}}" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
