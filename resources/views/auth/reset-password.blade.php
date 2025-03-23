{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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
        <h1>Reset Password</h1>
        <p>Perbarui password Anda</p>
        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <input type="hidden" name="token" value="{{ request()->route('token') }}">

            <div class="input-box">
                <input type="email" name="email" placeholder="Masukkan Email" value="{{ old('email', request()->email) }}" required autofocus>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="input-box">
                <input type="password" name="password" placeholder="Masukkan password baru" required>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="input-box">
                <input type="password" name="password_confirmation" placeholder="Konfirmasi password baru" required>
                @error('password_confirmation')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn">Reset Password</button>
        </form>
    </div>
</body>
</html>
