<?php

/* rrhh/areas/modificararea.twig */
class __TwigTemplate_ae3fb215cacc00006b5b01dc52639896121e32d8e43a737e1fcbaf29a7fb61cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"modificararea\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Modificar Area</h4>
      </div>
      <div class=\"modal-body\">
        <form id=\"formmodificaarea\" name=\"formmodificaarea\" class=\"form-signin\" method=\"POST\">
            <input type=\"text\"  id=\"modarea\" name=\"modarea\" class=\"form-control\">
              <input type=\"hidden\"  id=\"modareaid\" name=\"modareaid\" class=\"form-control\">

        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" id=\"btnmodarea\" name=\"btnmodarea\" class=\"btn btn-success\">Modificar</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "rrhh/areas/modificararea.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/areas/modificararea.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\areas\\modificararea.twig");
    }
}
