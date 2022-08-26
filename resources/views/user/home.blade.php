@extends('layouts.user_layout')

@section('title', 'Tanihara - Home')

@section('script')
  {{-- ChartScript --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script> --}}
  {{-- @if($chart) --}}
  {{-- {!! $chart->script() !!} --}}
  {{-- @endif --}}
  {{-- <script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
  {!! $chart->script() !!} --}}
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
      <p class="font-SourceSansPro text-[38px] leading-[48px] font-normal mb-[40px]">Weekly report and prediction</p>
      <div class="relative">
        <div class="w-full h-[440px]" id="container">
          <canvas id="myChart" class="border-[2px] border-[#06AA51] rounded-[40px]"></canvas>
        </div>
        <div class="absolute w-full m-10 top-0 left-0">
          <div class="flex">
            <select class="w-[160px] p-[10px] bg-white border-2 border-[#06AA51] text-[#06AA51] text-[17px] font-bold rounded-xl focus:border-[#06AA51] outline-none">
              <option selected>Cabai</option>
              <option value="Cabai">Cabai</option>
            </select>
          </div>
          <div class="mt-[20px]">
            <p class="text-[30px] font-normal leading-[38px] font-SourceSansPro">Average</p>
            <div class="flex text-[#06AA51] gap-3">
              <p class="text-[50px] font-normal leading-[62px]">293,9</p>
              <p class="text-[30px] font-normal leading-[38px] self-end">Ppm</p>
            </div>
            {{-- <p class="mt-[30px] text-[20px] font-normal leading-[25px] font-SourceSansPro">Based on our prediction, your plant’s soil health will still be in control for the next 7 days.</p> --}}
          </div>
        </div>
      </div>
    </section>
    <section class="flex justify-around border-[2px] border-[#06AA51] rounded-[20px] w-full mt-10">
      <div class="flex justify-center items-center">
        <p class="whitespace-nowrap text-[#06AA51] font-SourceSansPro text-[30px] leading-[38px] font-semibold">This week</p>
      </div>
      @for ($i =1; $i <= 7; $i++)
        @if($i == 6)
          <div class="flex justify-center items-center">
            <div class="p-[15px] bg-[#A2F1C6]/50">
              <div class="flex justify-center mb-[9px]">
                <p class="font-SourceSansPro text-[18px] leading-[22px]">Sun, Aug {{ $i }}</p>
              </div>
                <div class="flex text-[#06AA51] gap-3">
                  <p class="text-[30px] font-normal leading-[37px]">293,9</p>
                  <p class="text-[18px] font-normal leading-[22px] self-end">Ppm</p>
                </div>
            </div>
          </div>
        @else
          <div class="flex justify-center items-center">
            <div class="p-[15px]">
              <div class="flex justify-center mb-[9px]">
                <p class="font-SourceSansPro text-[18px] leading-[22px]">Sun, Aug {{ $i }}</p>
              </div>
                <div class="flex text-[#06AA51] gap-3">
                  <p class="text-[30px] font-normal leading-[37px]">293,9</p>
                  <p class="text-[18px] font-normal leading-[22px] self-end">Ppm</p>
                </div>
            </div>
          </div>
        @endif
      @endfor
    </section>
    <section class="flex justify-around border-[2px] border-[#06AA51] rounded-[20px] w-full mt-10">
      <div class="flex justify-center items-center">
        <p class="whitespace-nowrap text-[#06AA51] font-SourceSansPro text-[30px] leading-[38px] font-semibold">Prediction</p>
      </div>
      @for ($i =1; $i <= 7; $i++)
        <div class="flex justify-center items-center">
          <div class="p-[15px]">
            <div class="flex justify-center mb-[9px]">
              <p class="font-SourceSansPro text-[18px] leading-[22px]">Sun, Aug {{ $i + 7}}</p>
            </div>
            <div class="flex text-[#06AA51] gap-3">
              @if($i + 7 == 13 or $i + 7 == 14)
                <p class="text-[30px] font-normal leading-[37px]">---</p>
                <p class="text-[18px] font-normal leading-[22px] self-end">Ppm</p>
              @else
                <p class="text-[30px] font-normal leading-[37px]">293,9</p>
                <p class="text-[18px] font-normal leading-[22px] self-end">Ppm</p>
              @endif   
            </div>
          </div>
        </div>
      @endfor
    </section>
    <section class="flex gap-[30px] justify-center my-[100px] font-SourceSansPro">
      <div>
        <svg width="91" height="87" viewBox="0 0 91 87" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M47.3913 35.5167C47.3913 43.7639 41.7174 55.31 41.7174 55.31M47.3913 35.5167C47.3913 35.5167 41.7174 19.0223 54.9565 9.1256C68.1957 -0.771065 89 2.52782 89 2.52782C89 2.52782 89 15.7234 77.6522 25.62C66.3043 35.5167 47.3913 35.5167 47.3913 35.5167ZM46.25 36.7091C46.25 36.7091 49.2826 25.62 36.0435 15.7234C22.8043 5.82671 2 9.1256 2 9.1256C2 9.1256 2 22.3211 13.3478 32.2178C24.6957 42.1145 46.25 36.7091 46.25 36.7091ZM17.1304 55.31H66.3044C66.3044 55.31 70.087 85 41.7174 85C13.3478 85 17.1304 55.31 17.1304 55.31Z" stroke="#06AA51" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> 
      </div>
      <div class="flex flex-col gap-[6px]">
        <p class="text-[30px] leading-[38px] font-normal">This plant needs fertilizer on</p>
        <p class="font-semibold text-[#06AA51] text-[30px] leading-[38px] text-center">Friday, August 19</p>
      </div>
    </section>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script type="text/javascript">
  
      var dataset =  {{ Js::from($data) }};
      // alert()

      var ctx = document.getElementById('myChart').getContext('2d');
      var container = document.getElementById('container');
      var gradient = ctx.createLinearGradient(0,0, 0,container.clientHeight);
      gradient.addColorStop(0, 'rgba(6, 170, 81, 0.2)');
      gradient.addColorStop(1, 'rgba(6, 170, 81, 0)');

      const labels = [];
      for (let i = 0; i < dataset.length; ++i) {
        labels.push(i.toString());
      }

      const data = {
        labels: labels,
        datasets: [{
          label: 'My First dataset',
          borderColor: 'rgba(6, 170, 81)',
          borderWidth:1,
          backgroundColor: gradient,
          fill : true,
          data: dataset,
          tension: 0.3
        }]
      };

      const config = {
        type: 'line',
        data: data,
        options: {
          maintainAspectRatio: false,
          events: [],
          responsive: true,
          plugins: {
            title: {
              display: false,
              text: 'Chart.js Line Chart - Cubic interpolation mode'
            },
            legend: {
              display: false,
            },
          },
          interaction: {
            intersect: false,
          },
          scales: {
            x: {
              display: false,
              title: {
                display: false
              }
            },
            y: {
              display: false,
              title: {
                display: false,
                text: 'Value'
              },
              suggestedMin: -10,
              suggestedMax: Math.max(...dataset) + 10,
              beginAtZero: true,
            },
          },
          elements: {
              point:{
                  radius: 0
              }
          },
        },
      };

      const myChart = new Chart(
        document.getElementById('myChart'),
        config,
      );

  </script>
@endsection