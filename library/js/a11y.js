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
;(function($) {
    $('.menu-item a').on('keydown', function(e) {
        // left key
        if (e.which === 37) {
            e.preventDefault()
            $(this)
                .parent()
                .prev()
                .children('a')
                .focus()
        }
        // right key
        else if (e.which === 39) {
            e.preventDefault()
            $(this)
                .parent()
                .next()
                .children('a')
                .focus()
        }
        // down key
        else if (e.which === 40) {
            e.preventDefault()
            if ($(this).next().length) {
                $(this)
                    .next()
                    .find('li:first-child a')
                    .first()
                    .focus()
            } else {
                $(this)
                    .parent()
                    .next()
                    .children('a')
                    .focus()
            }
        }
        // up key
        else if (e.which === 38) {
            e.preventDefault()
            if (
                $(this)
                    .parent()
                    .prev().length
            ) {
                $(this)
                    .parent()
                    .prev()
                    .children('a')
                    .focus()
            } else {
                $(this)
                    .parents('ul')
                    .first()
                    .prev('a')
                    .focus()
            }
        }
    })
})(jQuery)

// Aria Responsive Menu toggle
;(function($) {
    'use strict'
    // menu toggle (adjust for your responsive menu)
    $('.menu-toggle').on('click', function() {
        $('.primary-menu nav ul').toggle()
        var visible = $('.primary-menu nav ul').is(':visible')
        if (visible) {
            $(this)
                .addClass('open')
                .attr('aria-expanded', 'true')
        } else {
            $(this)
                .removeClass('open')
                .attr('aria-expanded', 'false')
        }
    })
})(jQuery)

// Skip Link script
;(function() {
    var is_webkit = navigator.userAgent.toLowerCase().indexOf('webkit') > -1,
        is_opera = navigator.userAgent.toLowerCase().indexOf('opera') > -1,
        is_ie = navigator.userAgent.toLowerCase().indexOf('msie') > -1

    if (
        (is_webkit || is_opera || is_ie) &&
        document.getElementById &&
        window.addEventListener
    ) {
        window.addEventListener(
            'hashchange',
            function() {
                var id = location.hash.substring(1),
                    element

                if (!/^[A-z0-9_-]+$/.test(id)) {
                    return
                }

                element = document.getElementById(id)

                if (element) {
                    if (
                        !/^(?:a|select|input|button|textarea)$/i.test(
                            element.tagName
                        )
                    ) {
                        element.tabIndex = -1
                    }

                    element.focus()
                }
            },
            false
        )
    }
})()

// Comment form script with ARIA labels and validation
/**
 * Handle submission of comment form. Checks field values before submitting.
 */

jQuery('document').ready(function($) {
    var commentForm = $('#commentform')
    /**
     * Add aria-live attribute so message errors appended to input fields will be read by assistive technology.
     */

    commentForm.attr('aria-live', 'polite')
    /**
     * Add a comment status region with role=status to provide feedback on errors or successes.
     * Set tabindex=-1 so that this container can receive focus.
     */
    commentForm.prepend(
        '<div id="comment-status" aria-live="assertive" role="status" tabindex="-1"></div>'
    )
    var statusdiv = $('#comment-status')
    var list
    $('a.comment-reply-link').click(function() {
        list = $(this)
            .parents('.comment')
            .attr('id')
    })

    commentForm.submit(function() {
        //serialize and store form data in a variable
        var formdata = commentForm.serialize()

        $('#commentform .plate-comment-error').remove()
        $('#commentform .plate-field-error').remove()
        var hasError = false
        /**
         * Find all form fields with aria-required=true to test values before submitting.
         * If error generated, print error.
         */
        $('#commentform [aria-required=true]').each(function() {
            var id = $(this).attr('id') + '-error'
            if ($.trim($(this).val()) == '') {
                var labelText = $(this)
                    .prev('label')
                    .html()
                // add aria-describedby with reference ID for error message.
                $(this).attr('aria-describedby', id)
                $(this)
                    .parent()
                    .append(
                        ' <span class="plate-field-error" id="' +
                            id +
                            '">' +
                            labelText +
                            ': ' +
                            plateComments.required +
                            '</span>'
                    )
                hasError = true
            }
            if (
                $(this).attr('name') == 'email' &&
                $.trim($(this).val()) != ''
            ) {
                var value = $(this).val()
                var valid = plateValidateEmail(value)
                if (!valid) {
                    $(this).attr('aria-describedby', id)
                    $(this)
                        .parent()
                        .append(
                            ' <span class="plate-field-error"id="' +
                                id +
                                '">' +
                                plateComments.emailInvalid +
                                '</span>'
                        )
                    hasError = true
                }
            }
        })

        /**
         * If an error is generated, return without submitting the form & set focus to status div.
         */
        if (hasError) {
            statusdiv
                .html(
                    '<p class="plate-comment-error">' +
                        plateComments.error +
                        '</p>'
                )
                .focus()
            return false
        }

        /**
         * If no field errors, notify user that message is processing.
         */
        statusdiv.html(
            '<p class="yourtheme-comment-processing">' +
                plateComments.processing +
                '</p>'
        )

        //Extract action URL from commentform
        var formurl = commentForm.attr('action')

        //Post Form with data
        $.ajax({
            type: 'post',
            url: formurl,
            data: formdata,
            dataType: 'json',
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                // [localize]
                statusdiv
                    .html(
                        '<p class="plate-comment-error">' +
                            plateComments.flood +
                            '</p>'
                    )
                    .focus()
            },
            success: function(data, textStatus) {
                var success = data.success
                var message = data.response
                var status = data.status
                if (success) {
                    /**
                     * Because the successful comment message includes a link, set focus to the message to give easy access to user.
                     */

                    statusdiv
                        .html(
                            '<p class="plate-comment-success" >' +
                                status +
                                '</p>'
                        )
                        .focus()
                    //alert(data);

                    if ($('#comments').has('ol.commentlist').length > 0) {
                        if (list != null) {
                            $('#' + list).prepend(message)
                        } else {
                            $('.commentlist').append(message)
                        }
                    } else {
                        $('#comments').append('<ol class="commentlist"></ol>')
                        $('ol.commentlist').html(message)
                    }
                    commentForm.find('textarea[name=comment]').val('')
                } else {
                    /**
                     * Set focus to error field so user can quickly tab forward into comment fields.
                     */
                    statusdiv
                        .html(
                            '<p class="plate-comment-error" >' + status + '</p>'
                        )
                        .focus()
                    commentForm.find('textarea[name=comment]').val('')
                }
            }
        })
        return false
    })

    /**
     * Function to validate email format.
     *
     * @param value Email address to test
     *
     * @return boolean
     */
    function plateValidateEmail(value) {
        var filter = /^([\w-\+.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/
        if (filter.test(value)) {
            return true
        } else {
            return false
        }
    }
})
