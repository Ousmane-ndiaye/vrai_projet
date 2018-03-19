<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_964e8ad35f4cbf0d7dcd1b9d02a66645a5af639f97878953f462401a21938253 extends Twig_Template
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
        $__internal_20fb679d84e8a851b9cc38f8d03d4f78b8e96a167e9a88a98633c695e8fd35cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20fb679d84e8a851b9cc38f8d03d4f78b8e96a167e9a88a98633c695e8fd35cb->enter($__internal_20fb679d84e8a851b9cc38f8d03d4f78b8e96a167e9a88a98633c695e8fd35cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f78a01b1b55f275e4aeecda1d6eeda83f2d70e81e78d7277daff378188700628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78a01b1b55f275e4aeecda1d6eeda83f2d70e81e78d7277daff378188700628->enter($__internal_f78a01b1b55f275e4aeecda1d6eeda83f2d70e81e78d7277daff378188700628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_20fb679d84e8a851b9cc38f8d03d4f78b8e96a167e9a88a98633c695e8fd35cb->leave($__internal_20fb679d84e8a851b9cc38f8d03d4f78b8e96a167e9a88a98633c695e8fd35cb_prof);

        
        $__internal_f78a01b1b55f275e4aeecda1d6eeda83f2d70e81e78d7277daff378188700628->leave($__internal_f78a01b1b55f275e4aeecda1d6eeda83f2d70e81e78d7277daff378188700628_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
