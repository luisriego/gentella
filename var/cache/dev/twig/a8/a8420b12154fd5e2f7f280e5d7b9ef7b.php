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

/* admin/profile/profile.html.twig */
class __TwigTemplate_6faede346948e7aa2af4b1625db96097 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile/profile.html.twig"));

        // line 3
        $context["role_ag"] = "ROLE_AG_PROFILE";
        // line 4
        $context["role_add"] = "ROLE_ADD_PROFILE";
        // line 5
        $context["role_ag_enable"] = "ROLE_AG_ENABLE_PROFILE";
        // line 6
        $context["role_ag_delete"] = "ROLE_AG_DELETE_PROFILE";
        // line 7
        $context["role_edit"] = "ROLE_EDIT_PROFILE";
        // line 8
        $context["role_enable"] = "ROLE_ENABLE_PROFILE";
        // line 9
        $context["role_delete"] = "ROLE_DELETE_PROFILE";
        // line 10
        $context["title"] = "Liste des profils";
        // line 1
        $this->parent = $this->loadTemplate("admin/displayPage.html.twig", "admin/profile/profile.html.twig", 1);
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

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_profile");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_showGroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showGroup"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showGroup"));

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_groupaction_profile");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_showTableHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableHead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableHead"));

        // line 18
        echo "    <thead>
    ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_ag"]) || array_key_exists("role_ag", $context) ? $context["role_ag"] : (function () { throw new RuntimeError('Variable "role_ag" does not exist.', 19, $this->source); })()))) {
            // line 20
            echo "    <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
    ";
        }
        // line 22
        echo "    <th>Nom</th>
    ";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_edit"]) || array_key_exists("role_edit", $context) ? $context["role_edit"] : (function () { throw new RuntimeError('Variable "role_edit" does not exist.', 23, $this->source); })()))) {
            // line 24
            echo "        <th>Modifier</th>
    ";
        }
        // line 26
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_enable"]) || array_key_exists("role_enable", $context) ? $context["role_enable"] : (function () { throw new RuntimeError('Variable "role_enable" does not exist.', 26, $this->source); })()))) {
            // line 27
            echo "        <th>Etat ?</th>
    ";
        }
        // line 29
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_delete"]) || array_key_exists("role_delete", $context) ? $context["role_delete"] : (function () { throw new RuntimeError('Variable "role_delete" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "        <th>Suprimer</th>
    ";
        }
        // line 32
        echo "    </thead>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_showTableBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableBody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableBody"));

        // line 35
        echo "    <tbody>
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profiles"]) || array_key_exists("profiles", $context) ? $context["profiles"] : (function () { throw new RuntimeError('Variable "profiles" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 37
            echo "        <tr>
            ";
            // line 38
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_ag"]) || array_key_exists("role_ag", $context) ? $context["role_ag"] : (function () { throw new RuntimeError('Variable "role_ag" does not exist.', 38, $this->source); })()))) {
                // line 39
                echo "            <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo "\"></td>
            ";
            }
            // line 41
            echo "            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "nom", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
            ";
            // line 42
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_edit"]) || array_key_exists("role_edit", $context) ? $context["role_edit"] : (function () { throw new RuntimeError('Variable "role_edit" does not exist.', 42, $this->source); })()))) {
                // line 43
                echo "            <td><a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_edit_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></a></td>
            ";
            }
            // line 45
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_enable"]) || array_key_exists("role_enable", $context) ? $context["role_enable"] : (function () { throw new RuntimeError('Variable "role_enable" does not exist.', 45, $this->source); })()))) {
                // line 46
                echo "            <td>
                ";
                // line 47
                if (twig_get_attribute($this->env, $this->source, $context["profile"], "valid", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "                    <a class=\"btn btn-success activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-check\"></i></a>
                ";
                } else {
                    // line 50
                    echo "                    <a class=\"btn btn-warning activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-times\"></i></a>
                ";
                }
                // line 52
                echo "            </td>
            ";
            }
            // line 54
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_delete"]) || array_key_exists("role_delete", $context) ? $context["role_delete"] : (function () { throw new RuntimeError('Variable "role_delete" does not exist.', 54, $this->source); })()))) {
                // line 55
                echo "            <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
            ";
            }
            // line 57
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    </tbody>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/profile/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 59,  243 => 57,  237 => 55,  234 => 54,  230 => 52,  224 => 50,  218 => 48,  216 => 47,  213 => 46,  210 => 45,  204 => 43,  202 => 42,  197 => 41,  191 => 39,  189 => 38,  186 => 37,  182 => 36,  179 => 35,  169 => 34,  158 => 32,  154 => 30,  151 => 29,  147 => 27,  144 => 26,  140 => 24,  138 => 23,  135 => 22,  131 => 20,  129 => 19,  126 => 18,  116 => 17,  97 => 16,  78 => 13,  67 => 1,  65 => 10,  63 => 9,  61 => 8,  59 => 7,  57 => 6,  55 => 5,  53 => 4,  51 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/displayPage.html.twig\" %}

{% set role_ag = \"ROLE_AG_PROFILE\" %}
{% set role_add = \"ROLE_ADD_PROFILE\" %}
{% set role_ag_enable = \"ROLE_AG_ENABLE_PROFILE\" %}
{% set role_ag_delete = \"ROLE_AG_DELETE_PROFILE\" %}
{% set role_edit = \"ROLE_EDIT_PROFILE\" %}
{% set role_enable = \"ROLE_ENABLE_PROFILE\" %}
{% set role_delete = \"ROLE_DELETE_PROFILE\" %}
{% set title = \"Liste des profils\" %}


{% block showNew %}{{ path('app_admin_new_profile') }}{% endblock %}


{% block showGroup %}{{ path('app_admin_groupaction_profile') }}{% endblock %}
{% block showTableHead %}
    <thead>
    {% if is_granted(role_ag) %}
    <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
    {% endif %}
    <th>Nom</th>
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
    {% for profile in profiles  %}
        <tr>
            {% if is_granted(role_ag) %}
            <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"{{ profile.id }}\"></td>
            {% endif %}
            <td>{{ profile.nom }}</td>
            {% if is_granted(role_edit) %}
            <td><a class=\"btn btn-primary\" href=\"{{ path('app_admin_edit_profile',{\"id\":profile.id}) }}\"><i class=\"fa fa-edit\"></i></a></td>
            {% endif %}
            {% if is_granted(role_enable) %}
            <td>
                {%  if profile.valid %}
                    <a class=\"btn btn-success activate-link\" href=\"{{ path('app_admin_changevalidite_profile', {'id': profile.id}) }}\"> <i class=\"fa fa-check\"></i></a>
                {% else %}
                    <a class=\"btn btn-warning activate-link\" href=\"{{ path('app_admin_changevalidite_profile', {'id': profile.id}) }}\"> <i class=\"fa fa-times\"></i></a>
                {% endif %}
            </td>
            {% endif %}
            {% if is_granted(role_delete) %}
            <td><a href=\"{{ path('app_admin_delete_profile', {'id': profile.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
            {% endif %}
        </tr>
    {% endfor %}
    </tbody>
{% endblock %}", "admin/profile/profile.html.twig", "/appdata/www/templates/admin/profile/profile.html.twig");
    }
}
