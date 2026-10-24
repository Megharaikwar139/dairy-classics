<?php
// views/career.php - Dairy Classic Artisanal Careers & Talent Hub
$current_page = 'career';
$is_subpage = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Careers at Dairy Classic | Join Uzbekistan's Premier Artisanal Creamery</title>
  <meta name="description" content="Build your career at Dairy Classic (Since 1996). Join 450+ passionate food scientists, engineers, and artisans crafting world-class ice cream with European technology in Tashkent & Samarkand.">
  <link rel="stylesheet" href="assets/css/shared.css">
  <link rel="stylesheet" href="assets/css/design1.css">
  <link rel="stylesheet" href="assets/css/career.css">
</head>
<body class="theme-artisanal">

<?php include __DIR__ . '/../includes/header.php'; ?>

<main id="main-content">
  <!-- ========================================================
       SECTION 1: HERO
       ======================================================== -->
  <section class="career-hero" id="career-hero">
    <div class="container">
      <div class="career-hero-layout">
        <!-- Text & Headline -->
        <div class="career-hero-text">
          <nav class="career-breadcrumb" aria-label="Breadcrumb">
            <a href="index.php">Home</a>
            <span>/</span>
            <span>Careers &amp; Opportunities</span>
          </nav>

          <div class="career-kicker-pill">
            <span class="sparkle">✦</span>
            <span>JOIN OUR TEAM &bull; FOREIGN COMPANY SINGAPORE SAMARKAND</span>
          </div>

          <h1 class="career-hero-title">
            Craft Happiness.<br>
            <span class="art-berry-title">Build Your Legacy</span> at Dairy Classic.
          </h1>

          <p class="career-hero-desc">
            Since 1996, we have blended old-world dairy passion with modern European processing technology. Join over 450 artisans, chemists, and leaders bringing smiles to millions across Uzbekistan.
          </p>

          <div class="career-hero-actions">
            <a href="#jobs-board" class="btn-career-primary" id="btn-explore-jobs">
              <span>Explore Open Positions</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </a>
            <button type="button" class="btn-career-secondary" onclick="openApplyModal('spontaneous')">
              <span>Send Open Application</span>
            </button>
          </div>
        </div>

        <!-- Floating Hero Visual Composition -->
        <div class="career-hero-visual">
          <div class="career-visual-card">
            <img src="assets/images/story-chocolate-churn.jpg" alt="Dairy Classic Artisanal Churning Floor" class="career-visual-img">
            <div class="career-visual-badge-top">
              <span>🍨</span>
              <span>Central Asia's Premier Creamery</span>
            </div>
            <div class="career-visual-badge-bottom">
              <div>
                <div class="cv-quote-text">"Where craftsmanship meets cutting-edge European dairy technology."</div>
                <div class="cv-quote-author">Dairy Classic Craft Philosophy &bull; Est. 1996</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Trust Stats Strip -->
      <div class="career-stats-strip">
        <?php foreach ($career_stats as $stat): ?>
          <div class="career-stat-card">
            <div class="c-stat-val"><?= htmlspecialchars($stat['val']) ?></div>
            <div class="c-stat-lbl"><?= htmlspecialchars($stat['lbl']) ?></div>
            <div class="c-stat-sub"><?= htmlspecialchars($stat['sub']) ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 2: CULTURE & EMPLOYEE VALUE PROPOSITION
       ======================================================== -->
  <section class="section-culture" id="why-dairy-classic">
    <div class="container">
      <div class="section-head-center">
        <span class="section-kicker">OUR WORKPLACE PHILOSOPHY</span>
        <h2 class="section-title-large">Why You’ll Love Crafting at Dairy Classic</h2>
        <p class="section-desc-lead">
          We believe world-class ice cream begins with fulfilled, inspired people. From our modern Tashkent plant to our regional hubs, we foster warmth, respect, and boundless curiosity.
        </p>
      </div>

      <div class="culture-benefits-grid">
        <?php foreach ($career_benefits as $benefit): ?>
          <div class="benefit-card">
            <div class="benefit-icon-box"><?= $benefit['icon'] ?></div>
            <h3 class="benefit-title"><?= htmlspecialchars($benefit['title']) ?></h3>
            <p class="benefit-desc"><?= htmlspecialchars($benefit['desc']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 3: FACTORY & LIFE PHOTO SHOWCASE
       ======================================================== -->
  <section class="section-factory-life" id="life-at-dairy-classic">
    <div class="container">
      <div class="section-head-center" style="color: #FFF;">
        <span class="section-kicker" style="color: #F0D59A;">BEHIND THE SCENES</span>
        <h2 class="section-title-large" style="color: #FFF;">Where Passion Becomes Uzbekistan's Favorite Treats</h2>
        <p class="section-desc-lead" style="color: #F7ECE1;">
          Take a look inside our 80,000-litre daily capacity facility in Tashkent and our regional distribution hubs across Samarkand and Bukhara.
        </p>
      </div>

      <div class="factory-gallery-grid">
        <div class="fg-item">
          <img src="assets/images/live/developments.webp" alt="Dairy Classic Modern Plant Modernization">
          <div class="fg-overlay">
            <span class="fg-tag">Modern Plant Expansion</span>
            <h3 class="fg-title">80,000L Daily European Standard Facility</h3>
          </div>
        </div>

        <div class="fg-item">
          <img src="assets/images/story-chocolate-churn.jpg" alt="Continuous Gelato Churning">
          <div class="fg-overlay">
            <span class="fg-tag">Small-Batch Churning</span>
            <h3 class="fg-title">Artisanal Flavor Masters at Work</h3>
          </div>
        </div>

        <div class="fg-item">
          <img src="assets/images/live/founder.webp" alt="Dairy Classic Founder & Leadership">
          <div class="fg-overlay">
            <span class="fg-tag">Visionary Leadership</span>
            <h3 class="fg-title">Three Decades of Innovation &amp; Trust</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 4: INTERACTIVE JOBS BOARD
       ======================================================== -->
  <section class="section-job-board" id="jobs-board">
    <div class="container">
      <div class="job-board-header">
        <div>
          <div class="open-roles-counter">
            <span class="pulse-circle"></span>
            <span id="visible-jobs-count"><?= count($job_openings) ?> Open Positions</span>
          </div>
          <h2 class="section-title-large" style="margin: 0;">Explore Career Opportunities</h2>
        </div>
        <p style="color: var(--art-cocoa-light); max-width: 440px; margin: 0; font-size: 0.95rem;">
          Filter by department or location to find the perfect match for your expertise and career aspirations.
        </p>
      </div>

      <!-- Filter Controls Bar -->
      <div class="filter-controls-wrap">
        <div class="filter-search-row">
          <div class="search-input-box">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <circle cx="11" cy="11" r="8"/>
              <line x1="21" y1="21" x2="16.65" y2="16.65"/>
            </svg>
            <input type="search" id="job-search-input" class="job-search-input" placeholder="Search by role title, skill, or keyword (e.g. food, engineer, supervisor, marketing)..." aria-label="Search job openings">
          </div>

          <select id="job-location-select" class="filter-select" aria-label="Filter by location">
            <option value="all">All Locations (Tashkent &amp; Samarkand)</option>
            <option value="tashkent">Tashkent (Main Factory &amp; HQ)</option>
            <option value="samarkand">Samarkand Regional Hub</option>
          </select>

          <button type="button" class="btn-filter-reset" id="btn-reset-filters">Reset Filters</button>
        </div>

        <!-- Category Pills -->
        <div class="filter-category-pills" role="tablist">
          <button type="button" class="cat-pill-btn active" data-cat="all">All Departments (<?= count($job_openings) ?>)</button>
          <?php foreach ($career_departments as $key => $name): if ($key === 'all') continue; ?>
            <button type="button" class="cat-pill-btn" data-cat="<?= htmlspecialchars($key) ?>"><?= htmlspecialchars($name) ?></button>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Job Cards List -->
      <div class="job-cards-list" id="job-cards-list">
        <?php foreach ($job_openings as $job): ?>
          <article class="job-card <?= $job['featured'] ? 'is-featured' : '' ?> <?= $job['urgent'] ? 'is-urgent' : '' ?>" 
                   data-cat="<?= htmlspecialchars($job['category_key']) ?>" 
                   data-loc="<?= htmlspecialchars($job['location_key']) ?>"
                   id="job-<?= htmlspecialchars($job['id']) ?>">
            <div class="job-card-main">
              <div class="job-badge-row">
                <span class="job-dept-badge"><?= htmlspecialchars($job['department']) ?></span>
                <?php if ($job['urgent']): ?>
                  <span class="badge-tag-urgent">⚡ Urgent Hiring</span>
                <?php endif; ?>
                <?php if ($job['featured']): ?>
                  <span class="badge-tag-featured">✦ Featured Role</span>
                <?php endif; ?>
              </div>

              <h3 class="job-title" onclick="openJobDetails('<?= htmlspecialchars($job['id']) ?>')">
                <?= htmlspecialchars($job['title']) ?>
              </h3>

              <div class="job-meta-chips">
                <span class="meta-chip">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                  <?= htmlspecialchars($job['location']) ?>
                </span>
                <span class="meta-chip">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                  <?= htmlspecialchars($job['type']) ?>
                </span>
                <span class="meta-chip">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                  <?= htmlspecialchars($job['experience']) ?>
                </span>
                <span class="meta-chip">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                  <?= htmlspecialchars($job['workplace']) ?>
                </span>
              </div>

              <p class="job-short-desc"><?= htmlspecialchars($job['short_desc']) ?></p>
            </div>

            <div class="job-actions-col">
              <button type="button" class="btn-job-apply" onclick="openApplyModal('<?= htmlspecialchars($job['id']) ?>')">
                <span>Apply Now</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </button>
              <button type="button" class="btn-job-details" onclick="openJobDetails('<?= htmlspecialchars($job['id']) ?>')">
                <span>View Details</span>
              </button>
            </div>
          </article>
        <?php endforeach; ?>

        <!-- Empty State -->
        <div class="job-empty-state" id="job-empty-state">
          <div class="empty-icon">🔍</div>
          <h3 style="font-size: 1.3rem; font-weight: 800; color: var(--art-cocoa); margin-bottom: 8px;">No Roles Found Matching Your Criteria</h3>
          <p style="color: var(--art-cocoa-light); max-width: 480px; margin: 0 auto 20px auto; font-size: 0.95rem;">
            Try clearing your search terms or selecting "All Departments" to see all currently active career opportunities.
          </p>
          <button type="button" class="btn-career-primary" onclick="document.getElementById('btn-reset-filters').click();">
            <span>Show All Open Positions</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 5: OUR TRANSPARENT 4-STEP HIRING JOURNEY
       ======================================================== -->
  <section class="section-hiring-process" id="hiring-process">
    <div class="container">
      <div class="section-head-center">
        <span class="section-kicker">WHAT TO EXPECT</span>
        <h2 class="section-title-large">Our Transparent 4-Step Hiring Journey</h2>
        <p class="section-desc-lead">
          We treat every applicant with respect, prompt feedback, and total transparency. Here is how your sweet journey unfolds:
        </p>
      </div>

      <div class="hiring-steps-grid">
        <div class="hiring-step-card">
          <div class="step-num-badge">01</div>
          <h3 class="step-title">Application &amp; Review</h3>
          <p class="step-desc">Submit your CV online. Our recruitment team reviews your skills and responds within 48 hours.</p>
          <span class="step-time-pill">⏱ 24 - 48 Hours</span>
        </div>

        <div class="hiring-step-card">
          <div class="step-num-badge">02</div>
          <h3 class="step-title">Culture &amp; Discovery Chat</h3>
          <p class="step-desc">A relaxed 30-minute virtual or coffee meeting to share our values and understand your aspirations.</p>
          <span class="step-time-pill">☕ 30 Minutes</span>
        </div>

        <div class="hiring-step-card">
          <div class="step-num-badge">03</div>
          <h3 class="step-title">Technical Deep-Dive</h3>
          <p class="step-desc">Meet your future department peers, explore our facility, and discuss practical role scenarios.</p>
          <span class="step-time-pill">🏭 Facility Visit</span>
        </div>

        <div class="hiring-step-card">
          <div class="step-num-badge">04</div>
          <h3 class="step-title">Welcome to the Family</h3>
          <p class="step-desc">Formal offer, personalized onboarding plan, welcome package, and our iconic family ice cream tasting hamper.</p>
          <span class="step-time-pill">🎉 Day One Joy</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 6: EMPLOYEE TESTIMONIALS
       ======================================================== -->
  <section class="section-testimonials" id="team-stories">
    <div class="container">
      <div class="section-head-center">
        <span class="section-kicker">VOICES OF DAIRY CLASSIC</span>
        <h2 class="section-title-large">Hear From The People Who Make The Magic</h2>
        <p class="section-desc-lead">
          Real stories from team members who have built rewarding careers across production, R&amp;D, and regional cold-chain distribution.
        </p>
      </div>

      <div class="testimonials-grid">
        <?php foreach ($career_testimonials as $testimony): ?>
          <div class="c-testimonial-card">
            <div>
              <div class="c-quote-icon">“</div>
              <p class="c-testimonial-quote"><?= htmlspecialchars($testimony['quote']) ?></p>
            </div>
            <div class="c-testimonial-author">
              <div class="author-avatar-badge"><?= mb_substr($testimony['name'], 0, 1) ?></div>
              <div>
                <div class="author-name"><?= htmlspecialchars($testimony['name']) ?></div>
                <div class="author-role"><?= htmlspecialchars($testimony['role']) ?></div>
                <div class="author-tenure"><?= htmlspecialchars($testimony['tenure']) ?></div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 7: SPONTANEOUS APPLICATION CALLOUT
       ======================================================== -->
  <section class="section-spontaneous">
    <div class="container">
      <div class="spontaneous-box">
        <div>
          <div class="spont-kicker">DON’T SEE YOUR EXACT MATCH?</div>
          <h2 class="spont-title">We Are Always Looking for Passionate Artisans &amp; Innovators</h2>
          <p class="spont-desc">
            Even if your specialized skillset isn't listed among our active openings today, our 80,000L facility is always expanding. Tell us about your superpower and how you want to craft happiness with Dairy Classic.
          </p>
          <div style="display: flex; flex-wrap: wrap; gap: 12px; margin-top: 18px;">
            <a href="https://wa.me/998909982019" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; gap: 6px; background: rgba(37, 211, 102, 0.2); border: 1px solid rgba(37, 211, 102, 0.5); color: #FFF; padding: 6px 14px; border-radius: 99px; font-size: 0.82rem; font-weight: 700;">
              <span>💬 WhatsApp: +998 90 998 2019</span>
            </a>
            <a href="https://t.me/DC_Dairy" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; gap: 6px; background: rgba(62, 153, 216, 0.2); border: 1px solid rgba(62, 153, 216, 0.5); color: #FFF; padding: 6px 14px; border-radius: 99px; font-size: 0.82rem; font-weight: 700;">
              <span>✈️ Telegram: @DC_Dairy</span>
            </a>
          </div>
        </div>
        <div class="spont-actions">
          <button type="button" class="btn-spont-gold" onclick="openApplyModal('spontaneous')">
            <span>Send Open Application</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </button>
          <div class="spont-contact-sub">
            Email Us: <a href="mailto:jkapoor@me.com">jkapoor@me.com</a> &bull; <a href="mailto:support@dairyclassic.uz">support@dairyclassic.uz</a><br>
            Hotline: <a href="tel:+998781203377">+998 78 120 33 77 / 78</a><br>
            Factory: БУТ 5, 65M6+H9 Tashkent, Uzbekistan
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================
       SECTION 8: CAREERS FAQ ACCORDION
       ======================================================== -->
  <section class="section-career-faqs" id="career-faqs">
    <div class="container">
      <div class="section-head-center">
        <span class="section-kicker">COMMON QUESTIONS</span>
        <h2 class="section-title-large">Frequently Asked Questions</h2>
        <p class="section-desc-lead">
          Everything you need to know about joining Dairy Classic, interview timelines, and employee benefits.
        </p>
      </div>

      <div class="faq-accordion-list">
        <?php foreach ($career_faqs as $faq): ?>
          <div class="faq-card-item">
            <button type="button" class="faq-question-btn">
              <span><?= htmlspecialchars($faq['q']) ?></span>
              <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M6 9l6 6 6-6"/>
              </svg>
            </button>
            <div class="faq-answer-drawer">
              <p><?= htmlspecialchars($faq['a']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</main>

<!-- ========================================================
     MODAL 1: JOB DETAILS MODAL
     ======================================================== -->
<div class="career-modal-backdrop" id="job-details-modal" role="dialog" aria-modal="true" aria-labelledby="jd-modal-title">
  <div class="career-modal-dialog">
    <button type="button" class="modal-close-icon-btn" onclick="closeJobDetails()" aria-label="Close details">&times;</button>
    <div class="modal-body-padding">
      <div class="modal-job-header">
        <span class="job-dept-badge" id="jd-modal-dept">Department</span>
        <h2 class="modal-job-title" id="jd-modal-title">Job Title</h2>
        <div class="job-meta-chips" style="margin-top: 14px;">
          <span class="meta-chip">📍 <span id="jd-modal-loc">Location</span></span>
          <span class="meta-chip">💼 <span id="jd-modal-type">Full-Time</span></span>
          <span class="meta-chip">⏱ <span id="jd-modal-exp">Experience</span></span>
          <span class="meta-chip">🏢 <span id="jd-modal-workplace">Workplace</span></span>
        </div>
      </div>

      <div class="modal-job-body">
        <h3 class="modal-section-title">Role Overview</h3>
        <p id="jd-modal-overview" style="color: var(--art-cocoa-light); line-height: 1.65; font-size: 0.98rem;"></p>

        <h3 class="modal-section-title">Key Responsibilities</h3>
        <ul class="modal-checklist" id="jd-modal-responsibilities"></ul>

        <h3 class="modal-section-title">Requirements &amp; Qualifications</h3>
        <ul class="modal-checklist" id="jd-modal-requirements"></ul>

        <h3 class="modal-section-title">What We Offer</h3>
        <div class="modal-perks-row" id="jd-modal-perks"></div>
      </div>
    </div>

    <div class="modal-footer-action">
      <span style="font-size: 0.92rem; color: var(--art-cocoa-light);">Ready to craft with us?</span>
      <button type="button" class="btn-career-primary" id="jd-modal-apply-btn">
        <span>Apply for this Position</span>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </button>
    </div>
  </div>
</div>

<!-- ========================================================
     MODAL 2: APPLY NOW FORM & SUCCESS STATE
     ======================================================== -->
<div class="career-modal-backdrop" id="career-apply-modal" role="dialog" aria-modal="true" aria-labelledby="apply-modal-title">
  <div class="career-modal-dialog">
    <button type="button" class="modal-close-icon-btn" onclick="closeApplyModal()" aria-label="Close application modal">&times;</button>
    
    <!-- Application Form Container -->
    <div class="modal-body-padding" id="apply-form-container">
      <div style="border-bottom: 1px solid rgba(58, 32, 26, 0.1); padding-bottom: 20px; margin-bottom: 24px;">
        <span class="section-kicker" style="margin-bottom: 4px;">JOIN DAIRY CLASSIC</span>
        <h2 class="section-title-large" id="apply-modal-title" style="font-size: 1.75rem; margin: 0;">Submit Your Application</h2>
        <p style="color: var(--art-cocoa-light); font-size: 0.92rem; margin: 6px 0 0 0;">
          Our talent recruitment team evaluates every submission within 48 hours.
        </p>
      </div>

      <form id="career-application-form">
        <div class="apply-form-grid">
          <div class="form-group-full">
            <label class="form-label" for="apply-role-select">Applying For <span class="req">*</span></label>
            <select id="apply-role-select" class="form-select" required>
              <option value="spontaneous">🌟 Open / Spontaneous Application</option>
              <?php foreach ($job_openings as $job): ?>
                <option value="<?= htmlspecialchars($job['id']) ?>"><?= htmlspecialchars($job['title']) ?> (<?= htmlspecialchars($job['location']) ?>)</option>
              <?php endforeach; ?>
            </select>
          </div>

          <div>
            <label class="form-label" for="apply-name">Full Name <span class="req">*</span></label>
            <input type="text" id="apply-name" class="form-input" placeholder="e.g. Jasur Aliyev" required>
          </div>

          <div>
            <label class="form-label" for="apply-phone">Phone Number <span class="req">*</span></label>
            <input type="tel" id="apply-phone" class="form-input" placeholder="+998 90 123 4567" required>
          </div>

          <div>
            <label class="form-label" for="apply-email">Email Address <span class="req">*</span></label>
            <input type="email" id="apply-email" class="form-input" placeholder="jasur@example.com" required>
          </div>

          <div>
            <label class="form-label" for="apply-location">Current City / Location <span class="req">*</span></label>
            <select id="apply-location" class="form-select" required>
              <option value="Tashkent">Tashkent</option>
              <option value="Samarkand">Samarkand</option>
              <option value="Bukhara">Bukhara</option>
              <option value="Fergana">Fergana Valley</option>
              <option value="Other">Other Region / Relocation</option>
            </select>
          </div>

          <div>
            <label class="form-label" for="apply-exp">Total Professional Experience</label>
            <select id="apply-exp" class="form-select">
              <option value="Entry / Graduate">Entry-Level / Fresh Graduate</option>
              <option value="1-3 Years">1 - 3 Years</option>
              <option value="3-5 Years" selected>3 - 5 Years</option>
              <option value="5+ Years">5+ Years (Senior / Leadership)</option>
            </select>
          </div>

          <div>
            <label class="form-label" for="apply-portfolio">LinkedIn or Portfolio URL</label>
            <input type="url" id="apply-portfolio" class="form-input" placeholder="https://linkedin.com/in/username">
          </div>

          <div class="form-group-full">
            <label class="form-label">Resume / Curriculum Vitae (PDF, DOC, DOCX up to 10MB) <span class="req">*</span></label>
            <div class="upload-dropzone" id="cv-dropzone">
              <input type="file" id="apply-cv-file" accept=".pdf,.doc,.docx" required>
              <div class="upload-icon">📄</div>
              <strong>Drag &amp; drop your resume here, or click to browse</strong>
              <div class="upload-hint">Accepted formats: PDF, DOC, DOCX (Max 10MB)</div>
              <div class="selected-filename" id="selected-cv-name"></div>
            </div>
          </div>

          <div class="form-group-full">
            <label class="form-label" for="apply-cover-note">Why Dairy Classic? (Brief Note)</label>
            <textarea id="apply-cover-note" class="form-textarea" placeholder="Tell us what excites you about our artisanal craft, European standards, and your passion for food..."></textarea>
          </div>
        </div>

        <div style="margin-top: 24px; display: flex; justify-content: flex-end; gap: 14px; align-items: center;">
          <button type="button" class="btn-job-details" onclick="closeApplyModal()">Cancel</button>
          <button type="submit" class="btn-career-primary" id="btn-submit-app">
            <span>Submit Application</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </button>
        </div>
      </form>
    </div>

    <!-- Celebratory Success Box -->
    <div class="apply-success-box" id="apply-success-box">
      <div class="success-sparkle-circle">🎉</div>
      <h3 style="font-size: 1.8rem; font-weight: 800; color: var(--art-cocoa); margin-bottom: 8px;">Application Received!</h3>
      <p style="font-size: 1.05rem; color: var(--art-cocoa-light); max-width: 520px; margin: 0 auto 16px auto; line-height: 1.6;">
        Thank you, <strong id="app-candidate-name" style="color: var(--art-berry);">Applicant</strong>! Your application has been successfully transmitted directly to our talent acquisition team in Tashkent.
      </p>
      
      <div class="success-ref-pill" id="app-ref-code">Reference ID: DC-984210</div>

      <div style="background: #FAF4EE; border-radius: 16px; padding: 20px; max-width: 520px; margin: 0 auto 28px auto; text-align: left; font-size: 0.92rem; color: var(--art-cocoa-light); line-height: 1.55;">
        <strong style="color: var(--art-cocoa); display: block; margin-bottom: 6px;">Next Steps:</strong>
        &bull; Our team reviews every application within <strong>48 hours</strong>.<br>
        &bull; If your profile aligns with our criteria, we will reach out via WhatsApp/Phone or Email for a discovery conversation.<br>
        &bull; For any urgent queries, reach us at <a href="mailto:jkapoor@me.com" style="color: var(--art-berry); font-weight: 700;">jkapoor@me.com</a> / <a href="mailto:support@dairyclassic.uz" style="color: var(--art-berry); font-weight: 700;">support@dairyclassic.uz</a> or call <a href="tel:+998781203377" style="color: var(--art-berry); font-weight: 700;">+998 78 120 33 77</a>.
      </div>

      <button type="button" class="btn-career-primary" onclick="closeApplyModal()">
        <span>Return to Dairy Classic</span>
      </button>
    </div>
  </div>
</div>

<!-- Career Jobs Data Payload for JavaScript -->
<script>
  window.DAIRY_CAREER_JOBS = <?= json_encode($job_openings, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>;
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>

<script src="assets/js/career.js"></script>
</body>
</html>
