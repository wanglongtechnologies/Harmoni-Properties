<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/locale/Locale.php'); ?>

<!doctype html>
<html lang="<?= explode("-", $_SESSION["lang"])[0] ?>">

<head>
  <?php $_DOCUMENT_TITLE = "FAQ"; ?>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Head.php'); ?>
</head>

<body>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Navbar.php'); ?>

  <main class="bg-tiles mx-auto mt-32 flex flex-col gap-y-10">
    <section data-aos="fade-in" class="relative isolate px-6 py-14 lg:py-20">
      <div class="mx-auto max-w-2xl md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div class="mx-auto max-w-5xl text-center">
          <h1 class="text-xl font-medium tracking-tight text-balance text-harmoni-dark-brown sm:text-3xl"><?= __("Frequently Asked__") ?></h1>
          <h1 class="mt-2 font-serif text-5xl font-semibold tracking-tight text-balance text-harmoni-dark-brown capitalize sm:text-6xl"><?= __("__Questions") ?></h1>
        </div>
      </div>
    </section>

    <section data-aos="fade-in" class="bg-tiles py-14 lg:py-20">
      <div class="relative hidden 2xl:block">
        <img src="/assets/img/new element/redesign web-05.png" class="max-w-128 absolute left-0 -translate-x-3/5 top-0 translate-y-[100%]" />
        <img src="/assets/img/new element/redesign web-08.png" class="max-w-128 absolute right-0 translate-x-3/5 top-0 translate-y-[400%]" />

        <img src="/assets/img/new element/redesign web-07.png" class="max-w-128 absolute left-0 -translate-x-3/5 top-0 translate-y-[500%]" />
        <img src="/assets/img/new element/redesign web-06.png" class="max-w-128 absolute right-0 translate-x-3/5 top-0 translate-y-[1100%]" />

        <img src="/assets/img/new element/redesign web-05.png" class="max-w-128 absolute left-0 -translate-x-3/5 top-0 translate-y-[1900%]" />
      </div>
      <div class="mx-auto flex w-full max-w-2xl flex-col gap-y-14 px-6 py-10 md:max-w-3xl lg:max-w-4xl xl:max-w-5xl 2xl:max-w-6xl">
        <div>
          <img src="//harmoni.properties/wp-content/uploads/2024/05/reserve-element.png" alt="" class="mx-auto w-1/3" />
          <img src="//harmoni.properties/wp-content/uploads/2024/05/reserve-line-980x53.png" alt="" class="mb-8 w-full lg:mb-16" />
        </div>


        <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/data/faqs.php'); ?>

        <?php foreach ($_FAQS as $index => $_FAQS_ENTRY) { ?>
          <?php $_FAQ_LANG_INDEX = $_SESSION["lang"] === "ms-MY" ? 1 : 0; ?>
          <h2 class="text-center font-serif text-4xl font-semibold tracking-tight text-harmoni-dark-brown sm:text-5xl"><?= $_FAQS_ENTRY["category"][$_FAQ_LANG_INDEX] ?></h2>
          <dl class="mt-4 divide-y divide-gray-900/10">
            <?php foreach ($_FAQS_ENTRY["questions"] as $_FAQ_QUESTION) { ?>
              <div x-data="{ isAnswerShown: false }" class="py-6 first:pt-0 last:pb-0">
                <dt>
                  <button @click="isAnswerShown = !isAnswerShown" type="button" class="flex w-full cursor-pointer items-start justify-between text-left text-harmoni-dark-brown" aria-expanded="false">
                    <span class="text-lg font-semibold"><?= $_FAQ_QUESTION["question"][$_FAQ_LANG_INDEX] ?></span>
                    <span class="ml-6 flex h-7 items-center">
                      <svg x-cloak x-show="!isAnswerShown" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                      </svg>
                      <svg x-cloak x-show="isAnswerShown" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                      </svg>
                    </span>
                  </button>
                </dt>
                <dd x-cloak x-show="isAnswerShown" class="mt-2 pr-12">
                  <p class="text-lg text-harmoni-dark-brown"><?= $_FAQ_QUESTION["answer"][$_FAQ_LANG_INDEX] ?></p>
                </dd>
              </div>
            <?php } ?>
          </dl>

          <?php if ($index !== array_key_last($_FAQS)) { ?>
            <img src="//harmoni.properties/wp-content/uploads/2024/05/reserve-line-980x53.png" alt="" class="my-4 w-full lg:my-8" />
          <?php } ?>

        <?php } ?>

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