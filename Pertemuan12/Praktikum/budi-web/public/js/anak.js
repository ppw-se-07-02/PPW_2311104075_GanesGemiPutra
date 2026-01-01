/* ===========================================================
   DATA ANAK (BISA DITAMBAH BEBAS)
   =========================================================== */

const ANAK_DATA = [
  { id: "A001", nama: "Zhafir Zaidan Avail", usia: 12, kelas: "6 SD", img: "img/anak/anak-1.jpg", deskripsi: "Suka matematika dan robotik. Cita-cita menjadi insinyur." },
  { id: "A002", nama: "Dimas Aji Wibowo", usia: 13, kelas: "1 SMP", img: "img/anak/anak-2.jpg", deskripsi: "Penyuka komik dan menggambar. Rajin membantu adik-adik." },
  { id: "A003", nama: "Dimas Ahibpraya Ramansyah", usia: 11, kelas: "5 SD", img: "img/anak/anak-3.jpg", deskripsi: "Hobi lari dan bermain bola. Disiplin dan ceria." },
  { id: "A004", nama: "Muhammad Shafiq Rosano", usia: 10, kelas: "4 SD", img: "img/anak/anak-4.jpg", deskripsi: "Suka IPA dan eksperimen. Sopan dan telaten." },
  { id: "A005", nama: "Alvin Bagus Firmansyah", usia: 12, kelas: "6 SD", img: "img/anak/anak-5.jpg", deskripsi: "Pemain futsal tim yayasan. Ramah dan suka membantu." },
  { id: "A006", nama: "Rifqi Mohamad Ramdani", usia: 13, kelas: "1 SMP", img: "img/anak/anak-6.jpg", deskripsi: "Suka membaca sejarah dan mencoba hal baru." },
  { id: "A007", nama: "Rifqi Mohamad Ramdani", usia: 13, kelas: "1 SMP", img: "img/anak/anak-7.jpg", deskripsi: "Semangat belajar coding dan komputer." },
  { id: "A008", nama: "Rifqi Mohamad Ramdani", usia: 13, kelas: "1 SMP", img: "img/anak/anak-8.jpg", deskripsi: "Rajin mengikuti kajian rutin yayasan." },
  { id: "A009", nama: "Nabil Akbar Pratama", usia: 9, kelas: "3 SD", img: "img/anak/anak-9.jpg", deskripsi: "Suka menggambar pemandangan dan binatang." },
  { id: "A010", nama: "Raka Dwi Nugroho", usia: 11, kelas: "5 SD", img: "img/anak/anak-10.jpg", deskripsi: "Hobi bersepeda, ceria, dan aktif." },
  { id: "A011", nama: "Fajar Rizky Santoso", usia: 12, kelas: "6 SD", img: "img/anak/anak-11.jpg", deskripsi: "Pandai berhitung dan suka teka-teki logika." },
  { id: "A012", nama: "Hafidz Ramadhan", usia: 10, kelas: "4 SD", img: "img/anak/anak-12.jpg", deskripsi: "Sedang menghafal juz 30. Disiplin waktu." },
  { id: "A013", nama: "Farhan Maulana", usia: 13, kelas: "1 SMP", img: "img/anak/anak-13.jpg", deskripsi: "Suka olahraga dan menjaga kebersihan." },
  { id: "A014", nama: "Daffa Pradipta", usia: 9, kelas: "3 SD", img: "img/anak/anak-14.jpg", deskripsi: "Humoris, pandai bergaul dengan teman." },
  { id: "A015", nama: "Arkan Rafif", usia: 12, kelas: "6 SD", img: "img/anak/anak-15.jpg", deskripsi: "Tertarik elektronika dan solder-menyolder." },
  { id: "A016", nama: "Ihsan Nur Fadillah", usia: 10, kelas: "4 SD", img: "img/anak/anak-16.jpg", deskripsi: "Suka membantu di dapur, rapi dan teliti." },
  { id: "A017", nama: "Khalid Alfarel", usia: 11, kelas: "5 SD", img: "img/anak/anak-17.jpg", deskripsi: "Hobi catur, fokus dan tekun." },
  { id: "A018", nama: "Raihan Aditya", usia: 12, kelas: "6 SD", img: "img/anak/anak-18.jpg", deskripsi: "Suka seni musik dan belajar gitar." },
  { id: "A019", nama: "Zidan Maresha", usia: 10, kelas: "4 SD", img: "img/anak/anak-19.jpg", deskripsi: "Penyayang hewan, terutama kucing." },
  { id: "A020", nama: "Rizal Firmansyah", usia: 9, kelas: "3 SD", img: "img/anak/anak-20.jpg", deskripsi: "Senang membaca komik sains." },
  { id: "A021", nama: "Bayu Saputra", usia: 11, kelas: "5 SD", img: "img/anak/anak-21.jpg", deskripsi: "Hobi renang dan disiplin latihan." },
  { id: "A022", nama: "Ghani Alfarizi", usia: 12, kelas: "6 SD", img: "img/anak/anak-22.jpg", deskripsi: "Suka astronomi dan memandang langit malam." },
  { id: "A023", nama: "Rafli Adriansyah", usia: 10, kelas: "4 SD", img: "img/anak/anak-23.jpg", deskripsi: "Suka menulis cerita pendek." },
  { id: "A024", nama: "Naufal Ilham", usia: 13, kelas: "1 SMP", img: "img/anak/anak-24.jpg", deskripsi: "Aktif di kegiatan olahraga yayasan." },
  { id: "A025", nama: "Dion Prasetyo", usia: 11, kelas: "5 SD", img: "img/anak/anak-25.jpg", deskripsi: "Menyukai matematika dan sains." },
  { id: "A026", nama: "Yusuf Abdurrahman", usia: 12, kelas: "6 SD", img: "img/anak/anak-26.jpg", deskripsi: "Gemar membaca Al-Quran dan kaligrafi." },
];

/* Default avatar jika gambar error */
const FALLBACK_IMG = "img/anak/default-avatar.png";

/* Utility */
const qs = (s, r = document) => r.querySelector(s);
function getParam(key) {
  const url = new URL(window.location.href);
  return url.searchParams.get(key);
}

/* ===========================================================
   HALAMAN LIST ANAK
   =========================================================== */

const AnakPage = {
  state: {
    filtered: [...ANAK_DATA],
    page: 1,
    perPage: 12,
  },

  initList({ gridId, paginationId, searchId, perPageId }) {
    this.grid = qs(`#${gridId}`);
    this.paginateEl = qs(`#${paginationId}`);
    this.searchEl = qs(`#${searchId}`);
    this.perPageEl = qs(`#${perPageId}`);

    this.searchEl.addEventListener("input", () => {
      const q = this.searchEl.value.toLowerCase();
      this.state.filtered = ANAK_DATA.filter(a =>
        a.nama.toLowerCase().includes(q)
      );
      this.state.page = 1;
      this.renderList();
    });

    this.perPageEl.addEventListener("change", () => {
      this.state.perPage = parseInt(this.perPageEl.value);
      this.state.page = 1;
      this.renderList();
    });

    this.renderList();
  },

  renderList() {
    const { filtered, page, perPage } = this.state;
    const total = filtered.length;
    const pages = Math.ceil(total / perPage);
    const start = (page - 1) * perPage;
    const slice = filtered.slice(start, start + perPage);

    // Render Cards
    this.grid.innerHTML = slice.map(a => `
      <div class="anak-card">
        <img src="${a.img}" alt="${a.nama}" onerror="this.src='${FALLBACK_IMG}'" />
        <div>
          <h3>${a.nama}</h3>
          <p>${a.deskripsi}</p>
          <div class="anak-meta">Usia ${a.usia} • ${a.kelas}</div>
          <div class="card-actions">
            <a href="anak-detail.html?id=${a.id}">Lihat detail →</a>
          </div>
        </div>
      </div>
    `).join("");

    // Pagination
    this.paginateEl.innerHTML = "";
    if (pages <= 1) return;

    const makeBtn = (label, p, disabled = false, active = false) => {
      const btn = document.createElement("button");
      btn.textContent = label;
      if (active) btn.classList.add("is-active");
      if (disabled) btn.disabled = true;
      btn.onclick = () => { this.state.page = p; this.renderList(); };
      this.paginateEl.appendChild(btn);
    };

    makeBtn("« Prev", page - 1, page === 1);
    for (let i = 1; i <= pages; i++) makeBtn(i, i, false, i === page);
    makeBtn("Next »", page + 1, page === pages);
  },

  /* ===========================================================
     HALAMAN DETAIL ANAK
     =========================================================== */
  initDetail({ containerId }) {
    const wrap = qs(`#${containerId}`);
    const id = getParam("id");
    const data = ANAK_DATA.find(a => a.id === id);

    if (!data) {
      wrap.innerHTML = `<p>Data anak tidak ditemukan.</p>`;
      return;
    }

    wrap.innerHTML = `
      <img src="${data.img}" alt="${data.nama}" onerror="this.src='${FALLBACK_IMG}'" />
      <div>
        <h1>${data.nama}</h1>
        <div class="anak-meta">Usia ${data.usia} • ${data.kelas} • ID: ${data.id}</div>
        <p style="margin-top:10px;">${data.deskripsi}</p>
      </div>
    `;
  }
};

window.AnakPage = AnakPage;
