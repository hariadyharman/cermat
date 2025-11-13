<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google AdSense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5048727285721326"
        crossorigin="anonymous"></script>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <!-- sCERMAT PUNYA -->
    <link rel="shortcut icon" type="img/png" href="../img/tribrata.png" />
    <title> Tes Kecermatan </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R8NDHE9GYH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-R8NDHE9GYH');
    </script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5048727285721326"
        crossorigin="anonymous"></script>

    <!-- bootstrap css -->

    <!-- tambahkan jQuery dulu kalau belum ada -->

    <link rel="stylesheet" href="../css_cermat/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="../css_cermat/style.css">
    <link rel="stylesheet" href="../css_cermat/app-questions.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../css_cermat/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="img/tribrata.png" type="image/png" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../css_cermat/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css_cermat/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="../css_cermat/ionicons.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
        rel="stylesheet">
    <link href="../Chartjs/Chart.css" rel="stylesheet">
    {{--  AKHIR CERMAT  --}}
</head>

<body class="main-layout">
    <!-- HEADER: MENU + HEROE SECTION -->
    <!-- header -->
    <header>
        <!-- header inner -->

        @include('dashboard.partials.navbar_cermat')


    </header>
    <!-- end header inner -->
    <!-- end header -->


    <!-- CONTENT -->
    @include('dashboard.partials.seksi')

    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
    <!--  footer -->

    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="cont">

                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p>©armando 2025 All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </footer>


    <!-- end footer -->

    {{--  AWAL JAVASCRIPT DIMULAI  --}}
    <!-- Javascript files-->
    <script src="../js_cermat/jquery.min.js"></script>
    <script src="../js_cermat/popper.min.js"></script>
    <script src="../js_cermat/bootstrap.bundle.min.js"></script>
    <script src="../js_cermat/jquery-3.0.0.min.js"></script>
    <script src="../js_cermat/plugin.js"></script>
    <!-- sidebar -->
    <script src="../js_cermat/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js_cermat/custom.js"></script>
    <script src="../js_cermat/jquery.fancybox.min.js"></script>
    {{-- <script src="../Chartjs/Chart.min.js"></script> --}}



    <script>
        var score = 0;
        var columnQuestionss, rowQuestions, setColumn, countdownTimer;
        var setIndex = {
            indexColumn: 0,
            indexRow: 0
        };
        var prevData = {
            dateTime: new Date().toLocaleString(),
            second: 60,
            column: 0,
            row: 0,
        };
        var answers = [];
        var seconds = 59;
        var defined_answer = {
            'A': 0,
            'B': 1,
            'C': 2,
            'D': 3,
            'E': 4
        };

        var column_answer = {
            0: 0,
            1: 0,
            2: 0,
            3: 0,
            4: 0,
            5: 0,
            6: 0,
            7: 0,
            8: 0,
            9: 0,
        };

        $(document).ready(function() {
            getSetQuestions();
            $("#main-test-opening").show();

            $("#show-main-test").on("click", function() {
                $("#main-test-opening").hide();
                $("#main-count-down").show();
                timerCountDown("1");
            })

            //* Set Questions *//

            prevData.second = seconds;
            prevData.column = setIndex.indexColumn;
            prevData.row = setIndex.indexRow;

            $(".table-questions tbody tr").on("click", "td", function() {
                switch (setIndex.indexColumn < columnQuestions.length) {
                    case true:
                        // DEFINE ANSWER -- UPDATED BY C
                        let data_q = rowQuestions[setIndex.indexColumn][setIndex.indexRow].split("")
                        let data_question = columnQuestions[setIndex.indexColumn].split("")
                        $.each(data_question, function(key, value) {
                            if (!data_q.includes(value)) {
                                theAnswer = key;
                            }
                        });
                        if (defined_answer[$(this).text()] == theAnswer) {
                            score++;
                            $('#skor').html(score)
                            column_answer[parseInt(setIndex.indexColumn)]++;
                        }
                        // END ANSWER -- UPDATED BY C
                        answers.push($(this).text())
                        prevData.column = setIndex.indexColumn;
                        prevData.row = setIndex.indexRow;
                        setIndex.indexRow++
                        if (setIndex.indexRow == rowQuestions[setIndex.indexColumn].length) {
                            setTest(prevData, "previous");
                            setIndex.indexColumn++;
                            clearInterval(countdownTimer);
                            if (setIndex.indexColumn == columnQuestions.length) {
                                setIndex.indexRow--;
                                setLoader("on-result");
                                setTimeout(function() {
                                    setLoader("off-result");
                                }, 1000);

                            } else {
                                setLoader("on");
                                seconds = 59;
                                timerCalc(60);
                                setIndex.indexRow = 0;
                            }
                        } else if (setIndex.indexRow < rowQuestions[setIndex.indexColumn].length) {
                            if (setIndex.indexColumn < columnQuestions.length) {
                                $('#table-row-question span').text(rowQuestions[setIndex.indexColumn][
                                    setIndex.indexRow
                                ]);
                            }
                        }
                        break;
                    case false:
                        clearInterval(countdownTimer);
                        setLoader("off-result");

                        break;
                }
            });

        })

        function timerCountDown(i) {
            var counter = 2;
            var interval = setInterval(function() {
                counter--;
                counter == 0 ? "" : $('#count-down-' + i).text(counter);
                if (counter == 0) {
                    clearInterval(interval);
                    if (i == "1") {
                        setTest(prevData, "current");
                        $("#main-count-down").hide();
                        $("#main-test-container").show();
                    } else if (i == "2") {
                        setTest(prevData, "current");
                        showModalRetest("hide");
                        seconds--
                    } else {
                        setTest(prevData, "current");
                        setLoader("off");
                    }
                    timerMainTest(); //active it
                }
            }, 1000);
        }

        function timerCalc(sec) {
            var minutes = Math.floor(sec / 60);
            var remainingSeconds = (sec) % 60;

            function pad(n) {
                return (n < 10 ? "0" + n : n);
            }

            $('#test-timer').text("00:" + pad(minutes) + ":" + pad(remainingSeconds));
        }

        function timerMainTest() {
            countdownTimer = setInterval(function() {
                var setSeconds;
                if (seconds < 0 && setIndex.indexColumn + 1 < columnQuestions.length) {
                    setSeconds = seconds + 61;
                } else if (seconds < 0 && setIndex.indexColumn + 1 == columnQuestions.length) {
                    setSeconds = 0;
                } else {
                    setSeconds = seconds;
                }

                timerCalc(setSeconds);

                if (seconds == -1 && setIndex.indexColumn + 1 < columnQuestions.length) {
                    setTest(prevData, "previous");
                    setIndex.indexColumn++;
                    setLoader("on");
                    clearInterval(countdownTimer);
                    setIndex.indexRow = 0;

                    seconds = 59;
                    timerCalc(60);
                } else if (seconds == -1 && setIndex.indexColumn + 1 == columnQuestions.length) {
                    clearInterval(countdownTimer);
                    setTest(prevData, "previous");
                    setLoader("on-result");
                    setTimeout(function() {
                        setLoader("off-result");
                    }, 1000);
                    setIndex.indexColumn++;
                    document.getElementById('test-timer').innerHTML = "Selesai";
                } else if (seconds > -1) {
                    seconds--;
                }
                prevData.column = setIndex.indexColumn;
                prevData.row = setIndex.indexRow;
            }, 1000)

        }

        function setTest(setData, userFor) {
            switch (userFor) {
                case "current":
                    $('#column-index').text('Kolom ' + (setIndex.indexColumn + 1));
                    setColumn = columnQuestions[setIndex.indexColumn].split("");
                    $.each(setColumn, function(key, value) {
                        key++;
                        $('#column-question-' + key + ' span').text(value);
                    });
                    $('#table-row-question span').text(rowQuestions[setIndex.indexColumn][setIndex.indexRow]);
                    break;

                case "previous":
                    $('#column-index').text('Kolom ' + (prevData.column + 1));
                    setColumn = columnQuestions[prevData.column].split("");
                    $.each(setColumn, function(key, value) {
                        key++;
                        $('#column-question-' + key + ' span').text(value);
                    });
                    $('#table-row-question span').text(rowQuestions[prevData.column][prevData.row]);
                    break;
            }

        }

        function showModalResult() {
            $("#result-score").html(score);
            // Object.keys(column_answer).forEach(key => {
            //   $("#skor-detail").append("<div class='row justify-content-center'><span class='col-lg-12 text-center text-light'>Skor kolom ke - "+parseInt(key)+1+" : "+isNaN(column_answer[key]) ? 0 : column_answer[key] +" </span></div>");
            // });
            // Object.entries(column_answer).forEach(([key, val]) => $("#skor-detail").append(
            //             `<div class='row justify-content-center'><span class='col-lg-12 text-center text-light'>Skor kolom ke - ${parseInt(key)+1} : ${isNaN(val) ? 0 : val} </span></div> ));
        // $("#skor-detail").append(``);
            $("#modal-result").modal('show');
            $('#modal-result').modal('handleUpdate');
            $('.modal-backdrop')
                .appendTo('#main-test-container');
            $('body').removeClass("modal-open");
            $('body').addClass(
                "test-kecermatan");
            $("body").css("padding-right", "unset");
            $("#modal-result").css(
                "padding-right", "unset");
        }

        function setLoader(toggle) {
            switch (toggle) {
                case "on":
                    $("#modal-loading").modal('show');
                    $('#modal-loading').modal('handleUpdate');
                    $('.modal-backdrop').appendTo('#main-test-container');
                    $('body').removeClass("modal-open");
                    $('body').addClass("test-kecermatan");
                    $("body").css("padding-right", "unset");
                    $('#main-test-container').addClass("show-op");

                    setTimeout(function() {
                        $("#modal-loading .modal-body").replaceWith(
                            "<div class='modal-body mt-5 mb-5'><h3>Persiapan</h3><h4 id='count-down-3'>3</h4></div>"
                        );
                        timerCountDown("3");
                    }, 1000);
                    break;

                case "on-result":
                    $("#modal-loading").modal('show');
                    $('#modal-loading').modal('handleUpdate');
                    $('.modal-backdrop').appendTo('#main-test-container');
                    $('body').removeClass("modal-open");
                    $('body').addClass("test-kecermatan");
                    $("body").css("padding-right", "unset");
                    $('#main-test-container').addClass("show-op");
                    break;

                case "off":
                    $("#modal-loading").modal('hide');
                    $('#modal-loading').on('hidden.bs.modal', function(event) {
                        $('body').removeClass("test-kecermatan");
                        $('#main-test-container').removeClass("show-op");
                        var newCont = "<div class='modal-body mt-3 mb-3'><div class='text-center'>" +
                            "<div class='spinner-border' role='status'>" +
                            "<span class='sr-only text-dark'>Loading...</span>" +
                            "</div>" +
                            "<h5 class='text-dark mt-2'>Loading...</h5>" +
                            "</div>" +
                            "</div>";
                        $("#modal-loading .modal-body").replaceWith(newCont);
                    })

                    break;

                case "off-result":
                    setTimeout(function() {
                        showModalResult();

                        $("#modal-loading").hide();
                        $('#modal-loading').on('hidden.bs.modal', function(event) {
                            $('body').removeClass("test-kecermatan");
                            $('#main-test-container').removeClass("show-op");
                        })

                    }, 500);
                    break;
            }

        }

        function getSetQuestions() {
            //* Set Questions *//
            @yield('container')

            dynamicNavIndex();
        }

        function dynamicNavIndex() {
            //* Set Nav Index
            $("#navbarsExample04").css("z-index", "1060");
        }
    </script>
    </script>
    {{--  AKHIR JAVASCRIPT  --}}


    // awal simpan

    <script>
        $(document).ready(function() {
            $("#btnSelesai").on("click", function(e) {
                e.preventDefault();

                $.ajax({
                    url: "{{ route('simpan.hasil') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        kol_1: column_answer[0] ?? 0,
                        kol_2: column_answer[1] ?? 0,
                        kol_3: column_answer[2] ?? 0,
                        kol_4: column_answer[3] ?? 0,
                        kol_5: column_answer[4] ?? 0,
                        kol_6: column_answer[5] ?? 0,
                        kol_7: column_answer[6] ?? 0,
                        kol_8: column_answer[7] ?? 0,
                        kol_9: column_answer[8] ?? 0,
                        kol_10: column_answer[9] ?? 0,
                        total_skor: score ?? 0
                    },
                    beforeSend: function() {
                        $("#btnSelesai").prop("disabled", true).text("⏳ Menyimpan...");
                    },
                    success: function(res) {
                        alert("✅ Hasil ujian berhasil disimpan!");
                        window.location.href = "{{ url('/dashboard/hasil') }}";
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        alert("❌ Gagal menyimpan hasil!");
                        $("#btnSelesai").prop("disabled", false).text("Selesai Ujian");
                    }
                });
            });
        });
    </script>


    // akhir dari simpan



</body>

</html>
