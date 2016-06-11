<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_63a443dafef74bbc949f1d571dbdcf149de427e46b1e77f1640349913ee1bb19 extends Twig_Template
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
        $__internal_e62158d8380e148111f87068f55c6160e62ee44167438a36831b3d63b82c1954 = $this->env->getExtension("native_profiler");
        $__internal_e62158d8380e148111f87068f55c6160e62ee44167438a36831b3d63b82c1954->enter($__internal_e62158d8380e148111f87068f55c6160e62ee44167438a36831b3d63b82c1954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:menu.html.twig"));

        // line 3
        echo "
    
 <div id=\"menu\" class=\"col-md-6\">
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 8
            echo "    <li>
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>
 </div>
    
";
        
        $__internal_e62158d8380e148111f87068f55c6160e62ee44167438a36831b3d63b82c1954->leave($__internal_e62158d8380e148111f87068f55c6160e62ee44167438a36831b3d63b82c1954_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  39 => 10,  35 => 9,  32 => 8,  28 => 7,  22 => 3,);
    }
}
/* {# empty Twig template #}*/
/* {# src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig #}*/
/* */
/*     */
/*  <div id="menu" class="col-md-6">*/
/* <ul class="nav nav-pills nav-stacked">*/
/*   {% for advert in listAdverts %}*/
/*     <li>*/
/*       <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*         {{ advert.title }}*/
/*       </a>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/*  </div>*/
/*     */
/* */
