/*------------------------------------
 * Theme: Plate by studio.bio
 * File: Accessibility (a11y) scripts file
 * Author: Joshua Michaels
 * URI: https://studio.bio/themes/plate
 *------------------------------------
 *
 * Accessibility should be a priority in your theme. These
 * scripts shouldn't impede your development but will set some
 * good foundations down for a11y.
 *
 * Check here for some patterns, many of which are included here:
 * https://github.com/wpaccessibility/a11ythemepatterns
 *
 */
// menu navigation with arrow keys
!function(t){t(".menu-item a").on("keydown",function(e){
// left key
37===e.which?(e.preventDefault(),t(this).parent().prev().children("a").focus()):39===e.which?(e.preventDefault(),t(this).parent().next().children("a").focus()):40===e.which?(e.preventDefault(),t(this).next().length?t(this).next().find("li:first-child a").first().focus():t(this).parent().next().children("a").focus()):38===e.which&&(e.preventDefault(),t(this).parent().prev().length?t(this).parent().prev().children("a").focus():t(this).parents("ul").first().prev("a").focus())})}(jQuery),function(t){"use strict";
// menu toggle (adjust for your responsive menu)
t(".menu-toggle").on("click",function(){var e;t(".primary-menu nav ul").toggle(),t(".primary-menu nav ul").is(":visible")?t(this).addClass("open").attr("aria-expanded","true"):t(this).removeClass("open").attr("aria-expanded","false")})}(jQuery),function(){var e=-1<navigator.userAgent.toLowerCase().indexOf("webkit"),t=-1<navigator.userAgent.toLowerCase().indexOf("opera"),a=-1<navigator.userAgent.toLowerCase().indexOf("msie");(e||t||a)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var e=location.hash.substring(1),t;/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1)}(),
// Comment form script with ARIA labels and validation
/**
 * Handle submission of comment form. Checks field values before submitting.
 */
jQuery("document").ready(function(s){
/**
     * Function to validate email format.
     *
     * @param value Email address to test
     *
     * @return boolean
     */
function i(e){var t;return!!/^([\w-\+.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(e)}var o=s("#commentform")
/**
     * Add aria-live attribute so message errors appended to input fields will be read by assistive technology.
     */;o.attr("aria-live","polite")
/**
     * Add a comment status region with role=status to provide feedback on errors or successes.
     * Set tabindex=-1 so that this container can receive focus.
     */,o.prepend('<div id="comment-status" aria-live="assertive" role="status" tabindex="-1"></div>');var m=s("#comment-status"),l;s("a.comment-reply-link").click(function(){l=s(this).parents(".comment").attr("id")}),o.submit(function(){
//serialize and store form data in a variable
var e=o.serialize();s("#commentform .plate-comment-error").remove(),s("#commentform .plate-field-error").remove();var r=!1
/**
         * Find all form fields with aria-required=true to test values before submitting.
         * If error generated, print error.
         */;
/**
         * If an error is generated, return without submitting the form & set focus to status div.
         */
if(s("#commentform [aria-required=true]").each(function(){var e=s(this).attr("id")+"-error",t,a;if(""==s.trim(s(this).val())){var n=s(this).prev("label").html();
// add aria-describedby with reference ID for error message.
s(this).attr("aria-describedby",e),s(this).parent().append(' <span class="plate-field-error" id="'+e+'">'+n+": "+plateComments.required+"</span>"),r=!0}"email"==s(this).attr("name")&&""!=s.trim(s(this).val())&&(i(s(this).val())||(s(this).attr("aria-describedby",e),s(this).parent().append(' <span class="plate-field-error"id="'+e+'">'+plateComments.emailInvalid+"</span>"),r=!0))}),r)return m.html('<p class="plate-comment-error">'+plateComments.error+"</p>").focus(),!1;
/**
         * If no field errors, notify user that message is processing.
         */m.html('<p class="yourtheme-comment-processing">'+plateComments.processing+"</p>");
//Extract action URL from commentform
var t=o.attr("action");
//Post Form with data
return s.ajax({type:"post",url:t,data:e,dataType:"json",error:function(e,t,a){
// [localize]
m.html('<p class="plate-comment-error">'+plateComments.flood+"</p>").focus()},success:function(e,t){var a=e.success,n=e.response,r=e.status;a?(
/**
                     * Because the successful comment message includes a link, set focus to the message to give easy access to user.
                     */
m.html('<p class="plate-comment-success" >'+r+"</p>").focus(),
//alert(data);
0<s("#comments").has("ol.commentlist").length?null!=l?s("#"+l).prepend(n):s(".commentlist").append(n):(s("#comments").append('<ol class="commentlist"></ol>'),s("ol.commentlist").html(n))):
/**
                     * Set focus to error field so user can quickly tab forward into comment fields.
                     */
m.html('<p class="plate-comment-error" >'+r+"</p>").focus(),o.find("textarea[name=comment]").val("")}}),!1})});
// Aria Responsive Menu toggle