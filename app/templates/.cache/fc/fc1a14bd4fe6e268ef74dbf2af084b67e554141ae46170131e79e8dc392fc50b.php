<?php

/* confirmacion/programacion/listar_allorden.twig */
class __TwigTemplate_6185293ac66fa43ae8bcb32cb4492044a9f61e097a098b9d3ed2842e8cc94619 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/programacion/listar_allorden.twig", 1);
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
  <style media=\"screen\">
    .at{
      display: none;
    }
  </style>
";
    }

    // line 10
    public function block_appBody($context, array $blocks = array())
    {
        // line 11
        echo "<section class=\"content-header\">
    <h4>
        Confirmación
        <small>Listado de Ordenes Registradas por día</small>

        <div class=\"pull-right\">
            <label>Fecha Registro: </label>
            <label>&nbsp;</label>
            <input type=\"date\" id=\"revhasta\" name=\"revhasta\" value='";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'>
            <label>&nbsp;</label>
            <button type=\"button\" name=\"btnbuscar\" id=\"btnbuscar\" onclick=\"revisar_por_fecha()\" class=\"btn btn-primary\">Aplicar Filtrar</button>
            <button type=\"button\" onclick=\"location.reload();\" class=\"btn btn-primary\">Quitar Filtro</button>
            <a class=\"btn btn-success btn-social\" id=\"btn_exporta_excel_ordenes\" title=\"Exportar a Excel\" data-toggle=\"tooltip\">
                <i class=\"fa fa-arrow-down\"></i> Exportar Excel
            </a>
        </div>
    </h4>
</section>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <form id=\"formordenes\" name=\"formordenes\">
                        <table id=\"dataordenes\" name=\"dataordenes\" class=\"table table-bordered table-responsive\">
                            <thead>
                                <tr>
                                    <th>Numero Orden</th>
                                    <th>Operador</th>
                                    <th>Rut Cliente</th>
                                    <th>Fecha Compromiso</th>
                                    <th>Bloque</th>
                                    <th>Motivo</th>
                                    <th>Comuna</th>
                                    <th>Actividad</th>
                                    <th>Resultado</th>
                                    <th>Observacion</th>
                                    <th>Funciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 52
        $context["No"] = 1;
        // line 53
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_ordenes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            if ((false != ($context["db_ordenes"] ?? null))) {
                // line 54
                echo "                                    <tr>
                                        <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "name", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "rut_cliente", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "fecha_compromiso", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "bloque", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "motivo", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "comuna", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "actividad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "desc_resultado", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "observacion", array()), "html", null, true);
                echo "</td>
                                        <td class='pull-center' width='40'>
                                            ";
                // line 66
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "ubicacion", array()) == "CONFIRMACION")) {
                    // line 67
                    echo "                                                <a data-toggle='tooltip' data-placement='top' id=\"btnmodificar\" name=\"btnmodificar\" title='Modificar' class='btn btn-success btn-sm' href=\"confirmacion/editar_confirmacion/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_orden", array()), "html", null, true);
                    echo "\">
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>
                                                <a data-placement='top' name=\"btnlisteliminar\" id=\"btnlisteliminar\" title=\"Eliminar\" onclick=\"asignardato(";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_orden", array()), "html", null, true);
                    echo ")\" class='btn btn-danger btn-sm'>
                                                    <i class='glyphicon glyphicon-remove'></i>
                                                </a>
                                            ";
                } else {
                    // line 74
                    echo "                                                <a data-toggle='tooltip' data-placement='top' id=\"btnmodificar\" name=\"btnmodificar\" title='Modificar' class='btn btn-success btn-sm' disabled>
                                                    <i class='glyphicon glyphicon-edit'></i>
                                                </a>
                                                <a data-placement='top' name=\"btnlisteliminar\" id=\"btnlisteliminar\" title=\"Eliminar\" class='btn btn-danger btn-sm' disabled>
                                                    <i class='glyphicon glyphicon-remove'></i>
                                                </a>
                                            ";
                }
                // line 81
                echo "                                        </td>
                                    </tr>
                                    ";
                // line 83
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 84
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "
                                <input type=\"text\" class=\"at\" name=\"textlisteliminar\" id=\"textlisteliminar\">
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 96
    public function block_appScript($context, array $blocks = array())
    {
        // line 97
        echo "
  <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
  <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

  <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>

    <script>
        \$(\"#dataordenes\").dataTable({
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
            \"autoWidth\": true
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/programacion/listar_allorden.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 97,  196 => 96,  182 => 85,  175 => 84,  173 => 83,  169 => 81,  160 => 74,  153 => 70,  146 => 67,  144 => 66,  139 => 64,  135 => 63,  131 => 62,  127 => 61,  123 => 60,  119 => 59,  115 => 58,  111 => 57,  107 => 56,  103 => 55,  100 => 54,  94 => 53,  92 => 52,  56 => 19,  46 => 11,  43 => 10,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/programacion/listar_allorden.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\programacion\\listar_allorden.twig");
    }
}
