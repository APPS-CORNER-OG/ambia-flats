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

<p align="center" style="padding:10px;">Expenditure Summery for Month <?php echo date_format($date,"F-Y"); ?> </p>
<table width="100%" border="1">
<tr> <td align="center"><strong>SL</strong></th>  <td align="center">Name</td> 
<td align="center">Amount</td> <td align="center">Flat</td>  <td align="center">Flat Fise</td> </tr>
<?php  $tot=0; $s=1;
$sdt=$_GET['smont'].'-01'; $edt=$_GET['smont'].'-31';
	/*$sql= "Select * from expenditure_dtail where date_ between '$sdt' and '$edt'";  	 	
			$res= mysqli_query($db,$sql);
			while($row=mysqli_fetch_assoc($res)){ @$s++;

$sq= mysqli_query($db,"Select * from expenditure_head where exp_sl='$row[exp_sl]'"); $exdt=mysqli_fetch_assoc($sq);				
			echo "<tr> <td align='center'>$s</td>  <td>$exdt[exp_name]</td> <td>$row[detail]</td> <td align='right'>$row[amount_]</td> </tr>";
			$tot=$tot+$row['amount_'];
						  }
		echo "<tr>  <td></td> <td align='right'><strong>Total</strong></td> <td></td> <td align='right'>$tot</td> </tr>";*/
		
		$res= mysqli_query($db,"Select * from expenditure_head order by exp_name ASC");
			while($row=mysqli_fetch_assoc($res)){ 
$sq= mysqli_query($db,"Select sum(amount_) as mall from expenditure_dtail where exp_sl='$row[exp_sl]' and date_ between '$sdt' and '$edt'"); $exdt=mysqli_fetch_assoc($sq);
if($exdt['mall']!=''){
$tm=$exdt['mall']/106;				
			echo "<tr> <td align='center'>$s</td>  <td>$row[exp_name]</td> <td align='right'>$exdt[mall]</td> <td align='center'>106</td> <td align='right'>".round($tm)."</td> </tr>";
			$tot=$tot+$exdt['mall'];
			$s++;
						  }
			}
echo "<tr>  <td></td> <td align='right'><strong>Total</strong></td>  <td align='right'>$tot</td> <td></td> <td></td></tr>";
			?>

</table>
			
<div class="divHidden">
<button class="btn btn-app btn-info" onclick="window.print()"> <i class="ace-icon fa fa-print bigger-160"></i> </button>
<a href="rep_expnd.php">BACK</a>
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

