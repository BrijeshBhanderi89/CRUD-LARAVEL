<!DOCTYPE html>
<html>

<head>
    <title>Forms</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #eaeaea;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            width: 450px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 16px;
            font-weight: bold;
            color: #444;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            font-size: 15px;
            border: 2px solid #ccc;
            border-radius: 6px;
            background-color: #f9f9f9;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #007BFF;
            outline: none;
            background-color: #fff;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #218838;
        }

        .submit-btn:active {
            background-color: #1e7e34;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Employee Information</h2>
        <form action="{{ route('employee.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Employee Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option selected disabled>--Select Gender--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" value="{{ $employee->phone ?? '' }}" required>
            </div>

            <div class="form-group">
                <label for="salary">Salary</label>
                <input type="number" id="salary" name="salary" value="{{ $employee->salary ?? '' }}" required>
            </div>

            <div class="form-group">
                <label for="department">Department</label>
                <select id="department" name="department" required>
                    <option selected disabled>--Select Department--</option>
                    <option value="Frontend">Frontend</option>
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="C Language">C Language</option>
                    <option value="C++ Language">C++ Language</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="jQuery">jQuery</option>
                    <option value="Media Query">Media Query</option>
                    <option value="Backend Developer">Backend Developer</option>
                    <option value="PHP & Laravel Development">PHP & Laravel Development</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" placeholder="Write a message..."></textarea>
            </div>

            <div class="form-group">
                <label>image</label>
                <input type="file" name="image">
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>

</body>

</html>
