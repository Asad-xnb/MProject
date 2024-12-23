<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    @include('layouts.header')
    <div class="container-fluid">
        <div class="row">
        
            <nav class="col-md-2 d-none d-md-block bg-light sidebar shadow-sm" style="height: 100vh;">
                <div class="position-sticky pt-3">
                    <h5 class="text-center text-primary">Admin Panel</h5>
                    <ul class="nav flex-column mt-4">
                        <li class="nav-item">
                            <a class="nav-link active" href="/admin">
                                <i class="bi bi-list"></i> Food List
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/add-food">
                                <i class="bi bi-plus-square"></i> Add Food
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 text-primary">Update Food Item</h1>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>

                <section id="add-food" class="mt-5">
                    <h3 class="mb-4">Add New Food Item</h3>
                    <form method="POST" action="/admin/update" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $food['id'] }}">
                        <div class="mb-3">
                            <label for="foodName" class="form-label">Food Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $food['name'] }}" id="foodName" placeholder="Enter food name">
                        </div>
                        <div class="mb-3">
                            <label for="desc" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="desc">{{ $food['description'] }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="foodCategory" class="form-label">Category</label>
                            <select class="form-control" name="category" id="foodCategory">
                                <option value="starter" {{ $food['category'] == 'starter' ? 'selected' : '' }}>Starter</option>
                                <option value="main_course" {{ $food['category'] == 'main_course' ? 'selected' : '' }}>Main Course</option>
                                <option value="dessert" {{ $food['category'] == 'dessert' ? 'selected' : '' }}>Dessert</option>
                                <option value="beverage" {{ $food['category'] == 'beverage' ? 'selected' : '' }}>Beverage</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="foodPrice" class="form-label">Price</label>
                            <input type="number" class="form-control" value="{{ $food['price'] }}" name="price" id="foodPrice" placeholder="Enter price">
                        </div>
                        <div class="mb-3">
                            <label for="foodImage" class="form-label">Image</label>
                            <input type="file" class="form-control" name="image" id="foodImage">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Food</button>
                    </form>
                </section>

            </main>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
