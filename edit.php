<div class="card">
    <div class="card-body row">
        <h5 class="card-title h3 col-8">Edit Data matadiklat</h5>
        <div class="col-4 mb-2">
                    <a href="?m=matadiklat&s=kembali" class="btn btn-lg btn-primary float-end">Back</a>
        </div>
        <?php
        include_once "setting.php";
        $id = $_GET['id'];
        $sql = "SELECT * FROM matadiklat WHERE id='$id'";
        $query = mysqli_query(mysql: $koneksi, query: $sql);
        $r = mysqli_fetch_array($query); 
        ?>
        <form action="?m=matadiklat&s=update" method="post">
            <div class="mb-2">
                    <input type="text" class="form-control" name="kode" value="<?php echo $r['kode'];?>" placeholder="Nomor Kode"required>
            </div>
            <div class="mb-2">
                    <input type="text" class="form-control" name="matadiklat" value="<?php echo $r['matadiklat'];?>"placeholder="matadiklat">
            </div>
            <div class="mb-2">
                    <input type="text" class="form-control" name="sks" value="<?php echo $r['sks'];?>"placeholder="sks">
            </div>
            <div class="mb-2">
                <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
                <input type="reset" class="btn btn-sm btn-danger">
                <input type="submit" class="btn btn-sm btn-primary" name="update" value="Update">
            </div>
        </form>
    </div>
</div>