<!DOCTYPE html>
<html>
<head>
    <style>
        #project_definition {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #project_definition td, #project_definition th {
            border: 1px solid #ddd;
            padding: 6px;
        }

        #project_definition tr:nth-child(even) {
            background-color: #D37676;
        }

        #project_definition tr:hover {
            background-color: #D37676;
        }

        #project_definition th {
            padding-top: 0px;
            padding-bottom: 0px;
            text-align: center;
            background-color: #B80000;
            color: white;
        }
    </style>
</head>
<body>

<center><h1>Data Project</h1></center>

<table id="project_definition">
    <thead>
        <tr>
            <th><small>No</small></th>
            <th><small>Name Project</small></th>
            <th><small>Code Project</small></th>
            <th><small>Contract Value</small></th>
            <th><small>Business Line</small></th>
            <th><small>Date</small></th>
            <th><small>Status</small></th>
            <th><small>Source of Funds</small></th>
            <th><small>Business Schema</small></th>
            <th><small>Contract Duration</small></th>
            <th><small>Warranty Period</small></th>
        </tr>
        @php 
        $no=1;
        @endphp
    </thead>
    <tbody>
        @foreach ($projectDefinition as $u)
            <tr>
            <td>{{ $no++ }}</td>
            <td><small>{{$u->name_project}}</small></td>
            <td><small>{{$u->code_project}}</small></td>
            <td><small>{{$u->contract_value}}</small></td>
            <td><small>{{$u->bussines_line}}</small></td>
            <td><small>{{$u->date}}</small></td>
            <td><small>{{$u->status}}</small></td>
            <td><small>{{$u->source_ofFunds}}</small></td>
            <td><small>{{$u->schema_bussines}}</small></td>
            <td><small>{{$u->contract_duration}}</small></td>
            <td><small>{{$u->warranty_period}}</small></td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
