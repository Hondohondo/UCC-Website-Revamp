{{-- Newsletter section--}}

<section class="section-newsletter">

    <div class="container">
        {{--        <span class="subheading">Testimonials</span>--}}
        <h2 class="heading-2">
            Our Newsletter & Company Profile
        </h2>

        <div class="newsletter-profile">

            <div class="newsletter">

                <p class="newsletter-text">
                    Subscribe to our newsletter
                </p>

                <form action="#" class="newsletter-form">
                    <div class="newsletter-form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Bakari" required>
                    </div>
                    <div class="newsletter-form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="me@example.com" required>
                    </div>
                    <div class="newsletter-form-group">
                        <button class="btn btn--form background-blue">Subscribe now</button>
                    </div>
                </form>
            </div>

            <div class="profile">

                <p class="newsletter-text">
                    Download our company profile
                </p>

                <a href="{{ asset('documents/ucc-company-profile.pdf') }}" class="profile-link" target="_blank">
                    <img src="{{ asset('images/company-profile.jpg') }}" alt="UCC Company Profile" class="profile-img">
                </a>

{{--                <a href="{{ asset('pdfs/brochure.pdf') }}" download>Download PDF</a>--}}

            </div>

        </div>

    </div>

</section>
