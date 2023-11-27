<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>My Crypto App</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

</head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">My Crypto App</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">View Market</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> --}}
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Bangun Masa Depan Mulai Sekarang!</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">"Selamat datang di dunia finansial masa depan! Temukan potensi tak terbatas dengan berbagai instrumen, dari crypto hingga forex, di dashboard kami."</p>
                    <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Lihatlah Dunia Lebih Jauh</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">"Bukan hanya aset digital, tapi revolusi keuangan yang mengubah cara
                        kita memandang nilai. Selamat datang di era kripto!"</p>
                    <a class="btn btn-light btn-xl" href="#services">Mulai</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">At Your Service</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-sm text-center">
                    <!-- Menambahkan class text-center untuk membuat tulisan berada di tengah -->
                    <div class="mt">
                        <div class="mb-2"><i class="bi bi-currency-bitcoin fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Bitcoin</h3>
                        <p class="text-muted mb-0">"Dibalik kodifikasi kompleksnya, Bitcoin adalah simbol kesederhanaan
                            revolusi keuangan. Satu mata uang untuk mengubah semuanya."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio-->
    <section id="page-section">

        <div class="container">
            <div class="embed-responsive embed-responsive-16by9">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container embed-responsive-item">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright">
                        <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank">
                            <span class="blue-text">Track all markets on TradingView</span>
                        </a>
                    </div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-stock-heatmap.js" async>
                        {
                            "exchanges": [],
                            "dataSource": "SPX500",
                            "grouping": "sector",
                            "blockSize": "market_cap_basic",
                            "blockColor": "change",
                            "locale": "en",
                            "symbolUrl": "",
                            "colorTheme": "light",
                            "hasTopBar": false,
                            "isDataSetEnabled": false,
                            "isZoomEnabled": true,
                            "hasSymbolTooltip": true,
                            "width": 1300,
                            "height": 1000
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
        </div>
    </section>
    <!-- Call to action-->
    <section class="page-section bg-dark text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">Free Download at Google</h2>
            <a class="btn btn-light btn-xl" href="https://indodax.com">Download Now!</a>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section">
        <div class="container">
            <!-- Widget TradingView -->
            <div class="tradingview-widget-container">
                <div id="tradingview_042a7" style="height: 500px"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                    new TradingView.widget({
                        autosize: true,
                        symbol: "NASDAQ:AAPL",
                        interval: "D",
                        timezone: "Etc/UTC",
                        theme: "light",
                        style: "1",
                        locale: "en",
                        enable_publishing: false,
                        allow_symbol_change: true,
                        container_id: "tradingview_042a7",
                    });
                </script>
            </div>

            <!-- Tabel Responsif -->
            <div class="table-responsive" id="tabel">
                <table class="table table-striped" id="tickerTable">
                    <thead>
                        <tr>
                            <th>Symbol</th>
                            <th>High</th>
                            <th>Low</th>
                            <th>Last</th>
                            <th>Buy</th>
                            <th>Sell</th>
                            <th>Logo</th>
                            <!-- Add the Logo column -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($binaryTree->inOrderTraversal() as $node)
                            <tr>
                                <td>
                                    @if (isset($node->ticker['url_logo']))
                                        <img src="{{ $node->ticker['url_logo'] }}" alt="Logo" width="50"
                                            height="50" />
                                    @else
                                        No Logo Available
                                    @endif
                                </td>
                                <td>{{ $node->symbol }}</td>
                                <td>{{ $node->ticker['high'] }}</td>
                                <td>{{ $node->ticker['low'] }}</td>
                                <td>{{ $node->ticker['last'] }}</td>
                                <td>{{ $node->ticker['buy'] }}</td>
                                <td>{{ $node->ticker['sell'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2023 - MyCrytoApp</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


    <script>
        $(document).ready(function() {
            // Memuat data ke dalam tabel
            var binaryTree = new BinaryTree();
            var rows = $("#tickerTable tbody tr");
            rows.each(function() {
                var symbol = $(this).find("td:nth-child(2)").text();
                binaryTree.insert(symbol, this);
            });
            $("#tickerTable tbody").empty();
            var sortedRows = binaryTree.inOrderTraversal();
            $("#tickerTable tbody").append(sortedRows);

            // Inisialisasi DataTables setelah memuat data
            $("#tickerTable").DataTable();
        });

        function BinaryTree() {
            this.root = null;
        }

        BinaryTree.prototype.insert = function(key, value) {
            var newNode = {
                key: key,
                value: value,
                left: null,
                right: null
            };
            if (this.root === null) {
                this.root = newNode;
            } else {
                this.insertNode(this.root, newNode);
            }
        };

        BinaryTree.prototype.insertNode = function(node, newNode) {
            if (newNode.key < node.key) {
                if (node.left === null) {
                    node.left = newNode;
                } else {
                    this.insertNode(node.left, newNode);
                }
            } else {
                if (node.right === null) {
                    node.right = newNode;
                } else {
                    this.insertNode(node.right, newNode);
                }
            }
        };

        BinaryTree.prototype.inOrderTraversal = function() {
            var result = [];

            function traverse(node) {
                if (node !== null) {
                    traverse(node.left);
                    result.push(node.value);
                    traverse(node.right);
                }
            }
            traverse(this.root);
            return result;
        };
    </script>
</body>

</html>
