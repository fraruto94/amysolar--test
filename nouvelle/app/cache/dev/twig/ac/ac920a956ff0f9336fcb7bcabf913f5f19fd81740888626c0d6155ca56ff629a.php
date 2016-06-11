<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7db1350477aa259467c7409c9285f49932aa97127b70f1aa058500830f975f4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_2be3a06ac0cefc4d6fc406c0bfd54210c0f211f82ae2dea7a4fe7895b68dd23f = $this->env->getExtension("native_profiler");
        $__internal_2be3a06ac0cefc4d6fc406c0bfd54210c0f211f82ae2dea7a4fe7895b68dd23f->enter($__internal_2be3a06ac0cefc4d6fc406c0bfd54210c0f211f82ae2dea7a4fe7895b68dd23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be3a06ac0cefc4d6fc406c0bfd54210c0f211f82ae2dea7a4fe7895b68dd23f->leave($__internal_2be3a06ac0cefc4d6fc406c0bfd54210c0f211f82ae2dea7a4fe7895b68dd23f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3339eeafd38efde95d49e7ae0cbab8bed202a31489c1c96fc06d410589665c22 = $this->env->getExtension("native_profiler");
        $__internal_3339eeafd38efde95d49e7ae0cbab8bed202a31489c1c96fc06d410589665c22->enter($__internal_3339eeafd38efde95d49e7ae0cbab8bed202a31489c1c96fc06d410589665c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3339eeafd38efde95d49e7ae0cbab8bed202a31489c1c96fc06d410589665c22->leave($__internal_3339eeafd38efde95d49e7ae0cbab8bed202a31489c1c96fc06d410589665c22_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1e4a83944710d9395447e00492cb762e27ff2885ef0e58390d794fb80277d435 = $this->env->getExtension("native_profiler");
        $__internal_1e4a83944710d9395447e00492cb762e27ff2885ef0e58390d794fb80277d435->enter($__internal_1e4a83944710d9395447e00492cb762e27ff2885ef0e58390d794fb80277d435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1e4a83944710d9395447e00492cb762e27ff2885ef0e58390d794fb80277d435->leave($__internal_1e4a83944710d9395447e00492cb762e27ff2885ef0e58390d794fb80277d435_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a2978e9b69d137239b58707627c6927efc2593a95de3cd29fbf8e50ffebdaf5 = $this->env->getExtension("native_profiler");
        $__internal_8a2978e9b69d137239b58707627c6927efc2593a95de3cd29fbf8e50ffebdaf5->enter($__internal_8a2978e9b69d137239b58707627c6927efc2593a95de3cd29fbf8e50ffebdaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8a2978e9b69d137239b58707627c6927efc2593a95de3cd29fbf8e50ffebdaf5->leave($__internal_8a2978e9b69d137239b58707627c6927efc2593a95de3cd29fbf8e50ffebdaf5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
