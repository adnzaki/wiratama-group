<script>
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "http:\/\/localhost\/wiratama-blog\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.6.2"
        }
    };
    /*! This file is auto-generated */
    ! function(i, n) {
        var o, s, e;

        function c(e) {
            try {
                var t = {
                    supportTests: e,
                    timestamp: (new Date).valueOf()
                };
                sessionStorage.setItem(o, JSON.stringify(t))
            } catch (e) {}
        }

        function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
            return t.every(function(e, t) {
                return e === r[t]
            })
        }

        function u(e, t, n) {
            switch (t) {
                case "flag":
                    return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                case "emoji":
                    return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
            }
            return !1
        }

        function f(e, t, n) {
            var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                a = r.getContext("2d", {
                    willReadFrequently: !0
                }),
                o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
            return e.forEach(function(e) {
                o[e] = t(a, e, n)
            }), o
        }

        function t(e) {
            var t = i.createElement("script");
            t.src = e, t.defer = !0, i.head.appendChild(t)
        }
        "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, e = new Promise(function(e) {
            i.addEventListener("DOMContentLoaded", e, {
                once: !0
            })
        }), new Promise(function(t) {
            var n = function() {
                try {
                    var e = JSON.parse(sessionStorage.getItem(o));
                    if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                } catch (e) {}
                return null
            }();
            if (!n) {
                if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                        r = new Blob([e], {
                            type: "text/javascript"
                        }),
                        a = new Worker(URL.createObjectURL(r), {
                            name: "wpTestEmojiSupports"
                        });
                    return void(a.onmessage = function(e) {
                        c(n = e.data), a.terminate(), t(n)
                    })
                } catch (e) {}
                c(n = f(s, u, p))
            }
            t(n)
        }).then(function(e) {
            for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
            n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                n.DOMReady = !0
            }
        }).then(function() {
            return e
        }).then(function() {
            var e;
            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
        }))
    }((window, document), window._wpemojiSettings);
</script>
<style id='wp-block-site-logo-inline-css'>
    .wp-block-site-logo {
        box-sizing: border-box;
        line-height: 0
    }

    .wp-block-site-logo a {
        display: inline-block;
        line-height: 0
    }

    .wp-block-site-logo.is-default-size img {
        height: auto;
        width: 120px
    }

    .wp-block-site-logo img {
        height: auto;
        max-width: 100%
    }

    .wp-block-site-logo a,
    .wp-block-site-logo img {
        border-radius: inherit
    }

    .wp-block-site-logo.aligncenter {
        margin-left: auto;
        margin-right: auto;
        text-align: center
    }

    :root :where(.wp-block-site-logo.is-style-rounded) {
        border-radius: 9999px
    }
</style>
<style id='wp-block-site-title-inline-css'>
    :root :where(.wp-block-site-title a) {
        color: inherit
    }
</style>
<style id='wp-block-group-inline-css'>
    .wp-block-group {
        box-sizing: border-box
    }

    :where(.wp-block-group.wp-block-group-is-layout-constrained) {
        position: relative
    }
</style>
<style id='wp-block-group-theme-inline-css'>
    :where(.wp-block-group.has-background) {
        padding: 1.25em 2.375em
    }
</style>
<style id='wp-block-page-list-inline-css'>
    .wp-block-navigation .wp-block-page-list {
        align-items: var(--navigation-layout-align, initial);
        background-color: inherit;
        display: flex;
        flex-direction: var(--navigation-layout-direction, initial);
        flex-wrap: var(--navigation-layout-wrap, wrap);
        justify-content: var(--navigation-layout-justify, initial)
    }

    .wp-block-navigation .wp-block-navigation-item {
        background-color: inherit
    }
</style>
<link rel='stylesheet' id='wp-block-navigation-css' href='<?= env('wordpress_url') ?>/wp-includes/blocks/navigation/style.min.css?ver=6.6.2' media='all' />
<style id='wp-block-template-part-theme-inline-css'>
    :root :where(.wp-block-template-part.has-background) {
        margin-bottom: 0;
        margin-top: 0;
        padding: 1.25em 2.375em
    }
</style>
<style id='wp-block-post-title-inline-css'>
    .wp-block-post-title {
        box-sizing: border-box;
        word-break: break-word
    }

    .wp-block-post-title a {
        display: inline-block
    }
</style>
<style id='wp-block-post-featured-image-inline-css'>
    .wp-block-post-featured-image {
        margin-left: 0;
        margin-right: 0
    }

    .wp-block-post-featured-image a {
        display: block;
        height: 100%
    }

    .wp-block-post-featured-image :where(img) {
        box-sizing: border-box;
        height: auto;
        max-width: 100%;
        vertical-align: bottom;
        width: 100%
    }

    .wp-block-post-featured-image.alignfull img,
    .wp-block-post-featured-image.alignwide img {
        width: 100%
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim {
        background-color: #000;
        inset: 0;
        position: absolute
    }

    .wp-block-post-featured-image {
        position: relative
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-gradient {
        background-color: initial
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-0 {
        opacity: 0
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-10 {
        opacity: .1
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-20 {
        opacity: .2
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-30 {
        opacity: .3
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-40 {
        opacity: .4
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-50 {
        opacity: .5
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-60 {
        opacity: .6
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-70 {
        opacity: .7
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-80 {
        opacity: .8
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-90 {
        opacity: .9
    }

    .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-100 {
        opacity: 1
    }

    .wp-block-post-featured-image:where(.alignleft, .alignright) {
        width: 100%
    }
</style>
<style id='wp-block-separator-inline-css'>
    @charset "UTF-8";

    .wp-block-separator {
        border: none;
        border-top: 2px solid
    }

    :root :where(.wp-block-separator.is-style-dots) {
        height: auto;
        line-height: 1;
        text-align: center
    }

    :root :where(.wp-block-separator.is-style-dots):before {
        color: currentColor;
        content: "···";
        font-family: serif;
        font-size: 1.5em;
        letter-spacing: 2em;
        padding-left: 2em
    }

    .wp-block-separator.is-style-dots {
        background: none !important;
        border: none !important
    }
</style>
<style id='wp-block-separator-theme-inline-css'>
    .wp-block-separator.has-css-opacity {
        opacity: .4
    }

    .wp-block-separator {
        border: none;
        border-bottom: 2px solid;
        margin-left: auto;
        margin-right: auto
    }

    .wp-block-separator.has-alpha-channel-opacity {
        opacity: 1
    }

    .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
        width: 100px
    }

    .wp-block-separator.has-background:not(.is-style-dots) {
        border-bottom: none;
        height: 1px
    }

    .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
        height: 2px
    }
</style>
<style id='wp-block-spacer-inline-css'>
    .wp-block-spacer {
        clear: both
    }
</style>
<style id='wp-block-paragraph-inline-css'>
    .is-small-text {
        font-size: .875em
    }

    .is-regular-text {
        font-size: 1em
    }

    .is-large-text {
        font-size: 2.25em
    }

    .is-larger-text {
        font-size: 3em
    }

    .has-drop-cap:not(:focus):first-letter {
        float: left;
        font-size: 8.4em;
        font-style: normal;
        font-weight: 100;
        line-height: .68;
        margin: .05em .1em 0 0;
        text-transform: uppercase
    }

    body.rtl .has-drop-cap:not(:focus):first-letter {
        float: none;
        margin-left: .1em
    }

    p.has-drop-cap.has-background {
        overflow: hidden
    }

    :root :where(p.has-background) {
        padding: 1.25em 2.375em
    }

    :where(p.has-text-color:not(.has-link-color)) a {
        color: inherit
    }

    p.has-text-align-left[style*="writing-mode:vertical-lr"],
    p.has-text-align-right[style*="writing-mode:vertical-rl"] {
        rotate: 180deg
    }
</style>
<link rel='stylesheet' id='wp-block-image-css' href='<?= env('wordpress_url') ?>/wp-includes/blocks/image/style.min.css?ver=6.6.2' media='all' />
<style id='wp-block-image-theme-inline-css'>
    :root :where(.wp-block-image figcaption) {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme :root :where(.wp-block-image figcaption) {
        color: #ffffffa6
    }

    .wp-block-image {
        margin: 0 0 1em
    }
</style>
<link rel='stylesheet' id='wp-block-gallery-css' href='<?= env('wordpress_url') ?>/wp-includes/blocks/gallery/style.min.css?ver=6.6.2' media='all' />
<style id='wp-block-gallery-theme-inline-css'>
    .blocks-gallery-caption {
        color: #555;
        font-size: 13px;
        text-align: center
    }

    .is-dark-theme .blocks-gallery-caption {
        color: #ffffffa6
    }
</style>
<style id='wp-block-post-date-inline-css'>
    .wp-block-post-date {
        box-sizing: border-box
    }
</style>
<style id='wp-block-post-author-inline-css'>
    .wp-block-post-author {
        display: flex;
        flex-wrap: wrap
    }

    .wp-block-post-author__byline {
        font-size: .5em;
        margin-bottom: 0;
        margin-top: 0;
        width: 100%
    }

    .wp-block-post-author__avatar {
        margin-right: 1em
    }

    .wp-block-post-author__bio {
        font-size: .7em;
        margin-bottom: .7em
    }

    .wp-block-post-author__content {
        flex-basis: 0;
        flex-grow: 1
    }

    .wp-block-post-author__name {
        margin: 0
    }
</style>
<style id='wp-block-post-terms-inline-css'>
    .wp-block-post-terms {
        box-sizing: border-box
    }

    .wp-block-post-terms .wp-block-post-terms__separator {
        white-space: pre-wrap
    }
</style>
<style id='wp-block-buttons-inline-css'>
    .wp-block-buttons.is-vertical {
        flex-direction: column
    }

    .wp-block-buttons.is-vertical>.wp-block-button:last-child {
        margin-bottom: 0
    }

    .wp-block-buttons>.wp-block-button {
        display: inline-block;
        margin: 0
    }

    .wp-block-buttons.is-content-justification-left {
        justify-content: flex-start
    }

    .wp-block-buttons.is-content-justification-left.is-vertical {
        align-items: flex-start
    }

    .wp-block-buttons.is-content-justification-center {
        justify-content: center
    }

    .wp-block-buttons.is-content-justification-center.is-vertical {
        align-items: center
    }

    .wp-block-buttons.is-content-justification-right {
        justify-content: flex-end
    }

    .wp-block-buttons.is-content-justification-right.is-vertical {
        align-items: flex-end
    }

    .wp-block-buttons.is-content-justification-space-between {
        justify-content: space-between
    }

    .wp-block-buttons.aligncenter {
        text-align: center
    }

    .wp-block-buttons:not(.is-content-justification-space-between, .is-content-justification-right, .is-content-justification-left, .is-content-justification-center) .wp-block-button.aligncenter {
        margin-left: auto;
        margin-right: auto;
        width: 100%
    }

    .wp-block-buttons[style*=text-decoration] .wp-block-button,
    .wp-block-buttons[style*=text-decoration] .wp-block-button__link {
        text-decoration: inherit
    }

    .wp-block-buttons.has-custom-font-size .wp-block-button__link {
        font-size: inherit
    }

    .wp-block-button.aligncenter {
        text-align: center
    }
</style>
<style id='wp-block-button-inline-css'>
    .wp-block-button__link {
        box-sizing: border-box;
        cursor: pointer;
        display: inline-block;
        text-align: center;
        word-break: break-word
    }

    .wp-block-button__link.aligncenter {
        text-align: center
    }

    .wp-block-button__link.alignright {
        text-align: right
    }

    :where(.wp-block-button__link) {
        border-radius: 9999px;
        box-shadow: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        text-decoration: none
    }

    .wp-block-button[style*=text-decoration] .wp-block-button__link {
        text-decoration: inherit
    }

    .wp-block-buttons>.wp-block-button.has-custom-width {
        max-width: none
    }

    .wp-block-buttons>.wp-block-button.has-custom-width .wp-block-button__link {
        width: 100%
    }

    .wp-block-buttons>.wp-block-button.has-custom-font-size .wp-block-button__link {
        font-size: inherit
    }

    .wp-block-buttons>.wp-block-button.wp-block-button__width-25 {
        width: calc(25% - var(--wp--style--block-gap, .5em)*.75)
    }

    .wp-block-buttons>.wp-block-button.wp-block-button__width-50 {
        width: calc(50% - var(--wp--style--block-gap, .5em)*.5)
    }

    .wp-block-buttons>.wp-block-button.wp-block-button__width-75 {
        width: calc(75% - var(--wp--style--block-gap, .5em)*.25)
    }

    .wp-block-buttons>.wp-block-button.wp-block-button__width-100 {
        flex-basis: 100%;
        width: 100%
    }

    .wp-block-buttons.is-vertical>.wp-block-button.wp-block-button__width-25 {
        width: 25%
    }

    .wp-block-buttons.is-vertical>.wp-block-button.wp-block-button__width-50 {
        width: 50%
    }

    .wp-block-buttons.is-vertical>.wp-block-button.wp-block-button__width-75 {
        width: 75%
    }

    .wp-block-button.is-style-squared,
    .wp-block-button__link.wp-block-button.is-style-squared {
        border-radius: 0
    }

    .wp-block-button.no-border-radius,
    .wp-block-button__link.no-border-radius {
        border-radius: 0 !important
    }

    :root :where(.wp-block-button .wp-block-button__link.is-style-outline),
    :root :where(.wp-block-button.is-style-outline>.wp-block-button__link) {
        border: 2px solid;
        padding: .667em 1.333em
    }

    :root :where(.wp-block-button .wp-block-button__link.is-style-outline:not(.has-text-color)),
    :root :where(.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color)) {
        color: currentColor
    }

    :root :where(.wp-block-button .wp-block-button__link.is-style-outline:not(.has-background)),
    :root :where(.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-background)) {
        background-color: initial;
        background-image: none
    }
</style>
<style id='wp-emoji-styles-inline-css'>
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style>
<style id='wp-block-library-inline-css'>
    :root {
        --wp-admin-theme-color: #007cba;
        --wp-admin-theme-color--rgb: 0, 124, 186;
        --wp-admin-theme-color-darker-10: #006ba1;
        --wp-admin-theme-color-darker-10--rgb: 0, 107, 161;
        --wp-admin-theme-color-darker-20: #005a87;
        --wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
        --wp-admin-border-width-focus: 2px;
        --wp-block-synced-color: #7a00df;
        --wp-block-synced-color--rgb: 122, 0, 223;
        --wp-bound-block-color: var(--wp-block-synced-color)
    }

    @media (min-resolution:192dpi) {
        :root {
            --wp-admin-border-width-focus: 1.5px
        }
    }

    .wp-element-button {
        cursor: pointer
    }

    :root {
        --wp--preset--font-size--normal: 16px;
        --wp--preset--font-size--huge: 42px
    }

    :root .has-very-light-gray-background-color {
        background-color: #eee
    }

    :root .has-very-dark-gray-background-color {
        background-color: #313131
    }

    :root .has-very-light-gray-color {
        color: #eee
    }

    :root .has-very-dark-gray-color {
        color: #313131
    }

    :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
        background: linear-gradient(135deg, #00d084, #0693e3)
    }

    :root .has-purple-crush-gradient-background {
        background: linear-gradient(135deg, #34e2e4, #4721fb 50%, #ab1dfe)
    }

    :root .has-hazy-dawn-gradient-background {
        background: linear-gradient(135deg, #faaca8, #dad0ec)
    }

    :root .has-subdued-olive-gradient-background {
        background: linear-gradient(135deg, #fafae1, #67a671)
    }

    :root .has-atomic-cream-gradient-background {
        background: linear-gradient(135deg, #fdd79a, #004a59)
    }

    :root .has-nightshade-gradient-background {
        background: linear-gradient(135deg, #330968, #31cdcf)
    }

    :root .has-midnight-gradient-background {
        background: linear-gradient(135deg, #020381, #2874fc)
    }

    .has-regular-font-size {
        font-size: 1em
    }

    .has-larger-font-size {
        font-size: 2.625em
    }

    .has-normal-font-size {
        font-size: var(--wp--preset--font-size--normal)
    }

    .has-huge-font-size {
        font-size: var(--wp--preset--font-size--huge)
    }

    .has-text-align-center {
        text-align: center
    }

    .has-text-align-left {
        text-align: left
    }

    .has-text-align-right {
        text-align: right
    }

    #end-resizable-editor-section {
        display: none
    }

    .aligncenter {
        clear: both
    }

    .items-justified-left {
        justify-content: flex-start
    }

    .items-justified-center {
        justify-content: center
    }

    .items-justified-right {
        justify-content: flex-end
    }

    .items-justified-space-between {
        justify-content: space-between
    }

    .screen-reader-text {
        border: 0;
        clip: rect(1px, 1px, 1px, 1px);
        clip-path: inset(50%);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
        word-wrap: normal !important
    }

    .screen-reader-text:focus {
        background-color: #ddd;
        clip: auto !important;
        clip-path: none;
        color: #444;
        display: block;
        font-size: 1em;
        height: auto;
        left: 5px;
        line-height: normal;
        padding: 15px 23px 14px;
        text-decoration: none;
        top: 5px;
        width: auto;
        z-index: 100000
    }

    html :where(.has-border-color) {
        border-style: solid
    }

    html :where([style*=border-top-color]) {
        border-top-style: solid
    }

    html :where([style*=border-right-color]) {
        border-right-style: solid
    }

    html :where([style*=border-bottom-color]) {
        border-bottom-style: solid
    }

    html :where([style*=border-left-color]) {
        border-left-style: solid
    }

    html :where([style*=border-width]) {
        border-style: solid
    }

    html :where([style*=border-top-width]) {
        border-top-style: solid
    }

    html :where([style*=border-right-width]) {
        border-right-style: solid
    }

    html :where([style*=border-bottom-width]) {
        border-bottom-style: solid
    }

    html :where([style*=border-left-width]) {
        border-left-style: solid
    }

    html :where(img[class*=wp-image-]) {
        height: auto;
        max-width: 100%
    }

    :where(figure) {
        margin: 0 0 1em
    }

    html :where(.is-position-sticky) {
        --wp-admin--admin-bar--position-offset: var(--wp-admin--admin-bar--height, 0px)
    }

    @media screen and (max-width:600px) {
        html :where(.is-position-sticky) {
            --wp-admin--admin-bar--position-offset: 0px
        }
    }
</style>
<link rel='stylesheet' id='glidejs-core-css' href='<?= env('wordpress_url') ?>/wp-content/plugins/otter-blocks/assets/glide/glide.core.min.css?ver=a6dc7de49a2817fdbed7' media='all' />
<link rel='stylesheet' id='glidejs-theme-css' href='<?= env('wordpress_url') ?>/wp-content/plugins/otter-blocks/assets/glide/glide.theme.min.css?ver=a6dc7de49a2817fdbed7' media='all' />
<style id='otter-slider-style-inline-css'>
    .wp-block-themeisle-blocks-slider {
        --height: 400px;
        --height-tablet: var(--height);
        --height-mobile: var(--height-tablet);
        --arrows-color: #333;
        --arrows-background-color: #fff;
        --pagination-color: rgba(255, 255, 255, 0.5);
        --pagination-active-color: #fff;
        --border-color: black;
        --border-width: 0;
        --border-radius: 0;
        --width: auto;
        width: var(--width);
        display: grid
    }

    .wp-block-themeisle-blocks-slider .glide__track {
        border: var(--border-width) solid var(--border-color);
        border-radius: var(--border-radius);
        overflow: hidden
    }

    .wp-block-themeisle-blocks-slider .glide__slides {
        height: var(--height);
        animation: load 4s 3
    }

    @keyframes load {

        0%,
        100% {
            background-color: inherit
        }

        50% {
            background-color: #d8d8d8
        }
    }

    @media(min-width: 600px)and (max-width: 960px) {
        .wp-block-themeisle-blocks-slider .glide__slides {
            height: var(--height-tablet) !important
        }
    }

    @media(max-width: 600px) {
        .wp-block-themeisle-blocks-slider .glide__slides {
            height: var(--height-mobile) !important
        }
    }

    .wp-block-themeisle-blocks-slider .wp-block-themeisle-blocks-slider-item-wrapper {
        position: relative
    }

    .wp-block-themeisle-blocks-slider .wp-block-themeisle-blocks-slider-item-wrapper figure {
        height: 100%;
        margin: 0
    }

    .wp-block-themeisle-blocks-slider .wp-block-themeisle-blocks-slider-item-wrapper figure img {
        width: 100%;
        height: 100%;
        object-fit: cover
    }

    .wp-block-themeisle-blocks-slider .wp-block-themeisle-blocks-slider-item-wrapper figcaption {
        position: absolute;
        bottom: 0;
        margin-bottom: 0px;
        width: 100%;
        max-height: 100%;
        overflow-y: auto;
        z-index: 20;
        white-space: pre-wrap;
        overflow: auto;
        padding: 40px 10px 9px;
        color: #fff;
        text-align: center;
        font-size: 16px;
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3) 70%, transparent);
        cursor: text
    }

    .wp-block-themeisle-blocks-slider .glide__arrows .glide__arrow {
        background: var(--arrows-background-color);
        border: none;
        color: var(--arrows-color);
        padding: 12px;
        opacity: .75
    }

    .wp-block-themeisle-blocks-slider .glide__arrows .glide__arrow:hover {
        opacity: 1
    }

    .wp-block-themeisle-blocks-slider .glide__arrows .glide__arrow.glide__arrow--right path {
        transform: translate(100px, 100px) rotate(180deg)
    }

    .wp-block-themeisle-blocks-slider .glide__arrows .glide__arrow svg {
        display: block;
        fill: var(--arrows-color)
    }

    .wp-block-themeisle-blocks-slider .glide__track .glide__bullet {
        background-color: var(--pagination-color)
    }

    .wp-block-themeisle-blocks-slider .glide__track .glide__bullet--active {
        background-color: var(--pagination-active-color)
    }

    .wp-block-themeisle-blocks-slider .amp-carousel-slide .wp-block-themeisle-blocks-slider-item {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover
    }

    .wp-block-themeisle-blocks-slider .amp-carousel-slide figcaption {
        position: absolute;
        bottom: 0;
        width: 100%;
        max-height: 100%;
        overflow-y: auto;
        z-index: 20;
        white-space: pre-wrap;
        overflow: auto;
        padding: 40px 10px 9px;
        color: #fff;
        text-align: center;
        font-size: 16px;
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3) 70%, transparent);
        cursor: text
    }

    /*# sourceMappingURL=style.css.map */
</style>
<style id='global-styles-inline-css'>
    :root {
        --wp--preset--aspect-ratio--square: 1;
        --wp--preset--aspect-ratio--4-3: 4/3;
        --wp--preset--aspect-ratio--3-4: 3/4;
        --wp--preset--aspect-ratio--3-2: 3/2;
        --wp--preset--aspect-ratio--2-3: 2/3;
        --wp--preset--aspect-ratio--16-9: 16/9;
        --wp--preset--aspect-ratio--9-16: 9/16;
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--color--foreground: #000000;
        --wp--preset--color--background: #ffffff;
        --wp--preset--color--primary: #1a4548;
        --wp--preset--color--secondary: #ffe2c7;
        --wp--preset--color--tertiary: #F6F6F6;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--gradient--vertical-secondary-to-tertiary: linear-gradient(to bottom, var(--wp--preset--color--secondary) 0%, var(--wp--preset--color--tertiary) 100%);
        --wp--preset--gradient--vertical-secondary-to-background: linear-gradient(to bottom, var(--wp--preset--color--secondary) 0%, var(--wp--preset--color--background) 100%);
        --wp--preset--gradient--vertical-tertiary-to-background: linear-gradient(to bottom, var(--wp--preset--color--tertiary) 0%, var(--wp--preset--color--background) 100%);
        --wp--preset--gradient--diagonal-primary-to-foreground: linear-gradient(to bottom right, var(--wp--preset--color--primary) 0%, var(--wp--preset--color--foreground) 100%);
        --wp--preset--gradient--diagonal-secondary-to-background: linear-gradient(to bottom right, var(--wp--preset--color--secondary) 50%, var(--wp--preset--color--background) 50%);
        --wp--preset--gradient--diagonal-background-to-secondary: linear-gradient(to bottom right, var(--wp--preset--color--background) 50%, var(--wp--preset--color--secondary) 50%);
        --wp--preset--gradient--diagonal-tertiary-to-background: linear-gradient(to bottom right, var(--wp--preset--color--tertiary) 50%, var(--wp--preset--color--background) 50%);
        --wp--preset--gradient--diagonal-background-to-tertiary: linear-gradient(to bottom right, var(--wp--preset--color--background) 50%, var(--wp--preset--color--tertiary) 50%);
        --wp--preset--font-size--small: 1rem;
        --wp--preset--font-size--medium: 1.125rem;
        --wp--preset--font-size--large: 1.75rem;
        --wp--preset--font-size--x-large: clamp(1.75rem, 3vw, 2.25rem);
        --wp--preset--font-family--system-font: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        --wp--preset--font-family--source-serif-pro: "Source Serif Pro", serif;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        --wp--custom--spacing--small: max(1.25rem, 5vw);
        --wp--custom--spacing--medium: clamp(2rem, 8vw, calc(4 * var(--wp--style--block-gap)));
        --wp--custom--spacing--large: clamp(4rem, 10vw, 8rem);
        --wp--custom--spacing--outer: var(--wp--custom--spacing--small, 1.25rem);
        --wp--custom--typography--font-size--huge: clamp(2.25rem, 4vw, 2.75rem);
        --wp--custom--typography--font-size--gigantic: clamp(2.75rem, 6vw, 3.25rem);
        --wp--custom--typography--font-size--colossal: clamp(3.25rem, 8vw, 6.25rem);
        --wp--custom--typography--line-height--tiny: 1.15;
        --wp--custom--typography--line-height--small: 1.2;
        --wp--custom--typography--line-height--medium: 1.4;
        --wp--custom--typography--line-height--normal: 1.6;
    }

    :root {
        --wp--style--global--content-size: 650px;
        --wp--style--global--wide-size: 1000px;
    }

    :where(body) {
        margin: 0;
    }

    .wp-site-blocks>.alignleft {
        float: left;
        margin-right: 2em;
    }

    .wp-site-blocks>.alignright {
        float: right;
        margin-left: 2em;
    }

    .wp-site-blocks>.aligncenter {
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
    }

    :where(.wp-site-blocks)>* {
        margin-block-start: 1.5rem;
        margin-block-end: 0;
    }

    :where(.wp-site-blocks)> :first-child {
        margin-block-start: 0;
    }

    :where(.wp-site-blocks)> :last-child {
        margin-block-end: 0;
    }

    :root {
        --wp--style--block-gap: 1.5rem;
    }

    :root :where(.is-layout-flow)> :first-child {
        margin-block-start: 0;
    }

    :root :where(.is-layout-flow)> :last-child {
        margin-block-end: 0;
    }

    :root :where(.is-layout-flow)>* {
        margin-block-start: 1.5rem;
        margin-block-end: 0;
    }

    :root :where(.is-layout-constrained)> :first-child {
        margin-block-start: 0;
    }

    :root :where(.is-layout-constrained)> :last-child {
        margin-block-end: 0;
    }

    :root :where(.is-layout-constrained)>* {
        margin-block-start: 1.5rem;
        margin-block-end: 0;
    }

    :root :where(.is-layout-flex) {
        gap: 1.5rem;
    }

    :root :where(.is-layout-grid) {
        gap: 1.5rem;
    }

    .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    .is-layout-flex> :is(*, div) {
        margin: 0;
    }

    body .is-layout-grid {
        display: grid;
    }

    .is-layout-grid> :is(*, div) {
        margin: 0;
    }

    body {
        background-color: var(--wp--preset--color--background);
        color: var(--wp--preset--color--foreground);
        font-family: var(--wp--preset--font-family--system-font);
        font-size: var(--wp--preset--font-size--medium);
        line-height: var(--wp--custom--typography--line-height--normal);
        padding-top: 0px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
    }

    a:where(:not(.wp-element-button)) {
        color: var(--wp--preset--color--foreground);
        text-decoration: underline;
    }

    h1 {
        font-family: var(--wp--preset--font-family--source-serif-pro);
        font-size: var(--wp--custom--typography--font-size--colossal);
        font-weight: 300;
        line-height: var(--wp--custom--typography--line-height--tiny);
    }

    h2 {
        font-family: var(--wp--preset--font-family--source-serif-pro);
        font-size: var(--wp--custom--typography--font-size--gigantic);
        font-weight: 300;
        line-height: var(--wp--custom--typography--line-height--small);
    }

    h3 {
        font-family: var(--wp--preset--font-family--source-serif-pro);
        font-size: var(--wp--custom--typography--font-size--huge);
        font-weight: 300;
        line-height: var(--wp--custom--typography--line-height--tiny);
    }

    h4 {
        font-family: var(--wp--preset--font-family--source-serif-pro);
        font-size: var(--wp--preset--font-size--x-large);
        font-weight: 300;
        line-height: var(--wp--custom--typography--line-height--tiny);
    }

    h5 {
        font-family: var(--wp--preset--font-family--system-font);
        font-size: var(--wp--preset--font-size--medium);
        font-weight: 700;
        line-height: var(--wp--custom--typography--line-height--normal);
        text-transform: uppercase;
    }

    h6 {
        font-family: var(--wp--preset--font-family--system-font);
        font-size: var(--wp--preset--font-size--medium);
        font-weight: 400;
        line-height: var(--wp--custom--typography--line-height--normal);
        text-transform: uppercase;
    }

    :root :where(.wp-element-button, .wp-block-button__link) {
        background-color: #32373c;
        border-width: 0;
        color: #fff;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        padding: calc(0.667em + 2px) calc(1.333em + 2px);
        text-decoration: none;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-foreground-color {
        color: var(--wp--preset--color--foreground) !important;
    }

    .has-background-color {
        color: var(--wp--preset--color--background) !important;
    }

    .has-primary-color {
        color: var(--wp--preset--color--primary) !important;
    }

    .has-secondary-color {
        color: var(--wp--preset--color--secondary) !important;
    }

    .has-tertiary-color {
        color: var(--wp--preset--color--tertiary) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-foreground-background-color {
        background-color: var(--wp--preset--color--foreground) !important;
    }

    .has-background-background-color {
        background-color: var(--wp--preset--color--background) !important;
    }

    .has-primary-background-color {
        background-color: var(--wp--preset--color--primary) !important;
    }

    .has-secondary-background-color {
        background-color: var(--wp--preset--color--secondary) !important;
    }

    .has-tertiary-background-color {
        background-color: var(--wp--preset--color--tertiary) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-foreground-border-color {
        border-color: var(--wp--preset--color--foreground) !important;
    }

    .has-background-border-color {
        border-color: var(--wp--preset--color--background) !important;
    }

    .has-primary-border-color {
        border-color: var(--wp--preset--color--primary) !important;
    }

    .has-secondary-border-color {
        border-color: var(--wp--preset--color--secondary) !important;
    }

    .has-tertiary-border-color {
        border-color: var(--wp--preset--color--tertiary) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-vertical-secondary-to-tertiary-gradient-background {
        background: var(--wp--preset--gradient--vertical-secondary-to-tertiary) !important;
    }

    .has-vertical-secondary-to-background-gradient-background {
        background: var(--wp--preset--gradient--vertical-secondary-to-background) !important;
    }

    .has-vertical-tertiary-to-background-gradient-background {
        background: var(--wp--preset--gradient--vertical-tertiary-to-background) !important;
    }

    .has-diagonal-primary-to-foreground-gradient-background {
        background: var(--wp--preset--gradient--diagonal-primary-to-foreground) !important;
    }

    .has-diagonal-secondary-to-background-gradient-background {
        background: var(--wp--preset--gradient--diagonal-secondary-to-background) !important;
    }

    .has-diagonal-background-to-secondary-gradient-background {
        background: var(--wp--preset--gradient--diagonal-background-to-secondary) !important;
    }

    .has-diagonal-tertiary-to-background-gradient-background {
        background: var(--wp--preset--gradient--diagonal-tertiary-to-background) !important;
    }

    .has-diagonal-background-to-tertiary-gradient-background {
        background: var(--wp--preset--gradient--diagonal-background-to-tertiary) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .has-system-font-font-family {
        font-family: var(--wp--preset--font-family--system-font) !important;
    }

    .has-source-serif-pro-font-family {
        font-family: var(--wp--preset--font-family--source-serif-pro) !important;
    }

    :root :where(.wp-block-button .wp-block-button__link) {
        background-color: var(--wp--preset--color--primary);
        border-radius: 0;
        color: var(--wp--preset--color--background);
        font-size: var(--wp--preset--font-size--medium);
    }

    :root :where(.wp-block-post-title) {
        font-family: var(--wp--preset--font-family--source-serif-pro);
        font-size: var(--wp--custom--typography--font-size--gigantic);
        font-weight: 300;
        line-height: var(--wp--custom--typography--line-height--tiny);
    }

    :root :where(.wp-block-site-title) {
        font-family: var(--wp--preset--font-family--system-font);
        font-size: var(--wp--preset--font-size--medium);
        font-style: italic;
        font-weight: normal;
        line-height: var(--wp--custom--typography--line-height--normal);
    }
</style>
<style id='core-block-supports-inline-css'>
    .wp-container-core-navigation-is-layout-1 {
        justify-content: flex-end;
    }

    .wp-container-core-group-is-layout-2 {
        justify-content: flex-start;
    }

    .wp-container-core-group-is-layout-3 {
        justify-content: space-between;
    }

    .wp-block-gallery.wp-block-gallery-2 {
        --wp--style--unstable-gallery-gap: var(--wp--style--gallery-gap-default, var(--gallery-block--gutter-size, var(--wp--style--block-gap, 0.5em)));
        gap: var(--wp--style--gallery-gap-default, var(--gallery-block--gutter-size, var(--wp--style--block-gap, 0.5em)));
    }

    .wp-container-core-group-is-layout-9 {
        justify-content: space-between;
    }
</style>
<style id='wp-block-template-skip-link-inline-css'>
    .skip-link.screen-reader-text {
        border: 0;
        clip: rect(1px, 1px, 1px, 1px);
        clip-path: inset(50%);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute !important;
        width: 1px;
        word-wrap: normal !important;
    }

    .skip-link.screen-reader-text:focus {
        background-color: #eee;
        clip: auto !important;
        clip-path: none;
        color: #444;
        display: block;
        font-size: 1em;
        height: auto;
        left: 5px;
        line-height: normal;
        padding: 15px 23px 14px;
        text-decoration: none;
        top: 5px;
        width: auto;
        z-index: 100000;
    }
</style>
<link rel='stylesheet' id='twentytwentytwo-style-css' href='<?= env('wordpress_url') ?>/wp-content/themes/twentytwentytwo/style.css?ver=1.8' media='all' />
<link rel="https://api.w.org/" href="<?= env('wordpress_url') ?>/wp-json/" />
<link rel="alternate" title="JSON" type="application/json" href="<?= env('wordpress_url') ?>/wp-json/wp/v2/posts/13" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?= env('wordpress_url') ?>/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.6.2" />
<link rel="canonical" href="<?= env('wordpress_url') ?>/2024/10/08/modernitas-dengan-sentuhan-alam/" />
<link rel='shortlink' href='<?= env('wordpress_url') ?>/?p=13' />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="<?= env('wordpress_url') ?>/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2Fwiratama-blog%2F2024%2F10%2F08%2Fmodernitas-dengan-sentuhan-alam%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="<?= env('wordpress_url') ?>/wp-json/oembed/1.0/embed?url=http%3A%2F%2Flocalhost%2Fwiratama-blog%2F2024%2F10%2F08%2Fmodernitas-dengan-sentuhan-alam%2F&#038;format=xml" />
<script id="wp-load-polyfill-importmap">
    (HTMLScriptElement.supports && HTMLScriptElement.supports("importmap")) || document.write('<script src="<?= env('wordpress_url') ?>/wp-includes/js/dist/vendor/wp-polyfill-importmap.min.js?ver=1.8.2"></scr' + 'ipt>');
</script>
<script type="importmap" id="wp-importmap">
    {"imports":{"@wordpress\/interactivity":"http:\/\/localhost\/wiratama-blog\/wp-includes\/js\/dist\/interactivity.min.js?ver=6.6.2"}}
</script>
<script type="module" src="<?= env('wordpress_url') ?>/wp-includes/blocks/navigation/view.min.js?ver=6.6.2" id="@wordpress/block-library/navigation-js-module"></script>
<link rel="modulepreload" href="<?= env('wordpress_url') ?>/wp-includes/js/dist/interactivity.min.js?ver=6.6.2" id="@wordpress/interactivity-js-modulepreload">
<meta name="generator" content="Elementor 3.24.7; features: e_font_icon_svg, additional_custom_breakpoints, e_optimized_control_loading, e_element_cache; settings: css_print_method-external, google_font-enabled, font_display-swap">
<style>
    .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
    .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
        background-image: none !important;
    }

    @media screen and (max-height: 1024px) {

        .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }
    }

    @media screen and (max-height: 640px) {

        .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }
    }
</style>
<style id='wp-fonts-local'>
    @font-face {
        font-family: "Source Serif Pro";
        font-style: normal;
        font-weight: 200 900;
        font-display: fallback;
        src: url('<?= env('wordpress_url') ?>/wp-content/themes/twentytwentytwo/assets/fonts/source-serif-pro/SourceSerif4Variable-Roman.ttf.woff2') format('woff2');
        font-stretch: normal;
    }

    @font-face {
        font-family: "Source Serif Pro";
        font-style: italic;
        font-weight: 200 900;
        font-display: fallback;
        src: url('<?= env('wordpress_url') ?>/wp-content/themes/twentytwentytwo/assets/fonts/source-serif-pro/SourceSerif4Variable-Italic.ttf.woff2') format('woff2');
        font-stretch: normal;
    }
</style>