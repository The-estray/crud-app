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
          <p class="product-desc">${item.description || "No description"}</p>
          <div class="product-actions">
              <a href="/public/view/edit.php?id=${item.id}" class="action-link">Edit</a>
              <button class="action-link delete" onclick="deleteProduct(${item.id})">Delete</button>
          </div>
      </article>
  `;
  }
}

async function deleteProduct(id) {
  if (!confirm("Are you sure?")) {
    return;
  }

  try {
    const res = await fetch(`/public/products/delete?id=${id}`, {
      method: "POST"
    });

    if (res.ok) {
      getProducts();
    } else {
      const err = await res.json();
      alert(err.error || "Could not delete.");
    }

  } catch (error) {
    console.error("Network error:", error);
    alert("Connection error.");
  }
}

getProducts();
