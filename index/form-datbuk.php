<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <link rel="icon" type="image/png" href="P.png">
    <title>Data Buku Perpustakaan SMK Luar Biasa</title>
    <link rel="stylesheet" href="awal1.css">
  </head>
  <body>
  <header>
  <p><img src="P.png" style="float:left; width: 25px; "><h2 align="left">Perpustakaan SMK Luar Biasa</h2></p>
  </header>
  <div class="top">
  <h2 align="center">Data Buku Perpustkaan SMK Luar Biasa</h2>
  </div>
  <table>
    <form action="create.php" method="post">
    <tr>
          <td><label for="id_buku">Id Buku</label></td>
            <td> :</td>
            <td><input type="text" name="id_buku" id="id_buku"></td>
      </tr>
      <tr>
          <td><label for="kode">Kode</label></td>
            <td> :</td>
            <td><input type="text" name="kode" id="kode"></td>
      </tr>
      <tr>
            <td><label for="judul">Judul Buku</label></td>
            <td> :</td>
            <td><input type="text" name="judul" id="judul"></td>
      </tr>
      <tr>
            <td><label for="kategori">Kategori Buku</label></td>
            <td> :</td>
            <td><input type="text" name="kategori" id="kategori"></td>
      </tr>
      <tr>
            <td><label for="eksemplar">Eksemplar</label></td>
            <td> :</td>
            <td><input type="text" name="eksemplar" id="eksemplar"></td>
      </tr>
      <tr>
      <td>
      <input type="submit" name="btnSimpan" value="Simpan"> </tr>
      </td>
    </form>
    </table>

  </body>
</html>
