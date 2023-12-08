<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">

    <style type="text/css">

        .title {
            color:white;
            padding-top: 25px;
            font-size:25px;
        }

        label {
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('admin.css')
</head>

<body>

    <!-- partial -->

    @include('admin.sidebar')

    @include('admin.navbar')

    <!-- partial -->

    <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">

            <h1 class="title">Add Product</h1>



            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>

                    {{ session()->get('message') }}

                </div>
            @endif




            <form action="{{ url('updateproduct',$data->id) }}" method="post" enctype="multipart/form-data">

                @csrf

                <div style="padding:15px;">
                    <label>Product title</label>

                    <input style="color: black;" type="text" name="title" value="{{$data->title}}"
                        required="">
                </div>

                <div style="padding:15px;">
                    <label>Price</label>

                    <input style="color: black;" type="number" name="price" value="{{$data->price}}"
                        required="">
                </div>

                <div style="padding:15px;">
                    <label>Descrption</label>

                    <input style="color: black;" type="text" name="des" value="{{$data->description}}"
                        required="">
                </div>

                <div style="padding:15px;">
                    <label>Quantity</label>

                    <input style="color: black;" type="text" name="quantity" value="{{$data->quantity}}"
                        required="">
                </div>

                <div style="padding:15px;">
                    <label>Old Image</label>

                    <img height="100" width="100" src="/productimage/{{$data->image}}" alt="">
                </div>

                <div style="padding:15px;">

                    <label>Change the image</label>
                    <input type="file" name="file">
                </div>

                <div class="btn btn-success" style="padding:15px;">
                    <input type="submit">
                </div>

            </form>

        </div>

    </div>



    <!-- partial -->

    @include('admin.script')

</body>

</html>
