<section id="page-section">
   <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
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
                            "title": "EUR to USD"
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
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->

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
                            <th>Logo</th>
                            <th>Symbol</th>
                            <th>High</th>
                            <th>Low</th>
                            <th>Last</th>
                            <th>Buy</th>
                            <th>Sell</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doublyLinkedList as $node)
                            <tr>
                                <td>
                                    @if (isset($node['ticker']['url_logo']))
                                        <img src="{{ $node['ticker']['url_logo'] }}" alt="Logo" width="50"
                                            height="50" />
                                    @else
                                        No Logo Available
                                    @endif
                                </td>

                                <td>{{ $node['symbol'] }}</td>
                                <td>{{ $node['ticker']['high'] }}</td>
                                <td>{{ $node['ticker']['low'] }}</td>
                                <td>{{ $node['ticker']['last'] }}</td>
                                <td>{{ $node['ticker']['buy'] }}</td>
                                <td>{{ $node['ticker']['sell'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</section>
