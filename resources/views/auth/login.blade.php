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
          <div>
            {{-- Login Email & Password --}}
            <form id="container-login" class="block font-SourceSerifPro w-[320px]" method="POST" action="{{ url('login') }}">
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
              <p id="forget-password" class="block font-normal text-[17px] leading-[21px] text-right text-[#06AA51] mb-[35px] mt-[20px]" onclick="signOut()">Forget Password</p>
              <button type="submit" class="flex justify-center w-full bg-[#06AA51] text-white font-bold rounded-[13px] py-3">Login</button>
              <div class="text-center text-[17px] leading-[21px] py-[30px]">
                <p>Don’t have an account? <a href="{{ url("/register") }}" class="text-[#06AA51]">Register here</a> </p>
              </div>
            </form>

            {{-- phonenumber --}}
            <div id="container-phonenumber" class="hidden w-[320px]">
              <p class="font-normal text-[54px] leading-[64px] pb-[10px]">Login</p>
              <div class="pt-[20px] mb-5 flex flex-col gap-[10px] font-SourceSansPro">
                <label class="text-[17px] leading-[21px] font-normal">Enter Phone Number</label>
                <input 
                  type="text" 
                  name="phonenumber" 
                  placeholder="+62xxxxxx"
                  class="py-[5px] px-[10px] rounded-lg border border-[#B5B5B5] outline-none"
                >
                <button class="flex justify-center w-full bg-[#06AA51] text-white font-bold rounded-[13px] py-3" id="sign-in-button">Send OTP</button>
              </div>
              <div id="container-otp" class="pt-[20px] mb-5 hidden flex-col gap-[10px] font-SourceSansPro">
                <label class="text-[17px] leading-[21px] font-normal">Enter OTP</label>
                <input 
                  type="text" 
                  name="OTP" 
                  placeholder=""
                  class="py-[5px] px-[10px] rounded-lg border border-[#B5B5B5] outline-none"
                >
                <button class="flex justify-center w-full bg-[#06AA51] text-white font-bold rounded-[13px] py-3" onclick="verifyOTP()">Konfirmasi OTP</button>
              </div>
            </div>
            {{-- end bg-[#194b30] text-gray-300 ||  bg-[#06AA51] text-white--}}

            <div id="menu-login" class="block">
              <div class="flex mb-[30px]">
                <div class="border-b w-full self-center">
  
                </div>
                <p class="w-full whitespace-nowrap mx-2 text-[#888888] text-[17px] leading-[21px] font-normal">or continue with</p>
                <div class="border-b w-full self-center">
  
                </div>
              </div>
              <div class="flex justify-between">
                <button class="shadow-md rounded-[10px] flex items-center justify-center w-[60px] h-[60px]" id="phonenumber">
                  <img src=" {{asset('assets/logo/bi_phone.svg') }}">
                </button>
                <button onclick="loginGoogle()" class="shadow-md rounded-[10px] flex items-center justify-center w-[60px] h-[60px]" id="google">
                  <img src=" {{asset('assets/logo/flat-color-icons_google.svg') }}">
                </button>
                <button onclick="loginFacebook()" class="shadow-md rounded-[10px] flex items-center justify-center w-[60px] h-[60px]" id="facebook">
                  <img src=" {{asset('assets/logo/ic_baseline-facebook.svg') }}">
                </button>
              </div>
            </div>

            <div id="back" class="hidden mb-[30px]">
              <div class="border-b w-full self-center">
  
              </div>
              <button id="back-button" class="w-full whitespace-nowrap mx-2 text-[#06AA51] text-[17px] leading-[21px] font-normal">Login with email & password</button>
              <div class="border-b w-full self-center">
  
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="{{ asset('assets/js/loginUIController.js') }}"></script>
      <script type="module" src="{{ asset('assets/js/LoginController.js') }}"></script>
    
   </body>
</html>
