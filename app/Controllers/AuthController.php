<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    // Menampilkan halaman login
    public function login()
    {
        return view('login');
    }

    // Menampilkan halaman registrasi
    public function register()
    {
        return view('register');
    }

    // Memproses data registrasi
public function attemptRegister()
{
    $model = new \App\Models\UserModel();
    $data = [
        'username' => $this->request->getPost('username'),
        'password' => $this->request->getPost('password'),
        'role'     => 'user', // Setiap pendaftaran baru otomatis menjadi 'user'
    ];
    
    $model->save($data);

    return redirect()->to('/login')->with('success', 'Registrasi berhasil! Silakan login.');
}

    // Memproses data login
public function attemptLogin()
{
    $model = new \App\Models\UserModel();
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $user = $model->where('username', $username)->first();

    if ($user && password_verify($password, $user['password'])) {
        // Jika login berhasil, simpan data ke session
        session()->set([
            'username'   => $user['username'],
            'role'       => $user['role'],
            'isLoggedIn' => true
        ]);

        // Arahkan berdasarkan role
        if ($user['role'] === 'admin') {
            return redirect()->to('/admin');
        } else {
            return redirect()->to('/');
        }
    }

        // Jika gagal, kembali ke halaman login
        return redirect()->to('/login')->with('error', 'Username atau password salah!');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Anda telah berhasil logout.');
    }
}