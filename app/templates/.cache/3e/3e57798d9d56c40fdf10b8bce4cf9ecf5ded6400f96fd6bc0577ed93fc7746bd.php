<?php

/* portal/layout.twig */
class __TwigTemplate_b3632013809cf06233316bbac097a65a2544db76a031d90632c5f63c2e52120e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'appHeader' => array($this, 'block_appHeader'),
            'appHead' => array($this, 'block_appHead'),
            'appside' => array($this, 'block_appside'),
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
            'appFooter' => array($this, 'block_appFooter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html> 
<html lang=\"es\">
  <head>
    ";
        // line 5
        echo "    ";
        echo $this->env->getExtension('Ocrend\Kernel\Helpers\Functions')->base_assets();
        echo "
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    ";
        // line 11
        echo "    <!-- Bootstrap 3.3.7 -->
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
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
        
    <link href=\"views/app/img/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />
    ";
        // line 36
        echo "    <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "name", array()), "html", null, true);
        echo "</title>

    ";
        // line 39
        echo "    ";
        $this->displayBlock('appHeader', $context, $blocks);
        // line 42
        echo "    
  </head>
  <body class=\"hold-transition skin-blue sidebar-mini\">
    <div class=\"wrapper\">
        ";
        // line 46
        $this->displayBlock('appHead', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        $this->displayBlock('appside', $context, $blocks);
        // line 53
        echo "
        ";
        // line 55
        echo "         <div class=\"content-wrapper\">
            ";
        // line 56
        $this->displayBlock('appBody', $context, $blocks);
        // line 59
        echo "        </div>
    
    </div>
    ";
        // line 63
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "framework", array()), "debug", array())) {
            // line 64
            echo "      ";
            // line 65
            echo "      <script src=\"views/app/js/jdev.min.js\"></script>
    ";
        } else {
            // line 67
            echo "      ";
            // line 68
            echo "      <script src=\"views/app/template/jquery/dist/jquery.min.js\"></script>
    ";
        }
        // line 70
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
    
    ";
        // line 88
        $this->displayBlock('appScript', $context, $blocks);
        // line 91
        echo "    
    ";
        // line 93
        echo "    
    ";
        // line 95
        echo "    ";
        $this->displayBlock('appFooter', $context, $blocks);
        // line 98
        echo "  </body>
</html>
";
    }

    // line 39
    public function block_appHeader($context, array $blocks = array())
    {
        // line 40
        echo "      <!-- :) -->
    ";
    }

    // line 46
    public function block_appHead($context, array $blocks = array())
    {
        // line 47
        echo "            ";
        $this->loadTemplate("portal/header", "portal/layout.twig", 47)->display($context);
        // line 48
        echo "        ";
    }

    // line 50
    public function block_appside($context, array $blocks = array())
    {
        // line 51
        echo "            ";
        $this->loadTemplate("portal/menu", "portal/layout.twig", 51)->display($context);
        // line 52
        echo "        ";
    }

    // line 56
    public function block_appBody($context, array $blocks = array())
    {
        // line 57
        echo "              <!-- :) -->
            ";
    }

    // line 88
    public function block_appScript($context, array $blocks = array())
    {
        // line 89
        echo "        <script src=\"views/app/js/login/login.js\"></script>
    ";
    }

    // line 95
    public function block_appFooter($context, array $blocks = array())
    {
        // line 96
        echo "      ";
        $this->loadTemplate("portal/footer", "portal/layout.twig", 96)->display($context);
        // line 97
        echo "    ";
    }

    public function getTemplateName()
    {
        return "portal/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 97,  199 => 96,  196 => 95,  191 => 89,  188 => 88,  183 => 57,  180 => 56,  176 => 52,  173 => 51,  170 => 50,  166 => 48,  163 => 47,  160 => 46,  155 => 40,  152 => 39,  146 => 98,  143 => 95,  140 => 93,  137 => 91,  135 => 88,  115 => 70,  111 => 68,  109 => 67,  105 => 65,  103 => 64,  100 => 63,  95 => 59,  93 => 56,  90 => 55,  87 => 53,  85 => 50,  82 => 49,  80 => 46,  74 => 42,  71 => 39,  65 => 36,  39 => 11,  30 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "portal/layout.twig", "C:\\xampp\\htdocs\\proyectos\\login\\app\\templates\\portal\\layout.twig");
    }
}
