<?php 
include '../dbconnect.php';
  

if(isset($_POST["submit"]))

 {
   
    $jumlah=$_POST['jumlah'];
    $expirationdate=$_POST['expirationdate'];
    $hargasatuan=$_POST['hargasatuan'];
    $idproduk=$_POST['idproduk'];
    

    if(!empty($nameArr)){
        for($i = 0; $i < count($nameArr); $i++){
            if(!empty($nameArr[$i])){
                $jumlah = $jumlahArr[$i];
                $expirationdate = $expirationdateArr[$i];
                $hargasatuan = $hargasatuanArr[$i];
                

        $idsales=(int)$_POST['id'];
                      // $sal=mysqli_query($conn,"SELECT * FROM tagihan where idsales ='$idsales'"); 
        //   $query = "insert into tagihan (idsales,totaltagihan,expirationdate) values ('$idsales','$totaltagihan','$expirationdate') ";
          $query = "insert into tagihan (idsales,expirationdate) values ('$idsales','$expirationdate') ";
          $query2 = "insert into detailtagihan (jumlah,hargasatuan,idproduk) values (' $jumlah','$hargasatuan','$idproduk') ";
          

          var_dump($query);
        
        
          $sql = mysqli_query($conn, $query, $query2); // Eksekusi/ Jalankan query dari variabel $query
          
        }
    }
 }
};

?>