<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

$userid = isset($_GET["id"]) ? $_GET["id"] : 0;

$userclass = new User;
$user = $userclass::getUser($userid);

if ($user) {
    $title =  $user["username"] . "'s Profile";
} else {
    header("HTTP/1.1 404 Not Found");
    $title = "404 Not Found";
}

$gameclass = new Game;

$games = $gameclass::getGamesByUserId($userid);

// TODO: make this dynamic

$followersCount = 0;
$followingsCount = 0;
$friendsCount = 0;
$usermembership = 0;

$badgescount = 11;

?>

<?php echo PageBuilder::buildHeader(); ?>

<script type="text/javascript" src="https://web.archive.org/web/20151125230338js_/http://js.rbxcdn.com/558b1cf5942205ea4ea8c7e2878dd361.js"></script>

<div class="content  ">
    <script type="text/javascript">
        var Roblox = Roblox || {};
        Roblox.uiBootstrap = {
            tabTemplateLink: "/viewapp/common/template/tabs/tab.html",
            tabsetTemplateLink: "/viewapp/common/template/tabs/tabset.html"
        };
    </script>

    <div id="state-properties" data-userid="390939" data-headsid="17" data-facesid="18" data-gearid="19" data-hatsid="8" data-t-shirtsid="2" data-shirtsid="11" data-pantsid="12" data-decalsid="13" data-modelsid="10" data-pluginsid="38" data-animationsid="24" data-placesid="9" data-game-passesid="34" data-audioid="3" data-badgesid="21" data-left-armsid="29" data-right-armsid="28" data-left-legsid="30" data-right-legsid="31" data-torsosid="27" data-packagesid="32" data-isuser="false" data-absolute-library-url="http://www.roblox.com/develop/library" data-absolute-catalog-url="http://www.roblox.com/catalog/">
    </div>

    <div class="row page-content" ng-modules="robloxApp, ui.bootstrap, assetsExplorer, recommendations, robloxApp.helpers">
        <h1>
            &#39;s Inventory
        </h1>
        <div class=" col-xs-12 rbx-tabs-vertical assets-explorer-main-content ng-cloak" ng-controller="assetsExplorerController">
            <div class="category-dropdown">
                <h3 class="h3">Category</h3>
                <div class="input-group-btn rbx-input-group-btn" dropdown="">
                    <button type="button" dropdown-toggle="" class="rbx-input-dropdown-btn" ng-disabled="disabled" aria-haspopup="true" aria-expanded="false">
                        <span class="rbx-selection-label" style="text-transform: capitalize;">{{ currentStatus.stateLabel }}</span>
                        <span class="rbx-icon-down-16x16"></span>
                    </button>
                    <ul class="rbx-dropdown-menu" role="menu">
                        <li ng-repeat="tab in assetsTabs" ui-sref="{{ tab.name }}">
                            <a>{{tab.label}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="nav nav-tabs nav-stacked" ng-init="currentStatus.activeTab">
                <h3 class="h3">Category</h3>
                <li class="rbx-tab" ng-repeat="tab in assetsTabs | orderBy: 'name'" ng-class="{'active': currentStatus.activeTab == tab.name}" ui-sref="{{ tab.name }}">
                    <a class="rbx-tab-heading">
                        <span class="rbx-lead">{{ tab.label }}</span>
                    </a>
                </li>
            </ul>
            <script type="text/ng-template" id="assets-list.html">
                <div class="current-items" ng-class="{'hide-items': !currentData.templateVisible}">
        <div class="container-header" ng-class="{'place-header': currentData.activeTab == 'places' && currentData.checkPage == 'true'}">
            <div class="assets-explorer-title">
                <h3>{{ currentData.stateLabel }}</h3>
                <span class="rbx-font-sm">
                    Showing {{ numItems | number }} - {{ assetsListContent.assetItems.data.Data.End +1 | number }} of {{ assetsListContent.assetItems.data.Data.TotalItems | number }} results
                </span>
            </div>
            <div class="header-content"
                 ng-hide="currentData.activeTab == 'places' || currentData.activeTab == 'badges' || currentData.activeTab == 'game-passes' ">
                <a ng-href="{{ currentData.assetTypeUrl }}" class="btn btn-more rbx-btn-primary-sm">Get More</a>
                <div class="rbx-font-sm get-more">Explore the {{ currentData.itemSection }} to find more {{ currentData.stateLabel }}!</div>
            </div>
            <div class="header-content"
                 ng-show="currentData.activeTab == 'places' && currentData.checkPage == 'true' && assetsListContent.assetItems.data.Data.PageType !== 'favorites'"
                 ng-class="{'places-dropdown': currentData.activeTab == 'places' && currentData.checkPage == 'true'}">
                <div class="input-group-btn rbx-input-group-btn" dropdown="">
                    <button type="button" dropdown-toggle="" class="rbx-input-dropdown-btn" ng-disabled="disabled" aria-haspopup="true" aria-expanded="false">
                        <span class="rbx-selection-label">{{ currentData.selectedItem }}</span>
                        <span class="rbx-icon-down-16x16"></span>
                    </button>
                    <ul class="rbx-dropdown-menu" role="menu">
                        <li ng-repeat="item in listItems" ng-click="placeSelect(item)">
                            <a>{{item.label}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div ng-show="assetsListContent.assetItems.data.Data.TotalItems == 0" class="assets-explorer-items">
            <div class="section">
                <span class="rbx-text-danger">
                    <span ng-hide="currentData.checkPage == 'true'">This user has</span>
                    <span ng-show="currentData.checkPage == 'true'">You have</span>
                    <span ng-show="assetsListContent.assetItems.data.Data.PageType === 'favorites'">not favorited any {{ currentData.stateLabel }}.</span>
                    <span ng-hide="assetsListContent.assetItems.data.Data.PageType === 'favorites'">no {{ currentData.stateLabel }}.</span>
                    <span ng-hide="assetsListContent.assetItems.data.Data.PageType === 'favorites' || currentData.stateLabel == 'badges' || currentData.stateLabel == 'game passes' || currentData.stateLabel == 'places'">Try using the <a class="rbx-link" ng-href="{{ currentData.assetTypeUrl }}">{{ currentData.itemSection }}</a> to find new items.</span>
                </span>
            </div>
        </div>
        <ul id="assetsItems" class="hlist assets-explorer-items">
            <li ng-repeat="item in assetsListContent.assetItems.data.Data.Items" class="list-item assets-explorer-item"
                ng-class="{'place-item': currentData.activeTab == 'places'}">
                <a ng-href="{{item.Item.AbsoluteUrl}}" class="assets-explorer-item-link">
                    <span class="item-thumb">
                        <div ng-hide="item.Product.SerialNumber == null" class="item-serial-number rbx-font-xs">#{{item.Product.SerialNumber}}</div>
                        <img ng-src="{{item.Thumbnail.Url}}" thumbnail='item.Thumbnail' image-retry />
                        <div class="item-overlay item-expire-time-label rbx-font-xs" ng-hide="item.Product.ExpireTime == null">Exp: {{item.Product.ExpireTime}}</div>
                        <span class="item-overlay" ng-hide="item.Product.ExpireTime != null" ng-class="{'rbx-icon-limited-label': item.Product.IsLimited == true, 'rbx-icon-limited-unique-label' : item.Product.IsLimitedUnique == true }"></span>
                    </span>
                    <span class="rbx-font-xs rbx-text-overflow assets-explorer-name">{{ item.Item.Name }}</span>
                    <span class="rbx-font-xs rbx-text-overflow assets-explorer-creator"><span class="assets-explorer-creator-by" ng-hide="currentData.stateLabel == 'places'">By:</span><span class="assets-explorer-creator-by" ng-show="currentData.stateLabel == 'places'">Owner:</span> <span ng-hide="currentData.stateLabel == 'places' && (currentData.selectedItem == 'My VIP Servers' || currentData.selectedItem == 'Other VIP Servers') && currentData.checkPage == 'true'">{{ item.Creator.Name }}</span> <span ng-show="currentData.selectedItem == 'My VIP Servers' || currentData.selectedItem == 'Other VIP Servers'">{{ item.PrivateServer.OwnerName }}</span></span>
                    <span class="rbx-font-xs assets-explorer-cost" ng-class="{'assets-explorer-hide': item.Product.PriceInRobux == null}"><span class="rbx-icon-robux"></span><span class="assets-explorer-cost-text">{{item.Product.PriceInRobux | abbreviate }}</span></span>
                </a>

            </li>
        </ul>
        <div class="pager-holder">
            <ul class="pager rbx-pager" ng-show="currentData.totalPages > 1">
                <li class="rbx-pager-prev">
                    <a ng-click="newPage((currentData.currentPage - 1))"><i class="rbx-icon-left"></i></a>
                </li>
                <li>
                    <span>Page</span>
                </li>
                <li class="rbx-pager-cur">
                    <input type="text" value="{{currentData.currentPage }}" ng-model="page" ng-keyup="$event.keyCode == 13 && newPage(page)">
                </li>
                <li class="rbx-pager-total">
                    <span>of</span>
                    <span>{{ currentData.totalPages | number }}</span>
                </li>
                <li class="rbx-pager-next">
                    <a ng-click="newPage((currentData.currentPage + 1))"><i class="rbx-icon-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
</script>
            <div class="tab-content rbx-tab-content" ng-controller="inventoryContentController" ng-include src="'assets-list.html'"></div>

            <div ng-controller="recommendationsController" class="current-items" ng-class="{'hide-items': !appData.templateVisible}">
                <div class="recommendations-container" ng-show="appData.recommendedVisible" ng-assetid="{{ appData.assetTypeId }}" data-asset-id="2">
                    <div class="container-header recommendations-header" ng-hide="appData.recommendedItems.data.Data.Items.length == 0">
                        <h3>Recommended {{ appData.stateLabel }}</h3>
                    </div>
                    <ul class="hlist recommended-items" ng-class="{'place-items': appData.currentTab == 'places'}">
                        <li ng-repeat="item in appData.recommendedItems.data.Data.Items" class="list-item recommended-item" ng-class="{'place-item': appData.currentTab == 'places'}">
                            <a ng-href="{{item.Item.AbsoluteUrl}}" class="recommended-item-link">
                                <span class="recommended-thumb">
                                    <img ng-src="{{item.Thumbnail.Url}}" thumbnail="item.Thumbnail" image-retry />
                                </span>
                                <span class="recommended-name rbx-font-xs rbx-text-overflow">{{ item.Item.Name }}</span>
                                <span class="recommended-creator rbx-font-xs rbx-text-overflow"><span class="recommended-creator-by">By:</span> {{ item.Creator.Name }} </span>
                            </a>

                        </li>
                    </ul>
                    <a class="btn rbx-btn-control-xs assets-explorer-join-btn" ng-href="{{ appData.assetTypeUrl }}" ng-hide="appData.recommendedItems.data.Data.Items.length == 0">See All</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo PageBuilder::buildFooter(); ?>