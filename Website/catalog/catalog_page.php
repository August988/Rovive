<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';


$legendShown = isset($_GET['LegendExpanded']) ? intval($_GET['LegendExpanded']) : false;

$category = isset($_GET['Category']) ? intval($_GET['Category']) : 1;

$catalogHtml = "";
?>

<link rel='stylesheet' href='/css/MainCSS___58dd044044005dc0e887c80110c9a567_m.css' />

<link rel='stylesheet' href='/css/page___e002bb6d85eefef3195809ca218cdd34_m.css' />


<div id="catalog" data-empty-search-enabled="true">
    <div class="header" style="height:60px;">
        <div style="float:left;">
            <h1><a href="https://www.rovive.pro/catalog" id="CatalogLink">Catalog</a>
            </h1>
        </div>
        <div class="CatalogSearchBar">
            <input id="keywordTextbox" name="name" type="text" class="translate text-box text-box-small" />
            <div style="height:23px;border:1px solid #a7a7a7;padding:2px 2px 0px 2px;margin-right:6px;float:left;position:relative">
                <!--[if IE7]>
<div style="height:19px;width:131px;position:absolute;top:2px;left:2px;border:1px solid white"></div>
<div style="height:19px;width:15px;position:absolute;top:2px;right:2px;border:1px solid #aaa"></div>
<![endif]-->
                <select id="categoriesForKeyword">
                    <option value="1" <?php if ($category == 1) { ?>selected=selected<?php } ?>>All Categories</option>
                    <option value="4" <?php if ($category == 4) { ?>selected=selected<?php } ?>>Body Parts</option>
                    <option value="3" <?php if ($category == 3) { ?>selected=selected<?php } ?>>Clothing</option>
                    <option value="2" <?php if ($category == 2) { ?>selected=selected<?php } ?>>Collectibles</option>
                    <option value="0" <?php if ($category == 0) { ?>selected=selected<?php } ?>>Featured</option>
                    <option value="5" <?php if ($category == 5) { ?>selected=selected<?php } ?>>Gear</option>
                    <option value="11" <?php if ($category == 11) { ?>selected=selected<?php } ?>>Accessories</option>
                </select>
            </div>
            <a id="submitSearchButton" href="#" class="btn-control btn-control-large top-level">Search</a>
        </div>
    </div>


    <div class="left-nav-menu divider-right">



        <div class="browseDropdownHeader"></div>

        <div id="dropdown" class="splashdropdownsplashdropdown roblox-hierarchicaldropdown">
            <ul id="dropdownUl" class="clearfix">

                <li class="subcategories" data-delay="never">
                    <a href="#category=featured" class="assetTypeFilter" data-category="0">Featured</a>
                    <ul class="slideOut" style="top:-1px;">
                        <li class="slideHeader"><span>Featured Types</span></li>
                        <li><a href="#category=featured" class="assetTypeFilter" data-types="0" data-category="0">All Featured Items</a>
                        </li>
                        <li><a href="#category=featured" class="assetTypeFilter" data-types="19" data-category="0">Featured
                                Accessories</a></li>
                        <li><a href="#category=featured" class="assetTypeFilter" data-types="10" data-category="0">Featured Faces</a>
                        </li>
                        <li><a href="#category=featured" class="assetTypeFilter" data-types="5" data-category="0">Featured Gear</a></li>
                        <li><a href="#category=featured" class="assetTypeFilter" data-types="11" data-category="0">Featured Packages</a>
                        </li>
                    </ul>
                </li>

                <li class="subcategories">
                    <a href="#category=collectibles" class="assetTypeFilter collectiblesLink" data-category="2">Collectibles</a>
                    <ul class="slideOut" style="top:-32px;">
                        <li class="slideHeader"><span>Collectible Types</span></li>
                        <li><a href="#category=collectibles" class="assetTypeFilter" data-types="2" data-category="2">All Collectibles</a>
                        </li>
                        <li><a href="#category=collectibles" class="assetTypeFilter" data-types="19" data-category="2">Collectible
                                Accessories</a></li>
                        <li><a href="#category=collectibles" class="assetTypeFilter" data-types="10" data-category="2">Collectible Faces</a>
                        </li>
                        <li><a href="#category=collectibles" class="assetTypeFilter" data-types="5" data-category="2">Collectible Gear</a>
                        </li>
                    </ul>
                </li>
                <li class="slideHeader DropdownDivider divider-bottom" data-delay="ignore"></li>

                <li data-delay="always">
                    <a href="#category=all" class="assetTypeFilter" data-category="1">All Categories</a>
                </li>

                <li class="subcategories">
                    <a href="#category=clothing" class="assetTypeFilter" data-category="3">Clothing</a>
                    <ul class="slideOut" style="top:-97px;">
                        <li class="slideHeader"><span>Clothing Types</span></li>
                        <li><a href="#" class="assetTypeFilter" data-types="3" data-category="3">All Clothing</a></li>
                        <li><a href="#" class="assetTypeFilter" data-types="9" data-category="3">Hats</a></li>
                        <li><a href="#" class="assetTypeFilter" data-types="12" data-category="3">Shirts</a></li>
                        <li><a href="#" class="assetTypeFilter" data-types="13" data-category="3">T-Shirts</a></li>
                        <li><a href="#" class="assetTypeFilter" data-types="14" data-category="3">Pants</a></li>
                        <li><a href="#" class="assetTypeFilter" data-types="11" data-category="3">Packages</a></li>
                    </ul>
                </li>

                <li class="subcategories">
                    <a href="#category=bodyparts" class="assetTypeFilter" data-category="4">Body Parts</a>
                    <ul class="slideOut" style="top:-128px;">
                        <li class="slideHeader"><span>Body Part Types</span></li>
                        <li><a href="#category=bodyparts" class="assetTypeFilter" data-types="4" data-category="4">All Body Parts</a></li>
                        <li><a href="#category=bodyparts" class="assetTypeFilter" data-types="15" data-category="4">Heads</a></li>
                        <li><a href="#category=bodyparts" class="assetTypeFilter" data-types="10" data-category="4">Faces</a></li>
                        <li><a href="#category=bodyparts" class="assetTypeFilter" data-types="11" data-category="4">Packages</a></li>
                    </ul>
                </li>

                <li class="subcategories">
                    <a href="#category=gear" class="assetTypeFilter" data-category="5">Gear</a>
                    <ul class="slideOut" style="top:-159px;" style="border-right:0px;">
                        <div>
                            <li class="slideHeader"><span>Gear Types</span></li>
                            <li><a href="#geartype=All Gear" class="gearFilter" data-category="5" data-types="All">All Gear</a></li>
                            <li><a href="#geartype=Building" class="gearFilter" data-category="5" data-types="8">Building</a></li>
                            <li><a href="#geartype=Explosive" class="gearFilter" data-category="5" data-types="3">Explosive</a></li>
                            <li><a href="#geartype=Melee" class="gearFilter" data-category="5" data-types="1">Melee</a></li>
                            <li><a href="#geartype=Musical" class="gearFilter" data-category="5" data-types="6">Musical</a></li>
                            <li><a href="#geartype=Navigation" class="gearFilter" data-category="5" data-types="5">Navigation</a></li>
                            <li><a href="#geartype=Power Up" class="gearFilter" data-category="5" data-types="4">Power Up</a></li>
                            <li><a href="#geartype=Ranged" class="gearFilter" data-category="5" data-types="2">Ranged</a></li>
                            <li><a href="#geartype=Social" class="gearFilter" data-category="5" data-types="7">Social</a></li>
                            <li><a href="#geartype=Transport" class="gearFilter" data-category="5" data-types="9">Transport</a></li>
                        </div>

                    </ul>
                </li>

                <li class="subcategories">
                    <a href="#category=accessories" class="assetTypeFilter" data-category="11">Accessories</a>
                    <ul class="slideOut" style="top:-190px;">
                        <li class="slideHeader"><span>Accessory Types</span></li>
                        <li><a href="#" class="assetTypeFilter" data-types="19" data-category="11">All Accessories</a></li>
                        <li><a href="#" class="assetTypeFilter" data-types="9" data-category="11">Hats</a></li>
                        <li><a href="#" class="assetTypeFilter" data-types="20" data-category="11">Hair</a></li>
                        <li><a href="#" class="assetTypeFilter" data-types="21" data-category="11">Face</a></li>
                        <li><a href="#" class="assetTypeFilter" data-types="22" data-category="11">Neck</a></li>
                        <li><a href="#" class="assetTypeFilter" data-types="23" data-category="11">Shoulder</a></li>
                        <li><a href="#" class="assetTypeFilter" data-types="24" data-category="11">Front</a></li>
                        <li><a href="#" class="assetTypeFilter" data-types="25" data-category="11">Back</a></li>
                        <li><a href="#" class="assetTypeFilter" data-types="26" data-category="11">Waist</a></li>
                    </ul>
                </li>


            </ul>
        </div>
        <div id="legend" class="">
            <div class="header <?php if ($legendShown) { ?>expanded<?php } ?>" id="legendheader">
                <h3>Legend</h3>
            </div>
            <div id="legendcontent" style="overflow: hidden; <?php if (!$legendShown) { ?>display:none;<?php } ?>">
                <img src="/img/4fc3a98692c7ea4d17207f1630885f68.png" style="margin-left: -13px" alt="Builders Club Only" />
                <div class="legendText"><b>Builders Club Only</b><br />
                    Only purchasable by Builders Club members.</div>

                <img src="/img/793dc1fd7562307165231ca2b960b19a.png" style="margin-left: -13px" alt="Limited Items" />
                <div class="legendText"><b>Limited Items</b><br />
                    Owners of these discontinued items can re-sell them to other users
                    at any price.</div>

                <img src="/img/d649b9c54a08dcfa76131d123e7d8acc.png" style="margin-left: -13px" alt="Limited Unique Items" />
                <div class="legendText"><b>Limited Unique Items</b><br />
                    A limited supply originally sold by ROBLOX. Each unit is labeled
                    with a serial number. Once sold out, owners can re-sell them to
                    other users.
                </div>
            </div>
        </div>
    </div>
    <div class="right-content divider-left">
        <a href="https://www.rovive.pro/upgrades/robux?ctx=catalog" class="btn-medium btn-primary">Buy ROBUX</a>

        <h2>All Items on ROBLOX</h2>
        <div style="clear:both;"></div>
    </div>
    <?= $catalogHtml ?>
    <div style="clear:both" style="padding-top:20px"></div>
</div>

<div style="clear:both"></div>