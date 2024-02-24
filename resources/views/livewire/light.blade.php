<div>
    <h6 class="flex flex-col justify-center items-center my-4">&#128161;{{ $blingness}}%</h6>
            <div class="w-full h-6 bg-gray-200  dark:bg-gray-700 ">
                <div class="h-6 bg-yellow-600  dark:bg-yellow-500" style="width: {{ $blingness}}%">
                </div>
            </div>
    <div class="my-2">
        <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800  font-medium text-sm px-3 ml-1 py-1 me-2 my-2 mb-4 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" wire:click="off">off</button>
        <button type="button" class="text-white bg-gray-400 hover:bg-gray-900  focus:ring-gray-300 font-medium  text-sm px-3 py-1 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"wire:click="incrementation">+</button>
        <button type="button" class="text-white bg-gray-400 hover:bg-gray-900  focus:ring-gray-300 font-medium  text-sm px-3 py-1 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"wire:click="decrementation">-</button>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800  font-medium  text-sm px-3 py-1 me-2 mb-2 ml-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"wire:click="on">on</button>
    </div>

</div>