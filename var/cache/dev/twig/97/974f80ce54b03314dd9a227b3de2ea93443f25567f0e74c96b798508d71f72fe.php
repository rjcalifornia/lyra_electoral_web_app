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
class __TwigTemplate_8d932d8b1c5e02010f8f395141160082382b5b5698de489b839a3f0734e6d9a3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Usuarios:listado-general-usuarios.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Usuarios:listado-general-usuarios.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 106, $this->source); })()), "usuarios", [], "any", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            echo " 
                                        ";
            // line 107
            $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 107, $this->source); })()) + 1);
            // line 108
            echo "                                    <tr>
                                        
                                            <td>";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 110, $this->source); })()), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  380 => 206,  375 => 204,  369 => 201,  365 => 200,  361 => 199,  357 => 198,  353 => 197,  349 => 196,  345 => 195,  341 => 194,  337 => 193,  326 => 185,  319 => 181,  313 => 178,  303 => 171,  297 => 168,  276 => 149,  259 => 138,  254 => 135,  246 => 132,  242 => 130,  240 => 129,  237 => 128,  233 => 126,  231 => 125,  228 => 124,  224 => 122,  222 => 121,  219 => 120,  215 => 118,  213 => 117,  210 => 116,  206 => 115,  200 => 112,  196 => 111,  192 => 110,  188 => 108,  186 => 107,  180 => 106,  174 => 103,  136 => 67,  134 => 66,  131 => 65,  129 => 64,  98 => 36,  93 => 34,  87 => 31,  81 => 28,  75 => 25,  69 => 22,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿<!DOCTYPE html>
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
    <link href=\"{{ asset('assets/vendors/bootstrap/css/bootstrap.css')}}\" rel=\"stylesheet\">

        <!-- Bootstrap Select Css -->
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css\" rel=\"stylesheet\" />

    <!-- Waves Effect Css -->
    <link href=\"{{ asset('assets/vendors/node-waves/waves.css')}}\" rel=\"stylesheet\" />

    <!-- Animation Css -->
    <link href=\"{{ asset('assets/vendors/animate-css/animate.css')}}\" rel=\"stylesheet\" />

    <!-- Sweet Alert Css -->
    <link href=\"{{ asset('assets/vendors/sweetalert/sweetalert.css')}}\" rel=\"stylesheet\" />

    <!-- Custom Css -->
    <link href=\"{{ asset('assets/vendors/css/style.css')}}\" rel=\"stylesheet\">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=\"{{ asset('assets/vendors/css/themes/all-themes.css')}}\" rel=\"stylesheet\" />
    
    <link href=\"{{ asset('assets/vendors/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}\" rel=\"stylesheet\">
    
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
      {% include 'layouts/topbar.html.twig' %}
    <section>
        {% include 'layouts/sidebar.html.twig' %}
    </section>

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
                                       {%set counter = 0 %} 
                                        
                                        
                                       {%for u in data.usuarios%} 
                                        {%set counter = counter + 1%}
                                    <tr>
                                        
                                            <td>{{counter}}</td>
                                            <td>{{u.username}}</td>
                                            <td>{{u.email}}</td>
                                            
                                            <td>
                                                {%for t in u.roles%}
                                                    
                                                    {%if t == 'ROLE_SUPER_ADMIN'%}
                                                        Administrador General
                                                    {%endif%}
                                                    
                                                    {%if t == 'ROLE_ADMIN'%}
                                                        Administrador de sistema
                                                    {%endif%}
                                                    
                                                    {%if t == 'ROLE_VIGILANTE'%}
                                                        Transmision de datos
                                                    {%endif%}
                                                    
                                                    {%if t == 'ROLE_REPORTE'%}
                                                        Reporte de resultados
                                                    {%endif%}
                                                    
                                                    
                                                {%endfor%}
                                            </td>
                                            
                                            <td>
                                                <a href=\"{{path('editar_usuario_sistema', {'usuarioid': u.id })}}\">
                              <button type=\"button\" class=\"btn btn-info btn-xs\">
                                  Editar usuario
                              </button> 
                              </a>
                                                
                                            </td>
                                            
                                        </tr>
                                        
                                        {%endfor%}
                                    </tbody>
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
    <script src=\"{{ asset('assets/vendors/jquery/jquery.min.js')}}\"></script>

    <!-- Bootstrap Core Js -->
    <script src=\"{{ asset('assets/vendors/bootstrap/js/bootstrap.js')}}\"></script>

    <!-- Select Plugin Js -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js\"></script>


    <!-- Slimscroll Plugin Js -->
    <script src=\"{{ asset('assets/vendors/jquery-slimscroll/jquery.slimscroll.js')}}\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"{{ asset('assets/vendors/node-waves/waves.js')}}\"></script>


    <!-- Demo Js -->
    <script src=\"{{ asset('assets/vendors/js/demo.js')}}\"></script>
    <script>
    \$(document).ready(function() {
    \$('.select4').select2();
});
    </script>
    
     <!-- Jquery DataTable Plugin Js -->
    <script src=\"{{ asset('assets/vendors/jquery-datatable/jquery.dataTables.js')}}\"></script>
    <script src=\"{{ asset('assets/vendors/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}\"></script>
    <script src=\"{{ asset('assets/vendors/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}\"></script>
    <script src=\"{{ asset('assets/vendors/jquery-datatable/extensions/export/buttons.flash.min.js')}}\"></script>
    <script src=\"{{ asset('assets/vendors/jquery-datatable/extensions/export/jszip.min.js')}}\"></script>
    <script src=\"{{ asset('assets/vendors/jquery-datatable/extensions/export/pdfmake.min.js')}}\"></script>
    <script src=\"{{ asset('assets/vendors/jquery-datatable/extensions/export/vfs_fonts.js')}}\"></script>
    <script src=\"{{ asset('assets/vendors/jquery-datatable/extensions/export/buttons.html5.min.js')}}\"></script>
    <script src=\"{{ asset('assets/vendors/jquery-datatable/extensions/export/buttons.print.min.js')}}\"></script>
    
        <!-- Custom Js -->
    <script src=\"{{ asset('assets/vendors/js/admin.js')}}\"></script>

        <script src=\"{{ asset('assets/vendors/js/pages/tables/jquery-datatable.js')}}\"></script>

</body>

</html>", "AppBundle:Usuarios:listado-general-usuarios.html.twig", "/var/www/html/lyra/src/AppBundle/Resources/views/Usuarios/listado-general-usuarios.html.twig");
    }
}
