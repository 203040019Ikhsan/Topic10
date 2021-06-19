<!-- {
	"PHP Tag": {
	  "prefix": "php",
	  "body": "<?php $1 ?>"
	},
	"Inline Echo": {
	  "prefix": "phpp",
	  "body": "<?= $$1; ?>"
	},
	"Input Label": {
	  "prefix": "formel",
	  "body": [
		"<label>",
		"\t${3:Username}",
		"\t<input type=\"${1:text}\" name=\"${2:username}\">",
		"</label>"
	  ]
	},
	"My Form": {
	  "prefix": "myform",
	  "body": "<form method=\"${1|get,post|}\" action=\"$2\">$3</form>"
	}
  } -->

  <!-- <?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];
// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>"></li>
    <li>NRP : <?= $m['nrp']; ?></li>
    <li>Nama : <?= $m['nama']; ?></li>
    <li>Email : <?= $m['email']; ?></li>
    <li>Jurusan : <?= $m['jurusan']; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>

</html> -->

<!-- <?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', 'root', 'pw_043040023');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
              mahasiswa
            VALUES
            (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar');
          ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}  -->

// <?php
// // Koneksi ke DB & Pilih Database
// $conn = mysqli_connect('localhost', 'root', 'root', 'pw_043040023');

// // Query isi tabel mahasiswa
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// // ubah data ke dalam array
// // $row = mysqli_fetch_row($result); // array numerik
// // $row = mysqli_fetch_assoc($result); // array associative
// // $row = mysqli_fetch_array($result); // keduanya
// $rows = [];
// while ($row = mysqli_fetch_assoc($result)) {
//   $rows[] = $row;
// }

// // tampung ke variabel mahasiswa
// $mahasiswa = $rows;
// ?>
// <!DOCTYPE html>
// <html lang="en">

// <head>
//   <meta charset="UTF-8">
//   <meta name="viewport" content="width=device-width, initial-scale=1.0">
//   <title>Daftar Mahasiswa</title>
// </head>

// <body>
//   <h3>Daftar Mahasiswa</h3>

//   <table border="1" cellpadding="10" cellspacing="0">
//     <tr>
//       <th>#</th>
//       <th>Gambar</th>
//       <th>NRP</th>
//       <th>Nama</th>
//       <th>Email</th>
//       <th>Jurusan</th>
//       <th>Aksi</th>
//     </tr>

//     <?php $i = 1;
//     foreach ($mahasiswa as $m) : ?>
//       <tr>
//         <td><?= $i++; ?></td>
//         <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
//         <td><?= $m['nrp']; ?></td>
//         <td><?= $m['nama']; ?></td>
//         <td><?= $m['email']; ?></td>
//         <td><?= $m['jurusan']; ?></td>
//         <td>
//           <a href="">ubah</a> | <a href="">hapus</a>
//         </td>
//       </tr>
//     <?php endforeach; ?>
//   </table>

// </body>

// </html>

<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
        <td><?= $m['nrp']; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['email']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>

<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php">Tambah Data Mahasiswa</a>
  <br><br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
        <td><?= $m['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $m['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>