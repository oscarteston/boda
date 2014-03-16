// add your custom scripts here
// as the page loads, call these scripts
jQuery(function($) {
    //Check if the custom scroll is enabled or dissabled.
    var scrollstatus = $('html').data('scroll');

    var c_year = $('#countdown').data('c_year');
    var c_month = $('#countdown').data('c_month');
    var c_day = $('#countdown').data('c_day');
    var c_hour = $('#countdown').data('c_hour');

    $('#countdown').countdown({
        until: new Date(c_year, c_month - 1, c_day, c_hour)
    });

    // Options box Preview
    $('.hideboxoption').live('click', function() {
        $('.optionsbox').animate({
            right: '0'
        }, 700, function() {
            $('.hideboxoption').addClass('showboxoption').removeClass('hideboxoption');
        });

        $('.colitem').live('click', function() {
            var curcolor = $(this).data('color');
            var curlink = $(this).data('link');
            $.cookie('nuntacolor', curcolor, {
                path: '/'
            });

            $('#color1-css,#color2-css,#color3-css,#color4-css,#color5-css,#color6-css,#color7-css,#color8-css,#color9-css,#color10-css').remove();
            $('head').append('<link rel=\'stylesheet\' id=\'' + curcolor + '-css\'  href=\'' + curlink + '/css/preview/' + curcolor + '.css?ver=1.0\' type=\'text/css\' media=\'all\' />')

        });

        $('.bgitem').live('click', function() {
            var curbg = $(this).data('color');
            $.cookie('nuntabg', curbg, {
                path: '/'
            });

            $('body').css('background-color', curbg);
        });

        $('.patitem').live('click', function() {
            var curpat = $(this).data('pat');
            $.cookie('nuntapat', curpat, {
                path: '/'
            });

            $('body').removeClass('paty1 paty2 paty3 paty4 paty5 paty6 paty7 paty8 paty9 paty10');
            $('body').addClass(curpat);
        });
    });
    $('.showboxoption').live('click', function() {
        $('.optionsbox').animate({
            right: '-220px'
        }, 700, function() {
            $('.showboxoption').addClass('hideboxoption').removeClass('showboxoption');
        });
    });



    $('.coloreb593c').click(function() {
        $('head').append("<link rel='stylesheet' id='aletheme_color1'  href='" + sitelinkurl + "/wp-content/themes/nunta/css/preview/color1.css' type='text/css' media='all' />");
    });
    $('.color527578').click(function() {
        $('head').append("<link rel='stylesheet' id='aletheme_color2'  href='" + sitelinkurl + "/wp-content/themes/nunta/css/preview/color2.css' type='text/css' media='all' />");
    });
    $('.colorEBB035').click(function() {
        $('head').append("<link rel='stylesheet' id='aletheme_color3'  href='" + sitelinkurl + "/wp-content/themes/nunta/css/preview/color3.css' type='text/css' media='all' />");
    });
    $('.colorDD1E2F').click(function() {
        $('head').append("<link rel='stylesheet' id='aletheme_color4'  href='" + sitelinkurl + "/wp-content/themes/nunta/css/preview/color4.css' type='text/css' media='all' />");
    });
    $('.color218559').click(function() {
        $('head').append("<link rel='stylesheet' id='aletheme_color5'  href='" + sitelinkurl + "/wp-content/themes/nunta/css/preview/color5.css' type='text/css' media='all' />");
    });
    $('.color06A2CB').click(function() {
        $('head').append("<link rel='stylesheet' id='aletheme_color6'  href='" + sitelinkurl + "/wp-content/themes/nunta/css/preview/color6.css' type='text/css' media='all' />");
    });
    $('.color90CA77').click(function() {
        $('head').append("<link rel='stylesheet' id='aletheme_color7'  href='" + sitelinkurl + "/wp-content/themes/nunta/css/preview/color7.css' type='text/css' media='all' />");
    });
    $('.color9E3B33').click(function() {
        $('head').append("<link rel='stylesheet' id='aletheme_color8'  href='" + sitelinkurl + "/wp-content/themes/nunta/css/preview/color8.css' type='text/css' media='all' />");
    });
    $('.colorF3D5BD').click(function() {
        $('head').append("<link rel='stylesheet' id='aletheme_color9'  href='" + sitelinkurl + "/wp-content/themes/nunta/css/preview/color9.css' type='text/css' media='all' />");
    });
    $('.colorE48743').click(function() {
        $('head').append("<link rel='stylesheet' id='aletheme_color10'  href='" + sitelinkurl + "/wp-content/themes/nunta/css/preview/color10.css' type='text/css' media='all' />");
    });

    $('.pat1').live('click', function() {
        var colors = $('.pat1').data('color');
        $('body').css('background-color', '#' + colors);
    });
    $('.pat2').live('click', function() {
        var colors = $('.pat2').data('color');
        $('body').css('background-color', '#' + colors);
    });
    $('.pat3').click(function() {
        var colors = $('.pat3').data('color');
        $('body').css('background-color', '#' + colors);
    });
    $('.pat4').click(function() {
        var colors = $('.pat4').data('color');
        $('body').css('background-color', '#' + colors);
    });
    $('.pat5').click(function() {
        var colors = $('.pat5').data('color');
        $('body').css('background-color', '#' + colors);
    });
    $('.pat6').click(function() {
        var colors = $('.pat6').data('color');
        $('body').css('background-color', '#' + colors);
    });
    $('.pat7').click(function() {
        var colors = $('.pat7').data('color');
        $('body').css('background-color', '#' + colors);
    });
    $('.pat8').click(function() {
        var colors = $('.pat8').data('color');
        $('body').css('background-color', '#' + colors);
    });
    $('.pat9').click(function() {
        var colors = $('.pat9').data('color');
        $('body').css('background-color', '#' + colors);
    });
    $('.pat10').click(function() {
        var colors = $('.pat10').data('color');
        $('body').css('background-color', '#' + colors);
    });


    $('.postslider').flexslider({
        controlNav: false,
        animation: "slide"
    });


    //Scroll Comments
    $('.scrollbox').jScrollPane();

    //Select Navigation on Mobile Devices
    $('select.mobilemenu').change(function() {
        var url = $(this).val();
        if (url) {
            window.location = url;
        }
        return false;
    });


    $(window).resize(function() {

        //Scroll Comments
        $('.scrollbox').jScrollPane();

    });

    $(window).load(function() {

        if (jQuery.isFunction(jQuery.fn.isotope)) {
            //Filtering on Gallery pages

            // cache container
            var $container = $('#da-thumbs');
            // initialize isotope
            $container.isotope({});

            // filter items when filter link is clicked
            $('#filters a').click(function() {
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector
                });
                $('#filters li').removeClass('activefilter');
                $(this).parent().addClass('activefilter');
                return false;
            });
            $(window).smartresize(function() {
                $container.isotope({});
            });
        }

        $('.viewmore').live('click', function() {
            $(this).next().toggle(0);
        });
        $('.close').live('click', function() {
            $(this).parent().parent().toggle(0);
        });

        $(' #da-thumbs > li ').each(function() {
            $(this).hoverdir();
        });

        $('#ei-slider').eislideshow({
            animation: 'center',
            autoplay: true,
            slideshow_interval: 3000,
            titlesFactor: 0
        });

        if (scrollstatus == 'scroll') {

            // Main window scroll
            $("html").niceScroll({
                cursorcolor: "#000000",
                cursorborder: "1px solid transparent",
                horizrailenabled: false,
                cursoropacitymin: 0.1,
                cursoropacitymax: 0.6,
                cursorwidth: "7px",
                cursorborderradius: "10px"
            });
        }
    });


});

Modernizr.addTest('ipad', function() {
    return !!navigator.userAgent.match(/iPad/i);
});

Modernizr.addTest('iphone', function() {
    return !!navigator.userAgent.match(/iPhone/i);
});

Modernizr.addTest('ipod', function() {
    return !!navigator.userAgent.match(/iPod/i);
});

Modernizr.addTest('appleios', function() {
    return (Modernizr.ipad || Modernizr.ipod || Modernizr.iphone);
});

Modernizr.addTest('positionfixed', function() {
    var test = document.createElement('div'),
        control = test.cloneNode(false),
        fake = false,
        root = document.body || (function() {
            fake = true;
            return document.documentElement.appendChild(document.createElement('body'));
        }());

    var oldCssText = root.style.cssText;
    root.style.cssText = 'padding:0;margin:0';
    test.style.cssText = 'position:fixed;top:42px';
    root.appendChild(test);
    root.appendChild(control);

    var ret = test.offsetTop !== control.offsetTop;

    root.removeChild(test);
    root.removeChild(control);
    root.style.cssText = oldCssText;

    if (fake) {
        document.documentElement.removeChild(root);
    }

    /* Uh-oh. iOS would return a false positive here.
     * If it's about to return true, we'll explicitly test for known iOS User Agent strings.
     * "UA Sniffing is bad practice" you say. Agreeable, but sadly this feature has made it to
     * Modernizr's list of undectables, so we're reduced to having to use this. */
    return ret && !Modernizr.appleios;
});


// Modernizr.load loading the right scripts only if you need them
Modernizr.load([{
    // Let's see if we need to load selectivizr
    test: Modernizr.borderradius,
    // Modernizr.load loads selectivizr and Respond.js for IE6-8
    nope: [ale.template_dir + '/js/libs/selectivizr.min.js', ale.template_dir + '/js/libs/respond.min.js']
}, {
    test: Modernizr.touch,
    yep: ale.template_dir + '/css/touch.css'
}]);



jQuery(function($) {
    var is_single = $('#post').length;
    var posts = $('article.post');
    var is_mobile = parseInt(ale.is_mobile);

    var slider_settings = {
        animation: "slide",
        slideshow: false,
        controlNav: false
    }

    $(document).ajaxComplete(function() {
        try {
            if (!posts.length) {
                return;
            }
            FB.XFBML.parse();
            gapi.plusone.go();
            twttr.widgets.load();
            pin_load();
        } catch (ex) {}
    });

    // open external links in new window
    $("a[rel$=external]").each(function() {
        $(this).attr('target', '_blank');
    });

    $.fn.init_posts = function() {
        var init_post = function(data) {
            // close other posts
            data.post.siblings('.open-post').find('a.toggle').trigger('click', {
                hide: true
            });

            var loading = data.post.find('span.loading');

            if (data.more.is(':empty')) {
                data.post.addClass('post-loading');
                loading.css('visibility', 'visible');
                data.more.load(ale.ajax_load_url, {
                    'action': 'aletheme_load_post',
                    'id': data.post.data('post-id')
                }, function() {
                    loading.remove();
                    data.more.slideDown(400, function() {
                        data.post.addClass('open-post');
                        data.toggler.text('Hide Story');
                        $('.video', data.more).fitVids();
                        if (data.scroll) {
                            data.scroll.scrollTo('fast');
                        }
                    });
                    init_comments(data.post);
                    data.post.find('.scrollbox').jScrollPane();
                });
            } else {
                data.more.slideDown(400, function() {
                    data.post.addClass('open-post');
                    data.toggler.text('Hide Story');
                    if (data.scroll) {
                        data.scroll.scrollTo('fast');
                    }
                });
            }
        }

        var load_post = function(e, _opts) {
            e.preventDefault();
            var data = {
                toggler: $(this),
                scroll: false
            };
            var opts = $.extend({
                comments: false,
                hide: false,
                add_comment: false
            }, _opts);
            data.post = data.toggler.parents('article.post');
            data.more = data.post.find('.full');

            if (data.more.is(':visible')) {
                if (opts.hide == true) {
                    // quick hide for multiple posts
                    data.more.hide();
                } else {
                    data.more.slideUp(400);
                }
                data.toggler.text('Expand Story');
                data.post.removeClass('open-post');
            } else {
                if (typeof(e.originalEvent) != 'undefined') {
                    data.scroll = data.post;
                }
                init_post(data);
            }
        }

        var init_comments = function(post) {
            var respond = $('section.respond', post);
            var respond_form = $('form', respond);
            var respond_form_error = $('p.error', respond_form);
            //var respond_cancel = $('.cancel-comment-reply a', respond);
            var comments = $('section.comments', post);

            /*$('a.comment-reply-link', post).on('click', function(e){
                e.preventDefault();
                var comment = $(this).parents('li.comment');
                comment.find('>div').append(respond);
                respond_cancel.show();
                respond.find('input[name=comment_post_ID]').val(post.data('post-id'));
                respond.find('input[name=comment_parent]').val(comment.data('comment-id'));
                respond.find('input:first').focus();
            }).attr('onclick', '');

            respond_cancel.on('click', function(e){
                e.preventDefault();
                comments.after(respond);
                respond.find('input[name=comment_post_ID]').val(post.data('post-id'));
                respond.find('input[name=comment_parent]').val(0);
                $(this).hide();
            });
            */
            respond_form.ajaxForm({
                'beforeSubmit': function() {
                    respond_form_error.text('').hide();
                },
                'success': function(_data) {
                    var data = $.parseJSON(_data);
                    if (data.error) {
                        respond_form_error.html(data.msg).slideDown('fast');
                        return;
                    }
                    var comment_parent_id = respond.find('input[name=comment_parent]').val();
                    var _comment = $(data.html);
                    var list;
                    _comment.hide();

                    if (comment_parent_id == 0) {
                        list = comments.find('ol');
                        if (!list.length) {
                            list = $('<ol class="commentlist "></ol>');
                            comments.find('.scrollbox .jspContainer .jspPane').append(list);
                        }
                    } else {
                        list = $('#comment-' + comment_parent_id).parent().find('ul');
                        if (!list.length) {
                            list = $('<ul class="children"></ul>');
                            $('#comment-' + comment_parent_id).parent().append(list);
                        }
                        respond_cancel.trigger('click');
                    }
                    list.append(_comment);
                    _comment.fadeIn('fast');
                    //.scrollTo();

                    var pane2api = post.find('.scrollbox').data('jsp');
                    pane2api.reinitialise();
                    pane2api.scrollToElement(_comment.filter('li:last'));
                    $('.commenttextarea span.succes').html('Thank you for your comment!');

                    respond.find('textarea').clearFields();
                },
                'error': function(response) {
                    var error = response.responseText.match(/\<p\>(.*)<\/p\>/)[1];
                    if (typeof(error) == 'undefined') {
                        error = 'Something went wrong. Please reload the page and try again.';
                    }
                    respond_form_error.html(error).slideDown('fast');
                }
            });
        }
        $(this).each(function() {
            var post = $(this);
            // init post galleries 
            $(window).load(function() {
                $('.preview .flexslider', post).flexslider(slider_settings);
            });
            // do not init ajax posts & comments for mobile
            if (!is_mobile) {
                // ajax posts enabled
                if (ale.ajax_posts) {
                    $('a.toggle', post).click(load_post);
                    $('.video', post).fitVids();
                    $('.preview figure a', post).click(function(e) {
                        e.preventDefault();
                        $(this).parents('article.post').find('a.toggle').trigger('click');
                    });
                }
            }
        });
        // init ajax comments on a single post if ajax comments are enabled
        if (is_single && parseInt(ale.ajax_comments)) {
            init_comments(posts);
        }
        // open single post on page
        if (parseInt(ale.ajax_open_single) && !is_single && posts.length == 1) {
            posts.find('a.toggle').trigger('click');
        }
    }
    posts.init_posts();

    $.fn.init_gallery = function() {
        $(this).each(function() {
            var gallery = $(this);
            $(window).load(function() {
                $('.flexslider', gallery).flexslider(slider_settings);
            });

        })
    }
    $('#gallery').init_gallery();

    $.fn.init_archives = function() {
        $(this).each(function() {
            var archives = $(this);
            var year = $('#archives-active-year');
            var months = $('div.months div.year-months', archives);
            var arrows = $('a.up, a.down', archives);
            var activeMonth;
            var current, active;
            var animated = false;
            if (months.length == 1) {
                arrows.remove();
                activeMonth = months.filter(':first').addClass('year-active').show();
                year.text(activeMonth.attr('id').replace(/[^0-9]*/, ''));
                return;
            }
            arrows.click(function(e) {
                e.preventDefault();
                if (animated) {
                    return;
                }
                var fn = $(this);
                animated = true;
                arrows.css('visibility', 'visible');
                var current = months.filter('.year-active');
                if (fn.hasClass('up')) {
                    active = current.prev();
                    if (!active.length) {
                        active = months.filter(':last');
                    }
                } else {
                    active = current.next();
                    if (!active.length) {
                        active = months.filter(':first');
                    }
                }
                current.removeClass('year-active').fadeOut(150, function() {
                    active.addClass('year-active').fadeIn(150, function() {
                        animated = false;
                    });
                    year.text(active.attr('id').replace(/[^0-9]*/, ''));

                    if (fn.hasClass('up')) {
                        if (!active.prev().length) {
                            arrows.filter('.up').css('visibility', 'hidden');
                        }
                    } else {
                        if (!active.next().length) {
                            arrows.filter('.down').css('visibility', 'hidden');
                        }
                    }
                });
            });
            activeMonth = months.filter(':first').addClass('year-active').show();
            year.text(activeMonth.attr('id').replace(/[^0-9]*/, ''));
            arrows.filter('.up').css('visibility', 'hidden');
        });
    }
    $('#archives .ale-archives').init_archives();






});

// HTML5 Fallbacks for older browsers
jQuery(function($) {
    // check placeholder browser support
    if (!Modernizr.input.placeholder) {
        // set placeholder values
        $(this).find('[placeholder]').each(function() {
            $(this).val($(this).attr('placeholder'));
        });

        // focus and blur of placeholders
        $('[placeholder]').focus(function() {
            if ($(this).val() == $(this).attr('placeholder')) {
                $(this).val('');
                $(this).removeClass('placeholder');
            }
        }).blur(function() {
            if ($(this).val() == '' || $(this).val() == $(this).attr('placeholder')) {
                $(this).val($(this).attr('placeholder'));
                $(this).addClass('placeholder');
            }
        });

        // remove placeholders on submit
        $('[placeholder]').closest('form').submit(function() {
            $(this).find('[placeholder]').each(function() {
                if ($(this).val() == $(this).attr('placeholder')) {
                    $(this).val('');
                }
            });
        });
    }
});
