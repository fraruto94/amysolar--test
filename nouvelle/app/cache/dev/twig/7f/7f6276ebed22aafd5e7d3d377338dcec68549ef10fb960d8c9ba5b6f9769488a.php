<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_49ff09c84ce9ef917d1e3b86fbdaa8deb58bfe99d4397c5c52cf469c606849b5 extends Twig_Template
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
        $__internal_08be1495538d86c798682d4ef5fb18c2afeb3b804e477531ad968bb3f7716c70 = $this->env->getExtension("native_profiler");
        $__internal_08be1495538d86c798682d4ef5fb18c2afeb3b804e477531ad968bb3f7716c70->enter($__internal_08be1495538d86c798682d4ef5fb18c2afeb3b804e477531ad968bb3f7716c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_08be1495538d86c798682d4ef5fb18c2afeb3b804e477531ad968bb3f7716c70->leave($__internal_08be1495538d86c798682d4ef5fb18c2afeb3b804e477531ad968bb3f7716c70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
