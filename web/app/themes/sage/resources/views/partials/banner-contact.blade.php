@php
    $current_language = pll_current_language();
    $contact_url = ($current_language == 'fr') ? '/contact' : '/en/contact-me';
@endphp

<div class="banner">
    <div class="banner__content o-wrapper wysiwyg">
        <p>
            <?php
                echo sprintf(
                    /* translators: 1: URL, 2: CSS class */
                    __('Démarrons un projet ensemble, n\'hésitez pas à me <a href="%1$s" title="contact" class="%2$s">contacter</a>.', 'sage'),
                    esc_url($contact_url),
                    esc_attr('banner__link')
                );
            ?>
        </p>
    </div>
</div>