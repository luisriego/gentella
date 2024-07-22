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

/* admin/bars.html.twig */
class __TwigTemplate_daa526e388c449810bac54ad7786626a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bars' => [$this, 'block_bars'],
            'contenpage' => [$this, 'block_contenpage'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/bars.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/bars.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/bars.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_bars($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bars"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bars"));

        // line 3
        echo "    <div class=\"col-md-3 left_col menu_fixed\">
        <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
                <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_index");
        echo "\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>G S 6</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
                <div class=\"profile_pic\">
                    ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 15
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "avatarUrl", [], "method", false, false, false, 15), "html", null, true);
            echo "\" alt=\"...\" class=\"img-circle profile_img\">
                    ";
        }
        // line 17
        echo "                </div>
                <div class=\"profile_info\">
                    <span>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.welcome"), "html", null, true);
        echo ",</span>
                    <h2>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "nomComplet", [], "any", false, false, false, 20), "html", null, true);
        echo "</h2>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu \">
                <div class=\"menu_section\">
                    <ul class=\"nav side-menu\">
                        <li><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_index");
        echo "\"><i class=\"fa fa-home\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.home"), "html", null, true);
        echo "</a>
                        </li>
                        ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCESS_MENU_USER")) {
            // line 34
            echo "                            <li><a><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.user"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    ";
            // line 36
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCESS_MENU_MANAGE_USER")) {
                // line 37
                echo "                                    <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 39
            echo "                                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCESS_MENU_MANAGE_PROFILE")) {
                // line 40
                echo "                                    <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_profiles");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.profil"), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 42
            echo "                                </ul>
                            </li>
                        ";
        }
        // line 45
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCESS_MENU_CATEGORIE")) {
            // line 46
            echo "                            <li><a><i class=\"fa fa-bookmark\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.categories"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_categories");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
            echo "</a></li>
                                </ul>
                            </li>
                        ";
        }
        // line 52
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCESS_MENU_BLOG")) {
            // line 53
            echo "                            <li><a><i class=\"fa fa-clipboard\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.blog"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    ";
            // line 55
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCESS_MENU_MANAGE_BLOG")) {
                // line 56
                echo "                                    <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_blogPosts");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 58
            echo "
                                    ";
            // line 59
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCESS_MENU_MANAGE_HISTORYBLOG")) {
                // line 60
                echo "                                        <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_allhistorique_blogPosts");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.history"), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 62
            echo "                                </ul>
                            </li>
                        ";
        }
        // line 65
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCESS_MENU_CONTACT")) {
            // line 66
            echo "                            <li><a><i class=\"fa fa-envelope\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.contact"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_contacts");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.inbox"), "html", null, true);
            echo "</a></li>
                                </ul>
                            </li>
                        ";
        }
        // line 72
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCESS_MENU_PARAMETRE")) {
            // line 73
            echo "
                            <li><a><i class=\"fa fa-cog\"></i> ";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.settings"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    ";
            // line 76
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCESS_MENU_MANAGE_GENERAL")) {
                // line 77
                echo "                                    <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_parametre_generale");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.general"), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 79
            echo "                                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ACCESS_MENU_MANAGE_FAQ")) {
                // line 80
                echo "                                    <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_faqs");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.faq"), "html", null, true);
                echo "</a></li>
                                    ";
            }
            // line 82
            echo "                                </ul>
                            </li>
                        ";
        }
        // line 85
        echo "                    </ul>

                </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
        </div>
    </div>

    <!-- top navigation -->
    <div class=\"top_nav\">
        <div class=\"nav_menu\">
            <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>
            <nav class=\"nav navbar-nav\">
                <ul class=\" navbar-right\">
                    <li class=\"nav-item dropdown open\" style=\"padding-left: 15px;\">
                        <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" aria-haspopup=\"true\" id=\"navbarDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "avatarUrl", [], "method", false, false, false, 106), "html", null, true);
        echo "\" alt=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "nomComplet", [], "any", false, false, false, 106), "html", null, true);
        echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-usermenu pull-right\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\"  href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changepswd");
        echo "\"><i class=\"fa fa-key pull-right\"></i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.change_my_password"), "html", null, true);
        echo "</a>
                            <a class=\"dropdown-item\"  href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"fa fa-sign-out pull-right\"></i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.logout"), "html", null, true);
        echo "</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /top navigation -->

    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 122
            echo "            <div class=\"alert alert-danger alert-dismissible \" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                </button>
                <strong>";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.error"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 128));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 129
            echo "            <div class=\"alert alert-success alert-dismissible \" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                </button>
                <strong>";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.success"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "        ";
        $this->displayBlock('contenpage', $context, $blocks);
        // line 136
        echo "    </div>
    <!-- /page content -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 135
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/bars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 135,  363 => 136,  360 => 135,  349 => 132,  344 => 129,  339 => 128,  328 => 125,  323 => 122,  319 => 121,  303 => 110,  297 => 109,  289 => 106,  266 => 85,  261 => 82,  253 => 80,  250 => 79,  242 => 77,  240 => 76,  235 => 74,  232 => 73,  229 => 72,  220 => 68,  214 => 66,  211 => 65,  206 => 62,  198 => 60,  196 => 59,  193 => 58,  185 => 56,  183 => 55,  177 => 53,  174 => 52,  165 => 48,  159 => 46,  156 => 45,  151 => 42,  143 => 40,  140 => 39,  132 => 37,  130 => 36,  124 => 34,  122 => 33,  115 => 31,  101 => 20,  97 => 19,  93 => 17,  87 => 15,  85 => 14,  74 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"adminbase.html.twig\" %}
{% block bars %}
    <div class=\"col-md-3 left_col menu_fixed\">
        <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
                <a href=\"{{ path('app_admin_index') }}\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>G S 6</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
                <div class=\"profile_pic\">
                    {% if is_granted('ROLE_ADMIN') %}
                        <img src=\"{{ app.user.avatarUrl() }}\" alt=\"...\" class=\"img-circle profile_img\">
                    {% endif %}
                </div>
                <div class=\"profile_info\">
                    <span>{{ \"backend.global.welcome\"|trans }},</span>
                    <h2>{{ app.user.nomComplet }}</h2>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu \">
                <div class=\"menu_section\">
                    <ul class=\"nav side-menu\">
                        <li><a href=\"{{ path('app_admin_index') }}\"><i class=\"fa fa-home\"></i> {{ \"backend.menu.home\"|trans }}</a>
                        </li>
                        {% if is_granted(\"ROLE_ACCESS_MENU_USER\") %}
                            <li><a><i class=\"fa fa-user\"></i> {{ \"backend.menu.user\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    {% if is_granted(\"ROLE_ACCESS_MENU_MANAGE_USER\") %}
                                    <li><a href=\"{{ path('app_admin_users') }}\">{{ \"backend.menu.manage\"|trans }}</a></li>
                                    {% endif %}
                                    {% if is_granted(\"ROLE_ACCESS_MENU_MANAGE_PROFILE\") %}
                                    <li><a href=\"{{ path('app_admin_profiles') }}\">{{ \"backend.menu.profil\"|trans }}</a></li>
                                    {% endif %}
                                </ul>
                            </li>
                        {% endif %}
                        {% if is_granted(\"ROLE_ACCESS_MENU_CATEGORIE\") %}
                            <li><a><i class=\"fa fa-bookmark\"></i>{{ \"backend.menu.categories\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('app_admin_categories') }}\">{{ \"backend.menu.manage\"|trans }}</a></li>
                                </ul>
                            </li>
                        {% endif %}
                        {% if is_granted(\"ROLE_ACCESS_MENU_BLOG\") %}
                            <li><a><i class=\"fa fa-clipboard\"></i> {{ \"backend.menu.blog\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    {% if is_granted(\"ROLE_ACCESS_MENU_MANAGE_BLOG\") %}
                                    <li><a href=\"{{ path('app_admin_blogPosts') }}\">{{ \"backend.menu.manage\"|trans }}</a></li>
                                    {% endif %}

                                    {% if is_granted(\"ROLE_ACCESS_MENU_MANAGE_HISTORYBLOG\") %}
                                        <li><a href=\"{{ path('app_admin_allhistorique_blogPosts') }}\">{{ \"backend.menu.history\"|trans }}</a></li>
                                    {% endif %}
                                </ul>
                            </li>
                        {% endif %}
                        {% if is_granted(\"ROLE_ACCESS_MENU_CONTACT\") %}
                            <li><a><i class=\"fa fa-envelope\"></i>{{ \"backend.menu.contact\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('app_admin_contacts') }}\"> {{ \"backend.menu.inbox\"|trans }}</a></li>
                                </ul>
                            </li>
                        {% endif %}
                        {% if is_granted(\"ROLE_ACCESS_MENU_PARAMETRE\") %}

                            <li><a><i class=\"fa fa-cog\"></i> {{ \"backend.menu.settings\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    {% if is_granted(\"ROLE_ACCESS_MENU_MANAGE_GENERAL\") %}
                                    <li><a href=\"{{ path('app_admin_parametre_generale') }}\">{{ \"backend.menu.general\"|trans }}</a></li>
                                    {% endif %}
                                    {% if is_granted(\"ROLE_ACCESS_MENU_MANAGE_FAQ\") %}
                                    <li><a href=\"{{ path('app_admin_faqs') }}\">{{ \"backend.menu.faq\"|trans }}</a></li>
                                    {% endif %}
                                </ul>
                            </li>
                        {% endif %}
                    </ul>

                </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
        </div>
    </div>

    <!-- top navigation -->
    <div class=\"top_nav\">
        <div class=\"nav_menu\">
            <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>
            <nav class=\"nav navbar-nav\">
                <ul class=\" navbar-right\">
                    <li class=\"nav-item dropdown open\" style=\"padding-left: 15px;\">
                        <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" aria-haspopup=\"true\" id=\"navbarDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <img src=\"{{ app.user.avatarUrl() }}\" alt=\"\">{{ app.user.nomComplet }}
                        </a>
                        <div class=\"dropdown-menu dropdown-usermenu pull-right\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\"  href=\"{{ path('app_admin_changepswd') }}\"><i class=\"fa fa-key pull-right\"></i>{{ \"backend.global.change_my_password\"|trans }}</a>
                            <a class=\"dropdown-item\"  href=\"{{ path('app_logout') }}\"><i class=\"fa fa-sign-out pull-right\"></i>{{ \"backend.global.logout\"|trans }}</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /top navigation -->

    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        {% for message in app.flashes(\"error\") %}
            <div class=\"alert alert-danger alert-dismissible \" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                </button>
                <strong>{{ \"backend.global.error\"|trans }}</strong> {{ message|trans }}
            </div>
        {% endfor %}
        {% for message in app.flashes(\"success\") %}
            <div class=\"alert alert-success alert-dismissible \" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                </button>
                <strong>{{ \"backend.global.success\"|trans }}</strong> {{ message|trans }}
            </div>
        {% endfor %}
        {% block contenpage %}{% endblock %}
    </div>
    <!-- /page content -->
{% endblock %}
", "admin/bars.html.twig", "/appdata/www/templates/admin/bars.html.twig");
    }
}
