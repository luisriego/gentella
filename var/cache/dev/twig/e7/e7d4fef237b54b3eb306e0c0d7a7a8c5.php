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

/* admin/user/user.html.twig */
class __TwigTemplate_3b749a4a52308ace1adfba3972ae0a69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'contenpage' => [$this, 'block_contenpage'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/bars.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/user.html.twig"));

        // line 3
        $context["role_ag"] = "ROLE_AG_USER";
        // line 4
        $context["role_add"] = "ROLE_ADD_USER";
        // line 5
        $context["role_ag_enable"] = "ROLE_AG_ENABLE_USER";
        // line 6
        $context["role_ag_delete"] = "ROLE_AG_DELETE_USER";
        // line 7
        $context["role_edit"] = "ROLE_EDIT_USER";
        // line 8
        $context["role_enable"] = "ROLE_ENABLE_USER";
        // line 9
        $context["role_delete"] = "ROLE_DELETE_USER";
        // line 10
        $context["role_reset_password_user"] = "ROLE_RESET_PASSWORD_USER";
        // line 11
        $context["title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.user_listing");
        // line 1
        $this->parent = $this->loadTemplate("admin/bars.html.twig", "admin/user/user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 12, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        // line 14
        echo "\t<div class=\"\">
\t\t<div class=\"page-title\">
\t\t\t<div class=\"title_left\">
\t\t\t\t<h5>
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"clearfix\"></div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t<ul class=\"nav navbar-right panel_toolbox\">
\t\t\t\t\t\t\t";
        // line 31
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_add"]) || array_key_exists("role_add", $context) ? $context["role_add"] : (function () { throw new RuntimeError('Variable "role_add" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_user");
            echo "\" class=\"btn btn-success\">NEW</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"x_content\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_ag"]) || array_key_exists("role_ag", $context) ? $context["role_ag"] : (function () { throw new RuntimeError('Variable "role_ag" does not exist.', 41, $this->source); })()))) {
            // line 42
            echo "\t\t\t\t\t\t\t<form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_groupaction_user");
            echo "\" id=\"grpaction\" method=\"post\" name=\"grpaction\">
\t\t\t\t\t\t\t\t<div class=\"form-group form-inline\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"action\" required id=\"action_select\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.group_actions"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            // line 46
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_ag_enable"]) || array_key_exists("role_ag_enable", $context) ? $context["role_ag_enable"] : (function () { throw new RuntimeError('Variable "role_ag_enable" does not exist.', 46, $this->source); })()))) {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.deactivate"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.deactivate"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.Activate"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.Activate"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_ag_delete"]) || array_key_exists("role_ag_delete", $context) ? $context["role_ag_delete"] : (function () { throw new RuntimeError('Variable "role_ag_delete" does not exist.', 50, $this->source); })()))) {
                // line 51
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.delete"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.delete"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">Go!!</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t\t\t<table id=\"example\" class=\"display table table-striped table-bordered dataminetables\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t";
        // line 60
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_ag"]) || array_key_exists("role_ag", $context) ? $context["role_ag"] : (function () { throw new RuntimeError('Variable "role_ag" does not exist.', 60, $this->source); })()))) {
            // line 61
            echo "\t\t\t\t\t\t\t\t\t<th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
\t\t\t\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\t\t\t\t\t<th>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.username"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.email"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.name"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t\t";
        // line 66
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_reset_password_user"]) || array_key_exists("role_reset_password_user", $context) ? $context["role_reset_password_user"] : (function () { throw new RuntimeError('Variable "role_reset_password_user" does not exist.', 66, $this->source); })()))) {
            // line 67
            echo "\t\t\t\t\t\t\t\t\t<th>Reinitialiser</th>
\t\t\t\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_edit"]) || array_key_exists("role_edit", $context) ? $context["role_edit"] : (function () { throw new RuntimeError('Variable "role_edit" does not exist.', 69, $this->source); })()))) {
            // line 70
            echo "\t\t\t\t\t\t\t\t\t<th>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.modifier"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_enable"]) || array_key_exists("role_enable", $context) ? $context["role_enable"] : (function () { throw new RuntimeError('Variable "role_enable" does not exist.', 72, $this->source); })()))) {
            // line 73
            echo "\t\t\t\t\t\t\t\t\t<th>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.status"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t";
        }
        // line 75
        echo "\t\t\t\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_delete"]) || array_key_exists("role_delete", $context) ? $context["role_delete"] : (function () { throw new RuntimeError('Variable "role_delete" does not exist.', 75, $this->source); })()))) {
            // line 76
            echo "\t\t\t\t\t\t\t\t\t<th>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.delete"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 80, $this->source); })()), function ($__user__) use ($context, $macros) { $context["user"] = $__user__; return  !twig_get_attribute($this->env, $this->source, $context["user"], "deleted", [], "any", false, false, false, 80); }));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 82
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_ag"]) || array_key_exists("role_ag", $context) ? $context["role_ag"] : (function () { throw new RuntimeError('Variable "role_ag" does not exist.', 82, $this->source); })()))) {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 83), "html", null, true);
                echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 85
            echo "\t\t\t\t\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nomComplet", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 88
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_reset_password_user"]) || array_key_exists("role_reset_password_user", $context) ? $context["role_reset_password_user"] : (function () { throw new RuntimeError('Variable "role_reset_password_user" does not exist.', 88, $this->source); })()))) {
                // line 89
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td><a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_resetpswd", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 89)]), "html", null, true);
                echo "\"><i class=\"fa fa-key\"></i></a></td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_edit"]) || array_key_exists("role_edit", $context) ? $context["role_edit"] : (function () { throw new RuntimeError('Variable "role_edit" does not exist.', 91, $this->source); })()))) {
                // line 92
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td><a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_edit_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></a></td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 94
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_enable"]) || array_key_exists("role_enable", $context) ? $context["role_enable"] : (function () { throw new RuntimeError('Variable "role_enable" does not exist.', 94, $this->source); })()))) {
                // line 95
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 96
                if (twig_get_attribute($this->env, $this->source, $context["user"], "valid", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-check\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-warning activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 99)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 103
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_delete"]) || array_key_exists("role_delete", $context) ? $context["role_delete"] : (function () { throw new RuntimeError('Variable "role_delete" does not exist.', 103, $this->source); })()))) {
                // line 104
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 104)]), "html", null, true);
                echo "\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 106
            echo "\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 108,  332 => 106,  326 => 104,  323 => 103,  319 => 101,  313 => 99,  307 => 97,  305 => 96,  302 => 95,  299 => 94,  293 => 92,  290 => 91,  284 => 89,  282 => 88,  278 => 87,  274 => 86,  269 => 85,  263 => 83,  261 => 82,  258 => 81,  254 => 80,  250 => 78,  244 => 76,  241 => 75,  235 => 73,  232 => 72,  226 => 70,  223 => 69,  219 => 67,  217 => 66,  213 => 65,  209 => 64,  204 => 63,  200 => 61,  198 => 60,  194 => 58,  187 => 53,  179 => 51,  176 => 50,  169 => 48,  162 => 47,  160 => 46,  156 => 45,  149 => 42,  147 => 41,  140 => 36,  134 => 33,  131 => 32,  129 => 31,  124 => 29,  107 => 14,  97 => 13,  78 => 12,  67 => 1,  65 => 11,  63 => 10,  61 => 9,  59 => 8,  57 => 7,  55 => 6,  53 => 5,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/bars.html.twig\" %}

{% set role_ag = \"ROLE_AG_USER\" %}
{% set role_add = \"ROLE_ADD_USER\" %}
{% set role_ag_enable = \"ROLE_AG_ENABLE_USER\" %}
{% set role_ag_delete = \"ROLE_AG_DELETE_USER\" %}
{% set role_edit = \"ROLE_EDIT_USER\" %}
{% set role_enable = \"ROLE_ENABLE_USER\" %}
{% set role_delete = \"ROLE_DELETE_USER\" %}
{% set role_reset_password_user = \"ROLE_RESET_PASSWORD_USER\" %}
{% set title = \"backend.user.user_listing\"|trans  %}
{% block title %}{{ title }}{% endblock %}
{% block contenpage %}
\t<div class=\"\">
\t\t<div class=\"page-title\">
\t\t\t<div class=\"title_left\">
\t\t\t\t<h5>
\t\t\t\t</h5>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"clearfix\"></div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"x_panel\">
\t\t\t\t\t<div class=\"x_title\">
\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t{{ title }}</h2>
\t\t\t\t\t\t<ul class=\"nav navbar-right panel_toolbox\">
\t\t\t\t\t\t\t{% if is_granted(role_add) %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_admin_new_user') }}\" class=\"btn btn-success\">NEW</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"x_content\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t{% if is_granted(role_ag) %}
\t\t\t\t\t\t\t<form action=\"{{ path('app_admin_groupaction_user') }}\" id=\"grpaction\" method=\"post\" name=\"grpaction\">
\t\t\t\t\t\t\t\t<div class=\"form-group form-inline\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"action\" required id=\"action_select\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">{{ \"backend.user.group_actions\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t{% if is_granted(role_ag_enable) %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{\"backend.user.deactivate\"|trans }}\">{{ \"backend.user.deactivate\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"{{\"backend.user.Activate\"|trans }}\">{{ \"backend.user.Activate\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if is_granted(role_ag_delete) %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{\"backend.user.delete\"|trans }}\">{{ \"backend.user.delete\"|trans }}</option>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">Go!!</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<table id=\"example\" class=\"display table table-striped table-bordered dataminetables\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t{% if is_granted(role_ag) %}
\t\t\t\t\t\t\t\t\t<th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<th>{{ \"backend.user.username\"|trans }}</th>
\t\t\t\t\t\t\t\t\t<th>{{ \"backend.user.email\"|trans }}</th>
\t\t\t\t\t\t\t\t\t<th>{{ \"backend.user.name\"|trans }}</th>
\t\t\t\t\t\t\t\t{% if is_granted(role_reset_password_user) %}
\t\t\t\t\t\t\t\t\t<th>Reinitialiser</th>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if is_granted(role_edit) %}
\t\t\t\t\t\t\t\t\t<th>{{ \"backend.user.modifier\"|trans }}</th>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if is_granted(role_enable) %}
\t\t\t\t\t\t\t\t\t<th>{{ \"backend.user.status\"|trans }}</th>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if is_granted(role_delete) %}
\t\t\t\t\t\t\t\t\t<th>{{ \"backend.user.delete\"|trans }}</th>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for user in users|filter(user => not user.deleted)  %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t{% if is_granted(role_ag) %}
\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"{{ user.id }}\"></td>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t<td>{{ user.username }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ user.email }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td>{{ user.nomComplet }}</td>
\t\t\t\t\t\t\t\t\t\t\t{% if is_granted(role_reset_password_user) %}
\t\t\t\t\t\t\t\t\t\t\t\t<td><a class=\"btn btn-primary\" href=\"{{ path('app_admin_resetpswd',{\"id\":user.id}) }}\"><i class=\"fa fa-key\"></i></a></td>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if is_granted(role_edit) %}
\t\t\t\t\t\t\t\t\t\t\t\t<td><a class=\"btn btn-primary\" href=\"{{ path('app_admin_edit_user',{\"id\":user.id}) }}\"><i class=\"fa fa-edit\"></i></a></td>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if is_granted(role_enable) %}
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t{%  if user.valid %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success activate-link\" href=\"{{ path('app_admin_changevalidite_user', {'id': user.id}) }}\"> <i class=\"fa fa-check\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-warning activate-link\" href=\"{{ path('app_admin_changevalidite_user', {'id': user.id}) }}\"> <i class=\"fa fa-times\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if is_granted(role_delete) %}
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"{{ path('app_admin_delete_user', {'id': user.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "admin/user/user.html.twig", "/appdata/www/templates/admin/user/user.html.twig");
    }
}
