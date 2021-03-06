<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Buku</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Perpustakaan STMIK Royal Kisaran </h2>
                        <h4>Jl. Prof.H.Yamin No.173, Kisaran Naga. Kec. Kisraran Timur <br>  Kabupaten Asahan, Sumatera Utara, Kode Pos : 21224</h4>
                        <hr>
                        <h3>DATA SELURUH BUKU</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									 <th>No.</th><th width="30%">No. Buku</th><th>Judul Buku</th><th>Penerbit</th><th>Tahun Terbit</th><th>Pengarang</th><th>Status</th><th>Keterangan</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM daftar_buku";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['no_buku'] ?></td>
                                    <td><?= $data['judul_buku'] ?></td>
                                    <td><?= $data['penerbit'] ?></td>
									<td><?= $data['tahun_terbit'] ?></td>
									<td><?= $data['pengarang'] ?></td>
									<td><?= $data['status'] ?></td>
                                    <td><?= $data['ket'] ?></td>
                                   
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>M.RIZKY PRATAMA<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>