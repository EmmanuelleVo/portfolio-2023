<article class="card" data-aos="fade-up" data-aos-delay="{{ $delay }}">
  <h2 class="title card__title">@title</h2>
  <div class="card__figure-container">
    <figure class="card__figure">
      <img src="@field('main_image', 'url')" alt="{{ get_field('title') }}" class="card__img" loading="lazy">
    </figure>
  </div>
  <a href="{{ get_the_permalink() }}" class="card__link" title="{{ __('En savoir plus sur', 'sage')}} @title"></a>
</article>
