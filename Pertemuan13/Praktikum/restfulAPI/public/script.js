// script.js - JavaScript untuk interaksi frontend dengan API
const API = ""; // karena frontend diserve dari server yang sama: http://localhost:3000

const tbody = document.getElementById("tbody");
const msg = document.getElementById("msg");

const form = document.getElementById("mhsForm");
const formTitle = document.getElementById("formTitle");
const btnSubmit = document.getElementById("btnSubmit");
const btnCancel = document.getElementById("btnCancel");
const btnRefresh = document.getElementById("btnRefresh");

const inputId = document.getElementById("id");
const inputNama = document.getElementById("nama");
const inputNim = document.getElementById("nim");
const inputJurusan = document.getElementById("jurusan");
const inputEmail = document.getElementById("email");

function setMessage(text, isError=false){
  msg.textContent = text;
  msg.style.color = isError ? "#ff8a8a" : "#9bffb3";
  if(!text) msg.style.color = "";
}

function resetForm(){
  inputId.value = "";
  formTitle.textContent = "Tambah Mahasiswa";
  btnSubmit.textContent = "Simpan";
  btnCancel.classList.add("hidden");
  form.reset();
}

async function loadData(){
  tbody.innerHTML = `<tr><td colspan="6">Memuat data...</td></tr>`;
  setMessage("");

  try{
    const res = await fetch(`${API}/mahasiswaGet`);
    if(!res.ok) throw new Error("Gagal mengambil data");
    const data = await res.json();

    if(!data.length){
      tbody.innerHTML = `<tr><td colspan="6">Data kosong.</td></tr>`;
      return;
    }

    tbody.innerHTML = data.map(row => `
      <tr>
        <td>${row.id}</td>
        <td>${row.nama}</td>
        <td>${row.nim}</td>
        <td>${row.jurusan}</td>
        <td>${row.email}</td>
        <td>
          <div class="actions">
            <button class="ghost" onclick='editRow(${JSON.stringify(row)})'>Edit</button>
            <button onclick="deleteRow(${row.id})">Hapus</button>
          </div>
        </td>
      </tr>
    `).join("");

  }catch(err){
    tbody.innerHTML = `<tr><td colspan="6">Error: ${err.message}</td></tr>`;
  }
}

window.editRow = function(row){
  inputId.value = row.id;
  inputNama.value = row.nama;
  inputNim.value = row.nim;
  inputJurusan.value = row.jurusan;
  inputEmail.value = row.email;

  formTitle.textContent = "Update Mahasiswa";
  btnSubmit.textContent = "Update";
  btnCancel.classList.remove("hidden");
  setMessage("");
}

window.deleteRow = async function(id){
  if(!confirm(`Yakin hapus data ID ${id}?`)) return;

  try{
    const res = await fetch(`${API}/mahasiswaDelete/${id}`, { method: "DELETE" });
    const out = await res.json().catch(()=> ({}));
    if(!res.ok) throw new Error(out.message || "Gagal menghapus");

    setMessage(out.message || "Berhasil menghapus");
    await loadData();
  }catch(err){
    setMessage(err.message, true);
  }
}

form.addEventListener("submit", async (e) => {
  e.preventDefault();
  setMessage("");

  const payload = {
    nama: inputNama.value.trim(),
    nim: inputNim.value.trim(),
    jurusan: inputJurusan.value.trim(),
    email: inputEmail.value.trim()
  };

  const id = inputId.value;

  try{
    if(!id){
      // CREATE
      const res = await fetch(`${API}/mahasiswaCreate`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(payload)
      });

      const out = await res.json().catch(()=> ({}));
      if(!res.ok) throw new Error(out.message || "Gagal menambah data");

      setMessage(out.message || "Mahasiswa berhasil ditambahkan");
      resetForm();
      await loadData();
    }else{
      // UPDATE
      const res = await fetch(`${API}/mahasiswaUpdate/${id}`, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(payload)
      });

      const out = await res.json().catch(()=> ({}));
      if(!res.ok) throw new Error(out.message || "Gagal update data");

      setMessage(out.message || "Mahasiswa berhasil diupdate");
      resetForm();
      await loadData();
    }
  }catch(err){
    setMessage(err.message, true);
  }
});

btnCancel.addEventListener("click", resetForm);
btnRefresh.addEventListener("click", loadData);

loadData();
