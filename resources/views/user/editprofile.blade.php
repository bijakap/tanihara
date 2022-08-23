@extends('layouts.user_layout')

@section('title', 'Tanihara - edit')

@section('script')

@endsection

@section('container')
  <section class="flex justify-center items-center h-[80vh]">
    <div>
      <div class="relative">
        <img class="min-h-[190px] min-w-[190px] object-cover rounded-full" src="https://picsum.photos/200"/>
        <div class="absolute -translate-y-[120%] right-1">
          <button id="button" class="min-h-[46px] min-w-[46px] bg-[#06AA51] rounded-full flex justify-center items-center">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <input type="file" class="hidden" id="inputFile">
        </div>
      </div>
      <div class="flex flex-col mt-5">
        <label class="font-SourceSansPro font-normal text-[20px] leading-[25px]">Name</label>
        <input type="text" class="rounded-lg bg-white border border-[#B5B5B5] py-1 px-[10px]"/>
      </div>
      <div class="flex flex-col mt-5">
        <label class="font-SourceSansPro font-normal text-[20px] leading-[25px]">Email</label>
        <input type="email" class="rounded-lg bg-white border border-[#B5B5B5] py-1 px-[10px]"/>
      </div>
      <div class="flex justify-center mt-[30px]">
        <a href="#" class="bg-[#06AA51] py-3 px-4 rounded-xl">
          <p class="text-[#F5F5F5] font-Inter font-bold text-[17px] leading-[21px]">Submit Changes</p>
        </a>
      </div>
    </div>
      
  </section>
  <script>
    document.getElementById("button").addEventListener("click", function(){
      document.getElementById("inputFile").click()
    });

  </script>
@endsection