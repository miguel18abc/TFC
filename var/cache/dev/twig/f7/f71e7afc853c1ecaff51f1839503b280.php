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

/* familia/reservas.html.twig */
class __TwigTemplate_1afa4246398e6db01671d8bd68613900 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "familia/reservas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "familia/reservas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "familia/reservas.html.twig", 1);
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
        echo "\t<div id=\"reservabodyBlock\">
\t\t<h1 style=\"text-align: center;\">Reservas</h1>
\t\t\t";
        // line 8
        if (twig_test_empty((isset($context["reservas"]) || array_key_exists("reservas", $context) ? $context["reservas"] : (function () { throw new RuntimeError('Variable "reservas" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "\t\t\t\tNo se han encontrado reservas
\t\t\t";
        } else {
            // line 11
            echo "\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Tutor</th>
\t\t\t\t\t\t\t<th>Fecha de inicio</th>
\t\t\t\t\t\t\t<th>Hora de inicio</th>
\t\t\t\t\t\t\t<th>Fecha de fin</th>
\t\t\t\t\t\t\t<th>Hora de fin</th>
\t\t\t\t\t\t\t<th>Servicio</th>
\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservas"]) || array_key_exists("reservas", $context) ? $context["reservas"] : (function () { throw new RuntimeError('Variable "reservas" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
                // line 25
                echo "\t\t\t\t\t\t\t\t\t";
                // line 26
                echo "\t\t\t\t\t\t\t\t";
                if ((((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 26, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "calendar", [], "any", false, false, false, 26), "user", [], "any", false, false, false, 26), "username", [], "any", false, false, false, 26)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "calendar", [], "any", false, false, false, 26), "servicios", [], "any", false, false, false, 26), "Nombre", [], "any", false, false, false, 26) == (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 26, $this->source); })())))) {
                    // line 27
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "tutor", [], "any", false, false, false, 28), "username", [], "any", false, false, false, 28), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 29
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "calendar", [], "any", false, false, false, 29), "start", [], "any", false, false, false, 29), "d-m-Y"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 30
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "calendar", [], "any", false, false, false, 30), "start", [], "any", false, false, false, 30), "H:i:s"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 31
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "calendar", [], "any", false, false, false, 31), "end", [], "any", false, false, false, 31), "d-m-Y"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 32
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "calendar", [], "any", false, false, false, 32), "end", [], "any", false, false, false, 32), "H:i:s"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "calendar", [], "any", false, false, false, 33), "servicios", [], "any", false, false, false, 33), "Nombre", [], "any", false, false, false, 33), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t<td><a href=\"/anular/";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "id", [], "any", false, false, false, 34), "html", null, true);
                    echo "\" class=\"btn btn-primary\">Anular</a></td>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t";
                }
                // line 37
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t</br>
\t\t\t\t<a class=\"btn btn-primary\" href=\"/familia/";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["trabajador"]) || array_key_exists("trabajador", $context) ? $context["trabajador"] : (function () { throw new RuntimeError('Variable "trabajador" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\">Volver a ";
            echo twig_escape_filter($this->env, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "</a>
\t\t\t";
        }
        // line 43
        echo "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "familia/reservas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 43,  166 => 41,  161 => 38,  155 => 37,  149 => 34,  145 => 33,  141 => 32,  137 => 31,  133 => 30,  129 => 29,  125 => 28,  122 => 27,  119 => 26,  117 => 25,  113 => 24,  98 => 11,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello FamiliaController!{% endblock %}

{% block body %}
\t<div id=\"reservabodyBlock\">
\t\t<h1 style=\"text-align: center;\">Reservas</h1>
\t\t\t{% if reservas is empty %}
\t\t\t\tNo se han encontrado reservas
\t\t\t{% else %}
\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Tutor</th>
\t\t\t\t\t\t\t<th>Fecha de inicio</th>
\t\t\t\t\t\t\t<th>Hora de inicio</th>
\t\t\t\t\t\t\t<th>Fecha de fin</th>
\t\t\t\t\t\t\t<th>Hora de fin</th>
\t\t\t\t\t\t\t<th>Servicio</th>
\t\t\t\t\t\t\t<th>Acciones</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for reserva in reservas %}
\t\t\t\t\t\t\t\t\t{# {{ dump(reserva.calendar.user.username) }} #}
\t\t\t\t\t\t\t\t{% if username == reserva.calendar.user.username and reserva.calendar.servicios.Nombre == servicio %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>{{ reserva.tutor.username}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ reserva.calendar.start|date('d-m-Y')}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ reserva.calendar.start|date('H:i:s')}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ reserva.calendar.end|date('d-m-Y')}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ reserva.calendar.end|date('H:i:s')}}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ reserva.calendar.servicios.Nombre}}</td>
\t\t\t\t\t\t\t\t\t\t<td><a href=\"/anular/{{reserva.id}}\" class=\"btn btn-primary\">Anular</a></td>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t</br>
\t\t\t\t<a class=\"btn btn-primary\" href=\"/familia/{{trabajador}}/{{servicio}}\">Volver a {{servicio}}</a>
\t\t\t{% endif %}
\t</div>
{% endblock %}
", "familia/reservas.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\familia\\reservas.html.twig");
    }
}
