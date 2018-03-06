<?php

/* confirmacion/programacion/programacion.twig */
class __TwigTemplate_aa82cdecbc637c1eb85c14819d7325c99e74664e8ede9e7ec63ede28363ed26b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/programacion/programacion.twig", 1);
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
    <li class=\"active\">Nuevo Registro</li>
    </ol>
</section>
  <!-- Main content -->
<section class=\"content\">
    <form id=\"formorden\" name=\"formorden\">
        <div id=\"datos_ot\" name=\"datos_ot\" class=\"row\">
            <div class=\"col-xs-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Ingrese datos de la Orden</h3>
                    </div>
                    <div class=\"box-body\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <label>ID Orden:</label><input type=\"text\" name=\"textidorden\" id=\"textidorden\" class=\"form-control\">
                            </div>
                            <div class=\"col-md-4\">
                                <label>Rut Cliente:</label><input type=\"text\" name=\"textrutcliente\" id=\"textrutcliente\" class=\"form-control\">
                            </div>
                            <div class=\"col-md-4\">
                                <label>Fecha Compromiso:</label><input type=\"date\" name=\"textfecha\" min=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" id=\"textfecha\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
                            </div>
                        </div>

                        <!-- <div class=\"col-md-4\">
                            <label>Reg:</label><input type=\"text\" name=\"textreg\" id=\"textreg\" class=\"form-control\" value=\"\">
                        </div> -->
                    </div>
                </div>
            </div>
        <!-- </div>
        <div id=\"bloque\" name=\"bloque\" class=\"row\"> -->
            <div class=\"col-xs-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">BLOQUE</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            if ((false != ($context["db_bloque"] ?? null))) {
                // line 51
                echo "                            <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rbbloque\" id=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "\" onchange=\"cargarblo('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "')\" >
                                <font size=\"4\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "</font></label>
                            </div>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </div>
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
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 68
            echo "                        <div class=\"col-xs-1\" style=\"border: 1px solid white\">
                            <label><input type=\"radio\" name=\"reag\" id=\"reag-";
            // line 69
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" onchange=\"cargarreag('";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "')\">
                            ";
            // line 70
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</label>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                    </div>
                </div>
            </div>
        </div>
        <div id=\"motivocall\" name=\"motivocall\" class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">MOTIVO DEL LLAMADO</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_motivo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_motivo"] ?? null))) {
                // line 85
                echo "                            <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rbmotivo\" id=\"";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                echo "\" onchange=\"cargarmot('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                echo "')\">
                                ";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                echo "</label>
                            </div>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                    </div>
                </div>
            </div>
        </div>
        <div id=\"comunas\" name=\"comuna\" class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">COMUNA</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 102
                echo "                            <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rbcomuna\" id=\"";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                echo "\" onchange=\"cargarcom('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                echo "')\">
                                ";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                echo "</label>
                            </div>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                        <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                            <label>NODO:<input type=\"number\" min='1' name=\"textnodo\" id=\"textnodo\" class=\"form-control\" placeholder=\"NODO\"></label>
                        </div>
                        <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                            <label>SUBNODO:<input type=\"number\" min='1' name=\"textsubnodo\" id=\"textsubnodo\" class=\"form-control\" placeholder=\"SUBNODO\" value=\"0\"></label>
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
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_tipoorden"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_tipoorden"] ?? null))) {
                // line 125
                echo "                            <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rtipoorden\" id=\"";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                echo "\" onchange=\"cargartipoorden('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_tipoorden", array()), "html", null, true);
                echo "')\">
                                ";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                echo "</label>
                            </div>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                    </div>
                </div>
            </div>
        </div>
        <div id=\"actividad\" name=\"actividad\" class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">ACTIVIDAD</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_actividad"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if ((false != ($context["db_actividad"] ?? null))) {
                // line 142
                echo "                            <div class=\"col-xs-3\" style=\"border: 0px solid white\">
                                <label><input type=\"radio\" name=\"rbactividad\" id=\"";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                echo "\" onchange=\"cargaract('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                echo "')\">
                                ";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                echo "</label>
                            </div>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "                    </div>
                </div>
            </div>
        </div>
        <div id=\"resultado\" name=\"resultado\" class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">RESULTADO</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_resultado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_resultado"] ?? null))) {
                // line 159
                echo "                            <div class=\"col-xs-4\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rbresultado\" id=\"";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                echo "\" onchange=\"cargarres('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "cumplimiento", array()), "html", null, true);
                echo "')\">
                                ";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                echo "</label>
                            </div>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                    </div>
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
                        <font size=\"4\"><input type=\"text\" name=\"textobservacion\" id=\"textobservacion\" placeholder=\"Ingrese una observacion correspondiente a la orden\" class=\"form-control\" value=\"\"></font>
                    </div>
                </div>
            </div>
        </div>

        <a data-toggle='tooltip' data-placement='top' name=\"btningresar\" id=\"btningresar\" class='btn btn-success btn-sm'>Ingresar Orden
        </a>

        <input type=\"hidden\" name=\"textactividad\" id=\"textactividad\">
        <input type=\"hidden\" name=\"textbloque\" id=\"textbloque\">
        <input type=\"hidden\" name=\"textmotivo\" id=\"textmotivo\">
        <input type=\"hidden\" name=\"textcomuna\" id=\"textcomuna\">
        <input type=\"hidden\" name=\"textresultado\" id=\"textresultado\">
        <input type=\"hidden\" name=\"texttipoorden\" id=\"texttipoorden\">
        <input type=\"hidden\" name=\"reagendamiento\" id=\"reagendamiento\">
        <input type=\"hidden\" name=\"textid\" id=\"textid\" value=\"";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array"), "html", null, true);
        echo "\">
    </form>
</section>
";
    }

    // line 196
    public function block_appScript($context, array $blocks = array())
    {
        // line 197
        echo "  <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
    <script type=\"text/javascript\">
        window.onload= function(){
            document.formorden.textidorden.focus()
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/programacion/programacion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 197,  376 => 196,  368 => 192,  338 => 164,  328 => 161,  320 => 160,  317 => 159,  312 => 158,  299 => 147,  289 => 144,  283 => 143,  280 => 142,  275 => 141,  262 => 130,  252 => 127,  246 => 126,  243 => 125,  238 => 124,  219 => 107,  209 => 104,  203 => 103,  200 => 102,  195 => 101,  182 => 90,  172 => 87,  166 => 86,  163 => 85,  158 => 84,  145 => 73,  136 => 70,  130 => 69,  127 => 68,  123 => 67,  110 => 56,  100 => 53,  94 => 52,  91 => 51,  86 => 50,  63 => 32,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/programacion/programacion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\programacion\\programacion.twig");
    }
}
