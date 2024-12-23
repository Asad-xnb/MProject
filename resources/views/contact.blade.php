<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @include('layouts.header')

    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Contact Us</h1>
        <p class="text-center mb-5">We’d love to hear from you! Reach out to us using the form below or via the contact information provided.</p>
        
        <div class="row">

            <div class="col-md-4">
                <h4 class="text-primary mb-3">Get in Touch</h4>
                <p><i class="bi bi-geo-alt-fill text-primary"></i> 123 Main Street, City Name, Country</p>
                <p><i class="bi bi-telephone-fill text-primary"></i> +123 456 7890</p>
                <p><i class="bi bi-envelope-fill text-primary"></i> contact@example.com</p>
            </div>
            <div class="col-md-8">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Enter subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Write your message here" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5" >
        <h4 class="text-center text-primary mb-4">Find Us on the Map</h4>
        <div class="map-responsive">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.123123!2d-122.0838516846803!3d37.42206197982714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z37KwMjUnMTYuMyJOIDEyMsKwMDUnMDYuNCJX!5e0!3m2!1sen!2sus!4v1690145835671!5m2!1sen!2sus" 
                width="100%" 
                height="400" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"></iframe>
        </div>
    </div>




    @include('layouts.footer')
</body>
</html>