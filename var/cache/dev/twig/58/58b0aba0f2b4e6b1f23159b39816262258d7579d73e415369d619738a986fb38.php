<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_36ad9e7e8f14078c02ec478cec0b2ca9201c6ae985cb598b03c5191159e3899d extends Twig_Template
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
        $__internal_c11f84a2387d30202798f7bcbc7da3145e4250a911aba7129d42667921598373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11f84a2387d30202798f7bcbc7da3145e4250a911aba7129d42667921598373->enter($__internal_c11f84a2387d30202798f7bcbc7da3145e4250a911aba7129d42667921598373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4ed2877a9d8c41e4f26c987046adf7406d5c93251246264ad71f36912d4daa4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed2877a9d8c41e4f26c987046adf7406d5c93251246264ad71f36912d4daa4f->enter($__internal_4ed2877a9d8c41e4f26c987046adf7406d5c93251246264ad71f36912d4daa4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c11f84a2387d30202798f7bcbc7da3145e4250a911aba7129d42667921598373->leave($__internal_c11f84a2387d30202798f7bcbc7da3145e4250a911aba7129d42667921598373_prof);

        
        $__internal_4ed2877a9d8c41e4f26c987046adf7406d5c93251246264ad71f36912d4daa4f->leave($__internal_4ed2877a9d8c41e4f26c987046adf7406d5c93251246264ad71f36912d4daa4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
