<footer class="footer">
    <div class="container py-5">
        <div class="row">
            <!-- About Section -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-uppercase mb-3">About Eventify</h5>
                <p>Eventify is your go-to platform for seamless event planning. Whether it's a wedding, party, or corporate gathering, we help turn your dreams into reality.</p>
            </div>
            <!-- Quick Links Section -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h5 class="text-uppercase mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('homepage') }}" class="text-light">Home</a></li>
                    <li><a href="event_details.php" class="text-light">Event Details</a></li>
                    <li><a href="attendees.php" class="text-light">Attendees</a></li>
                    <li><a href="contact_us.php" class="text-light">Contact Us</a></li>
                </ul>
            </div>
            <!-- Social Media Section -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="text-uppercase mb-3">Follow Us</h5>
                <div>
                    <a href="#" class="text-light me-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <!-- Contact Section -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="text-uppercase mb-3">Contact Us</h5>
                <p><i class="fas fa-envelope"></i> support@eventify.com</p>
                <p><i class="fas fa-phone"></i> +1 234 567 890</p>
                <p><i class="fas fa-map-marker-alt"></i> 123 Eventify St, New York, NY</p>
            </div>
        </div>
        <hr class="my-4 text-light">
        <div class="text-center">
            <p class="mb-0">© 2024 Eventify. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<style>
    .footer {
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6));
        color: #ffffff;
        margin-top: auto;  /* Ensures footer is pushed to the bottom */
    }

    .footer h5 {
        font-weight: bold;
        color: #ffffff;
    }

    .footer a {
        color: #ffffff;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer a:hover {
        color: #ff69b4;
    }

    .footer p {
        margin-bottom: 0.5rem;
    }

    .footer hr {
        border-color: rgba(255, 255, 255, 0.2);
    }

    .footer .fab, .footer .fas {
        font-size: 1.2rem;
        transition: transform 0.3s ease;
    }

    .footer .fab:hover, .footer .fas:hover {
        transform: scale(1.2);
        color: #ff69b4;
    }
</style>
