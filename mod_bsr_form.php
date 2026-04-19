<?php
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

// Базовые настройки
$rfCallId = $params->get('rf_call_id', '123');
$formTitle = $params->get('form_title', 'Оставить заявку');
$successMsg = $params->get('success_msg', 'Спасибо! Заявка принята.');
$formFields = $params->get('form_fields', []);
$autofillTitle = $params->get('autofill_title', 1);
$agreementText = $params->get('agreement_text', 'Нажимая кнопку, я даю согласие на обработку данных.');

// Настройки дизайна и атрибутов
$formId = $params->get('form_id', '');
$formClass = $params->get('form_class', '');
$btnClass = $params->get('btn_class', 'sppb-btn sppb-btn-default sppb-btn-round');
$colorBtn = $params->get('color_btn', '#005b8c');
$colorBtnHover = $params->get('color_btn_hover', '#003f63');
$colorFocus = $params->get('color_focus', '#005b8c');

require ModuleHelper::getLayoutPath('mod_bsr_form', $params->get('layout', 'default'));