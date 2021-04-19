<div class="{{ $block->classes }}">
  <div class="my-12 overflow-hidden md:mb-24">
    <div class="container max-w-6xl px-6 mx-auto lg:px-8">
      <p class="font-bold text-center md:text-lg xl:text-xl">{!! $title !!}</p>
    </div>
    <div class="mt-6 md:container md:px-6 lg:px-8 md:mx-auto md:max-w-6xl xl:mt-8">
      <div class="overflow-visible swiper-container story-slider">
        <div class="swiper-wrapper">
          @foreach($stories as $item)
            <div class="flex flex-col h-auto swiper-slide bg-[#E1F4FF] border border-[#C8EBFF] shadow-lg mb-6">
              <div class="w-full h-56">
                <img class="object-cover object-center w-full h-full" src="{!! $item['image'] !!}" alt="">
              </div>
              <div class="flex-grow p-4 mb-3">
                <h3 class="text-2xl font-bold md:text-3xl">{!! $item['title'] !!}</h3>
                <div class="text-[#333333] font-light mb-4">{!! $item['location'] !!}</div>
                <p class="text-sm lg:text-base">{!! $item['excerpt'] !!}</p>
              </div>
              <div class="p-4 pt-0 text-right">
                <a href="{!! $item['link'] !!}" target="_blank" class="inline-flex items-center px-3 py-2 text-xs font-semibold uppercase border rounded border-c-blue-400 hover:bg-c-blue-400 hover:text-white lg:text-sm lg:mb-2">
                  <span class="mr-1">Learn More</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      <div class="pb-6 md:pt-6">
        <div class="flex items-center justify-center w-full space-x-12 md:space-x-16">
          <div class="pointer-events-auto story-swiper-prev">
            <button class="p-1 transform bg-white border-2 rounded-full border-c-orange-100 focus:outline-none hover:scale-110 hover:shadow">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
          <div class="pointer-events-auto story-swiper-next">
            <button class="p-1 transform bg-white border-2 rounded-full border-c-orange-100 focus:outline-none hover:scale-110 hover:shadow">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
