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

/* dashboard/index.html.twig */
class __TwigTemplate_df5d8d9cc7cff28330a4a25c434dc5bd extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Dashboard - Administration";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<style>
body {
    font-family: Arial, sans-serif;
    background-color: #F4FAFB;
    margin: 0;
    padding: 0;
}

.logo-container {
    text-align: center;
    margin: 20px 0;
}

.logo-container img {
    max-width: 150px;
}

.dashboard-container {
    padding: 40px;  /* Augmenté pour plus d'espace */
    max-width: 800px;  /* Réduit pour centrer davantage */
    margin: 50px auto;  /* Marge augmentée en haut et en bas */
}

.row {
    display: flex;
    justify-content: center;
    flex-direction: row;  /* Cards côte à côte */
    /* flex-direction: column;  Décommentez cette ligne pour mettre les cards l'une au-dessus de l'autre */
    gap: 30px;  /* Espace entre les cards */
    align-items: center;
}

.col-lg-4 {
    width: 350px;  /* Largeur fixe pour chaque card */
    flex: none;
}

.card {
    margin-bottom: 30px;  /* Plus d'espace entre les cards si elles sont empilées */
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
}

.card-header {
    background-color: #CD613F;
    color: white;
    font-weight: 600;
    font-size: 1.2rem;
    border-radius: 15px 15px 0 0;
    padding: 1rem 1.5rem;
    border-bottom: none;
}

.card-body {
    padding: 1.5rem;
}

.card-title {
    color: #333;
    font-size: 1.1rem;
    margin-bottom: 1rem;
    font-weight: 600;
}

.card p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.btn-primary {
    background-color: #CD613F;
    color: white;
    padding: 0.6rem 1.5rem;
    border-radius: 8px;
    font-weight: 500;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 15px rgba(205, 97, 63, 0.2);
    border: none;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: #b85536;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(205, 97, 63, 0.3);
}

h1 {
    text-align: center;
    color: #FF6600;
    margin-bottom: 30px;
    font-weight: 600;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 106
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

        // line 107
        yield "<div class=\"container-fluid\">

    <!-- Dashboard Content -->
    <div class=\"dashboard-container\">
        <div class=\"row\">
            <!-- Card 2: Actions -->
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Actions Rapides
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Ajouter un article</h5>
                        <p>Ajoutez un nouvel article à la vente</p>
                        <a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formart");
        yield "\" class=\"btn btn-primary\">Ajouter un article</a>                
                    </div>
                </div>
            </div>

            <!-- Card 3: Gestion des Produits -->
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Gestion des Produits
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Voir et gérer les produits</h5>
                        <p>Consultez et modifiez vos produits</p>
                        <a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_creations");
        yield "\" class=\"btn btn-primary\">Voir les produits</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
        return "dashboard/index.html.twig";
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
        return array (  256 => 135,  239 => 121,  223 => 107,  210 => 106,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard - Administration{% endblock %}

{% block stylesheets %}
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #F4FAFB;
    margin: 0;
    padding: 0;
}

.logo-container {
    text-align: center;
    margin: 20px 0;
}

.logo-container img {
    max-width: 150px;
}

.dashboard-container {
    padding: 40px;  /* Augmenté pour plus d'espace */
    max-width: 800px;  /* Réduit pour centrer davantage */
    margin: 50px auto;  /* Marge augmentée en haut et en bas */
}

.row {
    display: flex;
    justify-content: center;
    flex-direction: row;  /* Cards côte à côte */
    /* flex-direction: column;  Décommentez cette ligne pour mettre les cards l'une au-dessus de l'autre */
    gap: 30px;  /* Espace entre les cards */
    align-items: center;
}

.col-lg-4 {
    width: 350px;  /* Largeur fixe pour chaque card */
    flex: none;
}

.card {
    margin-bottom: 30px;  /* Plus d'espace entre les cards si elles sont empilées */
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
}

.card-header {
    background-color: #CD613F;
    color: white;
    font-weight: 600;
    font-size: 1.2rem;
    border-radius: 15px 15px 0 0;
    padding: 1rem 1.5rem;
    border-bottom: none;
}

.card-body {
    padding: 1.5rem;
}

.card-title {
    color: #333;
    font-size: 1.1rem;
    margin-bottom: 1rem;
    font-weight: 600;
}

.card p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.btn-primary {
    background-color: #CD613F;
    color: white;
    padding: 0.6rem 1.5rem;
    border-radius: 8px;
    font-weight: 500;
    letter-spacing: 0.5px;
    box-shadow: 0 4px 15px rgba(205, 97, 63, 0.2);
    border: none;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: #b85536;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(205, 97, 63, 0.3);
}

h1 {
    text-align: center;
    color: #FF6600;
    margin-bottom: 30px;
    font-weight: 600;
}
</style>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">

    <!-- Dashboard Content -->
    <div class=\"dashboard-container\">
        <div class=\"row\">
            <!-- Card 2: Actions -->
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Actions Rapides
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Ajouter un article</h5>
                        <p>Ajoutez un nouvel article à la vente</p>
                        <a href=\"{{ path('app_formart') }}\" class=\"btn btn-primary\">Ajouter un article</a>                
                    </div>
                </div>
            </div>

            <!-- Card 3: Gestion des Produits -->
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        Gestion des Produits
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Voir et gérer les produits</h5>
                        <p>Consultez et modifiez vos produits</p>
                        <a href=\"{{ path('app_creations') }}\" class=\"btn btn-primary\">Voir les produits</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "dashboard/index.html.twig", "C:\\BTS_SIO\\SLAM\\PROJETS\\TISSU_MAGIQUE\\SymfonyTissus-magique-final\\templates\\dashboard\\index.html.twig");
    }
}
