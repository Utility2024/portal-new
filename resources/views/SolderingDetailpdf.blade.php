<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soldering Measurement Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header, .footer {
            width: 100%;
            position: fixed;
            text-align: center;
            background-color: #ffffff;
        }
        .header {
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #dddddd;
        }
        .header h1 {
            margin: 0;
        }
        .footer {
            bottom: 0;
            font-size: 12px;
            border-top: 1px solid #dddddd;
            padding: 10px;
        }
        .footer p {
            margin: 0;
        }
        .content {
            margin-top: 80px;
            padding-bottom: 80px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 12px;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .button-success {
            background-color: #4CAF50;
            color: white;
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .button-danger {
            background-color: #f44336;
            color: white;
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Soldering Measurement Report</h1>
    </div>
    
    <div class="content">
        <p>E1 (Tip solder to ground): &lt; < 10 ohm</p>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Register No</th>
                    <th>Area</th>
                    <th>Location</th>
                    <th>E1</th>
                    <th>Judgement</th>
                    <th>Remarks</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($records as $record)
                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->soldering->register_no }}</td>
                    <td>{{ $record->soldering->area }}</td>
                    <td>{{ $record->soldering->location }}</td>
                    <td>{{ $record->e1 }}</td>
                    <td>
                        @if ($record->judgement == 'OK')
                            <button class="button-success">OK</button>
                        @else
                            <button class="button-danger">NG</button>
                        @endif
                    </td>
                    <td>{{ $record->remarks }}</td>
                    <td>{{ $record->created_at->format('Y-m-d') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="footer">
        <p>QR-ADM-22-K022 (Rev-00) | Print on: {{ \Carbon\Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s') }}</p>
    </div>
</body>
</html>
