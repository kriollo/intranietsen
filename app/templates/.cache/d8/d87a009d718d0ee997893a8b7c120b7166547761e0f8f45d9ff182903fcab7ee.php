<?php

/* overall/layout.twig */
class __TwigTemplate_ea5a5ab5f0558dc0a252c16b6655c65fbe96a158027eb54d700beebac56d7a79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'appHeader' => array($this, 'block_appHeader'),
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

    ";
        // line 11
        echo "    <link href=\"views/app/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" />
    <link href=\"views/app/css/framework.min.css\" rel=\"stylesheet\" />
    <link href=\"views/app/css/login.css\" rel=\"stylesheet\" />
    <link href=\"views/app/images/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />

    ";
        // line 17
        echo "    <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "name", array()), "html", null, true);
        echo "</title>

    ";
        // line 20
        echo "    ";
        $this->displayBlock('appHeader', $context, $blocks);
        // line 23
        echo "    
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>

    ";
        // line 32
        echo "    ";
        $this->displayBlock('appBody', $context, $blocks);
        // line 35
        echo "
    ";
        // line 37
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "framework", array()), "debug", array())) {
            // line 38
            echo "      ";
            // line 39
            echo "      <script src=\"views/app/js/jdev.min.js\"></script>
    ";
        } else {
            // line 41
            echo "      ";
            // line 42
            echo "      <script src=\"views/app/vendor/jquery/jquery.min.js\"></script>
    ";
        }
        // line 44
        echo "
    ";
        // line 46
        echo "    <script src=\"views/app/vendor/bootstrap/js/bootstrap.min.js\"></script>
    ";
        // line 47
        $this->displayBlock('appScript', $context, $blocks);
        // line 50
        echo "   
   
    ";
        // line 53
        echo "    ";
        $this->displayBlock('appFooter', $context, $blocks);
        // line 56
        echo "  </body>
</html>
";
    }

    // line 20
    public function block_appHeader($context, array $blocks = array())
    {
        // line 21
        echo "      <!-- :) -->
    ";
    }

    // line 32
    public function block_appBody($context, array $blocks = array())
    {
        // line 33
        echo "      <!-- :) -->
    ";
    }

    // line 47
    public function block_appScript($context, array $blocks = array())
    {
        // line 48
        echo "      <!-- :) -->
    ";
    }

    // line 53
    public function block_appFooter($context, array $blocks = array())
    {
        // line 54
        echo "      <!-- :) -->
    ";
    }

    public function getTemplateName()
    {
        return "overall/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 54,  129 => 53,  124 => 48,  121 => 47,  116 => 33,  113 => 32,  108 => 21,  105 => 20,  99 => 56,  96 => 53,  92 => 50,  90 => 47,  87 => 46,  84 => 44,  80 => 42,  78 => 41,  74 => 39,  72 => 38,  69 => 37,  66 => 35,  63 => 32,  53 => 23,  50 => 20,  44 => 17,  37 => 11,  28 => 5,  23 => 1,);
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

    {# Estilos #}
    <link href=\"views/app/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" />
    <link href=\"views/app/css/framework.min.css\" rel=\"stylesheet\" />
    <link href=\"views/app/css/login.css\" rel=\"stylesheet\" />
    <link href=\"views/app/images/favicon.ico\" rel=\"shortcut icon\" type=\"image/x-icon\" />

    {# Título #}
    <title>{{ config.site.name }}</title>

    {# Extras en el header #}
    {% block appHeader %}
      <!-- :) -->
    {% endblock %}
    
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>

    {# Contenido real #}
    {% block appBody %}
      <!-- :) -->
    {% endblock %}

    {# Carga de jQuery #}
    {% if config.framework.debug %}
      {# jQuery para ver errores de ajax vía consola, no eliminar #}
      <script src=\"views/app/js/jdev.min.js\"></script>
    {% else %}
      {# jQuery para su plantilla, este puede ser modificado a voluntad #}
      <script src=\"views/app/vendor/jquery/jquery.min.js\"></script>
    {% endif %}

    {# Scripts globales #}
    <script src=\"views/app/vendor/bootstrap/js/bootstrap.min.js\"></script>
    {% block appScript %}
      <!-- :) -->
    {% endblock %}
   
   
    {# Footer #}
    {% block appFooter %}
      <!-- :) -->
    {% endblock %}
  </body>
</html>
", "overall/layout.twig", "C:\\xampp\\htdocs\\proyectos\\login\\app\\templates\\overall\\layout.twig");
    }
}
