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

/* AppBundle:Resultados:tabladiputado.html.twig */
class __TwigTemplate_7cf0ceaeb15dc5f703f9f8c55d41363dcefae956895cde6d4e98d08aac7aa6d9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Resultados:tabladiputado.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Resultados:tabladiputado.html.twig"));

        // line 1
        echo "﻿<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Tabla Resultados Diputado</title>
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
        $this->loadTemplate("layouts/topbar.html.twig", "AppBundle:Resultados:tabladiputado.html.twig", 64)->display($context);
        // line 65
        echo "    <!-- #Top Bar -->
    <section>
       ";
        // line 67
        $this->loadTemplate("layouts/sidebar.html.twig", "AppBundle:Resultados:tabladiputado.html.twig", 67)->display($context);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ver_resultados_concejo_tabla");
        echo "\"> <button class=\"btn btn-danger btn-lg btn-block waves-effect\" type=\"button\">ACTUALIZAR RESULTADOS </button>
                       </a>
                                </div>
                <!-- Pie Chart -->
                <div class=\"row clearfix\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2>
                                RESUMEN RESULTADOS PRELIMINARES ASAMBLEA LEGISLATIVA
                                <small>Reporte de resultados para Diputados</small>
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
                                        <td>ARENA</td>
                                        <td>";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "arena", [], "any", false, false, false, 109), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>FMLN</td>
                                        <td>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 115, $this->source); })()), "fmln", [], "any", false, false, false, 115), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>GANA</td>
                                        <td>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 121, $this->source); })()), "gana", [], "any", false, false, false, 121), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">4</th>
                                        <td>PCN</td>
                                        <td>";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 127, $this->source); })()), "pcn", [], "any", false, false, false, 127), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>PDC</td>
                                        <td>";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 133, $this->source); })()), "pdc", [], "any", false, false, false, 133), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>CD</td>
                                        <td>";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 140, $this->source); })()), "cd", [], "any", false, false, false, 140), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>PSD</td>
                                        <td>";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 147, $this->source); })()), "psd", [], "any", false, false, false, 147), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>FPS</td>
                                        <td>";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 154, $this->source); })()), "fps", [], "any", false, false, false, 154), "html", null, true);
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
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core Js -->
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Select Plugin Js -->
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-select/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>

    <!-- Slimscroll Plugin Js -->
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/node-waves/waves.js"), "html", null, true);
        echo "\"></script>

    <!-- Chart Plugins Js -->
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/chartjs/Chart.bundle.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Js -->
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/admin.js"), "html", null, true);
        echo "\"></script>
    <script>
        
        \$(function () {

    new Chart(document.getElementById(\"bar_chart_alcalde\").getContext(\"2d\"), getChartJs('bar2'));

    
});

function getChartJs(type) {
    var config = null;

    if (type === 'bar2') {
        config = {
            type: 'bar',
            data: {
                labels: [\"ARENA\", \"FMLN\", \"GANA\", \"PCN\", \"PDC\", \"CD\", \"PSD\",   ],
                datasets: [{
                    label: \"Votos\",
                    data: [";
        // line 208
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 208, $this->source); })()), "arena", [], "any", false, false, false, 208), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 208, $this->source); })()), "fmln", [], "any", false, false, false, 208), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 208, $this->source); })()), "gana", [], "any", false, false, false, 208), "html", null, true);
        echo ",   ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 208, $this->source); })()), "pcn", [], "any", false, false, false, 208), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 208, $this->source); })()), "pdc", [], "any", false, false, false, 208), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 208, $this->source); })()), "cd", [], "any", false, false, false, 208), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 208, $this->source); })()), "psd", [], "any", false, false, false, 208), "html", null, true);
        echo ",],
                    backgroundColor: 'rgba(0, 127, 220, 0.9)'
                }, ]
            },
            options: {
                responsive: true,
                legend: false,
                 tooltips: {
            callbacks: {
                label: function(tooltipItem, data) {
                    var allData = data.datasets[tooltipItem.datasetIndex].data;
                    var tooltipLabel = data.labels[tooltipItem.index];
                    var tooltipData = allData[tooltipItem.index];
                    var total = 0;
                    for (var i in allData) {
                        total += allData[i];
                    }
                    var tooltipPercentage = Math.round((tooltipData / total) * 100);
                    return tooltipLabel + ': ' + tooltipData + ' (' + tooltipPercentage + '%)';
                }
            }
            }
        }}
    }
    
    return config;
}
        
    </script>

    <!-- Demo Js -->
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/demo.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Resultados:tabladiputado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 239,  321 => 208,  298 => 188,  292 => 185,  286 => 182,  280 => 179,  274 => 176,  268 => 173,  262 => 170,  243 => 154,  233 => 147,  223 => 140,  213 => 133,  204 => 127,  195 => 121,  186 => 115,  177 => 109,  146 => 81,  131 => 68,  129 => 67,  125 => 65,  123 => 64,  84 => 28,  78 => 25,  72 => 22,  66 => 19,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Tabla Resultados Diputado</title>
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
                   <a href=\"{{path('ver_resultados_concejo_tabla')}}\"> <button class=\"btn btn-danger btn-lg btn-block waves-effect\" type=\"button\">ACTUALIZAR RESULTADOS </button>
                       </a>
                                </div>
                <!-- Pie Chart -->
                <div class=\"row clearfix\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2>
                                RESUMEN RESULTADOS PRELIMINARES ASAMBLEA LEGISLATIVA
                                <small>Reporte de resultados para Diputados</small>
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
                                        <td>ARENA</td>
                                        <td>{{data.arena}}</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>FMLN</td>
                                        <td>{{data.fmln}}</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>GANA</td>
                                        <td>{{data.gana}}</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">4</th>
                                        <td>PCN</td>
                                        <td>{{data.pcn}}</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>PDC</td>
                                        <td>{{data.pdc}}</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>CD</td>
                                        <td>{{data.cd}}</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>PSD</td>
                                        <td>{{data.psd}}</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>FPS</td>
                                        <td>{{data.fps}}</td>
                                        
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
    <script>
        
        \$(function () {

    new Chart(document.getElementById(\"bar_chart_alcalde\").getContext(\"2d\"), getChartJs('bar2'));

    
});

function getChartJs(type) {
    var config = null;

    if (type === 'bar2') {
        config = {
            type: 'bar',
            data: {
                labels: [\"ARENA\", \"FMLN\", \"GANA\", \"PCN\", \"PDC\", \"CD\", \"PSD\",   ],
                datasets: [{
                    label: \"Votos\",
                    data: [{{data.arena}}, {{data.fmln}}, {{data.gana}},   {{data.pcn}}, {{data.pdc}}, {{data.cd}}, {{data.psd}},],
                    backgroundColor: 'rgba(0, 127, 220, 0.9)'
                }, ]
            },
            options: {
                responsive: true,
                legend: false,
                 tooltips: {
            callbacks: {
                label: function(tooltipItem, data) {
                    var allData = data.datasets[tooltipItem.datasetIndex].data;
                    var tooltipLabel = data.labels[tooltipItem.index];
                    var tooltipData = allData[tooltipItem.index];
                    var total = 0;
                    for (var i in allData) {
                        total += allData[i];
                    }
                    var tooltipPercentage = Math.round((tooltipData / total) * 100);
                    return tooltipLabel + ': ' + tooltipData + ' (' + tooltipPercentage + '%)';
                }
            }
            }
        }}
    }
    
    return config;
}
        
    </script>

    <!-- Demo Js -->
    <script src=\"{{ asset('assets/vendors/js/demo.js')}}\"></script>
</body>

</html>", "AppBundle:Resultados:tabladiputado.html.twig", "/var/www/html/lyra/src/AppBundle/Resources/views/Resultados/tabladiputado.html.twig");
    }
}
