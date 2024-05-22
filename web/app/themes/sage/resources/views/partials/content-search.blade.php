{{-- <article @php(post_class())>
  <header>
    <h2 class="entry-title">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>

    @includeWhen(get_post_type() === 'post', 'partials.entry-meta')
  </header>

  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article> --}}

<article @php(post_class('card'))>
  <div class="card__figure-container">
    <figure class="card__figure">
      <img src="@field('main_image', 'url')" alt="" class="card__img">
    </figure>
  </div>
  <h2 class="title card__title">@title</h2>
  <a href="{{ get_permalink() }}" class="card__link" title="{{ __('En savoir plus sur', 'sage')}} @title"></a>

  @includeWhen(get_post_type() === 'post', 'partials.entry-meta')
</article>