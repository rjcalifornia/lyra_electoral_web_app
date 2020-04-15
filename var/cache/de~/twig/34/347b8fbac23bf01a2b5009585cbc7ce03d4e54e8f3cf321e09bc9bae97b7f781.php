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

/* AppBundle:Inicio:advertencia-acta-duplicada.html.twig */
class __TwigTemplate_be15fd94f1edbbbfe34f0a9a84d4016e6e2d357945c2d5bb1f18bb294a4d7212 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Inicio:advertencia-acta-duplicada.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Inicio:advertencia-acta-duplicada.html.twig"));

        // line 1
        echo "﻿<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Welcome | Lyra Electoral App</title>
    <!-- Favicon-->
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

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
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=\"";
        // line 31
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
   
    ";
        // line 56
        $this->loadTemplate("layouts/topbar.html.twig", "AppBundle:Inicio:advertencia-acta-duplicada.html.twig", 56)->display($context);
        // line 57
        echo "    <section>
        
       ";
        // line 59
        $this->loadTemplate("layouts/sidebar.html.twig", "AppBundle:Inicio:advertencia-acta-duplicada.html.twig", 59)->display($context);
        // line 60
        echo "    </section>

    <section class=\"content\">
      
        <div class=\"container-fluid\">
           
  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"card\">
                         <div class=\"header\">
                <h2>Advertencia</h2>
            </div>
            <!-- Widgets -->
            <div class=\"row clearfix\">
                <div class=\"body\">
                    
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"alert alert-danger\">
                                <strong>JRV YA HA SIDO INGRESADA. CONTACTE AL ENCARGADO PARA VERIFICAR DATOS INGRESADOS</strong>  
                            </div>
                    
                    </br>
                    </br>
                    
                </div>
                    <div class=\"col-lg-12 col-md-12 col-sm-8 col-xs-10\">
                       <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" style=\"text-decoration:none\">
                  
                   <button type=\"button\" class=\"btn btn-block btn-lg btn-danger waves-effect\">
                   
                       REGRESAR A PAGINA PRINCIPAL
                   </button>
                              </a>
                         </div>
                ";
        // line 105
        echo "              </div>
            </div>
            <!-- #END# Widgets -->
           </div>
            </div>
         
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core Js -->
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Select Plugin Js -->
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-select/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>

    <!-- Slimscroll Plugin Js -->
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/node-waves/waves.js"), "html", null, true);
        echo "\"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-countto/jquery.countTo.js"), "html", null, true);
        echo "\"></script>

    
    <!-- ChartJs -->
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/chartjs/Chart.bundle.js"), "html", null, true);
        echo "\"></script>

   
    
    <!-- Custom Js -->
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/admin.js"), "html", null, true);
        echo "\"></script>
  

    <!-- Demo Js -->
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/demo.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Inicio:advertencia-acta-duplicada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 143,  218 => 139,  210 => 134,  203 => 130,  197 => 127,  191 => 124,  185 => 121,  179 => 118,  173 => 115,  161 => 105,  150 => 85,  123 => 60,  121 => 59,  117 => 57,  115 => 56,  87 => 31,  81 => 28,  73 => 23,  67 => 20,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Welcome | Lyra Electoral App</title>
    <!-- Favicon-->
    <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

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
   
    {% include 'layouts/topbar.html.twig' %}
    <section>
        
       {% include 'layouts/sidebar.html.twig' %}
    </section>

    <section class=\"content\">
      
        <div class=\"container-fluid\">
           
  <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"card\">
                         <div class=\"header\">
                <h2>Advertencia</h2>
            </div>
            <!-- Widgets -->
            <div class=\"row clearfix\">
                <div class=\"body\">
                    
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"alert alert-danger\">
                                <strong>JRV YA HA SIDO INGRESADA. CONTACTE AL ENCARGADO PARA VERIFICAR DATOS INGRESADOS</strong>  
                            </div>
                    
                    </br>
                    </br>
                    
                </div>
                    <div class=\"col-lg-12 col-md-12 col-sm-8 col-xs-10\">
                       <a href=\"{{ path('homepage')}}\" style=\"text-decoration:none\">
                  
                   <button type=\"button\" class=\"btn btn-block btn-lg btn-danger waves-effect\">
                   
                       REGRESAR A PAGINA PRINCIPAL
                   </button>
                              </a>
                         </div>
                {#<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                    <a href=\"{{ path('agregar_diputado')}}\" style=\"text-decoration:none\">
                    <div class=\"info-box bg-cyan hover-expand-effect\">
                        <div class=\"icon\">
                            <i class=\"material-icons\">forum</i>
                        </div>
                        <div class=\"content\">
                            <div class=\"text\">Agregar Acta Diputados</div>
                             </div>
                    </div>
                     </a>
                </div>#}
              </div>
            </div>
            <!-- #END# Widgets -->
           </div>
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

    <!-- Jquery CountTo Plugin Js -->
    <script src=\"{{ asset('assets/vendors/jquery-countto/jquery.countTo.js')}}\"></script>

    
    <!-- ChartJs -->
    <script src=\"{{ asset('assets/vendors/chartjs/Chart.bundle.js')}}\"></script>

   
    
    <!-- Custom Js -->
    <script src=\"{{ asset('assets/vendors/js/admin.js')}}\"></script>
  

    <!-- Demo Js -->
    <script src=\"{{ asset('assets/vendors/js/demo.js')}}\"></script>
</body>

</html>", "AppBundle:Inicio:advertencia-acta-duplicada.html.twig", "/var/www/html/lyra/src/AppBundle/Resources/views/Inicio/advertencia-acta-duplicada.html.twig");
    }
}
