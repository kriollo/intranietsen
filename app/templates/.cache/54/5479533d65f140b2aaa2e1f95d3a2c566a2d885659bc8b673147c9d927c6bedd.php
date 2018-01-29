<?php

/* coordinacion/distribucion/distribucion.twig */
class __TwigTemplate_1b39f7e715f0a0948504a754187604ce78e635042ea0ded59d647f6a50738a25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "coordinacion/distribucion/distribucion.twig", 1);
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
  <i class=\"fa fa-user\"></i> Distribucion
  </h4>
</section>
<div class=\"box-body\">
  <div class=\"row\">
    <div class=\"col-md-1\">
    </div>
    <section class=\"content\">
      <div class=\"col-md-12\">
        <div class=\"box box-primary\">
          <div class=\"box-body\">
          <form id=\"formusuarios\" name=\"formusuarios\">
            <div class=\"form-group\">
              <div class=\"panel-footer\">
                <label>Seleccionar Bloque:</label>
                &nbsp
                <label>
                  <select  id='selectbloque' name='selectbloque' onchange='seleccionar_bloque()'>
                    <option>--</option>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            if ((false != ($context["db_bloque"] ?? null))) {
                // line 25
                echo "                    <option value='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["b"], "bloque", array()), "html", null, true);
                echo "</option>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                  </select>
                </label>
              </div>
            </div>
            </form>
            <form id=\"form2\" name=\"form2\">
            <input type=\"hidden\" id=\"textoculto\" name=\"textoculto\">
          </form>
            <div id=\"select_bloque\" name=\"select_bloque\">

            </div>

          </div>
        </div>
      </div>
    </section>
  </div>
</div>
";
    }

    // line 46
    public function block_appScript($context, array $blocks = array())
    {
        // line 47
        echo "
  <script src=\"views/app/js/coordinacion/distribucion.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "coordinacion/distribucion/distribucion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 47,  94 => 46,  72 => 27,  60 => 25,  55 => 24,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "coordinacion/distribucion/distribucion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\coordinacion\\distribucion\\distribucion.twig");
    }
}
