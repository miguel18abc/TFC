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
class __TwigTemplate_c27195818a901317b165ac032f958fa9 extends Template
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
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

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
                echo twig_escape_filter($this->env, (isset($context["trabajador"]) || array_key_exists("trabajador", $context) ? $context["trabajador"] : (function () { throw new RuntimeError('Variable "trabajador" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "/consulta/";
                echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 19, $this->source); })()), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "
    <div id=\"calendar\">
    </div>


    ";
        // line 65
        echo "    
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo twig_escape_filter($this->env, (isset($context["trabajador"]) || array_key_exists("trabajador", $context) ? $context["trabajador"] : (function () { throw new RuntimeError('Variable "trabajador" does not exist.', 116, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 116, $this->source); })()), "html", null, true);
        echo "/consulta/";
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 116, $this->source); })()), "html", null, true);
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
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 125, $this->source); })());
        echo ",
                eventClick: function(e) {
                    window.open(`/familia/";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["trabajador"]) || array_key_exists("trabajador", $context) ? $context["trabajador"] : (function () { throw new RuntimeError('Variable "trabajador" does not exist.', 127, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 127, $this->source); })()), "html", null, true);
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
        return array (  228 => 127,  223 => 125,  207 => 116,  188 => 99,  178 => 98,  167 => 65,  160 => 33,  150 => 32,  136 => 26,  131 => 24,  126 => 23,  120 => 21,  110 => 19,  107 => 18,  105 => 17,  93 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello FamiliaController!{% endblock %}

{% block menu %}
    {% set hide_user_nav = true %}
        <nav class=\"navbar navbar-dark navbar-expand\">
            <div class=\"container-fluid\">
                <a href=\"https://www.iesjoseplanes.es/\" target=\"_blank\">
                    <img id=\"icon\" src=\"/svg/logoPlanesSinFondo.svg\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                    <div class=\"navbar-nav ms-auto\">
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            {% if (hide_user_nav is defined) %}
                                <a class=\"nav-link\" href=\"/familia/{{trabajador}}/{{servicio}}/consulta/{{username}}\">Consulta</a>
                            {% endif %}
                            <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Cerrar sesión</a>
                        {% else %}
                            <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Iniciar sesión</a>
                            <a class=\"nav-link\" href=\"{{ path('app_register') }}\">Registrar</a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </nav>
{% endblock %}

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
    <script src=\"/public/javascripts/moment.min.js\"></script>
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
                            window.open(`/familia/{{trabajador}}/{{servicio}}/consulta/{{username}}`,\"_self\")
                        }
                    },
                },*/
                headerToolbar: {
                    start: 'prev,next,today',
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
