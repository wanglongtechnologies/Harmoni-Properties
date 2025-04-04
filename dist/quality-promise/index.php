<!-- @format -->

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/locale/Locale.php'); ?>

<!doctype html>
<html lang="<?= explode("-", $_SESSION["lang"])[0] ?>">

<head>
  <?php $_DOCUMENT_TITLE = "Quality Promise"; ?>
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
          <h1 class="text-2xl font-medium tracking-tight text-balance text-gray-600 sm:text-4xl"><?= __("Quality Promise") ?></h1>
          <h1 class="mt-2 font-serif text-6xl font-semibold tracking-tight text-balance text-gray-800 capitalize sm:text-7xl"><?= __("We don't just build homes—we create value for generations") ?></h1>

          <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/home/" class="bg-harmoni-green rounded-md px-3.5 py-2.5 text-base font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-offset-2"><?= __("Explore our Homes") ?></a>
          </div>
        </div>
        <div class="mt-16 flow-root sm:mt-24">
          <div class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-gray-900/10 ring-inset xl:-m-4 xl:rounded-2xl xl:p-4">
            <img id="hero-carousel" src="/assets/img/20250326 - icons and pics/quality promise banner.png" alt="App screenshot" class="aspect-video rounded-md object-cover object-bottom shadow-2xl ring-1 ring-gray-900/10 transition duration-700 ease-in-out" />
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

        <h2 class="mt-2 text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-6xl"><?= __("Our Quality Statement") ?></h2>
        <div class="mx-auto grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start">
          <div class="order-2 lg:order-1 lg:pr-4">
            <div class="flex flex-col gap-y-8 lg:max-w-lg">
              <p class="text-center text-lg text-gray-600 lg:text-left"><?= __("At Harmoni, we don’t just build homes—we create value for generations. Our commitment to <b>quality excellence</b> ensures every home is designed and built to the highest standards, reflecting the care and attention your family deserves. Through meticulous quality management, we aim to:") ?></p>
              <ul class="list-disc space-y-3 text-lg text-gray-600">
                <li><?= __("Deliver homes that are <b>functional, durable, and aesthetically pleasing</b>") ?></li>
                <li><?= __("Prioritize <b>safety and health</b> at every stage of development") ?></li>
                <li><?= __("Strengthen our market reputation by exceeding expectations in <b>quality and customer satisfaction</b>") ?></li>
                <li><?= __("Foster employee <b>pride and engagement</b>, ensuring everyone contributes to our <b>vision of excellence</b>") ?></li>
              </ul>
              <p class="text-center text-lg text-gray-600 lg:text-left"><?= __("We build homes you can <b>trust</b> - because your <b>peace of mind</b> is our <b>priority</b>.") ?></p>
            </div>
          </div>
          <img src="//harmoni.properties/wp-content/uploads/2024/11/harmoni_quality_assurance_logo.png" alt="" class="order-1 mx-auto w-1/2 rounded-xl lg:order-2" />
        </div>

        <img src="//harmoni.properties/wp-content/uploads/2024/05/reserve-line-980x53.png" alt="" class="my-4 w-full lg:my-8" />

        <h2 class="mt-2 text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-6xl"><?= __("Our Quality Vision") ?></h2>
        <div class="mx-auto grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start">
          <img src="/assets/img/element/website element_Reka bentuk image 1.png" alt="" class="w-full rounded-xl shadow-xl ring-1 ring-gray-400/10" />
          <div class="lg:pl-4">
            <div class="flex flex-col gap-y-8 lg:max-w-lg">
              <p class="text-center text-lg text-gray-600 lg:text-left"><?= __("We envision Harmoni as a benchmark for affordable luxury, where every homeowner enjoys:") ?></p>
              <p class="text-center text-lg text-gray-600 lg:text-left">
                <img src="/assets/img/20250326 - icons and pics/quality promise - Certified Standards.png" class="mx-auto size-32 lg:mx-0 lg:size-16" />
                <span class="font-serif text-2xl font-bold"><?= __("Certified Standards:") ?></span><br />
                <?= __("Products and services aligned with <b>international quality certifications") ?></b>
                <br />
                <br />
                <img src="/assets/img/20250326 - icons and pics/quality promise -  Elevated Experiences.png" class="mx-auto size-32 lg:mx-0 lg:size-16" />
                <span class="font-serif text-2xl font-bold"><?= __("Elevated Experiences:") ?></span><br />
                <?= __("Homes designed to deliver lasting satisfaction and pride") ?>
                <br />
                <br />
                <img src="/assets/img/20250326 - icons and pics/quality promise - Unwavering Commitment.png" class="mx-auto size-32 lg:mx-0 lg:size-16" />
                <span class="font-serif text-2xl font-bold"><?= __("Unwavering Commitment:") ?></span><br />
                <?= __("Consistently high standards in workmanship, safety, and customer care") ?>
              </p>
            </div>
          </div>
        </div>

        <img src="//harmoni.properties/wp-content/uploads/2024/05/reserve-line-980x53.png" alt="" class="my-4 w-full lg:my-8" />

        <h2 class="mt-2 text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-6xl"><?= __("Our Mission: Safety, Quality, and Responsibility") ?></h2>
        <div class="mx-auto grid grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start">
          <div class="order-2 lg:order-1 lg:pr-4">
            <div class="flex flex-col gap-y-8 lg:max-w-lg">
              <p class="text-center text-lg text-gray-600 lg:text-left"><?= __("We are dedicated to:") ?></p>
              <p class="text-center text-lg text-gray-600 lg:text-left">
                <img src="/assets/img/20250326 - icons and pics/quality promise - SContinuous Improvement.png" class="mx-auto size-32 lg:mx-0 lg:size-16" />
                <span class="font-serif text-2xl font-bold"><?= __("Continuous Improvement:") ?></span><br />
                <?= __("Enhancing quality, safety, and sustainability in our processes and products") ?>
                <br />
                <br />
                <img src="/assets/img/20250326 - icons and pics/quality promise -  Eco-Conscious Development.png" class="mx-auto size-32 lg:mx-0 lg:size-16" />
                <span class="font-serif text-2xl font-bold"><?= __("Eco-Conscious Development:") ?></span><br />
                <?= __("Reducing environmental impact through responsible practices") ?>
                <br />
                <br />
                <img src="/assets/img/20250326 - icons and pics/quality promise - Legal and Ethical Compliance.png" class="mx-auto size-32 lg:mx-0 lg:size-16" />
                <span class="font-serif text-2xl font-bold"><?= __("Legal and Ethical Compliance:") ?></span><br />
                <?= __("Adhering to all applicable laws and standards to protect our customers and the community") ?>
              </p>
            </div>
          </div>
          <img src="/assets/img/element/website element_Reka bentuk image 1.png" alt="" class="order-1 w-full rounded-xl shadow-xl ring-1 ring-gray-400/10 lg:order-2" />
        </div>

        <div>
          <img src="//harmoni.properties/wp-content/uploads/2024/05/reserve-line-980x53.png" alt="" class="mt-8 w-full lg:mt-16" />
          <img src="//harmoni.properties/wp-content/uploads/2024/05/reserve-element.png" alt="" class="mx-auto w-1/3 rotate-180" />
        </div>
      </div>
    </section>

    <section data-aos="fade-in" class="bg-tear py-14 lg:py-20">
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div>
          <h2 class="mt-2 text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-6xl"><?= __("Harmoni’s Quality Assurance Checklist") ?></h2>
          <p class="mt-4 text-center text-lg text-pretty text-gray-600"><?= __("We don’t just meet expectations—we exceed them. Our 25-Point Quality Assurance Checklist focuses on delivering homes that stand out in design, functionality, and durability.") ?></p>
        </div>

        <div class="glide-checklist">
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
                    <?= __("Interior Cleanliness") ?>
                  </h3>
                  <ul class="mt-3 list-disc space-y-2 text-lg font-light text-white drop-shadow-lg">
                    <li><?= __("All elements are in good condition.") ?></li>
                    <li><?= __("Elements include walls, floors, ceillings, doors & windows, bathroom etc.") ?></li>
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
                    <?= __("Exterior Standards") ?>
                  </h3>
                  <ul class="mt-3 list-disc space-y-2 text-lg font-light text-white drop-shadow-lg">
                    <li><?= __("All elements are in good condition.") ?></li>
                    <li><?= __("Elements include mail box, meter compartment, car porch, landscape etc.") ?></li>
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
                    <?= __("Structural Integrity") ?>
                  </h3>
                  <ul class="mt-3 list-disc space-y-2 text-lg font-light text-white drop-shadow-lg">
                    <li><?= __("The property is free from major damages.") ?></li>
                    <li><?= __("Eg: Major leaking, ceilling collapse etc.") ?></li>
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
                    <?= __("Exterior Functionality") ?>
                  </h3>
                  <ul class="mt-3 list-disc space-y-2 text-lg font-light text-white drop-shadow-lg">
                    <li><?= __("All exterior fittings and installations are well installed and in functional condition.") ?></li>
                    <li><?= __("Fittings house numberings, pumps, gates etc.") ?></li>
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
                    <?= __("Interior Functionality") ?>
                  </h3>
                  <ul class="mt-3 list-disc space-y-2 text-lg font-light text-white drop-shadow-lg">
                    <li><?= __("All interior fittings and installations are well installed and in functional condition.") ?></li>
                    <li><?= __("Fittings include sanitary fittings, electrical installations. windows & doors, etc.") ?></li>
                  </ul>
                </div>
              </article>

              <article class="glide__slide relative isolate flex flex-col justify-start overflow-hidden rounded-2xl bg-gray-900 p-8">
                <img src="//harmoni.properties/wp-content/uploads/2024/12/interior_excellence_bg.jpg" alt="" class="absolute inset-0 -z-10 size-full object-cover" />
                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-gray-900/10 ring-inset"></div>

                <div class="flex flex-col items-center gap-y-2">
                  <img src="//harmoni.properties/wp-content/uploads/2024/12/interior_excellence_icon.png" class="size-32 rounded-full drop-shadow-md" />
                  <h3 class="mt-3 text-center font-serif text-3xl font-semibold text-white drop-shadow-lg">
                    <span class="absolute inset-0"></span>
                    <?= __("Interior Excellence") ?>
                  </h3>
                  <ul class="mt-3 list-disc space-y-2 text-lg font-light text-white drop-shadow-lg">
                    <li><b class="font-medium"><?= __("Superior Finishing:") ?></b> <br /><?= __("Every detail, from walls to ceilings, is inspected to ensure a flawless finish.") ?></li>
                    <li>
                      <b class="font-medium"><?= __("Functional Design:") ?></b><br />
                      <?= __("Thoughtfully planned interiors for optimal space utilization.") ?><br />
                      <?= __("Electrical and plumbing systems tested for performance and safety.") ?>
                    </li>
                    <li>
                      <b class="font-medium"><?= __("Enhanced Comfort:") ?></b><br />
                      <?= __("Air-conditioning points and other pre-installed features ensure your home is move-in ready with minimal setup required.") ?>
                    </li>
                  </ul>
                </div>
              </article>

              <article class="glide__slide relative isolate flex flex-col justify-start overflow-hidden rounded-2xl bg-gray-900 p-8">
                <img src="//harmoni.properties/wp-content/uploads/2024/12/exterior_standards_bg.png" alt="" class="absolute inset-0 -z-10 size-full object-cover" />
                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-gray-900/10 ring-inset"></div>

                <div class="flex flex-col items-center gap-y-2">
                  <img src="//harmoni.properties/wp-content/uploads/2024/12/exterior_standards_icon.png" class="size-32 rounded-full drop-shadow-md" />
                  <h3 class="mt-3 text-center font-serif text-3xl font-semibold text-white drop-shadow-lg">
                    <span class="absolute inset-0"></span>
                    <?= __("Exterior Standards") ?>
                  </h3>
                  <ul class="mt-3 list-disc space-y-2 text-lg font-light text-white drop-shadow-lg">
                    <li>
                      <b class="font-medium"><?= __("Elevated Aesthetic Appeal:") ?></b><br />
                      <?= __("Landscaped surroundings and well-maintained common areas reflect the care we put into every development.") ?><br />
                      <?= __("Premium house numberings and gates that complement the overall design.") ?>
                    </li>
                    <li>
                      <b class="font-medium"><?= __("Smartly Designed Spaces:") ?></b><br />
                      <?= __("Generously sized car porches for practical convenience.") ?><br />
                      <?= __("Robust structural elements built to withstand wear and tear over time.") ?>
                    </li>
                  </ul>
                </div>
              </article>

              <article class="glide__slide relative isolate flex flex-col justify-start overflow-hidden rounded-2xl bg-gray-900 p-8">
                <img src="//harmoni.properties/wp-content/uploads/2024/12/structural_integrity_bg.png" alt="" class="absolute inset-0 -z-10 size-full object-cover" />
                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-gray-900/10 ring-inset"></div>

                <div class="flex flex-col items-center gap-y-2">
                  <img src="//harmoni.properties/wp-content/uploads/2024/12/structural_integrity_icon.png" class="size-32 rounded-full drop-shadow-md" />
                  <h3 class="mt-3 text-center font-serif text-3xl font-semibold text-white drop-shadow-lg">
                    <span class="absolute inset-0"></span>
                    <?= __("Structural Integrity") ?>
                  </h3>
                  <ul class="mt-3 list-disc space-y-2 text-lg font-light text-white drop-shadow-lg">
                    <li>
                      <b class="font-medium"><?= __("Built to Last:") ?></b><br />
                      <?= __("High-quality materials and craftsmanship ensure durability for years to come.") ?><br />
                      <?= __("Every unit undergoes rigorous inspections to eliminate potential issues before handover.") ?>
                    </li>
                    <li>
                      <b class="font-medium"><?= __("Seamless Functionality:") ?></b><br />
                      <?= __("From fittings to fixtures, all components are checked for full functionality.") ?><br />
                      <?= __("Quality locksets and secure finishes provide peace of mind.") ?>
                    </li>
                  </ul>
                </div>
              </article>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section data-aos="fade-in" class="bg-tiles z-10 py-14 lg:py-20">
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div>
          <h2 class="text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-6xl"><?= __("What Sets Us Apart?") ?></h2>
          <p class="mt-4 text-center text-lg text-pretty text-gray-600"><?= __("Rather than promising what should be a given, we focus on exceptional features that elevate your experience:") ?></p>
        </div>

        <div class="grid w-full grid-cols-1 gap-2 lg:grid-cols-2">
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-gray-300 px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/20250326 - icons and pics/quality promise - Bigger Gardens.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-gray-800"><?= __("Bigger Gardens, Better Living") ?></h3>
            <p class="text-center text-lg text-gray-800"><?= __("The largest private gardens in the area, giving you unparalleled space to create your own retreat") ?></p>
          </div>
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-gray-300 px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/20250326 - icons and pics/quality promise -  Double-Volume Ceilings.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-gray-800"><?= __("Double-Volume Ceilings") ?></h3>
            <p class="text-center text-lg text-gray-800"><?= __("A luxurious feature that transforms your home into a statement of elegance and grandeur") ?></p>
          </div>
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-gray-300 px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/20250326 - icons and pics/quality promise - Community-Centric Design.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-gray-800"><?= __("Community-Centric Design") ?></h3>
            <p class="text-center text-lg text-gray-800"><?= __("From recreational parks to multi-purpose courts, we create spaces that bring neighbors together and families closer") ?></p>
          </div>
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-gray-300 px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/New/20250326 - icons and pics_quality promise - Sustainable Practices.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-gray-800"><?= __("Sustainable Practices") ?></h3>
            <p class="text-center text-lg text-gray-800"><?= __("Homes designed with energy efficiency and environmental responsibility in mind") ?></p>
          </div>
        </div>
      </div>
    </section>

    <section data-aos="fade-in" class="bg-tear z-10 py-14 lg:py-20">
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div>
          <h2 class="text-center font-serif text-5xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-6xl"><?= __("Our Promise to You") ?></h2>
          <p class="mt-4 text-center text-lg text-pretty text-gray-600"><?= __("We don’t just deliver homes—we deliver a lifestyle of quality and trust. By focusing on what truly matters to homeowners, we ensure that every Harmoni home is:") ?></p>
        </div>

        <div class="grid w-full grid-cols-1 gap-2 lg:grid-cols-3">
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-gray-300 px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/20250326 - icons and pics/quality promise - Practical and Beautiful.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-gray-800"><?= __("Practical and Beautiful") ?></h3>
            <p class="text-center text-lg text-gray-800"><?= __("A space where function meets form") ?></p>
          </div>
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-gray-300 px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/20250326 - icons and pics/quality promise -  Built to Last.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-gray-800"><?= __("Built to Last") ?></h3>
            <p class="text-center text-lg text-gray-800"><?= __("Durable homes designed to grow with your family") ?></p>
          </div>
          <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-gray-300 px-4 py-14 shadow-md lg:py-10">
            <img src="/assets/img/20250326 - icons and pics/quality promise - A Worthy Investment.png" class="size-32" />
            <h3 class="text-center font-serif text-3xl font-semibold text-gray-800"><?= __("A Worthy Investment") ?></h3>
            <p class="text-center text-lg text-gray-800"><?= __("A property that retains its value and enhances your life") ?></p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Footer.php'); ?>

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Scripts.php'); ?>
  <script>
    let glideChecklist = new Glide(".glide-checklist", {
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