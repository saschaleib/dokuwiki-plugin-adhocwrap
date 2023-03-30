<?php
/**
 * Block-level wrap component for the Ad Hoc Wrap plugin
 *
 * Defines  <div> ... </div> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/div
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocwrap_divwrap extends syntax_plugin_adhoctags_abstractblock {

	protected $tag			= 'WRAP';
	protected $output_tag	= 'div';
	protected $pluginName	= 'adhocwrap';

	protected function registerTag() { return true;}
}