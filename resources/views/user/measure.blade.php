@extends('layouts.user_layout')

@section('title', 'Measure - Add New Data')

@section('script')
  
@endsection

@section('container')
  <!-- Measure Tab Start -->

  <div class="py-[60px] px-[70px]">
    <ul class="flex flex-col md:flex-row list-none border-b-0 pl-0 mb-4" id="tabs-tabMeasure" role="tablist">
      <li class="flex-auto" role="presentation">
        <button id="button-newData" class="w-full text-xl font-SourceSansPro leading-tight inline-flex justify-center
      border-x-0 border-t-0 border-b-[1px] border-[#B5B5B5] px-6 py-3 my-2 hover:bg-[#67D198] hover:bg-opacity-20
      focus:border-[#10733D] focus:border-b-2 active" id="tabs-add" data-bs-toggle="pill"
          data-bs-target="#tabs-addMeasure" role="tab" aria-controls="tabs-addMeasure" aria-selected="true">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-[15px]" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
          </svg>Add New Data
        </a>
      </li>

      <li class="nav-item flex-auto text-center" role="presentation">
        <button id="button-myData" class="w-full text-xl font-SourceSansPro leading-tight inline-flex justify-center
      border-x-0 border-t-0 border-b-[1px] border-[#B5B5B5] px-6 py-3 my-2 hover:bg-[#67D198] hover:bg-opacity-20
      focus:border-[#10733D] focus:border-b-2" id="tabs-data" data-bs-toggle="pill" data-bs-target="#tabs-dataMeasure"
          role="tab" aria-controls="tabs-dataMeasure" aria-selected="true">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-[15px]" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
          </svg>My Data</button>
      </li>
    </ul>
  </div>

  <!-- Add New Data Tab Start -->

  <div class="tab-content" id="tabs-tabContentMeasure">
    <div class="tab-pane fade show active block" id="tabs-addMeasure" role="tabpanel" aria-labelledby="tabs-add">
      <div class="flex flex-col justify-center items-center">
        <div>
          <p class="text-xl font-SourceSansPro">
            Select your tools:
          </p>
          <div class="inline-block relative w-full max-w-sm mb-[30px]">
            <div class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-[#06AA51]">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
            </div>

            <select class="block appearance-none w-full px-32 py-2 bg-white text-[#06AA51] font-semibold font-Inter text-[17px] rounded-xl border-solid
            border-2 border-[#06AA51] leading-tight focus:outline-none focus:shadow-outline">
              <option>NPK P201</option>
              <option>NPK P202</option>
              <option>NPK P203</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-[#06AA51]">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path
                  d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
              </svg>
            </div>
          </div>
        </div>

        <div>
          <form class="w-full max-w-sm mb-[30px] ">
            <a class="font-SourceSansPro text-xl">
              LoRa.id device EUI
            </a>
            <input
              class="px-16 py-2 bg-white font-semibold text-[17px] rounded-xl border-solid
            border-2 border-[#06AA51] block appearance-none w-full leading-tight focus:outline-none focus:shadow-outline"
              type="text">
        </div>

        <div>
          <form class="w-full max-w-sm mb-[30px] ">
            <a class="font-SourceSansPro text-xl">
              LoRa.id device ID
            </a>
            <input
              class="px-16 py-2 bg-white font-semibold text-[17px] rounded-xl border-solid
            border-2 border-[#06AA51] block appearance-none w-full leading-tight focus:outline-none focus:shadow-outline"
              type="text">
        </div>

        <div>
          <button
            class="mt-[30px] font-Inter font-semibold shadow bg-[#06AA51] hover:bg-[#10733D] focus:shadow-outline focus:outline-none text-white py-2 px-11 rounded-xl"
            type="button">
            Submit
          </button>
        </div>
        </form>
      </div>
    </div>

    <!-- Add New Data Tab End -->

    <!-- My Data Tab Start -->

    <div class="tab-pane fade show active hidden" id="tabs-dataMeasure" role="tabpanel" aria-labelledby="tabs-data">
      <div class="flex flex-col justify-center items-center">
        <div class="grid grid-cols-2 gap-[40px] place-content-center">
          <div>
            <button id="dropdownDefault" data-dropdown-toggle="dropdown"
              class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
              type="button">
              <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]"
                    viewBox="0 0 20 20" fill="currentColor">
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
            <div id="dropdown"
              class="block h-[250px] w-[580px] divide-y divide-gray-100 rounded-[20px] bg-[#F6F6F6] shadow">
              <div class="flex flex-col justify-center">
                <div
                  class="mb-[22px] mt-[27px] grid grid-flow-col grid-cols-4 gap-4 text-xl px-[50px] font-SourceSansPro">
                  <div>
                    <p>N</p>
                    <p class="mt-3">P</p>
                    <p class="mt-3">K </p>
                    <p class="mt-3">Moist</p>
                  </div>
                  <div>
                    <p>: 100.00</p>
                    <p class="mt-3">: 9.01</p>
                    <p class="mt-3">: 71.00</p>
                    <p class="mt-3">: 1.00</p>
                  </div>
                  <div>
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
                <button
                  class="rounded-[13px] bg-[#06AA51] px-4 py-2 text-[17px] font-Inter font-semibold tracking-wide text-white mx-auto">Check
                  Location</button>
              </div>
            </div>
          </div>

          <div>
            <button id="dropdownDefault" data-dropdown-toggle="dropdown"
              class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
              type="button">
              <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]"
                    viewBox="0 0 20 20" fill="currentColor">
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
            <div id="dropdown"
              class="hidden h-[250px] w-[580px] divide-y divide-gray-100 rounded-[20px] bg-[#F6F6F6] shadow">
              <div class="flex flex-col justify-center">
                <div
                  class="mb-[22px] mt-[27px] grid grid-flow-col grid-cols-4 gap-4 text-xl px-[50px] font-SourceSansPro">
                  <div>
                    <p>N</p>
                    <p class="mt-3">P</p>
                    <p class="mt-3">K </p>
                    <p class="mt-3">Moist</p>
                  </div>
                  <div>
                    <p>: 100.00</p>
                    <p class="mt-3">: 9.01</p>
                    <p class="mt-3">: 71.00</p>
                    <p class="mt-3">: 1.00</p>
                  </div>
                  <div>
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
                <button
                  class="rounded-[13px] bg-[#06AA51] px-4 py-2 text-[17px] font-Inter font-semibold tracking-wide text-white mx-auto">Check
                  Location</button>
              </div>
            </div>
          </div>

          <div>
            <button id="dropdownDefault" data-dropdown-toggle="dropdown"
              class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
              type="button">
              <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]"
                    viewBox="0 0 20 20" fill="currentColor">
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
            <div id="dropdown"
              class="hidden h-[250px] w-[580px] divide-y divide-gray-100 rounded-[20px] bg-[#F6F6F6] shadow">
              <div class="flex flex-col justify-center">
                <div
                  class="mb-[22px] mt-[27px] grid grid-flow-col grid-cols-4 gap-4 text-xl px-[50px] font-SourceSansPro">
                  <div>
                    <p>N</p>
                    <p class="mt-3">P</p>
                    <p class="mt-3">K </p>
                    <p class="mt-3">Moist</p>
                  </div>
                  <div>
                    <p>: 100.00</p>
                    <p class="mt-3">: 9.01</p>
                    <p class="mt-3">: 71.00</p>
                    <p class="mt-3">: 1.00</p>
                  </div>
                  <div>
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
                <button
                  class="rounded-[13px] bg-[#06AA51] px-4 py-2 text-[17px] font-Inter font-semibold tracking-wide text-white mx-auto">Check
                  Location</button>
              </div>
            </div>
          </div>

          <div>
            <button id="dropdownDefault" data-dropdown-toggle="dropdown"
              class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
              type="button">
              <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]"
                    viewBox="0 0 20 20" fill="currentColor">
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
            <div id="dropdown"
              class="hidden h-[250px] w-[580px] divide-y divide-gray-100 rounded-[20px] bg-[#F6F6F6] shadow">
              <div class="flex flex-col justify-center">
                <div
                  class="mb-[22px] mt-[27px] grid grid-flow-col grid-cols-4 gap-4 text-xl px-[50px] font-SourceSansPro">
                  <div>
                    <p>N</p>
                    <p class="mt-3">P</p>
                    <p class="mt-3">K </p>
                    <p class="mt-3">Moist</p>
                  </div>
                  <div>
                    <p>: 100.00</p>
                    <p class="mt-3">: 9.01</p>
                    <p class="mt-3">: 71.00</p>
                    <p class="mt-3">: 1.00</p>
                  </div>
                  <div>
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
                <button
                  class="rounded-[13px] bg-[#06AA51] px-4 py-2 text-[17px] font-Inter font-semibold tracking-wide text-white mx-auto">Check
                  Location</button>
              </div>
            </div>
          </div>

          <div>
            <button id="dropdownDefault" data-dropdown-toggle="dropdown"
              class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
              type="button">
              <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]"
                    viewBox="0 0 20 20" fill="currentColor">
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
            <div id="dropdown"
              class="hidden h-[250px] w-[580px] divide-y divide-gray-100 rounded-[20px] bg-[#F6F6F6] shadow">
              <div class="flex flex-col justify-center">
                <div
                  class="mb-[22px] mt-[27px] grid grid-flow-col grid-cols-4 gap-4 text-xl px-[50px] font-SourceSansPro">
                  <div>
                    <p>N</p>
                    <p class="mt-3">P</p>
                    <p class="mt-3">K </p>
                    <p class="mt-3">Moist</p>
                  </div>
                  <div>
                    <p>: 100.00</p>
                    <p class="mt-3">: 9.01</p>
                    <p class="mt-3">: 71.00</p>
                    <p class="mt-3">: 1.00</p>
                  </div>
                  <div>
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
                <button
                  class="rounded-[13px] bg-[#06AA51] px-4 py-2 text-[17px] font-Inter font-semibold tracking-wide text-white mx-auto">Check
                  Location</button>
              </div>
            </div>
          </div>

          <div>
            <button id="dropdownDefault" data-dropdown-toggle="dropdown"
              class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
              type="button">
              <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]"
                    viewBox="0 0 20 20" fill="currentColor">
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
            <div id="dropdown"
              class="hidden h-[250px] w-[580px] divide-y divide-gray-100 rounded-[20px] bg-[#F6F6F6] shadow">
              <div class="flex flex-col justify-center">
                <div
                  class="mb-[22px] mt-[27px] grid grid-flow-col grid-cols-4 gap-4 text-xl px-[50px] font-SourceSansPro">
                  <div>
                    <p>N</p>
                    <p class="mt-3">P</p>
                    <p class="mt-3">K </p>
                    <p class="mt-3">Moist</p>
                  </div>
                  <div>
                    <p>: 100.00</p>
                    <p class="mt-3">: 9.01</p>
                    <p class="mt-3">: 71.00</p>
                    <p class="mt-3">: 1.00</p>
                  </div>
                  <div>
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
                <button
                  class="rounded-[13px] bg-[#06AA51] px-4 py-2 text-[17px] font-Inter font-semibold tracking-wide text-white mx-auto">Check
                  Location</button>
              </div>
            </div>
          </div>

          <div>
            <button id="dropdownDefault" data-dropdown-toggle="dropdown"
              class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
              type="button">
              <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]"
                    viewBox="0 0 20 20" fill="currentColor">
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
            <div id="dropdown"
              class="hidden h-[250px] w-[580px] divide-y divide-gray-100 rounded-[20px] bg-[#F6F6F6] shadow">
              <div class="flex flex-col justify-center">
                <div
                  class="mb-[22px] mt-[27px] grid grid-flow-col grid-cols-4 gap-4 text-xl px-[50px] font-SourceSansPro">
                  <div>
                    <p>N</p>
                    <p class="mt-3">P</p>
                    <p class="mt-3">K </p>
                    <p class="mt-3">Moist</p>
                  </div>
                  <div>
                    <p>: 100.00</p>
                    <p class="mt-3">: 9.01</p>
                    <p class="mt-3">: 71.00</p>
                    <p class="mt-3">: 1.00</p>
                  </div>
                  <div>
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
                <button
                  class="rounded-[13px] bg-[#06AA51] px-4 py-2 text-[17px] font-Inter font-semibold tracking-wide text-white mx-auto">Check
                  Location</button>
              </div>
            </div>
          </div>

          <div>
            <button id="dropdownDefault" data-dropdown-toggle="dropdown"
              class="inline-flex h-[150px] w-[580px] items-center rounded-[20px] bg-[#06AA51] px-4 py-2.5 text-center text-sm text-white"
              type="button">
              <div class="grid grid-flow-col gap-4 text-xl h-[150px] w-[580px]">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-[39px] w-[39px] mx-auto mt-[40px]"
                    viewBox="0 0 20 20" fill="currentColor">
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
            <div id="dropdown"
              class="hidden h-[250px] w-[580px] divide-y divide-gray-100 rounded-[20px] bg-[#F6F6F6] shadow">
              <div class="flex flex-col justify-center">
                <div
                  class="mb-[22px] mt-[27px] grid grid-flow-col grid-cols-4 gap-4 text-xl px-[50px] font-SourceSansPro">
                  <div>
                    <p>N</p>
                    <p class="mt-3">P</p>
                    <p class="mt-3">K </p>
                    <p class="mt-3">Moist</p>
                  </div>
                  <div>
                    <p>: 100.00</p>
                    <p class="mt-3">: 9.01</p>
                    <p class="mt-3">: 71.00</p>
                    <p class="mt-3">: 1.00</p>
                  </div>
                  <div>
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
                <button
                  class="rounded-[13px] bg-[#06AA51] px-4 py-2 text-[17px] font-Inter font-semibold tracking-wide text-white mx-auto">Check
                  Location</button>
              </div>
            </div>
          </div>

          <!-- My Data Tab End -->

        </div>
      </div>
    </div>
  </div>

  <!-- Measure Tab End -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <script>
    $("#button-newData").click(()=>{

      $("#tabs-addMeasure").removeClass("hidden").addClass("block")

      $("#tabs-dataMeasure").removeClass("block").addClass("hidden")
    })

    $("#button-myData").click(()=>{
      $("#tabs-dataMeasure").removeClass("hidden").addClass("block")

      $("#tabs-addMeasure").removeClass("block").addClass("hidden")

    })
  </script>
@endsection