<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 - Page Not Found</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Background zoom animation */
        @keyframes bgZoom {
            0% {
                transform: scale(1) translate(0,0);
            }
            50% {
                transform: scale(1.1) translate(-2%, -2%);
            }
            100% {
                transform: scale(1) translate(0,0);
            }
        }

        /* floating animation */
        @keyframes float {
            0%,100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        /* glow animation */
        @keyframes glow {
            0%,100% { text-shadow: 0 0 10px #22c55e; }
            50% { text-shadow: 0 0 30px #22c55e; }
        }

        .bg-animated {
            position: fixed;
            inset: 0;
            background-image: url('https://www.shutterstock.com/image-photo/cms-content-management-system-conceptbusinessman-260nw-2327557505.jpg');
            background-size: cover;
            background-position: center;
            animation: bgZoom 20s ease-in-out infinite;
            z-index: -2;
        }

        /* dark overlay for readability */
        .overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.75);
            z-index: -1;
        }

        .float { animation: float 3s ease-in-out infinite; }
        .glow { animation: glow 2s ease-in-out infinite; }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center text-white">

    {{-- animated background --}}
    <div class="bg-animated"></div>

    {{-- dark overlay --}}
    <div class="overlay"></div>

    <div class="text-center px-6">

        {{-- 404 --}}
        <h1 class="text-9xl font-extrabold tracking-widest text-green-500 float glow">
            404
        </h1>

        <p class="text-2xl mt-6 font-semibold text-green-400">
            Oops! Page not found
        </p>

        <p class="opacity-80 mt-2">
            The page you are looking for doesn’t exist or has been moved.
        </p>

        {{-- buttons --}}
        <div class="mt-10 flex justify-center gap-4">

            <a href="{{ url('/') }}"
               class="px-7 py-3 bg-green-500 text-black rounded-xl font-semibold
                      hover:bg-green-400 hover:scale-105 transition duration-300">
                Go to Dashboard
            </a>

            <a href="{{ url('/') }}"
               class="px-7 py-3 border border-green-500 text-green-400 rounded-xl font-semibold
                      hover:bg-green-500 hover:text-black transition duration-300">
                Home
            </a>

        </div>

    </div>

</body>
</html>