<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
            padding: 48px 20px;
            -webkit-font-smoothing: antialiased;
        }

        .container {
            width: 100%;
            max-width: 720px;
            margin: 0 auto;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 32px;
        }

        .header-title h1 {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: -0.03em;
            color: #111111;
        }

        .header-title p {
            font-size: 13px;
            color: #737373;
            margin-top: 4px;
            letter-spacing: -0.01em;
        }

        .btn-create {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background-color: #111111;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            padding: 9px 14px;
            font-size: 13px;
            font-weight: 500;
            transition: opacity 0.15s ease;
        }

        .btn-create:hover {
            opacity: 0.85;
        }

        .products-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .product-card {
            background: #ffffff;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            padding: 20px 24px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            transition: border-color 0.15s ease;
        }

        .product-card:hover {
            border-color: #d4d4d4;
        }

        .product-header {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            gap: 12px;
        }

        .product-title {
            font-size: 15px;
            font-weight: 600;
            color: #111111;
            letter-spacing: -0.01em;
        }

        .product-price {
            font-size: 14px;
            font-weight: 500;
            color: #111111;
            font-variant-numeric: tabular-nums;
        }

        .product-desc {
            font-size: 13px;
            color: #737373;
            line-height: 1.5;
            word-break: break-word;
        }

        .product-actions {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-top: 4px;
            padding-top: 10px;
            border-top: 1px solid #f5f5f5;
        }

        .action-link {
            font-size: 12px;
            font-weight: 500;
            color: #737373;
            text-decoration: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            transition: color 0.15s ease;
        }

        .action-link:hover {
            color: #111111;
        }

        .action-link.delete:hover {
            color: #e11d48;
        }

        /* Состояние пустого списка */
        .empty-state {
            background: #ffffff;
            border: 1px dashed #e5e5e5;
            border-radius: 12px;
            padding: 48px 24px;
            text-align: center;
        }

        .empty-state p {
            font-size: 13px;
            color: #737373;
            margin-bottom: 16px;
        }
    </style>
</head>

<body>

    <main class="container">
        <header>
            <div class="header-title">
                <h1>Products</h1>
                <p>Manage your inventory and catalog items.</p>
            </div>
            <a href="/public/view/create.php" class="btn-create">
                + New product
            </a>
        </header>

        <!-- Контейнер, куда твой JS будет вставлять карточки через innerHTML -->
        <section class="products-list" id="product-list">
            <!-- Пример дефолтной карточки (заменится динамикой из JS) -->
            <article class="product-card">
                <div class="product-header">
                    <h2 class="product-title">Wireless Trackpad</h2>
                    <span class="product-price">$129.00</span>
                </div>
                <p class="product-desc">Rechargeable trackpad with Force Touch, Bluetooth and USB-C connectivity.</p>
                <div class="product-actions">
                    <a href="/frontend/posts/edit.php?id=1" class="action-link">Edit</a>
                    <button class="action-link delete" data-id="1">Delete</button>
                </div>
            </article>
        </section>
    </main>

    <!-- Твой скрипт для fetch запроса списка -->
    <script src="/public/readAll.js"></script>
</body>

</html>

