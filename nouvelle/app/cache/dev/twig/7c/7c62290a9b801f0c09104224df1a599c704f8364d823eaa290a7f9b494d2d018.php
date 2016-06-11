<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_831cc381012a2051287480f6c1b5d26a87d4c018e97d74d4080d2e9dfdd0a795 extends Twig_Template
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
        $__internal_6389049f6369ff8e69c13a22f673ae9a60e5291f9fcb62ab5a0a55f000b17714 = $this->env->getExtension("native_profiler");
        $__internal_6389049f6369ff8e69c13a22f673ae9a60e5291f9fcb62ab5a0a55f000b17714->enter($__internal_6389049f6369ff8e69c13a22f673ae9a60e5291f9fcb62ab5a0a55f000b17714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6389049f6369ff8e69c13a22f673ae9a60e5291f9fcb62ab5a0a55f000b17714->leave($__internal_6389049f6369ff8e69c13a22f673ae9a60e5291f9fcb62ab5a0a55f000b17714_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
