<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product</title>
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
            max-width: 420px;
            background: #ffffff;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            padding: 32px 28px;
        }

        header {
            margin-bottom: 28px;
        }

        h1 {
            font-size: 19px;
            font-weight: 600;
            letter-spacing: -0.03em;
            color: #111111;
        }

        p.subtitle {
            font-size: 13px;
            color: #737373;
            margin-top: 4px;
            letter-spacing: -0.01em;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        label {
            font-size: 12px;
            font-weight: 500;
            color: #525252;
            letter-spacing: -0.01em;
        }

        .input-wrap {
            position: relative;
            display: flex;
            align-items: center;
        }

        .currency {
            position: absolute;
            left: 12px;
            font-size: 14px;
            color: #a3a3a3;
            pointer-events: none;
            user-select: none;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            background-color: #ffffff;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            padding: 10px 12px;
            font-size: 14px;
            font-family: inherit;
            color: #111111;
            outline: none;
            transition: border-color 0.15s ease;
        }

        .input-wrap input {
            padding-left: 26px;
        }

        input::placeholder,
        textarea::placeholder {
            color: #a3a3a3;
        }

        input:hover,
        textarea:hover {
            border-color: #d4d4d4;
        }

        input:focus,
        textarea:focus {
            border-color: #111111;
        }

        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        textarea {
            min-height: 90px;
            resize: vertical;
            line-height: 1.5;
        }

        .actions {
            margin-top: 6px;
            display: flex;
            align-items: center;
            justify-content: space-between;
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

        button[type="submit"] {
            background-color: #111111;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 9px 16px;
            font-size: 13px;
            font-weight: 500;
            font-family: inherit;
            cursor: pointer;
            transition: opacity 0.15s ease;
        }

        button[type="submit"]:hover {
            opacity: 0.85;
        }

        button[type="submit"]:active {
            opacity: 0.7;
        }
    </style>
</head>

<body>

    <main class="container">
        <header>
            <h1>New Product</h1>
            <p class="subtitle">Add a new item to the store catalog.</p>
        </header>

        <form id="createProductForm">
            <div class="field">
                <label for="title">Title</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    placeholder="Wireless Trackpad"
                    autocomplete="off"
                    required>
            </div>

            <div class="field">
                <label for="price">Price</label>
                <div class="input-wrap">
                    <span class="currency">$</span>
                    <input
                        type="number"
                        id="price"
                        name="price"
                        step="0.01"
                        min="0"
                        placeholder="0.00"
                        required>
                </div>
            </div>

            <div class="field">
                <label for="description">Description</label>
                <textarea
                    id="description"
                    name="description"
                    placeholder="Provide a brief summary of the item..."
                    required></textarea>
            </div>

            <div class="actions">
                <a href="../index.php" class="back-link">Cancel</a>
                <button type="submit" id="submitBtn">Create product</button>
            </div>
        </form>
    </main>

    <script src="/public/create.js"></script>
</body>

</html>