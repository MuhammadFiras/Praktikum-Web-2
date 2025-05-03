<?php
require_once 'Koneksi.php';

//////////////////////
// CRUD - MEMBER
//////////////////////

function getAllMembers() {
    $db = connectDB();
    return $db->query("SELECT * FROM member")->fetchAll(PDO::FETCH_ASSOC);
}

function insertMember($data) {
    $db = connectDB();
    $sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terakhir_bayar)
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    return $stmt->execute([
        $data['nama_member'],
        $data['nomor_member'],
        $data['alamat'],
        $data['tgl_mendaftar'],
        $data['tgl_terakhir_bayar']
    ]);
}

function getMemberById($id) {
    $db = connectDB();
    $stmt = $db->prepare("SELECT * FROM member WHERE id_member = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function updateMember($id, $data) {
    $db = connectDB();
    $sql = "UPDATE member SET nama_member = ?, nomor_member = ?, alamat = ?, tgl_mendaftar = ?, tgl_terakhir_bayar = ? WHERE id_member = ?";
    $stmt = $db->prepare($sql);
    return $stmt->execute([
        $data['nama_member'],
        $data['nomor_member'],
        $data['alamat'],
        $data['tgl_mendaftar'],
        $data['tgl_terakhir_bayar'],
        $id
    ]);
}

function deleteMember($id) {
    $db = connectDB();
    $stmt = $db->prepare("DELETE FROM member WHERE id_member = ?");
    return $stmt->execute([$id]);
}

/////////////////
// CRUD - BUKU //
/////////////////

function getAllBooks() {
    $db = connectDB();
    return $db->query("SELECT * FROM buku")->fetchAll(PDO::FETCH_ASSOC);
}

function insertBook($data) {
    $db = connectDB();
    $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit)
            VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    return $stmt->execute([
        $data['judul_buku'],
        $data['penulis'],
        $data['penerbit'],
        $data['tahun_terbit']
    ]);
}

function getBookById($id) {
    $db = connectDB();
    $stmt = $db->prepare("SELECT * FROM buku WHERE id_buku = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function updateBook($id, $data) {
    $db = connectDB();
    $sql = "UPDATE buku SET judul_buku = ?, penulis = ?, penerbit = ?, tahun_terbit = ? WHERE id_buku = ?";
    $stmt = $db->prepare($sql);
    return $stmt->execute([
        $data['judul_buku'],
        $data['penulis'],
        $data['penerbit'],
        $data['tahun_terbit'],
        $id
    ]);
}

function deleteBook($id) {
    $db = connectDB();
    $stmt = $db->prepare("DELETE FROM buku WHERE id_buku = ?");
    return $stmt->execute([$id]);
}

//////////////////////
// CRUD - PEMINJAMAN
//////////////////////

function getAllPeminjaman() {
    $db = connectDB();
    return $db->query("SELECT * FROM peminjaman")->fetchAll(PDO::FETCH_ASSOC);
}

function insertPeminjaman($data) {
    $db = connectDB();
    $sql = "INSERT INTO peminjaman (tgl_pinjam, tgl_kembali) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    return $stmt->execute([
        $data['tgl_pinjam'],
        $data['tgl_kembali']
    ]);
}

function getPeminjamanById($id) {
    $db = connectDB();
    $stmt = $db->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function updatePeminjaman($id, $data) {
    $db = connectDB();
    $sql = "UPDATE peminjaman SET tgl_pinjam = ?, tgl_kembali = ? WHERE id_peminjaman = ?";
    $stmt = $db->prepare($sql);
    return $stmt->execute([
        $data['tgl_pinjam'],
        $data['tgl_kembali'],
        $id
    ]);
}

function deletePeminjaman($id) {
    $db = connectDB();
    $stmt = $db->prepare("DELETE FROM peminjaman WHERE id_peminjaman = ?");
    return $stmt->execute([$id]);
}
?>
