{{-- Template Name: Homepage --}}

@extends('layouts.app')

@query([
'post_type' => 'project',
'meta_key'       => 'date',
'orderby'        => 'meta_value',
'order'          => 'desc',

])

@section('content')
  <div class="page__wrapper page__wrapper--colored">
    <div class="o-wrapper">
      <div class="title__container">
        <h2 class="title title--small title--white">{{ __('Mes projets') }}</h2>
        <a href="{{ get_post_type_archive_link('project') }}" class="c-btn c-btn--secondary">{{ __('Voir tous mes projets', 'sage') }}</a>
      </div>
      <div class="card__container">
        @posts
        @include('partials.project-card')
        @endposts
      </div>
    </div>
  </div>


  {{--@while(have_posts()) @php(the_post())
    --}}{{--@include('partials.page-header')--}}{{--
    --}}{{--@includeFirst(['partials.content-page', 'partials.content'])--}}{{--
  @endwhile--}}
@endsection
