<section class="industry-section-dark">
  <div class="container">

    
    <div class="text-center mb-5">
      <h6 class="section-tag">Industries</h6>
      <h2 class="section-title text-white">Sector-Specific Cyber Security Expertise</h2>
      <p class="section-desc text-light">
        Every industry faces unique cyber risks, regulatory pressures, and operational challenges.
      </p>
    </div>

    <div class="row g-4">

      <?php
      $industries = [
        "Healthcare","Real Estate","Education","E-commerce",
        "Fintech","Insurance","Travel & Hospitality","Logistics & Supply Chain",
        "Restaurant & Food Delivery","Entertainment & Media","SaaS & Technology","Human Resources",
        "Telecommunications","Manufacturing","Automotive","Energy & Utilities",
        "Legal Services","Pharmaceuticals","Fitness & Wellness","Gaming"
      ];

      foreach ($industries as $industry) {
      ?>
        <div class="col-lg-3 col-md-4 col-6">
          <div class="industry-card-dark">
            <i class="fas fa-shield-alt"></i>
            <p><?= $industry; ?></p>
          </div>
        </div>
      <?php } ?>

    </div>

  </div>
</section>