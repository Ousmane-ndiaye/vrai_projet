<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0cf73d5893792eeda0d00fb03587ceee5be4f7472e9df275352e545c949b5e3b extends Twig_Template
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
        $__internal_d0c51124b1e01e32c3e10d30872a61ece28da5e8a2b1b1068b741778c4f05594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c51124b1e01e32c3e10d30872a61ece28da5e8a2b1b1068b741778c4f05594->enter($__internal_d0c51124b1e01e32c3e10d30872a61ece28da5e8a2b1b1068b741778c4f05594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_81017fa01817615aa972bdc5b78b64a3ada345f6f39a609c622e8e364912c72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81017fa01817615aa972bdc5b78b64a3ada345f6f39a609c622e8e364912c72f->enter($__internal_81017fa01817615aa972bdc5b78b64a3ada345f6f39a609c622e8e364912c72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d0c51124b1e01e32c3e10d30872a61ece28da5e8a2b1b1068b741778c4f05594->leave($__internal_d0c51124b1e01e32c3e10d30872a61ece28da5e8a2b1b1068b741778c4f05594_prof);

        
        $__internal_81017fa01817615aa972bdc5b78b64a3ada345f6f39a609c622e8e364912c72f->leave($__internal_81017fa01817615aa972bdc5b78b64a3ada345f6f39a609c622e8e364912c72f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
