<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_5ec11ea8d8b367c5b467bb258df6d49cc19fa775bec9cd624b30ed37dfcb3708 extends Twig_Template
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
        $__internal_d2970f9ec18efda025e0a1e79a9da9dd3377775e35af01ca742f70b689d31af1 = $this->env->getExtension("native_profiler");
        $__internal_d2970f9ec18efda025e0a1e79a9da9dd3377775e35af01ca742f70b689d31af1->enter($__internal_d2970f9ec18efda025e0a1e79a9da9dd3377775e35af01ca742f70b689d31af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d2970f9ec18efda025e0a1e79a9da9dd3377775e35af01ca742f70b689d31af1->leave($__internal_d2970f9ec18efda025e0a1e79a9da9dd3377775e35af01ca742f70b689d31af1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
