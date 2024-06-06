{{-- RESULTS PAGE --}}

@extends('layouts.app')

@section('content')
<div class="page__wrapper">
  <div class="o-wrapper">
    @include('partials.page-header')
  
    @if (! have_posts())
      <x-alert type="warning">
        {!! __('Désolé, aucun résultat n‘a été trouvé.', 'sage') !!}
      </x-alert>
  
      {!! get_search_form(false) !!}
    @endif
  
    @while(have_posts()) @php(the_post())
    <div class="card__container">
      @include('partials.content-search')
    </div>
    @endwhile
  
    {!! get_the_posts_navigation() !!}
  </div>
</div>
@endsection
