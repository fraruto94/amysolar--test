<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6d62e2f7a9dd8bd959e07608000c34a51d6f2070fa602c4a715b5d18401faa09 extends Twig_Template
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
        $__internal_99df34883888a2276d5a9e19d0cbdbf8df39d584279a9085403d2ca153e2ed48 = $this->env->getExtension("native_profiler");
        $__internal_99df34883888a2276d5a9e19d0cbdbf8df39d584279a9085403d2ca153e2ed48->enter($__internal_99df34883888a2276d5a9e19d0cbdbf8df39d584279a9085403d2ca153e2ed48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_99df34883888a2276d5a9e19d0cbdbf8df39d584279a9085403d2ca153e2ed48->leave($__internal_99df34883888a2276d5a9e19d0cbdbf8df39d584279a9085403d2ca153e2ed48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
