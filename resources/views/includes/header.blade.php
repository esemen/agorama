<header class="fixed top-0 inset-x-0 bg-gray-900 bg-opacity-95 z-50">
    <div class="text-white px-4 md:px-8">
        <nav class="h-16 flex justify-between items-center font-logo" x-data="{showMenu: false}">
            <a href="/" class="text-3xl md:text-4xl font-bold">NONEMU</a>
            <ul class="hidden md:flex items-center text-base xl:text-lg tracking-wide space-x-8">
                <li><a href="{{ route('index') }}">Home</a></li>
                {{--                <li><a href="#">About</a></li>--}}
                {{--                <li><a href="#">Concept</a></li>--}}
                <li><a href="{{ route('menu') }}">Menu</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('order') }}" target="_blank"
                       class="px-4 py-2 bg-green-600 rounded-lg whitespace-nowrap">Order Now</a></li>
            </ul>
            <div class="md:hidden">
                <button @click="showMenu = !showMenu">
                    <i class="text-xl fa fa-bars"></i>
                </button>
                <div class="absolute left-0 right-0 top-16 bg-gray-900 bg-opacity-80 px-4 py-2" x-show="showMenu"
                     @click.outside="showMenu=false">
                    <ul class="flex flex-col divide-y leading-10">
                        <li><a class="py-2 block" href="{{ route('index') }}">Home</a></li>
                        {{--                        <li><a href="#">About</a></li>--}}
                        <li><a class="py-2 block" href="{{ route('menu') }}">Menu</a></li>
                        <li><a class="py-2 block" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                    <a class="py-2 block text-center bg-green-600 rounded-lg " href="{{ route('order') }}">Order Now</a>
                </div>
            </div>
        </nav>
    </div>
</header>
