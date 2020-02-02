<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="no_buku" class="col-sm-3 control-label">No Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_buku" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Buku" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="judul_buku" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul_buku" class="form-control" id="inputEmail3" placeholder="Inputkan Judul Buku" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="penerbit" class="col-sm-3 control-label">Penerbit</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerbit" class="form-control" id="inputEmail3" placeholder="Inputkan Penerbit" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tahun_terbit" class="col-sm-3 control-label">Tahun Terbit</label>
                            <div class="col-sm-9">
                                <input type="text" name="tahun_terbit" class="form-control" id="inputEmail3" placeholder="Inputkan Tahun Terbit" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pengarang" class="col-sm-3 control-label">Pengarang</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengarang"class="form-control" id="inputEmail3" placeholder="Inputkan Pengarang" required>
                            </div>
                        </div>

                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="status" class="form-control">
                                    <option value="Ada">Ada</option>
                                    <option value="Dipinjam">Dipinjam</option>
                                    <option value="Penghapusan">Penghapusan</option>
                                </select>
                            </div>
                        </div>
                        <!--Akhir Status-->

                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Ket</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputEmail3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ruang_buku" class="col-sm-3 control-label">Ruang Buku</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="ruang_buku" class="form-control">
                                    <option value="Data Buku">Data Buku</option>
                                    <option value="Data Peminjam">Data Peminjam</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Buku
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nobuku=$_POST['no_buku'];
    $judul=$_POST['judul_buku'];
    $terbit=$_POST['penerbit'];
    $tahun=$_POST['tahun_terbit'];
    $ngarang=$_POST['pengarang'];
    $stat=$_POST['status'];
    $keterangan=$_POST['ket'];
    $ruang=$_POST['ruang_buku'];
    
    //buat sql
    $sql="INSERT INTO daftar_buku VALUES ('','$nobuku','$judul','$terbit','$tahun','$ngarang','$stat','$keterangan','$ruang')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
