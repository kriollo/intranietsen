<?php

/* rrhh/horasextra/mostrar_hora_extra.twig */
class __TwigTemplate_2bc28d4f5231d8cd70cd7f053a51bb7105d7ac980881404e89bcf6710753e4ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'appScript' => array($this, 'block_appScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
                          <div id=\"modal_responder_solicitud\" class=\"modal fade\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                              <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                  <h4 class=\"modal-title\">Responder solicitud de horas extra</h4>
                                </div>
                                <div class=\"modal-body\">
                                  <form name=\"form_respuesta\" id=\"form_respuesta\" action=\"\" method=\"POST\">
                                      <center>
                                        <div class=\"form-group\">
                                            <label for=\"motivo\">Motivo de respuesta:</label>
                                            <input type=\"text\" class=\"form-control\" name=\"motivo_respuesta\" id=\"motivo_respuesta\" >
                                            <input type=\"hidden\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["id"] ?? null), "id", array()), "html", null, true);
        echo "\" name=\"id_respuesta\" id=\"id_respuesta\" >
                                        </div>
                                          <button class=\"btn btn-success\" type=\"button\" id=\"btn_aprobar\"><span>Aprobar</span></button>
                                          <button class=\"btn btn-danger\" type=\"button\" id=\"btn_rechazar\"><span>Rechazar</span></button>
                                      </center>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

";
        // line 26
        $this->displayBlock('appScript', $context, $blocks);
    }

    public function block_appScript($context, array $blocks = array())
    {
        // line 27
        echo "    <script src=\"views/app/js/horasextra/horasextra.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/mostrar_hora_extra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 27,  50 => 26,  36 => 15,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/mostrar_hora_extra.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\horasextra\\mostrar_hora_extra.twig");
    }
}
