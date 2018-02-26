<?php

/* despacho/cierre/listar_ordenes.twig */
class __TwigTemplate_18ee37c74c6b1d256f412025c06ca9c6162397cb0f72b8d252026229869e1468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "despacho/cierre/listar_ordenes.twig", 1);
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
        Cierre Asegurado
        <small>Listado de Ordenes en estado de Cierre</small>
    </h1>
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
                                    <th>Ejecutivo</th>
                                    <th>Rut Cliente</th>
                                    <th>Fecha Compromiso</th>
                                    <th>Bloque</th>
                                    <th>Motivo</th>
                                    <th>Comuna</th>
                                    <th>Actividad</th>
                                    <th>Observacion</th>
                                    <th>Funciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ordenes_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            if ((false != ($context["ordenes_db"] ?? null))) {
                // line 35
                echo "                                    <tr>
                                        <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_ejecutivo_cierre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "rut_cliente", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "fecha_compromiso", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "bloque", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "motivo", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "comuna", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "actividad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "observacion", array()), "html", null, true);
                echo "</td>
                                        <td class='pull-center'>
                                          ";
                // line 46
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_ejecutivo_cierre", array()) == 0)) {
                    // line 47
                    echo "                                          <a data-toggle='tooltip' data-placement='top' name=\"btnasigna\" title='Tomar cierre de OT' class='btn btn-success btn-sm' href=\"despacho/tomar_orden/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                    echo "\">
                                              <i class='glyphicon glyphicon-send'></i>
                                          </a>
                                          ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 50
$context["t"], "id_ejecutivo_cierre", array()) == ($context["id_user"] ?? null))) {
                    // line 51
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "cierre_seguro", array()) == 0)) {
                        // line 52
                        echo "                                            <a data-toggle='tooltip' data-placement='top' name=\"btncierre\" title='Cierre Asegurado' class='btn btn-warning btn-sm' onclick=\"cierre_asegurado(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                        echo ")\">
                                                <i class='glyphicon glyphicon-earphone'></i>
                                            </a>
                                            ";
                    } else {
                        // line 56
                        echo "                                            <a data-toggle='tooltip' data-placement='top' name=\"btncierre\" title='Cierre Asegurado' class='btn btn-success btn-sm' disabled>
                                                <i class='glyphicon glyphicon-earphone'></i>
                                            </a>
                                          ";
                    }
                    // line 60
                    echo "
                                            ";
                    // line 61
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "certificacion", array()) == 0)) {
                        // line 62
                        echo "                                          <a data-toggle='tooltip' data-placement='top' id=\"btncertifica\" name=\"btncertifica\" title='Certificacion' class='btn btn-warning btn-sm' onclick=\"subir_certificacion(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                        echo ")\">
                                              <i class='glyphicon glyphicon-saved'></i>
                                          </a>
                                          ";
                    } else {
                        // line 66
                        echo "                                          <a data-toggle='tooltip' data-placement='top' id=\"btncertifica\" name=\"btncertifica\" title='Certificacion' class='btn btn-success btn-sm' disabled>
                                              <i class='glyphicon glyphicon-saved'></i>
                                          </a>
                                          ";
                    }
                    // line 70
                    echo "                                          ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "speed_test", array()) == 0)) {
                        // line 71
                        echo "                                        <a data-toggle='tooltip' data-placement='top' id=\"btnspeedtest\" name=\"btnspeedtest\" title='Speed Test' class='btn btn-warning btn-sm' onclick=\"subir_st(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                        echo ")\">
                                            <i class='glyphicon glyphicon-open'></i>
                                        </a>
                                        ";
                    } else {
                        // line 75
                        echo "                                          <a data-toggle='tooltip' data-placement='top' id=\"btnspeedtest\" name=\"btnspeedtest\" title='Speed Test' class='btn btn-success btn-sm' onclick=\"mostrar_st(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                        echo ");\">
                                            <i class='glyphicon glyphicon-open'></i>
                                        </a>
                                        ";
                    }
                    // line 79
                    echo "                                            <!-- ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "speed_test", array()) == 0)) {
                        // line 80
                        echo "                                          <a data-toggle='tooltip' data-placement='top' id=\"btnspeedtest\" name=\"btnspeedtest\" title='Speed Test' class='btn btn-warning btn-sm' onclick=\"subir_st(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                        echo ")\">
                                              <i class='glyphicon glyphicon-open'></i>
                                          </a>
                                          ";
                    } else {
                        // line 84
                        echo "                                            <a data-toggle='tooltip' data-placement='top' id=\"btnspeedtest\" name=\"btnspeedtest\" title='Speed Test' class='btn btn-success btn-sm' disabled>
                                              <i class='glyphicon glyphicon-open'></i>
                                          </a>
                                          ";
                    }
                    // line 87
                    echo " -->

                                          <a data-placement='top' name=\"btnfinalizar\" id=\"btnfinalizar\" title=\"Finalizar Orden\" class='btn btn-danger btn-sm' onclick=\"seguro(";
                    // line 89
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                    echo ");\">
                                              <i class='glyphicon glyphicon-certificate'></i>
                                          </a>
                                        ";
                }
                // line 93
                echo "                                        </td>
                                    </tr>
                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
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

    // line 106
    public function block_appScript($context, array $blocks = array())
    {
        // line 107
        echo "
  <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
  <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

  <script src=\"views/app/js/despacho/cierre.js\"></script>

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
            \"autoWidth\": true,
            \"scrollX\": true
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "despacho/cierre/listar_ordenes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 107,  232 => 106,  219 => 96,  210 => 93,  203 => 89,  199 => 87,  193 => 84,  185 => 80,  182 => 79,  174 => 75,  166 => 71,  163 => 70,  157 => 66,  149 => 62,  147 => 61,  144 => 60,  138 => 56,  130 => 52,  127 => 51,  125 => 50,  118 => 47,  116 => 46,  111 => 44,  107 => 43,  103 => 42,  99 => 41,  95 => 40,  91 => 39,  87 => 38,  83 => 37,  79 => 36,  76 => 35,  71 => 34,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "despacho/cierre/listar_ordenes.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\cierre\\listar_ordenes.twig");
    }
}
