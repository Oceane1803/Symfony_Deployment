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

/* apropos/about.html.twig */
class __TwigTemplate_8f40383e2367f86e2dfb9bc3956debf1 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apropos/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apropos/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "apropos/about.html.twig", 1);
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

        yield "À propos - Tissu Magique";
        
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F4FAFB;
        }
            h2 {
        text-align: center;
        color: #FF6600; /* Orange vif */
        margin-bottom: 20px;
    }
        .nav {
        background-color: #3C425A;
        padding: 10px 0;
    }
    .nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .nav ul li {
        margin: 0 15px;
    }
    .nav ul li a {
        color: white;
        text-decoration: none;
    }
    .nav ul li a.active {
        color: #CD613F;
    }

        .logo-container {
            text-align: center;
            margin: 20px 0;
        }
        .logo-container img {
            max-width: 150px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 51
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

        // line 52
        yield "
    <!-- Contenu principal -->
    <main class=\"container my-5\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h2><strong>Qui suis-je ?</strong></h2>
                <br><br>
                <p>
                    Bonjour, je suis Madame Bovary, une passionnée de couture depuis mon plus jeune âge. C'est avec amour et dévouement que j'ai transformé ma passion en une entreprise florissante. 
                </p>
                <p>
                    Mon atelier, <strong>Tissu Magique</strong>, est né d'une vision :<br><strong> Créer des vêtements uniques où chaque détail raconte une histoire.</strong><br> <br>Avec l'aide de mes trois collaborateurs talentueux, nous formons une équipe dévouée à l'art de la couture. <br>Ensemble, nous combinons tradition et modernité pour donner vie à des créations élégantes et authentiques.<br> <br>Que vous cherchiez une pièce pour une occasion spéciale ou une tenue unique pour le quotidien, nous sommes là pour répondre à vos envies.
                </p>
            </div>
            <div class=\"col-md-6\">
                <img src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/creations/boutique.jpeg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Amélie Bovary\">
            </div>
        </div>

        <div class=\"row my-5\">
            <div class=\"col-md-6\">
                <img src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/creations/couture.jpeg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Couture\">
            </div>
            <div class=\"col-md-6\">
                <h2> <strong>Qu’est-ce que je fais ?</strong></h2>
                <br><br>
                <p>
                    Chez <strong>Tissu Magique</strong>, nous mettons un point d'honneur à offrir des services de couture alliant savoir-faire artisanal et créativité. Voici ce que nous proposons :
                </p>
                <ul>
                    <li>
                        <strong>Couture fait main :</strong> Nous créons des vêtements qui épousent parfaitement votre silhouette, que ce soit des robes de soirée, des costumes élégants ou des tenues du quotidien. Chaque pièce est conçue pour refléter votre style unique.
                    </li>
                    <li>
                        <strong>Créations personnalisées :</strong> Vous avez une idée ou un rêve en tête ? Nous travaillons à vos côtés pour le concrétiser, en utilisant des tissus de qualité et des techniques éprouvées pour un résultat exceptionnel.
                    </li>
                </ul>
                <p>
                    Chaque projet que nous entreprenons est une aventure, et notre priorité est de sublimer votre personnalité à travers nos créations. Venez découvrir notre atelier, un lieu où créativité et élégance se rencontrent. Laissez-nous confectionner des vêtements qui feront partie de vos plus beaux souvenirs.
                </p>
            </div>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 97
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

        // line 98
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\"></script>
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
        return "apropos/about.html.twig";
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
        return array (  244 => 98,  231 => 97,  197 => 73,  188 => 67,  171 => 52,  158 => 51,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}À propos - Tissu Magique{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F4FAFB;
        }
            h2 {
        text-align: center;
        color: #FF6600; /* Orange vif */
        margin-bottom: 20px;
    }
        .nav {
        background-color: #3C425A;
        padding: 10px 0;
    }
    .nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .nav ul li {
        margin: 0 15px;
    }
    .nav ul li a {
        color: white;
        text-decoration: none;
    }
    .nav ul li a.active {
        color: #CD613F;
    }

        .logo-container {
            text-align: center;
            margin: 20px 0;
        }
        .logo-container img {
            max-width: 150px;
        }
    </style>
{% endblock %}

{% block body %}

    <!-- Contenu principal -->
    <main class=\"container my-5\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h2><strong>Qui suis-je ?</strong></h2>
                <br><br>
                <p>
                    Bonjour, je suis Madame Bovary, une passionnée de couture depuis mon plus jeune âge. C'est avec amour et dévouement que j'ai transformé ma passion en une entreprise florissante. 
                </p>
                <p>
                    Mon atelier, <strong>Tissu Magique</strong>, est né d'une vision :<br><strong> Créer des vêtements uniques où chaque détail raconte une histoire.</strong><br> <br>Avec l'aide de mes trois collaborateurs talentueux, nous formons une équipe dévouée à l'art de la couture. <br>Ensemble, nous combinons tradition et modernité pour donner vie à des créations élégantes et authentiques.<br> <br>Que vous cherchiez une pièce pour une occasion spéciale ou une tenue unique pour le quotidien, nous sommes là pour répondre à vos envies.
                </p>
            </div>
            <div class=\"col-md-6\">
                <img src=\"{{ asset('uploads/creations/boutique.jpeg') }}\" class=\"img-fluid\" alt=\"Amélie Bovary\">
            </div>
        </div>

        <div class=\"row my-5\">
            <div class=\"col-md-6\">
                <img src=\"{{ asset('uploads/creations/couture.jpeg') }}\" class=\"img-fluid\" alt=\"Couture\">
            </div>
            <div class=\"col-md-6\">
                <h2> <strong>Qu’est-ce que je fais ?</strong></h2>
                <br><br>
                <p>
                    Chez <strong>Tissu Magique</strong>, nous mettons un point d'honneur à offrir des services de couture alliant savoir-faire artisanal et créativité. Voici ce que nous proposons :
                </p>
                <ul>
                    <li>
                        <strong>Couture fait main :</strong> Nous créons des vêtements qui épousent parfaitement votre silhouette, que ce soit des robes de soirée, des costumes élégants ou des tenues du quotidien. Chaque pièce est conçue pour refléter votre style unique.
                    </li>
                    <li>
                        <strong>Créations personnalisées :</strong> Vous avez une idée ou un rêve en tête ? Nous travaillons à vos côtés pour le concrétiser, en utilisant des tissus de qualité et des techniques éprouvées pour un résultat exceptionnel.
                    </li>
                </ul>
                <p>
                    Chaque projet que nous entreprenons est une aventure, et notre priorité est de sublimer votre personnalité à travers nos créations. Venez découvrir notre atelier, un lieu où créativité et élégance se rencontrent. Laissez-nous confectionner des vêtements qui feront partie de vos plus beaux souvenirs.
                </p>
            </div>
        </div>
    </main>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\"></script>
{% endblock %}", "apropos/about.html.twig", "C:\\projets\\Symfony_Deployment-main\\templates\\apropos\\about.html.twig");
    }
}
