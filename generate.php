<?php
    $content = "
<page>
    <div style='border:1px solid black'>
    	<h5 style='text-align:center'>
    		ZERESOFT SOFTWARE DEVELOPMENT AND SERVICES
    		<br/>
    		TAGBOND BANDS RELEASE FORM
    	</h5>
    	<br/>
    	<div style='text-align:right;padding-right:10px'>".date('Y-m-d H:i:s A')."</div>
    	<br/>
    	<table>
    		<tr>
    			<td>
    				<b>Selling Date : </b>
    			</td>
    			<td>
    				".$_POST['sellPerson']."
    			</td>
    		</tr>
    	</table>
    </div>
</page>";

    require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('exemple.pdf');
?>