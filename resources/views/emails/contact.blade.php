<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Inquiry from {{ $contact->name }}</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #0b1424;
            color: #f1f4fa;
            margin: 0;
            padding: 30px 15px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #111e38;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 32px;
        }
        .header {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 20px;
            margin-bottom: 24px;
        }
        .brand {
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 0.05em;
            color: #38bdf8;
            text-transform: uppercase;
        }
        .tagline {
            font-size: 13px;
            color: #94a3b8;
            margin-top: 4px;
        }
        .field {
            margin-bottom: 18px;
        }
        .field-label {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: #94a3b8;
            margin-bottom: 4px;
        }
        .field-value {
            font-size: 15px;
            color: #f1f4fa;
            line-height: 1.5;
        }
        .message-box {
            background-color: #0b1424;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 8px;
            padding: 16px;
            margin-top: 8px;
            white-space: pre-wrap;
            font-size: 14px;
            line-height: 1.6;
        }
        .footer {
            margin-top: 30px;
            padding-top: 18px;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            font-size: 12px;
            color: #64748b;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="brand">HAIDER ALI // PORTFOLIO INQUIRY</div>
            <div class="tagline">Laravel & PHP Developer | Web Developer & UI/UX Designer</div>
        </div>

        <div class="field">
            <div class="field-label">Sender Name</div>
            <div class="field-value"><strong>{{ $contact->name }}</strong></div>
        </div>

        <div class="field">
            <div class="field-label">Email Address</div>
            <div class="field-value"><a href="mailto:{{ $contact->email }}" style="color: #38bdf8;">{{ $contact->email }}</a></div>
        </div>

        @if($contact->subject)
        <div class="field">
            <div class="field-label">Subject</div>
            <div class="field-value">{{ $contact->subject }}</div>
        </div>
        @endif

        @if($contact->project_type)
        <div class="field">
            <div class="field-label">Project Type</div>
            <div class="field-value">{{ $contact->project_type }}</div>
        </div>
        @endif

        <div class="field">
            <div class="field-label">Message</div>
            <div class="message-box">{{ $contact->message }}</div>
        </div>

        <div class="footer">
            Submitted from IP: {{ $contact->ip_address ?? 'N/A' }} at {{ optional($contact->created_at)->format('Y-m-d H:i:s') ?? now()->format('Y-m-d H:i:s') }}
        </div>
    </div>
</body>
</html>

