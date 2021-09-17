<div class="table-responsive">
    <table class="table" id="faculties-table">
        <thead>
            <tr>
                <th>Lastname</th>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Birthdate</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Citizenship</th>
        <th>Religion</th>
        <th>Subject</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($faculties as $faculty)
            <tr>
                <td>{{ $faculty->Lastname }}</td>
            <td>{{ $faculty->Firstname }}</td>
            <td>{{ $faculty->Middlename }}</td>
            <td>{{ $faculty->Birthdate }}</td>
            <td>{{ $faculty->Gender }}</td>
            <td>{{ $faculty->Address }}</td>
            <td>{{ $faculty->Citizenship }}</td>
            <td>{{ $faculty->Religion }}</td>
            <td>{{ $faculty->Subject }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['faculties.destroy', $faculty->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('faculties.show', [$faculty->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('faculties.edit', [$faculty->id]) }}" class='btn btn-default btn-xs'>
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
