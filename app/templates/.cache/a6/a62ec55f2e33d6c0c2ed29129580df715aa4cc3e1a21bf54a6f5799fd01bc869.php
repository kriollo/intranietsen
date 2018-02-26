<?php

/* confirmacion/cuadrante/nuevo_cuadrante.twig */
class __TwigTemplate_17dcac195a3261ff144b05f8126ea541d9a1b05bddc0b21fc2b36bb815037474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/cuadrante/nuevo_cuadrante.twig", 1);
        $this->blocks = array(
            'appStylos' => array($this, 'block_appStylos'),
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
    public function block_appStylos($context, array $blocks = array())
    {
    }

    // line 4
    public function block_appBody($context, array $blocks = array())
    {
        // line 5
        echo "    <section class=\"content-header\">
        <h1>
            Confirmación
            <small>Agregar Cuadrante</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"confirmacion/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"confirmacion/listar_cuadrante\">Listado de Cuadrantes</a></li>
        <li class=\"active\">Nuevo Cuadrante</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"register_cuadrante_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"nombre_cuadrante\" id=\"nombre_cuadrante\" type=\"text\" placeholder=\"Nombre del cuadrante\" required/>
                  <input class=\"form-control\" name=\"nodo\" id=\"nodo\" type=\"number\" min='1' placeholder=\"nodo\" required/>
                  <select class=\"form-control\" name=\"comuna\" id=\"comuna\">
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["comuna"] ?? null))) {
                // line 31
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == 1)) {
                    // line 32
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre", array()), "html", null, true);
                    echo "</option>
                        ";
                }
                // line 34
                echo "                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                  </select>
                </div>
                <div class=\"form-group\">
                  <button type=\"button\" id=\"register_cuadrante\" class=\"btn btn-default\">Grabar</button>
                  <button type=\"reset\" id=\"limpiar\" class=\"btn btn-default\">Limpiar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

";
    }

    // line 50
    public function block_appScript($context, array $blocks = array())
    {
        // line 51
        echo "    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/cuadrante/nuevo_cuadrante.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 51,  106 => 50,  88 => 35,  81 => 34,  73 => 32,  70 => 31,  65 => 30,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/cuadrante/nuevo_cuadrante.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\cuadrante\\nuevo_cuadrante.twig");
    }
}
