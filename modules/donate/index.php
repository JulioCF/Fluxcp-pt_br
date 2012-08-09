<?php 
if (!defined('FLUX_ROOT')) exit;

$this->loginRequired(Flux::message('LoginToDonate'));

$title = 'Fazer Uma Doação';

$donationAmount = false;

if (count($_POST) && $params->get('setamount')) {
	$minimum = Flux::config('MinDonationAmount');
	$amount  = (float)$params->get('amount');
	
	if (!$amount || $amount < $minimum) {
		$errorMessage = sprintf('A quantidade de doação deve ser maior ou igual a %s %s!',
			$this->formatDollar($minimum), Flux::config('DonationCurrency'));
	}
	else {
		//$session->setDonationAmountData($amount);
		//$session->setMessageData('Donation amount has been set!');
		$donationAmount = $amount;
		//$this->redirect($this->url);
	}
}

if (!$params->get('setamount') && $params->get('resetamount')) {
	//$session->setDonationAmountData(null);
	//$session->setMessageData('Donation amount has been reset to zero.');
	$this->redirect($this->url);
}
?>