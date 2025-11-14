<!-- Versi Blade UI modern dengan warna indah, tombol acak ulang, dan layout elegan -->
@extends('dashboard.layouts.main')

@section('container')
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #0a0f1f;
            color: #fff;
        }

        /* HEADER NEON */
        #header {
            background: #000;
            color: #0ff;
            padding: 25px;
            text-align: center;
            font-size: 28px;
            font-weight: 700;
            border-bottom: 2px solid #0ff;
            text-shadow: 0 0 10px #0ff, 0 0 20px #00eaff;
            box-shadow: 0 0 25px #00eaff;
        }

        #content {
            padding: 25px;
        }

        /* Card neon input */
        #formWrapper {
            display: flex;
            flex-wrap: nowrap;
            gap: 20px;
            overflow-x: auto;
            padding: 15px;
        }

        .form-group {
            background: rgba(0, 0, 0, 0.6);
            padding: 14px;
            border-radius: 12px;
            min-width: 90px;
            text-align: center;
            border: 2px solid #0ff;
            box-shadow: 0 0 12px #00eaff;
            transition: 0.25s;
        }

        .form-group:hover {
            transform: translateY(-4px);
            box-shadow: 0 0 20px #0ff, 0 0 30px #00eaff;
        }

        label {
            font-weight: 600;
            margin-bottom: 6px;
            color: #0ff;
            text-shadow: 0 0 6px #0ff;
        }

        input {
            width: 70px;
            padding: 6px;
            text-align: center;
            border: 2px solid #0ff;
            border-radius: 8px;
            background: #000;
            color: #0ff;
            font-size: 16px;
            font-weight: bold;
            box-shadow: 0 0 10px #00eaff;
        }

        /* Tombol neon */
        #buttonContainer {
            margin-top: 20px;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        button {
            padding: 10px 22px;
            border-radius: 10px;
            border: 2px solid #0ff;
            background: #000;
            color: #0ff;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            text-shadow: 0 0 8px #0ff;
            box-shadow: 0 0 12px #00eaff;
            transition: 0.25s;
        }

        button:hover {
            color: #000;
            background: #0ff;
            box-shadow: 0 0 25px #00eaff, 0 0 35px #0ff;
            text-shadow: none;
        }

        /* Output neon */
        #output {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 12px;
            margin-top: 25px;
            box-shadow: 0 0 25px #00eaff;
            border: 2px solid #0ff;
            color: #0ff;
            white-space: pre-wrap;
            font-size: 15px;
        }

        /* Footer neon */
        #footer {
            margin-top: 40px;
            padding: 18px 0;
            text-align: center;
            background: #000;
            color: #0ff;
            border-top: 2px solid #0ff;
            border-radius: 12px;
            box-shadow: 0 0 20px #0ff;
            font-weight: 700;
            text-shadow: 0 0 10px #00eaff;
        }

        /* Animasi glow berdenyut */
        @keyframes neonPulse {
            0% {
                box-shadow: 0 0 8px #00eaff, 0 0 16px #0ff;
            }

            50% {
                box-shadow: 0 0 18px #00eaff, 0 0 32px #0ff;
            }

            100% {
                box-shadow: 0 0 8px #00eaff, 0 0 16px #0ff;
            }
        }

        @keyframes textGlow {
            0% {
                text-shadow: 0 0 6px #0ff, 0 0 12px #00eaff;
            }

            50% {
                text-shadow: 0 0 14px #0ff, 0 0 26px #00eaff;
            }

            100% {
                text-shadow: 0 0 6px #0ff, 0 0 12px #00eaff;
            }
        }

        /* Terapkan animasi */
        #header,
        #footer {
            animation: neonPulse 2.4s infinite ease-in-out;
        }

        label,
        button,
        #output {
            animation: textGlow 2.8s infinite ease-in-out;
        }
    </style>

    <div id="header">Form Input 10 Soal </div>

    <div id="content">
        <form id="formSoal" onsubmit="return false;">
            <div id="formWrapper"></div>

            <div id="buttonContainer">
                <button id="submitBtn" onclick="prosesSemuaSoal()">Tampilkan JSON</button>
                <button id="acakBtn" onclick="acakSemua()">Acak Ulang</button>
                <button id="downloadBtn" onclick="downloadHasil()">Download TXT</button>
            </div>
        </form>

        <div id="output"></div>

        <div id="footer">© 2025 @mando ubuntu</div>
    </div>

    <script>
        const formWrapper = document.getElementById("formWrapper");

        // Generate 10 input otomatis
        for (let i = 1; i <= 10; i++) {
            const group = document.createElement("div");
            group.className = "form-group";

            const label = document.createElement("label");
            label.innerText = `Soal ${i}:`;

            const input = document.createElement("input");
            input.type = "text";
            input.maxLength = 5;
            input.required = true;
            input.id = `soal${i}`;

            group.appendChild(label);
            group.appendChild(input);
            formWrapper.appendChild(group);
        }

        // Fungsi random shuffle
        function shuffle(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
            return array;
        }

        // Kombinasi acak 4 dari 5 karakter
        function kombinasiUnik(input) {
            const chars = input.split("");
            const hasil = [];

            for (let i = 0; i < chars.length; i++) {
                for (let j = 0; j < chars.length; j++) {
                    for (let k = 0; k < chars.length; k++) {
                        for (let l = 0; l < chars.length; l++) {
                            if (i !== j && i !== k && i !== l && j !== k && j !== l && k !== l) {
                                hasil.push(chars[i] + chars[j] + chars[k] + chars[l]);
                            }
                        }
                    }
                }
            }

            const unik = Array.from(new Set(hasil));
            return shuffle(unik);
        }

        let hasilGlobal = [];

        function prosesSemuaSoal() {
            const semuaHasil = [];

            for (let i = 1; i <= 10; i++) {
                const input = document.getElementById(`soal${i}`).value;
                if (input.length !== 5) {
                    alert(`Soal ${i} harus berisi tepat 5 karakter!`);
                    return;
                }
                semuaHasil.push(kombinasiUnik(input));
            }

            hasilGlobal = semuaHasil;
            document.getElementById("output").innerText = JSON.stringify(hasilGlobal, null, 2);
        }

        // Tombol Acak Ulang
        function acakSemua() {
            if (hasilGlobal.length === 0) {
                alert("Silakan tampilkan hasil JSON terlebih dahulu!");
                return;
            }

            hasilGlobal = hasilGlobal.map(list => shuffle(list));
            document.getElementById("output").innerText = JSON.stringify(hasilGlobal, null, 2);
        }

        function downloadHasil() {
            if (hasilGlobal.length === 0) {
                alert("Silakan tampilkan hasil terlebih dahulu!");
                return;
            }

            const textFileContent = JSON.stringify(hasilGlobal, null, 2);
            const blob = new Blob([textFileContent], {
                type: "text/plain"
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement("a");
            a.href = url;
            a.download = "hasil_kombinasi.txt";
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        }
    </script>
@endsection
