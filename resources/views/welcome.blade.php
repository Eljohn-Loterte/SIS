<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Student Information System</title>
    <link rel="icon" href="/src/assets/LOGO.png" type="image/png">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/e81754ee21.js" crossorigin="anonymous"></script>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="PreLoaderBar" class="fixed top-0 left-0 w-full h-1 bg-white z-[9999] overflow-hidden">
        <div class="absolute h-full bg-sky-500 animate-indeterminate"></div>
        <div class="absolute h-full bg-sky-500 animate-indeterminate-short"></div>
    </div>

    <div class="min-h-screen flex fle-col items-center justify-center py-6 px-4 bg-gradient-to-b from-blue-400 to-white">
      <div class="grid md:grid-cols-2 items-center gap-10 max-w-6xl max-md:max-w-md w-full">
        <div class="w-full h-full">
          <h2 class="lg:text-5xl text-3xl font-bold lg:leading-[56px] text-slate-900 text-center">
            Shaping Futures, <span class="text-white">Inspiring Minds.</span>
          </h2>
          <p class="text-sm mt-4 text-slate-500 leading-relaxed text-center">
            "Empowering students with knowledge, innovation, and opportunity to shape their futures while inspiring minds to dream, discover, and achieve."
          </p>
        </div>

        <div class="bg-white p-12 rounded-xl shadow-2xl">
            
          <form class="max-w-md md:mx-auto w-full" action="{{ url('/homepage') }}" method="POST">
            @csrf
            <h3 class="text-slate-900 lg:text-3xl text-2xl font-bold mb-8">
              Log In
            </h3>

            <div class="space-y-6">
              <div>
                <label class='text-sm text-slate-800 font-medium mb-2 block'>Email</label>
                <input name="email" type="email" class="bg-slate-100 w-full text-sm text-slate-800 px-4 py-3 rounded-md outline-none border focus:border-blue-600 focus:bg-transparent" placeholder="Enter Email" />
                @error('email')
                  <p class="text-red-400 text-md italic">{{ $message }}</p>
                @enderror
              </div>
              <div>
                <label class='text-sm text-slate-800 font-medium mb-2 block'>Password</label>
                <input name="password" type="password" class="bg-slate-100 w-full text-sm text-slate-800 px-4 py-3 rounded-md outline-none border focus:border-blue-600 focus:bg-transparent" placeholder="Enter Password" />
                @error('password')
                  <p class="text-red-400 text-md italic">{{ $message }}</p>
                @enderror
              </div>
              <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="text-sm">
                    <a href="jajvascript:void(0);" class="text-blue-600 hover:text-blue-500 font-medium">
                    Forgot your password?
                    </a>
                </div>
              </div>
            </div>

            <div class="!mt-8">
              <button type="submit" class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded cursor-pointer text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                Log in
              </button>
            </div>
          </form>

        </div>
      </div>
    </div>

</body>
</html>