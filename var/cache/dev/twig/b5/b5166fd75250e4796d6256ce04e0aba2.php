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

/* e_portfolio/index.html.twig */
class __TwigTemplate_ae4966e262dd2d4d073d9d262685848c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "e_portfolio/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "e_portfolio/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "e_portfolio/index.html.twig", 1);
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

        yield "Accueil";
        
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

        yield ">

<h1 class=\"title\" id=\"about\">À propos de moi</h1>

<div class=\"container\">
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/about1.jpg"), "html", null, true);
        yield "\" alt=\"About Image 1\">
            </div>
            <div class=\"flip-box-back\">
                <p>Texte pour encadré 1</p>
            </div>
        </div>
    </div>
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/about2.jpg"), "html", null, true);
        yield "\" alt=\"About Image 2\">
            </div>
            <div class=\"flip-box-back\">
                <p>Texte pour encadré 2</p>
            </div>
        </div>
    </div>
</div>

<h1 class=\"title\" id=\"projects\">Mes Projets</h1>

<div class=\"engagements-container\">
    <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence_administrer");
        yield "\" class=\"box\">
        <img src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/canard.jpg"), "html", null, true);
        yield "\" alt=\"Image 1\">
        <p>Administrer</p>
    </a>
    <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence_connecter");
        yield "\" class=\"box\">
        <img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image2.jpg"), "html", null, true);
        yield "\" alt=\"Image 2\">
        <p>Connecter</p>
    </a>
    <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence_programmer");
        yield "\" class=\"box\">
        <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image3.jpg"), "html", null, true);
        yield "\" alt=\"Image 3\">
        <p>Programmer</p>
    </a>
    <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence_securiser");
        yield "\" class=\"box\">
        <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image4.jpg"), "html", null, true);
        yield "\" alt=\"Image 4\">
        <p>Sécuriser</p>
    </a>
    <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence_proteger");
        yield "\" class=\"box\">
        <img src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/image5.jpg"), "html", null, true);
        yield "\" alt=\"Image 5\">
        <p>Protéger</p>
    </a>
</div>

<h1 class=\"title\" id=\"experience\">Expérience professionnelle</h1>

<div class=\"container\">
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tuteur_numerique.jpg"), "html", null, true);
        yield "\" alt=\"Tuteur numérique Etudiant\">
            </div>
            <div class=\"flip-box-back\">
                <p>Tuteur numérique Etudiant</p>
            </div>
        </div>
    </div>
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/another_image.jpg"), "html", null, true);
        yield "\" alt=\"Another Image\">
            </div>
            <div class=\"flip-box-back\">
                <p>Another Description</p>
            </div>
        </div>
    </div>
</div>

<h1 class=\"title\" id=\"engagements\">Mes engagements</h1>

<div class=\"engagements-container\">
    <div class=\"box\">
        <img src=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/engagement1.jpg"), "html", null, true);
        yield "\" alt=\"Engagement 1\">
        <p>Engagement 1</p>
    </div>
    <div class=\"box\">
        <img src=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/engagement2.jpg"), "html", null, true);
        yield "\" alt=\"Engagement 2\">
        <p>Engagement 2</p>
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
        return "e_portfolio/index.html.twig";
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
        return array (  231 => 90,  224 => 86,  208 => 73,  195 => 63,  181 => 52,  177 => 51,  171 => 48,  167 => 47,  161 => 44,  157 => 43,  151 => 40,  147 => 39,  141 => 36,  137 => 35,  122 => 23,  109 => 13,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}>

<h1 class=\"title\" id=\"about\">À propos de moi</h1>

<div class=\"container\">
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"{{ asset('images/about1.jpg') }}\" alt=\"About Image 1\">
            </div>
            <div class=\"flip-box-back\">
                <p>Texte pour encadré 1</p>
            </div>
        </div>
    </div>
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"{{ asset('images/about2.jpg') }}\" alt=\"About Image 2\">
            </div>
            <div class=\"flip-box-back\">
                <p>Texte pour encadré 2</p>
            </div>
        </div>
    </div>
</div>

<h1 class=\"title\" id=\"projects\">Mes Projets</h1>

<div class=\"engagements-container\">
    <a href=\"{{ path('competence_administrer') }}\" class=\"box\">
        <img src=\"{{ asset('images/canard.jpg') }}\" alt=\"Image 1\">
        <p>Administrer</p>
    </a>
    <a href=\"{{ path('competence_connecter') }}\" class=\"box\">
        <img src=\"{{ asset('images/image2.jpg') }}\" alt=\"Image 2\">
        <p>Connecter</p>
    </a>
    <a href=\"{{ path('competence_programmer') }}\" class=\"box\">
        <img src=\"{{ asset('images/image3.jpg') }}\" alt=\"Image 3\">
        <p>Programmer</p>
    </a>
    <a href=\"{{ path('competence_securiser') }}\" class=\"box\">
        <img src=\"{{ asset('images/image4.jpg') }}\" alt=\"Image 4\">
        <p>Sécuriser</p>
    </a>
    <a href=\"{{ path('competence_proteger') }}\" class=\"box\">
        <img src=\"{{ asset('images/image5.jpg') }}\" alt=\"Image 5\">
        <p>Protéger</p>
    </a>
</div>

<h1 class=\"title\" id=\"experience\">Expérience professionnelle</h1>

<div class=\"container\">
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"{{ asset('images/tuteur_numerique.jpg') }}\" alt=\"Tuteur numérique Etudiant\">
            </div>
            <div class=\"flip-box-back\">
                <p>Tuteur numérique Etudiant</p>
            </div>
        </div>
    </div>
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"{{ asset('images/another_image.jpg') }}\" alt=\"Another Image\">
            </div>
            <div class=\"flip-box-back\">
                <p>Another Description</p>
            </div>
        </div>
    </div>
</div>

<h1 class=\"title\" id=\"engagements\">Mes engagements</h1>

<div class=\"engagements-container\">
    <div class=\"box\">
        <img src=\"{{ asset('images/engagement1.jpg') }}\" alt=\"Engagement 1\">
        <p>Engagement 1</p>
    </div>
    <div class=\"box\">
        <img src=\"{{ asset('images/engagement2.jpg') }}\" alt=\"Engagement 2\">
        <p>Engagement 2</p>
    </div>
</div>

{% endblock %}", "e_portfolio/index.html.twig", "C:\\Users\\mathi\\Documents\\E-Portfolio\\templates\\e_portfolio\\index.html.twig");
    }
}
