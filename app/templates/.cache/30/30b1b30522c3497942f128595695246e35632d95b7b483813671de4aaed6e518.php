<?php

/* rrhh/horasextra/pedir_hora_extra.twig */
class __TwigTemplate_3af5b79f137da5f5aec3cca430ebba04275cc70139587b968abdf52c27c8fa12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/horasextra/pedir_hora_extra.twig", 1);
        $this->blocks = array(
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
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "<section class=\"content-header\">
    <h4>
      <i class=\"fa fa-user\"></i> SOLICITAR HORAS EXTRA
    </h4>
    <ol class=\"breadcrumb\">
      <li><a href=\"portal\"><i class=\"fa fa-home\"></i> Home </a></li>
      <li><a href=\"rrhh/horasextra\"> Horas Extra </a></li>
      <li class=\"active\"> Solicitar Hora Extra </li>
    </ol>
</section>
    <section class=\"content-header\">
      <div class=\"tab-pane active\" id=\"tab_1-1\">
          <b>Ingrese Datos para formar la peticion</b>
          <div id=\"bloque_registro\"></div>
          <div class=\"box box-info\">
              <div class=\"container\">
                  <div class=\"row\">
                      <div class=\"col-md-2\"></div>
                      <div class=\"col-md-8\" id=\"main\">
                        <br>
                          <form name=\"form_horax\" id=\"form_horax\" action=\"\" method=\"POST\">
                                  <input type=\"hidden\" class=\"form-control\" name=\"rut\" id=\"rut\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "rut_personal", array(), "array")), "html", null, true);
        echo "\">
                                    <div class=\"form-group\">
                                      <label>RUT:</label>
                                  <input type=\"text\" class=\"form-control\" disabled value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "rut_personal", array(), "array")), "html", null, true);
        echo "\">
                                </div>
                                  <div class=\"form-group\">
                                      <label for=\"tiempo\">Fecha:</label>
                                      <input type=\"date\" class=\"form-control\" name=\"fecha\" id=\"fecha\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
        echo "\" min=\"";
        echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
        echo "\" required>
                                  </div>
                              <div class=\"form-group\">
                                  <label for=\"dcorta\">Desde:</label>
                                  <input type=\"time\" class=\"form-control\" name=\"fechad\" id=\"fechad\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["tiempo"] ?? null), "html", null, true);
        echo "\" required>
                              </div>
                              <div class=\"form-group\">
                                  <label for=\"dcorta\">Hasta:</label>
                                  <input type=\"time\" class=\"form-control\" name=\"fechah\" id=\"fechah\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["tiempo"] ?? null), "html", null, true);
        echo "\" required >
                              </div>
                              <div class=\"form-group\">
                                  <input type=\"hidden\" class=\"form-control\" name=\"solicitante\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name", array(), "array")), "html", null, true);
        echo "\" id=\"solicitante\">
                                  <label>Solicitante:</label>
                                  <input type=\"text\" class=\"form-control\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "name", array(), "array")), "html", null, true);
        echo "\" disabled>
                                </div>
                              <div class=\"form-group\">
                                  <label for=\"motivo\">Motivo:</label>
                                  <input type=\"text\" class=\"form-control\" name=\"motivo\" id=\"motivo\"  required>
                              </div>
                              <center>
                                  <button class=\"btn btn-secondary\" type=\"button\" id=\"btn_horaextra\"><span>Solicitar</span></button>
                              </center>
                          </form>
                          <div id=\"resultado\"></div>
                      </div>
                  </div>
              </div>

              <br>
              <br>
              <hr>
          </div>

          <div id=\"bloque_registro\"></div>
      </div>
    </section>

    <!-- Main content -->
    <section class=\"content\">
    </section>
    <!-- /.content -->

";
    }

    // line 74
    public function block_appScript($context, array $blocks = array())
    {
        // line 75
        echo "    <script src=\"views/app/js/horasextra/horasextra.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/pedir_hora_extra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 75,  129 => 74,  95 => 44,  90 => 42,  84 => 39,  77 => 35,  68 => 31,  61 => 27,  55 => 24,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/pedir_hora_extra.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\horasextra\\pedir_hora_extra.twig");
    }
}
