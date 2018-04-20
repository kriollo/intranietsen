<?php

/* cierreseguro/seguimiento/seguimiento_supervisores.twig */
class __TwigTemplate_b940720781e3bc51e72d14fa1ec34f3ceb40825262ba1eca63896e922e926607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "cierreseguro/seguimiento/seguimiento_supervisores.twig", 1);
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
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <section class=\"content-header\">
            <h1>
                Cierre Seguro
                <small>Cierre Seguro Supervisor</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
                <li class=\"active\">Cierre Seguro Supervisor</li>
            </ol>
            <div class=\"pull-right\">
                <small>
                    <label>Filtrar por:</label>
                    <label>&nbsp;</label>
                    <labe><input type=\"radio\" name=\"selectopcion\" id='selectopcion' onchange=\"seleccionar_opcion('0')\" checked>Por Fecha</label>
                    <label>&nbsp;</label>
                    <labe><input type=\"radio\" name=\"selectopcion\" id='selectopcion' onchange=\"seleccionar_opcion('1')\">Por Orden</label>
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class=\"pull-right\" id=\"divopciones\" name=\"divopciones\">
                        <form id=\"form_filtrar_ordenes_supervisor\" name=\"form_filtrar_ordenes_supervisor\">
                            <label>Desde:</label>
                            <input type='date' id='textdesde' style='width:130px;' name='textdesde' value='";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'>
                            <label>&nbsp;</label>
                            <label>Hasta:</label>
                            <input type='date' id='texthasta'  style='width:130px;' name='texthasta' value='";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'>
                            <input type='hidden' id='opcion' name='opcion' value='fechas'>

                            <a class='btn btn-primary' id='btnfiltrarfecha' name='btnfiltrarfecha' title='Buscar registro' onclick='filtrar_ordenes_supervisor();' data-toggle='tooltip'>Filtrar Fecha</a>
                            <button type=\"button\" onclick=\"location.reload();\" class=\"btn btn-primary\">Quitar Filtro</button>
                            <a class=\"btn btn-success btn-social\" id=\"btnexportarexcel\" name=\"btnexportarexcel\" onclick=\"exportarexcel('fecha');\" title=\"Exportar a Excel\" data-toggle=\"tooltip\">
                                <i class=\"fa fa-arrow-down\"></i> Exportar Excel
                            </a>
                        </form>
                    </div>
                </small>
            </div>
        </section>
    </div>
</div>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <form id=\"formcierre\" name=\"formcierre\">
                        <table id=\"datacierre\" name=\"datacierre\" class=\"table table-bordered table-responsive\">
                            <thead>
                                <th>N°</th>
                                <th>EJECUTIVO</th>
                                <th>N_ORDEN</th>
                                <th>RUT_CLIENTE</th>
                                <th>COMUNA</th>
                                <th>ACTIVIDAD</th>
                                <th>TECNICO</th>
                                <th>DESPACHADOR</th>
                                <th>TELEFONO</th>
                                <th Width=\"100\">ultimo contacto</th>
                                <th>LLAMADOS</th>
                                <th>ESTADO</th>
                                <th>OPCIONES</th>
                            </thead>
                            <tbody>
                                ";
        // line 70
        $context["No"] = 1;
        // line 71
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_cierre_sup"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            if ((false != ($context["db_cierre_sup"] ?? null))) {
                // line 72
                echo "                                    <tr>
                                        <td>";
                // line 73
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "name", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "n_orden", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "rut_cliente", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "comuna", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "actividad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "cod_tecnico", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "despachador", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "telefono", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "ultimo_contacto", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "prioridad", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 84
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "estado", array()) == "1")) {
                    // line 85
                    echo "                                            <td>PENDIENTE</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' disabled>
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>  <label>&nbsp;</label>
                                            </td>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 91
$context["s"], "estado", array()) == "2")) {
                    // line 92
                    echo "                                            <td>APROBADO</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\"select_modificar_orden_cerrada('";
                    // line 94
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "');\">
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>
                                            </td>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 98
$context["s"], "estado", array()) == "3")) {
                    // line 99
                    echo "                                            <td>CLI/RECHAZA</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\"select_modificar_orden_cerrada('";
                    // line 101
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "');\">
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>
                                                <label>&nbsp;</label>
                                                <a data-toggle='tooltip' data-placement='top' id='btnver' name='btnver' title='Observacion' class='btn btn-primary btn-sm' onclick=\"verobservacion('";
                    // line 105
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "')\">
                                                    <i class='glyphicon glyphicon-eye-open'></i>
                                                </a>
                                            </td>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 109
$context["s"], "estado", array()) == "5")) {
                    // line 110
                    echo "                                            <td>S/CONTACTO</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\"select_modificar_orden_cerrada('";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "');\">
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>
                                            </td>
                                        ";
                }
                // line 117
                echo "                                    </tr>
                                    ";
                // line 118
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 119
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 129
    public function block_appScript($context, array $blocks = array())
    {
        // line 130
        echo "
  <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
  <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

  <script src=\"views/app/js/cierreseguro/cierreseguro.js\"></script>

    <script>
        \$(\"#datacierre\").dataTable({
            \"language\": {
                \"search\": \"Buscar:\",
                \"zeroRecords\": \"No hay datos para mostrar\",
                \"info\": \"Mostrando _END_ Registros, de un total de _TOTAL_ \",
                \"loadingRecords\": \"Cargando...\",
                \"processing\": \"Procesando...\",
                \"infoEmpty\": \"No hay entradas para mostrar\",
                \"lengthMenu\": \"Mostrar _MENU_ Filas\",
                \"paginate\": {
                    \"first\": \"Primera\",
                    \"last\": \"Ultima\",
                    \"next\": \"Siguiente\",
                    \"previous\": \"Anterior\"
                }
            },
            \"autoWidth\": false,
            \"bSort\": false,
            \"scrollX\": true
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "cierreseguro/seguimiento/seguimiento_supervisores.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 130,  249 => 129,  237 => 120,  230 => 119,  228 => 118,  225 => 117,  217 => 112,  213 => 110,  211 => 109,  204 => 105,  197 => 101,  193 => 99,  191 => 98,  184 => 94,  180 => 92,  178 => 91,  170 => 85,  168 => 84,  164 => 83,  160 => 82,  156 => 81,  152 => 80,  148 => 79,  144 => 78,  140 => 77,  136 => 76,  132 => 75,  128 => 74,  124 => 73,  121 => 72,  115 => 71,  113 => 70,  72 => 32,  66 => 29,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cierreseguro/seguimiento/seguimiento_supervisores.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\cierreseguro\\seguimiento\\seguimiento_supervisores.twig");
    }
}
