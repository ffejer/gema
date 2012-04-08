<?php

// include config
require_once('./config/frameworks.php');

// include Yii bootstrap file
require_once('./lib/yii/' . $CONFIG['yii_version'] . '/framework/yii.php');

// create a Web application instance and run
Yii::createWebApplication()->run();