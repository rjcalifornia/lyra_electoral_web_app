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

/* layouts/sidebar.html.twig */
class __TwigTemplate_5be34f2ee08160baffcb2a560f18e207526f88149b520e89c7115a2005651dc3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/sidebar.html.twig"));

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
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DEVICES")) {
            // line 28
            echo "                    <li class=\"active\">
                         
                        <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">
                            <i class=\"material-icons\">home</i>
                            <span>Inicio</span>
                        </a>
                             
                    </li>
                    ";
        }
        // line 37
        echo "                   
                   ";
        // line 50
        echo "                   ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REPORTE") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 51
            echo "                    <li>
                        <a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ver_resultados_presidenciales");
            echo "\">
                            <i class=\"material-icons\">equalizer</i>
                            <span>Gráfico Resultados Presidencial</span>
                        </a>
                     
                    </li>
                    
                    <li>
                        <a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ver_resultados_presidenciales_tabla");
            echo "\">
                            <i class=\"material-icons\">widgets</i>
                            <span>Tabla Resultados Presidencial</span>
                        </a>
                     
                    </li>
                    
                    
                    
                    
                    <li>
                        <a href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jrv_seleccion");
            echo "\">
                            <i class=\"material-icons\">important_devices</i>
                            <span>Reporte de Transmision</span>
                        </a>
                     
                    </li>
                    ";
        }
        // line 78
        echo "                     ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 79
            echo "                     <li>
                        <a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuarios_sistema_listado_general");
            echo "\">
                            <i class=\"material-icons\">accessibility</i>
                            <span>Usuarios del sistema</span>
                        </a>
                     
                    </li>
                    
                    <li>
                        <a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear_nuevo_usuario");
            echo "\">
                            <i class=\"material-icons\">perm_contact_calendar</i>
                            <span>Agregar usuarios</span>
                        </a>
                     
                    </li>
                    
                    
                   ";
        }
        // line 97
        echo "                    
                    <li>
                        <a href=\"";
        // line 99
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layouts/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 99,  167 => 97,  155 => 88,  144 => 80,  141 => 79,  138 => 78,  128 => 71,  114 => 60,  103 => 52,  100 => 51,  97 => 50,  94 => 37,  84 => 30,  80 => 28,  78 => 27,  75 => 26,  66 => 21,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Left Sidebar -->
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
                         {%if is_granted('ROLE_VIGILANTE') or is_granted('ROLE_ADMIN')%}
                        <a href=\"{{ path('homepage')}}\">
                            <i class=\"material-icons\">home</i>
                            <span>Agregar Acta</span>
                        </a>
                             {%endif%}
                    </li>
                    {%if is_granted('ROLE_DEVICES')%}
                    <li class=\"active\">
                         
                        <a href=\"{{ path('homepage')}}\">
                            <i class=\"material-icons\">home</i>
                            <span>Inicio</span>
                        </a>
                             
                    </li>
                    {%endif%}
                   
                   {#<li>
                        <a href=\"pages/typography.html\">
                            <i class=\"material-icons\">text_fields</i>
                            <span>Ver Actas Concejos Municipales</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"pages/helper-classes.html\">
                            <i class=\"material-icons\">layers</i>
                            <span>Ver Actas Diputados</span>
                        </a>
                    </li>#}
                   {%if is_granted('ROLE_REPORTE') or is_granted('ROLE_ADMIN')%}
                    <li>
                        <a href=\"{{path('ver_resultados_presidenciales')}}\">
                            <i class=\"material-icons\">equalizer</i>
                            <span>Gráfico Resultados Presidencial</span>
                        </a>
                     
                    </li>
                    
                    <li>
                        <a href=\"{{path('ver_resultados_presidenciales_tabla')}}\">
                            <i class=\"material-icons\">widgets</i>
                            <span>Tabla Resultados Presidencial</span>
                        </a>
                     
                    </li>
                    
                    
                    
                    
                    <li>
                        <a href=\"{{path('jrv_seleccion')}}\">
                            <i class=\"material-icons\">important_devices</i>
                            <span>Reporte de Transmision</span>
                        </a>
                     
                    </li>
                    {%endif%}
                     {%if  is_granted('ROLE_ADMIN')%}
                     <li>
                        <a href=\"{{path('usuarios_sistema_listado_general')}}\">
                            <i class=\"material-icons\">accessibility</i>
                            <span>Usuarios del sistema</span>
                        </a>
                     
                    </li>
                    
                    <li>
                        <a href=\"{{path('crear_nuevo_usuario')}}\">
                            <i class=\"material-icons\">perm_contact_calendar</i>
                            <span>Agregar usuarios</span>
                        </a>
                     
                    </li>
                    
                    
                   {%endif%}
                    
                    <li>
                        <a href=\"{{ path('fos_user_security_logout')}}\">
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
        <!-- #END# Left Sidebar -->", "layouts/sidebar.html.twig", "/var/www/html/lyra/app/Resources/views/layouts/sidebar.html.twig");
    }
}
