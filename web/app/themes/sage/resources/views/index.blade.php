{{-- ARCHIVE PAGE --}}

@extends('layouts.app')

@section('content')
  {{--@include('partials.page-header')--}}

  {{--@if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif--}}

  @query([
  'post_type' => 'project',
  'orderby'        => 'date',
  'order'          => 'desc',

  ])

  <div class="page__wrapper">
    <div class="o-wrapper">
      <h2 class="title title--medium">{{ __('Mes projets', 'sage') }}</h2>
      <div class="card__container">
        @posts
        @include('partials.project-card')
        @endposts
      </div>
    </div>
  </div>

  {{--@while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile--}}

  {!! get_the_posts_navigation() !!}
  @include('partials.banner-contact')
@endsection
{{--
@section('sidebar')
  @include('sections.sidebar')
@endsection
--}}
