<div class="{{ $block->classes }} mb-12">
  <div class="container px-6 mx-auto lg:px-8 md:max-w-6xl">
    <div>
      <h2 class="mb-4 font-bold text-center md:text-lg xl:mx-auto xl:max-w-4xl xl:text-xl">{!! $title !!}</h2>
      <div class="mb-8 sm:max-w-sm sm:mx-auto lg:max-w-md">
        <select name="category" id="resource-cat" class="w-full lg:text-lg lg:py-3">
          @foreach($cats as $cat)
            @if($cat->name !== 'Uncategorized')
              <option value="{!! $cat->slug !!}" <?php if($cat->slug == $content) echo ' selected="selected"'; ?>>{!! $cat->name !!}</option>
            @endif
          @endforeach
        </select>
      </div>
      @php($count = count($posts))
      <div class="grid grid-rows-{!! $count !!} gap-6 auto-rows-fr sm:grid-rows-none sm:grid-cols-2 lg:grid-cols-3 lg:gap-8">
        @foreach($posts as $item)
          <div class="flex flex-col bg-white shadow-lg">
            <div class="h-56 img-shadow sm:h-64">
              <img class="object-cover object-center w-full h-full" src="{!! $item['image'] !!}" alt="">
            </div>
            <div class="flex-grow p-4 pb-0">
              <div class="text-sm uppercase text-c-blue-100">{!! $item['tags'] !!}</div>
              <h3 class="my-2 text-xl font-semibold text-c-blue-400 xl:text-2xl">{!! $item['title'] !!}</h3>
              <p class="text-c-blue-200">{!! $item['excerpt'] !!}</p>
            </div>
            <div class="p-4">
              <div class="border-b border-[#A7D2F1} pb-2">
                <img class="w-auto h-8" src="{!! $item['logo']['url'] !!}" alt="">
              </div>
              <div class="pt-2">
                <a href="{!! $item['link']['url'] !!}" target="_blank" class="flex items-center justify-center">
                  <span class="mr-2">{!! $item['link']['title'] !!}</span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

{{-- @dump($posts) --}}