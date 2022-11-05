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

/* familia/listado.html.twig */
class __TwigTemplate_1c1f9cc6c8f4f412af83bc0413e2e768 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "familia/listado.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "familia/listado.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "familia/listado.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<ul>
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["citas"]) || array_key_exists("citas", $context) ? $context["citas"] : (function () { throw new RuntimeError('Variable "citas" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cita"]) {
            // line 5
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cita"], "fecha", [], "any", false, false, false, 5), "D-Y-m-d"), "html", null, true);
            echo "
\t\t\t\ta las
\t\t\t\t<a href=\"reserva/";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cita"], "id", [], "any", false, false, false, 7), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cita"], "hora", [], "any", false, false, false, 7), "H:i"), "html", null, true);
            echo "</a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cita'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
\t</ul>
\t<br>
    <a class=\"btn btn-primary\" href=\"/familia/";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\">Volver a ";
        echo twig_escape_filter($this->env, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</a> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "familia/listado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 13,  92 => 10,  81 => 7,  75 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
\t<ul>
\t\t{% for cita in citas %}
\t\t\t<li>{{cita.fecha|date('D-Y-m-d')}}
\t\t\t\ta las
\t\t\t\t<a href=\"reserva/{{cita.id}}\">{{cita.hora|date('H:i')}}</a>
\t\t\t</li>
\t\t{% endfor %}

\t</ul>
\t<br>
    <a class=\"btn btn-primary\" href=\"/familia/{{servicio}}\">Volver a {{servicio}}</a> 
{% endblock %}
", "familia/listado.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\familia\\listado.html.twig");
    }
}
