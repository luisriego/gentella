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

/* admin/categorie/categorie.html.twig */
class __TwigTemplate_012df0426184405c3f6edb49828435d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'showNew' => [$this, 'block_showNew'],
            'showGroup' => [$this, 'block_showGroup'],
            'showTableHead' => [$this, 'block_showTableHead'],
            'showTableBody' => [$this, 'block_showTableBody'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/categorie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/categorie.html.twig"));

        // line 3
        $context["role_ag"] = "ROLE_AG_CATEGORIE";
        // line 4
        $context["role_add"] = "ROLE_ADD_CATEGORIE";
        // line 5
        $context["role_ag_enable"] = "ROLE_AG_ENABLE_CATEGORIE";
        // line 6
        $context["role_ag_delete"] = "ROLE_AG_DELETE_CATEGORIE";
        // line 7
        $context["role_edit"] = "ROLE_EDIT_CATEGORIE";
        // line 8
        $context["role_enable"] = "ROLE_ENABLE_CATEGORIE";
        // line 9
        $context["role_delete"] = "ROLE_DELETE_CATEGORIE";
        // line 11
        $context["title"] = "Liste des categories";
        // line 1
        $this->parent = $this->loadTemplate("admin/displayPage.html.twig", "admin/categorie/categorie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_showNew($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showNew"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showNew"));

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_categorie");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_showGroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showGroup"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showGroup"));

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_groupaction_categorie");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_showTableHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableHead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableHead"));

        // line 16
        echo "    <thead>
    ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_ag"]) || array_key_exists("role_ag", $context) ? $context["role_ag"] : (function () { throw new RuntimeError('Variable "role_ag" does not exist.', 17, $this->source); })()))) {
            // line 18
            echo "        <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
    ";
        }
        // line 20
        echo "    <th>Libelle</th>
    <th>Cat. parente</th>
    ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_edit"]) || array_key_exists("role_edit", $context) ? $context["role_edit"] : (function () { throw new RuntimeError('Variable "role_edit" does not exist.', 22, $this->source); })()))) {
            // line 23
            echo "        <th>Modifier</th>
    ";
        }
        // line 25
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_enable"]) || array_key_exists("role_enable", $context) ? $context["role_enable"] : (function () { throw new RuntimeError('Variable "role_enable" does not exist.', 25, $this->source); })()))) {
            // line 26
            echo "        <th>Etat ?</th>
    ";
        }
        // line 28
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_delete"]) || array_key_exists("role_delete", $context) ? $context["role_delete"] : (function () { throw new RuntimeError('Variable "role_delete" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "        <th>Suprimer</th>
    ";
        }
        // line 31
        echo "    </thead>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_showTableBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableBody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableBody"));

        // line 34
        echo "    <tbody>
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 36
            echo "        <tr>
            ";
            // line 37
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_ag"]) || array_key_exists("role_ag", $context) ? $context["role_ag"] : (function () { throw new RuntimeError('Variable "role_ag" does not exist.', 37, $this->source); })()))) {
                // line 38
                echo "                <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\"></td>
            ";
            }
            // line 40
            echo "
            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["categorie"], "categorieParente", [], "any", false, false, false, 42)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categorie"], "categorieParente", [], "any", false, false, false, 42), "libelle", [], "any", false, false, false, 42), "html", null, true);
                echo " ";
            }
            echo "</td>
            ";
            // line 43
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_edit"]) || array_key_exists("role_edit", $context) ? $context["role_edit"] : (function () { throw new RuntimeError('Variable "role_edit" does not exist.', 43, $this->source); })()))) {
                // line 44
                echo "                <td><a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_edit_categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></a></td>
            ";
            }
            // line 46
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_enable"]) || array_key_exists("role_enable", $context) ? $context["role_enable"] : (function () { throw new RuntimeError('Variable "role_enable" does not exist.', 46, $this->source); })()))) {
                // line 47
                echo "                <td>
                    ";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["categorie"], "valid", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "                        <a class=\"btn btn-success activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-check\"></i></a>
                    ";
                } else {
                    // line 51
                    echo "                        <a class=\"btn btn-warning activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-times\"></i></a>
                    ";
                }
                // line 53
                echo "                </td>
            ";
            }
            // line 55
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_delete"]) || array_key_exists("role_delete", $context) ? $context["role_delete"] : (function () { throw new RuntimeError('Variable "role_delete" does not exist.', 55, $this->source); })()))) {
                // line 56
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
            ";
            }
            // line 58
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    </tbody>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/categorie/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 60,  254 => 58,  248 => 56,  245 => 55,  241 => 53,  235 => 51,  229 => 49,  227 => 48,  224 => 47,  221 => 46,  215 => 44,  213 => 43,  205 => 42,  201 => 41,  198 => 40,  192 => 38,  190 => 37,  187 => 36,  183 => 35,  180 => 34,  170 => 33,  159 => 31,  155 => 29,  152 => 28,  148 => 26,  145 => 25,  141 => 23,  139 => 22,  135 => 20,  131 => 18,  129 => 17,  126 => 16,  116 => 15,  97 => 14,  78 => 13,  67 => 1,  65 => 11,  63 => 9,  61 => 8,  59 => 7,  57 => 6,  55 => 5,  53 => 4,  51 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/displayPage.html.twig\" %}

{% set role_ag = \"ROLE_AG_CATEGORIE\" %}
{% set role_add = \"ROLE_ADD_CATEGORIE\" %}
{% set role_ag_enable = \"ROLE_AG_ENABLE_CATEGORIE\" %}
{% set role_ag_delete = \"ROLE_AG_DELETE_CATEGORIE\" %}
{% set role_edit = \"ROLE_EDIT_CATEGORIE\" %}
{% set role_enable = \"ROLE_ENABLE_CATEGORIE\" %}
{% set role_delete = \"ROLE_DELETE_CATEGORIE\" %}

{% set title = \"Liste des categories\" %}

{% block showNew %}{{ path('app_admin_new_categorie') }}{% endblock %}
{% block showGroup %}{{ path('app_admin_groupaction_categorie') }}{% endblock %}
{% block showTableHead %}
    <thead>
    {% if is_granted(role_ag) %}
        <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
    {% endif %}
    <th>Libelle</th>
    <th>Cat. parente</th>
    {% if is_granted(role_edit) %}
        <th>Modifier</th>
    {% endif %}
    {% if is_granted(role_enable) %}
        <th>Etat ?</th>
    {% endif %}
    {% if is_granted(role_delete) %}
        <th>Suprimer</th>
    {% endif %}
    </thead>
{% endblock %}
{% block showTableBody%}
    <tbody>
    {% for categorie in categories  %}
        <tr>
            {% if is_granted(role_ag) %}
                <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"{{ categorie.id }}\"></td>
            {% endif %}

            <td>{{ categorie.libelle }}</td>
            <td>{%  if categorie.categorieParente %} {{ categorie.categorieParente.libelle }} {% endif %}</td>
            {% if is_granted(role_edit) %}
                <td><a class=\"btn btn-primary\" href=\"{{ path('app_admin_edit_categorie',{\"id\":categorie.id}) }}\"><i class=\"fa fa-edit\"></i></a></td>
            {% endif %}
            {% if is_granted(role_enable) %}
                <td>
                    {%  if categorie.valid %}
                        <a class=\"btn btn-success activate-link\" href=\"{{ path('app_admin_changevalidite_categorie', {'id': categorie.id}) }}\"> <i class=\"fa fa-check\"></i></a>
                    {% else %}
                        <a class=\"btn btn-warning activate-link\" href=\"{{ path('app_admin_changevalidite_categorie', {'id': categorie.id}) }}\"> <i class=\"fa fa-times\"></i></a>
                    {% endif %}
                </td>
            {% endif %}
            {% if is_granted(role_delete) %}
                <td><a href=\"{{ path('app_admin_delete_categorie', {'id': categorie.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
            {% endif %}
        </tr>
    {% endfor %}
    </tbody>
{% endblock %}

", "admin/categorie/categorie.html.twig", "/appdata/www/templates/admin/categorie/categorie.html.twig");
    }
}
