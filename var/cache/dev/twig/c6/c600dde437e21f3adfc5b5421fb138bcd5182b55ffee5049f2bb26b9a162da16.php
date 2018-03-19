<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b9fe2bef1d1b026e3c0b7736f21e572ac9473006c19ab78375174fdd839a7745 extends Twig_Template
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
        $__internal_aac27bdd880c60d571fe6ac4b03bac6f920bd7120c695bc22e0c1ff0fea22672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac27bdd880c60d571fe6ac4b03bac6f920bd7120c695bc22e0c1ff0fea22672->enter($__internal_aac27bdd880c60d571fe6ac4b03bac6f920bd7120c695bc22e0c1ff0fea22672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_4791230e66aac060e46f23b2eadc61110ea6e6ff789a7f168a5cc700b949b0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4791230e66aac060e46f23b2eadc61110ea6e6ff789a7f168a5cc700b949b0c6->enter($__internal_4791230e66aac060e46f23b2eadc61110ea6e6ff789a7f168a5cc700b949b0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_aac27bdd880c60d571fe6ac4b03bac6f920bd7120c695bc22e0c1ff0fea22672->leave($__internal_aac27bdd880c60d571fe6ac4b03bac6f920bd7120c695bc22e0c1ff0fea22672_prof);

        
        $__internal_4791230e66aac060e46f23b2eadc61110ea6e6ff789a7f168a5cc700b949b0c6->leave($__internal_4791230e66aac060e46f23b2eadc61110ea6e6ff789a7f168a5cc700b949b0c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
