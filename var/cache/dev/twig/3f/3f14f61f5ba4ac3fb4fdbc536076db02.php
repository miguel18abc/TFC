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

/* plantilla/misCitas.html.twig */
class __TwigTemplate_b5bf02f3b38155dbef71aaf6618cfbe2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plantilla/misCitas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plantilla/misCitas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "plantilla/misCitas.html.twig", 1);
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

        echo "Mis citas";
        
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
        echo "    <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Usuario</th>
\t\t\t\t\t<th>Fecha de inicio</th>
\t\t\t\t\t<th>Hora de inicio</th>
\t\t\t\t\t<th>Fecha de fin</th>
\t\t\t\t\t<th>Hora de fin</th>
\t\t\t\t\t<th>Servicio</th>
\t\t\t\t\t<th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservas"]) || array_key_exists("reservas", $context) ? $context["reservas"] : (function () { throw new RuntimeError('Variable "reservas" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
            // line 20
            echo "                <tr>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "Username", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "calendar", [], "any", false, false, false, 22), "start", [], "any", false, false, false, 22), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "calendar", [], "any", false, false, false, 23), "start", [], "any", false, false, false, 23), "H:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "calendar", [], "any", false, false, false, 24), "end", [], "any", false, false, false, 24), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "calendar", [], "any", false, false, false, 25), "end", [], "any", false, false, false, 25), "H:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "calendar", [], "any", false, false, false, 26), "servicios", [], "any", false, false, false, 26), "Nombre", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
\t\t\t\t\t<td><a href=\"/anular/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\" class=\"btn btn-primary\">Anular</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </tbody>
        </table>
        <a href=\"/plantilla\" class=\"btn btn-primary\">⏪</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "plantilla/misCitas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 30,  134 => 27,  130 => 26,  126 => 25,  122 => 24,  118 => 23,  114 => 22,  110 => 21,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mis citas{% endblock %}

{% block body %}
    <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Usuario</th>
\t\t\t\t\t<th>Fecha de inicio</th>
\t\t\t\t\t<th>Hora de inicio</th>
\t\t\t\t\t<th>Fecha de fin</th>
\t\t\t\t\t<th>Hora de fin</th>
\t\t\t\t\t<th>Servicio</th>
\t\t\t\t\t<th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {% for reserva in reservas %}
                <tr>
                    <td>{{ reserva.Username}}</td>
\t\t\t\t\t<td>{{ reserva.calendar.start|date('d-m-Y')}}</td>
\t\t\t\t\t<td>{{ reserva.calendar.start|date('H:i:s')}}</td>
\t\t\t\t\t<td>{{ reserva.calendar.end|date('d-m-Y')}}</td>
\t\t\t\t\t<td>{{ reserva.calendar.end|date('H:i:s')}}</td>
\t\t\t\t\t<td>{{ reserva.calendar.servicios.Nombre}}</td>
\t\t\t\t\t<td><a href=\"/anular/{{reserva.id}}\" class=\"btn btn-primary\">Anular</a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <a href=\"/plantilla\" class=\"btn btn-primary\">⏪</a>
{% endblock %}
", "plantilla/misCitas.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\plantilla\\misCitas.html.twig");
    }
}
