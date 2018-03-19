<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_35adecb451e73ce7cceefb6918fd41de51bebb7b720e57934a1b209162db4a81 extends Twig_Template
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
        $__internal_50757832b1a547a28975179a5603eb4b1bc737f50b404f1ff2d13671a9bbd9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50757832b1a547a28975179a5603eb4b1bc737f50b404f1ff2d13671a9bbd9be->enter($__internal_50757832b1a547a28975179a5603eb4b1bc737f50b404f1ff2d13671a9bbd9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_220dfc7fc4b7a34c35f63cb3c08a457b2d8280912d55767ccccdebf48629b607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220dfc7fc4b7a34c35f63cb3c08a457b2d8280912d55767ccccdebf48629b607->enter($__internal_220dfc7fc4b7a34c35f63cb3c08a457b2d8280912d55767ccccdebf48629b607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_50757832b1a547a28975179a5603eb4b1bc737f50b404f1ff2d13671a9bbd9be->leave($__internal_50757832b1a547a28975179a5603eb4b1bc737f50b404f1ff2d13671a9bbd9be_prof);

        
        $__internal_220dfc7fc4b7a34c35f63cb3c08a457b2d8280912d55767ccccdebf48629b607->leave($__internal_220dfc7fc4b7a34c35f63cb3c08a457b2d8280912d55767ccccdebf48629b607_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/File_Rouge/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
