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
        <!-- </div>
        <div id=\"modbloque\" name=\"modbloque\" class=\"row\"> -->
            <div class=\"col-xs-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">BLOQUE</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            if ((false != ($context["db_bloque"] ?? null))) {
                // line 52
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "bloque", array()))) {
                    // line 53
                    echo "                                <div class=\"col-md-3\" style=\"border: 1px solid white\">
                                    <label><input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarreblo('";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "')\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "\" checked=\"checked\">
                                        <font size=\"4\">";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "</font></label>
                                </div>
                            ";
                } else {
                    // line 58
                    echo "                                <div class=\"col-md-3\" style=\"border: 1px solid white\">
                                    <label><input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarreblo('";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "')\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "\">
                                        <font size=\"4\">";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "</font></label>
                                </div>
                            ";
                }
                // line 63
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        <div class=\"col-md-4\" style=\"border: 1px solid white\">
                            <label>Fecha Compromiso:</label><input type=\"date\" name=\"refecha\" id=\"refecha\" class=\"form-control\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "fecha_compromiso", array()), "html", null, true);
        echo "\">
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
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 79
            echo "                        ";
            if (($context["i"] == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "reagendamiento", array()))) {
                // line 80
                echo "                            <div class=\"col-xs-1\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"reag\" id=\"reag-";
                // line 81
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" onchange=\"cargarreag('";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "')\" checked>
                                ";
                // line 82
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</label>
                            </div>
                        ";
            } else {
                // line 85
                echo "                            <div class=\"col-xs-1\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"reag\" id=\"reag-";
                // line 86
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" onchange=\"cargarreag('";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "')\">
                                ";
                // line 87
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</label>
                            </div>
                        ";
            }
            // line 90
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
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
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_motivo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_motivo"] ?? null))) {
                // line 103
                echo "              ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "motivo", array()))) {
                    // line 104
                    echo "                <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodmotivo\" id=\"";
                    // line 105
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "\" onchange=\"cargarremot('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                  ";
                    // line 106
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                } else {
                    // line 109
                    echo "                <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodmotivo\" id=\"";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "\" onchange=\"cargarremot('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "')\">
                  ";
                    // line 111
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                }
                // line 114
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
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
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 127
                echo "              ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "comuna", array()))) {
                    // line 128
                    echo "                <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodcomuna\" id=\"";
                    // line 129
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarrecom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                  ";
                    // line 130
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                } else {
                    // line 133
                    echo "                <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodcomuna\" id=\"";
                    // line 134
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarrecom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "')\">
                  ";
                    // line 135
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                }
                // line 138
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "            <div class=\"col-xs-2\" style=\"border: 1px solid white\">
              <label>NODO:<input type=\"number\" min='1' name=\"renodo\" id=\"renodo\" class=\"form-control\" placeholder=\"NODO\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "nodo", array()), "html", null, true);
        echo "\"></label>
            </div>
            <div class=\"col-xs-2\" style=\"border: 1px solid white\">
              <label>SUBNODO:<input type=\"number\" min='1' name=\"resubnodo\" id=\"resubnodo\" class=\"form-control\" placeholder=\"SUBNODO\" value=\"";
        // line 143
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
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_tipoorden"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_tipoorden"] ?? null))) {
                // line 157
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "tipoorden", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_tipoorden", array()))) {
                    // line 158
                    echo "                            <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rmodtipoorden\" id=\"";
                    // line 159
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "\" onchange=\"cargarretipoorden('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_tipoorden", array()), "html", null, true);
                    echo "')\"  checked=\"checked\">
                                ";
                    // line 160
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "</label>
                            </div>
                        ";
                } else {
                    // line 163
                    echo "                            <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rmodtipoorden\" id=\"";
                    // line 164
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "\" onchange=\"cargarretipoorden('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_tipoorden", array()), "html", null, true);
                    echo "')\">
                                ";
                    // line 165
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "</label>
                            </div>
                        ";
                }
                // line 168
                echo "                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
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
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_actividad"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if ((false != ($context["db_actividad"] ?? null))) {
                // line 181
                echo "              ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "actividad", array()))) {
                    // line 182
                    echo "                <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodactividad\" id=\"";
                    // line 183
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "\" onchange=\"cargarreact('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                  ";
                    // line 184
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                } else {
                    // line 187
                    echo "                <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodactividad\" id=\"";
                    // line 188
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "\" onchange=\"cargarreact('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "')\">
                  ";
                    // line 189
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                }
                // line 192
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
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
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_resultado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_resultado"] ?? null))) {
                // line 206
                echo "                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "resultado", array()))) {
                    // line 207
                    echo "                  <div class=\"col-xs-4\" style=\"border: 1px solid white\">
                    <label><input type=\"radio\" name=\"rbmodresultado\" id=\"";
                    // line 208
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "\" onchange=\"cargarreres('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                    ";
                    // line 209
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "</label>
                  </div>
                ";
                } else {
                    // line 212
                    echo "                  <div class=\"col-xs-4\" style=\"border: 1px solid white\">
                    <label><input type=\"radio\" name=\"rbmodresultado\" id=\"";
                    // line 213
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarreres('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "')\">
                    ";
                    // line 214
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "</label>
                  </div>
                ";
                }
                // line 217
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "            </table>
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
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "observacion", array()), "html", null, true);
        echo "\"></font>
                  </div>
              </div>
          </div>
       </div>

        <a data-toggle='tooltip' data-placement='top' name=\"btnreingresar\" id=\"btnreingresar\" class='btn btn-success btn-sm'>Reingresar Orden
        </a>
        <input type=\"hidden\" name=\"reactividad\" id=\"reactividad\" value=\"";
        // line 238
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "actividad", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"retipoorden\" id=\"retipoorden\" value=\"";
        // line 239
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "tipoorden", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"rebloque\" id=\"rebloque\" value=\"";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "bloque", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"remotivo\" id=\"remotivo\" value=\"";
        // line 241
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "motivo", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"recomuna\" id=\"recomuna\" value=\"";
        // line 242
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "comuna", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"reresultado\" id=\"reresultado\" value=\"";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "resultado", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"reid\" id=\"reid\" value=\"";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"reordenid\" id=\"reordenid\" value=\"";
        // line 245
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "n_orden", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"reordenid1\" id=\"reordenid1\" value=\"";
        // line 246
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "id_orden", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"reagendamiento\" id=\"reagendamiento\" value=\"";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "reagendamiento", array()), "html", null, true);
        echo "\">
      </div>
      </form>
    </section>
  ";
    }

    // line 252
    public function block_appScript($context, array $blocks = array())
    {
        // line 253
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
        return array (  580 => 253,  577 => 252,  568 => 247,  564 => 246,  560 => 245,  556 => 244,  552 => 243,  548 => 242,  544 => 241,  540 => 240,  536 => 239,  532 => 238,  521 => 230,  507 => 218,  500 => 217,  494 => 214,  488 => 213,  485 => 212,  479 => 209,  473 => 208,  470 => 207,  467 => 206,  462 => 205,  448 => 193,  441 => 192,  435 => 189,  429 => 188,  426 => 187,  420 => 184,  414 => 183,  411 => 182,  408 => 181,  403 => 180,  390 => 169,  383 => 168,  377 => 165,  371 => 164,  368 => 163,  362 => 160,  356 => 159,  353 => 158,  350 => 157,  345 => 156,  329 => 143,  323 => 140,  320 => 139,  313 => 138,  307 => 135,  301 => 134,  298 => 133,  292 => 130,  286 => 129,  283 => 128,  280 => 127,  275 => 126,  262 => 115,  255 => 114,  249 => 111,  243 => 110,  240 => 109,  234 => 106,  228 => 105,  225 => 104,  222 => 103,  217 => 102,  204 => 91,  198 => 90,  192 => 87,  186 => 86,  183 => 85,  177 => 82,  171 => 81,  168 => 80,  165 => 79,  161 => 78,  145 => 65,  142 => 64,  135 => 63,  129 => 60,  123 => 59,  120 => 58,  114 => 55,  108 => 54,  105 => 53,  102 => 52,  97 => 51,  80 => 37,  74 => 34,  68 => 31,  62 => 28,  56 => 25,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/programacion/reingresar_confirmacion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\programacion\\reingresar_confirmacion.twig");
    }
}
