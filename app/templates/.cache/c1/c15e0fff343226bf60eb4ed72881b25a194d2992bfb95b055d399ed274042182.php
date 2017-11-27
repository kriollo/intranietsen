<?php

/* rrhh/horasextra/revisar_horas_extras_pendientes.twig */
class __TwigTemplate_1e4c63510a863d616443c41b2e668d059253e1098c12ef71995b564dc1f01486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/horasextra/revisar_horas_extras_pendientes.twig", 1);
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
";
    }

    // line 5
    public function block_appBody($context, array $blocks = array())
    {
        // line 6
        echo "  <section class=\"content-header\">
      <h4>
        <i class=\"fa fa-user\"></i> GESTION DE HORAS EXTRA
        <a class=\"btn btn-primary btn-social pull-right\" href=\"rrhh/pedir_hora_extra\" title=\"solicitar\" data-toggle=\"tooltip\">
          <i class=\"fa fa-plus\"></i> SOLICITAR
        </a>
      </h4>
  </section>
  <section class=\"content\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"box box-primary\">
          <div class=\"box-body\">
          <table id=\"dataTables1\" class=\"table table-bordered\">
            <thead>
              <tr>
                <th>rut</th>
                <th>Solicitante</th>
                <th>Fecha</th>
                <th>Hora desde</th>
                <th>Hora hasta</th>
                <th>Motivo</th>
                <th>Estatus</th>
                <th>OPCIONES</th>
              </tr>
            </thead>
            <tbody>
              ";
        // line 33
        $context["No"] = 1;
        // line 34
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horas_extras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["horas_extras"] ?? null))) {
                // line 35
                echo "              ";
                if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "rut_personal", array(), "array") == twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut", array())) || (twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "rol", array(), "array") == 1))) {
                    // line 36
                    echo "                <tr>
                  <td>";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "solicitante", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fecha", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fechad", array())), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fechah", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "motivo", array()), "html", null, true);
                    echo "</td>
                  <td>";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estatus", array()), "html", null, true);
                    echo "</td>
                  <td class='center' width='150'>
                    ";
                    // line 45
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estatus", array()) == "Pendiente")) {
                        // line 46
                        echo "                        <button type=\"button\" id=\"btn_revisar\" title='Revisar' class=\"btn btn-success btn-sm\" data-toggle=\"modal\" onclick=\"modal_responder_solicitud('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id", array()), "html", null, true);
                        echo "')\"><i class='glyphicon glyphicon-eye-open'></i></button>
                        </a>
                    ";
                    }
                    // line 49
                    echo "                  </td>
                </tr>
                ";
                }
                // line 52
                echo "                ";
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 53
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "              </tr>
            </tbody>

          </table>
          </div>
        </div>
      </div>
    </div>
  </section>
";
        // line 63
        $this->loadTemplate("rrhh/horasextra/mostrar_hora_extra", "rrhh/horasextra/revisar_horas_extras_pendientes.twig", 63)->display($context);
    }

    // line 65
    public function block_appScript($context, array $blocks = array())
    {
        // line 66
        echo "    <!-- DATA TABES SCRIPT -->
    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

    <script src=\"views/app/js/horasextra/horasextra.js\"></script>

    <script>
     \$(\"#dataTables1\").dataTable({
                \"language\": {
                    \"search\": \"Buscar:\",
                    \"zeroRecords\": \"No hay datos para mostrar\",
                    \"info\":\"Mostrando _END_ Registros, de un total de _TOTAL_ \",
                    \"loadingRecords\": \"Cargando...\",
                    \"processing\":\"Procesando...\",
                    \"infoEmpty\":\"No hay entradas para mostrar\",
                    \"lengthMenu\": \"Mostrar _MENU_ Filas\",
                    \"paginate\":{
                      \"first\":\"Primera\",
                      \"last\":\"Ultima\",
                      \"next\":\"Siguiente\",
                      \"previous\":\"Anterior\",
                    }
                              },
                \"autoWidth\": true
            });
    </script>

";
    }

    public function getTemplateName()
    {
        return "rrhh/horasextra/revisar_horas_extras_pendientes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 66,  152 => 65,  148 => 63,  137 => 54,  130 => 53,  127 => 52,  122 => 49,  115 => 46,  113 => 45,  108 => 43,  104 => 42,  100 => 41,  96 => 40,  92 => 39,  88 => 38,  84 => 37,  81 => 36,  78 => 35,  72 => 34,  70 => 33,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/revisar_horas_extras_pendientes.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\horasextra\\revisar_horas_extras_pendientes.twig");
    }
}
