<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* AppBundle:Usuarios:listado-general-usuarios.html.twig */
class __TwigTemplate_c4c2959464dad9e883b89982dbb02cc4c199680ee60aec72cab65790d32414ff extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "﻿<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Listado general de usuarios | Lyra Electoral App</title>
    <!-- Favicon-->
    <link rel=\"icon\" href=\"../../favicon.ico\" type=\"image/x-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap Core Css -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Bootstrap Select Css -->
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />

    <!-- Waves Effect Css -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/node-waves/waves.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Animation Css -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/animate-css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Sweet Alert Css -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/sweetalert/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Custom Css -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/themes/all-themes.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
</head>

<body class=\"theme-red\">
    <!-- Page Loader -->
    <div class=\"page-loader-wrapper\">
        <div class=\"loader\">
            <div class=\"preloader\">
                <div class=\"spinner-layer pl-red\">
                    <div class=\"circle-clipper left\">
                        <div class=\"circle\"></div>
                    </div>
                    <div class=\"circle-clipper right\">
                        <div class=\"circle\"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class=\"overlay\"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
   
    <!-- #END# Search Bar -->
      ";
        // line 64
        $this->loadTemplate("layouts/topbar.html.twig", "AppBundle:Usuarios:listado-general-usuarios.html.twig", 64)->display($context);
        // line 65
        echo "    <section>
        ";
        // line 66
        $this->loadTemplate("layouts/sidebar.html.twig", "AppBundle:Usuarios:listado-general-usuarios.html.twig", 66)->display($context);
        // line 67
        echo "    </section>

    <section class=\"content\">
        <div class=\"container-fluid\">
           

            <!-- Vertical Layout -->
            <div class=\"row clearfix\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2>
                                Listado general de usuarios
                            </h2>
                          
                        </div>
                        <div class=\"body\">
                             <div class=\"table-responsive\">
                                <div id=\"DataTables_Table_0_wrapper\" class=\"dataTables_wrapper form-inline dt-bootstrap\">
                                   
                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <table class=\"table table-bordered table-striped table-hover js-basic-example dataTable\" id=\"DataTables_Table_0\" role=\"grid\" aria-describedby=\"DataTables_Table_0_info\">
                                    <thead>
                                        <th>#</th>
                                        <th>Usuario </th>
                                            
                                         <th>Correo</th>
                                        
                                         <th>Tipo de cuenta</th>
                                        
                                        <th>Opciones</th>
                                        
                                           </thead>
                                    
                                    <tbody>
                                       ";
        // line 103
        $context["counter"] = 0;
        echo " 
                                        
                                        
                                       ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "usuarios", [], "any", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            echo " 
                                        ";
            // line 107
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 108
            echo "                                    <tr>
                                        
                                            <td>";
            // line 110
            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
            echo "</td>
                                            <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "username", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                                            <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
                                            
                                            <td>
                                                ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["u"], "roles", [], "any", false, false, false, 115));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 116
                echo "                                                    
                                                    ";
                // line 117
                if (($context["t"] == "ROLE_SUPER_ADMIN")) {
                    // line 118
                    echo "                                                        Administrador General
                                                    ";
                }
                // line 120
                echo "                                                    
                                                    ";
                // line 121
                if (($context["t"] == "ROLE_ADMIN")) {
                    // line 122
                    echo "                                                        Administrador de sistema
                                                    ";
                }
                // line 124
                echo "                                                    
                                                    ";
                // line 125
                if (($context["t"] == "ROLE_VIGILANTE")) {
                    // line 126
                    echo "                                                        Transmision de datos
                                                    ";
                }
                // line 128
                echo "                                                    
                                                    ";
                // line 129
                if (($context["t"] == "ROLE_REPORTE")) {
                    // line 130
                    echo "                                                        Reporte de resultados
                                                    ";
                }
                // line 132
                echo "                                                    
                                                    
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                                            </td>
                                            
                                            <td>
                                                <a href=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_usuario_sistema", ["usuarioid" => twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 138)]), "html", null, true);
            echo "\">
                              <button type=\"button\" class=\"btn btn-info btn-xs\">
                                  Editar usuario
                              </button> 
                              </a>
                                                
                                            </td>
                                            
                                        </tr>
                                        
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                                    </tbody>
                                </table></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
  
            
           
          
           
          
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core Js -->
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Select Plugin Js -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js\"></script>


    <!-- Slimscroll Plugin Js -->
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/node-waves/waves.js"), "html", null, true);
        echo "\"></script>


    <!-- Demo Js -->
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/demo.js"), "html", null, true);
        echo "\"></script>
    <script>
    \$(document).ready(function() {
    \$('.select4').select2();
});
    </script>
    
     <!-- Jquery DataTable Plugin Js -->
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-datatable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-datatable/extensions/export/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-datatable/extensions/export/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-datatable/extensions/export/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-datatable/extensions/export/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-datatable/extensions/export/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-datatable/extensions/export/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-datatable/extensions/export/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    
        <!-- Custom Js -->
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/admin.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/pages/tables/jquery-datatable.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "AppBundle:Usuarios:listado-general-usuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 206,  369 => 204,  363 => 201,  359 => 200,  355 => 199,  351 => 198,  347 => 197,  343 => 196,  339 => 195,  335 => 194,  331 => 193,  320 => 185,  313 => 181,  307 => 178,  297 => 171,  291 => 168,  270 => 149,  253 => 138,  248 => 135,  240 => 132,  236 => 130,  234 => 129,  231 => 128,  227 => 126,  225 => 125,  222 => 124,  218 => 122,  216 => 121,  213 => 120,  209 => 118,  207 => 117,  204 => 116,  200 => 115,  194 => 112,  190 => 111,  186 => 110,  182 => 108,  180 => 107,  174 => 106,  168 => 103,  130 => 67,  128 => 66,  125 => 65,  123 => 64,  92 => 36,  87 => 34,  81 => 31,  75 => 28,  69 => 25,  63 => 22,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Usuarios:listado-general-usuarios.html.twig", "/var/www/html/lyra/src/AppBundle/Resources/views/Usuarios/listado-general-usuarios.html.twig");
    }
}
