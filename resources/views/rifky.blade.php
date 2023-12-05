@extends('layouts.myapp')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8 col-md-12">

                <div class="row mb-3">
                    <div class="container">
                        <div class="card card-custom" style="border-radius: 17px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-1">
                                        <div class="card card-transparant">
                                            <h1><i class="bi bi-safe2-fill" style="font-size: 50px;"></i></h1>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-transparant">
                                            <h5>Stock Price</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                                                tincidunt felis enim,
                                                sed commodo ante mollis ac. Quisque ornare enim nec urna bibendum
                                                varius.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-custom mb-3" style="border-radius: 20px; height: 500px;">
                    <div class="card-body">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container navbar-desktop">
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-stock-heatmap.js" async>
                                {
                                    "exchanges": [
                                        "IDX"
                                    ],
                                    "dataSource": "AllID",
                                    "grouping": "sector",
                                    "blockSize": "market_cap_basic",
                                    "blockColor": "change",
                                    "locale": "id",
                                    "symbolUrl": "",
                                    "colorTheme": "light",
                                    "hasTopBar": false,
                                    "isDataSetEnabled": false,
                                    "isZoomEnabled": true,
                                    "hasSymbolTooltip": true,
                                    "width": "100%",
                                    "height": "100%"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                        <div class="table-responsive">
                            <table class="table">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container Widget navbar-mobile">
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-stock-heatmap.js" async>
                                        {
                                            "exchanges": [
                                                "IDX"
                                            ],
                                            "dataSource": "IDX30",
                                            "grouping": "no_group",
                                            "blockSize": "market_cap_basic",
                                            "blockColor": "change",
                                            "locale": "id",
                                            "symbolUrl": "",
                                            "colorTheme": "light",
                                            "hasTopBar": false,
                                            "isDataSetEnabled": true,
                                            "isZoomEnabled": true,
                                            "hasSymbolTooltip": true,
                                            "width": 500,
                                            "height": 450
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end col-kanan -->

            <!-- start-col-kiri -->
            <div class="col-lg-4 col-md-12">

                <div class="row mb-3">
                    <div class="container">
                        <div class="card card-custom" style="border-radius: 17px; height: 330px;">
                            <div class="card-header" style="background-color: transparent;">
                                <h4>Top Price</h4>
                            </div>
                            <div class="card-body scroll">
                                <div class="table-responsive">
                                    <table class="table">
                                        <div class="card mb-3">
                                            <br>
                                            <br>
                                        </div>
                                        <div class="card mb-3">
                                            <br>
                                            <br>
                                        </div>
                                        <div class="card mb-3">
                                            <br>
                                            <br>
                                        </div>
                                        <div class="card mb-3">
                                            <br>
                                            <br>
                                        </div>
                                        <div class="card mb-3">
                                            <br>
                                            <br>
                                        </div>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="card-footer" style="background-color: transparent;">
                                <form action="" method="">
                                    <div class="row mt-2 mb-2">
                                        <div class="col-lg-9 col-md-9">
                                            <div class="card" style="border: none;">
                                                <div class="form-floating">
                                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                                    <label for="floatingTextarea">Chat</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3  col-md-3">
                                            <div class="card" style="border: none ;">
                                                <button class="btn btn-secondary" style="height: 55px;"><i
                                                        class="bi bi-send-fill"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="container">
                        <div class="card card-custom" style="border-radius: 17px; height: 296px;">
                            <div class="card-body">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
                                        {
                                            "width": "100%",
                                            "height": "100%",
                                            "colorTheme": "light",
                                            "isTransparent": true,
                                            "locale": "id",
                                            "importanceFilter": "0,1",
                                            "currencyFilter": "USD,EUR,ITL,NZD,CHF,AUD,FRF,JPY,ZAR,TRL,CAD,DEM,MXN,ESP,GBP"
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="card card-custom mb-3" style="border-radius: 20px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="Table" class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" colspan="2">Nama Perusahaan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Mata Uang</th>
                                <th scope="col">Harga tertinggi</th>
                                <th scope="col">Harga terendah</th>
                                <th scope="col">Waktu Trade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($sahamData as $result) :
                                $symbol = $result['kode'];
                                $name = $result['nama'];
                                $logo = $result['logo'];
                                $harga = $result['harga'];
                                $high = "";
                                $low = "";
                                $tgl = $result['tradetime'];
                                $cur = $result['currency'];
                            ?>
                            <tr>
                                <th scope="row"><a type="button" class="none-text" href="" data-bs-toggle="modal"
                                        data-bs-target="#<?= $symbol ?>"><?= $symbol ?></a>
                                </th>
                                <td><a type="button" class="none-text" href="" data-bs-toggle="modal"
                                        data-bs-target="#<?= $symbol ?>"><img src="<?= $logo ?>"
                                            class="img-thumbnail img-fluid" alt="<?php echo $symbol; ?>" height="80"
                                            width="80"></a></td>
                                <td><a type="button" class="none-text" href="" data-bs-toggle="modal"
                                        data-bs-target="#<?= $symbol ?>"><?= $name ?></a></td>
                                <td><?= $harga ?></td>
                                <td><?= $cur ?></td>
                                <td><?= $high ?></td>
                                <td><?= $low ?></td>
                                <td><?= $tgl ?></td>

                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="<?= $symbol ?>" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel"><?= $name ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <?= $symbol ?>
                                        </div>
                                        {{-- <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Understood</button>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
