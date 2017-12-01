<?php

/* rrhh/areas/nuevaarea.twig */
class __TwigTemplate_310741bc8ee4c57c42383eadee67123d10016c9b92a6e96fb2645f91ad903c1c extends Twig_Template
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
        echo "<div id=\"nuevaarea\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Ingresar Nueva Area</h4>
      </div>
      <div class=\"modal-body\">
        <form id=\"formarea\" name=\"formarea\" class=\"form-signin\" method=\"POST\">
            <input type=\"text\"  id=\"nuvarea\" name=\"nuvarea\" class=\"form-control\" placeholder=\"Ingresar Area\">
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" id=\"btnnuvarea\" name=\"btnnuvarea\" class=\"btn btn-success\">Agregar</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "rrhh/areas/nuevaarea.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/areas/nuevaarea.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\areas\\nuevaarea.twig");
    }
}
