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
class __TwigTemplate_40d2e10884d39d3be5fea0e45ea64a94 extends Template
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
        echo "    ";
        if (twig_test_empty((isset($context["citas"]) || array_key_exists("citas", $context) ? $context["citas"] : (function () { throw new RuntimeError('Variable "citas" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "        No existen citas para mostrar
    ";
        } else {
            // line 9
            echo "        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">Fecha</th>
                    <th scope=\"col\">Hora</th>
                    <th scope=\"col\">Servicio</th>
                    <th scope=\"col\">Acciones</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["citas"]) || array_key_exists("citas", $context) ? $context["citas"] : (function () { throw new RuntimeError('Variable "citas" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cita"]) {
                // line 20
                echo "                
                <tr>
                    <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cita"], "fecha", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cita"], "hora", [], "any", false, false, false, 23), "H:i:s"), "html", null, true);
                echo "</td>
                    <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cita"], "Servicio", [], "any", false, false, false, 24), "nombre", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
                    <td><a href=\"/familia/";
                // line 25
                echo twig_escape_filter($this->env, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 25, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cita"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "\" class=\"btn btn-primary ";
                if ((twig_get_attribute($this->env, $this->source, $context["cita"], "disabled", [], "any", false, false, false, 25) == true)) {
                    echo "disabled";
                }
                echo "\">Reservar</a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cita'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "            </tbody>
        </table>
        <a href=\"/familia\" class=\"btn btn-primary\">⏪</a>
        ";
            // line 31
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                // line 32
                echo "            <a href=\"/consulta/";
                echo twig_escape_filter($this->env, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 32, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 32, $this->source); })()), "html", null, true);
                echo "\" class=\"btn btn-primary\">Consulta</a>
        ";
            }
            // line 34
            echo "        
    ";
        }
        
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
        return array (  157 => 34,  149 => 32,  147 => 31,  142 => 28,  127 => 25,  123 => 24,  119 => 23,  115 => 22,  111 => 20,  107 => 19,  95 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello FamiliaController!{% endblock %}

{% block body %}
    {% if citas is empty %}
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
                
                <tr>
                    <td>{{cita.fecha|date(\"d/m/Y\")}}</td>
                    <td>{{cita.hora|date(\"H:i:s\")}}</td>
                    <td>{{cita.Servicio.nombre}}</td>
                    <td><a href=\"/familia/{{servicio}}/{{cita.id}}\" class=\"btn btn-primary {% if cita.disabled == true %}disabled{% endif %}\">Reservar</a></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        <a href=\"/familia\" class=\"btn btn-primary\">⏪</a>
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            <a href=\"/consulta/{{servicio}}/{{username}}\" class=\"btn btn-primary\">Consulta</a>
        {% endif %}
        
    {% endif %}
{% endblock %}
", "familia/index.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\familia\\index.html.twig");
    }
}
