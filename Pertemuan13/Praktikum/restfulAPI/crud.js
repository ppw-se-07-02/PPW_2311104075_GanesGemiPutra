const db = require('./db');

function createMahasiswa(nama, nim, jurusan, email, callback) {
  const sql = 'INSERT INTO mahasiswa (nama, nim, jurusan, email) VALUES (?, ?, ?, ?)';
  db.query(sql, [nama, nim, jurusan, email], callback);
}

function getAllMahasiswa(callback) {
  const sql = 'SELECT * FROM mahasiswa';
  db.query(sql, callback);
}

function updateMahasiswa(id, nama, nim, jurusan, email, callback) {
  const sql = 'UPDATE mahasiswa SET nama = ?, nim = ?, jurusan = ?, email = ? WHERE id = ?';
  db.query(sql, [nama, nim, jurusan, email, id], callback);
}

function deleteMahasiswa(id, callback) {
  const sql = 'DELETE FROM mahasiswa WHERE id = ?';
  db.query(sql, [id], callback);
}

module.exports = {
  createMahasiswa,
  getAllMahasiswa,
  updateMahasiswa,
  deleteMahasiswa
};
