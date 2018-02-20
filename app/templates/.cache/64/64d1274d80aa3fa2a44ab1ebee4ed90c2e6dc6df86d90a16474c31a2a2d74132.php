<?php

/* despacho/supervisor/visor_supervisor.twig */
class __TwigTemplate_af67d33cd4063a009d8cefdc5b2ea242ef3f3bf55a86b7ed2e05c8adb79b5978 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "despacho/supervisor/visor_supervisor.twig", 1);
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
        <small>Visor de Supervisor</small>

        <input type=\"hidden\" name=\"idusuario\" id=\"idusuario\" value=\"\">

        <select id=\"ejecutivo_filtro\" name=\"ejecutivo_filtro\" style=\"width:20em;\" onchange=\"document.getElementById('idusuario').value=document.getElementById('ejecutivo_filtro').value;\">
            <option value=\"\">--</option>
            <option value=\"TODOS\">TODOS</option>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["personal_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["personal_db"] ?? null))) {
                // line 17
                echo "                <option class=\"text-center\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "id_user", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array()), "html", null, true);
                echo "</option>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </select>
        
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
                    <li ><a href=\"#tab_1-1\" data-toggle=\"tab\" onclick=\"actualizar_tablas_resumenes(document.getElementById('idusuario').value,'super');\">RESUMEN SEGUIMIENTO</a></li>
                    <li class=\"active\"><a href=\"#tab_2-2\" data-toggle=\"tab\">SEGUIMIENTO</a></li>
                    <li><a id=\"tab3\" href=\"#tab_3-3\" data-toggle=\"tab\" onclick=\"actualizar_tabla_ordenes(document.getElementById('idusuario').value,'*');\">VER ORDENES</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane\" id=\"tab_1-1\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"box\">
                                    <div class=\"box-header\">
                                        <h3 class=\"box-title\">Comunas y Ordenes Asignadas</h3>
                                    </div>
                                    <div id=\"div_orden_asignadas\" class=\"box-body\">

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
                                    <div id=\"div_contenedor_tecnicos_asignados\" class=\"box-body\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane active\" id=\"tab_2-2\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body resposible\">
                                <div class=\"col-md-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-1\">
                                            <label>Seleccione Comuna:
                                        </div></label>
                                        <div class=\"col-md-3\">
                                            <select class=\"form-control\" id=\"comuna_Seguimiento\" name=\"comuna_Seguimiento\" onchange=\"carga_ordenes_comuna_seguimiento();\">
                                                <option>--</option>
                                                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comunas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["db_comunas"] ?? null))) {
                // line 74
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "comuna", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "comuna", array()), "html", null, true);
                echo "</option>
                                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"row\">
                                        <form id=\"formseguimiento\" name=\"formseguimiento\" method=\"post\">
                                            <table class=\"table table-bordered table-responsive\" id=\"tblseguimiento\" name=\"tblseguimiento\">
                                                <thead>
                                                    <tr>
                                                        <th>Tipo Orden</th>
                                                        <th>N° Orden</th>
                                                        <th>Rut Cliente</th>
                                                        <th>Fecha compromiso</th>
                                                        <th>Bloque</th>
                                                        <th>Prioridad</th>
                                                        <th>Tecnico Asignado</th>
                                                        <th>Estado de Orden</th>
                                                        <th>OPERACIONES</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Carga Mediante archivo -->
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab_3-3\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body resposible\">
                                <div class=\"col-md-12\">
                                    <form id=\"formordenes\" name=\"formordenes\" method=\"post\">
                                        <table class=\"table table-bordered table-responsive\" id=\"tblordenes\" name=\"tblordenes\">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <th>Tipo Orden</th>
                                                <th>N° Orden</th>
                                                <th>Rut Cliente</th>
                                                <th>Fecha compromiso</th>
                                                <th>Bloque</th>
                                                <th>Comuna</th>
                                                <th>Tecnico Asignado</th>
                                                <th>Estado de Orden</th>
                                                <th>Prioridad</th>
                                                <th>OPERACIONES</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
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

    // line 142
    public function block_appScript($context, array $blocks = array())
    {
        // line 143
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
      \"bSort\": false
    });
  </script>
  <script>
    \$(\"#tblordenes\").dataTable({
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
      \"bSort\": false
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "despacho/supervisor/visor_supervisor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 143,  212 => 142,  143 => 76,  131 => 74,  126 => 73,  70 => 19,  58 => 17,  53 => 16,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appStylos %}
  <link rel=\"stylesheet\" href=\"views/app/template/datatables/dataTables.bootstrap.css\">
{% endblock %}
{% block appBody %}
<section class=\"content-header\">
    <h1>
        DESPACHO
        <small>Visor de Supervisor</small>

        <input type=\"hidden\" name=\"idusuario\" id=\"idusuario\" value=\"\">

        <select id=\"ejecutivo_filtro\" name=\"ejecutivo_filtro\" style=\"width:20em;\" onchange=\"document.getElementById('idusuario').value=document.getElementById('ejecutivo_filtro').value;\">
            <option value=\"\">--</option>
            <option value=\"TODOS\">TODOS</option>
            {% for d in personal_db if false != personal_db %}
                <option class=\"text-center\" value=\"{{ d.id_user }}\">{{ d.name }}</option>
            {% endfor %}
        </select>
        
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
                    <li ><a href=\"#tab_1-1\" data-toggle=\"tab\" onclick=\"actualizar_tablas_resumenes(document.getElementById('idusuario').value,'super');\">RESUMEN SEGUIMIENTO</a></li>
                    <li class=\"active\"><a href=\"#tab_2-2\" data-toggle=\"tab\">SEGUIMIENTO</a></li>
                    <li><a id=\"tab3\" href=\"#tab_3-3\" data-toggle=\"tab\" onclick=\"actualizar_tabla_ordenes(document.getElementById('idusuario').value,'*');\">VER ORDENES</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane\" id=\"tab_1-1\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"box\">
                                    <div class=\"box-header\">
                                        <h3 class=\"box-title\">Comunas y Ordenes Asignadas</h3>
                                    </div>
                                    <div id=\"div_orden_asignadas\" class=\"box-body\">

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
                                    <div id=\"div_contenedor_tecnicos_asignados\" class=\"box-body\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane active\" id=\"tab_2-2\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body resposible\">
                                <div class=\"col-md-12\">
                                    <div class=\"row\">
                                        <div class=\"col-md-1\">
                                            <label>Seleccione Comuna:
                                        </div></label>
                                        <div class=\"col-md-3\">
                                            <select class=\"form-control\" id=\"comuna_Seguimiento\" name=\"comuna_Seguimiento\" onchange=\"carga_ordenes_comuna_seguimiento();\">
                                                <option>--</option>
                                                {% for d in db_comunas if false != db_comunas %}
                                                    <option value=\"{{ d.comuna }}\">{{ d.comuna }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"row\">
                                        <form id=\"formseguimiento\" name=\"formseguimiento\" method=\"post\">
                                            <table class=\"table table-bordered table-responsive\" id=\"tblseguimiento\" name=\"tblseguimiento\">
                                                <thead>
                                                    <tr>
                                                        <th>Tipo Orden</th>
                                                        <th>N° Orden</th>
                                                        <th>Rut Cliente</th>
                                                        <th>Fecha compromiso</th>
                                                        <th>Bloque</th>
                                                        <th>Prioridad</th>
                                                        <th>Tecnico Asignado</th>
                                                        <th>Estado de Orden</th>
                                                        <th>OPERACIONES</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Carga Mediante archivo -->
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab_3-3\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body resposible\">
                                <div class=\"col-md-12\">
                                    <form id=\"formordenes\" name=\"formordenes\" method=\"post\">
                                        <table class=\"table table-bordered table-responsive\" id=\"tblordenes\" name=\"tblordenes\">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <th>Tipo Orden</th>
                                                <th>N° Orden</th>
                                                <th>Rut Cliente</th>
                                                <th>Fecha compromiso</th>
                                                <th>Bloque</th>
                                                <th>Comuna</th>
                                                <th>Tecnico Asignado</th>
                                                <th>Estado de Orden</th>
                                                <th>Prioridad</th>
                                                <th>OPERACIONES</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}
{% block appScript %}

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
      \"bSort\": false
    });
  </script>
  <script>
    \$(\"#tblordenes\").dataTable({
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
      \"bSort\": false
    });
  </script>
{% endblock %}
", "despacho/supervisor/visor_supervisor.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\despacho\\supervisor\\visor_supervisor.twig");
    }
}
