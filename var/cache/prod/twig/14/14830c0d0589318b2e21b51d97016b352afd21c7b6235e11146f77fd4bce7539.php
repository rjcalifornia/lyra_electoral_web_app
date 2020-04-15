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

/* :layouts:sidebar.html.twig */
class __TwigTemplate_d872bb32a130ff15df576f4ac81543497f7476f290f5665c736a329045521de0 extends \Twig\Template
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
        echo "<!-- Left Sidebar -->
        <aside id=\"leftsidebar\" class=\"sidebar\">
            <!-- User Info -->
            <div class=\"user-info\">
                <div class=\"image\">
                    
                </div>
                <div class=\"info-container\">
                  
                   
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class=\"menu\">
                <ul class=\"list\">
                    <li class=\"header\">MENU PRINCIPAL</li>
                     
                    <li class=\"active\">
                         ";
        // line 20
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VIGILANTE") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 21
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">
                            <i class=\"material-icons\">home</i>
                            <span>Agregar Acta</span>
                        </a>
                             ";
        }
        // line 26
        echo "                    </li>
                   
                   ";
        // line 40
        echo "                   ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REPORTE") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 41
            echo "                    <li>
                        <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ver_resultados_presidenciales");
            echo "\">
                            <i class=\"material-icons\">equalizer</i>
                            <span>Gráfico Resultados Presidencial</span>
                        </a>
                     
                    </li>
                    
                    <li>
                        <a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ver_resultados_presidenciales_tabla");
            echo "\">
                            <i class=\"material-icons\">widgets</i>
                            <span>Tabla Resultados Presidencial</span>
                        </a>
                     
                    </li>
                    
                    
                    
                    
                    <li>
                        <a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jrv_seleccion");
            echo "\">
                            <i class=\"material-icons\">important_devices</i>
                            <span>Reporte de Transmision</span>
                        </a>
                     
                    </li>
                    ";
        }
        // line 68
        echo "                     ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 69
            echo "                     <li>
                        <a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuarios_sistema_listado_general");
            echo "\">
                            <i class=\"material-icons\">accessibility</i>
                            <span>Usuarios del sistema</span>
                        </a>
                     
                    </li>
                    
                    <li>
                        <a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_nuevo_usuario");
            echo "\">
                            <i class=\"material-icons\">perm_contact_calendar</i>
                            <span>Agregar usuarios</span>
                        </a>
                     
                    </li>
                    
                    
                   ";
        }
        // line 87
        echo "                    
                    <li>
                        <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\">
                            <i class=\"material-icons\">swap_calls</i>
                            <span>Salir</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class=\"legal\">
                <div class=\"copyright\">
                    &copy; 2019 - 2024 <a href=\"javascript:void(0);\">Lyra Electoral App</a>
                </div>
                <div class=\"version\">
                    <b>Version: </b> 02.10.18
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->";
    }

    public function getTemplateName()
    {
        return ":layouts:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 89,  143 => 87,  131 => 78,  120 => 70,  117 => 69,  114 => 68,  104 => 61,  90 => 50,  79 => 42,  76 => 41,  73 => 40,  69 => 26,  60 => 21,  58 => 20,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", ":layouts:sidebar.html.twig", "/var/www/html/lyra/app/Resources/views/layouts/sidebar.html.twig");
    }
}
