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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">

    ";
        // line 35
        $this->displayBlock('appStylos', $context, $blocks);
        // line 38
        echo "
    <link href=\"views/app/images/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />
    ";
        // line 41
        echo "    <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "name", array()), "html", null, true);
        echo "</title>

    ";
        // line 44
        echo "    ";
        $this->displayBlock('appHeader', $context, $blocks);
        // line 47
        echo "
  </head>
  <body class=\"hold-transition skin-blue sidebar-mini sidebar-collapse\"> <!--<body class=\"hold-transition skin-blue sidebar-mini\">-->
    <div class=\"wrapper\">

        ";
        // line 52
        $this->displayBlock('appHead', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('appside', $context, $blocks);
        // line 59
        echo "        
        ";
        // line 61
        echo "         <div class=\"content-wrapper\">
            ";
        // line 62
        $this->displayBlock('appBody', $context, $blocks);
        // line 86
        echo "        </div>


      ";
        // line 90
        echo "      ";
        $this->displayBlock('appFooter', $context, $blocks);
        // line 93
        echo "
      ";
        // line 94
        $this->loadTemplate("portal/resetpass", "portal/portal.twig", 94)->display($context);
        // line 95
        echo "    </div>
    ";
        // line 97
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "framework", array()), "debug", array())) {
            // line 98
            echo "      ";
            // line 99
            echo "      <script src=\"views/app/js/jdev.min.js\"></script>
    ";
        } else {
            // line 101
            echo "      ";
            // line 102
            echo "      <script src=\"views/app/template/jquery/dist/jquery.min.js\"></script>
    ";
        }
        // line 104
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
    <!-- Alertas -->
    <script src=\"views/app/template/jquery-confirm/jquery-confirm.min.js\"></script>

    <script src=\"views/app/js/portal/portal.js\"></script>

    ";
        // line 127
        echo "    ";
        $this->displayBlock('appScript', $context, $blocks);
        // line 130
        echo "
  </body>
</html>
";
    }

    // line 35
    public function block_appStylos($context, array $blocks = array())
    {
        // line 36
        echo "
    ";
    }

    // line 44
    public function block_appHeader($context, array $blocks = array())
    {
        // line 45
        echo "      <!-- :) -->
    ";
    }

    // line 52
    public function block_appHead($context, array $blocks = array())
    {
        // line 53
        echo "            ";
        $this->loadTemplate("portal/header", "portal/portal.twig", 53)->display($context);
        // line 54
        echo "        ";
    }

    // line 56
    public function block_appside($context, array $blocks = array())
    {
        // line 57
        echo "            ";
        $this->loadTemplate("portal/menu", "portal/portal.twig", 57)->display($context);
        // line 58
        echo "        ";
    }

    // line 62
    public function block_appBody($context, array $blocks = array())
    {
        // line 63
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
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name", array(), "array"), "html", null, true);
        echo "</strong>.</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            ";
    }

    // line 90
    public function block_appFooter($context, array $blocks = array())
    {
        // line 91
        echo "        ";
        $this->loadTemplate("portal/footer", "portal/portal.twig", 91)->display($context);
        // line 92
        echo "      ";
    }

    // line 127
    public function block_appScript($context, array $blocks = array())
    {
        // line 128
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
        return array (  248 => 128,  245 => 127,  241 => 92,  238 => 91,  235 => 90,  224 => 79,  206 => 63,  203 => 62,  199 => 58,  196 => 57,  193 => 56,  189 => 54,  186 => 53,  183 => 52,  178 => 45,  175 => 44,  170 => 36,  167 => 35,  160 => 130,  157 => 127,  133 => 104,  129 => 102,  127 => 101,  123 => 99,  121 => 98,  118 => 97,  115 => 95,  113 => 94,  110 => 93,  107 => 90,  102 => 86,  100 => 62,  97 => 61,  94 => 59,  92 => 56,  89 => 55,  87 => 52,  80 => 47,  77 => 44,  71 => 41,  67 => 38,  65 => 35,  32 => 6,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/portal.twig", "C:\\xampp\\htdocs\\proyectos\\login\\app\\templates\\portal\\portal.twig");
    }
}
