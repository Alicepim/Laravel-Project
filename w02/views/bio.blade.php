<!-- resources/views/bio.blade.php -->

@extends('layouts.app')

@section('title', 'Bio')

@section('content')
    <!-- content -->
    <div class="bg-gray-100 flex items-center justify-center lg:h-screen py-16">
  <div class="w-11/12 sm:w-11/12 md:w-8/12 lg:w-6/12 bg-white p-6 rounded-lg shadow-sm">
    <div class="w-full flex justify-between items-center p-3">
      <h2 class="text-xl font-semibold">6414421027</h2>
      <button id="openModalBtn" class="flex items-center bg-black  border border-black text-white font-semibold py-2 px-4 rounded-md transition-colors duration-300">
        <svg class="w-4 h-4 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
        <p class="text-white">New Project</p>
    </button>
    </div>
    <div class="w-full flex justify-center p-1 mb-4">
      <div class="relative w-full">
        <input type="text" class="w-full  bg-white py-2 pl-10 pr-4 rounded-lg focus:outline-none border-2 border-gray-100 focus:border-black transition-colors duration-300" placeholder="Search...">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
          <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
          </svg>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
      <!-- Card 1 -->
      <div class=" bg-white/20 p-6 rounded-md shadow-sm cursor-pointer border-2 border-gray-50 hover:border-black hover:border-2 transition-colors duration-300">
        <h2 class="text-xl font-semibold mb-4">Project 1</h2>
        <p class="text-gray-700">Description of Project 2 goes here. You can provide more details about the project.</p>
        <div class="col-start-2 row-start-1 row-end-3 sm:mt-4 lg:mt-4 xl:mt-4">
          <dd class="flex justify-end sm:justify-start lg:justify-end xl:justify-start -space-x-1.5">
            <img src="https://placekitten.com/48/48" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/49/49" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/50/50" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/51/51" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/52/52" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
          </dd>
        </div>
      </div>
      <!-- Card 2 -->
      <div class=" bg-white/20 p-6 rounded-md shadow-sm cursor-pointer border-2 border-gray-50 hover:border-black hover:border-2 transition-colors duration-300">
        <h2 class="text-xl font-semibold mb-4">Project 2</h2>
        <p class="text-gray-700">Description of Project 2 goes here. You can provide more details about the project.</p>
        <div class="col-start-2 row-start-1 row-end-3 sm:mt-4 lg:mt-4 xl:mt-4">
          <dd class="flex justify-end sm:justify-start lg:justify-end xl:justify-start -space-x-1.5">
            <img src="https://placekitten.com/48/48" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/49/49" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/50/50" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/51/51" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/52/52" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
          </dd>
        </div>
      </div>
      <!-- Card 3 -->
      <div class=" bg-white/20 p-6 rounded-md shadow-sm cursor-pointer border-2 border-gray-50 hover:border-black hover:border-2 transition-colors duration-300">
        <h2 class="text-xl font-semibold mb-4">Project 3</h2>
        <p class="text-gray-700">Description of Project 2 goes here. You can provide more details about the project.</p>
        <div class="col-start-2 row-start-1 row-end-3 sm:mt-4 lg:mt-4 xl:mt-4">
          <dd class="flex justify-end sm:justify-start lg:justify-end xl:justify-start -space-x-1.5">
            <img src="https://placekitten.com/48/48" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/49/49" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/50/50" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/51/51" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/52/52" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
          </dd>
        </div>
      </div>
      <!-- Card 4 -->
      <div class=" bg-white/20 p-6 rounded-md shadow-sm cursor-pointer border-2 border-gray-50 hover:border-black hover:border-2 transition-colors duration-300">
        <h2 class="text-xl font-semibold mb-4">Project 4</h2>
        <p class="text-gray-700">Description of Project 2 goes here. You can provide more details about the project.</p>
        <div class="col-start-2 row-start-1 row-end-3 sm:mt-4 lg:mt-4 xl:mt-4">
          <dd class="flex justify-end sm:justify-start lg:justify-end xl:justify-start -space-x-1.5">
            <img src="https://placekitten.com/48/48" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/49/49" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/50/50" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/51/51" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
            <img src="https://placekitten.com/52/52" alt="" class="w-6 h-6 rounded-full bg-black" loading="lazy" >
          </dd>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
