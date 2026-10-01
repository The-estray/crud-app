<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #fafafa;
            color: #111111;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 32px 16px;
            -webkit-font-smoothing: antialiased;
        }

        .container {
            width: 100%;
            max-width: 480px;
            background: #ffffff;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            padding: 32px 28px;
        }

        .header {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 16px;
        }

        h1 {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: -0.03em;
            color: #111111;
        }

        .price {
            font-size: 18px;
            font-weight: 600;
            color: #111111;
            font-variant-numeric: tabular-nums;
        }

        .description {
            font-size: 14px;
            color: #525252;
            line-height: 1.6;
            word-break: break-word;
            margin-bottom: 24px;
        }

        .actions {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 16px;
            border-top: 1px solid #f5f5f5;
        }

        .back-link {
            font-size: 13px;
            color: #737373;
            text-decoration: none;
            transition: color 0.15s ease;
        }

        .back-link:hover {
            color: #111111;
        }

        .edit-btn {
            background-color: #111111;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            padding: 8px 14px;
            font-size: 13px;
            font-weight: 500;
            transition: opacity 0.15s ease;
        }

        .edit-btn:hover {
            opacity: 0.85;
        }
    </style>
</head>

<body>

    <main class="container">
        <div class="header">
            <h1 id="product-title">Loading...</h1>
            <span class="price" id="product-price"></span>
        </div>

        <p class="description" id="product-description"></p>

        <div class="actions">
            <a href="/public/" class="back-link">← Back to catalog</a>
            <a href="#" id="edit-link" class="edit-btn">Edit</a>
        </div>
    </main>

    <script src="/public/show.js"></script>
</body>

</html>