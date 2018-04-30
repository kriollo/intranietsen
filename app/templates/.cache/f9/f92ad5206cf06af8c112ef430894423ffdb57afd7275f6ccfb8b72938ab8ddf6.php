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
                                        <td>
                                            ";
                // line 74
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "sg", array()) == 0)) {
                    // line 75
                    echo "                                                <a data-toggle='tooltip' data-placement='top' id='btncierresg-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "' name='btncierresg-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "' title='Seguimiento' class='btn btn-primary btn-sm' onclick=\"select_orden_sg('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "')\">
                                                    SG
                                                </a>
                                            ";
                } else {
                    // line 79
                    echo "                                                <a data-toggle='tooltip' data-placement='top' id='btncierresg-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "' name='btncierresg-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "' title='Seguimiento' class='btn btn-warning btn-sm' onclick=\"select_orden_sg('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "')\">
                                                    SG
                                                </a>
                                            ";
                }
                // line 83
                echo "                                        </td>
                                        <td>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "name", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "n_orden", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "rut_cliente", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "comuna", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "actividad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "cod_tecnico", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "despachador", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "telefono", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "ultimo_contacto", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "prioridad", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 94
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "estado", array()) == "1")) {
                    // line 95
                    echo "                                            <td>PENDIENTE</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' disabled>
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>  <label>&nbsp;</label>
                                            </td>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 101
$context["s"], "estado", array()) == "2")) {
                    // line 102
                    echo "                                            <td>APROBADO</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\"select_modificar_orden_cerrada('";
                    // line 104
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "');\">
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>
                                            </td>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 108
$context["s"], "estado", array()) == "3")) {
                    // line 109
                    echo "                                            <td>CLI/RECHAZA</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\"select_modificar_orden_cerrada('";
                    // line 111
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "');\">
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>
                                                <label>&nbsp;</label>
                                                <a data-toggle='tooltip' data-placement='top' id='btnver' name='btnver' title='Observacion' class='btn btn-primary btn-sm' onclick=\"verobservacion('";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "')\">
                                                    <i class='glyphicon glyphicon-eye-open'></i>
                                                </a>
                                            </td>
                                            ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 119
$context["s"], "estado", array()) == "4")) {
                    // line 120
                    echo "                                                <td>N/REALIZADO</td>
                                                <td>
                                                    <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\"select_modificar_orden_cerrada('";
                    // line 122
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "');\">
                                                        <i class='glyphicon glyphicon-edit'></i>
                                                    </a>
                                                    <label>&nbsp;</label>
                                                    <a data-toggle='tooltip' data-placement='top' id='btnver' name='btnver' title='Observacion' class='btn btn-primary btn-sm' onclick=\"verobservacion('";
                    // line 126
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "')\">
                                                        <i class='glyphicon glyphicon-eye-open'></i>
                                                    </a>
                                                </td>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 130
$context["s"], "estado", array()) == "5")) {
                    // line 131
                    echo "                                            <td>S/CONTACTO</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\"select_modificar_orden_cerrada('";
                    // line 133
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "');\">
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>
                                            </td>
                                        ";
                }
                // line 138
                echo "                                    </tr>
                                    ";
                // line 139
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 140
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
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

    // line 150
    public function block_appScript($context, array $blocks = array())
    {
        // line 151
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
        return array (  298 => 151,  295 => 150,  283 => 141,  276 => 140,  274 => 139,  271 => 138,  263 => 133,  259 => 131,  257 => 130,  250 => 126,  243 => 122,  239 => 120,  237 => 119,  230 => 115,  223 => 111,  219 => 109,  217 => 108,  210 => 104,  206 => 102,  204 => 101,  196 => 95,  194 => 94,  190 => 93,  186 => 92,  182 => 91,  178 => 90,  174 => 89,  170 => 88,  166 => 87,  162 => 86,  158 => 85,  154 => 84,  151 => 83,  139 => 79,  127 => 75,  125 => 74,  121 => 72,  115 => 71,  113 => 70,  72 => 32,  66 => 29,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cierreseguro/seguimiento/seguimiento_supervisores.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\cierreseguro\\seguimiento\\seguimiento_supervisores.twig");
    }
}
