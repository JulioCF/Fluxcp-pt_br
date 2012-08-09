<?php
// Este é o arquivo de configuração do aplicativo. Todos os valores foram definidos para
// padrão e deve ser alterado conforme necessário.
return array(
	'ServerAddress'        => 'localhost',             // Este valor é o hostname:porta em que o flux é executado. (por exemplo, example.com ou example.com:80)
	'BaseURI'              => '/pastadasuaflux',                       // Base URI é a raiz de base web em que se encontra seu aplicativo.
	'InstallerPassword'    => '123',         // Senha de instalador/atualizar.
	'DefaultLoginGroup'    => null,
	'DefaultCharMapServer' => null,
	'DefaultLanguage'      => 'pt_br',                  // Especifique o idioma padrão do painel de controle (ver FLUX_ROOT/lang/diretório de idiomas disponíveis.) padrão: pt_br.
	'SiteTitle'            => 'Ragnarok fluxcp',     // Este valor só é usado se o tema decide usá-lo.
	'ThemeName'            => 'default',                // O nome do tema do tema que você gostaria de usar. Os temas são em FLUX_ROOT/temas.
	'ScriptTimeLimit'      => 0,                       // Limite de tempo de execução de script. (Em segundos), especifica quanto tempo uma página deve ser executado antes do tempo limite. (0 significa para sempre)
	'MissingEmblemBMP'     => 'empty.bmp',              //
	'ItemIconNameFormat'   => '%d.png',                 // O nome do arquivo de formato para ícones de item (o padrão é {itemid}. gif).
	'ItemImageNameFormat'  => '%d.png', 	// O nome do arquivo de formato para imagens de item (o padrão é {itemid}. png).
	'MonsterImageNameFormat' => '%d.gif',               // O nome do arquivo de formato para imagens do monstro (o padrão é {monsterid}. gif).
	'ForceEmptyEmblem'     => false,                    // Display com força emblemas vazio guild, útil quando você não tem GD2 instalado.
	'EmblemCacheInterval'  => 12,                       // Por hora intervalo para re-cache guild emblemas (definido como 0 para desabilitar o cache de emblema).
	'SessionCookieExpire'  => 48,                       // Duração em horas.
	'AdminMenuLevel'       => AccountLevel::LOWGM,      // O nível para que ações do módulo inicial são movidas para o menu de admin para exibição.
	'DateDefaultTimezone'  => America/Sao_Paulo,        // O fuso horário padrão, consulte o manual do PHP para fusos horários válidos: http://php.net/timezones (null para defaut sistema TZ)
	'DateFormat'           => 'Y-m-d',                  // Formato de data padrão a ser exibido nas páginas.
	'DateTimeFormat'       => 'Y-m-d H:i:s',            // Formato DATETIME padrão a ser exibido nas páginas.
	'ShowSinglePage'       => true,                     // Não mostrar os números de página, mesmo se houver apenas uma página.
	'ResultsPerPage'       => 20,                       // O número de resultados para exibir em um conjunto de páginas, por página.
	'PagesToShow'          => 10,                       // O número de página para exibir ao mesmo tempo.
	'PageJumpMinimumPages' => 1,                        // Número mínimo de páginas necessárias do salto de página é mostrada. (0 a sempre mostrar!)
	'ShowPageJump'         => true,                     // Se quer ou não mostrar o "Salto de Página" caixa.
	'MinUsernameLength'    => 4,                        // Mínimo caracteres para nome de usuário.
	'MaxUsernameLength'    => 23,                       // Máximo caracteres para nome de usuário.
	'MinPasswordLength'    => 4,                        // Mínimo comprimento de senha.
	'MaxPasswordLength'    => 23,                       // Máximo comprimento de senha.
	'RandomPasswordLength' => 8,                        // Este é o comprimento da senha aleatória gerada pelo recurso de "Redefinir senha".
	'AllowDuplicateEmails' => false,                    // Se deve ou não permitir e-mails duplicados ser usado no registro. (Consulte Opções de configuração de Mailer)
	'RequireEmailConfirm'  => false,                    // Exigir a confirmação por e-mail durante o registo.
	'RequireChangeConfirm' => false,                    // Requerer confirmação ao alterar os endereços de email.
	'EmailConfirmExpire'   => 48,                       // Confirmações email expiram em x horas. Contas não confirmadas expirará após este período de tempo.
	'MailerFromAddress'    => 'noreply@localhost',      // O endereço de email exibido no campo.
	'MailerFromName'       => 'MailerName',             // O nome exibido com o endereço de email.
	'MailerUseSMTP'        => false,                    // Se deve ou não usar um servidor de SMTP separado para o envio de mail.
	'MailerSMTPUseSSL'     => false,                    // Deve se conectar usando SSL (true, para o GMail) ou false.
	'MailerSMTPUseTLS'     => false,                    // Mesmo que acima a configuração de SSL, mas para TLS. Essa configuração substituirá a configuração de SSL.
	'MailerSMTPPort'       => null,                     // Quando MailerUseSMTP é true: porta do servidor SMTP (mailer padrão será 25).
	'MailerSMTPHosts'      => null,                     // Quando MailerUseSMTP é true: uma string host ou matriz de hosts (por exemplo, 'host1' ou array ('host1', 'backuphost')).
	'MailerSMTPUsername'   => null,                     // Quando MailerUseSMTP é true: autoriza o nome de usuário para o servidor SMTP.
	'MailerSMTPPassword'   => null,                     // Quando MailerUseSMTP é verdade: a senha autoriza para o servidor SMTP (para acima o usuário).
	'ServerStatusCache'    => 2,                        // Armazenar um status do servidor em cache e atualizar a cada x minutos. Padrão: 2 minutos (valor é medido em minutos).
	'ServerStatusTimeout'  => 2,                        // Para cada servidor, gastar x quantidade de segundos.
	'SessionKey'           => 'fluxSessionData',        // Não deve ser alterado, apenas especifica a chave de sessão para ser usado para dados de sessão.
	'DefaultModule'        => 'main',                   // Este é o módulo para executar quando nenhum tiver sido especificado.
	'DefaultAction'        => 'index',                  // Esta é a ação padrão para qualquer módulo, provavelmente deve deixar isso sozinho. (Obsoleto)
	'GzipCompressOutput'   => false,                    // Se quer ou não comprimir a saída usando o zlib.
	'GzipCompressionLevel' => 9,                        // nível de compressão de zlib. (1 ~ 9)
	'OutputCleanHTML'      => true,                     // Use isto se você tiver arrumado instalado para limpar sua saída ao servir páginas HTML.
	'ShowCopyright'        => true,                     // Mostrar o rodapé de direitos autorais ou não.
	'ShowRenderDetails'    => true,                     // Mostra o "página processada em x segundos" e "número de consultas executadas: X" no tema padrão.
	'UseCleanUrls'         => false,                    // Definir como true se você estiver executando o Apache e mod_rewrite e. htaccess arquivos suporta.
	'DebugMode'            => false,                    // Definida como false, para minimizar a detalhes técnicos da flux de saída. AVISO: NÃO USE ESTA OPÇÃO EM UM CP PUBLICAMENTE ACESSÍVEL.
	'UseCaptcha'           => true,                     // Use imagem CAPTCHA para o registo de conta para evitar a criação automática de contas. (Requer GD2/FreeType2)
	'UseLoginCaptcha'      => false,                    // Use imagem CAPTCHA para logons de conta. (Requer GD2/FreeType2)
	'EnableReCaptcha'      => false,                    // Permite o uso de reCAPTCHA em vez de biblioteca de GD2 nativa do flux (http://www.google.com/recaptcha)
	'ReCaptchaPublicKey'   => '...',                    // Esta é a sua chave pública reCAPTCHA [necessários para RECAPTCHA] (Cadastre-se no http://www.google.com/recaptcha)
	'ReCaptchaPrivateKey'  => '...',                    // Esta é a sua chave privada reCAPTCHA [necessários para RECAPTCHA] (Cadastre-se no http://www.google.com/recaptcha)
	'ReCaptchaTheme'       => 'white',                  // Tema de ReCaptcha usar (ver: http://code.google.com/apis/recaptcha/docs/customization.html#Standard_Themes)
	'DisplaySinglePages'   => true,                     // Exibir ou não paginação de resultados de página única.
	'ForwardYears'         => 15,                       // (Visual) O número de anos para exibir antes do ano atual em entradas de data.
	'BackwardYears'        => 30,                       // (Visual) O número de anos para exibir por trás do ano atual em entradas de data.
	'ColumnSortAscending'  => ' ▲',                     // (Visual) Texto exibido para o crescente classificados nomes de coluna.
	'ColumnSortDescending' => ' ▼',                     // (Visual) Texto exibido para decrescente classificados nomes de coluna.
	'CreditExchangeRate'   => 1.0,                      // A taxa na quais os créditos são trocadas por dólares.
	'MinDonationAmount'    => 2.0,                      // Valor da doação mínima. (Nota: reais doações que são menos do que essa conta não vai ser trocada)
	'DonationCurrency'     => 'USD',                    // Moeda de doação preferencial. Apenas doações feitas nesta moeda serão processadas para depósitos de crédito.
	'MoneyDecimalPlaces'   => 2,                        // (Visual) Número de casas decimais para exibir em quantidade.
	'MoneyThousandsSymbol' => ',',                      // (Visual) Thousanths colocar separador (período em moedas européias).
	'MoneyDecimalSymbol'   => '.',                      // (Visual) Separador decimal (vírgula em moedas européias).
	'AcceptDonations'      => true,                     // Se deve ou não aceitar doações.
	'PayPalIpnUrl'         => 'www.sandbox.paypal.com', // A URL para respostas de IPN do PayPal (www.paypal.com para viver e www.sandbox.paypal.com para testes)
	'PayPalBusinessEmail'  => 'admin@localhost',        // Digite o e-mail que você registrou a sua conta de negócios.
	'PayPalReceiverEmails' => array(                    // Esses são os endereços de e-mail do receptor que estão autorizados a receber o pagamento.
		//'admin2@localhost',                             // -- Esta matriz pode ser vazio, se você usar apenas um e-mail
		//'admin3@localhost'                              // -- Porque seu E-mail de negócios também é verificada.
	),
	'DivorceKeepChild'     => false,                    // Manter o filho após o divórcio ?
	'AllowIpBanLogin'      => false,                    // Permitir logar em contas de IP banido.
	'AllowTempBanLogin'    => false,                    // Permitir logar em contas banidas temporariamente.
	'AllowPermBanLogin'    => false,                    // Permitir logar em contas banidas permanentemente.
	'AutoRemoveTempBans'   => true,                     // Remova automaticamente expiradas proibições temporárias em determinadas páginas.
	'ItemShopMaxCost'      => 99,                       // Max preço um item pode ser vendido para player.
	'ItemShopMaxQuantity'  => 99,                       // Quantidade de Max o item pode ser vendida de uma só vez para player.
	'HideFromWhosOnline'   => 10,                       // Níveis maiores ou iguais a este ficará oculta a página de "Quem está Online".
	'HideFromMapStats'     => 10,                       // Níveis maiores ou iguais a este ficará oculta a página "Estatísticas de mapa"..
	'ChargeGenderChange'   => 0,                        // Você pode especificar isso como o número de créditos a cobrar para mudança de sexo. Pode ser 0 para alteração grátis.
	'BanPaymentStatuses'   => array(                    // Status de pagamento que automaticamente vão proibir o proprietário da conta, se recebeu.
		'Cancelled_Reversal',                           // -- 'Cancelado_Reversão'
		'Reversed',                                     // -- 'Invertida'
	),
	
	'HoldUntrustedAccount' => 0,                        // Este é o tempo em horas para realizar uma doação, creditando o processo para, se a conta
	                                                    // não é uma conta confiável. Especifica 0 ou false para desativar esse recurso.
	
	'AutoUnholdAccount'    => false,                    // Habilitar este auto-retomar uma conta e creditá-lo se a transação ainda
	                                                    // válido. Isso só se aplica se você estiver usando o recurso de HoldUnstrustedAccount.
	                                                    // Se você deseja executar uma tarefa cron em vez disso, você pode fazer um pedido '/doar/atualizar'
	                                                    // módulo/ação com o InstallerPassword como a senha para executar a tarefa de atualização.
														// Com URLs limpas: http://<server>/<baseURI>/donate/update?password=<InstallerPassword>
														// Sem URLs limpas: http://<server>/<baseURI>?module=donate&action=update&password=<InstallerPassword>
														// Nota: Esta opção é altamente ineficiente, recomenda-se para executar uma tarefa cron em vez disso.
	
	'AutoPruneAccounts'    => false,                    // Habilite isso contas inativas expiraram automaticamente. Permitindo que este é um desempenho
	                                                    // assassino. Ver 'AutoUnholdAccount' para executar essa tarefa como uma tarefa do cron,
														// o módulo é 'conta' e a ação é a 'podar'.
														// Com URLs limpas: http://<server>/<baseURI>/account/prune?password=<InstallerPassword>
														// Sem URLs limpas: http://<server>/<baseURI>?module=account&action=prune&password=<InstallerPassword>
	
	'ShopImageExtensions'  => array(                    // These are the image extensions allowed for uploading in the item shop.
		'png', 'jpg', 'gif', 'bmp', 'jpeg'
	),
	'CharRankingLimit'    => 20,                        //
	'GuildRankingLimit'   => 20,                        //
	'ZenyRankingLimit'    => 20,                        //
	'RankingHideLevel'    => AccountLevel::LOWGM,       //
	'InfoHideZenyLevel'   => AccountLevel::LOWGM,       // Nível da conta para esconder zeny na página de informações do servidor.
	
	'CharRankingThreshold' => 0,                         // Número de dias que o personagem deve ter logado para ser listado no ranking de personagem. (0 = desativado)
	'ZenyRankingThreshold' => 0,                         // Número de dias que o personagem deve ter logado dentro para ser listado no ranking de zeny. (0 = desativado)
	
	'HideTempBannedCharRank'  => false,                  // Oculte personagens do ranking com contas banidas temporariamente.
	'HidePermBannedCharRank'  => true,                   // Ocultar personagens permanentemente banidos de ranking.
	
	'HideTempBannedZenyRank'  => false,                  // Oculte personagens do ranking com conta temporariamente banidas.
	'HidePermBannedZenyRank'  => true,                   // Oculte personagens do ranking com contas permanentemente banidas.
	
	'CpLoginLogShowPassword'  => false,                  // Mostrar senha no log de login do CP (também do Veja access.php SeeCpLoginLogPass).
	
	'CpResetLogShowPassword'  => false,                  // Mostrar senha no CP "redefinições de senha" log (também do Veja access.php SeeCpResetPass).
	
	'AdminMenuNewStyle'       => true,                   // Use o menu de admin do novo estilo; Aplica-se ao tema 'padrão'.
	
	// Estes são os itens do menu principal que devem ser exibidos por temas.
	// Eles via módulos e ações. Se eles são exibidos ou
	// não em um dado momento depende do nível da conta do usuário e/ou
	// seu status de login.
	'MenuItems' => array(
		'Menu Principal'   => array(
			'Inicial'          => array('module' => 'main'),
			//'Forums'        => array('exturl' => 'http://www.fluxro.com/community'),
		),
		'Conta'     => array(
			'Registrar'      => array('module' => 'account', 'action' => 'create'),
			'Login'         => array('module' => 'account', 'action' => 'login'),
			'Logout'        => array('module' => 'account', 'action' => 'logout'),
			'Histórico'       => array('module' => 'history'),
			'Minha Conta'    => array('module' => 'account', 'action' => 'view'),
		),
		'Doações'   => array(
			'Comprar'      => array('module' => 'purchase'),
			'Doar'        => array('module' => 'donate'),
		),
		'Informações' => array(
			'Informações do Server'  => array('module' => 'server', 'action' => 'info'),
			'Status do Server' => array('module' => 'server', 'action' => 'status'),
			'Horários da GdE'     => array('module' => 'woe'),
			"Quem Está Online"  => array('module' => 'character', 'action' => 'online'),
			'Estatísticas de Mapas'=> array('module' => 'character', 'action' => 'mapstats'),
			'Ranking' => array('module' => 'ranking', 'action' => 'character'),
		),
		'Database'    => array(
			'Item Database' => array('module' => 'item'),
			'Mob Database'  => array('module' => 'monster'),
		),
		'Outros' => array(
			'eA Logs'       => array('module' => 'logdata'),
			'CP Logs'       => array('module' => 'cplog'),
			'IP\'s Banidos'   => array('module' => 'ipban'),
			'Contas'      => array('module' => 'account'),
			'Personagens'    => array('module' => 'character'),
			'Clãs'        => array('module' => 'guild'),
			'Reload'        => array('module' => 'reload'),
			'Enviar E-mail'     => array('module' => 'mail'),
			'Reinstalar'    => array('module' => 'install', 'action' => 'reinstall'),
			
			//'Castelos'       => array('module' => 'castle'),
			//'Leilão'       => array('module' => 'auction'),
			//'Economia'       => array('module' => 'economy'),
		)
	),
	
	// Submenu itens que são exibidos para qualquer ação pertencente a um
	// determinado módulo. O formato é simples.
	'SubMenuItems' => array(
		'history' => array(
			'gamelogin'  => 'Logins no Jogo',
			'cplogin'    => 'Logins no CP',
			'emailchange'=> 'Alterações de E-Mail',
			//'passchange' => 'Alterações de Senha', // not implemented
			//'passreset'  => 'Redefinições de Senha'   // not implemented
		),
		'account' => array(
			'index'      => 'Listar Contas',
			'view'       => 'Ver Conta',
			'changepass' => 'Alterar Senha',
			'changemail' => 'Alterar E-mail',
			//'changesex'  => 'Alterar Gênero',
			'transfer'   => 'Transferir Créditos',
			'xferlog'    => 'Históico de Transferência',
			'cart'       => 'Ir as compras',
			'login'      => 'Login',
			'create'     => 'Registrar',
			'resetpass'  => 'Redefinir Senha',
			'resend'     => 'Reenviar E-mail de Confirmação'
		),
		'guild' => array(
			'index'  => 'Listar Clãs',
			'export' => 'Exportar Emblemas de Clãs'
		),
		'server' => array(
			'status'     => 'Ver Status',
			//'status-xml' => 'Ver Status como XML'
		),
		'logdata' => array(
			//'char'    => 'Personagens',
			//'inter'   => 'Interações',
			'command' => 'Comandos',
			//'branch'  => 'Galhos',
			//'chat'    => 'Chats',
			'login'   => 'Logins',
			//'mvp'     => 'MVP',
			//'npc'     => 'NPC',
			'pick'    => 'Itens Apanhados',
			'zeny'    => 'Zeny'
		),
		'cplog' => array(
			'paypal' => 'Transações do PayPal',
			'login'  => 'Logins',
			'resetpass'  => 'Redefinições de Senha',
			//'changepass' => 'Alterações de Senha',
			//'changemail' => 'Alterações de E-mail'
		),
		'reload' => array(
			'mobskill' => 'Mob Skills'
		),
		'purchase' => array(
			'index'    => 'Loja',
			'cart'     => 'Ir Para o Carrinho',
			'checkout' => 'Finalizar',
			'clear'    => 'Esvaziar Carrinho',
			'pending'  => 'Recompensas Pendentes'
		),
		'donate' => array(
			'index'   => 'Fazer Uma Doação',
			'history' => 'Histórico de Doação',
			'trusted' => 'E-mail confiáveis do PayPal'
		),
		'ipban' => array(
			'index' => 'Lista de IP\'s Banidos',
			'add'   => 'Banir IP'
		),
		'ranking' => array(
			'character' => 'Ranking de Personagens',
			'guild'     => 'Ranking de Clãs',
			'zeny'      => 'Ranking de Zenys'
		),
		'item' => array(
			'index' => 'Listar Items',
			'add'   => 'Adicionar Item'
		)
	),
	
	'AllowMD5PasswordSearch'       => false,
	'ReallyAllowMD5PasswordSearch' => false, // Tem certeza de forma positiva ?
	
	// Especifica quais módulos e ações devem ser ignoradas pelo Tidy
	// (ativado/desativado pela opção OutputCleanHTML).
	'TidyIgnore' => array(
		array('module' => 'captcha'),
		array('module' => 'guild', 'action' => 'emblem')
	),
	
	// Trabalho classes, carregadas de outro arquivo para evitar sobrecarregar um presente.
	// Não há normalmente uma necessidade de modificar este arquivo, a menos que tenha sido
	// modificado em uma atualização. (Em Português: Não toque isso.)
	'JobClasses'    => include('jobs.php'),
	'JobClassIndex' => array_flip(include('jobs.php')),
	
	// Homúnculo classe IDs e seus nomes correspondentes.
	// Melhor não mexer com isso também.
	'HomunClasses' => include('homunculus.php'),

	// Tipos de item com seus nomes correspondentes.
	// Não deve tocar isso também.
	'ItemTypes' => include('itemtypes.php'),
	
	// Código de erro - > mapeamento de tipo de erro.
	// Não precisa tocar, porém modificar loginerrors.php deve ser relativamente seguro.
	'LoginErrors' => include('loginerrors.php'),
	
	// eA equip jobs mapping.
	'EquipJobs' => include('equip_jobs.php'),
	
	// eA equip upper mapping.
	'EquipUpper' => include('equip_upper.php'),
	
	// eA monster races mapping.
	'MonsterRaces' => include('races.php'),
	
	// eA elements mapping.
	'Elements' => include('elements.php'),
	
	// eA monster modes mapping.
	'MonsterModes' => include('monstermode.php'),
	
	// categorias de itens da loja.
	'ShopCategories' => include('shopcategories.php'),
	
	// Item pick e zeny log tipos.
	'PickTypes' => include('picktypes.php'),
	
	// NÃO TOQUE. ISSO É PARA DESENVOLVEDORES..
	'FluxTables' => array(
		'CreditsTable'        => 'cp_credits',
		'CreditTransferTable' => 'cp_xferlog',
		'ItemShopTable'       => 'cp_itemshop',
		'TransactionTable'    => 'cp_txnlog',
		'RedemptionTable'     => 'cp_redeemlog',
		'AccountCreateTable'  => 'cp_createlog',
		'AccountBanTable'     => 'cp_banlog',
		'DonationTrustTable'  => 'cp_trusted',
		'AccountPrefsTable'   => 'cp_loginprefs',
		'CharacterPrefsTable' => 'cp_charprefs',
		'ResetPasswordTable'  => 'cp_resetpass',
		'ChangeEmailTable'    => 'cp_emailchange',
		'LoginLogTable'       => 'cp_loginlog',
		'ChangePasswordTable' => 'cp_pwchange'
	),
	// Não altere estas também renomear os arquivos em FLUX_ROOT/lib/eA /
	'MobSkillDb1' => FLUX_ROOT.'/lib/eA/mob_skill_db.txt',
	'MobSkillDb2' => FLUX_ROOT.'/lib/eA/mob_skill_db2.txt',

	// Este é o arquivo combinado do Mob Skill DBs menos os comentários e a desordem
	'MobSkillDb'  => FLUX_ROOT.'/lib/eA/mob_skills.txt'
);
?>