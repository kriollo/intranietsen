<?php

/* confirmacion/resultado/editar_resultado.twig */
class __TwigTemplate_79a56782c13e21fdd4ca26a441e029717b9f4e604d1ed46832a33c6d7d0b54f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/resultado/editar_resultado.twig", 1);
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
      Resultado
      <small>Editar</small>
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
        <a href=\"confirmacion/listar_resultado\">Listado de Resultado</a>
      </li>
      <li class=\"active\">Editar Resultado</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-sm-12\">
        <form id=\"editar_resultado_form\" action=\"\" method=\"POST\">
          <div class=\"box-body col-sm-4\"></div>
          <div class=\"box-body col-sm-4\">
            <div class=\"form-group\">
              <input class=\"form-control\" name=\"nombre\" id=\"nombre\" type=\"text\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["resultado_db"] ?? null), "nombre", array()), "html", null, true);
        echo "\" required=\"required\"/>
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
          </div>

        </div>
        <center>
          <div class=\"form-group\">
            <button type=\"button\" id=\"update_resultado\" class=\"btn btn-default\">Grabar</button>
            <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
          </div>
        </center>
        <input class=\"form-control\" name=\"id_resultado\" id=\"id_resultado\" type=\"hidden\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["resultado_db"] ?? null), "id_resultado", array()), "html", null, true);
        echo "\" required=\"required\"/>
      </form>
    </div>
  </div>
</section>
<!-- /.content -->

";
    }

    // line 64
    public function block_appScript($context, array $blocks = array())
    {
        // line 65
        echo "<script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/resultado/editar_resultado.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 65,  107 => 64,  95 => 56,  69 => 33,  38 => 4,  35 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/resultado/editar_resultado.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\resultado\\editar_resultado.twig");
    }
}
