<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/locale/Locale.php'); ?>

<!doctype html>
<html lang="<?= explode("-", $_SESSION["lang"])[0] ?>">

<head>
  <?php $_DOCUMENT_TITLE = "Sustainability"; ?>
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
          <h1 class="text-xl font-medium tracking-tight text-balance text-harmoni-dark-brown sm:text-3xl"><?= __("Sustainability") ?></h1>
          <h1 class="mt-2 font-serif text-5xl font-semibold tracking-tight text-balance text-harmoni-dark-brown capitalize sm:text-6xl"><?= __("Sustainability Isn’t Just An Initiative—It’s A Responsibility") ?></h1>

          <div class="mt-10 flex items-center justify-center gap-x-6">
            <!-- <a href="/home/" class="bg-harmoni-green rounded-md px-3.5 py-2.5 text-base font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-offset-2"><?= __("Explore our Homes") ?></a> -->
            <a href="/home/">
              <img src="/assets/img/new element/redesign web-04.png" class="w-full h-auto max-w-84" />
            </a>
          </div>
        </div>
        <div class="mt-16 flow-root sm:mt-24">
          <div class="-m-2 rounded-xl bg-harmoni-light-brown p-2 ring-1 ring-gray-900/10 ring-inset xl:-m-4 xl:rounded-2xl xl:p-4">
            <img id="hero-carousel" src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Sustainability banner.png" alt="App screenshot" class="bg-white aspect-video rounded-md object-cover object-bottom shadow-2xl ring-1 ring-gray-900/10 transition duration-700 ease-in-out" />
          </div>
        </div>
      </div>
    </section>

    <section data-aos="fade-in" class="bg-tear py-14 lg:py-20">
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div>
          <h2 class="mt-2 text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-6xl"><?= __("Our ESG Commitment") ?></h2>
          <p class="mt-4 text-center text-lg text-pretty text-harmoni-dark-brown">
            <?= __("At Harmoni, sustainability isn’t just an initiative—it’s a responsibility. Guided by our ESG (Environmental, Social, and Governance) principles, we create homes and communities that care for people, the planet, and the future.") ?>
            <br /><br />
            <?= __("Harmoni homes are more than places to live—they are a commitment to creating a better future for families, communities, and the planet.") ?>
          </p>
        </div>
      </div>
    </section>

    <section data-aos="fade-in" class="bg-tiles py-14 lg:py-20">
      <div class="relative hidden 2xl:block">
        <img src="/assets/img/new element/redesign web-05.png" class="max-w-128 absolute left-0 -translate-x-3/5 top-0 translate-y-[50%]" />
        <img src="/assets/img/new element/redesign web-08.png" class="max-w-128 absolute right-0 translate-x-3/5 top-0 translate-y-[100%]" />
      </div>
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div>
          <h2 class="mt-2 text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-6xl"><?= __("Our ESG Pillars") ?></h2>
        </div>

        <div class="glide-pillars">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <article class="glide__slide relative isolate flex flex-col justify-start overflow-hidden rounded-2xl bg-gray-900 p-8">
                <img src="//harmoni.properties/wp-content/uploads/2024/11/interior_cleanliness_bg.jpg" alt="" class="absolute inset-0 -z-10 size-full object-cover" />
                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-gray-900/10 ring-inset"></div>

                <div class="flex flex-col items-center gap-y-2">
                  <img src="//harmoni.properties/wp-content/uploads/2024/11/interior_icon.png" class="size-32 rounded-full drop-shadow-md" />
                  <h3 class="mt-3 text-center font-serif text-3xl font-semibold text-white drop-shadow-lg">
                    <span class="absolute inset-0"></span>
                    <?= __("Sustainable<br />Design") ?>
                  </h3>
                  <ul class="mt-3 list-disc space-y-2 text-lg font-light text-white drop-shadow-lg">
                    <li><?= __("Susun atur yang dirancang dengan teliti bagi memaksimumkan pencahayaan semula jadi dan pengudaraan, seterusnya mengurangkan penggunaan tenaga.") ?></li>
                    <li><?= __("Reka bentuk yang mengutamakan keseimbangan antara keselesaan, fungsi, dan kelestarian alam sekitar.") ?></li>
                  </ul>
                </div>
              </article>

              <article class="glide__slide relative isolate flex flex-col justify-start overflow-hidden rounded-2xl bg-gray-900 p-8">
                <img src="//harmoni.properties/wp-content/uploads/2024/11/exterior_cleanliness_bg.jpg" alt="" class="absolute inset-0 -z-10 size-full object-cover" />
                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-gray-900/10 ring-inset"></div>

                <div class="flex flex-col items-center gap-y-2">
                  <img src="//harmoni.properties/wp-content/uploads/2024/11/cleanliness_icon.png" class="size-32 rounded-full drop-shadow-md" />
                  <h3 class="mt-3 text-center font-serif text-3xl font-semibold text-white drop-shadow-lg">
                    <span class="absolute inset-0"></span>
                    <?= __("Community<br />Well-Being") ?>
                  </h3>
                  <ul class="mt-3 list-disc space-y-2 text-lg font-light text-white drop-shadow-lg">
                    <li><?= __("Taman dan kawasan rekreasi yang selamat serta mesra keluarga untuk menggalakkan gaya hidup sihat.") ?></li>
                    <li><?= __("Pembangunan yang bersepadu dengan infrastruktur setempat bagi meningkatkan kemudahan dan aksesibiliti.") ?></li>
                    <li><?= __("Memastikan setiap kediaman dibina mengikut standard keselamatan dan kualiti tertinggi.") ?></li>
                  </ul>
                </div>
              </article>

              <article class="glide__slide relative isolate flex flex-col justify-start overflow-hidden rounded-2xl bg-gray-900 p-8">
                <img src="//harmoni.properties/wp-content/uploads/2024/11/damage_bg.jpg" alt="" class="absolute inset-0 -z-10 size-full object-cover" />
                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-gray-900/10 ring-inset"></div>

                <div class="flex flex-col items-center gap-y-2">
                  <img src="//harmoni.properties/wp-content/uploads/2024/11/home_icon.png" class="size-32 rounded-full drop-shadow-md" />
                  <h3 class="mt-3 text-center font-serif text-3xl font-semibold text-white drop-shadow-lg">
                    <span class="absolute inset-0"></span>
                    <?= __("Transparent<br />Governance") ?>
                  </h3>
                  <ul class="mt-3 list-disc space-y-2 text-lg font-light text-white drop-shadow-lg">
                    <li><?= __("Membina kepercayaan melalui keadilan dan integriti.") ?></li>
                    <li><?= __("Proses tender yang jelas dan adil bagi memastikan ketelusan dan akauntabiliti.") ?></li>
                    <li><?= __("Menyokong Perusahaan Kecil dan Sederhana (PKS) tempatan untuk merangsang pertumbuhan ekonomi.") ?></li>
                    <li><?= __("Menegakkan amalan beretika dalam setiap peringkat pembangunan.") ?></li>
                  </ul>
                </div>
              </article>

              <article class="glide__slide relative isolate flex flex-col justify-start overflow-hidden rounded-2xl bg-gray-900 p-8">
                <img src="//harmoni.properties/wp-content/uploads/2024/11/exterior_functionality_bg.jpg" alt="" class="absolute inset-0 -z-10 size-full object-cover" />
                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-gray-900/10 ring-inset"></div>

                <div class="flex flex-col items-center gap-y-2">
                  <img src="//harmoni.properties/wp-content/uploads/2024/11/exterior_functionality_icon.png" class="size-32 rounded-full drop-shadow-md" />
                  <h3 class="mt-3 text-center font-serif text-3xl font-semibold text-white drop-shadow-lg">
                    <span class="absolute inset-0"></span>
                    <?= __("Environmental<br />Stewardship") ?>
                  </h3>
                  <ul class="mt-3 list-disc space-y-2 text-lg font-light text-white drop-shadow-lg">
                    <li><?= __("Prihatin terhadap alam semula jadi, memelihara sumber secara berhemat.") ?></li>
                    <li><?= __("Mengekalkan koridor hijau dan mengintegrasikan landskap yang menjimatkan air.") ?></li>
                    <li><?= __("Mengurangkan sisa pembinaan melalui amalan pengurusan yang bertanggungjawab.") ?></li>
                    <li><?= __("Menyediakan kediaman untuk kesediaan tenaga boleh diperbaharui, seperti panel solar.") ?></li>
                  </ul>
                </div>
              </article>

              <article class="glide__slide relative isolate flex flex-col justify-start overflow-hidden rounded-2xl bg-gray-900 p-8">
                <img src="//harmoni.properties/wp-content/uploads/2024/11/interior_functionality_bg.jpg" alt="" class="absolute inset-0 -z-10 size-full object-cover" />
                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-gray-900/10 ring-inset"></div>

                <div class="flex flex-col items-center gap-y-2">
                  <img src="//harmoni.properties/wp-content/uploads/2024/11/interior_functionality_icon.png" class="size-32 rounded-full drop-shadow-md" />
                  <h3 class="mt-3 text-center font-serif text-3xl font-semibold text-white drop-shadow-lg">
                    <span class="absolute inset-0"></span>
                    <?= __("Responsible<br />Construction Materials") ?>
                  </h3>
                  <ul class="mt-3 list-disc space-y-2 text-lg font-light text-white drop-shadow-lg">
                    <li><?= __("Pilihan bijak untuk masa depan yang lebih hijau.") ?></li>
                    <li><?= __("Menggunakan bahan rendah karbon yang diperoleh secara tempatan bagi mengurangkan kesan terhadap alam sekitar.") ?></li>
                    <li><?= __("Memilih pembekal bertauliah untuk memastikan amalan lestari dan ketahanan bahan.") ?></li>
                  </ul>
                </div>
              </article>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section data-aos="fade-in" class="bg-tear z-10 py-14 lg:py-20">
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div>
          <h2 class="text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-6xl"><?= __("Why Choose Harmoni?") ?></h2>
          <p class="mt-4 text-center text-lg text-pretty text-harmoni-dark-brown"><?= __("Our ESG pillars aren’t just principles—they’re promises.") ?></p>
        </div>

        <div class="grid w-full grid-cols-1 gap-2 lg:grid-cols-3">
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-harmoni-light-brown px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Design & Features - Sustainability You Can Trust.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-white"><?= __("Sustainability You Can Trust") ?></h3>
            <p class="text-center text-lg text-white"><?= __("From design to materials, every decision reflects our commitment to the environment") ?></p>
          </div>
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-harmoni-light-brown px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Sustainability - Communities That Thrive.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-white"><?= __("Communities That Thrive") ?></h3>
            <p class="text-center text-lg text-white"><?= __("Thoughtfully crafted spaces that bring people together and support healthier, happier lifestyles") ?></p>
          </div>
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-harmoni-light-brown px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/new element/20250326 - icons and pics/20250326 - icons and pics_Sustainability - Integrity That Builds Confidence.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-white"><?= __("Integrity That Builds Confidence") ?></h3>
            <p class="text-center text-lg text-white"><?= __("Transparent processes and ethical practices you can rely on") ?></p>
          </div>
        </div>

        <p class="mt-4 text-center text-lg text-pretty text-harmoni-dark-brown"><?= __("When you choose Harmoni, you’re choosing more than a home—you’re choosing a better future for yourself and your community.") ?></p>
      </div>
    </section>
  </main>

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Footer.php'); ?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/FAB.php'); ?>

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Scripts.php'); ?>
  <script>
    let glidePillars = new Glide(".glide-pillars", {
      type: "carousel",
      perView: 2,
      rewind: true,
      peek: 50,
      autoplay: 5000,
      hoverpause: true,
      breakpoints: {
        1024: {
          perView: 1,
          peek: 25,
        },
      },
    }).mount();
  </script>
</body>

</html>