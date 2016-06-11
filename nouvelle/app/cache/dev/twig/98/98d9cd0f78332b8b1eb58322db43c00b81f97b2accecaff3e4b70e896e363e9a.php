<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_dcd911abfd4962214469d662d4787bc096a372066405265376243646899cf1a6 extends Twig_Template
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
        $__internal_20fc9eb4842c3b598016b6d92f1913266be3329f6d1e4cde1cd473838d0df59e = $this->env->getExtension("native_profiler");
        $__internal_20fc9eb4842c3b598016b6d92f1913266be3329f6d1e4cde1cd473838d0df59e->enter($__internal_20fc9eb4842c3b598016b6d92f1913266be3329f6d1e4cde1cd473838d0df59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_20fc9eb4842c3b598016b6d92f1913266be3329f6d1e4cde1cd473838d0df59e->leave($__internal_20fc9eb4842c3b598016b6d92f1913266be3329f6d1e4cde1cd473838d0df59e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
