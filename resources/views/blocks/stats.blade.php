<div class="{{ $block->classes }}">
  <div class="container max-w-6xl px-6 pt-8 mx-auto lg:px-8">
    <div>
      <div class="max-w-xs mx-auto">
        <img class="w-full h-auto" src="{!! $logo['url'] !!}" alt="">
      </div>
      <div class="py-8 text-center">
        <h2 class="mb-4 text-3xl font-bold md:text-4xl xl:text-5xl xl:mb-6">{!! $title !!}</h2>
        <p class="font-bold md:text-lg md:max-w-md md:mx-auto xl:max-w-lg xl:text-xl">{!! $content !!}</p>
      </div>
      <div class="mt-6 md:mt-10 md:max-w-xl md:mx-auto xl:mt-12 xl:max-w-3xl">
        <div class="h-6 w-full bg-gradient-to-r from-[#269FB9] via-[#5A489F] to-[#24A673] relative">
          <div class="absolute h-full" style="width: {!! $score !!}%;">
            <div class="relative flex justify-end">
              <div class="relative -mt-1 -mr-4">
                <div class="absolute top-0 left-0 right-0 w-16 -mt-10 -ml-4 text-xs font-semibold leading-4 text-center uppercase md:text-sm md:leading-4">Your<br/>Business</div>
                <div class="relative z-20 w-8 h-8 bg-white rounded-full shadow-lg"></div>
                <div class="w-5 h-5 bg-[#E56868] rounded-full absolute top-[50%] left-[50%] -mt-2.5 -ml-2.5 z-20 shadow"></div>
                <div class="absolute w-px h-11 bg-c-blue-400 left-[50%] top-0 -mt-1.5 z-10"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-3 mt-4 text-xs font-semibold leading-4 uppercase md:text-sm md:leading-4 lg:mt-6">
          <div>Digitally<br/>Uncertain</div>
          <div class="text-center">Digitally<br/>Evolving</div>
          <div class="text-right">Digitally<br/>Advanced</div>
        </div>
        @if($stats['stat 4'])
          <div class="grid grid-cols-3 mt-2 font-semibold leading-4 uppercase md:leading-4 sm:text-lg md:mt-4 lg:text-xl xl:text-2xl">
            <div class="pl-4 text-[#279FB9]">{!! $stats['stat 4'] !!}%</div>
            <div class="text-center text-[#5A489F]">{!! $stats['stat 5'] !!}%</div>
            <div class="pr-4 text-right text-[#26A474]">{!! $stats['stat 6'] !!}%</div>
          </div>
          <div class="px-6 pt-4 pb-6 md:px-8">
            <div class="w-full border-l-2 border-r-2 border-b-2 border-[#294071] min-h-[1rem]">
              <div class="px-4 mx-6 -mb-8 text-xs font-semibold text-center bg-c-gray-100 sm:text-sm sm:max-w-sm sm:mx-auto sm:pt-4 sm:-mb-5 xl:text-base">
                @if($ind == 'other')
                  Distribution of digital adoption levels among small businesses</div>
                @else
                  Distribution of digital adoption levels among small businesses in the {!! $ind !!} industry</div>
                @endif
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>

  <div class="my-12 overflow-hidden">
    <div class="container max-w-6xl px-6 mx-auto lg:px-8">
      @if($ind == 'other')
        <p class="font-bold text-center md:text-lg xl:text-xl">Here’s what other SMBs think about digital tools:</p>
      @else
        <p class="font-bold text-center md:text-lg xl:text-xl">Here’s what other SMBs in the {!! $ind !!} industry think about digital tools:</p>
      @endif
    </div>
    <div class="mt-6 md:container md:px-6 lg:px-8 md:mx-auto md:max-w-6xl xl:mt-8">
      <div class="overflow-visible swiper-container stats-slider">
        <div class="swiper-wrapper">
          @foreach($info as $item)
            <div class="flex flex-col h-auto swiper-slide">
              <div class="w-full h-84 lg:h-96">
                <img class="object-cover object-center w-full h-full" src="{!! $item['image']['url'] !!}" alt="">
              </div>
              <div class="flex-grow p-4 bg-c-blue-400">
                <div class="text-3xl font-extrabold text-c-orange-100">{!! $stats['stat ' . $loop->iteration] !!}%</div>
                <div class="font-semibold text-white lg:text-lg">{!! $item['description'] !!}</div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  
</div>
