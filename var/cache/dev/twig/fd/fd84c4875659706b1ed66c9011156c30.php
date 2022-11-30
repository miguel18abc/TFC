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

/* base.html.twig */
class __TwigTemplate_a88e0b4feb60dc6c79343d1c6154525b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        ";
        if ((array_key_exists("form", $context) && (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo "\t        ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), [0 => "bootstrap_5_layout.html.twig"], true);
            // line 10
            echo "        ";
        }
        // line 11
        echo "
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('menu', $context, $blocks);
        // line 51
        echo "
        ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "
        ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 86
        echo "    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href=\"/css/base.css\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"/css/main.css\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"/css/cards.css\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"/css/family.css\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"/css/login.css\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "            <script src=\"https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js\"></script>
            <!-- JavaScript Bundle with Popper -->
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 30
        echo "            <nav class=\"navbar navbar-dark navbar-expand\">
                <div class=\"container-fluid\">
                    <img id=\"icon\" src=\"/svg/logoPlanesSinFondo.svg\">
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                        <div class=\"navbar-nav ms-auto\">
                            ";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 39
            echo "                                <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                                    Cerrar sesión
                                </a>
                            ";
        } else {
            // line 43
            echo "                                <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Iniciar sesión</a>
                                <a class=\"nav-link\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Registrar</a>
                            ";
        }
        // line 46
        echo "                        </div>
                    </div>
                </div>
            </nav>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 56
        echo "        <footer class=\"text-center text-white\">
            <!-- Grid container -->
            <div class=\"container p-4 pb-0\">
                <!-- Section: Social media -->
                <section class=\"mb-4\">
                <!-- Facebook -->
                <a class=\"btn text-white btn-floating m-1\" style=\"background-color: #3b5998;\" href=\"https://www.facebook.com/IesJosePlanes/\" role=\"button\">
                    <i class=\"bi bi-facebook\"></i>
                </a>

                <!-- Twitter -->
                <a class=\"btn text-white btn-floating m-1\" style=\"background-color: #55acee;\" href=\"https://twitter.com/iesjoseplanes\" role=\"button\">
                    <i class=\"bi bi-twitter\"></i>
                </a>

                <!-- Google -->
                <a class=\"btn text-white btn-floating m-1\" style=\"background-color: #dd4b39;\" href=\"#!\" role=\"button\">
                    <i class=\"bi bi-google\"></i>
                </a>

                <!-- Instagram -->
                <a class=\"btn text-white btn-floating m-1\" style=\"background-color: #ac2bac;\" href=\"https://www.instagram.com/infoplaness/\" role=\"button\">
                    <i class=\"bi bi-instagram\"></i>
                </a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->
        </footer>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 56,  249 => 55,  239 => 53,  229 => 52,  215 => 46,  210 => 44,  205 => 43,  197 => 39,  195 => 38,  185 => 30,  175 => 29,  162 => 23,  152 => 22,  135 => 13,  125 => 12,  106 => 5,  95 => 86,  93 => 55,  90 => 54,  88 => 52,  85 => 51,  83 => 29,  79 => 27,  77 => 22,  74 => 21,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% if form is defined and form %}
\t        {% form_theme form 'bootstrap_5_layout.html.twig' %}
        {% endif %}

        {% block stylesheets %}
            <link href=\"/css/base.css\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"/css/main.css\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"/css/cards.css\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"/css/family.css\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"/css/login.css\" rel=\"stylesheet\" type=\"text/css\">
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css\">
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
        {% endblock %}

        {% block javascripts %}
            <script src=\"https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js\"></script>
            <!-- JavaScript Bundle with Popper -->
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </head>
    <body>
        {% block menu %}
            <nav class=\"navbar navbar-dark navbar-expand\">
                <div class=\"container-fluid\">
                    <img id=\"icon\" src=\"/svg/logoPlanesSinFondo.svg\">
                    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                        <div class=\"navbar-nav ms-auto\">
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
                                    Cerrar sesión
                                </a>
                            {% else %}
                                <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Iniciar sesión</a>
                                <a class=\"nav-link\" href=\"{{ path('app_register') }}\">Registrar</a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </nav>
        {% endblock %}

        {% block body %}
        {% endblock %}

        {% block footer %}
        <footer class=\"text-center text-white\">
            <!-- Grid container -->
            <div class=\"container p-4 pb-0\">
                <!-- Section: Social media -->
                <section class=\"mb-4\">
                <!-- Facebook -->
                <a class=\"btn text-white btn-floating m-1\" style=\"background-color: #3b5998;\" href=\"https://www.facebook.com/IesJosePlanes/\" role=\"button\">
                    <i class=\"bi bi-facebook\"></i>
                </a>

                <!-- Twitter -->
                <a class=\"btn text-white btn-floating m-1\" style=\"background-color: #55acee;\" href=\"https://twitter.com/iesjoseplanes\" role=\"button\">
                    <i class=\"bi bi-twitter\"></i>
                </a>

                <!-- Google -->
                <a class=\"btn text-white btn-floating m-1\" style=\"background-color: #dd4b39;\" href=\"#!\" role=\"button\">
                    <i class=\"bi bi-google\"></i>
                </a>

                <!-- Instagram -->
                <a class=\"btn text-white btn-floating m-1\" style=\"background-color: #ac2bac;\" href=\"https://www.instagram.com/infoplaness/\" role=\"button\">
                    <i class=\"bi bi-instagram\"></i>
                </a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->
        </footer>
        {% endblock %}
    </body>
</html>", "base.html.twig", "C:\\Users\\migue\\Desktop\\TFC1\\templates\\base.html.twig");
    }
}
