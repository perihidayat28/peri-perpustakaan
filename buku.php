<?php
require 'koneksi.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $age = $_POST["age"];
  $country = $_POST["country"];
  $gender = $_POST["gender"];

  $languages = $_POST["languages"];
  $language = "";
  foreach($languages as $row){
    $language .= $row . ",";
  }

  $query = "INSERT INTO tb_data VALUES('', '$name', '$age', '$country', '$gender', '$language')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <h3>Buku</h3>

    <form class="buku_tampilan" action="" method="post" autocomplete="off">
   


    <table>
      <tr>
        <td><span>No Urut</span></td>
        <td></td>
        <td><input type="text" name="no_urut" placeholder="Username"></td>
      </tr>
   
      <tr>
        <td><span>Kode Buku</span></td>
        <td></td>
        <td><input type="text" name="kode_buku" placeholder="Kode Buku"></td>
      </tr>

      <tr>
        <td><span>Tanggal Catat</span></td>
        <td></td>
        <td><input type="date" name="tanggal_catat" placeholder="Tanggal Cata"></td>
      </tr>
   
      <tr>
        <td><span>Id Kategori</span></td>
        <td></td>
        <td><input type="text" name="id_kategori" placeholder="Id Kategori"></td>
      </tr>
   
      <tr>
        <td><span>Nama Pengarang</span></td>
        <td></td>
        <td><input type="text" name="nama_pengarang" placeholder="Nama Pengarang"></td>
      </tr>
   
   
      <tr>
        <td><span>Judul Buku</span></td>
        <td></td>
        <td><input type="text" name="judul_buku" placeholder="Judul Buku"></td>
      </tr>
   
      <tr>
        <td><span>Penerbit</span></td>
        <td></td>
        <td><input type="text" name="penerbit" placeholder="Penerbit"></td>
      </tr>
   
      <tr>
        <td><span>Tahun Terbit</span></td>
        <td></td>
        <td><input type="year" name="tahun_terbit" placeholder="Tahun Terbit"></td>
      </tr>
   
      <tr>
        <td><span>Jilid</span></td>
        <td></td>
        <td><input type="text" name="jilid" placeholder="Jilid"></td>
      </tr>
   
      <tr>
        <td><span>Sumber</span></td>
        <td></td>
        <td><input type="text" name="sumber" placeholder="Sumber"></td>
      </tr>
   
   
      <tr>
        <td><span>Harga</span></td>
        <td></td>
        <td><input type="text" name="harga" placeholder="Harga"></td>
      </tr>
   
      <tr>
        <td><span>Golongan</span></td>
        <td></td>
        <td><input type="text" name="golongan" placeholder="Golongan"></td>
      </tr>
   
      <tr>
        <td><span>Jumlah</span></td>
        <td></td>
        <td><input type="number" name="jumlah" placeholder="Jumlah"></td>
      </tr>
      <tr>
        <td><span>Id Rak</span></td>
        <td></td>
        <td><input type="number" name="jumlah" placeholder="Id Rak"></td>
      </tr>
      <tr>
        <td><span>Keterangan</span></td>
        <td></td>
        <td><textarea type="text" name="jumlah" placeholder="Keterangan"></textarea></td>
      </tr>

      <tr>
        <td> <input type="submit" value="Simpan"></td>
        <td></td>
        <td></td>
      </tr>
   




    </table>

   




    </form>
  </body>
</html>