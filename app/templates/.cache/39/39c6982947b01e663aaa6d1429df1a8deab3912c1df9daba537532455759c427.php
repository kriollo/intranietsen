<?php

/* confirmacion/tipoorden/nuevo_tipoorden.twig */
class __TwigTemplate_a04f3092f016b4ba7632b3e8dea10a6fa11a3855ed3e605e13faf5f233b5d816 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/tipoorden/nuevo_tipoorden.twig", 1);
        $this->blocks = array(
            'appStylos' => array($this, 'block_appStylos'),
            'appBody' => array($this, 'block_appBody'),
            'appScript' => array($this, 'block_appScript'),
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
    public function block_appStylos($context, array $blocks = array())
    {
    }

    // line 4
    public function block_appBody($context, array $blocks = array())
    {
        // line 5
        echo "    <section class=\"content-header\">
        <h1>
            Confirmación
            <small>Agregar Tipo de Orden</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"confirmacion/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"confirmacion/listar_tipoorden\">Listado de Tipo de Orden</a></li>
        <li class=\"active\">Nuevo Tipo de Orden</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <form id=\"register_tipoorden_form\"  action=\"\" method=\"POST\">
                        <div class=\"box-body col-sm-4\"></div>
                        <div class=\"box-body col-sm-4\">
                            <div class=\"form-group\">
                                <input class=\"form-control\" name=\"nombre\" id=\"nombre\" type=\"text\" placeholder=\"Descripción Tipo de Orden\" required/>
                            </div>
                            <div class=\"form-group\">Prioridad (1 = alta - 5 = Baja)
                                <input class=\"form-control\" name=\"prioridad\" id=\"prioridad\" type=\"number\" min=\"1\" max=\"5\" value='1'/>
                            </div>
                            <center>
                                <div class=\"form-group\">
                                    <button type=\"button\" id=\"register_tipoorden\" class=\"btn btn-default\">Grabar</button>
                                    <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
                                </div>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

";
    }

    // line 47
    public function block_appScript($context, array $blocks = array())
    {
        // line 48
        echo "    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/tipoorden/nuevo_tipoorden.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 48,  83 => 47,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/tipoorden/nuevo_tipoorden.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\tipoorden\\nuevo_tipoorden.twig");
    }
}
