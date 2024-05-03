<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <center>
        <h1>Transaksi Penjualan PT.ALFA OMEGA BANDUNG</h1>
        <table border=1>
            <tr>
                <th>No</th>
                <th>Pembeli</th>
                <th>Nama Barang</th>
                <th>Ukuran</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total Harga</th>
            </tr>
            <?php

            $pembeli = array("Santi", "Dewi", " RUdi", "Sony", "SOfie", "Gaga", "Alek");
            $nama_barang = array("TEH BOTOL", "COCA COLA", "AIR MINERAL","TEH BOTOL", "COCA COLA", "COCA COLA", "TEH BOTOL");
            $ukuran = array("BESAR","KECIL","SEDANG", "SEDANG", "BESAR", "SEDANG","KECIL");
            $jumlah = array(2, 3, 5, 4, 5, 3,2);
            $total_harga = 0;
            $total_semuanya = 0;
            for($i = 0; $i < 7; $i++){
                if($nama_barang[$i] === "TEH BOTOL"){
                   if($ukuran[$i] === "KECIL") {
                        $harga = 3000;
                   }elseif ($ukuran[$i] === "SEDANG") {
                        $harga = 4000;
                   }elseif ($ukuran[$i] === "BESAR") {
                        $harga = 5000;
                   }
                }else if($nama_barang[$i] === "AIR MINERAL"){
                    if($ukuran[$i] === "KECIL"){
                        $harga = 1500;
                    }elseif ($ukuran[$i] === "SEDANG") {
                        $harga = 2000;
    
                    }elseif ($ukuran[$i] === "BESAR") {
                        $harga = 2500;
    
                    }
                }elseif ($nama_barang[$i] === "AIR MINERAL") {
                    if($ukuran[$i] === "KECIL"){
                        $harga = 4000;
                    }elseif ($ukuran[$i] === "SEDANG") {
                        $harga = 5000;
    
                    }elseif ($ukuran[$i] === "BESAR") {
                        $harga = 6000;
    
                    }
                }
                $total_harga = $jumlah[$i] * $harga;
                $total_semuanya = $total_semuanya + $total_harga;
                echo "<tr><td>". $i + 1 ."<td>$pembeli[$i]<td>$nama_barang[$i]<td>$ukuran[$i]<td>$jumlah[$i]<td>$harga<td>$total_harga";
            }
            echo "<tr><td colspan = 6>Total Semua<td>$total_semuanya";
            ?>
        </table>
    </center>
</body>
</html>