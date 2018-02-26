<?php

/* confirmacion/cuadrante/editar_cuadrante.twig */
class __TwigTemplate_3783fd50d122fe8e1751f5fff375707f5d2c68ec194c9d898406d15069ce911a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "confirmacion/cuadrante/editar_cuadrante.twig", 1);
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
            <small>Editar Cuadrante</small>
        </h1>
        <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
        <li><a href=\"confirmacion/mantenedores_crud_masters\">Mantenedores</a></li>
        <li><a href=\"confirmacion/listar_cuadrante\">Listado de Cuadrantes</a></li>
        <li class=\"active\">Editar Cuadrante</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"box box-primary\">
            <form id=\"editar_cuadrante_form\"  action=\"\" method=\"POST\">
              <div class=\"box-body col-sm-4\"></div>
              <div class=\"box-body col-sm-4\">
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"nombre_cuadrante\" id=\"nombre_cuadrante\" type=\"text\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["resultado_db"] ?? null), "nombre", array()), "html", null, true);
        echo "\" required/>
                  <input class=\"form-control\" name=\"nodo\" id=\"nodo\" type=\"number\" min='1' value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["resultado_db"] ?? null), "nodo", array()), "html", null, true);
        echo "\" required/>
                  <input class=\"form-control\" name=\"id_cuadrante\" id=\"id_cuadrante\" type=\"hidden\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["resultado_db"] ?? null), "id_cuadrante", array()), "html", null, true);
        echo "\"/>
                  <select class=\"form-control\" name=\"comuna\" id=\"comuna\">
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comuna"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            if ((false != ($context["comuna"] ?? null))) {
                // line 32
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "estado", array()) == 1)) {
                    // line 33
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["resultado_db"] ?? null), "cod_comuna", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre", array()))) {
                        // line 34
                        echo "                                <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre", array()), "html", null, true);
                        echo "\" selected=\"selected\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre", array()), "html", null, true);
                        echo "</option>
                            ";
                    } else {
                        // line 36
                        echo "                                <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["d"], "nombre", array()), "html", null, true);
                        echo "</option>
                            ";
                    }
                    // line 38
                    echo "                        ";
                }
                // line 39
                echo "                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                  </select>
                <div class=\"panel-footer text-center\">
                  <button type=\"button\" id=\"update_cuadrante\" onclick=\"editar_cuadrante(";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["resultado_db"] ?? null), "id_cuadrante", array()), "html", null, true);
        echo ");\" class=\"btn btn-default\">Grabar</button>
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

    // line 53
    public function block_appScript($context, array $blocks = array())
    {
        // line 54
        echo "    <script src=\"views/app/js/confirmacion/confirmacion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "confirmacion/cuadrante/editar_cuadrante.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 54,  131 => 53,  116 => 42,  112 => 40,  105 => 39,  102 => 38,  94 => 36,  86 => 34,  83 => 33,  80 => 32,  75 => 31,  70 => 29,  66 => 28,  62 => 27,  38 => 5,  35 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "confirmacion/cuadrante/editar_cuadrante.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\confirmacion\\cuadrante\\editar_cuadrante.twig");
    }
}
