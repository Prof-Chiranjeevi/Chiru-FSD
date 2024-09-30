<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color and Font Styles</title>
    <style>
        /* Body Style */
        body {
            font-family: 'Arial', sans-serif; /* Default Font */
            background-color: #f4f4f4; /* Light Gray Background */
            color: #333; /* Default Text Color */
        }
        
        /* Header Style */
        header {
            background-color: #007BFF; /* Blue Background */
            color: white; /* White Text */
            text-align: center;
            padding: 20px;
            font-size: 24px; /* Header Font Size */
        }

        /* Subheading Style */
        h2 {
            color: #28a745; /* Green Color */
            font-family: 'Georgia', serif; /* Georgia Font */
            font-weight: bold; /* Bold Text */
        }

        /* Table Style */
        table {
            width: 90%; /* Table Width */
            margin: 20px auto; /* Center Table */
            border-collapse: collapse; /* Remove Space Between Borders */
            border-radius: 8px; /* Rounded Corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Shadow Effect */
        }

        th {
            background-color: #007BFF; /* Blue Header */
            color: white; /* White Header Text */
            padding: 15px; /* Header Padding */
            font-family: 'Courier New', monospace; /* Monospace Font for Header */
        }

        td {
            background-color: white; /* White Background for Cells */
            padding: 15px; /* Cell Padding */
            border: 1px solid #ddd; /* Light Gray Border */
            font-family: 'Arial', sans-serif; /* Arial Font for Cells */
        }

        /* Specific Cell Styles */
        td:nth-child(1) {
            color: #007BFF; /* Blue for Employee ID */
            font-weight: bold; /* Bold Text */
        }

        td:nth-child(2) {
            color: #28a745; /* Green for Name */
            font-style: italic; /* Italic Style */
        }

        td:nth-child(3) {
            color: #6c757d; /* Gray for Email */
            text-decoration: underline; /* Underlined */
        }

        td:nth-child(4) {
            text-align: center; /* Center Align for Photo */
        }

        td:nth-child(5) {
            text-align: center; /* Center Align for Actions */
        }

        /* Footer Style */
        footer {
            background-color: #007BFF; /* Blue Background */
            color: white; /* White Text */
            text-align: center; /* Centered Text */
            padding: 20px; /* Padding */
            position: relative; /* Positioning */
            bottom: 0; /* Align to Bottom */
            width: 100%; /* Full Width */
        }

        /* Icon Styles */
        .icon {
            cursor: pointer; /* Pointer Cursor */
            font-size: 18px; /* Icon Size */
        }
        .edit-icon {
            color: #28a745; /* Green Edit Icon */
        }
        .delete-icon {
            color: #dc3545; /* Red Delete Icon */
        }
    </style>
</head>
<body>

<header>
    <h1>Color and Font Styles Example</h1>
</header>

<h2>Example of Table with Different Styles</h2>

<table>
    <thead>
        <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Photo</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>001</td>
            <td>Ratna Kumar</td>
            <td>ratnakumar@klh.edu.in</td>
            <td><img src="https://via.placeholder.com/60" alt="Ratna Kumar"></td>
            <td>
                <span class="icon edit-icon">&#9998;</span>
                <span class="icon delete-icon">&#128465;</span>
            </td>
        </tr>
        <!-- Additional rows can be added here -->
    </tbody>
</table>

<footer>
    <p>&copy; 2024 Example Company. All rights reserved.</p>
</footer>

</body>
</html>
