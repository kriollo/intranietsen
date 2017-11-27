<?php

/* rrhh/horasextra/horasextra.twig */
class __TwigTemplate_a09fae066132354c131ec94a237221745177d99c4b4db9a2188245e2750895aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/horasextra/horasextra.twig", 1);
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
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "rut_personal", array(), "array") == twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut", array()))) {
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
                        echo "                        <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-primary btn-sm' href=\"rrhh/modificar/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id", array()), "html", null, true);
                        echo "\">
                            <i class='glyphicon glyphicon-edit'></i>
                        </a>
                    ";
                    } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                     // line 49
$context["d"], "estatus", array()) == "Aprobada")) {
                        // line 50
                        echo "                        <a data-toggle='tooltip' data-placement='top' title='Aceptada ' class='btn btn-success btn-sm' disabled>
                            <i class='glyphicon glyphicon-ok'></i>
                        </a>
                    ";
                    } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                     // line 53
$context["d"], "estatus", array()) == "Rechazada")) {
                        // line 54
                        echo "                        <a data-toggle='tooltip' data-placement='top' title='Rechazada ' class='btn btn-danger btn-sm' disabled>
                            <i class='glyphicon glyphicon-remove'></i>
                        </a>
                    ";
                    }
                    // line 58
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estatus", array()) != "Aprobada")) {
                        // line 59
                        echo "                      <a data-toggle='tooltip' data-placement='top' title='Eliminar' id=\"btn_eliminar1\" onclick=\"eliminar_solicitud(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id", array()), "html", null, true);
                        echo ")\" class='btn btn-warning btn-sm' >
                          <i class='glyphicon glyphicon-trash'></i>
                      </a>
                      <form class=\"\" action=\"\" name=\"form_id\" id=\"form_id\" method=\"post\">
                          <input type=\"hidden\" id=\"id_solicitudhx\" name=\"id_solicitudhx\">
                      </form>
                    ";
                    }
                    // line 66
                    echo "                  </td>
                </tr>
                ";
                }
                // line 69
                echo "                ";
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 70
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </section>
";
    }

    // line 80
    public function block_appScript($context, array $blocks = array())
    {
        // line 81
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
        return "rrhh/horasextra/horasextra.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  178 => 80,  166 => 71,  159 => 70,  156 => 69,  151 => 66,  140 => 59,  137 => 58,  131 => 54,  129 => 53,  124 => 50,  122 => 49,  115 => 46,  113 => 45,  108 => 43,  104 => 42,  100 => 41,  96 => 40,  92 => 39,  88 => 38,  84 => 37,  81 => 36,  78 => 35,  72 => 34,  70 => 33,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/horasextra/horasextra.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\horasextra\\horasextra.twig");
    }
}
