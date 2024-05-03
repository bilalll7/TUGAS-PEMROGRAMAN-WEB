<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <center>
      <h1>Test</h1>
      <table border="1">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Makanan</th>
          <th>Jenis</th>
          <th>Jumlah</th>
          <th>Harga</th>
          <th>Total Harga</th>
        </tr>

        <?php
          $nama = array("Mimin", "Azizi", "Giselma", "Ancika", "Zee");
          $makanan = array("seblak", "spageti", "Mie Ayam", "Bakso", "Pancong");
          $jenis = array("makanan", "makanan", "makanan", "makanan", "makanan");
          for($i = 0; $i < 5; $i++){
            echo "<tr>
                  <td>". $i + 1 . "</td>
                  <td>$nama[$i]</td>
                  <td>$makanan[$i]</td>
                  <td>$jenis[$i]</td>
                  </tr>"; 
          }
        ?>
      </table>
  </center>
</body>
</html>