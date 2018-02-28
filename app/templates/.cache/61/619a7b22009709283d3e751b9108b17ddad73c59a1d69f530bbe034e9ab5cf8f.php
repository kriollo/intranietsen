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
            <div class=\"col-xs-6\">
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
        // line 26
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
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informe_hoy"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if ((false != ($context["informe_hoy"] ?? null))) {
                // line 39
                echo "                                    <tr>
                                        <td><a onclick=\"verbloque('";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "bloque", array()), "html", null, true);
                echo "')\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "bloque", array()), "html", null, true);
                echo "</a></td>
                                        <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array()), "html", null, true);
                echo "</td>
                                        <td><div class=\"progress progress-xs\">
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 44
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array()), "html", null, true);
                echo "\">
                                                    <span class=\"sr-only\">";
                // line 45
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                                </div>
                                            </div></td>
                                        <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                    </tr>
                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                            </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6\">
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
        // line 68
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
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informe_posterior"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["informe_posterior"] ?? null))) {
                // line 80
                echo "                                    <tr>
                                        <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "bloque", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array()), "html", null, true);
                echo "</td>
                                        <td><div class=\"progress progress-xs\">
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 85
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array()), "html", null, true);
                echo "\">
                                                    <span class=\"sr-only\">";
                // line 86
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                                </div>
                                            </div></td>
                                        <td>";
                // line 89
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                    </tr>
                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                            </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-12\">
              <!---------------------------------------------------------------------------------------------------------------------------------------->
            <div class=\"col-xs-6\">
                <div class=\"box\">
                    <div id=\"tablacomuna\" name=\"tablacomuna\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title col-xs-2\"><label>Comunas</label></h3>
                        ";
        // line 105
        if ((($context["bloque"] ?? null) != false)) {
            // line 106
            echo "                        <h3 class=\"box-title col-xs-3\"><label>Bloque: ";
            echo twig_escape_filter($this->env, ($context["bloque"] ?? null), "html", null, true);
            echo "</label></h3>
                        ";
        } else {
            // line 108
            echo "                        <h3 class=\"box-title col-xs-3\"><label>Bloque: 10-13</label></h3>
                        ";
        }
        // line 110
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
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cantcomunas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            if ((false != ($context["cantcomunas"] ?? null))) {
                // line 122
                echo "                                <tr>
                                <td>";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "nombre", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array()), "html", null, true);
                echo "</td>
                                <td><div class=\"progress progress-xs\">
                                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 127
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array()), "html", null, true);
                echo "\">
                                            <span class=\"sr-only\">";
                // line 128
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                        </div>
                                    </div></td>
                                <td>";
                // line 131
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                </tr>
                              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
            </div>
            <!-------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class=\"col-xs-6\">
                <div class=\"box\">
                    <div id=\"comunapos\" name=\"comunapos\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title col-xs-2\"><label>Comunas</label></h3>
                        ";
        // line 146
        if ((($context["bloque"] ?? null) != false)) {
            // line 147
            echo "                        <h3 class=\"box-title col-xs-3\"><label>Bloque: ";
            echo twig_escape_filter($this->env, ($context["bloque"] ?? null), "html", null, true);
            echo "</label></h3>
                        ";
        } else {
            // line 149
            echo "                        <h3 class=\"box-title col-xs-3\"><label>Bloque: 10-13</label></h3>
                        ";
        }
        // line 151
        echo "                        <h3 class=\"box-title col-xs-4\"><label>Fecha: ";
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
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comunapos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pos"]) {
            if ((false != ($context["comunapos"] ?? null))) {
                // line 164
                echo "                                <tr>
                                <td>";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "nombre", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array()), "html", null, true);
                echo "</td>
                                <td><div class=\"progress progress-xs\">
                                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 169
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array()), "html", null, true);
                echo "\">
                                            <span class=\"sr-only\">";
                // line 170
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                        </div>
                                    </div></td>
                                <td>";
                // line 173
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                </tr>
                              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                            </tbody>
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

    // line 189
    public function block_appScript($context, array $blocks = array())
    {
        // line 190
        echo "  <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>

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
        return array (  388 => 190,  385 => 189,  369 => 176,  359 => 173,  353 => 170,  345 => 169,  340 => 167,  336 => 166,  332 => 165,  329 => 164,  324 => 163,  308 => 151,  304 => 149,  298 => 147,  296 => 146,  282 => 134,  272 => 131,  266 => 128,  258 => 127,  253 => 125,  249 => 124,  245 => 123,  242 => 122,  237 => 121,  224 => 110,  220 => 108,  214 => 106,  212 => 105,  197 => 92,  187 => 89,  181 => 86,  173 => 85,  168 => 83,  164 => 82,  160 => 81,  157 => 80,  152 => 79,  138 => 68,  119 => 51,  109 => 48,  103 => 45,  95 => 44,  90 => 42,  86 => 41,  80 => 40,  77 => 39,  72 => 38,  57 => 26,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/reporteria/report_agendamiento.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\reporteria\\report_agendamiento.twig");
    }
}
