<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Serializer\ContestProblemVisitor' shared autowired service.

include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/EventDispatcher/EventSubscriberInterface.php';
include_once \dirname(__DIR__, 4).'/src/Serializer/ContestProblemVisitor.php';

return $this->privates['App\\Serializer\\ContestProblemVisitor'] = new \App\Serializer\ContestProblemVisitor();
