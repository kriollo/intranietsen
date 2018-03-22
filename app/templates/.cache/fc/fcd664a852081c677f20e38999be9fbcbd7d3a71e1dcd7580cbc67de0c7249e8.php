<?php

/* despacho/tecnicos/nuevo_tecnico.twig */
class __TwigTemplate_7e6590eafbe3f4e8d0159beb50af12ff83a48d70305ff1d47685cd021d7da96e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "despacho/tecnicos/nuevo_tecnico.twig", 1);
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
            <small>Agregar Tecnico</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"despacho/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"despacho/listar_tecnicos\">Listado de Tecnicos</a></li>
        <li class=\"active\">Agregar Tecnico</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"register_tecnico_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"rut\" id=\"rut\" type=\"text\" placeholder=\"RUT xxxxxxxx s/digito (Requerido)\" required/>
                  <input class=\"form-control\" name=\"nombres\" id=\"nombres\" type=\"text\" placeholder=\"Nombre Completo (Requerido)\" required/>
                  <input class=\"form-control\" name=\"codigo\" id=\"codigo\" type=\"text\" placeholder=\"Codigo tecnico\" required/>
                  <input class=\"form-control\" name=\"telefono\" id=\"telefono\" type=\"text\" placeholder=\"telefono tecnico\" required/>
                </div>
                <div class=\"form-group\">
                  <button type=\"button\" id=\"register_tecnico\" class=\"btn btn-default\">Grabar</button>
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

    // line 45
    public function block_appScript($context, array $blocks = array())
    {
        // line 46
        echo "    <script src=\"views/app/js/despacho/tecnicos.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "despacho/tecnicos/nuevo_tecnico.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 46,  81 => 45,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "despacho/tecnicos/nuevo_tecnico.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\tecnicos\\nuevo_tecnico.twig");
    }
}
