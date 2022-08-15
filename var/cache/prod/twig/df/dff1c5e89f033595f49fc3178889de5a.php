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

/* main/index.html.twig */
class __TwigTemplate_f236b81f0caec3564aed74822e26dcc1 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello MainController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"card\" style=\"width: 18rem;\">
        <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tutor");
        echo "\">
            <img src=\"...\" class=\"card-img-top\" alt=\"...\">
        </a>
        <div class=\"card-body\">
            <p class=\"card-text\">Tutoría</p>
        </div>
    </div>

    <div class=\"card\" style=\"width: 18rem;\">
        <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plantilla");
        echo "\">
            <img src=\"...\" class=\"card-img-top\" alt=\"...\">
        </a>
        <div class=\"card-body\">
            <p class=\"card-text\">Plantilla</p>
        </div>
    </div>

    <div class=\"card\" style=\"width: 18rem;\">
        <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alumnado");
        echo "\">
            <img src=\"...\" class=\"card-img-top\" alt=\"...\">
        </a>
        <div class=\"card-body\">
            <p class=\"card-text\">Alumnado</p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  73 => 16,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/index.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\main\\index.html.twig");
    }
}
