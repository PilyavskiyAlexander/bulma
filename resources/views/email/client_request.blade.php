<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <h1>{{trans('translates.request')}}</h1>
    <p><b>{{trans('translates.product_name')}}:</b> {{$clientRequest->product_name}}</p>
    <p><b>{{trans('translates.quantity')}}:</b> {{$clientRequest->quantity}} {{trans('translates.'.$clientRequest->unit_type->name)}}</p>
    <p><b>{{trans('translates.email')}}:</b> {{$clientRequest->email}}</p>
    <p><b>{{trans('translates.phone')}}:</b> {{$clientRequest->phone}}</p>
    <p><b>{{trans('translates.comment')}}:</b> {{$clientRequest->comment}}</p>
</body>
</html>