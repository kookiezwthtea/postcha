
<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="logo-icon.png" class="h-8" alt="Postcha Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Postcha</span>
    </a>
    <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse z-50">
        <div x-data="{ open: false }" @click.away="open = false" class="relative">
            <!-- Dropdown button -->
            <button  @click="open=!open" type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <span alt="user">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-8 h-8">
                      <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                    </svg>  
              </span>     
              </button>
            <!-- Dropdown menu -->
            <div x-show="open" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="py-1" role="none">
                        <span class="block px-4 py-2  hover:bg-gray-100 text-md  text-blue-700 font-bold">{{auth()->user()->name}}</span>
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 w-full text-left" role="menuitem">Log out</button>
                          </form>
                </div>
            </div>
        </div>
        <div x-data="{ open: false }" @click.away="open = false" class="relative">
            <!-- Dropdown button -->
            <button @click="open=!open" data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
              </span>     
              </button>
            <!-- Dropdown menu -->
            <div x-show="open" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="py-1" role="none">
                    <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">My Posts</a>
                    <a href="/create-post" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Create a New Post</a>
                    <a href="/discover" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Discover</a>
                </div>
            </div>
        </div>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="/" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">My Posts</a>
        </li>
        <li>
          <a href="/create-post" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Create a New Post</a>
        </li>
        <li>
            <a href="/discover"class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" >Discover</a>
          </li>
      </ul>
    </div>
</div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x"></script>  
  </nav>


  