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

/* competence/securiser.html.twig */
class __TwigTemplate_d6ad19981b6450480138798e361e6ace extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competence/securiser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competence/securiser.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "competence/securiser.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo1.jpg"), "html", null, true);
        yield "\" alt=\"Work In Progress\">
        </div>
        <div class=\"box text-box\">
            <h2> Administrer les protections contre les logiciels malveillants</h2>
            <p>Work In Progress</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/proteger2.png"), "html", null, true);
        yield "\" alt=\"Photo 2\">
        </div>
        <div class=\"box text-box\">
            <h2>Prendre en main des outils de test de pénétration réseau/système</h2>
            <p>
                Au cours de ma formation, j’ai participé à plusieurs activités de pentesting, notamment des CTF comme Marsh@ck et CSAW, ainsi que des tests sur des plateformes comme Vulnhub et TryHackMe. J’ai utilisé des outils comme Nmap, Metasploit et Parrot OS pour réaliser des attaques telles que du bruteforce, des injections de code et des attaques sur Active Directory.
                
                Pour améliorer mes compétences, je souhaite explorer de nouveaux outils comme Burp Suite, renforcer mes compétences en scripting (Python, Bash) et participer à des CTF physiques pour développer mes capacités collaboratives. Je vais aussi continuer à pratiquer régulièrement sur des plateformes comme HackTheBox et organiser des sessions d’entraînement en association.</p>
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
        return "competence/securiser.html.twig";
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
        return array (  119 => 20,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
            <img src=\"{{ asset('images/photo1.jpg') }}\" alt=\"Work In Progress\">
        </div>
        <div class=\"box text-box\">
            <h2> Administrer les protections contre les logiciels malveillants</h2>
            <p>Work In Progress</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/proteger2.png') }}\" alt=\"Photo 2\">
        </div>
        <div class=\"box text-box\">
            <h2>Prendre en main des outils de test de pénétration réseau/système</h2>
            <p>
                Au cours de ma formation, j’ai participé à plusieurs activités de pentesting, notamment des CTF comme Marsh@ck et CSAW, ainsi que des tests sur des plateformes comme Vulnhub et TryHackMe. J’ai utilisé des outils comme Nmap, Metasploit et Parrot OS pour réaliser des attaques telles que du bruteforce, des injections de code et des attaques sur Active Directory.
                
                Pour améliorer mes compétences, je souhaite explorer de nouveaux outils comme Burp Suite, renforcer mes compétences en scripting (Python, Bash) et participer à des CTF physiques pour développer mes capacités collaboratives. Je vais aussi continuer à pratiquer régulièrement sur des plateformes comme HackTheBox et organiser des sessions d’entraînement en association.</p>
        </div>
    </div>
</div>

{% endblock %}", "competence/securiser.html.twig", "C:\\Users\\mathi\\Documents\\E-Portfolio\\templates\\competence\\securiser.html.twig");
    }
}
