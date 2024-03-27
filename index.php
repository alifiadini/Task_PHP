<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Form Belanja</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bg-warning text-center mb-4">
                <h3>Form Belanja</h3>
            </div>
            <div class="form-card">
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div> 
                            <input id="nama_pelanggan" name="nama_pelanggan" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="produk_pilihan">Produk Pilihan</label> 
                        <select id="produk_pilihan" name="produk_pilihan" class="custom-select">
                            <option value="">--- Pilih Produk ---</option>
                            <option value="TV">TV</option>
                            <option value="Kulkas">Kulkas</option>
                            <option value="Mesin Cuci">Mesin Cuci</option>
                            <option value="AC">AC</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_beli">Jumlah Beli</label> 
                        <input id="jumlah_beli" name="jumlah_beli" type="text" class="form-control">
                    </div> 
                    <div class="form-group">
                        <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                        <button name="unproses" type="reset" class="btn btn-secondary">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>

<?php
// Switch Case
if(isset($_POST['proses'])){ 

    $nama_pelanggan = $_POST['nama_pelanggan'];
    $produk_pilihan = $_POST['produk_pilihan'];
    $jumlah_beli = $_POST['jumlah_beli'];
    $harga_satuan = "";

    switch ($produk_pilihan) {
        case 'TV':
            $harga_satuan = 1000000;
            break;
        case 'Kulkas':
            $harga_satuan = 20000000;
            break;
        case 'Mesin Cuci':
            $harga_satuan = 15000000; 
            break;
        case 'AC':
            $harga_satuan = 7000000;
            break;
        default:
            $harga_satuan = "";
            break;
    }

    $total_belanja = $jumlah_beli * $harga_satuan;
    $diskon = 0.2 * $total_belanja;
    $ppn = 0.1 * ($total_belanja - $diskon);
    $harga_bersih = ($total_belanja - $diskon) + $ppn;
    
?>

<br>
<br>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table>
            <tr>
                <th colspan="2" style="text-align: center;">Struk Belanja</th>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td><?= $nama_pelanggan ?></td>
            </tr>
            <tr>
                <td>Produk Pilihan</td>
                <td><?= $produk_pilihan ?></td>
            </tr>
            <tr>
                <td>Jumlah Beli</td>
                <td><?= $jumlah_beli ?></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td>Rp.<?= number_format($harga_satuan, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <td>Total Belanja</td>
                <td>Rp.<?= number_format($total_belanja, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <td>Potongan Diskon</td>
                <td>Rp.<?= number_format($diskon, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <td>PPN</td>
                <td>Rp.<?= number_format($ppn, 0, ',', '.') ?></td>
            </tr>
            <tr class="total">
                <td>Harga Bersih</td>
            <td>Rp.<?= number_format($harga_bersih, 0, ',', '.') ?></td>
        </tr>
    </table>
</body>
</html>

<?php } ?>
<br>
