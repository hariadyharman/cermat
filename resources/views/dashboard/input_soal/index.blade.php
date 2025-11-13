@extends('dashboard.layouts.main')

@section('container')
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #d3d3d3;
            /* abu-abu untuk body */
        }

        /* Header biru gelap */
        #header {
            background-color: #002366;
            /* biru gelap */
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        /* Wrapper form horizontal */
        #formWrapper {
            display: flex;
            flex-wrap: nowrap;
            /* tetap di satu baris */
            gap: 15px;
            padding: 10px 0;
            overflow-x: auto;
            /* scroll horizontal jika layar sempit */
        }

        .form-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 80px;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            text-align: center;
        }

        input {
            width: 60px;
            padding: 5px;
            text-align: center;
        }

        #buttonContainer {
            margin-top: 10px;
            display: flex;
            gap: 10px;
        }

        #submitBtn,
        #downloadBtn {
            padding: 5px 10px;
            height: 40px;
        }

        #output {
            white-space: pre-wrap;
            font-weight: bold;
            margin-top: 20px;
        }

        /* Footer biru gelap */
        #footer {
            margin-top: 40px;
            padding: 15px 0;
            text-align: center;
            background-color: #002366;
            color: #fff;
            border-radius: 5px;
        }
    </style>

    <body>
        <!-- Header -->
        <div id="header">Form Input 10 Soal</div>

        <!-- Konten utama -->
        <div id="content" style="padding:20px;">
            <form id="formSoal" onsubmit="return false;">
                <div id="formWrapper"></div>
                <div id="buttonContainer">
                    <button id="submitBtn" onclick="prosesSemuaSoal()">Tampilkan Hasil JSON</button>
                    <button id="downloadBtn" onclick="downloadHasil()">Download TXT</button>
                </div>
            </form>

            <div id="output"></div>

            <!-- Footer -->
            <div id="footer">
                <p>&copy; 2025 Mando Ubuntu</p>
            </div>
        </div>

        <script>
            // Buat 10 input otomatis horizontal
            const formWrapper = document.getElementById("formWrapper");
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
                input.value = "";

                group.appendChild(label);
                group.appendChild(input);
                formWrapper.appendChild(group);
            }

            // Fungsi kombinasi unik 4 dari 5 karakter
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
                return Array.from(new Set(hasil)); // hapus duplikat
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
                document.getElementById("output").innerText = JSON.stringify(hasilGlobal);
            }

            function downloadHasil() {
                if (hasilGlobal.length === 0) {
                    alert("Silakan tampilkan hasil terlebih dahulu!");
                    return;
                }
                const textFileContent = JSON.stringify(hasilGlobal);
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
    </body>
@endsection
