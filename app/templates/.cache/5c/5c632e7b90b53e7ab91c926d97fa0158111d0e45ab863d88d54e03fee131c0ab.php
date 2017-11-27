<?php

/* rrhh/ausencias/revisarausencias.twig */
class __TwigTemplate_8b874c11638ad4b65fd554bb9ea2d2cb797b925213c1cc64954ec46dd6630d43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/ausencias/revisarausencias.twig", 1);
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
        echo "    <section class=\"content-header\">
        <h1>
            RRHH
            <small>Registro de Ausencias</small>
            

            ";
        // line 12
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_nuevo"] ?? null), "id_area", array()) > 0)) {
            // line 13
            echo "                <a class=\"btn btn-primary btn-social pull-right\" href=\"rrhh/ausencias\" title=\"Agregar\" data-toggle=\"tooltip\">
                    <i class=\"fa fa-plus\"></i> Agregar Nueva Ausencia
                </a>
            ";
        } else {
            // line 17
            echo "                <a class=\"btn btn-primary btn-social pull-right\" title=\"Agregar\" data-toggle=\"tooltip\" disabled>
                    <i class=\"fa fa-plus\"></i> Agregar Nueva Ausencia
                </a>
            ";
        }
        // line 21
        echo "        </h1>
    </section>
    <section class=\"content\">
        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-body\">
                        <form id=\"formrevisar\" name=\"formrevisar\"  method=\"post\">
                            <div class=\"input-daterange\">
                                <label>Desde </label>
                                <label>&nbsp;</label>
                                <input type=\"date\" id=\"revdesde\" name=\"revdesde\" value='";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'>
                                <label> Hasta </label>
                                <label>&nbsp;</label>
                                <input type=\"date\" id=\"revhasta\" name=\"revhasta\" value='";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'>
                                <label>&nbsp;</label>
                                <button type=\"button\" name=\"btnbuscar\" id=\"btnbuscar\" onclick=\"revisar_por_fecha()\" class=\"btn btn-primary\">Aplicar Filtrar</button>
                                <button type=\"button\" onclick=\"location.reload();\" class=\"btn btn-primary\">Quitar Filtro</button>
                                <a class=\"btn btn-success btn-social\" id=\"btn_exporta_excel_ausencias\" title=\"Exportar a Excel\" data-toggle=\"tooltip\">
                                    <i class=\"fa fa-arrow-down\"></i> Exportar Excel
                                </a>
                            </div>
                            <hr>
                            <table id=\"dataTables2\" class=\"table table-bordered\" >
                                
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Rut</th>
                                        <th>Nombre</th>
                                        <th>Tipo de Ausencia</th>
                                        <th>Fecha Desde</th>
                                        <th>Fecha Hasta</th>
                                        <th>Creado por</th>
                                        <th>Última modificacion</th>
                                        <th>Funciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 61
        $context["No"] = 1;
        // line 62
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_inasistencias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_inasistencias"] ?? null))) {
                // line 63
                echo "                                        <tr>
                                            <td>";
                // line 64
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                            <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut", array())), "html", null, true);
                echo "</td>
                                            <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombres", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "tipo_ausencia", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "desde", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "hasta", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fechamod", array()), "html", null, true);
                echo "</td>
                                            <td class='center' width='120'>
                                                ";
                // line 73
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "usu_registra", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), 0, array(), "array"))) {
                    // line 74
                    echo "                                                    <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-warning btn-sm' href='rrhh/modificarausencia/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_tblausencias", array()), "html", null, true);
                    echo "'>
                                                        <i class='glyphicon glyphicon-edit'></i>
                                                    </a>
                                                ";
                } else {
                    // line 78
                    echo "                                                    <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-warning btn-sm' disabled>
                                                        <i class='glyphicon glyphicon-edit'></i>
                                                    </a>
                                                ";
                }
                // line 82
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "usu_registra", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), 0, array(), "array"))) {
                    // line 83
                    echo "                                                    <a data-toggle='tooltip' data-placement='top' name=\"btneliminar\" onclick=\"validacion_eliminar('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_tblausencias", array()), "html", null, true);
                    echo "')\"
                                                    class='btn btn-danger btn-sm'>
                                                        <i class='glyphicon glyphicon-remove'></i>
                                                    </a>
                                                ";
                } else {
                    // line 88
                    echo "                                                    <a data-toggle='tooltip' data-placement='top' name=\"btneliminar\" class='btn btn-danger btn-sm' disabled>
                                                        <i class='glyphicon glyphicon-remove'></i>
                                                    </a>
                                                ";
                }
                // line 92
                echo "                                                <a data-toggle='tooltip' data-placement='top' name=\"btnver\" class='btn btn-success btn-sm' onclick=\"verdescripcion('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_tblausencias", array()), "html", null, true);
                echo "')\">
                                                    <i class='glyphicon glyphicon-eye-open'></i>
                                                </a>
                                                <input type=\"hidden\" name=\"textid\" value=\"";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_tblausencias", array()), "html", null, true);
                echo "\">
                                            </td>
                                        </tr>
                                    ";
                // line 98
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 99
                echo "                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                                </tbody>

                                <input type=\"hidden\" name=\"idprueba\" id=\"idprueba\">
                                <input type=\"hidden\" id=\"textoarea\" name=\"textoarea\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_nuevo"] ?? null), "id_area", array()), "html", null, true);
        echo "\">
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    // line 113
    public function block_appScript($context, array $blocks = array())
    {
        // line 114
        echo "
    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>
    
    <script src=\"views/app/js/rrhh/ausencias.js\"></script>
    
    <script>

    \$(\"#dataTables2\").dataTable({
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
        return "rrhh/ausencias/revisarausencias.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 114,  229 => 113,  216 => 103,  211 => 100,  204 => 99,  202 => 98,  196 => 95,  189 => 92,  183 => 88,  174 => 83,  171 => 82,  165 => 78,  157 => 74,  155 => 73,  150 => 71,  146 => 70,  142 => 69,  138 => 68,  134 => 67,  130 => 66,  126 => 65,  122 => 64,  119 => 63,  113 => 62,  111 => 61,  83 => 36,  77 => 33,  63 => 21,  57 => 17,  51 => 13,  49 => 12,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/ausencias/revisarausencias.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\ausencias\\revisarausencias.twig");
    }
}
