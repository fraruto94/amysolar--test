<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_a79e7bb4a728fed9e33a3549583f6530f68fcdfbc3f009b8deb28cd47777149c extends Twig_Template
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
        $__internal_d1e9d43078a7d787f41821bfde46a2f1a85b84b1d90b0963a0c4dd04d9eecfbf = $this->env->getExtension("native_profiler");
        $__internal_d1e9d43078a7d787f41821bfde46a2f1a85b84b1d90b0963a0c4dd04d9eecfbf->enter($__internal_d1e9d43078a7d787f41821bfde46a2f1a85b84b1d90b0963a0c4dd04d9eecfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d1e9d43078a7d787f41821bfde46a2f1a85b84b1d90b0963a0c4dd04d9eecfbf->leave($__internal_d1e9d43078a7d787f41821bfde46a2f1a85b84b1d90b0963a0c4dd04d9eecfbf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
