<style>
table{
	width:100%;
}
table, th, td {
   border: 1px solid black;
}
table, td, th {
    border: 1px solid #2AADDE;
}

th {
    background-color: #2AADDE;
    color: white;
    padding: 15px;
}
td {
    padding: 15px;
}
</style>

<p><span style="font-weight:bold;">Empresa:</span> <?php echo $contacto['Company']['name']; ?></p>
<p><span style="font-weight:bold;">Direcci&oacute;n:</span> <?php echo $contacto['Company']['address']; ?></p>
<p><span style="font-weight:bold;">Email: </span><?php echo $contacto['Company']['email']; ?></p>
<?php
if (isset($contacto['Contact']) && count($contacto['Contact']) > 0) { ?>
	<table id="info">
	<tr>
		<th style="font-weight: bold">Contacto</th>
		<th style="font-weight: bold">Ocupaci&oacute;n</th>
		<th style="font-weight: bold">Email</th>
	</tr>
	<?php 
	for ($i=0; $i < count($contacto['Contact']); $i++) {  
		if ($contacto['Contact'][$i]['mostrar'] == 1) {
		?>
		<tr>
			<td><?php echo $contacto['Contact'][$i]['name']; ?></td>
			<td><?php echo $contacto['Contact'][$i]['puesto']; ?></td>
			<td><?php echo $contacto['Contact'][$i]['email']; ?></td>
		</tr>
	<?php
		}
	 } ?>

</table>
<?php }else{
	echo "No existe información de contactos disponible. Aplica a través de ESEN";
}
?>
