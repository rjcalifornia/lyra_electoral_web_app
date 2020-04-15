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
class __TwigTemplate_03f056e054cf557fa642a4cf5471f30346d572e7686909e71b8c7b90b046d1ff extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":layouts:topbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", ":layouts:topbar.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  57 => 10,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Top Bar -->
    <nav class=\"navbar\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a href=\"javascript:void(0);\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\"></a>
                <a href=\"javascript:void(0);\" class=\"bars\"></a>
                <a class=\"navbar-brand\" href=\"{{ path('homepage')}}\">Lyra Electoral App</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
              <img src=\"{{ asset('img/elections.png')}}\" width=\"48\" height=\"48\" alt=\"LyraApp\" />
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->", ":layouts:topbar.html.twig", "/var/www/html/lyra/app/Resources/views/layouts/topbar.html.twig");
    }
}
