<?php
if (!defined('FLUX_ROOT')) exit;
$siteTitle  = Flux::config('SiteTitle');
$emailTitle = sprintf('%s: Senha Redefinida', $siteTitle);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo htmlspecialchars($emailTitle) ?></title>
		<style type="text/css" media="screen">
			body, table {
				font-family: sans-serif;
				font-size: 10pt;
			}
		</style>
	</head>
	<body>
		<h2><?php echo htmlspecialchars($emailTitle) ?></h2>
		
		<p>Aqui estão os detalhes da sua nova senha.</p>
		
		<p>
			<table style="margin-left: 18px">
				<tr>
					<td align="right">Conta:&nbsp;&nbsp;</td>
					<th align="left">{AccountUsername}</th>
				</tr>
				<tr>
					<td align="right">Nova Senha:&nbsp;&nbsp;</td>
					<th align="left">{NewPassword}</th>
				</tr>
			</table>
		</p>
		
		<p><em><strong>Nota:</strong> Este é um e-mail automático, não responda para este endereço.</em></p>
	</body>
</html>