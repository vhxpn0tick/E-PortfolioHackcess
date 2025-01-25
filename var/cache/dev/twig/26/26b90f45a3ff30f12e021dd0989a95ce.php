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
        yield "<h1>Mes compétences</h1>

<div class=\"projects-container\">
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo1.jpg"), "html", null, true);
        yield "\" alt=\"Photo 1\">
        </div>
        <div class=\"box text-box\">
            <h2>Compétence 1</h2>
            <p>Description de la compétence 1.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo2.jpg"), "html", null, true);
        yield "\" alt=\"Photo 2\">
        </div>
        <div class=\"box text-box\">
            <h2>Compétence 2</h2>
            <p>Description de la compétence 2.</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo3.jpg"), "html", null, true);
        yield "\" alt=\"Photo 3\">
        </div>
        <div class=\"box text-box\">
            <h2>Compétence 3</h2>
            <p>Description de la compétence 3.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo4.jpg"), "html", null, true);
        yield "\" alt=\"Photo 4\">
        </div>
        <div class=\"box text-box\">
            <h2>Compétence 4</h2>
            <p>Description de la compétence 4.</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo5.jpg"), "html", null, true);
        yield "\" alt=\"Photo 5\">
        </div>
        <div class=\"box text-box\">
            <h2>Compétence 5</h2>
            <p>Description de la compétence 5.</p>
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
<h1>Mes compétences</h1>

<div class=\"projects-container\">
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/photo1.jpg') }}\" alt=\"Photo 1\">
        </div>
        <div class=\"box text-box\">
            <h2>Compétence 1</h2>
            <p>Description de la compétence 1.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/photo2.jpg') }}\" alt=\"Photo 2\">
        </div>
        <div class=\"box text-box\">
            <h2>Compétence 2</h2>
            <p>Description de la compétence 2.</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/photo3.jpg') }}\" alt=\"Photo 3\">
        </div>
        <div class=\"box text-box\">
            <h2>Compétence 3</h2>
            <p>Description de la compétence 3.</p>
        </div>
    </div>
    <div class=\"competence-row\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/photo4.jpg') }}\" alt=\"Photo 4\">
        </div>
        <div class=\"box text-box\">
            <h2>Compétence 4</h2>
            <p>Description de la compétence 4.</p>
        </div>
    </div>
    <div class=\"competence-row reverse\">
        <div class=\"box photo-box\">
            <img src=\"{{ asset('images/photo5.jpg') }}\" alt=\"Photo 5\">
        </div>
        <div class=\"box text-box\">
            <h2>Compétence 5</h2>
            <p>Description de la compétence 5.</p>
        </div>
    </div>

</div>

{% endblock %}", "competence/connecter.html.twig", "C:\\Users\\mathi\\Documents\\E-Portfolio\\templates\\competence\\connecter.html.twig");
    }
}
