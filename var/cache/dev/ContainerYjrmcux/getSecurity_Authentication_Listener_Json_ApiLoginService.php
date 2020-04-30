<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.json.api_login' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Firewall/UsernamePasswordJsonAuthenticationListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Authentication/AuthenticationSuccessHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Authentication/CustomAuthenticationSuccessHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Authentication/AuthenticationFailureHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Authentication/CustomAuthenticationFailureHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Session/SessionAuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Session/SessionAuthenticationStrategy.php';

$this->services['security.authentication.listener.json.api_login'] = $instance = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordJsonAuthenticationListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load('getSecurity_HttpUtilsService.php')) && false ?: '_'}, 'api_login', new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(${($_ = isset($this->services['lexik_jwt_authentication.handler.authentication_success']) ? $this->services['lexik_jwt_authentication.handler.authentication_success'] : $this->load('getLexikJwtAuthentication_Handler_AuthenticationSuccessService.php')) && false ?: '_'}, [], 'api_login'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler(${($_ = isset($this->services['lexik_jwt_authentication.handler.authentication_failure']) ? $this->services['lexik_jwt_authentication.handler.authentication_failure'] : $this->load('getLexikJwtAuthentication_Handler_AuthenticationFailureService.php')) && false ?: '_'}, []), ['check_path' => '/api/auth/login', 'use_forward' => false, 'require_previous_session' => false, 'username_path' => 'username', 'password_path' => 'password'], ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->load('getPropertyAccessorService.php')) && false ?: '_'});

$instance->setSessionAuthenticationStrategy(${($_ = isset($this->services['security.authentication.session_strategy.api_login']) ? $this->services['security.authentication.session_strategy.api_login'] : ($this->services['security.authentication.session_strategy.api_login'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('none'))) && false ?: '_'});

return $instance;