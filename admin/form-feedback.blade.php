<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Aspirasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="ml-3 mt-3 mb-3">Form Feedback </h1>
               
                <div class="min-w-screen min-h-screen bg-gray-100 flex justify-center bg-gray-100 font-sans overflow-hidden">
                   
                    <form method="POST" action="{{url('admin/feedback')}}" enctype="multipart/form-data" class="w-full max-w-sm mt-10">
                        @csrf
                        <p class="ml-3 mt-3">Bukti foto</p>
                        <img style="height:120px; margin-bottom:120px" src="{{asset("images/$getId->bukti_laporan")}}" alt="">
                        <div class="md:flex md:items-center mb-6">
                          <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                Nama Pelapor
                            </label>
                          </div>
                          <div class="md:w-2/3">
                            <input type="hidden" name="id_inputs" value="{{$getId->id}}">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text"  value=" {{$getId->penduduk->nama}}" readonly>
                          </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
                                Isi laporan
                              </label>
                            </div>
                            <div class="md:w-2/3">
                                <p> {{$getId->isi_laporan}}</p>
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
                                Jenis Aspirasi
                              </label>
                            </div>
                            <div class="md:w-2/3">
                                <p> {{$getId->aspirasi->jenis_aspirasi}}</p>
                            </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                          <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
                              Feedback
                            </label>
                          </div>
                          <div class="md:w-2/3">
                            <textarea name="feedback" id="" cols="30" rows="5" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"></textarea>
                          </div>
                        </div>
                        
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
                                Status
                              </label>
                            </div>
                            <div class="md:w-2/3">
                                <select name="status" id="" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                                    <option value="Proses">Proses</option>
                                    <option value="Ditanggapi">Ditanggapi</option>
                                    
                                </select>
                            </div>
                          </div>
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                              <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
                                Foto
                              </label>
                            </div>
                            <div class="md:w-2/3">
                              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-username" type="file" name="file" >
                            </div>
                          </div>
                        
                        <div class="md:flex md:items-center mb-11">
                          <div class="md:w-1/3"></div>
                          <div class="md:w-2/3">
                            <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" >
                                Kirim
                            </button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>