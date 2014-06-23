<p><?php echo $nombre; ?>, ha aplicado directamente a la plaza: <?php echo $trabajo; ?></p>

<br/><br/>
<p><h3>Informaci&oacute;n de Alumni</h3></p>
<table>
	<tr>
		<td>Alumni:</td>
		<td><span style ="bold"><?php echo $nombre; ?></span></td>
	</tr>
	<tr>
		<td>Correo:</td>
		<td><span style ="bold"><?php echo $email; ?></span></td>
	</tr>
	<tr>
		<td>Tel&eacute;fono:</td>
		<td><span style ="bold"><?php echo $telefono; ?></span></td>
	</tr>
	<tr>
		<td>Carnet:</td>
		<td><span style ="bold"><?php echo $carnet; ?></span></td>
	</tr>
</table>


<br/><br/>
<p><h3>Informaci&oacute;n de la Plaza</h3></p>
<table>
	<tr>
		<td>Empresa:</td>
		<td><span style ="bold"><?php echo $nombre; ?></span></td>
	</tr>
	<tr>
		<td>Plaza:</td>
		<td><span style ="bold"><?php echo $trabajo; ?></span></td>
	</tr>
</table>
<br/><br/>

<p>Para conocer m&aacute;s informaci&oacute;n utiliza el siguiente enlace <a href="http://localhost<?php echo $this->webroot; ?>admin/Jobs/view/<?php echo $id; ?>">enlace a oferta laboral</a></p>


