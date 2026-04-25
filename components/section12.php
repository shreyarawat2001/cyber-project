<section class="faq-section">
  <div class="container text-center">

    <span class="faq-tag">❓ Frequently Asked</span>
    <h2 class="faq-title">Questions & Answers</h2>
    <p class="faq-sub">
      Everything decision-makers need to know before partnering with us.
    </p>

    <div class="accordion mt-5" id="faqAccordion">

      <?php
      $faqs = [
        [
          "What are cybersecurity services and why are they important for businesses today?",
          "Cybersecurity services are a combination of technologies, processes, and expert support designed to protect your business from cyber threats such as data breaches, ransomware, and unauthorized access. They are essential to safeguard data, maintain trust, and ensure uninterrupted operations."
        ],
        [
          "How do managed cyber security services benefit my organization?",
          "Managed cyber security services provide continuous monitoring, threat detection, and response without the need for an in-house team. This reduces costs, improves response time, and ensures 24/7 protection."
        ],
        [
          "What makes SISGAIN a reliable cybersecurity services provider?",
          "SISGAIN delivers customized cybersecurity solutions tailored to your business needs. Our proactive approach and real-time threat prevention make us a trusted provider."
        ],
        [
          "What types of threats can your cyber security support services prevent?",
          "We protect against malware, phishing, ransomware, insider threats, DDoS attacks, and zero-day vulnerabilities using advanced tools and strategies."
        ],
        [
          "Do you offer cybersecurity services for small businesses and startups?",
          "Yes, our solutions are scalable and cost-effective, providing enterprise-level security for startups, SMEs, and large enterprises."
        ],
        [
          "How do you ensure compliance with industry regulations?",
          "We help businesses meet GDPR, HIPAA, ISO standards through secure frameworks, audits, and continuous compliance monitoring."
        ],
        [
          "What is included in your managed cybersecurity services package?",
          "24/7 monitoring, threat detection, vulnerability assessments, endpoint security, cloud security, firewall management, and reporting."
        ],
        [
          "How quickly can you respond to a security incident?",
          "We provide real-time monitoring and rapid response to detect and mitigate threats immediately."
        ],
        [
          "Can you customize cybersecurity solutions based on my business needs?",
          "Yes, we create tailored strategies based on your industry, risks, and operational needs."
        ],
        [
          "How do your IT security services improve business continuity?",
          "We prevent disruptions by securing systems, identifying vulnerabilities early, and ensuring fast recovery."
        ],
        [
          "What is the cost of cybersecurity services?",
          "Pricing depends on your business size and requirements. We offer flexible and scalable pricing models."
        ],
        [
          "How can I get started with your cybersecurity services?",
          "Simply request a free security audit or connect with our experts to assess your security posture."
        ]
      ];

      foreach ($faqs as $index => $faq) {
        $id = "faq" . $index;
      ?>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button <?php echo $index !== 0 ? 'collapsed' : ''; ?>"
              data-bs-toggle="collapse"
              data-bs-target="#<?= $id; ?>">
              <?= $faq[0]; ?>
            </button>
          </h2>

          <div id="<?= $id; ?>"
            class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>"
            data-bs-parent="#faqAccordion">

            <div class="accordion-body">
              <?= $faq[1]; ?>
            </div>

          </div>
        </div>
      <?php } ?>

    </div>

  </div>
</section>