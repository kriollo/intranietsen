<?php

/* sinmoradores/seguimiento/listar_all.twig */
class __TwigTemplate_e3f59ef0771000a6720b9b54697f8da0dcbce61d906d067f6b243cba10517694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "sinmoradores/seguimiento/listar_all.twig", 1);
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
        echo "<link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
<style media=\"screen\">
    .at {
        display: none;
    }
</style>
";
    }

    // line 8
    public function block_appBody($context, array $blocks = array())
    {
        // line 9
        echo "<section class=\"content-header\">
    <h1>
        Sin Moradores
        <small>Listado de Ordenes Registradas Sin Moradores</small>

        <a class=\"btn btn-primary btn-social pull-right\" href=\"sinmoradores/nuevaorden\" title=\"Agregar\" data-toggle=\"tooltip\">
            <i class=\"fa fa-plus\"></i> Agregar Nueva Orden
        </a>
    </h1>
</section>
<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                <div class=\"box-body\">
                    <table id=\"dataordenes\" name=\"dataordenes\" class=\"table table-bordered\">
                        <thead>
                            <tr>
                                <th>N°Orden</th>
                                <th>Rut Cliente</th>
                                <th>Bloque</th>
                                <th>Comuna</th>
                                <th>Tecnico</th>
                                <th>Fecha</th>
                                <th>id_user</th>
                                <th>Funciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["OT"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            if ((false != ($context["OT"] ?? null))) {
                // line 39
                echo "                            <tr>
                                <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_orden", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "rut", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "tecnico", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "bloque", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "comuna", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "fecha", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_user", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <a data-toggle='tooltip' data-placement='top' id=\"modificar\" name=\"modificar\" title='Modificar' class='btn btn-success btn-sm'
                                        href=\"sinmoradores/editar/";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_sinmoradores", array()), "html", null, true);
                echo "\">
                                        <i class='glyphicon glyphicon-edit'></i>
                                    </a>
                                    <a data-toggle='tooltip' data-placement='top' id=\"eliminar\" name=\"eliminar\" title='Eliminar' class='btn btn-danger btn-sm'
                                        href=\"sinmoradores/eliminar/";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "id_sinmoradores", array()), "html", null, true);
                echo "\">
                                        <i class='glyphicon glyphicon-remove'></i>
                                    </a>
                                </td>
                            </tr>
                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 66
    public function block_appScript($context, array $blocks = array())
    {
        // line 67
        echo "
<script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
<script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

<script src=\"views/app/js/sinmoradores/sinmoradores.js\"></script>

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
        \"scrollX\": true,
        \"bSort\": false
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "sinmoradores/seguimiento/listar_all.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 67,  145 => 66,  134 => 59,  121 => 53,  114 => 49,  108 => 46,  104 => 45,  100 => 44,  96 => 43,  92 => 42,  88 => 41,  84 => 40,  81 => 39,  76 => 38,  45 => 9,  42 => 8,  32 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sinmoradores/seguimiento/listar_all.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\sinmoradores\\seguimiento\\listar_all.twig");
    }
}
