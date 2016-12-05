<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_34727124b714752cecd63e62ad0db1c3ccd41d39afa82bf0260bf463e0b15022 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f32591220e511d225be77423e52db37339b85693eab1370c9593d33f78c88d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32591220e511d225be77423e52db37339b85693eab1370c9593d33f78c88d7d->enter($__internal_f32591220e511d225be77423e52db37339b85693eab1370c9593d33f78c88d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f32591220e511d225be77423e52db37339b85693eab1370c9593d33f78c88d7d->leave($__internal_f32591220e511d225be77423e52db37339b85693eab1370c9593d33f78c88d7d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_817481707a7d55265cfbedff4efb5ecf2029fb2eaafe617dbccf83f4e9a9fe71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_817481707a7d55265cfbedff4efb5ecf2029fb2eaafe617dbccf83f4e9a9fe71->enter($__internal_817481707a7d55265cfbedff4efb5ecf2029fb2eaafe617dbccf83f4e9a9fe71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_817481707a7d55265cfbedff4efb5ecf2029fb2eaafe617dbccf83f4e9a9fe71->leave($__internal_817481707a7d55265cfbedff4efb5ecf2029fb2eaafe617dbccf83f4e9a9fe71_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/anna/NetBeansProjects/PhpProject1/tap4parking/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
