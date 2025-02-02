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

/* competence/administrer.html.twig */
class __TwigTemplate_1608df4ab82d912289baa546ca01615d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competence/administrer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competence/administrer.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "competence/administrer.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/administrer1.png"), "html", null, true);
        yield "\" alt=\"Photo 1\">
        </div>
        <div class=\"box text-box\">
            <h2>Configurer et dépanner le routage dynamique dans un réseau</h2>
            <p>Dans le cadre de ma formation, j'ai développé des compétences en configuration et dépannage du routage dynamique, notamment avec RIP et OSPF. J'ai appris à configurer des réseaux OSPF multisite, à gérer les aires OSPF et à résoudre des problèmes de connectivité. Ces expériences m'ont permis de comprendre les enjeux du routage dynamique, tout en identifiant des axes d'amélioration comme l'automatisation des tâches et l’approfondissement de protocoles avancés tels que BGP.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/administrer2.png"), "html", null, true);
        yield "\" alt=\"Photo 2\">
        </div>
        <div class=\"box text-box\">
            <h2>Configurer une politique simple de QoS et les fonctions de base de la sécurité d’un réseau</h2>
            <p>Dans le cadre de ma formation, j’ai acquis des compétences dans la configuration de politiques de QoS (Qualité de Service) et de sécurité réseau. J’ai mis en place des ACL pour sécuriser les flux réseaux, configuré une redondance DNS pour garantir la disponibilité des services, et implémenté un système de journalisation pour suivre les activités réseau. J’ai également utilisé des stratégies de groupe (GPO) pour limiter les accès non autorisés et renforcer la sécurité. Pour améliorer mes compétences, je cherche à automatiser ces processus avec des outils comme Ansible et à explorer de nouveaux outils de surveillance tels que Zabbix ou SIEM.</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/adminitrer3.png"), "html", null, true);
        yield "\" alt=\"Photo 3\">
        </div>
        <div class=\"box text-box\">
            <h2>Déployer des postes clients et des solutions virtualisées</h2>
            <p>J'ai acquis la compétence de déployer des postes clients et des solutions virtualisées, en configurant et gérant des environnements virtualisés principalement sous VMware. J'ai appris à créer et déployer des machines virtuelles, en utilisant des modèles prédéfinis pour optimiser les processus et réduire le temps de déploiement. J'ai également porté une attention particulière à la configuration des ressources des machines (RAM, stockage, interfaces réseau) afin d’assurer une utilisation optimale et la stabilité des environnements. Cette compétence m'a permis de travailler avec des serveurs Windows virtualisés, et je cherche désormais à étendre mes connaissances en virtualisation sous Linux et à explorer d'autres outils d’automatisation et hyperviseurs.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/administrer4.png"), "html", null, true);
        yield "\" alt=\"Photo 4\">
        </div>
        <div class=\"box text-box\">
            <h2>Déployer des services réseaux avancés et systèmes de supervision (gestion des utilisateurs: LDAP, ActiveDirectory)</h2>
            <p>
                J'ai acquis des compétences dans le déploiement de services réseaux avancés, notamment en configurant Active Directory (AD) pour gérer les utilisateurs et sécuriser les postes clients. J'ai créé une forêt AD-DS, organisé des unités organisationnelles, défini des groupes d’utilisateurs et mis en place des stratégies de groupe (GPO). Je souhaite approfondir ma compréhension du service LDAP et de son intégration, en explorant son utilisation, en automatisant la gestion des utilisateurs via des scripts PowerShell ou Python, et en comparant AD et LDAP dans des projets pratiques.</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/administrer5.png"), "html", null, true);
        yield "\" alt=\"Photo 5\">
        </div>
        <div class=\"box text-box\">
            <h2>Identifier les réseaux opérateurs et l’architecture d’Internet</h2>
            <p>J'ai acquis des compétences dans l'identification et la configuration de réseaux opérateurs, notamment avec la technologie frame-relay en couche 2 et l'intégration de protocoles de routage comme OSPF en couche 3. J'ai également travaillé sur la résolution de problèmes complexes, tels que des erreurs de configuration ou des conflits d’adresses IP. Je souhaite approfondir mes connaissances sur des technologies avancées comme MPLS, VRF et les réseaux à grande échelle, en suivant des formations, en pratiquant sur des simulateurs comme GNS3 et en m'engageant dans des projets personnels.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/administrer6.jpg"), "html", null, true);
        yield "\" alt=\"Photo 6\">
        </div>
        <div class=\"box text-box\">
            <h2>Travailler en équipe pour développer ses compétences professionnelles</h2>
            <p>J'ai travaillé en équipe pour développer mes compétences professionnelles. Cela m'a appris à organiser le travail, répartir les tâches et respecter les délais. J'ai aussi appris l'importance de bien communiquer pour partager les informations et éviter les malentendus. Je sais qu'en améliorant ma communication et en utilisant des outils adaptés, je pourrais encore mieux collaborer avec mes collègues.</p>
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
        return "competence/administrer.html.twig";
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
        return array (  168 => 57,  156 => 48,  143 => 38,  131 => 29,  119 => 20,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
            <img src=\"{{ asset('images/administrer1.png') }}\" alt=\"Photo 1\">
        </div>
        <div class=\"box text-box\">
            <h2>Configurer et dépanner le routage dynamique dans un réseau</h2>
            <p>Dans le cadre de ma formation, j'ai développé des compétences en configuration et dépannage du routage dynamique, notamment avec RIP et OSPF. J'ai appris à configurer des réseaux OSPF multisite, à gérer les aires OSPF et à résoudre des problèmes de connectivité. Ces expériences m'ont permis de comprendre les enjeux du routage dynamique, tout en identifiant des axes d'amélioration comme l'automatisation des tâches et l’approfondissement de protocoles avancés tels que BGP.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/administrer2.png') }}\" alt=\"Photo 2\">
        </div>
        <div class=\"box text-box\">
            <h2>Configurer une politique simple de QoS et les fonctions de base de la sécurité d’un réseau</h2>
            <p>Dans le cadre de ma formation, j’ai acquis des compétences dans la configuration de politiques de QoS (Qualité de Service) et de sécurité réseau. J’ai mis en place des ACL pour sécuriser les flux réseaux, configuré une redondance DNS pour garantir la disponibilité des services, et implémenté un système de journalisation pour suivre les activités réseau. J’ai également utilisé des stratégies de groupe (GPO) pour limiter les accès non autorisés et renforcer la sécurité. Pour améliorer mes compétences, je cherche à automatiser ces processus avec des outils comme Ansible et à explorer de nouveaux outils de surveillance tels que Zabbix ou SIEM.</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/adminitrer3.png') }}\" alt=\"Photo 3\">
        </div>
        <div class=\"box text-box\">
            <h2>Déployer des postes clients et des solutions virtualisées</h2>
            <p>J'ai acquis la compétence de déployer des postes clients et des solutions virtualisées, en configurant et gérant des environnements virtualisés principalement sous VMware. J'ai appris à créer et déployer des machines virtuelles, en utilisant des modèles prédéfinis pour optimiser les processus et réduire le temps de déploiement. J'ai également porté une attention particulière à la configuration des ressources des machines (RAM, stockage, interfaces réseau) afin d’assurer une utilisation optimale et la stabilité des environnements. Cette compétence m'a permis de travailler avec des serveurs Windows virtualisés, et je cherche désormais à étendre mes connaissances en virtualisation sous Linux et à explorer d'autres outils d’automatisation et hyperviseurs.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/administrer4.png') }}\" alt=\"Photo 4\">
        </div>
        <div class=\"box text-box\">
            <h2>Déployer des services réseaux avancés et systèmes de supervision (gestion des utilisateurs: LDAP, ActiveDirectory)</h2>
            <p>
                J'ai acquis des compétences dans le déploiement de services réseaux avancés, notamment en configurant Active Directory (AD) pour gérer les utilisateurs et sécuriser les postes clients. J'ai créé une forêt AD-DS, organisé des unités organisationnelles, défini des groupes d’utilisateurs et mis en place des stratégies de groupe (GPO). Je souhaite approfondir ma compréhension du service LDAP et de son intégration, en explorant son utilisation, en automatisant la gestion des utilisateurs via des scripts PowerShell ou Python, et en comparant AD et LDAP dans des projets pratiques.</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/administrer5.png') }}\" alt=\"Photo 5\">
        </div>
        <div class=\"box text-box\">
            <h2>Identifier les réseaux opérateurs et l’architecture d’Internet</h2>
            <p>J'ai acquis des compétences dans l'identification et la configuration de réseaux opérateurs, notamment avec la technologie frame-relay en couche 2 et l'intégration de protocoles de routage comme OSPF en couche 3. J'ai également travaillé sur la résolution de problèmes complexes, tels que des erreurs de configuration ou des conflits d’adresses IP. Je souhaite approfondir mes connaissances sur des technologies avancées comme MPLS, VRF et les réseaux à grande échelle, en suivant des formations, en pratiquant sur des simulateurs comme GNS3 et en m'engageant dans des projets personnels.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/administrer6.jpg') }}\" alt=\"Photo 6\">
        </div>
        <div class=\"box text-box\">
            <h2>Travailler en équipe pour développer ses compétences professionnelles</h2>
            <p>J'ai travaillé en équipe pour développer mes compétences professionnelles. Cela m'a appris à organiser le travail, répartir les tâches et respecter les délais. J'ai aussi appris l'importance de bien communiquer pour partager les informations et éviter les malentendus. Je sais qu'en améliorant ma communication et en utilisant des outils adaptés, je pourrais encore mieux collaborer avec mes collègues.</p>
        </div>
    </div>
</div>

{% endblock %}", "competence/administrer.html.twig", "C:\\Users\\mathi\\Documents\\E-Portfolio\\templates\\competence\\administrer.html.twig");
    }
}
