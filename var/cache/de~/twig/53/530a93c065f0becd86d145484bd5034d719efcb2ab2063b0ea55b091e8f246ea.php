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

/* AppBundle:Resultados:tabla.html.twig */
class __TwigTemplate_66b4e6e210247254b530aefa058dad2a73c4be5bdcf47480f386612484053588 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Resultados:tabla.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Resultados:tabla.html.twig"));

        // line 1
        echo "﻿<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Tabla Resultados Presidenciales</title>
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

    <!-- Waves Effect Css -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/node-waves/waves.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Animation Css -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/animate-css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Custom Css -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=\"";
        // line 28
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
        // line 64
        $this->loadTemplate("layouts/topbar.html.twig", "AppBundle:Resultados:tabla.html.twig", 64)->display($context);
        // line 65
        echo "    <!-- #Top Bar -->
    <section>
       ";
        // line 67
        $this->loadTemplate("layouts/sidebar.html.twig", "AppBundle:Resultados:tabla.html.twig", 67)->display($context);
        // line 68
        echo "    </section>

    <section class=\"content\">
        <div class=\"container-fluid\">
            
            <div class=\"row clearfix\">
             
              
                
              
</div>
            <div class=\"row clearfix\">
          <div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
                   <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ver_resultados_presidenciales_tabla");
        echo "\"> <button class=\"btn btn-danger btn-lg btn-block waves-effect\" type=\"button\">ACTUALIZAR RESULTADOS </button>
                       </a>
                                </div>
                <!-- Pie Chart -->
                <div class=\"row clearfix\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2>
                                RESUMEN RESULTADOS PRELIMINARES PRESIDENCIALES
                                <small>Reporte de resultados </small>
                            </h2>
                            
                        </div>
                        <div class=\"body table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>PARTIDO</th>
                                        <th>CANTIDAD DE VOTOS</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                     <tr>
                                        <th scope=\"row\">1</th>
                                        <td>FMLN</td>
                                        <td>";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 110, $this->source); })()), "fmln", [], "any", false, false, false, 110), "html", null, true);
        echo "</td>
                                        
                                    </tr> 
                                    
                                    
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>GANA</td>
                                        <td>";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 118, $this->source); })()), "gana", [], "any", false, false, false, 118), "html", null, true);
        echo "</td>
                                        
                                    </tr> 
                                    
                                     <tr>
                                        <th scope=\"row\">3</th>
                                        <td>VAMOS</td>
                                        <td>";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 125, $this->source); })()), "vamos", [], "any", false, false, false, 125), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th scope=\"row\">4</th>
                                        <td>ARENA</td>
                                        <td>";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 133, $this->source); })()), "arena", [], "any", false, false, false, 133), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                   
                                    
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>PCN</td>
                                        <td>";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 141, $this->source); })()), "pcn", [], "any", false, false, false, 141), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">6</th>
                                        <td>PDC</td>
                                        <td>";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 147, $this->source); })()), "pdc", [], "any", false, false, false, 147), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    
                                    
                                    
                                    <tr>
                                        <th scope=\"row\">7</th>
                                        <td>DS</td>
                                        <td>";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 156, $this->source); })()), "ds", [], "any", false, false, false, 156), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    
                                    
                                     <tr>
                                        <th scope=\"row\">8</th>
                                        <td>ARENA-PCN-PDC-DS</td>
                                        <td>";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 164, $this->source); })()), "coalicion", [], "any", false, false, false, 164), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
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
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core Js -->
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Select Plugin Js -->
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-select/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>

    <!-- Slimscroll Plugin Js -->
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/node-waves/waves.js"), "html", null, true);
        echo "\"></script>

    <!-- Chart Plugins Js -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/chartjs/Chart.bundle.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Js -->
    <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/admin.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Demo Js -->
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/demo.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Resultados:tabla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 201,  308 => 198,  302 => 195,  296 => 192,  290 => 189,  284 => 186,  278 => 183,  272 => 180,  253 => 164,  242 => 156,  230 => 147,  221 => 141,  210 => 133,  199 => 125,  189 => 118,  178 => 110,  146 => 81,  131 => 68,  129 => 67,  125 => 65,  123 => 64,  84 => 28,  78 => 25,  72 => 22,  66 => 19,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Tabla Resultados Presidenciales</title>
    <!-- Favicon-->
    <link rel=\"icon\" href=\"../../favicon.ico\" type=\"image/x-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Bootstrap Core Css -->
    <link href=\"{{ asset('assets/vendors/bootstrap/css/bootstrap.css')}}\" rel=\"stylesheet\">

    <!-- Waves Effect Css -->
    <link href=\"{{ asset('assets/vendors/node-waves/waves.css')}}\" rel=\"stylesheet\" />

    <!-- Animation Css -->
    <link href=\"{{ asset('assets/vendors/animate-css/animate.css')}}\" rel=\"stylesheet\" />

    <!-- Custom Css -->
    <link href=\"{{ asset('assets/vendors/css/style.css')}}\" rel=\"stylesheet\">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=\"{{ asset('assets/vendors/css/themes/all-themes.css')}}\" rel=\"stylesheet\" />
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
{% include 'layouts/topbar.html.twig' %}
    <!-- #Top Bar -->
    <section>
       {% include 'layouts/sidebar.html.twig' %}
    </section>

    <section class=\"content\">
        <div class=\"container-fluid\">
            
            <div class=\"row clearfix\">
             
              
                
              
</div>
            <div class=\"row clearfix\">
          <div class=\"col-xs-6 col-sm-6 col-md-3 col-lg-3\">
                   <a href=\"{{path('ver_resultados_presidenciales_tabla')}}\"> <button class=\"btn btn-danger btn-lg btn-block waves-effect\" type=\"button\">ACTUALIZAR RESULTADOS </button>
                       </a>
                                </div>
                <!-- Pie Chart -->
                <div class=\"row clearfix\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2>
                                RESUMEN RESULTADOS PRELIMINARES PRESIDENCIALES
                                <small>Reporte de resultados </small>
                            </h2>
                            
                        </div>
                        <div class=\"body table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>PARTIDO</th>
                                        <th>CANTIDAD DE VOTOS</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                     <tr>
                                        <th scope=\"row\">1</th>
                                        <td>FMLN</td>
                                        <td>{{data.fmln}}</td>
                                        
                                    </tr> 
                                    
                                    
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>GANA</td>
                                        <td>{{data.gana}}</td>
                                        
                                    </tr> 
                                    
                                     <tr>
                                        <th scope=\"row\">3</th>
                                        <td>VAMOS</td>
                                        <td>{{data.vamos}}</td>
                                        
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th scope=\"row\">4</th>
                                        <td>ARENA</td>
                                        <td>{{data.arena}}</td>
                                        
                                    </tr>
                                   
                                    
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>PCN</td>
                                        <td>{{data.pcn}}</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">6</th>
                                        <td>PDC</td>
                                        <td>{{data.pdc}}</td>
                                        
                                    </tr>
                                    
                                    
                                    
                                    <tr>
                                        <th scope=\"row\">7</th>
                                        <td>DS</td>
                                        <td>{{data.ds}}</td>
                                        
                                    </tr>
                                    
                                    
                                     <tr>
                                        <th scope=\"row\">8</th>
                                        <td>ARENA-PCN-PDC-DS</td>
                                        <td>{{data.coalicion}}</td>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                <!-- #END# Pie Chart -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src=\"{{ asset('assets/vendors/jquery/jquery.min.js')}}\"></script>

    <!-- Bootstrap Core Js -->
    <script src=\"{{ asset('assets/vendors/bootstrap/js/bootstrap.js')}}\"></script>

    <!-- Select Plugin Js -->
    <script src=\"{{ asset('assets/vendors/bootstrap-select/js/bootstrap-select.js')}}\"></script>

    <!-- Slimscroll Plugin Js -->
    <script src=\"{{ asset('assets/vendors/jquery-slimscroll/jquery.slimscroll.js')}}\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"{{ asset('assets/vendors/node-waves/waves.js')}}\"></script>

    <!-- Chart Plugins Js -->
    <script src=\"{{ asset('assets/vendors/chartjs/Chart.bundle.js')}}\"></script>

    <!-- Custom Js -->
    <script src=\"{{ asset('assets/vendors/js/admin.js')}}\"></script>
    
    <!-- Demo Js -->
    <script src=\"{{ asset('assets/vendors/js/demo.js')}}\"></script>
</body>

</html>", "AppBundle:Resultados:tabla.html.twig", "/var/www/html/lyra/src/AppBundle/Resources/views/Resultados/tabla.html.twig");
    }
}
