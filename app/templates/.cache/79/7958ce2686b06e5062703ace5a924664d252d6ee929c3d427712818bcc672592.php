<?php

/* confirmacion/motivocall/listar_motivocall.twig */
class __TwigTemplate_1c7ac93652e50320eb3fd37caa9dadd9e8023c340a2c592e7629b3b1d8522e72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/motivocall/listar_motivocall.twig", 1);
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
            Confirmación
            <small>Listado de Motivos de llamado</small>

          <a class=\"btn btn-primary btn-social pull-right\" href=\"confirmacion/nuevo_motivocall\" title=\"Agregar\" data-toggle=\"tooltip\">
            <i class=\"fa fa-plus\"></i> Agregar
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
                  <th>Motivo de llamado</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 32
        $context["No"] = 1;
        // line 33
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["motivocall_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["motivocall_db"] ?? null))) {
                // line 34
                echo "                  <tr>
                    <td>";
                // line 35
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                    <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "motivo", array()), "html", null, true);
                echo "</td>
                    <td class='center' width='80'>
                      <a data-toggle='tooltip' data-placement='top' title='Modificar' class='btn btn-success btn-sm' href=\"confirmacion/editar_motivocall/";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_motivo", array()), "html", null, true);
                echo "\">
                      <i class='glyphicon glyphicon-edit'></i>
                      </a>

                      ";
                // line 42
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == 0)) {
                    // line 43
                    echo "                          <a data-toggle='tooltip' data-placement='top' title='Bloqueado' class='btn btn-warning btn-sm' href=\"confirmacion/estado_motivocall/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_motivo", array()), "html", null, true);
                    echo "\">
                          <i class='glyphicon glyphicon-off'></i>
                          </a>
                      ";
                } else {
                    // line 47
                    echo "                          <a data-toggle='tooltip' data-placement='top' title='Activo' class='btn btn-danger btn-sm' href=\"confirmacion/estado_motivocall/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_motivo", array()), "html", null, true);
                    echo "\">
                          <i class='glyphicon glyphicon-check'></i>
                          </a>
                      ";
                }
                // line 51
                echo "
                    </td>
                  </tr>
                  ";
                // line 54
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 55
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
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

    // line 66
    public function block_appScript($context, array $blocks = array())
    {
        // line 67
        echo "    <!-- DATA TABES SCRIPT -->
    <script src=\"views/app/template/datatables/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <script src=\"views/app/template/datatables/dataTables.bootstrap.min.js\" type=\"text/javascript\"></script>

    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>

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
                \"autoWidth\": true,
                \"scrollX\": true
            });
    </script>

";
    }

    public function getTemplateName()
    {
        return "confirmacion/motivocall/listar_motivocall.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 67,  141 => 66,  128 => 56,  121 => 55,  119 => 54,  114 => 51,  106 => 47,  98 => 43,  96 => 42,  89 => 38,  84 => 36,  80 => 35,  77 => 34,  71 => 33,  69 => 32,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/motivocall/listar_motivocall.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\motivocall\\listar_motivocall.twig");
    }
}
