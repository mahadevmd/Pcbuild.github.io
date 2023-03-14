<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{
		
		
		
		  


		$qry=mysqli_query($conn,"insert into merge values('','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8')");
	if($qry)
	{
	
	echo "<script>alert('inserted sucessfully')</script>";
	
	}
	else
	{
	
	
	echo "<script>alert('inserted failed)</script>";
	
	
}

}

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
	  table{


color:white;
border-radius:30px;

color:black;
width:50%;
margin:0 auto;

}

select{

visibility:hidden;
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
                                    <a class="nav-link" href="adminhome.php"> Home  </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="add.php">Add Product</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="merge.php">Build</a>
                                 </li>
								 
								  <li class="nav-item">
                                    <a class="nav-link" href="feedv.php">View Feedback </a>
                                 </li>
								 
								 
								  <li class="nav-item">
                                    <a class="nav-link" href="index.php">Logout</a>
                                 </li>
                              </ul>
                            
                           </div>
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
    <br /><br /><br /><br />




<h1 style="margin:0 auto;width:300px">BUILD PC</h1>
		<br>
		<br>
		
		
		
		
		<form id="f1" name="f1" method="post" action="#" onSubmit="return vali()" enctype="multipart/form-data" >
  <table width="50%" border="0" align="center" >
		
	
	<tr>
     
      <td><img src="images/p.svg" width="30px"><p>Choose Processor</p></td>
      <td>
	  
	  <select name="t1"  required  style="padding:20px;border-radius:10px;width:300px;">
	  
	  
	  

	  
	  	
		 	<option value="i3">i3</option>
			
			<option value="i5">i5</option>
			<option value="i7">i7</option>
		
			</select>
			</td>
	  
	
    
    </tr>
	<tr>
     
      <td><img src="images/mb.svg" width="30px"><p>Mother Board</p></td>
      <td>
	  
	  <select name="t2"  required  style="padding:20px;border-radius:10px;width:300px;">
	  
	  
	  

	  
	  	<?php
		
		$qy=mysqli_query($conn,"select * from turf where type='mother board'");
		while($rw=mysqli_fetch_array($qy))
		
		{
		?>
		 	<option value="<?php echo $rw['tname'] ;?>"><?php echo $rw['tname'] ;?></option>
			
			
			<?php
			
			}
			
			
			?>
			</select>
			</td>
	  
	
    
    </tr>
	<tr>
     
      <td><img src="images/p.svg" width="30px"><p>Processor</p></td>
      <td>
	  
	  <select name="t3"  required  style="padding:20px;border-radius:10px;width:300px;">
	  
	  
	  

	  
	  	<?php
		
		$qy=mysqli_query($conn,"select * from turf where type='Proceesor'");
		while($rw=mysqli_fetch_array($qy))
		
		{
		?>
		 	<option value="<?php echo $rw['tname'] ;?>"><?php echo $rw['tname'] ;?></option>
			
			
			<?php
			
			}
			
			
			?>
			</select>
			</td>
	  
	
    
    </tr>
<tr>
     
      <td><img src="images/ram.svg" width="30px"><p>RAM</p></td>
      <td>
	  
	  <select name="t4"  required  style="padding:20px;border-radius:10px;width:300px;">
	  
	  
	  

	  
	  	<?php
		
		$qy=mysqli_query($conn,"select * from turf where type='RAM'");
		while($rw=mysqli_fetch_array($qy))
		
		{
		?>
		 	<option value="<?php echo $rw['tname'] ;?>"><?php echo $rw['tname'] ;?></option>
			
			
			<?php
			
			}
			
			
			?>
			</select>
			</td>
	  
	
    
    </tr>
	<tr>
     
      <td><img src="images/gpu.svg" width="30px"><p>GPU</p></td>
      <td>
	  
	  <select name="t5"  required  style="padding:20px;border-radius:10px;width:300px;">
	  
	  
	  

	  
	  	<?php
		
		$qy=mysqli_query($conn,"select * from turf where type='GPU'");
		while($rw=mysqli_fetch_array($qy))
		
		{
		?>
		 	<option value="<?php echo $rw['tname'] ;?>"><?php echo $rw['tname'] ;?></option>
			
			
			<?php
			
			}
			
			
			?>
			</select>
			</td>
	  
	
    
    </tr>
	<tr>
     
      <td><img src="images/ram.svg" width="30px"><p>ROM</p></td>
      <td>
	  
	  <select name="t6"  required  style="padding:20px;border-radius:10px;width:300px;">
	  
	  
	  

	  
	  	<?php
		
		$qy=mysqli_query($conn,"select * from turf where type='ROM'");
		while($rw=mysqli_fetch_array($qy))
		
		{
		?>
		 	<option value="<?php echo $rw['tname'] ;?>"><?php echo $rw['tname'] ;?></option>
			
			
			<?php
			
			}
			
			
			?>
			</select>
			</td>
	  
	
    
    </tr>
<tr>
     
      <td><img src="images/ssd.svg" width="30px"><p>SSD/HDD</p></td>
      <td>
	  
	  <select name="t7"  required  style="padding:20px;border-radius:10px;width:300px;">
	  
	  
	  

	  
	  	<?php
		
		$qy=mysqli_query($conn,"select * from turf where type='SSD' || type='HDD'");
		while($rw=mysqli_fetch_array($qy))
		
		{
		?>
		 	<option value="<?php echo $rw['tname'] ;?>"><?php echo $rw['tname'] ;?></option>
			
			
			<?php
			
			}
			
			
			?>
			</select>
			</td>
	  
	
    
    </tr>
	<tr>
     
      <td><img src="images/op.svg" width="30px"><p>Optical Drive</p></td>
      <td>
	  
	  <select name="t8"  required  style="padding:20px;border-radius:10px;width:300px;">
	  
	  
	  

	  
	  	<?php
		
		$qy=mysqli_query($conn,"select * from turf where type='Optical drive'");
		while($rw=mysqli_fetch_array($qy))
		
		{
		?>
		 	<option value="<?php echo $rw['tname'] ;?>"><?php echo $rw['tname'] ;?></option>
			
			
			<?php
			
			}
			
			
			?>
			</select>
			</td>
	  
	
    
    </tr>
	
	
	
	


	<tr >
         
      <td>&nbsp;</td>
      <td style="margin-top:20px;"><input name="btn" type="submit" id="btn" value="Submit"  style="padding:10px 20px;border-radius:5px;"/>
      <input type="reset" name="Submit2" value="Reset" style="padding:10px 20px;border-radius:5px;"/></td>
    </tr>
  </table>
</form>


		
		
		
		
		
		
	
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

