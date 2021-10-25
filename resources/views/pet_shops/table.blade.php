<div class="table-responsive">
    <table class="table" id="petShops-table">
        <thead>
            <tr>
                <th>Store Name</th>
        <th>Store Owner</th>
        <th>Pets</th>
        <th>Breed</th>
        <th>Price</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($petShops as $petShop)
            <tr>
                <td>{{ $petShop->store_name }}</td>
            <td>{{ $petShop->store_owner }}</td>
            <td>{{ $petShop->pets }}</td>
            <td>{{ $petShop->breed }}</td>
            <td>{{ $petShop->price }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['petShops.destroy', $petShop->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('petShops.show', [$petShop->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('petShops.edit', [$petShop->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
