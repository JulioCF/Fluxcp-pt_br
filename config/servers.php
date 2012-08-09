<?php
return array(
	// Exemplo de configuração do servidor. Você pode ter mais arrays como este para
	// especificarem vários grupos de servidores (no entanto eles devem compartilhar o mesmo login
	// servidor enquanto eles estão autorizados a ter vários pares de char/mapa).
	array(
		'ServerName'     => 'Ragnarok',
		// Global configuração de banco de dados (exclui a configuração de banco de dados de logs).
		'DbConfig'       => array(
			//'Socket'     => '/tmp/mysql.sock',
			//'Port'       => 3306,
			'Encoding'   => 'utf8', // Conexão codificada - use tudo o que aqui é o agrupamento de tabelas do MySQL
			//'Convert'    => 'utf8',
				// --'Converter' opção apenas funciona quando o 'Encoding' opção é especificada e iconv (http://php.net/iconv) está disponível.
				// --Especifica a codificação para converter seus dados do MySQL para o site (provavelmente deve ser utf8)
			'Hostname'   => '127.0.0.1',
			'Username'   => 'ragnarok',
			'Password'   => 'ragnarok',
			'Database'   => 'ragnarok',
			'Persistent' => true,
			'Timezone'   => 'America/Sao_Paulo' // Exemplo: ' + 0:00 ' é UTC.
			// Os valores possíveis de 'Timezone' é como documentado no site do MySQL:
			// "O valor pode ser dado como uma seqüência de caracteres indicando um deslocamento de UTC, como ' + 10:00 ' ou ' -6:00 '."
			// "O valor pode ser dado como uma zona de tempo nomeada, como 'Europe/Helsinki', ' US / Eastern', ou 'MET'." (veja abaixo a continuação!)
			// ** "Fusos nomeados pode ser usados somente se foram criadas e preenchidas as tabelas de informações de fuso horário do banco de dados mysql".
		),
		// Este é mantido separado porque muitas pessoas optam por ter seus logs
		// banco de dados acessível com credenciais diferentes e muitas vezes a um
		// diferente servidor inteiramente para garantir a confiabilidade dos dados de log.
		'LogsDbConfig'   => array(
			//'Socket'     => '/tmp/mysql.sock',
			//'Port'       => 3306,
			//'Encoding'   => null, // Conexão codificada - use tudo o que aqui é o agrupamento de tabelas do MySQL.
			'Convert'    => 'utf8',
				// --'Converter' opção apenas funciona quando o 'Encoding' opção é especificada e iconv (http://php.net/iconv) está disponível.
				// --Especifica a codificação para converter seus dados do MySQL para o site (provavelmente deve ser utf8)
			'Hostname'   => '127.0.0.1',
			'Username'   => 'ragnarok',
			'Password'   => 'ragnarok',
			'Database'   => 'log',
			'Persistent' => true,
			'Timezone'   => null // Valores possíveis é descrito no comentário em DbConfig.
		),
		// Configuração de servidor de logon.
		'LoginServer'    => array(
			'Address'  => '127.0.0.1',
			'Port'     => 6900,
			'UseMD5'   => false,
			'NoCase'   => true, // eA conta diferenciar maiúsculas de minúsculas; Padrão: Maiúsculas e minúsculas (true).
			'Level'    => 0,    // Padrão nível de conta durante o registo.
			//'Database' => 'ragnarok'
		),
		'CharMapServers' => array(
			array(
				'ServerName'    => 'Ragnarok',
				'BaseExpRates'  => 200,
				'JobExpRates'   => 200,
				'MvpExpRates'   => 200,
				'DropRates'     => 25,
				'MvpDropRates'  => 25,
				'CardDropRates' => 25,
				'MaxCharSlots'  => 9,
				'DateTimezone'  => 'America/Sao_Paulo',       // Especifica o fuso horário de jogo do servidor para este par de char/mapa. (Ver: http://php.net/timezones)
				//'ResetDenyMaps' => 'sec_pri',  // Padrão é 'sec_pri'. Este valor pode ser uma matriz de nomes de mapa.
				//'Database'      => 'ragnarok', // Padrão é DbConfig.Database
				'CharServer'    => array(
					'Address'   => '127.0.0.1',
					'Port'      => 6121
				),
				'MapServer'     => array(
					'Address'   => '127.0.0.1',
					'Port'      => 5121
				),
				// -- WoE dias e as horas -
				// Primeiro parâmetro: Ínicio dia 0 = Domingo / 1 = segunda-feira / 2 = terça-feira / 3 = quarta-feira / 4 = quinta-feira / 5 = sexta-feira / 6 = sábado
				// Segundo parâmetro: começando a hora no formato 24-horas.
				// Terceiro parâmetro: dia final (valor possível é o mesmo que começar o dia).
				// Quarto parâmetro (final): hora final no formato 24-horas.
				// ** (Note, momentos inválidos são ignorados silenciosamente.)
				'WoeDayTimes'   => array(
					//array(0, '12:00', 0, '14:00'), // Exemplo: começa domingo 12:00 e termina domingo 14:00
					//array(3, '14:00', 3, '15:00')  // Exemplo: começa quarta-feira 14:00 e termina quarta-feira 15:00
				),
				// Módulos e/ou ações para impedir o acesso ao durante a WoE.
				'WoeDisallow'   => array(
					array('module' => 'character', 'action' => 'online'),  // Não permitir acesso a página de "Quem está Online" durante a WoE.
					array('module' => 'character', 'action' => 'mapstats') // Não permitir acesso a página "Estatísticas do mapa", durante a WoE.
				)
			)
		)
	)
);
?>