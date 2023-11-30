<?php
include "connect.php";

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $jurusan = $_POST['jurusan'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $jeniskelamin = $_POST['jeniskelamin'];
  $lahir = $_POST['lahir'];
  $alamat = $_POST['alamat'];


  if ($nama && $nim && $jurusan && $email && $password && $jeniskelamin && $lahir && $alamat) {
    $sql1 = "insert into data (nama, nim, jurusan, email, password, jeniskelamin, lahir, alamat) values ('$nama','$nim','$jurusan','$email','$password','$jeniskelamin','$lahir','$alamat')";
    $q1 = mysqli_query($koneksi,$sql1);
  
echo "data dimasukkan"; 
  }
}

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Daftar Mahasiswa </title>
    <link rel="stylesheet" href="styles.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>

  <header>
    <a href="https://www.instagram.com/irenetheresha/?hl=id" class="logo">UAS WEB</a>
    </header>

  <div class="container">
    <div class="title">Daftar Mahasiswa Baru</div>
    <div class="content">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nama Mahasiswa</span>
            <input type="text" name="nama" id="nama"  required>
          </div>
          <div class="input-box">
            <span class="details">NIM</span>
            <input type="text" name="nim" id="nim"  required>
          </div>
          <div class="input-box">
            <span class="details">Jurusan</span>
            <input type="text" name="jurusan" id="jurusan"  required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" id="email"  required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" id="password"  required>
          </div>
          <div class="input-box">
            <span class="details">Jenis Kelamin</span>
            <input type="text" name="jeniskelamin" id="jeniskelamin"  required>
          </div>
          <div class="input-box">
            <span class="details">Tanggal Lahir</span>
            <input type="text" name="lahir" id="lahir"  required>
          </div>
          <div class="input-box">
            <span class="details">Alamat</span>
            <input type="text" name="alamat" id="alamat"  required>
          </div>
        </div>

        <button class="" name="submit" id="submit">Submit</button>

      </form>
    </div>
  </div>






  <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <a href="index.html" >
        <i class="fas fa-qrcode"></i>
        <span>Home</span>
      </a>
      <a href="formulir.php" class="active">
        <i class="fas fa-link"></i>
        <span>Form</span>
      </a>
      <a href="table.php">
        <i class="fas fa-stream"></i>
        <span>Table</span>
      </a>
    
  </div>
 

  

</body>

<footer style="position: absolute; background-image :url(bg.jpg); width: 100%; text-align: center; padding:1%; bottom: -200px;">
  <p class="cp-text">
      © Copyright 2023 Irene. All rights reserved.
  </p>
  </footer>
</html>