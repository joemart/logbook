@vite(['resources/views/components/navbar/_navbar.scss'])

<nav x-data :class = "$store.darkMode.on ? 'dark' : ''" class = "nav"> 
    <div class="search">
        <img class="magnifying_glass" src="{{asset('images/magnifying-glass.png')}}" alt="">
        <input class="input_dashboard" type="text" placeholder="Search Callsign or Name">
    </div>
    <div x-data="{popup: false, 
    profile : ['contact', 'about', 'settings']}" 
    class="profile">
        
            <button x-text="$store.darkMode.on ? 'dark' : 'light'" @click="$store.darkMode.toggle()"></button>
            <div>notifications</div>
            <button @click = "popup = !popup">
                <img class="profile" src="{{asset('images/profile.png')}}" >
                
            </button>
            <div x-show="popup" class="profile_popup">
                <template x-for="p in profile">
                    <li x-text="p"></li>
                </template>
            </div>
            

    </div>
</nav>