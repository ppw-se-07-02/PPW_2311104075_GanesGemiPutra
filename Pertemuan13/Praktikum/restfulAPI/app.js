// app.js - File utama server Express.js untuk RESTful API mahasiswa
const express = require("express");
const dbOperations = require("./crud");

const app = express();
const port = 3000;

// Middleware untuk parsing JSON
app.use(express.json());

// Middleware untuk serving static files (frontend)
app.use(express.static("public"));

// CREATE
app.post("/mahasiswaCreate", (req, res) => {
  const { nama, nim, jurusan, email } = req.body;
  if (!nama || !nim || !jurusan || !email) {
    return res.status(400).json({ message: "Data tidak lengkap" });
  }

  dbOperations.createMahasiswa(nama, nim, jurusan, email, (error, results) => {
    if (error) return res.status(500).json({ message: "Error creating", error });

    res.status(201).json({
      message: "Mahasiswa created",
      insertedId: results.insertId,
    });
  });
});

// READ
app.get("/mahasiswaGet", (req, res) => {
  dbOperations.getAllMahasiswa((error, users) => {
    if (error) return res.status(500).json({ message: "Error fetching data", error });
    res.json(users);
  });
});

// UPDATE
app.put("/mahasiswaUpdate/:id", (req, res) => {
  const { id } = req.params;
  const { nama, nim, jurusan, email } = req.body;

  if (!nama || !nim || !jurusan || !email) {
    return res.status(400).json({ message: "Data tidak lengkap" });
  }

  dbOperations.updateMahasiswa(id, nama, nim, jurusan, email, (error, results) => {
    if (error) return res.status(500).json({ message: "Error updating", error });
    res.json({ message: "Mahasiswa updated", affectedRows: results.affectedRows });
  });
});

// DELETE
app.delete("/mahasiswaDelete/:id", (req, res) => {
  const { id } = req.params;

  dbOperations.deleteMahasiswa(id, (error, results) => {
    if (error) return res.status(500).json({ message: "Error deleting", error });
    res.json({ message: "Mahasiswa deleted", affectedRows: results.affectedRows });
  });
});

// Jalankan server
app.listen(port, () => {
  console.log(`Server running on http://localhost:${port}`);
});
