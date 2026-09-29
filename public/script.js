async function getProducts() {
  const res = await fetch("/public/products");
  const data = await res.json();

  const container = document.getElementById("product-list");
  container.innerHTML = "";

  for (const item of data) {
    container.innerHTML += `
      <article class="product-card">
          <div class="product-header">
              <h2 class="product-title">${item.title}</h2>
              <span class="product-price">$${parseFloat(item.price).toFixed(2)}</span>
          </div>
          <p class="product-desc">${item.description || "Нет описания"}</p>
          <div class="product-actions">
              <a href="/public/view/edit.php?id=${item.id}" class="action-link">Редактировать</a>
              <button class="action-link delete" onclick="deleteProduct(${item.id})">Удалить</button>
          </div>
      </article>
  `;
  }
}

getProducts();
