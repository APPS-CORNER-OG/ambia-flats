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
     
  		<!--banner-->	
		    
		<!--//banner-->
		<!--content-->
		
		<!---->
	
<div class="asked">

<?php 
///$res= mysqli_query($db,"Select * from month_bill where bl_sl='$_GET[psl]'"); $bdtl=mysqli_fetch_assoc($res);
			?>
<!--<table width="100%" border="1">
<tr align="center"><td rowspan="2">Flat No <br /> </td> <td><h2>Ambia Serene Flat Owners Association</h2></td> <td rowspan="2">Month <br /> <?php $date=date_create("$bdtl[month_]");
echo date_format($date,"F-Y"); ; ?>
</td> </tr>
<tr align="center"><td><h3>Utility Bill</h3></td>  </tr>
</table>-->

<?php $month_=$_POST['smont'].'-01';  $edat=$_POST['smont'].'-31';  $date=date_create("$month_"); ?>
 
<table width="100%" border="1">
<tr align="center"> <td><h1>Ambia Serene Flat Owners Association</h1></td> </tr>
<tr align="center"><td><h4> Bill Summery - <?php $date=date_create("$month_");
echo date_format($date,"F-Y"); ?> </h4></td>  </tr>
</table>
<br />

<table width="100%" border="1"> <!--Main Table Start-->
<tr> <td width="47%"><!--Main TD Start-->
<strong>Due Utility Bill</strong>
<table width="100%" border="1">
<tr><td>No of Falt</td> <td>Due Amount</td></tr>
<?php

		$res= mysqli_query($db,"Select * from month_bill where month_ < '$month_' order by flt_sl ASC");
			while($row=mysqli_fetch_assoc($res)){ 
$sq= mysqli_query($db,"Select flat_no from flat_info where flt_sl='$row[flt_sl]'"); $fld=mysqli_fetch_assoc($sq);
if($row['due']!=0){ echo "<tr><td>$fld[flat_no]</td> <td align='right'>$row[due]</td></tr>"; }
						  }
?>
</table>
<br />
<strong>Due Electricity Bill</strong>
<table width="100%" border="1">
<tr><td>No of Falt</td> <td>Due Amount</td></tr>
<?php
		$res= mysqli_query($db,"Select * from month_bill where month_ < '$month_' order by flt_sl ASC");
			while($row=mysqli_fetch_assoc($res)){ 
$sq= mysqli_query($db,"Select flat_no from flat_info where flt_sl='$row[flt_sl]'"); $fld=mysqli_fetch_assoc($sq);
if($row['elect_bill_pay']!=0){ echo "<tr><td>$fld[flat_no]</td> <td align='right'>$row[elect_bill_pay]</td></tr>"; }						  }
?>

</table>
<br />
<strong>Mosque Bill - <?php echo date_format($date,"F-Y"); ?></strong>
<table width="100%" border="1">
<tr><td>Titel</td> <td>Amount</td></tr>
<?php
		$res= mysqli_query($db,"Select * from expenditure_head where mosque='Mosque'");
			while($row=mysqli_fetch_assoc($res)){   
$sq= mysqli_query($db,"Select sum(amount_) as fulamnt from expenditure_dtail where exp_sl='$row[exp_sl]' and date_ between '$month_' and '$edat'"); $fld=mysqli_fetch_assoc($sq);
if($fld['fulamnt']!=0){ echo "<tr><td>$row[exp_name]</td> <td align='right'>$fld[fulamnt]</td></tr>"; }						  }
?>
</table>

</td> <!--Main TD end-->


<td></td> 


<td width="47%" valign="top"><strong>Monthly Income & Expenditure for Month - <?php echo date_format($date,"F-Y"); ?></strong>
<strong>Monthly Collectable Utility Bill</strong>
<table width="100%" border="1">
<tr><td align="center"><strong>SL</strong></td> <td align="center"><strong>Flat</strong></td> <td align="center"><strong>Amount</strong></td></tr>

<?php

$sq= mysqli_query($db,"Select count(bl_sl) as blsl from month_bill where month_='$month_' and utility='2500'"); $fld=mysqli_fetch_assoc($sq); $t=2500*$fld['blsl']; @$f=$f+$fld['blsl']; @$a=$a+$t;
echo "<tr><td>1.</td> <td>2500X$fld[blsl]</td> <td align='right'>$t</td></tr>";
$sq= mysqli_query($db,"Select count(bl_sl) as blsl from month_bill where month_='$month_' and utility='2300'"); $fld=mysqli_fetch_assoc($sq); $t=2300*$fld['blsl']; $f=$f+$fld['blsl']; $a=$a+$t;
echo "<tr><td>2.</td> <td>2300X$fld[blsl]</td> <td align='right'>$t</td></tr>";
$sq= mysqli_query($db,"Select count(bl_sl) as blsl from month_bill where month_='$month_' and utility='1250'"); $fld=mysqli_fetch_assoc($sq); $t=1250*$fld['blsl']; $f=$f+$fld['blsl']; $a=$a+$t;
echo "<tr><td>3.</td> <td>1250X$fld[blsl]</td> <td align='right'>$t</td></tr>";

echo "<tr><td colspan='2' align='center'>Total Flat $f </td> <td align='right'>$a</td></tr>";

echo "<tr><td colspan='2' align='center'>Opening </td> <td align='right'></td></tr>";

		/*$res= mysqli_query($db,"Select * from expenditure_head where mosque='Mosque'");
			while($row=mysqli_fetch_assoc($res)){   

if($fld['fulamnt']!=0){ echo "<tr><td>$row[exp_name]</td> <td align='right'>$fld[fulamnt]</td></tr>"; }						  }*/
?>

</table>
</td>

 </tr>
</table>

<br />





	

			
<div class="divHidden">

<button class="btn btn-app btn-info" onclick="window.print()"> <i class="ace-icon fa fa-print bigger-160"></i> </button> 
</div>				    

</div>
		
		<!----->
		
		<!--//content-->


	 

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

