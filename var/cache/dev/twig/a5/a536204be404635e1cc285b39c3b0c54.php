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

/* admin/params/faq/faq.html.twig */
class __TwigTemplate_f33a148a4602b39ae65ef336add5c30d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/params/faq/faq.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/params/faq/faq.html.twig"));

        // line 3
        $context["role_ag"] = "ROLE_AG_FAQ";
        // line 4
        $context["role_add"] = "ROLE_ADD_FAQ";
        // line 5
        $context["role_ag_enable"] = "ROLE_AG_ENABLE_FAQ";
        // line 6
        $context["role_ag_delete"] = "ROLE_AG_DELETE_FAQ";
        // line 7
        $context["role_edit"] = "ROLE_EDIT_FAQ";
        // line 8
        $context["role_enable"] = "ROLE_ENABLE_FAQ";
        // line 9
        $context["role_delete"] = "ROLE_DELETE_FAQ";
        // line 11
        $context["title"] = "Liste FAQ";
        // line 1
        $this->parent = $this->loadTemplate("admin/displayPage.html.twig", "admin/params/faq/faq.html.twig", 1);
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

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_faq");
        
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

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_groupaction_faq");
        
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
        echo "    <th>Question</th>
    <th>Reponse</th>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["faqs"]) || array_key_exists("faqs", $context) ? $context["faqs"] : (function () { throw new RuntimeError('Variable "faqs" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 36
            echo "        <tr>
            ";
            // line 37
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_ag"]) || array_key_exists("role_ag", $context) ? $context["role_ag"] : (function () { throw new RuntimeError('Variable "role_ag" does not exist.', 37, $this->source); })()))) {
                // line 38
                echo "                <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\"></td>
            ";
            }
            // line 40
            echo "
            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
            ";
            // line 43
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_edit"]) || array_key_exists("role_edit", $context) ? $context["role_edit"] : (function () { throw new RuntimeError('Variable "role_edit" does not exist.', 43, $this->source); })()))) {
                // line 44
                echo "                <td><a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_edit_faq", ["id" => twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 44)]), "html", null, true);
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
                if (twig_get_attribute($this->env, $this->source, $context["faq"], "valid", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "                        <a class=\"btn btn-success activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_faq", ["id" => twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-check\"></i></a>
                    ";
                } else {
                    // line 51
                    echo "                        <a class=\"btn btn-warning activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_faq", ["id" => twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 51)]), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_faq", ["id" => twig_get_attribute($this->env, $this->source, $context["faq"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
            ";
            }
            // line 58
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    </tbody>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/params/faq/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 60,  250 => 58,  244 => 56,  241 => 55,  237 => 53,  231 => 51,  225 => 49,  223 => 48,  220 => 47,  217 => 46,  211 => 44,  209 => 43,  205 => 42,  201 => 41,  198 => 40,  192 => 38,  190 => 37,  187 => 36,  183 => 35,  180 => 34,  170 => 33,  159 => 31,  155 => 29,  152 => 28,  148 => 26,  145 => 25,  141 => 23,  139 => 22,  135 => 20,  131 => 18,  129 => 17,  126 => 16,  116 => 15,  97 => 14,  78 => 13,  67 => 1,  65 => 11,  63 => 9,  61 => 8,  59 => 7,  57 => 6,  55 => 5,  53 => 4,  51 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/displayPage.html.twig\" %}

{% set role_ag = \"ROLE_AG_FAQ\" %}
{% set role_add = \"ROLE_ADD_FAQ\" %}
{% set role_ag_enable = \"ROLE_AG_ENABLE_FAQ\" %}
{% set role_ag_delete = \"ROLE_AG_DELETE_FAQ\" %}
{% set role_edit = \"ROLE_EDIT_FAQ\" %}
{% set role_enable = \"ROLE_ENABLE_FAQ\" %}
{% set role_delete = \"ROLE_DELETE_FAQ\" %}

{% set title = \"Liste FAQ\" %}

{% block showNew %}{{ path('app_admin_new_faq') }}{% endblock %}
{% block showGroup %}{{ path('app_admin_groupaction_faq') }}{% endblock %}
{% block showTableHead %}
    <thead>
    {% if is_granted(role_ag) %}
        <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
    {% endif %}
    <th>Question</th>
    <th>Reponse</th>
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
    {% for faq in faqs  %}
        <tr>
            {% if is_granted(role_ag) %}
                <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"{{ faq.id }}\"></td>
            {% endif %}

            <td>{{ faq.question }}</td>
            <td>{{ faq.answer }}</td>
            {% if is_granted(role_edit) %}
                <td><a class=\"btn btn-primary\" href=\"{{ path('app_admin_edit_faq',{\"id\":faq.id}) }}\"><i class=\"fa fa-edit\"></i></a></td>
            {% endif %}
            {% if is_granted(role_enable) %}
                <td>
                    {%  if faq.valid %}
                        <a class=\"btn btn-success activate-link\" href=\"{{ path('app_admin_changevalidite_faq', {'id': faq.id}) }}\"> <i class=\"fa fa-check\"></i></a>
                    {% else %}
                        <a class=\"btn btn-warning activate-link\" href=\"{{ path('app_admin_changevalidite_faq', {'id': faq.id}) }}\"> <i class=\"fa fa-times\"></i></a>
                    {% endif %}
                </td>
            {% endif %}
            {% if is_granted(role_delete) %}
                <td><a href=\"{{ path('app_admin_delete_faq', {'id': faq.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
            {% endif %}
        </tr>
    {% endfor %}
    </tbody>
{% endblock %}
", "admin/params/faq/faq.html.twig", "/appdata/www/templates/admin/params/faq/faq.html.twig");
    }
}
