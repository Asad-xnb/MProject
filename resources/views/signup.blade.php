<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    @include('layouts.header')

    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="card shadow-lg rounded-lg p-4" style="max-width: 500px; width: 100%;">
            <h2 class="text-center mb-4 text-primary">Create an Account</h2>
            <form action="/signup" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                </div>
        
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
      
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required>
                </div>
      
                <div class="mb-3">
                    <label for="confirm-password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password" name="confirmPassword" placeholder="Re-enter your password" required>
                </div>
  
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                </div>
            </form>
            <p class="text-center mt-4 text-muted">
                Already have an account? <a href="/login" class="text-primary">Log In</a>
            </p>
        </div>
    </div>

    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirm-password').value;

            if (password !== confirmPassword) {
                event.preventDefault();
                alert('Passwords do not match. Please try again.');
            }
        });
    </script>
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
