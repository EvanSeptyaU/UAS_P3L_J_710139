<?php
    include '../component/sidebarPemilikMobil.php'
    
?>

<?php
    if(isset($_GET['id'])) {
        include '../db.php';
        
        $id=$_GET['id'];

        $query = mysqli_query($con, "SELECT * FROM pemilikmobil WHERE id=$id") or die(mysqli_error($con));
        $data = mysqli_fetch_assoc($query); 
    }
?>


    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >EDIT PEMILIK MOBIL</h4>
        <hr>
        <form action="../process/editPemilikMobilProcess.php" method="post">
          <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nama</label> 
                  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                  <input class="form-control" id="namapemilikmobil" name="namapemilikmobil" aria-describedby="namapemilikmobil" placeholder="Nama Pemilik" value="<?php echo $data['namapemilikmobil'];?> "> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputPassword1" class="form-label">Password</label> 
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password Pemilik Mobil" > 
                </div>
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Alamat</label> 
                  <input class="form-control" id="alamatpemilikmobil" name="alamatpemilikmobil" aria-describedby="alamatpemilikmobil" placeholder="Alamat Pemilik" value="<?php echo $data['alamatpemilikmobil'];?> "> 
                </div> 
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label> 
                  <input class="form-control" id="nomorteleponpemilikmobil" name="nomorteleponpemilikmobil" aria-describedby="nomorteleponpemilikmobil" placeholder="Nomor Telepon Pemilik" value="<?php echo $data['nomorteleponpemilikmobil'];?> "> 
                </div>  
                <div class="mb-3"> 
                  <label for="exampleInputEmail1" class="form-label">Nomor KTP</label> 
                  <input class="form-control" id="nomorktppemilikmobil" name="nomorktppemilikmobil" placeholder="Nomor KTP Pemilik Mobil" aria-describedby="nomorktppemilikmobil" value="<?php echo $data['nomorktppemilikmobil'];?> "> 
                </div>  
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="editPemilikMobil">Edit Pemilik Mobil</button>
            </div>
            </form>
    </div>
    </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>