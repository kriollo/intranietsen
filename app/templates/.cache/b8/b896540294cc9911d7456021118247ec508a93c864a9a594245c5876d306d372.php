<?php

/* confirmacion/tipoorden/editar_tipoorden.twig */
class __TwigTemplate_5f21ea494ec8c417a9af05691e1aee3478e07f64d5921e6de846baddfc3161a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/tipoorden/editar_tipoorden.twig", 1);
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

    // line 3
    public function block_appBody($context, array $blocks = array())
    {
        // line 4
        echo "  <section class=\"content-header\">
    <h1>
      Confirmación
      <small>Editar Tipo de Orden</small>
    </h1>
    <ol class=\"breadcrumb\">
      <li>
        <a href=\"#\">
          <i class=\"fa fa-home\"></i>
          Home</a>
      </li>
      <li>
        <a href=\"confirmacion/mantenedores_crud_masters\">Mantenedores</a>
      </li>
      <li>
        <a href=\"confirmacion/listar_tipoorden\">Listado de Tipo de Orden</a>
      </li>
      <li class=\"active\">Editar Tipo de Orden</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class=\"content\">
      <div class=\"row\">
          <div class=\"col-md-12\">
              <div class=\"box box-primary\">
                  <form id=\"editar_tipoorden_form\"  action=\"\" method=\"POST\">
                      <input class=\"form-control\" name=\"id_tipoorden\" id=\"id_tipoorden\" type=\"hidden\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["resultado_db"] ?? null), "id_tipoorden", array()), "html", null, true);
        echo "\"/>
                      <div class=\"box-body col-sm-4\"></div>
                      <div class=\"box-body col-sm-4\">
                          <div class=\"form-group\">
                              <input class=\"form-control\" name=\"nombre\" id=\"nombre\" type=\"text\" placeholder=\"Descripción Tipo de Orden\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["resultado_db"] ?? null), "descripcion", array()), "html", null, true);
        echo "\"/>
                          </div>
                          <div class=\"form-group\">Prioridad (1 = alta - 5 = Baja)
                              <input class=\"form-control\" name=\"prioridad\" id=\"prioridad\" type=\"number\" min=\"1\" max=\"5\" value='";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["resultado_db"] ?? null), "prioridad", array()), "html", null, true);
        echo "'/>
                          </div>
                          <center>
                              <div class=\"form-group\">
                                  <button type=\"button\" id=\"update_tipoorden\" class=\"btn btn-default\">Grabar</button>
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

    // line 55
    public function block_appScript($context, array $blocks = array())
    {
        // line 56
        echo "<script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/tipoorden/editar_tipoorden.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 56,  101 => 55,  80 => 38,  74 => 35,  67 => 31,  38 => 4,  35 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/tipoorden/editar_tipoorden.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\tipoorden\\editar_tipoorden.twig");
    }
}
