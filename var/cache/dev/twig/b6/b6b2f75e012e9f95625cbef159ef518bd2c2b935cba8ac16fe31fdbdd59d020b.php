<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c8bb9c4e15bb7aaabdef164dddeda6fc2bbafd00fd8e56a75c745fd192671372 extends Twig_Template
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
        $__internal_b9707a85985ad901ca4d8f9a4bd8d0f241197d6a39cbd47a4e261819f4a3ceab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9707a85985ad901ca4d8f9a4bd8d0f241197d6a39cbd47a4e261819f4a3ceab->enter($__internal_b9707a85985ad901ca4d8f9a4bd8d0f241197d6a39cbd47a4e261819f4a3ceab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_97ab4dbff444b57416e31c0aa463af1912db0f6c5e3f74df9d8ab61e2ff24ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ab4dbff444b57416e31c0aa463af1912db0f6c5e3f74df9d8ab61e2ff24ee3->enter($__internal_97ab4dbff444b57416e31c0aa463af1912db0f6c5e3f74df9d8ab61e2ff24ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b9707a85985ad901ca4d8f9a4bd8d0f241197d6a39cbd47a4e261819f4a3ceab->leave($__internal_b9707a85985ad901ca4d8f9a4bd8d0f241197d6a39cbd47a4e261819f4a3ceab_prof);

        
        $__internal_97ab4dbff444b57416e31c0aa463af1912db0f6c5e3f74df9d8ab61e2ff24ee3->leave($__internal_97ab4dbff444b57416e31c0aa463af1912db0f6c5e3f74df9d8ab61e2ff24ee3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
