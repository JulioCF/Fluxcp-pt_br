<?php
if (!defined('FLUX_ROOT')) exit;
$siteTitle  = Flux::config('SiteTitle');
$emailTitle = sprintf('%s: Alterar E-mail', $siteTitle);
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
		
		<p>Você recebeu esse email porque alguém preencheu o formulário "Alterar E-mail" depois de fazer login na sua conta.
			Se foi você que fez essa solicitação, clique no link abaixo para proceder com a alteração de email.</p>
		
		<p>
			<table style="margin-left: 18px">
				<tr>
					<td align="right">Conta:&nbsp;&nbsp;</td>
					<th align="left">{AccountUsername}</th>
				</tr>
				<tr>
					<td align="right">E-mail Antigo:&nbsp;&nbsp;</td>
					<th align="left">{OldEmail}</th>
				</tr>
				<tr>
					<td align="right">E-mail Novo:&nbsp;&nbsp;</td>
					<th align="left">{NewEmail}</th>
				</tr>
				<tr>
					<td align="right">Alterar E-mail:&nbsp;&nbsp;</td>
					<th align="left"><a href="{ChangeLink}" title="Mudar o e-mail dessa conta.">{ChangeLink}</a></th>
				</tr>
			</table>
		</p>
		
		<p><em><strong>Nota:</strong> Este é um e-mail automático, por favor, não responda para este endereço.</em></p>
	</body>
</html>