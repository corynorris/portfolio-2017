var t = function () { $(window).scroll((function () { $(this).scrollTop() >= 50 ? $("#more").css({ visibility: "hidden" }) : $("#more").css({ visibility: "visible" }) })), $("#more").click((function () { if (console.log("clicked"), location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) { var t = $(this.hash); if ((t = t.length ? t : $("[name=" + this.hash.slice(1) + "]")).length) return $("html,body").animate({ scrollTop: t.offset().top }, 800), !1 } })), $(document).ready((function () { console.log("ready"), $("#contact-form").submit((function (t) { t.preventDefault(), alert("This feature is disabled in the as this page is archived.") })) })) }; t(), $((function () { var e = $("#smooth"), i = { debug: !1, blacklist: ".no-smoothState", prefetch: !0, cacheLength: 2, onStart: { duration: 750, render: function (t) { t.addClass("is-exiting"), o.restartCSSAnimations() } }, onReady: { duration: 0, render: function (t, e) { t.removeClass("is-exiting"), t.html(e) } }, onAfter: t }, o = e.smoothState(i).data("smoothState") }));