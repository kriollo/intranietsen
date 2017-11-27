<?php

/* rrhh/listar_trabajadores.twig */
class __TwigTemplate_36b387b3e4f3c16af9d0fce244a7dcd31fc19ff1a41c44c7e32ed99c6d8e5d08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "rrhh/listar_trabajadores.twig", 1);
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
            RRHH
            <small>Listado de Trabajadores</small>

          <a class=\"btn btn-primary btn-social pull-right\" href=\"rrhh/nuevo_trabajador\" title=\"Agregar\" data-toggle=\"tooltip\">
            <i class=\"fa fa-plus\"></i> Agregar Trabajador
          </a>
        </h1>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <div class=\"box-body\">
            <table id=\"dataTables1\" class=\"table table-bordered\">
              <thead>
                <tr>
                  <th>No</th>
                \t<th>Rut</th>
                \t<th>Nombres</th>
                  <th>Fono</th>
                  <th>Cargo</th>
                  <th>Area</th>

                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 37
        $context["No"] = 1;
        // line 38
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["personal_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["personal_db"] ?? null))) {
                // line 39
                echo "                  <tr>
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "rut", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombres", array())), "html", null, true);
                echo "</td>
                    <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "fono", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "desc_cargo", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "desc_area", array()), "html", null, true);
                echo "</td>
                    
                    <td class='center' width='80'>
                      <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-success btn-sm' href=\"rrhh/editar_trabajadores/";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_personal", array()), "html", null, true);
                echo "\">
                      <i class='glyphicon glyphicon-edit'></i>
                      </a>

                      ";
                // line 52
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == 0)) {
                    // line 53
                    echo "                          <a data-toggle='tooltip' data-placement='top' title='Bloqueado' class='btn btn-warning btn-sm' href=\"rrhh/estado_trabajador/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_personal", array()), "html", null, true);
                    echo "\">
                          <i class='glyphicon glyphicon-off'></i>
                          </a>

                      ";
                } else {
                    // line 58
                    echo "                          <a data-toggle='tooltip' data-placement='top' title='Activo' class='btn btn-danger btn-sm' href=\"rrhh/estado_trabajador/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_personal", array()), "html", null, true);
                    echo "\">
                          <i class='glyphicon glyphicon-check'></i>
                          </a>

                      ";
                }
                // line 63
                echo "
                    </td>
                  </tr>
                  ";
                // line 66
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 67
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "              </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

";
    }

    // line 78
    public function block_appScript($context, array $blocks = array())
    {
        // line 79
        echo "    <!-- DATA TABES SCRIPT -->
    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

    <script src=\"views/app/js/rrhh/rrhh.js\"></script>

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
        return "rrhh/listar_trabajadores.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 79,  165 => 78,  152 => 68,  145 => 67,  143 => 66,  138 => 63,  129 => 58,  120 => 53,  118 => 52,  111 => 48,  105 => 45,  101 => 44,  97 => 43,  93 => 42,  89 => 41,  85 => 40,  82 => 39,  76 => 38,  74 => 37,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "rrhh/listar_trabajadores.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\rrhh\\listar_trabajadores.twig");
    }
}
