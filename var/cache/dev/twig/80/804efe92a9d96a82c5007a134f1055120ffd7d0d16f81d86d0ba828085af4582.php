<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2a3726c8ee160b6e7e6ec19455e1b5132f877b116a8ed2a93d8875e57ccfdb0d extends Twig_Template
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
        $__internal_8cf85b0e32a28fdc440140f0438b2246203a806fd1b6943e56f512ac7a6d0b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf85b0e32a28fdc440140f0438b2246203a806fd1b6943e56f512ac7a6d0b66->enter($__internal_8cf85b0e32a28fdc440140f0438b2246203a806fd1b6943e56f512ac7a6d0b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c9a35fe7824878e11e2bd8b7b93bd87db01fd1767472695d3b5f092b936dc170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a35fe7824878e11e2bd8b7b93bd87db01fd1767472695d3b5f092b936dc170->enter($__internal_c9a35fe7824878e11e2bd8b7b93bd87db01fd1767472695d3b5f092b936dc170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8cf85b0e32a28fdc440140f0438b2246203a806fd1b6943e56f512ac7a6d0b66->leave($__internal_8cf85b0e32a28fdc440140f0438b2246203a806fd1b6943e56f512ac7a6d0b66_prof);

        
        $__internal_c9a35fe7824878e11e2bd8b7b93bd87db01fd1767472695d3b5f092b936dc170->leave($__internal_c9a35fe7824878e11e2bd8b7b93bd87db01fd1767472695d3b5f092b936dc170_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
