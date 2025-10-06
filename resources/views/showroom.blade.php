<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showroom</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100">
    <div id="menu" class="flex gap-4 p-4 bg-white shadow">
        <a href="{{ route('showroom') }}">
            <button id="bt_showroom" class="px-4 py-2 border rounded">Showroom</button>
        </a>
        <a href="{{ route('contact') }}">
            <button id="bt_contact" class="px-4 py-2 border rounded">Contact</button>
        </a>
    </div>

    <div >
        <h1 class="text-3xl font-bold mb-6">De showroom:</h1>

        <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
    @foreach($data->showroom as $car)
        <li class="border rounded-xl bg-white sm:bg-white/90 p-4 shadow-md sm:bg-none bg-[url('https://th.bing.com/th/id/R.3ea8331532b7081e01f0e494c3375eff?rik=mKPjWa4a8R1eog&pid=ImgRaw&r=0')] bg-cover bg-center p-9">
            
            {{-- Variant 1: Hele card klikbaar (alleen < lg) --}}
            <a href="{{ route('contact') }}" 
               class="block lg:hidden text-green-500 sm:text-black">
                
                <p class="text-xl font-bold mb-2 "> 
                    {{ $car['brand'] }} - {{ $car['model'] }}
                </p>

                <img src="{{ $car['image'] }}"
                     alt="Foto van {{ $car['brand'] }} {{ $car['model'] }}"
                     class="hidden sm:block w-full h-48 object-cover rounded mb-3">

                <div class="flex justify-between pt-24 pl-92">
                    <p class="text-green-500 sm:text-gray-700 text-lg font-semibold ">
                        €{{ number_format($car['price'], 0, ',', '.') }}
                    </p>
                    
                </div>
            </a>

            {{-- Variant 2: Alleen knop klikbaar (lg en groter) --}}
            <div class="hidden lg:block">
                <p class="text-xl font-bold mb-2">
                    {{ $car['brand'] }} - {{ $car['model'] }}
                </p>

                <img src="{{ $car['image'] }}"
                     alt="Foto van {{ $car['brand'] }} {{ $car['model'] }}"
                     class="w-full h-48 object-cover rounded mb-3">

                <div class="flex justify-between items-center">
                    <p class="text-gray-700 text-lg font-semibold">
                        €{{ number_format($car['price'], 0, ',', '.') }}
                    </p>
                    <a href="{{ route('contact') }}">
                        <button class="bg-yellow-100 border px-4 py-2 rounded hover:bg-yellow-200">
                            Bekijk details
                        </button>
                    </a>
                </div>
            </div>

        </li>
    @endforeach
</ul>

    </div>
</body>
</html>
