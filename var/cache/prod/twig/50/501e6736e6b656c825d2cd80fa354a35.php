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
class __TwigTemplate_7b92fa01dc090183660e84d1d3af87d3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "plantilla/misCitas.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mis citas";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <table id=\"tablaCita\" class=\"table table-striped\">
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
        $context['_seq'] = twig_ensure_traversable(($context["reservas"] ?? null));
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
        <a id=\"buttonReturn\" href=\"/plantilla\" class=\"btn btn-primary\">⏪</a>
";
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
        return array (  113 => 30,  104 => 27,  100 => 26,  96 => 25,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  77 => 20,  73 => 19,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plantilla/misCitas.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\plantilla\\misCitas.html.twig");
    }
}
