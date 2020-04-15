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
class __TwigTemplate_ef53e2356eb2d386d17f40c86ddb088ac306706207c4e1623ad66c0c6240ab40 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Diputado:agregar-acta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Diputado:agregar-acta.html.twig"));

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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 105, $this->source); })()), 'form_start');
        echo "
                            <label for=\"email_address\">CENTRO DE VOTACION:</label>
                            <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 109, $this->source); })()), "centrovotacion", [], "any", false, false, false, 109), 'widget');
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        
                             </br>
                                <label for=\"email_address\">NUMERO JRV</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 119, $this->source); })()), "jrvnum", [], "any", false, false, false, 119), 'widget');
        echo "
                                        
                                    </div>
                                </div>
                                        
                                         </br>    
                                <label for=\"email_address\">VOTOS SOBRANTES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 128, $this->source); })()), "sobrantes", [], "any", false, false, false, 128), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>     
                                    
                                        
                               
                                        
                                        
                                </br>    
                                <label for=\"email_address\">INUTILIZADAS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 141, $this->source); })()), "inutilizadas", [], "any", false, false, false, 141), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS ARENA</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 150, $this->source); })()), "arena", [], "any", false, false, false, 150), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        </br>
                               <label for=\"email_address\">VOTOS FMLN</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 159, $this->source); })()), "fmln", [], "any", false, false, false, 159), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                               </br>
                               <label for=\"email_address\">VOTOS GANA</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 168, $this->source); })()), "gana", [], "any", false, false, false, 168), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>    
                                        
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS PCN</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 178, $this->source); })()), "pcn", [], "any", false, false, false, 178), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS PDC</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 188, $this->source); })()), "pdc", [], "any", false, false, false, 188), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                </br>
                               <label for=\"email_address\">VOTOS CD</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 197, $this->source); })()), "cd", [], "any", false, false, false, 197), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS PSD</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 207, $this->source); })()), "psd", [], "any", false, false, false, 207), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                    </br>
                               <label for=\"email_address\">VOTOS FPS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 217, $this->source); })()), "fps", [], "any", false, false, false, 217), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>      
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                
                                        
                                 </br>    
                                <label for=\"email_address\">VOTOS CRUZADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 240, $this->source); })()), "cruzados", [], "any", false, false, false, 240), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                        </br>    
                                <label for=\"email_address\">VOTOS IMPUGNADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 250, $this->source); })()), "impugnados", [], "any", false, false, false, 250), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                         </br>    
                                <label for=\"email_address\">VOTOS NULOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 260, $this->source); })()), "nulo", [], "any", false, false, false, 260), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                        
                                        
                                </br>
                               <label for=\"email_address\">ABSTENCIONES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 271, $this->source); })()), "abstenciones", [], "any", false, false, false, 271), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                    
                                        </br>
                               <label for=\"email_address\">ESCRUTADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 280, $this->source); })()), "escrutados", [], "any", false, false, false, 280), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                         </br>    
                                <label for=\"email_address\">VOTOS FALTANTES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 289
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 289, $this->source); })()), "faltantes", [], "any", false, false, false, 289), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div>
                                        
                                        
                               
                                        
                               
                                        
                                        </br>    
                                <label for=\"email_address\">ENTREGADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 303, $this->source); })()), "entregados", [], "any", false, false, false, 303), 'widget', ["type" => "number"]);
        echo "
                                        
                                    </div>
                                </div> 
                                        
                                      
                                        
                                     </br>    
                                
                                <div class=\"form-group\" style=\"display: none;\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        ";
        // line 314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 314, $this->source); })()), "municipioid", [], "any", false, false, false, 314), 'widget', ["value" => "1"]);
        echo "
                                        
                                    </div>
                                </div>   
                                        
                                        
                                
                                        
                                <br>
                                ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 323, $this->source); })()), "guardar", [], "any", false, false, false, 323), 'widget');
        echo "
                               
                            ";
        // line 325
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["diputado"]) || array_key_exists("diputado", $context) ? $context["diputado"] : (function () { throw new RuntimeError('Variable "diputado" does not exist.', 325, $this->source); })()), 'form_end');
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  517 => 359,  511 => 356,  505 => 353,  499 => 350,  493 => 347,  487 => 344,  481 => 341,  462 => 325,  457 => 323,  445 => 314,  431 => 303,  414 => 289,  402 => 280,  390 => 271,  376 => 260,  363 => 250,  350 => 240,  324 => 217,  311 => 207,  298 => 197,  286 => 188,  273 => 178,  260 => 168,  248 => 159,  236 => 150,  224 => 141,  208 => 128,  196 => 119,  183 => 109,  176 => 105,  153 => 84,  151 => 83,  148 => 82,  146 => 81,  97 => 35,  91 => 32,  84 => 28,  78 => 25,  72 => 22,  66 => 19,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿<!DOCTYPE html>
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
    <link href=\"{{ asset('assets/vendors/bootstrap/css/bootstrap.css')}}\" rel=\"stylesheet\">

    <!-- Waves Effect Css -->
    <link href=\"{{ asset('assets/vendors/node-waves/waves.css')}}\" rel=\"stylesheet\" />

    <!-- Animation Css -->
    <link href=\"{{ asset('assets/vendors/animate-css/animate.css')}}\" rel=\"stylesheet\" />

    <!-- Sweet Alert Css -->
    <link href=\"{{ asset('assets/vendors/sweetalert/sweetalert.css')}}\" rel=\"stylesheet\" />
    
    <!-- Bootstrap Select Css -->
    <link href=\"{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.css')}}\" rel=\"stylesheet\" />


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
                                AGREGAR RESULTADOS ACTA DIPUTADOS
                            </h2>
                          
                        </div>
                        
                        
                                
                        
                        <div class=\"body\">
                            {{ form_start(diputado) }}
                            <label for=\"email_address\">CENTRO DE VOTACION:</label>
                            <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.centrovotacion) }}
                                        
                                    </div>
                                </div>
                                        
                                        
                             </br>
                                <label for=\"email_address\">NUMERO JRV</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.jrvnum) }}
                                        
                                    </div>
                                </div>
                                        
                                         </br>    
                                <label for=\"email_address\">VOTOS SOBRANTES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.sobrantes, { 'type':'number' }) }}
                                        
                                    </div>
                                </div>     
                                    
                                        
                               
                                        
                                        
                                </br>    
                                <label for=\"email_address\">INUTILIZADAS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.inutilizadas, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS ARENA</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.arena, { 'type':'number' }) }}
                                        
                                    </div>
                                </div>
                                        
                                        </br>
                               <label for=\"email_address\">VOTOS FMLN</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.fmln, { 'type':'number' }) }}
                                        
                                    </div>
                                </div>
                                        
                               </br>
                               <label for=\"email_address\">VOTOS GANA</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.gana, { 'type':'number' }) }}
                                        
                                    </div>
                                </div>    
                                        
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS PCN</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.pcn, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS PDC</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.pdc, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                </br>
                               <label for=\"email_address\">VOTOS CD</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.cd, { 'type':'number' }) }}
                                        
                                    </div>
                                </div>
                                        
                                        
                                         </br>
                               <label for=\"email_address\">VOTOS PSD</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.psd, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                        
                                    </br>
                               <label for=\"email_address\">VOTOS FPS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.fps, { 'type':'number' }) }}
                                        
                                    </div>
                                </div>      
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                
                                        
                                 </br>    
                                <label for=\"email_address\">VOTOS CRUZADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.cruzados, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                        
                                        </br>    
                                <label for=\"email_address\">VOTOS IMPUGNADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.impugnados, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                        
                                         </br>    
                                <label for=\"email_address\">VOTOS NULOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.nulo, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                        
                                        
                                </br>
                               <label for=\"email_address\">ABSTENCIONES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.abstenciones, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                    
                                        </br>
                               <label for=\"email_address\">ESCRUTADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.escrutados, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                         </br>    
                                <label for=\"email_address\">VOTOS FALTANTES</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.faltantes, { 'type':'number' }) }}
                                        
                                    </div>
                                </div>
                                        
                                        
                               
                                        
                               
                                        
                                        </br>    
                                <label for=\"email_address\">ENTREGADOS</label>
                                <div class=\"form-group\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.entregados, { 'type':'number' }) }}
                                        
                                    </div>
                                </div> 
                                        
                                      
                                        
                                     </br>    
                                
                                <div class=\"form-group\" style=\"display: none;\">
                                    <div class=\"form-line\" onkeypress='validate(event)'>
                                        {{ form_widget(diputado.municipioid, {value : '1'}) }}
                                        
                                    </div>
                                </div>   
                                        
                                        
                                
                                        
                                <br>
                                {{ form_widget(diputado.guardar) }}
                               
                            {{ form_end(diputado) }}
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
    <script src=\"{{ asset('assets/vendors/bootstrap-select/js/bootstrap-select.js')}}\"></script>

    <!-- Slimscroll Plugin Js -->
    <script src=\"{{ asset('assets/vendors/jquery-slimscroll/jquery.slimscroll.js')}}\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"{{ asset('assets/vendors/node-waves/waves.js')}}\"></script>

    <!-- Custom Js -->
    <script src=\"{{ asset('assets/vendors/js/admin.js')}}\"></script>

    <!-- Demo Js -->
    <script src=\"{{ asset('assets/vendors/js/demo.js')}}\"></script>
</body>

</html>", "AppBundle:Diputado:agregar-acta.html.twig", "/var/www/html/lyra/src/AppBundle/Resources/views/Diputado/agregar-acta.html.twig");
    }
}
