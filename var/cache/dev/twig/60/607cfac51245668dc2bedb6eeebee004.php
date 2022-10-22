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
class __TwigTemplate_5eedd2ad4e2b113f9fde885932557dc0 extends Template
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
        echo "
\t<h1>Reservas</h1>
\t<ul>
\t\t";
        // line 9
        if (twig_test_empty((isset($context["reservas"]) || array_key_exists("reservas", $context) ? $context["reservas"] : (function () { throw new RuntimeError('Variable "reservas" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "\t\t\tNo se han encontrado reservas
\t\t";
        } else {
            // line 12
            echo "\t\t\t<ul>
\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservas"]) || array_key_exists("reservas", $context) ? $context["reservas"] : (function () { throw new RuntimeError('Variable "reservas" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
                // line 14
                echo "\t\t\t\t\t\t";
                if ((((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 14, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "cita", [], "any", false, false, false, 14), "User", [], "any", false, false, false, 14), "username", [], "any", false, false, false, 14)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "cita", [], "any", false, false, false, 14), "Servicio", [], "any", false, false, false, 14), "Nombre", [], "any", false, false, false, 14) == (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 14, $this->source); })())))) {
                    // line 15
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
                    // line 16
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "cita", [], "any", false, false, false, 16), "fecha", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 17
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "cita", [], "any", false, false, false, 17), "hora", [], "any", false, false, false, 17), "H:i:s"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t<a href=\"/anular/";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reserva"], "id", [], "any", false, false, false, 18), "html", null, true);
                    echo "\">Anular</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t</ul>
\t\t\t</br>
    \t\t<a class=\"btn btn-primary\" href=\"/familia/";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "\">Volver a ";
            echo twig_escape_filter($this->env, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "</a> 
\t\t";
        }
        
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
        return array (  137 => 25,  133 => 23,  127 => 22,  120 => 18,  116 => 17,  112 => 16,  109 => 15,  106 => 14,  102 => 13,  99 => 12,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello FamiliaController!{% endblock %}

{% block body %}

\t<h1>Reservas</h1>
\t<ul>
\t\t{% if reservas is empty %}
\t\t\tNo se han encontrado reservas
\t\t{% else %}
\t\t\t<ul>
\t\t\t\t{% for reserva in reservas %}
\t\t\t\t\t\t{% if username == reserva.cita.User.username and reserva.cita.Servicio.Nombre == servicio %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t{{ reserva.cita.fecha |date('Y-m-d')}}
\t\t\t\t\t\t\t\t{{ reserva.cita.hora |date('H:i:s')}}
\t\t\t\t\t\t\t\t<a href=\"/anular/{{reserva.id}}\">Anular</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t\t</br>
    \t\t<a class=\"btn btn-primary\" href=\"/familia/{{servicio}}\">Volver a {{servicio}}</a> 
\t\t{% endif %}
{% endblock %}
", "familia/reservas.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\familia\\reservas.html.twig");
    }
}
