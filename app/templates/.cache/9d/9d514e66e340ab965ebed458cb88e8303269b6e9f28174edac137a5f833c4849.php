<?php

/* rrhh/cargos/nuevocargo.twig */
class __TwigTemplate_adc664d108acd14141c1f072d922463ffd0401a9481439febc993a4dc5f6a476 extends Twig_Template
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
        echo "<div id=\"nuevocargo\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Ingresar Nuevo Cargo</h4>
      </div>
      <div class=\"modal-body\">
        <form id=\"formcargo\" name=\"formcargo\" class=\"form-signin\" method=\"POST\">
            <input type=\"text\"  id=\"nuvcargo\" name=\"nuvcargo\" class=\"form-control\" placeholder=\"Ingresar Cargo\">
        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" id=\"btnnuvcargo\" name=\"btnnuvcargo\" class=\"btn btn-success\">Agregar</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "rrhh/cargos/nuevocargo.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/cargos/nuevocargo.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\cargos\\nuevocargo.twig");
    }
}
