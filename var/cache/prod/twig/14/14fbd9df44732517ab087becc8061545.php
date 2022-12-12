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
class __TwigTemplate_d2162b1c1e7bfd3234d44d071ad0f260 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "familia/listado.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t<ul>
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["citas"] ?? null));
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
        echo twig_escape_filter($this->env, ($context["servicio"] ?? null), "html", null, true);
        echo "\">Volver a ";
        echo twig_escape_filter($this->env, ($context["servicio"] ?? null), "html", null, true);
        echo "</a> 
";
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
        return array (  79 => 13,  74 => 10,  63 => 7,  57 => 5,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "familia/listado.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\familia\\listado.html.twig");
    }
}
