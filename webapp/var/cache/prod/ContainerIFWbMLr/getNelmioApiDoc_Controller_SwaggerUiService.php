<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'nelmio_api_doc.controller.swagger_ui' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/nelmio/api-doc-bundle/Controller/SwaggerUiController.php';

return $this->services['nelmio_api_doc.controller.swagger_ui'] = new \Nelmio\ApiDocBundle\Controller\SwaggerUiController(($this->privates['nelmio_api_doc.generator_locator'] ?? $this->load('getNelmioApiDoc_GeneratorLocatorService.php')), ($this->services['twig'] ?? $this->getTwigService()));
