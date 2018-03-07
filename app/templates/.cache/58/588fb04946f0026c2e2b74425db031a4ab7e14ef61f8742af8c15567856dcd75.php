<?php

/* confirmacion/programacion/editar_confirmacion.twig */
class __TwigTemplate_56e1de9b80af4e8bac878458f6f4fca6e6d1eff04c036ce81d157e0c39487e1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/programacion/editar_confirmacion.twig", 1);
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
    <li class=\"active\">Modificar Registro</li>
    </ol>
</section>
  <!-- Main content -->
<section class=\"content\">
    <form id=\"formmodorden\" name=\"formmodorden\">
        <div id=\"mod_ot\" name=\"mod_ot\" class=\"row\">
            <div class=\"col-xs-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Modificar Orden</h3>
                    </div>
                    <div class=\"box-body\">
                        <div class=\"col-md-4\">
                            <label>ID Orden:</label><input type=\"text\" name=\"textmodidorden\" id=\"textmodidorden\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "n_orden", array()), "html", null, true);
        echo "\" readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label>Rut Cliente:</label><input type=\"text\" name=\"textmodrutcliente\" id=\"textmodrutcliente\" class=\"form-control\" value=\"";
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
                                    <label><input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarmodblo('";
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
                                    <label><input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarmodblo('";
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
                            <label>Fecha Compromiso:</label><input type=\"date\" name=\"textmodfecha\" id=\"textmodfecha\" class=\"form-control\" value=\"";
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
            echo "                            ";
            if (($context["i"] == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "reagendamiento", array()))) {
                // line 80
                echo "                                <div class=\"col-xs-1\" style=\"border: 1px solid white\">
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
                echo "                                <div class=\"col-xs-1\" style=\"border: 1px solid white\">
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
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
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
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_motivo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_motivo"] ?? null))) {
                // line 104
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "motivo", array()))) {
                    // line 105
                    echo "                    <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                      <label><input type=\"radio\" name=\"rbmodmotivo\" id=\"";
                    // line 106
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodmot('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                      ";
                    // line 107
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "</label>
                    </div>
                  ";
                } else {
                    // line 110
                    echo "                    <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                      <label><input type=\"radio\" name=\"rbmodmotivo\" id=\"";
                    // line 111
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodmot('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "')\">
                      ";
                    // line 112
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "</label>
                    </div>
                  ";
                }
                // line 115
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "              </div>
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
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 128
                echo "              ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "comuna", array()))) {
                    // line 129
                    echo "                <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodcomuna\" id=\"";
                    // line 130
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodcom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                  ";
                    // line 131
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                } else {
                    // line 134
                    echo "                <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodcomuna\" id=\"";
                    // line 135
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodcom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "')\">
                  ";
                    // line 136
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                }
                // line 139
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "            <div class=\"col-xs-2\" style=\"border: 1px solid white\">
              <label>NODO:<input type=\"number\" min='1' name=\"textmodnodo\" id=\"textmodnodo\" class=\"form-control\" placeholder=\"NODO\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "nodo", array()), "html", null, true);
        echo "\"></label>
            </div>
            <div class=\"col-xs-2\" style=\"border: 1px solid white\">
              <label>SUBNODO:<input type=\"number\" min='1' name=\"textmodsubnodo\" id=\"textmodsubnodo\" class=\"form-control\" placeholder=\"SUBNODO\" value=\"";
        // line 144
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
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_tipoorden"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_tipoorden"] ?? null))) {
                // line 158
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "tipoorden", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_tipoorden", array()))) {
                    // line 159
                    echo "                            <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rmodtipoorden\" id=\"";
                    // line 160
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodtipoorden('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_tipoorden", array()), "html", null, true);
                    echo "')\"  checked=\"checked\">
                                ";
                    // line 161
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "</label>
                            </div>
                        ";
                } else {
                    // line 164
                    echo "                            <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rmodtipoorden\" id=\"";
                    // line 165
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodtipoorden('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_tipoorden", array()), "html", null, true);
                    echo "')\">
                                ";
                    // line 166
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                    echo "</label>
                            </div>
                        ";
                }
                // line 169
                echo "                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
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
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_actividad"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if ((false != ($context["db_actividad"] ?? null))) {
                // line 182
                echo "              ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "actividad", array()))) {
                    // line 183
                    echo "                <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodactividad\" id=\"";
                    // line 184
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodact('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                  ";
                    // line 185
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                } else {
                    // line 188
                    echo "                <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodactividad\" id=\"";
                    // line 189
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodact('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "')\">
                  ";
                    // line 190
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                }
                // line 193
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
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
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_resultado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_resultado"] ?? null))) {
                // line 207
                echo "                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "resultado", array()))) {
                    // line 208
                    echo "                  <div class=\"col-xs-4\" style=\"border: 1px solid white\">
                    <label><input type=\"radio\" name=\"rbmodresultado\" id=\"";
                    // line 209
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodres('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                    ";
                    // line 210
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "</label>
                  </div>
                ";
                } else {
                    // line 213
                    echo "                  <div class=\"col-xs-4\" style=\"border: 1px solid white\">
                    <label><input type=\"radio\" name=\"rbmodresultado\" id=\"";
                    // line 214
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodres('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "')\">
                    ";
                    // line 215
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "</label>
                  </div>
                ";
                }
                // line 218
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
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
                      <font size=\"4\"><input type=\"text\" name=\"textmodobservacion\" id=\"textmodobservacion\" placeholder=\"Ingrese una observacion correspondiente a la orden\" class=\"form-control\" value=\"";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "observacion", array()), "html", null, true);
        echo "\"></font>
                  </div>
              </div>
          </div>
       </div>

        <a data-toggle='tooltip' data-placement='top' name=\"modbtningresar\" id=\"modbtningresar\" class='btn btn-success btn-sm'>Modificar Orden
        </a>
        <input type=\"hidden\" name=\"textmodactividad\" id=\"textmodactividad\" value=\"";
        // line 239
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "actividad", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodtipoorden\" id=\"textmodtipoorden\" value=\"";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "tipoorden", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodbloque\" id=\"textmodbloque\" value=\"";
        // line 241
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "bloque", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodmotivo\" id=\"textmodmotivo\" value=\"";
        // line 242
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "motivo", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodcomuna\" id=\"textmodcomuna\" value=\"";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "comuna", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodresultado\" id=\"textmodresultado\" value=\"";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "resultado", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodid\" id=\"textmodid\" value=\"";
        // line 245
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "operador", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"ordenid\" id=\"ordenid\" value=\"";
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

    // line 253
    public function block_appScript($context, array $blocks = array())
    {
        // line 254
        echo "    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
    <script type=\"text/javascript\">
        window.onload= function(){
            document.formmodorden.textmodidorden.focus()
        }
    </script>
  ";
    }

    public function getTemplateName()
    {
        return "confirmacion/programacion/editar_confirmacion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 254,  575 => 253,  565 => 247,  561 => 246,  557 => 245,  553 => 244,  549 => 243,  545 => 242,  541 => 241,  537 => 240,  533 => 239,  522 => 231,  508 => 219,  501 => 218,  495 => 215,  489 => 214,  486 => 213,  480 => 210,  474 => 209,  471 => 208,  468 => 207,  463 => 206,  449 => 194,  442 => 193,  436 => 190,  430 => 189,  427 => 188,  421 => 185,  415 => 184,  412 => 183,  409 => 182,  404 => 181,  391 => 170,  384 => 169,  378 => 166,  372 => 165,  369 => 164,  363 => 161,  357 => 160,  354 => 159,  351 => 158,  346 => 157,  330 => 144,  324 => 141,  321 => 140,  314 => 139,  308 => 136,  302 => 135,  299 => 134,  293 => 131,  287 => 130,  284 => 129,  281 => 128,  276 => 127,  263 => 116,  256 => 115,  250 => 112,  244 => 111,  241 => 110,  235 => 107,  229 => 106,  226 => 105,  223 => 104,  218 => 103,  205 => 92,  198 => 90,  192 => 87,  186 => 86,  183 => 85,  177 => 82,  171 => 81,  168 => 80,  165 => 79,  161 => 78,  145 => 65,  142 => 64,  135 => 63,  129 => 60,  123 => 59,  120 => 58,  114 => 55,  108 => 54,  105 => 53,  102 => 52,  97 => 51,  80 => 37,  74 => 34,  68 => 31,  62 => 28,  56 => 25,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/programacion/editar_confirmacion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\programacion\\editar_confirmacion.twig");
    }
}
