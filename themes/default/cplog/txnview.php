<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Vendo Detalhes de Transação do PayPal</h2>
<?php if ($txn): ?>
<p>Se a transação contém pagamento negativo e valores a resolver, é provável que houve um estorno e o doador será reembolsado.</p>
<table class="vertical-table">
	<tr>
		<th>ID da Transação</th>
		<td><?php echo htmlspecialchars($txn->txn_id) ?></td>
		<th>Conta</th>
		<td>
			<?php if ($txn->account_id): ?>
				<?php if ($auth->actionAllowed('account', 'view') && $auth->allowedToViewAccount): ?>
					<?php echo $this->linkToAccount($txn->account_id, $txn->userid) ?>
				<?php else: ?>
					<?php echo htmlspecialchars($txn->userid) ?>
				<?php endif ?>
			<?php else: ?>
				<span class="not-applicable">Desconhecido</span>
			<?php endif ?>
		</td>
		<th>Créditos Ganhos</th>
		<td><?php echo number_format((int)$txn->credits) ?></td>
	</tr>
	<tr>
		<th>Quantidade</th>
		<td>
			<?php echo $txn->mc_gross ?>
			<?php echo $txn->mc_currency ?>
		</td>
		<th>Quantidade Paga</th>
		<td colspan="3">
			<?php echo $txn->mc_gross - $txn->mc_fee ?>
			<?php echo $txn->mc_currency ?>
		</td>
	</tr>
	<tr>
		<th>Data do Pagamento</th>
		<td><?php echo htmlspecialchars(date(Flux::config('DateTimeFormat'), strtotime($txn->payment_date))) ?></td>
		<th>Data de Processamento</th>
		<td colspan="3"><?php echo $this->formatDateTime($txn->process_date) ?></td>
	</tr>
	<tr>
		<th>Status</th>
		<td><?php echo htmlspecialchars($txn->payment_status) ?></td>
		<th>Nome do Item</th>
		<td colspan="3"><?php echo htmlspecialchars($txn->item_name) ?></td>
	</tr>
	<tr>
		<th>Primeiro Nome</th>
		<td><?php echo htmlspecialchars($txn->first_name) ?></td>
		<th rowspan="2">Endereço</th>
		<td colspan="3" rowspan="2">
			<?php echo htmlspecialchars($txn->address_street) ?><br />
			<?php echo htmlspecialchars($txn->address_city) ?>,
			<?php echo htmlspecialchars($txn->address_state) ?>,
			<?php echo htmlspecialchars($txn->address_country) ?>
			<?php echo htmlspecialchars($txn->address_zip) ?>
		</td>
	</tr>
	<tr>
		<th>Último Nome</th>
		<td><?php echo htmlspecialchars($txn->last_name) ?></td>
	</tr>
</table>
<?php if ($auth->allowedToViewRawTxnLogData): ?>
	<h3>Raw Transaction Log</h3> <!-- Precisa de tradução daqui... -->
	<?php if ($txnFileLog): ?>
	<pre class="raw-txn-log"><?php echo htmlspecialchars($txnFileLog) ?></pre>
	<?php else: ?>
	<p>The raw log for this transaction could not be found.</p>
	<?php endif ?>	<!-- Até aqui. XD -->

	<?php else: ?>
	<p>Registros indicam que nenhuma transação foi feita. <a href="javascript:history.go(-1)">Voltar</a>.</p>
	<?php endif ?>
<?php endif ?>