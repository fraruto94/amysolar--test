<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4a8b5ac24c149e1ba15fda7371e7793eb765d5e03319e4706d21040b55529fdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bc83a8a8a4bd4faebe739325f4a1dfe06c5342e2c6baa38ec50f4d65b20390f = $this->env->getExtension("native_profiler");
        $__internal_7bc83a8a8a4bd4faebe739325f4a1dfe06c5342e2c6baa38ec50f4d65b20390f->enter($__internal_7bc83a8a8a4bd4faebe739325f4a1dfe06c5342e2c6baa38ec50f4d65b20390f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bc83a8a8a4bd4faebe739325f4a1dfe06c5342e2c6baa38ec50f4d65b20390f->leave($__internal_7bc83a8a8a4bd4faebe739325f4a1dfe06c5342e2c6baa38ec50f4d65b20390f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11a1d65c79de9a9318e8dfd6d8819d45029a5c0ed1b0c4b4970ac6432b908797 = $this->env->getExtension("native_profiler");
        $__internal_11a1d65c79de9a9318e8dfd6d8819d45029a5c0ed1b0c4b4970ac6432b908797->enter($__internal_11a1d65c79de9a9318e8dfd6d8819d45029a5c0ed1b0c4b4970ac6432b908797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_11a1d65c79de9a9318e8dfd6d8819d45029a5c0ed1b0c4b4970ac6432b908797->leave($__internal_11a1d65c79de9a9318e8dfd6d8819d45029a5c0ed1b0c4b4970ac6432b908797_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a528805382f860b7bd4c73d2e0a5a29a32761208b772b3f538d362352fe1791 = $this->env->getExtension("native_profiler");
        $__internal_8a528805382f860b7bd4c73d2e0a5a29a32761208b772b3f538d362352fe1791->enter($__internal_8a528805382f860b7bd4c73d2e0a5a29a32761208b772b3f538d362352fe1791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a528805382f860b7bd4c73d2e0a5a29a32761208b772b3f538d362352fe1791->leave($__internal_8a528805382f860b7bd4c73d2e0a5a29a32761208b772b3f538d362352fe1791_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_beb62f3f4fd163c4d1effaa48803ebccce0fb9ee56103a88deb19a5db45ec75d = $this->env->getExtension("native_profiler");
        $__internal_beb62f3f4fd163c4d1effaa48803ebccce0fb9ee56103a88deb19a5db45ec75d->enter($__internal_beb62f3f4fd163c4d1effaa48803ebccce0fb9ee56103a88deb19a5db45ec75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_beb62f3f4fd163c4d1effaa48803ebccce0fb9ee56103a88deb19a5db45ec75d->leave($__internal_beb62f3f4fd163c4d1effaa48803ebccce0fb9ee56103a88deb19a5db45ec75d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
