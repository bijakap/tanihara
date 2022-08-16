<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measure - Add New Data</title>

        <!-- Load Tailwind -->
        @vite('resources/css/app.css')
</head>
<body>
    <!-- Measure Tab Start -->

  <div class="py-[60px] px-[70px]">
    <ul class="flex flex-col md:flex-row list-none border-b-0 pl-0 mb-4" id="tabs-tabFill" role="tablist">
      <li class="flex-auto" role="presentation">
        <a href="#tabs-add" class="w-full text-xl leading-tight inline-flex justify-center
        border-x-0 border-t-0 border-b-[1px] border-bordertrans px-6 py-3 my-2 hover:bg-hijautrans hover:bg-opacity-20
        focus:border-borderactive focus:border-b-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-[15px]" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
          </svg>Add New Data
        </a>
      </li>

      <li class="nav-item flex-auto text-center" role="presentation">
        <a href="#tabs-data" class="w-full text-xl leading-tight inline-flex justify-center
        border-x-0 border-t-0 border-b-[1px] border-bordertrans px-6 py-3 my-2 hover:bg-hijautrans hover:bg-opacity-20
        focus:border-borderactive focus:border-b-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-[15px]" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
          </svg>My Data</a>
      </li>
    </ul>
  </div>

  <!-- Add New Data Tab Start -->

  <div class="flex flex-col justify-center items-center">
    <div>
      <p>
        Select your tools:
      </p>
      <div class="inline-block relative w-full max-w-sm mb-[30px]">
        <div class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-hijau">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
        </div>

        <select
          class="block appearance-none w-full px-32 py-0.5 bg-white text-hijau font-semibold text-[17px] rounded-xl border-solid
          border-2 border-hijau leading-tight focus:outline-none focus:shadow-outline">
          <option>NPK P201</option>
          <option>NPK P202</option>
          <option>NPK P203</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-hijau">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
            <path
              d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
          </svg>
        </div>
      </div>
    </div>

    <div>
      <form class="w-full max-w-sm mb-[30px]">
        LoRa.id device EUI
        <input
          class="px-16 py-0.5 bg-white text-slate-700 font-semibold text-[17px] rounded-xl border-solid
          border-2 border-hijau block appearance-none w-full inputmeasure leading-tight focus:outline-none focus:shadow-outline"
          type="text">
    </div>

    <div>
      <form class="w-full max-w-sm mb-[30px]">
        LoRa.id device ID
        <input
          class="px-16 py-0.5 bg-white text-slate-700 font-semibold text-[17px] rounded-xl border-solid
          border-2 border-hijau block appearance-none w-full leading-tight focus:outline-none focus:shadow-outline"
          type="text">
    </div>

    <div>
      <button
        class="mt-[30px] shadow bg-hijau hover:bg-green-800 focus:shadow-outline focus:outline-none text-white py-2 px-4 rounded-xl"
        type="button">
        Submit
      </button>
    </div>
    </form>
  </div>
  </div>
  <!-- Add Data Tab End -->
</body>
</html>