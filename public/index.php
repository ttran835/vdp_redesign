<?php
$vehicle = $store->vehicle;
$disclaimers = $store->disclaimers;

function getDisclaimer($vehicle, $disclaimers)
{
    if (isset($vehicle->certified) && $vehicle->certified)
        return $disclaimers->certified;
    else if ($vehicle->condition == 'used')
        return $disclaimers->used;
    else
        return $disclaimers->new;
}

$language = PM_SITE_PROPS['language'];
$file = PM_MOTORS_MODULE_PATH . 'translation/lang/lang_' . $language . '.php';
if (file_exists($file)) {
    $lang_tokens = require_once $file;
} else {
    $lang_tokens = require_once PM_MOTORS_MODULE_PATH . 'translation/lang/lang_en.php';
}
$tokens = $lang_tokens['vdp'];

$editButton = '';
$showOptionCodeStatus = false;

if (current_user_can('edit_others_pages')) {
    $editButton = "<a href='/wp-admin/admin.php?page=inventory-admin&vin=" . $vehicle->vin . "' target='_blank' class='pull-right' style='font-size: 25px; color: inherit;'><i class='fa fa-pencil-square-o'></i></a>";
    if (PM_MOTORS_OEM === 'FCA') {
        $showOptionCodeStatus = true;
    }
}

$moto = in_array(PM_MOTORS_SITE_TOKEN, ['bmwmcriverside']);
?>

<h1 id="vehicle-name" class="vehicle-name<?= /** HACK TODO - Replace with configuration */
PM_MOTORS_SITE_TOKEN !== 'nchonda' ? ' text-uppercase' : ''; ?>"><?= $vehicle->label . $editButton; ?></h1>
<h4 id="vdp-back" class="pdtm-vdp-go-back">&larr; <?= $tokens['go_back']; ?></h4>
<div id="vehicle-display">
    <div id="image-container" class="row">
        <div class="col-md-6">
            <div class="content-box">
                <div id="detail-images">
                    <?php 
                        // if (PM_MOTORS_SITE_TOKEN !== 'columbuscdjr') {
                        //     foreach ($vehicle->media->image as $image) {
                        //         echo "<div><img src='{$image}' class='img img-responsive' alt='{$vehicle->label}'></div>";
                        //     }
                        // } else {
                        //     foreach ($vehicle->media->images as $image) {
                        //         $rotate = $image->rotate;
                        //         $flip = $image->flip;
                        //         if ($rotate == 90 || $rotate == 270) {
                        //             if ($flip == 0) { 
                        //                 echo "<div><img src='{$image->src}' class='img img-responsive' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(0.6)'></div>";
                        //             } else {
                        //                 echo "<div><img src='{$image->src}' class='img img-responsive' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(0.6) scaleY(-1)'></div>";
                        //             }
                        //         } else {
                        //             if ($flip == 0) {
                        //                 echo "<div><img src='{$image->src}' class='img img-responsive' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(1)'></div>";
                        //             } else {
                        //                 echo "<div><img src='{$image->src}' class='img img-responsive' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(1) scaleX(-1)'></div>";
                        //             }
                        //         }
                        //     }
                        // }

                        foreach ($vehicle->media->image as $image) {
                            $rotate = $image->rotate;
                            $flip = $image->flip;
                            if ($rotate == 90 || $rotate == 270) {
                                if ($flip == 0) { 
                                    echo "<div><img src='{$image->src}' class='img img-responsive' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(0.6)'></div>";
                                } else {
                                    echo "<div><img src='{$image->src}' class='img img-responsive' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(0.6) scaleY(-1)'></div>";
                                }
                            } else {
                                if ($flip == 0) {
                                    echo "<div><img src='{$image->src}' class='img img-responsive' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(1)'></div>";
                                } else {
                                    echo "<div><img src='{$image->src}' class='img img-responsive' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(1) scaleX(-1)'></div>";
                                }
                            }
                        }
                        
                     ?>
                </div>
                <div id="thumbnail-gallery">
                <?php 
                    // if (PM_MOTORS_SITE_TOKEN !== 'columbuscdjr') {
                    //     foreach ($vehicle->media->image as $image) {
                    //         echo "<div><img data-lazy='{$image}' class='img img-responsive pdtm-vdp-img-detail' alt='{$vehicle->label}'></div>";
                    //     }
                    // } else {
                    //     if (count($vehicle->media->image) > 1) {
                    //         foreach ($vehicle->media->images as $image) {
                    //             $rotate = $image->rotate;
                    //             $flip = $image->flip;
                    //             if ($rotate == 90 || $rotate == 270) {
                    //                 if ($flip == 0) { 
                    //                     echo "<div><img data-lazy='{$image->src}' class='img img-responsive pdtm-vdp-img-detail' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(0.6)'></div>";
                    //                 } else {
                    //                     echo "<div><img data-lazy='{$image->src}' class='img img-responsive pdtm-vdp-img-detail' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(0.6) scaleY(-1)'></div>";
                    //                 }
                    //             } else {
                    //                 if ($flip == 0) {
                    //                     echo "<div><img data-lazy='{$image->src}' class='img img-responsive pdtm-vdp-img-detail' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(1)'></div>";
                    //                 } else {
                    //                     echo "<div><img data-lazy='{$image->src}' class='img img-responsive pdtm-vdp-img-detail' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(1) scaleX(-1)'></div>";
                    //                 }
                    //             }
                    //         }
                    //     }
                    // }

                    if (count($vehicle->media->image) > 0) {
                        foreach ($vehicle->media->image as $image) {
                            $rotate = $image->rotate;
                            $flip = $image->flip;
                            if ($rotate == 90 || $rotate == 270) {
                                if ($flip == 0) { 
                                    echo "<div><img data-lazy='{$image->src}' class='img img-responsive pdtm-vdp-img-detail' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(0.6)'></div>";
                                } else {
                                    echo "<div><img data-lazy='{$image->src}' class='img img-responsive pdtm-vdp-img-detail' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(0.6) scaleY(-1)'></div>";
                                }
                            } else {
                                if ($flip == 0) {
                                    echo "<div><img data-lazy='{$image->src}' class='img img-responsive pdtm-vdp-img-detail' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(1)'></div>";
                                } else {
                                    echo "<div><img data-lazy='{$image->src}' class='img img-responsive pdtm-vdp-img-detail' alt='{$vehicle->label}' style='transform: rotate({$rotate}deg) scale(1) scaleX(-1)'></div>";
                                }
                            }
                        }
                    }
                     ?>
                </div>
            </div>
        </div>
        <div id="<?= $vehicle->vin; ?>" class="col-md-6">
            <div class="content-box">
                <div class="row">
                    <div class="col-md-6" id="info-column">
                        <?php
                        if ($vehicle->status == 'in_transit') {
                            ?>
                            <div class="row">
                                <div class="col-xs-12" id="in-transit-badge">
                                    <div class="info-badge">In Transit</div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="row">
                            <div class="col-xs-12" id="pricing-block">
                                <?php
                                if ($vehicle->status === 'call_for_price') {
                                    ?>
                                    <h4 class="call-for-price">
                                        <span class="pull-right">Call for Price</span>
                                    </h4>
                                    <?php
                                } else {
                                    $pricing = $vehicle->pricing->display;
                                    foreach ($pricing as $item) {
                                        $len = strlen($item->label);
                                        if ($len > 26) {
                                            $label1 = $item->label;
                                            $label2 = '';
                                            for ($i = $len - 26; $i < $len - 6; $i++) {
                                                if ($item->label[$i] === ' ') {
                                                    $label1 = substr($item->label, 0, $i);
                                                    $label2 = substr($item->label, $i);
                                                    break;
                                                }
                                            }
                                            ?>
                                            <h4 <?php
                                            foreach ($item->attributes as $key => $value) {
                                                if ($key === 'class') {
                                                    echo $key . '="' . $value . ' double" ';
                                                } else {
                                                    echo $key . '="' . $value . '" ';
                                                }
                                            echo 'data-vin="' . $vehicle->vin . '" ';
                                            }
                                            ?>>
                                                <span class="pull-left"><?= $label1; ?></span><br>
                                                <span class="pull-left"><?= $label2; ?></span>
                                                <span class="pull-right"><?= $item->value; ?></span>
                                            </h4>
                                            <?php
                                        } else {
                                            ?>
                                            <h4 <?php
                                            foreach ($item->attributes as $key => $value) {
                                                echo $key . '="' . $value . '" ';
                                            }
                                            echo 'data-vin="' . $vehicle->vin . '" ';
                                            ?>>
                                                <span class="pull-left"><?= $item->label; ?></span>
                                                <span class="pull-right"><?= $item->value; ?></span>
                                            </h4>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                        if (count($vehicle->incentives->conditional)) {
                            $make = str_replace(' ', '-', $vehicle->make);
                            $model = str_replace(' ', '-', $vehicle->model);
                            if (empty($vehicle->trim)) {
                                $trim = 'trim';
                            } else {
                                $trim = str_replace(' ', '-', $vehicle->trim);
                                $trim = str_replace('/', '-', $trim);
                            }
                            $general_url = site_url() . '/incentives/' . $vehicle->year . '/' . $make . '/' . $model . '/' . $trim . '/' . $vehicle->acode;
                            ?>
                            <div class="row">
                                <div class="col-xs-12" id="additional-incentives">
                                    <h3 class="additional-incentives">
                                        <a href="<?= $general_url ?>" target="_blank">Additional Incentives</a>
                                    </h3>
                                    <div class="conditionals">
                                        <?php
                                        $conditionals = $vehicle->incentives->conditional;
                                        $conditionalCount = 0;
                                        foreach ($conditionals as $conditional) {
                                            if ($conditionalCount >= 5) {
                                                break;
                                            }
                                            $incentiveId = $conditional->incentiveId;
                                            $specific_url = $general_url . '?id=' . $incentiveId;
                                            ?>
                                            <p class="conditional">
                                                <a class="offer-item"
                                                   data-id="<?= $incentiveId; ?>"
                                                   data-name="<?= $conditional->title; ?>"
                                                   href="<?= $specific_url; ?>"><?= $conditional->title; ?></a>
                                            </p>
                                            <?php
                                            $conditionalCount++;
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <?php if (isset($vehicle->monthlyPayment->monthlyPayment)): ?>
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 style="color: dodgerblue; font-weight: bold;">Lease For</h4>
                                <h3 style="color: dodgerblue; font-weight: bold;">$<span class="monthly-lease"><?= $vehicle->monthlyPayment->monthlyPayment ?></span>/Month</h3>
                                <p>
                                    <strong>For <span class="lease-months"><?= $vehicle->monthlyPayment->months ?></span> Months / <span class="lease-miles"><?= $vehicle->monthlyPayment->miles ?></span> Miles</strong>
                                    <br>
                                    $<span class="down-payment"><?= $vehicle->monthlyPayment->dueAtSigning ?></span> Due at Signing
                                </p>
                                <!-- <div class="tooltip" style="position: relative; display: inline-block; opacity: 1">Disclaimer <i class="fa fa-info-circle fa-lg"></i>
                                    <span class="tooltiptext"><strong>Disclaimer</strong>: <span class="tooltipdisclaimer"><?= $vehicle->monthlyPayment->disclaimer ?></span></span>
                                </div> -->
                                <small data-toggle="collapse" data-target=".disclaimer-accordion" style="cursor: pointer;">Disclaimer <i class="fa fa-info-circle fa-lg"></i></small>
                                <div id="demo" class="collapse disclaimer-accordion">
                                    <small><em><?= $vehicle->monthlyPayment->disclaimer ?></em></small>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-xs-12 pdtm-vdp-cta-left" id="cta-buttons-left">
                                <?php
                                if ($vehicle->status === 'sold' || $vehicle->status === 'sold_hidden') {
                                    ?>
                                    <h1 class="sold">SOLD</h1>
                                    <?php
                                } else {
                                    foreach ($vehicle->cta_left as $button) {

                                        echo '<' . $button->element . ' ';
                                        foreach ($button->attributes as $key => $value) {
                                            echo $key . '="' . $value . '" ';
                                        }
                                        echo '>';
                                        if (!empty($button->icon)) {
                                            ?>
                                            <i class="fa <?= $button->icon; ?>"></i>
                                            <?php
                                        }
                                        echo $button->label;
                                        echo '</' . $button->element . '>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                        if (isset($vehicle->incentives->bestOffer->cash)) {
                            $bo = $vehicle->incentives->bestOffer;
                            ?>
                            <div class="row">
                                <div class="col-xs-12" id="incentive-best-offer">
                                    <div class="incentive-details pointer offer-item"
                                         data-vin="<?= $bo->vin; ?>"
                                         data-id="<?= $bo->id; ?>"
                                         data-name="<?= $bo->name; ?>">
                                        <?= $bo->name; ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="row">
                            <div class="col-xs-12" id="stats-list">
                                <ul class="list-unstyled">
                                    <?php
                                    foreach ($vehicle->stats as $stat) {
                                        ?>
                                        <li <?php
                                        foreach ($stat->attributes as $key => $value) {
                                            echo $key . '="' . $value . '" ';
                                        }
                                        ?>>
                                            <strong><?= $stat->label; ?></strong>
                                            <span><?= $stat->value; ?></span>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12" id="save-compare">
                                <h4 class="save-vehicle pointer pdtm-vdp-save-vehicle" data-vin="<?= $vehicle->vin; ?>">
                                    <i class="fa fa-heart"></i>
                                    <span class="save-text"></span>
                                </h4>
                                <h4 class="compare-vehicle pointer hidden-xs pdtm-vdp-compare" data-vin="<?= $vehicle->vin; ?>">
                                    <i class="fa"></i>
                                    <span class="compare-text"></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" id="cta-button-column">
                        <?php if ($showOptionCodeStatus): ?>
                            <div id="optioncode-status">
                                <?php if ($vehicle->history->daysInStock): ?>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="optioncode-badge label-warning">Added <?= $vehicle->history->daysInStock ?> days ago</div>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <?php if ( !empty($vehicle->optionCodes) ): ?>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="optioncode-badge label-success" title="<?= $vehicle->optionCodes ?>">Option Codes Available</div>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <?php if ( empty($vehicle->optionCodes) ): ?>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="optioncode-badge label-danger">No Option Codes</div>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <?php if ($vehicle->incentives->itemized->custom): ?>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="optioncode-badge label-info">Custom Incentives Enabled</div>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>
                        <?php endif ?>
                        <div id="cta-buttons-right" class="pdtm-vdp-cta-right">
                            <?php
                            foreach ($vehicle->cta_right as $button) {
                                echo '<' . $button->element . ' ';
                                foreach ($button->attributes as $key => $value) {
                                    echo $key . '="' . $value . '" ';
                                }
                                echo '>';
                                if (!empty($button->icon)) {
                                    ?>
                                    <i class="fa <?= $button->icon; ?>"></i>
                                    <?php
                                }
                                echo $button->label;
                                echo '</' . $button->element . '>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="accessories" class="row hidden">
        <div class="col-xs-12">
            <div class="content-box">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>
                            <strong>Frequently bought together</strong>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12" id="accessories-images"></div>
                    <div class="col-xs-12" id="accessories-list"></div>
                    <div class="col-xs-12">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalQuickQuote" onclick="VDP.getQuoteWithAccessories()">Get a Vehicle Quote with Selected Accessories</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalAccessory" tabindex="-1" role="dialog"
             aria-labelledby="labelAccessory">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="labelAccessory">Accessory Detail</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-5 accessory-modal-left">
                            <div class="col-xs-12 accessory-gallery"></div>
                            <div class="col-xs-12 accessory-thumbs"></div>
                        </div>
                        <div class="col-sm-7 accessory-modal-right">
                            <div class="col-xs-12 accessory-detail"></div>
                            <div class="col-xs-12 accessory-form">
                                <form class="form-horizontal" id="contact-us-form">
                                    <h3>Get a vehicle quote with this accessory</h3>
                                    <fieldset>
                                        <input type="text" hidden name="form_title" value="Contact Us">
                                        <input type="text" hidden name="isFCA" value="0">
                                        <input type="text" hidden name="source_url" value="">
                                        <input type="text" hidden name="site_token" value="<?= PM_MOTORS_SITE_TOKEN ?>">

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <!-- <label class="col-md-4 control-label" for="first">First Name</label>
                                            <label class="col-md-4 control-label" for="last">Last Name</label>  
                                            <label class="col-md-4 control-label" for="email">Email</label>   -->
                                            <label class="col-md-6 control-label" for="first">Name</label>
                                            <label class="col-md-6 control-label" for="email">Email</label>  
                                            <!-- <div class="col-md-4">
                                                <input id="acc-first" name="firstField" type="text" placeholder="" class="form-control input-md" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <input id="acc-last" name="lastField" type="text" placeholder="" class="form-control input-md" required="">
                                            </div>
                                            <div class="col-md-4">
                                                <input id="acc-email" name="emailField" type="text" placeholder="" class="form-control input-md" required="">
                                            </div> -->
                                            <div class="col-md-6">
                                                <input id="acc-first" name="firstField" type="text" placeholder="" class="form-control input-md" required="">
                                            </div>
                                            <div class="col-md-6">
                                                <input id="acc-email" name="emailField" type="text" placeholder="" class="form-control input-md" required="">
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="email">Message</label>  
                                            <div class="col-md-12">
                                                <textarea id="acc-message" name="messageField" placeholder="" class="form-control input-md" required=""></textarea>
                                            </div>
                                        </div>

                                          <!-- Button -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="submit"></label>
                                            <div class="col-md-8">
                                                <button id="contact-us-form-button" name="submit" class="btn btn-primary">Get a vehicle quote with this accessory</button>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
                                <script>
                                    (function($){
                                        $('#contact-us-form-button').click(function(e){
                                            e.preventDefault();
                                            $('#modalAccessory').modal('toggle');
                                            // $.post( pm_api.path + "lead/saveplain", $( "#contact-us-form" ).serialize() );
                                        })
                                    })(jQuery)
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="pencil-banner" class="row hidden">
        <div class="col-md-12">
            <div class="content-box"></div>
        </div>
    </div>
    <?php
    $comments = 0;
    if (strlen($vehicle->dealerComments) > 0){
        $comments = $vehicle->dealerComments;
    } elseif (strlen($vehicle->advertisement) > 0){
        $comments = $vehicle->advertisement;
    }

    if ($comments) {
        ?>
        <div id="dealer-comments" class="row">
            <div class="col-md-12">
                <div class="content-box">
                    <h4><strong><?= $tokens['dealer_comments']; ?>:</strong></h4>
                    <p id="advertisement"><?= $comments; ?></p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>

    <div id="similar-vehicles" class="row hidden">
        <div class="col-xs-12">
            <div class="content-box">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>
                            <strong><?= $tokens['similar_vehicles']; ?></strong>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 pdtm-vdp-similar-vehicles" id="similar-vehicles-list"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="specs-installed-options" class="row">
        <?php
        if (!$moto) {
            ?>
            <div class="col-md-6" id="installed-options">
                <div class="content-box">
                    <h2><strong><?= $tokens['installed_options']; ?></strong></h2>
                    <div class="row">
                        <div class="col-md-6">
                            <ul id="options-col-0">
                                <?php
                                $options = $vehicle->installedOptions;
                                $optionsCount = count($options);
                                for ($i = 0; $i < $optionsCount; $i++) {
                                    if ($i % 2 == 0) {
                                        $even = $options[$i];
                                        switch (gettype($even)) {
                                            case 'object':
                                                ?>
                                                <li>
                                                    <b><?= $even->name; ?></b>
                                                    <ul>
                                                        <?php
                                                        foreach ($even->details as $detail) {
                                                            ?>
                                                            <li style="list-style: disc outside; margin-left: 25px;"><?= $detail; ?></li>
                                                            <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <?php
                                                break;
                                            default:
                                                ?>
                                                <li><?= $even; ?></li>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul id="options-col-1">
                                <?php
                                for ($i = 0; $i < $optionsCount; $i++) {
                                    if ($i % 2 != 0) {
                                        $odd = $options[$i];
                                        switch (gettype($odd)) {
                                            case 'object':
                                                ?>
                                                <li>
                                                    <b><?= $odd->name; ?></b>
                                                    <ul>
                                                        <?php
                                                        foreach ($odd->details as $detail) {
                                                            ?>
                                                            <li style="list-style: disc outside; margin-left: 25px;"><?= $detail; ?></li>
                                                            <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </li>
                                                <?php
                                                break;
                                            default:
                                                ?>
                                                <li><?= $odd; ?></li>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <div class="<?= $moto ? 'col-xs-12' : 'col-md-6'; ?>" id="specifications">
            <div class="content-box">
                <h2><strong><?= $tokens['standard_specifications']; ?></strong></h2>
                <div class="panel-group" id="spec-accordion">
                    <?php
                    foreach ($vehicle->equipment->standard as $option => $group) {
                        $id = strtolower(preg_replace('/\&*\s*\/*-*,*/', '', $option));
                        ?>
                        <div class="panel pdtm-vdp-specs">
                            <h4 class="panel-title"
                                data-toggle="collapse"
                                data-parent="#spec-accordion"
                                data-target="#<?= $id; ?>">
                                <?= $option; ?>
                                <i class="fa fa-caret-right"></i>
                            </h4>
                            <div class="panel-collapse collapse" id="<?= $id; ?>">
                                <ul>
                                    <?php
                                    foreach ($group as $item) {
                                        ?>
                                        <li><?= $item; ?></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div id="disclaimer" class="row">
        <div class="col-md-12">
            <div class="content-box">
                <h4><strong><?= $tokens['disclaimer']; ?>:</strong></h4>
                <p><?= getDisclaimer($vehicle, $disclaimers); ?></p>
            </div>
        </div>
    </div>
</div>
<?= do_shortcode('[incentives_modal parent="#vehicle-display" first=".incentive" second=".incentive-details" third="#pricing-block .conditional"]'); ?>
