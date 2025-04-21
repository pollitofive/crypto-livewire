<div class="col-lg-8" style="margin-top: 20px">
    <div class="card card-height-100">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Currencies</h4>
        </div><!-- end card header -->
        <div class="card-body ">
            <div class="table-responsive table-card">
                <table class="table table-hover table-borderless table-centered align-middle table-nowrap mb-0">
                    <thead class="text-muted bg-soft-light">
                    <tr>
                        <th>Coin Name</th>
                        <th>Price</th>
                        <th>24h Change</th>
                    </tr>
                    </thead><!-- end thead -->
                    <tbody wire:poll.10s="getCoins">
                    @foreach($data as $coin)
                        <tr>
                            <td>
                                <a wire:click="$dispatch('showCoin', { id : {{ $coin->coin->id }} })">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <img src="{{ $coin->coin->image }}" alt="" class="avatar-xxs">
                                        </div>
                                        <div>
                                            <h6 class="mb-0">{{ $coin->coin->name }}</h6>
                                        </div>
                                    </div>
                                </a>
                            </td>
                            <td>{{ $coin->current_price }}</td>
                            <td>
                                @if($coin->price_change_percentage_24h > 0)
                                    <h6 class="text-success mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>{{ $coin->price_change_percentage_24h }}</h6>
                                @else
                                    <h6 class="text-danger mb-0"><i class="mdi mdi-trending-down align-middle me-1"></i>{{ abs($coin->price_change_percentage_24h) }}</h6>
                                @endif
                            </td>
                        </tr><!-- end -->
                    @endforeach
                    </tbody><!-- end tbody -->
                </table><!-- end table -->
            </div><!-- end tbody -->
        </div><!-- end cardbody -->
    </div>
</div>

