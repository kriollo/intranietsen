<?php

/* error/error_nopermitido.twig */
class __TwigTemplate_67f9a0674c90d2c33a4c07450295e225dbbc647d18246a450389c178768a2418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "error/error_nopermitido.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "portal/portal";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "    <section class=\"content-header\">
        <h1>
            ERROR 403
            <small>Acceso denegado!.</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      
    </section>
    <!-- /.content -->
";
    }

    public function getTemplateName()
    {
        return "error/error_nopermitido.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "error/error_nopermitido.twig", "C:\\xampp\\htdocs\\proyectos\\login\\app\\templates\\error\\error_nopermitido.twig");
    }
}
