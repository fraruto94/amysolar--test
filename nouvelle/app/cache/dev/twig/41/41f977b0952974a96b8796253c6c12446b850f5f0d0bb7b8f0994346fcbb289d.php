<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f7236a68716498c1f6ee2d6f8f9cd99f041a897fc5ca0a1edfa24c83770fb170 extends Twig_Template
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
        $__internal_ac63a621f84ca4c8943f1adda0e997033863fe0e1f3a2a270261604e8fcc2e58 = $this->env->getExtension("native_profiler");
        $__internal_ac63a621f84ca4c8943f1adda0e997033863fe0e1f3a2a270261604e8fcc2e58->enter($__internal_ac63a621f84ca4c8943f1adda0e997033863fe0e1f3a2a270261604e8fcc2e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ac63a621f84ca4c8943f1adda0e997033863fe0e1f3a2a270261604e8fcc2e58->leave($__internal_ac63a621f84ca4c8943f1adda0e997033863fe0e1f3a2a270261604e8fcc2e58_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
