<?php

/** @var \MasterStudy\Lms\Routing\Router $router */
require_once 'http/CourseSerializer.php';
require_once 'GetSettingsController.php';
require_once 'GetSettings.php';

$router->get(
	'/courses/{course_id}/settingschild',
	\MasterStudy\Lms\Http\Controllers\Course\GetSettingsControllerChild::class,
	\MasterStudy\Lms\Routing\Swagger\Routes\Course\GetSettingsChild::class
);


