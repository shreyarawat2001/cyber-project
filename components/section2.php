<section class="services-section">
  <div class="container">

    <div class="text-center mb-5">
      <h6 class="section-tag">Our Services</h6>
      <h2 class="section-title">Complete Cybersecurity Protection Suite</h2>
      <p class="section-desc">
        End-to-end cybersecurity solutions engineered to defend modern enterprises against evolving threats.
      </p>
    </div>

    <div class="row g-4">

      <?php
      $services = [
        ["Cybersecurity Services","cybersecurity-services-icons.png","Prevent breaches and reduce attack surface by up to 75%."],
        ["Cloud Security Services","cloud-security-services-icons.png","Eliminate misconfigurations responsible for 80% of breaches."],
        ["Threat Detection & Response","threat-detection-response-soc-mdr-xdr-icons.png","Detect and neutralize threats in real time."],
        ["Zero Trust Security","zero-trust-security-implementation-icons.png","Prevent lateral movement and insider threats."],
        ["Identity & Access Management","identity-access-management-iam-icons.png","Stop credential-based attacks."],
        ["AI-Powered Cybersecurity","ai-powered-cybersecurity-icons.png","Reduce response time by up to 90%."],
        ["Penetration Testing","penetration-testing-ethical-hacking-icons.png","Identify vulnerabilities before attackers do."],
        ["Ransomware Protection","ransomware-protection-incident-response-icons.png","Minimize downtime and financial loss."],
        ["Compliance & Risk Management","compliance-risk-management-grc-icons.png","Avoid penalties and maintain compliance."],
        ["Application Security","application-security-appsec-devsecops-icons.png","Secure applications before deployment."],
        ["vCISO Services","vciso-services-virtual-ciso-icons.png","Strategic security leadership on demand."]
      ];

      foreach ($services as $s) {
      ?>
        <div class="col-lg-4 col-md-6">
          <div class="service-card">

            
            <div class="icon">
              <img src="/cyber-project/assets/images/<?= $s[1]; ?>" alt="<?= $s[0]; ?>">
            </div>

            <h5><?= $s[0]; ?></h5>
            <p class="impact">Business Impact: <?= $s[2]; ?></p>
            <a href="#" class="card-link">Request Assessment →</a>

          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</section>