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

function udm_(a,b){var c="comScore=",d=document,e=d.cookie,f="",g="indexOf",h="substring",i="length",j=2048,k,l="&ns_",m="&",n,o,p,q,r=window,s=r.encodeURIComponent||escape;if(e[g](c)+1)for(p=0,o=e.split(";"),q=o[i];p<q;p++)n=o[p][g](c),n+1&&(f=m+unescape(o[p][h](n+c[i])));a+=l+"_t="+ +(new Date)+l+"c="+(d.characterSet||d.defaultCharset||"")+"&c8="+s(d.title)+f+"&c7="+s(d.URL)+"&c9="+s(d.referrer),a[i]>j&&a[g](m)>0&&(k=a[h](0,j-8).lastIndexOf(m),a=(a[h](0,k)+l+"cut="+s(a[h](k+1)))[h](0,j)),d.images?(n=new Image,r.ns_p||(ns_p=n),typeof b=="function"&&(n.onload=n.onerror=b),n.src=a):d.write("<","p","><",'img src="',a,'" height="1" width="1" alt="*"',"><","/p",">")}typeof _comscore=="undefined"&&(_comscore=[]),function(){var a="length",b=self,c=b.encodeURIComponent?encodeURIComponent:escape,d=".scorecardresearch.com",e="https://app"+d+"/s2e/invite",f=Math,g="script",h="width",i=/c2=(\d*)&/,j,k=function(b){if(!!b){var e,f=[],g,h=0,i,j,k="";for(var l in b){g=typeof b[l];if(g=="string"||g=="number")f[f[a]]=l+"="+c(b[l]),l=="c2"?k=b[l]:l=="c1"&&(h=1)}if(f[a]<=0||k=="")return;j=b.options||{},j.d=j.d||document;if(typeof j.url_append=="string"){i=j.url_append.replace(/&amp;/,"&").split("&");for(var l=0,n=i[a],o;l<n;l++)o=i[l].split("="),o[a]==2&&(f[f[a]]=o[0]+"="+c(o[1]))}e=["http",j.d.URL.charAt(4)=="s"?"s://sb":"://b",d,"/b?",h?"":"c1=2&",f.join("&").replace(/&$/,"")],udm_(e.join(""),function(){m(this,j)})}},l=function(b){b=b||_comscore;for(var c=0,d=b[a];c<d;c++)k(b[c]);b=_comscore=[]},m=function(a,b){if(!(a.src.indexOf("c1=2")<0||!b.d.createElement))if(b.force_script_extension||a[h]==2&&a.height>f.round(f.random()*100)){var c=b.d.createElement(g),d=b.d.getElementsByTagName(g)[0],j=[b.script_extension_url||e,"?","c2=",a.src.match(i)[1]].join("");d&&(c.src=j,c.async=!0,d.parentNode.insertBefore(c,d))}};l(),(j=b.COMSCORE)?(j.purge=l,j.beacon=k):COMSCORE={purge:l,beacon:k}}()








}
/*
     FILE ARCHIVED ON 16:42:40 Jan 26, 2016 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 11:33:49 Jun 05, 2022.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  exclusion.robots: 0.079
  exclusion.robots.policy: 0.071
  RedisCDXSource: 0.528
  esindex: 0.009
  LoadShardBlock: 337.489 (6)
  PetaboxLoader3.datanode: 360.062 (8)
  CDXLines.iter: 103.837 (3)
  load_resource: 124.204 (2)
  PetaboxLoader3.resolve: 45.553
*/