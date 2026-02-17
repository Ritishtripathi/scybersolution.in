@extends('website.layouts.app')
@section('content')
<!-- ================= DOWNLOAD SECTION ================= -->
<section class="download-section py-5">
  <div class="container">

    <h2 class="gradient-heading text-center mb-4">
      Other Required Software
    </h2>

    <div class="download-table-box">

      <div class="table-responsive">
        <table class="table align-middle text-center">
          <thead>
            <tr>
              <th class="text-start">Filename & Size</th>
              <th>Contact No.</th>
              <th>Download</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td class="text-start">
                <strong>Java Runtime Environment (JRE for Windows)</strong>
                <br>
                <small class="text-muted">Size: NA</small>
              </td>
              <td>NA</td>
              <td>
                <a href="downloadfile" class="download-btn">
                  <i class="fa fa-download"></i> Download
                </a>
              </td>
            </tr>

            <tr>
              <td class="text-start">
                <strong>.NET Framework Setup (for Windows)</strong>
                <br>
                <small class="text-muted">Size: NA</small>
              </td>
              <td>NA</td>
              <td>
                <a href="downloadfile" class="download-btn">
                  <i class="fa fa-download"></i> Download
                </a>
              </td>
            </tr>
          </tbody>

        </table>
      </div>

    </div>
  </div>
</section>
@endsection