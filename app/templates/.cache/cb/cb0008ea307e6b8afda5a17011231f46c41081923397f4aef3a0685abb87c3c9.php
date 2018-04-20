<?php

/* cierreseguro/seguimiento/seguimiento_supervisores.twig */
class __TwigTemplate_dd8ca5ba6e605071a353d2c0183009fccccea968261cdce8995d640058096660 extends Twig_Template
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
                                <th>N_ORDEN</th>
                                <th>RUT_CLIENTE</th>
                                <th>COMUNA</th>
                                <th>ACTIVIDAD</th>
                                <th>TECNICO</th>
                                <th>DESPACHADOR</th>
                                <th>TELEFONO</th>
                                <th Width=\"100\">ultimo contacto</th>
                                <th>Contactos</th>
                                <th>ESTADO</th>
                                <th>OPCIONES</th>
                            </thead>
                            <tbody>
                                ";
        // line 69
        $context["No"] = 1;
        // line 70
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_cierre_sup"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            if ((false != ($context["db_cierre_sup"] ?? null))) {
                // line 71
                echo "                                    <tr>
                                        <td>";
                // line 72
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "n_orden", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "rut_cliente", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "comuna", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "actividad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "cod_tecnico", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "despachador", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "telefono", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "ultimo_contacto", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "prioridad", array()), "html", null, true);
                echo "</td>
                                        ";
                // line 82
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "estado", array()) == "1")) {
                    // line 83
                    echo "                                            <td>PENDIENTE</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' disabled>
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>  <label>&nbsp;</label>
                                            </td>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 89
$context["s"], "estado", array()) == "2")) {
                    // line 90
                    echo "                                            <td>APROBADO</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\"select_modificar_orden_cerrada('";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "');\">
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>
                                            </td>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 96
$context["s"], "estado", array()) == "3")) {
                    // line 97
                    echo "                                            <td>CLI/RECHAZA</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\"select_modificar_orden_cerrada('";
                    // line 99
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "');\">
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>
                                                <label>&nbsp;</label>
                                                <a data-toggle='tooltip' data-placement='top' id='btnver' name='btnver' title='Observacion' class='btn btn-primary btn-sm' onclick=\"verobservacion('";
                    // line 103
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "')\">
                                                    <i class='glyphicon glyphicon-eye-open'></i>
                                                </a>
                                            </td>
                                        ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 107
$context["s"], "estado", array()) == "5")) {
                    // line 108
                    echo "                                            <td>S/CONTACTO</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\"select_modificar_orden_cerrada('";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["s"], "id", array()), "html", null, true);
                    echo "');\">
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>
                                            </td>
                                        ";
                }
                // line 115
                echo "                                    </tr>
                                    ";
                // line 116
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 117
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
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

    // line 127
    public function block_appScript($context, array $blocks = array())
    {
        // line 128
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
        return array (  247 => 128,  244 => 127,  232 => 118,  225 => 117,  223 => 116,  220 => 115,  212 => 110,  208 => 108,  206 => 107,  199 => 103,  192 => 99,  188 => 97,  186 => 96,  179 => 92,  175 => 90,  173 => 89,  165 => 83,  163 => 82,  159 => 81,  155 => 80,  151 => 79,  147 => 78,  143 => 77,  139 => 76,  135 => 75,  131 => 74,  127 => 73,  123 => 72,  120 => 71,  114 => 70,  112 => 69,  72 => 32,  66 => 29,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}
  <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">

{% endblock %}
{% block appBody %}
<div class=\"row\">
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
                            <input type='date' id='textdesde' style='width:130px;' name='textdesde' value='{{ \"now\"|date(\"Y-m-d\") }}'>
                            <label>&nbsp;</label>
                            <label>Hasta:</label>
                            <input type='date' id='texthasta'  style='width:130px;' name='texthasta' value='{{ \"now\"|date(\"Y-m-d\") }}'>
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
                                <th>N_ORDEN</th>
                                <th>RUT_CLIENTE</th>
                                <th>COMUNA</th>
                                <th>ACTIVIDAD</th>
                                <th>TECNICO</th>
                                <th>DESPACHADOR</th>
                                <th>TELEFONO</th>
                                <th Width=\"100\">ultimo contacto</th>
                                <th>Contactos</th>
                                <th>ESTADO</th>
                                <th>OPCIONES</th>
                            </thead>
                            <tbody>
                                {% set No = 1 %}
                                {% for s in db_cierre_sup if false != db_cierre_sup %}
                                    <tr>
                                        <td>{{ No }}</td>
                                        <td>{{ s.n_orden }}</td>
                                        <td>{{ s.rut_cliente }}</td>
                                        <td>{{ s.comuna }}</td>
                                        <td>{{ s.actividad }}</td>
                                        <td>{{ s.cod_tecnico }}</td>
                                        <td>{{ s.despachador }}</td>
                                        <td>{{ s.telefono }}</td>
                                        <td>{{ s.ultimo_contacto }}</td>
                                        <td>{{ s.prioridad }}</td>
                                        {% if s.estado == \"1\" %}
                                            <td>PENDIENTE</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' disabled>
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>  <label>&nbsp;</label>
                                            </td>
                                        {% elseif s.estado == \"2\" %}
                                            <td>APROBADO</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\"select_modificar_orden_cerrada('{{s.id}}');\">
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>
                                            </td>
                                        {% elseif s.estado == \"3\" %}
                                            <td>CLI/RECHAZA</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\"select_modificar_orden_cerrada('{{s.id}}');\">
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>
                                                <label>&nbsp;</label>
                                                <a data-toggle='tooltip' data-placement='top' id='btnver' name='btnver' title='Observacion' class='btn btn-primary btn-sm' onclick=\"verobservacion('{{s.id}}')\">
                                                    <i class='glyphicon glyphicon-eye-open'></i>
                                                </a>
                                            </td>
                                        {% elseif s.estado == \"5\" %}
                                            <td>S/CONTACTO</td>
                                            <td>
                                                <a data-toggle='tooltip' data-placement='top' id='btncierremodificar' name='btncierremodificar' title='Dejar Pendiente' class='btn btn-warning btn-sm' onclick=\"select_modificar_orden_cerrada('{{s.id}}');\">
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>
                                            </td>
                                        {% endif %}
                                    </tr>
                                    {% set No = No + 1 %}
                                {% endfor %}
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
{% block appScript %}

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
{% endblock %}
", "cierreseguro/seguimiento/seguimiento_supervisores.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\cierreseguro\\seguimiento\\seguimiento_supervisores.twig");
    }
}
