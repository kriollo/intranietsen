<?php

/* cierreseguro/seguimiento/seguimiento_user.twig */
class __TwigTemplate_96d4ec0447b20f5d204bf75dfc32d6f9dcb132a83666695d64dc5c4a7012c730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "cierreseguro/seguimiento/seguimiento_user.twig", 1);
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
                Cierre Seguro
                <small>Cierre Seguro</small>
            </h1>
        </section>
    </div>
</div>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <form id=\"formcierre\" name=\"formcierre\">
                        <table id=\"datacierre\" name=\"datacierre\" class=\"table table-bordered table-responsive\">
                            <thead>
                                    <th>N_ORDEN</th>
                                    <th>RUT_CLIENTE</th>
                                    <th>COMUNA</th>
                                    <th>ACTIVIDAD</th>
                                    <th>TECNICO</th>
                                    <th>DESPACHADOR</th>
                                    <th>TELEFONO</th>
                                    <th Width=\"100\">ultimo contacto</th>
                                    <th Width=\"100\">OPERACION</th>
                            </thead>
                            <tbody>
                                ";
        // line 36
        $context["No"] = 1;
        // line 37
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_cierre"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["db_cierre"] ?? null))) {
                // line 38
                echo "                                    <tr>
                                        <td><input size=\"12\" type=\"text\" id=\"n_orden-";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()), "html", null, true);
                echo "\" name=\"n_orden-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "n_orden", array()), "html", null, true);
                echo "\" onchange=\"update_datos_orden('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()), "html", null, true);
                echo "');\"></td>
                                        <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "rut_cliente", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "comuna", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "actividad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "cod_tecnico", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "despachador", array()), "html", null, true);
                echo "</td>
                                        <td><input size=\"20\" type=\"text\" id=\"telefono-";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()), "html", null, true);
                echo "\" name=\"telefono-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "telefono", array()), "html", null, true);
                echo "\" onchange=\"update_datos_orden('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()), "html", null, true);
                echo "');\"></td>
                                        <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "ultimo_contacto", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <a data-toggle='tooltip' data-placement='top' id='btncierreaprobado' name='btncierreaprobado' title='Cierre Aprobado' class='btn btn-success btn-sm' onclick=\"select_cerrar_orden('";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()), "html", null, true);
                echo "')\">
                                                <i class='glyphicon glyphicon-check'></i>
                                            </a>&nbsp;
                                            <a data-toggle='tooltip' data-placement='top' id='btncierresiguiente' name='btncierresiguiente' title='Volver a Llamar' class='btn btn-primary btn-sm' onclick=\"select_volver_llamar('";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()), "html", null, true);
                echo "')\">
                                                <i class='glyphicon glyphicon-fast-forward'></i>
                                            </a>&nbsp;
                                            <a data-toggle='tooltip' data-placement='top' id='btncierreserroneo' name='btncierreerroneo' title='Cierre Rechazado' class='btn btn-danger btn-sm' onclick=\"select_orden_rechazada('";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id", array()), "html", null, true);
                echo "')\">
                                                <i class='glyphicon glyphicon-remove'></i>
                                            </a>
                                        </td>
                                    </tr>
                                    ";
                // line 59
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 60
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
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

    // line 70
    public function block_appScript($context, array $blocks = array())
    {
        // line 71
        echo "
  <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
  <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

  <script src=\"views/app/js/cierreseguro/cierreseguro.js\"></script>

    <script>
        \$(\"#datacierre\").dataTable({
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
            \"autoWidth\": false,
            \"bSort\": false,
            \"scrollX\": true
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "cierreseguro/seguimiento/seguimiento_user.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 71,  170 => 70,  158 => 61,  151 => 60,  149 => 59,  141 => 54,  135 => 51,  129 => 48,  124 => 46,  114 => 45,  110 => 44,  106 => 43,  102 => 42,  98 => 41,  94 => 40,  84 => 39,  81 => 38,  75 => 37,  73 => 36,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "cierreseguro/seguimiento/seguimiento_user.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\cierreseguro\\seguimiento\\seguimiento_user.twig");
    }
}
