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
class __TwigTemplate_8f763973d7bed68e05f8267cb7ced98007e325ce285c3e0862a92cc3f02cc43e extends \Twig\Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["concejo"] ?? null), 'form_start');
        echo "
                            
                            <label for=\"email_address\">CENTRO DE VOTACION:</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "centrovotacion", [], "any", false, false, false, 97), 'widget');
        echo "
                                        
                                    </div>
                                </div>
                                        
                                          <label for=\"email_address\">NUMERO JRV</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\">
                                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "jrv", [], "any", false, false, false, 105), 'widget');
        echo "
                                        
                                    </div>
                                </div>
                                        
                                           </br>    
                                <label for=\"email_address\">VOTOS SOBRANTES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "sobrantes", [], "any", false, false, false, 114), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>     
                                        
                                         </br>    
                                <label for=\"email_address\">INUTILIZADAS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "inutilizadas", [], "any", false, false, false, 123), 'widget', ["type" => "number"]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "fmln", [], "any", false, false, false, 134), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        
                                        </br>
                               <label for=\"email_address\">VOTOS GANA</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "gana", [], "any", false, false, false, 144), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>    
                                        
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS VAMOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "vamos", [], "any", false, false, false, 154), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        </br>
                               <label for=\"email_address\">VOTOS ARENA</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "arena", [], "any", false, false, false, 163), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        
                                        
                                        
                                
                                      </br>
                               <label for=\"email_address\">VOTOS PCN</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "pcn", [], "any", false, false, false, 176), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS PDC</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "pdc", [], "any", false, false, false, 185), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                </br>
                               <label for=\"email_address\">VOTOS DS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "ds", [], "any", false, false, false, 195), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        
                                        </br>
                               <label for=\"email_address\">ARENA-PCN-PDC-DS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "coalicion", [], "any", false, false, false, 205), 'widget');
        echo "
                                        
                                    </div>
                                </div>  
                                        
                              
                                        
                                        
                               
                                    </br>    
                                <label for=\"email_address\">VOTOS IMPUGNADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "impugnados", [], "any", false, false, false, 218), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                </br>    
                                <label for=\"email_address\">VOTOS NULOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "nulo", [], "any", false, false, false, 228), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                             
                                     </br>
                               <label for=\"email_address\">ABSTENCIONES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "abstenciones", [], "any", false, false, false, 238), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                         </br>
                               <label for=\"email_address\">ESCRUTADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "escrutados", [], "any", false, false, false, 248), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                </br>    
                                <label for=\"email_address\">VOTOS FALTANTES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "faltantes", [], "any", false, false, false, 257), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        
                               
                                        
                                        </br>    
                                <label for=\"email_address\">ENTREGADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 269
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "entregados", [], "any", false, false, false, 269), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                        
                                     </br>    
                                
                                <div class=\"form-group\" style=\"display: none;\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "municipioid", [], "any", false, false, false, 280), 'widget', ["value" => "1"]);
        echo "
                                        
                                    </div>
                                </div>   
                                        
                                        
                                
                                        
                                <br>
                                ";
        // line 289
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["concejo"] ?? null), "guardar", [], "any", false, false, false, 289), 'widget');
        echo "
                               
                            ";
        // line 291
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["concejo"] ?? null), 'form_end');
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
        return array (  487 => 341,  469 => 326,  463 => 323,  457 => 320,  451 => 317,  441 => 310,  435 => 307,  416 => 291,  411 => 289,  399 => 280,  385 => 269,  370 => 257,  358 => 248,  345 => 238,  332 => 228,  319 => 218,  303 => 205,  290 => 195,  277 => 185,  265 => 176,  249 => 163,  237 => 154,  224 => 144,  211 => 134,  197 => 123,  185 => 114,  173 => 105,  162 => 97,  154 => 92,  135 => 75,  133 => 74,  130 => 73,  128 => 72,  87 => 34,  81 => 31,  75 => 28,  69 => 25,  63 => 22,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Presidencial:agregar-acta-presidencial.html.twig", "/var/www/html/lyra/src/AppBundle/Resources/views/Presidencial/agregar-acta-presidencial.html.twig");
    }
}
