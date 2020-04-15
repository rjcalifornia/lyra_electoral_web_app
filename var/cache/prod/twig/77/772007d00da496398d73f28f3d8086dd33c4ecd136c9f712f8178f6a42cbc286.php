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

/* FOSUserBundle:Security:layout.html.twig */
class __TwigTemplate_78dfac1e19cb17089f923b6cd2fcfe368cf7bb45bd0034ffb9cbe924de883394 extends \Twig\Template
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
    <title>Lyra | Electoral App</title>
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
</head>

<body class=\"login-page\">
    <div class=\"login-box\">
        <center><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/elections.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\" alt=\"LyraApp\" /></center>
        <div class=\"logo\">
            <a href=\"javascript:void(0);\">Ly<b>ra</b></a>
            <small>Electoral App</small>
        </div>
        <div class=\"card\">
            <div class=\"body\">
                ";
        // line 37
        if (($context["error"] ?? null)) {
            // line 38
            echo "            <center><b style=\"color:#f5f6f5;\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 38), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 38), "security"), "html", null, true);
            echo "</b></center>
        ";
        }
        // line 39
        echo " 
                <form id=\"sign_in\" action=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
                     ";
        // line 41
        if (($context["csrf_token"] ?? null)) {
            // line 42
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
                ";
        }
        // line 44
        echo "                    <div class=\"msg\">Ingrese sus credenciales para acceder</div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">person</i>
                        </span>
                        <div class=\"form-line\">
                            <input type=\"text\" class=\"form-control\" name=\"_username\" placeholder=\"Usuario\" required autofocus>
                        </div>
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">
                            <i class=\"material-icons\">lock</i>
                        </span>
                        <div class=\"form-line\">
                            <input type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Clave\" required>
                        </div>
                    </div>
                    <div class=\"row\">
                       
                        <div class=\"col-xs-4\">
                            <button class=\"btn btn-block bg-pink waves-effect\" type=\"submit\" id=\"_submit\" name=\"_submit\">ENTRAR</button>
                        </div>
                    </div>
                    <div class=\"row m-t-15 m-b--20\">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core Js -->
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    <!-- Waves Effect Plugin Js -->
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/node-waves/waves.js"), "html", null, true);
        echo "\"></script>

    <!-- Validation Plugin Js -->
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-validation/jquery.validate.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Js -->
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/admin.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/js/pages/examples/sign-in.js"), "html", null, true);
        echo "\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 89,  171 => 88,  165 => 85,  159 => 82,  153 => 79,  147 => 76,  113 => 44,  107 => 42,  105 => 41,  101 => 40,  98 => 39,  92 => 38,  90 => 37,  80 => 30,  72 => 25,  66 => 22,  60 => 19,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:Security:layout.html.twig", "/var/www/html/lyra/app/Resources/FOSUserBundle/views/Security/layout.html.twig");
    }
}
