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
                                                    <th>Codigo</th>
                                                    <th>Nombre</th>
                                                    <th>Orden asignada</th>
                                                    <th>Bloque Orden</th>
                                                    <th>Estado de orden</th>
                                                    <th>Comuna</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_tbltecnicos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            if ((false != ($context["db_tbltecnicos"] ?? null))) {
                // line 86
                echo "                                                    <tr>
                                                        <td>";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "codigo", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "nombre", array()), "html", null, true);
                echo "</td>
                                                        ";
                // line 89
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()) == false)) {
                    // line 90
                    echo "                                                            <td>Sin orden asignada</td>
                                                        ";
                } else {
                    // line 92
                    echo "                                                            <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                    echo "</td>
                                                        ";
                }
                // line 94
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "bloque", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "estado_orden", array()), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "comuna", array()), "html", null, true);
                echo "</td>
                                                    </tr>
                                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane active\" id=\"tab_2-2\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body\">
                                <form id=\"formseguimiento\" name=\"formseguimiento\" method=\"post\">
                                    <table class=\"table table-bordered\" id=\"tblseguimiento\" name=\"tblseguimiento\">
                                        <thead>
                                            <tr>
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
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_ordenes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            if ((false != ($context["db_ordenes"] ?? null))) {
                // line 125
                echo "                                                <tr>
                                                    <td>";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "n_orden", array()), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "rut_cliente", array()), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "fecha_compromiso", array()), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "bloque", array()), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "comuna", array()), "html", null, true);
                echo "</td>
                                                    <td>
                                                        <select id=\"id-";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "id_orden", array()), "html", null, true);
                echo "\" name='select_tecnicos' onchange=\"asignar('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "id_orden", array()), "html", null, true);
                echo "')\">
                                                            ";
                // line 133
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "codigo_tecnico", array()) == 0)) {
                    // line 134
                    echo "                                                                <option value=\"0\">Sin Asignar</option>
                                                            ";
                } else {
                    // line 136
                    echo "                                                                <option>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "nombre", array()), "html", null, true);
                    echo "</option>
                                                            ";
                }
                // line 138
                echo "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["db_tecnicos"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                    if ((false != ($context["db_tecnicos"] ?? null))) {
                        // line 139
                        echo "                                                                <option value='";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_tecnico", array()), "html", null, true);
                        echo "'>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "nombre", array()), "html", null, true);
                        echo "</option>
                                                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select id=\"idasignar-";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "id_orden", array()), "html", null, true);
                echo "\" name=\"select_estados\" disabled='true' onchange=\"asignarestado('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "id_orden", array()), "html", null, true);
                echo "')\">
                                                            ";
                // line 145
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "estado_orden", array()) == 0)) {
                    // line 146
                    echo "                                                                <option value=\"0\">Sin Asignar</option>
                                                            ";
                } else {
                    // line 148
                    echo "                                                                <option>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["o"], "desc_estado_orden", array()), "html", null, true);
                    echo "</option>
                                                            ";
                }
                // line 150
                echo "                                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["db_estados"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                    if ((false != ($context["db_estados"] ?? null))) {
                        // line 151
                        echo "                                                                <option value='";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "id_estado", array()), "html", null, true);
                        echo "'>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "descripcion", array()), "html", null, true);
                        echo "</option>
                                                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "                                                        </select>
                                                    </td>
                                                    <td>X</td>
                                                </tr>
                                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                                        </tbody>
                                    </table>
                                </form>
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

    // line 171
    public function block_appScript($context, array $blocks = array())
    {
        // line 172
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
      \"columnDefs\": [ { orderable: false, targets: [0] }, { visible: true, targets: [15,20,25] } ]
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
        return array (  394 => 172,  391 => 171,  375 => 158,  364 => 153,  352 => 151,  346 => 150,  340 => 148,  336 => 146,  334 => 145,  328 => 144,  323 => 141,  311 => 139,  305 => 138,  299 => 136,  295 => 134,  293 => 133,  287 => 132,  282 => 130,  278 => 129,  274 => 128,  270 => 127,  266 => 126,  263 => 125,  258 => 124,  231 => 99,  221 => 96,  217 => 95,  212 => 94,  206 => 92,  202 => 90,  200 => 89,  196 => 88,  192 => 87,  189 => 86,  184 => 85,  153 => 58,  146 => 57,  142 => 55,  139 => 54,  132 => 53,  129 => 52,  126 => 51,  123 => 50,  121 => 49,  116 => 48,  113 => 47,  110 => 46,  104 => 45,  101 => 44,  95 => 43,  93 => 42,  87 => 38,  77 => 36,  72 => 35,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "despacho/seguimiento.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\seguimiento.twig");
    }
}
