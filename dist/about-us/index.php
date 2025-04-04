<!-- @format -->

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/locale/Locale.php'); ?>

<!doctype html>
<html lang="<?= explode("-", $_SESSION["lang"])[0] ?>">

<head>
  <?php $_DOCUMENT_TITLE = "About Us"; ?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Head.php'); ?>
</head>

<body>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Navbar.php'); ?>

  <main class="bg-tiles mx-auto mt-32 flex flex-col gap-y-10">
    <section data-aos="fade-in" class="relative isolate px-6 py-14 lg:py-20">
      <div class="absolute -top-80 left-0 -z-10 transform-gpu opacity-10 md:top-20 xl:top-3" aria-hidden="true">
        <img src="/assets/img/floral.png" />
      </div>
      <div class="absolute right-0 -bottom-80 -z-10 transform-gpu opacity-10 md:bottom-20 xl:bottom-3" aria-hidden="true">
        <img src="/assets/img/floral.png" class="rotate-180" />
      </div>

      <div class="mx-auto max-w-2xl md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div class="mx-auto max-w-5xl text-center">
          <h1 class="text-2xl font-medium tracking-tight text-balance text-gray-600 sm:text-4xl"><?= __("About Us") ?></h1>
          <h1 class="mt-2 font-serif text-6xl font-semibold tracking-tight text-balance text-gray-800 capitalize sm:text-7xl"><?= __("Shaping Spaces, Inspiring Lives") ?></h1>

          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/home/" class="bg-harmoni-green rounded-md px-3.5 py-2.5 text-base font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-offset-2"><?= __("Explore our Homes") ?></a>
          </div>
        </div>
        <div class="mt-16 flow-root sm:mt-24">
          <div class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-gray-900/10 ring-inset xl:-m-4 xl:rounded-2xl xl:p-4">
            <img id="hero-carousel" src="/assets/img/element/website element_Tentang Kami banner.png" alt="App screenshot" class="aspect-video rounded-md object-cover shadow-2xl ring-1 ring-gray-900/10 transition duration-700 ease-in-out" />
          </div>
        </div>
      </div>
    </section>

    <section data-aos="fade-in" class="bg-tiles py-14 lg:py-20">
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div>
          <img src="//harmoni.properties/wp-content/uploads/2024/05/reserve-element.png" alt="" class="mx-auto w-1/3" />
          <img src="//harmoni.properties/wp-content/uploads/2024/05/reserve-line-980x53.png" alt="" class="mb-8 w-full lg:mb-16" />
        </div>

        <h2 class="text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-6xl"><?= __("Our Story") ?></h2>
        <div class="mx-auto grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20">
          <div>
            <p class="text-center text-lg text-gray-600 lg:text-left">
              <?= __("Everything we do is about <span class=\"font-semibold\">you</span>. From designers who dream up exciting new concepts, to industrious brick layers who build, to shelter and protect your loved ones.") ?>
              <br /><br />
              <?= __("Every day, we go to work hoping to do two things: <span class=\"font-semibold\">share great spaces with our friends</span> and <span class=\"font-semibold\">help make the world a little better</span>.") ?>
              <br /><br />
              <?= __("Harmoni is a real estate development company focused on putting a smile people’s faces. We create desirable, functional and thoughtful spaces. We acquire, develop, sell and invest in properties.") ?>
              <br /><br />
              <?= __("Incorporated on the 23 October 2020, the company is jointly lead by <span class=\"font-semibold\">Mr Mohd Taqiyuddin bin Ishak</span> and <span class=\"font-semibold\">Mr Mohamad Tirmizi bin Ishak</span>.") ?>
              <br /><br />
              <?= __("Our business philosophy is deeply rooted in the firm belief that, <span class=\"font-semibold\">\"To live is to serve and to serve is to live\"</span>. We strive to meet and exceed expectations, believing that the <span class=\"font-semibold\">customers’ satisfaction is the best marketing for us</span>.") ?>
              <br /><br />
              <?= __("We listen, and then listen some more; having the humility to recognize that customer preferences are constantly evolving. We are on a constant, never-ending journey of bringing thoughtful innovation into the lives of people.") ?>
              <br /><br />
              <?= __("We are proud to be partnered with some of the industry’s most seasoned consultants and contractors in the niche that they operate in.") ?>
            </p>
          </div>
        </div>

        <img src="//harmoni.properties/wp-content/uploads/2024/05/reserve-line-980x53.png" alt="" class="my-4 w-full lg:my-8" />

        <h2 class="text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-6xl"><?= __("Our Core Values") ?></h2>
        <div class="mx-auto grid grid-cols-1 gap-x-8 gap-y-16">
          <div class="flex flex-col">
            <img src="/assets/img/20250326 - icons and pics/About us - Service Excellence.png" class="mx-auto size-32 lg:mx-0" />
            <p class="text-center font-serif text-4xl font-semibold text-gray-600 lg:text-left"><?= __("Service Excellence") ?></p>
            <p class="mt-2 text-center text-lg text-gray-600 lg:text-left"><?= __("Our commitment to service excellence is unwavering. We pride ourselves on providing superior quality services and products. This excellence is not just in what we deliver but how we deliver it – with professionalism, expertise, and a keen eye for detail.") ?></p>
          </div>

          <div class="flex flex-col">
            <img src="/assets/img/20250326 - icons and pics/About us - Reliability.png" class="mx-auto size-32 lg:mx-0" />
            <p class="text-center font-serif text-4xl font-semibold text-gray-600 lg:text-left"><?= __("Reliability") ?></p>
            <p class="mt-2 text-center text-lg text-gray-600 lg:text-left"><?= __("Reliability is the cornerstone of our customer promise. We’ve built a reputation for being consistently dependable and trustworthy. Our clients know that they can count on us for stability and consistency, which is crucial in today’s ever-changing business landscape.") ?></p>
          </div>

          <div class="flex flex-col">
            <img src="/assets/img/20250326 - icons and pics/About us - Innovative Solutions.png" class="mx-auto size-32 lg:mx-0" />
            <p class="text-center font-serif text-4xl font-semibold text-gray-600 lg:text-left"><?= __("Innovative Solutions") ?></p>
            <p class="mt-2 text-center text-lg text-gray-600 lg:text-left"><?= __("We don’t just solve problems; we innovate. Our team is dedicated to finding creative and effective solutions to the most challenging customer problems. Our approach to innovation ensures that we provide cutting–edge solutions that add real value to our clients.") ?></p>
          </div>

          <div class="flex flex-col">
            <img src="/assets/img/20250326 - icons and pics/About us - Transparency.png" class="mx-auto size-32 lg:mx-0" />
            <p class="text-center font-serif text-4xl font-semibold text-gray-600 lg:text-left"><?= __("Transparency") ?></p>
            <p class="mt-2 text-center text-lg text-gray-600 lg:text-left"><?= __("We maintain clear, honest communication with all our stakeholders. This transparency builds trust and ensures that everyone we deal with, from clients to partners like you, is always informed and engaged in our mutual journey to success.") ?></p>
          </div>

          <div class="flex flex-col">
            <img src="/assets/img/20250326 - icons and pics/About us - Responsiveness.png" class="mx-auto size-32 lg:mx-0" />
            <p class="text-center font-serif text-4xl font-semibold text-gray-600 lg:text-left"><?= __("Responsiveness") ?></p>
            <p class="mt-2 text-center text-lg text-gray-600 lg:text-left"><?= __("Our rapid and effective response to customer needs and feedback sets us apart. We understand the importance of being agile and attentive in our interactions, ensuring that our clients’ needs are promptly met with efficiency and care.") ?></p>
          </div>
        </div>

        <div>
          <img src="//harmoni.properties/wp-content/uploads/2024/05/reserve-line-980x53.png" alt="" class="mt-8 w-full lg:mt-16" />
          <img src="//harmoni.properties/wp-content/uploads/2024/05/reserve-element.png" alt="" class="mx-auto w-1/3 rotate-180" />
        </div>
      </div>
    </section>
  </main>

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Footer.php'); ?>

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Scripts.php'); ?>
</body>

</html>