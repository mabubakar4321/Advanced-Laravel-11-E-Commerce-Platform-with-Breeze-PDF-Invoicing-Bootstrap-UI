<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            color: #333;
        }
        h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 10px;
        }
        p {
            margin: 5px 0;
            font-size: 16px;
        }
        img {
            margin-top: 15px;
            max-width: 300px;
            border: 1px solid #ccc;
            padding: 5px;
        }
    </style>
</head>
<body>
   <div>
    <h1>Customer Name: {{$order->name}}</h1>
    <p>Customer Address: {{$order->address}}</p>
    <p>Customer Phone: {{$order->phone}}</p>
    <p>Product Title: {{$order->product->title}}</p>
    <h1>Customer Price: {{$order->product->price}}</h1>
    <p>Product Image:</p>
   <img src="{{ public_path('postimage/'.$order->product->image) }}" alt="">

   </div>
</body>
</html>
