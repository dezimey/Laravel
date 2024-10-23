<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dessie Mae Hore - Resume</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            width: 80%;
            max-width: 900px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .header h1 {
            margin: 10px 0;
            font-size: 2.5em;
            color: #333;
        }
        .header p {
            margin: 5px 0;
            font-size: 1.2em;
            color: #777;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }
        .section ul {
            list-style-type: none;
            padding: 0;
        }
        .section ul li {
            margin-bottom: 10px;
        }
        .section ul li span {
            font-weight: bold;
        }
        .footer {
            text-align: center;
            font-size: 0.9em;
            color: #777;
            margin-top: 20px;
        }
        .certification {
            margin-top: 40px;
            text-align: center;
            font-size: 1em;
            color: #333;
        }
        .certification p {
            margin-bottom: 40px;
        }
        .certification .signature {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="Dessie Mae Hore.jpg" alt="Dessie Mae Hore">
            <h1>{{$info->name}}</h1>
            <p>{{$info->address}}</p>
            <p>Email: {{$info->email}} | Phone: {{$info->phonenumber}}</p>
        </div>

        <div class="section">
            <h2>Objective</h2>
            <p>A student who is highly determined, flexible, and has an adequate academic background and a strong dedication to excellence. In search of a challenging role that fits my talents, hobbies, and proficient ambitions to gain practical experience and contribute to a dynamic team.</p>
        </div>

        <div class="section">
            <h2>Personal Information</h2>
            <ul>
                <li><span>Date of Birth:</span> {{date('F d, Y', strtotime($info->dateofbirth))}}</li>
                <li><span>Birthplace:</span> {{$info->birthplace}}</li>
                <li><span>Sex:</span> {{$info->sex}}</li>
                <li><span>Civil Status:</span> {{$info->civilstatus}}</li>
                <li><span>Religion:</span> {{$info->religion}}</li>
                <li><span>Nationality:</span> {{$info->nationality}}</li>
                <li><span>Father's Name:</span> {{$info->fathersname}}</li>
                <li><span>Mother's Name:</span>{{$info->mothersname}}</li>
            </ul>
        </div>

        <div class="section">
            <h2>Educational Background</h2>
            <ul>
                <li>
                    <span>Tertiary:</span>{{$info->tertiary}}<br>
                    Star Mall Bldg. San Jose St., Baliuag, Bulacan<br>
                    BSIT (2021-Present)
                </li>
                <li>
                    <span>Secondary:</span> La Consolacion University Philippines<br>
                    Malolos, Bulacan (2018-2020)<br>
                    TVL-Computer Programming
                </li>
                <li>
                    <span>Secondary:</span> {{$info->secondary}}<br>
                    Longos, Pulilan, Bulacan (2014-2018)
                </li>
                <li>
                    <span>Primary:</span> {{$info->elementary}}<br>
                    Banga 2nd, Plaridel, Bulacan (2008-2014)
                </li>
            </ul>
        </div>

        <div class="certification">
            <p>I hereby certify that the above information is true and correct and I fully understand that any false statement may lead to the cancellation of this application.</p>
            <div class="signature">
                <p>DESSIE MAE HORE</p>
                <p>Applicant’s Signature</p>
            </div>
        </div>

        <div class="footer">
            <p>© 2024 Dessie Mae Hore. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
