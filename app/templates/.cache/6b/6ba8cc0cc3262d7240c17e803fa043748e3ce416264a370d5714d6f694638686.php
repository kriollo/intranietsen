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
                                    <th>Resultado</th>
                                    <th>Observacion</th>
                                    <th>Funciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ordenes_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            if ((false != ($context["ordenes_db"] ?? null))) {
                // line 36
                echo "                                    <tr>
                                        <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_ejecutivo_cierre", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "rut_cliente", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "fecha_compromiso", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "bloque", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "motivo", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "comuna", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "actividad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "desc_resultado", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "observacion", array()), "html", null, true);
                echo "</td>
                                        <td class='pull-center'>
                                          ";
                // line 48
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_ejecutivo_cierre", array()) == 0)) {
                    // line 49
                    echo "                                          <a data-toggle='tooltip' data-placement='top' name=\"btnasigna\" title='Tomar cierre de OT' class='btn btn-success btn-sm' href=\"despacho/tomar_orden/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                    echo "\">
                                              <i class='glyphicon glyphicon-send'></i>
                                          </a>
                                          ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 52
$context["t"], "id_ejecutivo_cierre", array()) == ($context["id_user"] ?? null))) {
                    // line 53
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "cierre_seguro", array()) == 0)) {
                        // line 54
                        echo "                                            <a data-toggle='tooltip' data-placement='top' name=\"btncierre\" title='Cierre Asegurado' class='btn btn-warning btn-sm' onclick=\"cierre_asegurado(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                        echo ")\">
                                                <i class='glyphicon glyphicon-earphone'></i>
                                            </a>
                                            ";
                    } else {
                        // line 58
                        echo "                                            <a data-toggle='tooltip' data-placement='top' name=\"btncierre\" title='Cierre Asegurado' class='btn btn-success btn-sm' disabled>
                                                <i class='glyphicon glyphicon-earphone'></i>
                                            </a>
                                          ";
                    }
                    // line 62
                    echo "
                                            ";
                    // line 63
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "certificacion", array()) == 0)) {
                        // line 64
                        echo "                                          <a data-toggle='tooltip' data-placement='top' id=\"btncertifica\" name=\"btncertifica\" title='Certificacion' class='btn btn-warning btn-sm' onclick=\"subir_certificacion(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                        echo ")\">
                                              <i class='glyphicon glyphicon-saved'></i>
                                          </a>
                                          ";
                    } else {
                        // line 68
                        echo "                                          <a data-toggle='tooltip' data-placement='top' id=\"btncertifica\" name=\"btncertifica\" title='Certificacion' class='btn btn-success btn-sm' disabled>
                                              <i class='glyphicon glyphicon-saved'></i>
                                          </a>
                                          ";
                    }
                    // line 72
                    echo "
                                            ";
                    // line 73
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "speed_test", array()) == 0)) {
                        // line 74
                        echo "                                          <a data-toggle='tooltip' data-placement='top' id=\"btnspeedtest\" name=\"btnspeedtest\" title='Speed Test' class='btn btn-warning btn-sm' onclick=\"subir_st(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                        echo ")\">
                                              <i class='glyphicon glyphicon-open'></i>
                                          </a>
                                          ";
                    } else {
                        // line 78
                        echo "                                            <a data-toggle='tooltip' data-placement='top' id=\"btnspeedtest\" name=\"btnspeedtest\" title='Speed Test' class='btn btn-success btn-sm' disabled>
                                              <i class='glyphicon glyphicon-open'></i>
                                          </a>
                                          ";
                    }
                    // line 82
                    echo "
                                          <a data-placement='top' name=\"btnfinalizar\" id=\"btnfinalizar\" title=\"Finalizar Orden\" class='btn btn-danger btn-sm' href=\"despacho/finalizar/";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "n_orden", array()), "html", null, true);
                    echo "\">
                                              <i class='glyphicon glyphicon-certificate'></i>
                                          </a>
                                        ";
                }
                // line 87
                echo "                                        </td>
                                    </tr>
                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
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

    // line 100
    public function block_appScript($context, array $blocks = array())
    {
        // line 101
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
            \"autoWidth\": true
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
        return array (  222 => 101,  219 => 100,  206 => 90,  197 => 87,  190 => 83,  187 => 82,  181 => 78,  173 => 74,  171 => 73,  168 => 72,  162 => 68,  154 => 64,  152 => 63,  149 => 62,  143 => 58,  135 => 54,  132 => 53,  130 => 52,  123 => 49,  121 => 48,  116 => 46,  112 => 45,  108 => 44,  104 => 43,  100 => 42,  96 => 41,  92 => 40,  88 => 39,  84 => 38,  80 => 37,  77 => 36,  72 => 35,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "despacho/cierre/listar_ordenes.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\cierre\\listar_ordenes.twig");
    }
}
