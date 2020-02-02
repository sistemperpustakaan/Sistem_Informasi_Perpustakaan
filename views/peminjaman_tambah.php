<?php
$nopeminjam=$_GET['nopeminjam'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE no_peminjam ='$nopeminjam'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Pinjaman Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_peminjam" class="col-sm-3 control-label">Nomor Peminjam</label>
                            <div class="col-sm-9">
								<input type="text" name="no_peminjam" value="<?=$data['no_peminjam']?>" class="form-control" id="inputEmail3" placeholder="Nomor Perkara" readonly="true">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Nama Peminjam</label>
                            <div class="col-sm-9">
                                <input type="text" name="peminjam" class="form-control" id="inputEmail3" placeholder="Nama Peminjam">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tglpinjam" class="col-sm-3 control-label">Tanggal Pinjam</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pinjam" class="form-control" id="inputEmail3" placeholder="Tanggal Pinjam">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputEmail3" placeholder="Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Peminjaman</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nopeminjam=$_POST['no_peminjam'];
	$peminjam=$_POST['peminjam'];
	$tglpinjam=$_POST['tgl_pinjam'];
    $tglkembali=$_POST['tgl_kembali']
    $ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO peminjaman VALUES ('$nopeminjam','$peminjam',$tglPinjam','$tglkembali','','$ket','')";
	$sqlArsip="UPDATE peminjaman SET status='Dipinjam' WHERE no_peminjam='$nopeminjam'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Peminjaman Error");
	$queryArsip=  mysqli_query($koneksi, $sqlArsip) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
