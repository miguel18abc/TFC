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

/* familia/msg.html.twig */
class __TwigTemplate_cc9a596c0aa5b5a45e99965b377096f8 extends Template
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
        // line 1
        echo "<h1>Información</h1>

";
        // line 3
        echo twig_escape_filter($this->env, ($context["msg"] ?? null), "html", null, true);
        echo "

<br>
<a class=\"btn btn-primary\" href=\"/familia/";
        // line 6
        echo twig_escape_filter($this->env, ($context["servicio"] ?? null), "html", null, true);
        echo "\">Volver a ";
        echo twig_escape_filter($this->env, ($context["servicio"] ?? null), "html", null, true);
        echo "</a> 
";
    }

    public function getTemplateName()
    {
        return "familia/msg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "familia/msg.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\familia\\msg.html.twig");
    }
}
