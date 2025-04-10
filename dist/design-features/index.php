<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/locale/Locale.php'); ?>

<!doctype html>
<html lang="<?= explode("-", $_SESSION["lang"])[0] ?>">

<head>
  <?php $_DOCUMENT_TITLE = "Design & Features"; ?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Head.php'); ?>
</head>

<body>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Navbar.php'); ?>

  <main class="bg-tiles mx-auto mt-32 flex flex-col gap-y-10">
    <section data-aos="fade-in" class="relative isolate px-6 py-14 lg:py-20">
      <div class="absolute -top-80 left-0 -z-10 opacity-10 md:top-20 xl:top-3" aria-hidden="true">
        <img src="/assets/img/floral.png" />
      </div>
      <div class="absolute right-0 -bottom-80 -z-10 opacity-10 md:bottom-20 xl:bottom-3" aria-hidden="true">
        <img src="/assets/img/floral.png" class="rotate-180" />
      </div>

      <div class="mx-auto max-w-2xl md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div class="mx-auto max-w-5xl text-center">
          <h1 class="text-xl font-medium tracking-tight text-balance text-harmoni-dark-brown sm:text-3xl"><?= __("Design & Features") ?></h1>
          <h1 class="mt-2 font-serif text-5xl font-semibold tracking-tight text-balance text-harmoni-dark-brown capitalize sm:text-6xl"><?= __("The Space You Can Plan Your Life Around") ?></h1>

          <div class="mt-10 flex items-center justify-center gap-x-6">
            <!-- <a href="/home/" class="bg-harmoni-green rounded-md px-3.5 py-2.5 text-base font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-offset-2"><?= __("Explore our Homes") ?></a> -->
            <a href="/home/">
              <img src="/assets/img/new element/redesign web-04.png" class="w-full h-auto max-w-84" />
            </a>
          </div>
        </div>
        <div class="mt-16 flow-root sm:mt-24">
          <div class="-m-2 rounded-xl bg-harmoni-light-brown p-2 ring-1 ring-gray-900/10 ring-inset xl:-m-4 xl:rounded-2xl xl:p-4">
            <img id="hero-carousel" src="/assets/img/element/website element_Reka bentuk banner.png" alt="App screenshot" class="bg-white aspect-video rounded-md object-cover shadow-2xl ring-1 ring-gray-900/10 transition duration-700 ease-in-out" />
          </div>
        </div>
      </div>
    </section>

    <section data-aos="fade-in" class="bg-tear z-10 py-14 lg:py-20">
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div>
          <h2 class="text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-6xl"><?= __("A Home You'll Be Proud to Call Your Own") ?></h2>
          <p class="mt-4 text-center text-lg text-pretty text-harmoni-dark-brown"><?= __("At Harmoni, we don't just build houses—we create homes for real families. Guided by our three core principles, every detail of your home is crafted to enrich your life:") ?></p>
        </div>

        <div class="grid w-full grid-cols-1 gap-2 lg:grid-cols-3">
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-harmoni-light-brown px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features - Thoughtful Design.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-white"><?= __("Thoughtful Design") ?></h3>
            <p class="text-center text-lg text-white"><?= __("Elegant, functional spaces for modern living") ?></p>
          </div>
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-harmoni-light-brown px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features - Uncompromising Quality.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-white"><?= __("Uncompromising Quality") ?></h3>
            <p class="text-center text-lg text-white"><?= __("Built to last with care and precision") ?></p>
          </div>
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-harmoni-light-brown px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features - Natural Beauty.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-white"><?= __("Natural Beauty") ?></h3>
            <p class="text-center text-lg text-white"><?= __("Green spaces that bring tranquillity to your doorstep") ?></p>
          </div>
        </div>
      </div>
    </section>

    <section data-aos="fade-in" class="bg-tiles py-14 lg:py-20">
      <div class="relative hidden 2xl:block">
        <img src="/assets/img/new element/redesign web-05.png" class="max-w-128 absolute left-0 -translate-x-3/5 top-0 translate-y-[100%]" />
        <img src="/assets/img/new element/redesign web-08.png" class="max-w-128 absolute right-0 translate-x-3/5 top-0 translate-y-[200%]" />

        <img src="/assets/img/new element/redesign web-07.png" class="max-w-128 absolute left-0 -translate-x-3/5 top-0 translate-y-[300%]" />
        <img src="/assets/img/new element/redesign web-06.png" class="max-w-128 absolute right-0 translate-x-3/5 top-0 translate-y-[700%]" />

        <img src="/assets/img/new element/redesign web-05.png" class="max-w-128 absolute left-0 -translate-x-3/5 top-0 translate-y-[1100%]" />
      </div>
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <h2 class="mt-2 text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-6xl"><?= __("Thoughtful Design: Spaces Tailored for You") ?></h2>
        <div class="mx-auto grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start">
          <div class="order-2 lg:order-1 lg:pr-4">
            <div class="flex flex-col gap-y-8 lg:max-w-lg">
              <p class="text-center text-lg text-harmoni-dark-brown lg:text-left"><?= __("Harmoni homes offer two thoughtfully crafted layouts, designed to suit your lifestyle:") ?></p>
              <p class="text-center text-lg text-harmoni-dark-brown lg:text-left">
                <span class="font-serif text-2xl font-bold"><?= __("Type A:") ?></span><br />
                <?= __("A classic layout with the living room at the front—the perfect gathering space for family and friends.") ?>
                <br />
                <br />
                <span class="font-serif text-2xl font-bold"><?= __("Type B:") ?></span><br />
                <?= __("A modern design with the living area at the back, opening onto a spacious private garden for privacy and serenity.") ?>
              </p>
              <p class="text-center text-lg text-harmoni-dark-brown lg:text-left"><?= __("<b>Double-Volume Ceilings</b> in the living area provide natural light, better ventilation, and a stunning sense of space, creating a luxurious yet welcoming ambiance.") ?></p>
              <p class="text-center text-lg text-harmoni-dark-brown lg:text-left"><?= __("Whether you choose Type A or Type B, every home offers the prestige of <b>double-storey living</b> with bedrooms upstairs for added privacy and peaceful retreat spaces.") ?></p>
            </div>
          </div>
          <img src="/assets/img/element/website element_Reka bentuk image 1.png" alt="" class="order-1 w-full rounded-xl shadow-xl ring-1 ring-gray-400/10 lg:order-2" />
        </div>
      </div>

      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <h2 class="mt-2 text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-6xl"><?= __("Uncompromising Quality: Built for Generations") ?></h2>
        <div class="mx-auto grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start">
          <div class="order-2 lg:order-2 lg:pl-4">
            <div class="flex flex-col gap-y-8 lg:max-w-lg">
              <p class="text-center text-lg text-harmoni-dark-brown lg:text-left"><?= __("Every Harmoni home is a reflection of our commitment to lasting excellence:") ?></p>
              <p class="text-center text-lg text-harmoni-dark-brown lg:text-left">
                <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features - Durable Materials.png" class="mx-auto size-32 lg:mx-0 lg:size-16" />
                <span class="font-serif text-2xl font-bold"><?= __("Durable Materials:") ?></span><br />
                <?= __("Crafted to stand the test of time.") ?>
                <br />
                <br />
                <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features - Comfort-First Features.png" class="mx-auto size-32 lg:mx-0 lg:size-16" />
                <span class="font-serif text-2xl font-bold"><?= __("Comfort-First Features:") ?></span><br />
                <?= __("From wheelchair-friendly bathrooms to air-conditioning points, designed for convenience and ease.") ?>
                <br />
                <br />
                <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features - Reliable Systems.png" class="mx-auto size-32 lg:mx-0 lg:size-16" />
                <span class="font-serif text-2xl font-bold"><?= __("Reliable Systems:") ?></span><br />
                <?= __("Water booster pumps, premium locksets, and thoughtful infrastructure ensure worry-free living.") ?>
              </p>
              <p class="text-center text-lg text-harmoni-dark-brown lg:text-left"><?= __("At Harmoni, we don't just meet expectations—we exceed them, delivering homes you can trust for years to come.") ?></p>
            </div>
          </div>
          <img src="/assets/img/element/website element_Reka bentuk image 2.png" alt="" class="order-1 w-full rounded-xl shadow-xl ring-1 ring-gray-400/10 lg:order-1" />
        </div>
      </div>

      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <h2 class="mt-2 text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-6xl"><?= __("Natural Beauty: A Space to Make Memories") ?></h2>
        <div class="mx-auto grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start">
          <div class="order-2 lg:order-1 lg:pr-4">
            <div class="flex flex-col gap-y-8 lg:max-w-lg">
              <p class="text-center text-lg text-harmoni-dark-brown lg:text-left"><?= __("Your Harmoni home is more than just walls and rooms—it's a gateway to a life surrounded by nature and community:") ?></p>
              <p class="text-center text-lg text-harmoni-dark-brown lg:text-left">
                <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features - Spacious Private Gardens.png" class="mx-auto size-32 lg:mx-0 lg:size-16" />
                <span class="font-serif text-2xl font-bold"><?= __("Spacious Private Gardens:") ?></span><br />
                <?= __("Among the largest in the area, perfect for outdoor meals, playtime, or a personal retreat.") ?>
                <br />
                <br />
                <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features -  A 25,833 sqft Park.png" class="mx-auto size-32 lg:mx-0 lg:size-16" />
                <span class="font-serif text-2xl font-bold"><?= __("A 25,833 sqft Park:") ?></span><br />
                <?= __("With jogging paths, open spaces, and two multi-purpose courts for sports and recreation.") ?>
                <br />
                <br />
                <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features - Community Connection.png" class="mx-auto size-32 lg:mx-0 lg:size-16" />
                <span class="font-serif text-2xl font-bold"><?= __("Community Connection:") ?></span><br />
                <?= __("Designed for families and neighbors to bond, creating a vibrant and welcoming neighborhood.") ?>
              </p>
              <p class="text-center text-lg text-harmoni-dark-brown lg:text-left"><?= __("Live in a home where tranquility and convenience go hand in hand.") ?></p>
            </div>
          </div>
          <img src="/assets/img/element/website element_Reka bentuk image 3.png" alt="" class="order-1 w-full rounded-xl shadow-xl ring-1 ring-gray-400/10 lg:order-2" />
        </div>
      </div>
    </section>

    <section data-aos="fade-in" class="bg-tear z-10 py-14 lg:py-20">
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div>
          <h2 class="text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-6xl"><?= __("Features You'll Love") ?></h2>
        </div>

        <div class="grid w-full grid-cols-1 gap-2 lg:grid-cols-2 2xl:grid-cols-3">
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-harmoni-light-brown px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features - Water Booster Pump.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-white"><?= __("Water Booster Pump") ?></h3>
          </div>
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-harmoni-light-brown px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features -  Paint Finished Flush Door.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-white"><?= __("Paint Finished Flush Door") ?></h3>
          </div>
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-harmoni-light-brown px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features - Quality Sanitary Wares & Fittings.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-white"><?= __("Quality Sanitary Wares & Fittings") ?></h3>
          </div>
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-harmoni-light-brown px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features - Quality Locksets.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-white"><?= __("Quality Locksets") ?></h3>
          </div>
          <div class="flex flex-col col-span-2 items-center justify-center gap-2 rounded-lg bg-harmoni-light-brown px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features -  Airconditioning Ready.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-white"><?= __("Airconditioning Ready (Living Room Only)") ?></h3>
          </div>
        </div>
      </div>
    </section>

    <section data-aos="fade-in" class="bg-tiles py-14 lg:py-20">
      <div class="relative hidden 2xl:block">
        <img src="/assets/img/new element/redesign web-05.png" class="max-w-128 absolute left-0 -translate-x-3/5 top-0 translate-y-[100%]" />
        <img src="/assets/img/new element/redesign web-08.png" class="max-w-128 absolute right-0 translate-x-3/5 top-0 translate-y-[200%]" />

        <img src="/assets/img/new element/redesign web-07.png" class="max-w-128 absolute left-0 -translate-x-3/5 top-0 translate-y-[300%]" />
      </div>
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div>
          <h2 class="text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-6xl"><?= __("Pulau Indah Terrace Phase 1 & 2") ?></h2>
        </div>

        <div id="gallery-floor-plan" class="grid grid-cols-1 gap-x-10 gap-y-14 lg:grid-cols-2">
          <div class="flex flex-col gap-2 lg:col-span-2">
            <div class="rounded-xl bg-harmoni-light-brown xl:rounded-2xl xl:p-4">
              <a href="https://harmoni.properties/wp-content/uploads/2024/08/Screenshot-2024-08-19-at-11.36.21.png" data-pswp-width="2266" data-pswp-height="1464">
                <img class="bg-white h-auto w-full" src="https://harmoni.properties/wp-content/uploads/2024/08/Screenshot-2024-08-19-at-11.36.21.png" alt="Floor Plan" />
              </a>
            </div>
            <div class="flex flex-row items-center justify-center gap-10">
              <div class="flex flex-row items-center gap-2">
                <div class="size-8 rounded-full bg-amber-400 lg:size-12"></div>
                <p class="font-semibold text-harmoni-dark-brown"><?= __("Layout A") ?></p>
              </div>
              <div class="flex flex-row items-center gap-2">
                <div class="size-8 rounded-full bg-cyan-300 lg:size-12"></div>
                <p class="font-semibold text-harmoni-dark-brown"><?= __("Layout B") ?></p>
              </div>
            </div>
          </div>

          <div class="flex flex-col gap-2">
            <p class="text-center font-serif text-3xl font-semibold text-harmoni-dark-brown"><?= __("Floor Plan Layout A") ?></p>
            <div class="rounded-xl bg-harmoni-light-brown p-2 xl:rounded-2xl xl:p-4">
              <a href="/assets/img/element/Type A.png" data-pswp-width="4000" data-pswp-height="2692">
                <img class="bg-white h-auto w-full" src="/assets/img/element/Type A.png" alt="Floor Plan Layout A" />
              </a>
            </div>
          </div>
          <div class="flex flex-col gap-2">
            <p class="text-center font-serif text-3xl font-semibold text-harmoni-dark-brown"><?= __("Floor Plan Layout B") ?></p>
            <div class="rounded-xl bg-harmoni-light-brown p-2 xl:rounded-2xl xl:p-4">
              <a href="/assets/img/element/Type B.png" data-pswp-width="3366" data-pswp-height="2692">
                <img class="bg-white h-auto w-full" src="/assets/img/element/Type B.png" alt="Floor Plan Layout B" />
              </a>
            </div>
          </div>
        </div>

        <div class="flex w-full flex-col md:mt-20 md:flex-row">
          <div class="flex flex-row">
            <img src="/assets/img/new element/homepage/website element-07.png" alt="" class="pointer-events-none w-1/3 object-cover group-hover:opacity-75 md:-translate-y-16" />
            <img src="/assets/img/new element/homepage/website element-08.png" alt="" class="pointer-events-none w-1/3 object-cover group-hover:opacity-75 md:-translate-y-8" />
            <img src="/assets/img/new element/homepage/website element-09.png" alt="" class="pointer-events-none w-1/3 object-cover group-hover:opacity-75" />
          </div>
          <div class="flex flex-row justify-center">
            <img src="/assets/img/new element/homepage/website element-10.png" alt="" class="pointer-events-none w-1/3 object-cover group-hover:opacity-75 md:w-1/2 md:-translate-y-8" />
            <img src="/assets/img/new element/homepage/website element-11.png" alt="" class="pointer-events-none w-1/3 object-cover group-hover:opacity-75 md:w-1/2 md:-translate-y-16" />
          </div>
        </div>
      </div>
    </section>

    <section data-aos="fade-in" class="bg-tear z-10 py-14 lg:py-20">
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div>
          <h2 class="text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-6xl"><?= __("Why Choose Harmoni?") ?></h2>
        </div>

        <div class="grid w-full grid-cols-2 gap-2 lg:grid-cols-4">
          <div class="flex flex-col items-center justify-center gap-2 bg-harmoni-light-brown px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features - Affordable Luxury.png" class="size-32 brightness-0 invert" />
            <h3 class="text-center font-serif text-3xl font-semibold text-white"><?= __("Affordable Luxury") ?></h3>
            <p class="text-center text-lg text-white"><?= __("High-quality homes at a price you’ll love") ?></p>
          </div>
          <div class="flex flex-col items-center justify-center gap-2 bg-harmoni-light-brown px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features -  Spacious Living.png" class="size-32 brightness-0 invert" />
            <h3 class="text-center font-serif text-3xl font-semibold text-white"><?= __("Spacious Living") ?></h3>
            <p class="text-center text-lg text-white"><?= __("Thoughtful layouts and large private gardens") ?></p>
          </div>
          <div class="flex flex-col items-center justify-center gap-2 bg-harmoni-light-brown px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features - Community Living.png" class="size-32 brightness-0 invert" />
            <h3 class="text-center font-serif text-3xl font-semibold text-white"><?= __("Community Living") ?></h3>
            <p class="text-center text-lg text-white"><?= __("Parks and facilities designed to bring families together") ?></p>
          </div>
          <div class="flex flex-col items-center justify-center gap-2 bg-harmoni-light-brown px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features - Future-Ready Homes.png" class="size-32 brightness-0 invert" />
            <h3 class="text-center font-serif text-3xl font-semibold text-white"><?= __("Future-Ready Homes") ?></h3>
            <p class="text-center text-lg text-white"><?= __("Built with durability, efficiency, and adaptability in mind") ?></p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Footer.php'); ?>

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Scripts.php'); ?>
  <script>
    let lightbox = new PhotoSwipeLightbox({
      gallery: "#gallery-floor-plan a",
      pswpModule: PhotoSwipe,
    });

    lightbox.on("uiRegister", function() {
      lightbox.pswp.ui.registerElement({
        name: "custom-caption",
        order: 9,
        isButton: false,
        appendTo: "root",
        html: "",
        onInit: (el, pswp) => {
          lightbox.pswp.on("change", () => {
            const currSlideElement = lightbox.pswp.currSlide.data.element;
            let captionHTML = "";
            if (currSlideElement) {
              const hiddenCaption = currSlideElement.querySelector(".hidden-caption-content");
              if (hiddenCaption) {
                captionHTML = hiddenCaption.innerHTML;
              } else {
                captionHTML = currSlideElement.querySelector("img").getAttribute("alt");
              }
            }
            el.innerHTML = captionHTML || "";
          });
        },
      });

      lightbox.pswp.ui.registerElement({
        name: "download-button",
        order: 8,
        isButton: true,
        tagName: "a",

        html: {
          isCustomSVG: true,
          inner: '<path d="M20.5 14.3 17.1 18V10h-2.2v7.9l-3.4-3.6L10 16l6 6.1 6-6.1ZM23 23H9v2h14Z" id="pswp__icn-download"/>',
          outlineID: "pswp__icn-download",
        },

        onInit: (el, pswp) => {
          el.setAttribute("download", "");
          el.setAttribute("target", "_blank");
          el.setAttribute("rel", "noopener");

          pswp.on("change", () => {
            console.log("change");
            el.href = pswp.currSlide.data.src;
          });
        },
      });
    });

    lightbox.init();
  </script>
</body>

</html>