<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    if(isset($_POST['submit'])){
                        $kategori = $_POST['kategori'];
                        $query = mysqli_query($koneksi, "INSERT INTO kategori(kategori) VALUES('$kategori')");
                        if($query) {
                            echo '<script>alert("Tambah data berhasil"); </script>';
                            echo '<script> location.href="index.php?page=kategori"</script>';
                        }else{
                            echo '<script>alert("Tambah data gagal"); </script>';
                        }
                    }
                    ?>
                    <div class="row mb-3">
                        <div class="col-md-2">Nama Kategori</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="kategori"></div>
                    </div> 
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit"><i class="fas fa-save"></i></button>
                        <button type="reset" class="btn btn-secondary"><i class="fas fa-refresh"></i></button>
                        <a href="?page=kategori" class="btn btn-danger"><i class="fas fa-arrow-left"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>