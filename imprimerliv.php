<?php
include "../core/livraisonCrud.php";
require ('db.php');



ob_start();
?>
<page backtop="20mm">
	 <h1> Toutes les livraisons </h1>
		<table style="width:100%;border: 2px dashed " >
		<tr>

														 <th>Adresse</th>
                                                <th>Ville</th>
                                                <th>Region</th>
                                                <th>Numero Telephone</th>
                                                <th>Email</th>
                                                <th>Status</th>

                                                <th>datee</th>
													  
													      
													    
													     
													</tr>
													
        <?php
        include_once "../config.php";
	$liv=new livraisonCrud();
$livListe=$liv->recupererlivraison1();
	include "../config.php";
		  
												
                foreach($livListe as $row)
                {
                    ?>
                                            <tr>
                                                 <td><?PHP echo $row['adresse']; ?></td>
                        <td><?PHP echo $row['ville']; ?></td>
                                                <td><?PHP echo $row['region']; ?></td>

                        <td><?PHP echo $row['telephone']; ?></td>
                        <td><?PHP echo $row['email']; ?></td>
                        <td><?PHP echo $row['status']; ?></td>
                        <td><?PHP echo $row['date']; ?></td>


 												      
												   
												              
												    </tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>