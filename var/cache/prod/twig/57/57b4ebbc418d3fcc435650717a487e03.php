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

/* familia/index.html.twig */
class __TwigTemplate_1b7aa58e5fc9aaba002c85d22d52a40f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "familia/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello FamiliaController!";
    }

    // line 5
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $context["hide_user_nav"] = true;
        // line 7
        echo "        <nav class=\"navbar navbar-dark navbar-expand\">
            <div class=\"container-fluid\">
                <a href=\"https://www.iesjoseplanes.es/\" target=\"_blank\">
                    <img id=\"icon\" src=\"/svg/logoPlanesSinFondo.svg\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                    <div class=\"navbar-nav ms-auto\">
                        ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 18
            echo "                            ";
            if (array_key_exists("hide_user_nav", $context)) {
                // line 19
                echo "                                <a class=\"nav-link\" href=\"/familia/";
                echo twig_escape_filter($this->env, ($context["trabajador"] ?? null), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, ($context["servicio"] ?? null), "html", null, true);
                echo "/consulta/";
                echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
                echo "\">Consulta</a>
                            ";
            }
            // line 21
            echo "                            <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Cerrar sesión</a>
                        ";
        } else {
            // line 23
            echo "                            <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Iniciar sesión</a>
                            <a class=\"nav-link\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Registrar</a>
                        ";
        }
        // line 26
        echo "                    </div>
                </div>
            </div>
        </nav>
";
    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
    <div id=\"calendar\">
    </div>


    ";
        // line 65
        echo "    
    ";
    }

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "    <script src=\"/public/javascripts/moment.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js\" integrity=\"sha256-7PzqE1MyWa/IV5vZumk1CVO6OQbaJE4ns7vmxuUP/7g=\" crossorigin=\"anonymous\"></script>
    <script src=\"/public/javascripts/es.js\"></script>
    <script>
        window.onload = () => {
            let calendarElt = document.querySelector(\"#calendar\");

            let calendar = new FullCalendar.Calendar(calendarElt, {
                locale: 'es',
                initialView: 'dayGridMonth',
                firstDay: 1,
                timeZone: 'Europe/Madrid',
                /*customButtons: {
                    consulta: {
                        themeIcon: \"refresh\",
                        text: \"Consulta\",
                        click: function(){
                            window.open(`/familia/";
        // line 116
        echo twig_escape_filter($this->env, ($context["trabajador"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["servicio"] ?? null), "html", null, true);
        echo "/consulta/";
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "`,\"_self\")
                        }
                    },
                },*/
                headerToolbar: {
                    start: 'prev,next,today',
                    center: 'title',
                    end: 'dayGridMonth,timeGridWeek,listWeek',
                },
                events: ";
        // line 125
        echo ($context["data"] ?? null);
        echo ",
                eventClick: function(e) {
                    window.open(`/familia/";
        // line 127
        echo twig_escape_filter($this->env, ($context["trabajador"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["servicio"] ?? null), "html", null, true);
        echo "/\${e.event.id}`,\"_self\") 
                },
                /*
                monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                */
                eventResizableFromStart: true,
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
                dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sáb'],
                buttonText: {
                    today:    'Hoy',
                    month:    'Mes',
                    week:     'Semana',
                    day:      'Día',
                    list:     'Lista'
                },
                allDaySlot: false,
            })
            calendar.render()
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "familia/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 127,  169 => 125,  153 => 116,  134 => 99,  130 => 98,  125 => 65,  118 => 33,  114 => 32,  106 => 26,  101 => 24,  96 => 23,  90 => 21,  80 => 19,  77 => 18,  75 => 17,  63 => 7,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "familia/index.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\familia\\index.html.twig");
    }
}
