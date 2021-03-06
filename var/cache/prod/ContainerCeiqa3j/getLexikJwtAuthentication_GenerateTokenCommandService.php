<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'lexik_jwt_authentication.generate_token_command' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Command/GenerateTokenCommand.php';

$this->services['lexik_jwt_authentication.generate_token_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateTokenCommand(${($_ = isset($this->services['lexik_jwt_authentication.jwt_manager']) ? $this->services['lexik_jwt_authentication.jwt_manager'] : $this->load('getLexikJwtAuthentication_JwtManagerService.php')) && false ?: '_'}, new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['security.user.provider.concrete.chain_provider']) ? $this->services['security.user.provider.concrete.chain_provider'] : $this->load('getSecurity_User_Provider_Concrete_ChainProviderService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['security.user.provider.concrete.in_memory']) ? $this->services['security.user.provider.concrete.in_memory'] : $this->load('getSecurity_User_Provider_Concrete_InMemoryService.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['fos_user.user_provider.username']) ? $this->services['fos_user.user_provider.username'] : $this->load('getFosUser_UserProvider_UsernameService.php')) && false ?: '_'};
}, 3));

$instance->setName('lexik:jwt:generate-token');

return $instance;
