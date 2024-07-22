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

/* adminbase.html.twig */
class __TwigTemplate_bb16710a0b1580509910924381f38772 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'metas' => [$this, 'block_metas'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'bodyclass' => [$this, 'block_bodyclass'],
            'body' => [$this, 'block_body'],
            'bars' => [$this, 'block_bars'],
            'javascripts' => [$this, 'block_javascripts'],
            'dataTableConf' => [$this, 'block_dataTableConf'],
            'summernote' => [$this, 'block_summernote'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminbase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminbase.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adminbase.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metas"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metas"));

        // line 4
        echo "    <meta charset=\"UTF-8\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"images/favicon.ico\" type=\"image/ico\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "
    <!-- Bootstrap -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- bootstrap-progressbar -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- JQVMap -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jqvmap/dist/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Datatables -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- PNotify -->
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pnotify/dist/pnotify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pnotify/dist/pnotify.buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pnotify/dist/pnotify.nonblock.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">
    <!-- include summernote css/js -->
    <link href=\"https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_bodyclass($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyclass"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyclass"));

        echo " class=\"nav-md\" ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "    <div class=\"container body\">
        <div class=\"main_container\">
            ";
        // line 45
        $this->displayBlock('bars', $context, $blocks);
        // line 46
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_bars($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bars"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bars"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- Chart.js -->
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Skycons -->
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/flot.orderbars/js/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/flot-spline/js/jquery.flot.spline.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/flot.curvedlines/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- DateJS -->
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/DateJS/build/date.js"), "html", null, true);
        echo "\"></script>
    <!-- JQVMap -->
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jqvmap/dist/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jqvmap/dist/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- PNotify -->
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pnotify/dist/pnotify.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pnotify/dist/pnotify.buttons.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pnotify/dist/pnotify.nonblock.js"), "html", null, true);
        echo "\"></script>
    <!-- select-custom Latest compiled and minified JavaScript -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>
    <!-- Tagsinput -->
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jquery.tagsinput/src/jquery.tagsinput.js"), "html", null, true);
        echo "\"></script>
    <!-- Summernote -->
    <script src=\"https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js\"></script>
    <script>
        ";
        // line 106
        $this->displayBlock('dataTableConf', $context, $blocks);
        // line 116
        echo "
        var datanotminetables = \$('.datanotminetables').dataTable({
        });

        var datanotsorttables = \$('.datanotminetables').DataTable();


        \$(document).on(\"click\",\".activate-link\",function (e) {
            /*\$(\".activate-link\").click(function(e) {*/
            e.preventDefault();
            var btn = \$(this);
            var link = \$(this).attr(\"href\");
            \$.ajax({
                url: link,
                method: 'POST',
                success: function(data){
                    if(data.message==\"success\"){
                        if(data.value===true){
                            btn.removeClass(\"btn-success\");
                            btn.removeClass(\"btn-warning\");
                            btn.addClass(\"btn-success\");
                            btn.html(\"<i class=\\\"fa fa-check\\\"></i>\");
                            notif(\"success\",\"Reussi\",\"Activée\");
                        }else if(data.value===false) {
                            btn.removeClass(\"btn-success\");
                            btn.removeClass(\"btn-warning\");
                            btn.addClass(\"btn-warning\");
                            btn.html(\"<i class=\\\"fa fa-times\\\"></i>\");
                            notif(\"warning\",\"Reussi\",\"Desactivée\");
                        }


                    }else {
                        notif(\"error\",\"Erreur\",\"Une erreur innatendue est survenue.\");
                    }
                },
                error: function(xhr){
                    notif(\"error\",\"Erreur\",\"Une erreur innatendue est survenue\");
                }
            });
        });

        \$(document).on(\"click\",\".del-link\",function (e) {
            /*\$(\".activate-link\").click(function(e) {*/
            e.preventDefault();
            if(confirm(\"Voulez vous vraiment supprimer ?\")){
                var btn = \$(this);
                var link = \$(this).attr(\"href\");
                \$.ajax({
                    url: link,
                    method: 'POST',
                    success: function(data){
                        if(data.message===\"success\"){
                            if(data.value===true){
                                notif(\"success\",\"Reussi\",\"Suprimmé\");
                                // Get the position of the current data from the node
                                var aPos = dataminetables.fnGetPosition( btn.closest('tr').get(0) );
                                // Delete the row
                                dataminetables.fnDeleteRow(aPos);
                            }else if(data.value===false) {
                                notif(\"warning\",\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.error"), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.an_unexpected_error"), "html", null, true);
        echo "\"  );
                            }


                        }else if(data.message===\"warning\"){
                            notif(\"warning\",\"Warning\", \"Vous ne pouvez pas supprimer cette catégorie.\"  );
                        } else {
                            notif(\"error\",\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.error"), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.an_unexpected_error"), "html", null, true);
        echo "\"  );
                        }
                    },
                    error: function(xhr){
                        notif(\"error\",\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.error"), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.an_unexpected_error"), "html", null, true);
        echo "\"  );
                    }
                });
            }
        });


        function notif(type,titre,text) {
            new PNotify({
                title: titre,
                text: text,
                type: type,
                styling: 'bootstrap3'
            });
        }
        // transform all select
        \$('select').selectpicker();

        \$('#select_all').click(function() {
            if (\$(this).is(':checked')) {
                \$('.chkgrp').prop('checked', true);
            } else {
                \$('.chkgrp').prop('checked', false);
            }
        });

        \$(\"#grpaction\").submit(function (e) {
            e.preventDefault();
            var ids = [];
            var action = \$(\"#action_select\").val();

            datasorttables.rows().every(function (rowIdx, tableLoop, rowLoop) {
                var data = this.node();
                if (\$(data).find(\"input[name='chkgrp\\[\\]']\").prop('checked')) {
                    ids.push(\$(this.data()[0]).val());
                }
            });
            if (ids.length === 0){
                alert(\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.no_item_selected"), "html", null, true);
        echo "\");
            }else if (action === \"\"){
                alert(\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.choice_action"), "html", null, true);
        echo "\")
            } else {
                if (confirm(\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.please_confirm"), "html", null, true);
        echo "\")){
                    var link = \$(this).attr(\"action\");
                    ;
                    \$.ajax({
                        url: link,
                        method: 'POST',
                        data : {
                            action:action,
                            ids:ids
                        },
                        success: function(data){
                            if(data.message===\"success\"){
                                notif(\"success\",\"Reussi\",data.nb +\" element(s) \" +action);
                                setTimeout(window.location.reload(), 2000);
                            }else {
                                \$(\".main_container\").prepend(data);
                                notif(\"error\",\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.error"), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.an_unexpected_error"), "html", null, true);
        echo "\"  );
                            }
                        },
                        error: function(xhr){
                            notif(\"error\",\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.error"), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.an_unexpected_error"), "html", null, true);
        echo "\"  );
                        }
                    });
                }
            }
        });

        \$(\"body\").on('DOMSubtreeModified', \".dataTables_info\", function () {

            if (\$(\"#select_all\").is(':checked')) {
                \$('#select_all').prop('checked', false);
            }
        });

        ";
        // line 263
        $this->displayBlock('summernote', $context, $blocks);
        // line 268
        echo "
        \$('.custom-file-input').on('change', function(event) {
            var inputFile = event.currentTarget;
            \$(inputFile).parent()
                .find('.custom-file-label')
                .html(inputFile.files[0].name);
        });

        \$(\".mail_link\").on(\"click\",function (e) {
            e.preventDefault();
            var link = \$(this).attr(\"href\");
            var mail_link = \$(this);
            \$.ajax({
                url: link,
                method: 'POST',
                data : {},
                success: function(data){
                    \$(\".mail_list\").removeClass(\"selected_mail\");
                    \$(\".inbox-body\").attr(\"style\",\"\");
                    mail_link.find(\".mail_list\").removeClass(\"not_read_mail\").addClass(\"selected_mail\");
                    mail_link.find(\".mail_list .left i\").removeClass(\"fa-envelope\",\"fa-envelope-o\").addClass(\"fa-envelope-o\");
                    \$(\"#objetPlace\").html(\"Objet : \"+data.object);
                    \$(\"#datePlace\").html(data.sendedAt);
                    \$(\"#namePlace\").html(data.fullName);
                    \$(\"#emailPlace\").html(\"(\"+data.email+\")\");
                    \$(\".view-mail\").html(data.message);
                },
                error: function(xhr){
                    \$(\".inbox-body\").attr(\"style\",\"display:none\");
                    notif(\"error\",\"Erreur\",\"Une erreur innatendue est survenue\");
                }
            });
        })
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_dataTableConf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dataTableConf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dataTableConf"));

        // line 107
        echo "        var dataminetables = \$('.dataminetables').dataTable({
            \"columnDefs\": [
                {\"orderable\": false, \"targets\": 0}
            ]
        });

        var datasorttables = \$('.dataminetables').DataTable();

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 263
    public function block_summernote($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summernote"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summernote"));

        // line 264
        echo "        \$(document).ready(function() {
            \$('.summernote').summernote();
        });
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "adminbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  663 => 264,  653 => 263,  635 => 107,  625 => 106,  580 => 268,  578 => 263,  559 => 249,  550 => 245,  531 => 229,  526 => 227,  521 => 225,  478 => 187,  469 => 183,  457 => 176,  395 => 116,  393 => 106,  386 => 102,  379 => 98,  375 => 97,  371 => 96,  365 => 93,  361 => 92,  356 => 90,  350 => 87,  346 => 86,  341 => 84,  337 => 83,  333 => 82,  328 => 80,  323 => 78,  319 => 77,  315 => 76,  310 => 74,  306 => 73,  302 => 72,  298 => 71,  294 => 70,  289 => 68,  284 => 66,  279 => 64,  274 => 62,  269 => 60,  264 => 58,  259 => 56,  254 => 54,  249 => 52,  246 => 51,  236 => 50,  218 => 45,  206 => 46,  204 => 45,  200 => 43,  190 => 42,  171 => 41,  155 => 34,  151 => 33,  147 => 32,  142 => 30,  137 => 28,  131 => 25,  126 => 23,  120 => 20,  115 => 18,  110 => 16,  105 => 14,  101 => 12,  91 => 11,  75 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {% extends \"base.html.twig\" %}

{% block metas %}
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" href=\"images/favicon.ico\" type=\"image/ico\" />
{% endblock %}
{% block stylesheets %}

    <!-- Bootstrap -->
    <link href=\"{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <!-- NProgress -->
    <link href=\"{{ asset('vendors/nprogress/nprogress.css') }}\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"{{ asset('vendors/iCheck/skins/flat/green.css') }}\" rel=\"stylesheet\">

    <!-- bootstrap-progressbar -->
    <link href=\"{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}\" rel=\"stylesheet\">
    <!-- JQVMap -->
    <link href=\"{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}\" rel=\"stylesheet\"/>

    <!-- Custom Theme Style -->
    <link href=\"{{ asset('build/css/custom.min.css') }}\" rel=\"stylesheet\">
    <!-- Datatables -->
    <link href=\"{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <!-- PNotify -->
    <link href=\"{{ asset('vendors/pnotify/dist/pnotify.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendors/pnotify/dist/pnotify.buttons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('vendors/pnotify/dist/pnotify.nonblock.css') }}\" rel=\"stylesheet\">
    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">
    <!-- include summernote css/js -->
    <link href=\"https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css\" rel=\"stylesheet\">
{% endblock %}

{% block bodyclass %} class=\"nav-md\" {% endblock %}
{% block body %}
    <div class=\"container body\">
        <div class=\"main_container\">
            {% block bars %}{% endblock %}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <!-- jQuery -->
    <script src=\"{{ asset('vendors/jquery/dist/jquery.min.js') }}\"></script>
    <!-- Bootstrap -->
    <script src=\"{{ asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}\"></script>
    <!-- FastClick -->
    <script src=\"{{ asset('vendors/fastclick/lib/fastclick.js')}}\"></script>
    <!-- NProgress -->
    <script src=\"{{ asset('vendors/nprogress/nprogress.js')}}\"></script>
    <!-- Chart.js -->
    <script src=\"{{ asset('vendors/Chart.js/dist/Chart.min.js')}}\"></script>
    <!-- gauge.js -->
    <script src=\"{{ asset('vendors/gauge.js/dist/gauge.min.js')}}\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}\"></script>
    <!-- iCheck -->
    <script src=\"{{ asset('vendors/iCheck/icheck.min.js')}}\"></script>
    <!-- Skycons -->
    <script src=\"{{ asset('vendors/skycons/skycons.js')}}\"></script>
    <!-- Flot -->
    <script src=\"{{ asset('vendors/Flot/jquery.flot.js')}}\"></script>
    <script src=\"{{ asset('vendors/Flot/jquery.flot.pie.js')}}\"></script>
    <script src=\"{{ asset('vendors/Flot/jquery.flot.time.js')}}\"></script>
    <script src=\"{{ asset('vendors/Flot/jquery.flot.stack.js')}}\"></script>
    <script src=\"{{ asset('vendors/Flot/jquery.flot.resize.js')}}\"></script>
    <!-- Flot plugins -->
    <script src=\"{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}\"></script>
    <script src=\"{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js')}}\"></script>
    <script src=\"{{ asset('vendors/flot.curvedlines/curvedLines.js')}}\"></script>
    <!-- DateJS -->
    <script src=\"{{ asset('vendors/DateJS/build/date.js')}}\"></script>
    <!-- JQVMap -->
    <script src=\"{{ asset('vendors/jqvmap/dist/jquery.vmap.js')}}\"></script>
    <script src=\"{{ asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}\"></script>
    <script src=\"{{ asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"{{ asset('vendors/moment/min/moment.min.js')}}\"></script>
    <script src=\"{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js')}}\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"{{ asset('build/js/custom.min.js')}}\"></script>
    <!-- Custom Theme Scripts -->
    <script src=\"{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>

    <!-- PNotify -->
    <script src=\"{{ asset('vendors/pnotify/dist/pnotify.js') }}\"></script>
    <script src=\"{{ asset('vendors/pnotify/dist/pnotify.buttons.js') }}\"></script>
    <script src=\"{{ asset('vendors/pnotify/dist/pnotify.nonblock.js') }}\"></script>
    <!-- select-custom Latest compiled and minified JavaScript -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js\"></script>
    <!-- Tagsinput -->
    <script src=\"{{ asset('vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}\"></script>
    <!-- Summernote -->
    <script src=\"https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js\"></script>
    <script>
        {% block dataTableConf %}
        var dataminetables = \$('.dataminetables').dataTable({
            \"columnDefs\": [
                {\"orderable\": false, \"targets\": 0}
            ]
        });

        var datasorttables = \$('.dataminetables').DataTable();

        {% endblock %}

        var datanotminetables = \$('.datanotminetables').dataTable({
        });

        var datanotsorttables = \$('.datanotminetables').DataTable();


        \$(document).on(\"click\",\".activate-link\",function (e) {
            /*\$(\".activate-link\").click(function(e) {*/
            e.preventDefault();
            var btn = \$(this);
            var link = \$(this).attr(\"href\");
            \$.ajax({
                url: link,
                method: 'POST',
                success: function(data){
                    if(data.message==\"success\"){
                        if(data.value===true){
                            btn.removeClass(\"btn-success\");
                            btn.removeClass(\"btn-warning\");
                            btn.addClass(\"btn-success\");
                            btn.html(\"<i class=\\\"fa fa-check\\\"></i>\");
                            notif(\"success\",\"Reussi\",\"Activée\");
                        }else if(data.value===false) {
                            btn.removeClass(\"btn-success\");
                            btn.removeClass(\"btn-warning\");
                            btn.addClass(\"btn-warning\");
                            btn.html(\"<i class=\\\"fa fa-times\\\"></i>\");
                            notif(\"warning\",\"Reussi\",\"Desactivée\");
                        }


                    }else {
                        notif(\"error\",\"Erreur\",\"Une erreur innatendue est survenue.\");
                    }
                },
                error: function(xhr){
                    notif(\"error\",\"Erreur\",\"Une erreur innatendue est survenue\");
                }
            });
        });

        \$(document).on(\"click\",\".del-link\",function (e) {
            /*\$(\".activate-link\").click(function(e) {*/
            e.preventDefault();
            if(confirm(\"Voulez vous vraiment supprimer ?\")){
                var btn = \$(this);
                var link = \$(this).attr(\"href\");
                \$.ajax({
                    url: link,
                    method: 'POST',
                    success: function(data){
                        if(data.message===\"success\"){
                            if(data.value===true){
                                notif(\"success\",\"Reussi\",\"Suprimmé\");
                                // Get the position of the current data from the node
                                var aPos = dataminetables.fnGetPosition( btn.closest('tr').get(0) );
                                // Delete the row
                                dataminetables.fnDeleteRow(aPos);
                            }else if(data.value===false) {
                                notif(\"warning\",\"{{\"backend.global.error\"|trans }}\", \"{{\"backend.global.an_unexpected_error\"|trans }}\"  );
                            }


                        }else if(data.message===\"warning\"){
                            notif(\"warning\",\"Warning\", \"Vous ne pouvez pas supprimer cette catégorie.\"  );
                        } else {
                            notif(\"error\",\"{{\"backend.global.error\"|trans }}\", \"{{\"backend.global.an_unexpected_error\"|trans }}\"  );
                        }
                    },
                    error: function(xhr){
                        notif(\"error\",\"{{\"backend.global.error\"|trans }}\", \"{{\"backend.global.an_unexpected_error\"|trans }}\"  );
                    }
                });
            }
        });


        function notif(type,titre,text) {
            new PNotify({
                title: titre,
                text: text,
                type: type,
                styling: 'bootstrap3'
            });
        }
        // transform all select
        \$('select').selectpicker();

        \$('#select_all').click(function() {
            if (\$(this).is(':checked')) {
                \$('.chkgrp').prop('checked', true);
            } else {
                \$('.chkgrp').prop('checked', false);
            }
        });

        \$(\"#grpaction\").submit(function (e) {
            e.preventDefault();
            var ids = [];
            var action = \$(\"#action_select\").val();

            datasorttables.rows().every(function (rowIdx, tableLoop, rowLoop) {
                var data = this.node();
                if (\$(data).find(\"input[name='chkgrp\\[\\]']\").prop('checked')) {
                    ids.push(\$(this.data()[0]).val());
                }
            });
            if (ids.length === 0){
                alert(\"{{'backend.global.no_item_selected'|trans }}\");
            }else if (action === \"\"){
                alert(\"{{'backend.global.choice_action'|trans }}\")
            } else {
                if (confirm(\"{{\"backend.global.please_confirm\"|trans }}\")){
                    var link = \$(this).attr(\"action\");
                    ;
                    \$.ajax({
                        url: link,
                        method: 'POST',
                        data : {
                            action:action,
                            ids:ids
                        },
                        success: function(data){
                            if(data.message===\"success\"){
                                notif(\"success\",\"Reussi\",data.nb +\" element(s) \" +action);
                                setTimeout(window.location.reload(), 2000);
                            }else {
                                \$(\".main_container\").prepend(data);
                                notif(\"error\",\"{{\"backend.global.error\"|trans }}\", \"{{\"backend.global.an_unexpected_error\"|trans }}\"  );
                            }
                        },
                        error: function(xhr){
                            notif(\"error\",\"{{\"backend.global.error\"|trans }}\", \"{{\"backend.global.an_unexpected_error\"|trans }}\"  );
                        }
                    });
                }
            }
        });

        \$(\"body\").on('DOMSubtreeModified', \".dataTables_info\", function () {

            if (\$(\"#select_all\").is(':checked')) {
                \$('#select_all').prop('checked', false);
            }
        });

        {% block summernote %}
        \$(document).ready(function() {
            \$('.summernote').summernote();
        });
        {% endblock  %}

        \$('.custom-file-input').on('change', function(event) {
            var inputFile = event.currentTarget;
            \$(inputFile).parent()
                .find('.custom-file-label')
                .html(inputFile.files[0].name);
        });

        \$(\".mail_link\").on(\"click\",function (e) {
            e.preventDefault();
            var link = \$(this).attr(\"href\");
            var mail_link = \$(this);
            \$.ajax({
                url: link,
                method: 'POST',
                data : {},
                success: function(data){
                    \$(\".mail_list\").removeClass(\"selected_mail\");
                    \$(\".inbox-body\").attr(\"style\",\"\");
                    mail_link.find(\".mail_list\").removeClass(\"not_read_mail\").addClass(\"selected_mail\");
                    mail_link.find(\".mail_list .left i\").removeClass(\"fa-envelope\",\"fa-envelope-o\").addClass(\"fa-envelope-o\");
                    \$(\"#objetPlace\").html(\"Objet : \"+data.object);
                    \$(\"#datePlace\").html(data.sendedAt);
                    \$(\"#namePlace\").html(data.fullName);
                    \$(\"#emailPlace\").html(\"(\"+data.email+\")\");
                    \$(\".view-mail\").html(data.message);
                },
                error: function(xhr){
                    \$(\".inbox-body\").attr(\"style\",\"display:none\");
                    notif(\"error\",\"Erreur\",\"Une erreur innatendue est survenue\");
                }
            });
        })
    </script>

{% endblock %}
", "adminbase.html.twig", "/appdata/www/templates/adminbase.html.twig");
    }
}
