<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3240b3d7557201168f26076154853f7bed3671b2eb91078a61ca78263a64e4d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_18aa72731da329081533716d4551521e4eefc75993fe63cd6a346b34a793e406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18aa72731da329081533716d4551521e4eefc75993fe63cd6a346b34a793e406->enter($__internal_18aa72731da329081533716d4551521e4eefc75993fe63cd6a346b34a793e406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18aa72731da329081533716d4551521e4eefc75993fe63cd6a346b34a793e406->leave($__internal_18aa72731da329081533716d4551521e4eefc75993fe63cd6a346b34a793e406_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75b0ff2c9620a9bac897f08bb9c820d792a43b46c7f69f07a8a7fead1fe18daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b0ff2c9620a9bac897f08bb9c820d792a43b46c7f69f07a8a7fead1fe18daa->enter($__internal_75b0ff2c9620a9bac897f08bb9c820d792a43b46c7f69f07a8a7fead1fe18daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_75b0ff2c9620a9bac897f08bb9c820d792a43b46c7f69f07a8a7fead1fe18daa->leave($__internal_75b0ff2c9620a9bac897f08bb9c820d792a43b46c7f69f07a8a7fead1fe18daa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/anna/NetBeansProjects/PhpProject1/tap4parking/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
