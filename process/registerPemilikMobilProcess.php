<?php 
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum  
    // $_POST itu method di formnya     
    if(isset($_POST['registerPemilikMobil']))
    {  
         
         // untuk mengoneksikan dengan database dengan memanggil file db.php         
         include('../db.php'); 

        // tampung nilai yang ada di from ke variabel 
        // sesuaikan variabel name yang ada di registerPage.php disetiap input 
        //namapemilikmobil,alamatpemilikmobil,nomorteleponpemilikmobil,nomorktppemilikmobil
        $namapemilikmobil = $_POST['namapemilikmobil']; 
        $alamatpemilikmobil =$_POST['alamatpemilikmobil']; 
        $nomorteleponpemilikmobil = $_POST['nomorteleponpemilikmobil']; 
        $nomorktppemilikmobil = $_POST['nomorktppemilikmobil']; 
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
        
        // Melakukan insert ke databse dengan query dibawah ini 
        $query = mysqli_query($con,  
            "INSERT INTO pemilikmobil(namapemilikmobil,alamatpemilikmobil,nomorteleponpemilikmobil,nomorktppemilikmobil,password)  
            VALUES 
            ('$namapemilikmobil', '$alamatpemilikmobil', '$nomorteleponpemilikmobil','$nomorktppemilikmobil','$password')")                  
            or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan di-tangani oleh perintah “or die” 
                
            if($query){             
                echo 
                    '<script>                 
                        alert("Register Success"); 
                        window.location = "../index.php" 
                    </script>'; 
            }
            else
            {             
                echo 
                    '<script>                 
                        alert("Register Failed");  
                    </script>'; 
            } 
    }
    else
    {         
        echo 
            '<script>             
                window.history.back() 
            </script>'; 
    } 
?> 
