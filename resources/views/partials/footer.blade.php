<footer class="bg-gray-900 navigation">
  <div class="max-w-md px-4 py-12 mx-auto overflow-hidden sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
    <nav class="flex flex-wrap justify-center -mx-5 -my-2" aria-label="Footer">

      @foreach($navigation as $item)
        <div class="px-5 py-2">
          <a href="{{ $item->url }}" target="{!! $item->target !!}" class="text-base text-gray-400 hover:text-gray-300 nav-link">
            {!! $item->label !!}
          </a>
        </div>
      @endforeach

    </nav>
    <div class="flex justify-center mt-8 space-x-6">
      @foreach($social as $item)
        <a href="{!! $item['url'] !!}" class="text-gray-400 hover:text-gray-300" target="_blank">
          {{-- <span class="sr-only">Facebook</span> --}}
          @svg($item['icon'], 'w-6 h-6')
        </a>
      @endforeach

    </div>
    <p class="mt-8 text-sm text-center text-gray-400">
      &copy; {!! esc_attr( date( 'Y' ) ); !!} {!! $copy !!}
    </p>
  </div>
</footer>