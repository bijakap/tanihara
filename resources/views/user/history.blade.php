@extends('layouts.user_layout')

@section('title', 'Tanihara - History')

@section('script')
@endsection

@section('container')
  <!-- History Page Start -->

  <div class="flex flex-col justify-center items-center">
    <h1 class="text-[38px] font-SourceSansPro text-center mt-[50px]">Select your tools</h1>
    <h1 class="text-xl font-SourceSansPro text-center mt-1 mb-[53px]">Check on your plant's soil status</h1>
    <div class="grid grid-cols-2 gap-[40px] place-content-center">
      <div id="dropdown-wrapper">
        <button onclick="toggleMenu()" id="button-data"
          class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
          type="button">
          <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                  d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
              </svg>
              <p class="text-xl text-center font-Inter">Cabai</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>LoRa.id device EUI</p>
              <p class="mt-2">LoRa.id device ID</p>
              <p class="mt-2">LoRa.id device address</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
            </div>
            <div>
              <svg class="fill-current h-[44px] w-14 mx-auto mt-14" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 320 512">
                <path
                  d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
              </svg>
            </div>
          </div>
        </button>
        <!-- Dropdown menu -->
        <div id="data" class="block h-[813px] w-[580px] divide-y rounded-[20px] bg-[#F6F6F6] shadow">
          <div class="flex flex-col justify-center">
            <div class="mx-auto mt-[20px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                1
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                2
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                3
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="dropdown-wrapper">
        <button onclick="toggleMenu2()" id="button-data2"
          class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
          type="button">
          <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                  d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
              </svg>
              <p class="text-xl text-center font-Inter">Cabai</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>LoRa.id device EUI</p>
              <p class="mt-2">LoRa.id device ID</p>
              <p class="mt-2">LoRa.id device address</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
            </div>
            <div>
              <svg class="fill-current h-[44px] w-14 mx-auto mt-14" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 320 512">
                <path
                  d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
              </svg>
            </div>
          </div>
        </button>
        <!-- Dropdown menu -->
        <div id="data2" class="block h-[813px] w-[580px] divide-y rounded-[20px] bg-[#F6F6F6] shadow">
          <div class="flex flex-col justify-center">
            <div class="mx-auto mt-[20px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                1
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                2
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                3
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="dropdown-wrapper">
        <button onclick="toggleMenu3()" id="button-data3"
          class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
          type="button">
          <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                  d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
              </svg>
              <p class="text-xl text-center font-Inter">Cabai</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>LoRa.id device EUI</p>
              <p class="mt-2">LoRa.id device ID</p>
              <p class="mt-2">LoRa.id device address</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
            </div>
            <div>
              <svg class="fill-current h-[44px] w-14 mx-auto mt-14" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 320 512">
                <path
                  d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
              </svg>
            </div>
          </div>
        </button>
        <!-- Dropdown menu -->
        <div id="data3" class="hidden h-[813px] w-[580px] divide-y rounded-[20px] bg-[#F6F6F6] shadow">
          <div class="flex flex-col justify-center">
            <div class="mx-auto mt-[20px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                1
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                2
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                3
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="dropdown-wrapper">
        <button onclick="toggleMenu4()" id="button-data4"
          class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
          type="button">
          <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                  d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
              </svg>
              <p class="text-xl text-center font-Inter">Cabai</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>LoRa.id device EUI</p>
              <p class="mt-2">LoRa.id device ID</p>
              <p class="mt-2">LoRa.id device address</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
            </div>
            <div>
              <svg class="fill-current h-[44px] w-14 mx-auto mt-14" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 320 512">
                <path
                  d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
              </svg>
            </div>
          </div>
        </button>
        <!-- Dropdown menu -->
        <div id="data4" class="hidden h-[813px] w-[580px] divide-y rounded-[20px] bg-[#F6F6F6] shadow">
          <div class="flex flex-col justify-center">
            <div class="mx-auto mt-[20px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                1
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                2
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                3
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="dropdown-wrapper">
        <button onclick="toggleMenu5()" id="button-data5"
          class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
          type="button">
          <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                  d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
              </svg>
              <p class="text-xl text-center font-Inter">Cabai</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>LoRa.id device EUI</p>
              <p class="mt-2">LoRa.id device ID</p>
              <p class="mt-2">LoRa.id device address</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
            </div>
            <div>
              <svg class="fill-current h-[44px] w-14 mx-auto mt-14" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 320 512">
                <path
                  d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
              </svg>
            </div>
          </div>
        </button>
        <!-- Dropdown menu -->
        <div id="data5" class="hidden h-[813px] w-[580px] divide-y rounded-[20px] bg-[#F6F6F6] shadow">
          <div class="flex flex-col justify-center">
            <div class="mx-auto mt-[20px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                1
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                2
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                3
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="dropdown-wrapper">
        <button onclick="toggleMenu6()" id="button-data6"
          class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
          type="button">
          <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                  d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
              </svg>
              <p class="text-xl text-center font-Inter">Cabai</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>LoRa.id device EUI</p>
              <p class="mt-2">LoRa.id device ID</p>
              <p class="mt-2">LoRa.id device address</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
            </div>
            <div>
              <svg class="fill-current h-[44px] w-14 mx-auto mt-14" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 320 512">
                <path
                  d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
              </svg>
            </div>
          </div>
        </button>
        <!-- Dropdown menu -->
        <div id="data6" class="hidden h-[813px] w-[580px] divide-y rounded-[20px] bg-[#F6F6F6] shadow">
          <div class="flex flex-col justify-center">
            <div class="mx-auto mt-[20px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                1
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                2
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                3
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="dropdown-wrapper">
        <button onclick="toggleMenu7()" id="button-data7"
          class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
          type="button">
          <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                  d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
              </svg>
              <p class="text-xl text-center font-Inter">Cabai</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>LoRa.id device EUI</p>
              <p class="mt-2">LoRa.id device ID</p>
              <p class="mt-2">LoRa.id device address</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
            </div>
            <div>
              <svg class="fill-current h-[44px] w-14 mx-auto mt-14" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 320 512">
                <path
                  d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
              </svg>
            </div>
          </div>
        </button>
        <!-- Dropdown menu -->
        <div id="data7" class="hidden h-[813px] w-[580px] divide-y rounded-[20px] bg-[#F6F6F6] shadow">
          <div class="flex flex-col justify-center">
            <div class="mx-auto mt-[20px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                1
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                2
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                3
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="dropdown-wrapper">
        <button onclick="toggleMenu8()" id="button-data8"
          class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
          type="button">
          <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                  d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
              </svg>
              <p class="text-xl text-center font-Inter">Cabai</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>LoRa.id device EUI</p>
              <p class="mt-2">LoRa.id device ID</p>
              <p class="mt-2">LoRa.id device address</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
            </div>
            <div>
              <svg class="fill-current h-[44px] w-14 mx-auto mt-14" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 320 512">
                <path
                  d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
              </svg>
            </div>
          </div>
        </button>
        <!-- Dropdown menu -->
        <div id="data8" class="hidden h-[813px] w-[580px] divide-y rounded-[20px] bg-[#F6F6F6] shadow">
          <div class="flex flex-col justify-center">
            <div class="mx-auto mt-[20px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                1
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                2
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                3
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="dropdown-wrapper">
        <button onclick="toggleMenu9()" id="button-data9"
          class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
          type="button">
          <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                  d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
              </svg>
              <p class="text-xl text-center font-Inter">Cabai</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>LoRa.id device EUI</p>
              <p class="mt-2">LoRa.id device ID</p>
              <p class="mt-2">LoRa.id device address</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
            </div>
            <div>
              <svg class="fill-current h-[44px] w-14 mx-auto mt-14" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 320 512">
                <path
                  d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
              </svg>
            </div>
          </div>
        </button>
        <!-- Dropdown menu -->
        <div id="data9" class="hidden h-[813px] w-[580px] divide-y rounded-[20px] bg-[#F6F6F6] shadow">
          <div class="flex flex-col justify-center">
            <div class="mx-auto mt-[20px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                1
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                2
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                3
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="dropdown-wrapper">
        <button onclick="toggleMenu10()" id="button-data10"
          class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
          type="button">
          <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                  d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
              </svg>
              <p class="text-xl text-center font-Inter">Cabai</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>LoRa.id device EUI</p>
              <p class="mt-2">LoRa.id device ID</p>
              <p class="mt-2">LoRa.id device address</p>
            </div>
            <div class="text-xl text-left mt-[25px] font-SourceSansPro">
              <p>: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
              <p class="mt-2">: xxxxx</p>
            </div>
            <div>
              <svg class="fill-current h-[44px] w-14 mx-auto mt-14" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 320 512">
                <path
                  d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
              </svg>
            </div>
          </div>
        </button>
        <!-- Dropdown menu -->
        <div id="data10" class="hidden h-[813px] w-[580px] divide-y rounded-[20px] bg-[#F6F6F6] shadow">
          <div class="flex flex-col justify-center">
            <div class="mx-auto mt-[20px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                1
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                2
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>

            <div class="mx-auto mt-[18px] rounded-[20px] text-[20px] font-SourceSansPro bg-white w-[540px] h-[246px]">
              <p class="text-[40px] font-SourceSansPro text-[#06AA51] text-center my-1">
                3
              </p>
              <div class="grid grid-flow-col grid-cols-4 gap-x-8 text-xl px-[50px]">
                <div>
                  <p>N</p>
                  <p class="mt-3">P</p>
                  <p class="mt-3">K </p>
                  <p class="mt-3">Moist</p>
                </div>
                <div class="col-span-2">
                  <p>: 100.00</p>
                  <p class="mt-3">: 9.01</p>
                  <p class="mt-3">: 71.00</p>
                  <p class="mt-3">: 1.00</p>
                </div>
                <div class="col-span-2">
                  <p>pH</p>
                  <p class="mt-3">Longtitude</p>
                  <p class="mt-3">Latitude</p>
                  <p class="mt-3">Time</p>
                </div>
                <div>
                  <p>: 1.00</p>
                  <p class="mt-3">: 107.613144</p>
                  <p class="mt-3">: -6.905977</p>
                  <p class="mt-3">: 06:57:34</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- History Page End -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>

    var data = document.getElementById("data");
    var data2 = document.getElementById("data2");
    var data3 = document.getElementById("data3");
    var data4 = document.getElementById("data4");
    var data5 = document.getElementById("data5");
    var data6 = document.getElementById("data6");
    var data7 = document.getElementById("data7");
    var data8 = document.getElementById("data8");
    var data9 = document.getElementById("data9");
    var data10 = document.getElementById("data10");

    // open/close the menu when the user clicks on the button
    function toggleMenu() {
      if (data.classList.contains('hidden')) {
        data.classList.remove('hidden');
      } else {
        data.classList.add('hidden');
      }
    }

    function toggleMenu2() {
      if (data2.classList.contains('hidden')) {
        data2.classList.remove('hidden');
      } else {
        data2.classList.add('hidden');
      }
    }

    function toggleMenu3() {
      if (data3.classList.contains('hidden')) {
        data3.classList.remove('hidden');
      } else {
        data3.classList.add('hidden');
      }
    }

    function toggleMenu4() {
      if (data4.classList.contains('hidden')) {
        data4.classList.remove('hidden');
      } else {
        data4.classList.add('hidden');
      }
    }

    function toggleMenu5() {
      if (data5.classList.contains('hidden')) {
        data5.classList.remove('hidden');
      } else {
        data5.classList.add('hidden');
      }
    }

    function toggleMenu6() {
      if (data6.classList.contains('hidden')) {
        data6.classList.remove('hidden');
      } else {
        data6.classList.add('hidden');
      }
    }

    function toggleMenu7() {
      if (data7.classList.contains('hidden')) {
        data7.classList.remove('hidden');
      } else {
        data7.classList.add('hidden');
      }
    }

    function toggleMenu8() {
      if (data8.classList.contains('hidden')) {
        data8.classList.remove('hidden');
      } else {
        data8.classList.add('hidden');
      }
    }

    function toggleMenu9() {
      if (data9.classList.contains('hidden')) {
        data9.classList.remove('hidden');
      } else {
        data9.classList.add('hidden');
      }
    }

    function toggleMenu10() {
      if (data10.classList.contains('hidden')) {
        data10.classList.remove('hidden');
      } else {
        data10.classList.add('hidden');
      }
    }
  </script>
@endsection


