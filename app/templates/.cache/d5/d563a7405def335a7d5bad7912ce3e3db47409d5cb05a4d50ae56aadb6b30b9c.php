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
        echo "<section class=\"content-header\">
    <h1>
        RRHH
        <small>Turnos Plataforma</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
    <li class=\"active\">Turnos Plataforma</li>
    </ol>
</section>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                <form name=\"formbuscaturno\" id=\"formbuscaturno\"  method=\"post\">
                    <div class=\"input-daterange\"> 
                        <label>Fecha: </label>
                        <label>&nbsp;</label>
                        <input type=\"date\" name=\"fechaturno\" id=\"fechaturno\" value='";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'>
                        <label>&nbsp;</label>
                        <button type=\"button\" name=\"btnbuscar\" id=\"btnbuscar\" onclick=\"revisar_turno_por_fecha()\" class=\"btn btn-primary\">Aplicar Filtrar</button>
                        <button type=\"button\" onclick=\"location.reload();\" class=\"btn btn-primary\">Quitar Filtro</button>
                        <a class=\"btn btn-success btn-social\" id=\"btn_exporta_excel_turno_plataforma\" title=\"Exportar a Excel\" data-toggle=\"tooltip\">
                            <i class=\"fa fa-arrow-down\"></i> Exportar Excel
                        </a>
                    </div>
                    <hr>
                </form>
                
                <table id=\"dataTables3\" class=\"table table-bordered\" >
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Rut</th>
                            <th>Servicio</th>
                            
                            <th>H.Ingreso</th>
                            <th>H.Salida</th>

                            <th>Q.H.Turno</th>
                            <th>H.Colacion</th>
                            <th>H.Colacion</th>
                            <th>Break 1</th>
                            <th>Break 2</th>
                            <th>Asistencia</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody id=\"turnos\">
                      ";
        // line 57
        $context["No"] = 1;
        // line 58
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cargar_turnos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            if ((false != ($context["cargar_turnos"] ?? null))) {
                // line 59
                echo "                        <tr>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                            <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "nombres", array())), "html", null, true);
                echo "</td>
                            <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "servicio", array()), "html", null, true);
                echo "</td>
                            
                            <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "hora_ingreso", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "hora_salida", array()), "html", null, true);
                echo "</td>

                            <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "hora_turnos", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "hora_colacion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "horario_colacion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "break_1", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "break_2", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "asistencia", array()), "html", null, true);
                echo "</td>
                            <td class='center' width='60'> <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-warning btn-sm' onclick=\"modificarnuevodatos(";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["d"] ?? null), "id_tblausencias", array()), "html", null, true);
                echo ")\">
                                <i class='glyphicon glyphicon-edit'></i></a>
                            </td>
                        </tr>

                        ";
                // line 78
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 79
                echo "                      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                    </tbody>
                </table>
                </div>      
            </div>
        </div>
    </div>
</section>
    ";
    }

    // line 88
    public function block_appScript($context, array $blocks = array())
    {
        // line 89
        echo "        <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
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
                 \"autoWidth\": true,
                 \"lengthMenu\": [[10, 25, 50, -1], [10, 25, 50, \"Todos\"]],
                 \"iDisplayLength\": 25
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
        return array (  184 => 89,  181 => 88,  170 => 80,  163 => 79,  161 => 78,  153 => 73,  149 => 72,  145 => 71,  141 => 70,  137 => 69,  133 => 68,  129 => 67,  124 => 65,  120 => 64,  115 => 62,  111 => 61,  107 => 60,  104 => 59,  98 => 58,  96 => 57,  62 => 26,  41 => 7,  38 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/turnos/revisar_turnos.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\turnos\\revisar_turnos.twig");
    }
}
