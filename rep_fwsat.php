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
` <body>
<div id="wrapper">

<!----->
       
       
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
		    
		<!--//banner-->
		<!--content-->
		
		<!---->
	
<div class="asked">

<form action="" method="post">
<table>
<tr>  <td> Select Flat  </td> <td><select name="flatno" class="form-control">
<option></option>
<?php 
	$sql= "Select * from flat_info order by flat_no ASC";
			$res= mysqli_query($db,$sql);
			while($row=mysqli_fetch_assoc($res)){ $s++;				
			echo "<option value='$row[flt_sl]'>$row[flat_no]</option>";
						  }
		
			?>
 </select> </td> 
 <td><input name="serc" type="submit" value="Search" class="btn btn-success"> </td> </tr>
</table>


</form>

<?php 
$res= mysqli_query($db,"Select * from month_bill where bl_sl='$_GET[psl]'"); $bdtl=mysqli_fetch_assoc($res);
			?>
<!--<table width="100%" border="1">
<tr align="center"><td rowspan="2">Flat No <br /> </td> <td><h2>Ambia Serene Flat Owners Association</h2></td> <td rowspan="2">Month <br /> <?php $date=date_create("$bdtl[month_]");
echo date_format($date,"F-Y"); ; ?>
</td> </tr>
<tr align="center"><td><h3>Utility Bill</h3></td>  </tr>
</table>-->

<table width="100%" border="1">
<tr align="center"> <td><h2>Ambia Serene Flat Owners Association</h2></td> </tr>
<tr align="center"><td><h4>Flat Owner Statement </h4></td>  </tr>
</table>
<br />
<?php $sq= mysqli_query($db,"Select * from flat_info where flt_sl='$_POST[flatno]'"); $exdt=mysqli_fetch_assoc($sq);  ?>
<table width="100%" border="1">
<?php 
echo "<tr align='center'><td>Flat No.:  $exdt[flat_no]</td> <td>Name: $exdt[owner_name] </td> <!--<td>Issue Date: $bdtl[month_] </td> <td>Last Date Of Payment : 9th-".date_format($date,"F-Y") ." </td>--> </tr>"; ?>
</table>
<br />
<table width="100%" border="1">
<tr><td align="center" valign="top"><strong>Bill Detali</strong>
<table width="100%" border="1">
<tr><td align="center"><strong>Date</strong></td> <td align="center"><strong>Detail</strong></td> <td align="center"> <strong>Amount</strong></td></tr>
<?php $sql= "Select * from month_bill  where flt_sl='$_POST[flatno]' order by month_ ASC";  	 	
			$res= mysqli_query($db,$sql);
			while($row=mysqli_fetch_assoc($res)){
				$ta=$row['utility'] +$row['dish_bill']+ $row['mosque'] +$row['elect_bill'];
				$tbil=$tbil+$ta;
	echo "<tr> <td>$row[month_]</td> <td>$row[utility] $row[dish_bill] $row[mosque] $row[elect_bill]</td> <td align='right'>$ta</td> </tr>";			
				 }
				 echo "<tr> <td></td> <td>Total</td> <td align='right'>$tbil</td> </tr>";  ?>
</table>

</td> 




<td align="center" valign="top"><strong>Payment</strong>
<table width="100%" border="1">
<tr><td align="center"><strong>Date</strong></td> <td align="center"><strong>Detail</strong></td> <td align="center"> <strong>Amount</strong></td></tr>
<?php $sql= "Select * from received_entry  where flt_sl='$_POST[flatno]' order by date_ ASC";  	 	
			$res= mysqli_query($db,$sql);
			while($row=mysqli_fetch_assoc($res)){
				
				$tpay=$tpay+$row['amount_'];
	echo "<tr> <td>$row[date_]</td> <td>$row[detail] </td> <td align='right'>$row[amount_]</td> </tr>";			
				 }
				 echo "<tr> <td></td> <td>Total</td> <td align='right'>$tpay</td> </tr>";  ?>
</table>
</td> </tr>
</table>

<br />

Due: <?php echo  $tbil-$tpay; ?>		

<h3><a href="rep_fwsatp.php">Print</a></h3>						    

</div>
		
		<!----->
		
		<!--//content-->


	 
		<!---->

		</div>
		<div class="clearfix"> </div>
       </div>
     </div>
<!---->

<style type="text/css" media="print">
    @media print {
        div.divHidden {           
      display:none;
        } 
    }
  
/*@page {
  size: A4;
  margin: 0.5 in;
}
#prtabl{
      margin-left: 0px;"}*/
</style>


<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="js/bootstrap.min.js"> </script>
</body>
</html>

