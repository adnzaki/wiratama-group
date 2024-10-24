<script type='text/javascript'>
    const lazyloadRunObserver = () => {
        const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
        const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    let lazyloadBackground = entry.target;
                    if (lazyloadBackground) {
                        lazyloadBackground.classList.add('e-lazyloaded');
                    }
                    lazyloadBackgroundObserver.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: '200px 0px 200px 0px'
        });
        lazyloadBackgrounds.forEach((lazyloadBackground) => {
            lazyloadBackgroundObserver.observe(lazyloadBackground);
        });
    };
    const events = [
        'DOMContentLoaded',
        'elementor/lazyload/observe',
    ];
    events.forEach((event) => {
        document.addEventListener(event, lazyloadRunObserver);
    });
</script>
<script src="<?= env('wordpress_url') ?>/wp-includes/js/comment-reply.min.js?ver=6.6.2" id="comment-reply-js" async data-wp-strategy="async"></script>
<script src="<?= env('wordpress_url') ?>/wp-content/plugins/otter-blocks/assets/glide/glide.min.js?ver=a6dc7de49a2817fdbed7" id="glidejs-js" async></script>
<script id="otter-slider-js-extra">
    var themeisleGutenbergSlider = {
        "isRTL": ""
    };
</script>
<script src="<?= env('wordpress_url') ?>/wp-content/plugins/otter-blocks/build/blocks/slider.js?ver=a6dc7de49a2817fdbed7" id="otter-slider-js" async></script>
<script id="wp-block-template-skip-link-js-after">
    (function() {
        var skipLinkTarget = document.querySelector('main'),
            sibling,
            skipLinkTargetID,
            skipLink;

        // Early exit if a skip-link target can't be located.
        if (!skipLinkTarget) {
            return;
        }

        /*
         * Get the site wrapper.
         * The skip-link will be injected in the beginning of it.
         */
        sibling = document.querySelector('.wp-site-blocks');

        // Early exit if the root element was not found.
        if (!sibling) {
            return;
        }

        // Get the skip-link target's ID, and generate one if it doesn't exist.
        skipLinkTargetID = skipLinkTarget.id;
        if (!skipLinkTargetID) {
            skipLinkTargetID = 'wp--skip-link--target';
            skipLinkTarget.id = skipLinkTargetID;
        }

        // Create the skip link.
        skipLink = document.createElement('a');
        skipLink.classList.add('skip-link', 'screen-reader-text');
        skipLink.href = '#' + skipLinkTargetID;
        skipLink.innerHTML = 'Lewati ke konten';

        // Inject the skip link.
        sibling.parentElement.insertBefore(skipLink, sibling);
    }());
</script>