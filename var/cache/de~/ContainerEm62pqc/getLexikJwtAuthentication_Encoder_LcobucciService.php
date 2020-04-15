<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lexik_jwt_authentication.encoder.lcobucci' shared service.

include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Encoder/JWTEncoderInterface.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Encoder/HeaderAwareJWTEncoderInterface.php';
include_once $this->targetDirs[3].'/vendor/lexik/jwt-authentication-bundle/Encoder/LcobucciJWTEncoder.php';

return $this->services['lexik_jwt_authentication.encoder.lcobucci'] = new \Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder(${($_ = isset($this->services['Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWSProvider\\JWSProviderInterface']) ? $this->services['Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWSProvider\\JWSProviderInterface'] : $this->load('getJWSProviderInterfaceService.php')) && false ?: '_'});