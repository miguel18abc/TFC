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

/* familia/anulaReserva.html.twig */
class __TwigTemplate_29bfef7e95b1073c4ad07cce3581bf74 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "familia/anulaReserva.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\tSe ha anulado la reserva
\t<br>
    <a class=\"btn btn-primary\" href=\"/familia/";
        // line 5
        echo twig_escape_filter($this->env, ($context["trabajador"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, ($context["servicio"] ?? null), "html", null, true);
        echo "\">Volver a ";
        echo twig_escape_filter($this->env, ($context["servicio"] ?? null), "html", null, true);
        echo "</a> 
";
    }

    public function getTemplateName()
    {
        return "familia/anulaReserva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "familia/anulaReserva.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\familia\\anulaReserva.html.twig");
    }
}
