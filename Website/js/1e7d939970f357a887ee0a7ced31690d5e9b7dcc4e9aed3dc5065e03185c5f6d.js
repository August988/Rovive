!function(){"use strict";var r={n:function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,{a:t}),t},d:function(e,t){for(var o in t)r.o(t,o)&&!r.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)}},e=Roblox,t=0,o=0;function i(e){return(i="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}var s={6:"model",8:"image",9:"audio",14:"video",10:"mesh",7:"plugin",Models:"model",Decals:"image",Audio:"audio",Video:"video",Meshes:"mesh",Plugins:"plugin"},p={0:"Relevance",1:"MostFavorited",2:"Bestselling",3:"RecentlyUpdated",4:"PriceLowToHigh",5:"PriceHighToLow"},y={5:"AllTime",3:"PastWeek",1:"PastDay"};function n(e,t,o){var r=function(e){try{var t=e.match(/data-search-id=[^ ]*? /)[0].slice("data-search-id=".length);return t=(t=t.replaceAll('"',"")).replaceAll(" ","")}catch(e){return console.error("SearchID could not be parsed for event: ".concat(e)),""}}(t),n=function(e){try{var t=e.match(/\?[^$]*$/)[0];return new URLSearchParams(t)}catch(e){return console.error("Query string could not be parsed from URL, event will be missing parameters: ",e),new URLSearchParams}}(o),a=s[n.get("Category")]||null,c=p[n.get("SortType")||0],l=decodeURIComponent(n.get("Keyword")||""),u=parseInt(n.get("CreatorID")||""),t=n.get("CreatorName")||"",o=!!Roblox.LibraryAutocompleteParameters&&Roblox.LibraryAutocompleteParameters.autocompleteShouldShow,n=y[n.get("SortAggregation")]||null;return"MostFavorited"!==c&&"Bestselling"!==c&&(n=null),"undefined"===i(e)?e={autocompleteShown:o,autocompletePrefix:null,autocompleteKeyCount:0,autocompleteBackspaceCount:0,searchKeyword:l,searchID:r,assetType:a,sortType:c,sortAggregation:n,creatorID:isNaN(u)?null:u,creatorName:t,context:"Library"}:(e.autocompleteShown=o,e.searchID=r,e.searchKeyword=l,e.assetType=a,e.sortType=c,e.sortAggregation=n,e.creatorID=isNaN(u)?null:u,e.creatorName=t,e.context="Library"),e}r.n(e)().LibraryMetrics={logAutocompleteUsage:function(){var e;null!==(e=document.getElementById("keywordTextbox"))&&void 0!==e&&e.addEventListener("keydown",function(e){1===e.key.length&&(t+=1),!!["Backspace","Delete"].includes(e.key)&&0<t&&(o+=1)})},clearAutocompleteUsage:function(){o=t=0},getAutocompleteMetrics:function(e){return{autocompletePrefix:e="string"==typeof e&&0<e.length?e:null,autocompleteKeyCount:t,autocompleteBackspaceCount:o}},sendMarketplaceLibrarySearchEvent:function(e,t,o){o=n(e,t,o),Roblox.EventStream.SendEventWithTarget("MarketplaceLibrarySearch","Library",o,Roblox.EventStream.TargetTypes.WWW)}}}();

/* Bundle detector */
window.Roblox && window.Roblox.BundleDetector && window.Roblox.BundleDetector.bundleDetected("LibraryMetrics");