# ORO Frontend Development Guidelines

Code style is a set of conventions about how to write code.
It is much easier to understand a large codebase when all the code in it is in a consistent style.

Our guide is divided into the following sections:

* [Naming conventions](#naming-conventions)
* [HTML coding standards](#html-coding-standards)
* [CSS coding standards](#css-coding-standards)
* [The main mixins and functions](#the-main-mixins-and-functions)
* [Best practices](#best-practices)

## Naming conventions

The main idea of the naming convention is to make names as informative and clear as possible.
This will help make code development and debugging easier and also solve some of the problems faced by web developers.
Written like this, the name of the selector is clearly divided into logical parts.
Selectors name  write in lower case and logical parts share a dash (**-**).

### Acceptable
```
product-gallery-widget
```

### Unacceptable
```
productgallerywidget, productGalleryWidget, product_gallery_widget
```

### Selector Naming

#### Block-name

**block-name** is a logical self-contained functional component of the user interface.

Block identifier should match the corresponding layout block type identifier. Block names may be prefixed with a short
namespace or bundle identifier if similar blocks are provided by multiple bundles to eliminate confusion, e.g.

##### Examples:
```
product-info, shopping-cart, currency-switcher
order-group-totals and quote-group-totals, or even crm-quote-group-totals and commerce-quote-group-totals
```

#### Element-name

The namespace defined by the name of a block identifies an element as belonging to the block.
An element name is delimited by a double underscore (**__**).
The full name of an element is created using this scheme:

block-name__elem-name

If a block has several identical elements, such as in the case of menu items, all of them will have the same name menu__item.

#### Modifier name

The namespace defined by the name of a block identifies a modifier as belonging to that block or its element.
A modifier name is delimited by a single underscore (**--**).
Modifiers are optional.

The full name of a modifier is created using the scheme:

* for Boolean modifiers - owner-name--mod-name;
* for key-value type modifiers - owner-name_mod-name--mod-val;

This gives the following advantages:

* the logic of naming allows you to immediately understand what exactly is a concrete class;
* decreases the likelihood of conflict between classes;
* each element is in the namespace;
* components are easily transferred from project to project;


## HTML coding standards

### Base code style

1. Do not add a slash at the end of single elements.
2. The attributes in use **" "** not **' '**.
3. After the closing tag must not be spaces or tabs.
4. Indentation only spaces.
5. The attachment elements are indented 4 spaces.

### Simple names

```HTML
<div class="product">
    <p class="product__name">Product name</p>
    <div class="product__prices">...</div>
    <div class="product__info">...</div>
</div>
```

### The order of the attributes

First - required and optional attributes for tag(example: name, type, src, href, etc).

Then attributes used for UI customization(example: class, data-*, etc).

Last - attributes with JSON content.

```HTML
<input name type id
    class
    data-*
    data-entity="{{ {
        id: entity.id,
        title: entity.title
    }|json_encode }}"
    />
```

## CSS coding standards

### Base code style

1. Built on **SASS** preprocessor (site:  [sass-lang.com](http://sass-lang.com/)).
2. Focused on web standards.

### The principles of CSS architecture

```
<dl>
    <dt>Predictability</dt>
    <dd>Predictability for CSS means that your rules are behaving in the expected.</dd>
    <dt>Reusable</dt>
    <dd>CSS rules should be abstract and decoupled enough that you can build new components quickly
        from existing parts without having to recode patterns and problems you’ve already solved.
    </dd>
    <dt>Scalable</dt>
    <dd>Scalable CSS means it can be easily managed by a single person or a large engineering team.</dd>
    <dt>Support</dt>
    <dd>When new components and features need to be added, updated or rearranged on your site,
        doing so shouldn’t require refactoring existing CSS.
    </dd>
    <dt>Responsive</dt>
    <dd>We use CSS to resize, hide, shrink, enlarge, or move the content to make it look good on any screen.</dd>
</dl>
```

### SASS Code Standards

1. Use the **.scss** syntax.
2. Indentation only spaces.
3. Indent size: 4 spaces
4. Continuation indent: 4 spaces
5. The attributes in use **' '** not **" "**.
6. Use: **{}, :, ;**.
7. Put a space before the opening brace **{** in rule declarations.
8. Put closing braces **}** of rule declarations on a new line.
9. Each component is written in a separate file.
10. Don't write vendors prefixes.

#### Comments

1. Prefer line comments **//** to block comments.
2. Prefer comments on their own line. Avoid end-of-line comments.

##### Acceptable
```scss
.element {
    // Use base color
    color: $color;
}
```

##### Unacceptable
```scss
 .element {
    color: $color; /* Use base color */
 }
 ```

#### Format

Add space before opening brace and line break after. And line break before closing brace.

##### Acceptable
```scss
.element {
    color: $color;
}
```

##### Unacceptable
```scss
.element{color: $color;}
 ```

#### Selector delimiters

Add line break after each selector delimiter. Delimiter shouldn't have spaces before and after.

##### Acceptable
```scss
.element1,
.element2 {
     color: $color;
}
```

##### Unacceptable
```scss
.element1, .element2 {
    color: $color;
}
```

## Type selectors

Unless necessary (for example with helper classes), do not use element names in conjunction with IDs or classes.
Avoiding unnecessary ancestor selectors is useful for performance reasons.

### Acceptable
```scss
.element {
    ...
}
```

### Unacceptable
```scss
div.element {
    ...
}

div#element {
    ...
}
```

### Combinator indents

Use spaces before and after combinators.

#### Acceptable
```scss
.element1 + .element2 {
     color: $color;
}
```

#### Unacceptable
```scss
.element1+.element2 {
    color: $color;
}
```

### Properties line break

Use line break for each property declaration.

#### Acceptable
```scss
.element {
     position: absolute;
     top: 0;
     left: 0;
}
```

#### Unacceptable
```scss
.element {
    position: absolute; top: 0; left: 0;
}
```

### Properties colon indents

Use no space before property colon, and space after.

#### Acceptable
```scss
.element {
    color: $color;
}
```

#### Unacceptable
```scss
.element1 {
    color : $color;
}

.element2 {
    color:$color;
}

.element3 {
    color :$color;
}
```

### End of the selector

Each selector should be finished with new line

#### Acceptable
```scss
.element1 {
    color: $color;
}

.element2 {
    color: $color;
}
```

#### Unacceptable
```scss
.element1 {
    color: $color;
}
.element2 {
    color: $color;
}
```

### Shorthand

If you use more than 2 parameters (three indents, for example), write short:

```scss
.element {
    margin: 10px 0 5px;
}
```

If less, then:

```scss
.element {
    margin-top: 10px;
    margin-right: 2px;
}
```

### Floating values

For fractional numbers do not add zero.

#### Acceptable
```scss
.element {
    opacity: .5;
}
```

#### Unacceptable
```scss
.element {
    opacity: 0.5;
}
```

### Zero and units

Omit the units for zero value.

#### Acceptable
```scss
.element {
    margin: 0;
}
```

#### Unacceptable
```scss
.element {
    margin: 0px;
}
```

### Border

Use 0 instead of none to specify that a style has no border.

#### Acceptable
```scss
.element {
    border: 0;
}
```

#### Unacceptable
```scss
.element {
   border: none;
}
```

### Nesting


When selectors become this long, you're likely writing CSS that is:

* strongly coupled to the HTML
* overly specific
* not reusable.

#### Selector Nesting


Be careful with selectors nesting. In general try to use **2 nested levels** as max.

Exception are **pseudo elements** and **states**.


##### Acceptable

```scss
.block {
    &__element {
        &--modifier {
            ...
        }
    }

    &--modifier {
        ...
    }
}
```

##### Unacceptable

```scss
.block {
    ...

    .block__element {
        ...

        &.block__element--modifier {
            // STOP!
        }
    }

    &.block--modifier {}
}
```
#### No Elements of Elements

According to BEM methodology there are no elements of elements.
It makes the elements be dependent on the block only. So, you can easily move them
across the block when providing changes to the interface.

##### Acceptable
```scss
.block {
    ...

    .block__some-element {
        ...
    }

    .block__other-element {
        ...
    }
}
```

##### Unacceptable
```scss
.block {
    ...

    .block__some-element {
        ...

        .block__some-element__other-element {
            // STOP!
        }
    }
}
```


### Place of @media rules

All @media rules place at the end of file.
The block applies only to the common styles for all devices. @media describes individual styles for each type of device.
This allows us in the future to change or add styles only for a specific type of device.

#### Acceptable
```scss
.block {
    width: 50%;
    padding: 10px;

    background-color: get-color('additional', 'middle');

    &__element {
        font-size: 12px;
    }
}

@include breakpoint('tablet') {
    .block {
        width: 100%;
    }
}

@include breakpoint('mobile') {
    .block {
        padding: 15px;

        &__element {
            font-size: 15px;
        }
    }
}
```

#### Unacceptable
```scss
.block {
    width: 50%;
    padding: 10px;

    background-color: get-color('additional', 'middle');

    @include breakpoint('tablet') {
        width: 100%;
    }

    @include breakpoint('mobile') {
        padding: 15px;
    }

    &__element {
        font-size: 12px;

        // STOP!
        @include breakpoint('mobile') {
            font-size: 15px;
        }
    }
}
```

### Work with colors

To work with color, use **get-color()** function, which returns a color from a predefined color scheme.

Example:

```scss
.block {
    border-color: get-color('additional', 'light');
    color: get-color('primary', 'main');
}
```

If you need darker or lighter or more transparent color
use native Sass functions: **darken()**, **lighten()**, **transparentize()**, etc.

```scss
.block {
    background-color: transparentize(get-color('primary', 'main'), .8);
    border-color: darken(get-color('additional', 'light'), 10%);
    color: lighten(get-color('primary', 'main'), 10%);
}
```


### Group properties

Are grouped in the following order:

1. variables,
2. positioning,
3. block model,
4. typography,
5. visualization,
6. other (animation, opacity).
7. mixins,

After each group leaves behind an empty string.
> In CSS we have a each of properties that can be treated in different groups depending on their use:
`vertical-align`, `overflow`, `clear`, `resize`, `transform`. [List of all css properties](http://cssreference.io/).

#### Acceptable
```scss
// variables
$element-color: #000 !default;
$element-font: 12px !default;
$element-line-height: 1.2 !default;
```

```scss
.element {
    // positioning
    position: absolute;
    top: 0;
    right: 0;
    z-index: z('fixed');

    // block model
    width: 100px;
    height: 100px;
    margin: 10px;
    padding: 10px 20px;

    // typography
    font-size: $element-font;
    line-height: $element-line-height;
    text-align: center;

    // visualization
    border: 10px solid #333;
    background: red;
    color: $element-color;

    // other
    cursor: pointer;
    opacity: .2;

    // mixins
    // grouping @includes at the end makes it easier to read the entire selector.
    @include clearfix;
}
```

#### Unacceptable

```scss
.element {
    text-align: center;
    margin: 0;
    $color: #000;
    @include clearfix;
    color: $color;
    right: 0;
    position: absolute;
}
```

### Use @extend directive

**Use @extend only selector that is a single class**.

1. Helper class include after variables.
2. Helper class has maximum **5** rules.
3. Helper class has abstract name and overall design style.

#### Examples:
```scss
$default-size: 400px !default;
$default-offset: 10px auto !default;
$default-inner-offset: 15px !default;
$default-background: #dadada !default;

%dialog {
    width: $default-size;
    margin: $default-offset;
    padding: $default-inner-offset;

    background: $default-background;
}
```

```scss
.modal {
    // other modal styles

    @extend %dialog;

    &__close {
        // other button styles

        @extend %dialog__close;
    }

    &__header {
        // other header styles

        @extend %background-gradient;
    }
}
```
### Logical sense

Use the logical number of modifiers for the element.

#### Acceptable

"Quiet classes"
```scss
%modifier {}
%another-modifier {}
%yet-another-modifier {}

.block {
    &__element {
        &--modifier {
            @extend %modifier;
            @extend %another-modifier;
            @extend %yet-another-modifier;
        }
    }
}
```

```html
<div class="block">
    <div class="
        block__element
        block__element--modifier">
    </div>
</div>
```

#### Unacceptable
```html
<div class="block">
    <div class="
        block__element
        block__element--modifier
        block__element--another-modifier
        block__element--yet-another-modifier">
    </div>
</div>
```

## The main mixins and functions

Helper to clear inner floats.

```scss
@mixin clearfix {
    &:after {
        content: '';

        display: block;

        clear: both;
    }
}

// use
.block {
    @include clearfix;
}
```

Helper for the positioning of pseudo-elements.

```scss
@mixin after {
    content: '';

    position: absolute;

    display: block;
}

// use
.block {
    //...

    &:after {
        @include after;
    }
}
```

Helper function for organizing z-index

```scss
@function z($layer) {
    $layers: (
        'base': 1,
        'fixed': 50,
        'dropdown': 100,
        'popup': 150,
        'hidden': -1
    );

    $z-index: map-get($layers, $layer);
    @return $z-index;
}

// use
.dialog {
    //...

    z-index: z('popup') + 1;

    &-overley {
        //...

        z-index: z('popup');
    }
}
```

Helper mixin for organizing @media rules

````scss
@mixin breakpoint($type) {
    $breakpoints: (
        'large': '(max-width: ' + #{$breakpoint-large} + ')',
        'tablet': '(max-width: ' + #{$breakpoint-tablet} + ')',
        'mobile': '(max-width: ' + #{$breakpoint-mobile} + ')'
    );

    @media #{map-get($breakpoints, $type)} {
        @content;
    }
}
// use

@include breakpoint('tablet') {
    // styles for tablet version
}
````

## Best practices

```scss
$block-font-title: 'Tahoma' !default;
$block-offset: 10px !default;
```

```scss
.block {
    @include clearfix;

    &__element {
        float: left;
        width: 25%;
        padding-left: $list-offset * 2;

        font-size: 14px;

        @extend %transition;

        // compound class
        &-title {
            margin-bottom: $list-offset;

            font-family: $list-font-title;
            font-size: 22px;
            line-height: 1.1;
        }

        &--first {
            padding-left: 0;
        }

        &:hover {
            border-color: get-color('additional', 'middle');
        }
    }

    &__content {
        padding: $list-offset ($list-offset * 2);
    }

    &:hover {
        background-color: get-color('secondary', 'light');
    }

    // State written &. (the active state of the menu item, for example).
    // Usually dynamic.
    &.expand {
        ...
    }
}

@include breakpoint('tablet') {
    .block {
        width: 100%;

        &__content {
            padding: $list-offset * 2;

            font-size: 15px;
        }
    }
}

@include breakpoint('mobile') {
    .block {
        &__element {
            width: 100%;

            &-title {
                margin-bottom: 0;

                font-size: 25px;
            }
        }
    }
}
```
