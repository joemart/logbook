@vite(['resources/views/components/navbar/_navbar.scss'])

<nav class = "nav"> 
    <div class="search">
        <img class="magnifying_glass" src="{{asset('images/magnifying-glass.png')}}" alt="">
        <input class="input_dashboard" type="text" placeholder="Search Callsign or Name">
    </div>
    <div class="profile">
        <div x-data= "{count : 0}">
            <button x-on:click="count++">Increment</button>
            <span x-text="count"></span>
        </div>
    </div>
</nav>