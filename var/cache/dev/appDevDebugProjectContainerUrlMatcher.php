<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/a')) {
            // acta_duplicada_error
            if ('/advertencia/acta-presidencial-duplicada' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::errorActaPresidencialAction',  '_route' => 'acta_duplicada_error',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_acta_duplicada_error;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'acta_duplicada_error'));
                }

                return $ret;
            }
            not_acta_duplicada_error:

            // administracion_agregar_transmisor
            if ('/administracion/transmisores/agregar' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\DevicesController::AgregarTransmisoresAction',  '_route' => 'administracion_agregar_transmisor',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_administracion_agregar_transmisor;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'administracion_agregar_transmisor'));
                }

                return $ret;
            }
            not_administracion_agregar_transmisor:

            if (0 === strpos($pathinfo, '/api/resources')) {
                // api_voting_centers
                if ('/api/resources/voting-centers' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\LyraApiController::getVotingCentersAction',  '_route' => 'api_voting_centers',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_api_voting_centers;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_voting_centers'));
                    }

                    return $ret;
                }
                not_api_voting_centers:

                // api_polling_stations
                if ('/api/resources/jrv' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\LyraApiController::getPollingStationsAction',  '_route' => 'api_polling_stations',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_api_polling_stations;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_polling_stations'));
                    }

                    return $ret;
                }
                not_api_polling_stations:

                // save_contact_api
                if ('/api/resources/save-results' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\LyraApiController::saveAppResultsApiAction',  '_route' => 'save_contact_api',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_save_contact_api;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'save_contact_api'));
                    }

                    return $ret;
                }
                not_save_contact_api:

                // show_resultss_api
                if ('/api/resources/reports/my-submissions' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\LyraApiController::ShowAllContactsAction',  '_route' => 'show_resultss_api',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_show_resultss_api;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'show_resultss_api'));
                    }

                    return $ret;
                }
                not_show_resultss_api:

                // api_auth_request
                if ('/api/resources/authentication/request' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\PhoneAuthApiController::RequestAuthenticationAction',  '_route' => 'api_auth_request',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_api_auth_request;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_auth_request'));
                    }

                    return $ret;
                }
                not_api_auth_request:

                // api_auth_check
                if ('/api/resources/authentication/check-device' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\PhoneAuthApiController::CheckDeviceAction',  '_route' => 'api_auth_check',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_api_auth_check;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'api_auth_check'));
                    }

                    return $ret;
                }
                not_api_auth_check:

            }

            // api_auth_login
            if ('/api/auth/login' === $pathinfo) {
                $ret = ['_route' => 'api_auth_login'];
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_api_auth_login;
                }

                return $ret;
            }
            not_api_auth_login:

            // agregar_acta_presidencial
            if ('/agregar-acta-presidencial' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\PresidencialController::AgregarActaConcejoAction',  '_route' => 'agregar_acta_presidencial',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_agregar_acta_presidencial;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'agregar_acta_presidencial'));
                }

                return $ret;
            }
            not_agregar_acta_presidencial:

            // api_auth_register
            if ('/auth/register' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\PruebaController::register',  '_route' => 'api_auth_register',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_api_auth_register;
                }

                return $ret;
            }
            not_api_auth_register:

        }

        // jrv_sector_electoral
        if ('/obtener-jrv-sector-electoral' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\PresidencialController::obtenerJuntaSectorAction',  '_route' => 'jrv_sector_electoral',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_jrv_sector_electoral;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'jrv_sector_electoral'));
            }

            return $ret;
        }
        not_jrv_sector_electoral:

        // jrv_seleccion
        if ('/jrv/seleccion' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ProcesadasController::SeleccionAction',  '_route' => 'jrv_seleccion',);
        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/resultados')) {
                // ver_resultados_presidenciales
                if ('/resultados/presidenciales/grafico' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ResultadosController::GraficoPresidencialAction',  '_route' => 'ver_resultados_presidenciales',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_ver_resultados_presidenciales;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ver_resultados_presidenciales'));
                    }

                    return $ret;
                }
                not_ver_resultados_presidenciales:

                // ver_resultados_presidenciales_tabla
                if ('/resultados-presidenciales/tabla' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\ResultadosController::TablaResultadosAction',  '_route' => 'ver_resultados_presidenciales_tabla',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_ver_resultados_presidenciales_tabla;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ver_resultados_presidenciales_tabla'));
                    }

                    return $ret;
                }
                not_ver_resultados_presidenciales_tabla:

                // resultados_home
                if ('/resultados' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ResultadosDiputadoController::InicioAction',  '_route' => 'resultados_home',);
                }

                // ver_resultados_diputado
                if ('/resultados/diputado/grafico' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ResultadosDiputadoController::GraficoAction',  '_route' => 'ver_resultados_diputado',);
                }

                // ver_resultados_diputado_tabla
                if ('/resultados/diputado/tabla' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ResultadosDiputadoController::TablaResultadosAction',  '_route' => 'ver_resultados_diputado_tabla',);
                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

        }

        elseif (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/lyra/administracion')) {
                // crear_nuevo_usuario
                if ('/lyra/administracion/agregar-usuario-sistema' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::NuevoAction',  '_route' => 'crear_nuevo_usuario',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_crear_nuevo_usuario;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'crear_nuevo_usuario'));
                    }

                    return $ret;
                }
                not_crear_nuevo_usuario:

                // usuarios_sistema_listado_general
                if ('/lyra/administracion/listado-general-usuarios-sistema' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::inicioAction',  '_route' => 'usuarios_sistema_listado_general',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_usuarios_sistema_listado_general;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'usuarios_sistema_listado_general'));
                    }

                    return $ret;
                }
                not_usuarios_sistema_listado_general:

                // editar_usuario_sistema
                if ('/lyra/administracion/editar-usuario-sistema' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\UsuariosController::EditarUsuarioAction',  '_route' => 'editar_usuario_sistema',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_editar_usuario_sistema;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'editar_usuario_sistema'));
                    }

                    return $ret;
                }
                not_editar_usuario_sistema:

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_security_login;
                    }

                    return $ret;
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_security_check;
                    }

                    return $ret;
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_logout;
                }

                return $ret;
            }
            not_fos_user_security_logout:

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
