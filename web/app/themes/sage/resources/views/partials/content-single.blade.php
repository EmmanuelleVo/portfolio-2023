<article class="project">
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
          <a href="@field('url')" title="{{ __('Voir le site du projet', 'sage') }}" class="c-btn c-btn--primary">{{ __('Voir le site du projet', 'sage') }}</a>
        @endfield
      </div>
    </div>
  </div>

  <div class="project__objectives objectives">
    <div class="o-wrapper">
      <h2 class="title title--small">{{ __('Objectifs', 'sage') }}</h2>

    </div>
  </div>

  {{--TODO:Add ima ges (iphone mockup) + languages used--}}

  {{--<footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>--}}

</article>
