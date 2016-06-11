<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_635ff18914a0b9829803e93242f421dd4c5fa2e117a2e056f9153e3725aa3eaa extends Twig_Template
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
        $__internal_a6a6a465673b4777942a7b17074bf770ca467ae845b1e31de9432c9252447549 = $this->env->getExtension("native_profiler");
        $__internal_a6a6a465673b4777942a7b17074bf770ca467ae845b1e31de9432c9252447549->enter($__internal_a6a6a465673b4777942a7b17074bf770ca467ae845b1e31de9432c9252447549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a6a6a465673b4777942a7b17074bf770ca467ae845b1e31de9432c9252447549->leave($__internal_a6a6a465673b4777942a7b17074bf770ca467ae845b1e31de9432c9252447549_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
