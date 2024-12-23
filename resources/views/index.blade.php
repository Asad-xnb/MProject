<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
  @include('layouts.header')

  <div class="jumbotron d-flex flex-column justify-content-center align-items-center text-center" style="height: 100vh; background: url('/images/restaurant.jpg') no-repeat center center/cover;">
    <div class="p-5" style="background-color: rgba(0, 0, 0, 0.8); border-radius: 10px;">
      <h1 class="display-4 text-white">Welcome to Our Restaurant</h1>
      <p class="lead text-white">Experience the best dining experience with us.</p>
      <a class="btn btn-secondary btn-lg" href="/menu" role="button" style="background-color: #6c757d; border-color: #6c757d;">Learn more</a>
    </div>
  </div>
  <div class="container my-5">
    <h2 class="text-left">Trending</h2>
    <div class="row">
      @foreach ($foods as $food)
        <div class="col-md-4">
                <div class="card">
                    <img src="/images/{{$food['image']}}" class="card-img-top" alt="{{$food['name']}} image" style="height: 200px; object-fit: cover;">
                  <div class="card-body">
                    <h5 class="card-title">{{$food['name']}}</h5>
                    <p class="card-text">{{$food['Description']}}</p>
                    <a href="/food-detail/{{$food['id']}}" class="btn btn-primary">Order Now</a>
                  </div>
                </div>
              </div>
      @endforeach
      
    </div>
  </div>
  <div class="container my-5">
    <div class="row">
    <div class="col-md-12 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Our Story</h2>
            <p class="card-text">Founded in 2020, our restaurant has quickly become a favorite dining destination for locals and visitors alike. We pride ourselves on offering a diverse menu that features both classic and contemporary dishes, all made with the freshest ingredients. Our team of talented chefs is dedicated to creating memorable dining experiences, and our friendly staff is always ready to provide exceptional service. Whether you're joining us for a casual meal or a special occasion, we strive to make every visit enjoyable and satisfying. Come and discover why our restaurant is the perfect place to enjoy great food and good company.</p>
            <a class="btn btn-secondary" href="#" role="button">View details »</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Our Menu</h2>
            <p class="card-text">Explore our wide range of delicious dishes.</p>
            <a class="btn btn-secondary" href="#" role="button">View details »</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">About Us</h2>
            <p class="card-text">Learn more about our story and values.</p>
            <a class="btn btn-secondary" href="#" role="button">View details »</a>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Contact</h2>
            <p class="card-text">Get in touch with us for reservations and inquiries.</p>
            <a class="btn btn-secondary" href="#" role="button">View details »</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.footer')

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>