<div id="tab1" class="tab-pane fade active in">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.customer') }}
                                        </th>
                                        <td>
                                            {{ $item->user_id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.total') }}
                                        </th>
                                        <td>
                                            ${{ number_format($item->total, 2) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.payment_type_id') }}
                                        </th>
                                        <td>
                                            {{ $item->payment_type_id }}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tab2" class="tab-pane fade">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.country_id') }}
                                        </th>
                                        <td>
                                            {{ $item->country_id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.state_id') }}
                                        </th>
                                        <td>
                                            {{ $item->state_id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.city_id') }}
                                        </th>
                                        <td>
                                            {{ $item->city_id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.municipality') }}
                                        </th>
                                        <td>
                                            {{ $item->municipality }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.colony') }}
                                        </th>
                                        <td>
                                            {{ $item->colony }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.street') }}
                                        </th>
                                        <td>
                                            {{ $item->street }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.no_ext') }}
                                        </th>
                                        <td>
                                            {{ $item->no_ext }}
                                        </td>
                                    </tr>
                                    @if($item->no_int != '' && $item->no_int != null)
                                        <tr>
                                            <th>
                                                {{ trans('validation.attributes.no_int') }}
                                            </th>
                                            <td>
                                                {{ $item->no_int }}
                                            </td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <th>
                                            {{ trans('validation.attributes.postal_code') }}
                                        </th>
                                        <td>
                                            {{ $item->postal_code }}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tab3" class="tab-pane fade">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                {{ trans('validation.attributes.name') }}
                                            </th>
                                            <th class="text-right">
                                                {{ trans('validation.attributes.price') }}
                                            </th>
                                            <th class="text-right">
                                                {{ trans('validation.attributes.quantity') }}
                                            </th>
                                            <th class="text-right">
                                                {{ trans('validation.attributes.subtotal') }}
                                            </th>
                                            <th class="text-center">
                                                {{ trans('validation.attributes.status_id') }}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach($products as $product)
                                            <tr>
                                                <td>
                                                    {{ $product->product_id }}
                                                </td>
                                                <td class="text-right">
                                                    ${{ number_format($product->price, 2) }}
                                                </td>
                                                <td class="text-right">
                                                    {{ $product->quantity }}
                                                </td>
                                                <td class="text-right">
                                                    ${{ number_format($product->price * $product->quantity, 2) }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $product->sale_status_id }}
                                                </td>
                                            </tr>
                                            @php
                                                $total += $product->price * $product->quantity;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="3" class="text-right">
                                                {{ trans('validation.attributes.total') }}:
                                            </th>
                                            <th class="text-right">
                                                ${{ number_format($total, 2) }}
                                            </th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
