<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php';

return $this->privates['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
