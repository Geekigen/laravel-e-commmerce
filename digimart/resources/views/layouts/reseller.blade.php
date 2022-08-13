@extends('layouts.app')
@section('content')

<section id="cart" >
    <table  class="table table-hover table-condensed">
<thead>
    <tr>
        <th style="width:10%">Laptop</th>
        <th style="width:50%">description</th>
        <th style="width:8%">Reseller price</th>
        <th style="width:22%" class="text-center">Order</th>
        <th style="width:10%"></th>
    </tr>
</thead>
<tbody>

            <tr>
                <td data-th="Product">

                </td>
                <td data-th="Price"></td>
                <td data-th="Quantity">
                </td>
                <td data-th="Subtotal" class="text-center"></td>
                <td class="actions" data-th="">

                </td>
            </tr>
</tbody>
<tfoot>
    <tr>
        <td colspan="5" class="text-right"><h3><strong></strong></h3></td>
    </tr>
    <tr>
        <td colspan="5" class="text-right">
            <h5>Digimart laptops
            </h5>

        </td>
    </tr>
</tfoot>
</table>

@endsection
