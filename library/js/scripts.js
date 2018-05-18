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

var cssua=function(n,l,p){var q=/\s*([\-\w ]+)[\s\/\:]([\d_]+\b(?:[\-\._\/]\w+)*)/,r=/([\w\-\.]+[\s\/][v]?[\d_]+\b(?:[\-\._\/]\w+)*)/g,s=/\b(?:(blackberry\w*|bb10)|(rim tablet os))(?:\/(\d+\.\d+(?:\.\w+)*))?/,t=/\bsilk-accelerated=true\b/,u=/\bfluidapp\b/,v=/(\bwindows\b|\bmacintosh\b|\blinux\b|\bunix\b)/,w=/(\bandroid\b|\bipad\b|\bipod\b|\bwindows phone\b|\bwpdesktop\b|\bxblwp7\b|\bzunewp7\b|\bwindows ce\b|\bblackberry\w*|\bbb10\b|\brim tablet os\b|\bmeego|\bwebos\b|\bpalm|\bsymbian|\bj2me\b|\bdocomo\b|\bpda\b|\bchtml\b|\bmidp\b|\bcldc\b|\w*?mobile\w*?|\w*?phone\w*?)/,
x=/(\bxbox\b|\bplaystation\b|\bnintendo\s+\w+)/,k={parse:function(b,d){var a={};d&&(a.standalone=d);b=(""+b).toLowerCase();if(!b)return a;for(var c,e,g=b.split(/[()]/),f=0,k=g.length;f<k;f++)if(f%2){var m=g[f].split(";");c=0;for(e=m.length;c<e;c++)if(q.exec(m[c])){var h=RegExp.$1.split(" ").join("_"),l=RegExp.$2;if(!a[h]||parseFloat(a[h])<parseFloat(l))a[h]=l}}else if(m=g[f].match(r))for(c=0,e=m.length;c<e;c++)h=m[c].split(/[\/\s]+/),h.length&&"mozilla"!==h[0]&&(a[h[0].split(" ").join("_")]=h.slice(1).join("-"));
w.exec(b)?(a.mobile=RegExp.$1,s.exec(b)&&(delete a[a.mobile],a.blackberry=a.version||RegExp.$3||RegExp.$2||RegExp.$1,RegExp.$1?a.mobile="blackberry":"0.0.1"===a.version&&(a.blackberry="7.1.0.0"))):x.exec(b)?(a.game=RegExp.$1,c=a.game.split(" ").join("_"),a.version&&!a[c]&&(a[c]=a.version)):v.exec(b)&&(a.desktop=RegExp.$1);a.intel_mac_os_x?(a.mac_os_x=a.intel_mac_os_x.split("_").join("."),delete a.intel_mac_os_x):a.cpu_iphone_os?(a.ios=a.cpu_iphone_os.split("_").join("."),delete a.cpu_iphone_os):a.cpu_os?
(a.ios=a.cpu_os.split("_").join("."),delete a.cpu_os):"iphone"!==a.mobile||a.ios||(a.ios="1");a.opera&&a.version?(a.opera=a.version,delete a.blackberry):t.exec(b)?a.silk_accelerated=!0:u.exec(b)&&(a.fluidapp=a.version);a.edge&&(delete a.applewebkit,delete a.safari,delete a.chrome,delete a.android);if(a.applewebkit)a.webkit=a.applewebkit,delete a.applewebkit,a.opr&&(a.opera=a.opr,delete a.opr,delete a.chrome),a.safari&&(a.chrome||a.crios||a.fxios||a.opera||a.silk||a.fluidapp||a.phantomjs||a.mobile&&
!a.ios?(delete a.safari,a.vivaldi&&delete a.chrome):a.safari=a.version&&!a.rim_tablet_os?a.version:{419:"2.0.4",417:"2.0.3",416:"2.0.2",412:"2.0",312:"1.3",125:"1.2",85:"1.0"}[parseInt(a.safari,10)]||a.safari);else if(a.msie||a.trident)if(a.opera||(a.ie=a.msie||a.rv),delete a.msie,delete a.android,a.windows_phone_os)a.windows_phone=a.windows_phone_os,delete a.windows_phone_os;else{if("wpdesktop"===a.mobile||"xblwp7"===a.mobile||"zunewp7"===a.mobile)a.mobile="windows desktop",a.windows_phone=9>+a.ie?
"7.0":10>+a.ie?"7.5":"8.0",delete a.windows_nt}else if(a.gecko||a.firefox)a.gecko=a.rv;a.rv&&delete a.rv;a.version&&delete a.version;return a},format:function(b){var d="",a;for(a in b)if(a&&b.hasOwnProperty(a)){var c=a,e=b[a],c=c.split(".").join("-"),g=" ua-"+c;if("string"===typeof e){for(var e=e.split(" ").join("_").split(".").join("-"),f=e.indexOf("-");0<f;)g+=" ua-"+c+"-"+e.substring(0,f),f=e.indexOf("-",f+1);g+=" ua-"+c+"-"+e}d+=g}return d},encode:function(b){var d="",a;for(a in b)a&&b.hasOwnProperty(a)&&
(d&&(d+="\x26"),d+=encodeURIComponent(a)+"\x3d"+encodeURIComponent(b[a]));return d}};k.userAgent=k.ua=k.parse(l,p);l=k.format(k.ua)+" js";n.className=n.className?n.className.replace(/\bno-js\b/g,"")+l:l.substr(1);return k}(document.documentElement,navigator.userAgent,navigator.standalone);


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

(function(a,b){a.fn.nearest=function(c){var d,g,f,e,h,i=b.querySelectorAll;function j(k){g=g?g.add(k):a(k)}this.each(function(){d=this;a.each(c.split(","),function(){e=a.trim(this);if(!e.indexOf("#")){j((i?b.querySelectorAll(e):a(e)))}else{h=d.parentNode;while(h){f=i?h.querySelectorAll(e):a(h).find(e);if(f.length){j(f);break}h=h.parentNode}}})});return g||a()}}(jQuery,document));



/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


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
function loadGravatars() {
    // set the viewport using the function above
    viewport = updateViewportDimensions();
    // if the viewport is tablet or larger, we load in the gravatars
    if (viewport.width >= 768) {
        jQuery('.comment img[data-gravatar]').each(function(){
            jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
        });
    }
} // end function


/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

    /*
    * Let's fire off the gravatar function
    * You can remove this if you don't need it
    */
    loadGravatars();

    viewport = updateViewportDimensions();

    if (viewport.width >= 768) {

    }

    // remove <p> tags around images everywhere
    $('p > img').unwrap();

}); /* end of as page load scripts */
