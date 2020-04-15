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

/* AppBundle:Procesos:procesados.html.twig */
class __TwigTemplate_46e562c80a724d6abb6c22b6d2c0c84e1f655b2adde3ea140dd810498f4922ea extends \Twig\Template
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
        // line 2
        echo "﻿<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Lyra Presidential App</title>
    <!-- Favicon-->
    <link rel=\"icon\" href=\"../../favicon.ico\" type=\"image/x-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap Core Css -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Waves Effect Css -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/node-waves/waves.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Animation Css -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/animate-css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Custom Css -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/themes/all-themes.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
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
    <div class=\"search-bar\">
        <div class=\"search-icon\">
            <i class=\"material-icons\">search</i>
        </div>
        <input type=\"text\" placeholder=\"START TYPING...\">
        <div class=\"close-search\">
            <i class=\"material-icons\">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
";
        // line 65
        $this->loadTemplate("layouts/topbar.html.twig", "AppBundle:Procesos:procesados.html.twig", 65)->display($context);
        // line 66
        echo "    <!-- #Top Bar -->
    <section>
       ";
        // line 68
        $this->loadTemplate("layouts/sidebar.html.twig", "AppBundle:Procesos:procesados.html.twig", 68)->display($context);
        // line 69
        echo "    </section>

    <section class=\"content\">
        <div class=\"container-fluid\">
            
            <div class=\"row clearfix\">
             
              
                
              
</div>
            <div class=\"row clearfix\">
          <div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
                   <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jrv_seleccion");
        echo "\"> 
                       <button 
                           class=\"btn btn-danger btn-lg btn-block waves-effect\" 
                           type=\"button\">REGRESAR</button>
                       </a>
                                </div>
                <!-- Pie Chart -->
                <div class=\"row clearfix\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2>
                              PROCESADAS  ";
        // line 94
        echo twig_escape_filter($this->env, ($context["nombrecentro"] ?? null), "html", null, true);
        echo "
                                <small>Reporte de JRV Procesadas</small>
                            </h2>
                            <ul class=\"header-dropdown m-r--5\">
                                 
                            </ul>
                        </div>
                        <div class=\"body table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        
                                        <th>JRV Recibidas</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 112
        $context["counter"] = 0;
        // line 113
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "ingresados", [], "any", false, false, false, 113));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 114
            echo "
   
    ";
            // line 116
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 117
            echo "
                                    <tr>
                                        <th scope=\"row\">";
            // line 119
            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
            echo "</th>
                                       
                                        <td>";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "jrvid", [], "any", false, false, false, 121), "html", null, true);
            echo " </td>
                                        
                                    </tr>
                                   
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                                </tbody>
                            </table>
                                </br>
                                
                                
                                
                                </br>
                                ";
        // line 133
        $context["faltantes"] = (($context["totaljrv"] ?? null) - ($context["counter"] ?? null));
        // line 134
        echo "                                <p style=\"font-size: 24px; color: red;\">TOTAL JRV QUE FALTAN POR RECIBIR: <b> ";
        echo twig_escape_filter($this->env, ($context["faltantes"] ?? null), "html", null, true);
        echo " </b>
                       </p> </div>
                       
                       
                       
                    </div>
                </div>
            </div>
                <!-- #END# Pie Chart -->
                
                
                
                
                 <!-- Pie Chart -->
                <div class=\"row clearfix\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2>
                                FALTANTES ";
        // line 153
        echo twig_escape_filter($this->env, ($context["nombrecentro"] ?? null), "html", null, true);
        echo "  
                                <small>Reporte de JRV Faltantes</small>
                            </h2>
                            <ul class=\"header-dropdown m-r--5\">
                                 
                            </ul>
                        </div>
                        <div class=\"body table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        
                                        <th>JRV Faltantes</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 171
        $context["counter"] = 0;
        // line 172
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "faltantes", [], "any", false, false, false, 172));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 173
            echo "
   
    ";
            // line 175
            $context["counter"] = (($context["counter"] ?? null) + 1);
            // line 176
            echo "
                                    <tr>
                                        <th scope=\"row\">";
            // line 178
            echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
            echo "</th>
                                       
                                        <td>";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "id", [], "any", false, false, false, 180), "html", null, true);
            echo " </td>
                                        
                                    </tr>
                                   
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "                                </tbody>
                            </table>
                                </br>
                                
                                
                                
                                </br>
                                </div>
                       
                       
                       
                    </div>
                </div>
            </div>
                <!-- #END# Pie Chart -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core Js -->
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Select Plugin Js -->
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-select/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>

    <!-- Slimscroll Plugin Js -->
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/node-waves/waves.js"), "html", null, true);
        echo "\"></script>

    <!-- Chart Plugins Js -->
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/chartjs/Chart.bundle.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Js -->
    <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/admin.js"), "html", null, true);
        echo "\"></script>
    

    <!-- Demo Js -->
    <script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/demo.js"), "html", null, true);
        echo "\"></script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Procesos:procesados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 227,  355 => 223,  349 => 220,  343 => 217,  337 => 214,  331 => 211,  325 => 208,  319 => 205,  297 => 185,  286 => 180,  281 => 178,  277 => 176,  275 => 175,  271 => 173,  266 => 172,  264 => 171,  243 => 153,  220 => 134,  218 => 133,  209 => 126,  198 => 121,  193 => 119,  189 => 117,  187 => 116,  183 => 114,  178 => 113,  176 => 112,  155 => 94,  140 => 82,  125 => 69,  123 => 68,  119 => 66,  117 => 65,  78 => 29,  72 => 26,  66 => 23,  60 => 20,  54 => 17,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Procesos:procesados.html.twig", "/var/www/html/lyra/src/AppBundle/Resources/views/Procesos/procesados.html.twig");
    }
}
