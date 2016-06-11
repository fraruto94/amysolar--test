<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_f1e40859521a81242b91b5228801f3ad8e9392110878f95b2977d2b110f7e4b5 extends Twig_Template
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
        $__internal_257b411e6bcb9826b46bf1cfded4a4b0eb82bb605c4033a521de26201f4adf56 = $this->env->getExtension("native_profiler");
        $__internal_257b411e6bcb9826b46bf1cfded4a4b0eb82bb605c4033a521de26201f4adf56->enter($__internal_257b411e6bcb9826b46bf1cfded4a4b0eb82bb605c4033a521de26201f4adf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_257b411e6bcb9826b46bf1cfded4a4b0eb82bb605c4033a521de26201f4adf56->leave($__internal_257b411e6bcb9826b46bf1cfded4a4b0eb82bb605c4033a521de26201f4adf56_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
