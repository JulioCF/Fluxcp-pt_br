<?php exit('Forbidden'); ?>
[2012-08-04 10:01:04] (Flux_Error) Exception Flux_Error: Critical MySQL error in Installer/Updater: Table 'cp_banlog' already exists
[2012-08-04 10:01:04] (Flux_Error) **TRACE** #0 G:\wamp\www\cp\lib\Flux\Installer\Schema.php(157): Flux_Installer_Schema->install(497)
[2012-08-04 10:01:04] (Flux_Error) **TRACE** #1 G:\wamp\www\cp\lib\Flux\Installer\MainServer.php(46): Flux_Installer_Schema->update()
[2012-08-04 10:01:04] (Flux_Error) **TRACE** #2 G:\wamp\www\cp\modules\install\index.php(83): Flux_Installer_MainServer->updateAll()
[2012-08-04 10:01:04] (Flux_Error) **TRACE** #3 G:\wamp\www\cp\lib\Flux\Template.php(337): include('G:\wamp\www\cp\...')
[2012-08-04 10:01:04] (Flux_Error) **TRACE** #4 G:\wamp\www\cp\lib\Flux\Dispatcher.php(168): Flux_Template->render()
[2012-08-04 10:01:04] (Flux_Error) **TRACE** #5 G:\wamp\www\cp\index.php(169): Flux_Dispatcher->dispatch(Array)
[2012-08-04 10:01:04] (Flux_Error) **TRACE** #6 {main}
