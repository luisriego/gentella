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

/* admin/blog/blogform.html.twig */
class __TwigTemplate_fab9bc37f67eef5ef59523f391f9185d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/blogform.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/blogform.html.twig"));

        // line 2
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["blogForm"]) || array_key_exists("blogForm", $context) ? $context["blogForm"] : (function () { throw new RuntimeError('Variable "blogForm" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2), "id", [], "any", false, false, false, 2) > 0)) {
            $context["title"] = "Modifier poste";
        } else {
            $context["title"] = "Nouveau poste";
        }
        // line 1
        $this->parent = $this->loadTemplate("admin/formPage.html.twig", "admin/blog/blogform.html.twig", 1);
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
        echo "\">Liste des postes du blog</a> >> ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_formContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formContent"));

        // line 7
        echo "    <h2> Blog &nbsp;&nbsp;&nbsp; ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["blogForm"]) || array_key_exists("blogForm", $context) ? $context["blogForm"] : (function () { throw new RuntimeError('Variable "blogForm" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_LIST_HISTORYBLOG"))) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_historique_blogPost", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["blogForm"]) || array_key_exists("blogForm", $context) ? $context["blogForm"] : (function () { throw new RuntimeError('Variable "blogForm" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir l'historique <i class=\"fa fa-history\"></i></a>";
        }
        echo "</h2>
    <div class=\"x_content\">
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["blogForm"]) || array_key_exists("blogForm", $context) ? $context["blogForm"] : (function () { throw new RuntimeError('Variable "blogForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["blogForm"]) || array_key_exists("blogForm", $context) ? $context["blogForm"] : (function () { throw new RuntimeError('Variable "blogForm" does not exist.', 10, $this->source); })()), 'widget');
        echo "

        ";
        // line 12
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["blogForm"]) || array_key_exists("blogForm", $context) ? $context["blogForm"] : (function () { throw new RuntimeError('Variable "blogForm" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12), "blogImage", [], "any", false, false, false, 12))) {
            // line 13
            echo "            <div class=\"item form-group\">
                Image
                <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                    <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getRuntime('Liip\ImagineBundle\Templating\LazyFilterRuntime')->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/Blog/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["blogForm"]) || array_key_exists("blogForm", $context) ? $context["blogForm"] : (function () { throw new RuntimeError('Variable "blogForm" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16), "blogImage", [], "any", false, false, false, 16))), "keep_ratio_thumbnail_small"), "html", null, true);
            echo "\" alt=\"\">
                </div>
            </div>
        ";
        }
        // line 20
        echo "        <div class=\"ln_solid\"></div>
        <div class=\"item form-group\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <a class=\"btn btn-warning\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_blogPosts");
        echo "\">Annuler</a>
                <button type=\"submit\" name=\"valider\" class=\"btn btn-success\">Enregistrer</button>
            </div>
        </div>
        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["blogForm"]) || array_key_exists("blogForm", $context) ? $context["blogForm"] : (function () { throw new RuntimeError('Variable "blogForm" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/blogform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 27,  136 => 23,  131 => 20,  124 => 16,  119 => 13,  117 => 12,  112 => 10,  108 => 9,  98 => 7,  88 => 6,  66 => 4,  55 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/formPage.html.twig' %}
{% if blogForm.vars.value.id > 0 %} {% set title = \"Modifier poste\" %} {% else %} {% set title = \"Nouveau poste\" %} {% endif%}

{% block Item %} <a href=\"{{ path('app_admin_blogPosts') }}\">Liste des postes du blog</a> >> {{ title }}{% endblock %}

{% block formContent %}
    <h2> Blog &nbsp;&nbsp;&nbsp; {% if blogForm.vars.value.id is not empty and is_granted(\"ROLE_LIST_HISTORYBLOG\") %} <a href=\"{{ path('app_admin_historique_blogPost', {'id': blogForm.vars.value.id}) }}\" class=\"btn btn-primary\">Voir l'historique <i class=\"fa fa-history\"></i></a>{% endif %}</h2>
    <div class=\"x_content\">
        {{ form_start(blogForm) }}
        {{ form_widget(blogForm) }}

        {% if blogForm.vars.value.blogImage is not empty %}
            <div class=\"item form-group\">
                Image
                <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                    <img src=\"{{ asset('images/Blog/'~blogForm.vars.value.blogImage)|imagine_filter(\"keep_ratio_thumbnail_small\") }}\" alt=\"\">
                </div>
            </div>
        {% endif %}
        <div class=\"ln_solid\"></div>
        <div class=\"item form-group\">
            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                <a class=\"btn btn-warning\" href=\"{{ path('app_admin_blogPosts') }}\">Annuler</a>
                <button type=\"submit\" name=\"valider\" class=\"btn btn-success\">Enregistrer</button>
            </div>
        </div>
        {{ form_end(blogForm) }}
    </div>
{% endblock %}

", "admin/blog/blogform.html.twig", "/appdata/www/templates/admin/blog/blogform.html.twig");
    }
}
