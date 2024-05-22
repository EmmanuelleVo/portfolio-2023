{{-- Template Name: About Page --}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

  <div class="page__wrapper">
    <div id="js" class="about o-wrapper">
      @if(get_field('is_about_page') === true)
        <h1 class="title title--medium">@field('name')</h1>
        <div class="about__container">
          {{-- <figure class="about__figure">
            <img src="@field('image', 'url')" alt="@field('image', 'url')" class="about__image">
          </figure> --}}
          <div class="about__figure" style="background-image: url('@field('image', 'url')');"></div>
          <div class="about__content">
            <div class="about__roles">
              <span class="title title--small alternateRoles">@field('role_1')</span>
              <span class="title title--small alternateRoles">@field('role_2')</span>
              {{-- TODO:ANIMATION --}}
            </div>
            <div class="wysiwyg">
              @field('about_content')
            </div>

            <div class="about__competences">
              <span class="title title--small">{{ __('Mes compétences', 'sage') }}</span>
              <ul class="about__competences-list wysiwyg">
                @for ($i = 1; $i <= 3; $i++)
                  @php($field_name = 'competence_' . $i)
                  @hasfield($field_name)
                  <li class="about__competences-item">@field($field_name)</li>
                  @endfield
                @endfor
              </ul>
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>
  @include('partials.banner-contact')

  @endwhile
@endsection
