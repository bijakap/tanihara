<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

        <!-- Load Tailwind -->
        @vite('resources/css/app.css')
</head>
<body>
    <!-- Header Start -->
  <nav class="flex items-center justify-between flex-wrap bg-[#06AA51] px-6 py-3">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
      <span class="font-bold text-xl tracking-tight">Logo</span>
    </div>
    
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
      <div class="text-center text-sm lg:flex-grow">
        <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-white font-SourceSerifPro hover:font-bold mr-4 px-6 text-xl">
          Home
        </a>
        <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-white font-SourceSerifPro hover:font-bold mr-4 px-6 text-xl">
          Measure
        </a>
        <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-white font-SourceSerifPro hover:font-bold mr-4 px-6 text-xl">
          History
        </a>
        <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-white font-SourceSerifPro hover:font-bold mr-4 px-6 text-xl">
          Calculator
        </a>
      </div>
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-[45px] w-[45px] mr-2" viewBox="0 0 20 20" fill="white">
          <path fill-rule="evenodd"
            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
            clip-rule="evenodd" />
        </svg>
      </div>
    </div>
  </nav>
  <!-- Header End -->
</body>
</html>