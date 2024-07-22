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

/* admin/profile/profileform.html.twig */
class __TwigTemplate_6583faf3ca3af670da989057419e5206 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titreSection' => [$this, 'block_titreSection'],
            'newLinks' => [$this, 'block_newLinks'],
            'GroupAction' => [$this, 'block_GroupAction'],
            'beforeTable' => [$this, 'block_beforeTable'],
            'showTableHead' => [$this, 'block_showTableHead'],
            'showTableBody' => [$this, 'block_showTableBody'],
            'afterTable' => [$this, 'block_afterTable'],
            'dataTableConf' => [$this, 'block_dataTableConf'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/displayPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile/profileform.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile/profileform.html.twig"));

        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProfileForm"]) || array_key_exists("ProfileForm", $context) ? $context["ProfileForm"] : (function () { throw new RuntimeError('Variable "ProfileForm" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2)) {
            $context["title"] = "Modifier profil";
        } else {
            $context["title"] = "Nouvelle profil";
        }
        // line 4
        $context["role_ag"] = "ROLE_USER";
        // line 5
        $context["role_add"] = "ROLE_USER";
        // line 6
        $context["role_ag_enable"] = "ROLE_USER";
        // line 7
        $context["role_ag_delete"] = "ROLE_USER";
        // line 8
        $context["role_edit"] = "ROLE_USER";
        // line 9
        $context["role_enable"] = "ROLE_USER";
        // line 10
        $context["role_delete"] = "ROLE_USER";
        // line 1
        $this->parent = $this->loadTemplate("admin/displayPage.html.twig", "admin/profile/profileform.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_titreSection($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreSection"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titreSection"));

        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_profiles");
        echo "\">Liste des profils</a> >> ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_newLinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "newLinks"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "newLinks"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_GroupAction($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "GroupAction"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "GroupAction"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_beforeTable($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeTable"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beforeTable"));

        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ProfileForm"]) || array_key_exists("ProfileForm", $context) ? $context["ProfileForm"] : (function () { throw new RuntimeError('Variable "ProfileForm" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["class" => "col-12"]]);
        echo "
    <div class=\"row mt-3 mb-3\">
        <div class=\"col\">

            <label class=\"form-label\">";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, (isset($context["ProfileForm"]) || array_key_exists("ProfileForm", $context) ? $context["ProfileForm"] : (function () { throw new RuntimeError('Variable "ProfileForm" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21)), "html", null, true);
        echo "</label>
            <div class=\"form-error\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ProfileForm"]) || array_key_exists("ProfileForm", $context) ? $context["ProfileForm"] : (function () { throw new RuntimeError('Variable "ProfileForm" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'errors');
        echo "
            </div>
            <input type=\"text\" name=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["ProfileForm"]) || array_key_exists("ProfileForm", $context) ? $context["ProfileForm"] : (function () { throw new RuntimeError('Variable "ProfileForm" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25)), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["ProfileForm"]) || array_key_exists("ProfileForm", $context) ? $context["ProfileForm"] : (function () { throw new RuntimeError('Variable "ProfileForm" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25)), "html", null, true);
        echo "\"  required=\"required\" class=\"form-control\" >
        </div>
    </div>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_showTableHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableHead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableHead"));

        // line 31
        echo "        <thead>
        <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
        <th>Nom</th>
        <th>Libellé</th>
        <th>Descripction</th>
        </thead>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_showTableBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableBody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableBody"));

        // line 39
        echo "        <tbody>
        ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProfileForm"]) || array_key_exists("ProfileForm", $context) ? $context["ProfileForm"] : (function () { throw new RuntimeError('Variable "ProfileForm" does not exist.', 40, $this->source); })()), "vars", [], "any", false, false, false, 40), "value", [], "any", false, false, false, 40)) {
            // line 41
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ProfileForm"]) || array_key_exists("ProfileForm", $context) ? $context["ProfileForm"] : (function () { throw new RuntimeError('Variable "ProfileForm" does not exist.', 41, $this->source); })()), "vars", [], "any", false, false, false, 41), "value", [], "any", false, false, false, 41), "roles", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 42
                echo "            <tr>
                <td><input type=\"checkbox\" class=\"chkgrp\" checked=\"checked\" name=\"chkgrp[]\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\"></td>
                <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "rolename", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "libelle", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "description", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        ";
        }
        // line 50
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 51
            echo "            <tr>
                <td><input type=\"checkbox\" class=\"chkgrp\"  name=\"chkgrp[]\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\"></td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "rolename", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "libelle", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "description", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        </tbody>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_afterTable($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterTable"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "afterTable"));

        // line 61
        echo "
    <div class=\"ln_solid\"></div>
    <div class=\"item form-group\">
        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
            <a class=\"btn btn-warning\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_profiles");
        echo "\">Annuler</a>
            <button type=\"submit\" name=\"valider\" class=\"btn btn-success\">Enregistrer</button>
        </div>
    </div>
";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ProfileForm"]) || array_key_exists("ProfileForm", $context) ? $context["ProfileForm"] : (function () { throw new RuntimeError('Variable "ProfileForm" does not exist.', 69, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_dataTableConf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dataTableConf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dataTableConf"));

        // line 74
        echo "    var dataminetables = \$('.dataminetables').dataTable({
    \"iDisplayLength\": 100,
    \"columnDefs\": [
    {\"orderable\": false, \"targets\": 0}
    ]
    });


    var datasorttables = \$('.dataminetables').DataTable();



        \$(\"form\").submit(function (e){
            if (\$('.chkgrp').filter(':checked').length <= 0){
                alert(\"Choisissez au moins un rôle\");
                e.preventDefault();

            }
        })
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/profile/profileform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 74,  337 => 73,  325 => 69,  318 => 65,  312 => 61,  302 => 60,  291 => 58,  282 => 55,  278 => 54,  274 => 53,  270 => 52,  267 => 51,  262 => 50,  259 => 49,  250 => 46,  246 => 45,  242 => 44,  238 => 43,  235 => 42,  230 => 41,  228 => 40,  225 => 39,  215 => 38,  199 => 31,  189 => 30,  172 => 25,  167 => 23,  162 => 21,  155 => 17,  145 => 16,  127 => 14,  109 => 13,  86 => 12,  75 => 1,  73 => 10,  71 => 9,  69 => 8,  67 => 7,  65 => 6,  63 => 5,  61 => 4,  55 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/displayPage.html.twig\" %}
{% if ProfileForm.vars.value %} {% set title = \"Modifier profil\" %} {% else %} {% set title = \"Nouvelle profil\" %} {% endif%}

{% set role_ag = \"ROLE_USER\" %}
{% set role_add = \"ROLE_USER\" %}
{% set role_ag_enable = \"ROLE_USER\" %}
{% set role_ag_delete = \"ROLE_USER\" %}
{% set role_edit = \"ROLE_USER\" %}
{% set role_enable = \"ROLE_USER\" %}
{% set role_delete = \"ROLE_USER\" %}

{%block titreSection %}<a href=\"{{ path('app_admin_profiles') }}\">Liste des profils</a> >> {{ title }} {% endblock%}
{% block newLinks %}{% endblock %}
{% block GroupAction %}{% endblock %}

{% block beforeTable %}
{{ form_start(ProfileForm,{ 'attr' : { 'class': 'col-12' } }) }}
    <div class=\"row mt-3 mb-3\">
        <div class=\"col\">

            <label class=\"form-label\">{{ field_label(ProfileForm.nom) }}</label>
            <div class=\"form-error\">
                {{ form_errors(ProfileForm.nom) }}
            </div>
            <input type=\"text\" name=\"{{ field_name(ProfileForm.nom) }}\" value=\"{{ field_value(ProfileForm.nom) }}\"  required=\"required\" class=\"form-control\" >
        </div>
    </div>

    {% endblock %}
    {% block showTableHead %}
        <thead>
        <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
        <th>Nom</th>
        <th>Libellé</th>
        <th>Descripction</th>
        </thead>
    {% endblock %}
    {% block showTableBody%}
        <tbody>
        {% if ProfileForm.vars.value %}
        {% for role in ProfileForm.vars.value.roles  %}
            <tr>
                <td><input type=\"checkbox\" class=\"chkgrp\" checked=\"checked\" name=\"chkgrp[]\" value=\"{{ role.id }}\"></td>
                <td>{{ role.rolename }}</td>
                <td>{{ role.libelle }}</td>
                <td>{{ role.description }}</td>
            </tr>
        {% endfor %}
        {% endif %}
        {% for role in roles  %}
            <tr>
                <td><input type=\"checkbox\" class=\"chkgrp\"  name=\"chkgrp[]\" value=\"{{ role.id }}\"></td>
                <td>{{ role.rolename }}</td>
                <td>{{ role.libelle }}</td>
                <td>{{ role.description }}</td>
            </tr>
        {% endfor %}
        </tbody>
    {% endblock %}
    {% block afterTable %}

    <div class=\"ln_solid\"></div>
    <div class=\"item form-group\">
        <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
            <a class=\"btn btn-warning\" href=\"{{ path('app_admin_profiles') }}\">Annuler</a>
            <button type=\"submit\" name=\"valider\" class=\"btn btn-success\">Enregistrer</button>
        </div>
    </div>
{{ form_end(ProfileForm) }}
{% endblock %}


{% block dataTableConf %}
    var dataminetables = \$('.dataminetables').dataTable({
    \"iDisplayLength\": 100,
    \"columnDefs\": [
    {\"orderable\": false, \"targets\": 0}
    ]
    });


    var datasorttables = \$('.dataminetables').DataTable();



        \$(\"form\").submit(function (e){
            if (\$('.chkgrp').filter(':checked').length <= 0){
                alert(\"Choisissez au moins un rôle\");
                e.preventDefault();

            }
        })
{% endblock %}", "admin/profile/profileform.html.twig", "/appdata/www/templates/admin/profile/profileform.html.twig");
    }
}
