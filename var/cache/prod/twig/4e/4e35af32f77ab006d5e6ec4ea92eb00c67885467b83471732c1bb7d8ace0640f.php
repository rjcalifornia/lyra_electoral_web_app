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

/* :layouts:topbar.html.twig */
class __TwigTemplate_4cfd490002bb8dbf3369e508e7efdc7f62c7be8772736a3952081b27be9e7192 extends \Twig\Template
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
        echo "<!-- Top Bar -->
    <nav class=\"navbar\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a href=\"javascript:void(0);\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\"></a>
                <a href=\"javascript:void(0);\" class=\"bars\"></a>
                <a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Lyra Electoral App</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
              <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/elections.png"), "html", null, true);
        echo "\" width=\"48\" height=\"48\" alt=\"LyraApp\" />
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->";
    }

    public function getTemplateName()
    {
        return ":layouts:topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", ":layouts:topbar.html.twig", "/var/www/html/lyra/app/Resources/views/layouts/topbar.html.twig");
    }
}
