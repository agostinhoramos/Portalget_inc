<script type="text/javascript" >
   // Decide whether to suppress missing file error or not based on preference setting
var suppressMissingFileError = false
</script>
  <script type="text/javascript" >
   window.Muse.assets.check=function(c){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},d=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},f=function(f){for(var g=document.getElementsByTagName("link"),j=0;j<g.length;j++)if("text/css"==g[j].type){var l=(g[j].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!l||!l[1]||!l[2])break;b[l[1]]=l[2]}g=document.createElement("div");g.className="version";g.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(g);for(j=0;j<Muse.assets.required.length;){var l=Muse.assets.required[j],k=l.match(/([\w\-\.]+)\.(\w+)$/),i=k&&k[1]?
k[1]:null,k=k&&k[2]?k[2]:null;switch(k.toLowerCase()){case "css":i=i.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");g.className+=" "+i;i=a(d(g,"color"));k=a(d(g,"backgroundColor"));i!=0||k!=0?(Muse.assets.required.splice(j,1),"undefined"!=typeof b[l]&&(i!=b[l]>>>24||k!=(b[l]&16777215))&&Muse.assets.outOfDate.push(l)):j++;g.className="version";break;case "js":j++;break;default:throw Error("Unsupported file type: "+k);}}c?c().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
g.parentNode.removeChild(g);if(Muse.assets.outOfDate.length||Muse.assets.required.length)g="Alguns arquivos no servidor podem estar ausentes ou incorretos. Limpe o cache do navegador e tente novamente. Se o problema persistir, entre em contato com o autor do site.",f&&Muse.assets.outOfDate.length&&(g+="\nOut of date: "+Muse.assets.outOfDate.join(",")),f&&Muse.assets.required.length&&(g+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(g+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(g)):g/*alert(g)*/};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
setTimeout(function(){f(!0)},5E3):f()}};
var muse_init=function(){require.config({baseUrl:"https://portalget.com/src/"});require(["jquery","museutils","whatinput","jquery.musepolyfill.bgsize","jquery.watch","webpro","musewpslideshow","jquery.museoverlay","touchswipe","jquery.musemenu","jquery.scrolleffects"],function(c){var $ = c;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.resizeHeight('.browser_width');/* resize height */
Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
Muse.Utils.makeButtonsVisibleAfterSettingMinWidth();/* body */
Muse.Utils.initWidget('#pamphletu5437', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:500,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu5437 */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.initWidget('#pamphletu6153', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:0,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu6153 */
Muse.Utils.initWidget('#pamphletu7618', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:0,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu7618 */
Muse.Utils.initWidget('#pamphletu5266', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:0,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu5266 */
Muse.Utils.initWidget('#pamphletu7265', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:0,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu7265 */
Muse.Utils.initWidget('#pamphletu6333', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:0,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu6333 */
Muse.Utils.initWidget('#pamphletu28466', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:100,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28466 */
Muse.Utils.initWidget('#pamphletu28454', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:100,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28454 */
Muse.Utils.initWidget('#pamphletu28430', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:100,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28430 */
Muse.Utils.initWidget('#pamphletu28442', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:100,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28442 */
Muse.Utils.initWidget('#pamphletu28478', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:0,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28478 */
Muse.Utils.initWidget('#pamphletu28489', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:0,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28489 */
Muse.Utils.initWidget('#pamphletu28500', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:0,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28500 */
Muse.Utils.initWidget('#pamphletu28511', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:100,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28511 */
Muse.Utils.initWidget('#pamphletu28589', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:100,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28589 */
Muse.Utils.initWidget('#pamphletu28577', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:100,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28577 */
Muse.Utils.initWidget('#pamphletu28553', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:100,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28553 */
Muse.Utils.initWidget('#pamphletu28565', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:100,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28565 */
Muse.Utils.initWidget('#pamphletu28601', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:0,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28601 */
Muse.Utils.initWidget('#pamphletu28612', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:0,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28612 */
Muse.Utils.initWidget('#pamphletu28623', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:100,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28623 */
Muse.Utils.initWidget('#pamphletu28701', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:100,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28701 */
Muse.Utils.initWidget('#pamphletu28689', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:100,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28689 */
Muse.Utils.initWidget('#pamphletu28665', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:100,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28665 */
Muse.Utils.initWidget('#pamphletu28677', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:100,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28677 */
Muse.Utils.initWidget('#pamphletu28713', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:0,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28713 */
Muse.Utils.initWidget('#pamphletu28724', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'click',deactivationEvent:'mouseout_click',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:0,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28724 */
Muse.Utils.initWidget('#pamphletu28735', ['#bp_infinity'], function(elem) { return new WebPro.Widget.ContentSlideShow(elem, {contentLayout_runtime:'stack',event:'mouseover',deactivationEvent:'mouseout_both',autoPlay:false,displayInterval:3000,transitionStyle:'fading',transitionDuration:100,hideAllContentsFirst:true,triggersOnTop:true,shuffle:false,enableSwipe:true,resumeAutoplay:true,resumeAutoplayInterval:3000,playOnce:false,autoActivate_runtime:false,isResponsive:false}); });/* #pamphletu28735 */
Muse.Utils.fullPage('#page');/* 100% height page */
$('#u366').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u365').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u389').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u392').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u383').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u384').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u385').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u386').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u387').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u388').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u390-4').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u391-4').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u5001').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u394-7').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u367').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u395').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u396-4').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u393').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u1403-bw').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[null,1]},{"in":[0,Infinity],"speed":[null,0]}]);/* scroll effect */
$('#u1405').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[1,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u1409').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[1,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u1411').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[1,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u1412').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[1,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u1414').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[1,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u1415-4').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u1416').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[1,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u1417').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[1,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u6219').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u6327').registerPositionScrollEffect([{"in":[-Infinity,-0.08],"speed":[1,1]},{"in":[-0.08,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#u6330-4').registerPositionScrollEffect([{"in":[-Infinity,-0.03],"speed":[0,1]},{"in":[-0.03,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#pamphletu5437').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#pamphletu6153').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#pamphletu5266').registerPositionScrollEffect([{"in":[-Infinity,0],"speed":[0,1]},{"in":[0,Infinity],"speed":[0,0]}]);/* scroll effect */
$('#pamphletu6333').registerPositionScrollEffect([{"in":[-Infinity,-1.12],"speed":[0,1]},{"in":[-1.12,Infinity],"speed":[0,0]}]);/* scroll effect */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};
</script>
<script src="https://portalget.com/src/scripts/require.js?crc=7928878" type="text/javascript" async data-main="https://portalget.com/src/scripts/museconfig.js?crc=310584261" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();" ></script>