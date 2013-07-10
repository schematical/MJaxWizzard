<div class="block block-dark span12">
    <p class="block-heading">
        <span class="block-icon pull-right">
            <a href="#" class="demo-cancel-click" rel="tooltip" title="settings">
                <i class="icon-cog icon-2x icon-settings"></i>
            </a>
        </span>
        <span><?php echo $_CONTROL->strTitle; ?></span>
    </p>

    <div class="block-body">
        <div id="<?php echo $_CONTROL->ControlId; ?>_wizard-dark">
            <ol>
                <?php foreach($_CONTROL->arrOptLinks as $intIndex => $lnkOpt){ ?>
                    <li><?php $lnkOpt->Render(); ?></li>
                <?php } ?>
            </ol>
            <?php foreach($_CONTROL->arrSteps as $intIndex => $pnlOpt){
                $pnlOpt->Render();
            } ?>
        </div>

    </div>
</div>