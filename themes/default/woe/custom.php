<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Horários da Guerra do Emperium</h2>
<?php if ($woeTimes): ?>
<p>Abaixo estão os horários da Guerra do Emperium para <?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>.</p>
<p>Estes horários podem mudar a qualquer momento, portanto mantenha-se atualizado.</p>
<table class="woe-table">
	<tr>
		<th>Servidores</th>
		<th colspan="3">Horário da Guerra do Emperium</th>
	</tr>
	<?php foreach ($woeTimes as $serverName => $times): ?>
	<tr>
		<td class="server" rowspan="<?php echo count($times) ?>">
			<?php echo htmlspecialchars($serverName)  ?>
		</td>
		<?php foreach ($times as $time): ?>
		<td class="time">
			<?php echo htmlspecialchars($time['startingDay']) ?>
			@ <?php echo htmlspecialchars($time['startingHour']) ?>
		</td>
		<td>~</td>
		<td class="time">
			<?php echo htmlspecialchars($time['endingDay']) ?>
			@ <?php echo htmlspecialchars($time['endingHour']) ?>
		</td>
	</tr>
	<tr>
		<?php endforeach ?>
	</tr>
	<?php endforeach ?>
</table>
<?php else: ?>
<p>Não há nenhuma Guerra do Emperium agendada.</p>
<?php endif ?>