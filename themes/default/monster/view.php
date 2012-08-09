<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Ver Monstros</h2>
<?php if ($monster): ?>
<h3>
	#<?php echo $monster->monster_id ?>: <?php echo htmlspecialchars($monster->iro_name) ?>
	<?php if ($monster->mvp_exp): ?>
		<span class="mvp">(MVP)</span>
	<?php endif ?>
</h3>
<table class="vertical-table">
	<tr>
		<th>ID do Monstro</th>
		<td><?php echo $monster->monster_id ?></td>
		<?php if ($image=$this->monsterImage($monster->monster_id)): ?>
		<td rowspan="11" style="width:150px; text-align: center; vertical-alignment: middle">
		<img src="<?php echo $image ?>" />
		</td>
		<?php endif ?>
		<th>Sprite</th>
		<td><?php echo htmlspecialchars($monster->sprite) ?></td>
		<?php if ($itemDrops): ?>
		<td rowspan="13" style="vertical-align: top">
			<h3><?php echo htmlspecialchars($monster->iro_name) ?> Item Drops</h3>
			<table class="vertical-table">
				<tr>
					<th>ID do Item</th>
					<th colspan="2">Nome do Item</th>
					<th>Chance de Drop</th>
				</tr>
				<?php $mvpDrops = 0; ?>
				<?php foreach ($itemDrops as $itemDrop): ?>
				<tr class="item-drop-<?php echo $itemDrop['type'] ?>"
					title="<strong><?php echo htmlspecialchars($itemDrop['name']) ?></strong> (<?php echo (float)$itemDrop['chance'] ?>%)">
					<td align="right">
						<?php if ($auth->actionAllowed('item', 'view')): ?>
							<?php echo $this->linkToItem($itemDrop['id'], $itemDrop['id']) ?>
						<?php else: ?>
							<?php echo htmlspecialchars($itemDrop['id']) ?>
						<?php endif ?>
					</td>
					<?php if ($image=$this->iconImage($itemDrop['id'])): ?>
						<td><img src="<?php echo $image ?>" /></td>
						<td>
							<?php if ($itemDrop['type'] == 'mvp'): ?>
							<?php ++$mvpDrops; ?>
								<span class="mvp">MVP!</span>
							<?php endif ?>
							<?php echo htmlspecialchars($itemDrop['name']) ?>
						</td>
					<?php else: ?>
						<td colspan="2">
							<?php if ($itemDrop['type'] == 'mvp'): ?>
							<?php ++$mvpDrops; ?>
								<span class="mvp">MVP!</span>
							<?php endif ?>
							<?php echo htmlspecialchars($itemDrop['name']) ?>
						</td>
					<?php endif ?>
					<td><?php echo (float)$itemDrop['chance'] ?>%</td>
				</tr>
				<?php endforeach ?>
				<?php if ($mvpDrops > 1): ?>
				<tr>
					<td colspan="4" align="center">
						<p><em>Nota: Somente <strong>um</strong> drop de MVP é dropado.</em></p>
					</td>
				</tr>
				<?php endif ?>
			</table>
		</td>
		<?php endif ?>
	</tr>
	<tr>
		<th>Nome no kRO</th>
		<td><?php echo htmlspecialchars($monster->kro_name) ?></td>
		<th>HP</th>
		<td><?php echo number_format($monster->hp) ?></td>
	</tr>
	<tr>
		<th>Nome no iRO</th>
		<td><?php echo htmlspecialchars($monster->iro_name) ?></td>
		<th>SP</th>
		<td><?php echo number_format($monster->sp) ?></td>
	</tr>
	<tr>
		<th>Raça</th>
		<td>
			<?php if ($race=Flux::monsterRaceName($monster->race)): ?>
				<?php echo htmlspecialchars($race) ?>
			<?php else: ?>
				<span class="not-applicable">Desconhecido</span>
			<?php endif ?>	
		</td>
		<th>Level</th>
		<td><?php echo number_format($monster->level) ?></td>
	</tr>
	<tr>
		<th>Elemento</th>
		<td><?php echo Flux::elementName($monster->element_type) ?> (Level <?php echo floor($monster->element_level) ?>)</td>
		<th>Velocidade</th>
		<td><?php echo number_format($monster->speed) ?></td>
	</tr>
	<tr>
		<th>Experiência</th>
		<td><?php echo number_format($monster->base_exp*$server->baseExpRates) ?></td>
		<th>Ataque</th>
		<td><?php echo number_format($monster->attack1) ?>~<?php echo number_format($monster->attack2) ?></td>
	</tr>
	<tr>
		<th>Experiência de Job</th>
		<td><?php echo number_format($monster->job_exp*$server->jobExpRates) ?></td>
		<th>Defesa</th>
		<td><?php echo number_format($monster->defense) ?></td>
	</tr>
	<tr>
		<th>Experiência de MVP</th>
		<td><?php echo number_format($monster->mvp_exp*$server->mvpExpRates) ?></td>
		<th>Defesa Mágica</th>
		<td><?php echo number_format($monster->magic_defense) ?></td>
	</tr>
	<tr>
		<th>Delay do Ataque</th>
		<td><?php echo number_format($monster->attack_delay) ?> ms</td>
		<th>Alcance do Ataque</th>
		<td><?php echo number_format($monster->range1) ?></td>
	</tr>
	<tr>
		<th>Attack Motion</th> <!-- Necessita Tradução -->
		<td><?php echo number_format($monster->attack_motion) ?> ms</td>
		<th>Alcance da Magia</th>
		<td><?php echo number_format($monster->range2) ?></td>
	</tr>
	<tr>
		<th>Delay Motion</th> <!-- Necessita Tradução -->
		<td><?php echo number_format($monster->defense_motion) ?> ms</td>
		<th>Alcance de Visão</th>
		<td><?php echo number_format($monster->range3) ?></td>
	</tr>
	<tr>
		<th>Modo do Monstro</th>
		<td colspan="4">
			<ul class="monster-mode">
			<?php foreach ($this->monsterMode($monster->mode) as $mode): ?>
				<li><?php echo htmlspecialchars($mode) ?></li>
			<?php endforeach ?>
			</ul>
		</td>
	</tr>
	<tr>
		<th>Status do Monstro</th>
		<td colspan="4">
			<table class="character-stats">
				<tr>
					<td><span class="stat-name">STR</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$monster->strength) ?></span></td>
					<td><span class="stat-name">AGI</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$monster->agility) ?></span></td>
					<td><span class="stat-name">VIT</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$monster->vitality) ?></span></td>
				</tr>
				<tr>
					<td><span class="stat-name">INT</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$monster->intelligence) ?></span></td>
					<td><span class="stat-name">DEX</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$monster->dexterity) ?></span></td>
					<td><span class="stat-name">LUK</span></td>
					<td><span class="stat-value"><?php echo number_format((int)$monster->luck) ?></span></td>
				</tr>
			</table>
		</td>
	</tr>
</table>

<h3>Skills do monstro “<?php echo htmlspecialchars($monster->iro_name) ?>”</h3>
<?php if (!file_exists($skillDB) || !filesize($skillDB)): ?>
<p><strong>Banco de Dados de skills de mob precisa ser recarregado!</strong></p>
<?php elseif (empty($mobSkills)): ?>
<p>Nenhuma skill encontrada para <?php echo htmlspecialchars($monster->iro_name) ?>.</p>
<?php else: ?>
<table class="vertical-table">
	<tr>
		<th>Nome</th>
		<th>Level</th>
		<th>Status</th>
		<th>Chance</th>
		<th>Cast Time</th>
		<th>Delay</th>
		<th>Cancelável</th>
		<th>Alvo</th>
		<th>Condição</th>
		<th>Valor</th>
	</tr>	
	<?php foreach ($mobSkills as $skill): ?>
	<tr>
		<td><?php echo htmlspecialchars($skill['name']) ?></td>
		<td><?php echo htmlspecialchars($skill['level']) ?></td>
		<td><?php echo htmlspecialchars(ucfirst($skill['state'])) ?></td>
		<td><?php echo $skill['rate'] ?>%</td>
		<td><?php echo $skill['cast_time'] ?>s</td>
		<td><?php echo $skill['delay'] ?>s</td>
		<td><?php echo htmlspecialchars(ucfirst($skill['cancelable'])) ?></td>
		<td><?php echo htmlspecialchars(ucfirst($skill['target'])) ?></td>
		<td><em><?php echo htmlspecialchars($skill['condition']) ?></em></td>
		<td>
			<?php if (!is_null($skill['value']) && trim($skill['value']) !== ''): ?>
				<?php echo htmlspecialchars($skill['value']) ?>
			<?php else: ?>
				<span class="not-applicable">Nada</span>
			<?php endif ?>
		</td>
	</tr>
	<?php endforeach ?>
</table>
<?php endif ?>
<?php else: ?>
<p>Nenhum monstro encontrado. <a href="javascript:history.go(-1)">Voltar</a>.</p>
<?php endif ?>