<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
</head>

<body>
<?php $db= new mysqli('localhost', 'root', '', 'ambia_shrain');
$sdt=$_GET['smont'].'-01'; 
 $date=date_create("$sdt"); ?>	
 
 <table width="100%" border="1">
<tr align="center"> <td><h2>Ambia Serene Flat Owners Association</h2></td> </tr>
</table>

<p align="center" style="padding:10px;">Meter Reading for Month <?php echo date_format($date,"F-Y"); ?> </p>
<table width="100%" border="1">
<tr> <td align="center"><strong>SL</strong></td> <td align="center">Owner Name</td> <td align="center">Flat No</td> 
<td align="center">Load</td> <td align="center">Meter No</td> <td align="center">Present Month</td> <td align="center">Previous Month</td> <td align="center">Consumed Unite</td> </tr>
<?php  
$sdt=$_GET['smont'].'-01'; $edt=$_GET['smont'].'-31';


    //$pmonth = date("Y-m-d", strtotime ( '-1 month' , strtotime ( $date ) )) ;
 	$pmonthl = date("Y-m-d", strtotime ( 'first day of previous month' , strtotime ( $sdt ) )) ;
   

	$sql= "Select * from month_bill where month_ ='$sdt'";  	 	
			$res= mysqli_query($db,$sql);
			while($row=mysqli_fetch_assoc($res)){ @$s++;

$sq= mysqli_query($db,"Select * from flat_info where flt_sl='$row[flt_sl]'"); $ownd=mysqli_fetch_assoc($sq);
$sqp= mysqli_query($db,"Select * from month_bill where month_ ='$pmonthl' and flt_sl='$row[flt_sl]'"); $pmbl=mysqli_fetch_assoc($sqp);
$eus=$row['meter_reading']-$pmbl['meter_reading'];									
			echo "<tr> <td align='center'>$s</td> <td>$ownd[owner_name]</td> <td>$ownd[flat_no]</td> <td>$ownd[load_]</td> <td align='right'>$ownd[meter_no]</td> <td align='right'>$row[meter_reading]</td> <td align='right'>$pmbl[meter_reading]</td> <td align='right'>$eus</td>  </tr>";
			//$tot=$tot+$row['amount_'];
						  }
		//echo "<tr> <td></td> <td></td> <td></td> <td></td> <td align='right'>$tot</td> </tr>";
			?>

</table>
			
<div class="divHidden">
<button class="btn btn-app btn-info" onclick="window.print()"> <i class="ace-icon fa fa-print bigger-160"></i> </button>
<a href="rep_metr.php">BACK</a>
</div>				    

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

