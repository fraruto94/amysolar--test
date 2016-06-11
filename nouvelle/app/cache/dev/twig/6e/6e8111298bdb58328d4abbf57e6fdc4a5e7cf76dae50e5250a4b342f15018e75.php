<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_5718b7e9307274b6bb9b47d10d12fd373503b130d8257d5c887003695228b302 extends Twig_Template
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
        $__internal_dbfe64b72d83025f99787f8535eb72d0a562d56b1500902c7feae0924cafeef2 = $this->env->getExtension("native_profiler");
        $__internal_dbfe64b72d83025f99787f8535eb72d0a562d56b1500902c7feae0924cafeef2->enter($__internal_dbfe64b72d83025f99787f8535eb72d0a562d56b1500902c7feae0924cafeef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_dbfe64b72d83025f99787f8535eb72d0a562d56b1500902c7feae0924cafeef2->leave($__internal_dbfe64b72d83025f99787f8535eb72d0a562d56b1500902c7feae0924cafeef2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
