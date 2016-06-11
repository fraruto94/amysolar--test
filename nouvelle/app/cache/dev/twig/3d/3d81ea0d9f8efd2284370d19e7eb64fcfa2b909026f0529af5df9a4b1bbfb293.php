<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_50c4ff085916698c0e695527d5903fd68cea0134c2c80cc3116e3e2783b9c5f4 extends Twig_Template
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
        $__internal_7e70cca603c811ad168c59db4a4e55717bcf2abda359dace4219ab43b78c14c5 = $this->env->getExtension("native_profiler");
        $__internal_7e70cca603c811ad168c59db4a4e55717bcf2abda359dace4219ab43b78c14c5->enter($__internal_7e70cca603c811ad168c59db4a4e55717bcf2abda359dace4219ab43b78c14c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7e70cca603c811ad168c59db4a4e55717bcf2abda359dace4219ab43b78c14c5->leave($__internal_7e70cca603c811ad168c59db4a4e55717bcf2abda359dace4219ab43b78c14c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
