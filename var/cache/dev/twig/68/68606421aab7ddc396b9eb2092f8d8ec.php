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

/* admin/blog/oldpostform.html.twig */
class __TwigTemplate_8718a4adc20ea4f7abe6a3763bf5a06d extends Template
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
            'summernote' => [$this, 'block_summernote'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/oldpostform.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/oldpostform.html.twig"));

        // line 2
        $context["title"] = "Ancienne version poste";
        // line 1
        $this->parent = $this->loadTemplate("admin/formPage.html.twig", "admin/blog/oldpostform.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_blogPosts");
        echo "\">Listing</a> <i class=\"fa fa-long-arrow-right\"></i> <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_edit_blogPosts", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oldPostForm"]) || array_key_exists("oldPostForm", $context) ? $context["oldPostForm"] : (function () { throw new RuntimeError('Variable "oldPostForm" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4), "historique", [], "any", false, false, false, 4), "blogPost", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4)]), "html", null, true);
        echo "\">Modifié blog</a>  <i class=\"fa fa-long-arrow-right\"></i>
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_historique_blogPost", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oldPostForm"]) || array_key_exists("oldPostForm", $context) ? $context["oldPostForm"] : (function () { throw new RuntimeError('Variable "oldPostForm" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "value", [], "any", false, false, false, 5), "historique", [], "any", false, false, false, 5), "blogPost", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5)]), "html", null, true);
        echo "\">Historique</a>  <i class=\"fa fa-long-arrow-right\"></i> ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_formContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formContent"));

        // line 8
        echo "    <div class=\"x_content\">
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["oldPostForm"]) || array_key_exists("oldPostForm", $context) ? $context["oldPostForm"] : (function () { throw new RuntimeError('Variable "oldPostForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["oldPostForm"]) || array_key_exists("oldPostForm", $context) ? $context["oldPostForm"] : (function () { throw new RuntimeError('Variable "oldPostForm" does not exist.', 10, $this->source); })()), 'widget');
        echo "
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["oldPostForm"]) || array_key_exists("oldPostForm", $context) ? $context["oldPostForm"] : (function () { throw new RuntimeError('Variable "oldPostForm" does not exist.', 11, $this->source); })()), 'form_end');
        echo "

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_summernote($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summernote"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summernote"));

        // line 18
        echo "    \$('.summernote').summernote('disable');
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/oldpostform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 18,  126 => 17,  112 => 11,  108 => 10,  104 => 9,  101 => 8,  91 => 7,  79 => 5,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/formPage.html.twig' %}
{% set title = \"Ancienne version poste\" %}

{% block Item %} <a href=\"{{ path('app_admin_blogPosts') }}\">Listing</a> <i class=\"fa fa-long-arrow-right\"></i> <a href=\"{{ path('app_admin_edit_blogPosts', {'id': oldPostForm.vars.value.historique.blogPost.id}) }}\">Modifié blog</a>  <i class=\"fa fa-long-arrow-right\"></i>
    <a href=\"{{ path('app_admin_historique_blogPost', {'id': oldPostForm.vars.value.historique.blogPost.id }) }}\">Historique</a>  <i class=\"fa fa-long-arrow-right\"></i> {{ title }}{% endblock %}

{% block formContent %}
    <div class=\"x_content\">
        {{ form_start(oldPostForm) }}
        {{ form_widget(oldPostForm) }}
        {{ form_end(oldPostForm) }}

    </div>
{% endblock %}


{% block summernote %}
    \$('.summernote').summernote('disable');
{% endblock %}
", "admin/blog/oldpostform.html.twig", "/appdata/www/templates/admin/blog/oldpostform.html.twig");
    }
}
