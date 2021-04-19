<div class="">

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  {{-- @include('partials.header') --}}

    <main id="main" class="relative" x-data="{ hide_pop: true }"">
      @yield('content')

      @if(is_front_page())
        <div x-data="{ open: true }" class="fixed inset-0 z-40 overflow-y-auto" :class="{ 'pointer-events-none' : !open }">
          <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

            <div class="fixed inset-0 w-full h-full transition-opacity bg-opacity-50 bg-c-blue-400"
              x-show="open"
              x-transition:enter="ease-out duration-300"
              x-transition:enter-start="opacity-0"
              x-transition:enter-end="opacity-100"
              x-transition:leave="ease-in duration-200"
              x-transition:leave-start="opacity-100"
              x-transition:leave-end="opacity-0"
            ></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            
            <div class="inline-block px-4 py-8 overflow-hidden align-middle transition-all transform bg-white shadow-xl sm:my-8 sm:align-middle sm:max-w-md sm:w-full sm:p-6" 
              x-show="open"
              x-transition:enter="ease-out duration-300"
              x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
              x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
              x-transition:leave="ease-in duration-200"
              x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
              x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            >
              <div>
                <div class="max-w-xs mx-auto mb-4">
                  <img class="w-full h-auto" src="{!! $logo['url'] !!}" alt="">
                </div>
                <div class="text-xl text-center text-c-blue-500">Digitally Driven Assessment</div>
                <div class="mt-4 text-center sm:mt-5">
                  <p class="text-sm font-semibold text-c-blue-200">
                    {!! $popup !!}
                  </p>
                </div>
              </div>
              <div class="mt-5 sm:mt-6">
                <button @click="open = false" type="button" class="inline-flex justify-center px-6 py-2 text-base font-bold text-white uppercase border border-transparent rounded shadow-sm bg-c-orange-100 hover:bg-opacity-75 focus:outline-none focus:ring-0">
                  Get Started
                </button>
              </div>
            </div>

          </div>
        </div>
      @endif

      @if(is_page('result'))
        <div class="fixed inset-0 z-40 overflow-y-auto" :class="{ 'pointer-events-none' : hide_pop }" x-cloak>
          <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

            <div class="fixed inset-0 w-full h-full transition-opacity bg-opacity-50 bg-c-blue-400"
              x-show="!hide_pop"
              x-transition:enter="ease-out duration-300"
              x-transition:enter-start="opacity-0"
              x-transition:enter-end="opacity-100"
              x-transition:leave="ease-in duration-200"
              x-transition:leave-start="opacity-100"
              x-transition:leave-end="opacity-0"
            ></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            
            <div class="relative inline-block px-4 py-8 overflow-hidden align-middle transition-all transform bg-white shadow-xl sm:my-8 sm:align-middle sm:max-w-md sm:w-full sm:p-6 md:max-w-lg lg:max-w-xl" 
              x-show="!hide_pop"
              x-transition:enter="ease-out duration-300"
              x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
              x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
              x-transition:leave="ease-in duration-200"
              x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
              x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
              @click.away="hide_pop = true"
            >
              <div>
                <div class="max-w-xs mx-auto mb-4">
                  <img class="w-full h-auto" src="{!! $logo['url'] !!}" alt="">
                </div>
                <div class="text-xl font-bold text-center text-c-blue-200 lg:text-2xl">{!! $cu_title !!}</div>
                <div class="mt-4 text-center sm:mt-5">
                  <div class="prose text-c-blue-200 max-w-none">
                    {!! $cu_content !!}
                  </div>
                </div>
              </div>
              <div class="mt-5 mb-3 sm:mt-6">
                <div class="cu-form sm:max-w-xs sm:mx-auto">
                  @include('partials.form', ['form' => $cu_form])
                </div>
              </div>
              <button class="absolute top-0 right-0 mt-2 mr-2 focus:outline-none" @click="hide_pop = true">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-c-blue-400 md:h-7 md:w-7" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </button>
            </div>

          </div>
        </div>
      @endif
      
    </main>


  {{-- @include('partials.footer') --}}
</div>
