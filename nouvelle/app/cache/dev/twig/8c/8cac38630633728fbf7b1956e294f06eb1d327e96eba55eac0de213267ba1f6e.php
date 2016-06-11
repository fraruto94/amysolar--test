<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_392cd6f587a0b643d028560fff84bb12aff3bce118b218b02aafe6133b1782e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_d56bb5c9dddca1a84a13bb9f6d6c9c8cb3cfd9d2a213c2e2923b87ca9421d5b1 = $this->env->getExtension("native_profiler");
        $__internal_d56bb5c9dddca1a84a13bb9f6d6c9c8cb3cfd9d2a213c2e2923b87ca9421d5b1->enter($__internal_d56bb5c9dddca1a84a13bb9f6d6c9c8cb3cfd9d2a213c2e2923b87ca9421d5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d56bb5c9dddca1a84a13bb9f6d6c9c8cb3cfd9d2a213c2e2923b87ca9421d5b1->leave($__internal_d56bb5c9dddca1a84a13bb9f6d6c9c8cb3cfd9d2a213c2e2923b87ca9421d5b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba2af447a06b002d72f769b8946fa48ff55054c7f8ddd858d88893d29ef7f127 = $this->env->getExtension("native_profiler");
        $__internal_ba2af447a06b002d72f769b8946fa48ff55054c7f8ddd858d88893d29ef7f127->enter($__internal_ba2af447a06b002d72f769b8946fa48ff55054c7f8ddd858d88893d29ef7f127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ba2af447a06b002d72f769b8946fa48ff55054c7f8ddd858d88893d29ef7f127->leave($__internal_ba2af447a06b002d72f769b8946fa48ff55054c7f8ddd858d88893d29ef7f127_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_62e290cdd028824bec8151d1057c135bced0ae0d9e37922e3aaded8432c02efe = $this->env->getExtension("native_profiler");
        $__internal_62e290cdd028824bec8151d1057c135bced0ae0d9e37922e3aaded8432c02efe->enter($__internal_62e290cdd028824bec8151d1057c135bced0ae0d9e37922e3aaded8432c02efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_62e290cdd028824bec8151d1057c135bced0ae0d9e37922e3aaded8432c02efe->leave($__internal_62e290cdd028824bec8151d1057c135bced0ae0d9e37922e3aaded8432c02efe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
