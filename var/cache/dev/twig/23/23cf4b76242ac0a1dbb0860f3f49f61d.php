<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* base.html.twig */
class __TwigTemplate_9b537b0025670c5a2bb52c838558260e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'details_css' => [$this, 'block_details_css'],
            'formart_css' => [$this, 'block_formart_css'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\">

         ";
        // line 11
        yield from $this->unwrap()->yieldBlock('details_css', $context, $blocks);
        // line 12
        yield "         ";
        yield from $this->unwrap()->yieldBlock('formart_css', $context, $blocks);
        // line 13
        yield "        
        ";
        // line 14
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 17
        yield "    </head>
    
    <body>
        <header class=\"header\">
            <img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/creations/placeholder-logo.png"), "html", null, true);
        yield "\" alt=\"Tissu Magique\" class=\"logo\">
        </header>

        <nav class=\"nav\">
    <div class=\"container\">
        <ul>
            <li><a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "get", ["_route"], "method", false, false, false, 27) == "app_home")) {
            yield "class=\"active\"";
        }
        yield ">Accueil</a></li>
            <li><a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_creations");
        yield "\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", ["_route"], "method", false, false, false, 28) == "app_creations")) {
            yield "class=\"active\"";
        }
        yield ">Créations</a></li>
            <li><a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "get", ["_route"], "method", false, false, false, 29) == "app_about")) {
            yield "class=\"active\"";
        }
        yield ">À propos</a></li>
            <li><a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "get", ["_route"], "method", false, false, false, 30) == "app_contact")) {
            yield "class=\"active\"";
        }
        yield ">Contact</a></li>
            ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            yield "                <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"nav-logout\">Déconnexion</a></li>
            ";
        } else {
            // line 34
            yield "                <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "get", ["_route"], "method", false, false, false, 34) == "app_login")) {
                yield "class=\"active\"";
            }
            yield ">Connexion</a></li>
            ";
        }
        // line 36
        yield "        </ul>
    </div>
</nav>

        <main>
            ";
        // line 41
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 42
        yield "        </main>

        <footer class=\"footer\" style=\"background-color: #CD613F; color: white; padding: 20px;\">
    <div style=\"max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center;\">
        <!-- Logo ou nom du site -->
        <div style=\"flex: 1; text-align: left; margin-bottom: 10px;\">
            <p style=\"margin: 0; font-weight: bold; font-size: 1.2em;\">&copy; 2024 Tissu Magique</p>
            <p style=\"margin: 0; font-size: 0.9em; color: white;\">Des créations uniques avec passion et précision.</p>
        </div>

        <!-- Informations pratiques -->
        <div style=\"flex: 1; text-align: center; margin-bottom: 10px;\">
            <p style=\"margin: 0; font-size: 0.9em; color: white;\"><strong>Adresse :</strong> 123 Rue de la Couture, 75001 Paris, France</p>
            <p style=\"margin: 0; font-size: 0.9em; color: white;\"><strong>Horaires :</strong> Lundi - Vendredi : 9h00 - 18h00</p>
            <p style=\"margin: 0; font-size: 0.9em; color: white;\"><strong>Téléphone :</strong> <a href=\"tel:+33123456789\" style=\"text-decoration: none; color: white;\">01 23 45 67 89</a></p>
        </div>

        <!-- Navigation footer -->
        <div style=\"flex: 1; text-align: right; margin-bottom: 10px;\">
            <ul style=\"list-style: none; margin: 0; padding: 0; display: inline-flex; gap: 15px;\">
                <li>
                    <a href=\"mentions-legales.php\" style=\"text-decoration: none; color: white; font-size: 0.9em;\">Mentions légales</a>
                </li>
                <li>
                    <a href=\"politique-confidentialité.php\" style=\"text-decoration: none; color: white; font-size: 0.9em;\">Politique de confidentialité</a>
                </li>
                <li>
                    <a href=\"CGV.php\" style=\"text-decoration: none; color: white; font-size: 0.9em;\">Conditions générales de vente</a>
                </li>
            </ul>
        </div>
    </div>
</footer>

        ";
        // line 76
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 79
        yield "    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_details_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "details_css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "details_css"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_formart_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formart_css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formart_css"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        yield "            ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        yield "            ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  335 => 77,  322 => 76,  300 => 41,  286 => 15,  273 => 14,  251 => 12,  229 => 11,  206 => 5,  194 => 79,  192 => 76,  156 => 42,  154 => 41,  147 => 36,  137 => 34,  131 => 32,  129 => 31,  121 => 30,  113 => 29,  105 => 28,  97 => 27,  88 => 21,  82 => 17,  80 => 14,  77 => 13,  74 => 12,  72 => 11,  67 => 9,  60 => 5,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">

         {% block details_css %}{% endblock %}
         {% block formart_css %}{% endblock %}
        
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}
    </head>
    
    <body>
        <header class=\"header\">
            <img src=\"{{ asset('uploads/creations/placeholder-logo.png') }}\" alt=\"Tissu Magique\" class=\"logo\">
        </header>

        <nav class=\"nav\">
    <div class=\"container\">
        <ul>
            <li><a href=\"{{ path('app_home') }}\" {% if app.request.get('_route') == 'app_home' %}class=\"active\"{% endif %}>Accueil</a></li>
            <li><a href=\"{{ path('app_creations') }}\" {% if app.request.get('_route') == 'app_creations' %}class=\"active\"{% endif %}>Créations</a></li>
            <li><a href=\"{{ path('app_about') }}\" {% if app.request.get('_route') == 'app_about' %}class=\"active\"{% endif %}>À propos</a></li>
            <li><a href=\"{{ path('app_contact') }}\" {% if app.request.get('_route') == 'app_contact' %}class=\"active\"{% endif %}>Contact</a></li>
            {% if app.user %}
                <li><a href=\"{{ path('app_logout') }}\" class=\"nav-logout\">Déconnexion</a></li>
            {% else %}
                <li><a href=\"{{ path('app_login') }}\" {% if app.request.get('_route') == 'app_login' %}class=\"active\"{% endif %}>Connexion</a></li>
            {% endif %}
        </ul>
    </div>
</nav>

        <main>
            {% block body %}{% endblock %}
        </main>

        <footer class=\"footer\" style=\"background-color: #CD613F; color: white; padding: 20px;\">
    <div style=\"max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center;\">
        <!-- Logo ou nom du site -->
        <div style=\"flex: 1; text-align: left; margin-bottom: 10px;\">
            <p style=\"margin: 0; font-weight: bold; font-size: 1.2em;\">&copy; 2024 Tissu Magique</p>
            <p style=\"margin: 0; font-size: 0.9em; color: white;\">Des créations uniques avec passion et précision.</p>
        </div>

        <!-- Informations pratiques -->
        <div style=\"flex: 1; text-align: center; margin-bottom: 10px;\">
            <p style=\"margin: 0; font-size: 0.9em; color: white;\"><strong>Adresse :</strong> 123 Rue de la Couture, 75001 Paris, France</p>
            <p style=\"margin: 0; font-size: 0.9em; color: white;\"><strong>Horaires :</strong> Lundi - Vendredi : 9h00 - 18h00</p>
            <p style=\"margin: 0; font-size: 0.9em; color: white;\"><strong>Téléphone :</strong> <a href=\"tel:+33123456789\" style=\"text-decoration: none; color: white;\">01 23 45 67 89</a></p>
        </div>

        <!-- Navigation footer -->
        <div style=\"flex: 1; text-align: right; margin-bottom: 10px;\">
            <ul style=\"list-style: none; margin: 0; padding: 0; display: inline-flex; gap: 15px;\">
                <li>
                    <a href=\"mentions-legales.php\" style=\"text-decoration: none; color: white; font-size: 0.9em;\">Mentions légales</a>
                </li>
                <li>
                    <a href=\"politique-confidentialité.php\" style=\"text-decoration: none; color: white; font-size: 0.9em;\">Politique de confidentialité</a>
                </li>
                <li>
                    <a href=\"CGV.php\" style=\"text-decoration: none; color: white; font-size: 0.9em;\">Conditions générales de vente</a>
                </li>
            </ul>
        </div>
    </div>
</footer>

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </body>
</html>", "base.html.twig", "C:\\BTS_SIO\\SLAM\\PROJETS\\TISSU_MAGIQUE\\SymfonyTissus-magique-final\\templates\\base.html.twig");
    }
}
