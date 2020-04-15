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
class __TwigTemplate_64a2945f924c58617ce70d0d2a56b2e84cf1fe3c74a869873600542ee4127e69 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Procesos:procesados.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Procesos:procesados.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["nombrecentro"]) || array_key_exists("nombrecentro", $context) ? $context["nombrecentro"] : (function () { throw new RuntimeError('Variable "nombrecentro" does not exist.', 94, $this->source); })()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 113, $this->source); })()), "ingresados", [], "any", false, false, false, 113));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 114
            echo "
   
    ";
            // line 116
            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 116, $this->source); })()) + 1);
            // line 117
            echo "
                                    <tr>
                                        <th scope=\"row\">";
            // line 119
            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 119, $this->source); })()), "html", null, true);
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
        $context["faltantes"] = ((isset($context["totaljrv"]) || array_key_exists("totaljrv", $context) ? $context["totaljrv"] : (function () { throw new RuntimeError('Variable "totaljrv" does not exist.', 133, $this->source); })()) - (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 133, $this->source); })()));
        // line 134
        echo "                                <p style=\"font-size: 24px; color: red;\">TOTAL JRV QUE FALTAN POR RECIBIR: <b> ";
        echo twig_escape_filter($this->env, (isset($context["faltantes"]) || array_key_exists("faltantes", $context) ? $context["faltantes"] : (function () { throw new RuntimeError('Variable "faltantes" does not exist.', 134, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["nombrecentro"]) || array_key_exists("nombrecentro", $context) ? $context["nombrecentro"] : (function () { throw new RuntimeError('Variable "nombrecentro" does not exist.', 153, $this->source); })()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 172, $this->source); })()), "faltantes", [], "any", false, false, false, 172));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 173
            echo "
   
    ";
            // line 175
            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 175, $this->source); })()) + 1);
            // line 176
            echo "
                                    <tr>
                                        <th scope=\"row\">";
            // line 178
            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 178, $this->source); })()), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  368 => 227,  361 => 223,  355 => 220,  349 => 217,  343 => 214,  337 => 211,  331 => 208,  325 => 205,  303 => 185,  292 => 180,  287 => 178,  283 => 176,  281 => 175,  277 => 173,  272 => 172,  270 => 171,  249 => 153,  226 => 134,  224 => 133,  215 => 126,  204 => 121,  199 => 119,  195 => 117,  193 => 116,  189 => 114,  184 => 113,  182 => 112,  161 => 94,  146 => 82,  131 => 69,  129 => 68,  125 => 66,  123 => 65,  84 => 29,  78 => 26,  72 => 23,  66 => 20,  60 => 17,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# empty Twig template #}
﻿<!DOCTYPE html>
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
                   <a href=\"{{path('jrv_seleccion')}}\"> 
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
                              PROCESADAS  {{nombrecentro}}
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
                                    {%set counter = 0%}
                                    {% for n in data.ingresados %}

   
    {%set counter = counter + 1%}

                                    <tr>
                                        <th scope=\"row\">{{counter}}</th>
                                       
                                        <td>{{n.jrvid}} </td>
                                        
                                    </tr>
                                   
                                    {%endfor%}
                                </tbody>
                            </table>
                                </br>
                                
                                
                                
                                </br>
                                {%set faltantes = totaljrv - counter%}
                                <p style=\"font-size: 24px; color: red;\">TOTAL JRV QUE FALTAN POR RECIBIR: <b> {{faltantes}} </b>
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
                                FALTANTES {{nombrecentro}}  
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
                                    {%set counter = 0%}
                                    {% for n in data.faltantes %}

   
    {%set counter = counter + 1%}

                                    <tr>
                                        <th scope=\"row\">{{counter}}</th>
                                       
                                        <td>{{n.id}} </td>
                                        
                                    </tr>
                                   
                                    {%endfor%}
                                </tbody>
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

</html>
", "AppBundle:Procesos:procesados.html.twig", "/var/www/html/lyra/src/AppBundle/Resources/views/Procesos/procesados.html.twig");
    }
}
