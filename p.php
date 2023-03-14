<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

$pro=$_GET['pro'];
$mb=$_GET['mb'];
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>pcoint</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	  
	  <style>
.main2{
display:flex;
gap:20px;
justify-content:center;
flex-wrap:wrap;
width:1200px;
border:1px solid white;
 box-shadow:2px 2px  10px 2px lightgray;
padding:20px;
margin-bottom:20px;

}
.main2 div{
width:400px;
height:400px;

 box-shadow:2px 2px  10px 2px lightgray;

 border-top-left-radius:20px;
	  border-top-right-radius:20px;
text-align:center;
margin-bottom:10px;
font-size:20px;

}
th{
text-align:center;

}
.main2 img{
width:400px;
height:170px;


}

</style>
</head>


   
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div  class="head_top">
            <div class="header">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 <li class="nav-item">
                                    <a class="nav-link" href="uhome.php"> Home  </a>
                                 </li>
                                
                                 <li class="nav-item">
                                    <a class="nav-link" href="index.php">Logout</a>
                                 </li>
                              
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <section class="banner_main">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="text-bg">
                           <h1>Pc Build<br>and Recommendation</h1>
                           <strong>Build a pc with</strong>
                           <span>own knowledge</span>
                          
                        </div>
                     </div>
                     <div class="col-md-7 padding_right1">
                        <div class="text-img">
                           <figure><img src="images/top_img.png" alt="#"/></figure>
                           <h3>01</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </header>
      <!-- end banner -->
      <!-- about -->
    <br /><br /><br /><br />>



<?php

$qry=mysqli_query($conn,"select * from merge where processor='$pro' && mb='$mb' ");
while($row =mysqli_fetch_array($qry)){

 
$process=$row['pro'];



$qry2=mysqli_query($conn,"select * from turf where tname='$process'");
$row2=mysqli_fetch_array($qry2);

?>
<h2 style="width:300px;margin:20px auto;"><?php echo $pro; ?> PROCESSOR OPTIONS</h2>
<div class="main2">
<a href="view.php?pro=<?php echo $pro;?>&mb=<?php echo $mb;?>&pre=<?php echo $row2['tname']; ?>"><div><img src="upload\<?php echo $row2['img']; ?>" width="400px" height="170px"/><table border="0" style="height:230px;width:400px;background:#66FF00" >
<tr>
<th>Type</th>
<td><?php echo $row2['type']; ?></td>
</tr>
<tr>
<th>Model</th>
<td><?php echo $row2['tname']; ?></td>
</tr>
<tr>
<th>Description</th>
<td><?php echo $row2['place']; ?></td>
</tr>
<tr>
<th>Amount</th>
<td><?php echo $row2['amount']; ?></td>
</tr>
</table></div></a>


</div>
<?php



}














?>
<br /><br /><br /><br />
      
      <!-- end testimonial -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="cont">
                        <h3> <strong class="multi"> Pc Build</strong><br>
                           with your own knowledge
                        </h3>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="cont_call">
                        <h3> <strong class="multi"> Call Now</strong><br>
                           (+1) 12345667890
                        </h3>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>? 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>






























