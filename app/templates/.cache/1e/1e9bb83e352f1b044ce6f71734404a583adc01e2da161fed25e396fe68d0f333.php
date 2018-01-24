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
                        <div class=\"col-md-4\">
                            <label>ID Orden:</label><input type=\"text\" name=\"textidorden\" id=\"textidorden\" class=\"form-control\">
                            <label>Rut Cliente:</label><input type=\"text\" name=\"textrutcliente\" id=\"textrutcliente\" class=\"form-control\">
                        </div>
                        <div class=\"col-md-4\">
                            <label>Fecha Compromiso:</label><input type=\"date\" name=\"textfecha\" min=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" id=\"textfecha\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-4\">
                            <label>Reg:</label><input type=\"text\" name=\"textreg\" id=\"textreg\" class=\"form-control\" value=\"\">
                        </div>
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
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            if ((false != ($context["db_bloque"] ?? null))) {
                // line 46
                echo "                            <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rbbloque\" id=\"";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "\" onchange=\"cargarblo('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "')\" >
                                <font size=\"4\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "</font></label>
                            </div>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_motivo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["db_motivo"] ?? null))) {
                // line 63
                echo "                            <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rbmotivo\" id=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                echo "\" onchange=\"cargarmot('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                echo "')\">
                                ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "motivo", array()), "html", null, true);
                echo "</label>
                            </div>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
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
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 80
                echo "                            <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rbcomuna\" id=\"";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                echo "\" onchange=\"cargarcom('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                echo "')\">
                                ";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                echo "</label>
                            </div>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                        <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                            <label>NODO:<input type=\"text\" name=\"textnodo\" id=\"textnodo\" class=\"form-control\" placeholder=\"NODO\"></label>
                        </div>
                        <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                            <label>SUBNODO:<input type=\"text\" name=\"textsubnodo\" id=\"textsubnodo\" class=\"form-control\" placeholder=\"SUBNODO\"></label>
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
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_tipoorden"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_tipoorden"] ?? null))) {
                // line 103
                echo "                            <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rtipoorden\" id=\"";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                echo "\" onchange=\"cargartipoorden('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_tipoorden", array()), "html", null, true);
                echo "')\">
                                ";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "descripcion", array()), "html", null, true);
                echo "</label>
                            </div>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
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
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_actividad"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            if ((false != ($context["db_actividad"] ?? null))) {
                // line 120
                echo "                            <div class=\"col-xs-3\" style=\"border: 0px solid white\">
                                <label><input type=\"radio\" name=\"rbactividad\" id=\"";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                echo "\" onchange=\"cargaract('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                echo "')\">
                                ";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["a"], "actividad", array()), "html", null, true);
                echo "</label>
                            </div>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
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
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_resultado"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            if ((false != ($context["db_resultado"] ?? null))) {
                // line 137
                echo "                            <div class=\"col-xs-4\" style=\"border: 1px solid white\">
                                <label><input type=\"radio\" name=\"rbresultado\" id=\"";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                echo "\" onchange=\"cargarres('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "id_resultado", array()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "cumplimiento", array()), "html", null, true);
                echo "')\">
                                ";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["r"], "nombre", array()), "html", null, true);
                echo "</label>
                            </div>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
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
        <input type=\"hidden\" name=\"textid\" id=\"textid\" value=\"";
        // line 169
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), "id_user", array(), "array"), "html", null, true);
        echo "\">
    </form>
</section>
";
    }

    // line 173
    public function block_appScript($context, array $blocks = array())
    {
        // line 174
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
        return array (  338 => 174,  335 => 173,  327 => 169,  298 => 142,  288 => 139,  280 => 138,  277 => 137,  272 => 136,  259 => 125,  249 => 122,  243 => 121,  240 => 120,  235 => 119,  222 => 108,  212 => 105,  206 => 104,  203 => 103,  198 => 102,  179 => 85,  169 => 82,  163 => 81,  160 => 80,  155 => 79,  142 => 68,  132 => 65,  126 => 64,  123 => 63,  118 => 62,  105 => 51,  95 => 48,  89 => 47,  86 => 46,  81 => 45,  60 => 29,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/programacion/programacion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\programacion\\programacion.twig");
    }
}
