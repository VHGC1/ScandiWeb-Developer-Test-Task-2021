let select = document.getElementById("productType");

type.innerHTML = `
  <label for="book">Weight (KG)</label>
  <input name="book" id="Book" type="text" required/>
  <p>Please provide weight.</p>
`;

select.onchange = () => {
  if (select.value == "books") {
    type.innerHTML = `
      <label for="book">Weight (KG)</label>
      <input name="book" id="Book" type="text" required/>
      <p>Please provide weight.</p>
    `;
  }
  if (select.value == "dvds") {
    console.log("ok")
    type.innerHTML = `
      <label for="dvd">Size (MB)</label>
      <input name="dvd" id="DVD" type="text" required/>
      <p>Please provide size.</p>
    `;
  }
  if (select.value == "furniture") {
    type.innerHTML = `
      <label for="height">Height (CM)</label>
      <input name="height" id="Furniture" type="text" required/>
      <label for="width">Width (CM)</label>
      <input name="width" id="Furniture" type="text" required/>
      <label for="length">Length (CM)</label>
      <input name="length" id="Furniture" type="text" required/>
      <p>Please provide dimensions in HxWxL format.</p>
    `;
  }
};