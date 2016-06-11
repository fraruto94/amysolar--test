<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9e779969ac72ddbb85b0dcaf188fe47471146f02a20485df526d9cf7259c62f2 extends Twig_Template
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
        $__internal_96720c7f850915ec735ef7738798af5d96bbbf63c77fd3b220a853c266516bec = $this->env->getExtension("native_profiler");
        $__internal_96720c7f850915ec735ef7738798af5d96bbbf63c77fd3b220a853c266516bec->enter($__internal_96720c7f850915ec735ef7738798af5d96bbbf63c77fd3b220a853c266516bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_96720c7f850915ec735ef7738798af5d96bbbf63c77fd3b220a853c266516bec->leave($__internal_96720c7f850915ec735ef7738798af5d96bbbf63c77fd3b220a853c266516bec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
