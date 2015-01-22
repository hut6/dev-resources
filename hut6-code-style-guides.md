# Hut6 Style Guides 

List of style guides we aspire to follow 

---

## Identation

Whether it's HTML, PHP, Javacript, SASS or CSS, use an indent of **4 spaces**, and must not use tabs or 2 spaces for indenting. 

Spaces are the only way to guarantee code renders the same in any person's environment and 4 instead of 2 to make it consistent accross different editors, IDEs and languages.

## PHP 

- [PSR-1 Basic Coding Standard](http://www.php-fig.org/psr/psr-1/)
- [PSR-2 Coding Style Guide](http://www.php-fig.org/psr/psr-2/)
- [Symfony Coding Standards](https://github.com/symfony/symfony-docs/blob/master/contributing/code/standards.rst)

## HTML

[Github's Markup Style Guide](https://github.com/styleguide/templates)

## JS

[Jquery's Style Guide](http://contribute.jquery.org/style-guide/js/)

## CSS

[Idiomatic's Style Guide](https://github.com/necolas/idiomatic-css)

In addition to the this style guide:

No px, %, or other units should be assigned to the line-height value. A number value should be used as a multiplier, where the line eight equals the specified number multiplied by the element’s computed font size. Child elements will also inherit the specified number value, not the computed value for this property. This means the children's font sizes will be used to compute the line-height. 
Using em is essentially the same as using a number without unit, so it can be ignored. 
With percentages, child elements will inherit the computed value for the property, not the specified percentage value, which is usually not desired.  

## SASS 

Compile Expanded with Line Mapping so dev tools can tell you exactly what file and on what line rules are coming from, even if it is an imported partial. In production, files will be compressed anyway. 

Group ruleset contents in the following order:

- @extends
- Properties
- @includes
- Pseudo-classes
- Media Queries
- Pseudo-elements
- Rulesets (rinse and repeat)

Try not to nest more than 4 levels deep, if you're deeper than that, you're writing a crappy selector.

Additionally, if a nested block is longer than 60 lines of SASS, it's probably getting too long too. The whole point of nesting is convenience and to assist in mental grouping.

## Twig

[Sensio's Twig Coding Standards](http://twig.sensiolabs.org/doc/coding_standards.html) (used by both Craft and Symfony)

Remmeber that `{% if array|length > 0 %}` can also be simplified to `{% if array|length %}`. 
