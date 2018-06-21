<?php

/* sinmoradores/seguimiento/nuevaot.twig */
class __TwigTemplate_bc1d56658ec683761654661935f574b5e912d3e8022ab9e71faaf07146f56cae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "sinmoradores/seguimiento/nuevaot.twig", 1);
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
        Programación
        <small>Sin Moradores</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"sinmoradores\"><i class=\"fa fa-home\"></i> Home</a></li>
    <li><a href=\"sinmoradores/listar\">Listado de OT Sin Moradores</a></li>
    <li class=\"active\">Registro Nueva OT Sin Moradores</li>
    </ol>
</section>
  <!-- Main content -->
<section class=\"content\">
    <form id=\"formmotsm\" name=\"formmotsm\">
        <div id=\"mod_ot\" name=\"mod_ot\" class=\"row\">
            <div class=\"col-xs-6\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Datos Necesarios</h3>
                    </div>
                    <div class=\"box-body\">
                        <div class=\"col-md-4\">
                            <label>ID Orden:</label><input type=\"number\" name=\"idorden\" id=\"idorden\" class=\"form-control\">
                        </div>
                        <div class=\"col-md-4\">
                            <label>Rut Cliente:</label><input type=\"text\" name=\"rut\" id=\"rut\" class=\"form-control\" >
                        </div>
                        <div class=\"col-md-4\">
                            <label>Tecnico:</label><input type=\"text\" name=\"tecnico\" id=\"tecnico\" class=\"form-control\" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
        <div id=\"comunas\" name=\"comunas\" class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">COMUNA</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comunas_db"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            if ((false != ($context["comunas_db"] ?? null))) {
                // line 46
                echo "                
                    <div class=\"col-xs-2\" style=\"border: 1px solid white\">
                    <label><input type=\"radio\" name=\"rbmodcomuna\" id=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                echo "\" onchange=\"cargaComuna('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                echo "')\">
                    ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "nombre", array()), "html", null, true);
                echo "</label>
                    </div>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </div>
            </div>
        </div>
        </div>

        <div id=\"bloques\" name=\"bloques\" class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">BLOQUE</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            if ((false != ($context["db_bloque"] ?? null))) {
                // line 65
                echo "                                <div class=\"col-xs-3\" style=\"border: 1px solid white\">
                                    <label><input type=\"radio\" name=\"rbmodbloque\" onchange=\"cargaBloque('";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "')\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "\">
                                        <font size=\"4\">";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "</font></label>
                                </div>
                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </div>
                </div>
            </div>
        </div>
        <input type=\"hidden\" name=\"bloque\" id=\"bloque\">
        <input type=\"hidden\" name=\"comuna\" id=\"comuna\">
            <a data-toggle='tooltip' data-placement='top' name=\"btningresar\" id=\"btningresar\" class='btn btn-success btn-lg'>Ingresar OT
            </a>
        </div>
      </form>
    </section>
  ";
    }

    // line 82
    public function block_appScript($context, array $blocks = array())
    {
        // line 83
        echo "    <script src=\"views/app/js/sinmoradores/sinmoradores.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "sinmoradores/seguimiento/nuevaot.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 83,  154 => 82,  139 => 70,  129 => 67,  123 => 66,  120 => 65,  115 => 64,  101 => 52,  91 => 49,  85 => 48,  81 => 46,  76 => 45,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "sinmoradores/seguimiento/nuevaot.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\sinmoradores\\seguimiento\\nuevaot.twig");
    }
}
