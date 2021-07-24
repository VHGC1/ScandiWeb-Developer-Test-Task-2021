let select = document.getElementById("productType");

type.innerHTML = `
  <label for="book">Weight (KG)</label>
  <input name="book" id="weight" type="text" required/>
  <p>Please provide weight.</p>
`;

select.onchange = () => {
  if (select.value == "books") {
    type.innerHTML = `
      <label for="book">Weight (KG)</label>
      <input name="book" id="weight" type="text" required/>
      <p>Please provide weight.</p>
    `;
  }
  if (select.value == "dvds") {
    type.innerHTML = `
      <label for="dvd">Size (MB)</label>
      <input name="dvd" id="size" type="text" required/>
      <p>Please provide size.</p>
    `;
  }
  if (select.value == "furniture") {
    type.innerHTML = `
      <label for="height">Height (CM)</label>
      <input name="height" id="height" type="text" required/>
      <label for="width">Width (CM)</label>
      <input name="width" id="width" type="text" required/>
      <label for="length">Length (CM)</label>
      <input name="length" id="length" type="text" required/>
      <p>Please provide dimensions in HxWxL format.</p>
    `;
  }
};
