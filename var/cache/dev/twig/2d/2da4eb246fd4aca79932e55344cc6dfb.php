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

/* admin/blog/blog.html.twig */
class __TwigTemplate_6dc31f2583bb919ac6b430888623e495 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/blog.html.twig"));

        // line 3
        $context["role_ag"] = "ROLE_AG_BLOG";
        // line 4
        $context["role_add"] = "ROLE_ADD_BLOG";
        // line 5
        $context["role_ag_enable"] = "ROLE_AG_ENABLE_BLOG";
        // line 6
        $context["role_ag_delete"] = "ROLE_AG_DELETE_BLOG";
        // line 7
        $context["role_edit"] = "ROLE_EDIT_BLOG";
        // line 8
        $context["role_enable"] = "ROLE_ENABLE_BLOG";
        // line 9
        $context["role_delete"] = "ROLE_DELETE_BLOG";
        // line 10
        $context["role_preview"] = "ROLE_PREVIEW_BLOG";
        // line 12
        $context["title"] = "Liste Blog";
        // line 1
        $this->parent = $this->loadTemplate("admin/displayPage.html.twig", "admin/blog/blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_showNew($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showNew"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showNew"));

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_blogPosts");
        
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

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_groupaction_blogPost");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_showTableHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableHead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableHead"));

        // line 20
        echo "<thead>
";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_ag"]) || array_key_exists("role_ag", $context) ? $context["role_ag"] : (function () { throw new RuntimeError('Variable "role_ag" does not exist.', 21, $this->source); })()))) {
            // line 22
            echo "    <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
";
        }
        // line 24
        echo "<th>titre</th>
<th>Date Creation</th>
<th>Date de publication</th>
";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_edit"]) || array_key_exists("role_edit", $context) ? $context["role_edit"] : (function () { throw new RuntimeError('Variable "role_edit" does not exist.', 27, $this->source); })()))) {
            // line 28
            echo "    <th>Modifier</th>
";
        }
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_enable"]) || array_key_exists("role_enable", $context) ? $context["role_enable"] : (function () { throw new RuntimeError('Variable "role_enable" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "    <th>Etat ?</th>
";
        }
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_delete"]) || array_key_exists("role_delete", $context) ? $context["role_delete"] : (function () { throw new RuntimeError('Variable "role_delete" does not exist.', 33, $this->source); })()))) {
            // line 34
            echo "    <th>Suprimer</th>
";
        }
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_preview"]) || array_key_exists("role_preview", $context) ? $context["role_preview"] : (function () { throw new RuntimeError('Variable "role_preview" does not exist.', 36, $this->source); })()))) {
            // line 37
            echo "<th>Preview</th>
";
        }
        // line 39
        echo "</thead>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_showTableBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableBody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableBody"));

        // line 42
        echo "    <tbody>
    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogPosts"]) || array_key_exists("blogPosts", $context) ? $context["blogPosts"] : (function () { throw new RuntimeError('Variable "blogPosts" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["blogPost"]) {
            // line 44
            echo "        <tr>
            ";
            // line 45
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_ag"]) || array_key_exists("role_ag", $context) ? $context["role_ag"] : (function () { throw new RuntimeError('Variable "role_ag" does not exist.', 45, $this->source); })()))) {
                // line 46
                echo "                <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 46), "html", null, true);
                echo "\"></td>
            ";
            }
            // line 48
            echo "
            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogPost"], "titre", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogPost"], "createdAt", [], "any", false, false, false, 50), "d/m/y h:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogPost"], "plubishedAt", [], "any", false, false, false, 51), "d/m/y h:i:s"), "html", null, true);
            echo "</td>
            ";
            // line 52
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_edit"]) || array_key_exists("role_edit", $context) ? $context["role_edit"] : (function () { throw new RuntimeError('Variable "role_edit" does not exist.', 52, $this->source); })()))) {
                // line 53
                echo "                <td><a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_edit_blogPosts", ["id" => twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></a></td>
            ";
            }
            // line 55
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_enable"]) || array_key_exists("role_enable", $context) ? $context["role_enable"] : (function () { throw new RuntimeError('Variable "role_enable" does not exist.', 55, $this->source); })()))) {
                // line 56
                echo "                <td>
                    ";
                // line 57
                if (twig_get_attribute($this->env, $this->source, $context["blogPost"], "valid", [], "any", false, false, false, 57)) {
                    // line 58
                    echo "                        <a class=\"btn btn-success activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_blogPost", ["id" => twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-check\"></i></a>
                    ";
                } else {
                    // line 60
                    echo "                        <a class=\"btn btn-warning activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_blogPost", ["id" => twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-times\"></i></a>
                    ";
                }
                // line 62
                echo "                </td>
            ";
            }
            // line 64
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_delete"]) || array_key_exists("role_delete", $context) ? $context["role_delete"] : (function () { throw new RuntimeError('Variable "role_delete" does not exist.', 64, $this->source); })()))) {
                // line 65
                echo "                <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_blogPost", ["id" => twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
            ";
            }
            // line 67
            echo "
            ";
            // line 68
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_preview"]) || array_key_exists("role_preview", $context) ? $context["role_preview"] : (function () { throw new RuntimeError('Variable "role_preview" does not exist.', 68, $this->source); })()))) {
                // line 69
                echo "            <td>
                <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_preview_blogpost", ["id" => twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
            </td>
            ";
            }
            // line 73
            echo "
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogPost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </tbody>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 76,  275 => 73,  269 => 70,  266 => 69,  264 => 68,  261 => 67,  255 => 65,  252 => 64,  248 => 62,  242 => 60,  236 => 58,  234 => 57,  231 => 56,  228 => 55,  222 => 53,  220 => 52,  216 => 51,  212 => 50,  208 => 49,  205 => 48,  199 => 46,  197 => 45,  194 => 44,  190 => 43,  187 => 42,  177 => 41,  166 => 39,  162 => 37,  160 => 36,  156 => 34,  154 => 33,  150 => 31,  148 => 30,  144 => 28,  142 => 27,  137 => 24,  133 => 22,  131 => 21,  128 => 20,  118 => 19,  99 => 16,  80 => 15,  69 => 1,  67 => 12,  65 => 10,  63 => 9,  61 => 8,  59 => 7,  57 => 6,  55 => 5,  53 => 4,  51 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/displayPage.html.twig\" %}

{% set role_ag = \"ROLE_AG_BLOG\" %}
{% set role_add = \"ROLE_ADD_BLOG\" %}
{% set role_ag_enable = \"ROLE_AG_ENABLE_BLOG\" %}
{% set role_ag_delete = \"ROLE_AG_DELETE_BLOG\" %}
{% set role_edit = \"ROLE_EDIT_BLOG\" %}
{% set role_enable = \"ROLE_ENABLE_BLOG\" %}
{% set role_delete = \"ROLE_DELETE_BLOG\" %}
{% set role_preview = \"ROLE_PREVIEW_BLOG\" %}

{% set title = \"Liste Blog\" %}


{% block showNew %}{{ path('app_admin_new_blogPosts') }}{% endblock %}
{% block showGroup %}{{ path('app_admin_groupaction_blogPost') }}{% endblock %}


{% block showTableHead %}
<thead>
{% if is_granted(role_ag) %}
    <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
{% endif %}
<th>titre</th>
<th>Date Creation</th>
<th>Date de publication</th>
{% if is_granted(role_edit) %}
    <th>Modifier</th>
{% endif %}
{% if is_granted(role_enable) %}
    <th>Etat ?</th>
{% endif %}
{% if is_granted(role_delete) %}
    <th>Suprimer</th>
{% endif %}
{% if is_granted(role_preview) %}
<th>Preview</th>
{% endif %}
</thead>
{% endblock %}
{% block showTableBody%}
    <tbody>
    {% for blogPost in blogPosts  %}
        <tr>
            {% if is_granted(role_ag) %}
                <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"{{ blogPost.id }}\"></td>
            {% endif %}

            <td>{{ blogPost.titre }}</td>
            <td>{{ blogPost.createdAt|date(\"d/m/y h:i:s\") }}</td>
            <td>{{ blogPost.plubishedAt|date(\"d/m/y h:i:s\") }}</td>
            {% if is_granted(role_edit) %}
                <td><a class=\"btn btn-primary\" href=\"{{ path('app_admin_edit_blogPosts',{\"id\":blogPost.id}) }}\"><i class=\"fa fa-edit\"></i></a></td>
            {% endif %}
            {% if is_granted(role_enable) %}
                <td>
                    {%  if blogPost.valid %}
                        <a class=\"btn btn-success activate-link\" href=\"{{ path('app_admin_changevalidite_blogPost', {'id': blogPost.id}) }}\"> <i class=\"fa fa-check\"></i></a>
                    {% else %}
                        <a class=\"btn btn-warning activate-link\" href=\"{{ path('app_admin_changevalidite_blogPost', {'id': blogPost.id}) }}\"> <i class=\"fa fa-times\"></i></a>
                    {% endif %}
                </td>
            {% endif %}
            {% if is_granted(role_delete) %}
                <td><a href=\"{{ path('app_admin_delete_blogPost', {'id': blogPost.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
            {% endif %}

            {% if is_granted(role_preview) %}
            <td>
                <a href=\"{{ path('app_admin_preview_blogpost', {'id': blogPost.id}) }}\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
            </td>
            {% endif %}

        </tr>
    {% endfor %}
    </tbody>
{% endblock %}
", "admin/blog/blog.html.twig", "/appdata/www/templates/admin/blog/blog.html.twig");
    }
}
