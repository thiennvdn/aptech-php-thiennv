<div class="container mt-3">
    <div class="row d-flex flex-row">
        <div class="col-3 d-flex justify-content-around align-items-center">
            <form action="{{route('articles.index')}}" method="get">
                <button type="submit" class="btn btn-sm btn-primary text-uppercase">home</button>
            </form>
            <form action="{{route('categories.index')}}" method="get">
                <button type="submit" class="btn btn-sm btn-info text-uppercase">category</button>
            </form>
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center">
            <h1 class="text-uppercase font-weight-bold text-center">laravel crud articles</h1>
        </div>
        <div class="col-3 d-flex justify-content-end align-items-center">
            <form action="{{route('articles.create')}}" method="get">
                <button type="submit" class="btn btn-sm btn-success text-uppercase">create new articles</button>
            </form>
        </div>
    </div>
</div>
