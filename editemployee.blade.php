<!DOCTYPE html>
<html>

<head>
    <title>Forms</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            cursor: pointer;
        }

        .submit-btn {
            background-color: rgb(94, 76, 175);
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: rgb(160, 69, 104);
        }

        .form-group select:focus,
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: rgb(175, 139, 76);
        }

        .image-preview {
            display: block;
            max-width: 100%;
            margin-top: 10px;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <form action="{{ route('employee.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label for="name">Employee Name</label>
                <input type="text" id="name" name="name" value="{{ $employee->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ $employee->email }}" required>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <label><input type="radio" name="gender" value="Male" @if($employee->gender == 'Male') checked @endif> Male</label>
                <label><input type="radio" name="gender" value="Female" @if($employee->gender == 'Female') checked @endif> Female</label>
                <label><input type="radio" name="gender" value="Other" @if($employee->gender == 'Other') checked @endif> Other</label>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" value="{{ $employee->phone }}" required>
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="number" id="salary" name="salary" value="{{ $employee->salary }}" required>
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <select id="department" name="department" required>
                    <option disabled selected>--Select Department--</option>
                    <option value="Frontend" @if ($employee->department == "Frontend") selected @endif>Frontend</option>
                    <option value="HTML" @if ($employee->department == "HTML") selected @endif>HTML</option>
                    <option value="CSS" @if ($employee->department == "CSS") selected @endif>CSS</option>
                    <option value="C Language" @if ($employee->department == "C Language") selected @endif>C Language</option>
                    <option value="C++ Language" @if ($employee->department == "C++ Language") selected @endif>C++ Language</option>
                    <option value="JavaScript" @if ($employee->department == "JavaScript") selected @endif>JavaScript</option>
                    <option value="jQuery" @if ($employee->department == "jQuery") selected @endif>jQuery</option>
                    <option value="Media Query" @if ($employee->department == "Media Query") selected @endif>Media Query</option>
                    <option value="Backend Developer" @if ($employee->department == "Backend Developer") selected @endif>Backend Developer</option>
                    <option value="PHP & Laravel Development" @if ($employee->department == "PHP & Laravel Development") selected @endif>PHP & Laravel Development</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" placeholder="Write a message...">{{ $employee->message }}</textarea>
            </div>

            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" value="{{ $employee->image }}">
            </div>

            <button type="submit" class="submit-btn" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>