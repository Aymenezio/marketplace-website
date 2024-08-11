<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
      <nav class="fixed top-0 left-0 right-0 bg-white border-gray-200 py-2.5 dark:bg-gray-900 z-50">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
            <a href="#" class="flex items-center">
                <img src="{{ asset('images/ayvente.png') }}" class="h-10 mr-3 sm:h-9" alt="ayvente Logo">
            </a>
            <div class="flex items-center lg:order-2">
                <div class="hidden mt-2 mr-4 sm:inline-block">
                    <span></span>
                </div>
                  <!-- dropdown button-->
                <div>
                  <button class="rounded-full w-10 h-10 bg-violet-600 hover:bg-gradient-to-r from-purple-600 to-indigo-600" onclick="dropdownmenu()" id="dropdownButton"><i class="fa-solid fa-user text-white text-2xl"></i></button>
               </div>

                <button data-collapse-toggle="mobile-menu-2" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="mobile-menu-2" aria-expanded="true">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
            </div>
            <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{route('welcome')}}"
                            class="block py-2 pl-3 pr-4 text-white bg-purple-700 rounded lg:bg-transparent lg:text-purple-700 lg:p-0 dark:text-white"
                            aria-current="page"><i class="fa-solid fa-house pr-1"></i>Home</a>
                    </li>
                    
                    <li>
                        <a href="{{route('items.index')}}"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"><i class="fa-solid fa-store pr-1"></i>Marketplace</a>
                    </li>
                    <li>
                        <a href=""
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"><i class="fa-solid fa-comment pr-1"></i>Chat</a>
                    </li>
                    
                    <li>
                        <a href="{{route('items.create')}}"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"><i class="fa-solid fa-plus pr-1"></i>Add Product</a>
                    </li>
                    <li>
                        <a href="{{ route('profile.edit') }}"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"><i class="fa-solid fa-user pr-1"></i>Profile</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"><i class="fa-solid fa-address-card pr-1"></i>About</a>
                    </li>
                </ul>
            </div>
        </div>
    
    
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
            
                        
                        <!-- dropdown menu-->
                        <div class="absolute right-0 z-10 mt-2 w-52 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden mr-5" id="dropdownMenu">
                            <div class="py-1" role="none">
                              <a href="{{route('login')}}" class="text-gray-700 block px-4 py-2 text- hover:bg-gradient-to-r from-purple-600 to-indigo-600 hover:text-slate-50">Login</a>
                              <a href="{{route('register')}}" class="text-gray-700 block px-4 py-2 text- hover:bg-gradient-to-r from-purple-600 to-indigo-600 hover:text-slate-50">Register</a>
                              <a href="{{route('register')}}" class="text-gray-700 block px-4 py-2 text- hover:bg-gradient-to-r from-purple-600 to-indigo-600 hover:text-slate-50">Profile</a>
                              <form method="POST" action="#" role="none">
                                <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm hover:bg-gradient-to-r from-purple-600 to-indigo-600 hover:text-slate-50" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                              </form>
                            </div>
                          </div>
                    </li>
                </ul>
            </div>
        </nav>
        
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="flex flex-col space-y-10 justify-center p-5 bg-gray-900">

      <nav class="flex justify-center flex-wrap gap-6 text-gray-500 font-medium">
          <a class="text-gray-300 hover:text-white" href="#">Home</a>
          <a class="text-gray-300 hover:text-white" href="#">About</a>
          <a class="text-gray-300 hover:text-white" href="#">Media</a>
          <a class="text-gray-300 hover:text-white" href="#">Contact</a>
      </nav>
  
      <div class="flex justify-center space-x-5">
          <a href="https://facebook.com" target="_blank" rel="noopener noreferrer">
              <img src="https://img.icons8.com/fluent/30/000000/facebook-new.png" />
          </a>
          <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer">
              <img src="https://img.icons8.com/fluent/30/000000/linkedin-2.png" />
          </a>
          <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">
              <img src="https://img.icons8.com/fluent/30/000000/instagram-new.png" />
          </a>
          <a href="https://messenger.com" target="_blank" rel="noopener noreferrer">
              <img src="https://img.icons8.com/fluent/30/000000/facebook-messenger--v2.png" />
          </a>
          <a href="https://twitter.com" target="_blank" rel="noopener noreferrer">
              <img src="https://img.icons8.com/fluent/30/000000/twitter.png" />
          </a>
      </div>
      <p class="text-center text-gray-300 font-medium">&copy; 2024 ayvente. All rights reservered.</p>
      <div class="border-b border-gray-600"></div>
  </footer>
    @yield('scripts')
</body>
</html>