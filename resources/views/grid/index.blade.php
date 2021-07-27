<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grid</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Grid</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-primary" href="{{ route('branches.index') }}"> Branches</a>
                <a class="btn btn-secondary" href="{{ route('employees.index') }}"> Employees</a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th></th>
            @foreach ($branches as $branch)
            <th>{{$branch->name}}</th>
            @endforeach
        </tr>
        @foreach ($employees as $employee)
            <tr>
                <td>{{$employee->firstname}} {{$employee->lastname}}</td>
                @foreach ($branches as $i=>$branch)
                    <td>
                    @foreach($branch->employees as $branchEmployee)
                            @if($branchEmployee->id == $employee->id)
                            ✓
                            @endif
                        @endforeach
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
