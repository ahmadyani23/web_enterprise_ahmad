<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function index()
    {
        return view('hubungikami');
    }

    public function submit(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'perusahaan' => 'nullable|string|max:255',
            'telepon' => 'nullable|string|max:20',
            'pesan' => 'required|string|min:10',
            'g-recaptcha-response' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'pesan.required' => 'Pesan wajib diisi',
            'pesan.min' => 'Pesan minimal 10 karakter',
            'g-recaptcha-response.required' => 'Silakan verifikasi bahwa Anda bukan robot',
        ]);

        // Verifikasi reCAPTCHA
        $response = Http::asForm()
            ->withoutVerifying()
            ->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => config('services.recaptcha.secret_key'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]);

        $recaptchaResult = $response->json();

        if (!$recaptchaResult['success']) {
            return back()
                ->withInput()
                ->withErrors(['g-recaptcha-response' => 'Verifikasi reCAPTCHA gagal. Silakan coba lagi.']);
        }

        // Proses data (simpan ke database atau kirim email)
        // Contoh: simpan ke database
        // Contact::create($validated);

        return back()->with('success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}