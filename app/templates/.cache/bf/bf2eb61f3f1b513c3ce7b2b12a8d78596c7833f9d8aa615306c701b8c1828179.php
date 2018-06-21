<?php

/* redes/editar_fen.twig */
class __TwigTemplate_b2b7e2eefc11834b4e60b67205b8844073213212fa860215e9f5a112bb69fc5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "redes/editar_fen.twig", 1);
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
  <h4>
    <i class=\"fa fa-cogs\"></i>
    REGISTRO REDES
  </h4>
  <ol class=\"breadcrumb\">
    <li><a href=\"portal\"><i class=\"fa fa-home\"></i>Home</a></li>
    <li><a href=\"redes/listarfen\"> Listar Registros  </a></li>
    <li class=\"active\">Editar</li>
  </ol>
</section>


<section class=\"content\">
    <form id=\"edformfen\" name=\"edformfen\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box\">
            <div class=\"box-header\">
              <h3 class=\"box-title\">Ingreso FEN/SIX</h3>
            </div>
            <div class=\"box-body\">
              <div class=\"col-md-4\">
                <label>FEN/SIX:</label><input type=\"text\" name=\"edtextfen\" id=\"edtextfen\" class=\"form-control\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "fen", array()), "html", null, true);
        echo "\" readonly>
              </div>
              <div class=\"col-md-4\">
                <label>Usuario:</label><input type=\"text\" name=\"edtextusuario\" id=\"edtextusuario\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "name", array()), "html", null, true);
        echo "\" readonly>
              </div>
              <div class=\"col-md-4\">
                <label>Fecha:</label><input type=\"date\" name=\"edfechafen\" id=\"edfechafen\" class=\"form-control\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "fecha", array()), "html", null, true);
        echo "\" readonly>
              </div>
              <div class=\"col-md-4\">
                  <label>N° OT TANGO</label><input type=\"text\" name=\"edtangofen\" id=\"edtangofen\" class=\"form-control\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "numerotango", array()), "html", null, true);
        echo "\">
              </div>
              <div class=\"col-md-4\">
                  <label>N° OT INFOR:</label><input type=\"text\" name=\"edinfofen\" id=\"edinfofen\" class=\"form-control\"  value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "numeroot", array()), "html", null, true);
        echo "\">
              </div>
              <div class=\"col-md-4\">
                <div class=\"\">
                </div>
                <br>
                <center>
                <label>OT INFOR SOLICITADA</label>
                &nbsp
                &nbsp
                &nbsp
              ";
        // line 49
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "opciones", array()) == "SI")) {
            // line 50
            echo "              <label><input type=\"radio\" name=\"edrbopcion\" id=\"edrbopcionsi\" onchange=\"edcargaropcion('SI')\" checked='checked'>SI</label>
              ";
        } else {
            // line 52
            echo "              <label><input type=\"radio\" name=\"edrbopcion\" id=\"edrbopcionsi\" onchange=\"edcargaropcion('SI')\">SI</label>
              ";
        }
        // line 54
        echo "              &nbsp
              &nbsp
              &nbsp
              ";
        // line 57
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "opciones", array()) == "NO")) {
            // line 58
            echo "                <label><input type=\"radio\" name=\"edrbopcion\" id=\"edrbopcionno\" onchange=\"edcargaropcion('NO')\" checked='checked'>NO</label>
              ";
        } else {
            // line 60
            echo "                <label><input type=\"radio\" name=\"edrbopcion\" id=\"edrbopcionno\" onchange=\"edcargaropcion('NO')\">NO</label>
              ";
        }
        // line 62
        echo "              </center>
              </div>
            </div>
          </div>
        </div>
       </div>
       <div class=\"row\">
        <div class=\"col-md-12\">
         <div class=\"box\">
            <div class=\"box-header\">
              <h3 class=\"box-title\">COMUNA</h3>
            </div>
            <div class=\"box-body\">
              <div class=\"col-md-12\">
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 77
                echo "                 ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "nombre", array()))) {
                    // line 78
                    echo "                  <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                    <label><input type=\"radio\" name=\"edrbcomuna\" id=\"";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"edcargarcom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                    echo "')\" checked=\"checked\">
                     ";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "</label>
                   </div>
                   ";
                } else {
                    // line 83
                    echo "                   <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                     <label><input type=\"radio\" name=\"edrbcomuna\" id=\"";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "\" onchange=\"edcargarcom('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                    echo "')\">
                      ";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                    echo "</label>
                    </div>
                    ";
                }
                // line 88
                echo "                  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "               </div>
               <div class=\"col-md-4\">
                 <label>RUT TITULAR</label><input type=\"text\" name=\"edrutfen\" id=\"edrutfen\" class=\"form-control\"  value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "rut_titular", array()), "html", null, true);
        echo "\">
               </div>
               <div class=\"col-md-6\">
                 <label>Direccion</label><input type=\"text\" name=\"edtextdir\" id=\"edtextdir\" class=\"form-control\"  value=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "direccion", array()), "html", null, true);
        echo "\">
               </div>
               <div class=\"col-md-4\">
                 <label>Fecha Inicio:</label><input type=\"date\" name=\"edfeninicio\" id=\"edfeninicio\" class=\"form-control\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "fechainicio", array()), "html", null, true);
        echo "\" >
               </div>
               <div class=\"col-md-4\">
                 <label>Fecha Final:</label><input type=\"date\" name=\"edfenfinal\" id=\"edfenfinal\" min=\"";
        // line 100
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" class=\"form-control\"  value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "fechafinal", array()), "html", null, true);
        echo "\" >
               </div>
               <div class=\"col-md-4\">
                 <label for=\"fenturnos\">Turno</label>
                 <select class=\"form-control\" id=\"edfenturnos\" name=\"edfenturnos\">
                   ";
        // line 105
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "turno", array()) == "1")) {
            // line 106
            echo "                    <option value=\"1\">AM</option>
                   ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 107
($context["db_fen"] ?? null), "turno", array()) == "2")) {
            // line 108
            echo "                    <option value=\"2\">PM</option>
                   ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 109
($context["db_fen"] ?? null), "turno", array()) == "3")) {
            // line 110
            echo "                     <option value=\"3\">NOCHE</option>
                   ";
        } else {
            // line 112
            echo "                       <option value=\"0\">--</option>
                   ";
        }
        // line 114
        echo "                   <option value=\"1\">AM</option>
                   <option value=\"2\">PM</option>
                   <option value=\"3\">NOCHE</option>
                 </select>
               </div>
               <div class=\"col-md-4\">
                 <label>Alarma Central:</label><input type=\"text\" name=\"edtextalarma\" id=\"edtextalarma\" class=\"form-control\"  value=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "alarma", array()), "html", null, true);
        echo "\">
               </div>
               <div class=\"col-md-4\">
                 <label>AC</label><input type=\"text\" name=\"edacfen\" id=\"edacfen\" class=\"form-control\"  value=\"";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "ac", array()), "html", null, true);
        echo "\">
               </div>
               <div class=\"col-md-4\">
                 <label>AD</label><input type=\"text\" name=\"edadfen\" id=\"edadfen\" class=\"form-control\"  value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "ad", array()), "html", null, true);
        echo "\">
               </div>
            </div>
          </div>
         </div>
        </div>
        <div class=\"row\">
         <div class=\"col-md-12\">
           <div class=\"box\">
             <div class=\"box-header\">
               <h3 class=\"box-title\">DETALLE DE ORDEN</h3>
             </div>
             <div class=\"box-body\">
             <div class=\"col-md-4\">
               <label for=\"fenescalado\">Escalado</label>
               <select class=\"form-control\" id=\"edfenescalado\" name=\"edfenescalado\">
                 ";
        // line 142
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "escalado", array()) == "1")) {
            // line 143
            echo "                  <option value=\"1\">OPERADOR</option>
                 ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 144
($context["db_fen"] ?? null), "escalado", array()) == "2")) {
            // line 145
            echo "                  <option value=\"2\">NNOC</option>
                 ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 146
($context["db_fen"] ?? null), "escalado", array()) == "3")) {
            // line 147
            echo "                   <option value=\"3\">SDMH</option>
                 ";
        } else {
            // line 149
            echo "                     <option value=\"0\">--</option>
                 ";
        }
        // line 151
        echo "                 <option value=\"1\">OPERADOR</option>
                 <option value=\"2\">NNOC</option>
                 <option value=\"3\">SDMH</option>
               </select>
             </div>
             <div class=\"col-md-4\">
               <label for=\"edfenestado\">Estado</label>
               <select class=\"form-control\" id=\"edfenestado\" name=\"edfenestado\">
                 ";
        // line 159
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "estado", array()) == "1")) {
            // line 160
            echo "                  <option value=\"1\">PENDIENTE</option>
                 ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 161
($context["db_fen"] ?? null), "estado", array()) == "2")) {
            // line 162
            echo "                  <option value=\"2\">EJECUTANDO</option>
                 ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 163
($context["db_fen"] ?? null), "estado", array()) == "3")) {
            // line 164
            echo "                   <option value=\"3\">CONDICIONANDO AL ESTATUS</option>
                 ";
        } else {
            // line 166
            echo "                     <option value=\"0\">--</option>
                 ";
        }
        // line 168
        echo "                 <option value=\"1\">PENDIENTE</option>
                 <option value=\"2\">EJECUTANDO</option>
                 <option value=\"3\">CONDICIONANDO AL ESTATUS</option>
               </select>
             </div>
             <div class=\"col-md-4\">
               <label>Motivo:</label><input type=\"text\" name=\"edtextmotivo\" id=\"edtextmotivo\" class=\"form-control\" value=\"";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "numerotango", array()), "html", null, true);
        echo "\">
             </div>
             <div class=\"col-md-4\">
               <label for=\"fentecnico\">CODIGO TECNICO</label>
               <input class=\"form-control\" id=\"fentecnico\" name=\"fentecnico\" value=\"";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "codigo_tecnico", array()), "html", null, true);
        echo "\" onchange=\"selectecnico(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["t"] ?? null), "codigo", array()), "html", null, true);
        echo ")\">
            </div>
             <div class=\"col-md-8\">
               <label>Observacion</label><textarea type=\"text\" name=\"edobservacionfen\" id=\"edobservacionfen\" class=\"form-control\">";
        // line 181
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "observacion", array()), "html", null, true);
        echo "</textarea>
             </div>
             <div class=\"col-md-4\">
               <div class=\"row\">
                 <br>
                 <br>
               <center>
               <label>ESTATUS INFORME</label>
               &nbsp
               &nbsp
               &nbsp
             ";
        // line 192
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "estatus", array()) == "ABIERTO")) {
            // line 193
            echo "                <label><input type=\"radio\" name=\"edestatus\" id=\"edestatusabierto\" onchange=\"edcargaestatus('ABIERTO')\" checked='checked'>ABIERTO</label>
             ";
        } else {
            // line 195
            echo "                <label><input type=\"radio\" name=\"edestatus\" id=\"edestatusabierto\" onchange=\"edcargaestatus('ABIERTO')\">ABIERTO</label>
             ";
        }
        // line 197
        echo "             &nbsp
             &nbsp
             &nbsp
             ";
        // line 200
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "estatus", array()) == "CERRADO")) {
            // line 201
            echo "               <label><input type=\"radio\" name=\"edestatus\" id=\"edestatuscerrado\" onchange=\"edcargaestatus('CERRADO')\" checked='checked'>CERRADO</label>
             ";
        } else {
            // line 203
            echo "               <label><input type=\"radio\" name=\"edestatus\" id=\"edestatuscerrado\" onchange=\"edcargaestatus('CERRADO')\">CERRADO</label>
             ";
        }
        // line 205
        echo "             </center>
             </div>
            </div>
            <div class=\"col-md-12\">
              <br>
              <div class=\"col-md-4\">
              </div>
            <div class=\"\">
              <button type=\"button\" class=\"btn btn-success col-md-2\" id=\"btnmodificar\"  name=\"btnmodificar\" >Modificar</button>
            </div>
            <br>
          </div>
           </div>
         </div>
       </div>

    </div>
    <input type=\"hidden\" name=\"edid\" id=\"edid\" value=\"";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["db_fen"] ?? null), "id_fen", array()), "html", null, true);
        echo "\" >
    <input type=\"hidden\" name=\"edtextcomunass\" id=\"edtextcomunass\" >
    <input type=\"hidden\" name=\"edtextopcion\" id=\"edtextopcion\">
    <input type=\"hidden\" name=\"edtextestatus\" id=\"edtextestatus\">

  </form>
</section>


";
    }

    // line 232
    public function block_appScript($context, array $blocks = array())
    {
        // line 233
        echo "
  <script src=\"views/app/js/redes/redes.js\"></script>


";
    }

    public function getTemplateName()
    {
        return "redes/editar_fen.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 233,  417 => 232,  403 => 222,  384 => 205,  380 => 203,  376 => 201,  374 => 200,  369 => 197,  365 => 195,  361 => 193,  359 => 192,  345 => 181,  337 => 178,  330 => 174,  322 => 168,  318 => 166,  314 => 164,  312 => 163,  309 => 162,  307 => 161,  304 => 160,  302 => 159,  292 => 151,  288 => 149,  284 => 147,  282 => 146,  279 => 145,  277 => 144,  274 => 143,  272 => 142,  253 => 126,  247 => 123,  241 => 120,  233 => 114,  229 => 112,  225 => 110,  223 => 109,  220 => 108,  218 => 107,  215 => 106,  213 => 105,  203 => 100,  197 => 97,  191 => 94,  185 => 91,  181 => 89,  174 => 88,  168 => 85,  162 => 84,  159 => 83,  153 => 80,  147 => 79,  144 => 78,  141 => 77,  136 => 76,  120 => 62,  116 => 60,  112 => 58,  110 => 57,  105 => 54,  101 => 52,  97 => 50,  95 => 49,  81 => 38,  75 => 35,  69 => 32,  63 => 29,  57 => 26,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "redes/editar_fen.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\redes\\editar_fen.twig");
    }
}
