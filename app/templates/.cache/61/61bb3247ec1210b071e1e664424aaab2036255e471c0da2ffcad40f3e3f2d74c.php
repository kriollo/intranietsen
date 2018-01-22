<?php

/* confirmacion/comuna/editar_comuna.twig */
class __TwigTemplate_4c31c90f2573ebf722bcf054be5d45d491de87953a0798df019772b84e3f1cd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/comuna/editar_comuna.twig", 1);
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
            <small>Editar Comuna</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"confirmacion/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"confirmacion/listar_comunas\">Listado de Comunas</a></li>
        <li class=\"active\">Editar Comuna</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"editar_comuna_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <input type='hidden' name='id_comuna' id='id_comuna' value='";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_comuna"] ?? null), "id_comuna", array()), "html", null, true);
        echo "' />
                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"comuna\" id=\"comuna\" type=\"text\" placeholder=\"Nombre de la comuna\" value='";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_comuna"] ?? null), "nombre", array()), "html", null, true);
        echo "' required/>
                </div>
                <div class=\"panel-footer text-center\">
                  <button type=\"button\" id=\"update_comuna\" class=\"btn btn-default\">Grabar</button>
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
        return "confirmacion/comuna/editar_comuna.twig";
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
        return new Twig_Source("", "confirmacion/comuna/editar_comuna.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\comuna\\editar_comuna.twig");
    }
}
