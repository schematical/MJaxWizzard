<?php
define('__MJAX_WIZZARD__', dirname(__FILE__));
define('__MJAX_WIZZARD_CORE__', __MJAX_WIZZARD__ . '/_core');
define('__MJAX_WIZZARD_CORE_CTL__', __MJAX_WIZZARD_CORE__ . '/ctl');
define('__MJAX_WIZZARD_CORE_MODEL__', __MJAX_WIZZARD_CORE__ . '/model');
define('__MJAX_WIZZARD_CORE_VIEW__', __MJAX_WIZZARD_CORE__ . '/view');

MLCApplicationBase::$arrClassFiles['MJaxWizzardPanel'] = __MJAX_WIZZARD_CORE_CTL__ . '/MJaxWizzardPanel.class.php';


//require_once(__MJAX_BS_MANAGER_CORE__ . '/_enum.inc.php');
//require_once(__MJAX_WIZZARD_CORE__ . '/_actions.inc.php');


