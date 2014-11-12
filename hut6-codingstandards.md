# Coding Standards

Coding standards we aspire to follow 

## Identation. Tabs, 2 spaces or 4 spaces?

Soft tab with 4 spaces. Spaces are the only way to guarantee code renders the same in any person's environment. Whether it's HTML, PHP, Javacript, SASS or CSS. 

## PHP 

### Style Guide

PSR-1 Basic Coding Standard http://www.php-fig.org/psr/psr-1/
PSR-2 Coding Style Guide http://www.php-fig.org/psr/psr-2/
Symfony Coding Standards https://github.com/symfony/symfony-docs/blob/master/contributing/code/standards.rst

### Frameworks

Symfony

## CSS

Idiomatic CSS https://github.com/necolas/idiomatic-css

## SASS 

Group related properties in the following order:

- @extends
- Properties
- @includes
- Nested Media Queties
- Pseudo-elements and classes
- Nested Rulesets

Try not to nest more than 3 levels deep, if you're deeper than that, you're writing a crappy selector.

Additionally, if a nested block is longer than 50 lines of SASS, it's probably getting too long too. The whole point of nesting is convenience and to assist in mental grouping.

Compile Expanded with Line Mapping so dev tools can tell you exactly what file and on what line rules are coming from, even if it is an imported partial. In productions, files will be compressed anyway. 

## JS

Style Guide: http://contribute.jquery.org/style-guide/js/

## Front End Frameworks

Don't reinvent the wheel; always try to use as many features from your framework if possible. 

### Foundation 

Used for front end work (ie website development). 

Use the _settings file as much as possible before overriding any 

Documentation http://foundation.zurb.com/learn/features.html

### Twitter Bootstrap

Used for back end work (ie app development).

http://foundation.zurb.com/learn/features.html

### Ionic + AngularJS

Used for mobile and tablet app development

