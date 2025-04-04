<!-- @format -->

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/locale/Locale.php'); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST["lang"]) && $_POST["lang"] != "" && in_array($_POST["lang"], ["ms-MY", "en-MY"])) {
    $_SESSION["lang"] = $_POST['lang'];
    header("Location: /");
    exit();
  }
}
?>

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
      <ul role="list" class="divide-y divide-gray-100 max-w-lg mx-auto">
        <li class="flex items-center justify-between gap-x-6 py-5">
          <div class="flex gap-x-4">
            <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" id="flag-icons-my" viewBox="0 0 640 480">
              <g clip-path="url(#my-a)">
                <path fill="#C00" d="M0 0h640v480H0z" />
                <path fill="#C00" d="M0 0h640v34.3H0z" />
                <path fill="#fff" d="M0 34.3h640v34.3H0z" />
                <path fill="#C00" d="M0 68.6h640v34.3H0z" />
                <path fill="#fff" d="M0 102.9h640V137H0z" />
                <path fill="#C00" d="M0 137.1h640v34.3H0z" />
                <path fill="#fff" d="M0 171.4h640v34.3H0z" />
                <path fill="#C00" d="M0 205.7h640V240H0z" />
                <path fill="#fff" d="M0 240h640v34.3H0z" />
                <path fill="#C00" d="M0 274.3h640v34.3H0z" />
                <path fill="#fff" d="M0 308.6h640v34.3H0z" />
                <path fill="#C00" d="M0 342.9h640V377H0z" />
                <path fill="#fff" d="M0 377.1h640v34.3H0z" />
                <path fill="#C00" d="M0 411.4h640v34.3H0z" />
                <path fill="#fff" d="M0 445.7h640V480H0z" />
                <path fill="#006" d="M0 .5h320v274.3H0z" />
                <path fill="#FC0" d="m207.5 73.8 6 40.7 23-34-12.4 39.2 35.5-20.8-28.1 30 41-3.2-38.3 14.8 38.3 14.8-41-3.2 28.1 30-35.5-20.8 12.3 39.3-23-34.1-6 40.7-5.9-40.7-23 34 12.4-39.2-35.5 20.8 28-30-41 3.2 38.4-14.8-38.3-14.8 41 3.2-28.1-30 35.5 20.8-12.4-39.3 23 34.1zm-33.3 1.7a71 71 0 0 0-100 65 71 71 0 0 0 100 65 80 80 0 0 1-83.2 6.2 80 80 0 0 1-43.4-71.2 80 80 0 0 1 126.6-65" />
              </g>
              <defs>
                <clipPath id="my-a">
                  <path fill="#fff" d="M0 0h640v480H0z" />
                </clipPath>
              </defs>
            </svg>
            <div class="flex-auto">
              <p class="text-base font-semibold text-gray-900"><?= __("Malay") ?></p>
              <p class="mt-1 text-base text-gray-500">ms-MY</p>
            </div>
          </div>
          <form method="POST">
            <input type="hidden" name="lang" value="ms-MY">
            <button type="submit" class="cursor-pointer rounded-full bg-white px-2.5 py-1 text-base font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"><?= __("Choose") ?></button>
          </form>
        </li>

        <li class="flex items-center justify-between gap-x-6 py-5">
          <div class="flex gap-x-4">
            <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" id="flag-icons-gb" viewBox="0 0 640 480">
              <path fill="#012169" d="M0 0h640v480H0z" />
              <path fill="#FFF" d="m75 0 244 181L562 0h78v62L400 241l240 178v61h-80L320 301 81 480H0v-60l239-178L0 64V0z" />
              <path fill="#C8102E" d="m424 281 216 159v40L369 281zm-184 20 6 35L54 480H0zM640 0v3L391 191l2-44L590 0zM0 0l239 176h-60L0 42z" />
              <path fill="#FFF" d="M241 0v480h160V0zM0 160v160h640V160z" />
              <path fill="#C8102E" d="M0 193v96h640v-96zM273 0v480h96V0z" />
            </svg>

            <div class="flex-auto">
              <p class="text-base font-semibold text-gray-900"><?= __("English") ?></p>
              <p class="mt-1 text-base text-gray-500">en-MY</p>
            </div>
          </div>
          <form method="POST">
            <input type="hidden" name="lang" value="en-MY">
            <button type="submit" class="cursor-pointer rounded-full bg-white px-2.5 py-1 text-base font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"><?= __("Choose") ?></button>
          </form>
        </li>
      </ul>
    </section>
  </main>

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Footer.php'); ?>

  <?php include_once($_SERVER['DOCUMENT_ROOT'] . '/PHP/components/Scripts.php'); ?>
</body>

</html>