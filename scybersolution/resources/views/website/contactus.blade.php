@extends('website.layouts.app')
@section('content')
<!-- ================= CONTACT US ================= -->
<section class="contact-section py-5">
  <div class="container">

    <h2 class="gradient-heading text-center mb-3">Contact Us</h2>
    <p class="text-center text-muted mb-5">
      Get in touch with S Cyber Solutions (SCS)
    </p>

    <div class="row g-4">

      <!-- LEFT FORM -->
      <div class="col-lg-8 col-md-7">
        <div class="contact-form-box">

          <h4 class="mb-3">Get in Touch</h4>
          <p class="text-muted mb-4">Take a helpful hand</p>

          <form>

            <div class="row g-3">
              <div class="col-md-6">
                <label>Full Name</label>
                <input type="text" class="form-control" placeholder="Enter your full name">
              </div>

              <div class="col-md-6">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email">
              </div>

              <div class="col-md-6">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Enter your phone no.">
              </div>

              <div class="col-md-6">
                <label>Pincode</label>
                <input type="text" class="form-control" placeholder="Enter your pincode">
              </div>

              <div class="col-md-6">
                <label>State</label>
                <input type="text" class="form-control" placeholder="Please enter valid pincode.">
              </div>

              <div class="col-md-6">
                <label>City</label>
                <input type="text" class="form-control" placeholder="Please enter valid pincode.">
              </div>

              <div class="col-12">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter your address">
              </div>

              <div class="col-12">
                <label>Message</label>
                <textarea class="form-control" rows="4" placeholder="Message here..."></textarea>
              </div>
            </div>

            <p class="form-note mt-3">
              By clicking on <b>“Send Message”</b> you agree with our
              <a href="#">Terms and Conditions</a>, meaning you agree to get back
              in touch with you based on provided informations.
            </p>

            <button type="submit" class="btn send-btn mt-2">
              Send Message
            </button>

          </form>
        </div>
      </div>

      <!-- RIGHT INFO -->
      <div class="col-lg-4 col-md-5">
        <div class="contact-info-box">

          <h4>Contact Information</h4>

          <div class="info-item">
            <span>📞</span>
            <div>
              <strong>Phone</strong>
              <p>+91 95322 06517</p>
            </div>
          </div>

          <div class="info-item">
            <span>📧</span>
            <div>
              <strong>Email</strong>
              <p>support@scsservices.in</p>
            </div>
          </div>

          <div class="info-item">
            <span>📍</span>
            <div>
              <strong>Address</strong>
              <p>India – Serving PAN India</p>
            </div>
          </div>

          <div class="support-box">
            <h5>24×7 Support</h5>
            <p>Our team is always available to assist you with your queries.</p>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
@endsection