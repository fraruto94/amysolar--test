<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_cb3ebc83ee4b4f050c75d0f8225f006126cd13bf26ea72097fde8ccbd42a066c extends Twig_Template
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
        $__internal_8622acaadc9b94fef69318be33109a93b927e826205d1ec91040a8c2fab2c363 = $this->env->getExtension("native_profiler");
        $__internal_8622acaadc9b94fef69318be33109a93b927e826205d1ec91040a8c2fab2c363->enter($__internal_8622acaadc9b94fef69318be33109a93b927e826205d1ec91040a8c2fab2c363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8622acaadc9b94fef69318be33109a93b927e826205d1ec91040a8c2fab2c363->leave($__internal_8622acaadc9b94fef69318be33109a93b927e826205d1ec91040a8c2fab2c363_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
