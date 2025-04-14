<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/locale/Locale.php'); ?>
<?php
$alertMessage = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $full_name = isset($_POST["full-name"]) && !empty($_POST["full-name"]) ? $_POST["full-name"] : null;
  $email_address = isset($_POST["email-address"]) && !empty($_POST["email-address"]) ? $_POST["email-address"] : null;
  $phone_number = isset($_POST["phone-number"]) && !empty($_POST["phone-number"]) ? $_POST["phone-number"] : null;

  if ($full_name && $email_address && $phone_number) {
    $url = 'https://proxy.wwwavy.com/harmoni-properties/contact/submit.php';
    $data = ['full-name' => $full_name, 'email-address' => $email_address, 'phone-number' => $phone_number];
    $fields_string = http_build_query($data);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $output = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($httpcode !== 200) {
      $alertMessage = "Something went wrong. Please try again later.";
    } else {
      $alertMessage = "Your request has been submitted successfully!";
    }
  } else {
    $alertMessage = "Please fill in all the fields.";
  }
}
?>

<!doctype html>
<html lang="<?= explode("-", $_SESSION["lang"])[0] ?>">

<head>
  <?php $_DOCUMENT_TITLE = "Home"; ?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Head.php'); ?>
</head>

<body>
  <?php if ($alertMessage) { ?>
    <script>
      alert('<?= $alertMessage ?>');
      window.location.href = "/";
    </script>
  <?php } ?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Navbar.php'); ?>

  <main class="bg-tiles mx-auto mt-32 flex flex-col gap-y-10">
    <!-- <section data-aos="fade-in" class="relative isolate px-6 py-14 lg:py-20">
      <div class="absolute -top-80 left-0 -z-10 opacity-10 md:top-20 xl:top-3" aria-hidden="true">
        <img src="/assets/img/floral.png" />
      </div>
      <div class="absolute right-0 -bottom-80 -z-10 opacity-10 md:bottom-20 xl:bottom-3" aria-hidden="true">
        <img src="/assets/img/floral.png" class="rotate-180" />
      </div>

      <div class="mx-auto max-w-2xl md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div class="mx-auto max-w-5xl text-center">
          <h1 class="text-xl font-medium tracking-tight text-balance text-harmoni-dark-brown sm:text-3xl"><?= __("Welcome to Harmoni") ?></h1>
          <h1 class="mt-2 font-serif text-5xl font-semibold tracking-tight text-balance text-harmoni-dark-brown capitalize sm:text-6xl"><?= __("The Art of Elegant Living") ?></h1>

          <p class="mt-8 text-lg font-medium text-pretty text-harmoni-dark-brown sm:text-xl/8"><?= __("Step into a world where luxury meets affordability, nestled in the heart of a vibrant community.") ?></p>
          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="#our-homes" class="bg-harmoni-green rounded-md px-3.5 py-2.5 text-base font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-offset-2"><?= __("Explore our Homes") ?></a>
          </div>
        </div>
        <div class="mt-16 flow-root sm:mt-24">
          <div class="-m-2 rounded-xl bg-harmoni-light-brown p-2 ring-1 ring-gray-900/10 ring-inset xl:-m-4 xl:rounded-2xl xl:p-4">
            <img id="hero-carousel" src="/assets/img/perspectives/exterior.jpg" alt="App screenshot" class="bg-white aspect-video rounded-md object-cover shadow-2xl ring-1 ring-gray-900/10 transition duration-700 ease-in-out" />
          </div>
        </div>
      </div>
    </section> -->

    <section class="relative isolate overflow-hidden pt-14 -mt-32 -mb-10">
      <img src="/assets/img/perspectives/exterior.jpg" alt="" class="absolute inset-0 -z-10 size-full object-cover brightness-75">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
          <div class="mx-auto max-w-5xl text-center">
            <h1 class="text-xl font-medium tracking-tight text-balance text-white sm:text-3xl"><?= __("Welcome to Harmoni") ?></h1>
            <h1 class="mt-2 font-serif text-5xl font-semibold tracking-tight text-balance text-white capitalize sm:text-6xl"><?= __("The Art of Elegant Living") ?></h1>

            <p class="mt-8 text-lg font-medium text-pretty text-white sm:text-xl/8"><?= __("Step into a world where luxury meets affordability, nestled in the heart of a vibrant community.") ?></p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
              <!-- <a href="#our-homes" class="bg-harmoni-green rounded-md px-3.5 py-2.5 text-base font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-offset-2"><?= __("Explore our Homes") ?></a> -->
              <a href="#our-homes">
                <img src="/assets/img/new element/redesign web-04.png" class="w-full h-auto max-w-84" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
    </section>

    <section data-aos="fade-in" class="bg-tear z-10 py-14 lg:py-20">
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <h2 class="mt-2 text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-6xl"><?= __("We Understand The Challenges Of Finding The Perfect Home") ?></h2>
        <div class="mx-auto grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start">
          <div class="order-2 lg:order-1 lg:pr-4">
            <div class="lg:max-w-lg">
              <p class="text-center text-lg text-harmoni-dark-brown lg:text-left">
                <?= __("With over 100 years of combined experience, our team has helped thousands of families find their dream homes, blending time-honored craftsmanship with modern innovation. We take pride in creating spaces that not only meet your needs today but adapt to your lifestyle for years to come.") ?>
                <br /><br />
                <?= __("Every project is a testament to our dedication to quality, from thoughtful design to sustainable practices, ensuring that your home is both elegant and future-ready. We're here to guide you through every step of the journey, delivering more than just a house—offering a place you'll truly call home.") ?>
              </p>
              <div class="mt-8 text-center lg:text-left">
                <!-- <a href="#our-homes" class="bg-harmoni-green inline-flex rounded-md px-3.5 py-2.5 text-base font-semibold text-white shadow-sm focus-visible:outline-offset-2"><?= __("Explore our Homes") ?></a> -->
                <a href="#our-homes">
                  <img src="/assets/img/new element/redesign web-04.png" class="w-full h-auto max-w-84" />
                </a>
              </div>
            </div>
          </div>
          <img src="/assets/img/Website Picture/Homepage (Kami Memahami Cabaran Mencari Kediaman Idaman Anda).png" alt="" class="order-1 w-full rounded-xl shadow-xl ring-1 ring-gray-400/10 lg:order-2" />
        </div>
      </div>
    </section>

    <section id="our-homes" data-aos="fade-in" class="py-14 lg:py-20">
      <div class="relative hidden 2xl:block">
        <img src="/assets/img/new element/redesign web-05.png" class="max-w-128 absolute left-0 -translate-x-3/5 top-0 translate-y-[100%]" />
        <img src="/assets/img/new element/redesign web-08.png" class="max-w-128 absolute right-0 translate-x-3/5 top-0 translate-y-[200%]" />

        <img src="/assets/img/new element/redesign web-07.png" class="max-w-128 absolute left-0 -translate-x-3/5 top-0 translate-y-[300%]" />
        <img src="/assets/img/new element/redesign web-06.png" class="max-w-128 absolute right-0 translate-x-3/5 top-0 translate-y-[600%]" />
      </div>
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div>
          <h2 class="text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-6xl"><?= __("Introducing Harmoni Indah 1") ?></h2>
          <p class="mt-4 text-center text-lg text-pretty text-harmoni-dark-brown"><?= __("Our double-story terrace houses offer the perfect blend of quality, beauty, and tranquility, ensuring a peaceful living experience.") ?></p>
        </div>

        <div class="mx-auto w-full rounded-3xl bg-harmoni-light-brown shadow-md ring-1 ring-gray-200 lg:mx-0 lg:flex lg:max-w-none">
          <div class="p-8 sm:p-10 lg:flex-auto">
            <ul role="list" class="grid grid-cols-1 gap-4 text-lg text-white sm:grid-cols-2 sm:gap-6">
              <li class="flex gap-x-3">
                <svg class="text-white h-6 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                </svg>
                <?= __("Freehold") ?>
              </li>
              <li class="flex gap-x-3">
                <svg class="text-white h-6 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                </svg>
                <?= __("Total 84 residential units") ?>
              </li>
              <li class="flex gap-x-3">
                <svg class="text-white h-6 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                </svg>
                <?= __("1xxx sqft in size") ?>
              </li>
              <li class="flex gap-x-3">
                <svg class="text-white h-6 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                </svg>
                <?= __("2 layouts available") ?>
              </li>
              <li class="flex gap-x-3">
                <svg class="text-white h-6 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                </svg>
                <?= __("3 bedrooms") ?>
              </li>
              <li class="flex gap-x-3">
                <svg class="text-white h-6 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                </svg>
                <?= __("2 bathrooms") ?>
              </li>
            </ul>
          </div>
          <div class="p-2 lg:w-full lg:max-w-md lg:shrink-0">
            <!-- <div class="h-full rounded-2xl bg-gray-50 py-5 text-center ring-1 ring-gray-900/5 ring-inset lg:flex lg:flex-col lg:justify-center">
              <div class="mx-auto px-8">
                <p class="flex items-baseline justify-center gap-x-2">
                  <span class="w-full font-serif text-5xl font-semibold tracking-tight text-harmoni-dark-brown"><?= __("RM 384,XXX") ?></span>
                  <span class="hidden font-serif text-sm/6 font-semibold tracking-wide text-harmoni-dark-brown lg:block"><?= __("only") ?></span>
                </p>
              </div>
            </div> -->
            <img src="/assets/img/new element/redesign web-10.png" class="w-full h-auto" />
          </div>
        </div>

        <img src="/assets/img/element/website element_Reka bentuk banner.png" alt="" class="w-full rounded-xl shadow-xl ring-1 ring-gray-400/10" />

        <div class="grid w-full grid-cols-2 gap-2 md:grid-cols-4">
          <div class="flex flex-col items-center bg-harmoni-light-brown px-4 py-6 shadow-md">
            <img src="/assets/img/new element/homepage/website element_reka icon.png" class="size-16 lg:size-32" />
            <h3 class="text-center font-serif text-2xl font-semibold text-white"><?= __("Timeless Design") ?></h3>
          </div>
          <div class="flex flex-col items-center bg-harmoni-light-brown px-4 py-6 shadow-md">
            <img src="/assets/img/new element/homepage/website element_kuality icon.png" class="size-16 lg:size-32" />
            <h3 class="text-center font-serif text-2xl font-semibold text-white"><?= __("Superior Quality") ?></h3>
          </div>
          <div class="flex flex-col items-center bg-harmoni-light-brown px-4 py-6 shadow-md">
            <img src="/assets/img/new element/homepage/website element_keindahan icon.png" class="size-16 lg:size-32" />
            <h3 class="text-center font-serif text-2xl font-semibold text-white"><?= __("Natural Beauty") ?></h3>
          </div>
          <div class="flex flex-col items-center bg-harmoni-light-brown px-4 py-6 shadow-md">
            <img src="/assets/img/new element/homepage/website element_lokasi icon.png" class="size-16 lg:size-32" />
            <h3 class="text-center font-serif text-2xl font-semibold text-white"><?= __("Strategic Location") ?></h3>
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
        <h2 class="mt-2 text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-6xl"><?= __("3 Simple Steps To Find Your Ideal Home") ?></h2>
        <div class="mx-auto grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:grid-cols-2 lg:items-center">
          <img src="//harmoni.properties/wp-content/uploads/2024/08/Asset-1@4x-980x705.png" alt="" class="w-full" />
          <div class="lg:pl-4">
            <div class="flex flex-col gap-y-10 text-harmoni-dark-brown">
              <div class="grid grid-cols-12 gap-x-2 lg:gap-x-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="col-span-2 ml-auto size-12 lg:size-14">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>

                <div class="col-span-10 flex flex-col justify-center">
                  <h3 class="text-xl font-semibold text-harmoni-dark-brown"><?= __("Explore our Homes") ?></h3>
                  <h3 class="text-lg text-harmoni-dark-brown"><?= __("Browse through our selection of Beautifully designed homes") ?></h3>
                </div>
              </div>

              <div class="grid grid-cols-12 gap-x-2 lg:gap-x-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="col-span-2 ml-auto size-12 lg:size-14">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                </svg>

                <div class="col-span-10 flex flex-col justify-center">
                  <h3 class="text-xl font-semibold text-harmoni-dark-brown"><?= __("Schedule a visit") ?></h3>
                  <h3 class="text-lg text-harmoni-dark-brown"><?= __("Experience the elegance and tranquility firsthand") ?></h3>
                </div>
              </div>

              <div class="grid grid-cols-12 gap-x-2 lg:gap-x-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="col-span-2 ml-auto size-12 lg:size-14">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>

                <div class="col-span-10 flex flex-col justify-center">
                  <h3 class="text-xl font-semibold text-harmoni-dark-brown"><?= __("Start your journey with us today") ?></h3>
                  <h3 class="text-lg text-harmoni-dark-brown"><?= __("Explore our homes and browse through our selection of Beautifully designed homes") ?></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section data-aos="fade-in" class="py-14 lg:py-20">
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <h2 class="mt-2 text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-6xl"><?= __("What Our Customers Say") ?></h2>

        <div class="glide-testimonial mt-10">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <li class="glide__slide py-2">
                <div class="flex h-full flex-col items-center justify-start gap-y-4 bg-gray-50 px-4 py-6 shadow-md">
                  <img src="//harmoni.properties/wp-content/uploads/2024/05/Harmoni_Website-Profile-Picture-42.png" alt="" class="size-24 rounded-full" />
                  <div class="text-center">
                    <h3 class="text-lg font-semibold text-harmoni-dark-brown"><?= __("Amirah") ?></h3>
                    <p class="text-harmoni-dark-brown"><?= __("Sebagai pembeli rumah kali pertama, saya mencari kemewahan dan ketenangan - Harmoni melebihi jangkaan saya.") ?></p>
                  </div>
                </div>
              </li>
              <!-- <li class="glide__slide py-2">
                <div class="flex h-full flex-col items-center justify-start gap-y-4 bg-gray-50 px-4 py-6 shadow-md">
                  <img src="//harmoni.properties/wp-content/uploads/elementor/thumbs/Harmoni_Website-Profile-Picture-44-1-qqiifgb4c1da5an0yoadpq8j893ukh6fks5oqgh8t2.png" alt="" class="size-24 rounded-full" />
                  <div class="text-center">
                    <h3 class="text-lg font-semibold text-harmoni-dark-brown"><?= __("Keluarga Chen") ?></h3>
                    <p class="text-harmoni-dark-brown"><?= __("Harmoni telah menjadi lebih daripada sekadar rumah; ia adalah gaya hidup. Kualiti dan komuniti di sini melebihi segala jangkaan kami.") ?></p>
                  </div>
                </div>
              </li> -->
              <li class="glide__slide py-2">
                <div class="flex h-full flex-col items-center justify-start gap-y-4 bg-gray-50 px-4 py-6 shadow-md">
                  <img src="//harmoni.properties/wp-content/uploads/2024/07/Harmoni_Website-Profile-Picture-43.png" alt="" class="size-24 rounded-full" />
                  <div class="text-center">
                    <h3 class="text-lg font-semibold text-harmoni-dark-brown"><?= __("Farah") ?></h3>
                    <p class="text-harmoni-dark-brown"><?= __("Saya bekerja di kawasan perindustrian berhampiran dan saya sangat gembira kerana jarak perjalanan saya kurang daripada 10 minit ke tempat kerja.") ?></p>
                  </div>
                </div>
              </li>
              <li class="glide__slide py-2">
                <div class="flex h-full flex-col items-center justify-start gap-y-4 bg-gray-50 px-4 py-6 shadow-md">
                  <img src="//harmoni.properties/wp-content/uploads/2024/07/Harmoni_Website-Profile-Picture-41.png" alt="" class="size-24 rounded-full" />
                  <div class="text-center">
                    <h3 class="text-lg font-semibold text-harmoni-dark-brown"><?= __("Keluarga Yusof") ?></h3>
                    <p class="text-harmoni-dark-brown"><?= __("Saya berasa reka bentuk siling berkembar sangat unik dan ia membuatkan rumah kelihatan lebih luas.") ?></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section data-aos="fade-in" class="bg-[url('/assets/img/new%20element/redesign%20web-11.png')] bg-cover bg-no-repeat z-10 py-14 lg:py-20">
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <h2 class="mt-2 text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-6xl"><?= __("Our Location") ?></h2>
        <div class="mx-auto grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start">
          <img src="//harmoni.properties/wp-content/uploads/2024/08/Untitled-1-01.png" alt="" class="w-full rounded-xl bg-white shadow-xl ring-1 ring-gray-400/10" />
          <div id="contact-form" class="lg:pl-4">
            <div class="flex flex-col items-center">
              <img src="//harmoni.properties/wp-content/uploads/2024/05/reserve-element.png" alt="" class="w-1/3" />
              <img src="//harmoni.properties/wp-content/uploads/2024/05/reserve-line-980x53.png" alt="" class="w-full" />

              <form method="POST" class="flex w-full flex-col gap-y-6">
                <div class="w-full">
                  <h2 class="mt-2 text-center font-serif text-3xl font-semibold tracking-tight text-pretty text-harmoni-dark-brown sm:text-4xl"><?= __("Reserve Your Viewing") ?></h2>
                  <p class="mt-2 text-center text-base font-normal tracking-tight text-pretty text-harmoni-dark-brown sm:text-lg"><?= __("Discover the Harmony of Harmoni") ?></p>
                </div>
                <div class="mx-auto w-full px-6 py-6">
                  <div class="flex flex-col gap-y-6">
                    <input placeholder="<?= __("Full name") ?>" required type="text" name="full-name" id="full-name" autocomplete="name" class="block w-full rounded-lg bg-white px-3.5 py-2 text-lg text-harmoni-dark-brown outline-1 -outline-offset-1 outline-gray-300 placeholder:text-harmoni-dark-brown" />
                    <input placeholder="<?= __("Email address") ?>" required type="email" name="email-address" id="email-address" autocomplete="email" class="block w-full rounded-lg bg-white px-3.5 py-2 text-lg text-harmoni-dark-brown outline-1 -outline-offset-1 outline-gray-300 placeholder:text-harmoni-dark-brown" />
                    <input placeholder="<?= __("Phone number") ?>" required type="tel" name="phone-number" id="phone-number" autocomplete="tel" class="block w-full rounded-lg bg-white px-3.5 py-2 text-lg text-harmoni-dark-brown outline-1 -outline-offset-1 outline-gray-300 placeholder:text-harmoni-dark-brown" />
                  </div>
                  <div class="mt-8 flex justify-center">
                    <button type="submit" class="cursor-pointer bg-harmoni-green inline-flex rounded-md px-3.5 py-2.5 text-base font-semibold text-white shadow-sm focus-visible:outline-offset-2"><?= __("Submit") ?></button>
                  </div>
                </div>
              </form>

              <img src="//harmoni.properties/wp-content/uploads/2024/05/reserve-line-980x53.png" alt="" class="w-full" />
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Footer.php'); ?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/FAB.php'); ?>

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Scripts.php'); ?>
  <script>
    let glideTestimonial = new Glide(".glide-testimonial", {
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