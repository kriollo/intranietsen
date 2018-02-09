<?php

/* despacho/estado/editar_estado.twig */
class __TwigTemplate_e9d08f70d79ddb783fab37a0bd1f9917db63ac013c8d04e12f8dea64335c252d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "despacho/estado/editar_estado.twig", 1);
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
            <small>Editar Estado</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"despacho/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"despacho/listar_estados\">Listado de Estados</a></li>
        <li class=\"active\">Editar Estado</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"editar_estado_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <input type='hidden' name='id_estado' id='id_estado' value='";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_estado"] ?? null), "id_estado", array()), "html", null, true);
        echo "' />
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"ubicacion\" id=\"ubicacion\" type=\"text\"  value='";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_estado"] ?? null), "ubicacion", array()), "html", null, true);
        echo "' required/>
                  <br>
                  <input class=\"form-control\" name=\"descripcion\" id=\"descripcion\" type=\"text\" value='";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_estado"] ?? null), "descripcion", array()), "html", null, true);
        echo "' required/>
                  <br>
                  <select class=\"form-control\" name=\"grupo\" id=\"grupo\">
                      <option value=\"Finalizada\">Finalizada</option>
                      <option value=\"Pendiente\">Pendiente</option>
                      <option value=\"En Proceso\">En Proceso</option>
                      <option value=\"Anulado\">Anulado</option>
                  </select>
                  <br>
                </div>
                <div class=\"panel-footer text-center\">
                  <button type=\"button\" id=\"update_estado\" class=\"btn btn-default\">Grabar</button>
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
        return "despacho/estado/editar_estado.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 53,  97 => 52,  71 => 30,  66 => 28,  61 => 26,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "despacho/estado/editar_estado.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\estado\\editar_estado.twig");
    }
}