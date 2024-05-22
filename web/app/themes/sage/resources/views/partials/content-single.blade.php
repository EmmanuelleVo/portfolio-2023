<article id="js" class="project">
  <div class="o-wrapper">
    <h1 class="project__title title title--medium">@title</h1>
    <span class="project__date"><time datetime="{{ date('c', strtotime(get_field('date', false, false))) }}">@field('date')</time></span>
    <div class="project__container">
      <figure class="project__figure-container">
        <img src="@field('main_image', 'url')" alt="" class="project__figure">
      </figure>
      <div class="">
        <div class="project__content wysiwyg">
          @field('content')
        </div>
        @hasfield('url')
        <a href="@field('url')" title="{{ __('Voir le site du projet', 'sage') }}"
           class="c-btn c-btn--primary">{{ __('Voir le site du projet', 'sage') }}</a>
        @endfield
      </div>
    </div>
  </div>

  <section class="project__objectives page__wrapper page__wrapper--colored">
    <div class="o-wrapper">
      <h2 class="title title--white title--small">{{ __('Objectifs', 'sage') }}</h2>
      <ul class="project__objectives-list wysiwyg">
        @for($i = 1; $i <= 4; $i++)
          @php($field_name = 'objectives_content_' . $i)
          @hasfield($field_name)
          <li class="project__objectives-item">@field($field_name)</li>
          @endfield
        @endfor
      </ul>
    </div>
  </section>

  <section class="project__images">
    <div class="o-wrapper">
      <h2 class="title u-visually-hidden">{{ __('Images du projet', 'sage') }}</h2>
    </div>
  </section>

  <section class="project__languages page__wrapper">
    <div class="o-wrapper">
      <h2 class="title title--small">{{ __('Langages utilisés', 'sage') }}</h2>
      <div class="tabs">
        <div class="tabs__container">
          @for ($i = 1; $i <= 6; $i++)
            @php($field_name = 'languages_file_' . $i)
            @hasfield($field_name)
            {{--<button class="tab__link @if($i===1) tab__link--active @endif" data-for-tab="{{ $i }}">
              {{ $i }}
            </button>--}}
            <figure class="tab__figure @if($i===1) tab__figure--active @endif" data-tab-figure="{{ $i }}">
              <img src="@field($field_name, 'url')" alt="@field($field_name, 'alt')"
                   class="tab__link @if($i===1) tab__link--active @endif" data-for-tab="{{ $i }}">
            </figure>
            @endfield
          @endfor
        </div>

        <div class="tab__content-container">
          @for ($i = 1; $i <= 6; $i++)
            @php($field_name = 'languages_content_' . $i)
            @hasfield($field_name)
            <div class="tab__content @if($i===1) tab__content--active @endif wysiwyg" id="content{{ $i }}" data-tab="{{ $i }}">
              <p>@field($field_name) - {{ $i }}</p>
            </div>
            @endfield
          @endfor
        </div>

      </div>
    </div>
  </section>

  {{--TODO:Add images (iphone mockup) + languages used--}}


    {{--$prev_post = get_previous_post();
if($prev_post) {
$prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class=" ">&laquo; Previous post<br /><strong>&quot;'. $prev_title . '&quot;</strong></a>' . "\n";
}

$next_post = get_next_post();
if($next_post) {
$next_title = strip_tags(str_replace('"', '', $next_post->post_title));
echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class=" ">Next post &raquo;<br /><strong>&quot;'. $next_title . '&quot;</strong></a>' . "\n";
}--}}


  {{--<div class="project__actions o-wrapper">
      <?php previous_post_link('%link', __('Précédent', 'sage')) ?>
      <?php next_post_link('%link', __('Suivant', 'sage')) ?>
      <a href="<?= get_post_type_archive_link('project') ?>"
         class="c-btn c-btn--secondary"><?= __('Voir tous les projets', 'sage') ?></a>
  </div>--}}


  {{--<footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>--}}

</article>
