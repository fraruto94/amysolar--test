<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7426479e45381dbecd26830260fbbc16e4de339116ec83b94b10e2efa724a829 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_124ab3b6323070b60a24173adcd2e5b09c8094937d80a50828ca13dc8fbf4972 = $this->env->getExtension("native_profiler");
        $__internal_124ab3b6323070b60a24173adcd2e5b09c8094937d80a50828ca13dc8fbf4972->enter($__internal_124ab3b6323070b60a24173adcd2e5b09c8094937d80a50828ca13dc8fbf4972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_124ab3b6323070b60a24173adcd2e5b09c8094937d80a50828ca13dc8fbf4972->leave($__internal_124ab3b6323070b60a24173adcd2e5b09c8094937d80a50828ca13dc8fbf4972_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_92e6e61cdc04f6c9a7447eacab134bd6b19b52f17e6207f532c5961410efac31 = $this->env->getExtension("native_profiler");
        $__internal_92e6e61cdc04f6c9a7447eacab134bd6b19b52f17e6207f532c5961410efac31->enter($__internal_92e6e61cdc04f6c9a7447eacab134bd6b19b52f17e6207f532c5961410efac31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_92e6e61cdc04f6c9a7447eacab134bd6b19b52f17e6207f532c5961410efac31->leave($__internal_92e6e61cdc04f6c9a7447eacab134bd6b19b52f17e6207f532c5961410efac31_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_369f3b31a8ef755d237d7923283885bc4d03d060bca2aecb0c2d15fbf9e2cfd9 = $this->env->getExtension("native_profiler");
        $__internal_369f3b31a8ef755d237d7923283885bc4d03d060bca2aecb0c2d15fbf9e2cfd9->enter($__internal_369f3b31a8ef755d237d7923283885bc4d03d060bca2aecb0c2d15fbf9e2cfd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_369f3b31a8ef755d237d7923283885bc4d03d060bca2aecb0c2d15fbf9e2cfd9->leave($__internal_369f3b31a8ef755d237d7923283885bc4d03d060bca2aecb0c2d15fbf9e2cfd9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
