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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informe_hoy"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if ((false != ($context["informe_hoy"] ?? null))) {
                // line 40
                echo "                                            <tr>
                                                <td><a onclick=\"verbloque('";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "bloque", array()), "html", null, true);
                echo "')\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "bloque", array()), "html", null, true);
                echo "</a></td>
                                                <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array()), "html", null, true);
                echo "</td>
                                                <td>
                                                    <div class=\"progress progress-xs\">
                                                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 46
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array()), "html", null, true);
                echo "\">
                                                            <span class=\"sr-only\">";
                // line 47
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["i"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                            </tr>
                                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                        </tbody>
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
        // line 71
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
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informe_posterior"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["informe_posterior"] ?? null))) {
                // line 83
                echo "                                                <tr>
                                                    <td>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "bloque", array()), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()), "html", null, true);
                echo "</td>
                                                    <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array()), "html", null, true);
                echo "</td>
                                                    <td>
                                                        <div class=\"progress progress-xs\">
                                                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 89
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array()), "html", null, true);
                echo "\">
                                                                <span class=\"sr-only\">";
                // line 90
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>";
                // line 94
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                                                </tr>
                                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                        </tbody>
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
        // line 112
        if ((($context["bloque"] ?? null) != false)) {
            // line 113
            echo "                    <h3 class=\"box-title col-xs-3\"><label>Bloque: ";
            echo twig_escape_filter($this->env, ($context["bloque"] ?? null), "html", null, true);
            echo "</label></h3>
                    ";
        } else {
            // line 115
            echo "                    <h3 class=\"box-title col-xs-3\"><label>Bloque: 10-13</label></h3>
                    ";
        }
        // line 117
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
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cantcomunas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            if ((false != ($context["cantcomunas"] ?? null))) {
                // line 129
                echo "                    <tr>
                    <td>";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "nombre", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array()), "html", null, true);
                echo "</td>
                    <td><div class=\"progress progress-xs\">
                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 134
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array()), "html", null, true);
                echo "\">
                    <span class=\"sr-only\">";
                // line 135
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                    </div>
                    </div></td>
                    <td>";
                // line 138
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["com"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                    </tr>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
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
        // line 152
        if ((($context["bloque"] ?? null) != false)) {
            // line 153
            echo "                    <h3 class=\"box-title col-xs-3\"><label>Bloque: ";
            echo twig_escape_filter($this->env, ($context["bloque"] ?? null), "html", null, true);
            echo "</label></h3>
                    ";
        } else {
            // line 155
            echo "                    <h3 class=\"box-title col-xs-3\"><label>Bloque: 10-13</label></h3>
                    ";
        }
        // line 157
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
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comunapos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pos"]) {
            if ((false != ($context["comunapos"] ?? null))) {
                // line 170
                echo "                    <tr>
                    <td>";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "nombre", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array()), "html", null, true);
                echo "</td>
                    <td><div class=\"progress progress-xs\">
                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: ";
                // line 175
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%\" role=\"progressbar\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array()), "html", null, true);
                echo "\">
                    <span class=\"sr-only\">";
                // line 176
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "% </span>
                    </div>
                    </div></td>
                    <td>";
                // line 179
                echo twig_escape_filter($this->env, twig_round(((twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "cantidad", array()) / twig_get_attribute($this->env, $this->getSourceContext(), $context["pos"], "requerido", array())) * 100), 1, "ceil"), "html", null, true);
                echo "%</td>
                    </tr>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
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

    // line 195
    public function block_appScript($context, array $blocks = array())
    {
        // line 196
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
        return array (  394 => 196,  391 => 195,  375 => 182,  365 => 179,  359 => 176,  351 => 175,  346 => 173,  342 => 172,  338 => 171,  335 => 170,  330 => 169,  314 => 157,  310 => 155,  304 => 153,  302 => 152,  289 => 141,  279 => 138,  273 => 135,  265 => 134,  260 => 132,  256 => 131,  252 => 130,  249 => 129,  244 => 128,  231 => 117,  227 => 115,  221 => 113,  219 => 112,  202 => 97,  192 => 94,  185 => 90,  177 => 89,  171 => 86,  167 => 85,  163 => 84,  160 => 83,  155 => 82,  141 => 71,  122 => 54,  112 => 51,  105 => 47,  97 => 46,  91 => 43,  87 => 42,  81 => 41,  78 => 40,  73 => 39,  58 => 27,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/reporteria/report_agendamiento.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\reporteria\\report_agendamiento.twig");
    }
}
