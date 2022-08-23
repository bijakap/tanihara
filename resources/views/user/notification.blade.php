@extends('layouts.user_layout')

@section('title', 'Tanihara - Notification')

@section('script')

@endsection

@section('container')
  <section class="mt-[50px] mx-[175px]">
    <p class="font-semibold text-[42px] leading-[53px] font-SourceSerifPro text-[#10733D]">Notification</p>
    
    <div class="mt-[40px]">
      @for ($i =1; $i <= 1; $i++)
      <div class="bg-white rounded-[20px] px-[50px] py-[30px] font-SourceSansPro text-[24px] leading-[25px] mb-[30px]" style="box-shadow: 0px 4px 10px 5px rgba(0, 0, 0, 0.1)">
        <p class="font-semibold mb-[6px]">Help our web to improve!</p>
        <p class="font-normal">Give us your feedbacks by clicking this notification</p>
      </div>
    @endfor
    </div>
 
  </section>

@endsection