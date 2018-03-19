<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_54d037e5162dfa915310efd058dc1aa6cbcf6bbba891aa6883f83f55c86cb241 extends Twig_Template
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
        $__internal_a41e7152866f835e0b031d98130abc482e3df43478fdd3ab918ae9c0118ca37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41e7152866f835e0b031d98130abc482e3df43478fdd3ab918ae9c0118ca37a->enter($__internal_a41e7152866f835e0b031d98130abc482e3df43478fdd3ab918ae9c0118ca37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9c1a113247e3f5c798c406849a7858a32720083df3486b80233439975b3416d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c1a113247e3f5c798c406849a7858a32720083df3486b80233439975b3416d9->enter($__internal_9c1a113247e3f5c798c406849a7858a32720083df3486b80233439975b3416d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a41e7152866f835e0b031d98130abc482e3df43478fdd3ab918ae9c0118ca37a->leave($__internal_a41e7152866f835e0b031d98130abc482e3df43478fdd3ab918ae9c0118ca37a_prof);

        
        $__internal_9c1a113247e3f5c798c406849a7858a32720083df3486b80233439975b3416d9->leave($__internal_9c1a113247e3f5c798c406849a7858a32720083df3486b80233439975b3416d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
