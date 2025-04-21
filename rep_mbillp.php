<?php $db= new mysqli('localhost', 'root', '', 'ambia_shrain'); ?>

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
       
            
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
         
           <!-- Collect the nav links, forms, and other content for toggling -->
            


  		<!--banner-->	
		    
		<!--//banner-->
		<!--content-->
		
		<!---->
	
<div class="asked">
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
<tr align="center"> <td><h1>Ambia Serene Flat Owners Association</h1></td> </tr>
<tr align="center"><td><h4>Utility Bill - <?php $date=date_create("$bdtl[month_]");
echo date_format($date,"F-Y"); ?> </h4></td>  </tr>
</table>
<br />
<?php $sq= mysqli_query($db,"Select * from flat_info where flt_sl='$bdtl[flt_sl]'"); $exdt=mysqli_fetch_assoc($sq);  ?>
<table width="100%" border="1">
<?php 
echo "<tr align='center'><td>Flat No.:  $exdt[flat_no]</td> <td>Name: $exdt[owner_name] </td> <td>Issue Date: $bdtl[month_] </td> <td>Last Date Of Payment : 9th-".date_format($date,"F-Y") ." </td> </tr>"; ?>
</table>
<br />
<table width="50%" border="1" align="center">
<?php 
$sq= mysqli_query($db,"Select sum(due) as pvdue from month_bill where flt_sl='$bdtl[flt_sl]' and month_ < '$bdtl[month_]'"); $pdue=mysqli_fetch_assoc($sq); 

$b=$bdtl['utility']+$bdtl['dish_bill']+$bdtl['mosque']+$bdtl['common_ebill'] +$pdue['pvdue'];
echo "<tr><td>Utility Bill</td> <td align='right'>$bdtl[utility] </td> </tr>"; 		
echo "<tr><td>Dish Bill</td> <td align='right'>$bdtl[dish_bill] </td> </tr>";
echo "<tr><td>Mosque Bill</td> <td align='right'>$bdtl[mosque] </td> </tr>"; 
echo "<tr><td>Common E Bill</td> <td align='right'>$bdtl[common_ebill] </td> </tr>";
echo "<tr><td>Previous Due</td> <td align='right'>$pdue[pvdue]</td> </tr>";
echo "<tr><td>Net payable amount </td> <td align='right'>$b </td> </tr>"; ?>
</table>



<br />  <!--align="center"-->

<?php
    $date = "$bdtl[month_]";
    $pmonth = date("Y-m-d", strtotime ( '-1 month' , strtotime ( $date ) )) ;
	$pmonthl = date("Y-m-d", strtotime ( 'last day of previous month' , strtotime ( $date ) )) ;
   
?>

<p><strong>Expenditure Summary for the month of <?php echo $pmonth; ?></strong></p>	
<table width="100%" border="1">
<tr> <td align="center"><strong>SL</strong></th> <td align="center">Main Item</th> <td align="center">Total Amount</th> 
<td align="center">Number of Flat</td> <td align="center">Flat wise Amount</td> </tr>
<?php  $tot=0; $onf=0;
	$sql= "Select * from expenditure_head order by exp_name ASC";  	 	
			$res= mysqli_query($db,$sql);
			while($row=mysqli_fetch_assoc($res)){ @$s++;	
//$sq= mysqli_query($db,"Select * from flat_info where flt_sl='$row[flt_sl]'"); $exdt=mysqli_fetch_assoc($sq);

$sq= mysqli_query($db,"Select sum(amount_) as pvdue from expenditure_dtail where exp_sl='$row[exp_sl]' and (date_ between '$pmonth' and '$pmonthl')"); $ptbl=mysqli_fetch_assoc($sq); 
$tb=$ptbl['pvdue']/106;				
			echo "<tr> <td align='center'>$s</td> <td>$row[exp_name]</td> <td align='right'>$ptbl[pvdue]</td>  <td align='center'>106</td> <td  align='right'>". round($tb)."</td></tr>";//bl_sl					
			$tot=$tot+$ptbl['pvdue']; 
			$onf=$onf+$tb; $ptbl['pvdue']=0; $tb=0;
						  }
		echo "<tr> <td></td> <td></td> <td align='right'>$tot</td> <td></td>  <td align='right'>". round($onf)."</td> </tr>";
			?>

</table>
			
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
      display:none
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

