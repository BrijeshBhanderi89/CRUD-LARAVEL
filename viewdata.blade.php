<!DOCTYPE html>
<html>

<head>
    <title>Forms</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        table {
            width: 90%;
            max-width: 800px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color:rgb(28, 0, 188);
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .edit-btn,
        .delete-btn {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
        }

        .edit-btn {
            background-color:rgb(175, 76, 117);
            color: white;
        }

        .edit-btn:hover {
            background-color:rgb(160, 136, 69);
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
        }

        .delete-btn:hover {
            background-color: #d32f2f;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a {
            padding: 8px 16px;
            margin: 0 5px;
            text-decoration: none;
            color: #333;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .pagination a:hover {
            background-color: #4CAF50;
            color: white;
        }

        .pagination .active {
            background-color: #4CAF50;
            color: white;
        }

        .pagination .disabled {
            color: #ccc;
            cursor: not-allowed;
        }

        .pagination .page-link {
            border-radius: 4px;
        }

        .pagination .w-5 {
            width: 20px;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Salary</th>
            <th>Department</th>
            <th>Message</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        @foreach ($data as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->gender}}</td>
            <td>{{$row->phone}}</td>
            <td>{{$row->salary}}</td>
            <td>{{$row->department}}</td>
            <td>{{$row->message}}</td>
            <td>
                <img src="{{ asset('assets/images/'.$row->image) }}" alt="abc" height="100px" width="100px">
            </td>
            <td>
                <a href="{{ route('employee.edit', $row->id) }}" class="edit-btn">Edit</a>
                <form action="{{ route('employee.destroy', $row->id) }}" method="post" style="display:inline;">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="delete-btn">DELETE</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="pagination">
        {{ $data->links('pagination::bootstrap-4') }}
    </div>

</body>

</html>