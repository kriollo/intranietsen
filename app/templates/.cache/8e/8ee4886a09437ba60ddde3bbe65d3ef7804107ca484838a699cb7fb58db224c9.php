<?php

/* rrhh/cargos/modificarcargo.twig */
class __TwigTemplate_fa492cd22ebf8b16f6027f5d501771ab1431d52c4bcd18d08f25f83997e92c3c extends Twig_Template
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
        echo "<div id=\"modificarcargo\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Modificar Cargo</h4>
      </div>
      <div class=\"modal-body\">
        <form id=\"formmodificacargo\" name=\"formmodificacargo\" class=\"form-signin\" method=\"POST\">
            <input type=\"text\"  id=\"modcargo\" name=\"modcargo\" class=\"form-control\">
              <input type=\"hidden\"  id=\"modid\" name=\"modid\" class=\"form-control\">

        </form>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
        <button type=\"button\" id=\"btnmodcargo\" name=\"btnmodcargo\" class=\"btn btn-success\">Modificar</button>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "rrhh/cargos/modificarcargo.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/cargos/modificarcargo.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\cargos\\modificarcargo.twig");
    }
}
