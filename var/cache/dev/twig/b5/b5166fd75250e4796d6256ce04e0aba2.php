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

        // line 6
        yield "<h1 class=\"title\" id=\"about\">À propos de moi</h1>

<div class=\"container\">
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/apropos.jpg"), "html", null, true);
        yield "\" alt=\"About Image 1\">
            </div>
            <div class=\"flip-box-back\">
                <h2>Autonome, curieux et doté d’un bon sens de la communication, je valorise le travail en équipe tout en étant capable de prendre du recul pour analyser les situations avec objectivité et proposer des solutions adaptées.</h2>
                <h2>Les choses les plus importante pour moi sont les amis et la famille. Mes piliers me permettant d'évoluer et de donner le meilleur de moi même</h2>
            </div>
        </div>
    </div>
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/famille.jpg"), "html", null, true);
        yield "\" alt=\"About Image 2\">
            </div>
            <div class=\"flip-box-back\">
                <h2>Ma famille fait partie intégrante de ma vie, elle me permet de savoir ce que je dois faire. C'est aussi une immense forme d'inspiration. Elle me permet de me motiver. Enfin, les valeurs qu'elle m'a inculqué font de mon ce que je suis aujourd'hui</h2>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/administrer.jpg"), "html", null, true);
        yield "\" alt=\"Administrer\">
        <p>Administrer les réseaux et l’Internet</p>
    </a>
    <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence_connecter");
        yield "\" class=\"box\">
        <img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/connecter.jpg"), "html", null, true);
        yield "\" alt=\"Connecter\">
        <p>Connecter les entreprises et les usagers</p>
    </a>
    <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence_programmer");
        yield "\" class=\"box\">
        <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/programmer.jpg"), "html", null, true);
        yield "\" alt=\"Programmer\">
        <p>Créer des outils et des applications informatiques pour les R&T</p>
    </a>
    <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence_proteger");
        yield "\" class=\"box\">
        <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cyber1.jpg"), "html", null, true);
        yield "\" alt=\"Cyber 2\">
        <p>Administrer un système d’information sécurisé</p>
    </a>
    <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence_securiser");
        yield "\" class=\"box\">
        <img src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cyber2.jpg"), "html", null, true);
        yield "\" alt=\"Cyber 1\">
        <p>Surveiller un système d’information sécurisé</p>
    </a>
</div>

<h1 class=\"title\" id=\"experience\">Expérience professionnelle</h1>

<div class=\"container\">
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tuteur.jpg"), "html", null, true);
        yield "\" alt=\"Tuteur numérique Etudiant\">
            </div>
            <div class=\"flip-box-back\">
                <h1>Tuteur numérique Etudiant</h1>
                <h3>Aout - Octobre 2024</h3>
                <p>J'ai aidé les étudiants pour solutionner des problèmes informatiques au début d'année scolaire. Je les aidais dans les procédures numériques, les conseillais pour du matériel information ou les guidais sur les outils mis à disposition par l'UJM</p>
            </div>
        </div>
    </div>
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/renfort.jpg"), "html", null, true);
        yield "\" alt=\"Another Image\">
            </div>
            <div class=\"flip-box-back\">
                <h1>Renfort auu service informatique</h1>
                <h3>Juillet 2024</h3>
                <p>Pendant les vacances, je suis venu aider le service informatique notammer pour effectuer le changement et déploiement de nouveaux outils /matériels informatiques dans l'IUT mais aussi pour effectuer la maintenance de l’infrastructure réseau</p>

            </div>
        </div>
    </div>
</div>

<h1 class=\"title\" id=\"engagements\">Mes engagements</h1>

<div class=\"engagements-container\">
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/arbitre.jpg"), "html", null, true);
        yield "\" alt=\"Another Image\">
            </div>
            <div class=\"flip-box-back\">
                <h1>Arbitre départementale de basketball</h1>
                <h3>Depuis 2021</h3>
                <p>A la fin du COVID-19, j'ai pu passer la formation d'arbitre départementale de basket. Je suis alors devenu arbitre stagiaire pour le comité de la Loire et après quelque mois, j'ai pu devenir arbitre officiel. Cela m'a permis de pouvoir continuer d'arbitrer des match pour le comité en allant jusqu'à arbitrer de la régionale. J'ai aussi pu arbitrer des matchs internationnaux comme sur la photo au tournoi internationnal de montbrison. </p>
            </div>
        </div>
    </div>
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/hackcess.jpg"), "html", null, true);
        yield "\" alt=\"Another Image\">
            </div>
            <div class=\"flip-box-back\">
                <h1>Vice-Président d'Hackcess</h1>
                <h3> Depuis 2024</h3>
                <p>Grâce au club cyber de l'IUT, je peux participer à des concours de cybersécurité comme le CSAW (où nous avons finis 5/250) et le MarsH@ck (17/26)
                <p> Je fais aussi de la promotion de l'association pendant les journées pour ouvertes ...</p>
                <p>Je realise aussi des projet (Comme la boutique)</p>
                <p>Enfin, je fais aussi de la sensibilisation à la cybersécurité entre autre avec les élèves de lycée participant au programme cordée de la réussite</p>
            </div>
        </div>
    </div>
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/formation.jpg"), "html", null, true);
        yield "\" alt=\"Another Image\">
            </div>
            <div class=\"flip-box-back\">
                <h1>Responsable de formation</h1>
                <h3> Depuis 2020</h3>
                <p> Je suis le responsable de formation arbitrage de mon club de basket. Je suis donc chargé de m'occuper des matinées de formation dans le club mais je dois aussi réaliser un suivi des arbitres (les samedis sur le bord du terrain) pour les aider à s'améliorer. Enfin, je les accompagne jusqu'à l'examen d'arbitre départementale afin de devenir arbitre du comité de la Loire</p>
            </div>
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
        return array (  264 => 120,  246 => 105,  231 => 93,  210 => 75,  195 => 63,  181 => 52,  177 => 51,  171 => 48,  167 => 47,  161 => 44,  157 => 43,  151 => 40,  147 => 39,  141 => 36,  137 => 35,  122 => 23,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
<h1 class=\"title\" id=\"about\">À propos de moi</h1>

<div class=\"container\">
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"{{ asset('images/apropos.jpg') }}\" alt=\"About Image 1\">
            </div>
            <div class=\"flip-box-back\">
                <h2>Autonome, curieux et doté d’un bon sens de la communication, je valorise le travail en équipe tout en étant capable de prendre du recul pour analyser les situations avec objectivité et proposer des solutions adaptées.</h2>
                <h2>Les choses les plus importante pour moi sont les amis et la famille. Mes piliers me permettant d'évoluer et de donner le meilleur de moi même</h2>
            </div>
        </div>
    </div>
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"{{ asset('images/famille.jpg') }}\" alt=\"About Image 2\">
            </div>
            <div class=\"flip-box-back\">
                <h2>Ma famille fait partie intégrante de ma vie, elle me permet de savoir ce que je dois faire. C'est aussi une immense forme d'inspiration. Elle me permet de me motiver. Enfin, les valeurs qu'elle m'a inculqué font de mon ce que je suis aujourd'hui</h2>
            </div>
        </div>
    </div>
</div>

<h1 class=\"title\" id=\"projects\">Mes Projets</h1>

<div class=\"engagements-container\">
    <a href=\"{{ path('competence_administrer') }}\" class=\"box\">
        <img src=\"{{ asset('images/administrer.jpg') }}\" alt=\"Administrer\">
        <p>Administrer les réseaux et l’Internet</p>
    </a>
    <a href=\"{{ path('competence_connecter') }}\" class=\"box\">
        <img src=\"{{ asset('images/connecter.jpg') }}\" alt=\"Connecter\">
        <p>Connecter les entreprises et les usagers</p>
    </a>
    <a href=\"{{ path('competence_programmer') }}\" class=\"box\">
        <img src=\"{{ asset('images/programmer.jpg') }}\" alt=\"Programmer\">
        <p>Créer des outils et des applications informatiques pour les R&T</p>
    </a>
    <a href=\"{{ path('competence_proteger') }}\" class=\"box\">
        <img src=\"{{ asset('images/cyber1.jpg') }}\" alt=\"Cyber 2\">
        <p>Administrer un système d’information sécurisé</p>
    </a>
    <a href=\"{{ path('competence_securiser') }}\" class=\"box\">
        <img src=\"{{ asset('images/cyber2.jpg') }}\" alt=\"Cyber 1\">
        <p>Surveiller un système d’information sécurisé</p>
    </a>
</div>

<h1 class=\"title\" id=\"experience\">Expérience professionnelle</h1>

<div class=\"container\">
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"{{ asset('images/tuteur.jpg') }}\" alt=\"Tuteur numérique Etudiant\">
            </div>
            <div class=\"flip-box-back\">
                <h1>Tuteur numérique Etudiant</h1>
                <h3>Aout - Octobre 2024</h3>
                <p>J'ai aidé les étudiants pour solutionner des problèmes informatiques au début d'année scolaire. Je les aidais dans les procédures numériques, les conseillais pour du matériel information ou les guidais sur les outils mis à disposition par l'UJM</p>
            </div>
        </div>
    </div>
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"{{ asset('images/renfort.jpg') }}\" alt=\"Another Image\">
            </div>
            <div class=\"flip-box-back\">
                <h1>Renfort auu service informatique</h1>
                <h3>Juillet 2024</h3>
                <p>Pendant les vacances, je suis venu aider le service informatique notammer pour effectuer le changement et déploiement de nouveaux outils /matériels informatiques dans l'IUT mais aussi pour effectuer la maintenance de l’infrastructure réseau</p>

            </div>
        </div>
    </div>
</div>

<h1 class=\"title\" id=\"engagements\">Mes engagements</h1>

<div class=\"engagements-container\">
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"{{ asset('images/arbitre.jpg') }}\" alt=\"Another Image\">
            </div>
            <div class=\"flip-box-back\">
                <h1>Arbitre départementale de basketball</h1>
                <h3>Depuis 2021</h3>
                <p>A la fin du COVID-19, j'ai pu passer la formation d'arbitre départementale de basket. Je suis alors devenu arbitre stagiaire pour le comité de la Loire et après quelque mois, j'ai pu devenir arbitre officiel. Cela m'a permis de pouvoir continuer d'arbitrer des match pour le comité en allant jusqu'à arbitrer de la régionale. J'ai aussi pu arbitrer des matchs internationnaux comme sur la photo au tournoi internationnal de montbrison. </p>
            </div>
        </div>
    </div>
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"{{ asset('images/hackcess.jpg') }}\" alt=\"Another Image\">
            </div>
            <div class=\"flip-box-back\">
                <h1>Vice-Président d'Hackcess</h1>
                <h3> Depuis 2024</h3>
                <p>Grâce au club cyber de l'IUT, je peux participer à des concours de cybersécurité comme le CSAW (où nous avons finis 5/250) et le MarsH@ck (17/26)
                <p> Je fais aussi de la promotion de l'association pendant les journées pour ouvertes ...</p>
                <p>Je realise aussi des projet (Comme la boutique)</p>
                <p>Enfin, je fais aussi de la sensibilisation à la cybersécurité entre autre avec les élèves de lycée participant au programme cordée de la réussite</p>
            </div>
        </div>
    </div>
    <div class=\"box flip-box\">
        <div class=\"flip-box-inner\">
            <div class=\"flip-box-front\">
                <img src=\"{{ asset('images/formation.jpg') }}\" alt=\"Another Image\">
            </div>
            <div class=\"flip-box-back\">
                <h1>Responsable de formation</h1>
                <h3> Depuis 2020</h3>
                <p> Je suis le responsable de formation arbitrage de mon club de basket. Je suis donc chargé de m'occuper des matinées de formation dans le club mais je dois aussi réaliser un suivi des arbitres (les samedis sur le bord du terrain) pour les aider à s'améliorer. Enfin, je les accompagne jusqu'à l'examen d'arbitre départementale afin de devenir arbitre du comité de la Loire</p>
            </div>
        </div>
    </div>

</div>

{% endblock %}", "e_portfolio/index.html.twig", "C:\\Users\\mathi\\Documents\\E-Portfolio\\templates\\e_portfolio\\index.html.twig");
    }
}
