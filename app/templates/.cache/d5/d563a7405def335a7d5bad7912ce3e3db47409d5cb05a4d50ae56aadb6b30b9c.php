<?php

/* rrhh/turnos/revisar_turnos.twig */
class __TwigTemplate_768a69193ac5c5b51c16ed15a7787c9cfc15bf006e8d7b30ab2f5cab265c0d89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/turnos/revisar_turnos.twig", 1);
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

    // line 6
    public function block_appBody($context, array $blocks = array())
    {
        // line 7
        echo "          <section class=\"content-header\">
            <h4>
                <i class=\"fa fa-th\"></i> TURNOS PLATAFORMA
            </h4>
          </section>
          <section class=\"content\">

    <!-- Default box -->
    <div class=\"box\">
        <div class=\"box-header with-border\">
            <h3>Seleccione Fecha de Turno </h3>
            <div class=\"box-tools pull-right\">
                <button class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\"><i class=\"fa fa-minus\"></i></button>
            </div>
        </div>

        <div class=\"box-body\">

            <form name=\"formbuscaturno\" id=\"formbuscaturno\" action=\"\" method=\"POST\">
                <table>
                    <tr>
                        <td>Fecha: <input  type=\"date\" name=\"fechaturno\" id=\"fechaturno\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["fecha2"] ?? null), "html", null, true);
        echo "\" />
                            &nbsp;&nbsp;&nbsp;&nbsp;<input type=\"button\" name=\"btn1\" value=\"Buscar turno\" id=\"btn1\" onclick=\"revisar_turno_por_fecha()\"/>&nbsp;&nbsp;&nbsp;
                            <a class=\"btn btn-success btn-social pull-right\" href=\"rrhh/exportar_turnos_excel\" title=\"Exportar a Excel\" data-toggle=\"tooltip\">
                              <i class=\"fa fa-arrow-down\"></i> Exportar Turnos a Excel
                            </a>

                        </td>
                    </tr>
                </table>
                <br>
                <!----------------------------------------------------------------------------------------------------------------------------------------->
                <div class=\"row\">
                  <div class=\"col-md-12\">
                    <div class=\"box box-primary\">
                      <div class=\"box-body\" id=\"camdat\" name=\"camdat\">
                      <table id=\"dataTables3\" class=\"table table-bordered\" >
                        <div class=\"\">
                        <br>
                        <thead>
                          <tr>
                            <th></th>
                            <th>Rut</th>
                            <th>Servicio</th>
                            <th>Fecha</th>
                            <th>Hora Ingreso</th>
                            <th>Hora Salida</th>
                            
                            <th>Horas Turno</th>
                            <th>Hora Colacion</th>
                            <th>Horario Colacion</th>
                            <th>HR Break 1</th>
                            <th>HR Break 2</th>
                            <th>Modificar</th>
                          </tr>
                        </thead>
                        <tbody id=\"turnos\">
                          ";
        // line 64
        $context["No"] = 1;
        // line 65
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cargar_turnos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            if ((false != ($context["cargar_turnos"] ?? null))) {
                // line 66
                echo "                            <tr>
                                <td>";
                // line 67
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "rut", array())), "html", null, true);
                echo "</td>
                                <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "servicio", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "fecha", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "hora_ingreso", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "hora_salida", array()), "html", null, true);
                echo "</td>
                                
                                <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "hora_turnos", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "hora_colacion", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "horario_colacion", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "break_1", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "break_2", array()), "html", null, true);
                echo "</td>
                                <td> <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-warning btn-sm' onclick=\"modificarnuevodatos(";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["d"] ?? null), "id_tblausencias", array()), "html", null, true);
                echo ")\">
                                  <i class='glyphicon glyphicon-edit'></i></td>
                            </tr>
                            </tr>
                            ";
                // line 83
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 84
                echo "                          ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                        </tbody>

                        <input type=\"hidden\" name=\"idprueba\" id=\"idprueba\">
                        <input type=\"hidden\" id=\"textoarea\" name=\"textoarea\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_nuevo"] ?? null), "id_area", array()), "html", null, true);
        echo "\">
                      </table>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              </section>
              </div>
              <div id=\"divlista\">
              </div>
            <br />
        </div>

    </div>
    ";
    }

    // line 104
    public function block_appScript($context, array $blocks = array())
    {
        // line 105
        echo "
        <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
        <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

            <script src=\"views/app/js/rrhh/turnos.js\"></script>
           <script>
            \$(\"#dataTables3\").dataTable({
                     \"language\": {
                         \"search\": \"Buscar:\",
                         \"zeroRecords\": \"No hay datos para mostrar\",
                         \"info\":\"Mostrando _END_ usuarios, de un total de _TOTAL_ \",
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
        return "rrhh/turnos/revisar_turnos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 105,  200 => 104,  180 => 88,  175 => 85,  168 => 84,  166 => 83,  159 => 79,  155 => 78,  151 => 77,  147 => 76,  143 => 75,  139 => 74,  134 => 72,  130 => 71,  126 => 70,  122 => 69,  118 => 68,  114 => 67,  111 => 66,  105 => 65,  103 => 64,  64 => 28,  41 => 7,  38 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/turnos/revisar_turnos.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\turnos\\revisar_turnos.twig");
    }
}
