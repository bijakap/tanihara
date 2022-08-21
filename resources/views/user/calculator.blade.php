<!-- Calculator Page Start -->

<h1 class="text-[38px] font-SourceSansPro text-center mt-[46px]">Calculator</h1>
  <h1 class="text-xl font-SourceSansPro text-center mt-1 mb-[46px]">Dedicated for your plants need</h1>

  <div class="flex flex-col items-center">
    <div class="grid grid-cols-2 gap-5">
      <div class="w-[603px] h-[944px] border-solid border-2 border-[#06AA51] rounded-[20px] py-[33px]">
        <p class="text-[28px] font-semibold text-[#06AA51] text-center">
          Fertilizer PPM Calculator</p>

        <div class="text-[20px] font-SourceSansPro px-[122px]">
          <p class="mb-[10px] mt-[30px]">Select fertilizer items:</p>
          <div class="inline-block relative w-full mb-[20px]">
            <select class="block appearance-none w-full px-[20px] py-3 bg-white text-[#06AA51] font-bold font-Inter text-[17px] rounded-[13px] border-solid
        border-2 border-[#06AA51] leading-tight focus:outline-none focus:shadow-outline">
              <option>Urea</option>
              <option>A</option>
              <option>B</option>
              <option>C</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-5 text-[#06AA51]">
              <svg class="fill-current w-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path
                  d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
              </svg>
            </div>
          </div>
        </div>
        <form>
          <div class="grid gap-x-[29px] gap-y-[20px] grid-cols-3 px-[122px]">
            <div>
              <label for="n_value1" class="block mb-[10px] text-[20px] text-center font-SourceSansPro">N</label>
              <input type="number" id="n_value1"
                class="border border-[#B5B5B5] text-[20px] font-SourceSansPro rounded-[13px] focus:ring-[#06AA51] focus:border-[#06AA51] block w-[100px] h-[45px] p-2.5 text-center"
                required="">
            </div>
            <div>
              <label for="p_value1" class="block mb-[10px] text-[20px] text-center font-SourceSansPro">P</label>
              <input type="number" id="p_value1"
                class=" border border-[#B5B5B5] text-[20px] font-SourceSansPro rounded-[13px] focus:ring-[#06AA51] focus:border-[#06AA51] block w-[100px] h-[45px] p-2.5 text-center"
                required="">
            </div>
            <div>
              <label for="k_value1" class="block mb-[10px] text-[20px] text-center font-SourceSansPro">K</label>
              <input type="number" id="k_value1"
                class=" border border-[#B5B5B5] text-[20px] font-SourceSansPro rounded-[13px] focus:ring-[#06AA51] focus:border-[#06AA51] block w-[100px] h-[45px] p-2.5 text-center"
                required="">
            </div>

            <div class="flex">
              <div class="w-[200px] h-[45px] col-span-2">
                <label for="n_value" class="block mb-[10px] text-[20px] font-SourceSansPro">Amount:</label>
                <input type="number" id="amount_value"
                  class="block p-2.5 w-[114px] h-[45px] z-20 text-[20px] text-center font-SourceSansPro rounded-l-[13px] border-2 border-[#06AA51]"
                  placeholder="" required="">
              </div>

              <div class="inline-block relative mt-[30px]">
                <select class="block appearance-none w-[86px] h-[45px] px-[16px] py-2 mt-[10px] bg-white text-[#06AA51] font-bold font-Inter text-[17px] rounded-r-[13px] 
                border-solid border-2 border-[#06AA51] leading-tight focus:outline-none focus:shadow-outline">
                  <option>Lbs</option>
                  <option>A</option>
                  <option>B</option>
                  <option>C</option>
                </select>

                <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-[#06AA51]">
                  <svg class="fill-current w-[20px] mt-[13px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path
                      d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
                  </svg>
                </div>
              </div>

              <div class="ml-[40px]">
                <button
                  class="w-[120px] h-[45px] rounded-[13px] bg-[#06AA51] text-white text-[17px] font-bold font-Inter mt-[40px]">
                  Add
                </button>
              </div>
            </div>

            <div class="col-span-3">
              <label for="n_value" class="block mb-1 text-[20px] font-SourceSansPro">List of fertilizer items</label>
              <div class="border border-[#B5B5B5] rounded-[13px] w-[395px] h-[150px]">
              </div>
            </div>

            <div class="col-span-3 mx-auto mt-[20px]">
              <button
                class="w-[280px] h-[45px] rounded-[13px] bg-[#06AA51] text-white text-[17px] font-bold font-Inter">
                Calculate
              </button>
            </div>

            <div class="col-span-3">
              <label for="n_value" class="block mb-2 text-[20px] font-SourceSansPro">Result</label>
              <div class="border border-[#B5B5B5] rounded-[13px] w-[395px] h-[150px]">
              </div>
            </div>
        </form>
      </div>
    </div>

    <div class="w-[603px] h-[944px] border-solid border-2 border-[#06AA51] rounded-[20px]">
      <p class="text-[28px] font-semibold text-[#06AA51] text-center mt-8 mb-[30px]">
        NPK and N-P205-K20 Converter</p>

      <form>
        <div class="grid gap-x-[29px] gap-y-[20px] grid-cols-3 px-[122px]">
          <div>
            <label for="n_value2" class="block mb-[10px] text-[20px] text-center font-SourceSansPro">N</label>
            <input type="number" id="n_value2"
              class=" border border-[#B5B5B5] text-[20px] font-SourceSansPro rounded-[13px] focus:ring-[#06AA51] focus:border-[#06AA51] block w-[100px] h-[45px] p-2.5 text-center"
              required="">
          </div>
          <div>
            <label for="p_value2" class="block mb-[10px] text-[20px] text-center font-SourceSansPro">P</label>
            <input type="number" id="p_value2"
              class=" border border-[#B5B5B5] text-[20px] font-SourceSansPro rounded-[13px] focus:ring-[#06AA51] focus:border-[#06AA51] block w-[100px] h-[45px] p-2.5 text-center"
              required="">
          </div>
          <div>
            <label for="k_value2" class="block mb-[10px] text-[20px] text-center font-SourceSansPro">K</label>
            <input type="number" id="k_value2"
              class=" border border-[#B5B5B5] text-[20px] font-SourceSansPro rounded-[13px] focus:ring-[#06AA51] focus:border-[#06AA51] block w-[100px] h-[45px] p-2.5 text-center"
              required="">
          </div>

          <div class="flex">
            <div class="w-[360px] h-[45px] col-span-2">
              <label for="n_value" class="block mb-[10px] text-[20px] font-SourceSansPro">Amount:</label>
              <input type="number" id="amount_value"
                class="block p-2.5 w-[209px] h-[45px] z-20 text-[20px] font-SourceSansPro rounded-l-[13px] border-2 border-[#06AA51] text-center"
                placeholder="" required="">
            </div>

            <div class="inline-block relative mt-[30px]">
              <select class="block appearance-none w-[151px] h-[45px] px-[16px] py-2 mt-[10px] bg-white text-[#06AA51] font-bold font-Inter text-[17px] rounded-r-[13px]
              border-solid border-2 border-[#06AA51] leading-tight focus:outline-none focus:shadow-outline">
                <option>grams/liter</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
              </select>

              <div class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-[#06AA51]">
                <svg class="fill-current w-[20px] mt-[13px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                  <path
                    d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
                </svg>
              </div>
            </div>
          </div>

          <div class="col-span-3 mx-auto mt-[20px]">
            <button class="w-[280px] h-[45px] rounded-[13px] bg-[#06AA51] text-white text-[17px] font-bold font-Inter">
              Calculate
            </button>
          </div>

          <div class="col-span-3">
            <label for="n_value" class="block mb-2 text-[20px] font-SourceSansPro">Result</label>
            <div class="border border-[#B5B5B5] rounded-[13px] w-[395px] h-[150px]">
            </div>
          </div>
      </form>
    </div>
  </div>
  <!-- Calculator Page End -->