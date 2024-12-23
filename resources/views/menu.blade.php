<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    @include('layouts.header')

    <div class="container py-5">
        <h1 class="text-center mb-5 text-primary">Our Menu</h1>
        <div class="row g-4">
            <!-- Food Item 1 -->
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <img src="/Styles/images/pizza.jpg" class="card-img-top" alt="Margherita Pizza" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Margherita Pizza</h5>
                        <p class="card-text text-success">$12.00</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Food Item 2 -->
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <img src="/Styles/images/burger.jpg" class="card-img-top" alt="Cheeseburger" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cheeseburger</h5>
                        <p class="card-text text-success">$10.00</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Food Item 3 -->
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <img src="/Styles/images/salad.jpg" class="card-img-top" alt="Caesar Salad" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">Caesar Salad</h5>
                        <p class="card-text text-success">$8.00</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
