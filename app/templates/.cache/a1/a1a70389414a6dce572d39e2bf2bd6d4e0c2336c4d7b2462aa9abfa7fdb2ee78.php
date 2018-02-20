<?php

/* portal/portal.twig */
class __TwigTemplate_6207d7dd50843ab07b12ebd3a430fdc5420a21583a42a5884f788b540d696b1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'appStylos' => array($this, 'block_appStylos'),
            'appHeader' => array($this, 'block_appHeader'),
            'appHead' => array($this, 'block_appHead'),
            'appside' => array($this, 'block_appside'),
            'appBody' => array($this, 'block_appBody'),
            'appFooter' => array($this, 'block_appFooter'),
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
  <head>

    ";
        // line 6
        echo "    ";
        echo $this->env->getExtension('Ocrend\Kernel\Helpers\Functions')->base_assets();
        echo "
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" href=\"views/app/template/bootstrap/dist/css/bootstrap.min.css\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"views/app/template/font-awesome/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"views/app/template/Ionicons/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"views/app/template/AdminLTE.min.css\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"views/app/template/skins/_all-skins.min.css\">
    <!-- Alertas -->
    <link rel=\"stylesheet\" href=\"views/app/template/jquery-confirm/jquery-confirm.min.css\">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"views/app/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">

    ";
        // line 39
        $this->displayBlock('appStylos', $context, $blocks);
        // line 42
        echo "
    <link href=\"views/app/images/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />
    ";
        // line 45
        echo "    <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "name", array()), "html", null, true);
        echo "</title>

    ";
        // line 48
        echo "    ";
        $this->displayBlock('appHeader', $context, $blocks);
        // line 51
        echo "
  </head>
  <body class=\"hold-transition skin-blue sidebar-mini\"> <!--<body class=\"hold-transition skin-blue sidebar-mini\">-->
    <div class=\"wrapper\">
        <div style=\"display: none;\" id=\"cargador\" align=\"center\">
            <br>
            <label style=\"color:#FFF; background-color:#ABB6BA; text-align:center\">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>

            <img src=\"views/app/images/cargando.gif\" align=\"middle\" alt=\"cargador\"> &nbsp;<label style=\"color:#ABB6BA\">Realizando tarea solicitada ...</label>

            <br>
            <hr style=\"color:#003\" width=\"30%\">
            <br>
        </div>
        ";
        // line 65
        $this->displayBlock('appHead', $context, $blocks);
        // line 68
        echo "
        ";
        // line 69
        $this->displayBlock('appside', $context, $blocks);
        // line 72
        echo "
        ";
        // line 74
        echo "         <div class=\"content-wrapper\">
            ";
        // line 75
        $this->displayBlock('appBody', $context, $blocks);
        // line 99
        echo "        </div>


      ";
        // line 103
        echo "      ";
        $this->displayBlock('appFooter', $context, $blocks);
        // line 106
        echo "
      ";
        // line 107
        $this->loadTemplate("portal/resetpass", "portal/portal.twig", 107)->display($context);
        // line 108
        echo "    </div>
    ";
        // line 110
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "framework", array()), "debug", array())) {
            // line 111
            echo "      ";
            // line 112
            echo "      <script src=\"views/app/js/jdev.min.js\"></script>
    ";
        } else {
            // line 114
            echo "      ";
            // line 115
            echo "      <script src=\"views/app/template/jquery/dist/jquery.min.js\"></script>
    ";
        }
        // line 117
        echo "
    <!-- jQuery UI 1.11.4 -->
    <script src=\"views/app/template/jquery-ui/jquery-ui.min.js\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src=\"views/app/template/bootstrap/dist/js/bootstrap.min.js\"></script>
    <!-- Slimscroll -->
    <script src=\"views/app/template/jquery-slimscroll/jquery.slimscroll.min.js\"></script>
    <!-- FastClick -->
    <script src=\"views/app/template/fastclick/lib/fastclick.js\"></script>
    <!-- AdminLTE App -->
    <script src=\"views/app/template/adminlte.min.js\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"views/app/template/demo.js\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"views/app/template/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js\"></script>

    <!-- Alertas -->
    <script src=\"views/app/template/jquery-confirm/jquery-confirm.min.js\"></script>

    <script src=\"views/app/js/portal/portal.js\"></script>
    <script>
        var width = \$(document).width();
        if(width > 770){
            \$('body').addClass('sidebar-collapse');
        }
        \$(window).resize(function(){
            if(width <= 770){
                \$('body').removeClass('sidebar-collapse');
            }
        })
    </script>



    ";
        // line 156
        echo "    ";
        $this->displayBlock('appScript', $context, $blocks);
        // line 159
        echo "
  </body>
</html>
";
    }

    // line 39
    public function block_appStylos($context, array $blocks = array())
    {
        // line 40
        echo "
    ";
    }

    // line 48
    public function block_appHeader($context, array $blocks = array())
    {
        // line 49
        echo "      <!-- :) -->
    ";
    }

    // line 65
    public function block_appHead($context, array $blocks = array())
    {
        // line 66
        echo "            ";
        $this->loadTemplate("portal/header", "portal/portal.twig", 66)->display($context);
        // line 67
        echo "        ";
    }

    // line 69
    public function block_appside($context, array $blocks = array())
    {
        // line 70
        echo "            ";
        $this->loadTemplate("portal/menu", "portal/portal.twig", 70)->display($context);
        // line 71
        echo "        ";
    }

    // line 75
    public function block_appBody($context, array $blocks = array())
    {
        // line 76
        echo "              <section class=\"content-header\">
              <h1>
                  ESCRITORIO
                  <small>Control panel</small>
              </h1>
              <ol class=\"breadcrumb\">
                  <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Home </a></li>
                  <li class=\"active\">Dashboard</li>
              </ol>

              </section>
              <section class=\"content\">
                <div class=\"row\">
                  <div class=\"col-lg-12 col-xs-12\">
                    <div class=\"panel panel-info\">
                      <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">  <i class=\"icon fa fa-user\"></i> Bienvenido <strong>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name", array(), "array"), "html", null, true);
        echo "</strong>.</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            ";
    }

    // line 103
    public function block_appFooter($context, array $blocks = array())
    {
        // line 104
        echo "        ";
        $this->loadTemplate("portal/footer", "portal/portal.twig", 104)->display($context);
        // line 105
        echo "      ";
    }

    // line 156
    public function block_appScript($context, array $blocks = array())
    {
        // line 157
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "portal/portal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 157,  274 => 156,  270 => 105,  267 => 104,  264 => 103,  253 => 92,  235 => 76,  232 => 75,  228 => 71,  225 => 70,  222 => 69,  218 => 67,  215 => 66,  212 => 65,  207 => 49,  204 => 48,  199 => 40,  196 => 39,  189 => 159,  186 => 156,  146 => 117,  142 => 115,  140 => 114,  136 => 112,  134 => 111,  131 => 110,  128 => 108,  126 => 107,  123 => 106,  120 => 103,  115 => 99,  113 => 75,  110 => 74,  107 => 72,  105 => 69,  102 => 68,  100 => 65,  84 => 51,  81 => 48,  75 => 45,  71 => 42,  69 => 39,  32 => 6,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/portal.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\portal\\portal.twig");
    }
}
