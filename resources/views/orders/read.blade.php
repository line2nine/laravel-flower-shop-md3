@foreach($noti as $key => $value)
    <a href="{{route('order.detail', $value->order_id)}}">
        <div class="media">
            <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
                <h6 class="mt-0 msg-title">Customer Order</h6>
                <p class="msg-info">New order pending</p>
            </div>
        </div>
    </a>
@endforeach
