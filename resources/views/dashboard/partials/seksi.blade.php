<section class="banner_main main-trial-test blue-bg">
    <div class="container" id="main-test-opening">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h3 class="text-white"> Simulasi Tes Kecermatan</h3>
                <button type="button" class="btn btn-success font-weight-bold mt-3" id="show-main-test">
                    Mulai Simulasi Tes Kecermatan
                </button>
            </div>
        </div>
    </div>

    <div class="container mt-5" id="main-count-down">
        <div class="row justify-content-center">
            <div class="col-md-3 text-center">
                <div class="container-fuild pt-3 pb-0 mt-5">
                    <h3 class="row justify-content-center text-white">Persiapan</h3>
                    <h4 class="row justify-content-center text-white">00:0<span id="count-down-1">2</span></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="main-test-container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-1"></div>
            <div class="col-md-2" style="margin:auto; padding-top:10px;">
                <h3>Durasi: </h3>
            </div>
            <div class="col-md-8">
                <h3 style="font-size:2rem; padding-left:14%;"><span class="test-timer font-weight"
                        id="test-timer">Selesai</span></h3>
            </div>
            <div class="col-md-1" style="padding-top:10px;">
                <!-- <h3>
                    Skor <span id="skor">0</span>
                </h3> -->
            </div>
        </div>
        <div class="row d-flex justify-content-center ">
            <div class="col-lg-9 col-md-9">
                <table class="table table-bordered table-column-questions">
                    <thead>
                        <tr>
                            <th scope="col" colspan="5" class="text-center">
                                <span id="column-index"> - </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="q_index text-center pt-0 pb-1 pl-1 pr-1" id="column-question-1"><span> - </span>
                            </th>
                            <th class="q_index text-center pt-0 pb-1 pl-1 pr-1" id="column-question-2"><span> - </span>
                            </th>
                            <th class="q_index text-center pt-0 pb-1 pl-1 pr-1" id="column-question-3"><span> - </span>
                            </th>
                            <th class="q_index text-center pt-0 pb-1 pl-1 pr-1" id="column-question-4"><span> - </span>
                            </th>
                            <th class="q_index text-center pt-0 pb-1 pl-1 pr-1" id="column-question-5"><span> - </span>
                            </th>
                        </tr>
                        <tr>
                            <td class="text-center pt-0 pb-0"><span>A</span></td>
                            <td class="text-center pt-0 pb-0"><span>B</span></td>
                            <td class="text-center pt-0 pb-0"><span>C</span></td>
                            <td class="text-center pt-0 pb-0"><span>D</span></td>
                            <td class="text-center pt-0 pb-0"><span>E</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row d-flex justify-content-center ">
            <div class="col-lg-3 col-md-3 col-mb-24">
                <table class="table table-bordered table-questions">
                    <thead>
                        <tr>
                            <th scope="col" colspan="5" class="text-center pt-0 pb-0 pl-0 pr-0"
                                id="table-row-question"><span> - </span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center pt-0 pb-0 row-answer" id="a"><span>A</span></td>
                            <td class="text-center pt-0 pb-0 row-answer" id="b"><span>B</span></td>
                            <td class="text-center pt-0 pb-0 row-answer" id="c"><span>C</span></td>
                            <td class="text-center pt-0 pb-0 row-answer" id="d"><span>D</span></td>
                            <td class="text-center pt-0 pb-0 row-answer" id="e"><span>E</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 col-md-6"></div>
        </div>
        <div class="modal fade" id="modal-result" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="modal-result-label" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-fluid" id="skor-detail">
                            <div class="success-icon text-center mt-1 mb-1">
                                <i class="fa-4x far fa-user-clock text-warning fs-1"></i>
                            </div>

                            <h3 class="modal-title text-center mb-3 text-light">Simulasi Tes Selesai</h3>

                            <!-- ✅ Tempat total skor -->
                            <div class="row justify-content-center">
                                <h4 class="col-lg-8 text-center text-light">
                                    TOTAL SKOR ANDA :
                                    <span id="result-score" class="text-warning"></span>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-center">
                        <a href="http://mando_site.test/dashboard">
                            <button id="btnSelesai" type="button"
                                class="btn btn-secondary font-weight-bold">Tutup</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="modal-loading" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="modal-loading-lable" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content text-center">
                <div class="modal-body mt-3 mb-3">
                    <div class="text-center">
                        <div class="spinner-border" role="status">
                            <span class="sr-only text-dark">Loading...</span>
                        </div>
                        <h5 class="text-dark mt-2">Loading...</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
