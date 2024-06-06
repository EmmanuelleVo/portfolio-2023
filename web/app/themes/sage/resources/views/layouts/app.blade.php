{{-- Is wrapped by index.php in /root/ --}}

<a class="u-visually-hidden" href="#main" title="{{ __('Passer au contenu principal', 'sage') }}">
  {{ __('Passer au contenu principal', 'sage') }}
</a>

@include('sections.header')

  <main id="main" class="main">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

@include('sections.footer')
