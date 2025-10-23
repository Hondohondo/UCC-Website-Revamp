{{-- Footer section--}}

<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="logo-col footer-col">
                <a href="#" class="footer-logo">
                    <img src="{{ asset('images/ucc-logo.jpg') }}" alt="UDSM Logo" class="logo">
                </a>
                <ul class="social-links">
                    <li><a class="footer-link" href="https://www.instagram.com/ucc.udsm/"><ion-icon class="social-icon" name="logo-instagram"></ion-icon></a></li>

                    <li><a class="footer-link" href="https://www.facebook.com/ucc.udsm"><ion-icon class="social-icon" name="logo-facebook"></ion-icon></a></li>
                    <li><a class="footer-link" href="https://twitter.com/ucc_udsm"><ion-icon class="social-icon" name="logo-twitter"></ion-icon></a></li>
                    <li><a class="footer-link" href="https://www.youtube.com/channel/UCatescM31NjL4wC9oESBHVA"><ion-icon class="social-icon" name="logo-youtube"></ion-icon></a></li>
                </ul>
                <p class="copyright">
                    Copyright &copy; {{ date('Y') }} by UCC. All rights reserved.
                </p>
            </div>
            <div class="address-col footer-col">
                <p class="footer-heading">Contact us</p>
                <address class="contacts">
                    <p class="address">
                        University of Dar es Salaam, University Road, Dar es salaam
                    </p>
                    <p>
                        <a class="footer-link" href="tel:+255754782120">+255 754782120</a> <br>
                        <a class="footer-link" href="mailto:info@ucc.co.tz">info@ucc.co.tz</a>
                    </p>

                </address>

            </div>
            <nav class="nav-col footer-col">
                <p class="footer-heading">For Students</p>
                <ul class="footer-nav">
                    <li><a class="footer-link" href="#">Apply now</a></li>
                    <li><a class="footer-link" href="#">Academic courses</a></li>
                    <li><a class="footer-link" href="#">Certificate programs</a></li>
                    <li><a class="footer-link" href="#">Diploma programs</a></li>
                </ul>
            </nav>
            <nav class="nav-col footer-col">
                <p class="footer-heading">For Enterprise</p>
                <ul class="footer-nav">
                    <li><a class="footer-link" href="#">Tailor-Made courses</a></li>
                    <li><a class="footer-link" href="#">Software development</a></li>
                    <li><a class="footer-link" href="#">IT consulting</a></li>
                    <li><a class="footer-link" href="#">IT infrastructure</a></li>
                </ul>
            </nav>
            <nav class="nav-col footer-col">
                <p class="footer-heading">Company</p>
                <ul class="footer-nav">
                    <li><a class="footer-link" href="/about">About us</a></li>
                    <li><a class="footer-link" href="#">Partners</a></li>
                    <li><a class="footer-link" href="#">Careers</a></li>
                    <li><a class="footer-link" href="#">Contact us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</footer>
