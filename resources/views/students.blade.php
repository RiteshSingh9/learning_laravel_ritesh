<div>
    <h1>Students</h1>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Batch</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->batch }}</td>
            </tr>
        @endforeach
    </table>
</div>
