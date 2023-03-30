<?php
/**
 * Inline wrap component for the Ad Hoc Wrap plugin
 *
 * Defines  <span> ... </span> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/span
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocwrap_spaninline extends syntax_plugin_adhoctags_abstractinline {

	protected $tag			= 'inline';
	protected $output_tag	= 'span';
	protected $pluginName	= 'adhocwrap';

	protected function registerTag() { return true; }
}