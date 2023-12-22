var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

;// bundle: page___14935c06fb27d8d5c8db4979fb17c14f_m
;// files: Users/Search.js, Events/PageHeartbeatEvent.js, GenericConfirmation.js

;// Users/Search.js
$(function(){function t(n,t){var i=$("#PeopleSearchContainer").data("searchpageurl");document.location=i+"?keyword="+n+"&startRow="+t}function n(n){var u={overlayClose:!1,opacity:50,overlayCss:{backgroundColor:"#000"},escClose:!1};typeof closeClass!="undefined"&&closeClass!==""&&$.modal.close("."+closeClass),$("#ProcessingView").modal(u);var f=$("#people-search-keyword").val(),i=0,r=10;n!==undefined&&(i=$("#peoplesearch-results").data("startrow"),r=$("#peoplesearch-results").data("maxrows"),n?i-=r:i+=r),t(f,i,r)}$("#peoplesearch-search-button").click(function(){n()});$("#PeopleSearchContainer").on("click",".facet-filter input[type='checkbox']",function(){n()});$("#PeopleSearchContainer").on("click",".pager.next",function(){n(!1)});$("#PeopleSearchContainer").on("click",".pager.previous",function(){n(!0)});$("#PeopleSearchContainer").on("click",".result-item-container",function(){var n=$(this).data("userpageurl");window.location=n});$("#people-search-keyword").keypress(function(t){t.which==13&&n()}),$("[data-retry-url]").loadRobloxThumbnails()});

;// Events/PageHeartbeatEvent.js
typeof Roblox=="undefined"&&(Roblox={}),typeof Roblox.PageHeartbeatEvent=="undefined"&&(Roblox.PageHeartbeatEvent=function(){var n=function(n){Roblox.EventStream&&Roblox.EventStream.SendEvent("pageHeartbeat","heartbeat"+n,{})},t=function(){var n=$("#page-heartbeat-event-data-model");return n.data("page-heartbeat-event-intervals")},i=function(){var i=t(),r=0;if(i){function u(){if(i.length&&r<i.length){var t=i[r++];setTimeout(function(){n(r),u()},t*1e3)}}u()}},r=function(){i()};return{Init:r}}()),$(function(){Roblox.PageHeartbeatEvent.Init()});

;// GenericConfirmation.js
typeof Roblox=="undefined"&&(Roblox={}),typeof Roblox.GenericConfirmation=="undefined"&&(Roblox.GenericConfirmation=function(){function w(){n.isOpen=!1,t()}function k(t){var a,e,o,s,l;n.isOpen=!0,a={titleText:"",bodyContent:"",footerText:"",acceptText:Roblox.Resources.GenericConfirmation.yes,declineText:Roblox.Resources.GenericConfirmation.No,acceptColor:u,declineColor:f,xToCancel:!1,onAccept:function(){return!1},onDecline:function(){return!1},onCancel:function(){return!1},imageUrl:null,allowHtmlContentInBody:!1,allowHtmlContentInFooter:!1,dismissable:!0,fieldValidationRequired:!1,onOpenCallback:function(){}},t=$.extend({},a,t),c.overlayClose=t.dismissable,c.escClose=t.dismissable,e=$(i),e.html(t.acceptText),e.attr("class","btn-large "+t.acceptColor),e.unbind(),e.bind("click",function(){return v(e)?!1:(t.fieldValidationRequired?nt(t.onAccept):h(t.onAccept),!1)}),o=$(r),o.html(t.declineText),o.attr("class","btn-large "+t.declineColor),o.unbind(),o.bind("click",function(){return v(o)?!1:(h(t.onDecline),!1)}),$('[data-modal-handle="confirmation"] div.Title').text(t.titleText),s=$("[data-modal-handle='confirmation']"),t.imageUrl==null?s.addClass("noImage"):(s.find("img.GenericModalImage").attr("src",t.imageUrl),s.removeClass("noImage")),t.allowHtmlContentInBody?$("[data-modal-handle='confirmation'] div.Message").html(t.bodyContent):$("[data-modal-handle='confirmation'] div.Message").text(t.bodyContent),$.trim(t.footerText)==""?$('[data-modal-handle="confirmation"] div.ConfirmationModalFooter').hide():$('[data-modal-handle="confirmation"] div.ConfirmationModalFooter').show(),t.allowHtmlContentInFooter?$('[data-modal-handle="confirmation"] div.ConfirmationModalFooter').html(t.footerText):$('[data-modal-handle="confirmation"] div.ConfirmationModalFooter').text(t.footerText),$("[data-modal-handle='confirmation']").modal(c),l=$("a.genericmodal-close"),l.unbind(),l.bind("click",function(){return h(t.onCancel),!1}),t.xToCancel||l.hide(),t.onOpenCallback()}function a(n){n.hasClass(f)?n.addClass(s):n.hasClass(l)?n.addClass(e):n.hasClass(u)&&n.addClass(o)}function v(n){return n.hasClass(o)||n.hasClass(s)||n.hasClass(e)?!0:!1}function b(){var n=$(i),t=$(r);a(n),a(t)}function g(){var u=$(i),t=$(r),n=o+" "+s+" "+e;u.removeClass(n),t.removeClass(n)}function p(){if(n.isOpen){var t=$(i);t.click()}}function y(){var n=$(r);n.click()}function t(t){n.isOpen=!1,typeof t!="undefined"?$.modal.close(t):$.modal.close()}function h(n){t(),typeof n=="function"&&n()}function nt(n){if(typeof n=="function"){var i=n();if(i!=="undefined"&&i==!1)return!1}t()}var l="btn-primary",u="btn-neutral",f="btn-negative",e="btn-disabled-primary",o="btn-disabled-neutral",s="btn-disabled-negative",d="btn-none",i="#roblox-confirm-btn",r="#roblox-decline-btn",n={isOpen:!1},c={overlayClose:!0,escClose:!0,opacity:80,overlayCss:{backgroundColor:"#000"},onClose:w};return{open:k,close:t,disableButtons:b,enableButtons:g,clickYes:p,clickNo:y,status:n,green:l,blue:u,gray:f,none:d}}()),$(document).keypress(function(n){Roblox.GenericConfirmation.status.isOpen&&n.which===13&&Roblox.GenericConfirmation.clickYes()});


}
/*
     FILE ARCHIVED ON 18:22:42 Feb 20, 2016 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 19:33:55 Jun 06, 2022.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 68.719
  exclusion.robots: 0.232
  exclusion.robots.policy: 0.222
  RedisCDXSource: 0.623
  esindex: 0.008
  LoadShardBlock: 46.685 (3)
  PetaboxLoader3.datanode: 58.341 (5)
  CDXLines.iter: 18.239 (3)
  load_resource: 95.235 (2)
  PetaboxLoader3.resolve: 66.561 (2)
*/