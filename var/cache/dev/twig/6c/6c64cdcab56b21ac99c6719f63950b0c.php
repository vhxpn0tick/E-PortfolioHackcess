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

/* e_portfolio/contact.html.twig */
class __TwigTemplate_0e791381e0697f87ab7fddc999db3488 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "e_portfolio/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "e_portfolio/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "e_portfolio/contact.html.twig", 1);
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

        yield "Contact";
        
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
        yield "<h1 class=\"title\">Contactez-moi</h1>

<div class=\"contact-container\">
    <form action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_submit");
        yield "\" method=\"post\" class=\"contact-form\">
        <div class=\"form-group\">
            <label for=\"name\">Nom</label>
            <input type=\"text\" id=\"name\" name=\"name\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"email\">Email</label>
            <input type=\"email\" id=\"email\" name=\"email\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"subject\">Sujet</label>
            <input type=\"text\" id=\"subject\" name=\"subject\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"message\">Message</label>
            <textarea id=\"message\" name=\"message\" rows=\"5\" required></textarea>
        </div>
        <button type=\"submit\" class=\"btn\">Envoyer</button>
        
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", ["success"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            yield "            <div class=\"flash-success\" id=\"flash-message\">
                ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "    </form>

    <div class=\"contact-info\">
        <h2>Suivez-moi</h2>
        <div class=\"social-links\">
            <a href=\"https://www.linkedin.com/in/mathieu-dumas-773155297/\" target=\"_blank\">
                <i class=\"fab fa-linkedin\"></i> LinkedIn
            </a>
            <a href=\"https://github.com/vhxpn0tick\" target=\"_blank\">
                <i class=\"fab fa-github\"></i> GitHub
            </a>
            <a href=\"https://www.instagram.com/m4thieu_dumas/?next=%2F\" target=\"_blank\">
                <i class=\"fab fa-instagram\"></i> Instagram
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            setTimeout(function() {
                flashMessage.style.display = 'none';
            }, 5000); // Cache le message après 5 secondes
        }
    });
</script>

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
        return "e_portfolio/contact.html.twig";
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
        return array (  143 => 33,  134 => 30,  131 => 29,  127 => 28,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact{% endblock %}

{% block body %}
<h1 class=\"title\">Contactez-moi</h1>

<div class=\"contact-container\">
    <form action=\"{{ path('contact_submit') }}\" method=\"post\" class=\"contact-form\">
        <div class=\"form-group\">
            <label for=\"name\">Nom</label>
            <input type=\"text\" id=\"name\" name=\"name\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"email\">Email</label>
            <input type=\"email\" id=\"email\" name=\"email\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"subject\">Sujet</label>
            <input type=\"text\" id=\"subject\" name=\"subject\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"message\">Message</label>
            <textarea id=\"message\" name=\"message\" rows=\"5\" required></textarea>
        </div>
        <button type=\"submit\" class=\"btn\">Envoyer</button>
        
        {% for message in app.flashes('success') %}
            <div class=\"flash-success\" id=\"flash-message\">
                {{ message }}
            </div>
        {% endfor %}
    </form>

    <div class=\"contact-info\">
        <h2>Suivez-moi</h2>
        <div class=\"social-links\">
            <a href=\"https://www.linkedin.com/in/mathieu-dumas-773155297/\" target=\"_blank\">
                <i class=\"fab fa-linkedin\"></i> LinkedIn
            </a>
            <a href=\"https://github.com/vhxpn0tick\" target=\"_blank\">
                <i class=\"fab fa-github\"></i> GitHub
            </a>
            <a href=\"https://www.instagram.com/m4thieu_dumas/?next=%2F\" target=\"_blank\">
                <i class=\"fab fa-instagram\"></i> Instagram
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            setTimeout(function() {
                flashMessage.style.display = 'none';
            }, 5000); // Cache le message après 5 secondes
        }
    });
</script>

{% endblock %}", "e_portfolio/contact.html.twig", "C:\\Users\\mathi\\Documents\\E-Portfolio\\templates\\e_portfolio\\contact.html.twig");
    }
}
