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
                            <p>Ordenes Registradas Hoy</p>
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
            <!-- Resumen TOP 10 -->
            <div class=\"col-lg-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Gestión Confirmación Hoy - Meta: ";
        // line 73
        echo twig_escape_filter($this->env, ($context["metas"] ?? null), "html", null, true);
        echo " confirmaciones</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
        // line 76
        $context["count"] = 1;
        // line 77
        echo "                        ";
        $context["mitad"] = twig_round((twig_length_filter($this->env, ($context["confirma_resumen_llamados_ejecutivos"] ?? null)) / 2), 0, "ceil");
        // line 78
        echo "                        ";
        $context["tope"] = ($context["mitad"] ?? null);
        // line 79
        echo "
                        ";
        // line 80
        $context["No"] = 1;
        // line 81
        echo "                        ";
        $context["total"] = 0;
        // line 82
        echo "                        ";
        $context["total_confirmados"] = 0;
        // line 83
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_resumen_llamados_ejecutivos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_resumen_llamados_ejecutivos"] ?? null))) {
                // line 84
                echo "                            ";
                if ((($context["count"] ?? null) == 1)) {
                    // line 85
                    echo "                                <div class=\"col-lg-6\">
                                    <table class=\"table table-bordered\">
                                        <thead>
                                            <th>No</th>
                                            <th>Comuna</th>
                                            <th>Llamados</th>
                                            <th>confirmados</th>
                                            <th></th>
                                            <th></th>
                                        </thead>
                                        <tbody>

                            ";
                }
                // line 98
                echo "
                                <tr>
                                    <td>";
                // line 100
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                    <td>";
                // line 101
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                                    <td>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_total", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()), "html", null, true);
                echo "</td>
                                    <td class=\"col-lg-1\"><div class=\"progress progress-xs\">
                                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 105
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, ($context["metas"] ?? null), "html", null, true);
                echo "\">
                                                <span class=\"sr-only\">";
                // line 106
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                            </div>
                                        </div></td>
                                    <td>";
                // line 109
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()) / ($context["metas"] ?? null)) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                </tr>
                                ";
                // line 111
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 112
                echo "                                ";
                $context["total"] = (($context["total"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_total", array()));
                // line 113
                echo "                                ";
                $context["total_confirmados"] = (($context["total_confirmados"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "acum_hoy_conf", array()));
                // line 114
                echo "                                ";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 115
                echo "                            


                            ";
                // line 118
                if ((($context["count"] ?? null) == ($context["tope"] ?? null))) {
                    // line 119
                    echo "                                        </tbody>
                                    </table>
                                </div>
                                ";
                    // line 122
                    $context["count"] = 1;
                    // line 123
                    echo "                            ";
                }
                // line 124
                echo "
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                        ";
        if ((($context["count"] ?? null) < ($context["tope"] ?? null))) {
            // line 127
            echo "                                        <tr>
                                            <td colspan=\"2\">TOTAL:</td>
                                            <td>";
            // line 129
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo "</td>
                                            <td>";
            // line 130
            echo twig_escape_filter($this->env, ($context["total_confirmados"] ?? null), "html", null, true);
            echo "</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        ";
        }
        // line 136
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Resumen por Bloque</h3>
                    </div>
                    <div class=\"box-body\">
                        <table class=\"table table-bordered\">
                            <thead>
                                <th>No</th>
                                <th>Bloque</th>
                                <th>Confirmado</th>
                                <th>Requerido</th>
                                <th colspan=\"2\">%</th>
                            </thead>
                            <tbody>
                                ";
        // line 155
        $context["No"] = 1;
        // line 156
        echo "                                ";
        $context["total_agendado"] = 0;
        // line 157
        echo "                                ";
        $context["total_requerido"] = 0;
        // line 158
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_resumen_x_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_resumen_x_bloque"] ?? null))) {
                // line 159
                echo "                                    <tr>
                                        <td>";
                // line 160
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 161
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "bloque", array())), "html", null, true);
                echo "</td>
                                        <td>";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array()), "html", null, true);
                echo "</td>
                                        <td width=\"100\">
                                            <div class=\"progress progress-xs\">
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 166
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array()), "html", null, true);
                echo "\">
                                                    <span class=\"sr-only\">";
                // line 167
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td >
                                            ";
                // line 172
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%
                                        </td>
                                    </tr>
                                ";
                // line 175
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 176
                echo "                                ";
                $context["total_agendado"] = (($context["total_agendado"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()));
                // line 177
                echo "                                ";
                $context["total_requerido"] = (($context["total_requerido"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "requerido", array()));
                // line 178
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                                <tr>
                                    <td colspan=\"2\">TOTAL</td>
                                    <td>";
        // line 181
        echo twig_escape_filter($this->env, ($context["total_agendado"] ?? null), "html", null, true);
        echo "</td>
                                    <td>";
        // line 182
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "</td>
                                    <td>
                                        <div class=\"progress progress-xs\">
                                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
        // line 185
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%\" role=\"progressbar\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "\">
                                                <span class=\"sr-only\">";
        // line 186
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "% </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>";
        // line 190
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%</td>
                                </tr>
                            </tbody>
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
        return array (  389 => 190,  382 => 186,  374 => 185,  368 => 182,  364 => 181,  360 => 179,  353 => 178,  350 => 177,  347 => 176,  345 => 175,  339 => 172,  331 => 167,  323 => 166,  317 => 163,  313 => 162,  309 => 161,  305 => 160,  302 => 159,  296 => 158,  293 => 157,  290 => 156,  288 => 155,  267 => 136,  258 => 130,  254 => 129,  250 => 127,  247 => 126,  239 => 124,  236 => 123,  234 => 122,  229 => 119,  227 => 118,  222 => 115,  219 => 114,  216 => 113,  213 => 112,  211 => 111,  206 => 109,  200 => 106,  192 => 105,  187 => 103,  183 => 102,  179 => 101,  175 => 100,  171 => 98,  156 => 85,  153 => 84,  147 => 83,  144 => 82,  141 => 81,  139 => 80,  136 => 79,  133 => 78,  130 => 77,  128 => 76,  122 => 73,  83 => 36,  71 => 34,  66 => 33,  51 => 21,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/confirmacion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\confirmacion.twig");
    }
}
