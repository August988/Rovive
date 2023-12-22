<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

$item = array(
    "id" => 0,
    "name" => "",
);

$isCreator = false;
$owned = false;

$numSold = 0;
$price = 10;

$likeratio = 50;

$likes = 0;
$dislikes = 0;



$title = htmlspecialchars($item["name"]) . " - Catalog";

?>

<?php echo PageBuilder::buildHeader(); ?>
<link rel="stylesheet" href="/css/catalogitem.css" />

<div ng-modules="baseTemplateApp">
    <script src="https://web.archive.org/web/20180416173825js_/https://js.rbxcdn.com/cbd9a121217c4887264ffe32686ecd52.js.gzip"></script>
</div>
<div ng-modules="pageTemplateApp">
    <script src="https://web.archive.org/web/20180416173825js_/https://js.rbxcdn.com/b60343c532dee3e0d62538bebd5099ac.js.gzip"></script>
</div>

<script src="https://web.archive.org/web/20180416173825js_/https://js.rbxcdn.com/1b147071c9a8811ab580d1ff02eb6d1c.js.gzip"></script>

<link rel="stylesheet" href="https://web.archive.org/web/20180416173825cs_/https://static.rbxcdn.com/css/page___0df47b251aa20348fa003dd45aca757e_m.css/fetch">


<div class="content">
    <div id="Leaderboard-Abp" class="abp leaderboard-abp"><iframe name="Roblox_Item_Top_728x90" allowtransparency="true" frameborder="0" height="110" scrolling="no" data-src="" src="https://web.archive.org/web/20180416173825if_/https://www.roblox.com/user-sponsorship/1" width="728" data-js-adtype="iframead" data-ad-slot="Roblox_Item_Top_728x90" data-ruffle-polyfilled=""></iframe></div>
    <div id="item-container" class="page-content" data-item-id="<?= $asset["id"] ?>" data-item-name="Dominus Aureus" data-asset-type="Hat" data-userasset-id="" data-is-purchase-enabled="true" data-product-id="18501794" data-bc-requirement="0" data-expected-currency="1" data-expected-price="577777" data-seller-name="Rippinz" data-expected-seller-id="5669688" data-lowest-private-sale-userasset-id="1627795987" data-is-limited-unique="false" data-user-id="" data-asset-granted="False" data-forward-url="" data-avatar-wear-url="https://avatar.roblox.com/v1/avatar/assets/<?= $asset["id"] ?>/wear" data-avatar-remove-url="https://avatar.roblox.com/v1/avatar/assets/<?= $asset["id"] ?>/remove" data-current-time="4/16/2018 12:38:25 PM">
        <div class="system-feedback">
            <div class="alert-system-feedback">
                <div class="alert alert-success">Purchase Completed</div>
            </div>
            <div class="alert-system-feedback">
                <div class="alert alert-warning">Error occurred</div>
            </div>
        </div>
        <div class="section-content top-section">
            <div class="item-name-container">
                <h2>Dominus Aureus</h2>
                <div><span class="text-label">By <a href="https://web.archive.org/web/20180416173825/https://www.roblox.com/users/1/profile/" class="text-name">ROBLOX</a></span></div>
            </div>
            <div class="item-thumbnail-container">
                <div id="AssetThumbnail" class="thumbnail-holder thumbnail-Large three-dee-static" data-reset-enabled-every-page="" data-3d-thumbs-enabled="" three-dee-static="" data-3dtype="static" data-url="/web/20180416173825oe_/https://www.roblox.com/thumbnail/asset?assetId=<?= $asset["id"] ?>&amp;thumbnailFormatId=254&amp;width=420&amp;height=420"><span class="thumbnail-span" data-3d-url="/asset-thumbnail-3d/json?assetId=<?= $asset["id"] ?>"><img src="https://web.archive.org/web/20180416173825im_/https://t1.rbxcdn.com/ad99f373792eed65a62c5cdd03b4853b"></span>
                    <div class="equipped-marker"></div><span class="enable-three-dee three-dee-static-icon" style="visibility: visible;">3D</span>
                    <div class="asset-restriction-icon"><span class="rbx-tooltip" data-toggle="tooltip" data-original-title="Discontinued item, resellable."> <span class="icon-label icon-limited-label"></span> </span></div>
                </div>
                <script>
                    (function() {
                        if (Roblox && Roblox.Performance) {
                            Roblox.Performance.setPerformanceMark("itemReskin_thumbnail_loaded");
                        }
                    })();
                </script>
            </div>
            <div id="item-details" class="item-details">
                <div class="clearfix price-container">
                    <div class="price-container-text">
                        <div class="text-label field-label price-label">Best Price</div>
                        <div class="price-info">
                            <div class="icon-text-wrapper clearfix icon-robux-price-container"><span class="icon-robux"></span> <span class="text-robux-lg">577,777</span></div>
                        </div>
                    </div>
                    <div class="action-button"><button type="button" class="btn-fixed-width-lg btn-primary-lg PurchaseButton" data-button-type="main" data-button-action="buy" data-se="item-buyforrobux" data-expected-price="577777" data-bc-requirement="0" data-product-id="18501794" data-item-id="<?= $asset["id"] ?>" data-item-name="Dominus Aureus" data-asset-type="Hat" data-expected-currency="1" data-expected-seller-id="5669688" data-seller-name="Rippinz" data-userasset-id="1627795987"> Buy </button></div>
                    <div class="item-note has-price-label">See more <a id="resellersLink" class="text-link">Resellers</a></div>
                </div>
                <div class="clearfix item-mobile-description item-field-container">
                    <p class="description-content">Non teneas aurum totum quod splendet ut aurum. This item came out of Muneris Aureus Dev Ex on December 18th, 2013.</p>
                </div>
                <div class="clearfix item-type-field-container">
                    <div class="text-label field-label">Type</div><span class="field-content">Accessory | Hat</span>
                </div>
                <div class="clearfix item-field-container">
                    <div class="text-label field-label">Genres</div>
                    <div class="field-content"><a class="text-name item-genre" href="https://web.archive.org/web/20180416173825/https://www.roblox.com/all-catalog"> All</a></div>
                </div>
                <div class="clearfix toggle-target item-field-container">
                    <div class="text-label field-label">Description</div>
                    <p id="item-details-description" class="field-content description-content">Non teneas aurum totum quod splendet ut aurum. This item came out of Muneris Aureus Dev Ex on December 18th, 2013.<span class="toggle-content" data-container-id="item-details-description" data-show-label="Read More" data-hide-label="Show Less" style="display: none;">Read More</span></p>
                </div>
                <div class="show-more-end hide" data-container-id="item-details"></div><button type="button" class="btn-full-width btn-control-md toggle-content" data-container-id="item-details" data-show-label="Read More" data-hide-label="Show Less" style="display: none;">Read More</button>
            </div>
            <ul class="item-social-container clearfix include-favorite">
                <li class="favorite-button-container">
                    <div class="tooltip-container" data-toggle="tooltip" data-original-title="Add to Favorites"><a id="toggle-favorite" data-toggle-url="/favorite/toggle" data-assetid="<?= $asset["id"] ?>" data-isguest="True" data-signin-url="https://www.roblox.com/newlogin?returnUrl=%2Fcatalog%2F138932314%2FDominus-Aureus"> <span title="36,171" class="text-favorite favoriteCount 36,171" id="result">36K+</span>
                            <div id="favorite-icon" class="icon-favorite"></div>
                        </a></div>
                </li>
            </ul>
        </div>
        <div class="rbx-tabs-horizontal resale-pricechart-tabs" style="display:none;">
            <ul id="horizontal-tabs" class="nav nav-tabs" role="tablist">
                <li class="rbx-tab active"><a class="rbx-tab-heading" href="#price-chart"> <span class="text-lead">Price Chart</span> </a></li>
                <li class="rbx-tab"><a class="rbx-tab-heading" href="#resellers"> <span class="text-lead">Resellers</span> </a></li>
            </ul>
            <div class="tab-content rbx-tab-content">
                <div id="price-chart" class="tab-pane active price-chart-section">
                    <div class="container-header">
                        <h3>Price Chart</h3>
                    </div>
                    <div class="section-content price-volume-charts-container">
                        <div class="input-group-btn price-chart-range-dropdown"><button type="button" class="input-dropdown-btn" data-toggle="dropdown"> <span class="rbx-selection-label" data-bind="label">180 Days</span> <span class="icon-down-16x16"></span> </button>
                            <ul data-toggle="dropdown-menu" class="dropdown-menu" role="menu">
                                <li><a id="price-chart-30-days">30 Days</a></li>
                                <li><a id="price-chart-90-days">90 Days</a></li>
                                <li><a id="price-chart-180-days">180 Days</a></li>
                            </ul>
                        </div>
                        <div class="price-chart-legend">
                            <div class="line"></div>
                            <div class="text-pastname legend-text">Recent Average Price</div>
                            <div class="line volume"></div>
                            <div class="text-pastname legend-text">Volume</div>
                        </div>
                        <div class="price-chart-container" data-highcharts-chart="0">
                            <div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 916px; height: 130px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" style="font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="916" height="130">
                                    <desc>Created with Highcharts 4.2.4</desc>
                                    <defs>
                                        <clipPath id="highcharts-1">
                                            <rect x="0" y="0" width="856" height="85"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect x="0" y="0" width="916" height="130" fill="#FFFFFF" class=" highcharts-background"></rect>
                                    <g class="highcharts-grid"></g>
                                    <g class="highcharts-grid">
                                        <path fill="none" d="M 50 95.5 L 906 95.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path>
                                        <path fill="none" d="M 50 67.5 L 906 67.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path>
                                        <path fill="none" d="M 50 38.5 L 906 38.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path>
                                        <path fill="none" d="M 50 9.5 L 906 9.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path>
                                    </g>
                                    <g class="highcharts-axis">
                                        <path fill="none" d="M 50 95.5 L 906 95.5" stroke="#C0D0E0" stroke-width="1"></path>
                                    </g>
                                    <g class="highcharts-axis"></g>
                                    <g class="highcharts-series-group">
                                        <path fill="#02b757" fill-opacity="0.25" d="M 0 0"></path>
                                        <g class="highcharts-series highcharts-series-0" transform="translate(50,10) scale(1 1)" clip-path="url(#highcharts-1)">
                                            <path fill="none" d="M 115.39341498045268 65.16666666666667 L 267.57119275823044 39.66678 L 291.3489705360082 36.428733333333334 L 329.3934149804527 38.080000000000005 L 410.2378594248971 35.13333333333333 L 438.7711927582304 34.62684666666667 L 476.8156372026749 32.866780000000006 L 514.8600816471193 43.63333333333333 L 567.1711927582304 51 L 581.437859424897 37.400000000000006 L 614.726748313786 37.400000000000006 L 671.7934149804527 53.833333333333336 L 686.0600816471193 35.7 L 690.8156372026749 30.03333333333334 L 695.5711927582304 28.333446666666667 L 700.326748313786 28.333333333333336 L 776.4156372026749 25.5" stroke="#02b757" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                            <path fill="none" d="M 105.39341498045268 65.16666666666667 L 115.39341498045268 65.16666666666667 L 267.57119275823044 39.66678 L 291.3489705360082 36.428733333333334 L 329.3934149804527 38.080000000000005 L 410.2378594248971 35.13333333333333 L 438.7711927582304 34.62684666666667 L 476.8156372026749 32.866780000000006 L 514.8600816471193 43.63333333333333 L 567.1711927582304 51 L 581.437859424897 37.400000000000006 L 614.726748313786 37.400000000000006 L 671.7934149804527 53.833333333333336 L 686.0600816471193 35.7 L 690.8156372026749 30.03333333333334 L 695.5711927582304 28.333446666666667 L 700.326748313786 28.333333333333336 L 776.4156372026749 25.5 L 786.4156372026749 25.5" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" class=" highcharts-tracker" style=""></path>
                                        </g>
                                        <g class="highcharts-markers highcharts-series-0 highcharts-tracker" transform="translate(50,10) scale(1 1)" clip-path="url(#highcharts-2)" style="">
                                            <path fill="#02b757" d="M 700 22.333333333333336 C 707.992 22.333333333333336 707.992 34.333333333333336 700 34.333333333333336 C 692.008 34.333333333333336 692.008 22.333333333333336 700 22.333333333333336 Z" stroke="#FFFFFF" stroke-width="1" visibility="hidden"></path>
                                        </g>
                                    </g>
                                    <g class="highcharts-axis-labels highcharts-xaxis-labels"><text x="113.08230386934156" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:161px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="114" opacity="1">11/01</text><text x="255.74897053600822" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:161px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="114" opacity="1">12/01</text><text x="403.17119275823046" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:161px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="114" opacity="1">01/01</text><text x="550.5934149804527" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:161px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="114" opacity="1">02/01</text><text x="683.7489705360082" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:161px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="114" opacity="1">03/01</text><text x="831.1711927582304" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:161px;text-overflow:clip;" text-anchor="middle" transform="translate(0,0)" y="114" opacity="1">04/01</text></g>
                                    <g class="highcharts-axis-labels highcharts-yaxis-labels"><text x="35" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:30px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="100" opacity="1">0</text><text x="35" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:30px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="72" opacity="1">250K</text><text x="35" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:30px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="43" opacity="1">500K</text><text x="35" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:30px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="15" opacity="1">750K</text></g>
                                    <g class="highcharts-tooltip" style="cursor:default;padding:0;pointer-events:none;white-space:nowrap;" transform="translate(720,-9999)" opacity="0" visibility="visible">
                                        <path fill="none" d="M 3.5 0.5 L 23.5 0.5 29.5 -5.5 35.5 0.5 57 0.5 C 60.5 0.5 60.5 0.5 60.5 3.5 L 60.5 27.5 C 60.5 30.5 60.5 30.5 57.5 30.5 L 3.5 30.5 C 0.5 30.5 0.5 30.5 0.5 27.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path>
                                        <path fill="none" d="M 3.5 0.5 L 23.5 0.5 29.5 -5.5 35.5 0.5 57 0.5 C 60.5 0.5 60.5 0.5 60.5 3.5 L 60.5 27.5 C 60.5 30.5 60.5 30.5 57.5 30.5 L 3.5 30.5 C 0.5 30.5 0.5 30.5 0.5 27.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path>
                                        <path fill="none" d="M 3.5 0.5 L 23.5 0.5 29.5 -5.5 35.5 0.5 57 0.5 C 60.5 0.5 60.5 0.5 60.5 3.5 L 60.5 27.5 C 60.5 30.5 60.5 30.5 57.5 30.5 L 3.5 30.5 C 0.5 30.5 0.5 30.5 0.5 27.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path>
                                        <path fill="#757575" d="M 3.5 0.5 L 23.5 0.5 29.5 -5.5 35.5 0.5 57 0.5 C 60.5 0.5 60.5 0.5 60.5 3.5 L 60.5 27.5 C 60.5 30.5 60.5 30.5 57.5 30.5 L 3.5 30.5 C 0.5 30.5 0.5 30.5 0.5 27.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#757575" stroke-width="1"></path><text x="8" style="font-size:12px;color:#333333;fill:#333333;" y="20">
                                            <tspan style="fill:#fff">500,000</tspan>
                                        </text>
                                    </g>
                                </svg></div>
                        </div>
                        <div class="price-chart-volume-container" data-highcharts-chart="1">
                            <div class="highcharts-container" id="highcharts-4" style="position: relative; overflow: hidden; width: 916px; height: 50px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" style="font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="916" height="50">
                                    <desc>Created with Highcharts 4.2.4</desc>
                                    <defs>
                                        <clipPath id="highcharts-5">
                                            <rect x="0" y="0" width="856" height="25"></rect>
                                        </clipPath>
                                    </defs>
                                    <rect x="0" y="0" width="916" height="50" fill="#FFFFFF" class=" highcharts-background"></rect>
                                    <g class="highcharts-grid"></g>
                                    <g class="highcharts-grid"></g>
                                    <g class="highcharts-axis">
                                        <path fill="none" d="M 50 35.5 L 906 35.5" stroke="#C0D0E0" stroke-width="1"></path>
                                    </g>
                                    <g class="highcharts-axis"></g>
                                    <g class="highcharts-series-group">
                                        <g class="highcharts-series highcharts-series-0 highcharts-tracker" transform="translate(50,10) scale(1 1)" style="" clip-path="url(#highcharts-5)">
                                            <rect x="116.5" y="13.5" width="3" height="12" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="267.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="291.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="328.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="409.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="437.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="475.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="513.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="565.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="574.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="612.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="669.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="683.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="688.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="693.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="697.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                            <rect x="773.5" y="19.5" width="3" height="6" stroke="#FFFFFF" stroke-width="1" fill="#b8b8b8" rx="0" ry="0"></rect>
                                        </g>
                                        <g class="highcharts-markers highcharts-series-0" transform="translate(50,10) scale(1 1)" clip-path="none"></g>
                                    </g>
                                    <g class="highcharts-axis-labels highcharts-xaxis-labels"></g>
                                    <g class="highcharts-axis-labels highcharts-yaxis-labels"></g>
                                    <g class="highcharts-tooltip" style="cursor:default;padding:0;pointer-events:none;white-space:nowrap;" transform="translate(0,-9999)">
                                        <path fill="none" d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path>
                                        <path fill="none" d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path>
                                        <path fill="none" d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path>
                                        <path fill="#757575" d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"></path><text x="8" style="font-size:12px;color:#333333;fill:#333333;" y="20"></text>
                                    </g>
                                </svg></div>
                        </div>
                        <div class="clearfix">
                            <div class="price-chart-info-container clearfix">
                                <div class="text-label">Quantity Sold</div>
                                <div id="item-quantity-sold" class="text-lead info-content">N/A</div>
                            </div>
                            <div class="price-chart-info-container clearfix">
                                <div class="text-label">Original Price</div>
                                <div id="item-original-price" class="info-content"><span id="original-price-robux-icon" class="icon-robux-20x20" style="display: none;"></span> <span class="text-lead">N/A</span></div>
                            </div>
                            <div class="price-chart-info-container clearfix">
                                <div class="text-label">Average Price</div>
                                <div class="info-content"><span class="icon-robux-20x20"></span> <span id="item-average-price" class="text-robux">421,850</span></div>
                            </div>
                        </div>
                    </div>
                    <div id="no-price-chart-data" class="section-content-off hide">No historical data to chart.</div>
                    <div class="section-content price-chart-spinner hide">
                        <div class="loading-animated">
                            <div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="resellers" class="tab-pane resellers-container">
                    <div class="container-header">
                        <h3>Resellers</h3>
                    </div>
                    <div class="section-content">
                        <div class="resellers">
                            <ul class="vlist">
                                <li class="reseller-template list-item"><a href="#" class="avatar avatar-headshot-md list-header"> <img class="avatar-card-image"> </a>
                                    <div class="resale-info"><a class="text-name username" href="#"></a> <span class="separator">-</span> <span class="serial-number"></span>
                                        <div class="reseller-price-container"><span class="icon-robux-20x20"></span> <span class="icon-robux-16x16"></span> <span class="text-robux"></span></div>
                                    </div>
                                </li>
                                <li class="list-item"><a href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/5669688/profile" class="avatar avatar-headshot-md list-header"> <img class="avatar-card-image" src="https://web.archive.org/web/20180416173825im_/https://t0.rbxcdn.com/3875bea62f17932326aaec100c16537a" alt="Rippinz"> </a>
                                    <div class="resale-info"><a class="text-name username" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/5669688/profile">Rippinz</a> <span class="separator">-</span> <span class="serial-number">Serial N/A</span>
                                        <div class="reseller-price-container"><span class="icon-robux-20x20"></span> <span class="icon-robux-16x16"></span> <span class="text-robux">577,777</span></div>
                                    </div><button class="PurchaseButton btn-fixed-width btn-buy-md" data-button-type="reseller" data-seller-name="Rippinz" data-userasset-id="1627795987" data-expected-price="577777" data-expected-seller-id="5669688" data-bc-requirement="0" data-product-id="18501794" data-item-id="<?= $asset["id"] ?>" data-item-name="Dominus Aureus" data-asset-type="Hat" data-expected-currency="1"> Buy </button>
                                </li>
                                <li class="list-item"><a href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/2502693/profile" class="avatar avatar-headshot-md list-header"> <img class="avatar-card-image" src="https://web.archive.org/web/20180416173825im_/https://t3.rbxcdn.com/c5af92b381daa543d0f75f804d190237" alt="RobloxianVentures"> </a>
                                    <div class="resale-info"><a class="text-name username" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/2502693/profile">RobloxianVentures</a> <span class="separator">-</span> <span class="serial-number">Serial N/A</span>
                                        <div class="reseller-price-container"><span class="icon-robux-20x20"></span> <span class="icon-robux-16x16"></span> <span class="text-robux">600,000</span></div>
                                    </div><button class="PurchaseButton btn-fixed-width btn-buy-md" data-button-type="reseller" data-seller-name="RobloxianVentures" data-userasset-id="1627796072" data-expected-price="600000" data-expected-seller-id="2502693" data-bc-requirement="0" data-product-id="18501794" data-item-id="<?= $asset["id"] ?>" data-item-name="Dominus Aureus" data-asset-type="Hat" data-expected-currency="1"> Buy </button>
                                </li>
                                <li class="list-item"><a href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/420184646/profile" class="avatar avatar-headshot-md list-header"> <img class="avatar-card-image" src="https://web.archive.org/web/20180416173825im_/https://t0.rbxcdn.com/d74e5c24c31fab76a8444eb943e610b4" alt="IceWizy"> </a>
                                    <div class="resale-info"><a class="text-name username" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/420184646/profile">IceWizy</a> <span class="separator">-</span> <span class="serial-number">Serial N/A</span>
                                        <div class="reseller-price-container"><span class="icon-robux-20x20"></span> <span class="icon-robux-16x16"></span> <span class="text-robux">660,000</span></div>
                                    </div><button class="PurchaseButton btn-fixed-width btn-buy-md" data-button-type="reseller" data-seller-name="IceWizy" data-userasset-id="1627795983" data-expected-price="660000" data-expected-seller-id="420184646" data-bc-requirement="0" data-product-id="18501794" data-item-id="<?= $asset["id"] ?>" data-item-name="Dominus Aureus" data-asset-type="Hat" data-expected-currency="1"> Buy </button>
                                </li>
                                <li class="list-item"><a href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/134796223/profile" class="avatar avatar-headshot-md list-header"> <img class="avatar-card-image" src="https://web.archive.org/web/20180416173825im_/https://t0.rbxcdn.com/bf0cf6d9612dea63dde9dc028470bf29" alt="Ieango"> </a>
                                    <div class="resale-info"><a class="text-name username" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/134796223/profile">Ieango</a> <span class="separator">-</span> <span class="serial-number">Serial N/A</span>
                                        <div class="reseller-price-container"><span class="icon-robux-20x20"></span> <span class="icon-robux-16x16"></span> <span class="text-robux">665,999</span></div>
                                    </div><button class="PurchaseButton btn-fixed-width btn-buy-md" data-button-type="reseller" data-seller-name="Ieango" data-userasset-id="1627796100" data-expected-price="665999" data-expected-seller-id="134796223" data-bc-requirement="0" data-product-id="18501794" data-item-id="<?= $asset["id"] ?>" data-item-name="Dominus Aureus" data-asset-type="Hat" data-expected-currency="1"> Buy </button>
                                </li>
                                <li class="list-item"><a href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/111198760/profile" class="avatar avatar-headshot-md list-header"> <img class="avatar-card-image" src="https://web.archive.org/web/20180416173825im_/https://t7.rbxcdn.com/e7b0f06afdda291236aab4127c4294c2" alt="Reset198760"> </a>
                                    <div class="resale-info"><a class="text-name username" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/111198760/profile">Reset198760</a> <span class="separator">-</span> <span class="serial-number">Serial N/A</span>
                                        <div class="reseller-price-container"><span class="icon-robux-20x20"></span> <span class="icon-robux-16x16"></span> <span class="text-robux">666,666</span></div>
                                    </div><button class="PurchaseButton btn-fixed-width btn-buy-md" data-button-type="reseller" data-seller-name="Reset198760" data-userasset-id="1627796071" data-expected-price="666666" data-expected-seller-id="111198760" data-bc-requirement="0" data-product-id="18501794" data-item-id="<?= $asset["id"] ?>" data-item-name="Dominus Aureus" data-asset-type="Hat" data-expected-currency="1"> Buy </button>
                                </li>
                                <li class="list-item"><a href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/11169049/profile" class="avatar avatar-headshot-md list-header"> <img class="avatar-card-image" src="https://web.archive.org/web/20180416173825im_/https://t1.rbxcdn.com/0f9d099c6418519997e35fa5e0bc4dc9" alt="Confrontation"> </a>
                                    <div class="resale-info"><a class="text-name username" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/11169049/profile">Confrontation</a> <span class="separator">-</span> <span class="serial-number">Serial N/A</span>
                                        <div class="reseller-price-container"><span class="icon-robux-20x20"></span> <span class="icon-robux-16x16"></span> <span class="text-robux">750,000</span></div>
                                    </div><button class="PurchaseButton btn-fixed-width btn-buy-md" data-button-type="reseller" data-seller-name="Confrontation" data-userasset-id="7602117891" data-expected-price="750000" data-expected-seller-id="11169049" data-bc-requirement="0" data-product-id="18501794" data-item-id="<?= $asset["id"] ?>" data-item-name="Dominus Aureus" data-asset-type="Hat" data-expected-currency="1"> Buy </button>
                                </li>
                                <li class="list-item"><a href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/41141835/profile" class="avatar avatar-headshot-md list-header"> <img class="avatar-card-image" src="https://web.archive.org/web/20180416173825im_/https://t2.rbxcdn.com/627d411f3558d8bfa0cc8d1106b5fdad" alt="Crogel"> </a>
                                    <div class="resale-info"><a class="text-name username" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/41141835/profile">Crogel</a> <span class="separator">-</span> <span class="serial-number">Serial N/A</span>
                                        <div class="reseller-price-container"><span class="icon-robux-20x20"></span> <span class="icon-robux-16x16"></span> <span class="text-robux">777,777</span></div>
                                    </div><button class="PurchaseButton btn-fixed-width btn-buy-md" data-button-type="reseller" data-seller-name="Crogel" data-userasset-id="1627795844" data-expected-price="777777" data-expected-seller-id="41141835" data-bc-requirement="0" data-product-id="18501794" data-item-id="<?= $asset["id"] ?>" data-item-name="Dominus Aureus" data-asset-type="Hat" data-expected-currency="1"> Buy </button>
                                </li>
                                <li class="list-item"><a href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/33374257/profile" class="avatar avatar-headshot-md list-header"> <img class="avatar-card-image" src="https://web.archive.org/web/20180416173825im_/https://t1.rbxcdn.com/f6a0c7bb06e775901ccf04c35c4e5d0a" alt="Chamintly"> </a>
                                    <div class="resale-info"><a class="text-name username" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/33374257/profile">Chamintly</a> <span class="separator">-</span> <span class="serial-number">Serial N/A</span>
                                        <div class="reseller-price-container"><span class="icon-robux-20x20"></span> <span class="icon-robux-16x16"></span> <span class="text-robux">799,998</span></div>
                                    </div><button class="PurchaseButton btn-fixed-width btn-buy-md" data-button-type="reseller" data-seller-name="Chamintly" data-userasset-id="2699077300" data-expected-price="799998" data-expected-seller-id="33374257" data-bc-requirement="0" data-product-id="18501794" data-item-id="<?= $asset["id"] ?>" data-item-name="Dominus Aureus" data-asset-type="Hat" data-expected-currency="1"> Buy </button>
                                </li>
                                <li class="list-item"><a href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/33374257/profile" class="avatar avatar-headshot-md list-header"> <img class="avatar-card-image" src="https://web.archive.org/web/20180416173825im_/https://t1.rbxcdn.com/f6a0c7bb06e775901ccf04c35c4e5d0a" alt="Chamintly"> </a>
                                    <div class="resale-info"><a class="text-name username" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/33374257/profile">Chamintly</a> <span class="separator">-</span> <span class="serial-number">Serial N/A</span>
                                        <div class="reseller-price-container"><span class="icon-robux-20x20"></span> <span class="icon-robux-16x16"></span> <span class="text-robux">799,999</span></div>
                                    </div><button class="PurchaseButton btn-fixed-width btn-buy-md" data-button-type="reseller" data-seller-name="Chamintly" data-userasset-id="1627796039" data-expected-price="799999" data-expected-seller-id="33374257" data-bc-requirement="0" data-product-id="18501794" data-item-id="<?= $asset["id"] ?>" data-item-name="Dominus Aureus" data-asset-type="Hat" data-expected-currency="1"> Buy </button>
                                </li>
                                <li class="list-item"><a href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/10143021/profile" class="avatar avatar-headshot-md list-header"> <img class="avatar-card-image" src="https://web.archive.org/web/20180416173825im_/https://t3.rbxcdn.com/bd012b9106dab79972869387365a8c45" alt="RAPTOR321"> </a>
                                    <div class="resale-info"><a class="text-name username" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/10143021/profile">RAPTOR321</a> <span class="separator">-</span> <span class="serial-number">Serial N/A</span>
                                        <div class="reseller-price-container"><span class="icon-robux-20x20"></span> <span class="icon-robux-16x16"></span> <span class="text-robux">800,000</span></div>
                                    </div><button class="PurchaseButton btn-fixed-width btn-buy-md" data-button-type="reseller" data-seller-name="RAPTOR321" data-userasset-id="1627795931" data-expected-price="800000" data-expected-seller-id="10143021" data-bc-requirement="0" data-product-id="18501794" data-item-id="<?= $asset["id"] ?>" data-item-name="Dominus Aureus" data-asset-type="Hat" data-expected-currency="1"> Buy </button>
                                </li>
                            </ul>
                            <div class="loading-animated" style="display: none;">
                                <div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div><button class="btn-control-sm see-more-resellers" style="display: inline-block;">See More</button>
                    <div class="section-content-off" style="display: none;">Sorry, no one is reselling this item at the moment.</div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                Roblox.Resellers.init();
            });
        </script>
        <div ng-modules="robloxApp, recommendations" class="ng-scope">
            <script>
                var Roblox = Roblox || {};
                Roblox.InventoryData = {
                    "inventoryDomain": "https://web.archive.org/web/20180416173825/https://inventory.roblox.com",
                    "useInventorySite": true
                };
            </script>
            <div class="current-items ng-scope" ng-controller="recommendationsController" ng-init="initializeWithModelValues(<?= $asset["id"] ?>, 8, 7)" ng-show="recommendationsData.items.length > 0">
                <div class="container-list recommendations-container">
                    <div class="container-header recommendations-header"><!-- ngIf: !appMeta.isI18nEnabled --><!-- ngIf: appMeta.isI18nEnabled -->
                        <h3 ng-if="appMeta.isI18nEnabled" class="ng-scope"><!-- ngIf: defaultAssetTypeName == recommendationsData.assetTypeName --><span ng-if="defaultAssetTypeName == recommendationsData.assetTypeName" ng-bind="'Heading.RecommendedItems' | translate | capitalize" class="ng-binding ng-scope">Recommended Items</span><!-- end ngIf: defaultAssetTypeName == recommendationsData.assetTypeName --> <!-- ngIf: defaultAssetTypeName != recommendationsData.assetTypeName --></h3><!-- end ngIf: appMeta.isI18nEnabled -->
                    </div>
                    <div class="recommended-items-slider">
                        <ul class="hlist item-cards recommended-items" ng-class="{'item-cards-embed' : recommendationsLayout.numberOfItemsToDisplay < 7}"><!-- ngRepeat: item in recommendationsData.items -->
                            <li ng-repeat="item in recommendationsData.items" class="list-item item-card recommended-item ng-scope">
                                <div class="item-card-container recommended-item-link"><a ng-href="https://www.roblox.com/catalog/96103379/Dominus-Vespertilio" class="item-card-link" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/catalog/96103379/Dominus-Vespertilio">
                                        <div class="item-card-thumb-container recommended-thumb"><img ng-src="https://t1.rbxcdn.com/eed37aada34095fa746d739dbe3f520b" thumbnail="item.Thumbnail" image-retry="" class="item-card-thumb ng-isolate-scope" src="https://web.archive.org/web/20180416173825im_/https://t1.rbxcdn.com/eed37aada34095fa746d739dbe3f520b"> <span ng-show="item.AssetRestrictionIcon" ng-class="'icon-' + item.AssetRestrictionIcon.CssTag + '-label'" class="ng-hide icon--label"> </span></div>
                                        <div class="text-overflow item-card-name recommended-name ng-binding" title="Dominus Vespertilio">Dominus Vespertilio</div>
                                    </a><!-- ngIf: item.Item.AudioUrl --><!-- ngIf: !appMeta.isI18nEnabled --><!-- ngIf: appMeta.isI18nEnabled -->
                                    <div ng-if="appMeta.isI18nEnabled" class="text-overflow item-card-creator recommended-creator ng-scope"><span ng-bind-html="'Label.ByCreator'| translate:{styleBegin: getByHtml(), styleEnd: '</span>', creator: getCreatorHtml(item.Creator.CreatorProfileLink, item.Creator.Name)}" class="ng-binding"><span class="xsmall text-label recommended-creator-by">By</span><a class="xsmall text-overflow text-link" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/1/profile/">ROBLOX</a></span></div><!-- end ngIf: appMeta.isI18nEnabled -->
                                    <div class="text-overflow item-card-price"><span class="icon-robux-16x16" ng-show="item.HasPrice"></span> <span class="text-robux ng-binding" ng-show="item.HasPrice">313K+</span> <span class="text-label ng-hide" ng-hide="item.HasPrice"> <!-- ngIf: item.Product.NoPriceText.length > 0 --> </span></div>
                                </div>
                            </li><!-- end ngRepeat: item in recommendationsData.items -->
                            <li ng-repeat="item in recommendationsData.items" class="list-item item-card recommended-item ng-scope">
                                <div class="item-card-container recommended-item-link"><a ng-href="https://www.roblox.com/catalog/162067148/Dominus-Astra" class="item-card-link" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/catalog/162067148/Dominus-Astra">
                                        <div class="item-card-thumb-container recommended-thumb"><img ng-src="https://t6.rbxcdn.com/2824bc5e07a5aa3fbc5b6a40053a1b65" thumbnail="item.Thumbnail" image-retry="" class="item-card-thumb ng-isolate-scope" src="https://web.archive.org/web/20180416173825im_/https://t6.rbxcdn.com/2824bc5e07a5aa3fbc5b6a40053a1b65"> <span ng-show="item.AssetRestrictionIcon" ng-class="'icon-' + item.AssetRestrictionIcon.CssTag + '-label'" class="ng-hide icon--label"> </span></div>
                                        <div class="text-overflow item-card-name recommended-name ng-binding" title="Dominus Astra">Dominus Astra</div>
                                    </a><!-- ngIf: item.Item.AudioUrl --><!-- ngIf: !appMeta.isI18nEnabled --><!-- ngIf: appMeta.isI18nEnabled -->
                                    <div ng-if="appMeta.isI18nEnabled" class="text-overflow item-card-creator recommended-creator ng-scope"><span ng-bind-html="'Label.ByCreator'| translate:{styleBegin: getByHtml(), styleEnd: '</span>', creator: getCreatorHtml(item.Creator.CreatorProfileLink, item.Creator.Name)}" class="ng-binding"><span class="xsmall text-label recommended-creator-by">By</span><a class="xsmall text-overflow text-link" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/1/profile/">ROBLOX</a></span></div><!-- end ngIf: appMeta.isI18nEnabled -->
                                    <div class="text-overflow item-card-price"><span class="icon-robux-16x16" ng-show="item.HasPrice"></span> <span class="text-robux ng-binding" ng-show="item.HasPrice">3,700,000</span> <span class="text-label ng-hide" ng-hide="item.HasPrice"> <!-- ngIf: item.Product.NoPriceText.length > 0 --> </span></div>
                                </div>
                            </li><!-- end ngRepeat: item in recommendationsData.items -->
                            <li ng-repeat="item in recommendationsData.items" class="list-item item-card recommended-item ng-scope">
                                <div class="item-card-container recommended-item-link"><a ng-href="https://www.roblox.com/catalog/31101391/Dominus-Infernus" class="item-card-link" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/catalog/31101391/Dominus-Infernus">
                                        <div class="item-card-thumb-container recommended-thumb"><img ng-src="https://t1.rbxcdn.com/61a7ba91bea2fe1855d1115b59a79276" thumbnail="item.Thumbnail" image-retry="" class="item-card-thumb ng-isolate-scope" src="https://web.archive.org/web/20180416173825im_/https://t1.rbxcdn.com/61a7ba91bea2fe1855d1115b59a79276"> <span ng-show="item.AssetRestrictionIcon" ng-class="'icon-' + item.AssetRestrictionIcon.CssTag + '-label'" class="ng-hide icon--label"> </span></div>
                                        <div class="text-overflow item-card-name recommended-name ng-binding" title="Dominus Infernus">Dominus Infernus</div>
                                    </a><!-- ngIf: item.Item.AudioUrl --><!-- ngIf: !appMeta.isI18nEnabled --><!-- ngIf: appMeta.isI18nEnabled -->
                                    <div ng-if="appMeta.isI18nEnabled" class="text-overflow item-card-creator recommended-creator ng-scope"><span ng-bind-html="'Label.ByCreator'| translate:{styleBegin: getByHtml(), styleEnd: '</span>', creator: getCreatorHtml(item.Creator.CreatorProfileLink, item.Creator.Name)}" class="ng-binding"><span class="xsmall text-label recommended-creator-by">By</span><a class="xsmall text-overflow text-link" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/1/profile/">ROBLOX</a></span></div><!-- end ngIf: appMeta.isI18nEnabled -->
                                    <div class="text-overflow item-card-price"><span class="icon-robux-16x16" ng-show="item.HasPrice"></span> <span class="text-robux ng-binding" ng-show="item.HasPrice">3,000,000</span> <span class="text-label ng-hide" ng-hide="item.HasPrice"> <!-- ngIf: item.Product.NoPriceText.length > 0 --> </span></div>
                                </div>
                            </li><!-- end ngRepeat: item in recommendationsData.items -->
                            <li ng-repeat="item in recommendationsData.items" class="list-item item-card recommended-item ng-scope">
                                <div class="item-card-container recommended-item-link"><a ng-href="https://www.roblox.com/catalog/250395631/Dominus-Rex" class="item-card-link" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/catalog/250395631/Dominus-Rex">
                                        <div class="item-card-thumb-container recommended-thumb"><img ng-src="https://t0.rbxcdn.com/58f9aaa87a25bacd2a4e520a05eb81b4" thumbnail="item.Thumbnail" image-retry="" class="item-card-thumb ng-isolate-scope" src="https://web.archive.org/web/20180416173825im_/https://t0.rbxcdn.com/58f9aaa87a25bacd2a4e520a05eb81b4"> <span ng-show="item.AssetRestrictionIcon" ng-class="'icon-' + item.AssetRestrictionIcon.CssTag + '-label'" class="ng-hide icon--label"> </span></div>
                                        <div class="text-overflow item-card-name recommended-name ng-binding" title="Dominus Rex">Dominus Rex</div>
                                    </a><!-- ngIf: item.Item.AudioUrl --><!-- ngIf: !appMeta.isI18nEnabled --><!-- ngIf: appMeta.isI18nEnabled -->
                                    <div ng-if="appMeta.isI18nEnabled" class="text-overflow item-card-creator recommended-creator ng-scope"><span ng-bind-html="'Label.ByCreator'| translate:{styleBegin: getByHtml(), styleEnd: '</span>', creator: getCreatorHtml(item.Creator.CreatorProfileLink, item.Creator.Name)}" class="ng-binding"><span class="xsmall text-label recommended-creator-by">By</span><a class="xsmall text-overflow text-link" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/1/profile/">ROBLOX</a></span></div><!-- end ngIf: appMeta.isI18nEnabled -->
                                    <div class="text-overflow item-card-price"><span class="icon-robux-16x16" ng-show="item.HasPrice"></span> <span class="text-robux ng-binding" ng-show="item.HasPrice">544K+</span> <span class="text-label ng-hide" ng-hide="item.HasPrice"> <!-- ngIf: item.Product.NoPriceText.length > 0 --> </span></div>
                                </div>
                            </li><!-- end ngRepeat: item in recommendationsData.items -->
                            <li ng-repeat="item in recommendationsData.items" class="list-item item-card recommended-item ng-scope">
                                <div class="item-card-container recommended-item-link"><a ng-href="https://www.roblox.com/catalog/48545806/Dominus-Frigidus" class="item-card-link" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/catalog/48545806/Dominus-Frigidus">
                                        <div class="item-card-thumb-container recommended-thumb"><img ng-src="https://t6.rbxcdn.com/22dfa423f9edce818c32f670c6d3062e" thumbnail="item.Thumbnail" image-retry="" class="item-card-thumb ng-isolate-scope" src="https://web.archive.org/web/20180416173825im_/https://t6.rbxcdn.com/22dfa423f9edce818c32f670c6d3062e"> <span ng-show="item.AssetRestrictionIcon" ng-class="'icon-' + item.AssetRestrictionIcon.CssTag + '-label'" class="ng-hide icon--label"> </span></div>
                                        <div class="text-overflow item-card-name recommended-name ng-binding" title="Dominus Frigidus">Dominus Frigidus</div>
                                    </a><!-- ngIf: item.Item.AudioUrl --><!-- ngIf: !appMeta.isI18nEnabled --><!-- ngIf: appMeta.isI18nEnabled -->
                                    <div ng-if="appMeta.isI18nEnabled" class="text-overflow item-card-creator recommended-creator ng-scope"><span ng-bind-html="'Label.ByCreator'| translate:{styleBegin: getByHtml(), styleEnd: '</span>', creator: getCreatorHtml(item.Creator.CreatorProfileLink, item.Creator.Name)}" class="ng-binding"><span class="xsmall text-label recommended-creator-by">By</span><a class="xsmall text-overflow text-link" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/1/profile/">ROBLOX</a></span></div><!-- end ngIf: appMeta.isI18nEnabled -->
                                    <div class="text-overflow item-card-price"><span class="icon-robux-16x16" ng-show="item.HasPrice"></span> <span class="text-robux ng-binding" ng-show="item.HasPrice">8,000,000</span> <span class="text-label ng-hide" ng-hide="item.HasPrice"> <!-- ngIf: item.Product.NoPriceText.length > 0 --> </span></div>
                                </div>
                            </li><!-- end ngRepeat: item in recommendationsData.items -->
                            <li ng-repeat="item in recommendationsData.items" class="list-item item-card recommended-item ng-scope">
                                <div class="item-card-container recommended-item-link"><a ng-href="https://www.roblox.com/catalog/21070012/Dominus-Empyreus" class="item-card-link" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/catalog/21070012/Dominus-Empyreus">
                                        <div class="item-card-thumb-container recommended-thumb"><img ng-src="https://t2.rbxcdn.com/fe47f0136e2aaf8879f43b2fdc7aa438" thumbnail="item.Thumbnail" image-retry="" class="item-card-thumb ng-isolate-scope" src="https://web.archive.org/web/20180416173825im_/https://t2.rbxcdn.com/fe47f0136e2aaf8879f43b2fdc7aa438"> <span ng-show="item.AssetRestrictionIcon" ng-class="'icon-' + item.AssetRestrictionIcon.CssTag + '-label'" class="ng-hide icon--label"> </span></div>
                                        <div class="text-overflow item-card-name recommended-name ng-binding" title="Dominus Empyreus">Dominus Empyreus</div>
                                    </a><!-- ngIf: item.Item.AudioUrl --><!-- ngIf: !appMeta.isI18nEnabled --><!-- ngIf: appMeta.isI18nEnabled -->
                                    <div ng-if="appMeta.isI18nEnabled" class="text-overflow item-card-creator recommended-creator ng-scope"><span ng-bind-html="'Label.ByCreator'| translate:{styleBegin: getByHtml(), styleEnd: '</span>', creator: getCreatorHtml(item.Creator.CreatorProfileLink, item.Creator.Name)}" class="ng-binding"><span class="xsmall text-label recommended-creator-by">By</span><a class="xsmall text-overflow text-link" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/1/profile/">ROBLOX</a></span></div><!-- end ngIf: appMeta.isI18nEnabled -->
                                    <div class="text-overflow item-card-price"><span class="icon-robux-16x16" ng-show="item.HasPrice"></span> <span class="text-robux ng-binding" ng-show="item.HasPrice">6,666,666</span> <span class="text-label ng-hide" ng-hide="item.HasPrice"> <!-- ngIf: item.Product.NoPriceText.length > 0 --> </span></div>
                                </div>
                            </li><!-- end ngRepeat: item in recommendationsData.items -->
                            <li ng-repeat="item in recommendationsData.items" class="list-item item-card recommended-item ng-scope">
                                <div class="item-card-container recommended-item-link"><a ng-href="https://www.roblox.com/catalog/527365852/Dominus-Praefectus" class="item-card-link" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/catalog/527365852/Dominus-Praefectus">
                                        <div class="item-card-thumb-container recommended-thumb"><img ng-src="https://t4.rbxcdn.com/041b11733edcdbb7338a920695268169" thumbnail="item.Thumbnail" image-retry="" class="item-card-thumb ng-isolate-scope" src="https://web.archive.org/web/20180416173825im_/https://t4.rbxcdn.com/041b11733edcdbb7338a920695268169"> <span ng-show="item.AssetRestrictionIcon" ng-class="'icon-' + item.AssetRestrictionIcon.CssTag + '-label'" class="ng-hide icon--label"> </span></div>
                                        <div class="text-overflow item-card-name recommended-name ng-binding" title="Dominus Praefectus">Dominus Praefectus</div>
                                    </a><!-- ngIf: item.Item.AudioUrl --><!-- ngIf: !appMeta.isI18nEnabled --><!-- ngIf: appMeta.isI18nEnabled -->
                                    <div ng-if="appMeta.isI18nEnabled" class="text-overflow item-card-creator recommended-creator ng-scope"><span ng-bind-html="'Label.ByCreator'| translate:{styleBegin: getByHtml(), styleEnd: '</span>', creator: getCreatorHtml(item.Creator.CreatorProfileLink, item.Creator.Name)}" class="ng-binding"><span class="xsmall text-label recommended-creator-by">By</span><a class="xsmall text-overflow text-link" href="https://web.archive.org/web/20180416173825mp_/https://www.roblox.com/users/1/profile/">ROBLOX</a></span></div><!-- end ngIf: appMeta.isI18nEnabled -->
                                    <div class="text-overflow item-card-price"><span class="icon-robux-16x16" ng-show="item.HasPrice"></span> <span class="text-robux ng-binding" ng-show="item.HasPrice">180K+</span> <span class="text-label ng-hide" ng-hide="item.HasPrice"> <!-- ngIf: item.Product.NoPriceText.length > 0 --> </span></div>
                                </div>
                            </li><!-- end ngRepeat: item in recommendationsData.items -->
                        </ul>
                    </div>
                </div>
            </div>
            <script>
                var Roblox = Roblox || {};
                Roblox.I18nData = Roblox.I18nData || {};
                Roblox.I18nData.isI18nForRecommendationsEnabled = true;
            </script>
        </div>
    </div>
    <div class="GenericModal modalPopup unifiedModal smallModal" style="display:none">
        <div class="Title"></div>
        <div class="GenericModalBody">
            <div>
                <div class="ImageContainer"><img class="GenericModalImage" alt="generic image"></div>
                <div class="Message"></div>
            </div>
            <div class="clear"></div>
            <div id="GenericModalButtonContainer" class="GenericModalButtonContainer"><a class="ImageButton btn-neutral btn-large roblox-ok">OK</a></div>
        </div>
    </div>
    <div id="ItemPurchaseAjaxData" data-has-currency-service-error="False" data-currency-service-error-message="" data-authenticateduser-isnull="True" data-user-balance-robux="0" data-user-bc="0" data-continueshopping-url="https://www.roblox.com/catalog/<?= $asset["id"] ?>/Dominus-Aureus" data-imageurl="https://t7.rbxcdn.com/27e18af7807e43e69cd443fbaf22c4ce" data-alerturl="https://images.rbxcdn.com/75af9e2cb6a75450bee5245f5ee11c86.svg.gzip" data-insufficentfundsurl="https://images.rbxcdn.com/b80339ddf867ccfe6ab23a2c263d8000.png"></div>
    <div id="BCOnlyModal" class="modal-dialog" style="display:none">
        <div class="modal-content">
            <div class="modal-header"><button type="button" class="close" onclick="$.modal.close()"> <span aria-hidden="true"> <span class="icon-close"></span> </span> <span class="sr-only">Close</span> </button>
                <h5>Builders Club Only</h5>
            </div>
            <div class="modal-body">
                <div id="BCMessageDiv">This is a premium item only available to our Builders Club members.</div>
                <div class="modal-image-container"><span class="icon-default-bc upgrade-icon-bc"></span></div>
            </div>
            <div class="modal-footer"><a href="https://web.archive.org/web/20180416173825/https://www.roblox.com/premium/membership?ctx=bc-only-item" class="btn-primary-md">Upgrade Now</a> <button type="button" class="btn-control-md" onclick="$.modal.close()">Cancel</button></div>
        </div>
    </div>
    <script>
        function showBCOnlyModal(modalId) {
            var modalProperties = {
                overlayClose: true,
                escClose: true,
                opacity: 80,
                overlayCss: {
                    backgroundColor: "#000"
                }
            };
            if (typeof modalId === "undefined")
                $("#BCOnlyModal").modal(modalProperties);
            else
                $("#" + modalId).modal(modalProperties);
        }
        $(document).ready(function() {
            $('#VOID').click(function() {
                showBCOnlyModal("BCOnlyModal");
                return false;
            });
        });
    </script>
    <script>
        var Roblox = Roblox || {};
        Roblox.I18nData = Roblox.I18nData || {};
        Roblox.I18nData.isI18nForItemEnabled = true;
    </script>
    <div id="Skyscraper-Abp-Right" class="abp abp-container right-abp"></div>
</div>

<?php echo PageBuilder::buildFooter(); ?>