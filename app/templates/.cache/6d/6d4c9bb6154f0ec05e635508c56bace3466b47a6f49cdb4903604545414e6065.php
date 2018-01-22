<?php

/* confirmacion/motivocall/editar_motivocall.twig */
class __TwigTemplate_cc8e306150ceb807ffe2661d5ba65aeaac64c5fe9c75f172580690503e75f968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/motivocall/editar_motivocall.twig", 1);
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
            <small>Editar Motivo de Llamado</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"confirmacion/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"confirmacion/listar_motivocall\">Listado de Motivos de llamado</a></li>
        <li class=\"active\">Editar Motivo de llamado</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"editar_motivocall_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <input type='hidden' name='id_motivo' id='id_motivo' value='";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_motivocall"] ?? null), "id_motivo", array()), "html", null, true);
        echo "' />
                <div class=\"form-group\">
                    <input class=\"form-control\" name=\"motivo\" id=\"motivo\" type=\"text\" placeholder=\"Motivo de la llamada\" value='";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_motivocall"] ?? null), "motivo", array()), "html", null, true);
        echo "' required/>
                </div>
                <div class=\"panel-footer text-center\">
                  <button type=\"button\" id=\"update_motivocall\" class=\"btn btn-default\">Grabar</button>
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
        return "confirmacion/motivocall/editar_motivocall.twig";
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
        return new Twig_Source("", "confirmacion/motivocall/editar_motivocall.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\motivocall\\editar_motivocall.twig");
    }
}
