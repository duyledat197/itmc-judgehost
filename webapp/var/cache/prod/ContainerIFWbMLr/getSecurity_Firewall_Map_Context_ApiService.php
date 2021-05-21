<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.api' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-bundle/Security/FirewallContext.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-http/Util/TargetPathTrait.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-http/Firewall/ExceptionListener.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-bundle/Security/FirewallConfig.php';

return $this->privates['security.firewall.map.context.api'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.channel_listener'] ?? $this->load('getSecurity_ChannelListenerService.php'));
    yield 1 => ($this->privates['security.authentication.listener.guard.api'] ?? $this->load('getSecurity_Authentication_Listener_Guard_ApiService.php'));
    yield 2 => ($this->privates['security.authentication.listener.anonymous.api'] ?? $this->load('getSecurity_Authentication_Listener_Anonymous_ApiService.php'));
    yield 3 => ($this->privates['security.access_listener'] ?? $this->load('getSecurity_AccessListenerService.php'));
}, 4), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php')), 'api', ($this->privates['App\\Security\\DOMJudgeIPAuthenticator'] ?? $this->load('getDOMJudgeIPAuthenticatorService.php')), NULL, NULL, ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), true), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('api', 'App\\Security\\UserChecker', '.security.request_matcher.p4VlLPC', true, true, 'security.user.provider.concrete.domjudge_db_provider', NULL, 'App\\Security\\DOMJudgeIPAuthenticator', NULL, NULL, [0 => 'guard', 1 => 'anonymous'], NULL));
