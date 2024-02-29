<h1 class="mt-4">Peminjaman</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
    <div class="col-md-12">
        <form method="post">
            <?php
                if(isset($_POST['submit'])) {
                    $buku_id= $_POST['buku_id'];
                    $user_id= $_SESSION['user']['user_id'];
                    $tanggal_peminjaman= $_POST['tanggal_peminjaman'];
                    $tanggal_pengembalian= $_POST['tanggal_pengembalian'];
                    $status_peminjaman= $_POST['status_peminjaman'];
                    $query = mysqli_query($koneksi, "INSERT INTO peminjaman(buku_id,user_id,tanggal_peminjaman,tanggal_pengembalian,
                    status_peminjaman)
                                         values('$buku_id','$user_id','$tanggal_peminjaman','$tanggal_pengembalian','$status_peminjaman')");
                    if($query) {
                        echo '<script>alert("Tambah data berhasil"); </script>';
                        echo '<script> location.href="index.php?page=peminjaman"</script>';
                    }else{
                        echo '<script>alert("Tambah data gagal"); </script>';
                    }
                }
            ?>
            <div class="row mb-3">
                <div class="col-md-2">Buku</div>
                <div class="col-md-8">
                    <select name="buku_id" class="form-control">
                        <?php
                            $buk = mysqli_query($koneksi, "SELECT*FROM buku");
                            while($buku = mysqli_fetch_array($buk)) {
                        ?>
                                <option value="<?php echo $buku['buku_id']; ?>"><?php echo $buku['judul']; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">Tanggal Peminjaman</div>
                    <div class="col-md-8">
                            <input type="date" class="form-control" name="tanggal_peminjaman">
                </div>
                </div>
            <div class="row mb-3">
                <div class="col-md-2">Tanggal Pengembalian</div>
                    <div class="col-md-8">
                        <input type="date" class="form-control" name="tanggal_pengembalian">
                    </div>
                </div>
            <div class="row mb-3">
                <div class="col-md-2">Status Peminjaman</div>
                    <div class="col-md-8">
                    <select name="status_peminjaman" class="form-control">
                        <option value="dipinjam">Dipinjam</option>                  
                        <option value="dikembalikan">Dikembalikan</option>
                    </select>            
                 </div>
                </div>
            <div class="row mb-3">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary" name="submit" value="submit"><i class="fas fa-save"></i></button>
                    <button type="reset" class="btn btn-secondary"><i class="fas fa-refresh"></i></button>
                    <a href="?page=peminjaman" class="btn btn-danger"><i class="fas fa-arrow-left"></i></a>
                </div>
                </div>
        </form>
    </div>
</div>
    </div>
    </div>