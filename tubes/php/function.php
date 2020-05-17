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

function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  //jika user tidak menampilkan gambar
  if ($error == 4) {
    /*echo "<script>
        alert('pilih gambar terlebih dahulu!');
        </script>";*/
    return 'nonephoto.jpg';
  }

  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
        alert('yang anda pilih bukan gambar!');
        </script>";
    return false;
  }

  // cek tipe file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
        alert('yang anda pilih bukan gambar!');
        </script>";
    return false;
  }

  // cek ukuran file
  if ($ukuran_file > 5000000) {
    echo "<script>
        alert('Ukuran gambar terlalu besar!');
        </script>";
    return false;
  }

  // lolos upload
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, 'gambar/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();
  $gambar = htmlspecialchars($data['gambar']);
  $nama = htmlspecialchars($data['nama']);
  $kategori = htmlspecialchars($data['kategori']);
  $merek = htmlspecialchars($data['merek']);
  $harga = htmlspecialchars($data['harga']);

  $query = "INSERT INTO elektronik
                    VALUES
                        (null, '$gambar', '$nama', '$kategori', '$merek', '$harga');
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM elektronik
            WHERE 
            nama LIKE '%$keyword%' OR
            kategori LIKE '%$keyword%' OR
            merek LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' 
            ";

  $result = mysqli_query($conn, $query);

  $rows = [];

  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id");

  return mysqli_affected_rows($conn);
}


function ubah($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $gambar = htmlspecialchars($data['gambar']);
  $nama = htmlspecialchars($data['nama']);
  $kategori = htmlspecialchars($data['kategori']);
  $merek = htmlspecialchars($data['merek']);
  $harga = htmlspecialchars($data['harga']);

  $query = "UPDATE elektronik 
            SET 
                gambar = '$gambar',
                nama = '$nama',
                kategori = '$kategori',
                merek = '$merek',
                harga = '$harga'
            WHERE id = $id
                ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
                alert('Username sudah digunakan!');
            </script>";
    return false;
  }
  $password = password_hash($password, PASSWORD_DEFAULT);

  $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}
