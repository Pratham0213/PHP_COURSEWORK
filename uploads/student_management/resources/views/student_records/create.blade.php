<!DOCTYPE html>
<html>
<head>
    <title>Create Student Record</title>
</head>
<body>
    <h1>Create Student Record</h1>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="{{ route('student_records.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="roll_no">Roll No:</label>
        <input type="text" name="roll_no" id="roll_no" required>
        <br>
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob" required>
        <br>
        <label for="admission_no">Admission No:</label>
        <input type="text" name="admission_no" id="admission_no" required>
        <br>
        <label for="class">Class:</label>
        <input type="text" name="class" id="class" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>