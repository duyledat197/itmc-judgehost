<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Validator\Constraints\CountryValidator' shared autowired service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ConstraintValidator.php';
include_once \dirname(__DIR__, 4).'/src/Validator/Constraints/CountryValidator.php';

return $this->privates['App\\Validator\\Constraints\\CountryValidator'] = new \App\Validator\Constraints\CountryValidator();
