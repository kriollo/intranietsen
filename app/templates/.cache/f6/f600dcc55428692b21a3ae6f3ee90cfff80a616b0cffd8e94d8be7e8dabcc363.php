<?php

/* redes/listar_fen.twig */
class __TwigTemplate_50cf051959c5d61ba1d814d26fc83ae4a34318386a7a7d9acb274cb126ed40ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "redes/listar_fen.twig", 1);
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
                FEN
                <small>Listado de FEN</small>

                <div class=\"pull-right\">
                        <small><label>Filtrar por:</label>
                        <label>&nbsp;</label>
                        <label><input type=\"radio\" name=\"selectopcion\" id='selectopcion' onchange=\"seleccionar_opcion_fen('0')\" checked>Por Fecha</label>
                        <label>&nbsp;</label>
                        <label><input type=\"radio\" name=\"selectopcion\" id='selectopcion' onchange=\"seleccionar_opcion_fen('1')\">Por Orden</label>
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <div class=\"pull-right\" id=\"divopciones_fen\" name=\"divopciones_fen\">
                          <label>Fecha:</label>
                          <label>&nbsp;</label>
                          <input type=\"date\" id=\"fendesde\" name=\"fendesde\" value='";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'>
                          <label>&nbsp;</label>
                          <input type=\"date\" id=\"fenhasta\" name=\"fenhasta\" value='";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "'>
                          <label>&nbsp;</label>
                          <button type=\"button\" name=\"btnbuscar\" id=\"btnbuscar\" onclick=\"filtrar_por_fecha()\" class=\"btn btn-primary\">Aplicar Filtrar</button>
                          <button type=\"button\" onclick=\"location.reload();\" class=\"btn btn-primary\">Quitar Filtro</button>
                          <a class=\"btn btn-success btn-social\" id=\"btn_exporta_excel\" onclick=\"exporta_excel()\" title=\"Exportar a Excel\" data-toggle=\"tooltip\">
                              <i class=\"fa fa-arrow-down\"></i> Exportar
                          </a>
                        </div>
                    </small>
                </div>
            </h1>
        </section>
    </div>
</div>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <form id=\"formfenordenes\" name=\"formfenordenes\">
                      <div id=\"tbldatos\" name=\"tbldatos\">


                        <table id=\"tablafen\" name=\"tablafen\" class=\"table table-bordered table-responsive\">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>N°FEN</th>
                                    <th>USUARIO</th>
                                    <th>FECHA</th>
                                    <th>COMUNA</th>
                                    <th>FECHA_INICIO</th>
                                    <th>FECHA_FINAL</th>
                                    <th>ESCALADO</th>
                                    <th>ESTADO</th>
                                    <th>RUT_TITULAR</th>
                                    <th>DIRECCION</th>
                                    <th>NUMERO_TANGO</th>
                                    <th>NUMERO_OT</th>
                                    <th>CODIGO_TECNICO</th>
                                    <th>OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 70
        $context["No"] = 1;
        // line 71
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_fen"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if ((false != ($context["db_fen"] ?? null))) {
                // line 72
                echo "                                    <tr>
                                        <td>";
                // line 73
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "fen", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "usuario", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "fecha", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "nombre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "fechainicio", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "fechafinal", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "escalado", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "estado", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "rut_titular", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "direccion", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "numerotango", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "numeroot", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "codigo_tecnico", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-success btn-sm' href=\"redes/editar_fen/";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "id_fen", array()), "html", null, true);
                echo "\">
                                                <i class='glyphicon glyphicon-edit'></i>
                                            </a>
                                            <a data-placement='top' name=\"btnlisteliminar\" id=\"btnlisteliminar\" title=\"Eliminar\" onclick=\"eliminarfen(";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["f"], "id_fen", array()), "html", null, true);
                echo ")\" class='btn btn-danger btn-sm'>
                                                <i class='glyphicon glyphicon-remove'></i>
                                            </a>
                                        </td>
                                    </tr>
                                    ";
                // line 96
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 97
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                            </tbody>
                        </table>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 108
    public function block_appScript($context, array $blocks = array())
    {
        // line 109
        echo "
  <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
  <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

  <script src=\"views/app/js/redes/redes.js\"></script>

    <script>
        \$(\"#tablafen\").dataTable({
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
            \"autoWidth\": true,
            \"bSort\": false,
          \"scrollX\": true
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "redes/listar_fen.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 109,  217 => 108,  204 => 98,  197 => 97,  195 => 96,  187 => 91,  181 => 88,  176 => 86,  172 => 85,  168 => 84,  164 => 83,  160 => 82,  156 => 81,  152 => 80,  148 => 79,  144 => 78,  140 => 77,  136 => 76,  132 => 75,  128 => 74,  124 => 73,  121 => 72,  115 => 71,  113 => 70,  66 => 26,  61 => 24,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "redes/listar_fen.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\redes\\listar_fen.twig");
    }
}
