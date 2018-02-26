<?php

/* confirmacion/bloque/editar_bloque.twig */
class __TwigTemplate_93401b5ad50c13280889c3f11ad37fc0ae563b9b9ca9a6f68d9cbef48072a053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/bloque/editar_bloque.twig", 1);
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
            <small>Editar Bloques</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"confirmacion/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"confirmacion/listar_bloque\">Listado de Bloques</a></li>
        <li class=\"active\">Editar Bloque</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"editar_bloque_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <input type='hidden' name='id_bloque' id='id_bloque' value='";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_bloque"] ?? null), "id_bloque", array()), "html", null, true);
        echo "' />
                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"bloque\" id=\"bloque\" type=\"text\" placeholder=\"Ingrese el bloque horario\" value='";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_bloque"] ?? null), "bloque", array()), "html", null, true);
        echo "' required/>
                    <br>
                    <input class=\"form-control\" name=\"limit\" id=\"limit\" type=\"number\" placeholder=\"Ingrese el requerido de ordenes\" value='";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_bloque"] ?? null), "limite_q_programacion", array()), "html", null, true);
        echo "' required/>
                </div>
                <div class=\"form-group\">Hora Desde - Hasta
                  <input class=\"form-control\" name=\"desde\" id=\"desde\" type=\"time\" value='";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_bloque"] ?? null), "desde", array()), "html", null, true);
        echo "' />
                  <input class=\"form-control\" name=\"hasta\" id=\"hasta\" type=\"time\" value='";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_bloque"] ?? null), "hasta", array()), "html", null, true);
        echo "' />
                </div>
                <div class=\"panel-footer text-center\">
                  <button type=\"button\" id=\"update_bloque\" class=\"btn btn-default\">Grabar</button>
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

    // line 48
    public function block_appScript($context, array $blocks = array())
    {
        // line 49
        echo "    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/bloque/editar_bloque.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 49,  99 => 48,  81 => 34,  77 => 33,  71 => 30,  66 => 28,  61 => 26,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/bloque/editar_bloque.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\bloque\\editar_bloque.twig");
    }
}
