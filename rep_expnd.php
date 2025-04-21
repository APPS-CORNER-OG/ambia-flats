<?php $db= new mysqli('localhost', 'root', '', 'ambia_shrain');?>

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
				<span>Expenditure Report</span> 
               
				</h2>
                
                
                
		    </div>
		<!--//banner-->
		<!--content-->
		
		<!---->
	
<div class="asked">
<div class="divHidden">
<form action="" method="post"><input type="month" name="smont">
<input name="serc" type="submit" value="Search" class="btn btn-success">
</form>
</div>
<?php  
$sdt=$_POST['smont'].'-01'; 
 $date=date_create("$sdt"); ?>	
 

<table width="100%" border="1">
<tr> <td align="center"><strong>SL</strong></th>  <td align="center">Name</td> 
<td align="center">Amount</td> <td align="center">Flat</td>  <td align="center">Flat Fise</td> </tr>
<?php  $tot=0;
$sdt=$_POST['smont'].'-01'; $edt=$_POST['smont'].'-31';
	/*$sql= "Select * from expenditure_dtail where date_ between '$sdt' and '$edt'";  	 	
			$res= mysqli_query($db,$sql);
			while($row=mysqli_fetch_assoc($res)){ @$s++;

$sq= mysqli_query($db,"Select * from expenditure_head where exp_sl='$row[exp_sl]'"); $exdt=mysqli_fetch_assoc($sq);				
			echo "<tr> <td align='center'>$s</td>  <td>$exdt[exp_name]</td> <td>$row[detail]</td> <td align='right'>$row[amount_]</td> </tr>";
			$tot=$tot+$row['amount_'];
						  }
		echo "<tr>  <td></td> <td align='right'><strong>Total</strong></td> <td></td> <td align='right'>$tot</td> </tr>";*/
		
		$res= mysqli_query($db,"Select * from expenditure_head order by exp_name ASC");
			while($row=mysqli_fetch_assoc($res)){ @$s++;
$sq= mysqli_query($db,"Select sum(amount_) as mall from expenditure_dtail where exp_sl='$row[exp_sl]' and date_ between '$sdt' and '$edt'"); $exdt=mysqli_fetch_assoc($sq);
if($exdt['mall']!=''){
$tm=$exdt['mall']/106;				
			echo "<tr> <td align='center'>$s</td>  <td>$row[exp_name]</td> <td align='right'>$exdt[mall]</td> <td align='center'>106</td> <td align='right'>".round($tm)."</td> </tr>";
			$tot=$tot+$exdt['mall'];
						  }
			}
echo "<tr>  <td></td> <td align='right'><strong>Total</strong></td>  <td align='right'>$tot</td> <td></td> <td></td></tr>";
			?>

</table>
			
<a href="rep_expndp.php?smont=<?php echo $_POST['smont']; ?>">Print</a>
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

