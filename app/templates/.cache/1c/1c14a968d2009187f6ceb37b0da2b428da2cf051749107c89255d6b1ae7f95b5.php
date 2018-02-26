<?php

/* confirmacion/confirmacion.twig */
class __TwigTemplate_f3a7617898bea267ae486baaa3afadc27c7e68f8ee1bcbc07151f0be0fb07be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/confirmacion.twig", 1);
        $this->blocks = array(
            'appBody' => array($this, 'block_appBody'),
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
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "    <section class=\"content-header\">
        <h1>
            Confirmación
            <small>Principal</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li class=\"active\">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"col-lg-3\">
                    <div style=\"background-color:#00c0ef;color:#fff\" class=\"small-box\">
                        <div class=\"inner\">
                            <h2>";
        // line 21
        echo twig_escape_filter($this->env, ($context["confirma_q_ordenes_gestionadas"] ?? null), "html", null, true);
        echo "</h2>
                            <p>Ordenes Gestionadas</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-headphones\"></i>
                        </div>
                        <!-- <a href=\"administracion/usuario\" class=\"small-box-footer\" title=\"Ver Ordenes\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a> -->
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div style=\"background-color:#00a65a;color:#fff\" class=\"small-box\">
                        <div class=\"inner\">
                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_q_orden_x_estado_confirmacion"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_q_orden_x_estado_confirmacion"] ?? null))) {
                // line 34
                echo "                                    <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "Resultado", array())), "html", null, true);
                echo " </p>
                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                            <p>Resumen Confirmación</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"fa fa-eye\"></i>
                        </div>
                        <!-- <a href=\"administracion/usuario\" class=\"small-box-footer\" title=\"Ver Ordenes\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a> -->
                    </div>
                </div>
                <div class=\"col-lg-3\">
                  <div style=\"background-color:#f39c12;color:#fff\" class=\"small-box\">
                    <div class=\"inner\">
                      <h3>Agregar</h3>
                      <p>Nuevo Orden</p>
                    </div>
                    <div class=\"icon\">
                      <i class=\"fa fa-plus\"></i>
                    </div>
                      <a href=\"confirmacion/programacion\" class=\"small-box-footer\" title=\"Agregar\" data-toggle=\"tooltip\"><i class=\"fa fa-plus\"></i></a>
                  </div>
                </div><!-- ./col -->
                <div class=\"col-lg-3\">
                  <div style=\"background-color:#00a65a;color:#fff\" class=\"small-box\">
                    <div class=\"inner\">
                      <h3>Listar</h3>
                      <p>Ordenes</p>
                    </div>
                    <div class=\"icon\">
                      <i class=\"fa fa-eye\"></i>
                    </div>
                      <a href=\"confirmacion/listar_ordenes\" class=\"small-box-footer\" title=\"Agregar\" data-toggle=\"tooltip\"><i class=\"fa fa-eye\"></i></a>
                  </div>
                </div><!-- ./col -->
            </div><!-- ./col -->
        </div>

        <div class=\"row\">
            <div class=\"col-xs-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Resumen por Comuna</h3>
                    </div>
                    <div class=\"box-body\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <th>No</th>
                                <th>Comuna</th>
                                <th>Cantidad Gestión</th>
                                <th>Requerido</th>
                                <th>%</th>
                            </thead>
                            <tbody>
                                ";
        // line 87
        $context["No"] = 1;
        // line 88
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_resumen_x_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_resumen_x_comuna"] ?? null))) {
                // line 89
                echo "                                    <tr>
                                        <td>";
                // line 90
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 91
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "comuna", array())), "html", null, true);
                echo "</td>
                                        <td>";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array()), "html", null, true);
                echo "</td>

                                    </tr>
                                ";
                // line 96
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 97
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Resumen por Bloque</h3>
                    </div>
                    <div class=\"box-body\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <th>No</th>
                                <th>Comuna</th>
                                <th>Cantidad Gestión</th>
                                <th>Requerido</th>
                                <th>%</th>
                            </thead>
                            <tbody>
                                ";
        // line 118
        $context["No"] = 1;
        // line 119
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_resumen_x_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_resumen_x_bloque"] ?? null))) {
                // line 120
                echo "                                    <tr>
                                        <td>";
                // line 121
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 122
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "bloque", array())), "html", null, true);
                echo "</td>
                                        <td>";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array()), "html", null, true);
                echo "</td>
                                        <td>
                                            <div class=\"progress progress-xs\">
                                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 127
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array())) * 100)), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array())) * 100)), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array()), "html", null, true);
                echo "\">
                                              <span class=\"sr-only\">";
                // line 128
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array())) * 100)), "html", null, true);
                echo "% </span>
                                            </div>
                                          </div>
                                            
                                        </td>
                                        <td>
                                            ";
                // line 134
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array())) * 100)), "html", null, true);
                echo "%
                                        </td>
                                    </tr>
                                ";
                // line 137
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 138
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Top 5 Mejores Ejecutivos</h3>
                    </div>
                    <div class=\"box-body\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <th>No</th>
                                <th>Comuna</th>
                                <th>Cantidad Gestión</th>
                            </thead>
                            <tbody>
                                ";
        // line 159
        $context["No"] = 1;
        // line 160
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_top_5_best_ejecutivo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_top_5_best_ejecutivo"] ?? null))) {
                // line 161
                echo "                                    <tr>
                                        <td>";
                // line 162
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 163
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                                        <td>";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
                // line 166
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 167
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Top 5 Peores Ejecutivos</h3>
                    </div>
                    <div class=\"box-body\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <th>No</th>
                                <th>Comuna</th>
                                <th>Cantidad Gestión</th>
                            </thead>
                            <tbody>
                                ";
        // line 186
        $context["No"] = 1;
        // line 187
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_top_5_bad_ejecutivo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_top_5_bad_ejecutivo"] ?? null))) {
                // line 188
                echo "                                    <tr>
                                        <td>";
                // line 189
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 190
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                                        <td>";
                // line 191
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
                // line 193
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 194
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

";
    }

    public function getTemplateName()
    {
        return "confirmacion/confirmacion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 195,  358 => 194,  356 => 193,  351 => 191,  347 => 190,  343 => 189,  340 => 188,  334 => 187,  332 => 186,  312 => 168,  305 => 167,  303 => 166,  298 => 164,  294 => 163,  290 => 162,  287 => 161,  281 => 160,  279 => 159,  257 => 139,  250 => 138,  248 => 137,  242 => 134,  233 => 128,  225 => 127,  219 => 124,  215 => 123,  211 => 122,  207 => 121,  204 => 120,  198 => 119,  196 => 118,  174 => 98,  167 => 97,  165 => 96,  159 => 93,  155 => 92,  151 => 91,  147 => 90,  144 => 89,  138 => 88,  136 => 87,  83 => 36,  71 => 34,  66 => 33,  51 => 21,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/confirmacion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\confirmacion.twig");
    }
}
