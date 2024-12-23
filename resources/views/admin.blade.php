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
                    <h1 class="h2 text-primary">Manage Food Items</h1>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                </div>

   
                <section id="food-list">
                    <h3 class="mb-4">Food Items</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Food Name</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($foods as $food)
                                    <tr>
                                        <td>{{ $food['id'] }}</td>
                                        <td>{{ $food['name'] }}</td>
                                        <td>RS {{ $food['price'] }}</td>
                                        <td><img src="/images/{{ $food['image'] }}" alt="{{ $food['name'] }} image" width="50"></td>
                                        <td>
                                            <a href="/admin/update/{{ $food['id'] }}"> <button class="btn btn-sm btn-warning">Edit</button></a>
                                            <a href="/admin/delete/{{ $food['id'] }}"> <button class="btn btn-sm btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>

            </main>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
