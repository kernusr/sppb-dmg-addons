<?php

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;

defined('_JEXEC') or die ('Restricted access');

$lang = Factory::getLanguage();
$lang->load('plg_sppagebuilder_dmg_addons', JPATH_SITE . '/plugins/sppagebuilder/dmg_addons/', $lang->getTag(), true);

SpAddonsConfig::addonConfig(
    array(
        'type' => 'content',
        'addon_name' => 'dmg_heading',
        'title' => Text::_('COM_SPPAGEBUILDER_ADDON_HEADING'),
        'desc' => Text::_('COM_SPPAGEBUILDER_ADDON_HEADING_DESC'),
        'category' => 'DMG',
        'attr' => array(
            'general' => array(
                'admin_label' => array(
                    'type' => 'text',
                    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
                    'std' => '',
                ),

                'title' => array(
                    'type' => 'textarea',
                    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
                    'std' => 'This is title'
                ),

                'heading_selector' => array(
                    'type' => 'select',
                    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DESC'),
                    'values' => array(
                        'h1' => 'h1',
                        'h2' => 'h2',
                        'h3' => 'h3',
                        'h4' => 'h4',
                        'h5' => 'h5',
                        'h6' => 'h6',
                        'p' => 'p',
                        'span' => 'span',
                        'div' => 'div'
                    ),
                    'std' => 'h2'
                ),

                'use_link' => array(
                    'type' => 'checkbox',
                    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_HEADING_USE_LINK'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_ADDON_HEADING_USE_LINK_DESC'),
                    'std' => 0
                ),

                'title_link' => array(
                    'type' => 'media',
                    'format' => 'attachment',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK_DESC'),
                    'placeholder' => 'http://',
                    'std' => '',
                    'hide_preview' => true,
                    'depends' => array('use_link' => 1)
                ),

                'link_new_tab' => array(
                    'type' => 'select',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK_NEWTAB'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_GLOBAL_LINK_NEWTAB_DESC'),
                    'values' => array(
                        0 => Text::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_SAME_WINDOW'),
                        1 => Text::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_TARGET_NEW_WINDOW'),
                    ),
                    'std' => '',
                    'depends' => array('use_link' => 1)
                ),

                'title_font_family' => array(
                    'type' => 'fonts',
                    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_FAMILY'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_FAMILY_DESC'),
                    'depends' => array(array('title', '!=', '')),
                    'selector' => array(
                        'type' => 'font',
                        'font' => '{{ VALUE }}',
                        'css' => '.sppb-addon-title { font-family: "{{ VALUE }}"; }'
                    )
                ),

                'title_fontsize' => array(
                    'type' => 'slider',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_FONT_SIZE'),
                    'std' => '',
                    'max' => 400,
                    'responsive' => true
                ),
                'title_lineheight' => array(
                    'type' => 'slider',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_LINE_HEIGHT'),
                    'std' => '',
                    'max' => 400,
                    'responsive' => true
                ),

                'title_font_style' => array(
                    'type' => 'fontstyle',
                    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_STYLE'),
                    'depends' => array(array('title', '!=', '')),
                ),

                'title_letterspace' => array(
                    'type' => 'select',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_LETTER_SPACING'),
                    'values' => array(
                        '-10px' => '-10px',
                        '-9px' => '-9px',
                        '-8px' => '-8px',
                        '-7px' => '-7px',
                        '-6px' => '-6px',
                        '-5px' => '-5px',
                        '-4px' => '-4px',
                        '-3px' => '-3px',
                        '-2px' => '-2px',
                        '-1px' => '-1px',
                        '0' => 'Default',
                        '1px' => '1px',
                        '2px' => '2px',
                        '3px' => '3px',
                        '4px' => '4px',
                        '5px' => '5px',
                        '6px' => '6px',
                        '7px' => '7px',
                        '8px' => '8px',
                        '9px' => '9px',
                        '10px' => '10px'
                    ),
                    'std' => '0'
                ),
                'title_text_transform' => array(
                    'type' => 'select',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_TEXT_TRANSFORM'),
                    'values' => array(
                        'none' => 'None',
                        'capitalize' => 'Capitalize',
                        'uppercase' => 'Uppercase',
                        'lowercase' => 'Lowercase',
                    ),
                    'std' => 'none'
                ),

                'title_margin' => array(
                    'type' => 'margin',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_GLOBAL_MARGIN_DESC'),
                    'std' => '0px 0px 30px 0px',
                    'responsive' => true
                ),

                'title_padding' => array(
                    'type' => 'padding',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_GLOBAL_PADDING_DESC'),
                    'std' => '0px 0px 0px 0px',
                    'responsive' => true
                ),

                'title_icon' => array(
                    'type' => 'icon',
                    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_ICON'),
                    'depends' => array(array('title', '!=', '')),
                ),

                'title_icon_position' => array(
                    'type' => 'select',
                    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_ICON_POSITION'),
                    'values' => array(
                        'before' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_ICON_POSITION_BEFORE'),
                        'after' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_ICON_POSITION_AFTER'),
                    ),
                    'std' => 'before',
                    'depends' => array(array('title_icon', '!=', '', 'title', '!=', '')),
                ),

                'title_icon_color' => array(
                    'type' => 'color',
                    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_TITLE_ICON_COLOR'),
                    'depends' => array(array('title_icon', '!=', '', 'title', '!=', '')),
                ),

                'alignment' => array(
                    'type' => 'select',
                    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CONTENT_ALIGNMENT'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CONTENT_ALIGNMENT_DESC'),
                    'values' => array(
                        'sppb-text-left' => Text::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
                        'sppb-text-center' => Text::_('COM_SPPAGEBUILDER_GLOBAL_CENTER'),
                        'sppb-text-right' => Text::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
                    ),
                    'std' => 'sppb-text-center',
                    'depends' => array('alignment_responsive' => 0)
                ),

                'alignment_responsive' => array(
                    'type' => 'checkbox',
                    'title' => Text::_('PLG_SPPAGEBUILDER_DMG_ADDONS_CONTENT_ALIGNMENT_RESPONSIBLE_TITLE'),
                    'desc' => Text::_('PLG_SPPAGEBUILDER_DMG_ADDONS_CONTENT_ALIGNMENT_RESPONSIBLE_DESCRIPTION'),
                    'std' => '0',
                ),
                'alignment_responsive_lg' => array(
                    'type' => 'select',
                    'title' => Text::_('PLG_SPPAGEBUILDER_DMG_ADDONS_CONTENT_ALIGNMENT_RESPONSIBLE_LG'),
                    'values' => array(
                        'text-lg-left' => Text::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
                        'text-lg-center' => Text::_('COM_SPPAGEBUILDER_GLOBAL_CENTER'),
                        'text-lg-right' => Text::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
                    ),
                    'std' => 'text-lg-center',
                    'depends' => array('alignment_responsive' => 1)
                ),
                'alignment_responsive_md' => array(
                    'type' => 'select',
                    'title' => Text::_('PLG_SPPAGEBUILDER_DMG_ADDONS_CONTENT_ALIGNMENT_RESPONSIBLE_MD'),
                    'values' => array(
                        'text-md-left' => Text::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
                        'text-md-center' => Text::_('COM_SPPAGEBUILDER_GLOBAL_CENTER'),
                        'text-md-right' => Text::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
                    ),
                    'std' => 'text-md-center',
                    'depends' => array('alignment_responsive' => 1)
                ),
                'alignment_responsive_sm' => array(
                    'type' => 'select',
                    'title' => Text::_('PLG_SPPAGEBUILDER_DMG_ADDONS_CONTENT_ALIGNMENT_RESPONSIBLE_SM'),
                    'values' => array(
                        'text-sm-left' => Text::_('COM_SPPAGEBUILDER_GLOBAL_LEFT'),
                        'text-sm-center' => Text::_('COM_SPPAGEBUILDER_GLOBAL_CENTER'),
                        'text-sm-right' => Text::_('COM_SPPAGEBUILDER_GLOBAL_RIGHT'),
                    ),
                    'std' => 'text-sm-center',
                    'depends' => array('alignment_responsive' => 1)
                ),

                'title_text_shadow' => array(
                    'type' => 'boxshadow',
                    'title' => Text::_('COM_SPPAGEBUILDER_GLOBAL_TEXT_SHADOW'),
                    'std' => '',
                    'config' => array(
                        'spread' => false
                    )
                ),

                'class' => array(
                    'type' => 'text',
                    'title' => Text::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
                    'desc' => Text::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
                    'std' => ''
                ),

            ),
        ),
    )
);
