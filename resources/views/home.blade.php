@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <section class="content">
        <div class="card card-secondary card-outline">
            <div class="card-header">
                <h3 class="card-title">Deskripsi Sistem Rentcar</h3>
            </div>
            <div class="card-body">
                JASAMEDIKA TRANSMEDIC PT<br />
                HRD <br />
                Tugas: Pembuatan Aplikasi Persewaan Mobil<br />
                Deskripsi:<br />
                Anda diminta untuk membuat sebuah aplikasi persewaan mobil menggunakan bahasa pemrograman sesuai deskripsi
                lowongan yang Anda pilih. Aplikasi ini akan memungkinkan pengguna untuk melakukan beberapa tugas dasar dalam
                manajemen persewaan mobil.
                <br />
                Fitur Aplikasi: <br />
                1. Registrasi Pengguna: <br />
                • Pengguna dapat mendaftar dengan mengisi informasi pribadi seperti nama, alamat, nomor telepon, dan nomor
                SIM. <br />
                • Informasi pengguna harus disimpan dan dapat diakses kembali. <br />
                2. Manajemen Mobil: <br />
                • Pengguna dapat menambahkan mobil baru ke dalam sistem dengan mengisi detail mobil seperti merek, model,
                nomor plat, dan tarif sewa per hari.<br />
                • Data mobil yang ditambahkan harus disimpan dalam sistem dan dapat diakses kembali.<br />
                • Pengguna dapat mencari mobil berdasarkan merek, model, atau ketersediaan.<br />
                • Pengguna dapat melihat daftar semua mobil yang tersedia untuk disewa.<br />
                3. Peminjaman Mobil:<br />
                • Pengguna dapat memesan mobil dengan memasukkan tanggal mulai dan tanggal selesai penyewaan, serta memilih
                mobil yang tersedia.<br />
                • Sistem harus memverifikasi ketersediaan mobil pada tanggal yang diminta.<br />
                • Data peminjaman harus disimpan dan dapat diakses kembali.<br />
                • Pengguna dapat melihat daftar mobil yang sedang mereka sewa.<br />
                4. Pengembalian Mobil:<br />
                • Pengguna dapat mengembalikan mobil yang telah mereka sewa dengan memasukkan nomor plat mobil.<br />
                • Sistem harus memverifikasi bahwa mobil tersebut benar-benar disewa oleh pengguna tersebut dan menghitung
                jumlah hari penyewaan.<br />
                • Data pengembalian harus disimpan dan dapat diakses kembali.<br />
                • Sistem harus menghitung jumlah biaya sewa berdasarkan tarif harian dan durasi sewa.<br />
                5. Keluar Aplikasi:<br />
                • Pengguna dapat keluar dari aplikasi & login lagi di lain waktu<br />
                Petunjuk Pengerjaan:<br />
                Pastikan Anda menggunakan konsep pemrograman yang relevan, seperti pemrosesan data, penggunaan struktur
                data, dan fungsi. Aplikasi harus memiliki antarmuka pengguna yang intuitif. Gunakan manajemen kesalahan
                untuk menangani situasi seperti mobil yang tidak tersedia atau pengguna yang tidak terdaftar. Anda dapat
                menyimpan data pengguna, mobil, peminjaman, dan pengembalian dalam file teks atau menggunakan database
                sederhana.<br />
                Anda dapat menyesuaikan persyaratan dan spesifikasi tersebut sesuai dengan kemampuan dan kebutuhan Anda.
                Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk bertanya!

            </div>
        </div>
    </section>
@endsection
