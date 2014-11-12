# Hut6 Style Guides 

List of style guides we aspire to follow 

---

## Identation

Whether it's HTML, PHP, Javacript, SASS or CSS, use an indent of **4 spaces**, and MUST NOT use tabs for indenting. 

Spaces are the only way to guarantee code renders the same in any person's environment and 4 instead of 2 to make it consistent accross different editors, IDEs and languages.

## HTML

[Github's Markup Style Guide](https://github.com/styleguide/templates)

## PHP 

- [PSR-1 Basic Coding Standard](http://www.php-fig.org/psr/psr-1/)
- [PSR-2 Coding Style Guide](http://www.php-fig.org/psr/psr-2/)
- [Symfony Coding Standards](https://github.com/symfony/symfony-docs/blob/master/contributing/code/standards.rst)

## CSS

[Idiomatic's Style Guide](https://github.com/necolas/idiomatic-css)

## SASS 

Group related properties in the following order:

- @extends
- Properties
- @includes
- Nested Media Queties
- Pseudo-elements
- Nested Rulesets

Try not to nest more than 4 levels deep, if you're deeper than that, you're writing a crappy selector.

Additionally, if a nested block is longer than 60 lines of SASS, it's probably getting too long too. The whole point of nesting is convenience and to assist in mental grouping.

Compile Expanded with Line Mapping so dev tools can tell you exactly what file and on what line rules are coming from, even if it is an imported partial. In productions, files will be compressed anyway. 

## JS

[Jquery's Style Guide](http://contribute.jquery.org/style-guide/js/)