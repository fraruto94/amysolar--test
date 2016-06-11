<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1b192fdcd97077a35adfeaffa6d4b9f03e1771ed30917b1e2d2d21ade41e84f0 extends Twig_Template
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
        $__internal_701cff18b4c23c2930c63d88160d293f105b88b1811a76b8adf0c4adfe24c8bb = $this->env->getExtension("native_profiler");
        $__internal_701cff18b4c23c2930c63d88160d293f105b88b1811a76b8adf0c4adfe24c8bb->enter($__internal_701cff18b4c23c2930c63d88160d293f105b88b1811a76b8adf0c4adfe24c8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_701cff18b4c23c2930c63d88160d293f105b88b1811a76b8adf0c4adfe24c8bb->leave($__internal_701cff18b4c23c2930c63d88160d293f105b88b1811a76b8adf0c4adfe24c8bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
