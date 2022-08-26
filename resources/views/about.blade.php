<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tanihara - About Us</title>
    <!-- Logo -->
    <link rel="icon" href="https://picsum.photos/200">

    <!-- Load Tailwind -->
    @vite('resources/css/app.css')

  </head>
  <body class="bg-white">
    <div class="flex justify-between px-[70px] py-[15px] font-SourceSerifPro bg-[#06AA51]">
      <p class="font-bold text-[32px] leading-10 text-white">Logo</p>
      <p class="font-bold text-[32px] leading-10 text-white">Agrisol</p>
      <a href="/login" class="self-center">
        <button class="bg-transparent border-[2px] border-white py-3 px-6 rounded-xl font-Inter">
          <p class="text-white font-bold leading-[21px] text-[17px]">Login</p>
        </button>
      </a>
    </div>

    <div class="flex justify-center mt-[50px]">
      <div class="mx-auto">
        <div class="flex gap-[105px] ">
          <div class="w-[623px] self-center">
            <p class="text-[#10733D] text-[42px] leading-[52px] font-semibold font-SourceSerifPro">About us</p>
            <p class="font-SourceSerifPro font-normal text-[20px] leading-[25px] text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam suscipit malesuada risus a egestas. Donec facilisis tellus efficitur venenatis tempor. Morbi ullamcorper placerat tristique. Proin ornare enim quis erat tempus, quis ornare ante commodo. Aenean a dignissim purus. Maecenas sit amet neque sagittis sem volutpat fringilla.</p>
          </div>
          <div>
            <img src="{{ asset('assets/images/about.png') }}">
            
          </div>
        </div>
      </div>
    </div>

    <div class="flex justify-center translate-y-[30%]">
      <div class="flex bg-white rounded-[30px] px-8" style="box-shadow: 0px 4px 24px 1px rgba(22, 219, 112, 0.28);">
        <img src="{{ asset('assets/images/Landing Page footer.png') }}">
        <div class="self-center">
          <p class="text-[#06AA51] font-SourceSerifPro font-bold text-[32px] leading-[40px]">Care for your plants with Agrisoil</p>
          <div class="flex justify-center mt-5">
            <button class="rounded-xl bg-[#06AA51] py-3 px-[18px] text-white font-Inter font-bold text-[17px] leading-[20px]">Download now</button>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-[#06AA51]">
      <div class="flex justify-center gap-[80px] text-white pt-32">
        <p class="font-bold text-[32px] leading-[40px] font-SourceSerifPro">Logo</p>
        <p class="font-normal text-[20px] leading-[25px] font-SourceSansPro self-center">Check our app</p>
        <a href="/about-us" class="font-normal text-[20px] leading-[25px] font-SourceSansPro self-center">About us</a>
        <p class="font-normal text-[20px] leading-[25px] font-SourceSansPro self-center">Contact us</p>
      </div>
      <div class="flex justify-center pb-5">
        <img src="{{ asset('assets/images/lpdp.png') }}" alt="ldpd.png">
      </div>
    </div>
  </body>
</html>
