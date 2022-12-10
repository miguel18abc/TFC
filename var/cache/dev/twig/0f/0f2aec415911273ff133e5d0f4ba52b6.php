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
class __TwigTemplate_6fdd7c0093a9b09a3ff3e1bd653d54bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "familia/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "familia/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "familia/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello FamiliaController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    <div id=\"calendar\">
    </div>


    ";
        // line 38
        echo "    
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    <script src=\"/javascripts/moment.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js\"></script>
    <script src=\"/javascripts/es.js\"></script>
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
        echo twig_escape_filter($this->env, (isset($context["trabajador"]) || array_key_exists("trabajador", $context) ? $context["trabajador"] : (function () { throw new RuntimeError('Variable "trabajador" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "/consulta/";
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 89, $this->source); })()), "html", null, true);
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
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 98, $this->source); })());
        echo ",
                eventClick: function(e) {
                    window.open(`/familia/";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["trabajador"]) || array_key_exists("trabajador", $context) ? $context["trabajador"] : (function () { throw new RuntimeError('Variable "trabajador" does not exist.', 100, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 100, $this->source); })()), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  157 => 100,  152 => 98,  136 => 89,  117 => 72,  107 => 71,  96 => 38,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello FamiliaController!{% endblock %}

{% block body %}
    
    <div id=\"calendar\">
    </div>


    {# <div class=\"modal fade\" id=\"myModal\" data-backdrop=\"static\" data-keyboard=\"false\" tabindex=\"-1\" aria-labelledby=\"staticBackdrop\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"titulo\"></h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form id=\"formulario\">
                    <div class=\"modal-body\">
                        <div class=\"form-floating mb-3\">
                            <input type=\"date\" class=\"form-control\" id=\"start\">
                            <label for=\"exampleFormControlInput1\" class=\"form-label\">Fecha de inicio</label>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Example textarea</label>
                            <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
                        </div>
                    </div>
                    <div class=\"modal-footer\">

                    </div>
                </form>    
            </div>
        </div>
    </div> #}
    
    {# {% if citas is empty %}
        No existen citas para mostrar
    {% else %}
        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">Fecha</th>
                    <th scope=\"col\">Hora</th>
                    <th scope=\"col\">Servicio</th>
                    <th scope=\"col\">Acciones</th>
                </tr>
            </thead>
            <tbody>
            {% for cita in citas %}
                {% if cita.tutor.id == id %}
                    <tr>
                        <td>{{cita.fecha|date(\"d/m/Y\")}}</td>
                        <td>{{cita.hora|date(\"H:i:s\")}}</td>
                        <td>{{cita.Servicio.nombre}}</td>
                        <td><a href=\"/familia/{{servicio}}/{{cita.id}}\" class=\"btn btn-primary {% if cita.disabled == true %}disabled{% endif %}\">Reservar</a></td>
                    </tr>
                {% endif %}
            {% endfor %}
            </tbody>
        </table>
        <a href=\"/familia\" class=\"btn btn-primary\">⏪</a>
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            <a href=\"/consulta/{{servicio}}/{{username}}\" class=\"btn btn-primary\">Consulta</a>
        {% endif %}
    {% endif %} #}
{% endblock %}

{% block javascripts %}
    <script src=\"/javascripts/moment.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js\"></script>
    <script src=\"/javascripts/es.js\"></script>
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
                            window.open(`/familia/{{trabajador}}/{{servicio}}/consulta/{{username}}`,\"_self\")
                        }
                    },
                },
                headerToolbar: {
                    start: 'prev,next,consulta,today',
                    center: 'title',
                    end: 'dayGridMonth,timeGridWeek,listWeek',
                },
                events: {{data|raw}},
                eventClick: function(e) {
                    window.open(`/familia/{{trabajador}}/{{servicio}}/\${e.event.id}`,\"_self\") 
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
{% endblock %}", "familia/index.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\familia\\index.html.twig");
    }
}
