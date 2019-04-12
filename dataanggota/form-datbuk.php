<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <link rel="icon" type="image/png" href="P.png">
    <title>Daftar Anggota Perpustakaan SMK Luar Biasa</title>
    <link rel="stylesheet" href="awal1.css">
  </head>
  <body>
  <header>
  <p><img src="P.png" style="float:left; width: 25px; "><h2 align="left">Perpustakaan SMK Luar Biasa</h2></p>
  </header>
  <div class="top">
  <h2 align="center">Daftar Anggota Perpustkaan SMK Luar Biasa</h2>
  </div>
  <table>
    <form action="create.php" method="post">
    <tr>
          <td><label for="id_anggota">Id Anggota</label></td>
            <td> :</td>
            <td><input type="text" name="id_anggota" id="id_anggota"></td>
      </tr>
      <tr>
          <td><label for="nama_anggota">Nama Anggota</label></td>
            <td> :</td>
            <td><input type="text" name="nama_anggota" id="nama_anggota"></td>
      </tr>
      <tr>
            <td><label for="jabatan_anggota">Jabatan Anggota</label></td>
            <td> :</td>
            <td><input type="text" name="jabatan_anggota" id="jabatan_anggota"></td>
      </tr>
      <tr>
            <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
            <td> :</td>
            <td><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked>Laki-Laki
            <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" checked>Perempuan </td>
      </tr>
      <tr>
      <td>
      <input type="submit" name="btnSimpan" value="Simpan"> </tr>
      </td>
    </form>
    </table>

  </body>
</html>
