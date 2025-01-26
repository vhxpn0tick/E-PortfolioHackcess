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

/* competence/programmer.html.twig */
class __TwigTemplate_e1af7bdd65dc1abcae208d2358aa3a9e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competence/programmer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competence/programmer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "competence/programmer.html.twig", 1);
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
        yield "<h1>Mes compétences</h1>

<div class=\"projects-container\">
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/programmer1.png"), "html", null, true);
        yield "\" alt=\"Photo 1\">
        </div>
        <div class=\"box text-box\">
            <h2>Automatiser l’administration système avec des scripts</h2>
            <p>J'ai développé des compétences en automatisation de l'administration système avec PowerShell et Python, ce qui m'a permis d'optimiser des tâches comme la gestion des utilisateurs dans Active Directory ou l'interconnexion avec des bases de données. Cependant, je souhaite approfondir mes connaissances en explorant des outils plus avancés comme Ansible ou Puppet, et en étudiant l'automatisation multiplateforme, notamment sur Linux et dans le cloud. Pour cela, je prévois de suivre des formations complémentaires et de travailler sur des projets personnels pour renforcer mes compétences.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/programmer2.png"), "html", null, true);
        yield "\" alt=\"Photo 2\">
        </div>
        <div class=\"box text-box\">
            <h2>Développer une application à partir d’un cahier des charges donné, pour le Web ou les périphériques mobiles</h2>
            <p>J'ai développé des applications en suivant un cahier des charges, dont une application mobile en Java pour des échanges TCP/UDP et un site web avec Symfony. Ces projets m'ont permis d'appliquer des concepts de protocoles réseau et de développement d'interfaces utilisateurs. Cependant, je souhaite diversifier mes compétences en explorant d'autres frameworks comme React ou Flutter, et en travaillant sur des projets mobiles plus variés, pour améliorer mes compétences techniques et explorer de nouvelles perspectives.</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/programmer3.png"), "html", null, true);
        yield "\" alt=\"Photo 3\">
        </div>
        <div class=\"box text-box\">
            <h2>Utiliser un protocole réseau pour programmer une application client/serveur</h2>
            <p>
                J'ai développé une application mobile en Java pour des échanges client/serveur en utilisant TCP et UDP. Le projet m'a permis de comprendre les communications réseau, avec des fonctionnalités comme l'échange de messages et le transfert de fichiers. Toutefois, je souhaite explorer d'autres protocoles comme HTTP ou WebSockets, intégrer des fonctionnalités plus complexes, et améliorer l'interface utilisateur avec des frameworks comme Flutter ou React Native. Pour cela, je prévois de suivre des formations et de travailler sur des projets diversifiés.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/programmer4.png"), "html", null, true);
        yield "\" alt=\"Photo 4\">
        </div>
        <div class=\"box text-box\">
            <h2> Installer, administrer un système de gestion de données (SQL, NoSQL)</h2>
            <p>J'ai développé un site web connecté à une base de données pour gérer une bibliothèque, en utilisant SQL pour les opérations d'emprunts, de gestion des utilisateurs, et des droits d'accès différenciés. Ce projet m’a permis d’assimiler les bases de données relationnelles, mais je souhaite approfondir mes compétences en explorant des SGBD alternatifs comme MongoDB, PostgreSQL, et les bases NoSQL. Pour aller plus loin, je prévois de travailler sur des projets plus complexes et d’explorer des concepts comme les transactions et l'optimisation pour des volumes de données plus importants.</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/programmer5.png"), "html", null, true);
        yield "\" alt=\"Photo 5\">
        </div>
        <div class=\"box text-box\">
            <h2>Accéder à un ensemble de données depuis une application et/ou un site web</h2>
            <p>J'ai créé un site web relié à une base de données simulant une bibliothèque, avec un backend Symfony pour gérer les utilisateurs, les emprunts et les événements. Le projet m’a permis de maîtriser la gestion des données via SQL, mais j'ai constaté des limites de personnalisation avec Symfony. Pour améliorer cela, j’envisage d'explorer d'autres frameworks comme Laravel ou Django, offrant plus de flexibilité pour la gestion des utilisateurs et des droits d'accès.</p>
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
        return "competence/programmer.html.twig";
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
        return array (  156 => 48,  144 => 39,  131 => 29,  119 => 20,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes compétences{% endblock %}

{% block body %}
<h1>Mes compétences</h1>

<div class=\"projects-container\">
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/programmer1.png') }}\" alt=\"Photo 1\">
        </div>
        <div class=\"box text-box\">
            <h2>Automatiser l’administration système avec des scripts</h2>
            <p>J'ai développé des compétences en automatisation de l'administration système avec PowerShell et Python, ce qui m'a permis d'optimiser des tâches comme la gestion des utilisateurs dans Active Directory ou l'interconnexion avec des bases de données. Cependant, je souhaite approfondir mes connaissances en explorant des outils plus avancés comme Ansible ou Puppet, et en étudiant l'automatisation multiplateforme, notamment sur Linux et dans le cloud. Pour cela, je prévois de suivre des formations complémentaires et de travailler sur des projets personnels pour renforcer mes compétences.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/programmer2.png') }}\" alt=\"Photo 2\">
        </div>
        <div class=\"box text-box\">
            <h2>Développer une application à partir d’un cahier des charges donné, pour le Web ou les périphériques mobiles</h2>
            <p>J'ai développé des applications en suivant un cahier des charges, dont une application mobile en Java pour des échanges TCP/UDP et un site web avec Symfony. Ces projets m'ont permis d'appliquer des concepts de protocoles réseau et de développement d'interfaces utilisateurs. Cependant, je souhaite diversifier mes compétences en explorant d'autres frameworks comme React ou Flutter, et en travaillant sur des projets mobiles plus variés, pour améliorer mes compétences techniques et explorer de nouvelles perspectives.</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/programmer3.png') }}\" alt=\"Photo 3\">
        </div>
        <div class=\"box text-box\">
            <h2>Utiliser un protocole réseau pour programmer une application client/serveur</h2>
            <p>
                J'ai développé une application mobile en Java pour des échanges client/serveur en utilisant TCP et UDP. Le projet m'a permis de comprendre les communications réseau, avec des fonctionnalités comme l'échange de messages et le transfert de fichiers. Toutefois, je souhaite explorer d'autres protocoles comme HTTP ou WebSockets, intégrer des fonctionnalités plus complexes, et améliorer l'interface utilisateur avec des frameworks comme Flutter ou React Native. Pour cela, je prévois de suivre des formations et de travailler sur des projets diversifiés.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/programmer4.png') }}\" alt=\"Photo 4\">
        </div>
        <div class=\"box text-box\">
            <h2> Installer, administrer un système de gestion de données (SQL, NoSQL)</h2>
            <p>J'ai développé un site web connecté à une base de données pour gérer une bibliothèque, en utilisant SQL pour les opérations d'emprunts, de gestion des utilisateurs, et des droits d'accès différenciés. Ce projet m’a permis d’assimiler les bases de données relationnelles, mais je souhaite approfondir mes compétences en explorant des SGBD alternatifs comme MongoDB, PostgreSQL, et les bases NoSQL. Pour aller plus loin, je prévois de travailler sur des projets plus complexes et d’explorer des concepts comme les transactions et l'optimisation pour des volumes de données plus importants.</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/programmer5.png') }}\" alt=\"Photo 5\">
        </div>
        <div class=\"box text-box\">
            <h2>Accéder à un ensemble de données depuis une application et/ou un site web</h2>
            <p>J'ai créé un site web relié à une base de données simulant une bibliothèque, avec un backend Symfony pour gérer les utilisateurs, les emprunts et les événements. Le projet m’a permis de maîtriser la gestion des données via SQL, mais j'ai constaté des limites de personnalisation avec Symfony. Pour améliorer cela, j’envisage d'explorer d'autres frameworks comme Laravel ou Django, offrant plus de flexibilité pour la gestion des utilisateurs et des droits d'accès.</p>
        </div>
    </div>
</div>

{% endblock %}", "competence/programmer.html.twig", "C:\\Users\\mathi\\Documents\\E-Portfolio\\templates\\competence\\programmer.html.twig");
    }
}
