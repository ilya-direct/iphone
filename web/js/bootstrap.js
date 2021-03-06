/*!
 * Bootstrap v3.3.4 (http://getbootstrap.com)
 */
if ("undefined" == typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");
+function (t) {
    "use strict";
    var e = t.fn.jquery.split(" ")[0].split(".");
    if (e[0] < 2 && e[1] < 9 || 1 == e[0] && 9 == e[1] && e[2] < 1)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher")
}(jQuery), +function (t) {
    "use strict";
    function e(e) {
        return this.each(function () {
            var i = t(this), n = i.data("bs.tooltip"), s = "object" == typeof e && e;
            (n || !/destroy|hide/.test(e)) && (n || i.data("bs.tooltip", n = new o(this, s)), "string" == typeof e && n[e]())
        })
    }

    var o = function (t, e) {
        this.type = null, this.options = null, this.enabled = null, this.timeout = null, this.hoverState = null, this.$element = null, this.init("tooltip", t, e)
    };
    o.VERSION = "3.3.4", o.TRANSITION_DURATION = 150, o.DEFAULTS = {animation: !0, placement: "top", selector: !1, template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>', trigger: "hover focus", title: "", delay: 0, html: !1, container: !1, viewport: {selector: "body", padding: 0}}, o.prototype.init = function (e, o, i) {
        if (this.enabled = !0, this.type = e, this.$element = t(o), this.options = this.getOptions(i), this.$viewport = this.options.viewport && t(this.options.viewport.selector || this.options.viewport), this.$element[0]instanceof document.constructor && !this.options.selector)throw new Error("`selector` option must be specified when initializing " + this.type + " on the window.document object!");
        for (var n = this.options.trigger.split(" "), s = n.length; s--;) {
            var r = n[s];
            if ("click" == r)this.$element.on("click." + this.type, this.options.selector, t.proxy(this.toggle, this)); else if ("manual" != r) {
                var p = "hover" == r ? "mouseenter" : "focusin", a = "hover" == r ? "mouseleave" : "focusout";
                this.$element.on(p + "." + this.type, this.options.selector, t.proxy(this.enter, this)), this.$element.on(a + "." + this.type, this.options.selector, t.proxy(this.leave, this))
            }
        }
        this.options.selector ? this._options = t.extend({}, this.options, {trigger: "manual", selector: ""}) : this.fixTitle()
    }, o.prototype.getDefaults = function () {
        return o.DEFAULTS
    }, o.prototype.getOptions = function (e) {
        return e = t.extend({}, this.getDefaults(), this.$element.data(), e), e.delay && "number" == typeof e.delay && (e.delay = {show: e.delay, hide: e.delay}), e
    }, o.prototype.getDelegateOptions = function () {
        var e = {}, o = this.getDefaults();
        return this._options && t.each(this._options, function (t, i) {
            o[t] != i && (e[t] = i)
        }), e
    }, o.prototype.enter = function (e) {
        var o = e instanceof this.constructor ? e : t(e.currentTarget).data("bs." + this.type);
        return o && o.$tip && o.$tip.is(":visible") ? void(o.hoverState = "in") : (o || (o = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, o)), clearTimeout(o.timeout), o.hoverState = "in", o.options.delay && o.options.delay.show ? void(o.timeout = setTimeout(function () {
            "in" == o.hoverState && o.show()
        }, o.options.delay.show)) : o.show())
    }, o.prototype.leave = function (e) {
        var o = e instanceof this.constructor ? e : t(e.currentTarget).data("bs." + this.type);
        return o || (o = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, o)), clearTimeout(o.timeout), o.hoverState = "out", o.options.delay && o.options.delay.hide ? void(o.timeout = setTimeout(function () {
            "out" == o.hoverState && o.hide()
        }, o.options.delay.hide)) : o.hide()
    }, o.prototype.show = function () {
        var e = t.Event("show.bs." + this.type);
        if (this.hasContent() && this.enabled) {
            this.$element.trigger(e);
            var i = t.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]);
            if (e.isDefaultPrevented() || !i)return;
            var n = this, s = this.tip(), r = this.getUID(this.type);
            this.setContent(), s.attr("id", r), this.$element.attr("aria-describedby", r), this.options.animation && s.addClass("fade");
            var p = "function" == typeof this.options.placement ? this.options.placement.call(this, s[0], this.$element[0]) : this.options.placement, a = /\s?auto?\s?/i, l = a.test(p);
            l && (p = p.replace(a, "") || "top"), s.detach().css({top: 0, left: 0, display: "block"}).addClass(p).data("bs." + this.type, this), this.options.container ? s.appendTo(this.options.container) : s.insertAfter(this.$element);
            var h = this.getPosition(), f = s[0].offsetWidth, c = s[0].offsetHeight;
            if (l) {
                var u = p, d = this.options.container ? t(this.options.container) : this.$element.parent(), v = this.getPosition(d);
                p = "bottom" == p && h.bottom + c > v.bottom ? "top" : "top" == p && h.top - c < v.top ? "bottom" : "right" == p && h.right + f > v.width ? "left" : "left" == p && h.left - f < v.left ? "right" : p, s.removeClass(u).addClass(p)
            }
            var g = this.getCalculatedOffset(p, h, f, c);
            this.applyPlacement(g, p);
            var y = function () {
                var t = n.hoverState;
                n.$element.trigger("shown.bs." + n.type), n.hoverState = null, "out" == t && n.leave(n)
            };
            t.support.transition && this.$tip.hasClass("fade") ? s.one("bsTransitionEnd", y).emulateTransitionEnd(o.TRANSITION_DURATION) : y()
        }
    }, o.prototype.applyPlacement = function (e, o) {
        var i = this.tip(), n = i[0].offsetWidth, s = i[0].offsetHeight, r = parseInt(i.css("margin-top"), 10), p = parseInt(i.css("margin-left"), 10);
        isNaN(r) && (r = 0), isNaN(p) && (p = 0), e.top = e.top + r, e.left = e.left + p, t.offset.setOffset(i[0], t.extend({using: function (t) {
            i.css({top: Math.round(t.top), left: Math.round(t.left)})
        }}, e), 0), i.addClass("in");
        var a = i[0].offsetWidth, l = i[0].offsetHeight;
        "top" == o && l != s && (e.top = e.top + s - l);
        var h = this.getViewportAdjustedDelta(o, e, a, l);
        h.left ? e.left += h.left : e.top += h.top;
        var f = /top|bottom/.test(o), c = f ? 2 * h.left - n + a : 2 * h.top - s + l, u = f ? "offsetWidth" : "offsetHeight";
        i.offset(e), this.replaceArrow(c, i[0][u], f)
    }, o.prototype.replaceArrow = function (t, e, o) {
        this.arrow().css(o ? "left" : "top", 50 * (1 - t / e) + "%").css(o ? "top" : "left", "")
    }, o.prototype.setContent = function () {
        var t = this.tip(), e = this.getTitle();
        t.find(".tooltip-inner")[this.options.html ? "html" : "text"](e), t.removeClass("fade in top bottom left right")
    }, o.prototype.hide = function (e) {
        function i() {
            "in" != n.hoverState && s.detach(), n.$element.removeAttr("aria-describedby").trigger("hidden.bs." + n.type), e && e()
        }

        var n = this, s = t(this.$tip), r = t.Event("hide.bs." + this.type);
        return this.$element.trigger(r), r.isDefaultPrevented() ? void 0 : (s.removeClass("in"), t.support.transition && s.hasClass("fade") ? s.one("bsTransitionEnd", i).emulateTransitionEnd(o.TRANSITION_DURATION) : i(), this.hoverState = null, this)
    }, o.prototype.fixTitle = function () {
        var t = this.$element;
        (t.attr("title") || "string" != typeof t.attr("data-original-title")) && t.attr("data-original-title", t.attr("title") || "").attr("title", "")
    }, o.prototype.hasContent = function () {
        return this.getTitle()
    }, o.prototype.getPosition = function (e) {
        e = e || this.$element;
        var o = e[0], i = "BODY" == o.tagName, n = o.getBoundingClientRect();
        null == n.width && (n = t.extend({}, n, {width: n.right - n.left, height: n.bottom - n.top}));
        var s = i ? {top: 0, left: 0} : e.offset(), r = {scroll: i ? document.documentElement.scrollTop || document.body.scrollTop : e.scrollTop()}, p = i ? {width: t(window).width(), height: t(window).height()} : null;
        return t.extend({}, n, r, p, s)
    }, o.prototype.getCalculatedOffset = function (t, e, o, i) {
        return"bottom" == t ? {top: e.top + e.height, left: e.left + e.width / 2 - o / 2} : "top" == t ? {top: e.top - i, left: e.left + e.width / 2 - o / 2} : "left" == t ? {top: e.top + e.height / 2 - i / 2, left: e.left - o} : {top: e.top + e.height / 2 - i / 2, left: e.left + e.width}
    }, o.prototype.getViewportAdjustedDelta = function (t, e, o, i) {
        var n = {top: 0, left: 0};
        if (!this.$viewport)return n;
        var s = this.options.viewport && this.options.viewport.padding || 0, r = this.getPosition(this.$viewport);
        if (/right|left/.test(t)) {
            var p = e.top - s - r.scroll, a = e.top + s - r.scroll + i;
            p < r.top ? n.top = r.top - p : a > r.top + r.height && (n.top = r.top + r.height - a)
        } else {
            var l = e.left - s, h = e.left + s + o;
            l < r.left ? n.left = r.left - l : h > r.width && (n.left = r.left + r.width - h)
        }
        return n
    }, o.prototype.getTitle = function () {
        var t, e = this.$element, o = this.options;
        return t = e.attr("data-original-title") || ("function" == typeof o.title ? o.title.call(e[0]) : o.title)
    }, o.prototype.getUID = function (t) {
        do t += ~~(1e6 * Math.random()); while (document.getElementById(t));
        return t
    }, o.prototype.tip = function () {
        return this.$tip = this.$tip || t(this.options.template)
    }, o.prototype.arrow = function () {
        return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow")
    }, o.prototype.enable = function () {
        this.enabled = !0
    }, o.prototype.disable = function () {
        this.enabled = !1
    }, o.prototype.toggleEnabled = function () {
        this.enabled = !this.enabled
    }, o.prototype.toggle = function (e) {
        var o = this;
        e && (o = t(e.currentTarget).data("bs." + this.type), o || (o = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, o))), o.tip().hasClass("in") ? o.leave(o) : o.enter(o)
    }, o.prototype.destroy = function () {
        var t = this;
        clearTimeout(this.timeout), this.hide(function () {
            t.$element.off("." + t.type).removeData("bs." + t.type)
        })
    };
    var i = t.fn.tooltip;
    t.fn.tooltip = e, t.fn.tooltip.Constructor = o, t.fn.tooltip.noConflict = function () {
        return t.fn.tooltip = i, this
    }
}(jQuery), +function (t) {
    "use strict";
    function e(e) {
        return this.each(function () {
            var i = t(this), n = i.data("bs.popover"), s = "object" == typeof e && e;
            (n || !/destroy|hide/.test(e)) && (n || i.data("bs.popover", n = new o(this, s)), "string" == typeof e && n[e]())
        })
    }

    var o = function (t, e) {
        this.init("popover", t, e)
    };
    if (!t.fn.tooltip)throw new Error("Popover requires tooltip.js");
    o.VERSION = "3.3.4", o.DEFAULTS = t.extend({}, t.fn.tooltip.Constructor.DEFAULTS, {placement: "right", trigger: "click", content: "", template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'}), o.prototype = t.extend({}, t.fn.tooltip.Constructor.prototype), o.prototype.constructor = o, o.prototype.getDefaults = function () {
        return o.DEFAULTS
    }, o.prototype.setContent = function () {
        var t = this.tip(), e = this.getTitle(), o = this.getContent();
        t.find(".popover-title")[this.options.html ? "html" : "text"](e), t.find(".popover-content").children().detach().end()[this.options.html ? "string" == typeof o ? "html" : "append" : "text"](o), t.removeClass("fade top bottom left right in"), t.find(".popover-title").html() || t.find(".popover-title").hide()
    }, o.prototype.hasContent = function () {
        return this.getTitle() || this.getContent()
    }, o.prototype.getContent = function () {
        var t = this.$element, e = this.options;
        return t.attr("data-content") || ("function" == typeof e.content ? e.content.call(t[0]) : e.content)
    }, o.prototype.arrow = function () {
        return this.$arrow = this.$arrow || this.tip().find(".arrow")
    };
    var i = t.fn.popover;
    t.fn.popover = e, t.fn.popover.Constructor = o, t.fn.popover.noConflict = function () {
        return t.fn.popover = i, this
    }
}(jQuery);
!function (e, t, i, o) {
    var n = e(t);
    e.fn.lazyload = function (r) {
        function f() {
            var t = 0;
            l.each(function () {
                var i = e(this);
                if (!h.skip_invisible || i.is(":visible"))if (e.abovethetop(this, h) || e.leftofbegin(this, h)); else if (e.belowthefold(this, h) || e.rightoffold(this, h)) {
                    if (++t > h.failure_limit)return!1
                } else i.trigger("appear"), t = 0
            })
        }

        var a, l = this, h = {threshold: 0, failure_limit: 0, event: "scroll", effect: "show", container: t, data_attribute: "original", skip_invisible: !1, appear: null, load: null, placeholder: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"};
        return r && (o !== r.failurelimit && (r.failure_limit = r.failurelimit, delete r.failurelimit), o !== r.effectspeed && (r.effect_speed = r.effectspeed, delete r.effectspeed), e.extend(h, r)), a = h.container === o || h.container === t ? n : e(h.container), 0 === h.event.indexOf("scroll") && a.bind(h.event, function () {
            return f()
        }), this.each(function () {
            var t = this, i = e(t);
            t.loaded = !1, (i.attr("src") === o || i.attr("src") === !1) && i.is("img") && i.attr("src", h.placeholder), i.one("appear", function () {
                if (!this.loaded) {
                    if (h.appear) {
                        var o = l.length;
                        h.appear.call(t, o, h)
                    }
                    e("<img />").bind("load",function () {
                        var o = i.attr("data-" + h.data_attribute);
                        i.hide(), i.is("img") ? i.attr("src", o) : i.css("background-image", "url('" + o + "')"), i[h.effect](h.effect_speed), t.loaded = !0;
                        var n = e.grep(l, function (e) {
                            return!e.loaded
                        });
                        if (l = e(n), h.load) {
                            var r = l.length;
                            h.load.call(t, r, h)
                        }
                    }).attr("src", i.attr("data-" + h.data_attribute))
                }
            }), 0 !== h.event.indexOf("scroll") && i.bind(h.event, function () {
                t.loaded || i.trigger("appear")
            })
        }), n.bind("resize", function () {
            f()
        }), /(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion) && n.bind("pageshow", function (t) {
            t.originalEvent && t.originalEvent.persisted && l.each(function () {
                e(this).trigger("appear")
            })
        }), e(i).ready(function () {
            f()
        }), this
    }, e.belowthefold = function (i, r) {
        var f;
        return f = r.container === o || r.container === t ? (t.innerHeight ? t.innerHeight : n.height()) + n.scrollTop() : e(r.container).offset().top + e(r.container).height(), f <= e(i).offset().top - r.threshold
    }, e.rightoffold = function (i, r) {
        var f;
        return f = r.container === o || r.container === t ? n.width() + n.scrollLeft() : e(r.container).offset().left + e(r.container).width(), f <= e(i).offset().left - r.threshold
    }, e.abovethetop = function (i, r) {
        var f;
        return f = r.container === o || r.container === t ? n.scrollTop() : e(r.container).offset().top, f >= e(i).offset().top + r.threshold + e(i).height()
    }, e.leftofbegin = function (i, r) {
        var f;
        return f = r.container === o || r.container === t ? n.scrollLeft() : e(r.container).offset().left, f >= e(i).offset().left + r.threshold + e(i).width()
    }, e.inviewport = function (t, i) {
        return!(e.rightoffold(t, i) || e.leftofbegin(t, i) || e.belowthefold(t, i) || e.abovethetop(t, i))
    }, e.extend(e.expr[":"], {"below-the-fold": function (t) {
        return e.belowthefold(t, {threshold: 0})
    }, "above-the-top": function (t) {
        return!e.belowthefold(t, {threshold: 0})
    }, "right-of-screen": function (t) {
        return e.rightoffold(t, {threshold: 0})
    }, "left-of-screen": function (t) {
        return!e.rightoffold(t, {threshold: 0})
    }, "in-viewport": function (t) {
        return e.inviewport(t, {threshold: 0})
    }, "above-the-fold": function (t) {
        return!e.belowthefold(t, {threshold: 0})
    }, "right-of-fold": function (t) {
        return e.rightoffold(t, {threshold: 0})
    }, "left-of-fold": function (t) {
        return!e.rightoffold(t, {threshold: 0})
    }})
}(jQuery, window, document);
;
(function ($) {
    var defaults = {topSpacing: 0, bottomSpacing: 0, className: 'is-sticky', wrapperClassName: 'sticky-wrapper', center: false, getWidthFrom: ''}, $window = $(window), $document = $(document), sticked = [], windowHeight = $window.height(), scroller = function () {
        var scrollTop = $window.scrollTop(), documentHeight = $document.height(), dwh = documentHeight - windowHeight, extra = (scrollTop > dwh) ? dwh - scrollTop : 0;
        for (var i = 0; i < sticked.length; i++) {
            var s = sticked[i], elementTop = s.stickyWrapper.offset().top, etse = elementTop - s.topSpacing - extra;
            if (scrollTop <= etse) {
                if (s.currentTop !== null) {
                    s.stickyElement.css('position', '').css('top', '');
                    s.stickyElement.parent().removeClass(s.className);
                    s.currentTop = null;
                }
            }
            else {
                var newTop = documentHeight - s.stickyElement.outerHeight()
                    - s.topSpacing - s.bottomSpacing - scrollTop - extra;
                if (newTop < 0) {
                    newTop = newTop + s.topSpacing;
                } else {
                    newTop = s.topSpacing;
                }
                if (s.currentTop != newTop) {
                    s.stickyElement.css('position', 'fixed').css('top', newTop);
                    if (typeof s.getWidthFrom !== 'undefined') {
                        s.stickyElement.css('width', $(s.getWidthFrom).width());
                    }
                    s.stickyElement.parent().addClass(s.className);
                    s.currentTop = newTop;
                }
            }
        }
    }, resizer = function () {
        windowHeight = $window.height();
        for (var i = 0; i < sticked.length; i++) {
            sticked[i].stickyWrapper.css('height', sticked[i].stickyElement.outerHeight());
        }
    }, methods = {init: function (options) {
        var o = $.extend(defaults, options);
        return this.each(function () {
            var stickyElement = $(this);
            var stickyId = stickyElement.attr('id');
            var wrapper = $('<div></div>').attr('id', stickyId + '-sticky-wrapper').addClass(o.wrapperClassName);
            stickyElement.wrapAll(wrapper);
            if (o.center) {
                stickyElement.parent().css({width: stickyElement.outerWidth(), marginLeft: "auto", marginRight: "auto"});
            }
            if (stickyElement.css("float") == "right") {
                stickyElement.css({"float": "none"}).parent().css({"float": "right"});
            }
            var stickyWrapper = stickyElement.parent();
            stickyWrapper.css('height', stickyElement.outerHeight());
            sticked.push({topSpacing: o.topSpacing, bottomSpacing: o.bottomSpacing, stickyElement: stickyElement, currentTop: null, stickyWrapper: stickyWrapper, className: o.className, getWidthFrom: o.getWidthFrom});
        });
    }, update: scroller};
    if (window.addEventListener) {
        window.addEventListener('scroll', scroller, false);
        window.addEventListener('resize', resizer, false);
    } else if (window.attachEvent) {
        window.attachEvent('onscroll', scroller);
        window.attachEvent('onresize', resizer);
    }
    $.fn.sticky = function (method) {
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method ' + method + ' does not exist on jQuery.sticky');
        }
    };
    $(function () {
        setTimeout(scroller, 0);
    });
})(jQuery);
/**
 * BxSlider v4.1.2 - Fully loaded, responsive content slider
 * http://bxslider.com
 *
 * Copyright 2014, Steven Wanderski - http://stevenwanderski.com - http://bxcreative.com
 * Written while drinking Belgian ales and listening to jazz
 *
 * Released under the MIT license - http://opensource.org/licenses/MIT
 */
!function (t) {
    var e = {}, s = {mode: "horizontal", slideSelector: "", infiniteLoop: !0, hideControlOnEnd: !1, speed: 500, easing: null, slideMargin: 0, startSlide: 0, randomStart: !1, captions: !1, ticker: !1, tickerHover: !1, adaptiveHeight: !1, adaptiveHeightSpeed: 500, video: !1, useCSS: !0, preloadImages: "visible", responsive: !0, slideZIndex: 50, touchEnabled: !0, swipeThreshold: 50, oneToOneTouch: !0, preventDefaultSwipeX: !0, preventDefaultSwipeY: !1, pager: !0, pagerType: "full", pagerShortSeparator: " / ", pagerSelector: null, buildPager: null, pagerCustom: null, controls: !0, nextText: "Next", prevText: "Prev", nextSelector: null, prevSelector: null, autoControls: !1, startText: "Start", stopText: "Stop", autoControlsCombine: !1, autoControlsSelector: null, auto: !1, pause: 4e3, autoStart: !0, autoDirection: "next", autoHover: !1, autoDelay: 0, minSlides: 1, maxSlides: 1, moveSlides: 0, slideWidth: 0, onSliderLoad: function () {
    }, onSlideBefore: function () {
    }, onSlideAfter: function () {
    }, onSlideNext: function () {
    }, onSlidePrev: function () {
    }, onSliderResize: function () {
    }};
    t.fn.bxSlider = function (n) {
        if (0 == this.length)return this;
        if (this.length > 1)return this.each(function () {
            t(this).bxSlider(n)
        }), this;
        var o = {}, r = this;
        e.el = this;
        var a = t(window).width(), l = t(window).height(), d = function () {
            o.settings = t.extend({}, s, n), o.settings.slideWidth = parseInt(o.settings.slideWidth), o.children = r.children(o.settings.slideSelector), o.children.length < o.settings.minSlides && (o.settings.minSlides = o.children.length), o.children.length < o.settings.maxSlides && (o.settings.maxSlides = o.children.length), o.settings.randomStart && (o.settings.startSlide = Math.floor(Math.random() * o.children.length)), o.active = {index: o.settings.startSlide}, o.carousel = o.settings.minSlides > 1 || o.settings.maxSlides > 1, o.carousel && (o.settings.preloadImages = "all"), o.minThreshold = o.settings.minSlides * o.settings.slideWidth + (o.settings.minSlides - 1) * o.settings.slideMargin, o.maxThreshold = o.settings.maxSlides * o.settings.slideWidth + (o.settings.maxSlides - 1) * o.settings.slideMargin, o.working = !1, o.controls = {}, o.interval = null, o.animProp = "vertical" == o.settings.mode ? "top" : "left", o.usingCSS = o.settings.useCSS && "fade" != o.settings.mode && function () {
                var t = document.createElement("div"), e = ["WebkitPerspective", "MozPerspective", "OPerspective", "msPerspective"];
                for (var i in e)if (void 0 !== t.style[e[i]])return o.cssPrefix = e[i].replace("Perspective", "").toLowerCase(), o.animProp = "-" + o.cssPrefix + "-transform", !0;
                return!1
            }(), "vertical" == o.settings.mode && (o.settings.maxSlides = o.settings.minSlides), r.data("origStyle", r.attr("style")), r.children(o.settings.slideSelector).each(function () {
                t(this).data("origStyle", t(this).attr("style"))
            }), c()
        }, c = function () {
            r.wrap('<div class="bx-wrapper"><div class="bx-viewport"></div></div>'), o.viewport = r.parent(), o.loader = t('<div class="bx-loading" />'), o.viewport.prepend(o.loader), r.css({width: "horizontal" == o.settings.mode ? 100 * o.children.length + 215 + "%" : "auto", position: "relative"}), o.usingCSS && o.settings.easing ? r.css("-" + o.cssPrefix + "-transition-timing-function", o.settings.easing) : o.settings.easing || (o.settings.easing = "swing"), f(), o.viewport.css({width: "100%", overflow: "hidden", position: "relative"}), o.viewport.parent().css({maxWidth: p()}), o.settings.pager || o.viewport.parent().css({margin: "0 auto 0px"}), o.children.css({"float": "horizontal" == o.settings.mode ? "left" : "none", listStyle: "none", position: "relative"}), o.children.css("width", u()), "horizontal" == o.settings.mode && o.settings.slideMargin > 0 && o.children.css("marginRight", o.settings.slideMargin), "vertical" == o.settings.mode && o.settings.slideMargin > 0 && o.children.css("marginBottom", o.settings.slideMargin), "fade" == o.settings.mode && (o.children.css({position: "absolute", zIndex: 0, display: "none"}), o.children.eq(o.settings.startSlide).css({zIndex: o.settings.slideZIndex, display: "block"})), o.controls.el = t('<div class="bx-controls" />'), o.settings.captions && P(), o.active.last = o.settings.startSlide == x() - 1, o.settings.video && r.fitVids();
            var e = o.children.eq(o.settings.startSlide);
            "all" == o.settings.preloadImages && (e = o.children), o.settings.ticker ? o.settings.pager = !1 : (o.settings.pager && T(), o.settings.controls && C(), o.settings.auto && o.settings.autoControls && E(), (o.settings.controls || o.settings.autoControls || o.settings.pager) && o.viewport.after(o.controls.el)), g(e, h)
        }, g = function (e, i) {
            var s = e.find("img, iframe").length;
            if (0 == s)return i(), void 0;
            var n = 0;
            e.find("img, iframe").each(function () {
                t(this).one("load",function () {
                    ++n == s && i()
                }).each(function () {
                    this.complete && t(this).load()
                })
            })
        }, h = function () {
            if (o.settings.infiniteLoop && "fade" != o.settings.mode && !o.settings.ticker) {
                var e = "vertical" == o.settings.mode ? o.settings.minSlides : o.settings.maxSlides, i = o.children.slice(0, e).clone().addClass("bx-clone"), s = o.children.slice(-e).clone().addClass("bx-clone");
                r.append(i).prepend(s)
            }
            o.loader.remove(), S(), "vertical" == o.settings.mode && (o.settings.adaptiveHeight = !0), o.viewport.height(v()), r.redrawSlider(), o.settings.onSliderLoad(o.active.index), o.initialized = !0, o.settings.responsive && t(window).bind("resize", Z), o.settings.auto && o.settings.autoStart && H(), o.settings.ticker && L(), o.settings.pager && q(o.settings.startSlide), o.settings.controls && W(), o.settings.touchEnabled && !o.settings.ticker && O()
        }, v = function () {
            var e = 0, s = t();
            if ("vertical" == o.settings.mode || o.settings.adaptiveHeight)if (o.carousel) {
                var n = 1 == o.settings.moveSlides ? o.active.index : o.active.index * m();
                for (s = o.children.eq(n), i = 1; i <= o.settings.maxSlides - 1; i++)s = n + i >= o.children.length ? s.add(o.children.eq(i - 1)) : s.add(o.children.eq(n + i))
            } else s = o.children.eq(o.active.index); else s = o.children;
            return"vertical" == o.settings.mode ? (s.each(function () {
                e += t(this).outerHeight()
            }), o.settings.slideMargin > 0 && (e += o.settings.slideMargin * (o.settings.minSlides - 1))) : e = Math.max.apply(Math, s.map(function () {
                return t(this).outerHeight(!1)
            }).get()), e
        }, p = function () {
            var t = "100%";
            return o.settings.slideWidth > 0 && (t = "horizontal" == o.settings.mode ? o.settings.maxSlides * o.settings.slideWidth + (o.settings.maxSlides - 1) * o.settings.slideMargin : o.settings.slideWidth), t
        }, u = function () {
            var t = o.settings.slideWidth, e = o.viewport.width();
            return 0 == o.settings.slideWidth || o.settings.slideWidth > e && !o.carousel || "vertical" == o.settings.mode ? t = e : o.settings.maxSlides > 1 && "horizontal" == o.settings.mode && (e > o.maxThreshold || e < o.minThreshold && (t = (e - o.settings.slideMargin * (o.settings.minSlides - 1)) / o.settings.minSlides)), t
        }, f = function () {
            var t = 1;
            if ("horizontal" == o.settings.mode && o.settings.slideWidth > 0)if (o.viewport.width() < o.minThreshold)t = o.settings.minSlides; else if (o.viewport.width() > o.maxThreshold)t = o.settings.maxSlides; else {
                var e = o.children.first().width();
                t = Math.floor(o.viewport.width() / e)
            } else"vertical" == o.settings.mode && (t = o.settings.minSlides);
            return t
        }, x = function () {
            var t = 0;
            if (o.settings.moveSlides > 0)if (o.settings.infiniteLoop)t = o.children.length / m(); else for (var e = 0, i = 0; e < o.children.length;)++t, e = i + f(), i += o.settings.moveSlides <= f() ? o.settings.moveSlides : f(); else t = Math.ceil(o.children.length / f());
            return t
        }, m = function () {
            return o.settings.moveSlides > 0 && o.settings.moveSlides <= f() ? o.settings.moveSlides : f()
        }, S = function () {
            if (o.children.length > o.settings.maxSlides && o.active.last && !o.settings.infiniteLoop) {
                if ("horizontal" == o.settings.mode) {
                    var t = o.children.last(), e = t.position();
                    b(-(e.left - (o.viewport.width() - t.width())), "reset", 0)
                } else if ("vertical" == o.settings.mode) {
                    var i = o.children.length - o.settings.minSlides, e = o.children.eq(i).position();
                    b(-e.top, "reset", 0)
                }
            } else {
                var e = o.children.eq(o.active.index * m()).position();
                o.active.index == x() - 1 && (o.active.last = !0), void 0 != e && ("horizontal" == o.settings.mode ? b(-e.left, "reset", 0) : "vertical" == o.settings.mode && b(-e.top, "reset", 0))
            }
        }, b = function (t, e, i, s) {
            if (o.usingCSS) {
                var n = "vertical" == o.settings.mode ? "translate3d(0, " + t + "px, 0)" : "translate3d(" + t + "px, 0, 0)";
                r.css("-" + o.cssPrefix + "-transition-duration", i / 1e3 + "s"), "slide" == e ? (r.css(o.animProp, n), r.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function () {
                    r.unbind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd"), D()
                })) : "reset" == e ? r.css(o.animProp, n) : "ticker" == e && (r.css("-" + o.cssPrefix + "-transition-timing-function", "linear"), r.css(o.animProp, n), r.bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function () {
                    r.unbind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd"), b(s.resetValue, "reset", 0), N()
                }))
            } else {
                var a = {};
                a[o.animProp] = t, "slide" == e ? r.animate(a, i, o.settings.easing, function () {
                    D()
                }) : "reset" == e ? r.css(o.animProp, t) : "ticker" == e && r.animate(a, speed, "linear", function () {
                    b(s.resetValue, "reset", 0), N()
                })
            }
        }, w = function () {
            for (var e = "", i = x(), s = 0; i > s; s++) {
                var n = "";
                o.settings.buildPager && t.isFunction(o.settings.buildPager) ? (n = o.settings.buildPager(s), o.pagerEl.addClass("bx-custom-pager")) : (n = s + 1, o.pagerEl.addClass("bx-default-pager")), e += '<div class="bx-pager-item"><a href="" data-slide-index="' + s + '" class="bx-pager-link">' + n + "</a></div>"
            }
            o.pagerEl.html(e)
        }, T = function () {
            o.settings.pagerCustom ? o.pagerEl = t(o.settings.pagerCustom) : (o.pagerEl = t('<div class="bx-pager" />'), o.settings.pagerSelector ? t(o.settings.pagerSelector).html(o.pagerEl) : o.controls.el.addClass("bx-has-pager").append(o.pagerEl), w()), o.pagerEl.on("click", "a", I)
        }, C = function () {
            o.controls.next = t('<a class="bx-next" href="">' + o.settings.nextText + "</a>"), o.controls.prev = t('<a class="bx-prev" href="">' + o.settings.prevText + "</a>"), o.controls.next.bind("click", y), o.controls.prev.bind("click", z), o.settings.nextSelector && t(o.settings.nextSelector).append(o.controls.next), o.settings.prevSelector && t(o.settings.prevSelector).append(o.controls.prev), o.settings.nextSelector || o.settings.prevSelector || (o.controls.directionEl = t('<div class="bx-controls-direction" />'), o.controls.directionEl.append(o.controls.prev).append(o.controls.next), o.controls.el.addClass("bx-has-controls-direction").append(o.controls.directionEl))
        }, E = function () {
            o.controls.start = t('<div class="bx-controls-auto-item"><a class="bx-start" href="">' + o.settings.startText + "</a></div>"), o.controls.stop = t('<div class="bx-controls-auto-item"><a class="bx-stop" href="">' + o.settings.stopText + "</a></div>"), o.controls.autoEl = t('<div class="bx-controls-auto" />'), o.controls.autoEl.on("click", ".bx-start", k), o.controls.autoEl.on("click", ".bx-stop", M), o.settings.autoControlsCombine ? o.controls.autoEl.append(o.controls.start) : o.controls.autoEl.append(o.controls.start).append(o.controls.stop), o.settings.autoControlsSelector ? t(o.settings.autoControlsSelector).html(o.controls.autoEl) : o.controls.el.addClass("bx-has-controls-auto").append(o.controls.autoEl), A(o.settings.autoStart ? "stop" : "start")
        }, P = function () {
            o.children.each(function () {
                var e = t(this).find("img:first").attr("title");
                void 0 != e && ("" + e).length && t(this).append('<div class="bx-caption"><span>' + e + "</span></div>")
            })
        }, y = function (t) {
            o.settings.auto && r.stopAuto(), r.goToNextSlide(), t.preventDefault()
        }, z = function (t) {
            o.settings.auto && r.stopAuto(), r.goToPrevSlide(), t.preventDefault()
        }, k = function (t) {
            r.startAuto(), t.preventDefault()
        }, M = function (t) {
            r.stopAuto(), t.preventDefault()
        }, I = function (e) {
            o.settings.auto && r.stopAuto();
            var i = t(e.currentTarget), s = parseInt(i.attr("data-slide-index"));
            s != o.active.index && r.goToSlide(s), e.preventDefault()
        }, q = function (e) {
            var i = o.children.length;
            return"short" == o.settings.pagerType ? (o.settings.maxSlides > 1 && (i = Math.ceil(o.children.length / o.settings.maxSlides)), o.pagerEl.html(e + 1 + o.settings.pagerShortSeparator + i), void 0) : (o.pagerEl.find("a").removeClass("active"), o.pagerEl.each(function (i, s) {
                t(s).find("a").eq(e).addClass("active")
            }), void 0)
        }, D = function () {
            if (o.settings.infiniteLoop) {
                var t = "";
                0 == o.active.index ? t = o.children.eq(0).position() : o.active.index == x() - 1 && o.carousel ? t = o.children.eq((x() - 1) * m()).position() : o.active.index == o.children.length - 1 && (t = o.children.eq(o.children.length - 1).position()), t && ("horizontal" == o.settings.mode ? b(-t.left, "reset", 0) : "vertical" == o.settings.mode && b(-t.top, "reset", 0))
            }
            o.working = !1, o.settings.onSlideAfter(o.children.eq(o.active.index), o.oldIndex, o.active.index)
        }, A = function (t) {
            o.settings.autoControlsCombine ? o.controls.autoEl.html(o.controls[t]) : (o.controls.autoEl.find("a").removeClass("active"), o.controls.autoEl.find("a:not(.bx-" + t + ")").addClass("active"))
        }, W = function () {
            1 == x() ? (o.controls.prev.addClass("disabled"), o.controls.next.addClass("disabled")) : !o.settings.infiniteLoop && o.settings.hideControlOnEnd && (0 == o.active.index ? (o.controls.prev.addClass("disabled"), o.controls.next.removeClass("disabled")) : o.active.index == x() - 1 ? (o.controls.next.addClass("disabled"), o.controls.prev.removeClass("disabled")) : (o.controls.prev.removeClass("disabled"), o.controls.next.removeClass("disabled")))
        }, H = function () {
            o.settings.autoDelay > 0 ? setTimeout(r.startAuto, o.settings.autoDelay) : r.startAuto(), o.settings.autoHover && r.hover(function () {
                o.interval && (r.stopAuto(!0), o.autoPaused = !0)
            }, function () {
                o.autoPaused && (r.startAuto(!0), o.autoPaused = null)
            })
        }, L = function () {
            var e = 0;
            if ("next" == o.settings.autoDirection)r.append(o.children.clone().addClass("bx-clone")); else {
                r.prepend(o.children.clone().addClass("bx-clone"));
                var i = o.children.first().position();
                e = "horizontal" == o.settings.mode ? -i.left : -i.top
            }
            b(e, "reset", 0), o.settings.pager = !1, o.settings.controls = !1, o.settings.autoControls = !1, o.settings.tickerHover && !o.usingCSS && o.viewport.hover(function () {
                r.stop()
            }, function () {
                var e = 0;
                o.children.each(function () {
                    e += "horizontal" == o.settings.mode ? t(this).outerWidth(!0) : t(this).outerHeight(!0)
                });
                var i = o.settings.speed / e, s = "horizontal" == o.settings.mode ? "left" : "top", n = i * (e - Math.abs(parseInt(r.css(s))));
                N(n)
            }), N()
        }, N = function (t) {
            speed = t ? t : o.settings.speed;
            var e = {left: 0, top: 0}, i = {left: 0, top: 0};
            "next" == o.settings.autoDirection ? e = r.find(".bx-clone").first().position() : i = o.children.first().position();
            var s = "horizontal" == o.settings.mode ? -e.left : -e.top, n = "horizontal" == o.settings.mode ? -i.left : -i.top, a = {resetValue: n};
            b(s, "ticker", speed, a)
        }, O = function () {
            o.touch = {start: {x: 0, y: 0}, end: {x: 0, y: 0}}, o.viewport.bind("touchstart", X)
        }, X = function (t) {
            if (o.working)t.preventDefault(); else {
                o.touch.originalPos = r.position();
                var e = t.originalEvent;
                o.touch.start.x = e.changedTouches[0].pageX, o.touch.start.y = e.changedTouches[0].pageY, o.viewport.bind("touchmove", Y), o.viewport.bind("touchend", V)
            }
        }, Y = function (t) {
            var e = t.originalEvent, i = Math.abs(e.changedTouches[0].pageX - o.touch.start.x), s = Math.abs(e.changedTouches[0].pageY - o.touch.start.y);
            if (3 * i > s && o.settings.preventDefaultSwipeX ? t.preventDefault() : 3 * s > i && o.settings.preventDefaultSwipeY && t.preventDefault(), "fade" != o.settings.mode && o.settings.oneToOneTouch) {
                var n = 0;
                if ("horizontal" == o.settings.mode) {
                    var r = e.changedTouches[0].pageX - o.touch.start.x;
                    n = o.touch.originalPos.left + r
                } else {
                    var r = e.changedTouches[0].pageY - o.touch.start.y;
                    n = o.touch.originalPos.top + r
                }
                b(n, "reset", 0)
            }
        }, V = function (t) {
            o.viewport.unbind("touchmove", Y);
            var e = t.originalEvent, i = 0;
            if (o.touch.end.x = e.changedTouches[0].pageX, o.touch.end.y = e.changedTouches[0].pageY, "fade" == o.settings.mode) {
                var s = Math.abs(o.touch.start.x - o.touch.end.x);
                s >= o.settings.swipeThreshold && (o.touch.start.x > o.touch.end.x ? r.goToNextSlide() : r.goToPrevSlide(), r.stopAuto())
            } else {
                var s = 0;
                "horizontal" == o.settings.mode ? (s = o.touch.end.x - o.touch.start.x, i = o.touch.originalPos.left) : (s = o.touch.end.y - o.touch.start.y, i = o.touch.originalPos.top), !o.settings.infiniteLoop && (0 == o.active.index && s > 0 || o.active.last && 0 > s) ? b(i, "reset", 200) : Math.abs(s) >= o.settings.swipeThreshold ? (0 > s ? r.goToNextSlide() : r.goToPrevSlide(), r.stopAuto()) : b(i, "reset", 200)
            }
            o.viewport.unbind("touchend", V)
        }, Z = function () {
            var e = t(window).width(), i = t(window).height();
            (a != e || l != i) && (a = e, l = i, r.redrawSlider(), o.settings.onSliderResize.call(r, o.active.index))
        };
        return r.goToSlide = function (e, i) {
            if (!o.working && o.active.index != e)if (o.working = !0, o.oldIndex = o.active.index, o.active.index = 0 > e ? x() - 1 : e >= x() ? 0 : e, o.settings.onSlideBefore(o.children.eq(o.active.index), o.oldIndex, o.active.index), "next" == i ? o.settings.onSlideNext(o.children.eq(o.active.index), o.oldIndex, o.active.index) : "prev" == i && o.settings.onSlidePrev(o.children.eq(o.active.index), o.oldIndex, o.active.index), o.active.last = o.active.index >= x() - 1, o.settings.pager && q(o.active.index), o.settings.controls && W(), "fade" == o.settings.mode)o.settings.adaptiveHeight && o.viewport.height() != v() && o.viewport.animate({height: v()}, o.settings.adaptiveHeightSpeed), o.children.filter(":visible").fadeOut(o.settings.speed).css({zIndex: 0}), o.children.eq(o.active.index).css("zIndex", o.settings.slideZIndex + 1).fadeIn(o.settings.speed, function () {
                t(this).css("zIndex", o.settings.slideZIndex), D()
            }); else {
                o.settings.adaptiveHeight && o.viewport.height() != v() && o.viewport.animate({height: v()}, o.settings.adaptiveHeightSpeed);
                var s = 0, n = {left: 0, top: 0};
                if (!o.settings.infiniteLoop && o.carousel && o.active.last)if ("horizontal" == o.settings.mode) {
                    var a = o.children.eq(o.children.length - 1);
                    n = a.position(), s = o.viewport.width() - a.outerWidth()
                } else {
                    var l = o.children.length - o.settings.minSlides;
                    n = o.children.eq(l).position()
                } else if (o.carousel && o.active.last && "prev" == i) {
                    var d = 1 == o.settings.moveSlides ? o.settings.maxSlides - m() : (x() - 1) * m() - (o.children.length - o.settings.maxSlides), a = r.children(".bx-clone").eq(d);
                    n = a.position()
                } else if ("next" == i && 0 == o.active.index)n = r.find("> .bx-clone").eq(o.settings.maxSlides).position(), o.active.last = !1; else if (e >= 0) {
                    var c = e * m();
                    n = o.children.eq(c).position()
                }
                if ("undefined" != typeof n) {
                    var g = "horizontal" == o.settings.mode ? -(n.left - s) : -n.top;
                    b(g, "slide", o.settings.speed)
                }
            }
        }, r.goToNextSlide = function () {
            if (o.settings.infiniteLoop || !o.active.last) {
                var t = parseInt(o.active.index) + 1;
                r.goToSlide(t, "next")
            }
        }, r.goToPrevSlide = function () {
            if (o.settings.infiniteLoop || 0 != o.active.index) {
                var t = parseInt(o.active.index) - 1;
                r.goToSlide(t, "prev")
            }
        }, r.startAuto = function (t) {
            o.interval || (o.interval = setInterval(function () {
                "next" == o.settings.autoDirection ? r.goToNextSlide() : r.goToPrevSlide()
            }, o.settings.pause), o.settings.autoControls && 1 != t && A("stop"))
        }, r.stopAuto = function (t) {
            o.interval && (clearInterval(o.interval), o.interval = null, o.settings.autoControls && 1 != t && A("start"))
        }, r.getCurrentSlide = function () {
            return o.active.index
        }, r.getCurrentSlideElement = function () {
            return o.children.eq(o.active.index)
        }, r.getSlideCount = function () {
            return o.children.length
        }, r.redrawSlider = function () {
            o.children.add(r.find(".bx-clone")).outerWidth(u()), o.viewport.css("height", v()), o.settings.ticker || S(), o.active.last && (o.active.index = x() - 1), o.active.index >= x() && (o.active.last = !0), o.settings.pager && !o.settings.pagerCustom && (w(), q(o.active.index))
        }, r.destroySlider = function () {
            o.initialized && (o.initialized = !1, t(".bx-clone", this).remove(), o.children.each(function () {
                void 0 != t(this).data("origStyle") ? t(this).attr("style", t(this).data("origStyle")) : t(this).removeAttr("style")
            }), void 0 != t(this).data("origStyle") ? this.attr("style", t(this).data("origStyle")) : t(this).removeAttr("style"), t(this).unwrap().unwrap(), o.controls.el && o.controls.el.remove(), o.controls.next && o.controls.next.remove(), o.controls.prev && o.controls.prev.remove(), o.pagerEl && o.settings.controls && o.pagerEl.remove(), t(".bx-caption", this).remove(), o.controls.autoEl && o.controls.autoEl.remove(), clearInterval(o.interval), o.settings.responsive && t(window).unbind("resize", Z))
        }, r.reloadSlider = function (t) {
            void 0 != t && (n = t), r.destroySlider(), d()
        }, d(), this
    }
}(jQuery);

/*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */

(function (r, G, f, v) {
    var J = f("html"), n = f(r), p = f(G), b = f.fancybox = function () {
        b.open.apply(this, arguments)
    }, I = navigator.userAgent.match(/msie/i), B = null, s = G.createTouch !== v, t = function (a) {
        return a && a.hasOwnProperty && a instanceof f
    }, q = function (a) {
        return a && "string" === f.type(a)
    }, E = function (a) {
        return q(a) && 0 < a.indexOf("%")
    }, l = function (a, d) {
        var e = parseInt(a, 10) || 0;
        d && E(a) && (e *= b.getViewport()[d] / 100);
        return Math.ceil(e)
    }, w = function (a, b) {
        return l(a, b) + "px"
    };
    f.extend(b, {version: "2.1.5", defaults: {padding: 15, margin: 20, width: 800, height: 600, minWidth: 100, minHeight: 100, maxWidth: 9999, maxHeight: 9999, pixelRatio: 1, autoSize: !0, autoHeight: !1, autoWidth: !1, autoResize: !0, autoCenter: !s, fitToView: !0, aspectRatio: !1, topRatio: 0.5, leftRatio: 0.5, scrolling: "auto", wrapCSS: "", arrows: !0, closeBtn: !0, closeClick: !1, nextClick: !1, mouseWheel: !0, autoPlay: !1, playSpeed: 3E3, preload: 3, modal: !1, loop: !0, ajax: {dataType: "html", headers: {"X-fancyBox": !0}}, iframe: {scrolling: "auto", preload: !0}, swf: {wmode: "transparent", allowfullscreen: "true", allowscriptaccess: "always"}, keys: {next: {13: "left", 34: "up", 39: "left", 40: "up"}, prev: {8: "right", 33: "down", 37: "right", 38: "down"}, close: [27], play: [32], toggle: [70]}, direction: {next: "left", prev: "right"}, scrollOutside: !0, index: 0, type: null, href: null, content: null, title: null, tpl: {wrap: '<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>', image: '<img class="fancybox-image" src="{href}" alt="" />', iframe: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen' +
        (I ? ' allowtransparency="true"' : "") + "></iframe>", error: '<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>', closeBtn: '<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>', next: '<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>', prev: '<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'}, openEffect: "fade", openSpeed: 250, openEasing: "swing", openOpacity: !0, openMethod: "zoomIn", closeEffect: "fade", closeSpeed: 250, closeEasing: "swing", closeOpacity: !0, closeMethod: "zoomOut", nextEffect: "elastic", nextSpeed: 250, nextEasing: "swing", nextMethod: "changeIn", prevEffect: "elastic", prevSpeed: 250, prevEasing: "swing", prevMethod: "changeOut", helpers: {overlay: !0, title: !0}, onCancel: f.noop, beforeLoad: f.noop, afterLoad: f.noop, beforeShow: f.noop, afterShow: f.noop, beforeChange: f.noop, beforeClose: f.noop, afterClose: f.noop}, group: {}, opts: {}, previous: null, coming: null, current: null, isActive: !1, isOpen: !1, isOpened: !1, wrap: null, skin: null, outer: null, inner: null, player: {timer: null, isActive: !1}, ajaxLoad: null, imgPreload: null, transitions: {}, helpers: {}, open: function (a, d) {
        if (a && (f.isPlainObject(d) || (d = {}), !1 !== b.close(!0)))return f.isArray(a) || (a = t(a) ? f(a).get() : [a]), f.each(a, function (e, c) {
            var k = {}, g, h, j, m, l;
            "object" === f.type(c) && (c.nodeType && (c = f(c)), t(c) ? (k = {href: c.data("fancybox-href") || c.attr("href"), title: c.data("fancybox-title") || c.attr("title"), isDom: !0, element: c}, f.metadata && f.extend(!0, k, c.metadata())) : k = c);
            g = d.href || k.href || (q(c) ? c : null);
            h = d.title !== v ? d.title : k.title || "";
            m = (j = d.content || k.content) ? "html" : d.type || k.type;
            !m && k.isDom && (m = c.data("fancybox-type"), m || (m = (m = c.prop("class").match(/fancybox\.(\w+)/)) ? m[1] : null));
            q(g) && (m || (b.isImage(g) ? m = "image" : b.isSWF(g) ? m = "swf" : "#" === g.charAt(0) ? m = "inline" : q(c) && (m = "html", j = c)), "ajax" === m && (l = g.split(/\s+/, 2), g = l.shift(), l = l.shift()));
            j || ("inline" === m ? g ? j = f(q(g) ? g.replace(/.*(?=#[^\s]+$)/, "") : g) : k.isDom && (j = c) : "html" === m ? j = g : !m && (!g && k.isDom) && (m = "inline", j = c));
            f.extend(k, {href: g, type: m, content: j, title: h, selector: l});
            a[e] = k
        }), b.opts = f.extend(!0, {}, b.defaults, d), d.keys !== v && (b.opts.keys = d.keys ? f.extend({}, b.defaults.keys, d.keys) : !1), b.group = a, b._start(b.opts.index)
    }, cancel: function () {
        var a = b.coming;
        a && !1 !== b.trigger("onCancel") && (b.hideLoading(), b.ajaxLoad && b.ajaxLoad.abort(), b.ajaxLoad = null, b.imgPreload && (b.imgPreload.onload = b.imgPreload.onerror = null), a.wrap && a.wrap.stop(!0, !0).trigger("onReset").remove(), b.coming = null, b.current || b._afterZoomOut(a))
    }, close: function (a) {
        b.cancel();
        !1 !== b.trigger("beforeClose") && (b.unbindEvents(), b.isActive && (!b.isOpen || !0 === a ? (f(".fancybox-wrap").stop(!0).trigger("onReset").remove(), b._afterZoomOut()) : (b.isOpen = b.isOpened = !1, b.isClosing = !0, f(".fancybox-item, .fancybox-nav").remove(), b.wrap.stop(!0, !0).removeClass("fancybox-opened"), b.transitions[b.current.closeMethod]())))
    }, play: function (a) {
        var d = function () {
            clearTimeout(b.player.timer)
        }, e = function () {
            d();
            b.current && b.player.isActive && (b.player.timer = setTimeout(b.next, b.current.playSpeed))
        }, c = function () {
            d();
            p.unbind(".player");
            b.player.isActive = !1;
            b.trigger("onPlayEnd")
        };
        if (!0 === a || !b.player.isActive && !1 !== a) {
            if (b.current && (b.current.loop || b.current.index < b.group.length - 1))b.player.isActive = !0, p.bind({"onCancel.player beforeClose.player": c, "onUpdate.player": e, "beforeLoad.player": d}), e(), b.trigger("onPlayStart")
        } else c()
    }, next: function (a) {
        var d = b.current;
        d && (q(a) || (a = d.direction.next), b.jumpto(d.index + 1, a, "next"))
    }, prev: function (a) {
        var d = b.current;
        d && (q(a) || (a = d.direction.prev), b.jumpto(d.index - 1, a, "prev"))
    }, jumpto: function (a, d, e) {
        var c = b.current;
        c && (a = l(a), b.direction = d || c.direction[a >= c.index ? "next" : "prev"], b.router = e || "jumpto", c.loop && (0 > a && (a = c.group.length + a % c.group.length), a %= c.group.length), c.group[a] !== v && (b.cancel(), b._start(a)))
    }, reposition: function (a, d) {
        var e = b.current, c = e ? e.wrap : null, k;
        c && (k = b._getPosition(d), a && "scroll" === a.type ? (delete k.position, c.stop(!0, !0).animate(k, 200)) : (c.css(k), e.pos = f.extend({}, e.dim, k)))
    }, update: function (a) {
        var d = a && a.type, e = !d || "orientationchange" === d;
        e && (clearTimeout(B), B = null);
        b.isOpen && !B && (B = setTimeout(function () {
            var c = b.current;
            c && !b.isClosing && (b.wrap.removeClass("fancybox-tmp"), (e || "load" === d || "resize" === d && c.autoResize) && b._setDimension(), "scroll" === d && c.canShrink || b.reposition(a), b.trigger("onUpdate"), B = null)
        }, e && !s ? 0 : 300))
    }, toggle: function (a) {
        b.isOpen && (b.current.fitToView = "boolean" === f.type(a) ? a : !b.current.fitToView, s && (b.wrap.removeAttr("style").addClass("fancybox-tmp"), b.trigger("onUpdate")), b.update())
    }, hideLoading: function () {
        p.unbind(".loading");
        f("#fancybox-loading").remove()
    }, showLoading: function () {
        var a, d;
        b.hideLoading();
        a = f('<div id="fancybox-loading"><div></div></div>').click(b.cancel).appendTo("body");
        p.bind("keydown.loading", function (a) {
            if (27 === (a.which || a.keyCode))a.preventDefault(), b.cancel()
        });
        b.defaults.fixed || (d = b.getViewport(), a.css({position: "absolute", top: 0.5 * d.h + d.y, left: 0.5 * d.w + d.x}))
    }, getViewport: function () {
        var a = b.current && b.current.locked || !1, d = {x: n.scrollLeft(), y: n.scrollTop()};
        a ? (d.w = a[0].clientWidth, d.h = a[0].clientHeight) : (d.w = s && r.innerWidth ? r.innerWidth : n.width(), d.h = s && r.innerHeight ? r.innerHeight : n.height());
        return d
    }, unbindEvents: function () {
        b.wrap && t(b.wrap) && b.wrap.unbind(".fb");
        p.unbind(".fb");
        n.unbind(".fb")
    }, bindEvents: function () {
        var a = b.current, d;
        a && (n.bind("orientationchange.fb" + (s ? "" : " resize.fb") + (a.autoCenter && !a.locked ? " scroll.fb" : ""), b.update), (d = a.keys) && p.bind("keydown.fb", function (e) {
            var c = e.which || e.keyCode, k = e.target || e.srcElement;
            if (27 === c && b.coming)return!1;
            !e.ctrlKey && (!e.altKey && !e.shiftKey && !e.metaKey && (!k || !k.type && !f(k).is("[contenteditable]"))) && f.each(d, function (d, k) {
                if (1 < a.group.length && k[c] !== v)return b[d](k[c]), e.preventDefault(), !1;
                if (-1 < f.inArray(c, k))return b[d](), e.preventDefault(), !1
            })
        }), f.fn.mousewheel && a.mouseWheel && b.wrap.bind("mousewheel.fb", function (d, c, k, g) {
            for (var h = f(d.target || null), j = !1; h.length && !j && !h.is(".fancybox-skin") && !h.is(".fancybox-wrap");)j = h[0] && !(h[0].style.overflow && "hidden" === h[0].style.overflow) && (h[0].clientWidth && h[0].scrollWidth > h[0].clientWidth || h[0].clientHeight && h[0].scrollHeight > h[0].clientHeight), h = f(h).parent();
            if (0 !== c && !j && 1 < b.group.length && !a.canShrink) {
                if (0 < g || 0 < k)b.prev(0 < g ? "down" : "left"); else if (0 > g || 0 > k)b.next(0 > g ? "up" : "right");
                d.preventDefault()
            }
        }))
    }, trigger: function (a, d) {
        var e, c = d || b.coming || b.current;
        if (c) {
            f.isFunction(c[a]) && (e = c[a].apply(c, Array.prototype.slice.call(arguments, 1)));
            if (!1 === e)return!1;
            c.helpers && f.each(c.helpers, function (d, e) {
                if (e && b.helpers[d] && f.isFunction(b.helpers[d][a]))b.helpers[d][a](f.extend(!0, {}, b.helpers[d].defaults, e), c)
            });
            p.trigger(a)
        }
    }, isImage: function (a) {
        return q(a) && a.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i)
    }, isSWF: function (a) {
        return q(a) && a.match(/\.(swf)((\?|#).*)?$/i)
    }, _start: function (a) {
        var d = {}, e, c;
        a = l(a);
        e = b.group[a] || null;
        if (!e)return!1;
        d = f.extend(!0, {}, b.opts, e);
        e = d.margin;
        c = d.padding;
        "number" === f.type(e) && (d.margin = [e, e, e, e]);
        "number" === f.type(c) && (d.padding = [c, c, c, c]);
        d.modal && f.extend(!0, d, {closeBtn: !1, closeClick: !1, nextClick: !1, arrows: !1, mouseWheel: !1, keys: null, helpers: {overlay: {closeClick: !1}}});
        d.autoSize && (d.autoWidth = d.autoHeight = !0);
        "auto" === d.width && (d.autoWidth = !0);
        "auto" === d.height && (d.autoHeight = !0);
        d.group = b.group;
        d.index = a;
        b.coming = d;
        if (!1 === b.trigger("beforeLoad"))b.coming = null; else {
            c = d.type;
            e = d.href;
            if (!c)return b.coming = null, b.current && b.router && "jumpto" !== b.router ? (b.current.index = a, b[b.router](b.direction)) : !1;
            b.isActive = !0;
            if ("image" === c || "swf" === c)d.autoHeight = d.autoWidth = !1, d.scrolling = "visible";
            "image" === c && (d.aspectRatio = !0);
            "iframe" === c && s && (d.scrolling = "scroll");
            d.wrap = f(d.tpl.wrap).addClass("fancybox-" + (s ? "mobile" : "desktop") + " fancybox-type-" + c + " fancybox-tmp " + d.wrapCSS).appendTo(d.parent || "body");
            f.extend(d, {skin: f(".fancybox-skin", d.wrap), outer: f(".fancybox-outer", d.wrap), inner: f(".fancybox-inner", d.wrap)});
            f.each(["Top", "Right", "Bottom", "Left"], function (a, b) {
                d.skin.css("padding" + b, w(d.padding[a]))
            });
            b.trigger("onReady");
            if ("inline" === c || "html" === c) {
                if (!d.content || !d.content.length)return b._error("content")
            } else if (!e)return b._error("href");
            "image" === c ? b._loadImage() : "ajax" === c ? b._loadAjax() : "iframe" === c ? b._loadIframe() : b._afterLoad()
        }
    }, _error: function (a) {
        f.extend(b.coming, {type: "html", autoWidth: !0, autoHeight: !0, minWidth: 0, minHeight: 0, scrolling: "no", hasError: a, content: b.coming.tpl.error});
        b._afterLoad()
    }, _loadImage: function () {
        var a = b.imgPreload = new Image;
        a.onload = function () {
            this.onload = this.onerror = null;
            b.coming.width = this.width / b.opts.pixelRatio;
            b.coming.height = this.height / b.opts.pixelRatio;
            b._afterLoad()
        };
        a.onerror = function () {
            this.onload = this.onerror = null;
            b._error("image")
        };
        a.src = b.coming.href;
        !0 !== a.complete && b.showLoading()
    }, _loadAjax: function () {
        var a = b.coming;
        b.showLoading();
        b.ajaxLoad = f.ajax(f.extend({}, a.ajax, {url: a.href, error: function (a, e) {
            b.coming && "abort" !== e ? b._error("ajax", a) : b.hideLoading()
        }, success: function (d, e) {
            "success" === e && (a.content = d, b._afterLoad())
        }}))
    }, _loadIframe: function () {
        var a = b.coming, d = f(a.tpl.iframe.replace(/\{rnd\}/g, (new Date).getTime())).attr("scrolling", s ? "auto" : a.iframe.scrolling).attr("src", a.href);
        f(a.wrap).bind("onReset", function () {
            try {
                f(this).find("iframe").hide().attr("src", "//about:blank").end().empty()
            } catch (a) {
            }
        });
        a.iframe.preload && (b.showLoading(), d.one("load", function () {
            f(this).data("ready", 1);
            s || f(this).bind("load.fb", b.update);
            f(this).parents(".fancybox-wrap").width("100%").removeClass("fancybox-tmp").show();
            b._afterLoad()
        }));
        a.content = d.appendTo(a.inner);
        a.iframe.preload || b._afterLoad()
    }, _preloadImages: function () {
        var a = b.group, d = b.current, e = a.length, c = d.preload ? Math.min(d.preload, e - 1) : 0, f, g;
        for (g = 1; g <= c; g += 1)f = a[(d.index + g) % e], "image" === f.type && f.href && ((new Image).src = f.href)
    }, _afterLoad: function () {
        var a = b.coming, d = b.current, e, c, k, g, h;
        b.hideLoading();
        if (a && !1 !== b.isActive)if (!1 === b.trigger("afterLoad", a, d))a.wrap.stop(!0).trigger("onReset").remove(), b.coming = null; else {
            d && (b.trigger("beforeChange", d), d.wrap.stop(!0).removeClass("fancybox-opened").find(".fancybox-item, .fancybox-nav").remove());
            b.unbindEvents();
            e = a.content;
            c = a.type;
            k = a.scrolling;
            f.extend(b, {wrap: a.wrap, skin: a.skin, outer: a.outer, inner: a.inner, current: a, previous: d});
            g = a.href;
            switch (c) {
                case"inline":
                case"ajax":
                case"html":
                    a.selector ? e = f("<div>").html(e).find(a.selector) : t(e) && (e.data("fancybox-placeholder") || e.data("fancybox-placeholder", f('<div class="fancybox-placeholder"></div>').insertAfter(e).hide()), e = e.show().detach(), a.wrap.bind("onReset", function () {
                        f(this).find(e).length && e.hide().replaceAll(e.data("fancybox-placeholder")).data("fancybox-placeholder", !1)
                    }));
                    break;
                case"image":
                    e = a.tpl.image.replace("{href}", g);
                    break;
                case"swf":
                    e = '<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="' + g + '"></param>', h = "", f.each(a.swf, function (a, b) {
                        e += '<param name="' + a + '" value="' + b + '"></param>';
                        h += " " + a + '="' + b + '"'
                    }), e += '<embed src="' + g + '" type="application/x-shockwave-flash" width="100%" height="100%"' + h + "></embed></object>"
            }
            (!t(e) || !e.parent().is(a.inner)) && a.inner.append(e);
            b.trigger("beforeShow");
            a.inner.css("overflow", "yes" === k ? "scroll" : "no" === k ? "hidden" : k);
            b._setDimension();
            b.reposition();
            b.isOpen = !1;
            b.coming = null;
            b.bindEvents();
            if (b.isOpened) {
                if (d.prevMethod)b.transitions[d.prevMethod]()
            } else f(".fancybox-wrap").not(a.wrap).stop(!0).trigger("onReset").remove();
            b.transitions[b.isOpened ? a.nextMethod : a.openMethod]();
            b._preloadImages()
        }
    }, _setDimension: function () {
        var a = b.getViewport(), d = 0, e = !1, c = !1, e = b.wrap, k = b.skin, g = b.inner, h = b.current, c = h.width, j = h.height, m = h.minWidth, u = h.minHeight, n = h.maxWidth, p = h.maxHeight, s = h.scrolling, q = h.scrollOutside ? h.scrollbarWidth : 0, x = h.margin, y = l(x[1] + x[3]), r = l(x[0] + x[2]), v, z, t, C, A, F, B, D, H;
        e.add(k).add(g).width("auto").height("auto").removeClass("fancybox-tmp");
        x = l(k.outerWidth(!0) - k.width());
        v = l(k.outerHeight(!0) - k.height());
        z = y + x;
        t = r + v;
        C = E(c) ? (a.w - z) * l(c) / 100 : c;
        A = E(j) ? (a.h - t) * l(j) / 100 : j;
        if ("iframe" === h.type) {
            if (H = h.content, h.autoHeight && 1 === H.data("ready"))try {
                H[0].contentWindow.document.location && (g.width(C).height(9999), F = H.contents().find("body"), q && F.css("overflow-x", "hidden"), A = F.outerHeight(!0))
            } catch (G) {
            }
        } else if (h.autoWidth || h.autoHeight)g.addClass("fancybox-tmp"), h.autoWidth || g.width(C), h.autoHeight || g.height(A), h.autoWidth && (C = g.width()), h.autoHeight && (A = g.height()), g.removeClass("fancybox-tmp");
        c = l(C);
        j = l(A);
        D = C / A;
        m = l(E(m) ? l(m, "w") - z : m);
        n = l(E(n) ? l(n, "w") - z : n);
        u = l(E(u) ? l(u, "h") - t : u);
        p = l(E(p) ? l(p, "h") - t : p);
        F = n;
        B = p;
        h.fitToView && (n = Math.min(a.w - z, n), p = Math.min(a.h - t, p));
        z = a.w - y;
        r = a.h - r;
        h.aspectRatio ? (c > n && (c = n, j = l(c / D)), j > p && (j = p, c = l(j * D)), c < m && (c = m, j = l(c / D)), j < u && (j = u, c = l(j * D))) : (c = Math.max(m, Math.min(c, n)), h.autoHeight && "iframe" !== h.type && (g.width(c), j = g.height()), j = Math.max(u, Math.min(j, p)));
        if (h.fitToView)if (g.width(c).height(j), e.width(c + x), a = e.width(), y = e.height(), h.aspectRatio)for (; (a > z || y > r) && (c > m && j > u) && !(19 < d++);)j = Math.max(u, Math.min(p, j - 10)), c = l(j * D), c < m && (c = m, j = l(c / D)), c > n && (c = n, j = l(c / D)), g.width(c).height(j), e.width(c + x), a = e.width(), y = e.height(); else c = Math.max(m, Math.min(c, c - (a - z))), j = Math.max(u, Math.min(j, j - (y - r)));
        q && ("auto" === s && j < A && c + x + q < z) && (c += q);
        g.width(c).height(j);
        e.width(c + x);
        a = e.width();
        y = e.height();
        e = (a > z || y > r) && c > m && j > u;
        c = h.aspectRatio ? c < F && j < B && c < C && j < A : (c < F || j < B) && (c < C || j < A);
        f.extend(h, {dim: {width: w(a), height: w(y)}, origWidth: C, origHeight: A, canShrink: e, canExpand: c, wPadding: x, hPadding: v, wrapSpace: y - k.outerHeight(!0), skinSpace: k.height() - j});
        !H && (h.autoHeight && j > u && j < p && !c) && g.height("auto")
    }, _getPosition: function (a) {
        var d = b.current, e = b.getViewport(), c = d.margin, f = b.wrap.width() + c[1] + c[3], g = b.wrap.height() + c[0] + c[2], c = {position: "absolute", top: c[0], left: c[3]};
        d.autoCenter && d.fixed && !a && g <= e.h && f <= e.w ? c.position = "fixed" : d.locked || (c.top += e.y, c.left += e.x);
        c.top = w(Math.max(c.top, c.top + (e.h - g) * d.topRatio));
        c.left = w(Math.max(c.left, c.left + (e.w - f) * d.leftRatio));
        return c
    }, _afterZoomIn: function () {
        var a = b.current;
        a && (b.isOpen = b.isOpened = !0, b.wrap.css("overflow", "visible").addClass("fancybox-opened"), b.update(), (a.closeClick || a.nextClick && 1 < b.group.length) && b.inner.css("cursor", "pointer").bind("click.fb", function (d) {
            !f(d.target).is("a") && !f(d.target).parent().is("a") && (d.preventDefault(), b[a.closeClick ? "close" : "next"]())
        }), a.closeBtn && f(a.tpl.closeBtn).appendTo(b.skin).bind("click.fb", function (a) {
            a.preventDefault();
            b.close()
        }), a.arrows && 1 < b.group.length && ((a.loop || 0 < a.index) && f(a.tpl.prev).appendTo(b.outer).bind("click.fb", b.prev), (a.loop || a.index < b.group.length - 1) && f(a.tpl.next).appendTo(b.outer).bind("click.fb", b.next)), b.trigger("afterShow"), !a.loop && a.index === a.group.length - 1 ? b.play(!1) : b.opts.autoPlay && !b.player.isActive && (b.opts.autoPlay = !1, b.play()))
    }, _afterZoomOut: function (a) {
        a = a || b.current;
        f(".fancybox-wrap").trigger("onReset").remove();
        f.extend(b, {group: {}, opts: {}, router: !1, current: null, isActive: !1, isOpened: !1, isOpen: !1, isClosing: !1, wrap: null, skin: null, outer: null, inner: null});
        b.trigger("afterClose", a)
    }});
    b.transitions = {getOrigPosition: function () {
        var a = b.current, d = a.element, e = a.orig, c = {}, f = 50, g = 50, h = a.hPadding, j = a.wPadding, m = b.getViewport();
        !e && (a.isDom && d.is(":visible")) && (e = d.find("img:first"), e.length || (e = d));
        t(e) ? (c = e.offset(), e.is("img") && (f = e.outerWidth(), g = e.outerHeight())) : (c.top = m.y + (m.h - g) * a.topRatio, c.left = m.x + (m.w - f) * a.leftRatio);
        if ("fixed" === b.wrap.css("position") || a.locked)c.top -= m.y, c.left -= m.x;
        return c = {top: w(c.top - h * a.topRatio), left: w(c.left - j * a.leftRatio), width: w(f + j), height: w(g + h)}
    }, step: function (a, d) {
        var e, c, f = d.prop;
        c = b.current;
        var g = c.wrapSpace, h = c.skinSpace;
        if ("width" === f || "height" === f)e = d.end === d.start ? 1 : (a - d.start) / (d.end - d.start), b.isClosing && (e = 1 - e), c = "width" === f ? c.wPadding : c.hPadding, c = a - c, b.skin[f](l("width" === f ? c : c - g * e)), b.inner[f](l("width" === f ? c : c - g * e - h * e))
    }, zoomIn: function () {
        var a = b.current, d = a.pos, e = a.openEffect, c = "elastic" === e, k = f.extend({opacity: 1}, d);
        delete k.position;
        c ? (d = this.getOrigPosition(), a.openOpacity && (d.opacity = 0.1)) : "fade" === e && (d.opacity = 0.1);
        b.wrap.css(d).animate(k, {duration: "none" === e ? 0 : a.openSpeed, easing: a.openEasing, step: c ? this.step : null, complete: b._afterZoomIn})
    }, zoomOut: function () {
        var a = b.current, d = a.closeEffect, e = "elastic" === d, c = {opacity: 0.1};
        e && (c = this.getOrigPosition(), a.closeOpacity && (c.opacity = 0.1));
        b.wrap.animate(c, {duration: "none" === d ? 0 : a.closeSpeed, easing: a.closeEasing, step: e ? this.step : null, complete: b._afterZoomOut})
    }, changeIn: function () {
        var a = b.current, d = a.nextEffect, e = a.pos, c = {opacity: 1}, f = b.direction, g;
        e.opacity = 0.1;
        "elastic" === d && (g = "down" === f || "up" === f ? "top" : "left", "down" === f || "right" === f ? (e[g] = w(l(e[g]) - 200), c[g] = "+=200px") : (e[g] = w(l(e[g]) + 200), c[g] = "-=200px"));
        "none" === d ? b._afterZoomIn() : b.wrap.css(e).animate(c, {duration: a.nextSpeed, easing: a.nextEasing, complete: b._afterZoomIn})
    }, changeOut: function () {
        var a = b.previous, d = a.prevEffect, e = {opacity: 0.1}, c = b.direction;
        "elastic" === d && (e["down" === c || "up" === c ? "top" : "left"] = ("up" === c || "left" === c ? "-" : "+") + "=200px");
        a.wrap.animate(e, {duration: "none" === d ? 0 : a.prevSpeed, easing: a.prevEasing, complete: function () {
            f(this).trigger("onReset").remove()
        }})
    }};
    b.helpers.overlay = {defaults: {closeClick: !0, speedOut: 200, showEarly: !0, css: {}, locked: !s, fixed: !0}, overlay: null, fixed: !1, el: f("html"), create: function (a) {
        a = f.extend({}, this.defaults, a);
        this.overlay && this.close();
        this.overlay = f('<div class="fancybox-overlay"></div>').appendTo(b.coming ? b.coming.parent : a.parent);
        this.fixed = !1;
        a.fixed && b.defaults.fixed && (this.overlay.addClass("fancybox-overlay-fixed"), this.fixed = !0)
    }, open: function (a) {
        var d = this;
        a = f.extend({}, this.defaults, a);
        this.overlay ? this.overlay.unbind(".overlay").width("auto").height("auto") : this.create(a);
        this.fixed || (n.bind("resize.overlay", f.proxy(this.update, this)), this.update());
        a.closeClick && this.overlay.bind("click.overlay", function (a) {
            if (f(a.target).hasClass("fancybox-overlay"))return b.isActive ? b.close() : d.close(), !1
        });
        this.overlay.css(a.css).show()
    }, close: function () {
        var a, b;
        n.unbind("resize.overlay");
        this.el.hasClass("fancybox-lock") && (f(".fancybox-margin").removeClass("fancybox-margin"), a = n.scrollTop(), b = n.scrollLeft(), this.el.removeClass("fancybox-lock"), n.scrollTop(a).scrollLeft(b));
        f(".fancybox-overlay").remove().hide();
        f.extend(this, {overlay: null, fixed: !1})
    }, update: function () {
        var a = "100%", b;
        this.overlay.width(a).height("100%");
        I ? (b = Math.max(G.documentElement.offsetWidth, G.body.offsetWidth), p.width() > b && (a = p.width())) : p.width() > n.width() && (a = p.width());
        this.overlay.width(a).height(p.height())
    }, onReady: function (a, b) {
        var e = this.overlay;
        f(".fancybox-overlay").stop(!0, !0);
        e || this.create(a);
        a.locked && (this.fixed && b.fixed) && (e || (this.margin = p.height() > n.height() ? f("html").css("margin-right").replace("px", "") : !1), b.locked = this.overlay.append(b.wrap), b.fixed = !1);
        !0 === a.showEarly && this.beforeShow.apply(this, arguments)
    }, beforeShow: function (a, b) {
        var e, c;
        b.locked && (!1 !== this.margin && (f("*").filter(function () {
            return"fixed" === f(this).css("position") && !f(this).hasClass("fancybox-overlay") && !f(this).hasClass("fancybox-wrap")
        }).addClass("fancybox-margin"), this.el.addClass("fancybox-margin")), e = n.scrollTop(), c = n.scrollLeft(), this.el.addClass("fancybox-lock"), n.scrollTop(e).scrollLeft(c));
        this.open(a)
    }, onUpdate: function () {
        this.fixed || this.update()
    }, afterClose: function (a) {
        this.overlay && !b.coming && this.overlay.fadeOut(a.speedOut, f.proxy(this.close, this))
    }};
    b.helpers.title = {defaults: {type: "float", position: "bottom"}, beforeShow: function (a) {
        var d = b.current, e = d.title, c = a.type;
        f.isFunction(e) && (e = e.call(d.element, d));
        if (q(e) && "" !== f.trim(e)) {
            d = f('<div class="fancybox-title fancybox-title-' + c + '-wrap">' + e + "</div>");
            switch (c) {
                case"inside":
                    c = b.skin;
                    break;
                case"outside":
                    c = b.wrap;
                    break;
                case"over":
                    c = b.inner;
                    break;
                default:
                    c = b.skin, d.appendTo("body"), I && d.width(d.width()), d.wrapInner('<span class="child"></span>'), b.current.margin[2] += Math.abs(l(d.css("margin-bottom")))
            }
            d["top" === a.position ? "prependTo" : "appendTo"](c)
        }
    }};
    f.fn.fancybox = function (a) {
        var d, e = f(this), c = this.selector || "", k = function (g) {
            var h = f(this).blur(), j = d, k, l;
            !g.ctrlKey && (!g.altKey && !g.shiftKey && !g.metaKey) && !h.is(".fancybox-wrap") && (k = a.groupAttr || "data-fancybox-group", l = h.attr(k), l || (k = "rel", l = h.get(0)[k]), l && ("" !== l && "nofollow" !== l) && (h = c.length ? f(c) : e, h = h.filter("[" + k + '="' + l + '"]'), j = h.index(this)), a.index = j, !1 !== b.open(h, a) && g.preventDefault())
        };
        a = a || {};
        d = a.index || 0;
        !c || !1 === a.live ? e.unbind("click.fb-start").bind("click.fb-start", k) : p.undelegate(c, "click.fb-start").delegate(c + ":not('.fancybox-item, .fancybox-nav')", "click.fb-start", k);
        this.filter("[data-fancybox-start=1]").trigger("click");
        return this
    };
    p.ready(function () {
        var a, d;
        f.scrollbarWidth === v && (f.scrollbarWidth = function () {
            var a = f('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo("body"), b = a.children(), b = b.innerWidth() - b.height(99).innerWidth();
            a.remove();
            return b
        });
        if (f.support.fixedPosition === v) {
            a = f.support;
            d = f('<div style="position:fixed;top:20px;"></div>').appendTo("body");
            var e = 20 === d[0].offsetTop || 15 === d[0].offsetTop;
            d.remove();
            a.fixedPosition = e
        }
        f.extend(b.defaults, {scrollbarWidth: f.scrollbarWidth(), fixed: f.support.fixedPosition, parent: f("body")});
        a = f(r).width();
        J.addClass("fancybox-lock-test");
        d = f(r).width();
        J.removeClass("fancybox-lock-test");
        f("<style type='text/css'>.fancybox-margin{margin-right:" + (d - a) + "px;}</style>").appendTo("head")
    })
})(window, document, jQuery);

(function (e) {
    function t() {
        var e = location.href;
        hashtag = e.indexOf("#prettyPhoto") !== -1 ? decodeURI(e.substring(e.indexOf("#prettyPhoto") + 1, e.length)) : false;
        return hashtag
    }

    function n() {
        if (typeof theRel == "undefined")return;
        location.hash = theRel + "/" + rel_index + "/"
    }

    function r() {
        if (location.href.indexOf("#prettyPhoto") !== -1)location.hash = "prettyPhoto"
    }

    function i(e, t) {
        e = e.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var n = "[\\?&]" + e + "=([^&#]*)";
        var r = new RegExp(n);
        var i = r.exec(t);
        return i == null ? "" : i[1]
    }

    e.prettyPhoto = {version: "3.1.5"};
    e.fn.prettyPhoto = function (s) {
        function g() {
            e(".pp_loaderIcon").hide();
            projectedTop = scroll_pos["scrollTop"] + (d / 2 - a["containerHeight"] / 2);
            if (projectedTop < 0)projectedTop = 0;
            $ppt.fadeTo(settings.animation_speed, 1);
            $pp_pic_holder.find(".pp_content").animate({height: a["contentHeight"], width: a["contentWidth"]}, settings.animation_speed);
            $pp_pic_holder.animate({top: projectedTop, left: v / 2 - a["containerWidth"] / 2 < 0 ? 0 : v / 2 - a["containerWidth"] / 2, width: a["containerWidth"]}, settings.animation_speed, function () {
                $pp_pic_holder.find(".pp_hoverContainer,#fullResImage").height(a["height"]).width(a["width"]);
                $pp_pic_holder.find(".pp_fade").fadeIn(settings.animation_speed);
                if (isSet && S(pp_images[set_position]) == "image") {
                    $pp_pic_holder.find(".pp_hoverContainer").show()
                } else {
                    $pp_pic_holder.find(".pp_hoverContainer").hide()
                }
                if (settings.allow_expand) {
                    if (a["resized"]) {
                        e("a.pp_expand,a.pp_contract").show()
                    } else {
                        e("a.pp_expand").hide()
                    }
                }
                if (settings.autoplay_slideshow && !m && !f)e.prettyPhoto.startSlideshow();
                settings.changepicturecallback();
                f = true
            });
            C();
            s.ajaxcallback()
        }

        function y(t) {
            $pp_pic_holder.find("#pp_full_res object,#pp_full_res embed").css("visibility", "hidden");
            $pp_pic_holder.find(".pp_fade").fadeOut(settings.animation_speed, function () {
                e(".pp_loaderIcon").show();
                t()
            })
        }

        function b(t) {
            t > 1 ? e(".pp_nav").show() : e(".pp_nav").hide()
        }

        function w(e, t) {
            resized = false;
            E(e, t);
            imageWidth = e, imageHeight = t;
            if ((p > v || h > d) && doresize && settings.allow_resize && !u) {
                resized = true, fitting = false;
                while (!fitting) {
                    if (p > v) {
                        imageWidth = v - 200;
                        imageHeight = t / e * imageWidth
                    } else if (h > d) {
                        imageHeight = d - 200;
                        imageWidth = e / t * imageHeight
                    } else {
                        fitting = true
                    }
                    h = imageHeight, p = imageWidth
                }
                if (p > v || h > d) {
                    w(p, h)
                }
                E(imageWidth, imageHeight)
            }
            return{width: Math.floor(imageWidth), height: Math.floor(imageHeight), containerHeight: Math.floor(h), containerWidth: Math.floor(p) + settings.horizontal_padding * 2, contentHeight: Math.floor(l), contentWidth: Math.floor(c), resized: resized}
        }

        function E(t, n) {
            t = parseFloat(t);
            n = parseFloat(n);
            $pp_details = $pp_pic_holder.find(".pp_details");
            $pp_details.width(t);
            detailsHeight = parseFloat($pp_details.css("marginTop")) + parseFloat($pp_details.css("marginBottom"));
            $pp_details = $pp_details.clone().addClass(settings.theme).width(t).appendTo(e("body")).css({position: "absolute", top: -1e4});
            detailsHeight += $pp_details.height();
            detailsHeight = detailsHeight <= 34 ? 36 : detailsHeight;
            $pp_details.remove();
            $pp_title = $pp_pic_holder.find(".ppt");
            $pp_title.width(t);
            titleHeight = parseFloat($pp_title.css("marginTop")) + parseFloat($pp_title.css("marginBottom"));
            $pp_title = $pp_title.clone().appendTo(e("body")).css({position: "absolute", top: -1e4});
            titleHeight += $pp_title.height();
            $pp_title.remove();
            l = n + detailsHeight;
            c = t;
            h = l + titleHeight + $pp_pic_holder.find(".pp_top").height() + $pp_pic_holder.find(".pp_bottom").height();
            p = t
        }

        function S(e) {
            if (e.match(/youtube\.com\/watch/i) || e.match(/youtu\.be/i)) {
                return"youtube"
            } else if (e.match(/vimeo\.com/i)) {
                return"vimeo"
            } else if (e.match(/\b.mov\b/i)) {
                return"quicktime"
            } else if (e.match(/\b.swf\b/i)) {
                return"flash"
            } else if (e.match(/\biframe=true\b/i)) {
                return"iframe"
            } else if (e.match(/\bajax=true\b/i)) {
                return"ajax"
            } else if (e.match(/\bcustom=true\b/i)) {
                return"custom"
            } else if (e.substr(0, 1) == "#") {
                return"inline"
            } else {
                return"image"
            }
        }

        function x() {
            if (doresize && typeof $pp_pic_holder != "undefined") {
                scroll_pos = T();
                contentHeight = $pp_pic_holder.height(), contentwidth = $pp_pic_holder.width();
                projectedTop = d / 2 + scroll_pos["scrollTop"] - contentHeight / 2;
                if (projectedTop < 0)projectedTop = 0;
                if (contentHeight > d)return;
                $pp_pic_holder.css({top: projectedTop, left: v / 2 + scroll_pos["scrollLeft"] - contentwidth / 2})
            }
        }

        function T() {
            if (self.pageYOffset) {
                return{scrollTop: self.pageYOffset, scrollLeft: self.pageXOffset}
            } else if (document.documentElement && document.documentElement.scrollTop) {
                return{scrollTop: document.documentElement.scrollTop, scrollLeft: document.documentElement.scrollLeft}
            } else if (document.body) {
                return{scrollTop: document.body.scrollTop, scrollLeft: document.body.scrollLeft}
            }
        }

        function N() {
            d = e(window).height(), v = e(window).width();
            if (typeof $pp_overlay != "undefined")$pp_overlay.height(e(document).height()).width(v)
        }

        function C() {
            if (isSet && settings.overlay_gallery && S(pp_images[set_position]) == "image") {
                itemWidth = 52 + 5;
                navWidth = settings.theme == "facebook" || settings.theme == "pp_default" ? 50 : 30;
                itemsPerPage = Math.floor((a["containerWidth"] - 100 - navWidth) / itemWidth);
                itemsPerPage = itemsPerPage < pp_images.length ? itemsPerPage : pp_images.length;
                totalPage = Math.ceil(pp_images.length / itemsPerPage) - 1;
                if (totalPage == 0) {
                    navWidth = 0;
                    $pp_gallery.find(".pp_arrow_next,.pp_arrow_previous").hide()
                } else {
                    $pp_gallery.find(".pp_arrow_next,.pp_arrow_previous").show()
                }
                galleryWidth = itemsPerPage * itemWidth;
                fullGalleryWidth = pp_images.length * itemWidth;
                $pp_gallery.css("margin-left", -(galleryWidth / 2 + navWidth / 2)).find("div:first").width(galleryWidth + 5).find("ul").width(fullGalleryWidth).find("li.selected").removeClass("selected");
                goToPage = Math.floor(set_position / itemsPerPage) < totalPage ? Math.floor(set_position / itemsPerPage) : totalPage;
                e.prettyPhoto.changeGalleryPage(goToPage);
                $pp_gallery_li.filter(":eq(" + set_position + ")").addClass("selected")
            } else {
                $pp_pic_holder.find(".pp_content").unbind("mouseenter mouseleave")
            }
        }

        function k(t) {
            if (settings.social_tools)facebook_like_link = settings.social_tools.replace("{location_href}", encodeURIComponent(location.href));
            settings.markup = settings.markup.replace("{pp_social}", "");
            e("body").append(settings.markup);
            $pp_pic_holder = e(".pp_pic_holder"), $ppt = e(".ppt"), $pp_overlay = e("div.pp_overlay");
            if (isSet && settings.overlay_gallery) {
                currentGalleryPage = 0;
                toInject = "";
                for (var n = 0; n < pp_images.length; n++) {
                    if (!pp_images[n].match(/\b(jpg|jpeg|png|gif)\b/gi)) {
                        classname = "default";
                        img_src = ""
                    } else {
                        classname = "";
                        img_src = pp_images[n]
                    }
                    toInject += "<li class='" + classname + "'><a href='#'><img src='" + img_src + "' width='50' alt='' /></a></li>"
                }
                toInject = settings.gallery_markup.replace(/{gallery}/g, toInject);
                $pp_pic_holder.find("#pp_full_res").after(toInject);
                $pp_gallery = e(".pp_pic_holder .pp_gallery"), $pp_gallery_li = $pp_gallery.find("li");
                $pp_gallery.find(".pp_arrow_next").click(function () {
                    e.prettyPhoto.changeGalleryPage("next");
                    e.prettyPhoto.stopSlideshow();
                    return false
                });
                $pp_gallery.find(".pp_arrow_previous").click(function () {
                    e.prettyPhoto.changeGalleryPage("previous");
                    e.prettyPhoto.stopSlideshow();
                    return false
                });
                $pp_pic_holder.find(".pp_content").hover(function () {
                    $pp_pic_holder.find(".pp_gallery:not(.disabled)").fadeIn()
                }, function () {
                    $pp_pic_holder.find(".pp_gallery:not(.disabled)").fadeOut()
                });
                itemWidth = 52 + 5;
                $pp_gallery_li.each(function (t) {
                    e(this).find("a").click(function () {
                        e.prettyPhoto.changePage(t);
                        e.prettyPhoto.stopSlideshow();
                        return false
                    })
                })
            }
            if (settings.slideshow) {
                $pp_pic_holder.find(".pp_nav").prepend('<a href="#" class="pp_play">Play</a>');
                $pp_pic_holder.find(".pp_nav .pp_play").click(function () {
                    e.prettyPhoto.startSlideshow();
                    return false
                })
            }
            $pp_pic_holder.attr("class", "pp_pic_holder " + settings.theme);
            $pp_overlay.css({opacity: 0, height: e(document).height(), width: e(window).width()}).bind("click", function () {
                if (!settings.modal)e.prettyPhoto.close()
            });
            e("a.pp_close").bind("click", function () {
                e.prettyPhoto.close();
                return false
            });
            if (settings.allow_expand) {
                e("a.pp_expand").bind("click", function (t) {
                    if (e(this).hasClass("pp_expand")) {
                        e(this).removeClass("pp_expand").addClass("pp_contract");
                        doresize = false
                    } else {
                        e(this).removeClass("pp_contract").addClass("pp_expand");
                        doresize = true
                    }
                    y(function () {
                        e.prettyPhoto.open()
                    });
                    return false
                })
            }
            $pp_pic_holder.find(".pp_previous, .pp_nav .pp_arrow_previous").bind("click", function () {
                e.prettyPhoto.changePage("previous");
                e.prettyPhoto.stopSlideshow();
                return false
            });
            $pp_pic_holder.find(".pp_next, .pp_nav .pp_arrow_next").bind("click", function () {
                e.prettyPhoto.changePage("next");
                e.prettyPhoto.stopSlideshow();
                return false
            });
            x()
        }

        s = jQuery.extend({hook: "rel", animation_speed: "fast", ajaxcallback: function () {
        }, slideshow: 5e3, autoplay_slideshow: false, opacity: .8, show_title: true, allow_resize: true, allow_expand: true, default_width: 500, default_height: 344, counter_separator_label: "/", theme: "pp_default", horizontal_padding: 20, hideflash: false, wmode: "opaque", autoplay: true, modal: false, deeplinking: true, overlay_gallery: true, overlay_gallery_max: 30, keyboard_shortcuts: true, changepicturecallback: function () {
        }, callback: function () {
        }, ie6_fallback: true, markup: '<div class="pp_pic_holder">       <div class="ppt"> </div>       <div class="pp_top">        <div class="pp_left"></div>        <div class="pp_middle"></div>        <div class="pp_right"></div>       </div>       <div class="pp_content_container">        <div class="pp_left">        <div class="pp_right">         <div class="pp_content">          <div class="pp_loaderIcon"></div>          <div class="pp_fade">           <a href="#" class="pp_expand" title="Expand the image">Expand</a>           <div class="pp_hoverContainer">            <a class="pp_next" href="#">next</a>            <a class="pp_previous" href="#">previous</a>           </div>           <div id="pp_full_res"></div>           <div class="pp_details">            <div class="pp_nav">             <a href="#" class="pp_arrow_previous">Previous</a>             <p class="currentTextHolder">0/0</p>             <a href="#" class="pp_arrow_next">Next</a>            </div>            <p class="pp_description"></p>            <div class="pp_social">{pp_social}</div>            <a class="pp_close" href="#">Close</a>           </div>          </div>         </div>        </div>        </div>       </div>       <div class="pp_bottom">        <div class="pp_left"></div>        <div class="pp_middle"></div>        <div class="pp_right"></div>       </div>      </div>      <div class="pp_overlay"></div>', gallery_markup: '<div class="pp_gallery">         <a href="#" class="pp_arrow_previous">Previous</a>         <div>          <ul>           {gallery}          </ul>         </div>         <a href="#" class="pp_arrow_next">Next</a>        </div>', image_markup: '<img id="fullResImage" src="{path}" />', flash_markup: '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="{width}" height="{height}"><param name="wmode" value="{wmode}" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="{path}" /><embed src="{path}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="{width}" height="{height}" wmode="{wmode}"></embed></object>', quicktime_markup: '<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="{height}" width="{width}"><param name="src" value="{path}"><param name="autoplay" value="{autoplay}"><param name="type" value="video/quicktime"><embed src="{path}" height="{height}" width="{width}" autoplay="{autoplay}" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/"></embed></object>', iframe_markup: '<iframe src ="{path}" width="{width}" height="{height}" frameborder="no"></iframe>', inline_markup: '<div class="pp_inline">{content}</div>', custom_markup: "", social_tools: '<div class="twitter"><a href="http://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div><div class="facebook"><iframe src="//www.facebook.com/plugins/like.php?locale=en_US&href={location_href}&layout=button_count&show_faces=true&width=500&action=like&font&colorscheme=light&height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:23px;" allowTransparency="true"></iframe></div>'}, s);
        var o = this, u = false, a, f, l, c, h, p, d = e(window).height(), v = e(window).width(), m;
        doresize = true, scroll_pos = T();
        e(window).unbind("resize.prettyphoto").bind("resize.prettyphoto", function () {
            x();
            N()
        });
        if (s.keyboard_shortcuts) {
            e(document).unbind("keydown.prettyphoto").bind("keydown.prettyphoto", function (t) {
                if (typeof $pp_pic_holder != "undefined") {
                    if ($pp_pic_holder.is(":visible")) {
                        switch (t.keyCode) {
                            case 37:
                                e.prettyPhoto.changePage("previous");
                                t.preventDefault();
                                break;
                            case 39:
                                e.prettyPhoto.changePage("next");
                                t.preventDefault();
                                break;
                            case 27:
                                if (!settings.modal)e.prettyPhoto.close();
                                t.preventDefault();
                                break
                        }
                    }
                }
            })
        }
        e.prettyPhoto.initialize = function () {
            settings = s;
            if (settings.theme == "pp_default")settings.horizontal_padding = 16;
            theRel = e(this).attr(settings.hook);
            galleryRegExp = /\[(?:.*)\]/;
            isSet = galleryRegExp.exec(theRel) ? true : false;
            pp_images = isSet ? jQuery.map(o, function (t, n) {
                if (e(t).attr(settings.hook).indexOf(theRel) != -1)return e(t).attr("href")
            }) : e.makeArray(e(this).attr("href"));
            pp_titles = isSet ? jQuery.map(o, function (t, n) {
                if (e(t).attr(settings.hook).indexOf(theRel) != -1)return e(t).find("img").attr("alt") ? e(t).find("img").attr("alt") : ""
            }) : e.makeArray(e(this).find("img").attr("alt"));
            pp_descriptions = isSet ? jQuery.map(o, function (t, n) {
                if (e(t).attr(settings.hook).indexOf(theRel) != -1)return e(t).attr("title") ? e(t).attr("title") : ""
            }) : e.makeArray(e(this).attr("title"));
            if (pp_images.length > settings.overlay_gallery_max)settings.overlay_gallery = false;
            set_position = jQuery.inArray(e(this).attr("href"), pp_images);
            rel_index = isSet ? set_position : e("a[" + settings.hook + "^='" + theRel + "']").index(e(this));
            k(this);
            if (settings.allow_resize)e(window).bind("scroll.prettyphoto", function () {
                x()
            });
            e.prettyPhoto.open();
            return false
        };
        e.prettyPhoto.open = function (t) {
            if (typeof settings == "undefined") {
                settings = s;
                pp_images = e.makeArray(arguments[0]);
                pp_titles = arguments[1] ? e.makeArray(arguments[1]) : e.makeArray("");
                pp_descriptions = arguments[2] ? e.makeArray(arguments[2]) : e.makeArray("");
                isSet = pp_images.length > 1 ? true : false;
                set_position = arguments[3] ? arguments[3] : 0;
                k(t.target)
            }
            if (settings.hideflash)e("object,embed,iframe[src*=youtube],iframe[src*=vimeo]").css("visibility", "hidden");
            b(e(pp_images).size());
            e(".pp_loaderIcon").show();
            if (settings.deeplinking)n();
            if (settings.social_tools) {
                facebook_like_link = settings.social_tools.replace("{location_href}", encodeURIComponent(location.href));
                $pp_pic_holder.find(".pp_social").html(facebook_like_link)
            }
            if ($ppt.is(":hidden"))$ppt.css("opacity", 0).show();
            $pp_overlay.show().fadeTo(settings.animation_speed, settings.opacity);
            $pp_pic_holder.find(".currentTextHolder").text(set_position + 1 + settings.counter_separator_label + e(pp_images).size());
            if (typeof pp_descriptions[set_position] != "undefined" && pp_descriptions[set_position] != "") {
                $pp_pic_holder.find(".pp_description").show().html(unescape(pp_descriptions[set_position]))
            } else {
                $pp_pic_holder.find(".pp_description").hide()
            }
            movie_width = parseFloat(i("width", pp_images[set_position])) ? i("width", pp_images[set_position]) : settings.default_width.toString();
            movie_height = parseFloat(i("height", pp_images[set_position])) ? i("height", pp_images[set_position]) : settings.default_height.toString();
            u = false;
            if (movie_height.indexOf("%") != -1) {
                movie_height = parseFloat(e(window).height() * parseFloat(movie_height) / 100 - 150);
                u = true
            }
            if (movie_width.indexOf("%") != -1) {
                movie_width = parseFloat(e(window).width() * parseFloat(movie_width) / 100 - 150);
                u = true
            }
            $pp_pic_holder.fadeIn(function () {
                settings.show_title && pp_titles[set_position] != "" && typeof pp_titles[set_position] != "undefined" ? $ppt.html(unescape(pp_titles[set_position])) : $ppt.html(" ");
                imgPreloader = "";
                skipInjection = false;
                switch (S(pp_images[set_position])) {
                    case"image":
                        imgPreloader = new Image;
                        nextImage = new Image;
                        if (isSet && set_position < e(pp_images).size() - 1)nextImage.src = pp_images[set_position + 1];
                        prevImage = new Image;
                        if (isSet && pp_images[set_position - 1])prevImage.src = pp_images[set_position - 1];
                        $pp_pic_holder.find("#pp_full_res")[0].innerHTML = settings.image_markup.replace(/{path}/g, pp_images[set_position]);
                        imgPreloader.onload = function () {
                            a = w(imgPreloader.width, imgPreloader.height);
                            g()
                        };
                        imgPreloader.onerror = function () {
                            alert("Image cannot be loaded. Make sure the path is correct and image exist.");
                            e.prettyPhoto.close()
                        };
                        imgPreloader.src = pp_images[set_position];
                        break;
                    case"youtube":
                        a = w(movie_width, movie_height);
                        movie_id = i("v", pp_images[set_position]);
                        if (movie_id == "") {
                            movie_id = pp_images[set_position].split("youtu.be/");
                            movie_id = movie_id[1];
                            if (movie_id.indexOf("?") > 0)movie_id = movie_id.substr(0, movie_id.indexOf("?"));
                            if (movie_id.indexOf("&") > 0)movie_id = movie_id.substr(0, movie_id.indexOf("&"))
                        }
                        movie = "http://www.youtube.com/embed/" + movie_id;
                        i("rel", pp_images[set_position]) ? movie += "?rel=" + i("rel", pp_images[set_position]) : movie += "?rel=1";
                        if (settings.autoplay)movie += "&autoplay=1";
                        toInject = settings.iframe_markup.replace(/{width}/g, a["width"]).replace(/{height}/g, a["height"]).replace(/{wmode}/g, settings.wmode).replace(/{path}/g, movie);
                        break;
                    case"vimeo":
                        a = w(movie_width, movie_height);
                        movie_id = pp_images[set_position];
                        var t = /http(s?):\/\/(www\.)?vimeo.com\/(\d+)/;
                        var n = movie_id.match(t);
                        movie = "http://player.vimeo.com/video/" + n[3] + "?title=0&byline=0&portrait=0";
                        if (settings.autoplay)movie += "&autoplay=1;";
                        vimeo_width = a["width"] + "/embed/?moog_width=" + a["width"];
                        toInject = settings.iframe_markup.replace(/{width}/g, vimeo_width).replace(/{height}/g, a["height"]).replace(/{path}/g, movie);
                        break;
                    case"quicktime":
                        a = w(movie_width, movie_height);
                        a["height"] += 15;
                        a["contentHeight"] += 15;
                        a["containerHeight"] += 15;
                        toInject = settings.quicktime_markup.replace(/{width}/g, a["width"]).replace(/{height}/g, a["height"]).replace(/{wmode}/g, settings.wmode).replace(/{path}/g, pp_images[set_position]).replace(/{autoplay}/g, settings.autoplay);
                        break;
                    case"flash":
                        a = w(movie_width, movie_height);
                        flash_vars = pp_images[set_position];
                        flash_vars = flash_vars.substring(pp_images[set_position].indexOf("flashvars") + 10, pp_images[set_position].length);
                        filename = pp_images[set_position];
                        filename = filename.substring(0, filename.indexOf("?"));
                        toInject = settings.flash_markup.replace(/{width}/g, a["width"]).replace(/{height}/g, a["height"]).replace(/{wmode}/g, settings.wmode).replace(/{path}/g, filename + "?" + flash_vars);
                        break;
                    case"iframe":
                        a = w(movie_width, movie_height);
                        frame_url = pp_images[set_position];
                        frame_url = frame_url.substr(0, frame_url.indexOf("iframe") - 1);
                        toInject = settings.iframe_markup.replace(/{width}/g, a["width"]).replace(/{height}/g, a["height"]).replace(/{path}/g, frame_url);
                        break;
                    case"ajax":
                        doresize = false;
                        a = w(movie_width, movie_height);
                        doresize = true;
                        skipInjection = true;
                        e.get(pp_images[set_position], function (e) {
                            toInject = settings.inline_markup.replace(/{content}/g, e);
                            $pp_pic_holder.find("#pp_full_res")[0].innerHTML = toInject;
                            g()
                        });
                        break;
                    case"custom":
                        a = w(movie_width, movie_height);
                        toInject = settings.custom_markup;
                        break;
                    case"inline":
                        myClone = e(pp_images[set_position]).clone().append('<br clear="all" />').css({width: settings.default_width}).wrapInner('<div id="pp_full_res"><div class="pp_inline"></div></div>').appendTo(e("body")).show();
                        doresize = false;
                        a = w(e(myClone).width(), e(myClone).height());
                        doresize = true;
                        e(myClone).remove();
                        toInject = settings.inline_markup.replace(/{content}/g, e(pp_images[set_position]).html());
                        break
                }
                if (!imgPreloader && !skipInjection) {
                    $pp_pic_holder.find("#pp_full_res")[0].innerHTML = toInject;
                    g()
                }
            });
            return false
        };
        e.prettyPhoto.changePage = function (t) {
            currentGalleryPage = 0;
            if (t == "previous") {
                set_position--;
                if (set_position < 0)set_position = e(pp_images).size() - 1
            } else if (t == "next") {
                set_position++;
                if (set_position > e(pp_images).size() - 1)set_position = 0
            } else {
                set_position = t
            }
            rel_index = set_position;
            if (!doresize)doresize = true;
            if (settings.allow_expand) {
                e(".pp_contract").removeClass("pp_contract").addClass("pp_expand")
            }
            y(function () {
                e.prettyPhoto.open()
            })
        };
        e.prettyPhoto.changeGalleryPage = function (e) {
            if (e == "next") {
                currentGalleryPage++;
                if (currentGalleryPage > totalPage)currentGalleryPage = 0
            } else if (e == "previous") {
                currentGalleryPage--;
                if (currentGalleryPage < 0)currentGalleryPage = totalPage
            } else {
                currentGalleryPage = e
            }
            slide_speed = e == "next" || e == "previous" ? settings.animation_speed : 0;
            slide_to = currentGalleryPage * itemsPerPage * itemWidth;
            $pp_gallery.find("ul").animate({left: -slide_to}, slide_speed)
        };
        e.prettyPhoto.startSlideshow = function () {
            if (typeof m == "undefined") {
                $pp_pic_holder.find(".pp_play").unbind("click").removeClass("pp_play").addClass("pp_pause").click(function () {
                    e.prettyPhoto.stopSlideshow();
                    return false
                });
                m = setInterval(e.prettyPhoto.startSlideshow, settings.slideshow)
            } else {
                e.prettyPhoto.changePage("next")
            }
        };
        e.prettyPhoto.stopSlideshow = function () {
            $pp_pic_holder.find(".pp_pause").unbind("click").removeClass("pp_pause").addClass("pp_play").click(function () {
                e.prettyPhoto.startSlideshow();
                return false
            });
            clearInterval(m);
            m = undefined
        };
        e.prettyPhoto.close = function () {
            if ($pp_overlay.is(":animated"))return;
            e.prettyPhoto.stopSlideshow();
            $pp_pic_holder.stop().find("object,embed").css("visibility", "hidden");
            e("div.pp_pic_holder,div.ppt,.pp_fade").fadeOut(settings.animation_speed, function () {
                e(this).remove()
            });
            $pp_overlay.fadeOut(settings.animation_speed, function () {
                if (settings.hideflash)e("object,embed,iframe[src*=youtube],iframe[src*=vimeo]").css("visibility", "visible");
                e(this).remove();
                e(window).unbind("scroll.prettyphoto");
                r();
                settings.callback();
                doresize = true;
                f = false;
                delete settings
            })
        };
        if (!pp_alreadyInitialized && t()) {
            pp_alreadyInitialized = true;
            hashIndex = t();
            hashRel = hashIndex;
            hashIndex = hashIndex.substring(hashIndex.indexOf("/") + 1, hashIndex.length - 1);
            hashRel = hashRel.substring(0, hashRel.indexOf("/"));
            setTimeout(function () {
                e("a[" + s.hook + "^='" + hashRel + "']:eq(" + hashIndex + ")").trigger("click")
            }, 50)
        }
        return this.unbind("click.prettyphoto").bind("click.prettyphoto", e.prettyPhoto.initialize)
    };
})(jQuery);
var pp_alreadyInitialized = false

/*! xForm v1.0.0 | insigne.ru */
    ;
(function ($) {
    var defaults = {url: '', useAjax: true, popoverPlacement: 'top', submitButtonSelector: '[type="submit"]', waitingText: 'Ждите...', sendErrorMsg: 'Извините, возникла ошибка при отправке, попробуйте обновить страницу и попробовать снова', onSuccess: '', onFail: '', selector: '.xform', extraData: ''};
    $.fn.xForm = function (options) {
        if (this.length == 0)return this;
        if (this.length > 1) {
            this.each(function () {
                $(this).xForm(options)
            });
            return this;
        }
        var xf = {};
        xf.container = this;
        var init = function () {
            xf.settings = $.extend({}, defaults, options);
            xf.form = xf.container.find('form');
            if (xf.form.length == 0) {
                return this;
            }
            if (xf.settings.useAjax == false) {
                initPopovers();
                return this;
            }
            initPopovers();
            $(document).on('submit', xf.settings.selector + ' form', function (e) {
                var formData = $(this).serialize() + (xf.settings.extraData ? '&' + xf.settings.extraData : '');
                var $button = $(this).find(xf.settings.submitButtonSelector);
                var waitingText = xf.settings.waitingText;
                if ($button.get(0).tagName == 'INPUT') {
                    var oldText = $button.attr('value');
                } else {
                    var oldText = $button.text();
                }
                changeButtonState($button, waitingText, false);
                var url = xf.settings.url;
                if (url == '') {
                    url = xf.container.data('url');
                    if (url == '' || url == undefined) {
                        url = xf.form.attr('action');
                        if (url == '' || url == undefined) {
                            url = window.location.href;
                        }
                    }
                }
                $.post(url, formData,function (data) {
                    if (xf.settings.onSuccess != '') {
                        xf.settings.onSuccess(data);
                    } else {
                        onSuccess(data);
                    }
                    changeButtonState($button, oldText, true);
                }, 'html').fail(function () {
                    if (xf.settings.onFail != '') {
                        xf.settings.onFail();
                    } else {
                        onFail();
                    }
                    changeButtonState($button, oldText, true);
                });
                return false;
            });
            return this;
        };
        var initPopovers = function () {
            var $pe = xf.form.find('input, textarea, select, button');
            $pe.popover({animation: false, trigger: 'manual', placement: xf.settings.popoverPlacement});
            $pe.click(function () {
                $(this).popover('destroy');
            });
            $pe.popover('show');
            xf.form.find('.popover').click(function () {
                $(this).prev('input, textarea, select, button').popover('destroy');
            });
            return this;
        };
        var changeButtonState = function ($button, text, enable) {
            if ($button.get(0).tagName == 'INPUT') {
                $button.attr('value', text);
            } else {
                $button.text(text);
            }
            if (enable != true)
                $button.attr('disabled', 'disabled'); else
                $button.removeAttr('disabled');
            return this;
        };
        var onSuccess = function (data) {
            xf.container.html(data);
            xf.form = xf.container.find('form');
            initPopovers();
            return this;
        };
        var onFail = function () {
            alert(xf.settings.sendErrorMsg);
            return this;
        };
        init();
    };
})(jQuery);

/*! main.js v1.0.0 | insigne.ru */
;
function updateScreenMode() {
    var maxMobileWidth = 767;
    var maxTabletWidth = 991;
    var w = window.outerWidth;
    window.params.isPrevMobileOrTablet = window.params.isMobile || window.params.isTablet;
    window.params.isMobile = w <= maxMobileWidth;
    window.params.isTablet = w <= maxTabletWidth && !window.params.isMobile;
    window.params.isDesktop = !(window.params.isMobile || window.params.isTablet);
}
function updateGalleryView() {
    if ((window.params.isMobile || window.params.isTablet) && !window.params.isPrevMobileOrTablet) {
        var index = window.params.galleryDesktop.find('.tabs-nav li.active:first').index();
        if (index > -1) {
            window.params.galleryMobile.find('.spoiler-title').eq(index).click();
        } else {
            window.params.galleryMobile.find('.spoiler-title:first').eq(index).click();
        }
        var $targets = window.params.galleryMobile.find('.spoiler-content');
        window.params.galleryDesktop.find('.tabs-content > .tab > ul').each(function (i, $e) {
            $targets.eq(i).append($e);
        });
    }
    if (window.params.isDesktop && window.params.isPrevMobileOrTablet) {
        var index = window.params.galleryMobile.find('.spoiler-title.active:first').parent().index();
        if (index > -1) {
            window.params.galleryDesktop.find('.tabs-nav li').eq(index).click();
        } else {
            window.params.galleryDesktop.find('.tabs-nav li:first').click();
        }
        var $targets = window.params.galleryDesktop.find('.tabs-content > .tab');
        window.params.galleryMobile.find('.spoiler-content > ul').each(function (i, $e) {
            $targets.eq(i).append($e);
        });
    }
}
(function ($) {
    $(document).ready(function () {
        $('iframe[src*="www.youtube.com/embed"]').attr('allowfullscreen', 1);
        window.params = window.params ? window.params : {};
        window.params.isMobile = false;
        window.params.isTablet = false;
        window.params.isDesktop = false;
        window.params.galleryDesktop = $('#bmstu-gallery-desktop');
        window.params.galleryMobile = $('#bmstu-gallery-mobile');
        updateScreenMode();
        updateGalleryView();
        $(window).resize(function () {
            updateScreenMode();
            updateGalleryView();
        });
        if (document.location.hash != '') {
            var $el = $(document.location.hash + '-all');
            if ($el.length) {
                $('html, body').delay(200).animate({scrollTop: $($el).offset().top - 100}, 600);
            }
        }
        $(".header").sticky({topSpacing: 0});
        $(document).on('click', '.tabs-nav a', function () {
            return false;
        });
        $('.bxslider').bxSlider({prevText: '', nextText: '', });
        function updateContentCut() {
            var selector = 'h1,h2,h3,h4,h5,h5,ul,p';

            function cutContent($container) {
                if ($container.hasClass('opened')) {
                    return;
                }
                var maxLen = 300;
                var len = 0;
                var cut = false;
                $container.find(selector).each(function (i, e) {
                    if (len >= maxLen) {
                        if (!$(e).hasClass('showLink')) {
                            $(e).hide();
                        }
                    } else {
                        len = len + $(e).text().length;
                    }
                });
                if (len >= maxLen) {
                    $container.addClass('closed');
                    return true;
                } else {
                    return false;
                }
            }

            function showContent($container) {
                $container.find(selector).show();
                $container.removeClass('closed');
            }

            var $contentBlocks = $('.content-cut');
            if (window.params.isMobile) {
                if (!$contentBlocks.hasClass('closed')) {
                    var cutted = cutContent($contentBlocks);
                    if (cutted) {
                        var $showLink = $('<a class="showLink" href="#">Подробнее...</a>');
                        $contentBlocks.append($showLink);
                        $showLink.click(function () {
                            var $p = $(this).parent();
                            var $link = $(this);
                            if ($p.hasClass('closed')) {
                                showContent($p);
                                $link.text('Скрыть');
                                $p.removeClass('closed').addClass('opened');
                            } else {
                                $p.removeClass('opened');
                                cutContent($p);
                                $link.text('Подробнее...');
                                console.log($('.header').height());
                                $('html, body').animate({scrollTop: $link.offset().top - $('.header').height()}, 500);
                            }
                            return false;
                        });
                    }
                }
            } else {
                if ($contentBlocks.hasClass('closed')) {
                    showContent($contentBlocks);
                    $('.showLink').remove();
                }
            }
        }

        updateContentCut();
        $(window).resize(function () {
            updateContentCut();
        });
        if ($(this).width() > 970) {
            $('.main').addClass('desk');
        }
        $('.btn-menu').on('click', function () {
            $(this).toggleClass('active');
            $('.mob-menu').slideToggle(300);
        });
        $('.btn-submenu').on('click', function () {
            var sub = $(this).parent().siblings('.submenu, .mob-submenu, .megamenu');
            $(this).toggleClass('active');
            sub.slideToggle(300);
        });
        $('.menu > li').each(function () {
            var sub = $(this).children('.submenu').size();
            if (sub > 0)$(this).addClass('with-sub');
        });
        $(window).resize(function () {
            if ($('.btn-menu').css('display') === 'block') {
                $('.main').removeClass('desk');
            }
            else {
                $('.main').addClass('desk');
                $('.menu, .submenu, .b-search').removeAttr('style');
            }
        });
        $('.btn-search').on('click', function () {
            $(this).toggleClass('active');
            $('.b-search').fadeToggle(300);
        });
        $('.search-submit, .comment-submit').on('click', function () {
            $(this).parent().submit();
        });
        $('.search-form').on('click', '.search-text-remove', function () {
            $(this).siblings('.search-text').val('');
        });
        $('.btn-reply').on('click', function () {
            if (!$(this).hasClass('cancel-reply')) {
                var comForm = $('.b-comment-form').clone();
                $('.b-comment-form').remove();
                $('.btn-reply').removeClass('cancel-reply').html('<b>reply</b>');
                $(this).addClass('cancel-reply').html('<b>cancel</b>');
                $(this).parent().parent().append(comForm);
                $(this).parent().parent().children('.b-comment-form').focus(function () {
                    $(this).siblings('i').addClass('focused');
                }).focusout(function () {
                    $(this).siblings('i').removeClass('focused');
                });
            }
        });
        $(document).on('click', '.cancel-reply',function () {
            var comForm = $(this).parent().siblings('.b-comment-form').clone();
            $(this).parent().siblings('.b-comment-form').remove();
            $(this).removeClass('cancel-reply').html('<b>reply</b>');
            $('.post').append(comForm);
        }).on('click', '.cancel-reply2',function (event) {
            event.preventDefault();
            var comForm = $(this).parent().parent().clone();
            $(this).parent().parent().remove();
            $('.cancel-reply').removeClass('cancel-reply').html('<b>reply</b>');
            $('.post').append(comForm);
        }).on('focus', 'input, textarea',function () {
            $(this).siblings('i').addClass('focused');
        }).on('focusout', 'input, textarea', function () {
            $(this).siblings('i').removeClass('focused');
        });
        $('.b-contact-form').submit(function () {
            var self = $(this), action = self.attr('action');
            self.prev().slideUp(750, function () {
                self.prev().hide();
                var name = self.find('.field-name'), subj = self.find('.field-subject'), email = self.find('.field-email'), comm = self.find('.field-comments');
                $.post(action, {name: name.val(), email: email.val(), subject: subj.val() || '...', comments: comm.val(), }, function (data) {
                    self.prev().html(data);
                    self.prev().slideDown('slow');
                    if (data.match('success') != null) {
                        name.val('');
                        subj.val('');
                        email.val('');
                        comm.val('');
                    }
                });
            });
            return false;
        });
        (function () {
            $('.b-tabs').on('click', 'li', function () {
                var title = $(this), index = title.index(), tab = title.parent().siblings().children().eq(index);
                if (title.parent().parent().hasClass('a-slide')) {
                    var curTab = tab.siblings('.active');
                    curTab.addClass('cur-tab').siblings().removeClass('cur-tab');
                }
                title.addClass('active').siblings().removeClass('active');
                tab.addClass('active').siblings().removeClass('active');
                if ($.fn.lazyload && !title.data('lazyloaded')) {
                    console.log('Tab: Lazy load tab images');
                    tab.find('img.lazy').lazyload({event: 'tab'});
                    tab.find('img.lazy').trigger('tab');
                    title.data('lazyloaded', '1');
                }
            });
        }());
        $(document).on('click', '.message-close', function () {
            $(this).parent().animate({'opacity': '0'}, 220, function () {
                $(this).hide(200);
            });
        });
        $('.spoiler-title').on('click', function () {
            $(this).toggleClass('active');
            if ($.fn.lazyload && !$(this).data('lazyloaded')) {
                console.log('Spoiler: Lazy load tab images');
                $(this).next().find('img.lazy').lazyload({event: 'tab'});
                $(this).next().find('img.lazy').trigger('tab');
                $(this).data('lazyloaded', '1');
            }
            $(this).next().slideToggle(250, function () {
                if ($(this).offset().top < ($(window).scrollTop() - 80)) {
                    $('html, body').delay(200).animate({scrollTop: $(this).offset().top - 140}, 600);
                }
            });
        });
        $('.b-accordion .spoiler-title').on('click', function () {
            $(this).parent().siblings().children('.spoiler-title').removeClass('active').next('.spoiler-content').slideUp(250);
        });
        $('.collapsible .collapse-open').on('click', function () {
            var collapsible = $(this).closest('.collapsible');
            collapsible.find('.collapse-container').slideDown(250, function () {
                collapsible.removeClass('collapsed');
                $(this).css('display', '');
            });
            return false;
        });
        $('.collapsible .collapse-close').on('click', function () {
            var collapsible = $(this).closest('.collapsible');
            collapsible.find('.collapse-container').slideUp(250, function () {
                collapsible.addClass('collapsed');
                var $t = $(this);
                var top = $t.parent('.collapsible').offset().top - $('.header').height() - 20;
                var scrollPos = $(window).scrollTop();
                if (top < scrollPos) {
                    $('html, body').animate({scrollTop: top}, 500);
                }
                $t.css('display', '');
            });
            return false;
        });
        $('.b-progress-bar').each(function () {
            var cap = parseInt($(this).attr('data-capacity'), 10), val = parseInt($(this).attr('data-value'), 10), len = 100 * (val / cap) + '%';
            $(this).find('.progress-line').css('width', len);
        });
        $('.member-photo').on('mouseenter',function () {
            $(this).children('.b-social').stop().fadeIn(200);
        }).on('mouseleave', function () {
            $(this).children('.b-social').stop().fadeOut(200);
        });
        $('.b-member.m-compact').on('mouseenter',function () {
            $(this).children('.member-meta').stop().fadeIn(200);
        }).on('mouseleave', function () {
            $(this).children('.member-meta').stop().fadeOut(200);
        });
        $('.work-preview a').on('click', function () {
            $(this).parent().trigger('click');
        });
        $.fn.carousel = function (op) {
            var op, ui = {};
            op = $.extend({speed: 500, autoChange: false, interval: 5000}, op);
            ui.carousel = this;
            ui.items = ui.carousel.find('.carousel-item');
            ui.itemsLen = ui.items.length;
            ui.ctrl = $('<div />', {'class': 'carousel-control'});
            ui.prev = $('<div />', {'class': 'carousel-prev'});
            ui.next = $('<div />', {'class': 'carousel-next'});
            ui.pagList = $('<ul />', {'class': 'carousel-pagination'});
            ui.pagItem = $('<li></li>');
            for (var i = 0; i < ui.itemsLen; i++) {
                ui.pagItem.clone().appendTo(ui.pagList);
            }
            ui.prev.appendTo(ui.ctrl);
            ui.next.appendTo(ui.ctrl);
            ui.pagList.appendTo(ui.ctrl);
            ui.ctrl.appendTo(ui.carousel);
            ui.carousel.find('.carousel-pagination li').eq(0).addClass('active');
            ui.carousel.find('.carousel-item').each(function () {
                $(this).hide();
            });
            ui.carousel.find('.carousel-item').eq(0).show().addClass('active');
            var changeImage = function (direction, context) {
                var current = ui.carousel.find('.carousel-item.active');
                if (direction == 'index') {
                    if (current.index() === context.index())
                        return false;
                    context.addClass('active').siblings().removeClass('active');
                    ui.items.eq(context.index()).addClass('current').fadeIn(op.speed, function () {
                        current.removeClass('active').hide();
                        $(this).addClass('active').removeClass('current');
                    });
                }
                if (direction == 'prev') {
                    if (current.index() == 0) {
                        ui.carousel.find('.carousel-item:last').addClass('current').fadeIn(op.speed, function () {
                            current.removeClass('active').hide();
                            $(this).addClass('active').removeClass('current');
                        });
                    }
                    else {
                        current.prev().addClass('current').fadeIn(op.speed, function () {
                            current.removeClass('active').hide();
                            $(this).addClass('active').removeClass('current');
                        });
                    }
                }
                if (direction == undefined) {
                    if (current.index() == ui.itemsLen - 1) {
                        ui.carousel.find('.carousel-item:first').addClass('current').fadeIn(300, function () {
                            current.removeClass('active').hide();
                            $(this).addClass('active').removeClass('current');
                        });
                    }
                    else {
                        current.next().addClass('current').fadeIn(300, function () {
                            current.removeClass('active').hide();
                            $(this).addClass('active').removeClass('current');
                        });
                    }
                }
                ui.carousel.find('.carousel-pagination li').eq(ui.carousel.find('.carousel-item.current').index()).addClass('active').siblings().removeClass('active');
            };
            ui.carousel.on('click', 'li',function () {
                changeImage('index', $(this));
            }).on('click', '.carousel-prev',function () {
                changeImage('prev');
            }).on('click', '.carousel-next', function () {
                changeImage();
            });
            if (op.autoChange) {
                var changeInterval = setInterval(changeImage, op.interval);
                ui.carousel.on('mouseenter',function () {
                    clearInterval(changeInterval);
                }).on('mouseleave', function () {
                    changeInterval = setInterval(changeImage, op.interval);
                });
            }
            return this;
        };
        $('.b-carousel').each(function () {
            $(this).carousel({autoChange: true});
        });
        var btnUp = $('<div/>', {'class': 'btn-up'});
        btnUp.appendTo('body');
        $(document).on('click', '.btn-up', function () {
            $('html, body').animate({scrollTop: 0}, 700);
        });
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 200)
                $('.btn-up').addClass('active'); else
                $('.btn-up').removeClass('active');
        });
        $('.btn-settings').on('click', function () {
            $(this).parent().toggleClass('active');
        });
        $('.switch-handle').on('click', function () {
            $(this).toggleClass('active');
            $('.main').toggleClass('boxed');
        });
        $('.bg-list div').on('click', function () {
            if ($(this).hasClass('active'))return false;
            if (!$('.switch-handle').hasClass('active'))$('.switch-handle').trigger('click');
            $(this).addClass('active').siblings().removeClass('active');
            var cl = $(this).attr('class');
            $('body').attr('class', cl);
        });
        $('.color-list div').on('click', function () {
            if ($(this).hasClass('active'))return false;
            $('link.color-scheme-link').remove();
            $(this).addClass('active').siblings().removeClass('active');
            var src = $(this).attr('data-src'), colorScheme = $('<link class="color-scheme-link" rel="stylesheet" />');
            colorScheme.attr('href', src).appendTo('head');
        });
        function adjustSlider() {
            var $p = $('#bmstu-testimonials');
            if ($p.offset().top < $(window).scrollTop() + 80) {
                var offset = $p.offset().top - 90;
                $('html, body').animate({scrollTop: offset}, 600);
            }
        }

        if ($.fn.bxSlider) {
            var sliderTestimonOptions = {mode: 'horizontal', infiniteLoop: false, hideControlOnEnd: true, pager: false, controls: true, slideMargin: 10, nextText: '<i class="icon-chevron-right"></i>', prevText: '<i class="icon-chevron-left"></i>', nextSelector: '#bmstu-testimonials .controls > .next', prevSelector: '#bmstu-testimonials .controls > .prev', onSlideAfter: function ($slideElement, oldIndex, newIndex) {
                $('#bmstu-testimonials-slider').find('.recall-text.open').each(function (index) {
                    var text = $(this).text();
                    if (text.length > 300) {
                        $(this).removeClass('open');
                    }
                });
                adjustSlider();
            }};
            var $sliderTestimon = $('#bmstu-testimonials-slider').bxSlider(sliderTestimonOptions);
            $('#bmstu-testimonials-slider').find('.recall-text').each(function (index) {
                var text = $(this).text();
                if (text.length > 300) {
                    $(this).append('<a href="#" class="btn-open">Раскрыть...</a>');
                } else {
                    $(this).addClass('open');
                }
            });
            $('#bmstu-testimonials-slider .btn-open').click(function () {
                var cs = $sliderTestimon.getCurrentSlide();
                var $p = $(this).parent();
                if ($p.hasClass('open')) {
                    $p.removeClass('open');
                    $(this).text('Раскрыть...');
                    adjustSlider();
                } else {
                    $(this).text('Свернуть...');
                    $p.addClass('open');
                }
                return false;
            });
        }
        $('#form-feedback').xForm({selector: '#form-feedback'});
        $('#contacts-form-feedback').xForm({selector: '#contacts-form-feedback'});
        $('#form-service-order').xForm({selector: '#form-service-order'});
        $('#form-testimonial').xForm({selector: '#form-testimonial'});
        $('.btn-ajax-popup').fancybox({scrolling: 'auto', type: 'ajax', ajax: {dataType: 'html', headers: {'X-fancyBox': true}}, beforeLoad: function () {
            var params = this.element.data('params');
            var id = this.element.data('resource-id');
            if (id) {
                params = params ? params + '&resource-id=' + id : 'resource-id=' + id;
            }
            this.ajax.data = params;
        }, beforeShow: function (c, p) {
            if (typeof yaCounter17263927 == 'object') {
                yaCounter17263927.reachGoal('show_form');
            }
            $('.btn-up').addClass('hide');
            $('.fancybox-inner').xForm({selector: '.fancybox-inner', popoverPlacement: 'bottom'});
        }, afterClose: function (c, p) {
            $('.btn-up').removeClass('hide');
            $(document).off('submit', '.fancybox-inner form');
        }});
        $("a[rel^='prettyPhoto']").prettyPhoto();
        $(document).on('click', '.tbl-collapse', function (e) {
            e.preventDefault();
            var t = $(this);
            var r = t.closest('tr');
            var th = r.nextAll().has('th');
            if (th.length) {
                var rows = r.parent().children().slice(r.index() + 1, th.eq(0).index());
            } else {
                var rows = r.nextAll();
            }
            if (t.hasClass('open')) {
                rows.hide();
                t.removeClass('open');
            } else {
                rows.show();
                t.addClass('open');
            }
        });
    });
})(jQuery);
function initGoogleMap(selector, location) {
    if (typeof $.fn.gMap != 'undefined') {
        $(selector).gMap({maptype: 'ROADMAP', scrollwheel: false, zoom: 18, markers: [
            {address: location, html: '', popup: false, }
        ], });
    }
}