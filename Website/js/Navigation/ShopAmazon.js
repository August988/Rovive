Roblox = Roblox || {}

Roblox.ShopAmazon = (function () {
    var amazonStoreUrl =
       "https://www.amazon.com/roblox?&_encoding=UTF8&tag=r05d13-20&linkCode=ur2&linkId=4ba2e1ad82f781c8e8cc98329b1066d0&camp=1789&creative=9325";

    function loadShopAmazonModal() {
        $('a.roblox-shop-interstitial').on('click', function (event) {
            event.preventDefault();

            Roblox.Dialog.open({
                titleText: "You are leaving ROBLOX",
                bodyContent: getBodyContent(),
                allowHtmlContentInBody: true,
                acceptText: "Continue to Shop",
                declineText: "Cancel",
                xToCancel: true,
                acceptColor: Roblox.Dialog.green,
                declineColor: Roblox.Dialog.white,
                onAccept: redirectToAmazonStore
            });
        });

    }

    function redirectToAmazonStore() {
        window.open(amazonStoreUrl, "_blank");
    }

    function getBodyContent() {
        return "<p>Your are about to visit our amazon store. You will be redirected to ROBLOX merchandise store on <a class='text-link' target='_blank' " +
            "href='" + amazonStoreUrl + "' >Amazon.com</a>.</p>" +
            " <p>Please note that you need to be over 18 to purchase products online." +
            " The amazon store is not part of rovive.pro " +
            "and is governed by a separate privacy policy.</p>";
    }

    function init() {
        loadShopAmazonModal();
    }

    $(function () {
        init();
    });
})();


