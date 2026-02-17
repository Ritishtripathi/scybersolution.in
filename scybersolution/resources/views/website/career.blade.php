@extends('website.layouts.app')
@section('content')

<!-- ================= CAREER SECTION ================= -->
<section class="career-section py-5">
  <div class="container">

    <h2 class="gradient-heading text-center mb-3">Careers at SCS</h2>
    <p class="text-center text-muted mb-5">
      Build your future with S Cyber Solutions
    </p>

    <div class="row g-4">
 <!-- RIGHT : WHY WORK WITH US -->
      <div class="col-lg-4 col-md-5">
        <div class="career-info-box">

          <h4>Why Work With SCS?</h4>

          <div class="career-point">
            <span>🔐</span>
            <div>
              <strong>Security Is in Our DNA</strong>
              <p>
                We handle sensitive data and critical systems every day.
                At SCS, security is a core mindset — not just a requirement.
              </p>
            </div>
          </div>

          <div class="career-point">
            <span>🤝</span>
            <div>
              <strong>Teamwork That Builds Trust</strong>
              <p>
                Collaboration is at the heart of everything we do.
                We grow together, support each other, and succeed as one team.
              </p>
            </div>
          </div>

          <div class="career-point">
            <span>❤️</span>
            <div>
              <strong>Customer-First Approach</strong>
              <p>
                Customer satisfaction drives our decisions.
                We believe long-term trust matters more than short-term gains.
              </p>
            </div>
          </div>

          <div class="career-point">
            <span>🇮🇳</span>
            <div>
              <strong>Work That Creates Impact</strong>
              <p>
                From e-governance solutions to enterprise compliance,
                our work supports a secure and paperless digital India.
              </p>
            </div>
          </div>

        </div>
      </div>

      <!-- LEFT : CAREER FORM -->
      <div class="col-lg-8 col-md-7">
        <div class="career-form-box">

          <h4 class="mb-3">Apply for a Position</h4>
          <p class="text-muted mb-4">
            Share your details and our team will get back to you
          </p>

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
                <input type="text" class="form-control" placeholder="Enter your phone number">
              </div>

              <div class="col-md-6">
                <label>Position Applied For</label>
                <input type="text" class="form-control" placeholder="e.g. GST Executive, Sales Manager">
              </div>

              <div class="col-md-6">
                <label>Experience (Years)</label>
                <input type="text" class="form-control" placeholder="e.g. 2 Years">
              </div>

              <div class="col-md-6">
                <label>Current Location</label>
                <input type="text" class="form-control" placeholder="City / State">
              </div>

              <div class="col-12">
                <label>Why do you want to join SCS?</label>
                <textarea class="form-control" rows="4" placeholder="Write a short message..."></textarea>
              </div>

              <div class="col-12">
                <label>Upload Resume</label>
                <input type="file" class="form-control">
              </div>

            </div>

            <p class="form-note mt-3">
              By submitting this form, you agree to be contacted by
              <b>S Cyber Solutions (SCS)</b> regarding career opportunities.
            </p>

            <button type="submit" class="btn send-btn mt-2">
              Submit Application
            </button>

          </form>

        </div>
      </div>

     
    </div>
  </div>
</section>
@endsection