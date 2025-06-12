<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\MaxCharacters;

class FooterRequest extends FormRequest
{
    /**
     * Tentukan apakah user berhak melakukan request ini.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Aturan validasi untuk request ini.
     *
     * @return array
     */
    public function rules()
    {
        if (in_array($this->method(), ['POST', 'PUT'])) {
            return [
                'youtube'   => ['required'],
                'instagram' => ['required'],
                'twitter'   => ['required'],
                'facebook'  => ['required'],
                'logo'      => ['image', 'max:1024'],
                'whatsapp'  => ['required', 'numeric'],
                'telp'      => ['required', 'numeric'],
                'email'     => ['required', 'email'],
                'desc'      => [new MaxCharacters(200), 'required'],
            ];
        }

        return [];
    }

    /**
     * Pesan kustom untuk validasi.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'youtube.required'      => 'Akun YouTube tidak boleh kosong.',
            'instagram.required'    => 'Akun Instagram tidak boleh kosong.',
            'twitter.required'      => 'Akun Twitter tidak boleh kosong.',
            'facebook.required'     => 'Akun Facebook tidak boleh kosong.',
            'logo.required'         => 'Logo sekolah tidak boleh kosong.',
            'logo.image'            => 'File logo yang dimasukkan tidak valid.',
            'logo.max'              => 'Ukuran file logo maksimal 1MB.',
            'whatsapp.required'     => 'Nomor WhatsApp tidak boleh kosong.',
            'whatsapp.numeric'      => 'Nomor WhatsApp harus berupa angka.',
            'telp.required'         => 'Nomor telepon tidak boleh kosong.',
            'telp.numeric'          => 'Nomor telepon harus berupa angka.',
            'email.required'        => 'Email tidak boleh kosong.',
            'email.email'           => 'Format email tidak valid.',
            'desc.required'         => 'Deskripsi sekolah tidak boleh kosong.',
        ];
    }
}
