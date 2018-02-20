<?php

/* despacho/seguimiento.twig */
class __TwigTemplate_777ec3862618863d2f0857c6dd081909ad9be295d6ac9edeb8dfe8a81864378c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "despacho/seguimiento.twig", 1);
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
        echo "<section class=\"content-header\">
    <h1>
        DESPACHO
        <small>Seguimiento</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i>Home</a></li>
    <li class=\"active\">Dashboard</li>
    </ol>
</section>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs pull-rigth\">
                    <li ><a href=\"#tab_1-1\" data-toggle=\"tab\" onclick=\"actualizar_tablas_resumenes('";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array"), "html", null, true);
        echo "','usuario');\">RESUMEN SEGUIMIENTO</a></li>
                    <li class=\"active\"><a href=\"#tab_2-2\" data-toggle=\"tab\">SEGUIMIENTO</a></li>
                    <li><a id=\"tab3\" href=\"#tab_3-3\" data-toggle=\"tab\" onclick=\"actualizar_tabla_ordenes('";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array"), "html", null, true);
        echo "','*','usuario');\">VER ORDENES</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane\" id=\"tab_1-1\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"box\">
                                    <div class=\"box-header\">
                                        <h3 class=\"box-title\">Comunas y Ordenes Asignadas</h3>
                                    </div>
                                    <div id=\"div_contenedor_resumen_ordenes\" class=\"box-body\">
                                        <table class=\"table table-bordered table-responsive\">
                                            <thead>
                                                <th>COMUNA</th>
                                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_tipoorden"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_tipoorden"] ?? null))) {
                // line 38
                echo "                                                    <th class=\"text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "descripcion", array()), "html", null, true);
                echo "</th>
                                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                                                <th class=\"text-center\">TOTAL</th>
                                            </thead>
                                            <tbody>
                                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comunas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["db_comunas"] ?? null))) {
                // line 44
                echo "                                                <tr>
                                                    <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "comuna", array()), "html", null, true);
                echo "</td>
                                                    ";
                // line 46
                $context["total_fila"] = 0;
                // line 47
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["db_tipoorden"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                    if ((false != ($context["db_tipoorden"] ?? null))) {
                        // line 48
                        echo "                                                        ";
                        $context["break_for"] = false;
                        // line 49
                        echo "                                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["db_cantidad_por_comuna"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["cant"]) {
                            if ((false != ($context["db_cantidad_por_comuna"] ?? null))) {
                                // line 50
                                echo "                                                            ";
                                if ((($context["break_for"] ?? null) == false)) {
                                    // line 51
                                    echo "                                                                ";
                                    if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "comuna", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["cant"], "comuna", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "descripcion", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["cant"], "descripcion", array())))) {
                                        // line 52
                                        echo "                                                                    <td class=\"text-center\">";
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cant"], "cantidad", array()), "html", null, true);
                                        echo "</td>
                                                                    ";
                                        // line 53
                                        $context["total_fila"] = (($context["total_fila"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["cant"], "cantidad", array()));
                                        // line 54
                                        echo "                                                                    ";
                                        $context["break_for"] = true;
                                        // line 55
                                        echo "                                                                ";
                                    }
                                    // line 56
                                    echo "                                                            ";
                                }
                                // line 57
                                echo "                                                        ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cant'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 58
                        echo "                                                        ";
                        if ((($context["break_for"] ?? null) == false)) {
                            // line 59
                            echo "                                                            <td class=\"text-center\">0</td>
                                                        ";
                        }
                        // line 61
                        echo "                                                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                                                    <td class=\"text-center\"><a onclick=\"mover_tab_3('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array"), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "comuna", array()), "html", null, true);
                echo "','usuario');\">";
                echo twig_escape_filter($this->env, ($context["total_fila"] ?? null), "html", null, true);
                echo "</a></td>
                                                </tr>
                                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"box\">
                                    <div class=\"box-header\">
                                        <h3 class=\"box-title\">Tecnicos Asignados</h3>
                                    </div>
                                    <div id=\"div_contenedor_tecnicos_asignados\" class=\"box-body\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane active\" id=\"tab_2-2\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body resposible\">
                                <div class=\"col-md-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-1\">
                                            <label>Seleccione Comuna:
                                        </div></label>
                                        <div class=\"col-md-3\">
                                            <select class=\"form-control\" id=\"comuna_Seguimiento\" name=\"comuna_Seguimiento\" onchange=\"carga_ordenes_comuna_seguimiento();\">
                                                <option>--</option>
                                                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comunas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_comunas"] ?? null))) {
                // line 95
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "comuna", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "comuna", array()), "html", null, true);
                echo "</option>
                                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"row\">
                                        <form id=\"formseguimiento\" name=\"formseguimiento\" method=\"post\">
                                            <table class=\"table table-bordered table-responsive\" id=\"tblseguimiento\" name=\"tblseguimiento\">
                                                <thead>
                                                    <tr>
                                                        <th>Tipo Orden</th>
                                                        <th>N° Orden</th>
                                                        <th>Rut Cliente</th>
                                                        <th>Fecha compromiso</th>
                                                        <th>Bloque</th>
                                                        <th>Prioridad</th>
                                                        <th>Tecnico Asignado</th>
                                                        <th>Estado de Orden</th>
                                                        <th>OPERACIONES</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Carga Mediante archivo -->
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab_3-3\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body resposible\">
                                <div class=\"col-md-12\">
                                    <form id=\"formordenes\" name=\"formordenes\" method=\"post\">
                                        <table class=\"table table-bordered table-responsive\" id=\"tblordenes\" name=\"tblordenes\">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <th>Tipo Orden</th>
                                                <th>N° Orden</th>
                                                <th>Rut Cliente</th>
                                                <th>Fecha compromiso</th>
                                                <th>Bloque</th>
                                                <th>Comuna</th>
                                                <th>Tecnico Asignado</th>
                                                <th>Estado de Orden</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 147
        $context["No"] = 1;
        // line 148
        echo "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_ordeneshoy"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            if ((false != ($context["db_ordeneshoy"] ?? null))) {
                // line 149
                echo "                                                    <tr>
                                                        <td>";
                // line 150
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "desctipoorden", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 152
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "rut_cliente", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 154
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "fecha_compromiso", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 155
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "bloque", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "comuna", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "nombre", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "desc_estado_orden", array()), "html", null, true);
                echo "</td>
                                                    </tr>
                                                ";
                // line 160
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 161
                echo "                                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    // line 176
    public function block_appScript($context, array $blocks = array())
    {
        // line 177
        echo "
  <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
  <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

  <script src=\"views/app/js/despacho/despacho.js\"></script>

  <script>
    \$(\"#tblseguimiento\").dataTable({
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
      \"bSort\": false
    });
  </script>
  <script>
    \$(\"#tblordenes\").dataTable({
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
      \"bSort\": false
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "despacho/seguimiento.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 177,  361 => 176,  344 => 162,  337 => 161,  335 => 160,  330 => 158,  326 => 157,  322 => 156,  318 => 155,  314 => 154,  310 => 153,  306 => 152,  302 => 151,  298 => 150,  295 => 149,  289 => 148,  287 => 147,  235 => 97,  223 => 95,  218 => 94,  187 => 65,  172 => 62,  165 => 61,  161 => 59,  158 => 58,  151 => 57,  148 => 56,  145 => 55,  142 => 54,  140 => 53,  135 => 52,  132 => 51,  129 => 50,  123 => 49,  120 => 48,  114 => 47,  112 => 46,  108 => 45,  105 => 44,  100 => 43,  95 => 40,  85 => 38,  80 => 37,  63 => 23,  58 => 21,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "despacho/seguimiento.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\seguimiento.twig");
    }
}
