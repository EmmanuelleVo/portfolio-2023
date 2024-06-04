<header class="header">
  @if (has_nav_menu('primary_navigation'))
    <div class="">
      <nav class="nav-primary nav o-wrapper" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        <div class="header__nav-logo">
          <a href="{{ pll_home_url()}}" class="u-absolute" title="{{ __('Home') }}">
            <span class="u-visually-hidden">{{ __('Home') }}</span>
          </a>
          <svg xmlns="http://www.w3.org/2000/svg" width="70" height="75" viewBox="0 0 117.478 76.797">
            <g id="Groupe_22" data-name="Groupe 22" transform="translate(-231.522 -32.203)">
              <title>Logo du portfolio d'Emmanuelle Vo</title>
              <desc>La lettre V suivi d'un rond coloré, ce qui forme "VO"</desc>
              <ellipse id="Ellipse_4" data-name="Ellipse 4" cx="43" cy="38" rx="43" ry="38"
                       transform="translate(263 33)" fill="#ffc0b8"/>
              <path id="Tracé_11" data-name="Tracé 11" d="M4213.8,33.226l33.458,74.61,33.3-74.61"
                    transform="translate(-3980)" fill="none" stroke="#000" stroke-linejoin="bevel"
                    stroke-width="5"/>
            </g>
          </svg>
        </div>
        <div class="nav__wrapper">
          <button class="hamburger hamburger--collapse" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>  

          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav__links', 'container_class' => 'nav__links-container', 'echo' => false]) !!}
          {{--<form id="language-switcher" action="{{ home_url('/') }}" method="get">
            @php
              $current_lang = get_locale();
              $languages = ['fr' => 'Français', 'en' => 'English'];
            @endphp

            <label for="language-select" class="u-visually-hidden">{{ __('Changer la langue', 'sage') }}:</label>
            <select name="lang" id="language-select" onchange="this.form.submit()">
              @foreach ($languages as $code => $label)
                <option value="{{ $code }}" {{ ($code === $current_lang) ? 'selected' : '' }}>
                  <span>{{ $code }}</span>
                </option>
              @endforeach
            </select>
          </form>--}}

          {{--<div class="menu__lang lang">
            <h2 class="u-visually-hidden"><?= __('Changer la langue', 'pf'); ?></h2>
              <?php foreach (pll_the_languages(['raw' => true]) as $code => $locale): ?>
            <div class="lang__container">
                <?php if ($locale['current_lang']): ?>
              <p class="u-visually-hidden"><?= __('Le site est actuellement en', 'pf'); ?> <?= $locale['name'] ?></p>
              <a href="/" class="lang__current"><?= strtoupper($code) ?><span
                  class="arrow-down arrow-js"></span></a>
              <?php endif; ?>
              <?php endforeach; ?>
              <ul class="lang__other lang__hidden">
                  <?php foreach (pll_the_languages(['raw' => true]) as $code => $locale): ?>
                <li class="lang__li">
                  <a lang="<?= $locale['locale'] ?>" hreflang="<?= $locale['locale'] ?>"
                     href="<?= $locale['url'] ?>" title="<?= $locale['name'] ?>"
                     class="nav__locale <?php if ($locale['current_lang']): ?> current__lang <?php endif; ?>">
                      <?= strtoupper($code) ?>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>--}}
        </div>
      </nav>
    </div>
  @endif

  @php
    $current_language = pll_current_language();
    $about_url = ($current_language == 'fr') ? '/a-propos' : '/en/about';
  @endphp

  @if(is_front_page())
      <div class="header--home">
        <canvas id="canvas" class="canvas"></canvas>
        <div class="header__intro">
          <h2 class="title title--big header__title">
            <span class="header__title--name">Emmanuelle Vo,</span>
            <span class="header__title--job">Web Designer</span>
          </h2>
          <a class="c-btn c-btn--primary c-btn--animate" href="{{ $about_url }}">
            {{--{!! $siteName !!}--}}
            <span>{{ __('En savoir plus', 'sage') }}</span>
          </a>
        </div>
      </div>
  @endif



</header>
