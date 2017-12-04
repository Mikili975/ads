@extends ('layouts.master')

@section ('title')

    Create ad

@endsection

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <p>Create ad</p>

    <form action="/ads/store" method="post"  class="form-signin">

        {{ csrf_field() }}

        <label for="inputTitle" class="sr-only">Title</label>
        <input type="text" name="title" id="inputTitle" class="form-control" placeholder="Title" >

        <label for="inputBody" class="sr-only">Body</label>
        <input type="text" name="body" id="inputTitle" class="form-control" placeholder="Body" >

        <select name="categoryId">

            @foreach($categories as $category)

                <option value={{$category->id}}>{{$category->name}}</option>

            @endforeach

        </select>

        <label for="inputPrice" class="sr-only">Price</label>
        <input type="text" name="price" id="inputTitle" class="form-control" placeholder="Price" >

        <button class="btn btn-lg btn-primary btn-block" type="submit">Publish</button>

    </form>

@endsection