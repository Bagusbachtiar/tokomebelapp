<?php 
	session_start();
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
            

            // $query=mysqli_query($conn,"INSERT INTO tagihan where idsales ='$idsales' ( gambar, expirationdate) values ( '$pathdb', '$expirationdate')"); 
            
			  $sql = mysqli_query($conn, $query, $query2); // Eksekusi/ Jalankan query dari variabel $query
			  
			  if($sql){ 
				
				echo "<br><meta http-equiv='refresh' content='0; URL=viewtagihan.php?idsal=$idsales'> You will be redirected to the form in 5 seconds";
					
			  }else{
				// Jika Gagal, Lakukan :
				echo "Sorry, there's a problem while submitting.";
				echo "<br><meta http-equiv='refresh' content='0; URL=viewtagihan.php?idsal=$idsales'> You will be redirected to the form in 5 seconds";
			  }
            }
        }
     }
	};
	?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kelola Kategori - Toko Mebel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
	
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Bootstrap css library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Start datatable css -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
							<li><a href="index.php"><span>Home</span></a></li>
							<li><a href="sales.php"><span>Kembali </span></a></li>
							
							
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date">
								<script type='text/javascript'>
						<!--
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);		
						//-->
						</script></b></div></h3>

						</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            
          <!-- page title area end -->
          <div class="main-content-inner">
               
               <!-- market value area start -->
               <div class="row mt-5 mb-5">
                   <div class="col-12">
                       <div class="card">
                           <div class="card-body">
                               <div class="d-sm-flex justify-content-between align-items-center">
                                   <h2>Daftar Tagihan</h2>
                                   <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2">Tambah Tagihan</button>
                               </div>
                                   <div class="data-tables datatable-dark">
                                        <table id="dataTable3" class="display" style="width:100%"><thead class="thead-dark">
                                        <tr>
                                               
                                               <!-- <th>Gambar</th> -->
                                               <th>Jumlah</th>
                                               <th>Nama Produk</th>
                                               <th>Harga Satuan</th>
                                               <th>jatuh tempo</th>
                                               <th></th>
                                        
                                               

                                           </tr></thead><tbody>
                                               

                                           
                                           <?php 
                                           // $brgs=mysqli_query($conn,"SELECT * from sales s, merk m where s.idkategori=m.idkategori order by idsales ASC");
                                           $idsales=$_GET['idsal'];
                                           $sal=mysqli_query($conn,"SELECT T.expirationdate, D.jumlah, D.idproduk, D.hargasatuan FROM tagihan T
                                           INNER JOIN detailtagihan D ON T.idtagihan = D.idtagihan 
                                           where idsales ='$idsales'"); 
                                           while($p=mysqli_fetch_array($sal)){
                                            
                                            
                                               ?>
                                               <tr>
                                              
                                               <td><?php echo $p['jumlah'] ?></td>
                                               <td><?php echo $p['idproduk'] ?></td>
                                               <td><?php echo $p['hargasatuan'] ?></td>
                                               <td><?php echo $p['expirationdate'] ?></td>

                                                  
                                                  <td scope="row">
                                                        <a href="detailtagihan.php?op=edit&idtagihan=<?php echo $p['idtagihan'] ?>"><button type="button" class="btn btn-warning">Lihat Tagihan</button></a>
                                                   
                                                        </td>
                                              </tr>
                                                
                                               <?php } ?>


                                       </tbody>
                                       </table>
                                   </div>
                                </div>
                           </div>
                       </div>
                   </div>
               </div>
             
               
               <!-- row area start-->
           </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>By Richard's Lab</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
	
	<!-- modal input -->
    <div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Tambah Tagihan</h4>
						</div>
						
						<div class="modal-body">
						<div class="form-group fieldGroup">
                        <div class="input-group">
                        <input type="number" name="jumlah[]" class="form-control" placeholder="Jumlah"/>
                        <select name="idproduk[]" class="form-control">
									<option selected>Pilih Produk</option>
									<?php
									$det=mysqli_query($conn,"select * from produk order by namaproduk ASC")or die(mysqli_error());
									while($d=mysqli_fetch_array($det)){
									?>
										<option <?= $d['idproduk']?> value="<?php echo $d['idproduk'] ?>"><?php echo $d['namaproduk'] ?></option>
										<?php
                                        }?>
                                    </select>
                                <input type="text" name="hargasatuan[]" class="form-control" placeholder="Harga Satuan"/>
                        <input type="date" name="expirationdate[]" class="form-control" placeholder="Jatuh Tempo"/>
                        <div class="input-group-addon"> 
                <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
            </div>
        </div>
    </div>
    
                         <input type="submit" name="submit" class="btn btn-primary" value="SUBMIT"/>
					</div>
				</div>
					</div>
				</div>
			</div>

            	<!-- copy of input fields group -->
    <div class="form-group fieldGroupCopy" style="display: none;">
         <div class="input-group">
             <input type="number" name="jumlah[]" class="form-control" placeholder="Jumlah"/>
             <select name="idproduk[]" class="form-control">
									<option selected>Pilih Produk</option>
									<?php
									$det=mysqli_query($conn,"select * from produk order by namaproduk ASC")or die(mysqli_error());
									while($d=mysqli_fetch_array($det)){
									?>
										<option <?= $d['idproduk'] ?> value="<?php echo $d['idproduk'] ?>"><?php echo $d['namaproduk'] ?></option>
										<?php
							            }?>		
									</select>             
             <input type="text" name="hargasatuan[]" class="form-control" placeholder="Harga Satuan"/>
             <input type="date" name="expirationdate[]" class="form-control" placeholder="Jatuh Tempo"/>
             <div class="input-group-addon"> 
                 <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
             </div>
         </div>
    </div>

    <script>
$(document).ready(function(){
    //group add limit
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximum '+maxGroup+' groups are allowed.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});
</script>

    
	
	<!-- <script>
	$(document).ready(function() {
    $('#dataTable3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
	} );
	</script> -->
	
	<!-- jquery latest version -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- Start datatable js -->
	 <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
	
</body>
</html>
