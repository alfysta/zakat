<html>
    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Laporan Sistem Informasi Zakat Fitrah</title>
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <meta name="description" content="">
  <meta name="keywords" content="">
    <style>
        .a4-page {
            width: 215mm;
            height: auto;
            margin: 10px auto;
            padding: 10mm;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            background-color: #ffffff;
            border: 1px solid #ddd;
            page-break-after: always;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 10px;
            font-family: 'Arial', serif;
            background: white;
            margin: 0;
            box-shadow: 0;
        }
        h1, p {
            margin: 0 0 5px;
        }

        table {
            
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-size: 12px;
        }
        td {
            font-size: 11px;

        }


    </style>
</head>
<body>
    <div class="a4-page">
        <h2>Laporan Penerimaan Zakat Fitrah</h2>
        <h3>Masjid Hidayaturrahman Desa Mulyoharjo</h3>
        <hr>

        <table>

    <table style="overflow-x:auto; margin-left: auto; margin-right: auto;">
        <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Tanggal</th>
                <th rowspan="2">Nama</th>
                <th rowspan="2">Jumlah Jiwa</th>
                <th colspan="2">Bayar Dengan</th>
                <th rowspan="2">Jumlah Infaq</th>
                <th colspan="2">Jumlah Sedekah</th>
                <th rowspan="2">Ket</th>
            </tr>
            <tr>
                <th>Beras</th>
                <th>Uang</th>
                <th>Beras</th>
                <th>Uang</th>
            </tr>
            </thead>
            <tbody>
                @foreach($zakat as $item)
                <tr>
                    <td style="text-align: center;">{{$loop->iteration}}</td>
                    <td style="text-align: center;">{{$item->created_at->format('d-m-Y')}}</td>
                    <td>{{strtoupper($item->nama)}}</td>
                    <td style="text-align: center;">{{$item->jiwa}} Orang</td>
                    <td style="text-align: center;">{{$item->bayar == 'beras' ? $item->beras . ' Kg' : '-'}}</td>
                    <td style="text-align: right;">{{$item->bayar == 'uang' ? number_format($item->uang) : '-'}}</td>
                    <td style="text-align: right;">{{number_format($item->infaq)}}</td>
                    <td style="text-align: center;">{{$item->bayar == 'beras' ? $item->sedekah. ' Kg' : '-'}}</td>
                    <td style="text-align: right;">{{$item->bayar == 'uang' ? number_format($item->sedekah) : '-'}}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
            <thead>
                <tr>
                    <th colspan="3">Jumlah</th>
                    <th>{{$jiwa}} Orang</th>
                    <th>{{$beras}} Kg</th>
                    <th>{{number_format($uang)}}</th>
                    <th style="text-align: right;">{{number_format($infaq)}}</th>
                    <th>{{$sedekah_beras}} Kg</th>
                    <th>{{number_format($sedekah_uang)}}</th>
                    <th></th>
                </tr>
            </thead>
        </table>


        <div style="margin-top: 40px; margin-left: 400px;">
        Moilong, {{now()->format('d F Y')}}
            <div>
                Ketua Panitia Zakat Fitrah,
            </div>
            <div style="margin-top: 40px;">
                Amak Subaidi
            </div>
        </div>
        
        
    </div>

</body>
</html>