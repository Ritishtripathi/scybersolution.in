@extends('website.layouts.app')
@section('content')
<!-- ================= USER GUIDE SECTION ================= -->
<section class="guide-section py-5">
  <div class="container">

    <h2 class="gradient-heading text-center mb-3">
      User Guide
    </h2>
    <p class="text-center text-muted mb-5">
      Follow these simple steps to use our services smoothly
    </p>

    <div class="row g-4">

      <!-- Step 1 -->
      <div class="col-lg-3 col-md-6">
        <div class="guide-box text-center">
          <div class="step-number">01</div>
          <h5>Select Service</h5>
          <p>
            Choose the required service such as DSC, GST, ITR or
            company registration from our services page.
          </p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-lg-3 col-md-6">
        <div class="guide-box text-center">
          <div class="step-number">02</div>
          <h5>Fill the Form</h5>
          <p>
            Provide your correct details in the application form
            and upload the required documents.
          </p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-lg-3 col-md-6">
        <div class="guide-box text-center">
          <div class="step-number">03</div>
          <h5>Verification Process</h5>
          <p>
            Our expert team will verify your information and
            contact you if any additional details are required.
          </p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="col-lg-3 col-md-6">
        <div class="guide-box text-center">
          <div class="step-number">04</div>
          <h5>Get Your Service</h5>
          <p>
            Once approved, your service will be processed and
            delivered quickly and securely.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>
@endsection