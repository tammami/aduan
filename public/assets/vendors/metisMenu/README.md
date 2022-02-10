# metismenu [![NPM version](https://img.shields.io/npm/v/metismenu.svg?style=flat)](https://www.npmjs.com/package/metismenu) [![NPM monthly downloads](https://img.shields.io/npm/dm/metismenu.svg?style=flat)](https://npmjs.org/package/metismenu)  [![NPM total downloads](https://img.shields.io/npm/dt/metismenu.svg?style=flat)](https://npmjs.org/package/metismenu) [![Linux Build Status](https://img.shields.io/travis/onokumus/metismenu.svg?style=flat&label=Travis)](https://travis-ci.org/onokumus/metismenu) [![](https://data.jsdelivr.com/v1/package/npm/metismenu/badge)](https://www.jsdelivr.com/package/npm/metismenu) [![Packagist](https://img.shields.io/packagist/v/onokumus/metismenu.svg)](https://packagist.org/packages/onokumus/metismenu)

> A jQuery menu plugin

## Table of Contents

- [Getting started](#getting-started)
  * [Install](#install)
  * [Download](#download)
- [Usage](#usage)
  * [Stopping list opening on certain elements](#stopping-list-opening-on-certain-elements)
- [Options](#options)
    + [toggle](#toggle)
    + [dispose](#dispose)
    + [activeClass](#activeclass)
    + [collapseClass](#collapseclass)
    + [collapseInClass](#collapseinclass)
    + [collapsingClass](#collapsingclass)
    + [preventDefault](#preventdefault)
    + [triggerElement](#triggerelement)
    + [parentTrigger](#parenttrigger)
    + [subMenu](#submenu)
- [Events](#events)
- [Testing](#testing)
- [Demo](#demo)
- [About](#about)
  * [Related projects](#related-projects)
  * [Contributors](#contributors)
  * [Contributing](#contributing)
  * [Release History](#release-history)
  * [Author](#author)
  * [License](#license)

_(TOC generated by [verb](https://github.com/verbose/verb) using [markdown-toc](https://github.com/jonschlinkert/markdown-toc))_

## Getting started
### Install
Install with [npm](https://www.npmjs.com/):

```sh
$ npm install --save metismenu
```

Install with [yarn](https://yarnpkg.com):

```sh
$ yarn add metismenu
```

Install with [bower](https://bower.io/)

```sh
$ bower install metismenu --save
```

Install with [composer](https://getcomposer.org/)

```sh
$ composer require onokumus/metismenu:dev-master
```

### Download
[download](https://github.com/onokumus/metisMenu/archive/master.zip)

## Usage

1. Include metismenu StyleSheet

  ```html
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.1/metisMenu.min.css">
  <!-- OR -->  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/metismenu/dist/metisMenu.min.css">
  ```

2. Include jQuery

  ```html
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- OR -->
  <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
  ```

3. Include metisMenu plugin's code

  ```html
  <script src="//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.1/metisMenu.min.js"></script>
  <!-- OR -->
  <script src="https://cdn.jsdelivr.net/npm/metismenu"></script>
  ```

4. Add class `metismenu` to unordered list

  ```html
  <ul class="metismenu" id="menu">

  </ul>
  ```
5. Make expand/collapse controls accessible

  > Be sure to add `aria-expanded` to the element `a` and the following `ul`. This attribute explicitly defines the current state of the collapsible element to screen readers and similar assistive technologies. If the collapsible element is closed by default, it should have a value of `aria-expanded="false"`. If you've set the collapsible element's parent `li` element to be open by default using the `active` class, set `aria-expanded="true"` on the control instead. The plugin will automatically toggle this attribute based on whether or not the collapsible element has been opened or closed.

  ```html
  <ul class="metismenu" id="menu">
    <li class="active">
      <a href="#" aria-expanded="true">Menu 1</a>
      <ul aria-expanded="true">
      ...
      </ul>
    </li>
    <li>
      <a href="#" aria-expanded="false">Menu 2</a>
      <ul aria-expanded="false">
      ...
      </ul>
    </li>
    ...
    </ul>
  ```
6. Arrow Options

  > add `has-arrow` class to `a` element

  ```html
  <ul class="metismenu" id="menu">
  <li class="active">
    <a class="has-arrow" href="#" aria-expanded="true">Menu 1</a>
    <ul aria-expanded="true">
    ...
    </ul>
  </li>
  <li>
    <a class="has-arrow" href="#" aria-expanded="false">Menu 2</a>
    <ul aria-expanded="false">
    ...
    </ul>
  </li>
  ...
  </ul>
  ```

7. Call the plugin:

  ```javascript
    $("#menu").metisMenu();
  ```

### Stopping list opening on certain elements
Setting aria-disabled="true" in the `<a>` element as shown will stop metisMenu opening the menu for that particular list. This can be changed dynamically and will be obeyed correctly:

```html
<a href="#" aria-expanded="false" aria-disabled="true">List 1</a>
```

## Options

#### toggle
Type: `Boolean`
Default: `true`

For auto collapse support.

```javascript
 $("#menu").metisMenu({
   toggle: false
 });
```

#### dispose
Type: `String`
Default: `null`

For stop and destroy metisMenu.

```javascript
 $("#menu").metisMenu('dispose');
```

#### activeClass
Type: `String`
Default: `active`

```javascript
 $("#menu").metisMenu({
   activeClass: 'active'
 });
```

#### collapseClass
Type: `String`
Default: `collapse`

```javascript
 $("#menu").metisMenu({
   collapseClass: 'collapse'
 });
```

#### collapseInClass
Type: `String`
Default: `in`

```javascript
 $("#menu").metisMenu({
   collapseInClass: 'in'
 });
```

#### collapsingClass
Type: `String`
Default: `collapsing`

```javascript
 $("#menu").metisMenu({
   collapsingClass: 'collapsing'
 });
```

#### preventDefault
Type: `Boolean`
Default: `true`

>Prevents or allows dropdowns' onclick events after expanding/collapsing.

  ```javascript
   $("#menu").metisMenu({
     preventDefault: false
   });
  ```

*since from version 2.7.0*

#### triggerElement
Type: `jQuery selector`
Default: `a`

```javascript
 $("#menu").metisMenu({
   triggerElement: '.nav-link' // bootstrap 4
 });
```

#### parentTrigger
Type: `jQuery selector`
Default: `li`

```javascript
 $("#menu").metisMenu({
   parentTrigger: '.nav-item' // bootstrap 4
 });
```

#### subMenu
Type: `jQuery selector`
Default: `ul`

```javascript
 $("#menu").metisMenu({
   subMenu: '.nav.flex-column' // bootstrap 4
 });
```

## Events

|**Event Type**      |**Description**|
|--------------|--------------|
|show.metisMenu    |This event fires immediately when the `_show` instance method is called.|
|shown.metisMenu   |This event is fired when a collapse `ul` element has been made visible to the user (will wait for CSS transitions to complete).|
|hide.metisMenu    |This event is fired immediately when the `_hide` method has been called. |
|hidden.metisMenu  |This event is fired when a collapse `ul` element has been hidden from the user (will wait for CSS transitions to complete).|

## Testing
```sh
$ npm install
$ grunt serve
```

## Demo
[http://mm.onokumus.com](http://mm.onokumus.com)

Contains a simple HTML file to demonstrate metisMenu plugin.

## About

### Related projects
- [chl](https://www.npmjs.com/package/chl): flexbox admin layout | [homepage](https://github.com/chaldene/chl#readme "flexbox admin layout")
- [elektron](https://www.npmjs.com/package/elektron): An Admin Toolkit | [homepage](https://github.com/onokumus/elektron#readme "An Admin Toolkit")
- [onoffcanvas](https://www.npmjs.com/package/onoffcanvas): An offcanvas plugin | [homepage](https://github.com/onokumus/onoffcanvas#readme "An offcanvas plugin")
- [twbuttons](https://www.npmjs.com/package/twbuttons): alexwolfe/Buttons for Twitter Bootstrap 3 | [homepage](https://github.com/onokumus/twbuttons "alexwolfe/Buttons for Twitter Bootstrap 3")

### Contributors
| **Commits** | **Contributor** |  
| --- | --- |  
| 117 | [onokumus](https://github.com/onokumus) |  
| 8   | [diegozhu](https://github.com/diegozhu) |  
| 4   | [sinabs](https://github.com/sinabs) |  
| 2   | [arthurtalkgoal](https://github.com/arthurtalkgoal) |  
| 2   | [PeterDaveHello](https://github.com/PeterDaveHello) |  
| 2   | [kalidema](https://github.com/kalidema) |  
| 2   | [AndrewEastwood](https://github.com/AndrewEastwood) |  
| 2   | [rgnevashev](https://github.com/rgnevashev) |  
| 1   | [chriswiggins](https://github.com/chriswiggins) |  
| 1   | [jmagnusson](https://github.com/jmagnusson) |  
| 1   | [LukasDrgon](https://github.com/LukasDrgon) |  
| 1   | [Cediddi](https://github.com/Cediddi) |  
| 1   | [capynet](https://github.com/capynet) |  

### Contributing
Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](../../issues/new).

Please read the [contributing guide](.github/contributing.md) for advice on opening issues, pull requests, and coding standards.

### Release History
|**DATE**      |**VERSION**   |**CHANGES**|
|--------------|--------------|-----------|
|2017-10-30    |v2.7.1        |added check in complete()-callback to break when menu was disposed #150|
|2017-03-08    |v2.7.0        |fixed `has-arrow` class border color & added new 3 options|
|2017-02-23    |v2.6.3        |fixed #129|
|2017-02-02    |v2.6.2        |doubleTapToGo option is deprecated|
|2016-12-06    |v2.6.1        |fix require.js|
|2016-11-29    |v2.6.0        |dispose support|
|2016-05-06    |v2.5.2        |fix Menu failed to remove collapsing class|
|2016-05-06    |v2.5.1        |fixed bootstrap conflict|
|2016-03-31    |v2.5.0        |Event support|
|2016-03-11    |v2.4.3        |create meteor package|
|2016-03-04    |v2.4.2        |back to version 2.4.0|
|2016-03-03    |v2.4.1        |<del>Transition element passed to methods</del> (removed)|
|2016-01-25    |v2.4.0        |Support AMD / Node / CommonJS|
|2016-01-08    |v2.3.0        |Adding aria-disabled=true to the link element prevents the dropdown from opening|
|2015-09-27    |v2.2.0        |Events supported & added preventDefault options|
|2015-08-06    |v2.1.0        |RTL & `aria-expanded` attribute & TypeScript type definitions support|
|2015-07-25    |v2.0.3        |When the active item has doubleTapToGo should not collapse|
|2015-05-23    |v2.0.2        |[fixed](https://github.com/onokumus/metisMenu/issues/34#issuecomment-104656754)|
|2015-05-22    |v2.0.1        |changeable classname support|
|2015-04-03    |v2.0.0        |Remove Bootstrap dependency|
|2015-03-24    |v1.1.3        |composer support|
|2014-11-01    |v1.1.3        |Bootstrap 3.3.0|
|2014-07-07    |v1.1.0	      |Add double tap functionality|
|2014-06-24    |v1.0.3	      |cdnjs support & rename plugin|
|2014-06-18    |v1.0.3        |Create grunt task|
|2014-06-10    |v1.0.2        |Fixed for IE8 & IE9|

### Author
**Osman Nuri Okumus**

+ [github/onokumus](https://github.com/onokumus)
+ [twitter/onokumus](https://twitter.com/onokumus)

### License
Copyright © 2017, [Osman Nuri Okumus](https://github.com/onokumus).
Released under the [MIT License](LICENSE).

***

_This file was generated by [verb-generate-readme](https://github.com/verbose/verb-generate-readme), v0.6.0, on October 30, 2017._

[chl]: https://github.com/chaldene/chl
[elektron]: https://github.com/onokumus/elektron
[onoffcanvas]: https://github.com/onokumus/onoffcanvas
[twbuttons]: https://github.com/onokumus/twbuttons
