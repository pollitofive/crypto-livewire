<div class="col-lg-4" style="margin-top: 20px">
    <div class="card card-height-100">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1"><img src="{{ $coin->image }}" alt="" class="avatar-xxs"> {{ $coin->name }}</h4>
        </div><!-- end card header -->
        <div class="card-body">
            <div class="table-responsive table-card">
                <table class="table align-middle table-borderless table-centered table-nowrap mb-0">
                    <thead class="text-muted table-light">
                    <tr>
                        <th scope="col" style="width: 62;">Property</th>
                        <th scope="col">Value</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Symbol</td>
                        <td>{{ $coin->symbol }}</td>
                    </tr><!-- end -->
                    <tr>
                        <td>Market Cap Rank</td>
                        <td>{{ $coin->coinxbatch->market_cap_rank }}</td>
                    </tr><!-- end -->
                    <tr>
                        <td>Current Price</td>
                        <td>USD {{ $coin->coinxbatch->current_price }}</td>
                    </tr><!-- end -->
                    <tr>
                        <td>Market Cap</td>
                        <td>USD {{ $coin->coinxbatch->market_cap }}</td>
                    </tr><!-- end -->
                    <tr>
                        <td>High 24h</td>
                        <td>USD {{ $coin->coinxbatch->high_24h }}</td>
                    </tr><!-- end -->
                    <tr>
                        <td>Low 24h</td>
                        <td>USD {{ $coin->coinxbatch->low_24h }}</td>
                    </tr><!-- end -->
                    <tr>
                        <td>Price change 24h</td>
                        <td>
                        @if($coin->coinxbatch->price_change_24h > 0)
                            <span class="badge bg-success">USD {{ $coin->coinxbatch->price_change_24h }}</span>
                        @else
                            <span class="badge bg-danger">USD {{ $coin->coinxbatch->price_change_24h }}</span>
                        @endif
                        </td>
                    </tr><!-- end -->
                    <tr>
                        <td>Price change percentage 24h</td>
                        <td>
                        @if($coin->coinxbatch->price_change_percentage_24h > 0)
                            <span class="badge bg-success">{{ $coin->coinxbatch->price_change_percentage_24h }}%</span>
                        @else
                            <span class="badge bg-danger">{{ $coin->coinxbatch->price_change_percentage_24h }}%</span>
                        @endif
                    </td>
                    </tr><!-- end -->
                    </tbody><!-- end tbody -->
                </table><!-- end table -->
            </div><!-- end -->
        </div><!-- end cardbody -->
    </div><!-- end card -->
</div>
