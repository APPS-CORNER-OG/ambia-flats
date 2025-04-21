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
				<span>Common Electric Bill Entry</span> 
                
				</h2>
                
                
                
		    </div>
		<!--//banner-->
		<!--content-->
		
		<!---->
	
  <div class="asked">

<form class="form-horizontal" method="post">
 
	<div class="form-group">
    <label  class="col-sm-2 control-label hor-form">Select Month</label>
    <div class="col-sm-10">     
		<input type="month" required  name="smonth"> <!--class="form-control"-->
    </div>
    </div>
<div class="form-group">
    <label  class="col-sm-2 control-label hor-form">Bill Amount</label>
    <div class="col-sm-10">     
		<input type="text" required  name="cbill"> <!--class="form-control"-->
    </div>
    </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-success">Save</button>
    </div>
  </div>
</form>

<?php
if(isset($_POST['save'])){
	//print_r($_POST['ebill']);
	$flexiple=$_POST['ebill'];
	foreach ($_POST['ebill'] as $j => $chkvals) 
            {              
  $sql="update month_bill set meter_reading = '$chkvals' where bl_sl ='$j'";
                //echo $sql."<br />";
                mysqli_query($db,"$sql");				
             
            }
}
	?>  
  
  
		


<?php
if(isset($_GET['d'])){ mysqli_query($db,"delete  from commpn_ebill where cbsl='$_GET[d]'");
echo "Data Delete Successful";}

if(isset($_POST['submit'])){ echo $_POST['smonth'];
$smont=$_POST['smonth'].'-01';
$sq= mysqli_query($db,"Select * from commpn_ebill where month_='$smont'"); $mslet=mysqli_fetch_assoc($sq);
if($mslet['month_']==''){
	
$sql= mysqli_query($db,"Select count(bl_sl) as rcunt from month_bill where month_='$smont'");
			$dels=mysqli_fetch_assoc($sql);
$bilam=$_POST['cbill']/$dels['rcunt'];
$sql="update month_bill set common_ebill = '$bilam' where month_='$smont'";
                //echo $sql."<br />";
                mysqli_query($db,"$sql");
				
$sql="insert into commpn_ebill (month_, amount) values('$smont', '$_POST[cbill]')"; mysqli_query($db,$sql);				
						
			$res= mysqli_query($db,"Select * from month_bill where month_='$smont'");
			while($row=mysqli_fetch_assoc($res)){ 			
$sq= mysqli_query($db,"Select * from flat_info where flt_sl='$row[flt_sl]'"); $mslet=mysqli_fetch_assoc($sq);

//echo "<tr> <td>$mslet[flat_no]</td> <td>$row[common_ebill]</td> </tr>";
						  }
echo "<strong>Data Save Successful</strong>";
}

else{echo "<strong>No Record of this month or already insert</strong>";}
}

?>	
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" />
<table id="example" class="table table-striped table-bordered table-hover">
	<thead class="thin-border-bottom">
<tr><td><strong>Month</strong> </td> <td><strong>Amount</strong></td> <td> </td></tr>				    
</thead>

															<tbody>
<?php
$res= mysqli_query($db,"Select * from commpn_ebill order by month_ ASC");
			while($row=mysqli_fetch_assoc($res)){ 			
//$sq= mysqli_query($db,"Select * from flat_info where flt_sl='$row[flt_sl]'"); $mslet=mysqli_fetch_assoc($sq);
$date=date_create("$row[month_]");
$m= date_format($date,"F-Y");
echo "<tr> <td>$m</td> <td>$row[amount]</td>  <td> <!--<a href='ent_cbill.php?d=$row[cbsl]'>Delete</a>--> </td>  </tr>";
						  }
//echo "<strong>Data Save Successful</strong>";


?>
</tbody>
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

<!-- Data Table -->
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

		<script type="text/javascript">
		$(document).ready(function () {
    $('#example').DataTable({
        order: [[0, 'desc']],
    });
});
		</script>		

<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="js/bootstrap.min.js"> </script>
</body>
</html>

