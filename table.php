
<?php
include "connect.php";

?>

 <!DOCTYPE html>
 <html lang="en" title="">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Data Mahasiswa</title>
     <link rel="stylesheet" href="sty.css">
 </head>

 <header>
    <a href="https://www.instagram.com/irenetheresha/?hl=id" class="logo">UAS WEB</a>
    </header>
 
 <body>
     <main class="table">
         <section class="table__body">
             <table>
                 <thead>
                     <tr>
                        <th>Name</th>
                        <th>NIM</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                     </tr>
                 </thead>
                 <tbody>
                    <?php
                    $sql2 = "select * from data order by 'id' desc";
                    $q2 = mysqli_query($koneksi,$sql2);
                    while($r1 = mysqli_fetch_array ($q2)){
                      $nama = $r1['nama'];
                      $nim = $r1['nim'];
                      $jurusan = $r1['jurusan'];
                      $email = $r1['email'];
                      $password = $r1['password'];
                      $jeniskelamin = $r1['jeniskelamin'];
                      $lahir = $r1['lahir'];
                      $alamat = $r1['alamat'];
                    ?>

                    <tr>
                        <th scope="row"> <?php echo $nama ?> </th>
                        <th scope="row"> <?php echo $nim ?> </th>
                        <th scope="row"> <?php echo $jurusan ?> </th>
                        <th scope="row"> <?php echo $email ?> </th>
                        <th scope="row"> <?php echo $password ?> </th>
                        <th scope="row"> <?php echo $jeniskelamin ?> </th>
                        <th scope="row"> <?php echo $lahir ?> </th>
                        <th scope="row"> <?php echo $alamat ?> </th>
                       </tr>
                       <?php
                       }
                       ?>
                     
                 </tbody>
             </table>
         </section>
     </main>

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
      <a href="formulir.php">
        <i class="fas fa-link"></i>
        <span>Form</span>
      </a>
      <a href="table.php"  class="active">
        <i class="fas fa-stream"></i>
        <span>Table</span>
      </a>
    
  </div>
 </body>

 <footer style="position: absolute; background-image :url(bgtable.jpg); color: white; width:  100%; text-align: center; padding:1%; bottom: -200px;">
    <p class="cp-text">
        © Copyright 2023 Irene. All rights reserved.
    </p>
    </footer>
 
 </html>