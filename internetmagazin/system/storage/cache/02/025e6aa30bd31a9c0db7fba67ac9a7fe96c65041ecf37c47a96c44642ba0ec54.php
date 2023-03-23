<?php

/* common/footer.twig */
class __TwigTemplate_be9cccd853eba4afe2e3930648dccf96ada43f9a0f0ba591f043c13e3a97c696 extends Twig_Template
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
        // line 1
        echo "<footer>
  <div class=\"container\">
    <a href=\"http://opencart.ru\" target=\"_blank\">";
        // line 3
        echo (isset($context["text_project"]) ? $context["text_project"] : null);
        echo "</a>
  </div>
</footer>
</body></html>";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container">*/
/*     <a href="http://opencart.ru" target="_blank">{{ text_project }}</a>*/
/*   </div>*/
/* </footer>*/
/* </body></html>*/
