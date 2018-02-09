<?php

/* despacho/estado/nuevo_estado.twig */
class __TwigTemplate_04580af1ef847cd34eee325ca889ae3262af135825fc04c8d96667817eca2cb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "despacho/estado/nuevo_estado.twig", 1);
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
            Despacho
            <small>Agregar Estado</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"despacho/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"despacho/listar_estados\">Listado de Estados</a></li>
        <li class=\"active\">Agregar Estado</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"register_estado_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"ubicacion\" id=\"ubicacion\" type=\"text\" placeholder=\"Ubicacion\" required/>
                  <br>
                  <input class=\"form-control\" name=\"descripcion\" id=\"descripcion\" type=\"text\" placeholder=\"Descripcion\" required/>
                  <br>
                  <select class=\"form-control\" name=\"grupo\" id=\"grupo\">
                      <option value=\"Finalizada\">Finalizada</option>
                      <option value=\"Pendiente\">Pendiente</option>
                      <option value=\"En Proceso\">En Proceso</option>
                      <option value=\"Anulado\">Anulado</option>
                  </select>
                  <br>
                </div>
                <div class=\"form-group\">
                  <button type=\"button\" id=\"register_estado\" class=\"btn btn-default\">Grabar</button>
                  <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

";
    }

    // line 52
    public function block_appScript($context, array $blocks = array())
    {
        // line 53
        echo "    <script src=\"views/app/js/despacho/despacho.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "despacho/estado/nuevo_estado.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 53,  88 => 52,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "despacho/estado/nuevo_estado.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\estado\\nuevo_estado.twig");
    }
}
