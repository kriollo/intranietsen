<?php

/* redes/registrofen.twig */
class __TwigTemplate_b40f209199febc95ec1ba6a769f6d67a6fc289f8a1ca6cc6048f1685115a29b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "redes/registrofen.twig", 1);
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
    <li class=\"active\">Registro</li>
  </ol>
</section>


<section class=\"content\">
    <form id=\"formfen\" name=\"formfen\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box\">
            <div class=\"box-header\">
              <h3 class=\"box-title\">Ingreso FEN/SIX</h3>
            </div>
            <div class=\"box-body\">
              <div class=\"col-md-4\">
                <label>FEN/SIX:</label><input type=\"text\" name=\"textfen\" id=\"textfen\" class=\"form-control\">
              </div>
              <div class=\"col-md-4\">
                <label>Fecha:</label><input type=\"date\" name=\"fechafen\" id=\"fechafen\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" readonly>
              </div>
              <div class=\"col-md-4\">
                  <label>N° OT TANGO</label><input type=\"text\" name=\"tangofen\" id=\"tangofen\" class=\"form-control\">
              </div>
              <div class=\"col-md-4\">
                  <label>N° OT INFOR:</label><input type=\"text\" name=\"infofen\" id=\"infofen\" class=\"form-control\">
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
              <label><input type=\"radio\" name=\"rbopcion\" id=\"rbopcionsi\" onchange=\"cargaropcion('SI')\">SI</label>
              &nbsp
              &nbsp
              &nbsp
                <label><input type=\"radio\" name=\"rbopcion\" id=\"rbopcionno\" onchange=\"cargaropcion('NO')\">NO</label>
              </center>
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
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["db_comuna"] ?? null))) {
                // line 66
                echo "                  <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                    <label><input type=\"radio\" name=\"rbcomuna\" id=\"";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                echo "\" onchange=\"cargarcom('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "id_comuna", array()), "html", null, true);
                echo "')\">
                     ";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                echo "</label>
                   </div>
                  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "               </div>
               <div class=\"col-md-4\">
                 <label>RUT TITULAR</label><input type=\"text\" name=\"rutfen\" id=\"rutfen\" class=\"form-control\">
               </div>
               <div class=\"col-md-6\">
                 <label>Direccion</label><input type=\"text\" name=\"textdir\" id=\"textdir\" class=\"form-control\">
               </div>
               <div class=\"col-md-4\">
                 <label>Fecha Inicio:</label><input type=\"date\" name=\"feninicio\" id=\"feninicio\" class=\"form-control\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" >
               </div>
               <div class=\"col-md-4\">
                 <label>Fecha Final:</label><input type=\"date\" name=\"fenfinal\" id=\"fenfinal\" min=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" >
               </div>
               <div class=\"col-md-4\">
                 <label for=\"fenturnos\">Turno</label>
                 <select class=\"form-control\" id=\"fenturnos\" name=\"fenturnos\">
                   <option value=\"0\">--</option>
                   <option value=\"1\">AM</option>
                   <option value=\"2\">PM</option>
                   <option value=\"3\">NOCHE</option>
                 </select>
               </div>
               <div class=\"col-md-4\">
                 <label>Alarma Central:</label><input type=\"text\" name=\"textalarma\" id=\"textalarma\" class=\"form-control\">
               </div>
               <div class=\"col-md-4\">
                 <label>AC</label><input type=\"text\" name=\"acfen\" id=\"acfen\" class=\"form-control\">
               </div>
               <div class=\"col-md-4\">
                 <label>AD</label><input type=\"text\" name=\"adfen\" id=\"adfen\" class=\"form-control\">
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
               <select class=\"form-control\" id=\"fenescalado\" name=\"fenescalado\">
                 <option value=\"0\">--</option>
                 <option value=\"1\">OPERADOR</option>
                 <option value=\"2\">NNOC</option>
                 <option value=\"3\">SDMH</option>
               </select>
             </div>
             <div class=\"col-md-4\">
               <label for=\"fenestado\">Estado</label>
               <select class=\"form-control\" id=\"fenestado\" name=\"fenestado\">
                 <option>--</option>
                 <option value=\"1\">PENDIENTE</option>
                 <option value=\"2\">EJECUTANDO</option>
                 <option value=\"3\">CONDICIONANDO AL ESTATUS</option>
               </select>
             </div>
             <div class=\"col-md-4\">
               <label>Motivo:</label><input type=\"text\" name=\"textmotivo\" id=\"textmotivo\" class=\"form-control\">
             </div>
             <div class=\"col-md-4\">
               <label for=\"fentecnico\">CODIGO TECNICO</label>
               <input class=\"form-control\" id=\"fentecnico\" name=\"fentecnico\">
             </div>
             <div class=\"col-md-8\">
               <label>Observacion</label><textarea type=\"text\" name=\"observacionfen\" id=\"observacionfen\" class=\"form-control\"></textarea>
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
             <label><input type=\"radio\" name=\"estatusabierto\" id=\"estatusabierto\" onchange=\"cargaestatus('ABIERTO')\">ABIERTO</label>
             &nbsp
             &nbsp
             &nbsp
               <label><input type=\"radio\" name=\"estatusabierto\" id=\"estatuscerrado\" onchange=\"cargaestatus('CERRADO')\">CERRADO</label>
             </center>
             </div>
            </div>
            <div class=\"col-md-12\">
                <br>
                <div class=\"col-md-4\">
                </div>
                <div class=\"\">
                    <button type=\"button\" class=\"btn btn-primary col-md-2\" id=\"btnguardar\"  name=\"btnguardar\" >Guardar</button>
                </div>
                <br>
            </div>
           </div>
         </div>
       </div>

    </div>
    <input type=\"hidden\" name=\"textcomunass\" id=\"textcomunass\">
    <input type=\"hidden\" name=\"textopcion\" id=\"textopcion\">
    <input type=\"hidden\" name=\"textestatus\" id=\"textestatus\">

  </form>
</section>


";
    }

    // line 181
    public function block_appScript($context, array $blocks = array())
    {
        // line 182
        echo "
  <script src=\"views/app/js/redes/redes.js\"></script>


";
    }

    public function getTemplateName()
    {
        return "redes/registrofen.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 182,  244 => 181,  139 => 82,  133 => 79,  123 => 71,  113 => 68,  107 => 67,  104 => 66,  99 => 65,  60 => 29,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "redes/registrofen.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\redes\\registrofen.twig");
    }
}
