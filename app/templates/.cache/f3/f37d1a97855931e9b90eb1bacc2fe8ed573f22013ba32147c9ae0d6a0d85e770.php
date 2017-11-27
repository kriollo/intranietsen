<?php

/* portal/menu.twig */
class __TwigTemplate_26ad7e7f0ebdcc11c96fe65e9b63def7c9c3feafc9a46146581d288304d5de93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
      <!-- Sidebar user panel -->
      <div class=\"user-panel\">
        <div class=\"pull-left image\">
          <img src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" class=\"img-circle\" alt=\"User Image\">
        </div>
        <div class=\"pull-left info\">
          <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["owner_user"] ?? null), 1, array(), "array"), "html", null, true);
        echo "</p>
          <a href=\"portal\"><i class=\"fa fa-circle text-success\"></i>Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action=\"#\" method=\"get\" class=\"sidebar-form\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Buscar...\">
          <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\" >
            <li class=\"header\">MENÚ PRINCIPAL</li>
                ";
        // line 28
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["menu_op"] ?? null), 0, array(), "array") == 0)) {
            // line 29
            echo "                    <li class=\"active treeview\">
                ";
        } else {
            // line 31
            echo "                    <li class=\"treeview\">
                ";
        }
        // line 33
        echo "                    <a href=\"portal\"><i class=\"fa fa-home\"></i><span>HOME</span>
                    </a>
                </li>
                
                
            ";
        // line 38
        $context["id"] = 0;
        // line 39
        echo "            ";
        $context["cont"] = 0;
        // line 40
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu_user"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            if ((false != ($context["menu_user"] ?? null))) {
                // line 41
                echo "               
                ";
                // line 42
                if ((($context["id"] ?? null) != twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()))) {
                    // line 43
                    echo "                    ";
                    if ((($context["cont"] ?? null) >= 1)) {
                        // line 44
                        echo "                    </ul>
                </li>
                    ";
                    }
                    // line 47
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["menu_op"] ?? null), 0, array(), "array") == twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array()))) {
                        // line 48
                        echo "                <li class=\"active treeview\">
                ";
                    } else {
                        // line 50
                        echo "                <li class=\"treeview\">
                ";
                    }
                    // line 51
                    echo " 
                    <a href=\"#\">
                        <i class='fa ";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "glyphicon", array()), "html", null, true);
                    echo "'></i> 
                        <span>";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "menu", array()), "html", null, true);
                    echo "</span><i class=\"fa fa-angle-left pull-right\"></i>
                    </a>
                    <ul class=\"treeview-menu\">
                ";
                }
                // line 58
                echo "                    
                        <li>
                            <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "url", array()), "html", null, true);
                echo "\"><i class=\"fa fa-circle-o\"></i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "submenu", array()), "html", null, true);
                echo "</a>
                        </li>

                ";
                // line 63
                $context["id"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["m"], "id_menu", array());
                // line 64
                echo "                ";
                $context["cont"] = (($context["cont"] ?? null) + 1);
                // line 65
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>";
    }

    public function getTemplateName()
    {
        return "portal/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 66,  135 => 65,  132 => 64,  130 => 63,  122 => 60,  118 => 58,  111 => 54,  107 => 53,  103 => 51,  99 => 50,  95 => 48,  92 => 47,  87 => 44,  84 => 43,  82 => 42,  79 => 41,  73 => 40,  70 => 39,  68 => 38,  61 => 33,  57 => 31,  53 => 29,  51 => 28,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
      <!-- Sidebar user panel -->
      <div class=\"user-panel\">
        <div class=\"pull-left image\">
          <img src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" class=\"img-circle\" alt=\"User Image\">
        </div>
        <div class=\"pull-left info\">
          <p>{{ owner_user[1] }}</p>
          <a href=\"portal\"><i class=\"fa fa-circle text-success\"></i>Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action=\"#\" method=\"get\" class=\"sidebar-form\">
        <div class=\"input-group\">
          <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Buscar...\">
          <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\" >
            <li class=\"header\">MENÚ PRINCIPAL</li>
                {% if menu_op[0] == 0 %}
                    <li class=\"active treeview\">
                {% else %}
                    <li class=\"treeview\">
                {% endif %}
                    <a href=\"portal\"><i class=\"fa fa-home\"></i><span>HOME</span>
                    </a>
                </li>
                
                
            {% set id = 0 %}
            {% set cont = 0 %}
            {% for m in menu_user if false != menu_user %}
               
                {% if id != m.id_menu %}
                    {% if cont >= 1 %}
                    </ul>
                </li>
                    {% endif %}
                {% if menu_op[0] == m.id_menu %}
                <li class=\"active treeview\">
                {% else %}
                <li class=\"treeview\">
                {% endif %} 
                    <a href=\"#\">
                        <i class='fa {{ m.glyphicon }}'></i> 
                        <span>{{ m.menu }}</span><i class=\"fa fa-angle-left pull-right\"></i>
                    </a>
                    <ul class=\"treeview-menu\">
                {% endif %}
                    
                        <li>
                            <a href=\"{{ m.url }}\"><i class=\"fa fa-circle-o\"></i>{{ m.submenu }}</a>
                        </li>

                {% set id=m.id_menu %}
                {% set cont =  cont + 1 %}
            {% endfor %}
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>", "portal/menu.twig", "C:\\xampp\\htdocs\\proyectos\\login\\app\\templates\\portal\\menu.twig");
    }
}
