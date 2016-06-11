<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7d79a07724e8c61e55e1faf49428e5557efd23b81a18b5b53d235a60d5031d0f extends Twig_Template
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
        $__internal_932703e96aaab51c282f5c447eca8e38577c470f4f4a80dc45e12af22a2a0caa = $this->env->getExtension("native_profiler");
        $__internal_932703e96aaab51c282f5c447eca8e38577c470f4f4a80dc45e12af22a2a0caa->enter($__internal_932703e96aaab51c282f5c447eca8e38577c470f4f4a80dc45e12af22a2a0caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_932703e96aaab51c282f5c447eca8e38577c470f4f4a80dc45e12af22a2a0caa->leave($__internal_932703e96aaab51c282f5c447eca8e38577c470f4f4a80dc45e12af22a2a0caa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
