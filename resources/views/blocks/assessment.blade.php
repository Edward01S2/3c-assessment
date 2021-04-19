<div class="{{ $block->classes }} min-h-screen">
  <div class="flex min-h-screen">
    <div class="relative hidden md:block md:w-2/5 lg:w-1/2">
      <img class="absolute inset-0 object-cover object-center w-full h-full bg-left" src="{!! $bg[0]['url'] !!}" alt="">
    </div>
    <div class="relative md:w-3/5 lg:w-1/2">
      <img class="absolute inset-0 z-10 object-cover object-center w-full h-full bg-right" src="{!! $bg[1]['url'] !!}" alt="">
      <div class="relative z-20 px-6 py-12 md:px-8 lg:px-12 lg:max-w-lg xl:max-w-screen-md 2xl:max-w-screen-lg lg:py-16">
        <div class="xl:max-w-md xl:mx-auto 2xl:max-w-lg">
          <div class="mb-6">
            <img src="{!! $logo['url'] !!}" alt="">
          </div>
          <h1 class="mb-6 text-3xl text-center md:text-left">{!! $title !!}</h1>
          <div class="survey">
            @include('partials.form', ['form' => $form])
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    var surveyImages = <?php echo $json ?>;
  </script>
</div>
