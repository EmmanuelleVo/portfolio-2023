@php
    $current_language = pll_current_language();
    $contact_url = ($current_language == 'fr') ? '/contact' : '/en/contact-me';
@endphp

<div class="banner o-wrapper">
    <div class="banner__content wysiwyg">
        <p>
            <?php
                echo sprintf(
                    __('N\'hésitez pas à me <a href="%s" title="contact" class="%s">contacter</a>.', 'sage'),
                    esc_url($contact_url),
                    esc_attr('banner__link')
                );
            ?>
        </p>
    </div>
</div>