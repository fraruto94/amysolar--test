<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b6240bcd5c51ccc3e07f9c6dc4ef06336571bf4de1fb0dd9be516b231786baf3 extends Twig_Template
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
        $__internal_3903dc4a2726213b5d38562ed80128cf41cb6423a893268753dcde9c3c360240 = $this->env->getExtension("native_profiler");
        $__internal_3903dc4a2726213b5d38562ed80128cf41cb6423a893268753dcde9c3c360240->enter($__internal_3903dc4a2726213b5d38562ed80128cf41cb6423a893268753dcde9c3c360240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3903dc4a2726213b5d38562ed80128cf41cb6423a893268753dcde9c3c360240->leave($__internal_3903dc4a2726213b5d38562ed80128cf41cb6423a893268753dcde9c3c360240_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
