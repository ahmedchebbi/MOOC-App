<?php

/* MoocMoocBundle:Default:terms.html.twig */
class __TwigTemplate_05aab38fe625328eb06a2e301c45162661889dc8922d47189ac95cfb2dca1385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "MoocMoocBundle:Default:terms.html.twig", 1);
        $this->blocks = array(
            'pagetitle' => array($this, 'block_pagetitle'),
            'arianne' => array($this, 'block_arianne'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pagetitle($context, array $blocks = array())
    {
        echo "terms & Conditions";
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        echo "Terms & Conditions";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        echo " 

    <!--breadcrumbs end-->



        <!-- privacy -->
    <div class=\"container privacy-terms\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h3>Who can use our services</h3>
                <p> you can establish a binding contract with Coursera and only in accordance with these Terms and all applicable laws. When you create your account Mooc , then when you use certain features, you must provide accurate and complete information , and you agree to change your information to keep it true and complete. Any access or use by persons under 13 are banned and some courses may have requirements and / or additional restrictions .
                </p>
                <p> &nbsp; </p>
                <h3>Our license for you</h3>
                <p> 
Subject to these Terms and our policies (including the Acceptable Use Policy , the Honor Code and requirements and other eligibility requirements specific to the course ) , we grant you a limited, personal , non-exclusive , non- transferable, revocable license to use our services . You are entitled to download content from our Services only for your personal, non-commercial use , unless you get written permission from Mooc for another use . You also agree to create, use and / or access to one user account only and not shared with any third party access to your account or information for that account . Using our Services does not give you ownership or rights of intellectual property on the Services or the content you access.
                </p>
             
                <p> &nbsp; </p>
                <h3>Security</h3>
                <p>
               
The safety of our users is important to us . Although we strive to protect the security of your account and its associated information, Coursera can not guarantee that unauthorized third parties will never succeed in defeating our security measures. Please report immediately any compromise or unauthorized use of your account by sending an email to security next.mooc@gmail.com.
                </p>
                

            </div>
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "MoocMoocBundle:Default:terms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block pagetitle %}terms & Conditions{% endblock %}*/
/* {% block arianne %}Terms & Conditions{% endblock %}*/
/* */
/* {%  block body %} */
/* */
/*     <!--breadcrumbs end-->*/
/* */
/* */
/* */
/*         <!-- privacy -->*/
/*     <div class="container privacy-terms">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h3>Who can use our services</h3>*/
/*                 <p> you can establish a binding contract with Coursera and only in accordance with these Terms and all applicable laws. When you create your account Mooc , then when you use certain features, you must provide accurate and complete information , and you agree to change your information to keep it true and complete. Any access or use by persons under 13 are banned and some courses may have requirements and / or additional restrictions .*/
/*                 </p>*/
/*                 <p> &nbsp; </p>*/
/*                 <h3>Our license for you</h3>*/
/*                 <p> */
/* Subject to these Terms and our policies (including the Acceptable Use Policy , the Honor Code and requirements and other eligibility requirements specific to the course ) , we grant you a limited, personal , non-exclusive , non- transferable, revocable license to use our services . You are entitled to download content from our Services only for your personal, non-commercial use , unless you get written permission from Mooc for another use . You also agree to create, use and / or access to one user account only and not shared with any third party access to your account or information for that account . Using our Services does not give you ownership or rights of intellectual property on the Services or the content you access.*/
/*                 </p>*/
/*              */
/*                 <p> &nbsp; </p>*/
/*                 <h3>Security</h3>*/
/*                 <p>*/
/*                */
/* The safety of our users is important to us . Although we strive to protect the security of your account and its associated information, Coursera can not guarantee that unauthorized third parties will never succeed in defeating our security measures. Please report immediately any compromise or unauthorized use of your account by sending an email to security next.mooc@gmail.com.*/
/*                 </p>*/
/*                 */
/* */
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {%  endblock  %}*/
