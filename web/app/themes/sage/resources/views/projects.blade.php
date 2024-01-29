{{-- Template Name: Project Archive --}}

@extends('layouts.app')

@section('content')

  @query([
  'post_type'      => 'project',
  'meta_key'       => 'date',
  'orderby'        => 'meta_value',
  'order'          => 'desc',
  'posts_per_page' => 2,
  'paged'          => get_query_var('paged') ?: 1,
  ])

  <div class="page__wrapper">
    <div class="o-wrapper">
      <h2 class="title title--medium">{{ __('Mes projets') }}</h2>
      <div class="card__container">
        @posts
          @include('partials.project-card')
        @endposts
      </div>
      {{--TODO: pagination--}}
      <div class="pagination">
        {!! posts_nav_link(); !!}
      </div>
    </div>
  </div>
@endsection
