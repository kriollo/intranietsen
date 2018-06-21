<?php

/* sinmoradores/seguimiento/sinmoradores.twig */
class __TwigTemplate_700bb78e6a24de14df9813fdad6cac8e78e4c51b23c1b5e4359cf264edce2799 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "sinmoradores/seguimiento/sinmoradores.twig", 1);
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

    public function block_appBody($context, array $blocks = array())
    {
        // line 2
        echo "<section class=\"content-header\">
    <h1>
        Sin Moradores
        <small>Principal</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li>
            <a href=\"#\">
                <i class=\"fa fa-home\"></i> Home</a>
        </li>
        <li class=\"active\">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"col-lg-3\">
                <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                    <div class=\"inner\">
                        <h2>";
        // line 23
        echo twig_escape_filter($this->env, ($context["numero_ot"] ?? null), "html", null, true);
        echo "</h2>
                        <p>Ordenes Registradas Hoy</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"fa fa-headphones\"></i>
                    </div>
                    <!-- <a href=\"administracion/usuario\" class=\"small-box-footer\" title=\"Ver Ordenes\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a> -->
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div style=\"background-color:#00a65a;color:#fff\" class=\"small-box\">
                    <div class=\"inner\">
                        <h3>Listar Todas</h3>
                        <p>OT Sin Moradores</p>
                    </div>
                    <a href=\"sinmoradores/listar_all\" class=\"small-box-footer\" title=\"Ver todas\" data-toggle=\"tooltip\">
                        <i class=\"fa fa-plus\"></i>
                    </a>
                    <div class=\"icon\">
                        <i class=\"fa fa-eye\"></i>
                    </div>
                    <!-- <a href=\"administracion/usuario\" class=\"small-box-footer\" title=\"Ver Ordenes\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a> -->
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div style=\"background-color:#f39c12;color:#fff\" class=\"small-box\">
                    <div class=\"inner\">
                        <h3>Agregar</h3>
                        <p>Nuevo Orden</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"fa fa-plus\"></i>
                    </div>
                    <a href=\"sinmoradores/nuevaorden\" class=\"small-box-footer\" title=\"Agregar\" data-toggle=\"tooltip\">
                        <i class=\"fa fa-plus\"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
            <div class=\"col-lg-3\">
                <div style=\"background-color:#00a65a;color:#fff\" class=\"small-box\">
                    <div class=\"inner\">
                        <h3>Listar</h3>
                        <p>Ordenes</p>
                    </div>
                    <div class=\"icon\">
                        <i class=\"fa fa-eye\"></i>
                    </div>
                    <a href=\"sinmoradores/listar\" class=\"small-box-footer\" title=\"Agregar\" data-toggle=\"tooltip\">
                        <i class=\"fa fa-eye\"></i>
                    </a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- ./col -->
        <!-- Resumen TOP 10 -->
        <div class=\"col-lg-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                </div>
            </div>
        </div>

    </div>
</section>
<!-- /.content -->

";
    }

    public function getTemplateName()
    {
        return "sinmoradores/seguimiento/sinmoradores.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 23,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sinmoradores/seguimiento/sinmoradores.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\sinmoradores\\seguimiento\\sinmoradores.twig");
    }
}
