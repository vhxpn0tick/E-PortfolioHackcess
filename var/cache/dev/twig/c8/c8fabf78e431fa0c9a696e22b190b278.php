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

/* competence/proteger.html.twig */
class __TwigTemplate_131c83b1d2cbf519c4ea16fdcb2e871b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competence/proteger.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competence/proteger.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "competence/proteger.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/securiser.png"), "html", null, true);
        yield "\" alt=\"Photo 1\">
        </div>
        <div class=\"box text-box\">
            <h2>Utiliser les bonnes pratiques et les recommandations de cybersécurité</h2>
            <p>J’applique les bonnes pratiques de cybersécurité recommandées par l’ANSSI, telles que la gestion de mots de passe forts, la vigilance face au phishing, et la configuration d’ACL pour sécuriser les réseaux. Ces pratiques sont issues de ma formation et de mon expérience personnelle. Pour améliorer, je souhaite approfondir la gestion des incidents, tester ces pratiques dans des environnements plus complexes, et explorer des techniques avancées comme la détection d'intrusions.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/securiser2.png"), "html", null, true);
        yield "\" alt=\"Photo 2\">
        </div>
        <div class=\"box text-box\">
            <h2>Mettre en œuvre les outils fondamentaux de sécurisation d’une infrastructure du réseau </h2>
            <p>Dans le cadre de ma formation, j’ai appris à sécuriser une infrastructure réseau en utilisant des outils clés comme la segmentation via VLAN, les ACL pour filtrer le trafic, et des outils de surveillance tels que Grafana. J’ai également géré les profils utilisateurs avec Active Directory et restreint l’accès Wi-Fi via une passerelle Ubiquiti.

                Pour améliorer, je souhaite explorer des intégrations avancées, comme l’association du serveur RADIUS à Active Directory, élargir mes compétences en surveillance avec des outils comme Zabbix, et automatiser la gestion des ACL.</p>

        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo3.jpg"), "html", null, true);
        yield "\" alt=\"Work In Progress\">
        </div>
        <div class=\"box text-box\">
            <h2>Sécuriser les systèmes d’exploitation</h2>
            <p>Work In Progress</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo4.jpg"), "html", null, true);
        yield "\" alt=\"Work In Progress\">
        </div>
        <div class=\"box text-box\">
            <h2>Choisir les outils cryptographiques adaptés au besoin fonctionnel du système d’information</h2>
            <p>Work In Progress</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/securiser5.jpg"), "html", null, true);
        yield "\" alt=\"Photo 5\">
        </div>
        <div class=\"box text-box\">
            <h2>Connaître les différents types d’attaque</h2>
            <p>
                Lors de ma formation en cybersécurité, j’ai étudié divers types d’attaques informatiques : physiques, au niveau des couches réseau, et applicatives. J’ai appris à identifier des risques comme le vol d’équipement, les attaques ARP spoofing, DoS/DDoS, ou les injections SQL, tout en mettant en place des mesures de protection adaptées (contrôles d’accès, ACL, firewalls, IDS/IPS).
                
                Pour améliorer, je souhaite approfondir mes connaissances sur les nouvelles formes d’attaques, tester des scénarios complexes en laboratoire et explorer les vulnérabilités liées aux nouvelles technologies comme les API REST ou les containers.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/securiser6.jpg"), "html", null, true);
        yield "\" alt=\"Photo 6\">
        </div>
        <div class=\"box text-box\">
            <h2>Comprendre des documents techniques en anglais</h2>
            <p>
                Au cours de ma formation, j’ai amélioré ma compréhension des documents techniques en anglais grâce à des cours d’anglais axés sur la communication et à une pratique régulière sur des ressources techniques en ligne (GitHub, Stack Overflow). Cela m’a permis d’accéder à des documentations spécifiques pour résoudre des problèmes techniques dans mes projets.
                
                Pour progresser, je souhaite lire davantage de documentation technique pour enrichir mon vocabulaire, suivre des formations en anglais, et pratiquer la rédaction pour renforcer mes compétences.</p>
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
        return "competence/proteger.html.twig";
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
        return array (  173 => 62,  158 => 50,  146 => 41,  134 => 32,  119 => 20,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
            <img src=\"{{ asset('images/securiser.png') }}\" alt=\"Photo 1\">
        </div>
        <div class=\"box text-box\">
            <h2>Utiliser les bonnes pratiques et les recommandations de cybersécurité</h2>
            <p>J’applique les bonnes pratiques de cybersécurité recommandées par l’ANSSI, telles que la gestion de mots de passe forts, la vigilance face au phishing, et la configuration d’ACL pour sécuriser les réseaux. Ces pratiques sont issues de ma formation et de mon expérience personnelle. Pour améliorer, je souhaite approfondir la gestion des incidents, tester ces pratiques dans des environnements plus complexes, et explorer des techniques avancées comme la détection d'intrusions.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/securiser2.png') }}\" alt=\"Photo 2\">
        </div>
        <div class=\"box text-box\">
            <h2>Mettre en œuvre les outils fondamentaux de sécurisation d’une infrastructure du réseau </h2>
            <p>Dans le cadre de ma formation, j’ai appris à sécuriser une infrastructure réseau en utilisant des outils clés comme la segmentation via VLAN, les ACL pour filtrer le trafic, et des outils de surveillance tels que Grafana. J’ai également géré les profils utilisateurs avec Active Directory et restreint l’accès Wi-Fi via une passerelle Ubiquiti.

                Pour améliorer, je souhaite explorer des intégrations avancées, comme l’association du serveur RADIUS à Active Directory, élargir mes compétences en surveillance avec des outils comme Zabbix, et automatiser la gestion des ACL.</p>

        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/photo3.jpg') }}\" alt=\"Work In Progress\">
        </div>
        <div class=\"box text-box\">
            <h2>Sécuriser les systèmes d’exploitation</h2>
            <p>Work In Progress</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/photo4.jpg') }}\" alt=\"Work In Progress\">
        </div>
        <div class=\"box text-box\">
            <h2>Choisir les outils cryptographiques adaptés au besoin fonctionnel du système d’information</h2>
            <p>Work In Progress</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/securiser5.jpg') }}\" alt=\"Photo 5\">
        </div>
        <div class=\"box text-box\">
            <h2>Connaître les différents types d’attaque</h2>
            <p>
                Lors de ma formation en cybersécurité, j’ai étudié divers types d’attaques informatiques : physiques, au niveau des couches réseau, et applicatives. J’ai appris à identifier des risques comme le vol d’équipement, les attaques ARP spoofing, DoS/DDoS, ou les injections SQL, tout en mettant en place des mesures de protection adaptées (contrôles d’accès, ACL, firewalls, IDS/IPS).
                
                Pour améliorer, je souhaite approfondir mes connaissances sur les nouvelles formes d’attaques, tester des scénarios complexes en laboratoire et explorer les vulnérabilités liées aux nouvelles technologies comme les API REST ou les containers.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/securiser6.jpg') }}\" alt=\"Photo 6\">
        </div>
        <div class=\"box text-box\">
            <h2>Comprendre des documents techniques en anglais</h2>
            <p>
                Au cours de ma formation, j’ai amélioré ma compréhension des documents techniques en anglais grâce à des cours d’anglais axés sur la communication et à une pratique régulière sur des ressources techniques en ligne (GitHub, Stack Overflow). Cela m’a permis d’accéder à des documentations spécifiques pour résoudre des problèmes techniques dans mes projets.
                
                Pour progresser, je souhaite lire davantage de documentation technique pour enrichir mon vocabulaire, suivre des formations en anglais, et pratiquer la rédaction pour renforcer mes compétences.</p>
        </div>
    </div>
</div>

{% endblock %}", "competence/proteger.html.twig", "C:\\Users\\mathi\\Documents\\E-Portfolio\\templates\\competence\\proteger.html.twig");
    }
}
