<?php

/* rrhh/horasextra/modificar_solicitud_hora_extra.twig */
class __TwigTemplate_202bb401409ee81fd7e36747711400efc0e860ab9b47c83e91e8a97196cc25ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/horasextra/modificar_solicitud_hora_extra.twig", 1);
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
        echo "  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
";
    }

    // line 5
    public function block_appBody($context, array $blocks = array())
    {
        // line 6
        echo "  <section class=\"content-header\">
    <h4>
      <i class=\"fa fa-user\"></i>
      MODIFICAR SOLICITUD DE HORAS EXTRA
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
    <div class=\"tab-pane active\" id=\"tab_1-1\">
      <b>Modificar la peticion</b>
      <div id=\"bloque_registro\"></div>
      <div class=\"box box-info\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-6\" id=\"main\">
              <br>
              <form name=\"form_modificar\" id=\"form_modificar\" action=\"\" method=\"POST\">
                <div class=\"form-group\">
                  <input type=\"hidden\" class=\"form-control\" name=\"rut\" id=\"rut\">
                  <label for=\"fecha_solicitud\">Fecha:</label>
                  <input type=\"date\" class=\"form-control\" name=\"fecha_solicitud\" id=\"fecha_solicitud\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "fecha_solicitud", array()), "html", null, true);
        echo "\" required=\"required\">
                </div>
                <div class=\"form-group\">
                  <label for=\"hora_desde\">Desde:</label>
                  <input type=\"time\" class=\"form-control\" name=\"hora_desde\" id=\"hora_desde\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "hora_desde", array()), "html", null, true);
        echo "\" required=\"required\">
                </div>
                <div class=\"form-group\">
                  <label for=\"hora_hasta\">Hasta:</label>
                  <input type=\"time\" class=\"form-control\" name=\"hora_hasta\" id=\"hora_hasta\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "hora_hasta", array()), "html", null, true);
        echo "\" required=\"required\">
                </div>
                <div class=\"form-group\">
                  <label for=\"motivo_solicitud\">Motivo:</label>
                  <input type=\"text\" class=\"form-control\" name=\"motivo_solicitud\" id=\"motivo_solicitud\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "motivo_solicitud", array()), "html", null, true);
        echo "\">
                  <input type=\"hidden\" class=\"form-control\" name=\"id_enc_hx\" id=\"id_enc_hx\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "id_enc_hx", array()), "html", null, true);
        echo "\">
                </div>
                <center>
                  <button class=\"btn btn-success\" type=\"button\" id=\"btn_modificar\">
                    <span>Modificar</span></button>
                </center>
              </form>
            </div>
            <div class=\"col-md-6\">
              <div class=\"box-body\">
                <h5>
                  <strong>Usuarios</strong>
                </h5>
                <form id=\"form_buscar\" name=\"form_buscar\">
                  <div class=\"form-group margin\">
                    <button class=\"btn btn-primary\" style=\"position:absolute;display:inline-block;\" type=\"button\" id=\"btn_agregar_usuario\" onmouseover=\"buscar_coincidencia()\">
                      <span>Agregar</span></button>
                    <input type=\"text\" class=\"form-control\" style=\"padding-left:20%;\" placeholder=\"Buscar usuario por nombre o RUT\" name=\"busca\" id=\"busca\" onmouseover=\"buscar_coincidencia()\">
                  </div>
                </form>
                <table id=\"dataTables1\" class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <th>RUT</th>
                      <th>OPCIONES</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 82
        $context["No"] = 1;
        // line 83
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horas_extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 84
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_enc_hx", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["modifica_hx"] ?? null), "id_enc_hx", array()))) {
                // line 85
                echo "                        <tr>
                          <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut", array()), "html", null, true);
                echo "</td>
                          <td class='center'>
                            <a data-toggle='tooltip' data-placement='top' title='Eliminar' id=\"btn_eliminar_mod\" onclick=\"eliminar_solicitud_mod(";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_det", array()), "html", null, true);
                echo ")\" class='btn btn-warning btn-sm'>
                              <i class='glyphicon glyphicon-trash'></i>
                            </a>
                            <form class=\"\" action=\"\" name=\"form_id_mod\" id=\"form_id_mod\" method=\"post\">
                              <input type=\"hidden\" id=\"id_hx_mod\" name=\"id_hx_mod\">
                            </form>
                          </td>
                        </tr>
                      ";
            }
            // line 97
            echo "                      ";
            $context["No"] = (($context["No"] ?? null) + 1);
            // line 98
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                  </tr>
                </tbody>
              </table>
            </div>
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
<section class=\"content\"></section>
<!-- /.content -->

";
    }

    // line 121
    public function block_appScript($context, array $blocks = array())
    {
        // line 122
        $this->loadTemplate("rrhh/horasextra/datatables_opciones", "rrhh/horasextra/modificar_solicitud_hora_extra.twig", 122)->display($context);
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/modificar_solicitud_hora_extra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 122,  198 => 121,  173 => 99,  167 => 98,  164 => 97,  152 => 88,  147 => 86,  144 => 85,  141 => 84,  136 => 83,  134 => 82,  103 => 54,  99 => 53,  92 => 49,  85 => 45,  78 => 41,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/modificar_solicitud_hora_extra.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\horasextra\\modificar_solicitud_hora_extra.twig");
    }
}
