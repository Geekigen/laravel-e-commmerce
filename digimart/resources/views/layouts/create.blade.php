@extends('layouts.app')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">New Item</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="/blog/create">Write Blog</a>
        <a class="nav-item nav-link" href="/outlaw/create">New Product</a>
        <a class="nav-item nav-link " href="/admin">Admin Panel</a>
      </div>
    </div>
  </nav>
<div class="wrap">
    <h5 class="text-center mb-4">Add New Products</h5>
    <div class="login-bghny p-md-5 p-4 mx-auto mw-100 text-center d-flex justify-content-center"  >
        <!--/login-form-->
        <div> @foreach ($errors->all() as $error )

            <ul>

                   {{ $error}}

            </ul>

    @endforeach
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif</div>
        <form action="/digimart" method="POST"  enctype="multipart/form-data"  >
            @csrf

            <div class="form-group"  style="  border: 2px solid #21ad44;" >
                <label for="image" class="btn"><i class="fas fa-camera">Select 4 images</i></label>

                <input class="form-control" name="image[]" id="image" type="file"  multiple="multiple" value="{{ old('image[]') }}">



            </div>

            <div class="form-group"  style="  border: 2px solid #21ad44;">
                <i class="fas fa-tag"></i>
                <input class="form-control" type="text" placeholder="Product Name" name="product_name" value="{{ old('product_name') }}" />

            </div>

            <div class="form-group"  style="  border: 2px solid #21ad44;">
                <i class="fas fa-info"> Extra Product-info</i>
                <textarea class="form-control"  name="description" value="product_details" rows="3"   value="{{ old('description') }}" >

                </textarea>
            </div>

            <div class="form-group"  style="  border: 2px solid #21ad44;">
                <i class="fas fa-money-bill-wave-alt" aria-hidden="true"></i>
                <input class="form-control" type="text" placeholder="price (only in number e.g 100)" name="price"  value="{{ old('price') }}"/>

            </div>
            <div class="form-group"  style="  border: 2px solid #21ad44;">
                <i class="fas fa-sitemap">Brand</i>
                <select class="form-control" name="brand" id="brand"  value="{{ old('brand') }}" >
                    <option value="Apple">Apple</option>
                    <option value="lenovo">lenovo</option>
                    <option value="Dell">Dell</option>
                    <option value="HP">HP</option>
                    <option value="Toshiba">Toshiba</option>
                    <option value="Samsung">Samsung</option>
                    <option value="Taifa">Taifa</option>
                    <option value="Other">Other</option>

                </select>

            </div>
            <div class="form-group"  style="  border: 2px solid #21ad44;">
                <i class="fas fa-sitemap">Caegory</i>
                <select class="form-control" name="category" id="brand"  value="{{ old('category') }}" >
                    <option value="laptops">Laptops</option>
                    <option value="laptop bags">laptop bags</option>
                    <option value="memory cards">memory cards</option>
                    <option value="chargers">chargers</option>
                    <option value="gaming">gaming</option>
                    <option value="miscallenous">miscallenous</option>


                </select>

            </div>
            <div class="form-group"  style="  border: 2px solid #21ad44;">
                <i class="fas fa-line-height"></i>
                <input class="form-control" type="text" placeholder="Processor e.g corei5" name="processor"  value="{{ old('quantity') }}" />


            </div>
            <div class="form-group"  style="  border: 2px solid #21ad44;">
                <i class="fas fa-line-height"></i>
                <input class="form-control" type="text" placeholder="speed" name="speed"  value="{{ old('quantity') }}" />


            </div>

                <button style=" border-radius: 35px;
                border: 2px solid #dd2a0b;
                padding: 20px; " type="submit" class="submit-login btn mb-4">submit</button>
        </form>
        <!--//login-form-->
    </div>
    <!---->
</div>
@endsection
