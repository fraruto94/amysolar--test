<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e4bfcd868956c8730f587611640b3483ef7e1848bd8da7ad1fe04d33d7c19cd3 extends Twig_Template
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
        $__internal_3369d17d521d96ab2ab1d269eda05e71193e77032a6c62a57935e5e45e00f467 = $this->env->getExtension("native_profiler");
        $__internal_3369d17d521d96ab2ab1d269eda05e71193e77032a6c62a57935e5e45e00f467->enter($__internal_3369d17d521d96ab2ab1d269eda05e71193e77032a6c62a57935e5e45e00f467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3369d17d521d96ab2ab1d269eda05e71193e77032a6c62a57935e5e45e00f467->leave($__internal_3369d17d521d96ab2ab1d269eda05e71193e77032a6c62a57935e5e45e00f467_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
