<?php

/* confirmacion/programacion/reingresar_confirmacion.twig */
class __TwigTemplate_78bc926b608153ca31be61d5e413255fd4b187aaff23c43adde611e5120ada43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/programacion/reingresar_confirmacion.twig", 1);
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
        echo "<section class=\"content-header\">
    <h1>
        Confirmación
        <small>Programación Nielsen</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
    <li><a href=\"confirmacion/listar_ordenes\">Listado de Ordenes</a></li>
    <li class=\"active\">Reingresar Registro</li>
    </ol>
</section>
  <!-- Main content -->
<section class=\"content\">
    <form id=\"formreorden\" name=\"formreorden\">
        <div id=\"mod_ot\" name=\"mod_ot\" class=\"row\">
            <div class=\"col-xs-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Reingresar Orden</h3>
                    </div>
                    <div class=\"box-body\">
                        <div class=\"col-md-4\">
                            <label>ID Orden:</label><input type=\"text\" name=\"textidorden\" id=\"textidorden\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "n_orden", array()), "html", null, true);
        echo "\" readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label>Rut Cliente:</label><input type=\"text\" name=\"rerutcliente\" id=\"rerutcliente\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "rut_cliente", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-4\">
                            <label>Fecha OT:</label><input type=\"date\" name=\"fechaot\" id=\"fechaot\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "fecha_ot", array()), "html", null, true);
        echo "\">
                        </div>
                        <!-- <div class=\"col-md-4\">
                            <label>Reg:</label><input type=\"text\" name=\"textmodreg\" id=\"textmodreg\" class=\"form-control\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "reg", array()), "html", null, true);
        echo "\">
                        </div> -->
                        <div class=\"col-md-8\">
                            <label>Ejecutivo:</label><input type=\"text\" name=\"textuser\" id=\"textuser\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "name", array()), "html", null, true);
        echo "\" readonly>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id=\"reage\" name=\"reage\" class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">REAGENDAMIENTOS</h3>
                    </div>
                    <div class=\"box-body\">
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 52
            echo "                        ";
            if (($context["i"] == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "reagendamiento", array()))) {
                // line 53
                echo "                            <div class=\"col-xs-1\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"reag\" id=\"reag-";
                // line 54
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" onchange=\"cargarreag('";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "')\" checked>
                                ";
                // line 55
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</label>
                            </div>
                        ";
            } else {
                // line 58
                echo "                            <div class=\"col-xs-1\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"reag\" id=\"reag-";
                // line 59
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" onchange=\"cargarreag('";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "')\">
                                ";
                // line 60
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</label>
                            </div>
                        ";
            }
            // line 63
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </div>
                </div>
            </div>
        </div>
    <div id=\"modmotivo\" name=\"modmotivo\" class=\"row\">
      <div class=\"col-xs-12\">
        <div class=\"box\">
          <div class=\"box-header\">
            <h3 class=\"box-title\">MOTIVO DEL LLAMADO</h3>
          </div>
          <div class=\"box-body\">
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_motivo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_motivo"] ?? null))) {
                // line 76
                echo "              ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "motivo", array()))) {
                    // line 77
                    echo "                <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodmotivo\" id=\"";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "\" onchange=\"cargarremot('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                  ";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                } else {
                    // line 82
                    echo "                <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodmotivo\" id=\"";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "\" onchange=\"cargarremot('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "')\">
                  ";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                }
                // line 87
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "          </div>
        </div>
      </div>
    </div>
    <div id=\"modcomuna\" name=\"modcomuna\" class=\"row\">
      <div class=\"col-xs-12\">
        <div class=\"box\">
          <div class=\"box-header\">
            <h3 class=\"box-title\">COMUNA</h3>
          </div>
          <div class=\"box-body\">
            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 100
                echo "              ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "comuna", array()))) {
                    // line 101
                    echo "                <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodcomuna\" id=\"";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarrecom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                  ";
                    // line 103
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                } else {
                    // line 106
                    echo "                <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodcomuna\" id=\"";
                    // line 107
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarrecom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "')\">
                  ";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                }
                // line 111
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "            <div class=\"col-xs-2\" style=\"border: 1px solid white\">
              <label>NODO:<input type=\"number\" min='1' name=\"renodo\" id=\"renodo\" class=\"form-control\" placeholder=\"NODO\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "nodo", array()), "html", null, true);
        echo "\"></label>
            </div>
            <div class=\"col-xs-2\" style=\"border: 1px solid white\">
              <label>SUBNODO:<input type=\"number\" min='1' name=\"resubnodo\" id=\"resubnodo\" class=\"form-control\" placeholder=\"SUBNODO\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "subnodo", array()), "html", null, true);
        echo "\"></label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id=\"tipoorden\" name=\"tipoorden\" class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">TIPO DE ORDEN</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_tipoorden"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_tipoorden"] ?? null))) {
                // line 130
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "tipoorden", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_tipoorden", array()))) {
                    // line 131
                    echo "                            <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rmodtipoorden\" id=\"";
                    // line 132
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "\" onchange=\"cargarretipoorden('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_tipoorden", array()), "html", null, true);
                    echo "')\"  checked=\"checked\">
                                ";
                    // line 133
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "</label>
                            </div>
                        ";
                } else {
                    // line 136
                    echo "                            <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rmodtipoorden\" id=\"";
                    // line 137
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "\" onchange=\"cargarretipoorden('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_tipoorden", array()), "html", null, true);
                    echo "')\">
                                ";
                    // line 138
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "</label>
                            </div>
                        ";
                }
                // line 141
                echo "                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                </div>
            </div>
        </div>
    </div>
    <div id=\"modactividad\" name=\"modactividad\" class=\"row\">
      <div class=\"col-xs-12\">
        <div class=\"box\">
          <div class=\"box-header\">
            <h3 class=\"box-title\">ACTIVIDAD</h3>
          </div>
          <div class=\"box-body\">
            ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_actividad"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if ((false != ($context["db_actividad"] ?? null))) {
                // line 154
                echo "              ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "actividad", array()))) {
                    // line 155
                    echo "                <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodactividad\" id=\"";
                    // line 156
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "\" onchange=\"cargarreact('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                  ";
                    // line 157
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                } else {
                    // line 160
                    echo "                <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodactividad\" id=\"";
                    // line 161
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "\" onchange=\"cargarreact('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "')\">
                  ";
                    // line 162
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                }
                // line 165
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "          </div>
        </div>
      </div>
     </div>
    <div id=\"modresultado\" name=\"modresultado\" class=\"row\">
      <div class=\"col-xs-12\">
        <div class=\"box\">
          <div class=\"box-header\">
            <h3 class=\"box-title\">RESULTADO</h3>
          </div>
          <div class=\"box-body\">
            <table id=\"tabla\" name=\"tabla\" class=\"table-bordered\">
              ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_resultado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_resultado"] ?? null))) {
                // line 179
                echo "                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "resultado", array()))) {
                    // line 180
                    echo "                  <div class=\"col-xs-4\" style=\"border: 1px solid white\">
                    <label><input type=\"radio\" name=\"rbmodresultado\" id=\"";
                    // line 181
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "\" onchange=\"cargarreres('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                    ";
                    // line 182
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "</label>
                  </div>
                ";
                } else {
                    // line 185
                    echo "                  <div class=\"col-xs-4\" style=\"border: 1px solid white\">
                    <label><input type=\"radio\" name=\"rbmodresultado\" id=\"";
                    // line 186
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarreres('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "')\">
                    ";
                    // line 187
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "</label>
                  </div>
                ";
                }
                // line 190
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "            </table>
           </div>
         </div>
       </div>
      </div>
      <div id=\"modbloque\" name=\"modbloque\" class=\"row\">
          <div class=\"col-xs-12\">
              <div class=\"box\">
                  <div class=\"box-header\">
                      <h3 class=\"box-title\">BLOQUE</h3>
                  </div>
                  <div class=\"box-body\">
                      ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            if ((false != ($context["db_bloque"] ?? null))) {
                // line 204
                echo "                          ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "bloque", array()))) {
                    // line 205
                    echo "                              <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                  <label><input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarreblo('";
                    // line 206
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "')\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "\" checked=\"checked\">
                                      <font size=\"4\">";
                    // line 207
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "</font></label>
                              </div>
                          ";
                } else {
                    // line 210
                    echo "                              <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                  <label><input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarreblo('";
                    // line 211
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "')\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "\">
                                      <font size=\"4\">";
                    // line 212
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "</font></label>
                              </div>
                          ";
                }
                // line 215
                echo "                      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "
                  </div>
                  <div class=\"box-footer\">
                      <div class=\"col-md-3\" style=\"border: 1px solid white\">
                          <label>Fecha Compromiso:</label><input type=\"date\" name=\"refecha\" id=\"refecha\" class=\"form-control\" value=\"";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "fecha_compromiso", array()), "html", null, true);
        echo "\">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div id=\"observacion\" name=\"observacion\" class=\"row\">
          <div class=\"col-xs-12\">
              <div class=\"box\">
                  <div class=\"box-header\">
                      <h3 class=\"box-title\">OBSERVACIÓN</h3>
                  </div>
                  <div class=\"box-body\">
                      <font size=\"4\"><input type=\"text\" name=\"reobservacion\" id=\"reobservacion\" placeholder=\"Ingrese una observacion correspondiente a la orden\" class=\"form-control\" value=\"";
        // line 233
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "observacion", array()), "html", null, true);
        echo "\"></font>
                  </div>
              </div>
          </div>
       </div>

        <a data-toggle='tooltip' data-placement='top' name=\"btnreingresar\" id=\"btnreingresar\" class='btn btn-success btn-sm'>Reingresar Orden
        </a>
        <input type=\"hidden\" name=\"reactividad\" id=\"reactividad\" value=\"";
        // line 241
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "actividad", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"retipoorden\" id=\"retipoorden\" value=\"";
        // line 242
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "tipoorden", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"rebloque\" id=\"rebloque\" value=\"";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "bloque", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"remotivo\" id=\"remotivo\" value=\"";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "motivo", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"recomuna\" id=\"recomuna\" value=\"";
        // line 245
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "comuna", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"reresultado\" id=\"reresultado\" value=\"";
        // line 246
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "resultado", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"reid\" id=\"reid\" value=\"";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"reordenid\" id=\"reordenid\" value=\"";
        // line 248
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "n_orden", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"reordenid1\" id=\"reordenid1\" value=\"";
        // line 249
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "id_orden", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"reagendamiento\" id=\"reagendamiento\" value=\"";
        // line 250
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "reagendamiento", array()), "html", null, true);
        echo "\">
      </div>
      </form>
    </section>
  ";
    }

    // line 255
    public function block_appScript($context, array $blocks = array())
    {
        // line 256
        echo "    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "confirmacion/programacion/reingresar_confirmacion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  583 => 256,  580 => 255,  571 => 250,  567 => 249,  563 => 248,  559 => 247,  555 => 246,  551 => 245,  547 => 244,  543 => 243,  539 => 242,  535 => 241,  524 => 233,  508 => 220,  502 => 216,  495 => 215,  489 => 212,  483 => 211,  480 => 210,  474 => 207,  468 => 206,  465 => 205,  462 => 204,  457 => 203,  443 => 191,  436 => 190,  430 => 187,  424 => 186,  421 => 185,  415 => 182,  409 => 181,  406 => 180,  403 => 179,  398 => 178,  384 => 166,  377 => 165,  371 => 162,  365 => 161,  362 => 160,  356 => 157,  350 => 156,  347 => 155,  344 => 154,  339 => 153,  326 => 142,  319 => 141,  313 => 138,  307 => 137,  304 => 136,  298 => 133,  292 => 132,  289 => 131,  286 => 130,  281 => 129,  265 => 116,  259 => 113,  256 => 112,  249 => 111,  243 => 108,  237 => 107,  234 => 106,  228 => 103,  222 => 102,  219 => 101,  216 => 100,  211 => 99,  198 => 88,  191 => 87,  185 => 84,  179 => 83,  176 => 82,  170 => 79,  164 => 78,  161 => 77,  158 => 76,  153 => 75,  140 => 64,  134 => 63,  128 => 60,  122 => 59,  119 => 58,  113 => 55,  107 => 54,  104 => 53,  101 => 52,  97 => 51,  80 => 37,  74 => 34,  68 => 31,  62 => 28,  56 => 25,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/programacion/reingresar_confirmacion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\programacion\\reingresar_confirmacion.twig");
    }
}
