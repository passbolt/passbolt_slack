<?php
App::uses('CakeEventListener', 'Event');
require_once (APP . 'Plugin' . DS . 'PassboltSlack' . DS . 'Lib' . DS . 'Slack' . DS . 'Slack.php');

class PassboltSlack implements CakeEventListener {

	/**
	 * Implements implementedEvents().
	 * @return array
	 */
	public function implementedEvents() {
		return array(
			'Model.User.afterRegister' => 'afterUserRegister',
		);
	}

	/**
	 * afterUserRegister callback.
	 * @param $event
	 */
	public function afterUserRegister($event) {
		if (Configure::read('PassboltSlack')) {
			// Retrieve data.
			$data = $event->data['data'];
			$name = $data['Profile']['first_name'] . ' ' . $data['Profile']['last_name'];
			$email = $data['User']['username'];
			$url = Router::url('/', true );

			// Get message configuration.
			Configure::write('Slack', Configure::read('PassboltSlack'));

			// Push on slack.
			Slack::send("$name ($email) registered to <$url|Passbolt Demo>");
		}
	}
}
