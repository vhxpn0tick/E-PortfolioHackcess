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

/* competence/connecter.html.twig */
class __TwigTemplate_13d2a0da501b60a0f626e1752f2ab453 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competence/connecter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competence/connecter.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "competence/connecter.html.twig", 1);
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

        yield "Mes compétences";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<h1>Mes compétences dans connecter</h1>

<div class=\"projects-container\">
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/connecter1.png"), "html", null, true);
        yield "\" alt=\"Photo 1\">
        </div>
        <div class=\"box text-box\">
            <h2>Déployer et caractériser des systèmes de transmissions complexes </h2>
            <p>J'ai acquis des compétences dans le déploiement et la compréhension de systèmes de transmission complexes, incluant des technologies comme LoRaWAN, la fibre optique, et des concepts comme la modulation 16QAM. J’ai notamment conçu un objet connecté utilisant LoRaWAN pour transmettre des données vers un cloud, et réalisé des TP pratiques sur la fibre optique, où j’ai appris à souder des fibres et à mesurer les pertes lumineuses. Toutefois, je rencontre des difficultés avec les aspects mathématiques des systèmes de transmission, notamment la modulation 16QAM. Pour améliorer mes compétences, je prévois de renforcer mes bases en mathématiques appliquées et d'explorer davantage les technologies avancées telles que le multiplexage SDH, OTN et WDM.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo2.jpg"), "html", null, true);
        yield "\" alt=\"work in progress\">
        </div>
        <div class=\"box text-box\">
            <h2>Mettre en place un accès distant sécurisé</h2>
            <p>Work in progress</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo3.jpg"), "html", null, true);
        yield "\" alt=\"work in progress\">
        </div>
        <div class=\"box text-box\">
            <h2>Mettre en place une connexion multi-site via un réseau opérateur</h2>
            <p>Work in progress</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/connecter4.png"), "html", null, true);
        yield "\" alt=\"Photo 4\">
        </div>
        <div class=\"box text-box\">
            <h2> Administrer les réseaux d’accès des opérateurs</h2>
            <p>J'ai acquis des compétences en administration de réseaux d'accès opérateurs, notamment en configurant des réseaux utilisant Frame Relay et OSPF. J’ai également renforcé mes capacités en dépannage, en résolvant des erreurs complexes liées à la configuration de réseaux. Cependant, je rencontre encore des difficultés à maîtriser les architectures complexes des réseaux opérateurs et à comprendre pleinement leurs évolutions futures. Pour progresser, je prévois de poursuivre ma formation avec des simulations avancées, des études de cas réels et de suivre des cours spécialisés pour approfondir ma compréhension des réseaux opérateurs.</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/connecter5.jpg"), "html", null, true);
        yield "\" alt=\"Photo 5\">
        </div>
        <div class=\"box text-box\">
            <h2> Organiser un projet pour répondre au cahier des charges</h2>
            <p>J'ai appris à organiser et gérer des projets en respectant les timing, les deadlines, et les exigences d'un cahier des charges, notamment lors des SAE de fin de semestre. Grâce à une organisation rigoureuse et à mon expérience d’arbitrage sportif, j’ai su respecter les échéances et les critères du cahier des charges. Cependant, je souhaite améliorer ma communication avec les membres de l’équipe pour optimiser la collaboration. Pour ce faire, je prévois d’utiliser des outils collaboratifs et de favoriser les échanges réguliers pour mieux répartir les tâches et anticiper les imprévus.</p>
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
        return "competence/connecter.html.twig";
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
        return array (  155 => 47,  143 => 38,  131 => 29,  119 => 20,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes compétences{% endblock %}

{% block body %}
<h1>Mes compétences dans connecter</h1>

<div class=\"projects-container\">
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/connecter1.png') }}\" alt=\"Photo 1\">
        </div>
        <div class=\"box text-box\">
            <h2>Déployer et caractériser des systèmes de transmissions complexes </h2>
            <p>J'ai acquis des compétences dans le déploiement et la compréhension de systèmes de transmission complexes, incluant des technologies comme LoRaWAN, la fibre optique, et des concepts comme la modulation 16QAM. J’ai notamment conçu un objet connecté utilisant LoRaWAN pour transmettre des données vers un cloud, et réalisé des TP pratiques sur la fibre optique, où j’ai appris à souder des fibres et à mesurer les pertes lumineuses. Toutefois, je rencontre des difficultés avec les aspects mathématiques des systèmes de transmission, notamment la modulation 16QAM. Pour améliorer mes compétences, je prévois de renforcer mes bases en mathématiques appliquées et d'explorer davantage les technologies avancées telles que le multiplexage SDH, OTN et WDM.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/photo2.jpg') }}\" alt=\"work in progress\">
        </div>
        <div class=\"box text-box\">
            <h2>Mettre en place un accès distant sécurisé</h2>
            <p>Work in progress</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/photo3.jpg') }}\" alt=\"work in progress\">
        </div>
        <div class=\"box text-box\">
            <h2>Mettre en place une connexion multi-site via un réseau opérateur</h2>
            <p>Work in progress</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/connecter4.png') }}\" alt=\"Photo 4\">
        </div>
        <div class=\"box text-box\">
            <h2> Administrer les réseaux d’accès des opérateurs</h2>
            <p>J'ai acquis des compétences en administration de réseaux d'accès opérateurs, notamment en configurant des réseaux utilisant Frame Relay et OSPF. J’ai également renforcé mes capacités en dépannage, en résolvant des erreurs complexes liées à la configuration de réseaux. Cependant, je rencontre encore des difficultés à maîtriser les architectures complexes des réseaux opérateurs et à comprendre pleinement leurs évolutions futures. Pour progresser, je prévois de poursuivre ma formation avec des simulations avancées, des études de cas réels et de suivre des cours spécialisés pour approfondir ma compréhension des réseaux opérateurs.</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/connecter5.jpg') }}\" alt=\"Photo 5\">
        </div>
        <div class=\"box text-box\">
            <h2> Organiser un projet pour répondre au cahier des charges</h2>
            <p>J'ai appris à organiser et gérer des projets en respectant les timing, les deadlines, et les exigences d'un cahier des charges, notamment lors des SAE de fin de semestre. Grâce à une organisation rigoureuse et à mon expérience d’arbitrage sportif, j’ai su respecter les échéances et les critères du cahier des charges. Cependant, je souhaite améliorer ma communication avec les membres de l’équipe pour optimiser la collaboration. Pour ce faire, je prévois d’utiliser des outils collaboratifs et de favoriser les échanges réguliers pour mieux répartir les tâches et anticiper les imprévus.</p>
        </div>
    </div>

</div>

{% endblock %}", "competence/connecter.html.twig", "C:\\Users\\mathi\\Documents\\E-Portfolio\\templates\\competence\\connecter.html.twig");
    }
}
