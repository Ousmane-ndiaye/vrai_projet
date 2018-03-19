<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_67417af1119ba75592b9b636a2f529736ea74d14ec1b5b1b7fe7bc4e8a3ecd85 extends Twig_Template
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
        $__internal_571edbc522003cd7c78ed5a54a0e63a8bff5039d03dac40a82ffdbc7efbbedd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571edbc522003cd7c78ed5a54a0e63a8bff5039d03dac40a82ffdbc7efbbedd1->enter($__internal_571edbc522003cd7c78ed5a54a0e63a8bff5039d03dac40a82ffdbc7efbbedd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_e4cbd95944491ebbbb727e364fe9f0ebaef847c166cd0afa56b72fa44553ab69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4cbd95944491ebbbb727e364fe9f0ebaef847c166cd0afa56b72fa44553ab69->enter($__internal_e4cbd95944491ebbbb727e364fe9f0ebaef847c166cd0afa56b72fa44553ab69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_571edbc522003cd7c78ed5a54a0e63a8bff5039d03dac40a82ffdbc7efbbedd1->leave($__internal_571edbc522003cd7c78ed5a54a0e63a8bff5039d03dac40a82ffdbc7efbbedd1_prof);

        
        $__internal_e4cbd95944491ebbbb727e364fe9f0ebaef847c166cd0afa56b72fa44553ab69->leave($__internal_e4cbd95944491ebbbb727e364fe9f0ebaef847c166cd0afa56b72fa44553ab69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
