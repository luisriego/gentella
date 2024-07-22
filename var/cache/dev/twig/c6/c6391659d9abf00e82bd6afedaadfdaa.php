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

/* admin/blog/historique.html.twig */
class __TwigTemplate_cbfccce9ea72c93af71cf819cb7e21e2 extends Template
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
        // line 2
        return "admin/displayPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/historique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/historique.html.twig"));

        // line 4
        $context["role_ag"] = "NO_ROLE";
        // line 5
        $context["role_add"] = "NO_ROLE";
        // line 6
        $context["role_ag_enable"] = "NO_ROLE";
        // line 7
        $context["role_ag_delete"] = "NO_ROLE";
        // line 8
        $context["role_edit"] = "NO_ROLE";
        // line 9
        $context["role_enable"] = "NO_ROLE";
        // line 10
        $context["role_delete"] = "NO_ROLE";
        // line 11
        $context["role_undo"] = "ROLE_UNDO_HISTORYBLOG";
        // line 12
        $context["role_view"] = "ROLE_VIEW_HISTORYBLOG";
        // line 15
        $context["title"] = "Historique des modifications d'un post du blog";
        // line 2
        $this->parent = $this->loadTemplate("admin/displayPage.html.twig", "admin/blog/historique.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
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

    // line 19
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

    // line 22
    public function block_showTableHead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableHead"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "showTableHead"));

        // line 23
        echo "    <thead>

    <th>Titre</th>
    <th>Action</th>
    <th>Date</th>
    <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.user"), "html", null, true);
        echo "</th>

    ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_undo"]) || array_key_exists("role_undo", $context) ? $context["role_undo"] : (function () { throw new RuntimeError('Variable "role_undo" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "        <th>Undo</th>
    ";
        }
        // line 33
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_view"]) || array_key_exists("role_view", $context) ? $context["role_view"] : (function () { throw new RuntimeError('Variable "role_view" does not exist.', 33, $this->source); })()))) {
            // line 34
            echo "        <th>Ancienne version</th>
    ";
        }
        // line 36
        echo "    </thead>
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
        echo "    <tbody>
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["blogPost"]) || array_key_exists("blogPost", $context) ? $context["blogPost"] : (function () { throw new RuntimeError('Variable "blogPost" does not exist.', 40, $this->source); })()), "historiques", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["historique"]) {
            // line 41
            echo "        <tr>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "blogPost", [], "any", false, false, false, 42), "titre", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historique"], "action", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["historique"], "actionDate", [], "any", false, false, false, 44), "d/m/Y h:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "user", [], "any", false, false, false, 45), "nomComplet", [], "any", false, false, false, 45), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "user", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
            echo ")</td>
            <td>
                ";
            // line 47
            if (((twig_get_attribute($this->env, $this->source, $context["historique"], "action", [], "any", false, false, false, 47) != "Creation") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_undo"]) || array_key_exists("role_undo", $context) ? $context["role_undo"] : (function () { throw new RuntimeError('Variable "role_undo" does not exist.', 47, $this->source); })())))) {
                // line 48
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_historique_undo", ["id" => twig_get_attribute($this->env, $this->source, $context["historique"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Annuler</a>
                ";
            } else {
                // line 50
                echo "                    No action
                ";
            }
            // line 52
            echo "            </td>
            <td>
                ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, $context["historique"], "oldPost", [], "any", false, false, false, 54) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted((isset($context["role_view"]) || array_key_exists("role_view", $context) ? $context["role_view"] : (function () { throw new RuntimeError('Variable "role_view" does not exist.', 54, $this->source); })())))) {
                // line 55
                echo "                    <a class=\"btn btn-warning\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_oldpost_blogPosts", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["historique"], "oldPost", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\">
                        <i class=\"fa fa-eye\"></i>
                    </a>
                ";
            }
            // line 59
            echo "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    </tbody>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/historique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 62,  229 => 59,  221 => 55,  219 => 54,  215 => 52,  211 => 50,  205 => 48,  203 => 47,  196 => 45,  192 => 44,  188 => 43,  184 => 42,  181 => 41,  177 => 40,  174 => 39,  164 => 38,  153 => 36,  149 => 34,  146 => 33,  142 => 31,  140 => 30,  135 => 28,  128 => 23,  118 => 22,  100 => 19,  82 => 18,  71 => 2,  69 => 15,  67 => 12,  65 => 11,  63 => 10,  61 => 9,  59 => 8,  57 => 7,  55 => 6,  53 => 5,  51 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"admin/displayPage.html.twig\" %}

{% set role_ag = \"NO_ROLE\" %}
{% set role_add = \"NO_ROLE\" %}
{% set role_ag_enable = \"NO_ROLE\" %}
{% set role_ag_delete = \"NO_ROLE\" %}
{% set role_edit = \"NO_ROLE\" %}
{% set role_enable = \"NO_ROLE\" %}
{% set role_delete = \"NO_ROLE\" %}
{% set role_undo = \"ROLE_UNDO_HISTORYBLOG\" %}
{% set role_view = \"ROLE_VIEW_HISTORYBLOG\" %}


{% set title = \"Historique des modifications d'un post du blog\" %}


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
    {% for historique in blogPost.historiques  %}
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
", "admin/blog/historique.html.twig", "/appdata/www/templates/admin/blog/historique.html.twig");
    }
}
