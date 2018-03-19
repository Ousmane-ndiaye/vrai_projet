<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_652c6f5da4d22f130958983ebeea86daebc195a5a376933eae19786aaffdeeb3 extends Twig_Template
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
        $__internal_222da7b8f9a1f25d2b87b905dd4c4ff7b9ff543bf1f5e13e0e8d5ac86a57870b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_222da7b8f9a1f25d2b87b905dd4c4ff7b9ff543bf1f5e13e0e8d5ac86a57870b->enter($__internal_222da7b8f9a1f25d2b87b905dd4c4ff7b9ff543bf1f5e13e0e8d5ac86a57870b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_9104df20b6fd59cb815860f3f553d288b03fdc7892f36c2b0aae40efbba8952c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9104df20b6fd59cb815860f3f553d288b03fdc7892f36c2b0aae40efbba8952c->enter($__internal_9104df20b6fd59cb815860f3f553d288b03fdc7892f36c2b0aae40efbba8952c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_222da7b8f9a1f25d2b87b905dd4c4ff7b9ff543bf1f5e13e0e8d5ac86a57870b->leave($__internal_222da7b8f9a1f25d2b87b905dd4c4ff7b9ff543bf1f5e13e0e8d5ac86a57870b_prof);

        
        $__internal_9104df20b6fd59cb815860f3f553d288b03fdc7892f36c2b0aae40efbba8952c->leave($__internal_9104df20b6fd59cb815860f3f553d288b03fdc7892f36c2b0aae40efbba8952c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
