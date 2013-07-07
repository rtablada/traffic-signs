Traffic Signs
============

Traffic Signs is a simple Package that aims to add pretty error pages for simple production projects in Laravel 4.

Traffic Signs simply listens for an error code and then returns a nice view in response with an error message.

## Installation

This package is distributed using [Composer](http://getcomposer.org). To install this, simply add `"rtablada/traffic-signs": "dev-master"` to your composer.json.

Then in your `/app/config/app.php` file, add `'Rtablada\TrafficSigns\TrafficSignsServiceProvider',` to your Service Providers.

## Using Traffic Signs

Traffic Signs works behind the scenes and listens for HTTP Exceptions. To try this out, browse to an unset route and see a new 404 page.

I am working to make Traffic Signs more flexible and stronger.

## Configuration

You can further configure by publishing the config using `php artisan config:publish rtablada/traffic-signs`.

To change the messages for different error codes by modifying key value pages.

You can set a custom error view by changing the view property. The View is sent `$code` and `$message` variables.
