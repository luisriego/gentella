<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/categorie/categorieform.html.twig */
class __TwigTemplate_3041daceb462ad5b924242abeac98a52 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Item' => [$this, 'block_Item'],
            'formContent' => [$this, 'block_formContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/formPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/categorieform.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/categorieform.html.twig"));

        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["categorieForm"]) || array_key_exists("categorieForm", $context) ? $context["categorieForm"] : (function () { throw new RuntimeError('Variable "categorieForm" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2)) {
            $context["title"] = "Modifier categorie";
        } else {
            $context["title"] = "Nouvelle catégorie";
        }
        // line 1
        $this->parent = $this->loadTemplate("admin/formPage.html.twig", "admin/categorie/categorieform.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_Item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Item"));

        echo " <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_categories");
        echo "\">Liste des categories</a> >> ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_formContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formContent"));

        // line 6
        echo "    <div class=\"x_content\">
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categorieForm"]) || array_key_exists("categorieForm", $context) ? $context["categorieForm"] : (function () { throw new RuntimeError('Variable "categorieForm" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["categorieForm"]) || array_key_exists("categorieForm", $context) ? $context["categorieForm"] : (function () { throw new RuntimeError('Variable "categorieForm" does not exist.', 8, $this->source); })()), 'widget');
        echo "
        <div class=\"ln_solid\"></div>
        <div class=\"item form-group\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <a class=\"btn btn-warning\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_categories");
        echo "\">Annuler</a>
                <button type=\"submit\" name=\"valider\" class=\"btn btn-success\">Enregistrer</button>
            </div>
        </div>
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categorieForm"]) || array_key_exists("categorieForm", $context) ? $context["categorieForm"] : (function () { throw new RuntimeError('Variable "categorieForm" does not exist.', 16, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/categorie/categorieform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 16,  112 => 12,  105 => 8,  101 => 7,  98 => 6,  88 => 5,  66 => 4,  55 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/formPage.html.twig' %}
{% if categorieForm.vars.value %} {% set title = \"Modifier categorie\" %} {% else %} {% set title = \"Nouvelle catégorie\" %} {% endif%}

{% block Item %} <a href=\"{{ path('app_admin_categories') }}\">Liste des categories</a> >> {{ title }}{% endblock %}
{% block formContent %}
    <div class=\"x_content\">
        {{ form_start(categorieForm) }}
        {{ form_widget(categorieForm) }}
        <div class=\"ln_solid\"></div>
        <div class=\"item form-group\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <a class=\"btn btn-warning\" href=\"{{ path('app_admin_categories') }}\">Annuler</a>
                <button type=\"submit\" name=\"valider\" class=\"btn btn-success\">Enregistrer</button>
            </div>
        </div>
        {{ form_end(categorieForm) }}
    </div>
{% endblock %}
", "admin/categorie/categorieform.html.twig", "/appdata/www/templates/admin/categorie/categorieform.html.twig");
    }
}
