{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --coklat-color : #40342A;
            --cream-color : #F2F0EB;
            --putih-color : #fff;
            --hitam-color : #000000;
        }
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
            background: linear-gradient(90deg, var(--coklat-color), var(--coklat-color));
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 500px;
            background: #fff;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .container img {
            width: 100px;
            margin-bottom: 12px;
        }

        .container h1 {
            font-size: 24px;
            margin-bottom: 12px;
            font-weight: 500;
            color: var(--coklat-color);
        }

        .container p {
            font-size: 14px;
            margin-bottom: 8px;
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
            margin-top: 6px;
            width: 100%;
            padding: 10px;
            background: var(--coklat-color);
            border-radius: 4px;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            width: 430px;
        }

        .btn-logout {
            width: 100%;
            padding: 10px;
            background: #fff;
            border-radius: 8px;
            border: none;
            color: var(--coklat-color);
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            width: 430px;
            margin-top: 2px;
        }

        .btn:hover {
            background: var(--coklat-color);
            font-weight: 600;
            color: var(--putih-color);
        }

        .btn-logout:hover {
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{asset ('3.png')}}" alt="Logo">
        <h1>Verifikasi Email</h1>
        <p>Terima kasih telah mendaftar! Sebelum memulai, silakan verifikasi email Anda dengan mengeklik tautan yang kami kirimkan.</p>

        @if (session('status') == 'verification-link-sent')
            <div class="alert">
                Email verifikasi baru telah dikirim ke alamat email Anda.
            </div>
        @endif

        <!-- Form untuk mengirim ulang email verifikasi -->
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn">Kirim Verifikasi Email</button>
        </form>

        <!-- Form untuk logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn-logout">Log Out</button>
        </form>
    </div>
</body>
</html>
