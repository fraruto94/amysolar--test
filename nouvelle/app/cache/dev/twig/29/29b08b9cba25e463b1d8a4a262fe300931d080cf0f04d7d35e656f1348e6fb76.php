<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_82598d771df79307058961db98b1f6f2645b1fb238d009bcdc72b5dd437aa341 extends Twig_Template
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
        $__internal_cb9571fbfc618a3ca5e31b4abe76bb3b6c84d1cf22bcc84c817cdcd9d7b1b8b3 = $this->env->getExtension("native_profiler");
        $__internal_cb9571fbfc618a3ca5e31b4abe76bb3b6c84d1cf22bcc84c817cdcd9d7b1b8b3->enter($__internal_cb9571fbfc618a3ca5e31b4abe76bb3b6c84d1cf22bcc84c817cdcd9d7b1b8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cb9571fbfc618a3ca5e31b4abe76bb3b6c84d1cf22bcc84c817cdcd9d7b1b8b3->leave($__internal_cb9571fbfc618a3ca5e31b4abe76bb3b6c84d1cf22bcc84c817cdcd9d7b1b8b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
