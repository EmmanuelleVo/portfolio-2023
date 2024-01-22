<article class="card">
  <figure class="card__figure-container">
    <img src="@field('main_image', 'url')" alt="" class="card__figure">
  </figure>
  <h2 class="title card__title">@title</h2>
  <a href="{{ get_the_permalink() }}" class="card__link" title="{{ __('En savoir plus sur', 'sage')}} @title"></a>
</article>
