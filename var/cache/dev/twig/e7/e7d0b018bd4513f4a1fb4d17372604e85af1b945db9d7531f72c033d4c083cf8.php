<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a673ceafd720c665011418fe4d7e17959c129a9bfa99d999ab0acaad0fb16271 extends Twig_Template
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
        $__internal_a9db7ec48c5faf4ad6ee2dcccfe4f91a255e1811f0d0f75d9cb06a53e8778bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9db7ec48c5faf4ad6ee2dcccfe4f91a255e1811f0d0f75d9cb06a53e8778bdb->enter($__internal_a9db7ec48c5faf4ad6ee2dcccfe4f91a255e1811f0d0f75d9cb06a53e8778bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_dbd789d522edd1ec544da156f24013302b0576c1cdbc3bc75c53b199e8afae37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd789d522edd1ec544da156f24013302b0576c1cdbc3bc75c53b199e8afae37->enter($__internal_dbd789d522edd1ec544da156f24013302b0576c1cdbc3bc75c53b199e8afae37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a9db7ec48c5faf4ad6ee2dcccfe4f91a255e1811f0d0f75d9cb06a53e8778bdb->leave($__internal_a9db7ec48c5faf4ad6ee2dcccfe4f91a255e1811f0d0f75d9cb06a53e8778bdb_prof);

        
        $__internal_dbd789d522edd1ec544da156f24013302b0576c1cdbc3bc75c53b199e8afae37->leave($__internal_dbd789d522edd1ec544da156f24013302b0576c1cdbc3bc75c53b199e8afae37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
