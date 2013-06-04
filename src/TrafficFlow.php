<?php

App::error(function(Symfony\Component\HttpKernel\Exception\HttpException $e, $code)
{
	$headers = $e->getHeaders();
	$errors = Config::get('traffic-signs::errors');
	$message = isset($errors[$code]) ? $errors[$code] : 'Something went wrong';
	return View::make(Config::get('traffic-signs::view'), compact('code', 'message'));
});

