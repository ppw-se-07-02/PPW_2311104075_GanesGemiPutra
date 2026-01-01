// ===== MAIN SCRIPT FOR YAYASAN BUDI RAHAYU =====

// ===== ANAK DATA =====
const ANAK_DATA = [
  {
    id: 1,
    nama: "Ahmad Rahman",
    usia: 8,
    kelas: "Kelas 2 SD",
    img: "img/anak/ahmad.jpg",
    deskripsi: "Anak yang cerdas dan aktif dalam kegiatan sekolah. Suka bermain sepakbola dan belajar matematika."
  },
  {
    id: 2,
    nama: "Siti Nurhaliza",
    usia: 10,
    kelas: "Kelas 4 SD",
    img: "img/anak/siti.jpg",
    deskripsi: "Anak yang rajin belajar dan suka membaca buku. Bermimpi menjadi dokter di masa depan."
  },
  {
    id: 3,
    nama: "Muhammad Iqbal",
    usia: 7,
    kelas: "Kelas 1 SD",
    img: "img/anak/iqbal.jpg",
    deskripsi: "Anak yang energik dan suka bernyanyi. Senang belajar lagu-lagu daerah."
  },
  {
    id: 4,
    nama: "Fatimah Azzahra",
    usia: 9,
    kelas: "Kelas 3 SD",
    img: "img/anak/fatimah.jpg",
    deskripsi: "Anak yang kreatif dan suka menggambar. Hobinya membuat kerajinan tangan."
  },
  {
    id: 5,
    nama: "Rizki Ramadhan",
    usia: 11,
    kelas: "Kelas 5 SD",
    img: "img/anak/rizki.jpg",
    deskripsi: "Anak yang pandai bermain musik dan suka membantu teman-temannya."
  },
  {
    id: 6,
    nama: "Maya Sari",
    usia: 6,
    kelas: "TK B",
    img: "img/anak/maya.jpg",
    deskripsi: "Anak yang manis dan suka bermain boneka. Belajar dengan cepat dan antusias."
  },
  {
    id: 7,
    nama: "Dika Pratama",
    usia: 12,
    kelas: "Kelas 6 SD",
    img: "img/anak/dika.jpg",
    deskripsi: "Anak yang bertanggung jawab dan suka olahraga. Ingin menjadi atlet profesional."
  },
  {
    id: 8,
    nama: "Nadia Putri",
    usia: 8,
    kelas: "Kelas 2 SD",
    img: "img/anak/nadia.jpg",
    deskripsi: "Anak yang penyayang dan suka membantu orang lain. Suka belajar bahasa Inggris."
  }
];

// ===== UTILITY FUNCTIONS =====
function formatDate(date) {
  return new Intl.DateTimeFormat('id-ID', {
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  }).format(new Date(date));
}

function truncateText(text, maxLength) {
  if (text.length <= maxLength) return text;
  return text.substring(0, maxLength) + '...';
}

// ===== PAGE INITIALIZATION =====
$(document).ready(function() {
  // Initialize all components
  initializePage();
});

function initializePage() {
  // Load anak preview on home page
  loadAnakPreview();

  // Initialize form validations
  initializeForms();

  // Initialize image galleries
  initializeGalleries();

  // Initialize smooth scrolling
  initializeSmoothScroll();

  // Initialize responsive features
  initializeResponsive();
}

function loadAnakPreview() {
  const target = document.getElementById("homeAnakGrid");
  if (!target) return;

  const pick = ANAK_DATA.sort(() => 0.5 - Math.random()).slice(0, 6);
  target.innerHTML = pick.map(a => `
    <div class="anak-card">
      <img src="${a.img}" alt="${a.nama}" onerror="this.src='img/anak/default-avatar.png'" />
      <div>
        <h3>${a.nama}</h3>
        <p>${truncateText(a.deskripsi, 100)}</p>
        <div class="anak-meta">Usia ${a.usia} • ${a.kelas}</div>
        <div class="card-actions">
          <a href="anak-detail.html?id=${a.id}">Lihat detail →</a>
        </div>
      </div>
    </div>
  `).join("");
}

function initializeForms() {
  // Contact form validation
  $('#contactForm').on('submit', function(e) {
    e.preventDefault();
    if (validateContactForm()) {
      // Submit form logic here
      alert('Terima kasih! Pesan Anda telah dikirim.');
      this.reset();
    }
  });

  // Newsletter subscription
  $('#newsletterForm').on('submit', function(e) {
    e.preventDefault();
    const email = $(this).find('input[type="email"]').val();
    if (email) {
      alert('Terima kasih telah berlangganan newsletter kami!');
      this.reset();
    }
  });
}

function validateContactForm() {
  const name = $('#contactName').val().trim();
  const email = $('#contactEmail').val().trim();
  const message = $('#contactMessage').val().trim();

  if (!name || !email || !message) {
    alert('Mohon lengkapi semua field yang diperlukan.');
    return false;
  }

  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert('Format email tidak valid.');
    return false;
  }

  return true;
}

function initializeGalleries() {
  // Gallery image click handlers
  $('.gallery-grid img').on('click', function() {
    const src = $(this).attr('src');
    const alt = $(this).attr('alt');

    // Create modal for image preview
    const modal = $(`
      <div class="image-modal" style="
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
        cursor: pointer;
      ">
        <img src="${src}" alt="${alt}" style="
          max-width: 90%;
          max-height: 90%;
          object-fit: contain;
        ">
      </div>
    `);

    $('body').append(modal);

    modal.on('click', function() {
      $(this).remove();
    });
  });
}

function initializeSmoothScroll() {
  $('a[href^="#"]').on('click', function(event) {
    const target = $(this.getAttribute('href'));
    if (target.length) {
      event.preventDefault();
      $('html, body').stop().animate({
        scrollTop: target.offset().top - 80
      }, 800, 'easeInOutCubic');
    }
  });
}

function initializeResponsive() {
  // Mobile menu toggle
  $('.nav-toggle').on('click', function() {
    $('.nav-menu').toggleClass('active');
    $(this).toggleClass('active');
  });

  // Close mobile menu when clicking outside
  $(document).on('click', function(e) {
    if (!$(e.target).closest('.navbar').length) {
      $('.nav-menu').removeClass('active');
      $('.nav-toggle').removeClass('active');
    }
  });

  // Window resize handler
  $(window).on('resize', function() {
    if ($(window).width() > 768) {
      $('.nav-menu').removeClass('active');
      $('.nav-toggle').removeClass('active');
    }
  });
}

// ===== EXPORT FUNCTIONS FOR GLOBAL USE =====
window.ANAK_DATA = ANAK_DATA;
window.formatDate = formatDate;
window.truncateText = truncateText;
