<?php
if (!defined('FLUX_ROOT')) exit;

$this->loginRequired();

$charID = $params->get('id');

if (!$charID) {
	$this->deny();
}

$char = $server->getCharacter($charID);
if (!$char || ($char->account_id != $session->account->account_id && !$auth->allowedToChangeSlot)) {
	$this->deny();
}

$title = "Mudar Slot para {$char->name}";

if ($char->online) {
	$session->setMessageData("Impossível alterar o slot de {$char->name}. Personagem está online.");
	$this->redirect();
}

if (count($_POST)) {
	if (!$params->get('changeslot')) {
		$this->deny();
	}
	
	$slot = (int)$params->get('slot');
	
	if ($slot > $server->maxCharSlots) {
		$errorMessage = "O slot não pode ser maior que {$server->maxCharSlots}.";
	}
	elseif ($slot < 1) {
		$errorMessage = 'O slot deve ser um número maior que zero.';
	}
	elseif ($slot === (int)$char->char_num+1) {
		$errorMessage = 'Escolha um slot diferente.';
	}
	else {
		$sql  = "SELECT char_id, name, online FROM {$server->charMapDatabase}.`char` AS ch ";
		$sql .= "WHERE account_id = ? AND char_num = ? AND char_id != ?";
		$sth  = $server->connection->getStatement($sql);
		
		$sth->execute(array($char->account_id, $slot-1, $charID));
		
		$otherChar = $sth->fetch();
		
		if ($otherChar) {
			if ($otherChar->online) {
				$errorMessage = "{$otherChar->name} está usando esse slot e está online.";
			}
			else {
				$sql  = "UPDATE {$server->charMapDatabase}.`char` SET `char`.char_num = ?";
				$sql .= "WHERE `char`.char_id = ?";
				$sth  = $server->connection->getStatement($sql);
				
				$sth->execute(array($char->char_num, $otherChar->char_id));
			}
		}
		
		if (empty($errorMessage)) {
			$sql  = "UPDATE {$server->charMapDatabase}.`char` SET `char`.char_num = ?";
			$sql .= "WHERE `char`.char_id = ?";
			$sth  = $server->connection->getStatement($sql);
			
			$sth->execute(array($slot-1, $charID));
			
			if ($otherChar) {
				$otherNum = $char->char_num + 1;
				$session->setMessageData("Você trocou o slot de {$char->name} pelo de {$otherChar->name} (#$otherNum and #$slot).");
			}
			else {
				$session->setMessageData("Você trocou o slot de {$char->name} para o slot #$slot.");
			}
			
			$isMine = $char->account_id == $session->account->account_id;
			if ($auth->actionAllowed('character', 'view') && ($isMine || $auth->allowedToViewCharacter)) {
				$this->redirect($this->url('character', 'view', array('id' => $char->char_id)));
			}
			else {
				$this->redirect();
			}
		}
	}
}
?>