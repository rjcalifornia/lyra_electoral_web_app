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

/* AppBundle:Presidencial:agregar-acta-presidencial.html.twig */
class __TwigTemplate_fcd53a6090a16e36a5c8e7cd2c4d5ea9cf2a117d19aed32974ad86c963bd8213 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Presidencial:agregar-acta-presidencial.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Presidencial:agregar-acta-presidencial.html.twig"));

        // line 1
        echo "﻿<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Agregar Acta Presidencial | Lyra Electoral App</title>
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
    <script>
    function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}</script>
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
        // line 72
        $this->loadTemplate("layouts/topbar.html.twig", "AppBundle:Presidencial:agregar-acta-presidencial.html.twig", 72)->display($context);
        // line 73
        echo "    <section>
        ";
        // line 74
        $this->loadTemplate("layouts/sidebar.html.twig", "AppBundle:Presidencial:agregar-acta-presidencial.html.twig", 74)->display($context);
        // line 75
        echo "    </section>

    <section class=\"content\">
        <div class=\"container-fluid\">
           

            <!-- Vertical Layout -->
            <div class=\"row clearfix\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2>
                                AGREGAR RESULTADOS ACTA PRESIDENCIAL
                            </h2>
                          
                        </div>
                        <div class=\"body\">
                            ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 92, $this->source); })()), 'form_start');
        echo "
                            
                            <label for=\"email_address\">CENTRO DE VOTACION:</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 97, $this->source); })()), "centrovotacion", [], "any", false, false, false, 97), 'widget');
        echo "
                                        
                                    </div>
                                </div>
                                        
                                          <label for=\"email_address\">NUMERO JRV</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 105, $this->source); })()), "jrv", [], "any", false, false, false, 105), 'widget');
        echo "
                                        
                                    </div>
                                </div>
                                        
                                           </br>    
                                <label for=\"email_address\">VOTOS SOBRANTES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 114, $this->source); })()), "sobrantes", [], "any", false, false, false, 114), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>     
                                        
                                         </br>    
                                <label for=\"email_address\">INUTILIZADAS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 123, $this->source); })()), "inutilizadas", [], "any", false, false, false, 123), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        </br>
                                        
                              </br>
                               <label for=\"email_address\">VOTOS FMLN</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 134, $this->source); })()), "fmln", [], "any", false, false, false, 134), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        
                                        </br>
                               <label for=\"email_address\">VOTOS GANA</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 144, $this->source); })()), "gana", [], "any", false, false, false, 144), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>    
                                        
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS VAMOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 154, $this->source); })()), "vamos", [], "any", false, false, false, 154), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        </br>
                               <label for=\"email_address\">VOTOS ARENA</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 163, $this->source); })()), "arena", [], "any", false, false, false, 163), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        
                                        
                                        
                                
                                      </br>
                               <label for=\"email_address\">VOTOS PCN</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 176, $this->source); })()), "pcn", [], "any", false, false, false, 176), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS PDC</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 185, $this->source); })()), "pdc", [], "any", false, false, false, 185), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                </br>
                               <label for=\"email_address\">VOTOS DS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 195, $this->source); })()), "ds", [], "any", false, false, false, 195), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        
                                        </br>
                               <label for=\"email_address\">ARENA-PCN-PDC-DS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 205, $this->source); })()), "coalicion", [], "any", false, false, false, 205), 'widget');
        echo "
                                        
                                    </div>
                                </div>  
                                        
                              
                                        
                                        
                               
                                    </br>    
                                <label for=\"email_address\">VOTOS IMPUGNADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 218, $this->source); })()), "impugnados", [], "any", false, false, false, 218), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                </br>    
                                <label for=\"email_address\">VOTOS NULOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 228, $this->source); })()), "nulo", [], "any", false, false, false, 228), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                             
                                     </br>
                               <label for=\"email_address\">ABSTENCIONES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 238, $this->source); })()), "abstenciones", [], "any", false, false, false, 238), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                         </br>
                               <label for=\"email_address\">ESCRUTADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 248, $this->source); })()), "escrutados", [], "any", false, false, false, 248), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                </br>    
                                <label for=\"email_address\">VOTOS FALTANTES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 257, $this->source); })()), "faltantes", [], "any", false, false, false, 257), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        
                               
                                        
                                        </br>    
                                <label for=\"email_address\">ENTREGADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 269
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 269, $this->source); })()), "entregados", [], "any", false, false, false, 269), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                        
                                     </br>    
                                
                                <div class=\"form-group\" style=\"display: none;\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 280, $this->source); })()), "municipioid", [], "any", false, false, false, 280), 'widget', ["value" => "1"]);
        echo "
                                        
                                    </div>
                                </div>   
                                        
                                        
                                
                                        
                                <br>
                                ";
        // line 289
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 289, $this->source); })()), "guardar", [], "any", false, false, false, 289), 'widget');
        echo "
                               
                            ";
        // line 291
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["concejo"]) || array_key_exists("concejo", $context) ? $context["concejo"] : (function () { throw new RuntimeError('Variable "concejo" does not exist.', 291, $this->source); })()), 'form_end');
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
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core Js -->
    <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Select Plugin Js -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js\"></script>


    <!-- Slimscroll Plugin Js -->
    <script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/node-waves/waves.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Js -->
    <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/admin.js"), "html", null, true);
        echo "\"></script>

    <!-- Demo Js -->
    <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/demo.js"), "html", null, true);
        echo "\"></script>
    <script>
    \$(document).ready(function() {
    \$('.select4').select2();
});
    </script>
    
    
    
    <script>
        \$('#acta_presidencial_centrovotacion').change(function () {
            var sectorElectoral = \$(this);
            
            // Request the neighborhoods of the selected city.
            \$.ajax({
                url: \"";
        // line 341
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jrv_sector_electoral");
        echo "\",
                type: \"GET\",
                dataType: \"JSON\",
                data: {
                    sectorid: sectorElectoral.val()
                },
                success: function (juntas) {
                    var jrvSelect = \$(\"#acta_presidencial_jrv\");

                    // Remove current options
                    jrvSelect.html('');
                    
                    // Empty value ...
                    jrvSelect.append('<option value> Seleccione JRV de ' + sectorElectoral.find(\"option:selected\").text() + ' ...</option>');
                    
                    
                    \$.each(juntas, function (key, jrv) {
                        jrvSelect.append('<option value=\"' + jrv.id + '\">' + jrv.name + '</option>');
                    });
                },
                        
                        
                
                error: function (err) {
                    alert(\"An error ocurred while loading data ...\");
                }
            });
        });
    </script> 
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Presidencial:agregar-acta-presidencial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 341,  475 => 326,  469 => 323,  463 => 320,  457 => 317,  447 => 310,  441 => 307,  422 => 291,  417 => 289,  405 => 280,  391 => 269,  376 => 257,  364 => 248,  351 => 238,  338 => 228,  325 => 218,  309 => 205,  296 => 195,  283 => 185,  271 => 176,  255 => 163,  243 => 154,  230 => 144,  217 => 134,  203 => 123,  191 => 114,  179 => 105,  168 => 97,  160 => 92,  141 => 75,  139 => 74,  136 => 73,  134 => 72,  93 => 34,  87 => 31,  81 => 28,  75 => 25,  69 => 22,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <title>Agregar Acta Presidencial | Lyra Electoral App</title>
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
    <script>
    function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}</script>
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
                                AGREGAR RESULTADOS ACTA PRESIDENCIAL
                            </h2>
                          
                        </div>
                        <div class=\"body\">
                            {{ form_start(concejo) }}
                            
                            <label for=\"email_address\">CENTRO DE VOTACION:</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.centrovotacion) }}
                                        
                                    </div>
                                </div>
                                        
                                          <label for=\"email_address\">NUMERO JRV</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        {{ form_widget(concejo.jrv) }}
                                        
                                    </div>
                                </div>
                                        
                                           </br>    
                                <label for=\"email_address\">VOTOS SOBRANTES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.sobrantes, { 'type':'number' }) }}
                                        
                                    </div>
                                </div>     
                                        
                                         </br>    
                                <label for=\"email_address\">INUTILIZADAS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.inutilizadas, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                        </br>
                                        
                              </br>
                               <label for=\"email_address\">VOTOS FMLN</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.fmln, { 'type':'number' }) }}
                                        
                                    </div>
                                </div>
                                        
                                        
                                        </br>
                               <label for=\"email_address\">VOTOS GANA</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.gana, { 'type':'number' }) }}
                                        
                                    </div>
                                </div>    
                                        
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS VAMOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.vamos, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                        </br>
                               <label for=\"email_address\">VOTOS ARENA</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.arena, { 'type':'number' }) }}
                                        
                                    </div>
                                </div>
                                        
                                        
                                        
                                        
                                
                                      </br>
                               <label for=\"email_address\">VOTOS PCN</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.pcn, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS PDC</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.pdc, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                        
                                </br>
                               <label for=\"email_address\">VOTOS DS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.ds, { 'type':'number' }) }}
                                        
                                    </div>
                                </div>
                                        
                                        
                                        </br>
                               <label for=\"email_address\">ARENA-PCN-PDC-DS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.coalicion) }}
                                        
                                    </div>
                                </div>  
                                        
                              
                                        
                                        
                               
                                    </br>    
                                <label for=\"email_address\">VOTOS IMPUGNADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.impugnados, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                        
                                </br>    
                                <label for=\"email_address\">VOTOS NULOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.nulo, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                             
                                     </br>
                               <label for=\"email_address\">ABSTENCIONES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.abstenciones, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                        
                                         </br>
                               <label for=\"email_address\">ESCRUTADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.escrutados, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                </br>    
                                <label for=\"email_address\">VOTOS FALTANTES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.faltantes, { 'type':'number' }) }}
                                        
                                    </div>
                                </div>
                                        
                                        
                               
                                        
                                        </br>    
                                <label for=\"email_address\">ENTREGADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.entregados, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                        
                                        
                                     </br>    
                                
                                <div class=\"form-group\" style=\"display: none;\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(concejo.municipioid, {value : '1'}) }}
                                        
                                    </div>
                                </div>   
                                        
                                        
                                
                                        
                                <br>
                                {{ form_widget(concejo.guardar) }}
                               
                            {{ form_end(concejo) }}
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
    
    
    
    <script>
        \$('#acta_presidencial_centrovotacion').change(function () {
            var sectorElectoral = \$(this);
            
            // Request the neighborhoods of the selected city.
            \$.ajax({
                url: \"{{ path('jrv_sector_electoral') }}\",
                type: \"GET\",
                dataType: \"JSON\",
                data: {
                    sectorid: sectorElectoral.val()
                },
                success: function (juntas) {
                    var jrvSelect = \$(\"#acta_presidencial_jrv\");

                    // Remove current options
                    jrvSelect.html('');
                    
                    // Empty value ...
                    jrvSelect.append('<option value> Seleccione JRV de ' + sectorElectoral.find(\"option:selected\").text() + ' ...</option>');
                    
                    
                    \$.each(juntas, function (key, jrv) {
                        jrvSelect.append('<option value=\"' + jrv.id + '\">' + jrv.name + '</option>');
                    });
                },
                        
                        
                
                error: function (err) {
                    alert(\"An error ocurred while loading data ...\");
                }
            });
        });
    </script> 
</body>

</html>", "AppBundle:Presidencial:agregar-acta-presidencial.html.twig", "/var/www/html/lyra/src/AppBundle/Resources/views/Presidencial/agregar-acta-presidencial.html.twig");
    }
}
