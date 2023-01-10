<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-md-9">
            <a href="/tambah_detail">upload</a>
            <table style="overflow:hidden;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Preview Item</th>
                        <th>Price</th>
                        <th>Minimum Bid</th>
                        <th>Starting Date</th>
                        <th>Expiration Date</th>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                </thead>

                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $row)

                    <tr>
                        
                        <th scope="row">{{$no++}}</th>
                        <th>{{$row->preview_item}}</th>
                        <th>{{$row->price}}</th>
                        <th>{{$row->minimum_bid}}</th>
                        <th>{{$row->starting_date}}</th>
                        <th>{{$row->expiration_date}}</th>
                        <th>{{$row->title}}</th>
                        <th>{{$row->deskrpsi}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>