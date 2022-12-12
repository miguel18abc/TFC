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
class __TwigTemplate_56028075e80eee10a4e4354186e8c369 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "familia/reservas.html.twig", 1);
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
        echo "\t<div id=\"reservabodyBlock\">
\t\t<h1 style=\"text-align: center;\">Reservas</h1>
\t\t\t";
        // line 8
        if (twig_test_empty(($context["reservas"] ?? null))) {
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
            $context['_seq'] = twig_ensure_traversable(($context["reservas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
                // line 25
                echo "\t\t\t\t\t\t\t\t\t";
                // line 26
                echo "\t\t\t\t\t\t\t\t";
                if (((($context["username"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "calendar", [], "any", false, false, false, 26), "user", [], "any", false, false, false, 26), "username", [], "any", false, false, false, 26)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reserva"], "calendar", [], "any", false, false, false, 26), "servicios", [], "any", false, false, false, 26), "Nombre", [], "any", false, false, false, 26) == ($context["servicio"] ?? null)))) {
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
            echo twig_escape_filter($this->env, ($context["trabajador"] ?? null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($context["servicio"] ?? null), "html", null, true);
            echo "\">Volver a ";
            echo twig_escape_filter($this->env, ($context["servicio"] ?? null), "html", null, true);
            echo "</a>
\t\t\t";
        }
        // line 43
        echo "\t</div>
";
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
        return array (  145 => 43,  136 => 41,  131 => 38,  125 => 37,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  95 => 28,  92 => 27,  89 => 26,  87 => 25,  83 => 24,  68 => 11,  64 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "familia/reservas.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\familia\\reservas.html.twig");
    }
}
