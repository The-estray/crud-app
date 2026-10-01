const params = new URLSearchParams(window.location.search);
const id = params.get("id");

if (!id) {
  alert("Missing product ID");
  window.location.href = "/public/";
}

async function loadProduct() {
  try {
    const res = await fetch(`/public/products/show?id=${id}`);

    if (!res.ok) {
      alert("Product not found");
      window.location.href = "/public/";
      return;
    }

    const product = await res.json();

    document.getElementById("product-title").textContent = product.title;
    document.getElementById("product-price").textContent =
      `$${parseFloat(product.price).toFixed(2)}`;
    document.getElementById("product-description").textContent =
      product.description || "No description provided.";
    document.getElementById("edit-link").href =
      `/public/view/update.php?id=${product.id}`;
  } catch (error) {
    console.error("Failed to load product:", error);
    alert("Connection error");
  }
}

loadProduct();
