<?php

/* modules/seo_checklist/templates/seo-checklist-getting-started.html.twig */
class __TwigTemplate_f9531b1dfe64502a024b26a9c2b29d2374d8f7d520487dae215564c7cbdf0916 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 12
        echo "
<h3>Getting started with Drupal 8 SEO</h3>
<p>Please read these instructions to get the most out of your Drupal Search Engine Optimization efforts.</p>

<h4>Module + book = Drupal SEO shortcut</h4>
<p>This module was created along with the book <a href=\"http://www.drupalseobook.com/\">Drupal 8 SEO</a> by Ben Finklea. While the module explains <em>what to do</em>, the book tells you <em>how to do it</em>. They're designed to work together to give you a significant shortcut to your technical SEO efforts.</p>

<h4>Technical SEO -vs- content marketing</h4>
<p>This checklist is a guide to technical SEO but it doesn't help you with content optimization, keyword research, marketing strategy, etc. If you need help with these things, consider using a Drupal-specific Internet Marketing consultant like <a href=\"http://www.volacci.com/contact?";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ga_query_string"]) ? $context["ga_query_string"] : null), "html", null, true));
        echo "\">Volacci</a> or ask your Drupal developer for a recommendation.</p>

<h4>Getting started</h4>
<p>Each time you open the SEO Checklist, it will look to see if any tasks have already been completed. For example, if you've already turned on clean URLs then that item will be checked. You still need to click \"Save\" to time and date stamp the automatically-checked items.</p>
<p>The best way to proceed is to start at the top and work your way through each tab until you're done, clicking save after each completed item.</p>

<h4>How it's organized</h4>
<p>The sections are listed from most important to least important. The tasks in each section are also ordered from most to least important. A notable exception to this is the Be Efficient section.</p>
<ul>
  <li><strong>Be Efficient:</strong> This section contains items that will help you get things done faster. They are not necessary for good SEO, but they are highly recommended.</li>
  <li><strong>Save Button:</strong> Be sure to click the save button after you check off each item. This will create a time and date stamp so that you can easily see when each task was completed.</li>
  <li><strong>Links:</strong> Many tasks have links next to them. Some links are to drupal.org, outside websites, or to admin sections of your own site. Links to outside resources will open in a new window.</li>
  <li><strong>Help:</strong> Some items have \"More info\" links. These will take you to appropriate documentation pages where you can read more about a module or important concept.</li>
</ul>

<h4>A note about pre-release modules</h4>
<p><em>Some recommended modules may not be considered ready for production websites. These modules are usually marked with \"beta\" or \"dev\" or \"alpha\" on Drupal.org. Please be very careful when installing any module—even those that have been fully tested and released—but be especially careful with dev, alpha, or beta modules.</em></p>

<h4>Credits</h4>
<p>The Drupal SEO Checklist was created by <a href=\"https://www.drupal.org/user/46676\">Ben Finklea</a>, author of <a href=\"http://www.drupalseobook.com/\">Drupal 8 SEO</a>, CEO of <a href=\"http://www.volacci.com/?";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["ga_query_string"]) ? $context["ga_query_string"] : null), "html", null, true));
        echo "\">Volacci</a> and a long-time Drupal community member. Development was paid for exclusively by Volacci.</p>
<p>Special thanks to <a href=\"https://www.drupal.org/u/TravisCarden\">Travis Carden</a> who created the <a href=\"https://www.drupal.org/project/checklistapi\">Checklist API module</a> and did the development work on this module.</p>
";
    }

    public function getTemplateName()
    {
        return "modules/seo_checklist/templates/seo-checklist-getting-started.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 39,  53 => 20,  43 => 12,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for the SEO Checklist \"Getting started\" tab.
 *
 * Available variables:
 * - ga_query_string: A Google Analytics query string.
 *
 * @ingroup themeable
 */
#}

<h3>Getting started with Drupal 8 SEO</h3>
<p>Please read these instructions to get the most out of your Drupal Search Engine Optimization efforts.</p>

<h4>Module + book = Drupal SEO shortcut</h4>
<p>This module was created along with the book <a href=\"http://www.drupalseobook.com/\">Drupal 8 SEO</a> by Ben Finklea. While the module explains <em>what to do</em>, the book tells you <em>how to do it</em>. They're designed to work together to give you a significant shortcut to your technical SEO efforts.</p>

<h4>Technical SEO -vs- content marketing</h4>
<p>This checklist is a guide to technical SEO but it doesn't help you with content optimization, keyword research, marketing strategy, etc. If you need help with these things, consider using a Drupal-specific Internet Marketing consultant like <a href=\"http://www.volacci.com/contact?{{ ga_query_string }}\">Volacci</a> or ask your Drupal developer for a recommendation.</p>

<h4>Getting started</h4>
<p>Each time you open the SEO Checklist, it will look to see if any tasks have already been completed. For example, if you've already turned on clean URLs then that item will be checked. You still need to click \"Save\" to time and date stamp the automatically-checked items.</p>
<p>The best way to proceed is to start at the top and work your way through each tab until you're done, clicking save after each completed item.</p>

<h4>How it's organized</h4>
<p>The sections are listed from most important to least important. The tasks in each section are also ordered from most to least important. A notable exception to this is the Be Efficient section.</p>
<ul>
  <li><strong>Be Efficient:</strong> This section contains items that will help you get things done faster. They are not necessary for good SEO, but they are highly recommended.</li>
  <li><strong>Save Button:</strong> Be sure to click the save button after you check off each item. This will create a time and date stamp so that you can easily see when each task was completed.</li>
  <li><strong>Links:</strong> Many tasks have links next to them. Some links are to drupal.org, outside websites, or to admin sections of your own site. Links to outside resources will open in a new window.</li>
  <li><strong>Help:</strong> Some items have \"More info\" links. These will take you to appropriate documentation pages where you can read more about a module or important concept.</li>
</ul>

<h4>A note about pre-release modules</h4>
<p><em>Some recommended modules may not be considered ready for production websites. These modules are usually marked with \"beta\" or \"dev\" or \"alpha\" on Drupal.org. Please be very careful when installing any module—even those that have been fully tested and released—but be especially careful with dev, alpha, or beta modules.</em></p>

<h4>Credits</h4>
<p>The Drupal SEO Checklist was created by <a href=\"https://www.drupal.org/user/46676\">Ben Finklea</a>, author of <a href=\"http://www.drupalseobook.com/\">Drupal 8 SEO</a>, CEO of <a href=\"http://www.volacci.com/?{{ ga_query_string }}\">Volacci</a> and a long-time Drupal community member. Development was paid for exclusively by Volacci.</p>
<p>Special thanks to <a href=\"https://www.drupal.org/u/TravisCarden\">Travis Carden</a> who created the <a href=\"https://www.drupal.org/project/checklistapi\">Checklist API module</a> and did the development work on this module.</p>
";
    }
}
