<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>
<title>Formulir Pendaftaran</title>
</head>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 items-center">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Formulir Pendaftaran</h2>
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-3" action="/form" method="POST">
            @csrf
            <div>
                <label for="text" class="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap</label>
                <div class="mt-2">
                    <input id="name" name="name" type="name" autocomplete="name" required
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Masukkan Nama Lengkap">
                </div>
            </div>
            <div>
                <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Jenis Kelamin</label>
                <div class="mt-2">
                    <select id="gender" name="gender" required
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>

            <div>
                <label for="text" class="block text-sm font-medium leading-6 text-gray-900">Usia</label>
                <div class="mt-2">
                    <input id="usia" name="usia" type="usia" autocomplete="usia" required
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Masukkan Usia anda">
                </div>
            </div>
            <div>
                <label for="text" class="block text-sm font-medium leading-6 text-gray-900">Semester</label>
                <div class="mt-2">
                    <input id="semester" name="semester" type="semester" autocomplete="semester" required
                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gra y-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Masukkan Semester anda ">
                </div>
            </div>
            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Pemberitahuan',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
        });
    @endif
    @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Pemberitahuan',
            text: '{{ session('error') }}',
            confirmButtonText: 'OK'
        });
    @endif
</script>
