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

/* AppBundle:Diputado:agregar-acta.html.twig */
class __TwigTemplate_70191dda49931a83da6510e123ba9068ec09951d0144592c6f9dba9a10caf3ec extends \Twig\Template
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
    <title>Agregar Acta | Lyra Electoral App</title>
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

    <!-- Sweet Alert Css -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/sweetalert/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    
    <!-- Bootstrap Select Css -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-select/css/bootstrap-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />


    <!-- Custom Css -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href=\"";
        // line 35
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
      ";
        // line 81
        $this->loadTemplate("layouts/topbar.html.twig", "AppBundle:Diputado:agregar-acta.html.twig", 81)->display($context);
        // line 82
        echo "    <section>
        ";
        // line 83
        $this->loadTemplate("layouts/sidebar.html.twig", "AppBundle:Diputado:agregar-acta.html.twig", 83)->display($context);
        // line 84
        echo "    </section>

    <section class=\"content\">
        <div class=\"container-fluid\">
           

            <!-- Vertical Layout -->
            <div class=\"row clearfix\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"card\">
                        <div class=\"header\">
                            <h2>
                                AGREGAR RESULTADOS ACTA DIPUTADOS
                            </h2>
                          
                        </div>
                        
                        
                                
                        
                        <div class=\"body\">
                            ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["diputado"] ?? null), 'form_start');
        echo "
                            <label for=\"email_address\">CENTRO DE VOTACION:</label>
                            <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "centrovotacion", [], "any", false, false, false, 109), 'widget');
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        
                             </br>
                                <label for=\"email_address\">NUMERO JRV</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "jrvnum", [], "any", false, false, false, 119), 'widget');
        echo "
                                        
                                    </div>
                                </div>
                                        
                                         </br>    
                                <label for=\"email_address\">VOTOS SOBRANTES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "sobrantes", [], "any", false, false, false, 128), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>     
                                    
                                        
                               
                                        
                                        
                                </br>    
                                <label for=\"email_address\">INUTILIZADAS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "inutilizadas", [], "any", false, false, false, 141), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS ARENA</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "arena", [], "any", false, false, false, 150), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        </br>
                               <label for=\"email_address\">VOTOS FMLN</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "fmln", [], "any", false, false, false, 159), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                               </br>
                               <label for=\"email_address\">VOTOS GANA</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "gana", [], "any", false, false, false, 168), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>    
                                        
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS PCN</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "pcn", [], "any", false, false, false, 178), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS PDC</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "pdc", [], "any", false, false, false, 188), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                </br>
                               <label for=\"email_address\">VOTOS CD</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "cd", [], "any", false, false, false, 197), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS PSD</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "psd", [], "any", false, false, false, 207), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                    </br>
                               <label for=\"email_address\">VOTOS FPS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "fps", [], "any", false, false, false, 217), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>      
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                
                                        
                                 </br>    
                                <label for=\"email_address\">VOTOS CRUZADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "cruzados", [], "any", false, false, false, 240), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                        </br>    
                                <label for=\"email_address\">VOTOS IMPUGNADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "impugnados", [], "any", false, false, false, 250), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                         </br>    
                                <label for=\"email_address\">VOTOS NULOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "nulo", [], "any", false, false, false, 260), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                        
                                </br>
                               <label for=\"email_address\">ABSTENCIONES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "abstenciones", [], "any", false, false, false, 271), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                    
                                        </br>
                               <label for=\"email_address\">ESCRUTADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "escrutados", [], "any", false, false, false, 280), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                         </br>    
                                <label for=\"email_address\">VOTOS FALTANTES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 289
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "faltantes", [], "any", false, false, false, 289), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        
                               
                                        
                               
                                        
                                        </br>    
                                <label for=\"email_address\">ENTREGADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "entregados", [], "any", false, false, false, 303), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                      
                                        
                                     </br>    
                                
                                <div class=\"form-group\" style=\"display: none;\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "municipioid", [], "any", false, false, false, 314), 'widget', ["value" => "1"]);
        echo "
                                        
                                    </div>
                                </div>   
                                        
                                        
                                
                                        
                                <br>
                                ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["diputado"] ?? null), "guardar", [], "any", false, false, false, 323), 'widget');
        echo "
                               
                            ";
        // line 325
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["diputado"] ?? null), 'form_end');
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
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core Js -->
    <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Select Plugin Js -->
    <script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-select/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>

    <!-- Slimscroll Plugin Js -->
    <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/node-waves/waves.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Js -->
    <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/admin.js"), "html", null, true);
        echo "\"></script>

    <!-- Demo Js -->
    <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/demo.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "AppBundle:Diputado:agregar-acta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 359,  505 => 356,  499 => 353,  493 => 350,  487 => 347,  481 => 344,  475 => 341,  456 => 325,  451 => 323,  439 => 314,  425 => 303,  408 => 289,  396 => 280,  384 => 271,  370 => 260,  357 => 250,  344 => 240,  318 => 217,  305 => 207,  292 => 197,  280 => 188,  267 => 178,  254 => 168,  242 => 159,  230 => 150,  218 => 141,  202 => 128,  190 => 119,  177 => 109,  170 => 105,  147 => 84,  145 => 83,  142 => 82,  140 => 81,  91 => 35,  85 => 32,  78 => 28,  72 => 25,  66 => 22,  60 => 19,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Diputado:agregar-acta.html.twig", "/var/www/html/lyra/src/AppBundle/Resources/views/Diputado/agregar-acta.html.twig");
    }
}
