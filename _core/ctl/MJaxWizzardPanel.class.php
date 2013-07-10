<?php
class MJaxWizzardPanel extends MJaxPanel
{
    public $strTitle = 'Wizzard';
    public $arrOptLinks = array();
    public $arrSteps = array();

    public function __construct($objParentControl, $strControlId = null)
    {
        parent::__construct($objParentControl, $strControlId);
        $this->strTemplate = __MJAX_WIZZARD_CORE_VIEW__ . '/' . get_class($this) . '.tpl.php';
        $this->objForm->AddJSCall(
            sprintf(
                '$("#%s_wizard-dark").bwizard();',
                $this->strControlId
            )
        );
    }
    public function Next(){
        $this->objForm->AddJSCall(
            sprintf(
                '$("#%s_wizard-dark").bwizard("next");',
                $this->strControlId
            )
        );
    }
    public function AddStep($strShortDesc, $mixOption, $intStepToReplace = null)
    {
        if (is_null($intStepToReplace)) {
            $intStepToReplace = count($this->arrSteps);
        }
        $objAction = null;
        if ($mixOption instanceof MJaxControl) {
            $this->arrSteps[$intStepToReplace] = $mixOption;

        } elseif ($mixOption instanceof MJaxServerControlAction) {
            $this->arrSteps[$intStepToReplace] = new MJaxPanel($this);
            $this->arrSteps[$intStepToReplace]->AutoRenderChildren = true;

            $objAction = $mixOption;
        }
        //Create a link
        $this->arrOptLinks[$intStepToReplace] = new MJaxLinkButton($this);
        $this->arrOptLinks[$intStepToReplace]->Text = $strShortDesc;
        if(!is_null($objAction)){
            $this->arrOptLinks[$intStepToReplace]->AddAction(
                new MJaxClickEvent(),
                $objAction
            );
        }

     }
    /////////////////////////
    // Public Properties: GET
    /////////////////////////
    public function __get($strName) {
        switch ($strName) {
            case "Title":
                return $this->strTitle;
            default:
                //throw new Exception("Not porperty exists with name '" . $strName . "' in class " . __CLASS__);
                return parent::__get($strName);

        }
    }

    /////////////////////////
    // Public Properties: SET
    /////////////////////////
    public function __set($strName, $mixValue) {
        switch ($strName) {
            case "Title":
                return $this->strTitle = $mixValue;
            default:
                return parent::__set($strName, $mixValue);

        }
    }

}
