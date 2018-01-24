<?php

/* confirmacion/resultado/nuevo_resultado.twig */
class __TwigTemplate_28fb19f9e1977fb43bf0b2df0358f83ad63ebd5aa5a99d0c4615e628a6000bf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/resultado/nuevo_resultado.twig", 1);
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
            <small>Agregar Resultado</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"confirmacion/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"confirmacion/listar_resultado\">Listado de Resultados</a></li>
        <li class=\"active\">Nuevo Resultado</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <form id=\"register_resultado_form\"  action=\"\" method=\"POST\">
                        <div class=\"box-body col-sm-4\"></div>
                        <div class=\"box-body col-sm-4\">
                            <div class=\"form-group\">
                                <input class=\"form-control\" name=\"nombre\" id=\"nombre\" type=\"text\" placeholder=\"Nombre del Resultado\" required/>
                            </div>
                            <div class=\"form-group\">
                                <select name=\"cumplimiento\" id=\"cumplimiento\" class=\"form-control\">
                                <option value=\"1\">Cumple</option>
                                <option value=\"0\">No Cumple</option>
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <select name=\"grupo\" id=\"grupo\" class=\"form-control\">
                                    <option value=\"1\">Confirmado</option>
                                    <option value=\"0\">No Confirmado</option>
                                </select>
                            </div>

                            <center>
                                <div class=\"form-group\">
                                  <button type=\"button\" id=\"register_resultado\" class=\"btn btn-default\">Grabar</button>
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

    // line 57
    public function block_appScript($context, array $blocks = array())
    {
        // line 58
        echo "    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/resultado/nuevo_resultado.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 58,  93 => 57,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/resultado/nuevo_resultado.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\resultado\\nuevo_resultado.twig");
    }
}
