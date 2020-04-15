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

/* AppBundle:Usuarios:nuevo.html.twig */
class __TwigTemplate_07747f69d3b32ea2e3da31a402e1c5c41dcbab91a396840fa051befb88ee6984 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Usuarios:nuevo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Usuarios:nuevo.html.twig"));

        // line 1
        echo "﻿<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Agregar usuario | Lyra Electoral App</title>
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
        // line 62
        $this->loadTemplate("layouts/topbar.html.twig", "AppBundle:Usuarios:nuevo.html.twig", 62)->display($context);
        // line 63
        echo "    <section>
        ";
        // line 64
        $this->loadTemplate("layouts/sidebar.html.twig", "AppBundle:Usuarios:nuevo.html.twig", 64)->display($context);
        // line 65
        echo "    </section>

    <section class=\"content\">
        <div class=\"container-fluid\">
           

            <!-- Vertical Layout -->
            <div class=\"row clearfix\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2>
                                Agregar un nuevo usuario
                            </h2>
                          
                        </div>
                        <div class=\"body\">
                            ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'form_start');
        echo "
                            
                            
                            
                            <label for=\"email_address\">Usuario:</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "username", [], "any", false, false, false, 89), 'widget');
        echo "

                                </div>
                            </div>
                                    
                                    
                            <label for=\"email_address\">Correo electronico:</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "email", [], "any", false, false, false, 98), 'widget');
        echo "

                                </div>
                            </div>
                                    
                            <label for=\"email_address\">Contrasena:</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "plainPassword", [], "any", false, false, false, 106), 'widget');
        echo "

                                </div>
                            </div>
                                    
                                    
                            <label for=\"email_address\">Tipo de cuenta:</label>
                            <div class=\"form-group\">
                                <div>
                                    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "roles", [], "any", false, false, false, 115), 'widget');
        echo "

                                </div>
                            </div>
                                    
                                    
                            <label for=\"email_address\">Estado de cuenta:</label>
                            <div class=\"form-group\">
                                <div>
                                    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "enabled", [], "any", false, false, false, 124), 'widget');
        echo "

                                </div>
                            </div>
                                        
                                   
                                        
                                
                                        
                                <br>
                                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "guardar", [], "any", false, false, false, 134), 'widget');
        echo "
                               
                            ";
        // line 136
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
  
            
           
          
           
          
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core Js -->
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Select Plugin Js -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js\"></script>


    <!-- Slimscroll Plugin Js -->
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/node-waves/waves.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Js -->
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/admin.js"), "html", null, true);
        echo "\"></script>

    <!-- Demo Js -->
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/demo.js"), "html", null, true);
        echo "\"></script>
    <script>
    \$(document).ready(function() {
    \$('.select4').select2();
});
    </script>
    
    
    
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Usuarios:nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 171,  272 => 168,  266 => 165,  260 => 162,  250 => 155,  244 => 152,  225 => 136,  220 => 134,  207 => 124,  195 => 115,  183 => 106,  172 => 98,  160 => 89,  150 => 82,  131 => 65,  129 => 64,  126 => 63,  124 => 62,  93 => 34,  87 => 31,  81 => 28,  75 => 25,  69 => 22,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Agregar usuario | Lyra Electoral App</title>
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
                                Agregar un nuevo usuario
                            </h2>
                          
                        </div>
                        <div class=\"body\">
                            {{ form_start(form) }}
                            
                            
                            
                            <label for=\"email_address\">Usuario:</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(form.username) }}

                                </div>
                            </div>
                                    
                                    
                            <label for=\"email_address\">Correo electronico:</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(form.email) }}

                                </div>
                            </div>
                                    
                            <label for=\"email_address\">Contrasena:</label>
                            <div class=\"form-group\">
                                <div class=\"form-line\">
                                    {{ form_widget(form.plainPassword) }}

                                </div>
                            </div>
                                    
                                    
                            <label for=\"email_address\">Tipo de cuenta:</label>
                            <div class=\"form-group\">
                                <div>
                                    {{ form_widget(form.roles) }}

                                </div>
                            </div>
                                    
                                    
                            <label for=\"email_address\">Estado de cuenta:</label>
                            <div class=\"form-group\">
                                <div>
                                    {{ form_widget(form.enabled) }}

                                </div>
                            </div>
                                        
                                   
                                        
                                
                                        
                                <br>
                                {{ form_widget(form.guardar) }}
                               
                            {{ form_end(form) }}
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

    <!-- Custom Js -->
    <script src=\"{{ asset('assets/vendors/js/admin.js')}}\"></script>

    <!-- Demo Js -->
    <script src=\"{{ asset('assets/vendors/js/demo.js')}}\"></script>
    <script>
    \$(document).ready(function() {
    \$('.select4').select2();
});
    </script>
    
    
    
</body>

</html>", "AppBundle:Usuarios:nuevo.html.twig", "/var/www/html/lyra/src/AppBundle/Resources/views/Usuarios/nuevo.html.twig");
    }
}
