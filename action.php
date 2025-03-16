<?php
/**
 * Action Component for the Ad-Hoc Wrap Plugin
 *
 * @license	GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author	 Andreas Gohr <andi@splitbrain.org>
 * @author	 Sascha Leib <sascha.leib(at)kolmio.com>
 */

class action_plugin_adhocwrap extends DokuWiki_Action_Plugin {

	/**
	* register the eventhandlers
	*
	* @author	Andreas Gohr <andi@splitbrain.org>
	* @author	Sascha Leib <sascha.leib(at)kolmio.com>
	*/
	function register(Doku_Event_Handler $controller){
		$controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'handle_toolbar', array ());
	}

	function handle_toolbar(Doku_Event $event, $param) {
		
		/* create the menu */
		$event->data[] = array (
			'type'	=>	'picker',
			'title'	=>	'Ad-Hoc Wrap',
			'icon'	=>	'../../plugins/adhocwrap/images/wrap.svg',
			'id'	=>	'tbbtn_adhocWrap',
			'list'	=>	array(
				array(
					'type'		=> 'format',
					'title'		=> 'Outline box (div)',
					'icon'		=> '../../plugins/adhocwrap/images/box-outline.svg',
					'open'		=> '<div box>',
					'close'		=> '</div>',
					'sample'	=> '\nOutline box\n'
				),
				array(
					'type'		=> 'format',
					'title'		=> 'Info-Block (div)',
					'icon'		=> '../../plugins/adhocwrap/images/information-slab-box-outline.svg',
					'open'		=> '<div info>',
					'close'		=> '</div>',
					'sample'	=> '\nInformation Block\n'
				),
				array(
					'type'		=> 'format',
					'title'		=> 'Tip-Block (div)',
					'icon'		=> '../../plugins/adhocwrap/images/lightbulb-box-outline.svg',
					'open'		=> '<div tip>',
					'close'		=> '</div>',
					'sample'	=> '\nTip Block\n'
				),
				array(
					'type'		=> 'format',
					'title'		=> 'Important Block (div)',
					'icon'		=> '../../plugins/adhocwrap/images/alert-box-outline.svg',
					'open'		=> '<div important>',
					'close'		=> '</div>',
					'sample'	=> '\nImportant Block\n'
				),
				array(
					'type'		=> 'format',
					'title'		=> 'Alert Block (div)',
					'icon'		=> '../../plugins/adhocwrap/images/close-box-outline.svg',
					'open'		=> '<div alert>',
					'close'		=> '</div>',
					'sample'	=> '\nAlert Block\n'
				),
				array(
					'type'		=> 'format',
					'title'		=> 'Inline block (aside)',
					'icon'		=> '../../plugins/adhocwrap/images/aside-block.svg',
					'open'		=> '<aside outline box>\n',
					'close'		=> '\n</aside>',
					'sample'	=> 'Aside block'
				),
				array(
					'type'		=> 'format',
					'title'		=> 'Illustration block, floating right, with border and outline (aside+figure)',
					'icon'		=> '../../plugins/adhocwrap/images/float-block-right.svg',
					'open'		=> '<aside float-right><figure outline box>\n',
					'close'		=> '\n<figcaption centered>Figure caption here</figcaption>\n</figure></aside>',
					'sample'	=> 'Figure content'
				),
				array(
					'type'		=> 'format',
					'title'		=> 'Illustration block, floating left, with border and outline (aside+figure)',
					'icon'		=> '../../plugins/adhocwrap/images/float-block-left.svg',
					'open'		=> '<aside float-left><figure box>\n',
					'close'		=> '\n<figcaption centered>Figure caption here</figcaption>\n</figure></aside>',
					'sample'	=> 'Figure content'
				),
				array(
					'type'		=> 'format',
					'title'		=> 'Layout 2 columns (div)',
					'icon'		=> '../../plugins/adhocwrap/images/layout-2-columns.svg',
					'open'		=> '<div grid-2-columns>\n<div>\n',
					'close'		=> '\n</div>\n<div>\nColumn 2\n</div>\n</div>',
					'sample'	=> 'Column 1'
				),
				array(
					'type'		=> 'format',
					'title'		=> 'Layout 3 columns (div)',
					'icon'		=> '../../plugins/adhocwrap/images/layout-3-columns.svg',
					'open'		=> '<div grid-3-columns>\n<div>\n',
					'close'		=> '\n</div>\n<div>\nColumn 2\n</div>\n<div>\nColumn 3\n</div>\n</div>',
					'sample'	=> 'Column 1'
				),
				array(
					'type'		=> 'format',
					'title'		=> 'Marker red',
					'icon'		=> '../../plugins/adhocwrap/images/marker-red.svg',
					'open'		=> '<mark red>',
					'close'		=> '</mark>',
					'sample'	=> 'Red marked text'
				),
				array(
					'type'		=> 'format',
					'title'		=> 'Marker orange',
					'icon'		=> '../../plugins/adhocwrap/images/marker-orange.svg',
					'open'		=> '<mark orange>',
					'close'		=> '</mark>',
					'sample'	=> 'Orange highlight'
				),
				array(
					'type'		=> 'format',
					'title'		=> 'Marker green',
					'icon'		=> '../../plugins/adhocwrap/images/marker-green.svg',
					'open'		=> '<mark green>',
					'close'		=> '</mark>',
					'sample'	=> 'Green marked text'
				),
				array(
					'type'		=> 'format',
					'title'		=> 'Marker cyan',
					'icon'		=> '../../plugins/adhocwrap/images/marker-cyan.svg',
					'open'		=> '<mark cyan>',
					'close'		=> '</mark>',
					'sample'	=> 'Cyan marked text'
				),
				array(
					'type'		=> 'format',
					'title'		=> 'Marker grey',
					'icon'		=> '../../plugins/adhocwrap/images/marker-grey.svg',
					'open'		=> '<mark grey>',
					'close'		=> '</mark>',
					'sample'	=> 'Grey marked text'
				)
				
			)
		);
	}

}