<?php
require_once THIRDPARTY_PATH . DIRECTORY_SEPARATOR . 'Zend/Translate.php';
require_once THIRDPARTY_PATH . DIRECTORY_SEPARATOR . 'zend_translate_railsyaml/library/Translate/Adapter/RailsYAML.php';

/**
 * @package framework
 * @subpackage i18n
 */

class i18nRailsYamlAdapter extends Translate_Adapter_RailsYaml implements i18nTranslateAdapterInterface {
	
	/**
	 * @param String
	 * @return String
	 */
	public function getFilenameForLocale($locale) {
		return "$locale.yml";
	}
}
