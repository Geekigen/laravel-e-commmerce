

          @extends('layouts.app')
          @section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="/blog/create">Write Blog</a>
      <a class="nav-item nav-link" href="/outlaw/create">New Product</a>
      <a class="nav-item nav-link " href="#"></a>
    </div>
  </div>
</nav>
          <div class="account">
         <div id="page-wrapper">
          <div class="graphs">


    <div class="content_bottom">
     <div class="col-md-8 span_3">
		  <div class="bs-example1" data-example-id="contextual-table">
              <h4>Products You listed</h4>

               <table class="table">
		      <thead>
		        <tr>
		          <th>Product Name</th>
		          <th>Product Description</th>
		          <th>Edit product</th>
                  <th>Delete Product</th>

		        </tr>
		      </thead>
              @foreach ($stocks as $stock )
		      <tbody>

  <tr class="active">
      <td>{{ $stock->product_name }}</td>
		          <td>{{ $stock->description }}</td>
		          <td>


                    <button><a href="outlaw/{{ $stock->id }}/edit" class="btn btn-info">Edit</a></button>
                  </td>
		          <td>

                    <form action ="" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" value="Delete"><i class="far fa-trash-alt"></i></button>
                           </form>
                  </td>
		        </tr>
@endforeach
		      </tbody>
		    </table>


		   </div>
	   </div>
       <div class="col-md-4 span_4">

        <table class="table">
            <h4>Orders</h4>
            <thead>
              <tr>
                <th>Customer's details</th>
                <th>order-detailled</th>
                <th>Date of order</th>
              </tr>
            </thead>
            @foreach ($orders as $orders )


            <tbody>

<tr class="active">
                <td> <br>
                    {{ $orders->client_mail }} <br>
                 {{ $orders->phone_number }}<br>
                    {{ $orders->client_name }}<br>
                </td>
                <td>
                    <button><a href="order/{{ $orders->id }}" class="btn btn-info">view order</a></button>
                </td>
                <td>
                    {{ date('d-m-y',strtotime($orders->created_at)) }}

                </td>
              </tr>

            </tbody>
            @endforeach
          </table>
       </div>

      <!-- /#page-wrapper -->
   </div>

          @endsection
