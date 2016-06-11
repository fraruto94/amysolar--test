<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_012b43fd8c1fb0bbb5652f88b000c3fcdaa1dd49d7b4ec40d8db59d8c9ca1018 extends Twig_Template
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
        $__internal_2addc38822d2cd3f26b91eaa948b79f1fff0c220b5aba4f9901e0df1bd087656 = $this->env->getExtension("native_profiler");
        $__internal_2addc38822d2cd3f26b91eaa948b79f1fff0c220b5aba4f9901e0df1bd087656->enter($__internal_2addc38822d2cd3f26b91eaa948b79f1fff0c220b5aba4f9901e0df1bd087656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2addc38822d2cd3f26b91eaa948b79f1fff0c220b5aba4f9901e0df1bd087656->leave($__internal_2addc38822d2cd3f26b91eaa948b79f1fff0c220b5aba4f9901e0df1bd087656_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
