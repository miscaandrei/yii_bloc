<?php

// change the following paths if necessary
$yiit=dirname(__FILE__).'/../../../../../home/andrei/Cole/M7.3/Bloc_yii/yii/framework/yiit.php';
$config=dirname(__FILE__).'/../config/test.php';

require_once($yiit);
require_once(dirname(__FILE__).'/WebTestCase.php');

Yii::createWebApplication($config);
