<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tanihara - Login</title>
        <!-- Logo -->
        <link rel="icon" href="https://picsum.photos/200">

        <!-- Load Tailwind -->
        @vite('resources/css/app.css')
        <!-- Load Config Firebase -->
        <script type="module" src="{{ asset('assets/js/firebase_config.js') }}"></script>

    </head>
    <body class="bg-white">
      <div class="flex">
        <div class="w-1/2 p-6 min-h-screen">
          <div class="bg-no-repeat h-full bg-cover bg-center rounded-[40px] pt-[112px] px-12 font-SourceSerifPro text-[#10733D]" style="background-image: url('{{ asset('assets/images/bg-login.png') }}');">
            <p class="font-bold text-[54px] leading-[68px] ">Logo</p>
            <p class="font-semibold text-[42px] leading-[53px]">Care for your plant</p> 
          </div>
        </div>
        <div class="w-1/2 flex items-center justify-center">
          <form class="font-SourceSerifPro w-[320px]" method="POST" action="{{ url('login') }}">
            @csrf
            <p class="font-normal text-[54px] leading-[64px] pb-[10px]">Login</p>
            <div class="pt-[20px] flex flex-col gap-[10px] font-SourceSansPro">
              <label class="text-[17px] leading-[21px] font-normal">Email address</label>
              <input 
                type="text" 
                name="email" 
                placeholder="name@gmail.com"
                class="py-[5px] px-[10px] rounded-lg border border-[#B5B5B5] outline-none"
              >
            </div>
            <div class="pt-[20px] flex flex-col gap-[10px] font-SourceSansPro">
              <label class="text-[17px] leading-[21px] font-normal">Password</label>
              <input 
                type="password" 
                name="password" 
                placeholder="••••••••••••"
                class="py-[5px] px-[10px] rounded-lg border border-[#B5B5B5] outline-none"
              >
            </div>
            <p class="font-normal text-[17px] leading-[21px] text-right text-[#06AA51] mb-[35px] mt-[20px]">Forget Password</p>
            <button type="submit" class="flex justify-center w-full bg-[#06AA51] text-white font-bold rounded-[13px] py-3">Login</button>
            <div class="text-center text-[17px] leading-[21px] py-[30px]">
              <p>Don’t have an account? <a href="#" class="text-[#06AA51]">Register here</a> </p>
            </div>
            <div class="flex mb-[30px]">
              <div class="border-b w-full self-center">

              </div>
              <p class="w-full whitespace-nowrap mx-2 text-[#888888] text-[17px] leading-[21px] font-normal">or continue with</p>
              <div class="border-b w-full self-center">

              </div>
            </div>
            <div class="flex justify-between">
              <div class="shadow-md rounded-[10px] flex items-center justify-center w-[60px] h-[60px]">
                <a href="#">
                  <img src=" {{asset('assets/logo/bi_phone.svg') }}">
                </a>
              </div>
              <div class="shadow-md rounded-[10px] flex items-center justify-center w-[60px] h-[60px]">
                <a href="#">
                  <img src=" {{asset('assets/logo/flat-color-icons_google.svg') }}">
                </a>
              </div>
              <div class="shadow-md rounded-[10px] flex items-center justify-center w-[60px] h-[60px]">
                <a href="#">
                  <img src=" {{asset('assets/logo/ic_baseline-facebook.svg') }}">
                </a>
              </div>
            </div>
          </form>
        </div>

      </div>  
      

   </body>
</html>
