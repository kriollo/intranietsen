<?php

/* confirmacion/reporteria/report_agendamiento.twig */
class __TwigTemplate_a01e143e0e4626d8c325dc8a6e08deca5549dbe02c18bfb5c1e39a98e3359ef5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/reporteria/report_agendamiento.twig", 1);
        $this->blocks = array(
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
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "    <section class=\"content-header\">
        <h1>
            Informes
            <small>Agendamientos</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li class=\"active\">Dashboard</li>
        </ol>
    </section>
    <section class=\"content\">
        <form id=\"forminforme\" name=\"forminforme\" >
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-6\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Agendamiento de hoy</h3>
                            </div>
                            <div class=\"box-body\">
                                <div align=\"right\" class=\"col-md-2\">
                                    <label>Seleccionar Fecha:</label>
                                </div>
                                <div align=\"right\" class=\"col-md-6\">
                                    <input type=\"date\" class=\"form-control\" id=\"calendariohoy\" name=\"calendariohoy\" value='";
        // line 27
        echo twig_escape_filter($this->env, ($context["fecha"] ?? null), "html", null, true);
        echo "' onchange=\"revisarporfecha()\">
                                </div>
                                <div id=\"tabla\" name=\"tabla\">
                                    <table class=\"table table-bordered\" id=\"tblinforme\" name=\"tblinforme\">
                                        <thead>
                                            <th>Bloque</th>
                                            <th>Cliente Agendado</th>
                                            <th>Requerido</th>
                                            <th>Progreso</th>
                                            <th>%</th>
                                        </thead>
                                        <tbody>
                                            ";
        // line 39
        $context["total_agendado"] = 0;
        // line 40
        echo "                                            ";
        $context["total_requerido"] = 0;
        // line 41
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informe_hoy"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if ((false != ($context["informe_hoy"] ?? null))) {
                // line 42
                echo "                                            <tr>
                                                <td><a onclick=\"verbloque('";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "bloque", array()), "html", null, true);
                echo "')\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "bloque", array()), "html", null, true);
                echo "</a></td>
                                                <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array()), "html", null, true);
                echo "</td>
                                                <td>
                                                    <div class=\"progress progress-xs\">
                                                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 48
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array()), "html", null, true);
                echo "\">
                                                            <span class=\"sr-only\">";
                // line 49
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                            </tr>
                                                ";
                // line 55
                $context["total_agendado"] = (($context["total_agendado"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()));
                // line 56
                echo "                                                ";
                $context["total_requerido"] = (($context["total_requerido"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array()));
                // line 57
                echo "                                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                            <tr>
                                                <td>TOTAL</td>
                                                <td>";
        // line 60
        echo twig_escape_filter($this->env, ($context["total_agendado"] ?? null), "html", null, true);
        echo "</td>
                                                <td>";
        // line 61
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "</td>
                                                <td>
                                                    <div class=\"progress progress-xs\">
                                                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
        // line 64
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%\" role=\"progressbar\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "\">
                                                            <span class=\"sr-only\">";
        // line 65
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "% </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Agendamiento dia posterior</h3>
                            </div>
                            <div class=\"box-body\">
                                <div align=\"right\" class=\"col-md-2\">
                                    <label>Fecha dia posterior:</label>
                                </div>
                                <div id=\"tablaposterior\" name=\"tablaposterior\">
                                    <div align=\"right\" class=\"col-md-6\">
                                        <input type=\"text\" class=\"form-control\" id=\"calendariopost\" name=\"calendariopost\" value='";
        // line 88
        echo twig_escape_filter($this->env, ($context["fecha2"] ?? null), "html", null, true);
        echo "' onchange=\"revisarporfecha()\">
                                    </div>
                                    <table class=\"table table-bordered\" id=\"tblinforme\" name=\"tblinforme\">
                                        <thead>
                                            <th>Bloque</th>
                                            <th>Cliente Agendado</th>
                                            <th>Requerido</th>
                                            <th>Progreso</th>
                                            <th>%</th>
                                        </thead>
                                        <tbody>
                                            ";
        // line 99
        $context["total_agendado"] = 0;
        // line 100
        echo "                                            ";
        $context["total_requerido"] = 0;
        // line 101
        echo "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informe_posterior"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["informe_posterior"] ?? null))) {
                // line 102
                echo "                                                <tr>
                                                    <td>";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "bloque", array()), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array()), "html", null, true);
                echo "</td>
                                                    <td>
                                                        <div class=\"progress progress-xs\">
                                                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 108
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array()), "html", null, true);
                echo "\">
                                                                <span class=\"sr-only\">";
                // line 109
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>";
                // line 113
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                                </tr>
                                                ";
                // line 115
                $context["total_agendado"] = (($context["total_agendado"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()));
                // line 116
                echo "                                                ";
                $context["total_requerido"] = (($context["total_requerido"] ?? null) + twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array()));
                // line 117
                echo "                                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                                            <tr>
                                                <td>TOTAL</td>
                                                <td>";
        // line 120
        echo twig_escape_filter($this->env, ($context["total_agendado"] ?? null), "html", null, true);
        echo "</td>
                                                <td>";
        // line 121
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "</td>
                                                <td>
                                                    <div class=\"progress progress-xs\">
                                                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
        // line 124
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%\" role=\"progressbar\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
        echo twig_escape_filter($this->env, ($context["total_requerido"] ?? null), "html", null, true);
        echo "\">
                                                            <span class=\"sr-only\">";
        // line 125
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "% </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>";
        // line 129
        echo twig_escape_filter($this->env, twig_round(((($context["total_agendado"] ?? null) / ($context["total_requerido"] ?? null)) * 100), 1, "ceil"), "html", null, true);
        echo "%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-6\">
                    <div class=\"box\">
                    <div id=\"tablacomuna\" name=\"tablacomuna\">
                    <div class=\"box-header\">
                    <h3 class=\"box-title col-xs-2\"><label>Comunas</label></h3>
                    ";
        // line 146
        if ((($context["bloque"] ?? null) != false)) {
            // line 147
            echo "                    <h3 class=\"box-title col-xs-3\"><label>Bloque: ";
            echo twig_escape_filter($this->env, ($context["bloque"] ?? null), "html", null, true);
            echo "</label></h3>
                    ";
        } else {
            // line 149
            echo "                    <h3 class=\"box-title col-xs-3\"><label>Bloque: 10-13</label></h3>
                    ";
        }
        // line 151
        echo "                    </div>
                    <div class=\"box-body\">
                    <table class=\"table table-bordered\">
                    <thead>
                    <th>Comuna</th>
                    <th>Cantidad Gestion</th>
                    <th>Requerido</th>
                    <th>Progreso</th>
                    <th>%</th>
                    </thead>
                    <tbody>
                    ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cantcomunas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            if ((false != ($context["cantcomunas"] ?? null))) {
                // line 163
                echo "                    <tr>
                    <td>";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "nombre", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array()), "html", null, true);
                echo "</td>
                    <td><div class=\"progress progress-xs\">
                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 168
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array()), "html", null, true);
                echo "\">
                    <span class=\"sr-only\">";
                // line 169
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                    </div>
                    </div></td>
                    <td>";
                // line 172
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                    </tr>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                    </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class=\"col-lg-6\">
                    <div class=\"box\">
                    <div id=\"comunapos\" name=\"comunapos\">
                    <div class=\"box-header\">
                    <h3 class=\"box-title col-xs-2\"><label>Comunas</label></h3>
                    ";
        // line 186
        if ((($context["bloque"] ?? null) != false)) {
            // line 187
            echo "                    <h3 class=\"box-title col-xs-3\"><label>Bloque: ";
            echo twig_escape_filter($this->env, ($context["bloque"] ?? null), "html", null, true);
            echo "</label></h3>
                    ";
        } else {
            // line 189
            echo "                    <h3 class=\"box-title col-xs-3\"><label>Bloque: 10-13</label></h3>
                    ";
        }
        // line 191
        echo "                    <h3 class=\"box-title col-xs-4\"><label>Fecha: ";
        echo twig_escape_filter($this->env, ($context["fecha2"] ?? null), "html", null, true);
        echo "</label></h3>
                    </div>
                    <div class=\"box-body\">
                    <table class=\"table table-bordered\">
                    <thead>
                    <th>Comuna</th>
                    <th>Cantidad Gestion</th>
                    <th>Requerido</th>
                    <th>Progreso</th>
                    <th>%</th>
                    </thead>
                    <tbody>
                    ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comunapos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pos"]) {
            if ((false != ($context["comunapos"] ?? null))) {
                // line 204
                echo "                    <tr>
                    <td>";
                // line 205
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "nombre", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 206
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 207
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array()), "html", null, true);
                echo "</td>
                    <td><div class=\"progress progress-xs\">
                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 209
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array()), "html", null, true);
                echo "\">
                    <span class=\"sr-only\">";
                // line 210
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                    </div>
                    </div></td>
                    <td>";
                // line 213
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                    </tr>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "                    </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->

";
    }

    // line 229
    public function block_appScript($context, array $blocks = array())
    {
        // line 230
        echo "  <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
  <script type=\"text/javascript\">
    setInterval(function() {
        window.location.reload();
    }, 300000);
  </script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/reporteria/report_agendamiento.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 230,  481 => 229,  465 => 216,  455 => 213,  449 => 210,  441 => 209,  436 => 207,  432 => 206,  428 => 205,  425 => 204,  420 => 203,  404 => 191,  400 => 189,  394 => 187,  392 => 186,  379 => 175,  369 => 172,  363 => 169,  355 => 168,  350 => 166,  346 => 165,  342 => 164,  339 => 163,  334 => 162,  321 => 151,  317 => 149,  311 => 147,  309 => 146,  289 => 129,  282 => 125,  274 => 124,  268 => 121,  264 => 120,  260 => 118,  253 => 117,  250 => 116,  248 => 115,  243 => 113,  236 => 109,  228 => 108,  222 => 105,  218 => 104,  214 => 103,  211 => 102,  205 => 101,  202 => 100,  200 => 99,  186 => 88,  164 => 69,  157 => 65,  149 => 64,  143 => 61,  139 => 60,  135 => 58,  128 => 57,  125 => 56,  123 => 55,  118 => 53,  111 => 49,  103 => 48,  97 => 45,  93 => 44,  87 => 43,  84 => 42,  78 => 41,  75 => 40,  73 => 39,  58 => 27,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/reporteria/report_agendamiento.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\reporteria\\report_agendamiento.twig");
    }
}
