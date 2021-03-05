<html>

<head>
    <title>Tutorial Cara Membuat Script PHP Menghitung Jarak</title>
    <style type="text/css">
        #hasil {
            width: 500px;
            margin: 0 auto;
            padding: 5px;
            font-weight: bold;
            color: #f00;
        }

        body {
            padding: 0;
            margin: 0;
            font-family: arial;
            font-size: 12px;
        }

        #main-wrapper {
            border: 3px double #faa800;
            padding: 5px;
            width: 550px;
            margin: 20px auto 0;
        }

        #main {
            text-align: left;
            padding: 5px;
            background: #e8eef0;
        }

        table {
            font-size: 12px;
            width: 450px;
        }

        #prn {
            border: 1px solid #b3ccf7;
            background: #c3d9ff;
            cursor: pointer;
            padding: 2px 24px;
        }

        h1 {
            font-size: 18px;
            font-weight: bold;
            padding: 10px 0;
            text-align: center;
        }

        #efri {
            font-size: 11px;
            padding: 5px 0 0;
            color: #0000ff;
            text-align: center;
        }

        red {
            font-weight: bold;
            color: #f00;
        }
    </style>
</head>

<body>
    <div id="main-wrapper">
        <div id="main">
            <h1>Hitung Jarak Tempuh dengan PHP</h1>
            <br />
            <form method="POST" action="">
                <table>
                    <tr>
                        <td>Kecepatan Rata-rata</td>
                        <td><input type="text" name="kecepatan" required /></td>
                    </tr>
                    <tr>
                        <td>Waktu Tempuh (Jam)</td>
                        <td><input type="text" name="waktu" required /></td>
                    </tr>
                    <tr>
                        <td>
                            <label><br><br>
                                <input type="submit" name="Submit" value="Hitung" id="prn">
                            </label>
                            <label>
                                <input type="reset" name="reset" value="Batal" id="prn">
                            </label>
                            <label>
                                <a href="./">Hitung Ulang</a>
                            </label>
                        </td>
                        <td></td>
                    </tr>
                </table>
            </form>
            <div id="hasil">
                <!-- Letakan coding php hitung jarak disini -->
                <?php
                error_reporting(E_ALL ^ E_NOTICE);
                $kecepatan    = $_POST['kecepatan'];
                $waktu        = $_POST['waktu'];

                $jarak        = $kecepatan * $waktu;
                echo 'Jarak tempuh dalam waktu ';
                echo $waktu;
                echo ' jam ';
                echo ' adalah <u>';
                echo number_format($jarak, 0, ",", ".");
                echo ' KM</u>';
                ?>
            </div>
        </div>
    </div>
</body>

</html>