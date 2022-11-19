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

/* prueba/prueba.html.twig */
class __TwigTemplate_a37c5614c721ef71b62d828749e687f1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prueba/prueba.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prueba/prueba.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "prueba/prueba.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <!-- Incluir el estilo plano del planificador -->
    <link rel='stylesheet' type='text/css' href='";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/dhtmlx/codebase/dhtmlxscheduler_flat.css"), "html", null, true);
        echo "' charset=\"utf-8\"/>
    <!-- Si no usa el modo de pantalla completa, ignore el siguiente estilo -->
    <style type=\"text/css\" media=\"screen\">
        html, body{
            margin:0px;
            padding:0px;
            height:100%;
            overflow:hidden;
        }   
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
<div id=\"scheduler_element\" class=\"dhx_cal_container\" style='width:100%; height:100%;'>
    <div class=\"dhx_cal_navline\">
        <div class=\"dhx_cal_prev_button\">&nbsp;</div>
        <div class=\"dhx_cal_next_button\">&nbsp;</div>
        <div class=\"dhx_cal_today_button\"></div>
        <div class=\"dhx_cal_date\"></div>
        <div class=\"dhx_cal_tab\" name=\"day_tab\" style=\"right:204px;\"></div>
        <div class=\"dhx_cal_tab\" name=\"week_tab\" style=\"right:140px;\"></div>
        <div class=\"dhx_cal_tab\" name=\"month_tab\" style=\"right:76px;\"></div>
    </div>
    <div class=\"dhx_cal_header\"></div>
    <div class=\"dhx_cal_data\"></div>       
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 36
        echo "    <!-- Incluir la biblioteca del planificador -->
    <script src='";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/dhtmlx/codebase/dhtmlxscheduler.js"), "html", null, true);
        echo "' type='text/javascript' charset=\"utf-8\"></script>
    
    <!-- Incluya jQuery para manejar solicitudes AJAX-->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

    <!-- Incluye Momentjs para jugar con las fechas -->
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/momentjs/moment.js"), "html", null, true);
        echo "\"></script>

    <script>
        // Exponer las citas globalmente imprimiendo la cadena JSON con twig y el filtro sin procesar
        // para que puedan ser accesibles por el programador Scripts.js el controlador
        window.GLOBAL_APPOINTMENTS = ";
        // line 48
        echo (isset($context["citas"]) || array_key_exists("citas", $context) ? $context["citas"] : (function () { throw new RuntimeError('Variable "citas" does not exist.', 48, $this->source); })());
        echo ";

        // Como los scripts del planificador estarán en otros archivos, las rutas generadas por twig
        // también debe estar expuesto en la ventana
        window.GLOBAL_SCHEDULER_ROUTES = {
            create: '";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crear");
        echo "',
            update: '";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update");
        echo "',
            delete: '";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete");
        echo "'
        };
    </script>

    <!-- Incluya los scripts del planificador que necesitará escribir en el siguiente paso -->
    <script src='";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("libraries/schedulerScripts.js"), "html", null, true);
        echo "' type='text/javascript' charset=\"utf-8\"></script>
    <script type=\"text/javascript\" src=\"https://raw.githubusercontent.com/flouthoc/minAjax.js/master/index.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "prueba/prueba.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 60,  175 => 55,  171 => 54,  167 => 53,  159 => 48,  151 => 43,  142 => 37,  139 => 36,  129 => 35,  104 => 18,  94 => 17,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block stylesheets %}
    <!-- Incluir el estilo plano del planificador -->
    <link rel='stylesheet' type='text/css' href='{{ asset(\"libraries/dhtmlx/codebase/dhtmlxscheduler_flat.css\") }}' charset=\"utf-8\"/>
    <!-- Si no usa el modo de pantalla completa, ignore el siguiente estilo -->
    <style type=\"text/css\" media=\"screen\">
        html, body{
            margin:0px;
            padding:0px;
            height:100%;
            overflow:hidden;
        }   
    </style>
{% endblock %}

{% block body %}

<div id=\"scheduler_element\" class=\"dhx_cal_container\" style='width:100%; height:100%;'>
    <div class=\"dhx_cal_navline\">
        <div class=\"dhx_cal_prev_button\">&nbsp;</div>
        <div class=\"dhx_cal_next_button\">&nbsp;</div>
        <div class=\"dhx_cal_today_button\"></div>
        <div class=\"dhx_cal_date\"></div>
        <div class=\"dhx_cal_tab\" name=\"day_tab\" style=\"right:204px;\"></div>
        <div class=\"dhx_cal_tab\" name=\"week_tab\" style=\"right:140px;\"></div>
        <div class=\"dhx_cal_tab\" name=\"month_tab\" style=\"right:76px;\"></div>
    </div>
    <div class=\"dhx_cal_header\"></div>
    <div class=\"dhx_cal_data\"></div>       
</div>

{% endblock %}

{% block javascripts %}
    <!-- Incluir la biblioteca del planificador -->
    <script src='{{ asset(\"libraries/dhtmlx/codebase/dhtmlxscheduler.js\") }}' type='text/javascript' charset=\"utf-8\"></script>
    
    <!-- Incluya jQuery para manejar solicitudes AJAX-->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

    <!-- Incluye Momentjs para jugar con las fechas -->
    <script src=\"{{ asset(\"libraries/momentjs/moment.js\") }}\"></script>

    <script>
        // Exponer las citas globalmente imprimiendo la cadena JSON con twig y el filtro sin procesar
        // para que puedan ser accesibles por el programador Scripts.js el controlador
        window.GLOBAL_APPOINTMENTS = {{ citas|raw }};

        // Como los scripts del planificador estarán en otros archivos, las rutas generadas por twig
        // también debe estar expuesto en la ventana
        window.GLOBAL_SCHEDULER_ROUTES = {
            create: '{{ path(\"crear\") }}',
            update: '{{ path(\"update\") }}',
            delete: '{{ path(\"delete\") }}'
        };
    </script>

    <!-- Incluya los scripts del planificador que necesitará escribir en el siguiente paso -->
    <script src='{{ asset(\"libraries/schedulerScripts.js\") }}' type='text/javascript' charset=\"utf-8\"></script>
    <script type=\"text/javascript\" src=\"https://raw.githubusercontent.com/flouthoc/minAjax.js/master/index.js\"></script>
{% endblock %}", "prueba/prueba.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\prueba\\prueba.html.twig");
    }
}
