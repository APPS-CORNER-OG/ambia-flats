<?php
$db= new mysqli('localhost', 'root', '', 'ambia_shrain');

?>

<!DOCTYPE HTML>
<html>
<head>
<title>ASFOA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Ambia Serene Flat Owners Association" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<!--//skycons-icons-->
</head>
<body>
<div id="wrapper">

<!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="dashboard.php">ASFOA</a></h1>         
               </div>
             <div class=" border-bottom">
            
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
         
           <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="drop-men" >
                <ul class=" nav_1">
                   
                    
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">Anisul <i class="caret"></i></span><img src="images/ga5.jpg"></a>
                      <ul class="dropdown-menu " role="menu">
                        <li><a href="#"><i class="fa fa-user"></i>Edit Profile</a></li>
                        <li><a href="index.php"><i class="fa fa-sign-in"></i>Log out</a></li>
                      </ul>
                    </li>
                   
                </ul>
             </div><!-- /.navbar-collapse -->
            <div class="clearfix">
       
     </div>
      
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                
                    <li>
                        <a href="dashboard.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>
                
                <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Accounts</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
<li><a href="ent_expnd.php" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Expenditure Entry</a></li>
<li><a href="ent_explst.php" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Expenditure List</a></li>
<li><a href="ent_recv.php" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Bill Received</a></li>
<li><a href="ent_incm.php" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Income Entry</a></li>
<li><a href="ent_bill.php" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Bill Generate</a></li>
<li><a href="ent_meter.php" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Meter Reading Entry</a></li>
<li><a href="ent_ebill.php" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Electricity Bill Entry</a></li>
<li><a href="ent_cbill.php" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Common Electricity Bill</a></li>
                        </ul>
                    </li>
                
                <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Report</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="rep_metr.php" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Meter Reading</a></li>
                            <li><a href="rep_expnd.php" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Expenditure Report</a></li>
                            <li><a href="rep_mbill.php" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Monthly Bill</a></li>
                            <li><a href="rep_sbill.php" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Bill Summery</a></li>
                            <li><a href="rep_fwsat.php" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Flat Wise Statement</a></li>
                       </ul>
                    </li>   
                  <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
<ul class="nav nav-second-level">
  <li><a href="set_flat.php" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Flat Information</a></li>
  <li><a href="set_exphead.php" class=" hvr-bounce-to-right"> <i class="fa fa-file-text-o nav_icon"></i>Expenditure Head</a></li>
  <li><a href="set_staff.php" class=" hvr-bounce-to-right"> <i class="fa fa-file-text-o nav_icon"></i>Staff Name</a></li>
                        </ul>
                    </li>  
                    
                </ul>
            </div>
            </div>
        </nav>

<div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="dashboard.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Monthly Flat Bill Report</span> 
               
				</h2>
                
                
                
		    </div>
		<!--//banner-->
		<!--content-->
		
		<!---->
	
<div class="asked">
<form action="" method="post">
<table>
<tr> <td><select name="flatno" class="form-control">
<option></option>
<?php 
	$sql= "Select * from flat_info order by flat_no ASC";
			$res= mysqli_query($db,$sql);
			while($row=mysqli_fetch_assoc($res)){ $s++;				
			echo "<option value='$row[flt_sl]'>$row[flat_no]</option>";
						  }
		
			?>
 </select> </td>  <td> Or </td> <td><input type="month" name="smont"> </td> 
 <td><input name="serc" type="submit" value="Search" class="btn btn-success"> </td> </tr>
</table>


</form>	
<table width="100%" border="1">
<tr> <td align="center"><strong>SL</strong></th> <td align="center">Flat</th> <td align="center">Month</th> 
<td align="center">Utility</td> <td align="center">Dish Bill</td> <td align="center">Mosque</td> 
<td align="center">Electric Bill</td> <td align="center">Common Ebill</td> <td align="center">Total</td> <td></td> <td></td> </tr>
<?php  $tot=0;
$sdt=$_POST['smont'].'-01'; $edt=$_POST['smont'].'-31';
if($_POST['smont']!=''){$sql= "Select * from month_bill where month_ between '$sdt' and '$edt'";$res= mysqli_query($db,$sql);}
if($_POST['flatno']!=''){$sql= "Select * from month_bill where flt_sl ='$_POST[flatno]'";$res= mysqli_query($db,$sql);}	  	 	
			
			while($row=mysqli_fetch_assoc($res)){ 
	$rt=$row['utility']+$row['dish_bill']+$row['mosque']+$row['elect_bill']+$row['common_ebill'];
$sq= mysqli_query($db,"Select * from flat_info where flt_sl='$row[flt_sl]'"); $exdt=mysqli_fetch_assoc($sq);				
			echo "<tr> <td align='center'>$s</td> <td>$exdt[flat_no]</td> <td>$row[month_]</td>  <td align='center'>$row[utility]</td> <td  align='center'>$row[dish_bill]</td> <td align='center'>$row[mosque]</td> 
		<td align='center'>$row[elect_bill]</td>	<td align='center'>$row[common_ebill]</td> <td align='right'>$rt</td> <td align='center'><a href='rep_mbillp.php?psl=$row[bl_sl]'>Print</a></td> <td align='center'><a href='rep_mbille.php?psl=$row[bl_sl]'>E bill</a></td>  </tr>";//bl_sl					
			$tot=$tot+$rt; $rt=0; @$s++;
						  }
		echo "<tr> <td></td> <td></td> <td></td> <td></td> <td></td> <td></td> <td align='right'>$tot</td> </tr>";
			?>

</table>
			
				    

</div>
		
		<!----->
		
		<!--//content-->


	 
		<!---->

		</div>
		<div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="js/bootstrap.min.js"> </script>
</body>
</html>

