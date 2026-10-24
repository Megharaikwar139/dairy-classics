// assets/js/career.js - Interactive Filters, Modals, and Application Flow

document.addEventListener('DOMContentLoaded', function() {
  initJobFilters();
  initFaqAccordion();
  initDropzone();
  initApplicationForm();
});

// Global state
let currentCategory = 'all';
let currentLocation = 'all';
let currentSearch = '';

function initJobFilters() {
  const searchInput = document.getElementById('job-search-input');
  const catPills = document.querySelectorAll('.cat-pill-btn');
  const locSelect = document.getElementById('job-location-select');
  const resetBtn = document.getElementById('btn-reset-filters');

  if (searchInput) {
    searchInput.addEventListener('input', function(e) {
      currentSearch = e.target.value.toLowerCase().trim();
      applyFilters();
    });
  }

  catPills.forEach(pill => {
    pill.addEventListener('click', function() {
      catPills.forEach(p => p.classList.remove('active'));
      this.classList.add('active');
      currentCategory = this.getAttribute('data-cat') || 'all';
      applyFilters();
    });
  });

  if (locSelect) {
    locSelect.addEventListener('change', function() {
      currentLocation = this.value;
      applyFilters();
    });
  }

  if (resetBtn) {
    resetBtn.addEventListener('click', function() {
      currentCategory = 'all';
      currentLocation = 'all';
      currentSearch = '';
      if (searchInput) searchInput.value = '';
      if (locSelect) locSelect.value = 'all';
      catPills.forEach(p => {
        if (p.getAttribute('data-cat') === 'all') p.classList.add('active');
        else p.classList.remove('active');
      });
      applyFilters();
    });
  }
}

function applyFilters() {
  const cards = document.querySelectorAll('.job-card');
  const emptyState = document.getElementById('job-empty-state');
  const countBadge = document.getElementById('visible-jobs-count');
  let visibleCount = 0;

  cards.forEach(card => {
    const cardCat = card.getAttribute('data-cat') || '';
    const cardLoc = card.getAttribute('data-loc') || '';
    const cardText = (card.textContent || '').toLowerCase();

    const matchesCat = currentCategory === 'all' || cardCat === currentCategory;
    const matchesLoc = currentLocation === 'all' || cardLoc === currentLocation;
    const matchesSearch = !currentSearch || cardText.includes(currentSearch);

    if (matchesCat && matchesLoc && matchesSearch) {
      card.style.display = '';
      visibleCount++;
    } else {
      card.style.display = 'none';
    }
  });

  if (countBadge) {
    countBadge.textContent = `${visibleCount} Open Position${visibleCount === 1 ? '' : 's'}`;
  }

  if (emptyState) {
    if (visibleCount === 0) {
      emptyState.classList.add('active');
    } else {
      emptyState.classList.remove('active');
    }
  }
}

// ========================================================
// JOB DETAILS MODAL
// ========================================================
window.openJobDetails = function(jobId) {
  const jobs = window.DAIRY_CAREER_JOBS || [];
  const job = jobs.find(j => j.id === jobId);
  if (!job) return;

  const modal = document.getElementById('job-details-modal');
  if (!modal) return;

  document.getElementById('jd-modal-dept').textContent = job.department;
  document.getElementById('jd-modal-title').textContent = job.title;
  document.getElementById('jd-modal-loc').textContent = job.location;
  document.getElementById('jd-modal-type').textContent = job.type;
  document.getElementById('jd-modal-exp').textContent = job.experience;
  document.getElementById('jd-modal-workplace').textContent = job.workplace;
  document.getElementById('jd-modal-overview').textContent = job.overview || job.short_desc;

  // Responsibilities
  const respList = document.getElementById('jd-modal-responsibilities');
  if (respList) {
    respList.innerHTML = (job.responsibilities || []).map(r => `<li>${r}</li>`).join('');
  }

  // Requirements
  const reqList = document.getElementById('jd-modal-requirements');
  if (reqList) {
    reqList.innerHTML = (job.requirements || []).map(r => `<li>${r}</li>`).join('');
  }

  // Perks
  const perksList = document.getElementById('jd-modal-perks');
  if (perksList) {
    perksList.innerHTML = (job.perks || []).map(p => `
      <div class="modal-perk-item">
        <span style="color: var(--art-gold);">✦</span>
        <span>${p}</span>
      </div>
    `).join('');
  }

  // Wire CTA button to open application form for this job
  const applyBtn = document.getElementById('jd-modal-apply-btn');
  if (applyBtn) {
    applyBtn.onclick = function() {
      closeJobDetails();
      openApplyModal(job.id);
    };
  }

  modal.classList.add('is-open');
  modal.setAttribute('aria-hidden', 'false');
  document.body.style.overflow = 'hidden';
};

window.closeJobDetails = function() {
  const modal = document.getElementById('job-details-modal');
  if (modal) {
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }
};

// ========================================================
// APPLY NOW MODAL & FORM
// ========================================================
window.openApplyModal = function(jobId) {
  const modal = document.getElementById('career-apply-modal');
  if (!modal) return;

  const formBox = document.getElementById('apply-form-container');
  const successBox = document.getElementById('apply-success-box');
  const roleSelect = document.getElementById('apply-role-select');

  if (formBox) formBox.style.display = 'block';
  if (successBox) successBox.classList.remove('is-active');

  if (roleSelect && jobId) {
    roleSelect.value = jobId;
  }

  modal.classList.add('is-open');
  modal.setAttribute('aria-hidden', 'false');
  document.body.style.overflow = 'hidden';

  const nameInput = document.getElementById('apply-name');
  if (nameInput) setTimeout(() => nameInput.focus(), 150);
};

window.closeApplyModal = function() {
  const modal = document.getElementById('career-apply-modal');
  if (modal) {
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }
};

function initDropzone() {
  const dropzone = document.getElementById('cv-dropzone');
  const fileInput = document.getElementById('apply-cv-file');
  const fileNameDisplay = document.getElementById('selected-cv-name');

  if (!dropzone || !fileInput) return;

  ['dragenter', 'dragover'].forEach(eventName => {
    dropzone.addEventListener(eventName, (e) => {
      e.preventDefault();
      e.stopPropagation();
      dropzone.classList.add('dragover');
    }, false);
  });

  ['dragleave', 'drop'].forEach(eventName => {
    dropzone.addEventListener(eventName, (e) => {
      e.preventDefault();
      e.stopPropagation();
      dropzone.classList.remove('dragover');
    }, false);
  });

  dropzone.addEventListener('drop', (e) => {
    const dt = e.dataTransfer;
    const files = dt.files;
    if (files.length) {
      fileInput.files = files;
      showSelectedFile(files[0].name);
    }
  });

  fileInput.addEventListener('change', () => {
    if (fileInput.files.length) {
      showSelectedFile(fileInput.files[0].name);
    }
  });

  function showSelectedFile(name) {
    if (fileNameDisplay) {
      fileNameDisplay.textContent = `📎 Attached: ${name}`;
      fileNameDisplay.style.display = 'block';
    }
  }
}

function initApplicationForm() {
  const form = document.getElementById('career-application-form');
  if (!form) return;

  form.addEventListener('submit', function(e) {
    e.preventDefault();

    const submitBtn = document.getElementById('btn-submit-app');
    const originalText = submitBtn ? submitBtn.innerHTML : 'Submit Application';

    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.innerHTML = `
        <svg class="spin-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="animation: spin 1s linear infinite;">
          <circle cx="12" cy="12" r="10" stroke-opacity="0.25"/>
          <path d="M12 2a10 10 0 0 1 10 10"/>
        </svg>
        <span>Transmitting to Dairy Classic HR...</span>
      `;
    }

    // Simulate reliable API call
    setTimeout(() => {
      const formBox = document.getElementById('apply-form-container');
      const successBox = document.getElementById('apply-success-box');
      const refCode = document.getElementById('app-ref-code');
      const candName = document.getElementById('app-candidate-name');

      const nameVal = document.getElementById('apply-name') ? document.getElementById('apply-name').value : 'Applicant';
      const randomRef = 'DC-' + Math.floor(100000 + Math.random() * 900000);

      if (refCode) refCode.textContent = `Reference ID: ${randomRef}`;
      if (candName) candName.textContent = nameVal;

      if (formBox) formBox.style.display = 'none';
      if (successBox) successBox.classList.add('is-active');

      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
      }

      form.reset();
      const fileNameDisplay = document.getElementById('selected-cv-name');
      if (fileNameDisplay) fileNameDisplay.style.display = 'none';
    }, 1100);
  });
}

function initFaqAccordion() {
  const faqItems = document.querySelectorAll('.faq-card-item');

  faqItems.forEach(item => {
    const btn = item.querySelector('.faq-question-btn');
    const drawer = item.querySelector('.faq-answer-drawer');

    if (btn && drawer) {
      btn.addEventListener('click', () => {
        const isOpen = item.classList.contains('active');

        // Close others
        faqItems.forEach(other => {
          if (other !== item) {
            other.classList.remove('active');
            const otherDrawer = other.querySelector('.faq-answer-drawer');
            if (otherDrawer) otherDrawer.style.maxHeight = null;
          }
        });

        if (isOpen) {
          item.classList.remove('active');
          drawer.style.maxHeight = null;
        } else {
          item.classList.add('active');
          drawer.style.maxHeight = drawer.scrollHeight + 40 + 'px';
        }
      });
    }
  });
}

// Close modals on Escape key
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeJobDetails();
    closeApplyModal();
  }
});
