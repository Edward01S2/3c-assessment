<div class="{{ $block->classes }}">
  <div class="bg-c-blue-400 sm:container sm:px-6 lg:px-8 sm:mx-auto sm:bg-transparent sm:mb-12 md:max-w-5xl">
    <div class="p-6 sm:bg-c-blue-400 lg:p-8 xl:p-10">
      <h2 class="mb-6 font-bold text-center text-white md:text-lg xl:mx-auto xl:max-w-4xl xl:text-2xl">{!! $title !!}</h2>
      <div class="flex justify-center space-x-4 a2a_kit a2a_kit_size_32" data-a2a-title="{!! get_bloginfo('name') !!}" data-a2a-url="{!! site_url() !!}">
        <a class="image-share a2a_button_facebook bg-[#4064AC] p-2 rounded">
          @svg('images.3c_fb', 'w-4 h-4 fill-current lg:w-5 lg:h-5')
        </a>
        <a class="image-share a2a_button_twitter bg-[#1C9CEA] p-2 rounded">
          @svg('images.3c_tw', 'w-4 h-4 fill-current lg:w-5 lg:h-5')
        </a>
        <a class="image-share a2a_button_linkedin bg-[#0270AD] p-2 rounded">
          @svg('images.3c_li', 'w-4 h-4 fill-current lg:w-5 lg:h-5')
        </a>
        <a class="image-share a2a_button_email bg-[#E59C68] p-2 rounded">
          @svg('images.3c_email', 'w-4 h-4 fill-current lg:w-5 lg:h-5')
        </a>
        <p id="copied" class="hidden">{!! site_url() !!}</p>
        <button id="copy-link" class="image-share bg-[#EBEEF3] p-2 rounded copy relative">
          @svg('images.3c_link', 'w-4 h-4 fill-current lg:w-5 lg:h-5')
          <div id="copy-tooltip" class="absolute top-0 left-0 right-0 hidden w-20 px-4 py-1 -mt-12 -ml-6 text-xs text-white bg-black rounded opacity-90" >
            Link Copied!
            <svg class="absolute left-0 w-full h-2 text-black top-full" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve"><polygon class="fill-current" points="0,0 127.5,127.5 255,0"/></svg>
          </div>
        </button>
      </div>
    </div>
  </div>
</div>
