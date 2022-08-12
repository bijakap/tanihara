<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tanihara - SingUp</title>
        <!-- Logo -->
        <link rel="icon" href="https://picsum.photos/200">

        <!-- Load Tailwind -->
        @vite('resources/css/app.css')


        <!-- Load Config Firebase -->
        <script type="text/javascript" src="{{ asset('assets/js/firebase_config.js') }}"></script>


    </head>
    <body class="bg-white">
      <div class="flex">
        <div class="w-1/2 p-6 min-h-screen">
          <div class="relative bg-no-repeat h-full bg-cover bg-center py-[78px] px-12 rounded-[40px] font-SourceSerifPro text-white" style="background-image: url('{{ asset('assets/images/bg-singup.png') }}');">
            <div class="flex flex-col h-full" style="justify-content: end">
              <p class="font-bold text-[54px] leading-[68px] ">Logo</p>
              <p class="font-semibold text-[42px] leading-[53px]">Care for your plant</p>               
            </div>
          </div>
        </div>
        <div class="w-1/2 flex items-center justify-center ">
          <form class="font-SourceSerifPro w-[320px]" method="POST" action="{{ url('register') }}">
            @csrf
            <p class="font-normal text-[54px] leading-[64px] pb-[10px]">Register</p>
            <div class="pt-[20px] flex flex-col gap-[10px] font-SourceSansPro">
              <label class="text-[17px] leading-[21px] font-normal">Username</label>
              <input 
                type="text" 
                name="username" 
                placeholder="name@gmail.com"
                class="py-[5px] px-[10px] rounded-lg border border-[#B5B5B5] outline-none"
              >
            </div>
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
              <label class="text-[17px] leading-[21px] font-normal">Phone Number</label>
              <input 
                type="text" 
                name="phonenumber" 
                placeholder="+62xxxxxx"
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
            <div class="pt-[20px] flex flex-col gap-[10px] font-SourceSansPro">
              <label class="text-[17px] leading-[21px] font-normal">Confirm Password</label>
              <input 
                type="password" 
                name="password_confirmation" 
                placeholder="••••••••••••"
                class="py-[5px] px-[10px] rounded-lg border border-[#B5B5B5] outline-none"
              >
            </div>
            <button type="submit" class="flex justify-center w-full bg-[#06AA51] text-white font-bold rounded-[13px] py-3 mt-5">Daftar</button>
            <div class="text-center text-[17px] leading-[21px] py-[30px]">
              <p>Already have an account? <a href="{{ url("/login") }}" class="text-[#06AA51]">Login here?</a> </p>
            </div>
          </form>
        </div>

      </div>
   </body>
</html>
