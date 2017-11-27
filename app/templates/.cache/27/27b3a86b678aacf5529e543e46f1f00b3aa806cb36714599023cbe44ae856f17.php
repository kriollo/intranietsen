<?php

/* administracion/usuarios.twig */
class __TwigTemplate_d4d2e0234228d8777abcf6da6e6801706a8fa7a1e97af927c19dac323e73a3ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("portal/portal", "administracion/usuarios.twig", 1);
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
        echo "    <section class=\"content-header\">
        <h4>
        <i class=\"fa fa-user\"></i> REGISTRO DE USUARIOS
        </h4>
    </section>

    <section class=\"content\">
        <div class=\"box\">
            <div class=\"box-header with-border\">
              <div class=\"box-tools pull-right\">
                <button class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\"><i class=\"fa fa-minus\"></i></button>
              </div>
            </div>
            <div class=\"box-body\">
              <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs pull-rigth\">
                  <li class=\"active\"><a href=\"#tab_1-1\" data-toggle=\"tab\">REGISTROS</a></li>
                  <li><a href=\"#tab_2-2\" data-toggle=\"tab\">ACTUALIZAR</a></li>

                  <li class=\"pull-left header\"></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab_1-1\">
                        <b>Ingrese Datos de Usuario</b>
                        <div id=\"bloque_registro\"></div>
                        <div class=\"box box-info\">
                            <form id=\"register_form\"  action=\"\" method=\"POST\">
                                <div class=\"box-body col-sm-4\">

                                    <div class=\"form-group\">
                                        <input class=\"form-control\" name=\"name\"        id=\"name\"        type=\"text\"     placeholder=\"Nombre Completo\" required/>
                                        <input class=\"form-control\" name=\"email\"       id=\"email\"       type=\"email\"    placeholder=\"E-Mail\" required/>
                                    </div>

                                    <div class=\"form-group\">
                                        <input class=\"form-control\" name=\"pass\"        id=\"pass\"        type=\"password\" placeholder=\"Password\" required/>
                                        <input class=\"form-control\" name=\"pass_repeat\" id=\"pass_repeat\" type=\"password\" placeholder=\"Repita Password\" required/>
                                    </div>

                                    <div class=\"form-group\">
                                        <select name='perfil' id='perfil' class='form-control'>
                                            <option selected='selected'>--</option>
                                            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_perfiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["db_perfiles"] ?? null))) {
                // line 46
                echo "                                            <option value='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                echo "</option>
                                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                                            <option value='Otro'>Otro</option>
                                        </select>
                                    </div>

                                    <div class=\"checkbox\">
                                        <label>
                                            <input name=\"admin\" type=\"checkbox\" id=\"admin\" /> Usuario Administrador?
                                        </label>
                                    </div>

                                    <div class=\"form-group\">
                                        <input type=\"button\" id=\"register\" value=\"Grabar\" />
                                        <input type=\"reset\" name=\"Limpiar\" value=\"Limpiar\" />
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div id=\"bloque_registro\"></div>
                    </div><!-- /.tab-pane -->

                    <div class=\"tab-pane\" id=\"tab_2-2\">
                        <b>Seleccione Perfil para filtrar</b>
                        <div class=\"box box-info\">


                            <div class=\"row\">
                                <div class=\"box-body col-sm-4\">
                                    <form name=\"filtra_usuario_perfil\" action=\"\" method=\"POST\" onsubmit=\"consultausuarioperfil(); return false\">
                                        <select name='perfil_f' id='perfil_f' class='form-control'>
                                            <option selected='selected'>--</option>
                                            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["db_perfiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if ((false != ($context["db_perfiles"] ?? null))) {
                // line 80
                echo "                                            <option value='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["p"], "nombre", array()), "html", null, true);
                echo "</option>
                                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                                            <option value='Otro'>Otro</option>
                                        </select>
                                        <input type=\"submit\" name=\"Submit\" value=\"Buscar\" onclick=\"consultausuarioperfil(); return false\" />
                                    </form>
                                </div>
                            </div>
                            <div class=\"table-responsive\" id=\"bloque_listausuarios\"></div>
                        </div>

                    </div><!-- /.tab-pane -->
                </div>
              </div>
            </div>
        </div>
    </section>
";
    }

    // line 98
    public function block_appScript($context, array $blocks = array())
    {
        // line 99
        echo "    <script src=\"views/app/js/register/register.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "administracion/usuarios.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 99,  162 => 98,  143 => 82,  131 => 80,  126 => 79,  93 => 48,  81 => 46,  76 => 45,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'portal/portal' %}
{% block appBody %}
    <section class=\"content-header\">
        <h4>
        <i class=\"fa fa-user\"></i> REGISTRO DE USUARIOS
        </h4>
    </section>

    <section class=\"content\">
        <div class=\"box\">
            <div class=\"box-header with-border\">
              <div class=\"box-tools pull-right\">
                <button class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\"><i class=\"fa fa-minus\"></i></button>
              </div>
            </div>
            <div class=\"box-body\">
              <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs pull-rigth\">
                  <li class=\"active\"><a href=\"#tab_1-1\" data-toggle=\"tab\">REGISTROS</a></li>
                  <li><a href=\"#tab_2-2\" data-toggle=\"tab\">ACTUALIZAR</a></li>

                  <li class=\"pull-left header\"></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab_1-1\">
                        <b>Ingrese Datos de Usuario</b>
                        <div id=\"bloque_registro\"></div>
                        <div class=\"box box-info\">
                            <form id=\"register_form\"  action=\"\" method=\"POST\">
                                <div class=\"box-body col-sm-4\">

                                    <div class=\"form-group\">
                                        <input class=\"form-control\" name=\"name\"        id=\"name\"        type=\"text\"     placeholder=\"Nombre Completo\" required/>
                                        <input class=\"form-control\" name=\"email\"       id=\"email\"       type=\"email\"    placeholder=\"E-Mail\" required/>
                                    </div>

                                    <div class=\"form-group\">
                                        <input class=\"form-control\" name=\"pass\"        id=\"pass\"        type=\"password\" placeholder=\"Password\" required/>
                                        <input class=\"form-control\" name=\"pass_repeat\" id=\"pass_repeat\" type=\"password\" placeholder=\"Repita Password\" required/>
                                    </div>

                                    <div class=\"form-group\">
                                        <select name='perfil' id='perfil' class='form-control'>
                                            <option selected='selected'>--</option>
                                            {% for p in db_perfiles if false != db_perfiles %}
                                            <option value='{{ p.nombre }}'>{{ p.nombre }}</option>
                                            {% endfor %}
                                            <option value='Otro'>Otro</option>
                                        </select>
                                    </div>

                                    <div class=\"checkbox\">
                                        <label>
                                            <input name=\"admin\" type=\"checkbox\" id=\"admin\" /> Usuario Administrador?
                                        </label>
                                    </div>

                                    <div class=\"form-group\">
                                        <input type=\"button\" id=\"register\" value=\"Grabar\" />
                                        <input type=\"reset\" name=\"Limpiar\" value=\"Limpiar\" />
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div id=\"bloque_registro\"></div>
                    </div><!-- /.tab-pane -->

                    <div class=\"tab-pane\" id=\"tab_2-2\">
                        <b>Seleccione Perfil para filtrar</b>
                        <div class=\"box box-info\">


                            <div class=\"row\">
                                <div class=\"box-body col-sm-4\">
                                    <form name=\"filtra_usuario_perfil\" action=\"\" method=\"POST\" onsubmit=\"consultausuarioperfil(); return false\">
                                        <select name='perfil_f' id='perfil_f' class='form-control'>
                                            <option selected='selected'>--</option>
                                            {% for p in db_perfiles if false != db_perfiles %}
                                            <option value='{{ p.nombre }}'>{{ p.nombre }}</option>
                                            {% endfor %}
                                            <option value='Otro'>Otro</option>
                                        </select>
                                        <input type=\"submit\" name=\"Submit\" value=\"Buscar\" onclick=\"consultausuarioperfil(); return false\" />
                                    </form>
                                </div>
                            </div>
                            <div class=\"table-responsive\" id=\"bloque_listausuarios\"></div>
                        </div>

                    </div><!-- /.tab-pane -->
                </div>
              </div>
            </div>
        </div>
    </section>
{% endblock %}
{% block appScript %}
    <script src=\"views/app/js/register/register.js\"></script>
{% endblock %}
", "administracion/usuarios.twig", "C:\\xampp\\htdocs\\proyectos\\login\\app\\templates\\administracion\\usuarios.twig");
    }
}
