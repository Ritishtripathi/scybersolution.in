@extends('website.layouts.app')
@section('content')
<!-- ================= TOP SERVICES ================= -->
<div class="container">
<h2 class="gradient-heading">Our Top Services</h2>
<div class="row g-4">

<div class="col-md-4">
<div class="service-card">
<img src="{{ asset('website/images/GST.png') }}" alt="services">
<h5>GST Registration</h5>
<p class="price">₹999 Only</p>
</div>
</div>

<div class="col-md-4">
<div class="service-card">
<img src="{{ asset('website/images/ITR.png') }}" alt="services">
<h5>ITR Filing</h5>
<p class="price">₹999 Only</p>
</div>
</div>

<div class="col-md-4">
<div class="service-card">
<img src="{{ asset('website/images/DSC.png') }}" alt="services">
<h5>Digital Signature</h5>
<p class="price">₹999 Only</p>
</div>
</div>

</div>
</div>
<!-- ================= SERVICES MARQUEE SECTION ================= -->
<section class="announcement-section">
  <div class="marquee-wrapper">
    <div class="marquee-content">
      
      🚀 GST Registration & Filing Services |
      📄 Income Tax Return (ITR) Filing |
      🔐 Digital Signature Certificate (DSC) |
      🏢 GeM Portal Registration & Tender Support |
      📊 Company & MSME Registration |
      🔎 Compliance & Documentation Support |
      🤝 Channel Partner Program – S Cyber Solutions (SCS) |
      📞 Contact Now: +91 95322 06517 |
      
      🚀 GST Registration & Filing Services |
      📄 Income Tax Return (ITR) Filing |
      🔐 Digital Signature Certificate (DSC) |
      🏢 GeM Portal Registration & Tender Support |
      📊 Company & MSME Registration |
      🔎 Compliance & Documentation Support |
      🤝 Channel Partner Program – S Cyber Solutions (SCS) |
      📞 Contact Now: +91 95322 06517

    </div>
  </div>
</section>

<!-- ================= ABOUT ================= -->
<section class="about-section py-5">
  <div class="container">

    <h2 class="gradient-heading text-center mb-3">About SCS</h2>
    <p class="text-center text-muted mb-5">
      S Cyber Solutions (SCS) – Your Trusted Partner for Digital Compliance & Government Services
    </p>

    <div class="row g-4">

      <!-- Who We Are -->
      <div class="col-lg-6">
        <div class="about-box h-100">
          <h5>Who We Are</h5>
          <p>
            S Cyber Solutions (SCS) is a leading digital compliance and tax service provider 
            offering reliable, fast and secure solutions for businesses and individuals 
            across India.
          </p>
          <p>
            We specialize in Digital Signature Certificates (DSC), GST registration & filing, 
            Income Tax Return (ITR) services, GeM portal support, company registration 
            and other government compliance solutions.<br>
            <b><i>"Sashi Prakash Chaubey (Founder & CEO)"</i></b>
          </p>
        </div>
      </div>

      <!-- Why Choose Us -->
      <div class="col-lg-6">
        <div class="about-box h-100">
          <h5>Why Choose Us</h5>
          <ul>
            <li>Affordable & Transparent Pricing</li>
            <li>24×7 Dedicated Support</li>
            <li>Fast Processing & Secure Documentation</li>
            <li>03+ Years of Industry Experience</li>
            <li>20+ Professional Team Members</li>
          </ul>
        </div>
      </div>

      <!-- Our Mission -->
      <div class="col-lg-6">
        <div class="about-box h-100">
          <h5>Our Mission</h5>
          <p>
            Our mission is to simplify government and corporate compliance 
            through secure digital solutions, innovative technology, and 
            expert guidance — making compliance hassle-free for everyone.
          </p>
        </div>
      </div>

      <!-- Our Vision -->
      <div class="col-lg-6">
        <div class="about-box h-100">
          <h5>Our Vision</h5>
          <p>
            To become one of India's most trusted digital compliance platforms, 
            empowering businesses with reliable, fast and secure services 
            under one roof.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ================= STATS ================= -->
<section class="stats">
<div class="container">
<div class="row">

<div class="col-md-3 stat-box">
<h2>100+</h2>
<p>Our Clients</p>
</div>

<div class="col-md-3 stat-box">
<h2>24×7</h2>
<p>Support</p>
</div>

<div class="col-md-3 stat-box">
<h2>3+</h2>
<p>Years Experience</p>
</div>

<div class="col-md-3 stat-box">
<h2>20+</h2>
<p>Team Members</p>
</div>

</div>
</div>
</section>

<!-- ================= REVIEWS ================= -->
<section class="review-section">
<div class="container">
<h2 class="gradient-heading">Client Reviews</h2>

<div id="reviewCarousel" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">

<div class="carousel-item active">
<div class="review-box text-center">
⭐⭐⭐⭐⭐ <br> Excellent service and very fast process!
</div>
</div>

<div class="carousel-item">
<div class="review-box text-center">
⭐⭐⭐⭐⭐ <br> Support team is very helpful & professional.
</div>
</div>

<div class="carousel-item">
<div class="review-box text-center">
⭐⭐⭐⭐⭐ <br> Best GST & ITR filing experience.
</div>
</div>

</div>
</div>

</div>
</section>
<!-- ================= FAQ SECTION ================= -->
<section class="faq-section py-5">
  <div class="container">

    <h2 class="gradient-heading text-center mb-3">
      Frequently Asked Questions
    </h2>
    <p class="text-center text-light mb-5">
      SCS (S Cyber Solutions) – Digital Signature & Compliance Support
    </p>

    <div class="accordion custom-accordion" id="faqAccordion">

      <!-- A -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq1">
            A. General - Digital Signatures & Certificates
          </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Digital Signature Certificate (DSC) is a secure digital key issued by certifying authorities to validate and certify the identity of the person holding this certificate.
          </div>
        </div>
      </div>

      <!-- B -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2">
            B. DSC Application & Verification Process
          </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            The DSC application includes identity verification, document submission, and video verification process as per CCA guidelines.
          </div>
        </div>
      </div>

      <!-- C -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3">
            C. DSC Usage on Government Portals
          </button>
        </h2>
        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            DSC is required for GST, MCA, Income Tax, eTendering, GeM Portal and other government compliance filings.
          </div>
        </div>
      </div>

      <!-- D -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4">
            D. DSC Security & Token Related FAQs
          </button>
        </h2>
        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            USB tokens protect your digital certificate from unauthorized access. Always keep your token PIN secure.
          </div>
        </div>
      </div>

      <!-- E -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq5">
            E. Pantasign Business & Channel Partner FAQs
          </button>
        </h2>
        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            SCS works with authorized certifying authorities to provide genuine DSC solutions and business partnerships.
          </div>
        </div>
      </div>

      <!-- F -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq6">
            F. Public Key Infrastructure & Cryptography FAQs
          </button>
        </h2>
        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Public Key Infrastructure (PKI) ensures encryption, authentication, and data integrity using cryptographic keys.
          </div>
        </div>
      </div>

      <!-- G -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq7">
            G. Authorities, Agreements & Compliance
          </button>
        </h2>
        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            S Cyber Solutions operates in compliance with IT Act 2000 and guidelines issued by Controller of Certifying Authorities (CCA).
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ================= LATEST BLOG ================= -->
<section class="latest-blog py-5">
  <div class="container">

    <h2 class="gradient-heading">Latest Blogs</h2>
    <p class="text-center text-muted mb-5">
      Stay updated with the latest news, tax updates & compliance guides
    </p>

    <div class="row g-4">

      <!-- Blog 1 -->
      <div class="col-md-4">
        <div class="blog-card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRRsoIU9IIaJoR7oUtwYhOdkMejqtLgSfJ_TgdHHwq5WXrB_dOMn6EYx1oG_oxfqHsplZ2ZK45kSWsHnDEWZUi&s&ec=121528423" alt="Blog">
          <div class="blog-content">
            <span class="blog-date">15 Jan 2026</span>
            <h5>New GST Rules You Must Know in 2026</h5>
            <p>Understand the latest GST updates, compliance rules and filing changes.</p>
            <a href="#" class="read-more">Read More →</a>
          </div>
        </div>
      </div>

      <!-- Blog 2 -->
      <div class="col-md-4">
        <div class="blog-card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRRsoIU9IIaJoR7oUtwYhOdkMejqtLgSfJ_TgdHHwq5WXrB_dOMn6EYx1oG_oxfqHsplZ2ZK45kSWsHnDEWZUi&s&ec=121528423" alt="Blog">
          <div class="blog-content">
            <span class="blog-date">10 Jan 2026</span>
            <h5>How to File ITR Online Without Errors</h5>
            <p>A step-by-step guide to file your income tax return smoothly.</p>
            <a href="#" class="read-more">Read More →</a>
          </div>
        </div>
      </div>

      <!-- Blog 3 -->
      <div class="col-md-4">
        <div class="blog-card">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRRsoIU9IIaJoR7oUtwYhOdkMejqtLgSfJ_TgdHHwq5WXrB_dOMn6EYx1oG_oxfqHsplZ2ZK45kSWsHnDEWZUi&s&ec=121528423" alt="Blog">
          <div class="blog-content">
            <span class="blog-date">05 Jan 2026</span>
            <h5>Benefits of Digital Signature Certificate (DSC)</h5>
            <p>Why DSC is important for GST, MCA filings and online security.</p>
            <a href="#" class="read-more">Read More →</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
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