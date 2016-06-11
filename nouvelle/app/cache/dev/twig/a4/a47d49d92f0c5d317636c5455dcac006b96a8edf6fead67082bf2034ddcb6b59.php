<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b44f3c8c17293c883d9d6ac7a5f64c1ec321a5d294b52ee29d348e5791aea177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_222e2a3a37e18792bb921989b536b8ce5240437676f94ee25898e4f809516c30 = $this->env->getExtension("native_profiler");
        $__internal_222e2a3a37e18792bb921989b536b8ce5240437676f94ee25898e4f809516c30->enter($__internal_222e2a3a37e18792bb921989b536b8ce5240437676f94ee25898e4f809516c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_222e2a3a37e18792bb921989b536b8ce5240437676f94ee25898e4f809516c30->leave($__internal_222e2a3a37e18792bb921989b536b8ce5240437676f94ee25898e4f809516c30_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c0a1a79c57a3523d05ac83a9abacff37e88735fa357442a1ee8068e0c44a2431 = $this->env->getExtension("native_profiler");
        $__internal_c0a1a79c57a3523d05ac83a9abacff37e88735fa357442a1ee8068e0c44a2431->enter($__internal_c0a1a79c57a3523d05ac83a9abacff37e88735fa357442a1ee8068e0c44a2431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c0a1a79c57a3523d05ac83a9abacff37e88735fa357442a1ee8068e0c44a2431->leave($__internal_c0a1a79c57a3523d05ac83a9abacff37e88735fa357442a1ee8068e0c44a2431_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5b237e7eb1eaf7f44ce31eadb449b1379513409c0a54e72efd99fd95782692ac = $this->env->getExtension("native_profiler");
        $__internal_5b237e7eb1eaf7f44ce31eadb449b1379513409c0a54e72efd99fd95782692ac->enter($__internal_5b237e7eb1eaf7f44ce31eadb449b1379513409c0a54e72efd99fd95782692ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5b237e7eb1eaf7f44ce31eadb449b1379513409c0a54e72efd99fd95782692ac->leave($__internal_5b237e7eb1eaf7f44ce31eadb449b1379513409c0a54e72efd99fd95782692ac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09e6288133463f8a08d5127d6bf83fe722c3ca5c3a9255a88d572839f26adcdb = $this->env->getExtension("native_profiler");
        $__internal_09e6288133463f8a08d5127d6bf83fe722c3ca5c3a9255a88d572839f26adcdb->enter($__internal_09e6288133463f8a08d5127d6bf83fe722c3ca5c3a9255a88d572839f26adcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_09e6288133463f8a08d5127d6bf83fe722c3ca5c3a9255a88d572839f26adcdb->leave($__internal_09e6288133463f8a08d5127d6bf83fe722c3ca5c3a9255a88d572839f26adcdb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
