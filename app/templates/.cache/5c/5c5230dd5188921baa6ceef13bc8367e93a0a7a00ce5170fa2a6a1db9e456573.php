<?php

/* coordinacion/distribucion/distribucion.twig */
class __TwigTemplate_d870fe8adad21c90f1a86152a0d956c392e4d6f131ba727d0657979515fd0617 extends Twig_Template
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
    <h1>
        Coordinación
        <small>Distribución</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
    <li class=\"active\">Dashboard</li>
    </ol>
</section>

<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">

            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs pull-rigth\">
                    <li class=\"active\"><a href=\"#tab_1-1\" data-toggle=\"tab\">DISTRIBUIR POR BLOQUE</a></li>
                    <!-- <li><a href=\"#tab_2-2\" data-toggle=\"tab\">MOVER ORDENES A EJECUTIVO</a></li>
                    <li><a href=\"#tab_3-3\" data-toggle=\"tab\">TAB 3</a></li>
                    <li><a href=\"#tab_4-4\" data-toggle=\"tab\">TAB 4</a></li> -->
                    <!-- <li class=\"pull-left header\"></li> -->
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab_1-1\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body\">
                                <form id=\"form_bloques\" name=\"form_bloques\">
                                    <div class=\"form-group\">
                                        <div class=\"panel-footer\">
                                            <label>Seleccionar Bloque:</label>
                                            &nbsp;
                                            <label>
                                                <select  id='selectbloque' name='selectbloque' onchange='seleccionar_bloque()'>
                                                    <option>--</option>
                                                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_bloque"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
            if ((false != ($context["db_bloque"] ?? null))) {
                // line 39
                echo "                                                        <option value='";
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
        // line 41
        echo "                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                                <div id=\"select_bloque\" name=\"select_bloque\">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab_2-2\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body\">
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab_3-3\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body\">
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab_4-4\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
    }

    // line 77
    public function block_appScript($context, array $blocks = array())
    {
        // line 78
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
        return array (  128 => 78,  125 => 77,  86 => 41,  74 => 39,  69 => 38,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appBody %}
<section class=\"content-header\">
    <h1>
        Coordinación
        <small>Distribución</small>
    </h1>
    <ol class=\"breadcrumb\">
    <li><a href=\"#\"><i class=\"fa fa-home\"></i> Home</a></li>
    <li class=\"active\">Dashboard</li>
    </ol>
</section>

<section class=\"content\">
    <div class=\"row\">
        <div class=\"col-md-12\">

            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs pull-rigth\">
                    <li class=\"active\"><a href=\"#tab_1-1\" data-toggle=\"tab\">DISTRIBUIR POR BLOQUE</a></li>
                    <!-- <li><a href=\"#tab_2-2\" data-toggle=\"tab\">MOVER ORDENES A EJECUTIVO</a></li>
                    <li><a href=\"#tab_3-3\" data-toggle=\"tab\">TAB 3</a></li>
                    <li><a href=\"#tab_4-4\" data-toggle=\"tab\">TAB 4</a></li> -->
                    <!-- <li class=\"pull-left header\"></li> -->
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab_1-1\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body\">
                                <form id=\"form_bloques\" name=\"form_bloques\">
                                    <div class=\"form-group\">
                                        <div class=\"panel-footer\">
                                            <label>Seleccionar Bloque:</label>
                                            &nbsp;
                                            <label>
                                                <select  id='selectbloque' name='selectbloque' onchange='seleccionar_bloque()'>
                                                    <option>--</option>
                                                    {% for b in db_bloque if false != db_bloque %}
                                                        <option value='{{ b.bloque }}'>{{ b.bloque }}</option>
                                                    {% endfor %}
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                                <div id=\"select_bloque\" name=\"select_bloque\">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab_2-2\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body\">
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab_3-3\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body\">
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab_4-4\">
                        <div class=\"box box-primary\">
                            <div class=\"box-body\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}
{% block appScript %}

  <script src=\"views/app/js/coordinacion/distribucion.js\"></script>
{% endblock %}
", "coordinacion/distribucion/distribucion.twig", "C:\\xampp\\htdocs\\proyectos\\intranietsen\\app\\templates\\coordinacion\\distribucion\\distribucion.twig");
    }
}
