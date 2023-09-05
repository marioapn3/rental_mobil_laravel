<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('user/img/logo1_green.png') }}">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/style.css') }}">

    <title>Tambah Mobil</title>
    <style>
        .form-group {
            margin-bottom: 1rem;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: 1px solid #ccc;
            margin-bottom: 0.5rem;
        }

        input[type="file"] {
            width: 100%;
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: 1px solid #ccc;
            margin-bottom: 0.5rem;
        }

        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 0.5rem;
            border-radius: 0.25rem;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0069d9;
        }
    </style>
</head>

<body>
    <x-sidebar-admin />
    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Tambah Mobil</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="{{ route('dashboard_car') }}">Mobil</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Table Add Car</h3>

                </div>
                <form role="form" method="post" action="{{ route('store_car') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Seri Mobil : </label><br>
                        <input class="form-control" type="text"name="name" /><br>
                        <label>Brand : </label><br>
                        <div class="custom-select" style="width:200px;">
                            <select style="font-size: 18px ; padding: 6px 5px; margin: 5px 0px" name="brand"
                                id="" class="form-control">
                                <option value="Toyota">Toyota</option>
                                <option value="Mitshubishi">Mitshubishi</option>
                                <option value="Honda">Honda</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Izuzu">Izuzu</option>
                                <option value="Daihatsu">Daihatsu </option>
                                <option value="Chevrolet">Chevrolet</option>
                            </select><br>
                        </div>
                        {{-- <input class="form-control" type="text"name="brand" /><br> --}}
                        <label>Warna : </label><br>
                        {{-- <input class="form-control" type="text"name="colour" /><br> --}}
                        <div class="custom-select" style="width:200px;">
                            <select style="font-size: 18px ; padding: 6px 5px; margin: 5px 0px" name="colour"
                                id="" class="form-control">
                                <option value="Merah">Merah</option>
                                <option value="Hitam">Hitam</option>
                                <option value="Putih">Putih</option>
                                <option value="Biru">Biru</option>
                                <option value="Gold">Gold </option>
                                <option value="Silver">Silver</option>
                            </select><br>
                        </div>
                        <label>Plat Nomor : </label><br>
                        <input class="form-control" type="text"name="plat_num" /><br>
                        <label>Kapasitas Penumpang : </label><br>
                        <input class="form-control"type="number" name="capacity" /><br>
                        <label>Fuel : </label><br>
                        <input class="form-control" type="text"name="fuel" /><br>
                        <label>Harga/Hari : </label><br>
                        <input class="form-control"type="number" name="price" /><br>
                        <input type="file" name="car_img"><br>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </main>
    <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="{{ asset('admin/assets/script.js') }}"></script>
</body>

</html>
