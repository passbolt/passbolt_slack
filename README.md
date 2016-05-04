License
==============

Passbolt is distributed under [Affero General Public License v3](http://www.gnu.org/licenses/agpl-3.0.html)

About this plugin
=================

This is a simple slack plugin for passbolt (https://www.passbolt.com).
This plugin takes care of sending an alert on slack everytime somebody registers on passbolt.
More features are planned for the future:
- More configuration options
- Sending GPG alerts and passwords on slack for create / update / delete actions.
- Sending alerts on slack when a new comment is added on a password.
- Using a queue system instead of making direct curl calls.

How to install
===============

1) Copy the plugin into the directory app/Plugin of your passbolt installation.

2) Copy the configuration file into the Config folder of your passbolt installation.

```
	cp /var/www/passbolt/app/Plugin/PassboltSlack/passbolt_slack.config.sample.php /var/www/passbolt/app/Config/passbolt_slack.php
```

3) Enter your own configuration.

4) Include this file in the bootstrap.php file.

```
	echo "require_once (APP . 'Config' . DS  . 'passbolt_slack.php');" >> /var/www/passbolt/app/Config/bootstrap.php

```
