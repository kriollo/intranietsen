<?php

/* cierreseguro/distribucion/distribucion.twig */
class __TwigTemplate_4e515969dc38a9e0cf566b5925f5900dcd0c450806d035b8e2d1d436654551f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "cierreseguro/distribucion/distribucion.twig", 1);
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
            Cierre Seguro
            <small>Distribuir Ordenes</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li class=\"active\">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Seleccione a Ejecutiv@ a Distribuir</h3>
                    </div>
                    <div class=\"box-body\">

                        <table class=\"table table-bordered\">
                            <thead>
                                <th>Ejecutiv@</th>
                                <th>Cantidad Disponible</th>
                            </thead>
                            <tbody>
                                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["getEjecutivos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["getEjecutivos"] ?? null))) {
                // line 34
                echo "                                    <tr>
                                        <td><label>
                                            ";
                // line 36
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "checked", array()) != "")) {
                    // line 37
                    echo "                                                <input type='checkbox' id='check-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "' onchange=\"des_marcar_ejecutivo('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "')\" checked>
                                            ";
                } else {
                    // line 39
                    echo "                                                <input type='checkbox' id='check-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "' onchange=\"des_marcar_ejecutivo('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "')\">
                                            ";
                }
                // line 41
                echo "                                            ";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "
                                            </label>
                                        </td>
                                        <td><div id='div-";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()), "html", null, true);
                echo "</div></td>
                                        <td>
                                            ";
                // line 46
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()) > 0)) {
                    // line 47
                    echo "                                                <a class=\"btn btn-warning btn-social\" title=\"Archivo Cargado Temporal\" data-toggle=\"tooltip\" onclick=\"quitar_Ordenes_ejecutivos('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "');\">
                                                <i class=\"fa fa-angle-double-right\"></i>
                                                Quitar Ordenes
                                                </a>
                                            ";
                }
                // line 52
                echo "                                        </td>
                                    </tr>
                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Ordenes para Distribuir</h3>
                    </div>
                    <div class=\"box-body\">

                        <table class=\"table table-bordered\">
                            <thead>
                                <th>Origen</th>
                                <th>Cantidad</th>
                                <th>Operacion</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Archivo Cargado Temporal</td>
                                    <td>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["getQ_OrdenesSinDistribucionTMP"] ?? null), "cantidad", array()), "html", null, true);
        echo "</td>
                                    <td>
                                        <div id='div-distribuyeTMP'>
                                            ";
        // line 80
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["getQ_OrdenesSinDistribucionTMP"] ?? null), "cantidad", array()) > 0)) {
            // line 81
            echo "                                                <a class=\"btn btn-success btn-social\" title=\"Archivo Cargado Temporal\" data-toggle=\"tooltip\" onclick=\"Distribuir_Ordenes('TMP')\">
                                                <i class=\"fa fa-angle-double-left\"></i>
                                                Distribuir
                                                </a>
                                                <a href=\"#\" class=\"btn btn-success btn-social\" title=\"Ver Datos Cargados en Temporal\" data-toggle=\"modal\" data-target=\"#verDatosCargaTMP\" onclick=\"carga_modal_datos_tmp_ordenes();\">
                                                <i class=\"fa fa-eye\"></i>
                                                Ver Datos
                                                </a>
                                            ";
        }
        // line 90
        echo "                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sin Ejecutivo Asignado</td>
                                    <td>";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["getQ_OrdenesSinDistribucionPROD"] ?? null), "cantidad", array()), "html", null, true);
        echo "</td>
                                    <td>
                                        <div id='div-distribuyePROD'>
                                            ";
        // line 98
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["getQ_OrdenesSinDistribucionPROD"] ?? null), "cantidad", array()) > 0)) {
            // line 99
            echo "                                                <a class=\"btn btn-success btn-social\" title=\"Sin Ejecutivo Asignado\" data-toggle=\"tooltip\" onclick=\"Distribuir_Ordenes('PROD')\">
                                                <i class=\"fa fa-angle-double-left\"></i>
                                                Distribuir
                                                </a>
                                                <a class=\"btn btn-success btn-warning\" title=\"Ver Datos Cargados en Temporal\" onclick=\"cerrar_ordenes_sin_asignar();\">
                                                <i class=\"fa fa-check\"></i>
                                                Cerrar Ordenes
                                                </a>
                                            ";
        }
        // line 108
        echo "                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div id=\"verDatosCargaTMP\" class=\"modal fade\" role=\"dialog\">
      <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">Datos Cargados desde Archivo</h4>
          </div>
          <div class=\"modal-body\">
            <table id=\"table_datos_tmp\" class=\"table table-bordered\">
                <thead>
                    <th>rut_cliente</th>
                    <th>comuna</th>
                    <th>actividad</th>
                    <th>despachador</th>
                    <th>cod_tecnico</th>
                </thead>
                <tbody>

                </tbody>
            </table>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
          </div>
        </div>
      </div>
    </div>





";
    }

    // line 153
    public function block_appScript($context, array $blocks = array())
    {
        // line 154
        echo "    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

    <script src=\"views/app/js/cierreseguro/cierreseguro.js\"></script>
    <script>
        \$(\"#table_datos_tmp\").dataTable({
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
            \"autoWidth\": true,
            \"lengthMenu\": [[ 5, 10, 25, 50, -1], [ 5, 10, 25, 50, \"Todos\"]],
            \"iDisplayLength\": 5
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "cierreseguro/distribucion/distribucion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 154,  248 => 153,  200 => 108,  189 => 99,  187 => 98,  181 => 95,  174 => 90,  163 => 81,  161 => 80,  155 => 77,  131 => 55,  122 => 52,  113 => 47,  111 => 46,  104 => 44,  97 => 41,  89 => 39,  81 => 37,  79 => 36,  75 => 34,  70 => 33,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cierreseguro/distribucion/distribucion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\cierreseguro\\distribucion\\distribucion.twig");
    }
}
