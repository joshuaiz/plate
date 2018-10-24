/*------------------------------------
 * Theme: Template by studio.bio 
 * File: Extra Scripts File
 * Author: Joshua Michaels
 * URI: https://studio.bio/template
 *------------------------------------
 *
 * This file contains a few scripts that you might use but we didn't 
 * want to weigh down the main scripts file hence they are extra. 
 *
 * To use these, copy what you need to the main scripts folder or 
 * conditionally load individual scripts on the page(s) you need.
*/


/*!
 * Retina.js v1.4.0
 *
 * Copyright 2016 Imulus, LLC
 * Released under the MIT license
 *
 * Retina.js is an open source script that makes it easy to serve
 * high-resolution images to devices with retina displays.
 * 
 * Commented out by default as WordPress now has retina support built-in using srcset.
 * Yet, even with WP retina support, this catches images not uploaded through
 * the Media Library. There is a newer version but this is the last 1.X
 * version which works better.
 * 
 * Just have a second image at twice the size as your regular image
 * with '@2x' in the file name and in the same directory and retina.js just works.
 * Example: image.jpg, image@2x.jpg.
 *
 * Works for images in your theme folder or served from an external site. Sweetness.
 * 
 */

!function(){function a(){}function b(a){return f.retinaImageSuffix+a}function c(a,c){if(this.path=a||"","undefined"!=typeof c&&null!==c)this.at_2x_path=c,this.perform_check=!1;else{if(void 0!==document.createElement){var d=document.createElement("a");d.href=this.path,d.pathname=d.pathname.replace(g,b),this.at_2x_path=d.href}else{var e=this.path.split("?");e[0]=e[0].replace(g,b),this.at_2x_path=e.join("?")}this.perform_check=!0}}function d(a){this.el=a,this.path=new c(this.el.getAttribute("src"),this.el.getAttribute("data-at2x"));var b=this;this.path.check_2x_variant(function(a){a&&b.swap()})}var e="undefined"==typeof exports?window:exports,f={retinaImageSuffix:"@2x",check_mime_type:!0,retinaImgTagSelector:"body img",force_original_dimensions:!0};e.Retina=a,a.configure=function(a){null===a&&(a={});for(var b in a)a.hasOwnProperty(b)&&(f[b]=a[b])},a.init=function(a){null===a&&(a=e),a.addEventListener("load",function(){var a,b,c=document.querySelectorAll(f.retinaImgTagSelector),e=[];for(a=0;a<c.length;a+=1)b=c[a],b.getAttributeNode("data-no-retina")||b.src&&e.push(new d(b))})},a.isRetina=function(){var a="(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-resolution: 1.5dppx)";return e.devicePixelRatio>1?!0:!(!e.matchMedia||!e.matchMedia(a).matches)};var g=/\.[\w\?=]+$/;e.RetinaImagePath=c,c.confirmed_paths=[],c.prototype.is_external=function(){return!(!this.path.match(/^(https?\:|\/\/)/i)||this.path.match("//"+document.domain))},c.prototype.check_2x_variant=function(a){var b,d=this;return this.perform_check||"undefined"==typeof this.at_2x_path||null===this.at_2x_path?this.at_2x_path in c.confirmed_paths?a(!0):this.is_external()?a(!1):(b=new XMLHttpRequest,b.open("HEAD",this.at_2x_path),b.onreadystatechange=function(){if(4!==b.readyState)return a(!1);if(b.status>=200&&b.status<=399){if(f.check_mime_type){var e=b.getResponseHeader("Content-Type");if(null===e||!e.match(/^image/i))return a(!1)}return c.confirmed_paths.push(d.at_2x_path),a(!0)}return a(!1)},b.send(),void 0):a(!0)},e.RetinaImage=d,d.prototype.swap=function(a){function b(){c.el.complete?(f.force_original_dimensions&&(0===c.el.offsetWidth&&0===c.el.offsetHeight?(c.el.setAttribute("width",c.el.naturalWidth),c.el.setAttribute("height",c.el.naturalHeight)):(c.el.setAttribute("width",c.el.offsetWidth),c.el.setAttribute("height",c.el.offsetHeight))),c.el.setAttribute("src",a)):setTimeout(b,5)}"undefined"==typeof a&&(a=this.path.at_2x_path);var c=this;b()},a.isRetina()&&a.init(e)}();


/*!
 * rellax.js v1.0.0 (https://github.com/dixonandmoe/rellax)
 * 
 * This is a super lightweight and easy-to-use parallax script so check it out.
 * 
 */
(function(g,d){"function"===typeof define&&define.amd?define([],d):"object"===typeof module&&module.exports?module.exports=d():g.Rellax=d()})(this,function(){var g=function(d,l){var b=Object.create(g.prototype),h=0,p=0,k=0,q=0,f=[],t=!1,y=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.msRequestAnimationFrame||window.oRequestAnimationFrame||function(a){setTimeout(a,1E3/60)},z=window.transformProp||function(){var a=document.createElement("div");if(null==a.style.transform){var c=["Webkit","Moz","ms"],b;for(b in c)if(void 0!==a.style[c[b]+"Transform"])return c[b]+"Transform"}return"transform"}(),r=function(a,b,e){return a<=b?b:a>=e?e:a};b.options={speed:-2,center:!1,round:!0,vertical:!0,horizontal:!1,callback:function(){}};l&&Object.keys(l).forEach(function(a){b.options[a]=l[a]});b.options.speed=r(b.options.speed,-10,10);d||(d=".rellax");var u=document.querySelectorAll(d);if(0<u.length)b.elems=u;else throw Error("The elements you're trying to select don't exist.");var A=function(a){var c=a.getAttribute("data-rellax-percentage"),e=a.getAttribute("data-rellax-speed"),f=a.getAttribute("data-rellax-zindex")||0,d=b.options.vertical?c||b.options.center?window.pageYOffset||document.documentElement.scrollTop||document.body.scrollTop:0:0,m=b.options.horizontal?c||b.options.center?window.pageXOffset||document.documentElement.scrollLeft||document.body.scrollLeft:0:0,g=d+a.getBoundingClientRect().top,h=a.clientHeight||a.offsetHeight||a.scrollHeight,k=m+a.getBoundingClientRect().left, l=a.clientWidth||a.offsetWidth||a.scrollWidth;d=c?c:(d-g+p)/(h+p);var n=c?c:(m-k+q)/(l+q);b.options.center&&(d=n=.5);m=e?r(e,-10,10):b.options.speed;if(c||b.options.center)m=r(e||b.options.speed,-5,5);c=v(n,d,m);a=a.style.cssText;e="";0<=a.indexOf("transform")&&(e=a.indexOf("transform"),e=a.slice(e),e=(d=e.indexOf(";"))?" "+e.slice(11,d).replace(/\s/g,""):" "+e.slice(11).replace(/\s/g,""));return{baseX:c.x,baseY:c.y,top:g,left:k,height:h,width:l,speed:m,style:a,transform:e,zindex:f}},w=function(){var a= h,c=k;h=void 0!==window.pageYOffset?window.pageYOffset:(document.documentElement||document.body.parentNode||document.body).scrollTop;k=void 0!==window.pageXOffset?window.pageXOffset:(document.documentElement||document.body.parentNode||document.body).scrollLeft;return a!=h&&b.options.vertical||c!=k&&b.options.horizontal?!0:!1},v=function(a,c,e){var d={};a=100*e*(1-a);c=100*e*(1-c);d.x=b.options.round?Math.round(a):Math.round(100*a)/100;d.y=b.options.round?Math.round(c):Math.round(100*c)/100;return d}, x=function(){w()&&!1===t&&n();y(x)},n=function(){for(var a=0;a<b.elems.length;a++){var c=v((k-f[a].left+q)/(f[a].width+q),(h-f[a].top+p)/(f[a].height+p),f[a].speed),e=c.y-f[a].baseY,d=c.x-f[a].baseX;b.elems[a].style[z]="translate3d("+(b.options.horizontal?d:"0")+"px,"+(b.options.vertical?e:"0")+"px,"+f[a].zindex+"px) "+f[a].transform}b.options.callback(c)};b.destroy=function(){for(var a=0;a<b.elems.length;a++)b.elems[a].style.cssText=f[a].style;t=!0};(function(){p=window.innerHeight;q=window.innerWidth;w();for(var a=0;a<b.elems.length;a++){var c=A(b.elems[a]);f.push(c)}window.addEventListener("resize",function(){n()});x();n()})();return b};return g});