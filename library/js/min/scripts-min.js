/*------------------------------------
 * Theme: Plate by studio.bio 
 * File: Main theme scripts file
 * Author: Joshua Michaels
 * URI: https://studio.bio/themes/plate
 *------------------------------------
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
 * 
 * Added a few things back in from Template like the Detect User Agent
 * script and a few others that we use all the time. 
*/
/*---------------------------------------
* Detect User Agent Script
* http://cssuseragent.org
*----------------------------------------
* This is by far the best detection script I've found. 
* Using javascript means that this will work with caching. W00t.
*
* Adds user agent classes to the <html> element on your page including OS
* and browser version.
* 
* This script has support for about every device imaginable so if you
* want to create specific styles for a symbian browser, go to town. It
* has gotten me out of a few sticky situations.
*
* Used in combination with Browserstack: https://browserstack.com/
* will keep your clients happy.
* 
* If you don't need/want this, just remove it or comment it out.
* 
*/
/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions(){var e=window,i=document,o=i.documentElement,t=i.getElementsByTagName("body")[0],n,r;return{width:e.innerWidth||o.clientWidth||t.clientWidth,height:e.innerHeight||o.clientHeight||t.clientHeight}}
// setting the viewport width
/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *	// update the viewport, in case the window size has changed
 *	viewport = updateViewportDimensions();
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/
/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars(){
// set the viewport using the function above
// if the viewport is tablet or larger, we load in the gravatars
768<=(viewport=updateViewportDimensions()).width&&jQuery(".comment img[data-gravatar]").each(function(){jQuery(this).attr("src",jQuery(this).attr("data-gravatar"))})}// end function
/*
 * Put all your regular jQuery in here.
*/var cssua=function(e,i,o){var d=/\s*([\-\w ]+)[\s\/\:]([\d_]+\b(?:[\-\._\/]\w+)*)/,c=/([\w\-\.]+[\s\/][v]?[\d_]+\b(?:[\-\._\/]\w+)*)/g,u=/\b(?:(blackberry\w*|bb10)|(rim tablet os))(?:\/(\d+\.\d+(?:\.\w+)*))?/,m=/\bsilk-accelerated=true\b/,w=/\bfluidapp\b/,f=/(\bwindows\b|\bmacintosh\b|\blinux\b|\bunix\b)/,h=/(\bandroid\b|\bipad\b|\bipod\b|\bwindows phone\b|\bwpdesktop\b|\bxblwp7\b|\bzunewp7\b|\bwindows ce\b|\bblackberry\w*|\bbb10\b|\brim tablet os\b|\bmeego|\bwebos\b|\bpalm|\bsymbian|\bj2me\b|\bdocomo\b|\bpda\b|\bchtml\b|\bmidp\b|\bcldc\b|\w*?mobile\w*?|\w*?phone\w*?)/,_=/(\bxbox\b|\bplaystation\b|\bnintendo\s+\w+)/,t={parse:function(e,i){var o={};if(i&&(o.standalone=i),!(e=(""+e).toLowerCase()))return o;for(var t,n,r=e.split(/[()]/),a=0,s=r.length;a<s;a++)if(a%2){var l=r[a].split(";");for(t=0,n=l.length;t<n;t++)if(d.exec(l[t])){var p=RegExp.$1.split(" ").join("_"),b=RegExp.$2;(!o[p]||parseFloat(o[p])<parseFloat(b))&&(o[p]=b)}}else if(l=r[a].match(c))for(t=0,n=l.length;t<n;t++)(p=l[t].split(/[\/\s]+/)).length&&"mozilla"!==p[0]&&(o[p[0].split(" ").join("_")]=p.slice(1).join("-"));return h.exec(e)?(o.mobile=RegExp.$1,u.exec(e)&&(delete o[o.mobile],o.blackberry=o.version||RegExp.$3||RegExp.$2||RegExp.$1,RegExp.$1?o.mobile="blackberry":"0.0.1"===o.version&&(o.blackberry="7.1.0.0"))):_.exec(e)?(o.game=RegExp.$1,t=o.game.split(" ").join("_"),o.version&&!o[t]&&(o[t]=o.version)):f.exec(e)&&(o.desktop=RegExp.$1),o.intel_mac_os_x?(o.mac_os_x=o.intel_mac_os_x.split("_").join("."),delete o.intel_mac_os_x):o.cpu_iphone_os?(o.ios=o.cpu_iphone_os.split("_").join("."),delete o.cpu_iphone_os):o.cpu_os?(o.ios=o.cpu_os.split("_").join("."),delete o.cpu_os):"iphone"!==o.mobile||o.ios||(o.ios="1"),o.opera&&o.version?(o.opera=o.version,delete o.blackberry):m.exec(e)?o.silk_accelerated=!0:w.exec(e)&&(o.fluidapp=o.version),o.edge&&(delete o.applewebkit,delete o.safari,delete o.chrome,delete o.android),o.applewebkit?(o.webkit=o.applewebkit,delete o.applewebkit,o.opr&&(o.opera=o.opr,delete o.opr,delete o.chrome),o.safari&&(o.chrome||o.crios||o.fxios||o.opera||o.silk||o.fluidapp||o.phantomjs||o.mobile&&!o.ios?(delete o.safari,o.vivaldi&&delete o.chrome):o.safari=o.version&&!o.rim_tablet_os?o.version:{419:"2.0.4",417:"2.0.3",416:"2.0.2",412:"2.0",312:"1.3",125:"1.2",85:"1.0"}[parseInt(o.safari,10)]||o.safari)):o.msie||o.trident?(o.opera||(o.ie=o.msie||o.rv),delete o.msie,delete o.android,o.windows_phone_os?(o.windows_phone=o.windows_phone_os,delete o.windows_phone_os):"wpdesktop"!==o.mobile&&"xblwp7"!==o.mobile&&"zunewp7"!==o.mobile||(o.mobile="windows desktop",o.windows_phone=+o.ie<9?"7.0":+o.ie<10?"7.5":"8.0",delete o.windows_nt)):(o.gecko||o.firefox)&&(o.gecko=o.rv),o.rv&&delete o.rv,o.version&&delete o.version,o},format:function(e){var i="",o;for(o in e)if(o&&e.hasOwnProperty(o)){var t=o,n=e[o],t,r=" ua-"+(t=t.split(".").join("-"));if("string"==typeof n){for(var n,a=(n=n.split(" ").join("_").split(".").join("-")).indexOf("-");0<a;)r+=" ua-"+t+"-"+n.substring(0,a),a=n.indexOf("-",a+1);r+=" ua-"+t+"-"+n}i+=r}return i},encode:function(e){var i="",o;for(o in e)o&&e.hasOwnProperty(o)&&(i&&(i+="&"),i+=encodeURIComponent(o)+"="+encodeURIComponent(e[o]));return i}};return t.userAgent=t.ua=t.parse(i,o),i=t.format(t.ua)+" js",e.className=e.className?e.className.replace(/\bno-js\b/g,"")+i:i.substr(1),t}(document.documentElement,navigator.userAgent,navigator.standalone);
/*!------------------------------------------------------
 * jQuery nearest v1.0.3
 * http://github.com/jjenzz/jQuery.nearest
 * ------------------------------------------------------
 * Copyright (c) 2012 J. Smith (@jjenzz)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * Have you ever tried to find the nearest element down in
 * the DOM that wasn't a child? Then jQuery nearest is for you.
 * And it works traversing both up and down, finding...wait
 * for it...the nearest element. 
 * 
 * Like this: jQuery(this).nearest('.overlay');
 */
/*!------------------------------------------------------
 * jQuery nearest v1.0.3
 * http://github.com/jjenzz/jQuery.nearest
 * ------------------------------------------------------
 * Copyright (c) 2012 J. Smith (@jjenzz)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * Have you ever tried to find the nearest element down in
 * the DOM that wasn't a child? Then jQuery nearest is for you.
 * And it works traversing both up and down, finding...wait
 * for it...the nearest element. 
 * 
 * Like this: jQuery(this).nearest('.overlay');
 */
!function(l,p){l.fn.nearest=function(e){function i(e){t=t?t.add(e):l(e)}var o,t,n,r,a,s=p.querySelectorAll;return this.each(function(){o=this,l.each(e.split(","),function(){if((r=l.trim(this)).indexOf("#"))for(a=o.parentNode;a;){if((n=s?a.querySelectorAll(r):l(a).find(r)).length){i(n);break}a=a.parentNode}else i(s?p.querySelectorAll(r):l(r))})}),t||l()}}(jQuery,document);var viewport=updateViewportDimensions(),waitForFinalEvent=function(){var t={};return function(e,i,o){o||(o="Don't call this twice without a uniqueId"),t[o]&&clearTimeout(t[o]),t[o]=setTimeout(e,i)}}(),timeToWaitForLast=100;
/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/jQuery(document).ready(function(e){
/*
    * Let's fire off the gravatar function
    * You can remove this if you don't need it
    */
loadGravatars(),(viewport=updateViewportDimensions()).width,
// remove <p> tags around images everywhere
e("p > img").unwrap()});/* end of as page load scripts */