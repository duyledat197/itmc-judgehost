<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'validator.not_compromised_password' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ConstraintValidator.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/Constraints/NotCompromisedPasswordValidator.php';

return $this->privates['validator.not_compromised_password'] = new \Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator(($this->privates['http_client'] ?? $this->load('getHttpClientService.php')), 'UTF-8', true, NULL);
