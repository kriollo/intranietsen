<?php

/* confirmacion/actividad/editar_actividad.twig */
class __TwigTemplate_ae91cd8765794bcebb7ab295590963f79cf44207a32b53fa4136b2e607582d2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/actividad/editar_actividad.twig", 1);
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
            <small>Edita Actividad</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"confirmacion/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"confirmacion/listar_actividades\">Listado de Actividades</a></li>
        <li class=\"active\">Editar Actividad</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"editar_actividad_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <input type='hidden' name='id_actividad' id='id_actividad' value='";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_actividad"] ?? null), "id_actividad", array()), "html", null, true);
        echo "' />
                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"actividad\" id=\"actividad\" type=\"text\" placeholder=\"Nombre de la actividad\" value='";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_actividad"] ?? null), "actividad", array()), "html", null, true);
        echo "' required/>
                </div>
                <div class=\"panel-footer text-center\">
                  <button type=\"button\" id=\"update_actividad\" class=\"btn btn-default\">Grabar</button>
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

    // line 42
    public function block_appScript($context, array $blocks = array())
    {
        // line 43
        echo "    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/actividad/editar_actividad.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 43,  84 => 42,  66 => 28,  61 => 26,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/actividad/editar_actividad.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\actividad\\editar_actividad.twig");
    }
}
