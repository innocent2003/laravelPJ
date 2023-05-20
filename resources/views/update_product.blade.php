<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="/admin/product_update/{{$products->id}}" method="post" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
 <input type="text" name="name" placeholder="input name" value="{{$products->name}}"><br>

<input type="number" name="price" id="" placeholder="input price" value="{{$products->price}}"><br>
<textarea name="description" id="" cols="30" rows="10" value="{{$products->description}}">input description</textarea>
<input type="file" name="image1"  id="" value="{{$products->photo1}}">
<input type="file" name="image2" id="" value="{{$products->photo2}}">
<input type="file" name="image3" id="" value="{{$products->photo3}}">
<input type="file" name="image4" id="" value="{{$products->photo4}}">
@foreach($categories as $item)
   <br> <input type="radio" name="category_id" id="" value="{{$item->id}}"><span>{{$item->name}}</span><br>
@endforeach
<button type="submit">Update</button>
 </form>
</body>
</html>