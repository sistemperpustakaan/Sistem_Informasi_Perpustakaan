<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM daftar_buku WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Daftar Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="no_buku" class="col-sm-3 control-label">No Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_buku" value="<?=$data['no_buku']?>" class="form-control" id="inputEmail3" placeholder="No Buku" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="judul_buku" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul_buku" value="<?=$data['judul_buku']?>" class="form-control" id="inputEmail3" placeholder="Judul Buku" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="penerbit" class="col-sm-3 control-label">Penerbit</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerbit" value="<?=$data['penerbit']?>"class="form-control" id="inputEmail3" placeholder="Penerbit" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tahun_terbit" class="col-sm-3 control-label">Tahun Terbit</label>
                            <div class="col-sm-9">
                                <input type="text" name="tahun_terbit" value="<?=$data['tahun_terbit']?>" class="form-control" id="inputEmail3" placeholder="Tahun Terbit" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pengarang" class="col-sm-3 control-label">Pengarang</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengarang" value="<?=$data['pengarang']?>" class="form-control" id="inputEmail3" placeholder="Pengarang" required>
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
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>" class="form-control" id="inputEmail3" placeholder="Keterangan">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="ruang_buku" class="col-sm-3 control-label">Ruang Buku</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="ruang_buku" class="form-control">
                                    <option value="Data Buku">Data Buku</option>
                                    <option value="Data Penimjam">Data Peminjam</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                <span class="fa fa-save"></span> Update Data Buku </button>
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
    $no_buku=$_POST['no_buku'];
    $judul_buku=$_POST['judul_buku'];
    $penerbit=$_POST['penerbit'];
    $tahun_terbit=$_POST['tahun_terbit'];
    $pengarang=$_POST['pengarang'];
    $status=$_POST['status'];
    $ket=$_POST['ket'];
    $ruang_buku=$_POST['ruang_buku'];
    //buat sql
    $sql ="UPDATE daftar_buku SET  no_buku='$no_buku',judul_buku='$judul_buku', 
    penerbit='$penerbit', tahun_terbit='$tahun_terbit',pengarang='$pengarang',status='$status',ket ='$ket',ruang_buku='ruang_buku' WHERE id = '$id'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>


