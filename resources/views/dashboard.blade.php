<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl">Blog Content Generator</h2>
                    <form action="{{ route('blogGenerator') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="blogpost">Write A Blog Post About...</label>
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="blogpost" placeholder="">
                        </div>
                        <div>
                            <button class="rounded-sm bg-indigo-500 p-4" type="submit">Submit</button>
                        </div>
                    </form>
                    @if (isset($result))
                        <h2 class="text-2xl mt-2">Blog Post:</h2>
                        <div class="bg-gray-900 p-5 mt-2">{{$result}}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl">Blog Image Generator</h2>
                    <form action="{{ route('imageGenerator') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="imagepost">Create A Blog Image For...</label>
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="imagepost" placeholder="">
                        </div>
                        <div>
                            <button class="rounded-sm bg-indigo-500 p-4" type="submit">Submit</button>
                        </div>
                    </form>
                    @if (isset($response))
                        <h2 class="text-2xl mt-2">Blog Image:</h2>
                        <div class="bg-gray-900 p-5 mt-2">
                            <img  src="{{ $response }}" alt="">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
