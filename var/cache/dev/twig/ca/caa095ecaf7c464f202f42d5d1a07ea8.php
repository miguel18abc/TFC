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

/* cita/reservas.html.twig */
class __TwigTemplate_62a65ec4e0d20fef648128cf507d28d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cita/reservas.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cita/reservas.html.twig"));

        // line 1
        echo "<h1>Reservas</h1>
<ul>

\t";
        // line 4
        if (twig_test_empty((isset($context["reservas"]) || array_key_exists("reservas", $context) ? $context["reservas"] : (function () { throw new RuntimeError('Variable "reservas" does not exist.', 4, $this->source); })()))) {
            // line 5
            echo "
\t\tNo se han encontrado reservas
\t";
        } else {
            // line 8
            echo "\t\t<ul>
\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservas"]) || array_key_exists("reservas", $context) ? $context["reservas"] : (function () { throw new RuntimeError('Variable "reservas" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
                // line 10
                echo "\t\t\t\t<il>
\t\t\t\t\t";
                // line 11
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "cita", [], "any", false, false, false, 11), "fecha", [], "any", false, false, false, 11), "Y-m-d"), "html", null, true);
                echo "
\t\t\t\t\t";
                // line 12
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "cita", [], "any", false, false, false, 12), "hora", [], "any", false, false, false, 12), "H:i"), "html", null, true);
                echo "
\t\t\t\t\t<a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anular", ["id" => twig_get_attribute($this->env, $this->source, $context["reserva"], "id", [], "any", false, false, false, 13)]), "html", null, true);
                echo "\">Anular
\t\t\t\t\t</a>
\t\t\t\t</il>
\t\t\t\t<br>

\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
\t\t</ul>
\t\t";
            // line 21
            $this->loadTemplate("cita/menu.html.twig", "cita/reservas.html.twig", 21)->display($context);
            // line 22
            echo "\t";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "cita/reservas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  89 => 21,  85 => 19,  73 => 13,  69 => 12,  65 => 11,  62 => 10,  58 => 9,  55 => 8,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Reservas</h1>
<ul>

\t{% if  reservas is empty   %}

\t\tNo se han encontrado reservas
\t{% else %}
\t\t<ul>
\t\t\t{% for reserva in reservas %}
\t\t\t\t<il>
\t\t\t\t\t{{ reserva.cita.fecha |date('Y-m-d')}}
\t\t\t\t\t{{ reserva.cita.hora |date('H:i')}}
\t\t\t\t\t<a href=\"{{ path('anular', { 'id': reserva.id })}}\">Anular
\t\t\t\t\t</a>
\t\t\t\t</il>
\t\t\t\t<br>

\t\t\t{% endfor %}

\t\t</ul>
\t\t{% include 'cita/menu.html.twig' %}
\t{% endif %}
", "cita/reservas.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\cita\\reservas.html.twig");
    }
}
