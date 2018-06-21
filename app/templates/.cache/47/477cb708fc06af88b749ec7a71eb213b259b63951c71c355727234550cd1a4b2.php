<?php

/* sinmoradores/distribucion/distribucion.twig */
class __TwigTemplate_743c9f0036be0c32f911e326ed26d42f61c9ae57d78afae57b736b07b492c449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "sinmoradores/distribucion/distribucion.twig", 1);
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

    public function block_appStylos($context, array $blocks = array())
    {
        // line 2
        echo "<link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\"> ";
    }

    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "<section class=\"content-header\">
    <h1>
        Sin Moradores
        <small>Distribuir Ordenes</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li>
            <a href=\"#\">
                <i class=\"fa fa-home\"></i> Home</a>
        </li>
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
                echo "                            <tr>
                                <td>
                                    <label>
                                        ";
                // line 37
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "checked", array()) != "")) {
                    // line 38
                    echo "                                        <input type='checkbox' id='check-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "' onchange=\"des_marcar_ejecutivo('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "')\" checked> ";
                } else {
                    // line 39
                    echo "                                        <input type='checkbox' id='check-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "' onchange=\"des_marcar_ejecutivo('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "')\"> ";
                }
                echo " ";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "
                                    </label>
                                </td>
                                <td>
                                    <div id='div-";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()), "html", null, true);
                echo "</div>
                                </td>
                                <td>
                                    ";
                // line 46
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()) > 0)) {
                    // line 47
                    echo "                                    <a class=\"btn btn-warning btn-social\" title=\"Archivo Cargado Temporal\" data-toggle=\"tooltip\" onclick=\"quitar_Ordenes_ejecutivos('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                    echo "');\">
                                        <i class=\"fa fa-angle-double-right\"></i>
                                        Quitar Ordenes
                                    </a>
                                    ";
                }
                // line 52
                echo "                                </td>
                            </tr>
                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        </tbody>
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
                                <td>Sin Ejecutivo Asignado</td>
                                <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["getQ_OrdenesSinDistribucion"] ?? null), "cantidad", array()), "html", null, true);
        echo "</td>
                                <td>
                                    <div id='div-distribuyePROD'>
                                        ";
        // line 81
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["getQ_OrdenesSinDistribucion"] ?? null), "cantidad", array()) > 0)) {
            // line 82
            echo "                                        <a class=\"btn btn-success btn-social\" title=\"Sin Ejecutivo Asignado\" data-toggle=\"tooltip\" onclick=\"distribuir_Ordenes();\">
                                            <i class=\"fa fa-angle-double-left\"></i>
                                            Distribuir
                                        </a>
                                        <a class=\"btn btn-success btn-warning\" title=\"Ver Datos Cargados en Temporal\" onclick=\"cerrar_ordenes_sin_asignar();\">
                                            <i class=\"fa fa-check\"></i>
                                            Cerrar Ordenes
                                        </a>
                                        ";
        }
        // line 91
        echo "                                    </div>
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
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
            </div>
        </div>
    </div>
</div>





";
    }

    // line 117
    public function block_appScript($context, array $blocks = array())
    {
        // line 118
        echo "<script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
<script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

<script src=\"views/app/js/sinmoradores/sinmoradores.js\"></script>
<script>
    \$(\"#table_datos_tmp\").dataTable({
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
                \"previous\": \"Anterior\",
            }
        },
        \"autoWidth\": true,
        \"lengthMenu\": [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, \"Todos\"]
        ],
        \"iDisplayLength\": 5
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "sinmoradores/distribucion/distribucion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 118,  205 => 117,  175 => 91,  164 => 82,  162 => 81,  156 => 78,  131 => 55,  122 => 52,  113 => 47,  111 => 46,  103 => 43,  89 => 39,  82 => 38,  80 => 37,  75 => 34,  70 => 33,  38 => 3,  32 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sinmoradores/distribucion/distribucion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\sinmoradores\\distribucion\\distribucion.twig");
    }
}
