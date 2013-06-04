<?php

App::error(function(Symfony\Component\HttpKernel\Exception\HttpException $e, $code)
{
	$headers = $e->getHeaders();

	switch ($code)
	{
		case 401:
			$message = 'Invalid API key';
		break;

		case 403:
			$message = 'Insufficient privileges to perform this action';
		break;

		case 404:
			$message = 'The requested resource was not found';
		break;

		default:
			$message = 'An error was encountered';
	}

	return View::make(Config::get('traffic-signs::view'), compact('code', 'message'));
});

