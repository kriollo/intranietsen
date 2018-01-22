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
            <small>Control panel</small>
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
                      <h3>Agregar</h3>
                      <p>Listar Ordenes</p>
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
                            </thead>
                            <tbody>
                                ";
        // line 85
        $context["No"] = 1;
        // line 86
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_resumen_x_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_resumen_x_comuna"] ?? null))) {
                // line 87
                echo "                                    <tr>
                                        <td>";
                // line 88
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 89
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "comuna", array())), "html", null, true);
                echo "</td>
                                        <td>";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
                // line 92
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 93
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
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
                            </thead>
                            <tbody>
                                ";
        // line 112
        $context["No"] = 1;
        // line 113
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_resumen_x_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_resumen_x_bloque"] ?? null))) {
                // line 114
                echo "                                    <tr>
                                        <td>";
                // line 115
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 116
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "bloque", array())), "html", null, true);
                echo "</td>
                                        <td>";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
                // line 119
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 120
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
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
        // line 141
        $context["No"] = 1;
        // line 142
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_top_5_best_ejecutivo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_top_5_best_ejecutivo"] ?? null))) {
                // line 143
                echo "                                    <tr>
                                        <td>";
                // line 144
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 145
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                                        <td>";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
                // line 148
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 149
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
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
        // line 168
        $context["No"] = 1;
        // line 169
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["confirma_top_5_bad_ejecutivo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["confirma_top_5_bad_ejecutivo"] ?? null))) {
                // line 170
                echo "                                    <tr>
                                        <td>";
                // line 171
                echo twig_escape_filter($this->env, ($context["No"] ?? null), "html", null, true);
                echo "</td>
                                        <td>";
                // line 172
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "name", array())), "html", null, true);
                echo "</td>
                                        <td>";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "cantidad", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
                // line 175
                $context["No"] = (($context["No"] ?? null) + 1);
                // line 176
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
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
        return array (  328 => 177,  321 => 176,  319 => 175,  314 => 173,  310 => 172,  306 => 171,  303 => 170,  297 => 169,  295 => 168,  275 => 150,  268 => 149,  266 => 148,  261 => 146,  257 => 145,  253 => 144,  250 => 143,  244 => 142,  242 => 141,  220 => 121,  213 => 120,  211 => 119,  206 => 117,  202 => 116,  198 => 115,  195 => 114,  189 => 113,  187 => 112,  167 => 94,  160 => 93,  158 => 92,  153 => 90,  149 => 89,  145 => 88,  142 => 87,  136 => 86,  134 => 85,  83 => 36,  71 => 34,  66 => 33,  51 => 21,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/confirmacion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\confirmacion.twig");
    }
}
