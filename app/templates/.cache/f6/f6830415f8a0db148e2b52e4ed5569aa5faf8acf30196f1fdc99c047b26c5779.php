<?php

/* portal/portal.twig */
class __TwigTemplate_9039515a59b0fd69f3d5f3a76563452f65511da3f848cb02e81ff0be61a08d23 extends Twig_Template
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
  <body class=\"hold-transition skin-blue sidebar-mini sidebar-collapse\">
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
        // line 73
        echo "        </div>
    
    </div>
    ";
        // line 77
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "framework", array()), "debug", array())) {
            // line 78
            echo "      ";
            // line 79
            echo "      <script src=\"views/app/js/jdev.min.js\"></script>
    ";
        } else {
            // line 81
            echo "      ";
            // line 82
            echo "      <script src=\"views/app/template/jquery/dist/jquery.min.js\"></script>
    ";
        }
        // line 84
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
        // line 102
        $this->displayBlock('appScript', $context, $blocks);
        // line 105
        echo "    
    ";
        // line 107
        echo "    
    ";
        // line 109
        echo "    ";
        $this->displayBlock('appFooter', $context, $blocks);
        // line 112
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
        $this->loadTemplate("portal/header", "portal/portal.twig", 47)->display($context);
        // line 48
        echo "        ";
    }

    // line 50
    public function block_appside($context, array $blocks = array())
    {
        // line 51
        echo "            ";
        $this->loadTemplate("portal/menu", "portal/portal.twig", 51)->display($context);
        // line 52
        echo "        ";
    }

    // line 56
    public function block_appBody($context, array $blocks = array())
    {
        // line 57
        echo "            <section class=\"content-header\">
                <h1>
                    ESCRITORIO
                    <small>Control panel</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                    <li class=\"active\">Dashboard</li>
                </ol>
                
                </section>
                <!-- Main content -->
                <section class=\"content\">
                </section>
            <!-- /.content -->
            ";
    }

    // line 102
    public function block_appScript($context, array $blocks = array())
    {
        // line 103
        echo "        <script src=\"views/app/js/login/login.js\"></script>
    ";
    }

    // line 109
    public function block_appFooter($context, array $blocks = array())
    {
        // line 110
        echo "      ";
        $this->loadTemplate("portal/footer", "portal/portal.twig", 110)->display($context);
        // line 111
        echo "    ";
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
        return array (  216 => 111,  213 => 110,  210 => 109,  205 => 103,  202 => 102,  183 => 57,  180 => 56,  176 => 52,  173 => 51,  170 => 50,  166 => 48,  163 => 47,  160 => 46,  155 => 40,  152 => 39,  146 => 112,  143 => 109,  140 => 107,  137 => 105,  135 => 102,  115 => 84,  111 => 82,  109 => 81,  105 => 79,  103 => 78,  100 => 77,  95 => 73,  93 => 56,  90 => 55,  87 => 53,  85 => 50,  82 => 49,  80 => 46,  74 => 42,  71 => 39,  65 => 36,  39 => 11,  30 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html> 
<html lang=\"es\">
  <head>
    {# Formato #}
    {{ base_assets()|raw }}
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    {# Estilos #}
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
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">
        
    <link href=\"views/app/img/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />
    {# Título #}
    <title>{{ config.site.name }}</title>

    {# Extras en el header #}
    {% block appHeader %}
      <!-- :) -->
    {% endblock %}
    
  </head>
  <body class=\"hold-transition skin-blue sidebar-mini sidebar-collapse\">
    <div class=\"wrapper\">
        {% block appHead %}
            {% include 'portal/header' %}
        {% endblock %}

        {% block appside %}
            {% include 'portal/menu' %}
        {% endblock %}

        {# Contenido real #}
         <div class=\"content-wrapper\">
            {% block appBody %}
            <section class=\"content-header\">
                <h1>
                    ESCRITORIO
                    <small>Control panel</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                    <li class=\"active\">Dashboard</li>
                </ol>
                
                </section>
                <!-- Main content -->
                <section class=\"content\">
                </section>
            <!-- /.content -->
            {% endblock %}
        </div>
    
    </div>
    {# Carga de jQuery #}
    {% if config.framework.debug %}
      {# jQuery para ver errores de ajax vía consola, no eliminar #}
      <script src=\"views/app/js/jdev.min.js\"></script>
    {% else %}
      {# jQuery para su plantilla, este puede ser modificado a voluntad #}
      <script src=\"views/app/template/jquery/dist/jquery.min.js\"></script>
    {% endif %}
     
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
    
    {% block appScript %}
        <script src=\"views/app/js/login/login.js\"></script>
    {% endblock %}
    
    {# Scripts globales #}
    
    {# Footer #}
    {% block appFooter %}
      {% include 'portal/footer' %}
    {% endblock %}
  </body>
</html>
", "portal/portal.twig", "C:\\xampp\\htdocs\\proyectos\\login\\app\\templates\\portal\\portal.twig");
    }
}
