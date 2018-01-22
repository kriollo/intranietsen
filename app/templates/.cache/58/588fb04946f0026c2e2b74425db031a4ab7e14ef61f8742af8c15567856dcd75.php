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
                            <label>Rut Cliente:</label><input type=\"text\" name=\"textmodrutcliente\" id=\"textmodrutcliente\" class=\"form-control\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "rut_cliente", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-4\">
                            <label>Fecha Compromiso:</label><input type=\"date\" name=\"textmodfecha\" id=\"textmodfecha\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "fecha_compromiso", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-4\">
                            <label>Reg:</label><input type=\"text\" name=\"textmodreg\" id=\"textmodreg\" class=\"form-control\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "reg", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-8\">
                            <label>Ejecutivo:</label><input type=\"text\" name=\"textuser\" id=\"textuser\" class=\"form-control\" value=\"";
        // line 35
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
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            if ((false != ($context["db_bloque"] ?? null))) {
                // line 50
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "bloque", array()))) {
                    // line 51
                    echo "                                <div class=\"col-md-3\" style=\"border: 1px solid white\">
                                    <label><input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarmodblo('";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "')\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "\" checked=\"checked\">
                                        <font size=\"4\">";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "</font></label>
                                </div>
                            ";
                } else {
                    // line 56
                    echo "                                <div class=\"col-md-3\" style=\"border: 1px solid white\">
                                    <label><input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargarmodblo('";
                    // line 57
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "')\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "\">
                                        <font size=\"4\">";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                    echo "</font></label>
                                </div>
                            ";
                }
                // line 61
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_motivo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_motivo"] ?? null))) {
                // line 74
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "motivo", array()))) {
                    // line 75
                    echo "                    <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                      <label><input type=\"radio\" name=\"rbmodmotivo\" id=\"";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodmot('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                      ";
                    // line 77
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "</label>
                    </div>
                  ";
                } else {
                    // line 80
                    echo "                    <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                      <label><input type=\"radio\" name=\"rbmodmotivo\" id=\"";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodmot('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "')\">
                      ";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                    echo "</label>
                    </div>
                  ";
                }
                // line 85
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
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
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 98
                echo "              ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "comuna", array()))) {
                    // line 99
                    echo "                <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodcomuna\" id=\"";
                    // line 100
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodcom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                  ";
                    // line 101
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                } else {
                    // line 104
                    echo "                <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodcomuna\" id=\"";
                    // line 105
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodcom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "')\">
                  ";
                    // line 106
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                }
                // line 109
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "            <div class=\"col-xs-2\" style=\"border: 1px solid white\">
              <label>NODO:<input type=\"text\" name=\"textmodnodo\" id=\"textmodnodo\" class=\"form-control\" placeholder=\"NODO\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "nodo", array()), "html", null, true);
        echo "\"></label>
            </div>
            <div class=\"col-xs-2\" style=\"border: 1px solid white\">
              <label>SUBNODO:<input type=\"text\" name=\"textmodsubnodo\" id=\"textmodsubnodo\" class=\"form-control\" placeholder=\"SUBNODO\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "subnodo", array()), "html", null, true);
        echo "\"></label>
            </div>
          </div>
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
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_actividad"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if ((false != ($context["db_actividad"] ?? null))) {
                // line 128
                echo "              ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "actividad", array()))) {
                    // line 129
                    echo "                <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodactividad\" id=\"";
                    // line 130
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodact('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                  ";
                    // line 131
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                } else {
                    // line 134
                    echo "                <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                  <label><input type=\"radio\" name=\"rbmodactividad\" id=\"";
                    // line 135
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodact('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "')\">
                  ";
                    // line 136
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                    echo "</label>
                </div>
              ";
                }
                // line 139
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
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
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_resultado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_resultado"] ?? null))) {
                // line 153
                echo "                ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "resultado", array()))) {
                    // line 154
                    echo "                  <div class=\"col-xs-4\" style=\"border: 1px solid white\">
                    <label><input type=\"radio\" name=\"rbmodresultado\" id=\"";
                    // line 155
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodres('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                    ";
                    // line 156
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "</label>
                  </div>
                ";
                } else {
                    // line 159
                    echo "                  <div class=\"col-xs-4\" style=\"border: 1px solid white\">
                    <label><input type=\"radio\" name=\"rbmodresultado\" id=\"";
                    // line 160
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"cargarmodres('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                    echo "')\">
                    ";
                    // line 161
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                    echo "</label>
                  </div>
                ";
                }
                // line 164
                echo "              ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
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
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "observacion", array()), "html", null, true);
        echo "\"></font>
                  </div>
              </div>
          </div>
       </div>

        <a data-toggle='tooltip' data-placement='top' name=\"modbtningresar\" id=\"modbtningresar\" class='btn btn-success btn-sm'>Modificar Orden
        </a>
        <input type=\"hidden\" name=\"textmodactividad\" id=\"textmodactividad\" value=\"";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "actividad", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodbloque\" id=\"textmodbloque\" value=\"";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "bloque", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodmotivo\" id=\"textmodmotivo\" value=\"";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "motivo", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodcomuna\" id=\"textmodcomuna\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "comuna", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodresultado\" id=\"textmodresultado\" value=\"";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "resultado", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"textmodid\" id=\"textmodid\" value=\"";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "operador", array()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"ordenid\" id=\"ordenid\" value=\"";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_modorden"] ?? null), "id_orden", array()), "html", null, true);
        echo "\">
      </div>
      </form>
    </section>
  ";
    }

    // line 196
    public function block_appScript($context, array $blocks = array())
    {
        // line 197
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
        return array (  446 => 197,  443 => 196,  434 => 191,  430 => 190,  426 => 189,  422 => 188,  418 => 187,  414 => 186,  410 => 185,  399 => 177,  385 => 165,  378 => 164,  372 => 161,  366 => 160,  363 => 159,  357 => 156,  351 => 155,  348 => 154,  345 => 153,  340 => 152,  326 => 140,  319 => 139,  313 => 136,  307 => 135,  304 => 134,  298 => 131,  292 => 130,  289 => 129,  286 => 128,  281 => 127,  265 => 114,  259 => 111,  256 => 110,  249 => 109,  243 => 106,  237 => 105,  234 => 104,  228 => 101,  222 => 100,  219 => 99,  216 => 98,  211 => 97,  198 => 86,  191 => 85,  185 => 82,  179 => 81,  176 => 80,  170 => 77,  164 => 76,  161 => 75,  158 => 74,  153 => 73,  140 => 62,  133 => 61,  127 => 58,  121 => 57,  118 => 56,  112 => 53,  106 => 52,  103 => 51,  100 => 50,  95 => 49,  78 => 35,  72 => 32,  66 => 29,  60 => 26,  56 => 25,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/programacion/editar_confirmacion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\programacion\\editar_confirmacion.twig");
    }
}
