@if ($errors->any() || session('error'))
    <div id="errorMessage" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Error:</strong>
        <span class="block sm:inline">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
            {{ session('error') }}
        </span>
        <span id="closeMessage" class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849c.78.78.78 2.048 0 2.828-.78.78-2.048.78-2.828 0l-2.82-2.82-2.828 2.82c-.78.78-2.048.78-2.828 0-.78-.78-.78-2.048 0-2.828l2.82-2.82-2.82-2.828c-.78-.78-.78-2.048 0-2.828.78-.78 2.048-.78 2.828 0l2.828 2.82 2.82-2.82c.78-.78 2.048-.78 2.828 0 .78.78.78 2.048 0 2.828l-2.82 2.82 2.82 2.828z"/></svg>
        </span>
    </div>
@endif

<script>
    document.getElementById('closeMessage').addEventListener('click', function() {
        document.getElementById('errorMessage').style.display = 'none';
    });
</script>


<div class="flex min-h-full flex-col lg:flex-row justify-center items-center px-2 lg:px-2">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-auto w-auto" src="logo.png" alt="Postcha">
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class=" text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
      <form class="space-y-6" action="/login" method="POST">
        @csrf
        <div>
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
          <div class="mt-2">
            <input name="loginname" type="text"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          </div>
          <div class="mt-2">
            <input  name="loginpassword" type="password"  autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
        </div>
      </form>
      <p class="mt-10 text-center text-sm text-gray-500">
        Don't have a registration?
        <a href="/registration" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register from here</a>
      </p>
    </div>
  </div>


 

