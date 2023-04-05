# DokuWiki Plugin Ad-Hoc Wrap

This is an attempt of re-creating some parts of the Wrap plugin on top of the [Ad-Hoc Tags](https://github.com/saschaleib/dokuwiki-plugin-adhoctags) plugin. It is still under development.

Features include:
* implements the `<WRAP…`, `<wrap…`, `<inline…` and `<block…` tags to be compatible with Wrap's implementation (note that `<div…` and `<span…` are already provided by *Ad-Hoc Tags*).
* Adds many useful CSS classes, most of which replicate similar classes from Wrap:
  * Block-notifications like `box`, `tip`, `important`, `alert`, `help`, `download` and `todo`.
    * Also for inline-blocks
    * Showing a more modern style and icons
* Text and marker colour classes
* Grid layout elements, allowing more complex table-like layouts.
* Support for RTL page layouts
* Support for Dark Mode (specific for the [Ad-Hominem Template](https://github.com/saschaleib/dokuwiki-template-ad-hominem))
  

More information and examples on the [Demo Webpage](https://fallacies.online/wiki/playground/adhocplugins).
