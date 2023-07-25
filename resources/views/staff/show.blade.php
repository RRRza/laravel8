<x-bootstrap title="{{ $product->title }}">
    <div class="row g-4">
        <div class="col-lg-12">
            <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
        </div>
    </div>

    <div class="row my-4">
        <div class="col-lg-4">
            <img src="{{ $product->photo }}" class="img-fluid img-thumbnail" />
        </div>
        <div class="col-lg-8">

            <h2>{{ $product->title }}</h2>
            <div>{{ $product->birthday }} </div>
            <hr />
            <div>
                <strong>Salary: </strong>
                <span class="fs-2 text-warning">฿{{ $product->price }}</span>
            </div>
            <hr />
            <div>
                <strong>Phone: </strong>
                <span>{{ $product->stock }}</span>
            </div>
        </div>
    </div>
</x-bootstrap>