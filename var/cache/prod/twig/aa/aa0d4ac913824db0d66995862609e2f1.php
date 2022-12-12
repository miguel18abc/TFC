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
class __TwigTemplate_48e25b33ff937062bc2d55d5e6dafe36 extends Template
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
        echo "Main";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div id=\"mainbodyBlock\">
    <div id=\"containerCards\" class=\"container\">
        <div id=\"cardfamily1\" class=\"card\">
            <div class=\"slide slide1\">
                <div class=\"content\">
                    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("familia");
        echo "\" class=\"icon\">
                        <img aria-hidden=\"true\" style=\"width:300px;\"></img>
                    </a>
                </div>
            </div>
            <div class=\"slide slide2\">
                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("familia");
        echo "\" class=\"content\">
                    <h3>Familia</h3>
                </a>
            </div>
        </div>
        <div id=\"cardfamily2\" class=\"card\">
            <div class=\"slide slide1\">
                <div class=\"content\">
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plantilla");
        echo "\" class=\"icon\">
                        <img aria-hidden=\"true\" style=\"width:300px;\"></img>
                    </a>
                </div>
            </div>
            <div class=\"slide slide2\">
                <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plantilla");
        echo "\" class=\"content\">
                    <h3>Plantilla</h3>
                </a>
            </div>
        </div>
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
        return array (  94 => 31,  85 => 25,  74 => 17,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main/index.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\main\\index.html.twig");
    }
}
