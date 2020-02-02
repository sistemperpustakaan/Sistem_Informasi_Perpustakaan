<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Buku</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM daftar_buku WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Perpustakaan STMIK Royal Kisaran </h2>
                        <h4>Jl. Prof.H.Yamin No.173, Kisaran Naga. Kec. Kisraran Timur <br> Kabupaten Asahan, Sumatera Utara, Kode Pos : 21224</h4>
                        <hr>
                        <h3>DATA ARSIP</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>No.Buku</td> <td><?= $data['no_buku'] ?></td>
                                </tr>
                                
                                <tr>
                                    <td>Judul Buku</td> <td><?= $data['judul_buku'] ?></td>
                                </tr>
								<tr>
                                    <td>Penerbit</td> <td><?= $data['penerbit'] ?></td>
                                </tr>
								<tr>
                                    <td>Tahun Terbit</td> <td><?= $data['tahun_terbit'] ?></td>
                                </tr>
								<tr>
                                    <td>Pengarang</td> <td><?= $data['pengarang'] ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td> <td><?= $data['status'] ?></td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td> <td><?= $data['ket'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>M.RIZKY PRATAMA<strong></u><br>
                                        NIM : 16220087
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>