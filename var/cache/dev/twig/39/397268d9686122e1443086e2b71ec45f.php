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

/* creations/index.html.twig */
class __TwigTemplate_0226bac56cdd36d35dd323a1bcd63e53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creations/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "creations/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "creations/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <h2>Filtrer les créations</h2>
    <form method=\"GET\" action=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_creations_index");
        yield "\" class=\"mb-4 d-flex gap-3 align-items-center\">
        <div>
            <label for=\"publicCible\" class=\"form-label\">Public ciblé :</label>
            <select name=\"publicCible\" id=\"publicCible\" class=\"form-select\">
                <option value=\"\" ";
        // line 9
        if ( !(isset($context["filter_publicCible"]) || array_key_exists("filter_publicCible", $context) ? $context["filter_publicCible"] : (function () { throw new RuntimeError('Variable "filter_publicCible" does not exist.', 9, $this->source); })())) {
            yield "selected";
        }
        yield ">Tous</option>
                <option value=\"homme\" ";
        // line 10
        if (((isset($context["filter_publicCible"]) || array_key_exists("filter_publicCible", $context) ? $context["filter_publicCible"] : (function () { throw new RuntimeError('Variable "filter_publicCible" does not exist.', 10, $this->source); })()) == "homme")) {
            yield "selected";
        }
        yield ">Homme</option>
                <option value=\"femme\" ";
        // line 11
        if (((isset($context["filter_publicCible"]) || array_key_exists("filter_publicCible", $context) ? $context["filter_publicCible"] : (function () { throw new RuntimeError('Variable "filter_publicCible" does not exist.', 11, $this->source); })()) == "femme")) {
            yield "selected";
        }
        yield ">Femme</option>
                <option value=\"enfant\" ";
        // line 12
        if (((isset($context["filter_publicCible"]) || array_key_exists("filter_publicCible", $context) ? $context["filter_publicCible"] : (function () { throw new RuntimeError('Variable "filter_publicCible" does not exist.', 12, $this->source); })()) == "enfant")) {
            yield "selected";
        }
        yield ">Enfant</option>
            </select>
        </div>

        <div>
            <label for=\"categorie\" class=\"form-label\">Catégorie :</label>
            <select name=\"categorie\" id=\"categorie\" class=\"form-select\">
                <option value=\"\" ";
        // line 19
        if ( !(isset($context["filter_categorie"]) || array_key_exists("filter_categorie", $context) ? $context["filter_categorie"] : (function () { throw new RuntimeError('Variable "filter_categorie" does not exist.', 19, $this->source); })())) {
            yield "selected";
        }
        yield ">Toutes</option>
                <option value=\"jupe\" ";
        // line 20
        if (((isset($context["filter_categorie"]) || array_key_exists("filter_categorie", $context) ? $context["filter_categorie"] : (function () { throw new RuntimeError('Variable "filter_categorie" does not exist.', 20, $this->source); })()) == "jupe")) {
            yield "selected";
        }
        yield ">Jupe</option>
                <option value=\"tee-shirt\" ";
        // line 21
        if (((isset($context["filter_categorie"]) || array_key_exists("filter_categorie", $context) ? $context["filter_categorie"] : (function () { throw new RuntimeError('Variable "filter_categorie" does not exist.', 21, $this->source); })()) == "tee-shirt")) {
            yield "selected";
        }
        yield ">Tee-shirt</option>
                <option value=\"robe\" ";
        // line 22
        if (((isset($context["filter_categorie"]) || array_key_exists("filter_categorie", $context) ? $context["filter_categorie"] : (function () { throw new RuntimeError('Variable "filter_categorie" does not exist.', 22, $this->source); })()) == "robe")) {
            yield "selected";
        }
        yield ">Robe</option>
                <option value=\"pantalon\" ";
        // line 23
        if (((isset($context["filter_categorie"]) || array_key_exists("filter_categorie", $context) ? $context["filter_categorie"] : (function () { throw new RuntimeError('Variable "filter_categorie" does not exist.', 23, $this->source); })()) == "pantalon")) {
            yield "selected";
        }
        yield ">Pantalon</option>
                <option value=\"veste\" ";
        // line 24
        if (((isset($context["filter_categorie"]) || array_key_exists("filter_categorie", $context) ? $context["filter_categorie"] : (function () { throw new RuntimeError('Variable "filter_categorie" does not exist.', 24, $this->source); })()) == "veste")) {
            yield "selected";
        }
        yield ">Veste</option>
                <option value=\"accessoire\" ";
        // line 25
        if (((isset($context["filter_categorie"]) || array_key_exists("filter_categorie", $context) ? $context["filter_categorie"] : (function () { throw new RuntimeError('Variable "filter_categorie" does not exist.', 25, $this->source); })()) == "accessoire")) {
            yield "selected";
        }
        yield ">Accessoire</option>
            </select>
        </div>

        <div class=\"align-self-end\">
            <button type=\"submit\" class=\"btn btn-primary\">Filtrer</button>
            <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_creations_index");
        yield "\" class=\"btn btn-secondary ms-2\">Réinitialiser</a>
        </div>
    </form>

    <div class=\"row\">
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["creations"]) || array_key_exists("creations", $context) ? $context["creations"] : (function () { throw new RuntimeError('Variable "creations" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["creation"]) {
            // line 37
            yield "            <div class=\"col-md-3 mb-4\">
                <div class=\"card h-100\">
                    ";
            // line 39
            if (CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "imagePath", [], "any", false, false, false, 39)) {
                // line 40
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "imagePath", [], "any", false, false, false, 40))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "nom", [], "any", false, false, false, 40), "html", null, true);
                yield "\" class=\"card-img-top\">
                    ";
            } else {
                // line 42
                yield "                        <p class=\"text-center py-4\">No image available</p>
                    ";
            }
            // line 44
            yield "                    <div class=\"card-body d-flex flex-column\">
                        <h5 class=\"card-title\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "nom", [], "any", false, false, false, 45), "html", null, true);
            yield "</h5>
                        <p class=\"card-text\">Taille: ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "taille", [], "any", false, false, false, 46), "html", null, true);
            yield " <br> Prix: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "prix", [], "any", false, false, false, 46), "html", null, true);
            yield "€</p>
                        <div class=\"mt-auto d-flex gap-2 flex-wrap\">
                            ";
            // line 49
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Voir détails</a>

                            ";
            // line 52
            yield "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 53
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_creations_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                <form action=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_creations_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\" method=\"POST\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette création ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 55))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </button>
                                </form>
                            ";
            }
            // line 61
            yield "
                            ";
            // line 63
            yield "                            ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 64
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personnaliser", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Personnaliser</a>
                            ";
            }
            // line 66
            yield "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 70
        if (!$context['_iterated']) {
            // line 71
            yield "            <p>Aucune création ne correspond aux critères.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['creation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "    </div>

    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "flashes", ["success"], "method", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 76
            yield "        <div class=\"alert alert-success\">
            ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "creations/index.html.twig";
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
        return array (  275 => 77,  272 => 76,  268 => 75,  264 => 73,  257 => 71,  255 => 70,  247 => 66,  241 => 64,  238 => 63,  235 => 61,  226 => 55,  222 => 54,  217 => 53,  214 => 52,  208 => 49,  201 => 46,  197 => 45,  194 => 44,  190 => 42,  182 => 40,  180 => 39,  176 => 37,  171 => 36,  163 => 31,  152 => 25,  146 => 24,  140 => 23,  134 => 22,  128 => 21,  122 => 20,  116 => 19,  104 => 12,  98 => 11,  92 => 10,  86 => 9,  79 => 5,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h2>Filtrer les créations</h2>
    <form method=\"GET\" action=\"{{ path('app_creations_index') }}\" class=\"mb-4 d-flex gap-3 align-items-center\">
        <div>
            <label for=\"publicCible\" class=\"form-label\">Public ciblé :</label>
            <select name=\"publicCible\" id=\"publicCible\" class=\"form-select\">
                <option value=\"\" {% if not filter_publicCible %}selected{% endif %}>Tous</option>
                <option value=\"homme\" {% if filter_publicCible == 'homme' %}selected{% endif %}>Homme</option>
                <option value=\"femme\" {% if filter_publicCible == 'femme' %}selected{% endif %}>Femme</option>
                <option value=\"enfant\" {% if filter_publicCible == 'enfant' %}selected{% endif %}>Enfant</option>
            </select>
        </div>

        <div>
            <label for=\"categorie\" class=\"form-label\">Catégorie :</label>
            <select name=\"categorie\" id=\"categorie\" class=\"form-select\">
                <option value=\"\" {% if not filter_categorie %}selected{% endif %}>Toutes</option>
                <option value=\"jupe\" {% if filter_categorie == 'jupe' %}selected{% endif %}>Jupe</option>
                <option value=\"tee-shirt\" {% if filter_categorie == 'tee-shirt' %}selected{% endif %}>Tee-shirt</option>
                <option value=\"robe\" {% if filter_categorie == 'robe' %}selected{% endif %}>Robe</option>
                <option value=\"pantalon\" {% if filter_categorie == 'pantalon' %}selected{% endif %}>Pantalon</option>
                <option value=\"veste\" {% if filter_categorie == 'veste' %}selected{% endif %}>Veste</option>
                <option value=\"accessoire\" {% if filter_categorie == 'accessoire' %}selected{% endif %}>Accessoire</option>
            </select>
        </div>

        <div class=\"align-self-end\">
            <button type=\"submit\" class=\"btn btn-primary\">Filtrer</button>
            <a href=\"{{ path('app_creations_index') }}\" class=\"btn btn-secondary ms-2\">Réinitialiser</a>
        </div>
    </form>

    <div class=\"row\">
        {% for creation in creations %}
            <div class=\"col-md-3 mb-4\">
                <div class=\"card h-100\">
                    {% if creation.imagePath %}
                        <img src=\"{{ asset('uploads/images/' ~ creation.imagePath) }}\" alt=\"{{ creation.nom }}\" class=\"card-img-top\">
                    {% else %}
                        <p class=\"text-center py-4\">No image available</p>
                    {% endif %}
                    <div class=\"card-body d-flex flex-column\">
                        <h5 class=\"card-title\">{{ creation.nom }}</h5>
                        <p class=\"card-text\">Taille: {{ creation.taille }} <br> Prix: {{ creation.prix }}€</p>
                        <div class=\"mt-auto d-flex gap-2 flex-wrap\">
                            {# Bouton \"Voir détails\" visible pour tous #}
                            <a href=\"{{ path('creation_details', {'id': creation.id}) }}\" class=\"btn btn-primary btn-sm\">Voir détails</a>

                            {# Boutons visibles uniquement pour l'admin #}
                            {% if is_granted('ROLE_ADMIN') %}
                                <a href=\"{{ path('app_creations_edit', {'id': creation.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                <form action=\"{{ path('app_creations_delete', {'id': creation.id}) }}\" method=\"POST\" class=\"d-inline\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette création ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ creation.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash-alt\"></i>
                                    </button>
                                </form>
                            {% endif %}

                            {# Bouton \"Personnaliser\" visible uniquement pour les utilisateurs non-admin #}
                            {% if is_granted('ROLE_USER') and not is_granted('ROLE_ADMIN') %}
                                <a href=\"{{ path('app_personnaliser', {'id': creation.id}) }}\" class=\"btn btn-warning btn-sm\">Personnaliser</a>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <p>Aucune création ne correspond aux critères.</p>
        {% endfor %}
    </div>

    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}
{% endblock %}
", "creations/index.html.twig", "C:\\BTS_SIO\\SLAM\\PROJETS\\TISSU_MAGIQUE\\SymfonyTissus-magique-final\\templates\\creations\\index.html.twig");
    }
}
