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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div id=\"calendar\">
    </div>


    ";
        // line 38
        echo "    
    ";
    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
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
                customButtons: {
                    consulta: {
                        themeIcon: \"refresh\",
                        text: \"Consulta\",
                        click: function(){
                            window.open(`/familia/";
        // line 89
        echo twig_escape_filter($this->env, ($context["trabajador"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["servicio"] ?? null), "html", null, true);
        echo "/consulta/";
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "`,\"_self\")
                        }
                    },
                },
                headerToolbar: {
                    start: 'prev,next,consulta,today',
                    center: 'title',
                    end: 'dayGridMonth,timeGridWeek,listWeek',
                },
                events: ";
        // line 98
        echo ($context["data"] ?? null);
        echo ",
                eventClick: function(e) {
                    window.open(`/familia/";
        // line 100
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
        return array (  115 => 100,  110 => 98,  94 => 89,  75 => 72,  71 => 71,  66 => 38,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "familia/index.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\familia\\index.html.twig");
    }
}
