@extends('layouts.user_layout')

@section('title', 'Tanihara - Notification')

@section('script')

@endsection

@section('container')
  <section class="flex justify-center items-center h-[80vh]">
    <div>
      <img class="min-h-[190px] min-w-[190px] object-cover rounded-full" src="https://picsum.photos/200"/>
      <p class="text-center mt-[24px] font-SourceSerifPro text-[#10733D] text-[42px] leading-[53px] font-semibold">Nama User</p>
      <p class="text-center font-SourceSansPro text-[#10733D] text-[22px] leading-[28px] font-normal">EmailUser@gmail.com</p>
      <div class="flex justify-center mt-[30px]">
        <a href="#" class="bg-[#06AA51] py-3 px-4 rounded-xl">
          <p class="text-[#F5F5F5] font-Inter font-bold text-[17px] leading-[21px]">Edit Profile</p>
        </a>
      </div>
    </div>
      
  </section>

@endsection