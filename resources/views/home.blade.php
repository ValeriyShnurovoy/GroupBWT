@foreach($employees as $employee)
    {{$employee->country}}
    {{$employee->user->name}}
    {{$employee->start_date}}
    {{$employee->finish_date}}
    {{$employee->company->name}}
    {{$employee->company->country->country}}
    <br>
@endforeach
