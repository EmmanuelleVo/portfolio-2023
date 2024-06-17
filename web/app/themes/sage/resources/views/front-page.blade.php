{{-- Template Name: Homepage --}}

@extends('layouts.app')

@query([
'post_type' => 'project',
'meta_key'       => 'date',
'orderby'        => 'meta_value',
'order'          => 'desc',
'posts_per_page' => 2,
])

@section('content')
  <div class="page__wrapper page__wrapper--colored">
    <div class="o-wrapper">
      <div class="title__container" data-aos="fade-up">
        <h2 class="title title--small title--white">{{ __('Mes projets', 'sage') }}</h2>
        <a href="{{ get_post_type_archive_link('project') }}" class="c-btn c-btn--secondary c-btn--animate">
          <span>{{ __('Voir tous mes projets', 'sage') }}</span>
        </a>
      </div>
      <div class="card__container">
        @php
            $delay = 0;
        @endphp
        @posts
        @include('partials.project-card', ['delay' => $delay])
        @php
            $delay += 200;
        @endphp
        @endposts
      </div>
    </div>
  </div>

  @include('partials.banner-contact')

  {{--@while(have_posts()) @php(the_post())
    --}}{{--@include('partials.page-header')--}}{{--
    --}}{{--@includeFirst(['partials.content-page', 'partials.content'])--}}{{--
  @endwhile--}}
@endsection
