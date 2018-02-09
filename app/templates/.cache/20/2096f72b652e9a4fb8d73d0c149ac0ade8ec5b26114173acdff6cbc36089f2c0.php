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
                    <li ><a href=\"#tab_1-1\" data-toggle=\"tab\">RESUMEN SEGUIMIENTO</a></li>
                    <li class=\"active\"><a href=\"#tab_2-2\" data-toggle=\"tab\">SEGUIMIENTO</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane\" id=\"tab_1-1\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"box\">
                                    <div class=\"box-header\">
                                        <h3 class=\"box-title\">Comunas y Ordenes Asignadas</h3>
                                    </div>
                                    <div class=\"box-body\">
                                        <table class=\"table table-bordered table-responsive\">
                                            <thead>
                                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comunas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_comunas"] ?? null))) {
                // line 36
                echo "                                                    <th class=\"text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "comuna", array()), "html", null, true);
                echo "</th>
                                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                                <th class=\"text-center\">TOTAL</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    ";
        // line 42
        $context["total"] = 0;
        // line 43
        echo "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comunas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_comunas"] ?? null))) {
                // line 44
                echo "                                                        ";
                $context["break_for"] = false;
                // line 45
                echo "                                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["db_cantidad_por_comuna"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    if ((false != ($context["db_cantidad_por_comuna"] ?? null))) {
                        // line 46
                        echo "                                                            ";
                        if ((($context["break_for"] ?? null) == false)) {
                            // line 47
                            echo "                                                                ";
                            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "comuna", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "comuna", array()))) {
                                // line 48
                                echo "                                                                    <td class=\"text-center\">";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "cantidad", array()), "html", null, true);
                                echo "</td>
                                                                    ";
                                // line 49
                                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "cantidad", array()));
                                // line 50
                                echo "                                                                    ";
                                $context["break_for"] = true;
                                // line 51
                                echo "                                                                ";
                            }
                            // line 52
                            echo "                                                            ";
                        }
                        // line 53
                        echo "                                                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                                                        ";
                if ((($context["break_for"] ?? null) == false)) {
                    // line 55
                    echo "                                                            <td></td>
                                                        ";
                }
                // line 57
                echo "                                                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                                    <td class=\"text-center\">";
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "</td>
                                                </tr>
                                            </tbody>
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
                                    <div class=\"box-body\">
                                        <table class=\"table table-bordered\">
                                            <thead>
                                                <tr>
                                                    <th>N°</th>
                                                    <th>Codigo</th>
                                                    <th>Nombre</th>
                                                    <!-- <th>Comuna Asignada</th> -->
                                                    <th>Orden asignada</th>
                                                    <th>Bloque Orden</th>
                                                    <th>Estado de orden</th>
                                                    <th>Comuna</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 87
        $context["No"] = 1;
        // line 88
        echo "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_tbltecnicos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            if ((false != ($context["db_tbltecnicos"] ?? null))) {
                // line 89
                echo "                                                    <tr>
                                                        <td>";
                // line 90
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "codigo", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "nombre", array()), "html", null, true);
                echo "</td>
                                                        <!-- <td>
                                                            <select id=\"select-comuna_tecnico\" name='select-comuna_tecnico'>
                                                            <option value=\"TODAS\">TODAS</option>
                                                            ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["db_comunas"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                    if ((false != ($context["db_comunas"] ?? null))) {
                        // line 97
                        echo "                                                                <option value=\"";
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
                // line 99
                echo "                                                            </select>
                                                        </td> -->
                                                        ";
                // line 101
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()) == false)) {
                    // line 102
                    echo "                                                            <td>Sin orden asignada</td>
                                                        ";
                } else {
                    // line 104
                    echo "                                                            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                    echo "</td>
                                                        ";
                }
                // line 106
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "bloque", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "desc_estado_orden", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "comuna", array()), "html", null, true);
                echo "</td>
                                                    </tr>
                                                    ";
                // line 110
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 111
                echo "                                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane active\" id=\"tab_2-2\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body resposible\">
                                <div class=\"col-md-12\">
                                    <form id=\"formseguimiento\" name=\"formseguimiento\" method=\"post\">
                                        <table class=\"table table-bordered table-responsive\" id=\"tblseguimiento\" name=\"tblseguimiento\">
                                            <thead>
                                                <tr>
                                                    <th>Tipo Orden</th>
                                                    <th>N° Orden</th>
                                                    <th>Rut Cliente</th>
                                                    <th>Fecha compromiso</th>
                                                    <th>Bloque</th>
                                                    <th>Comuna</th>
                                                    <th>Tecnico Asignado</th>
                                                    <th>Estado de Orden</th>
                                                    <th>OPERACIONES</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_ordenes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            if ((false != ($context["db_ordenes"] ?? null))) {
                // line 140
                echo "                                                    <tr>
                                                        <td>";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "desctipoorden", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "n_orden", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "rut_cliente", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "fecha_compromiso", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "bloque", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "comuna", array()), "html", null, true);
                echo "</td>
                                                        <td>
                                                            <select id=\"id-";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "id_orden", array()), "html", null, true);
                echo "\" name='select_tecnicos' onchange=\"asignar('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "id_orden", array()), "html", null, true);
                echo "')\">
                                                                ";
                // line 149
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "codigo_tecnico", array()) == "0")) {
                    // line 150
                    echo "                                                                    <option value=\"0\" selected=\"selected\">Sin Asignar</option>
                                                                ";
                }
                // line 152
                echo "                                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["db_tecnicos"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                    if ((false != ($context["db_tecnicos"] ?? null))) {
                        // line 153
                        echo "                                                                    ";
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "codigo_tecnico", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_tecnico", array()))) {
                            // line 154
                            echo "                                                                        <option value='";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_tecnico", array()), "html", null, true);
                            echo "' selected=\"selected\">    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "nombre", array()), "html", null, true);
                            echo "</option>
                                                                    ";
                        } else {
                            // line 156
                            echo "                                                                        <option value='";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_tecnico", array()), "html", null, true);
                            echo "'>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "nombre", array()), "html", null, true);
                            echo "</option>
                                                                    ";
                        }
                        // line 158
                        echo "                                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "                                                            </select>
                                                        </td>
                                                        <td>
                                                            ";
                // line 162
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "codigo_tecnico", array()) == "0")) {
                    // line 163
                    echo "                                                                <select id=\"idasignar-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "id_orden", array()), "html", null, true);
                    echo "\" name=\"select_estados\" disabled onchange=\"asignarestado('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "id_orden", array()), "html", null, true);
                    echo "')\">
                                                            ";
                } else {
                    // line 165
                    echo "                                                                <select id=\"idasignar-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "id_orden", array()), "html", null, true);
                    echo "\" name=\"select_estados\" onchange=\"asignarestado('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "id_orden", array()), "html", null, true);
                    echo "')\">
                                                            ";
                }
                // line 167
                echo "
                                                            ";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["db_estados"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                    if ((false != ($context["db_estados"] ?? null))) {
                        // line 169
                        echo "                                                                ";
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "estado_orden", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "id_estado", array()))) {
                            // line 170
                            echo "                                                                    <option value='";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "id_estado", array()), "html", null, true);
                            echo "'  selected=\"selected\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "descripcion", array()), "html", null, true);
                            echo "</option>
                                                                ";
                        } else {
                            // line 172
                            echo "                                                                    <option value='";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "id_estado", array()), "html", null, true);
                            echo "'>";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "descripcion", array()), "html", null, true);
                            echo "</option>
                                                                ";
                        }
                        // line 174
                        echo "                                                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                echo "                                                            </select>
                                                        </td>
                                                        <td>X</td>
                                                    </tr>
                                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
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

    // line 194
    public function block_appScript($context, array $blocks = array())
    {
        // line 195
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
        return array (  462 => 195,  459 => 194,  442 => 180,  431 => 175,  424 => 174,  416 => 172,  408 => 170,  405 => 169,  400 => 168,  397 => 167,  389 => 165,  381 => 163,  379 => 162,  374 => 159,  367 => 158,  359 => 156,  351 => 154,  348 => 153,  342 => 152,  338 => 150,  336 => 149,  330 => 148,  325 => 146,  321 => 145,  317 => 144,  313 => 143,  309 => 142,  305 => 141,  302 => 140,  297 => 139,  268 => 112,  261 => 111,  259 => 110,  254 => 108,  250 => 107,  245 => 106,  239 => 104,  235 => 102,  233 => 101,  229 => 99,  217 => 97,  212 => 96,  205 => 92,  201 => 91,  197 => 90,  194 => 89,  188 => 88,  186 => 87,  153 => 58,  146 => 57,  142 => 55,  139 => 54,  132 => 53,  129 => 52,  126 => 51,  123 => 50,  121 => 49,  116 => 48,  113 => 47,  110 => 46,  104 => 45,  101 => 44,  95 => 43,  93 => 42,  87 => 38,  77 => 36,  72 => 35,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "despacho/seguimiento.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\seguimiento.twig");
    }
}
