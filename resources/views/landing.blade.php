<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tanihara</title>
    <!-- Logo -->
    <link rel="icon" href="https://picsum.photos/200">

    <!-- Load Tailwind -->
    @vite('resources/css/app.css')

  </head>
  <body class="bg-white">
    <div class="bg-cover" style="background-image: url('{{ asset('assets/images/landing.png') }}');">
      <div class="flex justify-between px-[70px] pt-[17px] font-SourceSerifPro">
        <p class="font-bold text-[32px] leading-10 text-[#06AA51]">Logo</p>
        <p class="font-bold text-[32px] leading-10 text-[#06AA51]">Agrisol</p>
        <a href="/login">
          <button class="bg-transparent border-[2px] border-[#06AA51] py-3 px-6 rounded-xl font-Inter">
            <p class="text-[#06AA51] font-bold leading-[21px] text-[17px]">Login</p>
          </button>
        </a>
      </div>
      <div class="flex justify-center mt-10">
        <div class="self-center w-[500px] ml-3">
          <p class="font-SourceSerifPro font-semibold text-[42px] leading-[53px] text-white">Track your plant health</p>
          <p class="font-SourceSansPro font-normal text-[20px] leading-[25px] text-white">Understand more about your plants’ soil by using a device that will always update its status to make your gardening  life easier.</p>
          <button class="bg-white rounded-xl py-3 px-[30px] mt-6">
            <p class="text-[#06AA51] font-bold text-[17px] leading-[21px]">Get Started</p>
          </button>
        </div>
        <div>
          <img class="pointer-events-none" src="{{ asset('assets/images/Landing Page Pic.png') }}">
        </div>
      </div>
    </div>
    <div class="mt-[100px] mx-[175px]">
      <div class="flex mb-[30px]">
        <div class="border-b w-full self-center">

        </div>
        <p class="font-SourceSerifPro whitespace-nowrap mx-2 text-[38px] leading-[48px] font-normal">Our main features</p>
        <div class="border-b w-full self-center">

        </div>
      </div>
      <div class="flex justify-between mt-[60px] gap-[70px]">
        <div class="rounded-[20px] min-w-[140px] min-h-[140px] flex justify-center items-center bg-white" style="box-shadow: 0px 4px 24px 1px rgba(22, 219, 112, 0.28);">
          <div class="">
            <div class="w-full flex items-center justify-center">
              <img src="{{ asset('assets/images/measure.png') }}" alt="measure.png">
            </div>
            <p class="font-SourceSansPro font-normal text-[20px] leading-[25px] text-center">Measure</p>
          </div>
        </div>
        <div class="self-center pr-[30px]">
          <p class="font-normal text-[20px] leading-[25px] text-justify">Our device will track the soil health, which includes the nitrogen, phosphorus, and potassium that are needed by plants. It will also  know the pH and moist of it. The data will be saved and can be seen as history. </p>
        </div>
      </div>
      <div class="flex justify-between mt-[90px] gap-[70px]">
        <div class="rounded-[20px] min-w-[140px] min-h-[140px] flex justify-center items-center bg-white" style="box-shadow: 0px 4px 24px 1px rgba(22, 219, 112, 0.28);">
          <div class="">
            <div class="w-full flex items-center justify-center">
              <img src="{{ asset('assets/images/cil_calculator.png') }}" alt="cil_calculator.png">
            </div>
            <p class="font-SourceSansPro font-normal text-[20px] leading-[25px] text-center">Calculator</p>
          </div>
        </div>
        <div class="self-center pr-[30px]">
          <p class="font-normal text-[20px] leading-[25px] text-justify">We provide two types of calculators, fertilizer PPM calculator and  NPK and N-P205-K20 converter to help your gardening activity.</p>
        </div>
      </div>
      <div class="flex justify-between mt-[90px] gap-[70px]">
        <div class="rounded-[20px] min-w-[140px] min-h-[140px] flex justify-center items-center bg-white" style="box-shadow: 0px 4px 24px 1px rgba(22, 219, 112, 0.28);">
          <div class="">
            <div class="w-full flex items-center justify-center">
              <img class="" src="{{ asset('assets/images/prediction.png') }}" alt="prediction.png">
            </div>
            <p class="font-SourceSansPro font-normal text-[20px] leading-[25px] text-center">Prediction</p>
          </div>
        </div>
        <div class="self-center pr-[30px]">
          <p class="font-normal text-[20px] leading-[25px] text-justify">We have gathered data and used machine learning to predict the soil content. By this, we can tell you whether your plants need more fertilizer to keep them healthy or they’re doing fine for the next seven days!</p>
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
        <p class="font-normal text-[20px] leading-[25px] font-SourceSansPro self-center">About us</p>
        <p class="font-normal text-[20px] leading-[25px] font-SourceSansPro self-center">Contact us</p>
      </div>
      <div class="flex justify-center pb-5">
        <img src="{{ asset('assets/images/lpdp.png') }}" alt="ldpd.png">
      </div>
    </div>
  </body>
</html>
