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
class __TwigTemplate_8966ba64c19987dd40ebff51e30287ee3c552812bdbb49189b495efb6f80ceec extends \Twig\Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "arena", [], "any", false, false, false, 109), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">2</th>
                                        <td>FMLN</td>
                                        <td>";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "fmln", [], "any", false, false, false, 115), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">3</th>
                                        <td>GANA</td>
                                        <td>";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "gana", [], "any", false, false, false, 121), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">4</th>
                                        <td>PCN</td>
                                        <td>";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pcn", [], "any", false, false, false, 127), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>PDC</td>
                                        <td>";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pdc", [], "any", false, false, false, 133), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>CD</td>
                                        <td>";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "cd", [], "any", false, false, false, 140), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>PSD</td>
                                        <td>";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "psd", [], "any", false, false, false, 147), "html", null, true);
        echo "</td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <th scope=\"row\">5</th>
                                        <td>FPS</td>
                                        <td>";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "fps", [], "any", false, false, false, 154), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "arena", [], "any", false, false, false, 208), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "fmln", [], "any", false, false, false, 208), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "gana", [], "any", false, false, false, 208), "html", null, true);
        echo ",   ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pcn", [], "any", false, false, false, 208), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pdc", [], "any", false, false, false, 208), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "cd", [], "any", false, false, false, 208), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "psd", [], "any", false, false, false, 208), "html", null, true);
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
        return array (  361 => 239,  315 => 208,  292 => 188,  286 => 185,  280 => 182,  274 => 179,  268 => 176,  262 => 173,  256 => 170,  237 => 154,  227 => 147,  217 => 140,  207 => 133,  198 => 127,  189 => 121,  180 => 115,  171 => 109,  140 => 81,  125 => 68,  123 => 67,  119 => 65,  117 => 64,  78 => 28,  72 => 25,  66 => 22,  60 => 19,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Resultados:tabladiputado.html.twig", "/var/www/html/lyra/src/AppBundle/Resources/views/Resultados/tabladiputado.html.twig");
    }
}
