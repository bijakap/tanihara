@extends('layouts.user_layout')

@section('title', 'Tanihara - Home')

@section('script')
  {{-- ChartScript --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script> --}}
  {{-- @if($chart) --}}
  {{-- {!! $chart->script() !!} --}}
  {{-- @endif --}}
  <script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
  {!! $chart->script() !!}
@endsection

@section('container')
  {{-- @dd($chart) --}}
  <div class="mx-[70px] mt-[50px]">
    <div class="">
      <p class="text-[#10733D] text-[42px] leading-[53px] font-semibold font-SourceSerifPro">Welcome back, User</p>
      <p class="text-[20px] leading-[25px] font-normal font-SourceSansPro">Is your plant thriving?</p>
    </div>
    <section class="flex justify-between gap-[85px] mt-10">
      <div class="grid grid-cols-4 gap-[30px]">
        @for ($i =1; $i <= 7; $i++)
           <div class="flex justify-center items-center bg-[#16DB70]/40 rounded-[20px] min-h-[150px] min-w-[150px] h-[150px] w-[150px]" style="box-shadow: 0px 4px 24px 1px rgba(22, 219, 112, 0.28)">
              <div class="font-SourceSansPro">
                <div class="flex text-[#06AA51] mb-3">
                  <p class="text-[36px] font-normal leading-[46px]">293,9</p>
                  <p class="text-[20px] font-normal leading-[25px] self-end">Ppm</p>
                </div>
                <p class="text-center text-[20px] font-normal leading-[25px]">Cabai</p>
              </div>
           </div>
        @endfor
        <div class="flex justify-center items-center bg-white rounded-[20px] min-h-[150px] min-w-[150px] h-[150px] w-[150px]" style="box-shadow: 0px 4px 24px 1px rgba(22, 219, 112, 0.28)">
          <div class="font-SourceSansPro">
            <p class="text-center text-[#06AA51] text-[30px] font-normal leading-[38px]">See more</p>
          </div>
        </div> 
      </div>
      <div class="rounded-[40px] border-[2px] border-[#06AA51] bg-white px-6 py-9 self-center">
        <p class="text-center text-[28px] leading-[35px] font-normal">Thursday, 2 January 2022</p>
        <div class="flex">
          <div class="border-r pr-4 border-[#B5B5B5] self-center">
            <div class="flex text-[#06AA51]/60 mb-[6px]">
              <p class="text-[26px] font-normal leading-[33px]">293,9</p>
              <p class="text-[14px] font-normal leading-[18px] self-end">Ppm</p>
            </div>
            <div class="flex justify-center gap-[3px]">
              <div class="self-center">
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="5.5" cy="5.5" r="5.5" fill="white"/>
                  <circle cx="5.5" cy="5.5" r="5" stroke="#06AA51" stroke-opacity="0.6"/>
                  <path d="M7.1501 6.60001L5.5001 3.85001L3.8501 6.60001" stroke="#06AA51" stroke-opacity="0.6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <p class="text-black/60 text-[10px] leading-[13px]">0,2</p>
            </div>
          </div>
          <div class="px-4">
            <div class="flex text-[#06AA51] mb-[11px]">
              <p class="text-[36px] font-normal leading-[46px]">293,9</p>
              <p class="text-[20px] font-normal leading-[25px] self-end">Ppm</p>
            </div>
            <div class="flex justify-center gap-[10px]">
              <div class="self-center">
                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="11.5" cy="11.5" r="10.5" fill="white" stroke="#06AA51" stroke-width="2"/>
                  <path d="M14.9498 13.8L11.4998 8.04999L8.0498 13.8" stroke="#06AA51" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                  
              </div>
              <p class="text-black text-[18px] leading-[23px]">0,2</p>
            </div>
          </div>
          <div class="border-l pl-4 border-[#B5B5B5] self-center">
            <div class="flex text-[#06AA51]/60 mb-[6px]">
              <p class="text-[26px] font-normal leading-[33px]">293,9</p>
              <p class="text-[14px] font-normal leading-[18px] self-end">Ppm</p>
            </div>
            <div class="flex justify-center gap-[3px]">
              <div class="self-center">
                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="5.5" cy="5.5" r="5.5" fill="white"/>
                  <circle cx="5.5" cy="5.5" r="5" stroke="#06AA51" stroke-opacity="0.6"/>
                  <path d="M7.1501 6.60001L5.5001 3.85001L3.8501 6.60001" stroke="#06AA51" stroke-opacity="0.6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <p class="text-black/60 text-[10px] leading-[13px]">0,2</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="mt-[80px]">
      <p class="font-SourceSansPro text-[38px] leading-[48px] font-normal">Weekly report</p>
      <div class="flex gap-[80px] justify-between">
        <div class="w-1/2">
          {{-- still bug --}}
          {!! $chart->container() !!}
        </div>
        <div class="w-1/2">
          <div class="flex justify-end">
            <select class="w-[160px] p-[10px] bg-white border-2 border-[#06AA51] text-[#06AA51] text-[17px] font-bold rounded-xl focus:border-[#06AA51] outline-none">
              <option selected>Cabai</option>
              <option value="Cabai">Cabai</option>
            </select>
          </div>
          <div class="mt-[80px]">
            <p class="text-[30px] font-normal leading-[38px] font-SourceSansPro">Calculation</p>
            <div class="flex text-[#06AA51] gap-3">
              <p class="text-[50px] font-normal leading-[62px]">293,9</p>
              <p class="text-[30px] font-normal leading-[38px] self-end">Ppm</p>
            </div>
            <p class="mt-[30px] text-[20px] font-normal leading-[25px] font-SourceSansPro">Based on our prediction, your plant’s soil health will still be in control for the next 7 days.</p>
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection