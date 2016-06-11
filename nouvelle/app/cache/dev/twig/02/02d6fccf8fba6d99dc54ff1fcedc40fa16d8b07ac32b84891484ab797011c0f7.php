<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_6f242d39dc0e5276ba5c3b6eec3e82eee1d3f342162530f29590a898f3d8e37f extends Twig_Template
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
        $__internal_fc813eabbc84577f897feb161e88dd570acad68c699d8b8010fcfab585057adf = $this->env->getExtension("native_profiler");
        $__internal_fc813eabbc84577f897feb161e88dd570acad68c699d8b8010fcfab585057adf->enter($__internal_fc813eabbc84577f897feb161e88dd570acad68c699d8b8010fcfab585057adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_fc813eabbc84577f897feb161e88dd570acad68c699d8b8010fcfab585057adf->leave($__internal_fc813eabbc84577f897feb161e88dd570acad68c699d8b8010fcfab585057adf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
