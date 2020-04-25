<?php
//function untuk melakukan koneksi ke database
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
  mysqli_select_db($conn, "tubes_193040181") or die("Database salah!");

  return $conn;
}

//function untuk melakukan query ke database
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");


  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();
  $gambar = htmlspecialchars($data['gambar']);
  $nama = htmlspecialchars($data['nama']);
  $kategori = htmlspecialchars($data['kategori']);
  $merek = htmlspecialchars($data['merek']);
  $harga = htmlspecialchars($data['harga']);

  $query = "INSERT INTO mahasiswa
                    VALUES
                        (null, '$gambar', '$nama', '$kategori', '$merek', '$harga');
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
