<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cash Award Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.min.css" integrity="sha512-i1b/nzkVo97VN5WbEtaPebBG8REvjWeqNclJ6AItj7msdVcaveKrlIIByDpvjk5nwHjXkIqGZscVxOrTb9tsMA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom, #f5f5f5, #e0e0e0);
        }

        .top-bar {
            background-color: green;
            color: #fff;
            padding: 8px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
        }

        .header {
            background-color: #ffffff;
            padding: 20px 10px;
            text-align: center;
            border-bottom: 3px solid #8b0000;
        }

        .header h2 {
            color: #003366;
            margin: 0;
            font-size: 24px;
        }

        .sub-heading {
            color: #555;
            font-size: 16px;
        }

        .container {
            max-width: 350px;
            margin: 20px auto;
            background-color: #fff;
            padding: 25px 20px;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .container h3 {
            margin-bottom: 10px;
            font-size: 22px;
            color: #222;
        }

        .container p {
            color: green;
            font-size: 12px;
            margin-bottom: 22px;
        }

        label {
            display: block;
            text-align: left;
            font-weight: 600;
            margin-bottom: 6px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #bbb;
            font-size: 16px;
            box-sizing: border-box;
            margin-bottom: 20px;
            background-color: #fafafa;
        }

        .btn-submit {
            background-color: green;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #b71c1c;
        }

        .footer-note {
            font-size: 13px;
            color: #777;
            margin-top: 20px;
        }

        @media (max-width: 480px) {
            .container {
                margin: 20px;
            }
        }

    </style>
</head>
<body>

    <div class="top-bar">
        <div><i class="fa fa-envelope"></i>
            Email: sportsrhry[at]gmail[dot]com</div>
        <div><i class="fa fa-phone"></i>
            0172-2992868</div>
    </div>

    <div class="header">
        <h2>DEPARTMENT OF SPORTS HARYANA</h2>
        <div class="sub-heading">Cash Award Management System</div>
    </div>

    <div class="container">
        <h3>Application for Cash Award</h3>
        <p>Applications invited for achievements on or after <strong>01-04-2024</strong></p>

        <form method="POST" action="#">
            <div>
                <label for="familyId">Enter Family ID <span style="color:red">*</span></label>
                <input type="text" id="familyId" name="family_id" required />
                <button type="submit" class="btn-submit">Submit</button>
            </div>

            <div class="d-none">
                <label for="familyId">Enter Member ID <span style="color:red">*</span></label>
                <input type="text" id="" name="family_id" required />
                <button type="submit" class="btn-submit">Submit</button>
            </div>

            <div class="d-none">
                <label for="familyId">Enter Otp <span style="color:red">*</span></label>
                <input type="text" id="otp" name="otp" required />
                <button type="submit" class="btn-submit">Submit</button>
            </div>
        </form>

        <div class="footer-note">
            Please ensure your Family ID is correct to proceed with application.
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        document.getElementById('familyId').addEventListener('input', function(event) {
            const originalValue = event.target.value;
            const cleanedValue = originalValue.replace(/[^a-zA-Z0-9]/g, '');

            if (originalValue !== cleanedValue) {
                event.target.value = cleanedValue;
            }

            if (cleanedValue.length > 8) {
                const part1 = cleanedValue.slice(0, 8);
                const part2 = cleanedValue.slice(8);

                console.log(part1);
                console.log(part2);

                event.target.value = part1;
            }
        });

        document.getElementById('otp').addEventListener('input', function(event) {
            const originalValue = event.target.value;
            const numericValue = originalValue.replace(/[^0-9]/g, '').slice(0, 6);
            event.target.value = numericValue;
        });

    </script>
</body>
</html>
