<?php

//if isset (jika tombol submit di klik)
if (isset($_POST['submit'])) {
    //tampung semua inputan ke variable baru menggunakan metode POST
    $penerima = $_POST['penerima'];
    $alamat = $_POST['alamat'];
    $kurir = $_POST['kurir'];
    $pengirim = $_POST['pengirim'];
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Print alamat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6" id="printArea">
                <div class="card">
                    <div class="card-body">
                        <ul>
                            <li>Tanggal: <?= date("Y-m-d"); ?> </li>
                            <li>Penerima:  <?= $penerima ?></li>
                            <li>Pengirim:  <?= $pengirim ?></li>
                        </ul>
                        <hr>
                        <table>
                            <tr>
                                <td style="padding: 8px;"><b style="font-size: 15px;">Alamat:</b></td>
                                <td><?= $alamat ?></td>
                            </tr>
                        </table>
                        <hr>
                        <center>
                            <!-- pengkondisian -->
                            <?php
                                if($kurir == 'jne') {
                                    echo "<img src='https://i.ibb.co/HF2qSvd/jne.png' width='55px'>";
                                }else if($kurir == 'jnt') {
                                    echo "<img src='https://i.ibb.co/71sywVK/j-t.png' width='55px'>";
                                }
                            ?>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
            <button onclick="printContent()" class="btn btn-primary">Cetak</button>
            </div>
        </div>
    </div>
</body>

<script>
        function printContent() {
            var printArea = document.getElementById('printArea');
            
            // Membuka jendela cetak
            var printWindow = window.open('', '_blank');
            
            // Menambahkan konten ke jendela cetak
            printWindow.document.write('<html><head><title>Cetak</title></head><body>');
            printWindow.document.write(printArea.innerHTML);
            printWindow.document.write('</body></html>');
            
            // Menutup jendela cetak setelah konten ditambahkan
            printWindow.document.close();
            
            // Memanggil fungsi cetak
            printWindow.print();
        }
    </script>