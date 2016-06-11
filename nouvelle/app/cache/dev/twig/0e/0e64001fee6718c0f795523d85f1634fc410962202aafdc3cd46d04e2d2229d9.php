<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_06e27e60dde750f8d953f4b850b920fc22a553f414b64b08fddda29299fb3621 extends Twig_Template
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
        $__internal_6ecb448ae81f00cf4585d887f009fcdbef098a1c671368b37dc55404554840b1 = $this->env->getExtension("native_profiler");
        $__internal_6ecb448ae81f00cf4585d887f009fcdbef098a1c671368b37dc55404554840b1->enter($__internal_6ecb448ae81f00cf4585d887f009fcdbef098a1c671368b37dc55404554840b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6ecb448ae81f00cf4585d887f009fcdbef098a1c671368b37dc55404554840b1->leave($__internal_6ecb448ae81f00cf4585d887f009fcdbef098a1c671368b37dc55404554840b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
