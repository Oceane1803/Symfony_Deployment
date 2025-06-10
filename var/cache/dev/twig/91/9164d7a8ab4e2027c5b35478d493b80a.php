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

/* home/index.html.twig */
class __TwigTemplate_551855e201d99dd27980f923efd1dbdb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\" />
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F4FAFB;
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
    h2 {
        text-align: center;
        color: #FF6600; /* Orange vif */
        margin-bottom: 20px;
    }
    .card {
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card img {
        height: 200px;
        object-fit: cover;
    }
    .card-title {
        color: #3C425A;
        font-size: 18px;
    }
    .content {
        margin: 40px 0;
    }

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 65
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

        // line 66
        yield "
<!-- Nouveautés Section -->
<div class=\"container\">
    <div id=\"nouveautes\" class=\"content\">
        <h2><strong>Nouveautés</strong></h2>
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/jupe_enfant.jpeg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Robe années 50\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Jupe tutu enfant</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/Sac.jpeg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Veste côtelée\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Tote bag</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/Veste_epaisse.jpeg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Veste d'hiver\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Veste en laine rouge</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/tee_homme.jpeg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Robe enfant\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Tee shirt basique homme</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Coups de cœur Section -->
    <div id=\"coeur\" class=\"content\">
        <h2><strong>Coups de cœur</strong></h2>
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/robe_chambre_homme.jpeg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Robe années 50\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Robe de chambre homme</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/Robe-enfant.jpeg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Veste côtelée\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Robe pour enfant</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/Veste.jpeg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Bob rose\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Veste en laine coloré</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/tee_enfant.jpeg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Sac à main\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Tee shirt imprimé enfant</h5>
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

    // line 149
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

        // line 150
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
        return "home/index.html.twig";
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
        return array (  291 => 150,  278 => 149,  256 => 137,  245 => 129,  234 => 121,  223 => 113,  205 => 98,  194 => 90,  183 => 82,  172 => 74,  162 => 66,  149 => 65,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\" />
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F4FAFB;
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
    h2 {
        text-align: center;
        color: #FF6600; /* Orange vif */
        margin-bottom: 20px;
    }
    .card {
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card img {
        height: 200px;
        object-fit: cover;
    }
    .card-title {
        color: #3C425A;
        font-size: 18px;
    }
    .content {
        margin: 40px 0;
    }

</style>
{% endblock %}

{% block body %}

<!-- Nouveautés Section -->
<div class=\"container\">
    <div id=\"nouveautes\" class=\"content\">
        <h2><strong>Nouveautés</strong></h2>
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"{{ asset('uploads/images/jupe_enfant.jpeg') }}\" class=\"card-img-top\" alt=\"Robe années 50\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Jupe tutu enfant</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"{{ asset('uploads/images/Sac.jpeg') }}\" class=\"card-img-top\" alt=\"Veste côtelée\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Tote bag</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"{{ asset('uploads/images/Veste_epaisse.jpeg') }}\" class=\"card-img-top\" alt=\"Veste d'hiver\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Veste en laine rouge</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"{{ asset('uploads/images/tee_homme.jpeg') }}\" class=\"card-img-top\" alt=\"Robe enfant\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Tee shirt basique homme</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Coups de cœur Section -->
    <div id=\"coeur\" class=\"content\">
        <h2><strong>Coups de cœur</strong></h2>
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"{{ asset('uploads/images/robe_chambre_homme.jpeg') }}\" class=\"card-img-top\" alt=\"Robe années 50\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Robe de chambre homme</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"{{ asset('uploads/images/Robe-enfant.jpeg') }}\" class=\"card-img-top\" alt=\"Veste côtelée\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Robe pour enfant</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"{{ asset('uploads/images/Veste.jpeg') }}\" class=\"card-img-top\" alt=\"Bob rose\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Veste en laine coloré</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6 mb-4\">
                <div class=\"card\">
                    <img src=\"{{ asset('uploads/images/tee_enfant.jpeg') }}\" class=\"card-img-top\" alt=\"Sac à main\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">Tee shirt imprimé enfant</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
{{ parent() }}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\"></script>
{% endblock %}", "home/index.html.twig", "C:\\BTS_SIO\\SLAM\\PROJETS\\TISSU_MAGIQUE\\SymfonyTissus-magique-final\\templates\\home\\index.html.twig");
    }
}
