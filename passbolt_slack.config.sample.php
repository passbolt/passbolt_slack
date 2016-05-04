<?php
// Include main file.
require_once (APP . 'Plugin' . DS . 'PassboltSlack' . DS . 'Lib' . DS . 'Event' . DS . 'PassboltSlack.php');

App::uses('CakeEventManager', 'Event');

// Configuration for PassboltSlack.
Configure::write('PassboltSlack', [
		'token' => '',
		'channel' => '#channelname',
		'username' => 'username',
		'icon_emoji' => ':ghost:',
	]);

// Attach listeners.
CakeEventManager::instance()->attach(new PassboltSlack());