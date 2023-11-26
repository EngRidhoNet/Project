<!DOCTYPE html>
<html>

<head>
    <title>MyCryptoPrice</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">MyCryptoPrice</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- TradingView Widget BEGIN -->
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
            "symbols": [{
                    "proName": "FOREXCOM:SPXUSD",
                    "title": "S&P 500"
                },
                {
                    "proName": "FOREXCOM:NSXUSD",
                    "title": "US 100"
                },
                {
                    "proName": "FX_IDC:EURUSD",
                    "title": "EUR ke USD"
                },
                {
                    "proName": "BITSTAMP:BTCUSD",
                    "title": "Bitcoin"
                },
                {
                    "proName": "BITSTAMP:ETHUSD",
                    "title": "Ethereum"
                }
            ],
            "showSymbolLogo": true,
            "colorTheme": "light",
            "isTransparent": false,
            "displayMode": "adaptive",
            "locale": "id"
        }
    </script>
    <!-- TradingView Widget END -->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Crypto</div>
            <div class="masthead-heading text-uppercase"></div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
        </div>
    </header>
    <div class="container">
        <div class="row widget-table-container">
            <!-- Widget TradingView -->
            <div class="tradingview-widget-container">
                <div id="tradingview_042a7" style="height: 500px;"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                    new TradingView.widget({
                        "autosize": true,
                        "symbol": "NASDAQ:AAPL",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "light",
                        "style": "1",
                        "locale": "en",
                        "enable_publishing": false,
                        "allow_symbol_change": true,
                        "container_id": "tradingview_042a7"
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
                            <th>Logo</th> <!-- Add the Logo column -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($binaryTree->inOrderTraversal() as $node)
                            <tr>
                                <td>
                                    @if (isset($node->ticker['url_logo']))
                                        <img src="{{ $node->ticker['url_logo'] }}" alt="Logo" width="50"
                                            height="50">
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
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     $('#tickerTable').DataTable();
        // });
        // // JavaScript for sorting all fields
        // function sortAllFields(order) {
        //     const table = $('#tickerTable').DataTable();
        //     table.order([
        //         [0, order]
        //     ]).draw();
        // }
        $(document).ready(function() {
            var binaryTree = new BinaryTree();
            var rows = $('#tickerTable tbody tr');
            rows.each(function() {
                var symbol = $(this).find('td:first-child').text();
                binaryTree.insert(symbol, this);
            });
            $('#tickerTable tbody').empty();
            var sortedRows = binaryTree.inOrderTraversal();
            $('#tickerTable tbody').append(sortedRows);
            $('#tickerTable').DataTable();
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
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Make The World Bright</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                        <h4>Ridho Aulia Rahman</h4>
                        <p class="text-muted">Lead Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="www.instagram.com/ridho_a.rahman
"
                            aria-label="Parveen Anand Whatsapp Profile"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://wa.me/6288803289799
"
                            aria-label="Parveen Anand Instagram Profile"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2"
                            href="https://www.linkedin.com/in/ridho-aulia-rahman-68a9a6247"
                            aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                        <h4>Rifky Aryo Prasetyo</h4>
                        <p class="text-muted">Lead Designer & CEO</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://wa.me/6285842157401"><i
                                class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-dark btn-social mx-2"
                            href="www.instagram.com/ardhanhau_
"aria-label="Diana Petersen Whatsapp Profile"
                            aria-label="Diana Petersen Instagram Profile"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2"
                            href="https://www.linkedin.com/in/fairuz-ardhan-haunan-aa822224b/a"
                            aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                        <h4>Lalu Egiq</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <a class="btn btn-dark btn-social mx-2" href="https://wa.me/6289619573741"
                            aria-label="Larry Parker Whatsapp Profile"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-dark btn-social mx-2"
                            href="https://instagram.com/alhubul.ar?igshid=MzNlNGNkZWQ4Mg"
                            aria-label="Larry Parker Instagram Profile"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2"
                            href="https://www.linkedin.com/in/alhubul-austad-ramadan-415981224"
                            aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">"What we experience for the sake of friends is sometimes tiring and upsetting, but that's what makes friendship have a beauty value."</p></div>
                </div> --}}
        </div>
    </section>
</body>

</html>
