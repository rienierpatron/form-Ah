<?php
	$content2 = "";
	$content3 = "";
	$content4 = "";
	$total = 0;
	$totalQty = 0;
	for($i = 0; $i < 10; $i++){
		$content2 = $content2."<tr><td style='padding-top:10px;text-align:center'>".$_POST['qty'][$i]."</td><td style='padding-top:10px;text-align:center'>".$_POST['size'][$i]."</td><td style='padding-top:10px;text-align:center'>".$_POST['color'][$i]."</td><td style='padding-top:10px;text-align:center'>".$_POST['sub'][$i]."</td></tr>";
		$total = $total+$_POST['sub'][$i];
		$totalQty = $totalQty+$_POST['qty'][$i];
	}
	if(sizeOf($_POST['qty']) > 10){
		$content3 = "<table style='width:500px;padding-top:10px;border:1px solid #CCC;border-collapse:collapse;'>
    				<tr style='background:#CCC;'>
    					<th style='width:70px;padding-top:10px;padding-bottom:10px;text-align:center'>Qty</th>
    					<th style='width:93px;padding-top:10px;padding-bottom:10px;text-align:center'>Size</th>
    					<th style='width:100px;padding-top:10px;padding-bottom:10px;text-align:center'>Color</th>
    					<th style='width:100px;padding-top:10px;padding-bottom:10px;text-align:center'>Sub (PHP)</th>
    				</tr>";
		for($i2 = 10; $i2 < sizeOf($_POST['qty']); $i2++){
			$content3 = $content3."<tr><td style='padding-top:10px;text-align:center'>".$_POST['qty'][$i2]."</td><td style='padding-top:10px;text-align:center'>".$_POST['size'][$i2]."</td><td style='padding-top:10px;text-align:center'>".$_POST['color'][$i2]."</td><td style='padding-top:10px;text-align:center'>".$_POST['sub'][$i2]."</td></tr>";
			$total = $total+$_POST['sub'][$i2];
			$totalQty = $totalQty+$_POST['qty'][$i2];
		}
		$content3 = $content3."</table><br/>";
	}else{
		$content3 = "";
	}
	$total2 = 0;
	$totalQty2 = 0;
	for($i3 = 0; $i3 < sizeOf($_POST['qty']); $i3++){
		$content4 = $content4."<tr><td style='padding-top:10px;text-align:center'> &nbsp;&nbsp; / ".$_POST['qty'][$i3]."</td><td style='padding-top:10px;text-align:center'>".$_POST['size'][$i3]."</td><td style='padding-top:10px;text-align:center'>".$_POST['color'][$i3]."</td><td style='padding-top:10px;text-align:center'></td></tr>";
		$total2 = $total+$_POST['sub'][$i3];
		$totalQty2 = $totalQty+$_POST['qty'][$i3];
	}
    $content = "
<page>
    <div style='border:1px solid black'>

    	<h4 style='text-align:center'>
    		ZERESOFT SOFTWARE DEVELOPMENT AND SERVICES
    		<br/>
    		TAGBOND BANDS RELEASE FORM
    	</h4>
    	<br/>
    	<div style='text-align:right;padding-right:10px'><b>Date : </b>".date('Y-m-d H:i:s A')."</div>
    	<table>
    		<tr>
    			<td>
    				<b>Selling Date </b>
    			</td>
    			<td>
    				: ".$_POST['sellDate']."
    			</td>
    		</tr>
    		<tr>
    			<td>
    				<b>Released To </b>
    			</td>
    			<td>
    				: ".$_POST['sellPerson']."
    			</td>
    		</tr>
    		<tr>
    			<td>
    				<b>Purpose </b>
    			</td>
    			<td width='550'>
    				: ".$_POST['sellPurpose']."
    			</td>
    			<td style='text-align:center'>
    				Signature
    			</td>
    		</tr>
    	</table>
    	
    	<div style='margin-top:10px;border-top:1px solid black'>
    		
    		<table>
    			<tr>
    			<td>
	    			<table style='width:500px;padding:10px;border:1px solid #CCC;border-collapse:collapse;'>
	    				<tr style='background:#CCC;'>
	    					<th style='width:70px;padding-top:10px;padding-bottom:10px;text-align:center'>Qty</th>
	    					<th style='width:93px;padding-top:10px;padding-bottom:10px;text-align:center'>Size</th>
	    					<th style='width:100px;padding-top:10px;padding-bottom:10px;text-align:center'>Color</th>
	    					<th style='width:100px;padding-top:10px;padding-bottom:10px;text-align:center'>Sub (PHP)</th>
	    				</tr>
	    				".$content2."
	    			</table>
    			</td>
    			<td>
    				".$content3."
    				<table style='width:400px;border-collapse;collapse;margin-top:10px;'>
    					<tr style='background:#CCC;'>
    						<th style='width:179px;padding-top:10px;padding-bottom:10px;text-align:center'>Total Qty : ".$totalQty."</th>
    						<th style='width:179px;padding-top:10px;padding-bottom:10px;text-align:center'>Total (PHP) : ".$total."</th>
    					</tr>
    					<tr>
    						<th style='text-align:center;padding-top:50px;'>
    							Jeff Dalawampu
    						</th>
    						<th style='text-align:center;padding-top:50px;'>
    							Chrystelle Villanueva
    						</th>
    					</tr>
    				</table>
    			</td>
    			</tr>
    		</table>
    	</div>
    </div>
    <br/>
    <br/>
    <br/>
    <div style='border:1px solid black'>

    	<h4 style='text-align:center'>
    		ZERESOFT SOFTWARE DEVELOPMENT AND SERVICES
    		<br/>
    		TAGBOND BANDS RELEASE FORM
    	</h4>
    	<br/>
    	<div style='text-align:right;padding-right:10px'><b>Date : </b>".date('Y-m-d H:i:s A')."</div>
    	<table>
    		<tr>
    			<td>
    				<b>Selling Date </b>
    			</td>
    			<td>
    				: ".$_POST['sellDate']."
    			</td>
    		</tr>
    		<tr>
    			<td>
    				<b>Released To </b>
    			</td>
    			<td>
    				: ".$_POST['sellPerson']."
    			</td>
    		</tr>
    		<tr>
    			<td>
    				<b>Purpose </b>
    			</td>
    			<td width='550'>
    				: ".$_POST['sellPurpose']."
    			</td>
    			<td style='text-align:center'>
    				Signature
    			</td>
    		</tr>
    	</table>
    	
    	<div style='margin-top:10px;border-top:1px solid black'>
    		
    		<table>
    			<tr>
    			<td>
    			<table style='width:500px;padding:10px;border:1px solid #CCC;border-collapse:collapse;'>
    				<tr style='background:#CCC;'>
    					<th style='width:70px;padding-top:10px;padding-bottom:10px;text-align:center'>Sold/Qty</th>
    					<th style='width:93px;padding-top:10px;padding-bottom:10px;text-align:center'>Size</th>
    					<th style='width:100px;padding-top:10px;padding-bottom:10px;text-align:center'>Color</th>
    					<th style='width:100px;padding-top:10px;padding-bottom:10px;text-align:center'>Sub (PHP)</th>
    				</tr>
    				".$content2."
    			</table>
    			</td>
    			<td>
    				".$content3."
    				<table style='width:400px;border-collapse;collapse;margin-top:10px;'>
    					<tr style='background:#CCC;'>
    						<th style='width:179px;padding-top:10px;padding-bottom:10px;text-align:center'>Total Qty : ".$totalQty."</th>
    						<th style='width:179px;padding-top:10px;padding-bottom:10px;text-align:center'>Total (PHP) : ".$total."</th>
    					</tr>
    					<tr>
    						<th style='text-align:center;padding-top:50px;'>
    							Jeff Dalawampu
    						</th>
    						<th style='text-align:center;padding-top:50px;'>
    							Chrystelle Villanueva
    						</th>
    					</tr>
    				</table>
    			</td>
    			</tr>
    		</table>
    	</div>
    </div>
</page>
<page>
	<div style='border:1px solid black'>
    	<div>
    		
    		<table>
    			<tr>
    			<td>
    			<table style='width:500px;padding:10px;border:1px solid #CCC;border-collapse:collapse;'>
    				<tr style='background:#CCC;'>
    					<th style='width:70px;padding-top:10px;padding-bottom:10px;text-align:center'>Sold/Qty</th>
    					<th style='width:93px;padding-top:10px;padding-bottom:10px;text-align:center'>Size</th>
    					<th style='width:100px;padding-top:10px;padding-bottom:10px;text-align:center'>Color</th>
    					<th style='width:100px;padding-top:10px;padding-bottom:10px;text-align:center'>Sub (PHP)</th>
    				</tr>
    				".$content4."
    			</table>
    			</td>
    			<td>
    				<table style='width:400px;border-collapse;collapse;margin-top:10px;'>
    					<tr>
    						<th style='padding-top:10px;padding-bottom:10px;'>Total Qty</th><th style='padding-top:10px;padding-bottom:10px;'>: ".$totalQty."</th>
    					</tr>
    					<tr>
    						<th style='padding-top:10px;padding-bottom:10px;'>Expected Total (PHP)</th><th style='padding-top:10px;padding-bottom:10px;'>: ".$total."</th>
    					</tr>
    					<tr>
    						<th style='padding-top:10px;padding-bottom:10px;'>Expected Commission (PHP)</th><th style='padding-top:10px;padding-bottom:10px;'>: ".($totalQty*10)."</th>
    					</tr>
    					<tr>
    						<th style='padding-top:50px;padding-bottom:20px'><i>Official Use Only. Please do not write below.</i></th>
    					</tr>
    					<tr>
    						<th>
    							Status : 
    						</th>
    						<th>
    						</th>
    					</tr>
    					<tr>
    						<th>
    							Inventory Deadline : 
    						</th>
    						<th>
    							".date('Y-m-d', strtotime($_POST['sellDate']. ' + 4 days'))."
    						</th>
    					</tr>
    					<tr>
    						<th>
    							Remitted To : 
    						</th>
    						<th>
    						</th>
    					</tr>
    					<tr>
    						<th>
    							Total Commission : 
    						</th>
    						<th>
    						</th>
    					</tr>
    					<tr>
    						<th>
    							Date : 
    						</th>
    						<th> 
    						</th>
    					</tr>
    					<tr>
    						<th>
    							Remarks : 
    						</th>
    						<th>
    						</th>
    					</tr>
    				</table>
    			</td>
    			</tr>
    		</table>
    	</div>
    </div>
</page>";

    require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','Letter','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('exemple.pdf');

    //echo $content;
?>