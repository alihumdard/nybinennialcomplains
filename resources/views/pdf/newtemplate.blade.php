<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Biennial Statement Filing Form — Quantum Holding PVT LTD</title>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    :root {
        --primary: #1a3c6e;
        --primary-light: #4a7fc7;
        --accent: #f5a81c;
        --accent-light: #f8d576;
        --muted: #6c757d;
        --light-bg: #f8fafc;
        --card-bg: #ffffff;
        --border-color: #e2e8f0;
        --text-dark: #2d3748;
        --text-light: #4a5568;
        --danger: #ef4444;
        --radius: 10px;
        --shadow: 0 5px 20px rgba(20, 30, 60, .08);
        --transition: all 0.3s ease;
    }

    body {
        background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 14px;
        color: var(--text-dark);
        padding: 10px;
        line-height: 1.5;
    }

    .form-card {
        max-width: 900px;
        margin: 0 auto;
        background: var(--card-bg);
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        overflow: hidden;
        border: 1px solid var(--border-color);
    }

    .header {
        background: linear-gradient(135deg, var(--primary), var(--primary-light));
        color: #fff;
        padding: 15px 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        border-radius: 10px 10px 0 0;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        position: relative;
        overflow: hidden;
    }

    .header::after {
        content: '';
        position: absolute;
        top: 0;
        right: -50px;
        width: 150px;
        height: 150px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 50%;
    }

    .logo-spot {
        width: 55px;
        height: 55px;
        border-radius: 10px;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        overflow: hidden;
    }

    .logo-spot img {
        width: 80%;
        height: 80%;
        object-fit: contain;
    }

    .header h1 {
        font-size: 18px;
        font-weight: 700;
        margin: 0;
    }

    .header .muted {
        font-size: 13px;
        opacity: 0.9;
    }

    .header h1 {
        font-size: 18px;
        margin: 0;
    }

    .muted {
        color: var(--light-bg);
        font-size: 12px;
    }

    .body {
        padding: 15px;
    }

    .section {
        background: var(--light-bg);
        border-left: 4px solid var(--accent);
        padding: 12px;
        border-radius: var(--radius);
        margin-bottom: 12px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.03);
    }

    .section-title {
        font-size: 14px;
        font-weight: 600;
        color: var(--primary);
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    label {
        font-weight: 600;
        font-size: 13px;
        margin-bottom: 5px;
        display: block;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 8px;
    }

    @media (max-width: 768px) {
        .grid {
            grid-template-columns: 1fr;
        }
    }

    .form-control {
        width: 100%;
        padding: 8px 10px;
        font-size: 13px;
        border: 1px solid var(--border-color);
        border-radius: 6px;
        background: #fff;
    }

    .form-control:focus {
        border-color: var(--primary-light);
        box-shadow: 0 0 0 2px rgba(74, 127, 199, 0.15);
        outline: none;
    }

    textarea.form-control {
        min-height: 60px;
        resize: vertical;
    }

    .qr-box {
        width: 80px;
        height: 80px;
        border-radius: 6px;
        background: linear-gradient(180deg, #fff, #f2f4f8);
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px dashed var(--border-color);
        font-size: 11px;
        color: var(--primary);
    }

    .info-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 8px;
        font-size: 12px;
    }

    .info-table td {
        padding: 6px;
        border-bottom: 1px solid var(--border-color);
    }

    .form-check {
        display: flex;
        align-items: center;
        margin-top: 10px;
        font-size: 12px;
    }

    .form-check-input {
        margin-right: 6px;
    }

    .btn-group {
        display: flex;
        gap: 8px;
        justify-content: flex-end;
        margin-top: 10px;
    }

    .btn {
        padding: 8px 14px;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 500;
        border: none;
        cursor: pointer;
        transition: var(--transition);
    }

    .btn-light {
        background: #fff;
        border: 1px solid var(--border-color);
    }

    .btn-light:hover {
        background: var(--light-bg);
    }

    .btn-accent {
        background: var(--accent);
        color: #fff;
    }

    .btn-accent:hover {
        background: var(--accent-light);
    }

    .foot {
        background: var(--light-bg);
        padding: 10px;
        border-top: 1px solid var(--border-color);
        font-size: 11px;
        text-align: center;
    }
    </style>
</head>

<body>

    <div class="form-card">
        <div class="header">
            <div class="logo-spot" style="overflow:hidden">
                <img src="{{ asset('assets/images/logocopy.png') }}" alt="Company Logo"
                    style="width:100%;height:100%;object-fit:contain;">
            </div>
            <div>
                <h1>Biennial Statement Filing Form</h1>
                <div class="muted">Please review and complete the remaining fields.</div>
            </div>
        </div>


        <div class="body">
            <!-- Entity Info -->
            <div class="section">
                <div class="section-title">Entity Information</div>
                <div style="display:flex;gap:20px;flex-wrap:wrap">
                    <div style="flex:1;min-width:150px">
                        <label class="muted">Notice Date</label>
                        <input type="date" class="form-control" name="notice_date" value="2025-08-08">
                    </div>
                    <div style="flex:1;min-width:150px">
                        <label class="muted">DOS ID</label>
                        <input type="text" class="form-control" name="dos_id" value="6864315">
                    </div>
                    <div style="flex:1;min-width:150px">
                        <label class="muted">Formation Date</label>
                        <input type="date" class="form-control" name="formation_date" value="2025-06-01">
                    </div>
                </div>
            </div>


            <!-- Business Info -->
            <div class="section">
                <div class="section-title">Business Information</div>
                <label>Business Name</label>
                <input class="form-control" value="Quantum Holding PVT LTD">
                <div style="display:flex;gap:10px;margin-top:8px;flex-wrap:wrap">
                    <textarea class="form-control" style="flex:1">139 Centre St Ste 304</textarea>
                    <div class="qr-box">QR</div>
                </div>
            </div>

            <!-- CEO Info -->
            <div class="section">
                <div class="section-title">Chief Executive Officer</div>
                <div class="grid">
                    <div><label>First Name</label><input class="form-control"></div>
                    <div><label>MI</label><input class="form-control"></div>
                    <div><label>Last Name</label><input class="form-control"></div>
                    <div style="grid-column:1/4"><label>Address Line 1</label><input class="form-control"></div>
                    <div><label>City</label><input class="form-control"></div>
                    <div><label>State</label><input class="form-control"></div>
                    <div><label>Zip</label><input class="form-control"></div>
                    <div style="grid-column:1/4"><label>Country</label><input class="form-control"></div>
                </div>
            </div>

            <!-- Service of Process -->
            <div class="section">
                <div class="section-title">Service of Process Address</div>
                <input class="form-control" placeholder="Same as business address or new address">
            </div>

            <!-- Board Info -->
            <div class="section">
                <div class="section-title">Board of Directors</div>
                <div style="display:flex;gap:10px;flex-wrap:wrap">
                    <div style="flex:1"><label># Women Directors</label><input type="number" class="form-control"></div>
                    <div style="flex:1"><label>Total Directors</label><input type="number" class="form-control"></div>
                </div>
            </div>

            <!-- Payment -->
            <div class="section">
                <div class="section-title">Filing Fee & Payment</div>
                <table class="info-table">
                    <tr>
                        <td>Filing Fee</td>
                        <td>$125.00</td>
                    </tr>
                    <tr>
                        <td>Payment Methods</td>
                        <td>Check or Money Order (Payable to: New York Biennial Compliance)</td>
                    </tr>
                    <tr>
                        <td>Mail To</td>
                        <td>69 State Street, Suite 1300 #2017, Albany, NY 12207</td>
                    </tr>
                    <tr>
                        <td>Processing Time</td>
                        <td>24–48 business hours</td>
                    </tr>
                </table>
            </div>

            <!-- Signer -->
            <div class="section">
                <div class="section-title">Signer’s Declaration</div>
                <div style="display:flex;gap:10px;flex-wrap:wrap">
                    <div style="flex:1"><label>Name</label><input class="form-control"></div>
                    <div style="flex:1"><label>Capacity</label><input class="form-control"></div>
                    <div style="flex:1"><label>Signature</label><input class="form-control"></div>
                    <div style="flex:1"><label>Date</label><input type="date" class="form-control"></div>
                    <div style="flex:1"><label>Email</label><input type="email" class="form-control"></div>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="confirmCheck">
                    <label for="confirmCheck">I confirm the information is true and correct.</label>
                </div>
            </div>

            <!-- Buttons -->
            <div class="btn-group">
                <button type="button" class="btn btn-light" onclick="window.print()">Print</button>
                <button type="submit" class="btn btn-accent">Submit</button>
            </div>
        </div>

        <div class="foot">
            This is a private compliance assistance service and is not affiliated with the New York State Department of
            State.
        </div>
    </div>

</body>

</html>