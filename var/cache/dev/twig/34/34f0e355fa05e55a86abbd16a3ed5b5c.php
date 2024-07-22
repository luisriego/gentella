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

/* admin/blog/fullhistorique.html.twig */
class __TwigTemplate_ff62a2255029337de032065bece6269e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'newLinks' => [$this, 'block_newLinks'],
            'GroupAction' => [$this, 'block_GroupAction'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/fullhistorique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/fullhistorique.html.twig"));

        // line 3
        $context["role_ag"] = "NO_ROLE";
        // line 4
        $context["role_add"] = "NO_ROLE";
        // line 5
        $context["role_ag_enable"] = "NO_ROLE";
        // line 6
        $context["role_ag_delete"] = "NO_ROLE";
        // line 7
        $context["role_edit"] = "NO_ROLE";
        // line 8
        $context["role_enable"] = "NO_ROLE";
        // line 9
        $context["role_delete"] = "NO_ROLE";
        // line 10
        $context["role_undo"] = "ROLE_UNDO_HISTORYBLOG";
        // line 11
        $context["role_view"] = "ROLE_VIEW_HISTORYBLOG";
        // line 14
        $context["title"] = "Historique du blog";
        // line 1
        $this->parent = $this->loadTemplate("admin/displayPage.html.twig", "admin/blog/fullhistorique.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
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

    // line 18
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

    // line 21
    public function block_showTableHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableHead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableHead"));

        // line 22
        echo "    <thead>

    <th>Titre</th>
    <th>Action</th>
    <th>Date</th>
    <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.user"), "html", null, true);
        echo "</th>

    ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_undo"]) || array_key_exists("role_undo", $context) ? $context["role_undo"] : (function () { throw new RuntimeError('Variable "role_undo" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "        <th>Undo</th>
    ";
        }
        // line 32
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_view"]) || array_key_exists("role_view", $context) ? $context["role_view"] : (function () { throw new RuntimeError('Variable "role_view" does not exist.', 32, $this->source); })()))) {
            // line 33
            echo "        <th>Ancienne version</th>
    ";
        }
        // line 35
        echo "    </thead>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_showTableBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableBody"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableBody"));

        // line 38
        echo "    <tbody>
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historiques"]) || array_key_exists("historiques", $context) ? $context["historiques"] : (function () { throw new RuntimeError('Variable "historiques" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["historique"]) {
            // line 40
            echo "        <tr>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "blogPost", [], "any", false, false, false, 41), "titre", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historique"], "action", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historique"], "actionDate", [], "any", false, false, false, 43), "d/m/Y h:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "user", [], "any", false, false, false, 44), "nomComplet", [], "any", false, false, false, 44), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "user", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
            echo ")</td>
            <td>
                ";
            // line 46
            if (((twig_get_attribute($this->env, $this->source, $context["historique"], "action", [], "any", false, false, false, 46) != "Creation") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_undo"]) || array_key_exists("role_undo", $context) ? $context["role_undo"] : (function () { throw new RuntimeError('Variable "role_undo" does not exist.', 46, $this->source); })())))) {
                // line 47
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_historique_undo", ["id" => twig_get_attribute($this->env, $this->source, $context["historique"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Annuler</a>
                ";
            } else {
                // line 49
                echo "                    No action
                ";
            }
            // line 51
            echo "            </td>
            <td>
                ";
            // line 53
            if ((twig_get_attribute($this->env, $this->source, $context["historique"], "oldPost", [], "any", false, false, false, 53) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_view"]) || array_key_exists("role_view", $context) ? $context["role_view"] : (function () { throw new RuntimeError('Variable "role_view" does not exist.', 53, $this->source); })())))) {
                // line 54
                echo "                    <a class=\"btn btn-warning\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_oldpost_blogPosts", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "oldPost", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\">
                        <i class=\"fa fa-eye\"></i>
                    </a>
                ";
            }
            // line 58
            echo "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </tbody>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/fullhistorique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 61,  229 => 58,  221 => 54,  219 => 53,  215 => 51,  211 => 49,  205 => 47,  203 => 46,  196 => 44,  192 => 43,  188 => 42,  184 => 41,  181 => 40,  177 => 39,  174 => 38,  164 => 37,  153 => 35,  149 => 33,  146 => 32,  142 => 30,  140 => 29,  135 => 27,  128 => 22,  118 => 21,  100 => 18,  82 => 17,  71 => 1,  69 => 14,  67 => 11,  65 => 10,  63 => 9,  61 => 8,  59 => 7,  57 => 6,  55 => 5,  53 => 4,  51 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/displayPage.html.twig\" %}

{% set role_ag = \"NO_ROLE\" %}
{% set role_add = \"NO_ROLE\" %}
{% set role_ag_enable = \"NO_ROLE\" %}
{% set role_ag_delete = \"NO_ROLE\" %}
{% set role_edit = \"NO_ROLE\" %}
{% set role_enable = \"NO_ROLE\" %}
{% set role_delete = \"NO_ROLE\" %}
{% set role_undo = \"ROLE_UNDO_HISTORYBLOG\" %}
{% set role_view = \"ROLE_VIEW_HISTORYBLOG\" %}


{% set title = \"Historique du blog\" %}


{% block newLinks %}{% endblock %}
{% block GroupAction %}{% endblock %}


{% block showTableHead %}
    <thead>

    <th>Titre</th>
    <th>Action</th>
    <th>Date</th>
    <th>{{ \"backend.menu.user\"|trans }}</th>

    {% if is_granted(role_undo) %}
        <th>Undo</th>
    {% endif %}
    {% if is_granted(role_view) %}
        <th>Ancienne version</th>
    {% endif %}
    </thead>
{% endblock %}
{% block showTableBody%}
    <tbody>
    {% for historique in historiques  %}
        <tr>
            <td>{{ historique.blogPost.titre }}</td>
            <td>{{ historique.action }}</td>
            <td>{{ historique.actionDate|date(\"d/m/Y h:i:s\") }}</td>
            <td>{{ historique.user.nomComplet }} ({{ historique.user.id }})</td>
            <td>
                {% if historique.action != \"Creation\"and is_granted(role_undo)  %}
                    <a href=\"{{ path('app_admin_historique_undo', {'id': historique.id}) }}\" class=\"btn btn-primary\">Annuler</a>
                {% else %}
                    No action
                {% endif %}
            </td>
            <td>
                {% if historique.oldPost and is_granted(role_view) %}
                    <a class=\"btn btn-warning\" href=\"{{ path('app_admin_oldpost_blogPosts', {'id': historique.oldPost.id}) }}\">
                        <i class=\"fa fa-eye\"></i>
                    </a>
                {% endif %}
            </td>
        </tr>
    {% endfor %}
    </tbody>
{% endblock %}




", "admin/blog/fullhistorique.html.twig", "/appdata/www/templates/admin/blog/fullhistorique.html.twig");
    }
}
