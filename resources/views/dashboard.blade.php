<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in! <b>{{ $user->name }}</b>,

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        <p>Today is: {{ date('Y/m/d')}}</p>
                        <p>{{ date('h:i:sa')}}</p>
                    </div>

                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    Your location is <b>{{ $user->location }}</b>,
                </div>

            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="container">
                        <ul id="city"></ul>
                    </div>

                </div>

            </div>
        </div>
    </div>

    {{-- {{        $cookie_name = $user->name;
        $cookie_value = $user->location;
        setcookie($cookie_name, $cookie_value, time() + 60000, '/dashboard');
    }} --}}

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', ()=>{
            console.log('v-js')
            const city = document.querySelector('#city')
            // debugger
            // const apiURL = `https://api.openweathermap.org/data/2.5/weather?q=${inputVal}&appid=${apiKey}&units=metric`;
            const apiURL = 'https://api.openweathermap.org/data/2.5/weather?q='+<?= '"'; ?>{{ $user->location }}<?= '"'; ?>+'&appid='+<?= '"'; ?>{{ env('WEATHER_API') }}<?= '"'; ?>+'&units=metric';

            let test = 'asd';
            fetch(apiURL)
                .then(response => response.json())
                .then(data => {
                    const { main, name, sys, weather } = data;
                    const icon = `https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/${
                        weather[0]["icon"]
                    }.svg`;
//  debugger
                    const div = document.createElement("div");
                    div.classList.add("city");
                    const markup = `
                        <h2 class="city-name">
                            <span>${name}</span>
                            <sup>${sys.country}</sup>
                        </h2>
                        <div class="city-temp">
                            ${Math.round(main.temp)}
                            <sup>°C</sup>
                        </div>
                        <figure>
                            <img class="city-icon" src="${icon}" alt="${weather[0]["description"]}">
                            <figcaption>${weather[0]["description"]}</figcaption>
                        </figure>
                    `;
                    div.innerHTML = markup;
                    city.appendChild(div);

                }).catch(() => { console.log('error in finding city')})
        })
    </script>
</x-app-layout>
