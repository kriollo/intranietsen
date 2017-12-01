<?php

/* rrhh/cargos/listarcargo.twig */
class __TwigTemplate_359c6e35dbfbc2cc902e5074b9286256cd8542971b4adbe8fbc3b92a4be20af1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/cargos/listarcargo.twig", 1);
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
        echo "    <section class=\"content-header\">
        <h1>
            RRHH
            <small>Listado de Cargos</small>

          <a class=\"btn btn-primary btn-social pull-right\" id=\"agregarmodalcargo\" namespace=\"nuvagregar\" title=\"Agregar\" data-toggle=\"modal\" data-target=\"#nuevocargo";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["l"] ?? null), "id_cargo", array()), "html", null, true);
        echo "\">
            <i class=\"fa fa-plus\"></i> Agregar Cargo
          </a>
        </h1>
    </section>
   <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-body\">
                        <table id=\"dataTables1\" class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    <th>Codigo</th>
                                    <th>Descripción</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_cargos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            if ((false != ($context["db_cargos"] ?? null))) {
                // line 32
                echo "                                    <tr>
                                        <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "rownum", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "descripcion", array()), "html", null, true);
                echo "</td>
                                        <td><a  id=\"agregarmodalcargo\" namespace=\"nuvagregar\" title=\"Modificar\" data-toggle=\"modal\"  class='btn btn-warning btn-sm' data-target=\"#modificarcargo\" onclick=\"cargadatos('";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "id_cargo", array()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "descripcion", array()), "html", null, true);
                echo "')\">
                                        <i class='glyphicon glyphicon-edit'></i></a>
                                        <td>
                                    </tr>
                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        // line 47
        $this->loadTemplate("rrhh/cargos/nuevocargo", "rrhh/cargos/listarcargo.twig", 47)->display($context);
        // line 48
        $this->loadTemplate("rrhh/cargos/modificarcargo", "rrhh/cargos/listarcargo.twig", 48)->display($context);
    }

    // line 50
    public function block_appScript($context, array $blocks = array())
    {
        // line 51
        echo "    <!-- DATA TABES SCRIPT -->
    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>
    
    <script src=\"views/app/js/rrhh/cargo.js\"></script>
    
    <script>
        \$(\"#dataTables1\").dataTable({
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
                \"autoWidth\": true
            });
    </script>
    
";
    }

    public function getTemplateName()
    {
        return "rrhh/cargos/listarcargo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 51,  115 => 50,  111 => 48,  109 => 47,  100 => 40,  86 => 35,  82 => 34,  78 => 33,  75 => 32,  70 => 31,  48 => 12,  41 => 7,  38 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/cargos/listarcargo.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\cargos\\listarcargo.twig");
    }
}
