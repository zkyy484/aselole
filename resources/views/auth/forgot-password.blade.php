{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(90deg, #2c3e50, #bdc3c7);
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 500px;
            background: #fff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
/* 
        .container img {
            width: 180px;
            margin-bottom: 10px;
        } */

        .container h1 {
            font-size: 36px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .container p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .input-box {
            width: 430px;
            margin-bottom: 10px;
        }

        .input-box input {
            height: 45px;
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            outline: none;
            border: none;
            font-size: 14px;
            color: #333;
            background: #eee;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #7494ec;
            border-radius: 8px;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #5a78d4;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Forgot Password</h1>
        <p>Masukkan Email Anda</p>
        
        <!-- Menampilkan Status Session -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        
        <!-- Menampilkan Error -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="input-box">
                <input type="email" name="email" placeholder="Masukkan Email" required>
            </div>
            <button type="submit" class="btn">Lanjutkan</button>
        </form>
    </div>
</body>
</html>