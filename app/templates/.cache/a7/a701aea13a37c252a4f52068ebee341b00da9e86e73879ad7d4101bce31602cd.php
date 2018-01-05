<?php

/* rrhh/horasextra/ingreso_horas_extra.twig */
class __TwigTemplate_6446d8543e6c293b904d2b6b7d1bd1f17944e1f99fe0a4dadd9ee56bfc5984a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/horasextra/ingreso_horas_extra.twig", 1);
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
        // line 3
        echo "  <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
    }

    // line 6
    public function block_appBody($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"row\">
    <div class=\"col-md-6\">
      <section class=\"content-header\">
        <h4>
          <i class=\"fa fa-user\"></i>
          SOLICITAR HORAS EXTRA
        </h4>
        <ol class=\"breadcrumb\">
          <li>
            <a href=\"portal\">
              <i class=\"fa fa-home\"></i>
              Home
            </a>
          </li>
          <li>
            <a href=\"rrhh/revisar_horas_extra\">
              Horas Extra
            </a>
          </li>
          <li class=\"active\">
            Modificar la solicitud
          </li>
        </ol>
      </section>
      <section class=\"content-header\">
        <b>Datos para formar la peticion</b>
        <div class=\"box box-info\">
          <br>
          <form name=\"form_horax\" id=\"form_horax\" action=\"\" method=\"POST\">
            <div class=\"form-group margin\">
              <input type=\"hidden\" class=\"form-control\" name=\"rut\" id=\"rut\">
              ";
        // line 38
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["ultimo_id"] ?? null), 0, array(), "array"), "id_enc_hx", array(), "array") > "0")) {
            // line 39
            echo "                <input type=\"hidden\" class=\"form-control\" name=\"id_enc_hx\" id=\"id_enc_hx\" value=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["ultimo_id"] ?? null), 0, array(), "array"), "id_enc_hx", array(), "array") + 1), "html", null, true);
            echo "\">
              ";
        } else {
            // line 41
            echo "                <input type=\"hidden\" class=\"form-control\" name=\"id_enc_hx\" id=\"id_enc_hx\" value=\"1\">
              ";
        }
        // line 43
        echo "            </div>
            ";
        // line 44
        if ((($context["horas_extras"] ?? null) == true)) {
            // line 45
            echo "              <div class=\"form-group margin\">
                <label for=\"fecha_solicitud\">Fecha:</label>
                <input type=\"date\" class=\"form-control\" name=\"fecha_solicitud\" id=\"fecha_solicitud\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["horas_extras"] ?? null), 0, array(), "array"), "fecha_solicitud", array(), "array"), "html", null, true);
            echo "\" min=\"";
            echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
            echo "\" required=\"required\">
              </div>
              <div class=\"form-group margin\">
                <label for=\"hora_desde\">Desde:</label>
                <input type=\"time\" class=\"form-control\" name=\"hora_desde\" id=\"hora_desde\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["horas_extras"] ?? null), 0, array(), "array"), "hora_desde", array(), "array"), "html", null, true);
            echo "\" required=\"required\">
              </div>
              <div class=\"form-group margin\">
                <label for=\"hora_hasta\">Hasta:</label>
                <input type=\"time\" class=\"form-control\" name=\"hora_hasta\" id=\"hora_hasta\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["horas_extras"] ?? null), 0, array(), "array"), "hora_hasta", array(), "array"), "html", null, true);
            echo "\" required=\"required\">
              </div>
              <div class=\"form-group margin\">
                <label for=\"motivo\">Motivo:</label>
                <input type=\"text\" class=\"form-control\" name=\"motivo\" id=\"motivo\" placeholder=\"Agregar un motivo para solicitud de horas extra.\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["horas_extras"] ?? null), 0, array(), "array"), "motivo", array(), "array"), "html", null, true);
            echo "\" required=\"required\">
              </div>
            ";
        } else {
            // line 62
            echo "              <div class=\"form-group margin\">
                <label for=\"fecha\">Fecha:</label>
                <input type=\"date\" class=\"form-control\" name=\"fecha_solicitud\" id=\"fecha_solicitud\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
            echo "\" min=\"";
            echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
            echo "\" required=\"required\">
              </div>
              <div class=\"form-group margin\">
                <label for=\"hora_desde\">Desde:</label>
                <input type=\"time\" class=\"form-control\" name=\"hora_desde\" id=\"hora_desde\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, ($context["tiempo"] ?? null), "html", null, true);
            echo "\" required=\"required\">
              </div>
              <div class=\"form-group margin\">
                <label for=\"hora_hasta\">Hasta:</label>
                <input type=\"time\" class=\"form-control\" name=\"hora_hasta\" id=\"hora_hasta\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, ($context["tiempo"] ?? null), "html", null, true);
            echo "\" required=\"required\">
              </div>
              <div class=\"form-group margin\">
                <label for=\"motivo\">Motivo:</label>
                <input type=\"text\" class=\"form-control\" name=\"motivo\" id=\"motivo\" placeholder=\"Agregar un motivo para solicitud de horas extra.(REQUERIDO)\" required=\"required\">
              </div>
            ";
        }
        // line 79
        echo "            <div class=\"form-group margin\">
              <input type=\"hidden\" class=\"form-control\" name=\"fecha_creacion\" id=\"fecha_creacion\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
        echo "\" min=\"";
        echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
        echo "\" required=\"required\">
            </div>
            <div class=\"form-group margin\">
              <input type=\"hidden\" name=\"iduser\" id=\"iduser\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array")), "html", null, true);
        echo "\">
            </div>
          </form>

          <br>
        </div>
      </section>
    </div>
    <div class=\"col-md-6\">
      <section class=\"content-header\">
        <h4>
          <i class=\"fa fa-user\"></i>
          GESTION DE HORAS EXTRA
        </h4>
        <ol class=\"breadcrumb\">
          <li>
            <a href=\"portal\">
              <i class=\"fa fa-home\"></i>
              Home
            </a>
          </li>
          <li>
            <a href=\"rrhh/revisar_horas_extra\">
              Revisar Horas Extra
            </a>
          </li>
          <li class=\"active\">
            Solicitar Horas extra
          </li>
        </ol>
      </section>
      <section class=\"content-header\">
        <b>Personal para aprobación</b>
        <div class=\"row\">
          <div class=\"col-md-12\">
            <form id=\"form_buscar\" name=\"form_buscar\">
              <div class=\"form-group margin\">
                <button class=\"btn btn-primary\" style=\"position:absolute;display:inline-block;\" type=\"button\" id=\"btn_tmp_horaextra\" onmouseover=\"buscar_coincidencia()\">
                  <span>Agregar</span></button>
                <input type=\"text\" class=\"form-control\" style=\"padding-left:20%;\" placeholder=\"Buscar usuario por nombre o RUT\" name=\"busca\" id=\"busca\">
              </div>
            </form>
            <div class=\"box box-primary\">
              <div class=\"box-body\">
                <table id=\"dataTables1\" class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <th>RUT</th>
                      <th>OPCIONES</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 135
        $context["No"] = 1;
        // line 136
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horas_extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["horas_extras"] ?? null))) {
                // line 137
                echo "                      <tr>
                        <td>";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut", array()), "html", null, true);
                echo "</td>
                        <td class='center'>
                          ";
                // line 140
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estatus", array()) != "Aprobada")) {
                    // line 141
                    echo "                            <a data-toggle='tooltip' data-placement='top' title='Eliminar' id=\"btn_eliminar1\" onclick=\"eliminar_solicitud(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id", array()), "html", null, true);
                    echo ")\" class='btn btn-warning btn-sm'>
                              <i class='glyphicon glyphicon-trash'></i>
                            </a>
                            <form class=\"\" action=\"\" name=\"form_id\" id=\"form_id\" method=\"post\">
                              <input type=\"hidden\" id=\"id_solicitudhx\" name=\"id_solicitudhx\">
                            </form>
                          ";
                }
                // line 148
                echo "                        </td>
                      </tr>
                      ";
                // line 150
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 151
                echo "                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                  </tr>
                </tbody>
              </table>
              ";
        // line 155
        if ((($context["No"] ?? null) > 1)) {
            // line 156
            echo "                <center>
                  <button class=\"btn btn-success\" type=\"button\" id=\"btn_horaextra\">
                    <span>Solicitar Horas Extra</span></button>
                </center>
              ";
        }
        // line 161
        echo "            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
";
    }

    // line 169
    public function block_appScript($context, array $blocks = array())
    {
        // line 170
        $this->loadTemplate("rrhh/horasextra/datatables_opciones", "rrhh/horasextra/ingreso_horas_extra.twig", 170)->display($context);
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/ingreso_horas_extra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 170,  288 => 169,  277 => 161,  270 => 156,  268 => 155,  263 => 152,  256 => 151,  254 => 150,  250 => 148,  239 => 141,  237 => 140,  232 => 138,  229 => 137,  223 => 136,  221 => 135,  166 => 83,  158 => 80,  155 => 79,  145 => 72,  138 => 68,  129 => 64,  125 => 62,  119 => 59,  112 => 55,  105 => 51,  96 => 47,  92 => 45,  90 => 44,  87 => 43,  83 => 41,  77 => 39,  75 => 38,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/ingreso_horas_extra.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\horasextra\\ingreso_horas_extra.twig");
    }
}
