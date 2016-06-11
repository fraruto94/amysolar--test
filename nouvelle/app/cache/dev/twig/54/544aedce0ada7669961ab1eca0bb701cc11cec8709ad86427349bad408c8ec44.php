<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_149ac1cf6ace5e097fd203564de40a2e70072b240512b73a192619c426002cb9 extends Twig_Template
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
        $__internal_ee484e16f8de9a928b4b62c4522a68bc2fc192e1d6897873b1973f15c6419a78 = $this->env->getExtension("native_profiler");
        $__internal_ee484e16f8de9a928b4b62c4522a68bc2fc192e1d6897873b1973f15c6419a78->enter($__internal_ee484e16f8de9a928b4b62c4522a68bc2fc192e1d6897873b1973f15c6419a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ee484e16f8de9a928b4b62c4522a68bc2fc192e1d6897873b1973f15c6419a78->leave($__internal_ee484e16f8de9a928b4b62c4522a68bc2fc192e1d6897873b1973f15c6419a78_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
